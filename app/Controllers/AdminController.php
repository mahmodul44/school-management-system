<?php namespace App\Controllers;
use App\Models\IDCardModel;
use App\Models\TeacherIDModel;
use App\Models\PaymentModel;
use App\Models\NoticeModel;
use App\Models\CourseModel;
use CodeIgniter\Controller;
class AdminController extends BaseController{
     public function login(){
          return view('Admin/login');
     }
     public function dashbord()
     {
          if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin/login'));
          }
          // $model=new IDCardModel();
          // $data['allcard']=$model->countAllResults();
          // dd($data);
          // die();
          return view('Admin/dashbord');
     }
     public function payment()
     {
          return view('Admin/payment');
     }
     public function paymentadd()
     {
          return view('Admin/paymentadd');
     }
     public function idcard(){
          $model = new IDCardModel();
          // $data['idcardlist'] = $model->findAll();   
          // $data['idcardlist'] = $model->paginate(3);  
          
          $currentPage=$this->request->getVar('page_idcardlist') ? $this->request->getVar('page_idcardlist'):1;
          $data=[
               'idcardlist'=>$model->paginate(2,'idcardlist'),
               'pager' => $model->pager,
               'currentPage' =>$currentPage
          ];  
          return view('Admin/idcard',$data);
     }
     public function idcardadd()
     {
          return view('Admin/idcardadd');
     }
     public function tidcardadd()
     {
          return view('Admin/tidcardadd');
     }
     public function tidcard()
     {
          $model = new TeacherIDModel();
          $data['teachersid'] = $model->findAll();
     
          return view('Admin/tidcard',$data);
     }
     public function insert_pay()
     {

          $data = [
               'st_name' => $this->request->getVar('st_name'),
               'payment_method' => $this->request->getVar('payment_method'),
               'mobile' => $this->request->getVar('mobile'),
               'trxID' => $this->request->getVar('trxID'),
          ];

          $model = new PaymentModel();
          $model->insert($data);
          return redirect()->route('Admin/payment');
     }
     public function notice(){
          $model = new NoticeModel();
          $data['noticeall'] = $model->findAll();

         
          return view('Admin/notice',$data);
     }
     public function noticeadd()
     {
          return view('Admin/noticeadd');
     }
     public function noticeInsert()
     {
          $data = [
               'title' => $this->request->getVar('title'),
               'notice' => $this->request->getVar('notice'),
               
          ];

          $model = new NoticeModel();
          $model->insert($data);
          return redirect()->route('admin/notice');
         
     }
     public function notice_delete($id)
     {
          $model = new NoticeModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('data_del', 'This Notice Is Deleted !');
          return redirect()->route('admin/notice');
     }
     public function course(){
         $model =new CourseModel();
          $data['courses'] = $model->findAll();

          return view('Admin/course', $data);
          
     }
     public function courseadd()
     {
          return view('Admin/courseadd');
     }
     public function course_insert()
     {
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName = $file->getName();

               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/Course', $fileName);
          }
          $data = [
               'classname' => $this->request->getVar('classname'),
               'fee' => $this->request->getVar('fee'),
               'description' => $this->request->getVar('description'),
               'duration' => $this->request->getVar('duration'),
               't_student' => $this->request->getVar('t_student'),
               'class_time' => $this->request->getVar('class_time'),
               'photo' => ($fileName),
          ];

          $model = new CourseModel();
          $model->insert($data);
          
          return redirect()->route('admin/course');
     }
     public function course_delete($id)
     {
          $model = new CourseModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('data_del', 'This Class Details Is Deleted !');
          return redirect()->route('admin/course');
     }
    public function feerecipt()
    {
        if(session()->get('user')==''){
            session()->setFlashdata('meg','Login First !!!');
            return redirect()->to(base_url('admin'));
        }
        return view('Admin/feerecipt');
    }
}