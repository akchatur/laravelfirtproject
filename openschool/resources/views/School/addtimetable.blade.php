@extends('layout')
@section('title','Add Time Table')
@section('container')
<style>
    .error-message
    {
        color:red;
    }
    .alert-success1
    {
        color:red;
    }
    </style>



<div id="Form-advance" class="card card card-default scrollspy">

{{Form::open(array('url' => 'posttimetable', 'method' => 'post'))}}
@csrf


  <div class="card-content">
    <h4 class="card-title">Add Time Table</h4>
    <form>

    <div class="row">




		<div class="input-field col m6 s12">
			<div class="select-wrapper">
			<?php $abcd = [''=>'Select Course']; ?>
				{{Form::select('course',$abcd + ['10'=>'10th','12'=>'12th'],'',array('id' => 'course','class' => 'dropdown-content select-dropdown'))}}

		@if($errors->has('course'))
		<div class="error-message">
		{{ $errors->first('course') }}
		</div>
		@endif
			</div>
       </div>

	   <div class="input-field col m6 s12">
			<div class="select-wrapper">
				<?php
	$abcd = [''=>'Search By Subject'];
	$subject=array();
	//print_r($subjects);
	if(old('course') && isset($subjects[old('course')]))
	{
		$subject=$subjects[old('course')];
		//echo "<pre>";
		//print_r($subjects);

	}

?>
	{{--dd($subject)--}}
	{{Form::select('subjects',$abcd + $subject,'',array('id' => 'subject','class' => 'form-control'))}}
	@if($errors->has('subjects'))
		<div class="error-message">{{ $errors->first('subjects') }}</div>
	@endif
			</div>
       </div>
	</div>






      <div class="row">

<div class="input-field col m6 s12">

	{{ Form::text('exam_date','',['placeholder'=>'Select Exam Date','class' => 'datepicker '])}}
	@if($errors->has('exam_date'))
	<div class="error-message">{{ $errors->first('exam_date') }}</div>
	@endif


             </div>




        <div class="input-field col m6 s12">



			{{ Form::text('exam_time_start','',['placeholder'=>'Please Enter exam start time','class' => 'timepicker '])}}
			@if($errors->has('exam_time_start'))
    <div class="error-message">{{ $errors->first('exam_time_start') }}</div>
@endif

        </div>
      </div>



      <div class="row">
        <div class="input-field col m6 s12">

			{{ Form::text('exam_time_end','',['placeholder'=>'Please Enter End Time','class' => 'timepicker'])}}
			@if($errors->has('exam_time_end'))
    <div class="error-message">{{ $errors->first('exam_time_end') }}</div>
@endif

        </div>


      </div>


	 <div class="row">




        <div class="input-field col m6 s12">

			  <button class="btn cyan waves-effect waves-light left" type="submit" name="action">Submit

			  </button>

        </div>

		<div class="col m6 s12 file-field input-field">

           <button class="btn cyan waves-effect waves-light right" type="reset" name="action">Reset
        </div>

      </div>




    </form>
  </div>
</div>
{{ Form::close() }}
<script>
 $(document).ready(function(){



    $('.timepicker').timepicker();

	$("#course").on('change', function(){

		var id = $(this).val();

		$("#subject").html('<option value="">Select Subject</option>');

		$.ajax({type:'get',url:"{{URL:: to('get_sub') }}" + '/' + id,  dataType: 'json',
				success: function(result){
					//console.log(result);
					$.each(result, function(key,value) {
						$("#subject").append($('<option>', { value : key }).text(value));
					});
					//test
					$("#subject").formSelect();
				}
		});

	});

  });


</script>
@endsection
