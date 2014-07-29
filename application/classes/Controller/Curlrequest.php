<?php if (!defined('SYSPATH')) exit('No direct script access allowed');

class Controller_Curlrequest extends Controller_Base
{
    protected $service_url;
    protected $fields = array();
    protected $user;
    protected $pwd;
    protected $curl_post_datatype;

    public function action_content()
    {
//        print('before destroy:');
//        var_dump($this->session);
        $this->session->destroy();
//        print('After destroy:');
//        var_dump($this->session);
    }

    function action_curlreq()
    {
        $response = new stdClass();
        $fields_string = '';
        try {
            if ($this->curl_post_datatype === 'json') {
                $fields_string = json_encode($this->fields);
            } elseif ($this->curl_post_datatype === 'urlparams') {
                foreach ($this->fields as $key => $value) {
                    $fields_string .= $key . '=' . urlencode($value) . '&';
                }
                $fields_string = rtrim($fields_string, '&');
            }
            $ch = curl_init($this->service_url);
            //set the credential and header data
            if ($this->curl_post_datatype === 'json') {
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8;', 'Accept: application/json'));
            } elseif ($this->curl_post_datatype === 'urlparams') {
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8;', 'Accept: application/json'));
            }
            curl_setopt($ch, CURLOPT_USERAGENT, $this->user);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, $this->user . ":" . $this->pwd); //Your credentials goes here
            //set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            //execute post
            $result = curl_exec($ch);
            //close connection
//            curl_close($ch);

// Check if any error occurred
            if (empty($result) && curl_errno($ch)) { // some kind of an error happened
                $response->error_message = curl_error($ch);
                curl_close($ch); // close cURL handler
            } // Check if no error occurred
            else {
                $info = curl_getinfo($ch);
                curl_close($ch); // close cURL handler

                if (empty($info['http_code'])) {
                    $response->error_message = "No HTTP code was returned";
                } else {
                    // load the HTTP codes
//        $http_codes = parse_ini_file("path/to/the/ini/file");
                    if (($info['http_code'] < 200) || ($info['http_code'] > 299)) {

                        $response->error_message = "The server responded: <span class=" . "'error'>HTTP Status code#";
                        $response->error_message .= $info['http_code'] . "</span> "; // . $http_codes[$info['http_code']];
                    } else {
                        //successful response
                        $response->successful_message = "The server responded: <span class=" . "'success'>HTTP Status code#";
                        $response->successful_message .= $info['http_code'] . "</span> "; // . $http_codes[$info['http_code']];
                    }
                    $response->json = json_decode($result);
//                    var_dump($result);
//                    var_dump($response);
                }
            }

            return ($response);
        } catch (Exception $e) {
            echo 'error section:';
            var_dump($e);
        }
    }
} 