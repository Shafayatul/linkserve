@extends('admin.master')
@section('content')  
<div class="row">
	<div class="col-sm-8 col-sm-offset-2 col-xs-12">

		<div class="x_panel">
			<div class="x_title">
				<h2 style="text-transform: uppercase;">Add New {{str_replace("_"," ", str_replace("f__", "", $type) )}}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				{!! Form::open(["route"=>"posts.store", "id" => "demo-form2", "files" => true, "class" => "form-horizontal form-label-left form-group", "data-parsley-validate row" => ""]) !!}

					    {{ Form::label('post_title', 'Post Title:') }}
					    {{ Form::text('post_title', null, array("class" => "form-control", "maxlength" => "191" )) }}
					    <br>

					    {{ Form::hidden('post_type', $type,array("class" => "form-control post_type_class" ) 
						) }}
						<br>


					    {{ Form::label('post_content', 'content', array('class' => ' form-margin')) }}
					    {{ Form::textarea('post_content', null, array("class" => "form-control" )) }}
					    <br>


					    {{ Form::label('file', 'Preview Image:', array('class' => ' form-margin')) }}
					    {{ Form::file('file', null, array("class" => "form-control", "maxlength" => "10" )) }}		
					    <br>				

					    {{ Form::submit('Save', array('class' => 'btn btn-lg btn-block btn-primary form-margin')) }}

				{!! Form::close() !!}

			</div>
		</div>


	</div>
</div>


@endsection



@section('custom_page_script')
	<script type="text/javascript">
		$(document).ready(function(){

			var postType = $(".post_type_class").val();

			if(postType == "slider"){
				$("label[for=post_content]").hide();
				$("textarea[name=post_content]").hide();
			}else if(postType == "service"){
				$("label[for=file]").hide();
				$("input[name=file]").hide();
			}else if(postType == "contact"){
				$("label[for=file]").hide();
				$("input[name=file]").hide();
			}

		});
	</script>
@stop