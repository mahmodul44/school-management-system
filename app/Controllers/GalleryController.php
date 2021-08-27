<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\GalleryModel;
class GalleryController extends BaseController{

     public function index(){
          $model=new GalleryModel();
          $data['gallery']=$model->findAll();
          return view('Admin/gallery',$data);
     }
     public function galleryadd(){
          return view('Admin/galleryadd');
     }
     public function galleryInsert(){
          $file = $this->request->getFile('photo');
          if ($file->isValid()) {
               $fileName = $file->getName();

               $fileMove = $this->request->getFile('photo')->store('../../public/uploads/Gallery', $fileName);
          }

          $data = [
               
               'description' => $this->request->getVar('description'),
               'photo' => ($fileName),


          ];

          $model = new GalleryModel();
          $model->insert($data);
          return redirect()->route('admin/gallery');
     }
     public function gallery_delete($id){
          $model=new GalleryModel();
          $model->where('id',$id)->delete();
          return redirect()->route('admin/gallery');
     }
}