@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Properties
            <a class="btn btn-success pull-right" href="{{ route('properties.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($properties->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>LOCATION</th>
                        <th>CATEGORY</th>
                        <th>TYPE</th>
                        <th>DESC_EN</th>
                        <th>DESC_AR</th>
                        <th>FOR</th>
                        <th>IMAGE GALLERY</th>
                        <th>STATUS</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($properties as $property)
                            <tr>
                                <td>{{$property->id}}</td>
                                <td>{{$property->location->name_en}}</td>
                    <td>{{$property->category->name_en}}</td>
                    <td>{{$property->type->name_en}}</td>
                    <td>{!!$property->desc_en!!}</td>
                    <td>{!!$property->desc_ar!!}</td>
                    <td>{{$property->for}}</td>
                    <?php
                        $result = App\PropertyImage::where('property_id', '=', $property->id)->get();
                        $count = count($result);

                    ?>
                    <td> <a class="btn btn-success {{-- glyphicon glyphicon-th --}}" href="{{route('propertyimages', $property->id) }}"> <span class="badge">{{$count}}</span> Photos</a> </td>
                    <td>@if($property->status)
                    <label class="label-success" style="font-weight:100;color: white;padding: 0px 5px;">Active</label> 
                    @else
                    <label class="label-danger" style="font-weight:100;color: white;padding: 0px 5px;">Inactive</label> 
                    @endif
                    </td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('properties.show', $property->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('properties.edit', $property->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $properties->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection