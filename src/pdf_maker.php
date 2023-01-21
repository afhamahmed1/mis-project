<?php
session_start();       
require './functions/config.php'; 
include_once('./functions/myfunctions.php'); 
include_once('TCPDF/tcpdf.php');

$user_id = $_GET['EMP_ID'];
$user_name= $_GET['USER_NAME'];
$user_details=getAll('employees');

if (isset($user_id))
{
	include_once('middleware/employeeMiddleware.php');
	$report= employee_report($user_id);
	$employee_data = mysqli_fetch_assoc(getById('employees',$user_id));
	$report_title= 'SALESPERSON REPORT';
	$employee_name = '<td colspan="2"><b>EMPLOYEE NAME: '.$employee_data['name'].'</b></td>';
	$monthly_sales=monthly_sales($user_id);

	$annual_sales=annual_sales($user_id);

	$total_orders=getTotalOrders($user_id);
	
	$items_sold=getTotalItemsSold($user_id);

	$commision=calcCommission($user_id);
}
else
{
	include_once('middleware/adminMiddleware.php');
	$report = manager_report();
	$report_title= 'COMPANY REPORT';
	$employee_name = '';
	
	$monthly_sales=monthly_sales();

	$annual_sales=annual_sales();

	$total_orders=getTotalOrders();
	
	$items_sold=getTotalItemsSold();
}
$count=mysqli_num_rows($report);

if ($count>0)
{
	//----- Code for generate pdf
	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);  
	//$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
	$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
	$pdf->SetDefaultMonospacedFont('helvetica');  
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
	$pdf->SetMargins(PDF_MARGIN_LEFT, '1', PDF_MARGIN_RIGHT);  
	$pdf->setPrintHeader(false);  
	$pdf->setPrintFooter(false);  
	$pdf->SetAutoPageBreak(TRUE, 10);  
	$pdf->SetFont('helvetica', '', 12);  
	$pdf->AddPage(); //default A4
	//$pdf->AddPage('P','A5'); //when you require custome page size 

	$content = ''; 

	$content .= '
	<style type="text/css">
	body{
	font-size:12px;
	line-height:10px;
	font-family:"Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	color:#000;
	}
	</style>    
	<table cellpadding="0" cellspacing="0" style="border:1px solid #808080;width:100%;">
	<table style="width:100%;" >
	<tr><td colspan="5">&nbsp;</td></tr>
	<tr><td colspan="5" align="center"><b>DADA BHAI NOORJEE ELECTRONICS</b></td></tr>
	<tr><td colspan="5" align="center"><b>CONTACT: +92 335 XXXXXXX</b></td></tr>
	<tr><td colspan="5" align="center"><b>WEBSITE: www.DBN-electronics.com</b></td></tr>
	<tr><td colspan="5">&nbsp;</td></tr>
	<br>
	<br>
	<tr>
		<td colspan="5" align="center" style="font-size:14px;text-decoration:underline;">
			<b>'.$report_title.'</b>
		</td>
	</tr>
	<br>
	<br>
	<tr><td>&nbsp;</td></tr>
	<tr>'.$employee_name.'
		<td align="right" colspan="3"><b>PUBLISH DT.: '.date("d-m-Y").'</b></td>
	</tr>
	<tr>
		<td colspan="3"><b>PHONE NUMBER:'.$employee_data["phone"].' </b></td>
	</tr>
	<br>
	<br>
	<tr>
		<td colspan="5" align="center" style="font-weight:bold;font-size:11px;">SALES</td>
	</tr>
	<tr>
		<td colspan="5" align="center">
			------------------------------------------------------------------------------------------------------------------------------
		</td>
	</tr>
	<tr>
		
		<td colspan="1" style="font-weight:bold;font-size:11px;">YEAR: </td>
		<td> '.$annual_sales.'</td>
		<td></td>
		<td  colspan="1" style="font-weight:bold;font-size:11px;">MONTH: </td>
		<td > '.$monthly_sales.'</td>
		
	</tr>
	<tr>
		<td colspan="5" align="center">
			-------------------------------------------------------------------------------------------------------------------------------
		</td>
	</tr>
	<br>
	<tr>
		<td colspan="5" align="center" style="font-weight:bold;font-size:11px;">ORDERS</td>
	</tr>
	<tr>
		<td colspan="5" align="center">
			------------------------------------------------------------------------------------------------------------------------------
		</td>
	</tr>
	<tr>
		<td align="center" style="font-weight:bold;font-size:11px;">TOTAL ORDERS: </td>
			<td> '.$total_orders.'</td>
			
	</tr>
	<tr>
		<td colspan="5" align="center">
			-
		</td>
	</tr>
	<tr>
		<td colspan="5" align="center">
			-------------------------------------------------------------------------------------------------------------------------------
		</td>
	</tr>
	<tr class="" colspan="5" style="background:#eee;border-bottom:1px solid #ddd;font-weight:bold;font-size:11px;">

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
	</tr> 
	<tr>
		<td colspan="5" align="center">
			-------------------------------------------------------------------------------------------------------------------------------
		</td>
	</tr>';
			// $total=0;
			// $inv_det_query = "SELECT T2.PRODUCT_NAME, T2.AMOUNT FROM INVOICE_DET T2 WHERE T2.MST_ID='".$MST_ID."' ";
			// $inv_det_results = mysqli_query($con,$inv_det_query);    
			// while($inv_det_data_row = mysqli_fetch_array($inv_det_results, MYSQLI_ASSOC))
			// {
			$total_quantity = 0;
			$total_price = 0;
			while($row = mysqli_fetch_assoc($report))
			{
			$total_quantity = $total_quantity + $row['units_sold'];
			$total_price = $total_price + $row['extended_price'];
			$content .= '
			  <tr class="">
				  <td align="center">
					  '.$row['product_id'].'
				  </td>
				  <td align="center">
				  	  '.$row['product_name'].'
				  </td>
				  <td align="center">
					  '.$row['units_sold'].'
				  </td>
				  <td align="center">
				  	  '.$row['unit_price'].'
				  </td>
				  <td align="center">
				  	  '.$row['extended_price'].'
				  </td>
			  </tr>';
			}
			$content .= '
			<tr>
				<td colspan="5" align="center">
					------------------------------------------------------------------------------------------------------------------------------
				</td>
			</tr>
			<tr style="font-weight:bold;font-size:11px;">
				<td align="center">TOTAL: </td>
				<td>&nbsp;</td>
				<td align="center">'.$total_quantity.'</td>
				<td>&nbsp;</td>
				<td align="center">'.$total_price.'</td>
			</tr>
			
			<tr><td colspan="2">&nbsp;</td></tr>
			<tr><td colspan="2">&nbsp;</td></tr>
			<tr style="font-size:10px;">
				<td></td><td></td><td></td>
				<td colspan="2" style="text-align:right;color: #252525;">
					Printed by: '.$user_name.' &nbsp;&nbsp;&nbsp;
				</td>
			</tr>
			<tr style="font-size:10px;">
				<td></td><td></td><td></td>
				<td colspan="2" style="text-align:right;color: #252525;">
					On: '.date("d-m-Y").' &nbsp;&nbsp;&nbsp;
				</td>
			</tr>
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
		
}
else
{
	echo 'Record not found for PDF.';
}

?>