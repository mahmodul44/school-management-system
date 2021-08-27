<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\LoginModel;
use App\Models\IDCardModel;
use CodeIgniter\Model;

class LoginController extends BaseController{
     public function index(){
           $user = $this->request->getPost('user');
           $password = $this->request->getPost('password');
          $model = new LoginModel();
          $chek = $model->where(['user' => $user, 'password' => $password])->first();
          // $chek = $this->LoginModel->chek_login($user, $password);
          if(($chek['user']==$user) && ($chek['password']==$password)){
                session()->set('user',$chek['user']);
                session()->set('password', $chek['password']);
                session()->set('name', $chek['name']);
                session()->set('level', $chek['level']);
               return redirect()->to(base_url('admin/dashbord'));
             
              
                $this->setSession($chek);
               
          }else{
                session()->setFlashdata('meg','user or password does not match!!');
                return redirect()->to(base_url('admin/login'));
           }
         
     }
     public function setSession($chek){
          $row=[
              'user'=>$chek['user'],
               'password' => $chek['password'],
               'name' => $chek['name'],
               'email' => $chek['email'],
               'level' => $chek['level'],
               'Logged_In'=> true,
          ];
          session()->set($row);
     }

     // public function chek_login()
     // {
     //      $user = $this->request->getPost('user');
     //      $password = $this->request->getPost('password');
     //      $chek = $this->LoginModel->chek_login($user, $password);
     //      if (($chek['user'] == $user) && ($chek['password'] == $password)) {
     //           session()->set('user', $chek['user']);
     //           session()->set('password', $chek['password']);
     //           session()->set('name', $chek['name']);
     //           return redirect()->to(base_url('admin/dashbord'));
     //           // $model=new LoginModel();
     //           // $data= $model->where(['user'=>$user,'password'=>$password])->first();

     //           // $this->setSession($data);

     //      } else {
     //           session()->setFlashdata('meg', 'user or password does not match!!');
     //           return redirect()->to(base_url('admin/login'));
     //      }
     // }
     public function logout(){
          session()->destroy();
          return redirect()->to(base_url('admin/login'));
     }

    public function studentreg()
    {
        $model=new IDCardModel();
        $data['st_idlist'] = $model->findall();

        return view('Admin/studentreg',$data);
    }

    public function userInsert(){
        $file = $this->request->getFile('photo');
        if ($file->isValid()) {
            $fileName = $file->getName();

            $fileMove = $this->request->getFile('photo')->store('../../public/uploads/studentsPortal', $fileName);
        }
        $data = [
            'name' => $this->request->getVar('name'),
            'user' => $this->request->getVar('user'),
            'email' => $this->request->getVar('email'),
            'password'=>rand(1000,9999),
            'level' =>'4',

            'photo' => ($fileName),

        ];
        $model = new LoginModel();
        $model->insert($data);
        session()->setFlashdata('meg', 'This Student Info Inserted Successfullly !');
        return redirect()->route('admin/studentreg');
    }
    public function studentreglist(){
        $model=new LoginModel();
        // $data['studentreglist'] = $model->Where('level','4')->find();
        // print_r($data);
        // die();
        $currentPage=$this->request->getVar('page_studentreglist') ? $this->request->getVar('page_studentreglist'):1;
        $data=[
            'studentreglist'=>$model->where('level','4')->paginate(5, 'studentreglist'),
            'pager' => $model->pager,
            'currentPage' =>$currentPage
        ];

        return view('Admin/studentreglist',$data);
    }
    public function stinfo_edit($id){
        if(session()->get('user')==''){
            session()->setFlashdata('meg','Login First !!!');
            return redirect()->to(base_url('admin'));
        }
        $model = new LoginModel();
        $data['stinfo_edit'] = $model->find($id);

        return view('Admin/stinfo_edit', $data);
    }
    public function userUpdate($id=0){

        $file = $this->request->getFile('photo');
        if ($file->isValid()) {
            $fileName = $file->getName();

            $fileMove = $this->request->getFile('photo')->store('../../public/uploads/studentsPortal', $fileName);
            $data = [
                'name' => $this->request->getVar('name'),
                'user' => $this->request->getVar('user'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'photo' => ($fileName),
                'level' =>'4',
            ];
        }else{
            $data = [
                'name' => $this->request->getVar('name'),
                'user' => $this->request->getVar('user'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'level' =>'4',

            ];
        }

        $model = new LoginModel();
        $model->update($id,$data);
        session()->setFlashdata('meg', 'This Student Info Update Successfully !');
        //   return redirect()->route('admin/profileupdate');
        return view('Admin/profileupdate');
    }
    public function studentprofile_view($user){

        $model = new LoginModel();
        $data['stinfo_data'] = $model->where('user',$user)->find();
        $data['stinfo_view'] =$data['stinfo_data'][0];
// print_r($data['stinfo_view']);
// die();
        return view('Admin/studentprofile_view', $data);
    }
    public function profileupdate(){
        return view('Admin/profileupdate');
    }
    public function stinfo_delete($id)
    {
        $model = new LoginModel();
        $model->where('id', $id)->delete();
        session()->setFlashdata('meg', 'This Student Info Is Deleted !');
        return redirect()->route('admin/studentreglist');
    }
}