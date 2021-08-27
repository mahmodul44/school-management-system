<?php namespace App\Controllers;
use App\Models\IDCardModel;
use App\Models\Science_PaymentModel;

use CodeIgniter\Controller;
class SSCPaymentController extends BaseController
{
public function science_paymentadd(){
    $model = new IDCardModel();
    $data['st_idlist'] = $model->findAll();

    return view('Admin/science_paymentadd',$data);
}
    public function science_paymentlist(){
//        $db=db_connect();
//        $builder = $db->table('tbl_idcard');
//        $builder->select('*');
//        $builder->join('tbl_sciencepayment','tbl_sciencepayment.st_id = tbl_idcard.id_no');
//        $query   = $builder->get();
//        echo "<pre>";
//        print_r($query->getResultArray());
//        die();
    $model=new Science_PaymentModel();
        $currentPage=$this->request->getVar('page_idcardlist') ? $this->request->getVar('page_sciencepaymentlist'):1;
        $data=[
            'science_paymentlist'=>$model->paginate(2,'science_paymentlist'),
            'pager' => $model->pager,
            'currentPage' =>$currentPage
        ];
        return view('Admin/science_paymentlist',$data);
    }
    public function insertscience_payment()
    {
        $data = [
            'st_id' => $this->request->getVar('st_id'),
            'month' => $this->request->getVar('month'),
            'payable' => $this->request->getVar('payable'),
            'pay' => $this->request->getVar('pay'),
            'due' => $this->request->getVar('due'),
            'paid' => $this->request->getVar('paid'),

        ];

        $model = new Science_PaymentModel();
       $model->insert($data);

        return redirect()->route('admin/science_paymentlist');
    }

    public function sciencepay_delete($id){
        $model = new Science_PaymentModel();
        $model->where('id', $id)->delete();
        session()->setFlashdata('meg', 'This Payment Row Is Deleted Successfully !');
        return redirect()->route('admin/science_paymentlist');
    }
    public function sciencepay_view($id){
        $model = new Science_PaymentModel();
        $data['sciencepay_view']=$model->find($id);
        return view('Admin/payment/sciencepay_view',$data);
    }
    public function sciencepay_print($id)
    {
        $model = new Science_PaymentModel();
        $data['sciencpay_print'] = $model->find($id);

        return view('Admin/sciencepay_print', $data);
    }
    public function sciencepay_edit($id){
    $model =new Science_PaymentModel();
    $data['science_payedit']=$model->find($id);
    return view('Admin/sciencepay_edit',$data);
    }
}