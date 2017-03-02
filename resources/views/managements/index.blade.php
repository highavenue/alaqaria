@extends('layout')

@section('header')
    <div class="page-header clearfix">
    @include('partials._message')
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Managements
            <a class="btn btn-success pull-right" href="{{ route('managements.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($managements->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                        <th>NAME_EN</th>
                        <th>NAME_AR</th>
                        <th>DESIG_EN</th>
                        <th>DESIG_AR</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($managements as $management)
                            <tr>
                                <td style="vertical-align: middle;">{{$management->id}}</td>
                                <td style="vertical-align: middle;"><img src="{{$management->imageURL}}" class="img-thumbnail" width="150" height="136"> </td>
                    <td style="vertical-align: middle;">{{$management->name_en}}</td>
                    <td style="vertical-align: middle;">{{$management->name_ar}}</td>
                    <td style="vertical-align: middle;">{{$management->desig_en}}</td>
                    <td style="vertical-align: middle;">{{$management->desig_ar}}</td>
                                <td class="text-right" style="vertical-align: middle;">
                                    <a class="btn btn-xs btn-primary" href="{{ route('managements.show', $management->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('managements.edit', $management->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('managements.destroy', $management->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $managements->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection