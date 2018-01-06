@extends('admin.master')
@section('content')  
<div class="row">
	<div class="col-sm-8 col-sm-offset-2 col-xs-12">

		<div class="x_panel">
			<div class="x_title">
				<h2>Add Media</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<br />
				{!! Form::open(["route"=>"posts.store", "id" => "demo-form2", "files" => true, "class" => "form-horizontal form-label-left form-group", "data-parsley-validate row" => ""]) !!}

					    {{ Form::label('post_title', 'Post Title:') }}
					    {{ Form::text('post_title', null, array("class" => "form-control", "required" => "required", "maxlength" => "191" )) }}
					    <br>

					    {{ Form::label('post_type', 'Select Post Type:', array('class' => ' form-margin')) }}
					    {{ Form::select('post_type', array('White_Papers' => 'White Papers','News' => 'News','Downloads' => 'Downloads','Gallery' => 'Gallery','Events' => 'Events'), null, array("class" => "form-control post_type") ) }}
						<br>


					    <div class="multiple_file_upload" style="display: none;">
					    	<label for="multiple_file" id="label_multiple_file_upload">Files For <span id="type_files_text"></span>:</label>
					    	<input class="form-control" name="multiple_file_1" type="file">
					    	<div class="append_new_file"></div>
					    	<button class="btn btn-success btn-xs add-more-mul-file" type="button" style="float: right"> + Add More</button>
					    	<br>
					    	<br>
					    </div>
					    <input type="hidden" name="cnt" id="cnt" value="1">

					    {{ Form::label('post_content', 'content', array('class' => ' form-margin')) }}
					    {{ Form::textarea('post_content', null, array("class" => "form-control")) }}
					    <br>


					    {{ Form::label('file', 'Preview Image:', array('class' => ' form-margin')) }}
					    {{ Form::file('file', null, array("class" => "form-control", "required" => "required", "maxlength" => "10" )) }}		
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

			$('.post_type').change(function(){
				if(($(this).val() == 'Downloads') || ($(this).val() == 'Gallery')){
					$(".multiple_file_upload").show();

					if( $(this).val() == 'Downloads' ){
						$("#type_files_text").text("Downloads");
					}else{
						$("#type_files_text").text("Gallery");
					}

					
				}
			});
			
			$('.add-more-mul-file').click(function(){
				var cnt = $('#cnt').val();
				cnt++;
				$(".append_new_file").append('<input class="form-control" name="multiple_file_'+cnt+'" type="file">');
				$('#cnt').val(cnt);
			});



		});
	</script>
@stop