@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Contacts
            <a class="btn btn-success pull-right" href="{{ route('contacts.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
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
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->area_en}}</td>
                    <td>{{$contact->area_ar}}</td>
                    <td>{{$contact->street_en}}</td>
                    <td>{{$contact->street_ar}}</td>
                    <td>{{$contact->pobox}}</td>
                    <td>{{$contact->state_en}}</td>
                    <td>{{$contact->state_ar}}</td>
                    <td>{{$contact->country_en}}</td>
                    <td>{{$contact->country_ar}}</td>
                    <td>{{$contact->ph1}}</td>
                    <td>{{$contact->ph2}}</td>
                    <td>{{$contact->fax}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->map}}</td>
                    <td>{{$contact->facebook}}</td>
                    <td>{{$contact->twitter}}</td>
                    <td>{{$contact->linkedin}}</td>
                    <td>{{$contact->instagram}}</td>
                    <td>{{$contact->youtube}}</td>
                    <td>{{$contact->rss}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('contacts.show', $contact->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('contacts.edit', $contact->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
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