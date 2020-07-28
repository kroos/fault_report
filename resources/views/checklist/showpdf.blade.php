<?php
// header('Content-type: application/pdf');

use Crabbly\Fpdf\Fpdf as Fpdf;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class PDF extends Fpdf
{
	// Page header
	function Header()
	{
		// Logo
		$this->Image('images/maintenance.JPG', 40, 10, 20);

		// set margin
		$this->SetRightMargin(10);
		$this->SetLeftMargin(10);

		// Arial bold 15 and font color grey scale
		// $this->SetFont('Arial', NULL, 6);
		// $this->SetTextColor(100);

		// pointer positioning
		// $this->SetX(45);

		// $this->Cell(27, 4, 'DOCUMENT:', 'LTR', 0, 'L');
		// $this->Cell(27, 4, 'RET PERIOD:', 'LTR', 0, 'L');
		// $this->Cell(27, 4, 'DOC NO:', 'LTR', 0, 'L');
		// $this->Cell(27, 4, 'REV NO:', 'LTR', 0, 'L');
		// $this->Cell(27, 4, 'EFF. DATE:', 'LTR', 0, 'L');
		// $this->Cell(15, 4, 'PAGE:', 'LTR', 1, 'L');
		// $this->SetX(45);
		// $this->Cell(27, 4, 'QUALITY RECORD', 'LBR', 0, 'L');
		// $this->Cell(27, 4, '3 YEARS', 'LBR', 0, 'L');
		// $this->Cell(27, 4, 'IPMA(SM)-F01', 'LBR', 0, 'L');
		// $this->Cell(27, 4, 'E', 'LBR', 0, 'L');
		// $this->Cell(27, 4, '28/3/2016', 'LBR', 0, 'L');
		// $this->Cell(15, 4, $this->PageNo().' OF {nb}', 'LBR', 1, 'L');
		// $this->Ln(1);

		// Arial bold 15 and font color grey scale
		$this->SetY( $this->GetY() + 1);
		$this->SetFont('Arial', 'B', 15);
		$this->SetTextColor(100);

		$this->Cell(0, 5, 'PRPC UF Telecom', 0, 1, 'C');
		$this->SetFont('Arial', 'UB', 10);
		$this->Cell(0, 5, 'Plan Preventive Maintenance Inspection Checklist', 0, 1, 'C');

		// reset again for content
		$this->SetRightMargin(10);
		$this->SetLeftMargin(10);

		// set pointer
		$this->SetX(10);

		// Line break
		$this->Ln(10);
	}
	
	// Page footer
	function Footer()
	{
		// due to multicell setLeftMargin from the body of the page
		// $this->SetLeftMargin(10);
		$this->SetTextColor(128);
		// Position at 3.0 cm from bottom
		$this->SetY(-18);
		$this->SetFont('Arial','I',6);
		$this->Cell(0, 4, 'Telecom Department, PRPC UF, PIC Pengerang, Johor', 0, 1, 'C');
		// $this->Cell(0, 4, 'Lot 1266, Bandar DarulAman Industrial Park, 06000, Jitra, Kedah Darul Aman '.$this->GetY(), 0, 1, 'C');	// just to check the position
		// Arial italic 5
		$this->SetFont('Arial', 'I', 5);
		// Page number
		$this->Cell(0,4,'Page '.$this->PageNo().'of {nb}', 0, 1, 'C');
		// $this->Cell(0,4,'Page '.$this->PageNo().'of {nb} '.$this->GetY(), 0, 1, 'C');	// just to check the position
	}
}

