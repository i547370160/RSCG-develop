<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Business controller (前端)
 *
 * @author		JayJun
 * @email       jayjun0805@sina.com
 */
class Business extends Public_Controller
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

    //投资移民
    public function index()
    {
       	$this->template
			 ->build('business/business.html'); 
    }
    
    //项目资源
    public function business_list()
    {
       	$this->template
			 ->build('business/business_list.html'); 
    }
    
    //项目资源的详情
    public function business_list_detail()
    {
       	$this->template
			 ->build('business/business_list_detail.html'); 
    }

    //成功案例
    public function business_cases()
    {
       	$this->template
			 ->build('business/business_cases.html'); 
    }

    //成功案例的详情
    public function business_cases_detail()
    {
       	$this->template
			 ->build('business/business_cases_detail.html'); 
    }

    //相关资讯
    public function business_news()
    {
       	$this->template
			 ->build('business/business_news.html'); 
    }


    //相关资讯的详情
    public function business_news_detail()
    {
       	$this->template
			 ->build('business/business_news_detail.html'); 
    }

    //免费评估
    public function business_form()
    {
       	$this->template
			 ->build('business/business_form.html'); 
    }
}
