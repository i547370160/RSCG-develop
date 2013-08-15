<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Skill controller (前端)
 *
 * @author		JayJun
 * @email       jayjun0805@sina.com
 */
class Skill extends Public_Controller
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

    //技术移民
    public function index()
    {
       	$this->template
			 ->build('skill/skill.html'); 
    }

    //成功案例
    public function skill_cases()
    {
       	$this->template
			 ->build('skill/skill_cases.html'); 
    }

    //成功案例的详情
    public function skill_cases_detail()
    {
       	$this->template
			 ->build('skill/skill_cases_detail.html'); 
    }

    //相关资讯
    public function skill_news()
    {
       	$this->template
			 ->build('skill/skill_news.html'); 
    }


    //相关资讯的详情
    public function skill_news_detail()
    {
       	$this->template
			 ->build('skill/skill_news_detail.html'); 
    }

    //免费评估
    public function skill_form()
    {
       	$this->template
			 ->build('skill/skill_form.html'); 
    }  
}
