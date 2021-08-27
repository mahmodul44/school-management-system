<?php
include('../vendor/autoload.php');
$mpdf = new \Mpdf\Mpdf();

$html = '	<style>
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
			padding-top:1px;
			width:50%;

		}
	
	
.main-div{
	width: 100%;
	height:140px;
	
  } 
  .main-div-st{
	width: 90%;
	height:145px;
	
  } 
  .col-1 {
	width: 20%;
	float: left;
  }
  .col-2 {
	width: 60%;
	float: left;
	
	text-align: left;
  }
  .col-img {
	width: 20%;

	float: left;
	
  }
 
  .row{
	width:100%;
    line-height:1.3px;
	display: flex;
  }
  .row-st{
	width:100%;
	height:0px;
	line-height:.1px;
	display: flex;
  }
  .label{
	font-weight: bold;
     font-size:17px;
	color:black;
  }
  .p_output{
	font-size:18px;
  }
  .col-1-st{
  	width: 23%;
    
	float: left;
  }
  .col-2-st{
  	width: 70%;
	float: left;
	
	padding-left:20px;

  }
  .label-st{
  	font-weight:bold;
  	width:20%;
  	float:left;
  }
  .p_output-st{
  	
	width: 50%;
  }
  
  .p_output-2{
	float: left;
	width: 35%;
  }
  .column{
  	width:33.33%;
  	float:left;
  }
  .column h5{

    line-height:.3px;  
}
  .column p{
       line-height:.3px;
       padding-bottom:-10px;
  	font-size:16px;
  }
 
  	</style>
	<div class="main">
<div class="main-div">
<div class="col-1">
<img width="95%" src="Front/images/title_icon.jpg" alt="img">

</div>
<div class="col-2">
     <h2 style="text-align:center;line-height:.8px">STUDENTS CARE SCHOOL </h2>
     <h2 style="text-align:center;line-height:.8px">& TEACHING CENTRE</h2>
     <p style="text-align:center; color:#111111;line-height:.8px;font-size:16px">Mayer Dowa Plaza -1st Floor,Tambulpur Bazar, </p>
     <p style="text-align:center;line-height:.8px;font-size:16px">Pirgachha, Rangpur</p>
     <p style="text-align:center;line-height:.8px;font-size:17px">Website:<span style="color:blue"> www.studentscarebd.com</span></p>
</div>
<div class="col-img">
     <img style="width:95%;height:125px; border: 2px solid gray;" src="uploads/AdmissionForm/' .$result["photo"]. '" alt="Admission form image">
</div>
</div>


<div style="margin-top:10px">
     <h3>OFFICE COPY</h3>
     <div style="width:99%;">
          <hr>
     </div>
</div>
<table>
     <tr>
          <td class="label">Name:</td>
          <td class="p_output">' . $result['Name'] . '</td>
     </tr>
     <tr>
          <td class="label">Fathers Name:</td>
          <td class="p_output">' . $result['fName'] . '</td>
     </tr>
     <tr>
          <td class="label">Mothers Name:</td>
          <td class="p_output">' . $result['mName'] . '</td>
     </tr>
     <tr>
          <td class="label">School Name:</td>
          <td class="p_output">' . $result['sName'] . '</td>
     </tr>
     <tr>
          <td class="label">Class:</td>
          <td class="p_output">' . $result['Section'] . '</td>
     </tr>
     <tr>
          <td class="label">Date of Birth:</td>
          <td class="p_output">' . $result['birthDate'] . '</td>
     </tr>
     <tr>
          <td class="label">Phone:</td>
          <td class="p_output">' . $result['Phone'] . '</td>
     </tr>
     <tr>
          <td class="label">Gender:</td>
          <td class="p_output">' . $result['Gender'] . '</td>
     </tr>
     <tr>
          <td class="label">Village:</td>
          <td class="p_output">' . $result['Village'] . '</td>
     </tr>
     <tr>
          <td class="label">Union:</td>
          <td class="p_output">' . $result['uName'] . '</td>
     </tr>
     <tr>
          <td class="label">Thana/Upazila:</td>
          <td class="p_output">' . $result['Thana'] . '</td>
     </tr>
     <tr>
          <td class="label">District:</td>
          <td class="p_output">' . $result['District'] . '</td>
     </tr>
     <tr>
          <td class="label">Date of Admission:</td>
          <td class="p_output">' . $result['admissionDate'] . '</td>
     </tr>
     <tr>
     <td></td>
    </tr>
    <tr>
    <td></td>
    </tr>
     
</table>

<div style="width:100%;padding-top:15px;color:red">
     <hr>
</div>

<div style="line-height:.5px">
     <p style="font-size:20px;font-weight:bold;text-align:center;padding-top:7px">STUDENT COPY</p>
</div>

<div class="main-div-st">
     <div class="col-1-st">
          <img style="width:95%;height:150px; border: 2px solid gray;" src="uploads/AdmissionForm/' . $result["photo"] . '" alt="image">
     </div>
     <div style="float:left" class="col-2-st">
          <table>
               <tr>
                    <td class="label">Name:</td>
                    <td class="p_output">' . $result['Name'] . '</td>
               </tr>
               <tr>
                    <td class="label">Fathers Name:</td>
                    <td class="p_output">' . $result['fName'] . '</td>
               </tr>

               <tr>
                    <td class="label">School Name:</td>
                    <td class="p_output">' . $result['sName'] . '</td>
               </tr>
               <tr>
                    <td class="label">Class:</td>
                    <td class="p_output">' . $result['Section'] . '</td>
               </tr>
               <tr>
                    <td class="label">Phone:</td>
                    <td class="p_output">' . $result['Phone'] . '</td>
               </tr>
                <tr>
          <td class="label">Date of Admission:</td>
          <td class="p_output">' . $result['admissionDate'] . '</td>
     </tr>
          </table>

     </div>


</div>
<div style="padding-top:50px;">
     <div class="column">
<p>(Shukdeb Chandro Barmon)</p>
          <h3>General Manager</h3>
     </div>
     <div class="column">
     <p>(Mydul islam)</p>
          <h3 style="padding-left:12px">Cashier & Controller of Examination</h3>
     </div>
     <div class="column">
<p>(Ripon Mahmud Riyad)</p>
     <h3>Excutive Director</h3>
     </div>
</div>
<p style="padding-top:-15px;"> <><><>  For any information please visit our website:<span style="color:blue;"> www.studentscarebd.com</span> <><><></p>
</div>
';
// $mpdf->SetWatermarkText('Students Care School & Teaching Centre');
// $mpdf->showWatermarkText=true;
$mpdf->SetWatermarkImage('Front/images/title_icon.jpg');
$mpdf->showWatermarkImage=true;
$mpdf->WriteHTML($html);
$mpdf->Output('studentscare.pdf', 'I');
exit;
?>