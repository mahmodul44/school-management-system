<?php

include('../vendor/autoload.php') ;
$mpdf = new \Mpdf\Mpdf();

$html= '
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}

table.bordered {
  margin-left: auto; 
  margin-right: auto;
}
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
    .col-shd {
	width: 45%;
	float: left;
	
	text-align: left;
  }
  .main-div{
	width: 30%;
	height:20px;
	
  } 
</style>
<div style="width:100%;height:60%;padding-bottom:-5px">
<div style="height:90px;">
<p style="text-align:center;font-size:21px;font-weight:bold;line-height:.1px;padding-top:-6px;padding-bottom:-5px">Students Care School & Teaching Centre</p>

<p style="padding-left:16px;line-height:px;font-size:17px;text-align:center;padding-top:-5px;">Tambulpur,Pirgachha,Rangpur</p>
<p style="font-size:17px;padding-top:-15px;text-align:center"> Web: www.studentscarebd.com</p>

<p style="text-align:center;font-weight:bold;font-size:16px;padding-top:-15px">' . $result['reciptbook'] . '</p>
<div class="row">
<p style="text-align:left;font-size:16px;padding-top:-15px">Name: ' . $result['st_name'] . '</p>
<p style="text-align:right;font-size:15px;padding-top:-35px">ID NO: ' . $result['st_id'] . '</p>
</div>

<div class="row">
<p style="text-align:left;font-size:16px;padding-top:-35px">' . $result['st_class'] . '</p>
<p style="text-align:right;font-size:15px;padding-top:-23px">' . $result['st_mobile'] . '</p>
</div>
<p style="font-size:12px;padding-left:0px;padding-left:5px;padding-top:-15px;"> </p>
</div>
</br></br>
<div style="height:40px;padding-top:-53px;margin-top:50px;padding-bottom:-8px;">
<table class="bordered" style="border:1px solid black;width:100%">
<thead>
<tr>
<th>Month</th>
<th>Pay Type</th>
<th>Tk</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<tr>
<td>'. $result['month_one'] . '</td>
<td>'. $result['type_one'] . '</td>
<td>'. $result['amount_one'] . '</td>
<td>'. $result['total_one'] . ' TK</td>
</tr>
<tr>
<td>'. $result['month_two'] . '</td>
<td>'. $result['type_two'] . '</td>
<td>'. $result['amount_two'] . '</td>
<td>'. $result['total_two'] . ' TK</td>
</tr>
<tr>
<td>'. $result['month_three'] . '</td>
<td>'. $result['type_three'] . '</td>
<td>'. $result['amount_three'] . '</td>
<td>'. $result['total_three'] . ' TK</td>
</tr>
<tr>
<th colspan="3">Total Amount</th>
<th>'. $result['totals'] . ' TK</th>
</tr>
</tbody>
</table>
 



</div>
<div style="margin-top:20px" class="main-div">
     <div class="col-std">
<p style="padding-bottom:-20px;text-align:center">Mydul Islam</p>
<p style="margin-left:15px">---------------------------------------</p>
         <h4 style="padding-top:-20px;text-align:center">Cashier Signature</h4>
     </div>
     </div>
</div>
';
$mpdf->WriteHTML($html);
$mpdf->Output('Recipt_Book.pdf', 'I');
exit;
?>