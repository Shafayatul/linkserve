/**
* AJAX TUTORIAL
*/
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

!function ($) {
    $(document).on("click","ul.nav li.parent > a ", function(){          
        $(this).find('em').toggleClass("fa-minus");      
    }); 
    $(".sidebar span.icon").find('em:first').addClass("fa-plus");



	$(window).on('resize', function () {
	  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
	  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})

	$(document).on('click', '.panel-heading span.clickable', function(e){
	    var $this = $(this);
		if(!$this.hasClass('panel-collapsed')) {
			$this.parents('.panel').find('.panel-body').slideUp();
			$this.addClass('panel-collapsed');
			$this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
		} else {
			$this.parents('.panel').find('.panel-body').slideDown();
			$this.removeClass('panel-collapsed');
			$this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
		}
	});


	// text editor
	tinymce.init({ 
		selector:'textarea',
		plugins:'link code image imagetools'
	});



	/**
	* POST DELETE BY ID
	*/
	$(".post-delete-button").click(function(){

		var id = $(this).attr("id");
	    $.ajax({
	       type:'POST',
	       url:'/admin/deletePost',
	       data:{id:id},
	       success:function(data){
		       if(data.success == "success"){
		       		$("#row_"+id).hide();
		       }
	       },
	       error: function(data){
	       	console.log(data);
	        	// var errors = data.responseJSON;
	        	// alert(errors.id);
	       }
	    });	

	});



}(window.jQuery);

