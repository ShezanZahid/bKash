<?php


namespace App;

use Spatie\PdfToImage\Pdf;
use Org_Heigl\Ghostscript\Ghostscript;
use LynX39\LaraPdfMerger\Facades\PdfMerger;
use mikehaertl\pdftk\Pdf1;


class Helper
{
    public static function foo($pdfpath=null,$journalName=null)
    {

        $pdf = new Pdf1($pdfpath, [
        'command' => 'E:\PDFtk Server\bin\pdftk.exe',
        // or on most Windows systems:
        // 'command' => 'C:\Program Files (x86)\PDFtk\bin\pdftk.exe',
        'useExec' => true,  // May help on Windows systems if execution fails
		]);


        $data = $pdf->getData();
            if (preg_match('/NumberOfPages: (\d+)/', $data, $m)) 
            {
                $number = $m[1];
                
            }

    

                /*$pdf->burst('E:/all/pg_%d.pdf','abc'); */

	    for($count=1; $count<=$number; $count++)
	    {
	        $pdf = new Pdf1($pdfpath, [
	        'command' => 'E:\PDFtk Server\bin\pdftk.exe',
	        // or on most Windows systems:
	        // 'command' => 'C:\Program Files (x86)\PDFtk\bin\pdftk.exe',
	        'useExec' => true,  // May help on Windows systems if execution fails
	        ]);
	        $pdf->cat($count)
	            ->saveAs(public_path('/all/'.$count.'.pdf'));
	         $pdfimg = new PDF(public_path('/all/'.$count.'.pdf'));

              $imageNames[$count-1]=time().'-'.$journalName.'-'.$count.'.jpg';

	         $pdfimg->saveImage(public_path('/journal-docs/fileimages/'.$imageNames[$count-1]));
            
	        }
	       
	        return $imageNames;

    }

    public static function pdftoimage()
    {


      

             
          

        /*$pdf = new PDF(public_path('approvedprocess-docs/working_files/5e971f62a14d8.5e92e01eef0a8.Shah Omer Zahid (1).pdf'));
        $pdf->saveImage(public_path('approvedprocess-docs/working_files/5e971f62a14d8.5e92e01eef0a8.Shah Omer Zahid (1).jpg'));*/
       
    }
}