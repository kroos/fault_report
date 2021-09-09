<?php

use Crabbly\Fpdf\Fpdf as Fpdf;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

use \App\Model\Fault;

class PDF extends Fpdf
{


	// Page header
	function Header()
	{
		// Logo
		$this->Image('images/logofgv.png', 15, 10, 0);

		// set margin
		$this->SetRightMargin(15);
		$this->SetLeftMargin(15);

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

		$this->Cell(0, 5, 'PENGERANG INTEGRATED COMPLEX', 0, 1, 'C');
		$this->SetFont('Arial', 'B', 10);
		$this->Cell(0, 5, 'PETRONAS REFINERY AND PETROCHEMICAL CORPORATION', 0, 1, 'C');
		$this->Cell(0, 5, 'UTILITIES & FACILITIES (PRPRC UF)', 0, 1, 'C');
		$this->SetFont('Arial', 'UB',9);
		$this->Cell(0, 5, 'FAULTY REPORT', 0, 1, 'C');
		$this->Image('images/logo.png', 170, 10, 25);

		// reset again for content
		$this->SetRightMargin(15);
		$this->SetLeftMargin(15);

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

// cari fault
// $induk = $fault->hasmanyinspchecklist()->get();


// @if($fault->belongtomanysystem()->get()->count())
	// @foreach($fault->belongtomanysystem()->get() as $b)
		// {!! $b->system !!}<br />
	// @endforeach
// @endif

		// $this->Ln(10);

		// // set pointer
		// $this->SetX(15);



// Instanciation of inherited class
	$pdf = new PDFTI('P','mm', 'A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetTitle($fault->belongtomanysystem()->first()->system.' : Fault Report-'.sprintf("%06d", $fault->id));

	// reset again for content
	$pdf->SetRightMargin(15);
	$pdf->SetLeftMargin(15);
	// $pdf->Ln(10);

	// reset font
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Document no :', 1, 0, 'L');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(0, 5, 'FGV-TISM-FR-'.sprintf("%06d", $fault->id), 1, 1, 'L');

	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Project :', 1, 0, 'L');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(0, 5, 'Telecom Infrastructure and System Maintenance', 1, 1, 'L');

	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Project no :', 1, 0, 'L');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(0, 5, 'PRPCUF/2020/0028', 1, 1, 'L');

	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'System :', 1, 0, 'L');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(0, 5, $fault->belongtomanysystem()->first()->system, 1, 1, 'L');

	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'REM ticket no :', 1, 0, 'L');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(60, 5, $fault->ticket_id, 1, 0, 'L');

	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Area / Location :', 1, 0, 'L');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(60, 5, $fault->belongtobuilding()->first()->building, 1, 1, 'L');

	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Equipment tag no :', 1, 0, 'L');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(60, 5, $fault->hasmanydevicetag()->first()->device_tag, 1, 0, 'L');

	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Date :', 1, 0, 'L');
	$pdf->SetFont('Arial','B',9);
	$pdf->Cell(60, 5, Carbon::parse($fault->date)->format('D, j F Y'), 1, 1, 'L');














	$pdf->Cell(30, 5, 'Date :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->Cell(30, 5, Carbon::parse($fault->date)->format('D, j F Y'), 0, 0, 'L');

	$pdf->SetX(115);
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'PPM Inspection No :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->SetTextColor(230, 0, 0);
	$pdf->Cell(30, 5, 'PPMIC/'.$fault->belongtomanysystem()->first()->system.'-'.sprintf("%06d", $fault->id), 0, 1, 'L');
	$pdf->SetTextColor(0, 0, 0);

	// gap between 1st and 2nd row
	$pdf->Ln(5);

	// title
	// $pdf->SetX(10);
	$pdf->SetFont('Arial', 'BU', 9);
	$pdf->SetTextColor(25, 25, 255);
	$pdf->Cell(190, 5, $fault->belongtomanysystem()->first()->system.' : '.$fault->title, 0, 1, 'C');
	$pdf->SetTextColor(0, 0, 0);

	// gap between 1st and 2nd row
	$pdf->Ln(5);

	// $pdf->SetX(115);
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Ticket Tracking ID :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->Cell(65, 5, $fault->ticket_tracking_id, 0, 0, 'L');

	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Building/Area :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->Cell(65, 5, $fault->building, 0, 1, 'L');
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Tag :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);
	$pdf->Cell(65, 5, $fault->tag, 0, 1, 'L');

	// gap between 1st and 2nd row
	$pdf->Ln(5);

	// $pdf->SetX(115);
	$pdf->SetFont('Arial', NULL, 9);
	$pdf->Cell(30, 5, 'Attendees :', 0, 0, 'L');
	$pdf->SetFont('Arial', 'B', 9);

	foreach ($fault->belongtomanyattendees()->get() as $k) {
		$pdf->Cell(30, 5, $k->name, 0, 2, 'L');
	}

	// gap between 1st and 2nd row
	$pdf->Ln(5);

	$pdf->SetFont('Arial', 'BU', 9);
	$pdf->SetTextColor(25, 25, 255);
	$pdf->Cell(0, 5, 'Inspection Checklist.', 0, 1, 'C');
	$pdf->SetTextColor(0, 0, 0);

	$pdf->Ln(5);



















// 'PPMIC/'.$fault->belongtosystem->system.'-'.sprintf("%06d", $fault->id)

	$filename = 'PPMIC/'.$fault->belongtomanysystem()->first()->system.'-'.sprintf("%06d", $fault->id).'.pdf';

	// use ob_get_clean() to make sure that the correct header is sent to the server so the correct pdf is being output
	ob_get_clean();
	$pdf->Output('I', $filename);		// <-- kalau nak bukak secara direct saja
	// $pdf->Output('D', $filename);			// <-- semata mata 100% download
	// $pdf->Output('F', storage_path().'/uploads/pdf/'.$filename);			// <-- send through email