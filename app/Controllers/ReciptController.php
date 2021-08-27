<?php

namespace App\Controllers;

use App\Models\AdmitModel;
use App\Models\ReciptModel;
use CodeIgniter\Controller;
class ReciptController extends BaseController{
     public function feerecipt(){
         
          return view('admin/feerecipt');
     }
      public function feereciptlist(){
         $model = new ReciptModel();
          $currentPage=$this->request->getVar('page_receiptlist') ? $this->request->getVar('page_receiptlist'):1;
          $data=[
               'reciptlists'=>$model->paginate(10,'reciptlists'),
               'pager' => $model->pager,
               'currentPage' =>$currentPage
          ];
          //$data['reciptlists'] = $model->findAll();
        
          return view('Admin/feereciptlist',$data);
     }
    
     public function reciptInsert()
     {
$model = new ReciptModel();
          $data = [
               'reciptbook' => $this->request->getVar('reciptbook'),
               'st_name' => $this->request->getVar('st_name'),
               'st_id' => $this->request->getVar('st_id'),
               'st_class' => $this->request->getVar('st_class'),
               'st_mobile' => $this->request->getVar('st_mobile'),
               'month_one' => $this->request->getVar('month_one'),
               'type_one' => $this->request->getVar('type_one'),
               'amount_one' => $this->request->getVar('amount_one'),
               'total_one' => $this->request->getVar('total_one'),
               'month_two' => $this->request->getVar('month_two'),
               'type_two' => $this->request->getVar('type_two'),
               'amount_two' => $this->request->getVar('amount_two'),
               'total_two' => $this->request->getVar('total_two'),
               'month_three' => $this->request->getVar('month_three'),
               'type_three' => $this->request->getVar('type_three'),
               'amount_three' => $this->request->getVar('amount_three'),
               'total_three' => $this->request->getVar('total_three'),
               'totals' => $this->request->getVar('totals'),
               
          ];

        //   print_r($data);
        //   die();
          
          
        $model->insert($data);
       
          return redirect()->route('admin/feereciptlist');
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
       public function reciptprint($id)
     {
          $model = new ReciptModel();
          $data['result'] = $model->find($id);

          return view('Admin/reciptprint', $data);
     }
     public function recipt_delete($id)
     {
          $model = new ReciptModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('data_del', 'This Recipt Book Is Deleted !');
          return redirect()->route('admin/feereciptlist');
     }
}