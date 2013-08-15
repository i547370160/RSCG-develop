<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Work controller (前端)
 *
 * @author		JayJun
 * @email       jayjun0805@sina.com
 */
class Work extends Public_Controller
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

    //雇主移民
    public function index()
    {
       	$this->template
			 ->build('work/work.html'); 
    }
    
    //雇主资源
    public function work_list()
    {
       	$this->template
			 ->build('work/work_list.html'); 
    }
    
    //雇主资源的详情
    public function work_list_detail()
    {
       	$this->template
			 ->build('work/work_list_detail.html'); 
    }

    //成功案例
    public function work_cases()
    {
       	$this->template
			 ->build('work/work_cases.html'); 
    }

    //成功案例的详情
    public function work_cases_detail()
    {
       	$this->template
			 ->build('work/work_cases_detail.html'); 
    }

    //相关资讯
    public function work_news()
    {
       	$this->template
			 ->build('work/work_news.html'); 
    }


    //相关资讯的详情
    public function work_news_detail()
    {
       	$this->template
			 ->build('work/work_news_detail.html'); 
    }

    //免费评估
    public function work_form()
    {
       	$this->template
			 ->build('work/work_form.html'); 
    } 
}
