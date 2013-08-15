<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Other controller (前端)
 *
 * @author		JayJun
 * @email       jayjun0805@sina.com
 */
class Other extends Public_Controller
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

    //其他移民
    public function index()
    {
       	$this->template
			 ->build('other/other.html'); 
    }

    //成功案例
    public function other_cases()
    {
       	$this->template
			 ->build('other/other_cases.html'); 
    }

    //成功案例的详情
    public function other_cases_detail()
    {
       	$this->template
			 ->build('other/other_cases_detail.html'); 
    }

    //相关资讯
    public function other_news()
    {
       	$this->template
			 ->build('other/other_news.html'); 
    }


    //相关资讯的详情
    public function other_news_detail()
    {
       	$this->template
			 ->build('other/other_news_detail.html'); 
    }

    //免费评估
    public function other_form()
    {
       	$this->template
			 ->build('other/other_form.html'); 
    }  
}
