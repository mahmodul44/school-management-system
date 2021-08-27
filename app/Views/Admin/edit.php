<?php include 'layouts/header.php'; ?>
<?php include 'layouts/footer.php'; ?>
<?php
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$data = '	<style>
		.td_name{
			font-size: 18px;
			color: blue;
			text-align: center;
			 padding-top: 5px;
			 padding-left: 20px;
			  width:30%;
		}
		.td_colon{
			font-size:18px;
			padding-top: 5px;
			width: 3%;

		}
		.td_output{
			font-size: 16px;
			padding-top: 5px;
			width:50%;

		}
	.tblone{width: 850px;margin:0 auto;}
.tblone tr td{text-align: justify;}	
	</style>


<table class="tblone">
		<tr>
			<td colspan="5">
			<center><img style="width: 12%;" src="img/logo.png"></center>
			<h2 style="text-align: center;line-height:.3;color:red">Students Care Teaching Center</h2>
			<p style="text-align: center;line-height:.3;color:purple;">Tambulpur Bazer, Pirgachha, Rangpur</p>
			
		</td>
		</tr>
		
		<tr>
			<td colspan="4">
			<h3 style="text-align: left">Office Copy</h3><hr>
		</td>
		<td class="td_colon"></td>
		<td class="td_output"><img style="width:80px; height:60px;border:1px solid black" src="' . $student_info['photo'] . '"></td>
		</tr>

		<tr>
			<td class="td_name">Student Name</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Name'] . '</td>
		</tr>

		<tr>
			<td class="td_name">Father Name</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['fName'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Mother Name</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['mName'] . '</td>
		</tr>
		<tr>
			<td class="td_name">School Name</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['sName'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Group</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Section'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Date Of Birth</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['birthDate'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Gender</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Gender'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Mobile</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Phone'] . '</td>
		</tr>
         <tr>
			<td class="td_name">Distric</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Distric'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Thana</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Thana'] . '</td>
		</tr>
		 <tr>
			<td class="td_name">Village</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Village'] . '</td>
		</tr>
<tr>
			<td class="td_name">Date Of Submission</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['admissionDate'] . '</td>
		</tr>
       <tr>
			<td style="padding-top: 15px;padding-bottom:10px">--- -- -- -- -- -- -- -- -- -- -- -- -- </td>
			<td style="padding-top: 15px;padding-bottom:10px"> - - - </td>
			<td style="padding-top: 15px;padding-bottom:10px"> -- -- -- -- -- -- -- -- -- -- --- --  --- --- -- -- -- -- --- --- -- --- -- -- -- -- -- -- -- ----</td>
		</tr>

<tr>
			<td colspan="4">
			<h3 style="text-align: left">Student Copy</h3><hr>
		</td>
		<td class="td_colon"></td>
		<td class="td_output"><img style="width:80px; height:60px;border:1px solid black;" src="' . $student_info['photo'] . '"></td>
		</tr>

<tr>
<td class="td_name">Student Name</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Name'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Father Name</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['fName'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Group</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Section'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Mobile</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['Phone'] . '</td>
		</tr>
		<tr>
			<td class="td_name">Date Of Submission</td>
			<td class="td_colon">:</td>
			<td class="td_output">' . $student_info['admissionDate'] . '</td>
		</tr>
<tr>
			<td style="padding-top: 42px" colspan="5">
			<p style="float: left;padding-left: 30px;font-weight:bold">Director Signature</p>
			<p style="float: right;margin-right: 10px;font-weight:bold">Manager Signature</p>
			<p style="text-align: center;font-weight:bold;">Accounts Signarture</p>
		</td>
		</tr>
		
	</table>';

$dompdf->loadHtml($data);
$dompdf->render();
$dompdf->setPaper('A4', 'landscape');
$dompdf->stream('students_care', array('Attachment' => 0));