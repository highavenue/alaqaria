@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Vendorregistrations
            <a class="btn btn-success pull-right" href="{{ route('vendorregistrations.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($vendorregistrations->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>REGISTRYNO</th>
                            <th>DATE</th>
                        <th>COMPANYREGISTEREDNAME</th>
                        <th>COMPANYPARENTNAME</th>
                        <th>ESTABLISHMENT</th>
                        <th>CLASSIFICATION</th>
                        <th>BLDNAME</th>
                        <th>BLDNO</th>
                        <th>FLOORNO</th>
                        <th>STREETNAME</th>
                        <th>STREETNO</th>
                        <th>ZONENO</th>
                        <th>CITY</th>
                        <th>COUNTRY</th>
                        <th>POSTALCODE</th>
                        <th>BOXNO</th>
                        <th>TELEPHONENO</th>
                        <th>EMAIL</th>
                        <th>FAXNO</th>
                        <th>NATUREOFBUSINESS</th>
                        <th>FIELDOFTRADE</th>
                        <th>FIELDOFTRADETEXT</th>
                        <th>PERSONNAME</th>
                        <th>PERSONJOBTITLE</th>
                        <th>PERSONEMAIL</th>
                        <th>PERSONMOBILENO</th>
                        <th>PERSONTELEPHONENO</th>
                        <th>PERSONFAXNO</th>
                        <th>SUBMITTEDDOCUMENTS</th>
                        <th>NOOFYEARS</th>
                        <th>CLIENT1</th>
                        <th>LOCATION1</th>
                        <th>DURATION1</th>
                        <th>CLIENT2</th>
                        <th>LOCATION2</th>
                        <th>DURATION2</th>
                        <th>CLIENT3</th>
                        <th>LOCATION3</th>
                        <th>DURATION3</th>
                        <th></th>
                        <th>PLEASESPECIFY</th>
                        <th>PREVIOUSBUSINESSNAME</th>
                        <th>REASONFORCHANGE</th>
                        <th>CERTIFICATIONS</th>
                        <th>CERTIFICATIONBODY1</th>
                        <th>VALIDITY1</th>
                        <th>CERTIFICATIONBODY2</th>
                        <th>VALIDITY2</th>
                        <th>BANKNAME</th>
                        <th>ACCOUNTNAME</th>
                        <th>ACCOUNTNO</th>
                        <th>SWIFTCODE</th>
                        <th>CURRENCY</th>
                        <th>IBANNO</th>
                        <th>BANKBLDGNAME</th>
                        <th>BANKBLDGNO</th>
                        <th>BANKFLOORNO</th>
                        <th>BANKSTREETNAME</th>
                        <th>BANKSTREETNO</th>
                        <th>BANKZONENO</th>
                        <th>BANKCITY</th>
                        <th>BANKCOUNTRY</th>
                        <th>BANKPOSTALCODE</th>
                        <th>BANKPOBOXNO</th>
                        <th>BANKTELEPHONENO1</th>
                        <th>FINANCECONTACTPERSON</th>
                        <th>BANKTELEPHONENO2</th>
                        <th>BANKEMAILADDRESS</th>
                        <th>BANKFAXNO</th>
                        <th>NATUREOFBUSINESS</th>
                        <th>LOCATIONOFOFFICE</th>
                        <th>COMMREGNO</th>
                        <th>QCMEMBERSHIP</th>
                        <th>TAXCARDNO</th>
                        <th>VALIDITY1</th>
                        <th>VALIDITY2</th>
                        <th>OTHERDETAILS</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($vendorregistrations as $vendorregistration)
                            <tr>
                                <td>{{$vendorregistration->id}}</td>
                                <td>{{$vendorregistration->registryno}}</td>
                                <td>{{$vendorregistration->registrydate}}</td>
                    <td>{{$vendorregistration->companyregisteredname}}</td>
                    <td>{{$vendorregistration->companyparentname}}</td>
                    <td>{{$vendorregistration->establishment}}</td>
                    <td>{{$vendorregistration->classification}}</td>
                    <td>{{$vendorregistration->bldname}}</td>
                    <td>{{$vendorregistration->bldno}}</td>
                    <td>{{$vendorregistration->floorno}}</td>
                    <td>{{$vendorregistration->streetname}}</td>
                    <td>{{$vendorregistration->streetno}}</td>
                    <td>{{$vendorregistration->zoneno}}</td>
                    <td>{{$vendorregistration->city}}</td>
                    <td>{{$vendorregistration->country}}</td>
                    <td>{{$vendorregistration->postalcode}}</td>
                    <td>{{$vendorregistration->boxno}}</td>
                    <td>{{$vendorregistration->telephoneno}}</td>
                    <td>{{$vendorregistration->email}}</td>
                    <td>{{$vendorregistration->faxno}}</td>
                    <td>{{$vendorregistration->natureofbusiness}}</td>
                    <td>{{$vendorregistration->fieldoftrade}}</td>
                    <td>{{$vendorregistration->fieldoftradetext}}</td>
                    <td>{{$vendorregistration->personname}}</td>
                    <td>{{$vendorregistration->personjobtitle}}</td>
                    <td>{{$vendorregistration->personemail}}</td>
                    <td>{{$vendorregistration->personmobileno}}</td>
                    <td>{{$vendorregistration->persontelephoneno}}</td>
                    <td>{{$vendorregistration->personfaxno}}</td>
                    <td>{{$vendorregistration->submitteddocuments}}</td>
                    <td>{{$vendorregistration->noofyears}}</td>
                    <td>{{$vendorregistration->client1}}</td>
                    <td>{{$vendorregistration->location1}}</td>
                    <td>{{$vendorregistration->duration1}}</td>
                    <td>{{$vendorregistration->client2}}</td>
                    <td>{{$vendorregistration->location2}}</td>
                    <td>{{$vendorregistration->duration2}}</td>
                    <td>{{$vendorregistration->client3}}</td>
                    <td>{{$vendorregistration->location3}}</td>
                    <td>{{$vendorregistration->duration3}}</td>
                    <td>{{$vendorregistration->poorexp}}</td>
                    <td>{{$vendorregistration->pleasespecify}}</td>
                    <td>{{$vendorregistration->previousbusinessname}}</td>
                    <td>{{$vendorregistration->reasonforchange}}</td>
                    <td>{{$vendorregistration->certifications}}</td>
                    <td>{{$vendorregistration->certificationbody1}}</td>
                    <td>{{$vendorregistration->validity1}}</td>
                    <td>{{$vendorregistration->certificationbody2}}</td>
                    <td>{{$vendorregistration->validity2}}</td>
                    <td>{{$vendorregistration->bankname}}</td>
                    <td>{{$vendorregistration->accountname}}</td>
                    <td>{{$vendorregistration->accountno}}</td>
                    <td>{{$vendorregistration->swiftcode}}</td>
                    <td>{{$vendorregistration->currency}}</td>
                    <td>{{$vendorregistration->ibanno}}</td>
                    <td>{{$vendorregistration->bankbldgname}}</td>
                    <td>{{$vendorregistration->bankbldgno}}</td>
                    <td>{{$vendorregistration->bankfloorno}}</td>
                    <td>{{$vendorregistration->bankstreetname}}</td>
                    <td>{{$vendorregistration->bankstreetno}}</td>
                    <td>{{$vendorregistration->bankzoneno}}</td>
                    <td>{{$vendorregistration->bankcity}}</td>
                    <td>{{$vendorregistration->bankcountry}}</td>
                    <td>{{$vendorregistration->bankpostalcode}}</td>
                    <td>{{$vendorregistration->bankpoboxno}}</td>
                    <td>{{$vendorregistration->banktelephoneno1}}</td>
                    <td>{{$vendorregistration->financecontactperson}}</td>
                    <td>{{$vendorregistration->banktelephoneno2}}</td>
                    <td>{{$vendorregistration->bankemailaddress}}</td>
                    <td>{{$vendorregistration->bankfaxno}}</td>
                    <td>{{$vendorregistration->natureofbusiness}}</td>
                    <td>{{$vendorregistration->locationofoffice}}</td>
                    <td>{{$vendorregistration->commregno}}</td>
                    <td>{{$vendorregistration->qcmembership}}</td>
                    <td>{{$vendorregistration->taxcardno}}</td>
                    <td>{{$vendorregistration->validity1}}</td>
                    <td>{{$vendorregistration->validity2}}</td>
                    <td>{{$vendorregistration->otherdetails}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('vendorregistrations.show', $vendorregistration->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('vendorregistrations.edit', $vendorregistration->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('vendorregistrations.destroy', $vendorregistration->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $vendorregistrations->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection