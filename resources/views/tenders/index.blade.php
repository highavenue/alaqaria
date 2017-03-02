@extends('layout')

@section('header')
    <div class="page-header clearfix">
     @include('partials._message')
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Tenders
            <a class="btn btn-success pull-right" href="{{ route('tenders.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($tenders->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TENDER_NO</th>
                            <th>LANGUAGE</th>
                        <th>SUBJECT_EN</th>
                        <th>SUBJECT_AR</th>
                        <th>DESC_EN</th>
                        <th>DESC_AR</th>
                        <th>CLOSING_DATE</th>
                        <th>ATTACHMENT</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tenders as $tender)
                            <tr>
                                <td>{{$tender->id}}</td>
                                <td>{{$tender->tender_no}}</td>
                                <td><?php echo $tender->english_only? '<span style="padding:5px;" class="label label-primary">English</span>':'<span style="padding:5px;" class="label label-primary">English</span><span style="margin-left:10px;padding:5px;" class="label label-success">Arabic</span>'  ?></td>
                    <td>{{$tender->subject_en}}</td>
                    <td>{{$tender->subject_ar}}</td>
                    <td>{!!$tender->desc_en!!}</td>
                    <td>{!!$tender->desc_ar!!}</td>
                    <td>{!!$tender->close_date!!}</td>
                    <td><a href="{{ route('adminTenderDownload', $tender->attachment) }}"> {{$tender->attachment}}</a></td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('tenders.show', $tender->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('tenders.edit', $tender->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('tenders.destroy', $tender->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $tenders->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection