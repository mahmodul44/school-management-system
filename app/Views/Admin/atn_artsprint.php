
<?php

include('../vendor/autoload.php') ;
$mpdf = new \Mpdf\Mpdf();

      
           $html="
        <style>
        .sname{
        text-align:center;
            color:black;
            line-height:.2px;
        }
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
        </style>
        <div class='sname'>
        <h3>students Care School & Teaching Centre</h3>
        <p>Mayer Dowa Plaza,Tambulpur Bazar,Pirgachha,Rangpur.</p><h4>Eight Attendence List</h4></div>
         <table class='center'>
                                    <tr>
                                        
                                        <th>ID NO</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Attendence</th>

                                    </tr>";

                                        if($atn_artsprint){
foreach ($atn_artsprint as $key=>$data){
    $html.="<tr><td>".$data['id_no']." </td> <td>".$data['st_name']."</td><td>".$data['atn_date']."</td> <td>".$data['attend']."</td></tr>";
            }
$html.="</table>";
        }
$mpdf->WriteHTML($html);
$mpdf->Output('Attendence_Arts.pdf', 'I');
exit;