 
        <!-- FOOTER -->
        <div id="outerfooter">
        	<div id="footercontainer">
            	<footer id="footer">
                <ul id="footer-menu">
                	 <?php include "nav.php";?>
                </ul>
                <div id="copyright">Design by <a href="http://www.c-m.hk/">Creation Media</a>.</div>
                </footer>
            </div>
        </div>
        <!-- END FOOTER -->
        
        <div class="clear"></div>
	</div> <!-- end outercontainer -->
    
</div> <!-- end bodychild -->

<!-- Javascript
================================================== -->
<script type="text/javascript" src="_/js/jquery-1.6.4.min.js"></script>
<!-- jQuery Superfish -->
<script type="text/javascript" src="_/js/hoverIntent.js"></script> 
<script type="text/javascript" src="_/js/superfish.js"></script> 
<script type="text/javascript" src="_/js/supersubs.js"></script>

<!-- Custom Script -->
<script type="text/javascript" src="_/js/custom.js"></script>

<!-- Slider -->
<script type="text/javascript" src="_/js/jquery.animate-colors-min.js"></script>
<script type="text/javascript" src="_/js/jquery.skitter.js"></script>
<script type="text/javascript" src="_/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

	//=================================== SLIDESHOW ===================================//
	jQuery(".box_skitter_large").skitter({
		animation: "random",
		interval: 3000,
		numbers: false, 
		numbers_align: "right", 
		hideTools: false,
		controls: false,
		focus: false,
		focus_position: true,
		width_label:'1000px', 
		enable_navigation_keys: true,   
		progressbar: false
	});

});
</script>
<script type="text/javascript" src="_/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="_/js/fade.js"></script>
 <script type="text/javascript" src="_/js/contact.js"></script>

  
    </body>

</html>