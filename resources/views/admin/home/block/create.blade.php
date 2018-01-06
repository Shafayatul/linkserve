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
				{!! Form::open(["url"=> url('admin/storeHomeBlock'), "id" => "demo-form2", "files" => true, "class" => "form-horizontal form-label-left form-group", "data-parsley-validate row" => ""]) !!}

					    {{ Form::label('post_title', 'Post Title 1 :') }}
					    {{ Form::text('post_title_1', null, array("class" => "form-control", "maxlength" => "191" )) }}
					    <br>

					    {{ Form::label('post_content', 'Content 1 :', array('class' => ' form-margin')) }}
					    {{ Form::text('post_content_1', null, array("class" => "form-control" )) }}
					    <br>		

						{{ Form::label('post_title', 'Post Title 2 :') }}
					    {{ Form::text('post_title_2', null, array("class" => "form-control", "maxlength" => "191" )) }}
					    <br>

					    {{ Form::label('post_content', 'Content 2 :', array('class' => ' form-margin')) }}
					    {{ Form::text('post_content_2', null, array("class" => "form-control" )) }}
					    <br>		

						{{ Form::label('post_title', 'Post Title 3 :') }}
					    {{ Form::text('post_title_3', null, array("class" => "form-control", "maxlength" => "191" )) }}
					    <br>

					    {{ Form::label('post_content', 'Content 3 :', array('class' => ' form-margin')) }}
					    {{ Form::text('post_content_3', null, array("class" => "form-control" )) }}
					    <br>		

						{{ Form::label('post_title', 'Post Title 4 :') }}
					    {{ Form::text('post_title_4', null, array("class" => "form-control", "maxlength" => "191" )) }}
					    <br>

					    {{ Form::label('post_content', 'Content 4 :', array('class' => ' form-margin')) }}
					    {{ Form::text('post_content_4', null, array("class" => "form-control" )) }}
					    <br>		



					    {{ Form::submit('Save', array('class' => 'btn btn-lg btn-block btn-primary form-margin')) }}

				{!! Form::close() !!}

			</div>
		</div>


	</div>
</div>


@endsection