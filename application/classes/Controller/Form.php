<?php if (!defined('SYSPATH')) exit('No direct script access allowed');

/**
 * Controller_Form - Used for fetching form data to call appropriate service request.
 *
 */
class Controller_Form extends Controller_Base
{

    public function action_index()
    {

        if ($this->request->post()) {

            $userRequestData = Array();
            $userRequestData['username'] = base64_encode(trim($this->request->post('username')));
            $userRequestData['password'] = base64_encode(trim($this->request->post('pass')));
            $userRequestData['title'] = trim($this->request->post('title'));
            $userRequestData['desc'] = trim($this->request->post('desc'));
            $urlContent = explode('/', trim($this->request->post('repourl')));
            if (count($urlContent) == 5 && ($urlContent[0] == 'http:' || $urlContent[0] == 'https:')) {
                $userRequestData['url_provider'] = trim($urlContent[2]);
                $userRequestData['url_username'] = trim($urlContent[3]);
                $userRequestData['url_repository'] = trim($urlContent[4]);
            }
            $userRequestData['repourl'] = $urlContent;
            $this->session->set('userRequestData', $userRequestData);

            // Overload $_SESSION with the session data
            $_SESSION =& $this->session->as_array();

            if ((Arr::get($this->session->get('userRequestData', array()), 'url_provider')) && (Arr::get($this->session->get('userRequestData', array()), 'url_provider')) == 'github.com') {
                Request::factory("Github/index")->execute();
            }
            if ((Arr::get($this->session->get('userRequestData', array()), 'url_provider')) && (Arr::get($this->session->get('userRequestData', array()), 'url_provider')) == 'bitbucket.org') {
                Request::factory("Bitbucket/index")->execute();
            } else if ((Arr::get($this->session->get('userRequestData', array()), 'url_provider')) && (Arr::get($this->session->get('userRequestData', array()), 'url_provider')) !== 'github.com' && (Arr::get($this->session->get('userRequestData', array()), 'url_provider')) !== 'bitbucket.org') {
                Request::factory("Misc/index")->execute();
            } else {
                $this->result_content = "<span class='error'>Not a valid url for repository versioning service providers!!</span><br/>Please input a repository url of the format (<span class='tool-tip'>https://github.com/:username/:repository</span> or <span class='tool-tip'>https://bitbucket.org/:username/:repository</span>)<br/>";
            }
        }
    }
}

?>