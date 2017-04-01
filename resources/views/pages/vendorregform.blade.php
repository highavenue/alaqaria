@extends('layouts.master')
@section('title','| Home Page')
{{-- @section('bannerslider')
@include('partials._bannerslider')
@endsection --}}

@section('content')
{{-- @include('error') --}}
<div class="spacer-60"></div>

<div class="container">
  <div class="row">
    <!-- About Section -->
    <section id="abt_sec" class="col-md-12">
      <!-- Progressbars -->
      <div class="row skill_sec">

        <div class="titl_sec">
          <div class="col-xs-12">

            <h3 class="main_titl text-left">
              SUPPLIER PRE-QUALIFICATION FORM
            </h3>

          </div>

          <div class="clearfix"></div>
        </div>

        <div class="col-xs-12 skill_ara clearfix">
          @if(Session::has('create_msg'))
          <div class="alert alert-success" id="message">{{ Session::get('create_msg') }}</div>
          @endif
          {{-- form --}}
          <form action="{{ route('VendorRegForm') }}" method="POST" enctype="multipart/form-data" id="msrform">
            {{csrf_field()}}
            <div class="table-responsive" class="form-group">       
              <table class="table table-bordered" class="table">
                <tr>
                  <td colspan="7" style="text-align:center;" class="label-info"><label>SECTION I:GENERAL INFORMATION</label></td>
                </tr>
                <tr>
                  <td width="30%"><label>COMPANY REGISTERED NAME</label></td>
                  <td colspan="6" class="@if($errors->has('companyregisteredname')) has-error @endif"><input class="form-control" id="companyregisteredname" name="companyregisteredname" type="text" placeholder="official name to appear on invoices">@if($errors->has("companyregisteredname"))
                <span class="help-block" style="color: red;" >{{ "company register name field is required" }}</span>
                @endif</td>
                </tr>
                <tr>
                  <td width="30%"><label>COMPANY PARENT NAME</label></td>
                  <td colspan="6" class="@if($errors->has('companyparentname')) has-error @endif"><input class="form-control" id="companyparentname" name="companyparentname" type="text">@if($errors->has("companyparentname"))
                <span class="help-block" style="color: red;" >{{ "company parent name field is required" }}</span>
                @endif</td>
                </tr>

                <tr>
                  <td width="30%"><label>COUNTRY OF ESTABLISHMENT</label></td>
                  <td colspan="6" class="@if($errors->has('establishment')) has-error @endif"><label><input type="radio" name="establishment" class="country" value="qatar" checked="checked">QATAR</label>
                  <label><input type="radio" name="establishment" class="country" value="gcc">GCC</label>
                  <label><input type="radio" name="establishment" class="country" value="others" id="countryothers">OTHERS(pls.specify)</label>
                    <input class="form-control" id="establishmenttxt" name="establishment" type="text" disabled="disabled">@if($errors->has("establishment"))
                <span class="help-block" style="color: red;" >{{ "establishment field is required" }}</span>
                @endif</td>
                  </tr>

                  <tr>
                  <td width="30%"><label>LEGAL CLASSIFICATION</label></td>
                    <td colspan="6" class="@if($errors->has('classification')) has-error @endif"><label><input type="radio" name="classification" class="legal" value="individual" checked="checked">INDIVIDUAL OWNED</label>
                    <label><input type="radio" name="classification" class="legal" value="partnership" >PARTNERSHIP</label>
                    <label><input type="radio" name="classification" class="legal" value="joint">JOINT VENTURE</label>
                    <label><input type="radio" name="classification" class="legal" value="limitedliability">LIMITED LIABILITY COMPANY</label>
                    <label><input type="radio" name="classification" class="legal" value="others">OTHERS(pls.specify)</label><input class="form-control" id="classificationtext" name="classification" type="text" disabled="disabled">@if($errors->has("classification"))
                <span class="help-block" style="color: red;" >{{ "classification field is required" }}</span>
                @endif
                    </td>
                  </tr>

                  <tr>
                    <td rowspan="3" style="vertical-align: middle;"><label>REGISTERED BUSINESS ADDRESS</label></td>
                    <td><label>BLDG.NAME</label></td>
                    <td><input class="form-control" id="buildingname" name="buildingname" type="text"></td>
                    <td><label>BLDG.NO</label></td>
                    <td><input class="form-control" id="buildingno" name="buildingno" type="text"></td>
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
                    <td colspan="2" class="@if($errors->has('boxno')) has-error @endif"><input class="form-control" id="boxno" name="boxno" type="text">@if($errors->has("boxno"))
                <span class="help-block" style="color: red;" >{{ "PO boxno field is required" }}</span>
                @endif</td>
                    <td><label>TELEPHONE NUMBER</label></td>
                    <td colspan="3" class="@if($errors->has('telephoneno')) has-error @endif"><input class="form-control" id="telephoneno" name="telephoneno" type="text">@if($errors->has("telephoneno"))
                <span class="help-block" style="color: red;" >{{ "telephoneno field is required" }}</span>
                @endif</td>
                  </tr>
                  <tr>
                    <td><label>EMAIL ADDRESS</label></td>
                    <td colspan="2" class="@if($errors->has('email')) has-error @endif"><input class="form-control" id="email" name="email" type="text">@if($errors->has("email"))
                <span class="help-block" style="color: red;" >{{ "email field is required" }}</span>
                @endif</td>

                    <td><label>FAX NUMBER</label></td>
                    <td colspan="3" class="@if($errors->has('faxno')) has-error @endif"><input class="form-control" id="faxno" name="faxno" type="text">@if($errors->has("faxno"))
                <span class="help-block" style="color: red;" >{{ "faxno field is required" }}</span>
                @endif</td>
                  </tr>







                  <tr>
                    <td style="vertical-align: middle;" ><label>NATURE OF BUSINESS</label></td>
                    <td colspan="6" class="@if($errors->has('natureothers')) has-error @endif"><label><input type="checkbox" name="naturetrader" value="trader" @if($errors->has('naturetrader')) has-error @endif>TRADER</label>
                    <label><input type="checkbox" name="naturemanufacturer" value="manufacturer" @if($errors->has('naturemanufacturer')) has-error @endif>MANUFACTURER</label>
                    <label><input type="checkbox" name="naturecontractor" value="contractor" @if($errors->has('naturecontractor')) has-error @endif>CONTRACTOR</label>                   
                    <label><input type="checkbox" name="naturedistributor" value="distributor" @if($errors->has('naturedistributor')) has-error @endif>DISTRIBUTOR</label>
                    <label><input type="checkbox" name="natureconsultant" value="consultant" @if($errors->has('natureconsultant')) has-error @endif>CONSULTANT</label>
                    <label><input type="checkbox" name="natureserviceprovider" value="serviceprovider" @if($errors->has('natureserviceprovider')) has-error @endif>SERVICE PROVIDER</label>
                    <label><input type="checkbox" name="natureotherscheck" value="others">OTHERS(please specify)</label>
                      <input class="form-control" id="natureothers" name="natureothers" type="text"  @if($errors->has('natureotherscheck')) has-error @endif>  

                       @if($errors->has("naturetrader") || $errors->has("naturemanufacturer") ||$errors->has("naturecontractor") || $errors->has("naturedistributor") || $errors->has("natureconsultant") || $errors->has("natureserviceprovider") || $errors->has("natureotherscheck"))
                <span class="help-block" style="color: red;" >{{ "atleast one field is required" }}</span>
                @endif

                @if($errors->has("natureothers"))
                <span class="help-block" style="color: red;" >{{ "please enter other field" }}</span>
                @endif                   
                </td>
                    </tr>



                    <tr>
                      <td rowspan="3" style="vertical-align: middle;"><label>FIELD OF TRADE</label></td>

                      <td colspan="2"><label><input type="checkbox" name="fieldproduct" value="products"@if($errors->has('fieldproduct')) has-error @endif>PRODUCTS(please specify)</label></td>
                      <td colspan="4"><textarea name="fieldproducttext" style="width: 100%;@if($errors->has('fieldproducttext'))  border-color: red; @endif" ></textarea>@if($errors->has("fieldproducttext"))
                        <span class="help-block" style="color: red;" >{{ "this field is required" }}</span>
                        @endif</td>
                    </tr>
                    <tr>
                    <td colspan="2"><label><input type="checkbox" name="fieldservice" value="services" @if($errors->has('fieldservice')) has-error @endif>SERVICES(please specify)</label></td>
                     <td colspan="4"><textarea name="fieldservicetext" style="width: 100%;@if($errors->has('fieldservicetext')) border-color: red; @endif"></textarea>@if($errors->has("fieldservicetext"))
                        <span class="help-block" style="color: red;" >{{ "this field is required" }}</span>
                        @endif</td>
                    </tr>
                    <tr>
                    <td colspan="2"><label><input type="checkbox" name="fieldwork" value="works" @if($errors->has('fieldwork')) has-error @endif>WORKS(please specify)</label></td>
                      <td colspan="4"><textarea name="fieldworktext" style="width: 100%;@if($errors->has('fieldworktext')) border-color: red; @endif"></textarea>

                        @if($errors->has("fieldproduct") || $errors->has("fieldservice") || $errors->has("fieldwork"))
                        <span class="help-block" style="color: red;" >{{ "atleast one field of trade is required" }}</span>
                        @endif

                      @if($errors->has("fieldworktext"))
                        <span class="help-block" style="color: red;" >{{ "this field is required" }}</span>
                        @endif</td>
                   </tr>





                      <td><label>NAME OF CONTACT PERSON</label></td>
                      <td class="@if($errors->has('personname')) has-error @endif" colspan="2"><input class="form-control" id="personname" name="personname" type="text">@if($errors->has("personname"))
                <span class="help-block" style="color: red;" >{{ "name of contact person field is required" }}</span>
                @endif</td>

                      <td><label>JOB TITLE</label></td>
                      <td class="@if($errors->has('personjobtitle')) has-error @endif" colspan="3"><input class="form-control" id="personjobtitle" name="personjobtitle" type="text">@if($errors->has("personjobtitle"))
                <span class="help-block" style="color: red;" >{{ "job title field is required" }}</span>
                @endif</td>
                    </tr>

                    <tr>
                      <td><label>EMAIL ADDRESS</label></td>
                      <td class="@if($errors->has('personemail')) has-error @endif" colspan="2"><input class="form-control" id="personemail" name="personemail" type="text">@if($errors->has("personemail"))
                <span class="help-block" style="color: red;" >{{ "contact person email field is required" }}</span>
                @endif</td>

                      <td><label>MOBILE NO</label></td>
                      <td class="@if($errors->has('personmobileno')) has-error @endif" colspan="3"><input class="form-control" id="personmobileno" name="personmobileno" type="text">@if($errors->has("personmobileno"))
                <span class="help-block" style="color: red;" >{{ "contact person mobile no field is required" }}</span>
                @endif</td>
                    </tr>

                    <tr>
                      <td><label>TELEPHONE NO:</label></td>
                      <td colspan="2"><input class="form-control" id="persontelephoneno" name="persontelephoneno" type="text"></td>

                      <td><label>FAX NO</label></td>
                      <td colspan="3"><input class="form-control" id="personfaxno" name="personfaxno" type="text"></td>
                    </tr>
                    <tr>
                      <td colspan="7"><label>UPLOAD DOCUMENTS: <font class="font-xsmall">The documents must be a file of type: jpeg, pdf, doc, docx</font></label></td>                  
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group @if($errors->has('crdoc')) has-error @endif">
                          <label for="crdoc-field">Company Registration(CR)</label>
                          <input type="file" id="crdoc-field" name="crdoc" class="form-control" value="{{ old("crdoc") }}"/>
                          @if($errors->has("crdoc"))
                          <span class="help-block">{{ 'Please upload CR Document' }}</span>
                          @endif
                        </div>
                      </td>
                      <td colspan="2">
                        <div class="form-group @if($errors->has('tradelicencedoc')) has-error @endif">
                          <label for="tradelicencedoc-field">Trade Licence</label>
                          <input type="file" id="tradelicencedoc-field" name="tradelicencedoc" class="form-control" value="{{ old("tradelicencedoc") }}"/>
                          @if($errors->has("tradelicencedoc"))
                          <span class="help-block">{{"Please upload Trade Licence Document"}}</span>
                          @endif
                        </div>
                      </td>
                      <td colspan="2">
                        <div class="form-group @if($errors->has('companysignaturedoc')) has-error @endif">
                          <label for="companysignaturedoc-field">Company Signature</label>
                          <input type="file" id="companysignaturedoc-field" name="companysignaturedoc" class="form-control" value="{{ old("companysignaturedoc") }}"/>
                          @if($errors->has("companysignaturedoc"))
                          <span class="help-block">{{ 'Please upload Company signature Document ' }}</span>
                          @endif
                        </div>
                      </td>
                      <td colspan="2">
                        <div class="form-group @if($errors->has('otherdocument1')) has-error @endif">
                          <label for="otherdocument1-field">Others Documents 1(optional)</label>
                          <input type="file" id="otherdocument1-field" name="otherdocument1" multiple="multiple" class="form-control" value="{{ old("otherdocument1") }}"/>
                          @if($errors->has("otherdocument1"))
                          <span class="help-block">{{ $errors->first("otherdocument1") }}</span>
                          @endif
                        </div>
                      </td>
                    </tr>
                      <tr>
                      <td>
                        <div class="form-group @if($errors->has('otherdocument2')) has-error @endif">
                          <label for="otherdocument2-field">Others Documents 2(optional)</label>
                          <input type="file" id="otherdocument2-field" name="otherdocument2" class="form-control" value="{{ old("otherdocument2") }}"/>
                          @if($errors->has("otherdocument2"))
                          <span class="help-block">{{ $errors->first("otherdocument2") }}</span>
                          @endif
                        </div>
                      </td>
                      <td colspan="2">
                        <div class="form-group @if($errors->has('otherdocument3')) has-error @endif">
                          <label for="otherdocument3-field">Others Documents 3(optional)</label>
                          <input type="file" id="otherdocument3-field" name="otherdocument3" class="form-control" value="{{ old("otherdocument3") }}"/>
                          @if($errors->has("otherdocument3"))
                          <span class="help-block">{{$errors->first("otherdocument3")}}</span>
                          @endif
                        </div>
                      </td>
                      <td colspan="2">
                        <div class="form-group @if($errors->has('otherdocument4')) has-error @endif">
                          <label for="otherdocument4-field">Others Documents 4(optional)</label>
                          <input type="file" id="otherdocument4-field" name="otherdocument4" class="form-control" value="{{ old("otherdocument4") }}"/>
                          @if($errors->has("otherdocument4"))
                          <span class="help-block">{{ $errors->first("otherdocument4")}}</span>
                          @endif
                        </div>
                      </td>
                      <td colspan="2">
                        <div class="form-group @if($errors->has('otherdocument5')) has-error @endif">
                          <label for="otherdocument5-field">Others Documents 5(optional)</label>
                          <input type="file" id="otherdocument5-field" name="otherdocument5" class="form-control" value="{{ old("otherdocument5") }}"/>
                          @if($errors->has("otherdocument5"))
                          <span class="help-block">{{ $errors->first("otherdocument5") }}</span>
                          @endif
                        </div>
                      </td>
                    </tr>
                     <tr>
                      <td colspan="7"><label>Please specify the name of documents attached with</label>
                      <textarea style="width: 100%" placeholder="Company Registration, Trade Licence etc." name="docdetailstext"></textarea>
                      </td>                  
                    </tr>
                  </table>
                </div>


                {{-- SECTION 2 --}}





                <div class="table-responsive" class="form-group">       
                  <table class="table table-bordered">
                    <tr>
                      <td colspan="7" style="text-align:center;" class="label-info"><label>SECTION II:EXPERIENCES & CERTIFICATIONS</label></td>
                    </tr>

                    <tr>
                      <td class="label-info"><label>NO.OF YEARS IN CURRENT BUSINESS</label></td>
                      <td ><label><input type="radio" name="noofyears" value="lessthanyear">LESS THAN A YEAR</label></td>
                      <td ><label><input type="radio" name="noofyears" value="1-5">1-5</label></td>
                      <td ><label><input type="radio" name="noofyears" value="6-10">6-10</label></td>
                      <td ><label><input type="radio" name="noofyears" value="11-15">11-15</label></td>
                      <td ><label><input type="radio" name="noofyears" value="16-20">16-20</label></td>
                      <td class="@if($errors->has('noofyearstxt')) has-error @endif"><label><input type="radio" name="noofyears" value=">21">&gt;21(Please Specify)<input class="form-control" id="specifynoy" name="noofyearstxt" type="text"></label>
                       @if($errors->has("noofyearstxt"))
                          <span class="help-block" style="color: red;">{{ $errors->first("noofyearstxt") }}</span>
                          @endif
                        </td>
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
                        <td colspan="5" class="label-info" @if($errors->has('poorexp')) has-error @endif><label>HAVE YOU HAD ANY CONTRACTS TERMINATED DUE TO POOR PERFORMANCE IN THE LAST 3 YEARS ?</label></td>
                        <td ><label><input type="radio" name="poorexp" value="yes" class="contractpoor">YES</label></td>
                        <td ><label><input type="radio" name="poorexp" value="no" class="contractpoor" checked="checked">NO</label></td>
                        @if($errors->has("poorexp"))
                <span class="help-block" style="color: red;" >{{ "This field is required" }}</span>
                @endif
                      </tr>
                      <tr>
                        <td class="label-info"><label>IF YES PLEASE SPECIFY</label></td>
                        <td colspan="6" class="@if($errors->has('pleasespecify')) has-error @endif"><input class="form-control" id="pleasespecifytxt" name="pleasespecify" type="text" disabled="disabled"> @if($errors->has("pleasespecify"))
                <span class="help-block" style="color: red;" >{{ "This field is required" }}</span>
                @endif</td>
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
                        <td ><label><input type="radio" name="certifications" value="isoothers" checked="checked"11>OTHERS(PLS Specify)</label></td>
                        <td colspan="2" class="@if($errors->has('certificationstxt')) has-error @endif"><input class="form-control" id="certifications" name="certificationstxt" type="text">@if($errors->has("certificationstxt"))
                <span class="help-block" style="color: red;" >{{ "This field is required" }}</span>
                @endif
                        </td>
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
                    </table>
                  </div>








                  {{-- SECTION 3 --}}
                  <div class="table-responsive" class="form-group">       
                    <table class="table table-bordered" class="table">
                      <tr>
                        <td colspan="8" style="text-align:center;" class="label-warning"><label>SECTION III.A : BANK DETAILS</label></td>
                      </tr>
                      <tr>
                        <td class="label-warning" colspan="2"><label>NAME OF BANK</label></td>
                        <td colspan="2" class="@if($errors->has('bankname')) has-error @endif"><input class="form-control" id="bankname" name="bankname" type="text">@if($errors->has("bankname"))
                <span class="help-block" style="color: red;" >{{ "bankname is required" }}</span>
                @endif</td>

                        <td class="label-warning"><label>ACCOUNT NAME</label></td>
                        <td colspan="3" class="@if($errors->has('accountname')) has-error @endif"><input class="form-control" id="accountname" name="accountname" type="text">@if($errors->has("accountname"))
                <span class="help-block" style="color: red;" >{{ "accountname is required" }}</span>
                @endif</td>
                      </tr>

                      <tr>
                        <td class="label-warning" colspan="2"><label>ACCOUNT NO.</label></td>
                        <td colspan="2" class="@if($errors->has('accountno')) has-error @endif"><input class="form-control" id="accountno" name="accountno" type="text">@if($errors->has("accountno"))
                <span class="help-block" style="color: red;" >{{ "accountno is required" }}</span>
                @endif</td>

                        <td class="label-warning"><label>SWIFT CODE NO</label></td>
                        <td><input class="form-control" id="swiftcode" name="swiftcode" type="text"></td>
                        <td class="label-warning"><label>CURRENCY</label></td>
                        <td class="@if($errors->has('currency')) has-error @endif">
                        <select class="form-control" id="currency" name="currency" value="">
                            <option value="">Select</option>
                            <option value="AED">AED - Emirati Dirham</option>
                            <option value="AUD">AUD - Australian Dollar</option>
                            <option value="BHD">BHD - Bahraini Dinar</option>
                            <option value="CAD">CAD - Canadian Dollar</option>
                            <option value="CHF">CHF - Swiss Franc</option>
                            <option value="CNY">CNY - Chinese Yuan Renminbi</option>                     
                            <option value="EUR">EUR - Euro</option>
                            <option value="GBP">GBP - British Pound</option>
                            <option value="INR">INR - Indian Rupee</option>
                            <option value="JPY">JPY - Japanese Yen</option>
                            <option value="KWD">KWD - Kuwaiti Dinar</option>
                            <option value="MYR">MYR - Malaysian Ringgit</option>
                            <option value="OMR">OMR - Omani Rial</option>
                            <option value="QAR">QAR - Qatari Rial</option>
                            <option value="SAR">SAR - Saudi Riyal</option>
                            <option value="SGD">SGD - Singapore Dollar</option>
                            <option value="USD">USD - US Dollar</option>
                        </select>@if($errors->has("currency"))
                <span class="help-block" style="color: red;" >{{ "currency is required" }}</span>
                @endif
                          </td>
                      </tr>

                      <tr>
                        <td class="label-warning" colspan="2"><label>IBAN NUMBER</label></td>
                        <td colspan="6"><input class="form-control" id="ibanno" name="ibanno" type="text"></td>
                      </tr>

                      <tr>
                        <td class="label-warning"  colspan="2" style="vertical-align: middle;"><label>BANK ADDRESS</label></td>
                        <td><label class="text-info">BRANCH</label></td>
                        <td colspan="3"><input class="form-control" id="bankbranch" name="bankbranch" type="text"></td>
                        <td><label class="text-info">CITY</label></td>
                        <td ><input class="form-control" id="bankcity" name="bankcity" type="text"></td>
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

                  




                  {{-- section 3B --}}
        <div class="table-responsive" class="form-group">       
        <table class="table table-bordered" class="table">
          <tr>
            <td colspan="6" style="text-align:center;" class="label-warning" ><label>SECTION III.B : WITHHOLDING TAX DETAILS</label></td>
          </tr>
          <tr>
            <td colspan="3" style="text-align:center;" class="label-warning" @if($errors->has('natureoflocation')) has-error @endif><label>NATURE OF THE OFFICE</label></td>
            <td colspan="3" style="text-align:center;" class="label-warning" @if($errors->has('locationofoffice')) has-error @endif><label>LOCATION OF OFFICE/S</label></td>
          </tr>
          <tr>
          <td colspan="3"><label><input type="radio" name="natureoflocation" value="permanent">PERMANENT TYPE</label>
          <label><input type="radio" name="natureoflocation" value="temporary">TEMPORARY OFFICE</label>@if($errors->has("natureoflocation"))
                <span class="help-block" style="color: red;" >{{ "nature of office is required" }}</span>
                @endif</td>

          <td colspan="3"><label><input type="radio" name="locationofoffice" value="local">LOCAL OFFICE(QATAR)</label>
          <label><input type="radio" name="locationofoffice" value="foreign">FOREIGN OFFICE</label>@if($errors->has("locationofoffice"))
                <span class="help-block" style="color: red;" >{{ "location of office is required" }}</span>
                @endif</td>
          </tr>

          <tr>
            <td class="label-warning"><label>COMMERCIAL REGISTRATION NO.</label></td>
            <td class="@if($errors->has('commregno')) has-error @endif"><input class="form-control" id="commregno" name="commregno" type="text">@if($errors->has("commregno"))
                <span class="help-block" style="color: red;" >{{ "commercial REG.no of office is required" }}</span>
                @endif</td>

            <td class="label-warning"><label>QATAR CHAMBER OF COMMERCE MEMBERSHIP</label></td>
            <td class="@if($errors->has('qcmembership')) has-error @endif"><input class="form-control" id="qcmembership" name="qcmembership" type="text">@if($errors->has("qcmembership"))
                <span class="help-block" style="color: red;" >{{ "qatar membership of office is required" }}</span>
                @endif</td>

            <td rowspan="2"><label>TAX CARD NUMBER</label></td>
            <td rowspan="2" class="@if($errors->has('taxcardno')) has-error @endif"><input class="form-control" id="taxcardno" name="taxcardno" type="text">@if($errors->has("taxcardno"))
                <span class="help-block" style="color: red;" >{{ "tax card no is required" }}</span>
                @endif</td>
          </tr>

          <tr>
            <td class="label-warning"><label>VALIDITY</label></td>
            <td class="@if($errors->has('membervalidity1')) has-error @endif"><input class="form-control" id="membervalidity1" name="membervalidity1" type="date">@if($errors->has("membervalidity1"))
                <span class="help-block" style="color: red;" >{{ "commercial REG.no expiry date is required" }}</span>
                @endif</td>

            <td class="label-warning"><label>VALIDITY</label></td>
            <td class="@if($errors->has('membervalidity2')) has-error @endif"><input class="form-control" id="membervalidity2" name="membervalidity2" type="date">@if($errors->has("membervalidity2"))
                <span class="help-block" style="color: red;" >{{ "Qatar chamber of commerce membership expiry date is required" }}</span>
                @endif</td>
          </tr>
          <tr>
            <td class="label-warning" ><label>OTHER DETAILS</label></td>
            <td colspan="5"><input class="form-control" id="otherdetails" name="otherdetails" type="text"></td>
          </tr>
        </table>
      </div>
          {{--notes....  --}}
           <div class="table-responsive" class="form-group"> 
        <table class="table table-bordered " class="table">
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
          <label style="text-align:center;width: 100%;" class="text-info" ><label style="font-size:20px;">DECLARATION</label>     
        <table class="table table-bordered " class="table">
          <tr>
            <td class="text-info" style="text-align:center" colspan="6"  @if($errors->has('declaration')) has-error @endif><h6><input id="declaration" name="declaration" type="checkbox" value="agree">WE DECLARE THAT THE ABOVE INFORMATION ARE TRUE AND ACCURATE AND SHALL ACCEPT THAT ALAQARIA HAS THE RIGHT TO VERIFY THEM AS REQUIRED </h6>@if($errors->has("declaration"))
                <span class="help-block" style="color: red;" >{{ "declaration is required" }}</span>
                @endif</td>
          </tr>
        </table>
      </div>


                  <div class="form-group">
                    <button type="submit" disabled="disabled" class="btn btn-success pull-right" id="submitbutton" style="background-color:#4cae4c !important">Submit</button>
                  </div>
                </form>

              </div>
            </div>
            <div class="spacer-30"></div>

          </section>


        </div>
      </div>



      @endsection

      @section('scripts')
      <script type="text/javascript">
      $(document).ready(function(){

        $('.country').change(function(){
          if($(this).val()=="others")
            $('#establishmenttxt').attr("disabled",false);
          else
            $('#establishmenttxt').attr("disabled",true);
        });

        $('.legal').change(function(){
          if($(this).val()=="others")
            $('#classificationtext').attr("disabled",false);
          else
            $('#classificationtext').attr("disabled",true);
        });

        $('.contractpoor').change(function(){
          if($(this).val()=="yes")
            $('#pleasespecifytxt').attr("disabled",false);
          else
            $('#pleasespecifytxt').attr("disabled",true);
        });

        $('#declaration').change(function(){

          if($(this).is(':checked'))
            $('#submitbutton').attr("disabled",false);
          else
            $('#submitbutton').attr("disabled",true);
        });


      });

      
      </script>

      @endsection


      @section('css')
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

      @endsection