<?php namespace App\Controllers;
use App\Models\IDCardModel;

use CodeIgniter\Controller;
class IDCardController extends BaseController{
     public function idcardInsert()
     {
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName = $file->getName();

               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/IDCard', $fileName);
          }
          $data = [
               'st_name' => $this->request->getVar('st_name'),
               'id_no' => $this->request->getVar('id_no'),
               'class' => $this->request->getVar('class'),
               'section' => $this->request->getVar('section'),
               'mobile' => $this->request->getVar('mobile'),
               'photo' => ($fileName),

          ];
          $model = new IDCardModel();
          $model->insert($data);
          return redirect()->route('admin/idcard');
     }
   
     public function idcardedit($id){
          $model = new IDCardModel();
          $data['idcardedit'] = $model->find($id);
         
          return view('Admin/idcardedit', $data);
     }
     public function update($id=0){

          // $id=$this->request->getVar('id');
          //     echo $id;
          //     die();
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName = $file->getName();

               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/IDCard', $fileName);
               $data = [
                    'st_name' => $this->request->getVar('st_name'),
                    'id_no' => $this->request->getVar('id_no'),
                    'class' => $this->request->getVar('class'),
                    'section' => $this->request->getVar('section'),
                    'mobile' => $this->request->getVar('mobile'),
                    'photo' => ($fileName),

               ];
          }else{
               $data = [
                    'st_name' => $this->request->getVar('st_name'),
                    'id_no' => $this->request->getVar('id_no'),
                    'class' => $this->request->getVar('class'),
                    'section' => $this->request->getVar('section'),
                    'mobile' => $this->request->getVar('mobile'),
                

               ];
          }
          
          $model = new IDCardModel();
          $model->update($id,$data);
           return redirect()->route('admin/idcard');
     }
     public function idcardprint($id)
     {
          $model = new IDCardModel();
          $data['idcardprint'] = $model->find($id);
        
          return view('Admin/idcardprint', $data);
     }
     // public function idcopy($id)
     // {
     //      $model = new IDCardModel();
     //      $data['idcardprint'] = $model->find($id);

     //      return view('Admin/idcardprint', $data);
     // }
     public function idcard_delete($id)
     {
          $model = new IDCardModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('meg', 'ID Card Deleted !');
          return redirect()->route('admin/idcard');
     }
}