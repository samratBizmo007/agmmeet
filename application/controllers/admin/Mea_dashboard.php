<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mea_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//start session		
		$admin_name=$this->session->userdata('admin_nameEvent');
		$sessionArr=explode('|', $admin_name);
	//check session variable set or not, otherwise logout
		if(($sessionArr[0]!='MEAEVENT007')){
			//print_r($sessionArr);
			redirect('admin/mea_admin');
		}
		// helpers for csv download code 
		$this->load->helper('file');
		$this->load->helper('download');  
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('pages/admin_dash');
	}

	
	// -----------------------------code to download db data in csv
	public function DownloadPdf(){

		// fetch data from db
		$this->load->model('admin');
		$result = $this->admin->getMemberDetails();
		//print_r($result);die();
		$this->load->library('Pdf');
		// create new PDF document
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		// $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Bizmo Technologies');
		$pdf->SetTitle('AGM Registered Members List');
		$pdf->SetSubject('AGM Registered Members List');
		$pdf->SetKeywords('MEA, AGM, Dakshata Wagh, Bizmo Technologies, Ranjeet Wagh');

		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			require_once(dirname(__FILE__).'/lang/eng.php');
			$pdf->setLanguageArray($l);
		}

		// ---------------------------------------------------------

		// set font
		$pdf->SetFont('helvetica', '', 12);

		// add a page
		$pdf->AddPage();
		$memNo=0;
		$vegCount=0;
		$nvegCount=0;
		$freeCount=0;
		$paidCount=0;
		$net=0;

		if($result['status']=='200'){
			$memNo=count($result['status_message']);
			$net=$result['countSum'];

			foreach($result['status_message'] as $row){
				if($row['foodPreference']=='nveg' && $row['foodPreference']!=''){
					$nvegCount++;
				}
				else{
					$vegCount++;
				}

				
			} 
		}

		// Set some content to print
		$html = 
		'<h3>EVENT STATISTICS:</h3>
		<p>
		<label><u>Total Member Registered:</u></label> <span>'.$memNo.'</span><br>
		<label><u>Total Checked In:</u></label> <span>'.$net.'</span><br><br>
		<i><label>Veg Preferred Members:</label> <span>'.$vegCount.'</span></i><br>
		<i><label>Non-Veg Preferred Members:</label> <span>'.$nvegCount.'</span></i><br>	
		</p><hr><br>
		<br>
		';

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		// column titles
		$header = array('Sr.no', 'Member Name', 'Food Preference' , 'Checked In', 'Date');

		// Colors, line width and bold font
		$pdf->SetFillColor(255, 0, 0);
		$pdf->SetTextColor(255);
		$pdf->SetDrawColor(128, 0, 0);
		$pdf->SetLineWidth(0.3);
		$pdf->SetFont('', 'B');
		// Header
		$w = array(15, 70, 35, 35, 35);
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; ++$i) {
			$pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		}
		$pdf->Ln();
		// Color and font restoration
		$pdf->SetFillColor(224, 235, 255);
		$pdf->SetTextColor(0);
		$pdf->SetFont('');
		// Data
		$fill = 0;
		$count=1;
		if($result['status']=='500'){
			//print_r($row);
			$pdf->Cell($w[0], 6, 'N/A', 'LR', 0, 'C', $fill);
			$pdf->Cell($w[1], 6, 'N/A', 'LR', 0, 'C', $fill);
			$pdf->Cell($w[2], 6, 'N/A', 'LR', 0, 'C', $fill);
			$pdf->Cell($w[3], 6, 'N/A', 'LR', 0, 'C', $fill);
			$pdf->Cell($w[4], 6, 'N/A', 'LR', 0, 'C', $fill);
			$pdf->Ln();
			$fill=!$fill;
		}
		else{
			foreach($result['status_message'] as $row) {
				$valid_date = date( 'd M, Y', strtotime($row['dated']));
				//now do borders and fill
				//cell height is 6 times the max number of cells
				$food='VEG';
				$checked='---';
				if($row['foodPreference']=='nveg' && $row['foodPreference']!=''){
					$food='NON-VEG';
				}
				if($row['checkin']=='1'){
					$checked='Checked In';
				}
				$pdf->Cell($w[0],6,$count.'.','LR', 0, 'C', $fill);
				$pdf->Cell($w[1],6,$row['member_name'],'LR', 0, 'C', $fill);
				$pdf->Cell($w[2],6,$food,'LR', 0, 'C', $fill);
				$pdf->Cell($w[3],6,$checked,'LR', 0, 'C', $fill);
				$pdf->Cell($w[4],6,$valid_date,'LR', 0, 'C', $fill);

				$pdf->Ln();
				$fill=!$fill;

				$count++;
			}	
		}
		
		$pdf->Cell(array_sum($w), 0, '', 'T');
		// ---------------------------------------------------------

		// close and output PDF document
		
		$tarikh = date('Ydm h:i:s a', time());
		$pdf->Output('AGMEventList_'.$tarikh.'.pdf', 'I');
	}
	// --------------------------------------download pdf file code ends

	// function to download db data in csv file----------------------//
	public function DownloadCsv(){
		// fetch data from db
		$this->load->model('admin');
		$result = $this->admin->getMemberDetailsCsv();

        // file name 
		$tarikh = date('Ydm h:i:s a', time());
		$filename = 'AGMEventList_'.$tarikh.'.csv';
		header("Content-Description: File Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/csv; ");

// get data 
		$usersData = $result['status_message'];

// file creation 
		$file = fopen('php://output', 'w');

		$header = array("Member Name", "Food Preference", "Checked In", "Date");
		fputcsv($file, $header);
		if($result['status']=='200'){
			foreach ($usersData as $key => $line) {
				fputcsv($file, $line);
			}	
		}
		else{
			fputcsv($file, array('------------No data available-----------'));
		}
		
		fclose($file);
		exit;
	}
	// function to download db data in csv file ends here----------------------//


}
