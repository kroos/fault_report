<?php

use Crabbly\Fpdf\Fpdf as Fpdf;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

// use \App\Model\Fault;
// use Illuminate\Http\Request;

class PDF_MC_Table extends Fpdf {
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

class PDF_FancyRow extends PDF_MC_Table
{
	function FancyRow($data, $border=array(), $align=array(), $style=array(), $maxline=array())
	{
//Calculate the height of the row
		$nb = 0;
		for($i=0;$i<count($data);$i++) {
			$nb = max($nb, $this->NbLines($this->widths[$i],$data[$i]));
		}
		if (count($maxline)) {
			$_maxline = max($maxline);
			if ($nb > $_maxline) {
				$nb = $_maxline;
			}
		}
		$h = 5*$nb;
//Issue a page break first if needed
		$this->CheckPageBreak($h);
//Draw the cells of the row
		for($i=0;$i<count($data);$i++) {
			$w=$this->widths[$i];
// alignment
			$a = isset($align[$i]) ? $align[$i] : 'L';
// maxline
			$m = isset($maxline[$i]) ? $maxline[$i] : false;
//Save the current position
			$x = $this->GetX();
			$y = $this->GetY();
//Draw the border
			if ($border[$i]==1) {
				$this->Rect($x,$y,$w,$h);
			} else {
				$_border = strtoupper($border[$i]);
				if (strstr($_border, 'L')!==false) {
					$this->Line($x, $y, $x, $y+$h);
				}
				if (strstr($_border, 'R')!==false) {
					$this->Line($x+$w, $y, $x+$w, $y+$h);
				}
				if (strstr($_border, 'T')!==false) {
					$this->Line($x, $y, $x+$w, $y);
				}
				if (strstr($_border, 'B')!==false) {
					$this->Line($x, $y+$h, $x+$w, $y+$h);
				}
			}
// Setting Style
			if (isset($style[$i])) {
				$this->SetFont('', $style[$i]);
			}
			$this->MultiCell($w, 5, $data[$i], 0, $a, 0, $m);
//Put the position to the right of the cell
			$this->SetXY($x+$w, $y);
		}
//Go to the next line
		$this->Ln($h);
	}
}

class PDF_MCB extends PDF_FancyRow
{
//MultiCell with bullet
	function MultiCellBlt($w, $h, $blt, $txt, $border=0, $align='J', $fill=false)
	{
//Get bullet width including margins
		$blt_width = $this->GetStringWidth($blt)+$this->cMargin*2;

//Save x
		$bak_x = $this->x;

//Output bullet
		$this->Cell($blt_width,$h,$blt,0,'',$fill);

//Output text
		$this->MultiCell($w-$blt_width,$h,$txt,$border,$align,$fill);

//Restore x
		$this->x = $bak_x;
	}
}

class PDFTI extends PDF_MCB {
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

	function centreImage($img) {
		list($width, $height) = $this->resizeToFit($img);
		// you will probably want to swap the width/height
		// around depending on the page's orientation
		$this->Image(
			$img, (self::A4_HEIGHT - $width) / 2,
			(self::A4_WIDTH - $height) / 2,
			$width,
			$height
		);
	}
}

class PDF extends PDFTI
{
	// Page header
	function Header()
	{
		// set margin
		$this->SetTopMargin(10);
		$this->SetRightMargin(15);
		$this->SetLeftMargin(15);

		$this->SetFont('Arial', 'B', 15);

		// start fancyrow
		$this->SetWidths([30, 120, 30]);

		// $this->FancyRow($caption, $border, $align, $style);
		$this->FancyRow([$this->Image('images/logofgv.png',15,10,30),NULL,$this->Image('images/logo.png',165,10,30)], [NULL,NULL,NULL], ['L','C','R'], ['','B','']);

		$this->FancyRow([NULL,'PENGERANG INTEGRATED COMPLEX',NULL], [NULL,NULL,NULL], ['L','C','R'], ['','B','']);
		$this->SetFont('Arial', 'B', 10);

		$this->FancyRow([NULL,'PETRONAS REFINERY AND PETROCHEMICAL CORPORATION',NULL], [NULL,NULL,NULL], ['L','C','R'], ['','B','']);
		$this->FancyRow([NULL,'UTILITIES & FACILITIES (PRPRC UF)',NULL], [NULL,NULL,NULL], ['L','C','R'], ['','B','']);
		$this->FancyRow([NULL,'FAULTY REPORT',NULL], [NULL,NULL,NULL], ['L','C','R'], ['','BU','']);

		$this->Ln(2);

		$this->SetFont('Arial', NULL, 9);
		$this->SetWidths([30, 150]);
		$this->FancyRow(['Document no :','FGV-TISM-FR-'.str_pad(request()->route()->fault->id, 6, '0', STR_PAD_LEFT)], [1,1], ['L','L'], ['','B']);
		$this->FancyRow(['Project :','Telecom Infrastructure and System Maintenance'], [1,1], ['L','L'], ['','B']);
		$this->FancyRow(['Project no :','PRPCUF/2020/0028'], [1,1], ['L','L'], ['','B']);


		$q = \App\Model\Fault::find(request()->route()->fault->id);

		$da = '';
		if($q->belongtomanysystem()->get()->count() > 1) {
			foreach($q->belongtomanysystem()->get() as $r) {
				$da .= $r->system.utf8_decode(chr(10));					// '\n' => newline
			}
		} else {
			foreach($q->belongtomanysystem()->get() as $r) {
				$da .= $r->system;
			}
		}

		if($q->belongtomanysystem()->get()->count()) {
			$this->FancyRow(['System :',$da], [1,1], ['L','L'], ['','B']);
		} else {
			$this->FancyRow(['System :',NULL], [1,1], ['L','L'], ['','B']);
		}


		// Line break
		// $this->Ln(10);
	}
	
	// Page footer
	function Footer()
	{
		// due to multicell setLeftMargin from the body of the page
		// Position at 1.8cm from bottom
		$this->SetY(-18);
		$this->SetTextColor(128);
		$this->SetFont('Arial','I',6);
		$this->Cell(0, 4, 'Telecom Department, PRPC UF, PIC, Johor'.$this->GetY(), 0, 1, 'C');
		// $this->Cell(0, 4, 'Lot 1266, Bandar DarulAman Industrial Park, 06000, Jitra, Kedah Darul Aman '.$this->GetY(), 0, 1, 'C');	// just to check the position
		$this->SetFont('Arial', 'I', 5);
		// Page number
		$this->Cell(0,4,'Page '.$this->PageNo().'of {nb}'.$this->GetY(), 0, 1, 'C');
		// $this->Cell(0,4,'Page '.$this->PageNo().'of {nb} '.$this->GetY(), 0, 1, 'C');	// just to check the position
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

// dd(request()->route()->fault->id);
// dd(\Request::route()->fault->id);

// Instanciation of inherited class
	$pdf = new PDF('P','mm', 'A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetTitle($fault->belongtomanysystem()->first()->system.' : Fault Report-'.sprintf("%06d", $fault->id));

	// reset again for content
	$pdf->SetRightMargin(15);
	$pdf->SetLeftMargin(15);
	// $pdf->Ln(10);


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