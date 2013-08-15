<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home controller (前端)
 *
 * @author		JayJun
 * @email       jayjun0805@sina.com
 */
class Home extends Public_Controller
{

	/**
	 * Constructor method
	 * 
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

	}

    //首页
    public function index()
    {
       	$this->template
			 ->build('home.html'); 
    }

}
