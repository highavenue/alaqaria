<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Untitled Document</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		  <![endif]-->
		  <style type="text/css">
		  	.bg-blue {
		  		background-color: #1E65CC;
		  	}
		  	.bg-light-green {
		  		background-color: #B7F8ED;
		  	}
		  	.bg-orange{
		  		background-color: #C97A2B;
		  	}
		  	.bg-light-orange{
		  		background-color: #E4C3A3;
		  	}
		  	.bg-red{
		  		background-color: #AB0002;
		  	}
		  	.align-center {
		  		vertical-align: middle;
		  		text-align: center;
		  	}
		  	.align-other {
		  		padding-left: 5px;
		  	}
		  	.font-xsmall {
		  		font-size: 9px;
		  		font-weight: bold;
		  	}
		  	.font-small {
		  		font-size: 10px;
		  		font-weight: bold;
		  	}
		  	.font-medium {
		  		font-size: 11px;
		  		font-weight: bold;
		  	}
		  	.font-large {
		  		font-size: 12px;
		  		font-weight: bold;
		  	}
		  	.font-xlarge {
		  		font-size: 14px;
		  		font-weight: bold;
		  	}

		  	.instruction-text
		  	{
		  		letter-spacing: -0.2px;
		  		font-size: 9px;
		  		font-weight: bold;
		  	}
		  </style>
		</head>
		<body>
			<div style="width:190mm;">
				<table style="width:100%;" border="1" align="center">
					<tbody>
						<tr>
							<td colspan="2" style="width: 30%;" class="font-small align-center"><strong>DOCUMENT NO.</strong></td>
							<td rowspan="2" style="width: 55%;color: red;" class="font-small align-center"><strong>QATAR REAL INVESTMENT COMPANY FACILITIES MANAGEMENT DIVISION(FMD)</strong></td>
							<td style="width: 15%;" rowspan="4"><img src="{{$imageurl}}" style="width: 100px;"></td>
						</tr>
						<tr>
							<td colspan="2" class="font-small align-center font-large">{{$documentno}}F</td>
						</tr>
						<tr>
							<td class="font-small align-center"><strong>REVISION NUMBER</strong></td>
							<td class="font-small align-center"><strong>REVISION DATE</strong></td>
							<td rowspan="2" class="align-center" style="color: white;background-color: #1E65CC;"><h4>SUPPLIER PRE-QUALIFICATION FORM</h4></td>
						</tr>
						<?php $date = new Carbon\Carbon($revisiondate);	?>
						<tr>
							<td class="font-small align-center"><strong>{{$revisionno}}</strong></td>
							<td class="font-small align-center"><strong>{{strtoupper($date->format('d F Y'))}}</strong></td>
						</tr>
					</tbody>
				</table>



				<br>
				<table style="width:100%;" border="1" align="center">
					<tbody>
						<tr>
							<td style="width: 25%;color: white;padding: 5px 0px;" class="font-small bg-blue align-center"><strong>REGISTRY NO.(yy-mm-seriesno.)</strong></td>
							<td style="width: 25%;" class="align-center"></td>
							<td style="width: 25%;color: white;" class="font-small bg-blue align-center"><strong>DATE(dd-mm-yy)</strong></td>
							<td style="width: 25%;"  class="align-center"></td>
						</tr>
					</tbody>
				</table>
				<table style="width:100%;" border="1" align="center">
					<tbody>
						<tr>
							<td colspan="6" class="font-xlarge bg-light-green align-center">SECTION I:GENERAL INFORMATION</td>
						</tr>
						<tr>
							<td style="width: 15%;" class="font-medium bg-light-green align-center">COMPANY REGISTERED NAME</td>
							<td colspan="5" style="padding-left: 5px;" class="font-medium">{{$companyregisteredname}}</td>
						</tr>
						<tr>
							<td style="width: 15%;" class="font-medium bg-light-green align-center">COMPANY PARENT NAME</td>
							<td colspan="5" style="padding-left: 5px;" class="font-medium">{{$companyparentname}}</td>
						</tr>
						<tr>
							<td style="width: 15%;" class="font-medium bg-light-green align-center">COUNTRY OF ESTABLISHMENT</td>
							<td colspan="5" style="width: 30%;" class="font-medium align-other"><span class="font-medium align-center" style="width: 30%;">
								<input type="checkbox"@if($establishment=='qatar') checked="checked" @endif>
								QATAR<span class="font-medium align-center" style="width: 30%;">
								<input type="checkbox" @if($establishment=='gcc') checked="checked" @endif>
								GCC<span class="font-xsmall" style="width:40%;">
								<input type="checkbox" @if($establishment!='qatar' && $establishment!='gcc') checked="checked" >
								OTHERS :{{$establishment}}@else >OTHERS :  @endif
							</span></span></span></td>
						</tr>
						<tr>
							<td style="width: 16%;" class="font-medium bg-light-green align-center">LEGAL CLASSIFICATION</td>
							<td colspan="5" class="font-small align-other"><input type="checkbox" @if($classification=='individual') checked="checked" @endif>
								INDIVIDUAL OWNED
								<input type="checkbox" @if($classification=='partnership') checked="checked" @endif>
								PARTNERSHIP
								<input type="checkbox" @if($classification=='joint') checked="checked" @endif>
								JOINT VENTURE
								<input type="checkbox" @if($classification=='limitedliability') checked="checked" @endif>
								LIMITED LIABILITY COMPANY<br>
								<input type="checkbox" @if($classification!='individual' && $classification!='partnership' && $classification!='joint' && $classification!='limitedliability') checked="checked">
								OTHERS : {{$classification}}@else >OTHERS :  @endif</td>
							</tr>
							<tr>
								<td class="font-medium bg-light-green align-center" style="width: 15%;"><span class="font-large bg-light-green align-center" style="width: 15%;">REGISTERED BUSINESS ADDRESS</span></td>
								<td colspan="5"><table width="200" border="1" style="width: 100%;">
									<tbody>
										<tr>
											<td style="width:15%" class="font-medium align-center">BLDG.NAME</td>
											<td style="width:45%;padding-left: 5px;" class="font-medium align-center">{{$buildingname}}</td>
											<td style="width:10%" class="font-medium align-center">BLDG.NO</td>
											<td style="width:10%;padding-left: 5px;" class="font-medium align-center">{{$buildingno}}</td>
											<td style="width:10%" class="font-medium align-center">FLOOR NO.</td>
											<td style="width:10%;padding-left: 5px;" class="font-medium align-center">{{$floorno}}</td>
										</tr>
										<tr>
											<td class="font-medium align-center">STREET NAME</td>
											<td class="font-medium align-center" style="padding-left: 5px;">{{$streetname}}</td>
											<td class="font-medium align-center">STREET.NO</td>
											<td class="font-medium align-center" style="padding-left: 5px;">{{$streetno}}</td>
											<td class="font-medium align-center">ZONE NO.</td>
											<td class="font-medium align-center" style="padding-left: 5px;">{{$zoneno}}</td>
										</tr>
									</tbody>
								</table>
								<table style="width: 100%" border="1">
									<tbody>
										<tr>
											<td style="width: 16%" class="font-medium align-center">CITY</td>
											<td style="width: 17%;padding-left: 5px;" class="font-medium align-center">{{$city}}</td>
											<td style="width: 16%" class="font-medium align-center">COUNTRY</td>
											<td style="width: 18%;padding-left: 5px;" class="font-medium align-center">{{$country}}</td>
											<td style="width: 16%" class="font-medium align-center">POSTAL CODE</td>
											<td style="width: 17%;padding-left: 5px;" class="font-medium align-center">{{$postalcode}}</td>
										</tr>
									</tbody>
								</table></td>
							</tr>
							<tr>
								<td class="font-medium bg-light-green align-center">PO BOX NO.</td>
								<td style="padding-left: 5px;" class="font-medium">{{$boxno}}</td>
								<td colspan="2" class="font-medium bg-light-green align-center">TELEPHONE NUMBER</td>
								<td colspan="2" style="padding-left: 5px;" class="font-medium">{{$telephoneno}}</td>
							</tr>
							<tr>
								<td class="font-medium bg-light-green align-center">EMAIL ADDRESS</td>
								<td style="padding-left: 5px;" class="font-medium">{{$email}}</td>
								<td colspan="2" class="font-medium bg-light-green align-center">FAX NUMBER</td>
								<td colspan="2" style="padding-left: 5px;" class="font-medium">{{$faxno}}</td>
							</tr>
							<tr>
								<td class="font-medium bg-light-green align-center">NATURE OF BUSINESS</td>
								<td colspan="5" class="font-small align-other"><input type="checkbox" @if($naturetrader=='trader') checked="checked" @endif>
									TRADER
									<input type="checkbox" @if($naturemanufacturer=='manufacturer') checked="checked" @endif>
									MANUFACTURER
									<input type="checkbox" @if($naturecontractor=='contractor') checked="checked" @endif>
									CONTRACTOR
									<input type="checkbox" @if($naturedistributor=='distributor') checked="checked" @endif>
									DISTRIBUTOR
									<input type="checkbox" @if($natureconsultant=='consultant') checked="checked" @endif>
									CONSULTANT<br>
									<input type="checkbox" @if($natureserviceprovider=='serviceprovider') checked="checked" @endif>
									SERVICE PROVIDER<span class="font-small align-other">
									<input type="checkbox" @if($natureothers!='') checked="checked" @endif>
									OTHERS(please specify) : {{$natureothers}}</span></td>
								</tr>

				
									<tr>
        <td rowspan="3" class="font-medium bg-light-green align-center">FIELD OF TRADE</td>
        <td colspan="5" class="font-medium align-other"><span style="width: 30%;">
          <input type="checkbox" name="checkbox1" id="checkbox" @if($fieldproduct=='products') checked="checked" @endif>
          <label for="checkbox1">PRODUCTS</label>
        (please specify) : {{$fieldproducttext}}</span></td>
      </tr>
             <tr>
        <td colspan="5" class="font-medium align-other"><span style="width: 30%;">
          <input type="checkbox" name="checkbox2" id="checkbox2" @if($fieldservice=='services') checked="checked" @endif>
          <label for="checkbox2">SERVICES</label>
        (please specify) : {{$fieldservicetext}}</span></td>
      </tr>
             <tr>
        <td colspan="5" class="font-medium align-other"><span style="width: 30%;">
          <input type="checkbox" name="checkbox3" id="checkbox3" @if($fieldwork=='works') checked="checked" @endif>
          <label for="checkbox3">WORKS</label>
        (please specify) : {{$fieldworktext}}</span></td>
      </tr>





									<tr>
										<td class="font-small bg-light-green align-center">NAME OF CONTACT PERSON</td>
										<td style="width: 30%;padding-left: 5px;" class="font-medium">{{$personname}}</td>
										<td colspan="2" class="font-medium bg-light-green align-center">JOB TITLE</td>
										<td style="width: 30%;padding-left: 5px;" colspan="2" class="font-medium">{{$personjobtitle}}</td>
									</tr>
									<tr>
										<td class="font-medium bg-light-green align-center">EMAIL ADDRESS</td>
										<td style="padding-left: 5px;" class="font-medium">{{$personemail}}</td>
										<td colspan="2" class="font-medium bg-light-green align-center">MOBILE NO./S</td>
										<td colspan="2" style="padding-left: 5px;" class="font-medium">{{$personmobileno}}</td>
									</tr>
									<tr>
										<td class="font-medium bg-light-green align-center">TELEPHONE NO</td>
										<td style="padding-left: 5px;" class="font-medium">{{$persontelephoneno}}</td>
										<td colspan="2" class="font-medium bg-light-green align-center">FAX NO./S</td>
										<td colspan="2" style="padding-left: 5px;" class="font-medium">{{$personfaxno}}</td>
									</tr>
									<tr>
									<td style="width: 15%;" class="font-medium bg-light-green align-center">SUBMITTED DOCUMENTS</td>
										<td colspan="5" style="padding-left: 5px;" class="font-medium bg-light-green">{{$docdetailstext}}</td>
									</tr>
								</tbody>
							</table>


							<table style="width:100%;" border="1" align="center">
								<tbody>
									<tr>
										<td colspan="7" class="bg-blue font-xlarge align-center">SECTION II:EXPERIENCES &amp; CERTIFICATIONS</td>
									</tr>
									<tr>
										<td style="width: 15%;" class="font-medium bg-blue align-center">NO.OF YEARS IN CURRENT BUSINESS</td>
										<td colspan="6"><span class="font-small align-other">&nbsp;&nbsp;
											<input type="checkbox" @if($noofyears=='lessthanyear') checked="checked" @endif> LESS THAN A YEAR
											<input type="checkbox" @if($noofyears=='1-5') checked="checked" @endif>
											1-5
											<input type="checkbox" @if($noofyears=='6-10') checked="checked" @endif>
											6-10
											<input type="checkbox" @if($noofyears=='11-15') checked="checked" @endif>
											11-15
											<input type="checkbox" @if($noofyears=='16-20') checked="checked" @endif>
											16-20
											<input type="checkbox" @if($noofyears!='lessthanyear' && $noofyears!='1-5' && $noofyears!='6-10' && $noofyears!='11-15' && $noofyears!='16-20') checked="checked">
											&gt; 21(Please Specify) : {{$noofyears}}@else >&gt; 21(Please Specify) :  @endif </span></td>



										</tr> 


										<tr>
											<td rowspan="3" class="font-medium bg-blue align-center">THREE MAJOR CLIENTS FOR THE PAST 3 YEARS</td>
											<td class="font-medium align-center" style="width: 8%;">CLIENT</td>
											<td class="font-medium align-center" style="width: 30%;"> {{$client1}}</td>
											<td class="font-medium align-center" style="width: 8%;">LOCATION</td>
											<td class="font-medium align-center" style="width: 20%;">{{$location1}}</td>
											<td class="font-medium align-center" style="width: 9%;">DURATION</td>
											<td class="font-medium align-center" style="width: 10%;">{{$duration1}}</td>
										</tr>
										<tr>
											<td class="font-medium align-center" style="width: 10%;">CLIENT</td>
											<td class="font-medium align-center" style="width: 30%;">{{$client2}}</td>
											<td class="font-medium align-center" style="width: 8%;">LOCATION</td>
											<td class="font-medium align-center" style="width: 20%;">{{$location2}}</td>
											<td class="font-medium align-center" style="width: 12%;">DURATION</td>
											<td class="font-medium align-center" style="width: 10%;">{{$duration2}}</td>
										</tr>
										<tr>
											<td class="font-medium align-center" style="width: 10%;">CLIENT</td>
											<td class="font-medium align-center" style="width: 30%;">{{$client3}}</td>
											<td class="font-medium align-center" style="width: 8%;">LOCATION</td>
											<td class="font-medium align-center" style="width: 20%;">{{$location3}}</td>
											<td class="font-medium align-center" style="width: 12%;">DURATION</td>
											<td class="font-medium align-center" style="width: 10%;">{{$duration3}}</td>
										</tr>
										<tr>
											<td colspan="5" class="font-medium bg-blue align-other">HAVE YOU HAD ANY CONTRACTS TERMINATED DUE TO POOR PERFORMANCE IN THE LAST 3 YEARS ?</td>
											<td class="font-medium align-center"><span class="font-small align-other">
												<input type="checkbox" @if($poorexp == 'yes') checked="checked" @endif>YES
											</span></td>
											<td class="font-medium align-center"><span class="font-small align-other">
												<input type="checkbox" @if($poorexp == 'no') checked="checked" @endif>NO
											</span></td>
										</tr>
										<tr>
											<td class="font-medium bg-blue align-center">IF YES PLEASE SPECIFY</td>
											<td colspan="6" class="font-medium"> @if($poorexp == 'yes') {{$pleasespecify}} @endif</td>
										</tr>
										<tr>
											<td class="font-medium bg-blue align-center">PREVIOUS BUSINESS NAME(IF RECENTLY CHANGED)</td>
											<td colspan="2" class="font-medium">&nbsp;&nbsp;{{$previousbusinessname}}</td>
											<td class="font-medium align-center"> PLS.SPECIFY REASON FOR CHANGE</td>
											<td colspan="3" class="font-medium">&nbsp;&nbsp;{{$reasonforchange}}</td>
										</tr>
										<tr>
											<td class="font-medium bg-blue align-center">CERTIFICATIONS</td>
											<td colspan="6">&nbsp;&nbsp;<span class="font-small align-other"> 
												<input type="checkbox" @if($certifications == 'iso9001') checked="checked" @endif>ISO 9001 
												<input type="checkbox" @if($certifications == 'iso14001') checked="checked" @endif>ISO 14001
												<input type="checkbox" @if($certifications == 'OHSAS18001') checked="checked" @endif>OHSAS 18001
												<input type="checkbox" @if($certifications != 'iso9001' && $certifications != 'iso14001' && $certifications != 'OHSAS18001' && $certifications != '') checked="checked" >OTHERS : {{$certifications}} @else >OTHERS : @endif</span></td>
											</tr>
											<tr>
												<td class="font-medium bg-blue align-center">CERTIFICATION BODY</td>
												<td colspan="2" class="font-medium">&nbsp;&nbsp;{{$certificationbody1}}</td>
												<td class="font-medium align-center bg-blue">VALIDITY</td>
												<td colspan="3" class="font-medium">&nbsp;&nbsp;{{$validity1}}</td>
											</tr>
											<tr>
												<td class="font-medium bg-blue align-center">CERTIFICATION BODY</td>
												<td colspan="2" class="font-medium">&nbsp;&nbsp;{{$certificationbody2}}</td>
												<td class="font-medium align-center bg-blue">VALIDITY</td>
												<td colspan="3" class="font-medium">&nbsp;&nbsp;{{$validity2}}</td>
											</tr>
										</tbody>
									</table>

