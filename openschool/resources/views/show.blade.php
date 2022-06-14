@extends('layout')
@section('title','Add Time Table')
@section('container')
<style>

.pull-right
{
    float: right;

}

nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i {
    line-height: 30px;

}
</style>
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

<div id="view-pagination" class="active" style="display: block;">
<div class="row">
    <div class="col s12">
        <div clsss="">
        {{ $showtimetable->links() }}

        </div>
    </div>
    </div>
</div>


<div id="view-pagination" class="active" style="display: block;">
    <div class="row">
      <div class="col s12">
        <ul class="pagination">
          <li class="disabled">
            <a href="#!">
              <i class="material-icons">chevron_left</i>
            </a>
          </li>
          <li class="active"><a href="#!">1</a>
          </li>
          <li class="waves-effect"><a href="#!">2</a>
          </li>
          <li class="waves-effect"><a href="#!">3</a>
          </li>
          <li class="waves-effect"><a href="#!">4</a>
          </li>
          <li class="waves-effect"><a href="#!">5</a>
          </li>
          <li class="waves-effect">
            <a href="#!">
              <i class="material-icons">chevron_right</i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>


@endsection
