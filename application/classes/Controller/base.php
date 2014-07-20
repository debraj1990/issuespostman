<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template
{
//    protected $auth;
//    protected $user;
    public $result_content;

    public $auto_render = TRUE; 
    public $template = 'template';

    
    public function before()
    {
	parent::before();

//	$this->session = Session::instance();
//	$this->auth = rAuth::instance('auth_user');
//	$this->user = $this->auth->get_user();

	if ($this->auto_render)
	{
        // Make $result_content available to all views
        View::bind_global('result_content', $this->result_content);
//	    $this->template->title = 'IssuesPostman - Post issues to GitHub & BitBucket repositories';
//	    $this->template->content = '';
	    $this->template->styles = array();
	    $this->template->scripts = array();
//        echo 'value in result_content before::'; var_dump($this->template->content);
	}
    }
    
    public function after()
    {
	if ($this->auto_render)
	{
	    $styles = array(
		'media/css/bootstrap.min.css',
        'media/css/bootstrap-theme.min.css',
        'media/css/custom.css',
	    );
	    
	    $scripts = array(
		'media/js/jquery1_11_0.min.js',
		'media/js/bootstrap.min.js',
	    );

	    $this->template->styles = array_merge($styles, $this->template->styles);
	    $this->template->scripts = array_merge($scripts, $this->template->scripts);
        $this->template->title = 'IssuesPostman - Post issues to GitHub & BitBucket repositories';
//        $this->template->content = $this->result_content;

//        $this->template->content = $this->result_content = 'something';
//var_dump($this->result_content);
//	    $this->template->styles = Minify::factory('css')->minify($this->template->styles);
//	    $this->template->scripts = Minify::factory('js')->minify($this->template->scripts);
	}
	
	parent::after();
    }

    public function action_contentrender(){
        $this->template->content = $this->result_content = 'something';
        echo 'value in result_content:'; var_dump($this->template->content);
    }

}