<?php if (!defined('SYSPATH')) exit('No direct script access allowed');

class Controller_Misc extends Controller_Curlrequest {
    public function action_index(){

        if(!empty($_SESSION['userRequestData']['repourl'])){
            $_SESSION['userRequestData']['issues_endpoint_misc'] = implode('/',$_SESSION['userRequestData']['repourl']);
            }

        Request::factory("Misc/curlassignment")->execute();
    }


    function action_curlassignment()
    {
        $this->service_url = $_SESSION['userRequestData']['issues_endpoint_misc'];
        $this->fields = array(
            'title' => $_SESSION['userRequestData']['title'],
            'content' => $_SESSION['userRequestData']['desc']
        );
        $this->curl_post_datatype = 'urlparams';
        $this->user = base64_decode($_SESSION['userRequestData']['username']);
        $this->pwd = base64_decode($_SESSION['userRequestData']['password']);

        $responsejson = $this->action_curlreq();
//        echo 'responseData:'; print_r($responsejson);
        if(empty($responsejson->error_message) && !empty($responsejson->successful_message)){
            $responseText = "<span class='success'>You have successfully opened an issue. </span><br/>".$responsejson->successful_message;
            if(!empty($responsejson->json->resource_uri) && !empty($responsejson->json->local_id)){
                $responseText.= "<br/>Issue can be accessed at ".Html::anchor('https://bitbucket.org/debraj1990/issuespostman/issue/'.$responsejson->json->local_id, 'https://bitbucket.org/debraj1990/issuespostman/issue/'.$responsejson->json->local_id)."<br/>";
            }
            $this->result_content = $responseText;
        }
        elseif(!empty($responsejson->error_message) && empty($responsejson->successful_message)){
            //error condition
            $responseText = "<span class='error'>Your issue could not be registered!!. </span><br/>".$responsejson->error_message;

            $this->result_content = $responseText;
        }
        if(!empty($this->result_content)){
            $this->action_content();
        }

    }
} 