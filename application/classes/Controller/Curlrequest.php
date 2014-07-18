<?php if (!defined('SYSPATH')) exit('No direct script access allowed');

class Controller_Curlrequest extends Controller_Base {
    protected $service_url;
    protected $fields = array();
    protected $user;
    protected $pwd;
    protected $curl_post_datatype;
//    protected $result_content;

    public function action_content(){
//        $this->template->styles = array(
//            'media/css/custom.css'
//        );
//        echo 'pre:'.$this->result_content;
//         $this->template->content = $this->result_content;
//echo 'post:';print_r($this->template->file);
//        $this->action_contentrender();
        $view = View::factory('issue_form');
        $view->content = $this->result_content;
//        $this->response->body('see hello world');
        echo $this->result_content;
        session_destroy();
    }

    function action_curlreq()
    {
        $fields_string = '';
        try
        {
            if($this->curl_post_datatype === 'json'){
                $fields_string = json_encode($this->fields);
            }
            elseif($this->curl_post_datatype === 'urlparams'){
                foreach($this->fields as $key=>$value) {
                    $fields_string .= $key.'='.urlencode($value).'&';
                }
                $fields_string = rtrim($fields_string, '&');
            }
            $ch = curl_init($this->service_url);
            //set the credential and header data
            if($this->curl_post_datatype === 'json'){
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8;','Accept: application/json' ));
            }
            elseif($this->curl_post_datatype === 'urlparams'){
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8;','Accept: application/json' ));
            }
            curl_setopt($ch, CURLOPT_USERAGENT, $this->user);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, $this->user.":".$this->pwd); //Your credentials goes here
            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            //execute post
            $result = curl_exec($ch);
            //close connection
            curl_close($ch);
            $json=json_decode($result,true);
//            echo 'result'; var_dump($result);
            return $json;
        }
        catch(Exception $e)
        {
            echo 'error section:';
            var_dump($e);
        }
    }
} 