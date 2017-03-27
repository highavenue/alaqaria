@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Msrconstants
            <a class="btn btn-success pull-right" href="{{ route('msrconstants.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($msrconstants->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DOCUMENTNO</th>
                        <th>REVISIONNO</th>
                        <th>REVISIONDATE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($msrconstants as $msrconstant)
                            <tr>
                                <td>{{$msrconstant->id}}</td>
                                <td>{{$msrconstant->documentno}}</td>
                    <td>{{$msrconstant->revisionno}}</td>
                    <td>{{$msrconstant->revisiondate}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('msrconstants.show', $msrconstant->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('msrconstants.edit', $msrconstant->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    {{-- <form action="{{ route('msrconstants.destroy', $msrconstant->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $msrconstants->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection