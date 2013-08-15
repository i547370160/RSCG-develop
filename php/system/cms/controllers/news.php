<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * News controller (前端)
 *
 * @author		JayJun
 * @email       jayjun0805@sina.com
 */
class News extends Public_Controller
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

    //最新资讯，默认显示投资移民
    public function index()
    {
       	$this->template
			 ->build('news/news.html'); 
    }
    
    //雇主移民
    public function employer()
    {
       	$this->template
			 ->build('news/employer.html'); 
    }

    //家庭移民
    public function family()
    {
       	$this->template
			 ->build('news/family.html'); 
    }

    //技术移民
    public function technology()
    {
       	$this->template
			 ->build('news/technology.html'); 
    }

    //其他移民
    public function other()
    {
       	$this->template
			 ->build('news/other.html'); 
    }  

    //资讯详情
    public function news_detail()
    {
       	$this->template
			 ->build('news/news_detail.html'); 
    }
}
