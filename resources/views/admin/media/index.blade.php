@extends('admin.master')
@section('content')  
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">

		<div class="x_panel">
			<div class="x_title">
				<h2 style="text-transform: uppercase;">List: {{str_replace("_"," ", str_replace("f__", "", $type) )}}</h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">

				<div class="table-responsive">
				  <table class="table table-bordered table-text-center">
				     <thead>
				      <tr>
				        <th class="post_title">Title</th>
				        <th class="post_content">Body</th>
				        <th class="post_type">Type</th>
				        <th class="preview_image">Image</th>
				        <th>Action</th>
				      </tr>
				    </thead>

				    <tbody>
    				    @foreach($posts as $post)
							<tr id="row_{{$post->id}}">
								<th class="post_title">
									{{$post->post_title}}
								</th>
								<th class="post_content">
									{!! substr($post->post_content, 0, 200) !!}
						            @if(strlen($post->post_content) >200)
						              ...
						            @endif
								</th>
								<th class="post_type">
									{{$post->post_type}}
								</th>
								<th class="preview_image">
									@if ($post->preview_image != "")
							        	<img src="{{asset(Storage::url($post->preview_image))}}" alt="" width="70px" class="img-thumbnail">
							        @endif
			      				</th>
								<th>
									<button type="button" class="btn btn-danger post-delete-button" id="{{$post->id}}">
										<i class="fa fa-trash-o" aria-hidden="true"></i>
									</button>
								</th>
							</tr>
						@endforeach
				    </tbody>

				  </table>
				</div>			    


			    <div class="text-center">
			    {!! $posts->links(); !!}
			    </div>


			</div>
		</div>


	</div>
</div>

<input type="hidden" class="post_type_class" value="{{$type}}">


@endsection



@section('custom_page_script')
	<script type="text/javascript">
		$(document).ready(function(){

			var postType = $(".post_type_class").val();

			if(postType == "slider"){
				$(".post_content").hide();
			}else if(postType == "service"){
				$(".preview_image").hide();
			}else if(postType == "contact"){
				$(".preview_image").hide();
			}

		});
	</script>
@stop