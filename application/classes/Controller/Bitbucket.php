<?php if (!defined('SYSPATH')) exit('No direct script access allowed');

class Controller_Bitbucket extends Controller_Curlrequest {
    public function action_index(){
//         echo 'Bitbucket_index';var_dump($_SESSION);
//        if(!empty($_SESSION['userRequestData']['url_provider']) && $_SESSION['userRequestData']['url_provider'] == 'bitbucket.org'){ echo 'hi';
            if(!empty($_SESSION['userRequestData']['url_username']) && !empty($_SESSION['userRequestData']['url_repository']))
                $_SESSION['userRequestData']['issues_endpoint_bitbucket'] = 'https://bitbucket.org/api/1.0/repositories/'.$_SESSION['userRequestData']['url_username'].'/'.$_SESSION['userRequestData']['url_repository'].'/issues';
//            }
            echo 'Bitbucket userRequestData:';var_dump($_SESSION);
            Request::factory("Bitbucket/curlassignment")->execute();
        }


    function action_curlassignment()
    {
        $this->service_url = $_SESSION['userRequestData']['issues_endpoint_bitbucket'];
        $this->fields = array(
            'title' => $_SESSION['userRequestData']['title'],
            'content' => $_SESSION['userRequestData']['desc']
        );
        $this->curl_post_datatype = 'urlparams';
        $this->user = base64_decode($_SESSION['userRequestData']['username']);
        $this->pwd = base64_decode($_SESSION['userRequestData']['password']);
        echo 'Bitbucket service_url:';var_dump($this->service_url);
        $responsejson = $this->action_curlreq();//Request::factory("Curlrequest/curlreq")->execute();
        echo 'responseData:'; print_r($responsejson);
        if(!empty($responsejson['message']) && !empty($responsejson['documentation_url'])){
            $this->result_content = "<span class='error'>Your issue could not be registered!!. ".$responsejson['message']."</span><br/>For more information, refer to ".Html::anchor($responsejson['documentation_url'], $responsejson['documentation_url'])."<br/>";//<a href='".$responsejson['documentation_url']."'>".$responsejson['documentation_url']."</a>";
        }
        else {
            if(!empty($responsejson['html_url'])){
                $this->result_content = "<span class='success'>You have successfully opened an issue </span>which can be accessed at ".Html::anchor($responsejson['html_url'], $responsejson['html_url'])."<br/>";
            }
        }
        if(!empty($this->result_content)){
            $this->action_content();
        }

    }
} 