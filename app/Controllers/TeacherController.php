<?php namespace App\Controllers;
use App\Models\TeacherModel;
use App\Models\TeacherIDModel;
use CodeIgniter\Controller;
class TeacherController extends BaseController{
     public function teacher()
     {
          $model = new TeacherModel();
          $data['teachers'] = $model->findAll();

          return view('Admin/teacher', $data);
          
     }
     public function teacheradd()
     {
          return view('Admin/teacheradd');
     }
     public function teacherInsert()
     {
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName = $file->getName();

               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/Teacher', $fileName);
          }
          $data = [
               't_name' => $this->request->getVar('t_name'),
               'address' => $this->request->getVar('address'),
               'ocupation' => $this->request->getVar('ocupation'),
               'mobile' => $this->request->getVar('mobile'),
               'photo' => ($fileName),

          ];
          $model = new TeacherModel();
          $model->insert($data);
          return redirect()->route('admin/teacher');
     }
     public function teacher_delete($id){
          $model = new TeacherModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('data_del', 'Teacher Deleted !');
          return redirect()->route('admin/teacher');  
     }
     public function tidcardInsert(){
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName=$file->getName();
              
               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/TeacherID', $fileName);
               
          }
          
          $data= [
               't_name' => $this->request->getVar('t_name'),
               'title' => $this->request->getVar('title'),
               'ocupation' => $this->request->getVar('ocupation'),
               'mobile' => $this->request->getVar('mobile'),
               'photo' => ($fileName),
              
             
          ];
        
          $model = new TeacherIDModel();
          $model->insert($data);
          return redirect()->route('admin/tidcard');
          
     }
     public function tidcard(){
         

          //return view('admin/tidcard', $data);
     }
    public function tidcardprint($id){
         $model=new TeacherIDModel();
         $data['teacheridprint']=$model->find($id);
     
         return view('Admin/tidcardprint',$data);
    }
     public function tidcard_delete($id)
     {
          $model = new TeacherIDModel();
          $model->where('id', $id)->delete();
          return redirect()->route('admin/tidcard');
     }
}