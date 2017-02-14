@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Abouts
           {{--  <a class="btn btn-success pull-right" href="{{ route('abouts.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a> --}}
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($abouts->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SUBJECT_EN</th>
                        <th>SUBJECT_AR</th>
                        <th>DESC_EN</th>
                        <th>DESC_AR</th>
                        <th>IMAGE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($abouts as $about)
                            <tr>
                                 <td style="vertical-align: middle;">{{$about->id}}</td>
                                 <td style="vertical-align: middle;">{{$about->subject_en}}</td>
                     <td style="vertical-align: middle;">{{$about->subject_ar}}</td>
                     <td style="vertical-align: middle;">{{$about->desc_en}}</td>
                     <td style="vertical-align: middle;">{{$about->desc_ar}}</td>
                     <td style="vertical-align: middle;"><img src="{{$about->imageURL}}" width="250"></td>
                                <td class="text-right" style="vertical-align: middle;">
                                    <a class="btn btn-xs btn-primary" href="{{ route('abouts.show', $about->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('abouts.edit', $about->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    {{-- <form action="{{ route('abouts.destroy', $about->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $abouts->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection