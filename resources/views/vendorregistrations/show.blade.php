@extends('layout')
@section('header')
<div class="page-header">
        <h1>Vendorregistrations / Show #{{$vendorregistration->id}}</h1>
        <form action="{{ route('vendorregistrations.destroy', $vendorregistration->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('vendorregistrations.edit', $vendorregistration->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static"></p>
                </div>
                <div class="form-group">
                     <label for="registryno">REGISTRYNO</label>
                     <p class="form-control-static">{{$vendorregistration->registryno}}</p>
                </div>
                    <div class="form-group">
                     <label for="companyregisteredname">COMPANYREGISTEREDNAME</label>
                     <p class="form-control-static">{{$vendorregistration->companyregisteredname}}</p>
                </div>
                    <div class="form-group">
                     <label for="companyparentname">COMPANYPARENTNAME</label>
                     <p class="form-control-static">{{$vendorregistration->companyparentname}}</p>
                </div>
                    <div class="form-group">
                     <label for="establishment">ESTABLISHMENT</label>
                     <p class="form-control-static">{{$vendorregistration->establishment}}</p>
                </div>
                    <div class="form-group">
                     <label for="classification">CLASSIFICATION</label>
                     <p class="form-control-static">{{$vendorregistration->classification}}</p>
                </div>
                    <div class="form-group">
                     <label for="bldname">BLDNAME</label>
                     <p class="form-control-static">{{$vendorregistration->bldname}}</p>
                </div>
                    <div class="form-group">
                     <label for="bldno">BLDNO</label>
                     <p class="form-control-static">{{$vendorregistration->bldno}}</p>
                </div>
                    <div class="form-group">
                     <label for="floorno">FLOORNO</label>
                     <p class="form-control-static">{{$vendorregistration->floorno}}</p>
                </div>
                    <div class="form-group">
                     <label for="streetname">STREETNAME</label>
                     <p class="form-control-static">{{$vendorregistration->streetname}}</p>
                </div>
                    <div class="form-group">
                     <label for="streetno">STREETNO</label>
                     <p class="form-control-static">{{$vendorregistration->streetno}}</p>
                </div>
                    <div class="form-group">
                     <label for="zoneno">ZONENO</label>
                     <p class="form-control-static">{{$vendorregistration->zoneno}}</p>
                </div>
                    <div class="form-group">
                     <label for="city">CITY</label>
                     <p class="form-control-static">{{$vendorregistration->city}}</p>
                </div>
                    <div class="form-group">
                     <label for="country">COUNTRY</label>
                     <p class="form-control-static">{{$vendorregistration->country}}</p>
                </div>
                    <div class="form-group">
                     <label for="postalcode">POSTALCODE</label>
                     <p class="form-control-static">{{$vendorregistration->postalcode}}</p>
                </div>
                    <div class="form-group">
                     <label for="boxno">BOXNO</label>
                     <p class="form-control-static">{{$vendorregistration->boxno}}</p>
                </div>
                    <div class="form-group">
                     <label for="telephoneno">TELEPHONENO</label>
                     <p class="form-control-static">{{$vendorregistration->telephoneno}}</p>
                </div>
                    <div class="form-group">
                     <label for="email">EMAIL</label>
                     <p class="form-control-static">{{$vendorregistration->email}}</p>
                </div>
                    <div class="form-group">
                     <label for="faxno">FAXNO</label>
                     <p class="form-control-static">{{$vendorregistration->faxno}}</p>
                </div>
                    <div class="form-group">
                     <label for="natureofbusiness">NATUREOFBUSINESS</label>
                     <p class="form-control-static">{{$vendorregistration->natureofbusiness}}</p>
                </div>
                    <div class="form-group">
                     <label for="fieldoftrade">FIELDOFTRADE</label>
                     <p class="form-control-static">{{$vendorregistration->fieldoftrade}}</p>
                </div>
                    <div class="form-group">
                     <label for="fieldoftradetext">FIELDOFTRADETEXT</label>
                     <p class="form-control-static">{{$vendorregistration->fieldoftradetext}}</p>
                </div>
                    <div class="form-group">
                     <label for="personname">PERSONNAME</label>
                     <p class="form-control-static">{{$vendorregistration->personname}}</p>
                </div>
                    <div class="form-group">
                     <label for="personjobtitle">PERSONJOBTITLE</label>
                     <p class="form-control-static">{{$vendorregistration->personjobtitle}}</p>
                </div>
                    <div class="form-group">
                     <label for="personemail">PERSONEMAIL</label>
                     <p class="form-control-static">{{$vendorregistration->personemail}}</p>
                </div>
                    <div class="form-group">
                     <label for="personmobileno">PERSONMOBILENO</label>
                     <p class="form-control-static">{{$vendorregistration->personmobileno}}</p>
                </div>
                    <div class="form-group">
                     <label for="persontelephoneno">PERSONTELEPHONENO</label>
                     <p class="form-control-static">{{$vendorregistration->persontelephoneno}}</p>
                </div>
                    <div class="form-group">
                     <label for="personfaxno">PERSONFAXNO</label>
                     <p class="form-control-static">{{$vendorregistration->personfaxno}}</p>
                </div>
                    <div class="form-group">
                     <label for="submitteddocuments">SUBMITTEDDOCUMENTS</label>
                     <p class="form-control-static">{{$vendorregistration->submitteddocuments}}</p>
                </div>
                    <div class="form-group">
                     <label for="noofyears">NOOFYEARS</label>
                     <p class="form-control-static">{{$vendorregistration->noofyears}}</p>
                </div>
                    <div class="form-group">
                     <label for="client1">CLIENT1</label>
                     <p class="form-control-static">{{$vendorregistration->client1}}</p>
                </div>
                    <div class="form-group">
                     <label for="location1">LOCATION1</label>
                     <p class="form-control-static">{{$vendorregistration->location1}}</p>
                </div>
                    <div class="form-group">
                     <label for="duration1">DURATION1</label>
                     <p class="form-control-static">{{$vendorregistration->duration1}}</p>
                </div>
                    <div class="form-group">
                     <label for="client2">CLIENT2</label>
                     <p class="form-control-static">{{$vendorregistration->client2}}</p>
                </div>
                    <div class="form-group">
                     <label for="location2">LOCATION2</label>
                     <p class="form-control-static">{{$vendorregistration->location2}}</p>
                </div>
                    <div class="form-group">
                     <label for="duration2">DURATION2</label>
                     <p class="form-control-static">{{$vendorregistration->duration2}}</p>
                </div>
                    <div class="form-group">
                     <label for="client3">CLIENT3</label>
                     <p class="form-control-static">{{$vendorregistration->client3}}</p>
                </div>
                    <div class="form-group">
                     <label for="location3">LOCATION3</label>
                     <p class="form-control-static">{{$vendorregistration->location3}}</p>
                </div>
                    <div class="form-group">
                     <label for="duration3">DURATION3</label>
                     <p class="form-control-static">{{$vendorregistration->duration3}}</p>
                </div>
                    <div class="form-group">
                     <label for="pleasespecify">PLEASESPECIFY</label>
                     <p class="form-control-static">{{$vendorregistration->pleasespecify}}</p>
                </div>
                    <div class="form-group">
                     <label for="previousbusinessname">PREVIOUSBUSINESSNAME</label>
                     <p class="form-control-static">{{$vendorregistration->previousbusinessname}}</p>
                </div>
                    <div class="form-group">
                     <label for="reasonforchange">REASONFORCHANGE</label>
                     <p class="form-control-static">{{$vendorregistration->reasonforchange}}</p>
                </div>
                    <div class="form-group">
                     <label for="certifications">CERTIFICATIONS</label>
                     <p class="form-control-static">{{$vendorregistration->certifications}}</p>
                </div>
                    <div class="form-group">
                     <label for="certificationbody1">CERTIFICATIONBODY1</label>
                     <p class="form-control-static">{{$vendorregistration->certificationbody1}}</p>
                </div>
                    <div class="form-group">
                     <label for="validity1">VALIDITY1</label>
                     <p class="form-control-static">{{$vendorregistration->validity1}}</p>
                </div>
                    <div class="form-group">
                     <label for="certificationbody2">CERTIFICATIONBODY2</label>
                     <p class="form-control-static">{{$vendorregistration->certificationbody2}}</p>
                </div>
                    <div class="form-group">
                     <label for="validity2">VALIDITY2</label>
                     <p class="form-control-static">{{$vendorregistration->validity2}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankname">BANKNAME</label>
                     <p class="form-control-static">{{$vendorregistration->bankname}}</p>
                </div>
                    <div class="form-group">
                     <label for="accountname">ACCOUNTNAME</label>
                     <p class="form-control-static">{{$vendorregistration->accountname}}</p>
                </div>
                    <div class="form-group">
                     <label for="accountno">ACCOUNTNO</label>
                     <p class="form-control-static">{{$vendorregistration->accountno}}</p>
                </div>
                    <div class="form-group">
                     <label for="swiftcode">SWIFTCODE</label>
                     <p class="form-control-static">{{$vendorregistration->swiftcode}}</p>
                </div>
                    <div class="form-group">
                     <label for="currency">CURRENCY</label>
                     <p class="form-control-static">{{$vendorregistration->currency}}</p>
                </div>
                    <div class="form-group">
                     <label for="ibanno">IBANNO</label>
                     <p class="form-control-static">{{$vendorregistration->ibanno}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankbldgname">BANKBLDGNAME</label>
                     <p class="form-control-static">{{$vendorregistration->bankbldgname}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankbldgno">BANKBLDGNO</label>
                     <p class="form-control-static">{{$vendorregistration->bankbldgno}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankfloorno">BANKFLOORNO</label>
                     <p class="form-control-static">{{$vendorregistration->bankfloorno}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankstreetname">BANKSTREETNAME</label>
                     <p class="form-control-static">{{$vendorregistration->bankstreetname}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankstreetno">BANKSTREETNO</label>
                     <p class="form-control-static">{{$vendorregistration->bankstreetno}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankzoneno">BANKZONENO</label>
                     <p class="form-control-static">{{$vendorregistration->bankzoneno}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankcity">BANKCITY</label>
                     <p class="form-control-static">{{$vendorregistration->bankcity}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankcountry">BANKCOUNTRY</label>
                     <p class="form-control-static">{{$vendorregistration->bankcountry}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankpostalcode">BANKPOSTALCODE</label>
                     <p class="form-control-static">{{$vendorregistration->bankpostalcode}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankpoboxno">BANKPOBOXNO</label>
                     <p class="form-control-static">{{$vendorregistration->bankpoboxno}}</p>
                </div>
                    <div class="form-group">
                     <label for="banktelephoneno1">BANKTELEPHONENO1</label>
                     <p class="form-control-static">{{$vendorregistration->banktelephoneno1}}</p>
                </div>
                    <div class="form-group">
                     <label for="financecontactperson">FINANCECONTACTPERSON</label>
                     <p class="form-control-static">{{$vendorregistration->financecontactperson}}</p>
                </div>
                    <div class="form-group">
                     <label for="banktelephoneno2">BANKTELEPHONENO2</label>
                     <p class="form-control-static">{{$vendorregistration->banktelephoneno2}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankemailaddress">BANKEMAILADDRESS</label>
                     <p class="form-control-static">{{$vendorregistration->bankemailaddress}}</p>
                </div>
                    <div class="form-group">
                     <label for="bankfaxno">BANKFAXNO</label>
                     <p class="form-control-static">{{$vendorregistration->bankfaxno}}</p>
                </div>
                    <div class="form-group">
                     <label for="natureofbusiness">NATUREOFBUSINESS</label>
                     <p class="form-control-static">{{$vendorregistration->natureofbusiness}}</p>
                </div>
                    <div class="form-group">
                     <label for="locationofoffice">LOCATIONOFOFFICE</label>
                     <p class="form-control-static">{{$vendorregistration->locationofoffice}}</p>
                </div>
                    <div class="form-group">
                     <label for="commregno">COMMREGNO</label>
                     <p class="form-control-static">{{$vendorregistration->commregno}}</p>
                </div>
                    <div class="form-group">
                     <label for="qcmembership">QCMEMBERSHIP</label>
                     <p class="form-control-static">{{$vendorregistration->qcmembership}}</p>
                </div>
                    <div class="form-group">
                     <label for="taxcardno">TAXCARDNO</label>
                     <p class="form-control-static">{{$vendorregistration->taxcardno}}</p>
                </div>
                    <div class="form-group">
                     <label for="validity1">VALIDITY1</label>
                     <p class="form-control-static">{{$vendorregistration->validity1}}</p>
                </div>
                    <div class="form-group">
                     <label for="validity2">VALIDITY2</label>
                     <p class="form-control-static">{{$vendorregistration->validity2}}</p>
                </div>
                    <div class="form-group">
                     <label for="otherdetails">OTHERDETAILS</label>
                     <p class="form-control-static">{{$vendorregistration->otherdetails}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('vendorregistrations.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection