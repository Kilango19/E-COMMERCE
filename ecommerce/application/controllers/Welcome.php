<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();

		$this->template->set_layout('layout');

		$this->template->set_partial('header','basic/partials/header',FALSE);
		$this->template->set_partial('top_nav','basic/partials/top_nav',FALSE);
		$this->template->set_partial('left_nav','basic/partials/left_nav',FALSE);
		$this->template->set_partial('footer','basic/partials/footer',FALSE);
	}
	
	public function index()
	{
		$this->template->build('welcome_message');
	}

	public function blog()
	{
		$this->template->build('blog');
	}

}
