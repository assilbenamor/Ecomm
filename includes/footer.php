
</div>

<footer class="text-center" id="footer">&copy; copyright 2016 AssilBenAmor</footer>


 
<script>
	jQuery(window).scroll(function(){
		var vscroll = jQuery(this).scrollTop();
		jQuery('#logotext').css({
			"transform" : "translate(0px, "+vscroll/2+"px)"
		});

		var vscroll = jQuery(this).scrollTop();
		jQuery('#back-hat').css({
			"transform" : "translate("+vscroll/2+"px, "-vscroll/12+"px)"
		});

		var vscroll = jQuery(this).scrollTop();
		jQuery('#fore-shirt').css({
			"transform" : "translate(0px, -"+vscroll/2+"px)"
		});
	});

	function detailsmodal(id){
		var data = {"id":id};	
		jQuery.ajax({
			url: '/ecomm/includes/detailsmodal.php',
			method : "post",
			data : data,

				success : function(data){
				jQuery('body').append(data);
				jQuery('#details-modal').modal('toggle');
			},
			error : function(){
				alert("something went wrong");
			},
		});
	}
</script>
</body>
</html>