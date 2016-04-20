
</div>

<footer class="text-center" id="footer">&copy; copyright 2016 AssilBenAmor</footer>


 
<script >
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


</script>
</body>
</html>