{{-- 

									<p style="text-align: center;color: red;padding-top: 2px;" class="font-small">QATAR REAL ESTATE INVESTMENT COMPANY (ALAQARIA) - FACILITIES MANAGEMENT DIVISION</p> --}}





       <br>
       
       <table style="width:100%;" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="6" class="bg-orange font-xlarge align-center">SECTION III.A : BANK DETAILS</td>
      </tr>
    <tr>
      <td style="width: 15%;" class="font-medium bg-orange align-center">NAME OF BANK</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$bankname}}</td>
      <td class="font-medium bg-orange align-center">ACCOUNT NAME</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$accountname}}</td>
      </tr>
    <tr>
      <td class="font-medium bg-orange align-center">ACCOUNT NO.</td>
      <td style="width:17%;" class="font-medium">&nbsp;&nbsp;{{$accountno}}</td>
      <td style="width:17%;" class="font-medium bg-orange align-center">SWIFT CODE NO</td>
      <td style="width:17%;" class="font-medium">&nbsp;&nbsp;{{$swiftcode}}</td>
      <td style="width:17%;" class="font-medium bg-orange align-center">CURRENCY</td>
      <td style="width:17%;" class="font-medium">&nbsp;&nbsp;{{$currency}}</td>
    </tr>
    <tr>
      <td class="font-medium bg-orange align-center">IBAN NUMBER</td>
      <td colspan="5" class="font-medium">&nbsp;&nbsp;{{$ibanno}}</td>
      </tr>
    <tr>
      <td class="font-medium bg-orange align-center">BANK BRANCH</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$bankbranch}}</td>
      <td class="font-medium bg-orange align-center">CITY</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$bankcity}}</td>
      </tr>
    <tr>
      <td class="font-medium bg-orange align-center">PO BOX NO.</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$bankpoboxno}}</td>
      <td class="font-medium bg-orange align-center">TELEPHONE NO./S</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$banktelephoneno1}}</td>
      </tr>
    <tr>
      <td class="font-medium bg-orange align-center">FINANCE CONTACT PERSON</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$financecontactperson}}</td>
      <td class="font-medium bg-orange align-center">TELEPHONE NO./S</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$banktelephoneno2}}</td>
      </tr>
    <tr>
      <td class="font-medium bg-orange align-center">EMAIL ADDRESS</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$bankemailaddress}}</td>
      <td class="font-medium bg-orange align-center">FAX NUMBER</td>
      <td colspan="2" class="font-medium">&nbsp;&nbsp;{{$bankfaxno}}</td>
      </tr>
    <tr>
      <td colspan="6" class="bg-orange font-xlarge align-center">SECTION III.B : WITHHOLDING TAX DETAILS</td>
      </tr>
    <tr>
      <td colspan="3" class="bg-orange font-medium align-center">NATURE OF THE OFFICE</td>
      <td colspan="3" class="bg-orange font-medium align-center">LOCATION OF OFFICE/S</td>
      </tr>
    <tr>
      <td colspan="3" class="font-medium align-center">&nbsp;&nbsp;
       
        <input type="checkbox" name="checkbox2" id="checkbox2" @if($natureoflocation == 'permanent') checked="checked" @endif>
        <label for="checkbox2">PERMANENT TYPE </label>
		
        
        <input type="checkbox" name="checkbox3" id="checkbox3" @if($natureoflocation == 'temporary') checked="checked" @endif>
        <label for="checkbox3">TEMPORARY OFFICE </label>
</td>
      <td colspan="3" class="font-medium align-center">&nbsp;&nbsp;
        <input type="checkbox" name="checkbox4" id="checkbox4" @if($locationofoffice == 'local') checked="checked" @endif>
        <label for="checkbox4">LOCAL OFFICE(QATAR) </label>
   

        <input type="checkbox" name="checkbox5" id="checkbox5" @if($locationofoffice == 'foreign') checked="checked" @endif>
        <label for="checkbox5">FOREIGN OFFICE </label>
        
</td>
      </tr>
    <tr>
      <td class="font-medium bg-orange align-center">COMMERCIAL REGISTRATION NO.</td>
      <td class="font-medium">&nbsp;&nbsp;{{$commregno}}</td>
      <td class="font-medium bg-orange align-center">QATAR CHAMBER OF COMMERCE MEMBERSHIP</td>
      <td class="font-medium">&nbsp;&nbsp;{{$qcmembership}}</td>
      <td rowspan="2" class="font-medium align-center">TAX CARD NUMBER</td>
      <td rowspan="2" class="font-medium">&nbsp;&nbsp;{{$taxcardno}}</td>
    </tr>
    <tr>
      <td class="font-medium bg-orange align-center">VALIDITY</td>
      <td class="font-medium">&nbsp;&nbsp;{{$membervalidity1}}</td>
      <td class="font-medium bg-orange align-center">VALIDITY</td>
      <td class="font-medium">&nbsp;&nbsp;{{$membervalidity2}}</td>
      </tr>
    <tr>
      <td class="font-medium bg-orange align-center">OTHER DETAILS</td>
      <td colspan="5" class="font-medium">&nbsp;&nbsp;{{$otherdetails}}</td>
      </tr>
  </tbody>
