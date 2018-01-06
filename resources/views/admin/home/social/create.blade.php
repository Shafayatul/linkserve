@extends('admin.master')
@section('content')  
<div class="row">
	<div class="col-sm-8 col-sm-offset-2 col-xs-12">

		<div class="x_panel">
			<div class="x_title">
				<h2 style="text-transform: uppercase;">Add New 4 Home Block</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				{!! Form::open(["url"=> url('admin/storeHomeSocialLinks'), "id" => "demo-form2", "files" => true, "class" => "form-horizontal form-label-left form-group", "data-parsley-validate row" => ""]) !!}

					    {{ Form::label('facebook', 'Facebook :') }}
					    {{ Form::text('facebook', null, array("class" => "form-control", "maxlength" => "191", "required" => "required" )) }}
					    <br>

			

						{{ Form::label('twitter', 'Twitter :') }}
					    {{ Form::text('twitter', null, array("class" => "form-control", "maxlength" => "191", "required" => "required" )) }}
					    <br>

			

						{{ Form::label('instagram', 'Instagram :') }}
					    {{ Form::text('instagram', null, array("class" => "form-control", "maxlength" => "191", "required" => "required" )) }}
					    <br>

				

					    {{ Form::submit('Save', array('class' => 'btn btn-lg btn-block btn-primary form-margin')) }}

				{!! Form::close() !!}

			</div>
		</div>


	</div>
</div>


@endsection