<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Family controller (前端)
 *
 * @author		JayJun
 * @email       jayjun0805@sina.com
 */
class Family extends Public_Controller
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

    //家庭移民
    public function index()
    {
       	$this->template
			 ->build('family/family.html'); 
    }

    //成功案例
    public function family_cases()
    {
       	$this->template
			 ->build('family/family_cases.html'); 
    }

    //成功案例的详情
    public function family_cases_detail()
    {
       	$this->template
			 ->build('family/family_cases_detail.html'); 
    }

    //相关资讯
    public function family_news()
    {
       	$this->template
			 ->build('family/family_news.html'); 
    }


    //相关资讯的详情
    public function family_news_detail()
    {
       	$this->template
			 ->build('family/family_news_detail.html'); 
    }

    //免费评估
    public function family_form()
    {
       	$this->template
			 ->build('family/family_form.html'); 
    }  
}
