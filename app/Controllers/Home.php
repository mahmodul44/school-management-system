<?php namespace App\Controllers;

use App\Models\NoticeModel;
use App\Models\TeacherModel;
use App\Models\GalleryModel;
use App\Models\CourseModel;
class Home extends BaseController
{
	public function index()
	{
		$model=new NoticeModel();
		$data['noticeall']=$model->findAll();
		return view('Front/welcome_message',$data);
	}
	public function courses(){
		$model = new CourseModel();
		$data['courses'] = $model->findAll();
		return view('Front/courses',$data);
	}
	public function teacher()
	{
		$model = new TeacherModel();
		$data['teachers'] = $model->findAll();
		
		return view('Front/teacher',$data);
	}
	public function gallery(){
		$model = new GalleryModel();
		$data['gallery'] = $model->findAll();
		return view('Front/gallery', $data);
	}
	public function admissionform()
	{
		return view('Front/admissionform');
	}
	public function admissionformprint()
	{
		return view('Front/admissionformprint');
	}
	public function payment()
	{
		
		return view('Front/payment');
	}
	public function blog()
	{
		return view('Front/blog');
	}
	public function aboutsc()
	{
		return view('Front/aboutsc');
	}
	public function aboutc()
	{
		return view('Front/aboutc');
	}
	public function aboutsb()
	{
		return view('Front/aboutsb');
	}
	public function aboutedir()
	{
		return view('Front/aboutedir');
	}
	public function aboutcexam()
	{
		return view('Front/aboutcexam');
	}
	public function aboutgm()
	{
		return view('Front/aboutgm');
	}
	public function aboutcashier()
	{
		return view('Front/aboutcashier');
	}
	public function peoplesays()
	{
		return view('Front/peoplesays');
	}
	public function contact()
	{
		return view('Front/contact');
	}
	//--------------------------------------------------------------------

}