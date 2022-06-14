@extends('layout')
@section('title','Add Time Table')
@section('container')




<div id="Form-advance" class="card card card-default scrollspy">
{{Form::open(array('url' => 'posttimetable', 'method' => 'post'))}}
@csrf
  <div class="card-content">
    <h4 class="card-title">Add Time Table</h4>
    <form>

    <div class="row">

        <div class="input-field col m6 s12">
            <div class="select-wrapper"><input class="cc" type="text" readonly="true" data-target="select-options-526a614d-ce98-4747-b7f5-6f72fbaa7e5a">
                <ul id="select-options-526a614d-ce98-4747-b7f5-6f72fbaa7e5a" class="dropdown-content select-dropdown" tabindex="0" style=""><li class="disabled selected" id="select-options-526a614d-ce98-4747-b7f5-6f72fbaa7e5a0" tabindex="0"><span>Choose your profile</span></li><li id="select-options-526a614d-ce98-4747-b7f5-6f72fbaa7e5a1" tabindex="0"><span>Manager</span></li><li id="select-options-526a614d-ce98-4747-b7f5-6f72fbaa7e5a2" tabindex="0"><span>Developer</span></li><li id="select-options-526a614d-ce98-4747-b7f5-6f72fbaa7e5a3" tabindex="0"><span>Business</span></li></ul><svg class="caret" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg><select tabindex="-1">
              <option value="" disabled="" selected="">Choose your profile</option>
              <option value="1">Manager</option>
              <option value="2">Developer</option>
              <option value="3">Business</option>
            </select></div>
            <label>Select Profile</label>
          </div>


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
