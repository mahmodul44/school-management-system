<?php 

include('../vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf();

$html= '<style>
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


<div style="border:1px solid;width:27%;height:24%; background-color:">
<div style="height:50px;border-top:1px solid #fff; background-color:lightgray;padding-bottom:4px">
<p style="text-align:center;font-size:15px;font-weight:bold;line-height:.1px;color:#AC1318;padding-top:-6px;padding-bottom:-5px">Students Care School</p>
<p style="text-align:center;line-height:.1px;font-size:14px;color:#AC1318;padding-bottom:-5px"><b>and</b></p>
<p style="text-align:center;line-height:.2px;font-size:15px;font-weight:bold;color:#AC1318;padding-bottom:-7px"> Teaching Centre</p>
<p style="padding-left:8px;line-height:px;font-size:11px;text-align:center;color:blue;padding-top:-5px;">Tambulpur,Pirgachha,Rangpur</p>
<p style="text-align:center;font-weight:bold;color:purple;font-size:14px;padding-top:-15px">' . $teacheridprint['title'] . ' ID Card</p>
</div>


<div style="text-align:center;height:103px;background-color:#4e4e3f;margin-top:-10px;border-top:1px solid #fff;border-bottom:1px solid #fff">
<img style="width:65%;border-radius:1px;border:2px solid #f5f5f5;height:100px;margin-top:-3px" src="uploads/TeacherID/' . $teacheridprint['photo'] . '"
alt="image">
</div>

<div style="background-color:#FFDDEE;color:#000;margin-top:3px;border-top:1px solid #fff;border-bottom:1px solid #555">
    <p style="text-align:center;padding-top:-16px;font-size:14px">' . $teacheridprint['t_name'] . '</p>
 <p style="text-align:center;padding-top:-16px;font-family:Arial;font-size:14px">Digenation:' . $teacheridprint['ocupation'] . '</p>
  <p style="font-size:12px;padding-left:0px;padding-left:5px;"> Web: www.studentscarebd.com</p>
 </div>

</div>';
$mpdf->WriteHTML($html);
$mpdf->Output('student_id.pdf', 'I');
exit;
?>