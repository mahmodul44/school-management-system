<?php

namespace App\Controllers;

use App\Models\AdmissionModel;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class AdmissionController extends BaseController
{

     public function insert_admission()
     {
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName = $file->getName();

               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/AdmissionForm', $fileName);
          }

          $sinfo = [
               'Name' => $this->request->getVar('Name'),
               'fName' => $this->request->getVar('fName'),
               'mName' => $this->request->getVar('mName'),
               'sName' => $this->request->getVar('sName'),
               'Section' => $this->request->getVar('Section'),
               'Payment' => $this->request->getVar('Payment'),
               'Phone' => $this->request->getVar('Phone'),
               'uName' => $this->request->getVar('uName'),
               'Thana' => $this->request->getVar('Thana'),
               'District' => $this->request->getVar('District'),
               'Village' => $this->request->getVar('Village'),
               'Gender' => $this->request->getVar('Gender'),
               'birthDate' => $this->request->getVar('birthDate'),
               'photo' => ($fileName),
               'admissionDate' => date('Y-m-d'),
          ];
          
          $model = new AdmissionModel();
         $model->insert($sinfo);
          $user_id = $model->getInsertID();
          $data['result'] = $model->find($user_id);
   
          // $lastid = $model->insertGetId($data);
          //$lastid=$model->insertID();
          // echo $lastid;
          //echo $db->insertID();
          //  $user['student_info'] = $model->getInsertID();
          //  echo $user;
          // die();
         
          
          return view('Front/admissionformprint',$data);
     }
    
     public function admitstudent()
     {
          $model = new AdmissionModel();
          $data['studentlist'] = $model->findAll();
          return view('admin/admitstudent', $data);
     }
     public function admitstudent_view($id)
     {
          $model = new AdmissionModel();
          $data['admitstudentview'] = $model->find($id);
          return view('admin/admitstudentview', $data);
     }
     public function admissionform_print($id)
     {
          $model = new AdmissionModel();
          $data['admitstudentprint'] = $model->find($id);
          //return view('admissionformprint', $data);
     }
     public function admissionformprint(){
          return view('admissionformprint');
     }
     public function admitstudent_delete($id)
     {
          $model = new AdmissionModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('data_del', 'Admission Info Deleted !');
          return redirect()->route('admin/admitstudent');
     }
}