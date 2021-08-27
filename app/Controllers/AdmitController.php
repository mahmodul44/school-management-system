<?php

namespace App\Controllers;

use App\Models\AdmitModel;
use CodeIgniter\Controller;
class AdmitController extends BaseController{
     public function admitcard(){
         if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }
          $model = new AdmitModel();
                    $currentPage=$this->request->getVar('page_admitlist') ? $this->request->getVar('page_admitlist'):1;
          $data=[
               'admitlist'=>$model->paginate(10,'admitlist'),
               'pager' => $model->pager,
               'currentPage' =>$currentPage
          ];  
          // $data['admitlist'] = $model->findAll();
          return view('Admin/admitcard',$data);
     }
     public function admitcardadd()
     {
         if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }
          return view('Admin/admitcardadd');
     }
     public function admitInsert()
     {
$model = new AdmitModel();
          $data = [
               'exm_name' => $this->request->getVar('exm_name'),
               'roll' => $this->request->getVar('roll'),
               'code_no' => $this->request->getVar('code_no'),
               'reg_no' => $this->request->getVar('reg_no'),
               'code_ins_name' => $this->request->getVar('code_ins_name'),
               'session' => $this->request->getVar('session'),
               'student_name' => $this->request->getVar('student_name'),
               'exm_type' => $this->request->getVar('exm_type'),
               'fname' => $this->request->getVar('fname'),
               'mname' => $this->request->getVar('mname'),
               'section' => $this->request->getVar('section'),
               'dob' => $this->request->getVar('dob'),
               'code_1' => $this->request->getVar('code_1'),
               'code_2' => $this->request->getVar('code_2'),
               'code_3' => $this->request->getVar('code_3'),
               'code_4' => $this->request->getVar('code_4'),
               'code_5' => $this->request->getVar('code_5'),
               'code_6' => $this->request->getVar('code_6'),
               'code_7' => $this->request->getVar('code_7'),
          ];

        //   print_r($data);
        //   die();
          
          
        $model->insert($data);
       
          return redirect()->route('admin/admitcard');
     }
     public function admitcard_edit($id)
     {
          $model = new AdmitModel();
          $data['admitcard_edit'] = $model->find($id);

          return view('Admin/admitcard_edit', $data);
     }
     public function admitupdate($id)
     {
$model = new AdmitModel();
          $data = [
               'exm_name' => $this->request->getVar('exm_name'),
               'roll' => $this->request->getVar('roll'),
               'code_no' => $this->request->getVar('code_no'),
               'reg_no' => $this->request->getVar('reg_no'),
               'code_ins_name' => $this->request->getVar('code_ins_name'),
               'session' => $this->request->getVar('session'),
               'student_name' => $this->request->getVar('student_name'),
               'exm_type' => $this->request->getVar('exm_type'),
               'fname' => $this->request->getVar('fname'),
               'mname' => $this->request->getVar('mname'),
               'section' => $this->request->getVar('section'),
               'dob' => $this->request->getVar('dob'),
               'code_1' => $this->request->getVar('code_1'),
               'code_2' => $this->request->getVar('code_2'),
               'code_3' => $this->request->getVar('code_3'),
               'code_4' => $this->request->getVar('code_4'),
               'code_5' => $this->request->getVar('code_5'),
               'code_6' => $this->request->getVar('code_6'),
               'code_7' => $this->request->getVar('code_7'),
          ];

        //   print_r($data);
        //   die();
          
          
        $model->update($id,$data);
       
          return redirect()->route('admin/admitcard');
     }
       public function admitprint($id)
     {
          $model = new AdmitModel();
          $data['result'] = $model->find($id);

          return view('Admin/admitprint', $data);
     }
     public function admitcard_delete($id)
     {
          $model = new AdmitModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('data_del', 'This Admit Card Is Deleted !');
          return redirect()->route('admin/admitcard');
     }
}