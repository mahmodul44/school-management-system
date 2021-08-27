<?php namespace App\Controllers;

use App\Models\AttendenceModel;
use App\Models\IDCardModel;
use App\Models\ScienceAtnModel;
use App\Models\ArtsAtnModel;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;

class AttendenceController extends BaseController{
     public function attendence(){
         if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }
          return view("Admin/attendence");
     }
     public function five()
     {
         if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }
          $model=new IDCardModel();
         $data['std_five']= $model->findall();
          return view("Admin/five",$data);
     }


public function atn_scienceadd(){
    if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }
    $model=new IDCardModel();
    $data['std_science']= $model->where('class','Seven')->find();
         return view('Admin/atn_scienceadd',$data);
}
public function atn_scienceinsert()
{

    $model=new ScienceAtnModel();
//    $data_info = $model->insert($data);
    $attend=$this->request->getVar('attend');
    $cur_date=$this->request->getVar('atn_date');
    $prev_date=$model->findAll();
   foreach ($prev_date as $date_key=>$date_value ){
       if($cur_date==$date_value['atn_date']){
           session()->setFlashdata('msg', 'Today Attendece Already Taken!');
           return redirect('admin/atn_scienceadd');

//           print_r("Already Taken");
//           return 0;
       }

   }

    foreach ($attend as $atn_key => $atn_value) {
            $data = ['atn_date' => $cur_date,
                    'id_no' => $atn_key,
                    'attend'=>$atn_value,
                ];
        $data_info = $model->insert($data);


    }

    session()->setFlashdata('msg', 'Today Attendece Taken Successfully!');
    return redirect('admin/atn_scienceadd');
}
public function atn_sciencelist(){
    if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }
         $model=new ScienceAtnModel();
         $data['atn_scienclist']=$model->GroupBy ('atn_date')->findAll();
         return view('Admin/atn_sciencelist',$data);
}
public function atn_scienceviewdate($atn_date){
if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }

    $model=new ScienceAtnModel();
    $listview =$model->find($atn_date);
    $model1=new ScienceAtnModel();
    $data['atn_scienceviewdate'] = $model1->join('tbl_idcard','tbl_idcard.id_no = tbl_atnscience.id_no')->where('atn_date',$listview['atn_date'])->findAll();
    // print_r($data);
    // die();
    return view('Admin/atn_scienceviewdate',$data);
}
public function atn_scienceupdate(){

   $db=db_connect();

    $attend=$this->request->getVar('attend');
    $atn_date=$this->request->getVar('atn_date');
    $atn = $atn_date[0];
//print_r($atn_date[0]);
//die();
    foreach ($attend as $atn_key => $atn_value) {
        $data = [
            'attend'=>$atn_value,
        ];
       // $model=new ScienceAtnModel();
        $builder = $db->table('tbl_atnscience');
        $builder->where('id_no', $atn_key);
        $builder->where('atn_date', $atn);
        $builder->update($data);
    }

    session()->setFlashdata('meg', 'Attendance Update Successfully!');
    return redirect()->route('admin/atn_sciencelist');

}
public function atn_scienceprint($atn_date){
    if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }

    $model=new ScienceAtnModel();
    $listview =$model->find($atn_date);
    $model1=new ScienceAtnModel();
    $data['atn_scienceprint'] = $model1->join('tbl_idcard','tbl_idcard.id_no = tbl_atnscience.id_no')->where('atn_date',$listview['atn_date'])->findAll();
   
    return view('Admin/atn_scienceprint',$data);
}
public function atn_artsprint($atn_date){
    if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }

    $model=new ArtsAtnModel();
    $listview =$model->find($atn_date);
    $model1=new ArtsAtnModel();
    $data['atn_artsprint'] = $model1->join('tbl_idcard','tbl_idcard.id_no = tbl_atnarts.id_no')->where('atn_date',$listview['atn_date'])->findAll();
   
    return view('Admin/atn_artsprint',$data);
}
    public function atn_sciencedelete($id){
        $db=db_connect();
        $model=new ScienceAtnModel();
       $model1= $model->find($id);
        $builder = $db->table('tbl_atnscience');
        $builder->where('atn_date', $model1['atn_date']);
        $builder->delete();
//       print_r($model1['atn_date']);
//       die();
        session()->setFlashdata('meg', 'Attendance list Deleted Successfully!');
        return redirect()->route('admin/atn_sciencelist');
    }

    public function atn_artsadd(){
        if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }
        $model=new IDCardModel();
        $data['std_arts']= $model->where('class','Eight')->findall();
        return view('Admin/atn_artsadd',$data);
    }

    public function atn_artsinsert()
    {

       $model=new ArtsAtnModel();
        $attend=$this->request->getVar('attend');
        $cur_date=$this->request->getVar('atn_date');
        $prev_date=$model->findAll();
        foreach ($prev_date as $date_key=>$date_value ){
            if($cur_date==$date_value['atn_date']){
                session()->setFlashdata('msg', 'Today Attendece Already Taken!');
                return redirect('admin/atn_artsadd');

            }
        }

        foreach ($attend as $atn_key => $atn_value) {
            $data = ['atn_date' => $cur_date,
                'id_no' => $atn_key,
                'attend'=>$atn_value,
            ];
            $data_info = $model->insert($data);

        }
        session()->setFlashdata('msg', 'Today Attendece Taken Successfully!');
        return redirect('admin/atn_artsadd');
    }
    public function atn_artslist(){
        $model=new ArtsAtnModel();
        $data['atn_artslist']=$model->GroupBy ('atn_date')->findAll();
        return view('Admin/atn_artslist',$data);
    }
    public function atn_artsviewdate($atn_date){
if(session()->get('user')==''){
               session()->setFlashdata('meg','Login First !!!');
               return redirect()->to(base_url('admin'));
          }

        $model=new ArtsAtnModel();
        $listview =$model->find($atn_date);
        $model1=new ArtsAtnModel();
        $data['atn_artsviewdate'] = $model1->join('tbl_idcard','tbl_idcard.id_no = tbl_atnarts.id_no')->where('atn_date',$listview['atn_date'])->findAll();

        return view('Admin/atn_artsviewdate',$data);
    }
    public function atn_artsupdate(){

        $db=db_connect();

        $attend=$this->request->getVar('attend');
        $atn_date=$this->request->getVar('atn_date');
        $atn = $atn_date[0];

        foreach ($attend as $atn_key => $atn_value) {
            $data = [
                'attend'=>$atn_value,
            ];

            $builder = $db->table('tbl_atnarts');
            $builder->where('id_no', $atn_key);
            $builder->where('atn_date', $atn);
            $builder->update($data);
        }

        session()->setFlashdata('meg', 'Attendance Update Successfully!');
        return redirect()->route('admin/atn_artslist');

    }
    public function atn_artsdelete($id){
        $db=db_connect();
        $model=new ArtsAtnModel();
        $model1= $model->find($id);
        $builder = $db->table('tbl_atnarts');
        $builder->where('atn_date', $model1['atn_date']);
        $builder->delete();

        session()->setFlashdata('meg', 'Attendance list Deleted Successfully!');
        return redirect()->route('admin/atn_artslist');
    }
    
    public function singlestudentatn($id_no){
        $model=new ScienceAtnModel();
        $data['atn_artsviewdate'] =$model->where('id_no',$id_no)->find();


        return view('Admin/singlestudentatn',$data);
    }

}