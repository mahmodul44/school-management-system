<?php namespace App\Controllers;

use App\Models\RegistrationModel;
use CodeIgniter\Controller;
class RegistrationController extends BaseController{
     public function registration(){
          $model = new RegistrationModel();
          $data['reglist'] = $model->findAll();
          
          return view("Admin/registration" ,$data);
     }
     public function registrationadd()
     {
          return view("Admin/registrationadd");
     }
     public function registrationInsert()
     {
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName = $file->getName();

               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/Registration', $fileName);
          }

          $data = [
               'reg_no' => $this->request->getVar('reg_no'),
               'session' => $this->request->getVar('session'),
               'std_name' => $this->request->getVar('std_name'),
               'fname' => $this->request->getVar('fname'),
               'mname' => $this->request->getVar('mname'),
               'dob_words' => $this->request->getVar('dob_words'),
               'dob' => $this->request->getVar('dob'),
               'gender' => $this->request->getVar('gender'),
               'jsc_roll' => $this->request->getVar('jsc_roll'),
               'board' => $this->request->getVar('board'),
               'class' => $this->request->getVar('class'),
               'section' => $this->request->getVar('section'),
               'class_roll' => $this->request->getVar('class_roll'),
               'groups' => $this->request->getVar('groups'),
               'ins_code' => $this->request->getVar('ins_code'),
               'ins_name' => $this->request->getVar('ins_name'),
               'thana' => $this->request->getVar('thana'),
               'district' => $this->request->getVar('district'),
               'exam_type' => $this->request->getVar('exam_type'),
               'bn_1' => $this->request->getVar('bn_1'),
               'bn_2' => $this->request->getVar('bn_2'),
               'en_1' => $this->request->getVar('en_1'),
               'en_2' => $this->request->getVar('en_2'),
               'math' => $this->request->getVar('math'),
               'ict' => $this->request->getVar('ict'),
               'code_1' => $this->request->getVar('code_1'),
               'code_2' => $this->request->getVar('code_2'),
               'code_3' => $this->request->getVar('code_3'),
               'code_4' => $this->request->getVar('code_4'),
               'code_5' => $this->request->getVar('code_5'),
               'code_6' => $this->request->getVar('code_6'),
               'code_7' => $this->request->getVar('code_7'),
               'code_ob' => $this->request->getVar('code_ob'),
               'photo' => ($fileName),
          ];

          $model = new RegistrationModel();
          $model->insert($data);
  
          return redirect()->route('admin/registration');
     }
     public function regprint($id)
     {
          $model = new RegistrationModel();
          $data['result'] = $model->find($id);

          return view("Admin/regprint", $data);
     }
     public function registrationedit($id)
     {
          $model = new RegistrationModel();
          $data['regedit'] = $model->find($id);

          return view('Admin/registrationedit',$data);
     }
     public function registrationUpdate($id=0)
     {
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName = $file->getName();

               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/Registration', $fileName);
         

          $data = [
               'reg_no' => $this->request->getVar('reg_no'),
               'session' => $this->request->getVar('session'),
               'std_name' => $this->request->getVar('std_name'),
               'fname' => $this->request->getVar('fname'),
               'mname' => $this->request->getVar('mname'),
               'dob_words' => $this->request->getVar('dob_words'),
               'dob' => $this->request->getVar('dob'),
               'gender' => $this->request->getVar('gender'),
               'jsc_roll' => $this->request->getVar('jsc_roll'),
               'board' => $this->request->getVar('board'),
               'class' => $this->request->getVar('class'),
               'section' => $this->request->getVar('section'),
               'class_roll' => $this->request->getVar('class_roll'),
               'groups' => $this->request->getVar('groups'),
               'ins_code' => $this->request->getVar('ins_code'),
               'ins_name' => $this->request->getVar('ins_name'),
               'thana' => $this->request->getVar('thana'),
               'district' => $this->request->getVar('district'),
               'exam_type' => $this->request->getVar('exam_type'),
               'bn_1' => $this->request->getVar('bn_1'),
               'bn_2' => $this->request->getVar('bn_2'),
               'en_1' => $this->request->getVar('en_1'),
               'en_2' => $this->request->getVar('en_2'),
               'math' => $this->request->getVar('math'),
               'ict' => $this->request->getVar('ict'),
               'code_1' => $this->request->getVar('code_1'),
               'code_2' => $this->request->getVar('code_2'),
               'code_3' => $this->request->getVar('code_3'),
               'code_4' => $this->request->getVar('code_4'),
               'code_5' => $this->request->getVar('code_5'),
               'code_6' => $this->request->getVar('code_6'),
               'code_7' => $this->request->getVar('code_7'),
               'code_ob' => $this->request->getVar('code_ob'),
               'photo' => ($fileName),
          ];
     }else{
           $data = [
               'reg_no' => $this->request->getVar('reg_no'),
               'session' => $this->request->getVar('session'),
               'std_name' => $this->request->getVar('std_name'),
               'fname' => $this->request->getVar('fname'),
               'mname' => $this->request->getVar('mname'),
               'dob_words' => $this->request->getVar('dob_words'),
               'dob' => $this->request->getVar('dob'),
               'gender' => $this->request->getVar('gender'),
               'jsc_roll' => $this->request->getVar('jsc_roll'),
               'board' => $this->request->getVar('board'),
               'class' => $this->request->getVar('class'),
               'section' => $this->request->getVar('section'),
               'class_roll' => $this->request->getVar('class_roll'),
               'groups' => $this->request->getVar('groups'),
               'ins_code' => $this->request->getVar('ins_code'),
               'ins_name' => $this->request->getVar('ins_name'),
               'thana' => $this->request->getVar('thana'),
               'district' => $this->request->getVar('district'),
               'exam_type' => $this->request->getVar('exam_type'),
               'bn_1' => $this->request->getVar('bn_1'),
               'bn_2' => $this->request->getVar('bn_2'),
               'en_1' => $this->request->getVar('en_1'),
               'en_2' => $this->request->getVar('en_2'),
               'math' => $this->request->getVar('math'),
               'ict' => $this->request->getVar('ict'),
               'code_1' => $this->request->getVar('code_1'),
               'code_2' => $this->request->getVar('code_2'),
               'code_3' => $this->request->getVar('code_3'),
               'code_4' => $this->request->getVar('code_4'),
               'code_5' => $this->request->getVar('code_5'),
               'code_6' => $this->request->getVar('code_6'),
               'code_7' => $this->request->getVar('code_7'),
               'code_ob' => $this->request->getVar('code_ob'),
           ];
     }
          $model = new RegistrationModel();
          $model->update($id,$data);

          return redirect()->route('admin/registration');
     }
     public function reg_delete($id){
          $model = new RegistrationModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('data_del', 'Registration Info is Deleted !');
          return redirect()->route('admin/registration');
     }
}