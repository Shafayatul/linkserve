/**
* AJAX TUTORIAL
*/
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});




$(document).ready(function(){

	/**
	* SMOOTH SCROLL TO A ID - SECTION OF A PAGE
	*/
	var idScroll = $("#hidden-scroll-id").val();
	if(idScroll!=""){
		$("html, body").animate({ scrollTop: $("#"+idScroll).offset().top }, 1000);
	}


	/**
	* SUBSCRIBE
	*/
	$("#subscribe_submit").click(function(){
	    $.ajax({
	       type:'POST',
	       url:'/subscribes',
	       data:{email:$("#subscribe_email").val()},
	       success:function(data){
	       		alert(data.success);
	       },
	       error: function(data){
	        	var errors = data.responseJSON;
	        	alert(errors.email);
	       }
	    });	
	});

	/**
	* SEARCH FORM
	*/
	$("#search-form").submit(function(event) {
		event.preventDefault();
		if ($("#search").val() != '') {
			var url = $(this).attr("action")+'/'+$("#search").val();
			window.location.replace(url);
		}
	});


	
});