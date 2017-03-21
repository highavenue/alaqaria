@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Vendorregistrations / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('vendorregistrations.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('registryno')) has-error @endif">
                       <label for="registryno-field">Registryno</label>
                    <input type="text" id="registryno-field" name="registryno" class="form-control" value="{{ old("registryno") }}"/>
                       @if($errors->has("registryno"))
                        <span class="help-block">{{ $errors->first("registryno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('companyregisteredname')) has-error @endif">
                       <label for="companyregisteredname-field">Companyregisteredname</label>
                    <input type="text" id="companyregisteredname-field" name="companyregisteredname" class="form-control" value="{{ old("companyregisteredname") }}"/>
                       @if($errors->has("companyregisteredname"))
                        <span class="help-block">{{ $errors->first("companyregisteredname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('companyparentname')) has-error @endif">
                       <label for="companyparentname-field">Companyparentname</label>
                    <input type="text" id="companyparentname-field" name="companyparentname" class="form-control" value="{{ old("companyparentname") }}"/>
                       @if($errors->has("companyparentname"))
                        <span class="help-block">{{ $errors->first("companyparentname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('establishment')) has-error @endif">
                       <label for="establishment-field">Establishment</label>
                    <input type="text" id="establishment-field" name="establishment" class="form-control" value="{{ old("establishment") }}"/>
                       @if($errors->has("establishment"))
                        <span class="help-block">{{ $errors->first("establishment") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('classification')) has-error @endif">
                       <label for="classification-field">Classification</label>
                    <input type="text" id="classification-field" name="classification" class="form-control" value="{{ old("classification") }}"/>
                       @if($errors->has("classification"))
                        <span class="help-block">{{ $errors->first("classification") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bldname')) has-error @endif">
                       <label for="bldname-field">Bldname</label>
                    <input type="text" id="bldname-field" name="bldname" class="form-control" value="{{ old("bldname") }}"/>
                       @if($errors->has("bldname"))
                        <span class="help-block">{{ $errors->first("bldname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bldno')) has-error @endif">
                       <label for="bldno-field">Bldno</label>
                    <input type="text" id="bldno-field" name="bldno" class="form-control" value="{{ old("bldno") }}"/>
                       @if($errors->has("bldno"))
                        <span class="help-block">{{ $errors->first("bldno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('floorno')) has-error @endif">
                       <label for="floorno-field">Floorno</label>
                    <input type="text" id="floorno-field" name="floorno" class="form-control" value="{{ old("floorno") }}"/>
                       @if($errors->has("floorno"))
                        <span class="help-block">{{ $errors->first("floorno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('streetname')) has-error @endif">
                       <label for="streetname-field">Streetname</label>
                    <input type="text" id="streetname-field" name="streetname" class="form-control" value="{{ old("streetname") }}"/>
                       @if($errors->has("streetname"))
                        <span class="help-block">{{ $errors->first("streetname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('streetno')) has-error @endif">
                       <label for="streetno-field">Streetno</label>
                    <input type="text" id="streetno-field" name="streetno" class="form-control" value="{{ old("streetno") }}"/>
                       @if($errors->has("streetno"))
                        <span class="help-block">{{ $errors->first("streetno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('zoneno')) has-error @endif">
                       <label for="zoneno-field">Zoneno</label>
                    <input type="text" id="zoneno-field" name="zoneno" class="form-control" value="{{ old("zoneno") }}"/>
                       @if($errors->has("zoneno"))
                        <span class="help-block">{{ $errors->first("zoneno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('city')) has-error @endif">
                       <label for="city-field">City</label>
                    <input type="text" id="city-field" name="city" class="form-control" value="{{ old("city") }}"/>
                       @if($errors->has("city"))
                        <span class="help-block">{{ $errors->first("city") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('country')) has-error @endif">
                       <label for="country-field">Country</label>
                    <input type="text" id="country-field" name="country" class="form-control" value="{{ old("country") }}"/>
                       @if($errors->has("country"))
                        <span class="help-block">{{ $errors->first("country") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('postalcode')) has-error @endif">
                       <label for="postalcode-field">Postalcode</label>
                    <input type="text" id="postalcode-field" name="postalcode" class="form-control" value="{{ old("postalcode") }}"/>
                       @if($errors->has("postalcode"))
                        <span class="help-block">{{ $errors->first("postalcode") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('boxno')) has-error @endif">
                       <label for="boxno-field">Boxno</label>
                    <input type="text" id="boxno-field" name="boxno" class="form-control" value="{{ old("boxno") }}"/>
                       @if($errors->has("boxno"))
                        <span class="help-block">{{ $errors->first("boxno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('telephoneno')) has-error @endif">
                       <label for="telephoneno-field">Telephoneno</label>
                    <input type="text" id="telephoneno-field" name="telephoneno" class="form-control" value="{{ old("telephoneno") }}"/>
                       @if($errors->has("telephoneno"))
                        <span class="help-block">{{ $errors->first("telephoneno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('email')) has-error @endif">
                       <label for="email-field">Email</label>
                    <input type="text" id="email-field" name="email" class="form-control" value="{{ old("email") }}"/>
                       @if($errors->has("email"))
                        <span class="help-block">{{ $errors->first("email") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('faxno')) has-error @endif">
                       <label for="faxno-field">Faxno</label>
                    <input type="text" id="faxno-field" name="faxno" class="form-control" value="{{ old("faxno") }}"/>
                       @if($errors->has("faxno"))
                        <span class="help-block">{{ $errors->first("faxno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('natureofbusiness')) has-error @endif">
                       <label for="natureofbusiness-field">Natureofbusiness</label>
                    <input type="text" id="natureofbusiness-field" name="natureofbusiness" class="form-control" value="{{ old("natureofbusiness") }}"/>
                       @if($errors->has("natureofbusiness"))
                        <span class="help-block">{{ $errors->first("natureofbusiness") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('fieldoftrade')) has-error @endif">
                       <label for="fieldoftrade-field">Fieldoftrade</label>
                    <input type="text" id="fieldoftrade-field" name="fieldoftrade" class="form-control" value="{{ old("fieldoftrade") }}"/>
                       @if($errors->has("fieldoftrade"))
                        <span class="help-block">{{ $errors->first("fieldoftrade") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('fieldoftradetext')) has-error @endif">
                       <label for="fieldoftradetext-field">Fieldoftradetext</label>
                    <input type="text" id="fieldoftradetext-field" name="fieldoftradetext" class="form-control" value="{{ old("fieldoftradetext") }}"/>
                       @if($errors->has("fieldoftradetext"))
                        <span class="help-block">{{ $errors->first("fieldoftradetext") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('personname')) has-error @endif">
                       <label for="personname-field">Personname</label>
                    <input type="text" id="personname-field" name="personname" class="form-control" value="{{ old("personname") }}"/>
                       @if($errors->has("personname"))
                        <span class="help-block">{{ $errors->first("personname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('personjobtitle')) has-error @endif">
                       <label for="personjobtitle-field">Personjobtitle</label>
                    <input type="text" id="personjobtitle-field" name="personjobtitle" class="form-control" value="{{ old("personjobtitle") }}"/>
                       @if($errors->has("personjobtitle"))
                        <span class="help-block">{{ $errors->first("personjobtitle") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('personemail')) has-error @endif">
                       <label for="personemail-field">Personemail</label>
                    <input type="text" id="personemail-field" name="personemail" class="form-control" value="{{ old("personemail") }}"/>
                       @if($errors->has("personemail"))
                        <span class="help-block">{{ $errors->first("personemail") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('personmobileno')) has-error @endif">
                       <label for="personmobileno-field">Personmobileno</label>
                    <input type="text" id="personmobileno-field" name="personmobileno" class="form-control" value="{{ old("personmobileno") }}"/>
                       @if($errors->has("personmobileno"))
                        <span class="help-block">{{ $errors->first("personmobileno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('persontelephoneno')) has-error @endif">
                       <label for="persontelephoneno-field">Persontelephoneno</label>
                    <input type="text" id="persontelephoneno-field" name="persontelephoneno" class="form-control" value="{{ old("persontelephoneno") }}"/>
                       @if($errors->has("persontelephoneno"))
                        <span class="help-block">{{ $errors->first("persontelephoneno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('personfaxno')) has-error @endif">
                       <label for="personfaxno-field">Personfaxno</label>
                    <input type="text" id="personfaxno-field" name="personfaxno" class="form-control" value="{{ old("personfaxno") }}"/>
                       @if($errors->has("personfaxno"))
                        <span class="help-block">{{ $errors->first("personfaxno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('submitteddocuments')) has-error @endif">
                       <label for="submitteddocuments-field">Submitteddocuments</label>
                    <textarea class="form-control" id="submitteddocuments-field" rows="3" name="submitteddocuments">{{ old("submitteddocuments") }}</textarea>
                       @if($errors->has("submitteddocuments"))
                        <span class="help-block">{{ $errors->first("submitteddocuments") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('noofyears')) has-error @endif">
                       <label for="noofyears-field">Noofyears</label>
                    <input type="text" id="noofyears-field" name="noofyears" class="form-control" value="{{ old("noofyears") }}"/>
                       @if($errors->has("noofyears"))
                        <span class="help-block">{{ $errors->first("noofyears") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('client1')) has-error @endif">
                       <label for="client1-field">Client1</label>
                    <input type="text" id="client1-field" name="client1" class="form-control" value="{{ old("client1") }}"/>
                       @if($errors->has("client1"))
                        <span class="help-block">{{ $errors->first("client1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('location1')) has-error @endif">
                       <label for="location1-field">Location1</label>
                    <input type="text" id="location1-field" name="location1" class="form-control" value="{{ old("location1") }}"/>
                       @if($errors->has("location1"))
                        <span class="help-block">{{ $errors->first("location1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('duration1')) has-error @endif">
                       <label for="duration1-field">Duration1</label>
                    <input type="text" id="duration1-field" name="duration1" class="form-control" value="{{ old("duration1") }}"/>
                       @if($errors->has("duration1"))
                        <span class="help-block">{{ $errors->first("duration1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('client2')) has-error @endif">
                       <label for="client2-field">Client2</label>
                    <input type="text" id="client2-field" name="client2" class="form-control" value="{{ old("client2") }}"/>
                       @if($errors->has("client2"))
                        <span class="help-block">{{ $errors->first("client2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('location2')) has-error @endif">
                       <label for="location2-field">Location2</label>
                    <input type="text" id="location2-field" name="location2" class="form-control" value="{{ old("location2") }}"/>
                       @if($errors->has("location2"))
                        <span class="help-block">{{ $errors->first("location2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('duration2')) has-error @endif">
                       <label for="duration2-field">Duration2</label>
                    <input type="text" id="duration2-field" name="duration2" class="form-control" value="{{ old("duration2") }}"/>
                       @if($errors->has("duration2"))
                        <span class="help-block">{{ $errors->first("duration2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('client3')) has-error @endif">
                       <label for="client3-field">Client3</label>
                    <input type="text" id="client3-field" name="client3" class="form-control" value="{{ old("client3") }}"/>
                       @if($errors->has("client3"))
                        <span class="help-block">{{ $errors->first("client3") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('location3')) has-error @endif">
                       <label for="location3-field">Location3</label>
                    <input type="text" id="location3-field" name="location3" class="form-control" value="{{ old("location3") }}"/>
                       @if($errors->has("location3"))
                        <span class="help-block">{{ $errors->first("location3") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('duration3')) has-error @endif">
                       <label for="duration3-field">Duration3</label>
                    <input type="text" id="duration3-field" name="duration3" class="form-control" value="{{ old("duration3") }}"/>
                       @if($errors->has("duration3"))
                        <span class="help-block">{{ $errors->first("duration3") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('pleasespecify')) has-error @endif">
                       <label for="pleasespecify-field">Pleasespecify</label>
                    <input type="text" id="pleasespecify-field" name="pleasespecify" class="form-control" value="{{ old("pleasespecify") }}"/>
                       @if($errors->has("pleasespecify"))
                        <span class="help-block">{{ $errors->first("pleasespecify") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('previousbusinessname')) has-error @endif">
                       <label for="previousbusinessname-field">Previousbusinessname</label>
                    <input type="text" id="previousbusinessname-field" name="previousbusinessname" class="form-control" value="{{ old("previousbusinessname") }}"/>
                       @if($errors->has("previousbusinessname"))
                        <span class="help-block">{{ $errors->first("previousbusinessname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('reasonforchange')) has-error @endif">
                       <label for="reasonforchange-field">Reasonforchange</label>
                    <input type="text" id="reasonforchange-field" name="reasonforchange" class="form-control" value="{{ old("reasonforchange") }}"/>
                       @if($errors->has("reasonforchange"))
                        <span class="help-block">{{ $errors->first("reasonforchange") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('certifications')) has-error @endif">
                       <label for="certifications-field">Certifications</label>
                    <input type="text" id="certifications-field" name="certifications" class="form-control" value="{{ old("certifications") }}"/>
                       @if($errors->has("certifications"))
                        <span class="help-block">{{ $errors->first("certifications") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('certificationbody1')) has-error @endif">
                       <label for="certificationbody1-field">Certificationbody1</label>
                    <input type="text" id="certificationbody1-field" name="certificationbody1" class="form-control" value="{{ old("certificationbody1") }}"/>
                       @if($errors->has("certificationbody1"))
                        <span class="help-block">{{ $errors->first("certificationbody1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('validity1')) has-error @endif">
                       <label for="validity1-field">Validity1</label>
                    <input type="text" id="validity1-field" name="validity1" class="form-control" value="{{ old("validity1") }}"/>
                       @if($errors->has("validity1"))
                        <span class="help-block">{{ $errors->first("validity1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('certificationbody2')) has-error @endif">
                       <label for="certificationbody2-field">Certificationbody2</label>
                    <input type="text" id="certificationbody2-field" name="certificationbody2" class="form-control" value="{{ old("certificationbody2") }}"/>
                       @if($errors->has("certificationbody2"))
                        <span class="help-block">{{ $errors->first("certificationbody2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('validity2')) has-error @endif">
                       <label for="validity2-field">Validity2</label>
                    <input type="text" id="validity2-field" name="validity2" class="form-control" value="{{ old("validity2") }}"/>
                       @if($errors->has("validity2"))
                        <span class="help-block">{{ $errors->first("validity2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankname')) has-error @endif">
                       <label for="bankname-field">Bankname</label>
                    <input type="text" id="bankname-field" name="bankname" class="form-control" value="{{ old("bankname") }}"/>
                       @if($errors->has("bankname"))
                        <span class="help-block">{{ $errors->first("bankname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('accountname')) has-error @endif">
                       <label for="accountname-field">Accountname</label>
                    <input type="text" id="accountname-field" name="accountname" class="form-control" value="{{ old("accountname") }}"/>
                       @if($errors->has("accountname"))
                        <span class="help-block">{{ $errors->first("accountname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('accountno')) has-error @endif">
                       <label for="accountno-field">Accountno</label>
                    <input type="text" id="accountno-field" name="accountno" class="form-control" value="{{ old("accountno") }}"/>
                       @if($errors->has("accountno"))
                        <span class="help-block">{{ $errors->first("accountno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('swiftcode')) has-error @endif">
                       <label for="swiftcode-field">Swiftcode</label>
                    <input type="text" id="swiftcode-field" name="swiftcode" class="form-control" value="{{ old("swiftcode") }}"/>
                       @if($errors->has("swiftcode"))
                        <span class="help-block">{{ $errors->first("swiftcode") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('currency')) has-error @endif">
                       <label for="currency-field">Currency</label>
                    <input type="text" id="currency-field" name="currency" class="form-control" value="{{ old("currency") }}"/>
                       @if($errors->has("currency"))
                        <span class="help-block">{{ $errors->first("currency") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('ibanno')) has-error @endif">
                       <label for="ibanno-field">Ibanno</label>
                    <input type="text" id="ibanno-field" name="ibanno" class="form-control" value="{{ old("ibanno") }}"/>
                       @if($errors->has("ibanno"))
                        <span class="help-block">{{ $errors->first("ibanno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankbldgname')) has-error @endif">
                       <label for="bankbldgname-field">Bankbldgname</label>
                    <input type="text" id="bankbldgname-field" name="bankbldgname" class="form-control" value="{{ old("bankbldgname") }}"/>
                       @if($errors->has("bankbldgname"))
                        <span class="help-block">{{ $errors->first("bankbldgname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankbldgno')) has-error @endif">
                       <label for="bankbldgno-field">Bankbldgno</label>
                    <input type="text" id="bankbldgno-field" name="bankbldgno" class="form-control" value="{{ old("bankbldgno") }}"/>
                       @if($errors->has("bankbldgno"))
                        <span class="help-block">{{ $errors->first("bankbldgno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankfloorno')) has-error @endif">
                       <label for="bankfloorno-field">Bankfloorno</label>
                    <input type="text" id="bankfloorno-field" name="bankfloorno" class="form-control" value="{{ old("bankfloorno") }}"/>
                       @if($errors->has("bankfloorno"))
                        <span class="help-block">{{ $errors->first("bankfloorno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankstreetname')) has-error @endif">
                       <label for="bankstreetname-field">Bankstreetname</label>
                    <input type="text" id="bankstreetname-field" name="bankstreetname" class="form-control" value="{{ old("bankstreetname") }}"/>
                       @if($errors->has("bankstreetname"))
                        <span class="help-block">{{ $errors->first("bankstreetname") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankstreetno')) has-error @endif">
                       <label for="bankstreetno-field">Bankstreetno</label>
                    <input type="text" id="bankstreetno-field" name="bankstreetno" class="form-control" value="{{ old("bankstreetno") }}"/>
                       @if($errors->has("bankstreetno"))
                        <span class="help-block">{{ $errors->first("bankstreetno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankzoneno')) has-error @endif">
                       <label for="bankzoneno-field">Bankzoneno</label>
                    <input type="text" id="bankzoneno-field" name="bankzoneno" class="form-control" value="{{ old("bankzoneno") }}"/>
                       @if($errors->has("bankzoneno"))
                        <span class="help-block">{{ $errors->first("bankzoneno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankcity')) has-error @endif">
                       <label for="bankcity-field">Bankcity</label>
                    <input type="text" id="bankcity-field" name="bankcity" class="form-control" value="{{ old("bankcity") }}"/>
                       @if($errors->has("bankcity"))
                        <span class="help-block">{{ $errors->first("bankcity") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankcountry')) has-error @endif">
                       <label for="bankcountry-field">Bankcountry</label>
                    <input type="text" id="bankcountry-field" name="bankcountry" class="form-control" value="{{ old("bankcountry") }}"/>
                       @if($errors->has("bankcountry"))
                        <span class="help-block">{{ $errors->first("bankcountry") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankpostalcode')) has-error @endif">
                       <label for="bankpostalcode-field">Bankpostalcode</label>
                    <input type="text" id="bankpostalcode-field" name="bankpostalcode" class="form-control" value="{{ old("bankpostalcode") }}"/>
                       @if($errors->has("bankpostalcode"))
                        <span class="help-block">{{ $errors->first("bankpostalcode") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankpoboxno')) has-error @endif">
                       <label for="bankpoboxno-field">Bankpoboxno</label>
                    <input type="text" id="bankpoboxno-field" name="bankpoboxno" class="form-control" value="{{ old("bankpoboxno") }}"/>
                       @if($errors->has("bankpoboxno"))
                        <span class="help-block">{{ $errors->first("bankpoboxno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('banktelephoneno1')) has-error @endif">
                       <label for="banktelephoneno1-field">Banktelephoneno1</label>
                    <input type="text" id="banktelephoneno1-field" name="banktelephoneno1" class="form-control" value="{{ old("banktelephoneno1") }}"/>
                       @if($errors->has("banktelephoneno1"))
                        <span class="help-block">{{ $errors->first("banktelephoneno1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('financecontactperson')) has-error @endif">
                       <label for="financecontactperson-field">Financecontactperson</label>
                    <input type="text" id="financecontactperson-field" name="financecontactperson" class="form-control" value="{{ old("financecontactperson") }}"/>
                       @if($errors->has("financecontactperson"))
                        <span class="help-block">{{ $errors->first("financecontactperson") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('banktelephoneno2')) has-error @endif">
                       <label for="banktelephoneno2-field">Banktelephoneno2</label>
                    <input type="text" id="banktelephoneno2-field" name="banktelephoneno2" class="form-control" value="{{ old("banktelephoneno2") }}"/>
                       @if($errors->has("banktelephoneno2"))
                        <span class="help-block">{{ $errors->first("banktelephoneno2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankemailaddress')) has-error @endif">
                       <label for="bankemailaddress-field">Bankemailaddress</label>
                    <input type="text" id="bankemailaddress-field" name="bankemailaddress" class="form-control" value="{{ old("bankemailaddress") }}"/>
                       @if($errors->has("bankemailaddress"))
                        <span class="help-block">{{ $errors->first("bankemailaddress") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bankfaxno')) has-error @endif">
                       <label for="bankfaxno-field">Bankfaxno</label>
                    <input type="text" id="bankfaxno-field" name="bankfaxno" class="form-control" value="{{ old("bankfaxno") }}"/>
                       @if($errors->has("bankfaxno"))
                        <span class="help-block">{{ $errors->first("bankfaxno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('natureofbusiness')) has-error @endif">
                       <label for="natureofbusiness-field">Natureofbusiness</label>
                    <input type="text" id="natureofbusiness-field" name="natureofbusiness" class="form-control" value="{{ old("natureofbusiness") }}"/>
                       @if($errors->has("natureofbusiness"))
                        <span class="help-block">{{ $errors->first("natureofbusiness") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('locationofoffice')) has-error @endif">
                       <label for="locationofoffice-field">Locationofoffice</label>
                    <input type="text" id="locationofoffice-field" name="locationofoffice" class="form-control" value="{{ old("locationofoffice") }}"/>
                       @if($errors->has("locationofoffice"))
                        <span class="help-block">{{ $errors->first("locationofoffice") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('commregno')) has-error @endif">
                       <label for="commregno-field">Commregno</label>
                    <input type="text" id="commregno-field" name="commregno" class="form-control" value="{{ old("commregno") }}"/>
                       @if($errors->has("commregno"))
                        <span class="help-block">{{ $errors->first("commregno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('qcmembership')) has-error @endif">
                       <label for="qcmembership-field">Qcmembership</label>
                    <input type="text" id="qcmembership-field" name="qcmembership" class="form-control" value="{{ old("qcmembership") }}"/>
                       @if($errors->has("qcmembership"))
                        <span class="help-block">{{ $errors->first("qcmembership") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('taxcardno')) has-error @endif">
                       <label for="taxcardno-field">Taxcardno</label>
                    <input type="text" id="taxcardno-field" name="taxcardno" class="form-control" value="{{ old("taxcardno") }}"/>
                       @if($errors->has("taxcardno"))
                        <span class="help-block">{{ $errors->first("taxcardno") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('validity1')) has-error @endif">
                       <label for="validity1-field">Validity1</label>
                    <input type="text" id="validity1-field" name="validity1" class="form-control" value="{{ old("validity1") }}"/>
                       @if($errors->has("validity1"))
                        <span class="help-block">{{ $errors->first("validity1") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('validity2')) has-error @endif">
                       <label for="validity2-field">Validity2</label>
                    <input type="text" id="validity2-field" name="validity2" class="form-control" value="{{ old("validity2") }}"/>
                       @if($errors->has("validity2"))
                        <span class="help-block">{{ $errors->first("validity2") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('otherdetails')) has-error @endif">
                       <label for="otherdetails-field">Otherdetails</label>
                    <input type="text" id="otherdetails-field" name="otherdetails" class="form-control" value="{{ old("otherdetails") }}"/>
                       @if($errors->has("otherdetails"))
                        <span class="help-block">{{ $errors->first("otherdetails") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('vendorregistrations.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
