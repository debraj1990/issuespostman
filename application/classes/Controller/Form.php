<?php if (!defined('SYSPATH')) exit('No direct script access allowed');
/**
 * Controller_Form - Used for fetching form data to call appropriate service request.
 *
 */
class Controller_Form extends Controller_Base
{
//    public $template = 'issue_form';
    public function action_index(){

        if($_POST){
            session_start();
            $userRequestData = Array();
            $userRequestData['username'] = base64_encode(trim($_POST['username']));
            $userRequestData['password'] = base64_encode(trim($_POST['pass']));
            $userRequestData['title'] = trim($_POST['title']);
            $userRequestData['desc'] = trim($_POST['desc']);
            $urlContent = explode('/',trim($_POST['repourl']));
            if(count($urlContent) == 5 && ($urlContent[0] == 'http:' || $urlContent[0] == 'https:')){
                $userRequestData['url_provider'] = trim($urlContent[2]);
                $userRequestData['url_username'] = trim($urlContent[3]);
                $userRequestData['url_repository'] = trim($urlContent[4]);
            }
            $userRequestData['repourl'] = $urlContent;
            $_SESSION['userRequestData'] = $userRequestData;
            if(!empty($_SESSION['userRequestData']['url_provider']) && $_SESSION['userRequestData']['url_provider'] == 'github.com'){
                Request::factory("Github/index")->execute();
            }
            else if(!empty($_SESSION['userRequestData']['url_provider']) && $_SESSION['userRequestData']['url_provider'] == 'bitbucket.org'){
                Request::factory("Bitbucket/index")->execute();
            }
            else if(!empty($_SESSION['userRequestData']['url_provider']) && $_SESSION['userRequestData']['url_provider'] !== 'github.com' && $_SESSION['userRequestData']['url_provider'] !== 'bitbucket.org'){
                echo 'in Misc'; Request::factory("Misc/index")->execute();
            }
            else{
                $this->result_content = "<span class='error'>Not a valid url for repository versioning service providers!!</span><br/>Please input a repository url of the format (<span class='tool-tip'>https://github.com/:username/:repository</span> or <span class='tool-tip'>https://bitbucket.org/:username/:repository</span>)<br/>";
            }
        }
    }
}
 ?>