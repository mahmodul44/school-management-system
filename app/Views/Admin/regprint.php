<?php
include('../vendor/autoload.php') ;
$mpdf = new \Mpdf\Mpdf();

$html = '<style>
.main{width: 750px;margin:0 auto;}
.main-div{
	width: 100%;
	height:120px;
	
  } 
  .col-1 {
	width: 20%;
	float: left;
	
  }
  .col-2 {
	width: 50%;
	float: left;
	
	text-align: left;
  }
  .col-img {
	width: 20%;
	float: left;
  }
  .col-std {
	width: 23%;
	float: left;
  }
  .col-shd {
	width: 45%;
	float: left;
	
	text-align: left;
  }
  .col-ins {
	width: 30%;
	float: left;
  }
</style>
<div class="main">
<h2 style="padding-top:5px;font-family:Helvetica;TEXT-ALIGN:CENTER;color:purple">STUDENTS CARE SCHOOL AND TEACHING CENTRE</h2>
<div class="main-div">
<div class="col-1">
<img width="90%" style="height:105px;float:right" src="../Front/images/title_icon.jpg" alt="image">
</div>
<div class="col-2">
     <h2 style="line-height:.3;color:#09805f;text-align:center">Registration Card</h2>
     <h3 style="padding-left:15px; line-height:.3;color:black;text-align:center;font-weight:bold;">' .
    $result['exam_type'] . '</h3>
</div>
<div class="col-img">
     <p style="padding-left:-32px;padding-top:-28px;font-size:16px"><b>Serial No:</b> ' . $result['serial_no'] . '</p>
     <img width="80%" style="height:125px;padding-top:-18px" src="../public/uploads/Registration/' .
    $result['photo'] . '" alt="image">
</div>
</div>
<table style="padding-top:25px">

     <tr>
          <td>Reg No:</td>
          <td>' . $result['reg_no'] . '</td>
          <td>Session:</td>
          <td>' . $result['session'] . '</td>
     </tr>

     <tr>
          <td>Student Name:</td>
          <td>' . $result['std_name'] . '</td>
     </tr>
     <tr>
          <td>Father`s Name:</td>
          <td>' . $result['fname'] . '</td>
     </tr>
     <tr>
          <td>Mother`s Name:</td>
          <td>' . $result['mname'] . '</td>
     </tr>
     <tr>
          <td>Date Of Birth:</td>
          <td>' . $result['dob'] . '</td>
     </tr>
     <tr>
        <td>In words:</td>
      <td>' . $result['dob_words'] . '</td>
     </tr>
     <tr>
        <th>JSC Information </th>
     </tr>
</table>
<table>
     
     <tr>
          <td>Roll No : </td>
          <td>' . $result['jsc_roll'] . '</td>
          <td>Board:</td>
          <td>' . $result['board'] . '</td>
     </tr>
     <tr>
          <td>class:</td>
          <td>' . $result['class'] . '</td>
          <td>Section:</td>
          <td>' . $result['section'] . '</td>
     </tr>
     <tr>
          <td>class roll:</td>
          <td>' . $result['class_roll'] . '</td>
          <td>Gender:</td>
          <td>' . $result['gender'] . '</td>
     </tr>
     <tr>
          <td>Instituation Code:</td>
          <td>' . $result['ins_code'] . '</td>
          <td>Group:</td>
          <td>' . $result['groups'] . '</td>
     </tr>
     <tr>
          <td>Instituation Name:</td>
          <td>' . $result['ins_name'] . '</td>
     </tr>
     <tr>
          <td>Upazila:</td>
          <td>' . $result['thana'] . '</td>
          <td>District:</td>
          <td>' . $result['district'] . '</td>
     </tr>
     <tr>
          <th>Subjects Code and Name</th>
     </tr>
</table>

<table>

     <tr>
          <td colspan="2">' . $result['bn_1'] . '</td>
          <td colspan="2">' . $result['bn_2'] . '</td>
          <td>' . $result['en_1'] . '</td>
     </tr>
     <tr>
          <td colspan="2">' . $result['en_2'] . '</td>
          <td colspan="2">' . $result['math'] . '</td>
          <td>' . $result['ict'] . '</td>
     </tr>
     <tr>
          <td colspan="2">' . $result['code_1'] . '</td>
          <td colspan="2">' . $result['code_2'] . '</td>
          <td>' . $result['code_3'] . '</td>
     </tr>
     <tr>
          <td colspan="2">' . $result['code_4'] . '</td>
          <td colspan="1">' . $result['code_5'] . '</td>

     </tr>
     <tr>
          <td colspan="2">' . $result['code_6'] . '</td>
          <td colspan="1">' . $result['code_7'] . '</td>

     </tr>
     <tr>
          <th>Additional: </th>
          <td>' . $result['code_ob'] . '</td>
     </tr>
</table>


<div style="margin-top:40px" class="main-div">
     <div class="col-std">
          <h4>Student`s Signature</h4>
     </div>
     <div class="col-shd">

          <p style="padding-left:15px;color:#111111;text-align:center">General Manager</p>
     </div>
     <div class="col-ins">

          <p style="padding-top:0px;">Excutive Director</p>
     </div>
     <div style="width:760px;margin-top:-20px;">
     <hr>
        
          <p style="color:blue;margin-top:-10px">Registration Card For Students Care School and Teaching Centre.
               Tambulpur,Pirgachha,Rangpur.Examinee Must Bring This Card in the Examination Hall .</p>
     </div>
</div>

</div>
' ;
$mpdf->SetWatermarkImage('../Front/images/title_icon.jpg');
$mpdf->showWatermarkImage=true;
$mpdf->WriteHTML($html);
$mpdf->Output('registration_card.pdf', 'I');
exit;