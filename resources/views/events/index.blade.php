@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Events
            <a class="btn btn-success pull-right" href="{{ route('events.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($events->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME_EN</th>
                            <th>NAME_AR</th>
                        <th>DESCRIPTION_EN</th>
                        <th>DESCRIPTION_AR</th>
                        <th>IMAGE</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td style="vertical-align: middle;">{{$event->id}}</td>
                                <td style="vertical-align: middle;">{{$event->name_en}}</td>
                                <td style="vertical-align: middle;">{{$event->name_ar}}</td>
                    <td style="vertical-align: middle;">{!!$event->description_en!!}</td>
                     <td style="vertical-align: middle;" dir="rtl">{!!$event->description_ar!!}</td>
                    <td style="vertical-align: middle;"> <a class="btn btn-success glyphicon glyphicon-th" href="{{route('eventimages', $event->id) }}"> Gallery</a> </td>
                                <td class="text-right" style="vertical-align: middle;">
                                    <a class="btn btn-xs btn-primary" href="{{ route('events.show', $event->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('events.edit', $event->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $events->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection