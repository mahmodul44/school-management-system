<?php

include('../vendor/autoload.php') ;
$mpdf = new \Mpdf\Mpdf();

$html= '
<style>
.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

   .p_output{
	float: left;
	width: 70%;
  }
  .label{
	font-weight: bold;
	float: left;
	width: 30%;
	
  }
</style>
<div style="border:1px solid;width:28%;height:29%;padding-bottom:-5px; background-color:#BCE6E4">
<div style="height:70px;">
<p style="text-align:center;font-size:15px;font-weight:bold;line-height:.1px;color:#AC1318;padding-top:-6px;padding-bottom:-5px">Students Care School</p>
<p style="text-align:center;line-height:.1px;font-size:14px;color:#AC1318;padding-bottom:-5px"><b>and</b></p>
<p style="text-align:center;line-height:.2px;font-size:15px;font-weight:bold;color:#AC1318;padding-bottom:-7px"> Teaching Centre</p>
<p style="padding-left:8px;line-height:px;font-size:11px;text-align:center;color:blue;padding-top:-5px;">Tambulpur,Pirgachha,Rangpur</p>
<p style="text-align:center;font-weight:bold;color:purple;font-size:14px;padding-top:-15px">Students ID Card</p>
</div>

<div style="background-color:#FEE6FE;color:#000;height:30px;padding-top:-53px;margin-top:30px;padding-bottom:-8px;">
<div style="text-align:center">
<img style="width:55%;border-radius:10px;border:2px solid #555;margin-top:8px;height:90px" src="uploads/IDCard/' . $idcardprint['photo'] . '" alt="image">
</div>
 <p style="text-align:center;font-weight:bold;padding-top:-12px;font-size:15px;color:purple">' . $idcardprint['st_name'] . '</p>

 <p style="text-align:center;padding-top:-16px;font-size:14px">ID:' . $idcardprint['id_no'] . '</p>
 <p style="text-align:center;padding-top:-16px;font-family:Arial;font-size:14px">Class:' . $idcardprint['class'] . '</p>
 <p style="text-align:center;padding-top:-16px;font-size:14px">Section:  ' . $idcardprint['section'] . '</p>
 <p style="text-align:center;padding-top:-16px;font-size:14px">Phone:  ' . $idcardprint['mobile'] . '</p>
<p style="font-size:12px;padding-left:0px;padding-left:5px;padding-top:-15px;"> Web: www.studentscarebd.com</p>
</div>
</div>
';
$mpdf->WriteHTML($html);
$mpdf->Output('student_id.pdf', 'I');
exit;
?>