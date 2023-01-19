<?php                
require './functions/config.php'; 
require './functions/myfunctions.php'; 
include_once('TCPDF/tcpdf.php');

//----- Code for generate pdf
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);  
//$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
$pdf->SetDefaultMonospacedFont('helvetica');  
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
$pdf->SetMargins(PDF_MARGIN_LEFT, '2', PDF_MARGIN_RIGHT);  
$pdf->setPrintHeader(false);  
$pdf->setPrintFooter(false);  
$pdf->SetAutoPageBreak(TRUE, 10);  
$pdf->SetFont('helvetica', '', 12);  
$pdf->AddPage(); //default A4
//$pdf->AddPage('P','A5'); //when you require custome page size 

$user_id = $_GET['EMP_ID'];
$report = employee_report($user_id);
$count=mysqli_num_rows($report);

$content = ''; 

$content .= '
<style type="text/css">
body{
font-size:12px;
line-height:24px;
font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
color:#000;
}
</style>    
<table cellpadding="0" cellspacing="0" style="border:1px solid #ddc;width:100%;">
<table style="width:100%;" >
<tr><td colspan="5">&nbsp;</td></tr>
<tr><td colspan="5" align="center"><b>DADA BHAI NOORJEE ELECTRONICS</b></td></tr>
<tr><td colspan="5" align="center"><b>CONTACT: +92 0335 XXXXXXX</b></td></tr>
<tr><td colspan="5" align="center"><b>WEBSITE: www.DBN-electronics.com</b></td></tr>
<tr><td colspan="5">&nbsp;</td></tr>
<tr><td colspan="5" align="center" style="font-size:14px;text-decoration:underline;"><b>EMPLOYEE REPORT</b></td></tr>
<br></br>
<tr class="heading" colspan="5" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;">

	<td align="center">
		PRODUCT ID
	</td>
	<td align="center">
		NAME
	</td>
	<td align="center">
		QUANTITY
	</td>
	<td align="center">
		SALE PRICE
	</td>
	<td align="center">
		EXTENDED PRICE
	</td>
</tr>';
		// $total=0;
		// $inv_det_query = "SELECT T2.PRODUCT_NAME, T2.AMOUNT FROM INVOICE_DET T2 WHERE T2.MST_ID='".$MST_ID."' ";
		// $inv_det_results = mysqli_query($con,$inv_det_query);    
		// while($inv_det_data_row = mysqli_fetch_array($inv_det_results, MYSQLI_ASSOC))
		// {
		while($row = mysqli_fetch_assoc($report))
		{
		$content .= '
		  <tr class="">
			  <td align="center">
				  <b>'.$row['product_id'].'</b>
			  </td>
			  <td align="center">
			  	  <b>'.$row['product_name'].'</b>
			  </td>
			  <td align="center">
				  <b>'.$row['units_sold'].'</b>
			  </td>
			  <td align="center">
			  	  <b>'.$row['unit_price'].'</b>
			  </td>
			  <td align="center">
			  	  <b>'.$row['extended_price'].'</b>
			  </td>
		  </tr>';
		}
		$content .= '<tr class="total"><td colspan="2" align="right">------------------------</td></tr>
		<tr><td colspan="2" align="right"><b>GRAND&nbsp;TOTAL:&nbsp;TOTAL</b></td></tr>
		<tr><td colspan="2" align="right">------------------------</td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	<tr><td colspan="2">&nbsp;</td></tr>
	</table>
</table>'; 
$pdf->writeHTML($content);

$file_location = "/home/fbi1glfa0j7p/public_html/examples/generate_pdf/uploads/"; //add your full path of your server
//$file_location = "/opt/lampp/htdocs/examples/generate_pdf/uploads/"; //for local xampp server

$datetime=date('dmY_hms');
$file_name = "INV_".$datetime.".pdf";
ob_end_clean();

if($_GET['ACTION']=='VIEW') 
{
	$pdf->Output($file_name, 'I'); // I means Inline view
} 
else if($_GET['ACTION']=='DOWNLOAD')
{
	$pdf->Output($file_name, 'D'); // D means download
}
// else if($_GET['ACTION']=='UPLOAD')
// {
// $pdf->Output($file_location.$file_name, 'F'); // F means upload PDF file on some folder
// echo "Upload successfully!!";


//----- End Code for generate pdf
	
// }
else
{
	echo 'Record not found for PDF.';
}

?>