class PDF_MC_Table extends PDF {
	// variable to store widths and aligns of cells, and line height
		var $widths;
		var $aligns;
		var $lineHeight;
	//Set the array of column widths
		function SetWidths($w){
			$this->widths=$w;
		}
	//Set the array of column alignments
		function SetAligns($a){
			$this->aligns=$a;
		}
	//Set line height
		function SetLineHeight($h){
			$this->lineHeight=$h;
		}
	//Calculate the height of the row
		function Row($data)
		{
	// number of line
			$nb=0;
	// loop each data to find out greatest line number in a row.
			for($i=0;$i<count($data);$i++){
	// NbLines will calculate how many lines needed to display text wrapped in specified width.
	// then max function will compare the result with current $nb. Returning the greatest one. And reassign the $nb.
				$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
			}
	
	//multiply number of line with line height. This will be the height of current row
			$h=$this->lineHeight * $nb;
	//Issue a page break first if needed
			$this->CheckPageBreak($h);
	//Draw the cells of current row
			for($i=0;$i<count($data);$i++)
			{
	// width of the current col
				$w=$this->widths[$i];
	// alignment of the current col. if unset, make it left.
				$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
	//Save the current position
				$x=$this->GetX();
				$y=$this->GetY();
	//Draw the border
				$this->Rect($x,$y,$w,$h);
	//Print the text
				$this->MultiCell($w,5,$data[$i],0,$a);
	//Put the position to the right of the cell
				$this->SetXY($x+$w,$y);
			}
	//Go to the next line
			$this->Ln($h);
		}
		function CheckPageBreak($h)
		{
	//If the height h would cause an overflow, add a new page immediately
			if($this->GetY()+$h>$this->PageBreakTrigger)
				$this->AddPage($this->CurOrientation);
		}
		function NbLines($w,$txt)
		{
	//calculate the number of lines a MultiCell of width w will take
			$cw=&$this->CurrentFont['cw'];
			if($w==0)
				$w=$this->w-$this->rMargin-$this->x;
			$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
			$s=str_replace("\r",'',$txt);
			$nb=strlen($s);
			if($nb>0 and $s[$nb-1]=="\n")
				$nb--;
			$sep=-1;
			$i=0;
			$j=0;
			$l=0;
			$nl=1;
			while($i<$nb)
			{
				$c=$s[$i];
				if($c=="\n")
				{
					$i++;
					$sep=-1;
					$j=$i;
					$l=0;
					$nl++;
					continue;
				}
				if($c==' ')
					$sep=$i;
				$l+=$cw[$c];
				if($l>$wmax)
				{
					if($sep==-1)
					{
						if($i==$j)
							$i++;
					}
					else
						$i=$sep+1;
					$sep=-1;
					$j=$i;
					$l=0;
					$nl++;
				}
				else
					$i++;
			}
			return $nl;
		}
}

class PDFTI extends PDF_MC_Table {
	const DPI = 300;
	const MM_IN_INCH = 25.4;
	const A4_HEIGHT = 297;
	const A4_WIDTH = 210;

	/**
	* Resize et fit une image image
	*
	* @param string $imgPath
	* @param integer $x
	* @param integer $y
	* @param integer $containerWidth
	* @param integer $containerHeight
	* @param string $alignment
	* @return void
	*/
	public function imageUniformToFill(string $imgPath, int $x = 0, int $y = 0, int $containerWidth = 210, int $containerHeight = 297, string $alignment = 'C')
	{
		list($width, $height) = $this->resizeToFit($imgPath, $containerWidth, $containerHeight);
	
		if ($alignment === 'R')
		{
			$this->Image($imgPath, $x+$containerWidth-$width, $y+($containerHeight-$height)/2, $width, $height);
		}
		else if ($alignment === 'B')
		{
			$this->Image($imgPath, $x, $y+$containerHeight-$height, $width, $height);
		}
		else if ($alignment === 'C')
		{
			$this->Image($imgPath, $x+($containerWidth-$width)/2, $y+($containerHeight-$height)/2, $width, $height);
		}
		else
		{
			$this->Image($imgPath, $x, $y, $width, $height);
		}
	}
	
	/**
	* Convertit des pixels en mm
	*
	* @param integer $val
	* @return integer
	*/
	protected function pixelsToMm(int $val) : int
	{
		return (int)(round($val * $this::MM_IN_INCH / $this::DPI));
	}
	
	/**
	* Convertit des mm en pixels
	*
	* @param integer $val
	* @return integer
	*/
	protected function mmToPixels(int $val) : int
	{
		return (int)(round($this::DPI * $val / $this::MM_IN_INCH));
	}
	
	/**
	* Resize une image
	*
	* @param string $imgPath
	* @param integer $maxWidth en mm
	* @param integer $maxHeight en mm
	* @return int[]
	*/
	protected function resizeToFit(string $imgPath, int $maxWidth = 210, int $maxHeight = 297) : array
	{
		list($width, $height) = getimagesize($imgPath);
		$widthScale = $this->mmtopixels($maxWidth) / $width;
		$heightScale = $this->mmToPixels($maxHeight) / $height;
		$scale = min($widthScale, $heightScale);
		return array(
			$this->pixelsToMM($scale * $width),
			$this->pixelsToMM($scale * $height)
		);
	}
}

// cari inspection
$induk = $inspection->hasmanyinspchecklist()->get();

