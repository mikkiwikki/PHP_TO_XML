<?php

if(isset($_POST['create_xml'])){

        $BU = $_POST['BU'];
        $Vstyle = $_POST['Vstyle'];
        $InvId = $_POST['InvId'];
	    $InvDt = $_POST['InvDt'];
	    $VendId = $_POST['VendId'];
	    $VenSetid = $_POST['VenSetid'];
        $Loc = $_POST['Loc'];
		$GAmt = $_POST['GAmt'];
		$Desc = $_POST['Desc'];
        $ShipTo = $_POST['ShipTo'];

        $Account = $_POST['Acct'];
        $Dept = $_POST['Dept'];
        $Activity = $_POST['Activity'];
        $OU = $_POST['OU'];
        $Source = $_POST['Source'];
        $Fund = $_POST['Fund'];
        $Funct = $_POST['Funct'];
        $Program = $_POST['Program'];
        $Purpose = $_POST['Purpose'];
        $Property = $_POST['Property'];
        $Project = $_POST['Project'];

       $xmlBeg = "<?xml version=\"1.0\"?>\n <!DOCTYPE VOUCHERS SYSTEM \"voucher.dtd\">\n";

        $rootElementStart = "<VOUCHERS>\n";
        $rootElementEnd = "</VOUCHERS>";

        $rootElement1Beg = "<VOUCHER>\n";
        $rootElement1End = "</VOUCHER>";

        $rootElement2Beg = "<LINE>\n";
        $rootElement2End = "</LINE>";

        $rootElement3Beg = "<DISTRIBUTION>\n";
        $rootElement3End = "</DISTRIBUTION>";

        $xml_document=  $xmlBeg;
        /*$xml_document=  $xmlBeg2;*/

        $xml_document .=  $rootElementStart;
        $xml_document .=  $rootElement1Beg;

		$xml_document .=  "<BUSINESS_UNIT>";
		$xml_document .=  "AP001";
        $xml_document .=  "</BUSINESS_UNIT>\n";

        $xml_document .=  "<VOUCHER_STYLE>";
        $xml_document .=  "REG";
        $xml_document .=  "</VOUCHER_STYLE>\n";

        $xml_document .=  "<INVOICE_ID>";
        $xml_document .=  $InvId;
        $xml_document .=  "</INVOICE_ID>\n";

        $xml_document .=  "<INVOICE_DT>";
		$xml_document .=  $InvDt;
		$xml_document .=  "</INVOICE_DT>\n";

		$xml_document .=  "<VENDOR_ID>";
		$xml_document .=  $VendId;
		$xml_document .=  "</VENDOR_ID>\n";

        $xml_document .=  "<VENDOR_SETID>";
		$xml_document .=  "SHARE";
		$xml_document .=  "</VENDOR_SETID>\n";

		$xml_document .=  "<LOCATION>";
		$xml_document .=  "MAIN";
		$xml_document .=  "</LOCATION>\n";

		$xml_document .=  "<ORIGIN>";
		$xml_document .=  "ONL";
		$xml_document .=  "</ORIGIN>\n";

		$xml_document .=  "<GROSS_AMT>";
		$xml_document .=  $GAmt;
		$xml_document .=  "</GROSS_AMT>\n";

		$xml_document .=  "<DESCR254_MIXED>";
		$xml_document .=  $Desc;
		$xml_document .=  "</DESCR254_MIXED>\n";

		$xml_document .=  "<PYMNT_HANDLING_CD>";
		$xml_document .=  "RE";
		$xml_document .=  "</PYMNT_HANDLING_CD>\n";

		$xml_document .=  "<VCHR_SRC>";
		$xml_document .=  "XML";
		$xml_document .=  "</VCHR_SRC>\n";

        $xml_document .=  $rootElement2Beg;

        $xml_document .=  "<DESCR>";
		$xml_document .=  $Desc;
		$xml_document .=  "</DESCR>\n";

		$xml_document .=  "<BUSINESS_UNIT>";
		$xml_document .=  "AP001";
		$xml_document .=  "</BUSINESS_UNIT>\n";

		$xml_document .=  "<PCBU>";
		$xml_document .=  "UVM01";
		$xml_document .=  "</PCBU>\n";

		$xml_document .=  "<QTY_VCHR>";
		$xml_document .=  "1";
		$xml_document .=  "</QTY_VCHR>\n";

		$xml_document .=  "<UNIT_OF_MEASURE>";
		$xml_document .=  "EA";
		$xml_document .=  "</UNIT_OF_MEASURE>\n";

		$xml_document .=  "<UNIT_PRICE>";
		$xml_document .=   $GAmt;
		$xml_document .=  "</UNIT_PRICE>\n";

		$xml_document .=  "<MERCHANDISE_AMT>";
		$xml_document .=   $GAmt;
		$xml_document .=  "</MERCHANDISE_AMT>\n";

		$xml_document .=  "<DISTRIB_MTHD_FLG>";
		$xml_document .=   "A";
		$xml_document .=  "</DISTRIB_MTHD_FLG>\n";

		$xml_document .=  "<SHIPTO_ID>";
		$xml_document .=  $ShipTo;
		$xml_document .=  "</SHIPTO_ID>\n";

		$xml_document .= $rootElement3Beg;

		$xml_document .=  "<DIST_AMT>";
		$xml_document .=   $GAmt;
		$xml_document .=  "</DIST_AMT>\n";

		$xml_document .=  "<ACCOUNT>";
		$xml_document .=   $Account;
		$xml_document .=  "</ACCOUNT>\n";

		$xml_document .=  "<OPERATING_UNIT>";
		$xml_document .=   $OU;
		$xml_document .=  "</OPERATING_UNIT>\n";

		$xml_document .=  "<DEPTID>";
		$xml_document .=   $Dept;
		$xml_document .=  "</DEPTID>\n";

		$xml_document .=  "<FUND>";
		$xml_document .=   $Fund;
		$xml_document .=  "</FUND>\n";

		$xml_document .=  "<SOURCE>";
		$xml_document .=   $Source;
		$xml_document .=  "</SOURCE>\n";

		$xml_document .=  "<FUNCTION>";
		$xml_document .=   $Funct;
		$xml_document .=  "</FUNCTION>\n";

		$xml_document .=  "<PROJECT>";
		$xml_document .=   $Project;
		$xml_document .=  "</PROJECT>\n";

		$xml_document .=  "<ACTIVITY>";
		$xml_document .=   $Activity;
		$xml_document .=  "</ACTIVITY>\n";

		$xml_document .=  "<PROGRAM>";
		$xml_document .=   $Program;
		$xml_document .=  "</PROGRAM>\n";

		$xml_document .=  "<PURPOSE>";
		$xml_document .=   $Purpose;
		$xml_document .=  "</PURPOSE>\n";

		$xml_document .=  "<PROPERTY>";
		$xml_document .=   $Property;
		$xml_document .=  "</PROPERTY>\n";

	    $xml_document .=  $rootElement3End;
	    $xml_document .=  $rootElement2End;
	    $xml_document .=  $rootElement1End;
	    $xml_document .=  $rootElementEnd;

        $path_dir = "/fs/barasinga/rack5c/u/uvmstaff/mfdevino/public_html/VOUCHER/test";

        $path_dir .=   $urlDoc .".xml";

/* Data in Variables ready to be written to an XML file */

$fp = fopen($path_dir,'w');

/*echo "<br> I have the path  <br>" .$fp."<br>";*/

$write = fwrite($fp,$xml_document);

/*echo "<br>I have the WRITE <br>" .$write."<br>";*/

/* Loading the created XML file to check contents */

$sites = simplexml_load_file("$path_dir");

/*echo "<br>I have the sites <br>" .$sites."<br>";*/

echo "<br> Checking the loaded file <br>" .$path_dir. "<br>";

echo "<br><br>Whats inside loaded XML file?<br>";

/*print_r($sites);*/

var_dump($sites);

// Send
/*mail('monica.devino@uvm.edu', 'My Subject',  $path_dir);*/

mail('monica.devino@uvm.edu', 'File was successfully dropped here',  $path_dir );


}

?>


