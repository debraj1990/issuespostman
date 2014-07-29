<?php if (!defined('SYSPATH')) exit('No direct script access allowed');

class Controller_Github extends Controller_Curlrequest
{
    public function action_index()
    {

        if (!empty($_SESSION['userRequestData']['url_username']) && !empty($_SESSION['userRequestData']['url_repository'])) {
            $_SESSION['userRequestData']['issues_endpoint_github'] = 'https://api.github.com/repos/' . $_SESSION['userRequestData']['url_username'] . '/' . $_SESSION['userRequestData']['url_repository'] . '/issues';
        }

        Request::factory("Github/curlassignment")->execute();
    }


    function action_curlassignment()
    {
        $this->service_url = $_SESSION['userRequestData']['issues_endpoint_github'];
        $this->fields = array(
            'title' => $_SESSION['userRequestData']['title'],
            'body' => $_SESSION['userRequestData']['desc']
        );
        $this->curl_post_datatype = 'json';
        $this->user = base64_decode($_SESSION['userRequestData']['username']);
        $this->pwd = base64_decode($_SESSION['userRequestData']['password']);

        $responsejson = $this->action_curlreq();
//        echo 'responseData:'; print_r($responsejson);

        if (empty($responsejson->error_message) && !empty($responsejson->successful_message)) {
            $responseText = "<span class='success'>You have successfully opened an issue. </span><br/>" . $responsejson->successful_message;
            if (!empty($responsejson->json->html_url) && !empty($responsejson->json->number)) {
                $responseText .= "<br/>Issue can be accessed at " . Html::anchor($responsejson->json->html_url, $responsejson->json->html_url) . "<br/>";
            }
            $this->result_content = $responseText;
        } elseif (!empty($responsejson->error_message) && empty($responsejson->successful_message)) {
            //error condition
            $responseText = "<span class='error'>Your issue could not be registered!!. </span><br/>" . $responsejson->error_message;
            if (!empty($responsejson->json->message) && !empty($responsejson->json->documentation_url)) {
                $responseText .= "<br/><span class='error'>" . $responsejson->json->message . "</span><br/>For more information, refer to " . Html::anchor($responsejson->json->documentation_url, $responsejson->json->documentation_url) . "<br/>"; //<a href='".$responsejson['documentation_url']."'>".$responsejson['documentation_url']."</a>";
            }
            $this->result_content = $responseText;
        }
        if (!empty($this->result_content)) {
            $this->action_content();
        }

    }
} 