</table>
<br>
<p class="align-center" style="color: #08117E; font-size: 24px;margin-bottom: 0px;"><b>DECLARATION</b></p>    
      <table style="width:100%;" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="5" class="instruction-text"><input type="checkbox" name="checkbox" id="checkbox">
        WE DECLARE THAT THE ABOVE INFORMATION ARE TRUE AND ACCURATE AND SHALL ACCEPT THAT ALAQARIA HAS THE RIGHT TO VERIFY THEM AS REQUIRED</td>
      </tr>
    <tr>
      <td colspan="4" class="bg-light-orange font-large align-center" >SUPPLIER'S AUTHORIZED SIGNATORY</td>
      <td rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td style="height: 100px;">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td style="width: 30%;" class="font-medium align-center">NAME</td>
      <td style="width: 15%;" class="font-medium align-center">DESIGNATION</td>
      <td style="width: 15%;" class="font-medium align-center">SIGNATURE</td>
      <td style="width: 10%;" class="font-medium align-center">DATE</td>
      <td style="width: 30%;" class="bg-light-orange font-medium align-center" >OFFICIAL COMPANY SEAL.(AFFIX)</td>
    </tr>
  </tbody>
</table>

      <br>
      
       <table style="width:100%;border-style: dashed" border="1" align="center">
  <tbody>
    <tr>
      <td colspan="6" class="instruction-text align-center" style="padding: 5px;">NOTE:IF THE SPACE PROVIDED IS INSUFFICIENT,KINDLY PROVIDE DETAILED RESPONSE IN SEPARATE AND CLEARLY IDENTIFIED ATTACHMENTS</td>
      </tr>
      <tr style="border-bottom: hidden">
      <td colspan="6" class="instruction-text align-center" style="padding: 3px;"><u>THE REGISTERED SUPPLIERS ARE REQUIRED TO IMMEDIATELY INFORM ALAQARIA PROCUREMENT DEPARTMENT OF ANY SIGNIFICANT CHANGE TO THEIR:</u></td>
      </tr>
    <tr>
      <td colspan="3" class="instruction-text" style="padding: 10px;width: 50%;"><li>FINANCIAL CAPACITY OR TECHNICAL CAPABILITY</li>
        <li>OWNERSHIP OR HOLDING</li>
        <li>ANY COURT CONVICTIONS OR PROHIBITION ORDERS FROM GOVERMENT AUTHORITIES</li>
        <li>SIGNIFICANT CHANGES TO SUPPLIER OR SOURCES OF PRODUCTS/SERVICES</li>
        <li>SIGNIFICANT CHANGES OF RANGE OF PRODUCTS/SERVICES OFFERED</li></td>
      <td colspan="3" class="instruction-text" style="padding: 10px;width: 50%;"><li>CHANGES IN ADDRESS, PHONE, EMAIL, FAX, CONTACT PERSON OR COMMUNICATION DETAILS.</li>
        <li>ALAQARIA MAY MAKE REVISIONS TO THE REGISTRATION SCHEME,OR SEEK NEW APPLICATIONS AT ANY TIME.WHENEVER A FULL REVISION OF THE SYSTEM IS CARRIED OUT,ADDITIONAL INFORMATION OR NEW APPLICATIONS FROM CURRENT PRE-QUALIFIED SUPPLIERS WILL BE SOUGHT</li></td>
      </tr>
    <tr style="border-bottom: 1px solid black;color: white;" class="bg-red">
      <td colspan="2"  class="align-center font-xsmall" style="width: 34%;padding: 5px;">ALAQARIA PROCUREMENT DEPARTMENT</td>
      <td colspan="2" class="align-center font-xsmall" style="width: 33%;">EMAIL:<u>ProcurementDepartment@alaqaria.com.qa</u></td>
      <td colspan="2" class="align-center font-xsmall" style="width: 33%;">
      	TEL:44086041/44086047/44086052
      </td>	
      </tr>
  </tbody>
</table>

<br>
    <table style="width:100%;" border="1" align="center">
  <tbody>
    <tr class="bg-red text-center font-large" style="color: white;">
      <td colspan="6" style="padding: 5px;">(TO BE FILLED UP BY ALAQARIA ONLY)</td>
      </tr>
    <tr">
      <td style="width: 20%;height: 80px;">&nbsp;</td>
	  <td style="width: 14%;">&nbsp;</td>
	  <td style="width: 19%;">&nbsp;</td>
	  <td style="width: 14%;">&nbsp;</td>
	  <td style="width: 19%;">&nbsp;</td>
	  <td style="width: 14%;">&nbsp;</td>
    </tr>
    <tr style="border-top: hidden;">
      <td style="width: 20%;" class="font-xsmall align-center">(NAME & SIGNATURE)</td>
	  <td style="width: 14%;" class="font-xsmall align-center">(DATE)</td>
	  <td style="width: 19%;" class="font-xsmall align-center">(NAME & SIGNATURE)</td>
	  <td style="width: 14%;" class="font-xsmall align-center">(DATE)</td>
	  <td style="width: 19%;" class="font-xsmall align-center">(NAME & SIGNATURE)</td>
	  <td style="width: 14%;" class="font-xsmall align-center">(DATE)</td>
    </tr>
    <tr>
      <td colspan="2" class="font-xsmall align-center" style="padding: 5px;">RECOMMENDED BY(END USER)</td>
      <td colspan="2" class="font-xsmall align-center">REVIEWED BY(PROCUREMENT)</td>
      <td colspan="2" class="font-xsmall align-center">APPROVED BT(HEAD OF PROCUREMENT)</td>
      </tr>
  </tbody>
</table>


  <p style="text-align: center;color: red;padding-top: 2px;" class="font-small">QATAR REAL ESTATE INVESTMENT COMPANY (ALAQARIA) - FACILITIES MANAGEMENT DIVISION</p>









								</div>
								<p><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
									<script src="js/jquery-1.11.3.min.js"></script> 

									<!-- Include all compiled plugins (below), or include individual files as needed --> </p>
									<p> 
										<script src="js/bootstrap.js"></script> 
									</p>
								</body>
								</html>