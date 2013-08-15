<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Rscg controller (前端)
 *
 * @author		JayJun
 * @email       jayjun0805@sina.com
 */
class Rscg extends Public_Controller
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

    //企业介绍
    public function index()
    {
       	$this->template
			 ->build('rscg/rscg.html'); 
    }

    //锐智生活
    public function rscg_life()
    {
       	$this->template
			 ->build('rscg/rscg_life.html'); 
    }

    //加入锐智
    public function rscg_join()
    {
       	$this->template
			 ->build('rscg/rscg_join.html'); 
    }

}
