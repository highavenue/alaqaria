<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style type="text/css">
    body {
        background-color: #eee;
      }

      *[role="form"] {
        max-width: 90%;
        padding: 15px;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 0.3em;
      }

      *[role="form"] h2 {
        margin-left: 5em;
        margin-bottom: 1em;
      }

  </style>
</head>
<body>
  <div class="container">
  <form action="{{ route('vendorregistrations.store') }}" method="POST" class="form-horizontal" role="form">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="table-responsive" class="form-group">       
        <table class="table table-bordered" class="table">
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">DOCUMENT NO.</td>  
            <td rowspan="2" style="color:#c30303;vertical-align: middle;">QATAR REAL INVESTMENT COMPANY FACILITIES MANAGEMENT DIVISION(FMD)</td>
            <td rowspan="4" style="vertical-align: middle;"><img src="/uploads/img/logo/logo.jpg" width="100px;"></td>      
          </tr>
          <tr>
            <td colspan="2" style="text-align: center;vertical-align: middle;">PRO-SPQ-01F</td>
          </tr>
          <tr>
            <td>REVISION NUMBER</td>
            <td>REVISION DATE</td>
            <td rowspan="2" class="label-info" style="text-align: center;vertical-align: middle;"><h3>SUPPLIER PRE-QUALIFICATION FORM</h3></td>
          </tr>
          <tr>
            <td>ENACTMENT</td>
            <td>28 APRIL 2016</td>
          </tr>
        </table>
      </div>

      <div class="table-responsive" class="form-group">       
        <table class="table table-bordered" class="table">
          <tr>
            <td class="label-info"><label>REGISTRY NO.(yy-mm-seriesno.)</label></td>
            <td><input class="form-control" id="registryno" name="registryno" type="text"></td>
            <td class="label-info"><label>DATE(dd-mm-yy)</label></td>
            <td><input type="date" name="registrydate"></td>
          </tr>
        </table>
      </div>


      <div class="table-responsive" class="form-group">       
        <table class="table table-bordered" class="table">
          <tr>
            <td colspan="7" style="text-align:center;" class="label-info"><label>SECTION I:GENERAL INFORMATION</label></td>
          </tr>
          <tr>
            <td width="30%"><label>COMPANY REGISTERED NAME</label></td>
            <td colspan="6"><input class="form-control" id="companyregisteredname" name="companyregisteredname" type="text"></td>
          </tr>
          <tr>
            <td width="30%"><label>COMPANY PARENT NAME</label></td>
            <td colspan="6"><input class="form-control" id="companyparentname" name="companyparentname" type="text"></td>
          </tr>
          <tr>
            <td width="30%"><label>COUNTRY OF ESTABLISHMENT</label></td>
            <td><label><input type="radio" name="establishment" value="qatar">QATAR</label></td>
            <td><label><input type="radio" name="establishment" value="gcc">GCC</label></td>
            <td colspan="4"><label><input type="radio" name="establishment" value="others">OTHERS(pls.specify)</label>
            <input class="form-control" id="establishment" name="establishment" type="text"></td>
          </tr>
          <tr>
            <td width="30%"><label>LEGAL CLASSIFICATION</label></td>
            <td><label><input type="radio" name="classification" value="individual">INDIVIDUAL OWNED</label></td>
            <td><label><input type="radio" name="classification" value="partnership">PARTNERSHIP</label></td>
            <td><label><input type="radio" name="classification" value="joint">JOINT VENTURE</label></td>
            <td><label><input type="radio" name="classification" value="limitedliability">LIMITED LIABILITY COMPANY</label></td>
            <td colspan="2"><label><input type="radio" name="classification" value="legalothers">OTHERS(pls.specify)</label><input class="form-control" id="other_classification" name="classification" type="text"></td>
          </tr>
          <tr>
            <td rowspan="3" style="vertical-align: middle;"><label>REGISTERED BUSINESS ADDRESS</label></td>
            <td><label>BLDG.NAME</label></td>
            <td><input class="form-control" id="bldname" name="bldname" type="text"></td>
            <td><label>BLDG.NO</label></td>
            <td><input class="form-control" id="bldno" name="bldno" type="text"></td>
            <td><label>FLOOR NO.</label></td>
            <td><input class="form-control" id="floorno" name="floorno" type="text"></td>
          </tr>
          <tr>
            <td><label>STREET NAME</label></td>
            <td><input class="form-control" id="streetname" name="streetname" type="text"></td>
            <td><label>STREET.NO</label></td>
            <td><input class="form-control" id="streetno" name="streetno" type="text"></td>
            <td><label>ZONE NO.</label></td>
            <td><input class="form-control" id="zoneno" name="zoneno" type="text"></td>
          </tr>
          <tr>
            <td><label>CITY</label></td>
            <td><input class="form-control" id="city" name="city" type="text"></td>
            <td><label>COUNTRY</label></td>
            <td><input class="form-control" id="country" name="country" type="text"></td>
            <td><label>POSTAL CODE</label></td>
            <td><input class="form-control" id="postalcode" name="postalcode" type="text"></td>
          </tr>
          <tr>
            <td><label>PO BOX NO.</label></td>
            <td colspan="2"><input class="form-control" id="boxno" name="boxno" type="text"></td>
            <td><label>TELEPHONE NUMBER</label></td>
          <td colspan="3"><input class="form-control" id="telephoneno" name="telephoneno" type="text"></td>
          </tr>
          <tr>
            <td><label>EMAIL ADDRESS</label></td>
            <td colspan="2"><input class="form-control" id="email" name="email" type="text"></td>
            <td><label>FAX NUMBER</label></td>
            <td colspan="3"><input class="form-control" id="faxno" name="faxno" type="text"></td>
          </tr>
          <tr>
            <td rowspan="2" style="vertical-align: middle;"><label>NATURE OF BUSINESS</label></td>
            <td><label><input type="radio" name="natureofbusiness" value="trader">TRADER</label></td>
            <td><label><input type="radio" name="natureofbusiness" value="manufacturer">MANUFACTURER</label></td>
            <td><label><input type="radio" name="natureofbusiness" value="contractor">CONTRACTOR</label></td>
            <td rowspan="2" colspan="3" style="vertical-align: middle;"><label><input type="radio" name="natureofbusiness" value="others">OTHERS(please specify)</label>
          <input class="form-control" id="natureofbusiness" name="natureofbusiness" type="text"></td>
          </tr>
          <tr>
            <td><label><input type="radio" name="natureofbusiness" value="distributor">DISTRIBUTOR</label></td>
            <td><label><input type="radio" name="natureofbusiness" value="consultant">CONSULTANT</label></td>
            <td><label><input type="radio" name="natureofbusiness" value="serviceprovider">SERVICE PROVIDER</label></td>
          </tr>
          <tr>
            <td rowspan="3" style="vertical-align: middle;"><label>FIELD OF TRADE</label></td>
            <td colspan="2"><label><input type="radio" name="fieldoftrade" value="products">PRODUCTS(please specify)</label></td>
            <td colspan="4"><input class="form-control" id="fieldoftradetext" name="fieldoftradetext" type="text"></td>
          </tr>
          <tr>
            <td colspan="2"><label><input type="radio" name="fieldoftrade" value="services">SERVICES(please specify)</label></td>
            <td colspan="4"><input class="form-control" id="fieldoftradetext" name="fieldoftradetext" type="text"></td>
          </tr>
          <tr>
            <td colspan="2"><label><input type="radio" name="fieldoftrade" value="works">WORKS(please specify)</label></td>
            <td colspan="4"><input class="form-control" id="fieldoftradetext" name="fieldoftradetext" type="text"></td>
          </tr>
          <tr>
            <td><label>NAME OF CONTACT PERSON</label></td>
            <td colspan="2"><input class="form-control" id="personname" name="personname" type="text"></td>
            <td><label>JOB TITLE</label></td>
            <td colspan="3"><input class="form-control" id="personjobtitle" name="personjobtitle" type="text"></td>
          </tr>
          <tr>
            <td><label>EMAIL ADDRESS</label></td>
            <td colspan="2"><input class="form-control" id="personemail" name="personemail" type="text"></td>
            <td><label>MOBILE NO</label></td>
            <td colspan="3"><input class="form-control" id="personmobileno" name="personmobileno" type="text"></td>
          </tr>
          <tr>
            <td><label>TELEPHONE NO:</label></td>
            <td colspan="2"><input class="form-control" id="persontelephoneno" name="persontelephoneno" type="text"></td>
            <td><label>FAX NO</label></td>
            <td colspan="3"><input class="form-control" id="personfaxno" name="personfaxno" type="text"></td>
          </tr>
          <tr>
          <td colspan="7"><label>SUBMITTED DOCUMENTS(INCLUDING COPIES OF REGISTRATION DOCUMENTS):</label><textarea style="width:100%;height:75px;" name="submitteddocuments"></textarea></td>
          </tr>
        </table>
      </div>

      <div class="table-responsive" class="form-group">       
        <table class="table table-bordered" class="table">
          <tr>
            <td colspan="8" style="text-align:center;" class="label-info"><label>SECTION II:EXPERIENCES & CERTIFICATIONS</label></td>
          </tr>
          <tr>
            <td class="label-info"><label>NO.OF YEARS IN CURRENT BUSINESS</label></td>
            <td ><label><input type="radio" name="noofyears" value="lessthanyear">LESS THAN A YEAR</label></td>
            <td ><label><input type="radio" name="noofyears" value="boaf">1-5</label></td>
            <td ><label><input type="radio" name="noofyears" value="bsat">6-10</label></td>
            <td ><label><input type="radio" name="noofyears" value="beaf">11-15</label></td>
            <td ><label><input type="radio" name="noofyears" value="bsatw">16-20</label></td>
            <td ><label><input type="radio" name="noofyears" value="gtwentyone">>21(Please Specify)</label>
              <input class="form-control" id="specifynoy" name="noofyears" type="text"></td>
          </tr>
          <tr>
            <td rowspan="3" style="vertical-align: middle;" class="label-info"><label>THREE MAJOR CLIENTS FOR THE PAST 3 YEARS</label></td>
            <td><label>CLIENT</label></td>
            <td><input class="form-control" id="client1" name="client1" type="text"></td>
            <td><label>LOCATION</label></td>
            <td><input class="form-control" id="location1" name="location1" type="text"></td>
            <td><label>DURATION</label></td>
            <td><input class="form-control" id="duration1" name="duration1" type="text"></td>
          </tr>
          <tr>
            <td><label>CLIENT</label></td>
            <td><input class="form-control" id="client2" name="client2" type="text"></td>
            <td><label>LOCATION</label></td>
            <td><input class="form-control" id="location2" name="location2" type="text"></td>
            <td><label>DURATION</label></td>
            <td><input class="form-control" id="duration2" name="duration2" type="text"></td>
          </tr>
          <tr>
            <td><label>CLIENT</label></td>
            <td><input class="form-control" id="client3" name="client3" type="text"></td>
            <td><label>LOCATION</label></td>
            <td><input class="form-control" id="location3" name="location3" type="text"></td>
            <td><label>DURATION</label></td>
            <td><input class="form-control" id="duration3" name="duration3" type="text"></td>
          </tr>
          <tr>
            <td colspan="5" class="label-info"><label>HAVE YOU HAD ANY CONTRACTS TERMINATED DUE TO POOR PERFORMANCE IN THE LAST 3 YEARS ?</label></td>
            <td ><label><input type="radio" name="poorexp" value="1">YES</label></td>
            <td ><label><input type="radio" name="poorexp" value="0">NO</label></td>
          </tr>
          <tr>
            <td class="label-info"><label>IF YES PLEASE SPECIFY</label></td>
            <td colspan="6"><input class="form-control" id="pleasespecify" name="pleasespecify" type="text"></td>
          </tr>
          <tr>
            <td class="label-info"><label>PREVIOUS BUSINESS NAME(IF RECENTLY CHANGED)</label></td>
            <td colspan="2"><input class="form-control" id="previousbusinessname" name="previousbusinessname" type="text"></td>
            <td><label>PLS.SPECIFY REASON FOR CHANGE</label></td>
            <td colspan="3"><input class="form-control" id="reasonforchange" name="reasonforchange" type="text"></td>
          </tr>
          <tr>
            <td class="label-info"><label>CERTIFICATIONS</label></td>
            <td ><label><input type="radio" name="certifications" value="iso9001">ISO 9001</label></td>
            <td ><label><input type="radio" name="certifications" value="iso14001">ISO 14001</label></td>
          <td ><label><input type="radio" name="certifications" value="OHSAS18001">OHSAS 18001</label></td>
          <td ><label><input type="radio" name="certifications" value="iso9001">OTHERS(PLS Specify)</label></td>
          <td colspan="2"><input class="form-control" id="certifications" name="certifications" type="text"></td>
          </tr>

          <tr>
            <td class="label-info"><label>CERTIFICATION BODY</label></td>
            <td colspan="3"><input class="form-control" id="certificationbody1" name="certificationbody1" type="text"></td>
            <td class="label-info"><label>VALIDITY</label></td>
            <td colspan="2"><input class="form-control" id="validity1" name="validity1" type="text"></td>
          </tr>

          <tr>
            <td class="label-info"><label>CERTIFICATION BODY</label></td>
            <td colspan="3"><input class="form-control" id="certificationbody2" name="certificationbody2" type="text"></td>
            <td class="label-info"><label>VALIDITY</label></td>
            <td colspan="2"><input class="form-control" id="validity2" name="validity2" type="text"></td>
          </tr>
          <tr>
            <td class="text-center" colspan="7"><label class="text-info">NOTE:KINDLY ATTACHED COPIES OF CERTIFICATES</label></td>
          </tr>

        </table>
      </div>

      <div class="table-responsive" class="form-group">       
        <table class="table table-bordered" class="table">
          <tr>
            <td colspan="8" style="text-align:center;" class="label-warning"><label>SECTION III.A : BANK DETAILS</label></td>
          </tr>
          <tr>
            <td class="label-warning" colspan="2"><label>NAME OF BANK</label></td>
            <td colspan="2"><input class="form-control" id="bankname" name="bankname" type="text"></td>
            <td class="label-warning"><label>ACCOUNT NAME</label></td>
            <td colspan="3"><input class="form-control" id="accountname" name="accountname" type="text"></td>
          </tr>
          <tr>
            <td class="label-warning" colspan="2"><label>ACCOUNT NO.</label></td>
            <td colspan="2"><input class="form-control" id="accountno" name="accountno" type="text"></td>
            <td class="label-warning"><label>SWIFT CODE NO</label></td>
            <td><input class="form-control" id="swiftcode" name="swiftcode" type="text"></td>
            <td class="label-warning"><label>CURRENCY</label></td>
            <td><input class="form-control" id="currency" name="currency" type="text"></td>
          </tr>
          <tr>
            <td class="label-warning" colspan="2"><label>IBAN NUMBER</label></td>
            <td colspan="6"><input class="form-control" id="ibanno" name="ibanno" type="text"></td>
          </tr>
          <tr>
            <td class="label-warning" rowspan="3" colspan="2" style="vertical-align: middle;"><label>BANK ADDRESS</label></td>
            <td><label class="text-info">BLDG.NAME</label></td>
            <td><input class="form-control" id="bankbldgname" name="bankbldgname" type="text"></td>
            <td><label class="text-info">BLDG.NO</label></td>
            <td><input class="form-control" id="bankbldgno" name="bankbldgno" type="text"></td>
            <td><label class="text-info">FLOOR NO.</label></td>
            <td><input class="form-control" id="bankfloorno" name="bankfloorno" type="text"></td>
          </tr>
          <tr>
            <td><label class="text-info">STREET NAME</label></td>
          <td><input class="form-control" id="bankstreetname" name="bankstreetname" type="text"></td>
            <td><label class="text-info">STREET.NO</label></td>
            <td><input class="form-control" id="bankstreetno" name="bankstreetno" type="text"></td>
            <td><label class="text-info">ZONE NO.</label></td>
            <td><input class="form-control" id="bankzoneno" name="bankzoneno" type="text"></td>
          </tr>
          <tr>
            <td><label class="text-info">CITY</label></td>
            <td><input class="form-control" id="bankcity" name="bankcity" type="text"></td>
            <td><label class="text-info">COUNTRY</label></td>
            <td><input class="form-control" id="bankcountry" name="bankcountry" type="text"></td>
            <td><label class="text-info">POSTALCODE</label></td>
          <td><input class="form-control" id="bankpostalcode" name="bankpostalcode" type="text"></td>
          </tr>
          <tr>
            <td class="label-warning" colspan="2"><label>PO BOX NO.</label></td>
            <td colspan="2"><input class="form-control" id="bankpoboxno" name="bankpoboxno" type="text"></td>
            <td class="label-warning" colspan="2"><label>TELEPHONE NUMBER</label></td>
            <td colspan="2"><input class="form-control" id="banktelephoneno1" name="banktelephoneno1" type="text"></td>
          </tr>
          <tr>
            <td class="label-warning" colspan="2"><label>FINANCE CONTACT PERSON</label></td>
            <td colspan="2"><input class="form-control" id="financecontactperson" name="financecontactperson" type="text"></td>
            <td class="label-warning" colspan="2"><label>TELEPHONE NUMBER</label></td>
            <td colspan="2"><input class="form-control" id="banktelephoneno2" name="banktelephoneno2" type="text"></td>
          </tr>
          <tr>
            <td class="label-warning" colspan="2"><label>EMAIL ADDRESS</label></td>
            <td colspan="2"><input class="form-control" id="bankemailaddress" name="bankemailaddress" type="text"></td>
            <td class="label-warning" colspan="2"><label>FAX NUMBER</label></td>
            <td colspan="2"><input class="form-control" id="bankfaxno" name="bankfaxno" type="text"></td>
          </tr>
        </table>
      </div>

      <div class="table-responsive" class="form-group">       
        <table class="table table-bordered" class="table">
          <tr>
            <td colspan="6" style="text-align:center;" class="label-warning" ><label>SECTION III.B : WITHHOLDING TAX DETAILS</label></td>
          </tr>
          <tr>
            <td colspan="3" style="text-align:center;" class="label-warning" ><label>NATURE OF THE OFFICE</label></td>
            <td colspan="3" style="text-align:center;" class="label-warning"><label>LOCATION OF OFFICE/S</label></td>
          </tr>
          <tr>
          <td><label><input type="radio" name="natureoflocation" value="permanent">PERMANENT TYPE</label></td>
          <td colspan="2"><label><input type="radio" name="natureoflocation" value="temporary">TEMPORARY OFFICE</label></td>
          <td><label><input type="radio" name="locationofoffice" value="local">LOCAL OFFICE(QATAR)</label></td>
          <td colspan="2"><label><input type="radio" name="locationofoffice" value="foreign">FOREIGN OFFICE</label></td>
          </tr>
          <tr>
            <td class="label-warning" ><label>COMMERCIAL REGISTRATION NO.</label></td>
            <td><input class="form-control" id="commregno" name="commregno" type="text"></td>
            <td class="label-warning" ><label>QATAR CHAMBER OF COMMERCE MEMBERSHIP</label></td>
            <td><input class="form-control" id="qcmembership" name="qcmembership" type="text"></td>
            <td rowspan="2"><label>TAX CARD NUMBER</label></td>
            <td rowspan="2"><input class="form-control" id="taxcardno" name="taxcardno" type="text"></td>
          </tr>
          <tr>
            <td class="label-warning" ><label>VALIDITY</label></td>
            <td><input class="form-control" id="membervalidity1" name="membervalidity1" type="text"></td>
            <td class="label-warning" ><label>VALIDITY</label></td>
            <td><input class="form-control" id="membervalidity2" name="membervalidity2" type="text"></td>
          </tr>
          <tr>
            <td class="label-warning" ><label>OTHER DETAILS</label></td>
            <td colspan="5"><input class="form-control" id="otherdetails" name="otherdetails" type="text"></td>
          </tr>
        </table>
      </div>


      <div class="table-responsive" class="form-group">
          <label style="text-align:center;width: 100%;" class="text-info" ><label style="font-size:20px;">DECLARATION</label>     
        <table class="table table-bordered " class="table">
          <tr>
            <td class="text-info" style="text-align:center" colspan="6"><h6>WE DECLARE THAT THE ABOVE INFORMATION ARE TRUE AND ACCURATE AND SHALL ACCEPT THAT ALAQARIA HAS THE RIGHT TO VERIFY THEM AS REQUIRED</h6></td>
          </tr>
          <tr>
            <td colspan="4" width="70%" style="text-align:center;background-color:#F7F199;"><label>SUPPLIER'S AUTHORIZED SIGNATORY</label></td>
            <td rowspan="2"></td>
          </tr>
          <tr>
            <td height="100px;" width="25%"></td>
            <td ></td>
            <td ></td>
            <td ></td>
          </tr>
          <tr>
            <td>NAME</td>
            <td>DESIGNATION</td>
            <td>SIGNATURE</td>
            <td>DATE</td>
            <td style="background-color:#F7F199;">OFFICIAL COMPANY SEAL.(AFFIX)</td>
          </tr>
        </table>
      </div>

      <div class="table-responsive" class="form-group"> 
        <table class="table table-bordered " class="table">
          <tr class="text-info">
            <td style="text-align:center;" colspan="3"><h6>NOTE:IF THE SPACE PROVIDED IS INSUFFICIENT,KINDLY PROVIDE DETAILED RESPONSE IN SEPARATE AND CLEARLY IDENTIFIED ATTACHMENTS</h6></td>
          </tr>
          <tr class="text-info">
            <td colspan="3"><h6 style="text-align:center;"><u>THE REGISTERED SUPPLIERS ARE REQUIRED TO IMMEDIATELY INFORM ALAQARIA PROCUREMENT DEPARTMENT OF ANY SIGNIFICANT CHANGE TO THEIR:</u></h6></td>
          </tr>
          <tr class="text-info">
            <td width="50%">
              <ul>
                <li><h6>FINANCIAL CAPACITY OR TECHNICAL CAPABILITY</h6></li>
                <li><h6>OWNERSHIP OR HOLDING</h6></li>
                <li><h6>ANY COURT CONVICTIONS OR PROHIBITION ORDERS FROM GOVERMENT AUTHORITIES</h6></li>
                <li><h6>SIGNIFICANT CHANGES TO SUPPLIER OR SOURCES OF PRODUCTS/SERVICES</h6></li>
                <li><h6>SIGNIFICANT CHANGES OF RANGE OF PRODUCTS/SERVICES OFFERED</h6></li>
              </ul>
            </td>
            <td colspan="2">
              <ul>
                <li><h6>CHANGES IN ADDRESS,PHONE,EMAIL,FAX,CONTACT PERSON OR COMMUNICATION DETAILS.</h6></li>
                <li style="text-align: justify "><h6>ALAQARIA MAY MAKE REVISIONS TO THE REGISTRATION SCHEME,OR SEEK NEW APPLICATIONS AT ANY TIME.WHENEVER A FULL REVISION OF THE SYSTEM IS CARRIED OUT,ADDITIONAL INFORMATION OR NEW APPLICATIONS FROM CURRENT PRE-QUALIFIED SUPPLIERS WILL BE SOUGHT</h6></li>
              </ul>
            </td>
          </tr>
          <tr class="label-danger" style="color:white;">
            <td><label>ALAQARIA PROCUREMENT DEPARTMENT</label></td>
            <td><label>EMAIL:<u>ProcurementDepartment@alaqaria.com.qa</u></label></td>
            <td><label>TEL:44086041/44086047/44086052</label></td>
          </tr>
        </table>
      </div>

      <div class="table-responsive" class="form-group">   
        <table class="table table-bordered " class="table">
          <tr >
            <td class="label-danger" style="text-align:center;color:white;" colspan="6"><label >(TO BE FILLED UP BY ALAQARIA ONLY)</label></td>
          </tr>
          <tr style="text-align: center;" class="text-info">
            <td height="100px;" style="vertical-align:bottom;"><h5>(NAME & SIGNATURE)</h5></td>
            <td style="vertical-align:bottom;"><h5>(DATE)</h5></td>
            <td style="vertical-align:bottom;"><h5>(NAME & SIGNATURE)</h5></td>
            <td style="vertical-align:bottom;"><h5>(DATE)</h5></td>
            <td style="vertical-align:bottom;"><h5>(NAME & SIGNATURE)</h5></td>
            <td style="vertical-align:bottom;"><h5>(DATE)</h5></td>
          </tr>
          <tr style="text-align: center;" class="text-info">
            <td colspan="2">RECOMMENDED BY(END USER)</td>
            <td colspan="2">REVIEWED BY(PROCUREMENT)</td>
            <td colspan="2">APPROVED BT(HEAD OF PROCUREMENT)</td>
          </tr>
        </table>
      </div>

      <div class="text-center" style="color:#c30303;">
        <label>QATAR REAL ESTATE INVESTMENT COMPANY (ALAQARIA) - FACILITIES MANAGEMENT DIVISION </label>
      </div>

      <div class="well well-sm">
        <button type="submit" class="btn btn-primary">Create</button>
        <a class="btn btn-link pull-right" href="{{ route('vendorregistrations.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
      </div>

    </form> <!-- /form -->
  </div> <!-- ./container -->

</body>
</html>