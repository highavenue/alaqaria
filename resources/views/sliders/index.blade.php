@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Sliders
            <a class="btn btn-success pull-right" href="{{ route('sliders.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($sliders->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>IMAGE</th>
                        <th>TITLE_EN</th>
                        <th>TITLE_AR</th>
                        <th>SUBJECT_EN</th>
                        <th>SUBJECT_AR</th>
                        <th>LINKTEXT_EN</th>
                        <th>LINKTEXT_AR</th>
                        <th>LINK</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{$slider->id}}</td>
                                <td>{{$slider->image}}</td>
                    <td>{{$slider->title_en}}</td>
                    <td>{{$slider->title_ar}}</td>
                    <td>{{$slider->subject_en}}</td>
                    <td>{{$slider->subject_ar}}</td>
                    <td>{{$slider->linktext_en}}</td>
                    <td>{{$slider->linktext_ar}}</td>
                    <td>{{$slider->link}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('sliders.show', $slider->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('sliders.edit', $slider->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $sliders->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection