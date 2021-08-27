<?php

include('../vendor/autoload.php') ;
$mpdf = new \Mpdf\Mpdf();

$html ='
<style>
.main{width: 760px;margin:0 auto;left:0;}	
.main-div{width: 100%;height:100px;padding-top:-50px;}

.col-1 {
	width: 20%;
	float: left;
  }
  .col-2 {
	width: 80%;
	float: left;
	text-align: left;
  }
  hr{
    padding-left:-40px;
    color:red;
  }
  
.col-admit{
width:110px;
height: 10px;
background-color:purple;
color:#ffffff;
font-weight:bold;
border-radius:5px;
margin-left:40%;
margin-top:2px;
padding-bottom: -15px;
padding-top: -15px;
}

  </style>
<div class="main">

<div class="main-div">
<div class="col-1">
<img width="90%" height:90px; style="float:left;margin-top:15px" src="../Front/images/title_icon.jpg" alt="image">
</div>
<div class="col-2">
<p>Serial no:<span style="color:blue;font-size:20px;">'.$result['serial_no'].'</span></p>
<h3 style="line-height:.3;color:purple;padding-left:5px;text-align: -webkit-left">STUDENTS CARE SCHOOL AND TEACHING CENTRE</h3>
<h4 style="line-height:.3;color:purple;padding-left:5px;text-align: center"><b>'.$result['exm_name'].'</b></h4>

</div>
<div class="col-admit">
<h4 style="text-align:center;">Admit Card</h4>
</div>

</div>
<br>
<table style="padding-top:-15px">

<tr>
<th>Roll No:</th>
<td style="text-align:center;padding-left:-40px;">'.$result['roll'].'</td>
<th>Code No & Center Name:</th>
<td>'.$result['code_no'].'</td>
</tr>
<tr>
<th>Reg. No:</th>
<td style="padding-left:-30px">'.$result['reg_no'].'</td>
<th>Code No & Instituation Name:</th>
<td>'.$result['code_ins_name'].'</td>
</tr>
<tr>
<th>Session:</th>
<td>'.$result['session'].'</td>
<th>Name of the Examinee:</th>
<td>'.$result['student_name'].'</td>
</tr>
<tr>
<th>Type Of 
the Examinee:</th>
<td>'.$result['exm_type'].'</td>
<th>Father`s Name:</th>
<td>'.$result['fname'].'</td>
</tr>
<tr>
<th>Group:</th>
<td>'.$result['section'].'</td>
<th>Mother`s Name:</th>
<td>'.$result['mname'].'</td>
</tr>
<tr>
<th style="">Code No & Subject(s)</th>
<th></th>
<th>Date of Birth:</th>
<td>'.$result['dob'].'</td>
</tr>
<tr>
<td colspan="2">101 - QURAN </td>
<td colspan="1">102 - HADITCH SHARIF</td>
<td>103 - ARABIC - I</td>
</tr>
<tr>
<td colspan="2">104 - ARABIC - II</td>
<td colspan="1">133 - AL-FQH </td>
<td>109 - HISLAMIC HISTORY</td>
</tr>
<tr>
<td colspan="2">'.$result['code_1'].'</td>
<td colspan="1">'.$result['code_2'].'</td>
<td>'.$result['code_3'].'</td>
</tr>
<tr>
<td colspan="2">'.$result['code_4'].'</td>
<td colspan="1">'.$result['code_5'].'</td>
<td>'.$result['code_6'].'</td>
</tr>
<tr>
<td colspan="2">'.$result['code_7'].'</td>

</tr>
</table>
<div style="width:300px;background-color:#fff;height:60px;margin-top:30px;float:right;padding-bottom: -2px">
<h4 style="line-height:1px;text-align:center">Md.Mydul Islam</h4>
<p style="line-height:1px;text-align:center">Controller of Examinations</p>

</div>

<div style="width:760px;margin-top:-10px;">
<h1 style="border-bottom:1px solid black"></h1>
</div>
<br>
<div style="margin-top:-45px;">
<p style="padding-top:-6px;color:blue">1. Admit Card For Students Care School and Teaching Centre,Tambulpur, Pirgachha, Rangpur.</p>
</div>
</div>';
$mpdf->WriteHTML($html);
$mpdf->Output('admitcard.pdf', 'I');
exit;
?>