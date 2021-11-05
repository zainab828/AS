@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    empty
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('main_trans.Grades')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        @if ($errors->any())
            <div class="error">{{ $errors->first('Name') }}</div>
        @endif


        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                        {{ trans('‏‏Grades_trans.add_Grade') }}
                    </button>
                        @include('pages.Grades.creaate')
                    <br><br>

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('‏‏Grades_trans.Name')}}</th>
                                <th>{{trans('‏‏Grades_trans.Notes')}}</th>
                                <th>{{trans('‏‏Grades_trans.Processes')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            @foreach($Grades as $Grade)
                                <tr>
                                    <?php $i++; ?>
                                    <td>{{ $i }}</td>
                                    <td>{{ $Grade->Name }}</td>
                                    <td>{{ $Grade->Notes }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit{{$Grade->id}}" title="{{trans('‏‏Grades_trans.Edit')}}"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$Grade->id}}" title="{{trans('‏‏Grades_trans.delete')}}"><i class="fa fa-trash"></i></button>

                                    </td>
                                </tr>

                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- add_modal_Grade -->
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
