@extends('admin.master')
@section('content')  
<div class="row">
	<div class="col-sm-8 col-sm-offset-2 col-xs-12">

		<div class="x_panel">
			<div class="x_title">
				<h2 style="text-transform: uppercase;">Subscribed Email List: </h2>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<ul class="email_list_ul">
				@foreach($subscribes as $subscribe)
					<li>{{ $subscribe->email }}</li>
				@endforeach
				</ul>
			</div>
		</div>


	</div>
</div>


@endsection
