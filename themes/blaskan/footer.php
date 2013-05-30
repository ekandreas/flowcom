
		<footer id="footer">
			<?php echo blaskan_footer_structure(); ?>
		</footer>
		<!-- / #footer -->
	</div>
	<!-- / #wrapper -->
</div>
<!-- / #site -->

<?php wp_footer(); ?>
<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
<script>
	jQuery(document).ready(function($) {
		var angle = 0;
		setInterval(function(){
			angle+=0.1;
			$("#roller_image").rotate(angle);
		},50);
	});
</script>
</body>
</html>