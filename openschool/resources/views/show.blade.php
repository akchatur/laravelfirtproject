@extends('layout')
@section('title','Add Time Table')
@section('container')
<div style="margin-top: 70;">
<div class="">
<a href="addtimetable" style="margin:10px;float: right;" class="pull-right btn btn-info">
    <i class="fa fa-plus"> </i> Add New Time Table </a>
</div>
<table class="table table-head-fixed text-nowrap">
    <thead>
    <tr>
    <th>id</th>
    <th>course</th>
    <th>subjects</th>
    <th>subject_type</th>
    <th>exam_date</th>
    <th>exam_time_start</th>
</tr>
</thead>
<tbody>
    @foreach($showtimetable as $item)
    <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->course}}</td>
    <td>{{$subject[$item->subjects]}}</td>
    <td>{{$item->subject_type}}</td>
    <td>{{$item->exam_date}}</td>
    <td>{{$item->exam_time_start}}</td>
    </tr>
    @endforeach
</tbody>
</table>
<div class="pull-right"> {{ $showtimetable->links() }}</div>
</div>

@endsection
