<?php namespace App\Controllers;

use App\Models\PaymentModel;
use CodeIgniter\Controller;
class PaymentController extends BaseController{
     


     public function insert()
     {

          $data = [
               'st_name' => $this->request->getVar('st_name'),
               'payment_method' => $this->request->getVar('payment_method'),
               'mobile' => $this->request->getVar('mobile'),
               'trxID' => $this->request->getVar('trxID'),
          ];
          
          $model = new PaymentModel();
          $model->insert($data);
          //     print_r($data);
          //     die();
          session()->setFlashdata('meg', 'your payment is sucessfull');
          return redirect()->route('payment');
     }
     public function admissionfee(){
          $model = new PaymentModel();
          $data['paymentlist'] = $model->findAll();
          return view('admin/admissionfee', $data);
     }
     public function admissionfee_delete($id){
          $model = new PaymentModel();
          $model->where('id', $id)->delete();
          session()->setFlashdata('data_del', 'Payment Deleted !');
          return redirect()->route('admin/admissionfee');
     }
     
}