// Instanciation of inherited class
	$pdf = new PDFTI('P','mm', 'A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetTitle($inspection->belongtosystem->system.' : PPM Inspection Checklist');

	// $pdf->Cell(0, 5, $induk, 0, 1, 'L'); // 210

	// $pdf->Cell(0, 5, $pdf->GetY(), 0, 1, 'L'); // 210
	// $pdf->Cell(0, 5, $pdf->GetX(), 0, 1, 'L'); // 210
	// $pdf->Cell(0, 5, $pdf->GetPageHeight(), 0, 1, 'L'); // 148
	// $pdf->Cell(0, 5, $pdf->GetPageWidth(), 0, 1, 'L'); // 210

	// reset font
	$pdf->SetFont('Arial', NULL, 9);

	$pdf->Cell(30, 5, 'Date :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->Cell(30, 5, Carbon::parse($inspection->date)->format('D, j F Y'), 0, 0, 'L');

	$pdf->SetX(115);
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'PPM Inspection No :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->SetTextColor(230, 0, 0);
	$pdf->Cell(30, 5, 'PPMIC/'.$inspection->belongtosystem->system.'-'.sprintf("%06d", $inspection->id), 0, 1, 'L');
	$pdf->SetTextColor(0, 0, 0);

	// gap between 1st and 2nd row
	$pdf->Ln(5);

	// title
	// $pdf->SetX(10);
	$pdf->SetFont('Arial', 'BU', 9);
	$pdf->SetTextColor(25, 25, 255);
	$pdf->Cell(190, 5, $inspection->belongtosystem->system.' : '.ucwords(strtolower($inspection->title)), 0, 1, 'C');
	$pdf->SetTextColor(0, 0, 0);

	// gap between 1st and 2nd row
	$pdf->Ln(5);

	// $pdf->SetX(115);
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Building/Area :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->Cell(65, 5, $inspection->building, 0, 0, 'L');
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Tag :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->Cell(65, 5, $inspection->tag, 0, 1, 'L');

	// gap between 1st and 2nd row
	$pdf->Ln(5);

	// $pdf->SetX(115);
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Attendees :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);

	foreach ($inspection->hasmanyinspattendees()->get() as $k) {
		$pdf->Cell(30, 5, $k->belongtostaff->name, 0, 2, 'L');
	}

	// gap between 1st and 2nd row
	$pdf->Ln(5);

	$pdf->SetFont('Arial', 'BU', 9);
	$pdf->SetTextColor(25, 25, 255);
	$pdf->Cell(0, 5, 'Inspection Checklist.', 0, 1, 'C');
	$pdf->SetTextColor(0, 0, 0);

	$pdf->Ln(5);

	$pdf->SetFont('Arial', 'B', 9);
	$pdf->SetWidths([50, 50, 90]);

	// // set alignment
	$pdf->SetAligns(['C', 'C', 'C']);

	// // set line heights. This is the height of each lines, not rows.
	$pdf->SetLineHeight(5);

	$pdf->Row([
		'Question',
		'Answer',
		'Remarks',
	]);

	$pdf->SetFont('Arial', NULL, 9);

	// starting PDF_MC_Table
	// set width for each column (5 columns)
	$pdf->SetWidths([50, 50, 90]);

	// // set alignment
	$pdf->SetAligns(['L', 'L', 'L']);

	// set line heights. This is the height of each lines, not rows.
	$pdf->SetLineHeight(5);

	foreach($induk as $it) {

		$pdf->Row([
			// $it->order_item."\r\n".$it->item_additional_info,
			$it->label,
			$it->input,
			$it->remarks,
		]);

		// $pdf->Cell(10, 10, $it->id, 'LB', 0, 'C');
		// $pdf->Cell(90, 5, $it->remarks, 'L', 2, 'L');
		// $pdf->Cell(90, 5, $it->remarks, 'LB', 0, 'L');
		// $pdf->SetY( $pdf->GetY() - 5 );
		// $pdf->SetX( 110 );
		// $pdf->Cell(20, 10, $it->remarks, 'LB', 0, 'C');
		// $pdf->Cell(20, 10, $it->remarks, 1, 0, 'C');
		// $pdf->Cell(0, 10, $it->remarks, 'LBR', 1, 'C');
	}

	$pdf->Ln(5);

	// $pdf->Cell(40, 10, 'Special Request', 'LBR', 0, 'L');
	// $pdf->Cell(10, 5, 'Yes', 'BR', 2, 'C');
	// $pdf->Cell(10, 5, 'No', 'BR', 0, 'C');
	// $pdf->SetY( $pdf->GetY() - 5 );
	// $pdf->SetX( 60 );
	// $pdf->Cell(10, 5, NULL, 'BR', 2, 'C');
	// $pdf->Cell(10, 5, NULL, 'BR', 0, 'C');
	// $pdf->SetY( $pdf->GetY() - 5 );
	// $pdf->SetX( 70 );
	// $pdf->Cell(18, 10, 'Remarks :', 'BR', 0, 'C');
	// $pdf->Cell(0, 10, $inspection->remarks, 'BR', 1, 'C');

	// // $pdf->Ln(5);
	// // $pdf->SetFont('Arial', 'B', 9);
	// // $pdf->Cell(0, 5, 'inspectionItem::find($arr[0])->belongtoorderdelivery->delivery_method', 0, 1, 'L');
	// // $pdf->SetFont('Arial', NULL, 9);
	// // $pdf->Cell(40, 5, 'Delivery Remarks:', 0, 0, 'L');
	$pdf->Cell(30, 5, 'Remarks:', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->MultiCell(0, 5, $inspection->remarks, 0, 'L');
	$pdf->SetFont('Arial', NULL, 9);


	// start new page for image
	$pdf->AddPage();

	$pdf->Ln(5);
	$pdf->SetFont('Arial', 'BU', 9);
	$pdf->SetTextColor(25, 25, 255);
	$pdf->Cell(0, 5, 'Inspection Image', 0, 1, 'C');
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFont('Arial', NULL, 9);

	$pdf->Ln(5);

	$kl = 1;
	foreach($inspection->hasmanyinspimage()->get() as $it) {
		$pdf->Cell(95, 55, NULL, 0, $kl++%2==0?1:0, 'C', $pdf->imageUniformToFill($it->input, $pdf->GetX(), $pdf->GetY(), 93, 53, 'C'));


		// $pdf->Cell(25, 10, $pdf->GetY(), 1, 0, 'C');
		// $pdf->Cell(25, 10, $pdf->GetX(), 1, 0, 'C');
		// $pdf->Cell(90, 5, $it->remarks, 'L', 2, 'L');
		// $pdf->Cell(90, 5, $it->remarks, 'LB', 0, 'L');
		// $pdf->SetY( $pdf->GetY() );
		// $pdf->SetX( 105 );
		// $pdf->Cell(20, 10, $it->remarks, 'LB', 0, 'C');
		// $pdf->Cell(20, 10, $it->remarks, 1, 0, 'C');
		// $pdf->Cell(0, 10, $it->remarks, 'LBR', 1, 'C');
	}

	$pdf->AddPage();

	$pdf->SetFont('Arial', 'BU', 9);
	$pdf->SetTextColor(25, 25, 255);
	$pdf->Cell(0, 5, 'Inspection Documents', 0, 1, 'C');
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetFont('Arial', NULL, 9);

	foreach($inspection->hasmanyinspdoc()->get() as $it1){
		$pdf_data = file_get_contents('C:/Users/Telecom/Desktop/fault_report/storage/app/'.$it1->input);
		$pdf->Cell(0, 5, $it1->label.' : '.$it1->original_name, 0, 0, 'C', false, asset($it1->input));
	}















	// // 50mm from bottom
	$pdf->SetY(-35);
	$pdf->SetFont('Arial', NULL, 9);
	// $pdf->Cell(20, 5, $pdf->GetY(), 1, 1, 'L');		// just to check the position
	$pdf->Cell(63, 5, 'Prepared By :', 0, 0, 'L');
	$pdf->Cell(63, 5, 'Reviewed By :', 0, 0, 'L');
	$pdf->Cell(0, 5, 'Approved By :', 0, 1, 'L');

	// $pdf->Cell(63, 15, NULL, 0, 0, 'L');
	// $pdf->Cell(63, 15, NULL, 0, 0, 'C');
	// $pdf->Cell(0, 15, NULL, 0, 1, 'R');

	$pdf->Cell(63, 5, 'Name: '.$inspection->belongtostaff->name, 0, 0, 'L');
	$pdf->Cell(63, 5, 'Name:', 0, 0, 'L');
	$pdf->Cell(0, 5, 'Name:', 0, 1, 'L');




// 'PPMIC/'.$inspection->belongtosystem->system.'-'.sprintf("%06d", $inspection->id)

	$filename = 'PPMIC/'.$inspection->belongtosystem->system.'-'.sprintf("%06d", $inspection->id).'.pdf';

	// use ob_get_clean() to make sure that the correct header is sent to the server so the correct pdf is being output
	ob_get_clean();
	$pdf->Output('I', $filename);		// <-- kalau nak bukak secara direct saja
	// $pdf->Output('D', $filename);			// <-- semata mata 100% download
	// $pdf->Output('F', storage_path().'/uploads/pdf/'.$filename);			// <-- send through email