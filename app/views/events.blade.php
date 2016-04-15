@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{Lang::get('eventsI18n.title');}}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{Lang::get('eventsI18n.containerTitle');}}
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>{{Lang::get('eventsI18n.columnId');}}</th>
                                <th>{{Lang::get('eventsI18n.columnAddress');}}</th>
                                <th>{{Lang::get('eventsI18n.columnLatitude');}}</th>
                                <th>{{Lang::get('eventsI18n.columnLongitude');}}</th>
                                <th>{{Lang::get('eventsI18n.columnCategory');}}</th>
                                <th>{{Lang::get('eventsI18n.columnOcurrency');}}</th>
                                <th>{{Lang::get('eventsI18n.columnLocal');}}</th>
                                <th>{{Lang::get('eventsI18n.columnDateTime');}}</th>
                                <th>{{Lang::get('eventsI18n.columnOptions');}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $event)
                                <tr class="gradeU">
                                    <td>{{$event->id}}</td>
                                    <td>{{$event->address}}</td>
                                    <td class="center">{{$event->lat}}</td>
                                    <td class="center">{{$event->long}}</td>
                                    <td class="center">{{$event->sub_category->category->description}}</td>
                                    <td class="center">{{$event->sub_category->description}}</td>
                                    <td class="center">{{$event->localtype->description}}</td>
                                    <td class="center">{{$event->created_at}}</td>
                                    <td class="center">-</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection