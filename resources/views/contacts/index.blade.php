@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Contacts
            {{-- <a class="btn btn-success pull-right" href="{{ route('contacts.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a> --}}
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($contacts->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>AREA_EN</th>
                        <th>AREA_AR</th>
                        <th>STREET_EN</th>
                        <th>STREET_AR</th>
                        <th>POBOX</th>
                        <th>STATE_EN</th>
                        <th>STATE_AR</th>
                        <th>COUNTRY_EN</th>
                        <th>COUNTRY_AR</th>
                        <th>PH1</th>
                        <th>PH2</th>
                        <th>FAX</th>
                        <th>EMAIL</th>
                        <th>MAP</th>
                        <th>FACEBOOK</th>
                        <th>TWITTER</th>
                        <th>LINKEDIN</th>
                        <th>INSTAGRAM</th>
                        <th>YOUTUBE</th>
                        <th>RSS</th>
                        <th>TOPBARCAPTION_EN</th>
                        <th>TOPBARCAPTION_AR</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td style="vertical-align: middle;">{{$contact->id}}</td>
                                <td style="vertical-align: middle;">{{$contact->area_en}}</td>
                    <td style="vertical-align: middle;">{{$contact->area_ar}}</td>
                    <td style="vertical-align: middle;">{{$contact->street_en}}</td>
                    <td style="vertical-align: middle;">{{$contact->street_ar}}</td>
                    <td style="vertical-align: middle;">{{$contact->pobox}}</td>
                    <td style="vertical-align: middle;">{{$contact->state_en}}</td>
                    <td style="vertical-align: middle;">{{$contact->state_ar}}</td>
                    <td style="vertical-align: middle;">{{$contact->country_en}}</td>
                    <td style="vertical-align: middle;">{{$contact->country_ar}}</td>
                    <td style="vertical-align: middle;">{{$contact->ph1}}</td>
                    <td style="vertical-align: middle;">{{$contact->ph2}}</td>
                    <td style="vertical-align: middle;">{{$contact->fax}}</td>
                    <td style="vertical-align: middle;">{{$contact->email}}</td>
                    <td style="vertical-align: middle;">{{$contact->map}}</td>
                    <td style="vertical-align: middle;">{{$contact->facebook}}</td>
                    <td style="vertical-align: middle;">{{$contact->twitter}}</td>
                    <td style="vertical-align: middle;">{{$contact->linkedin}}</td>
                    <td style="vertical-align: middle;">{{$contact->instagram}}</td>
                    <td style="vertical-align: middle;">{{$contact->youtube}}</td>
                    <td style="vertical-align: middle;">{{$contact->rss}}</td>
                    <td style="vertical-align: middle;">{{$contact->topbarcaption_en}}</td>
                    <td style="vertical-align: middle;">{{$contact->topbarcaption_ar}}</td>
                                 <td class="text-right" style="vertical-align: middle;">
                                    <a class="btn btn-xs btn-primary" href="{{ route('contacts.show', $contact->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('contacts.edit', $contact->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                   {{--  <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $contacts->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection