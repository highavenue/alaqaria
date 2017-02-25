@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> TenderRequirements
           {{--  <a class="btn btn-success pull-right" href="{{ route('tender_requirements.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a> --}}
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($tender_requirements->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SUBJECT_EN</th>
                            <th>SUBJECT_AR</th>
                            <th>DESC_EN</th>
                            <th>DESC_AR</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tender_requirements as $tender_requirement)
                        <tr>
                            <td>{{$tender_requirement->id}}</td>
                            <td>{{$tender_requirement->subject_en}}</td>
                            <td>{{$tender_requirement->subject_ar}}</td>
                            <td>{!!$tender_requirement->desc_en!!}</td>
                            <td dir="rtl">{!!$tender_requirement->desc_ar!!}</td>
                            <td class="text-right">
                                <a class="btn btn-xs btn-primary" href="{{ route('tender_requirements.show', $tender_requirement->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                <a class="btn btn-xs btn-warning" href="{{ route('tender_requirements.edit', $tender_requirement->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                               {{--  <form action="{{ route('tender_requirements.destroy', $tender_requirement->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $tender_requirements->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection