<footer>
    <div class="contact-form">
    <div class="contact-arrow"><span><i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
     	<div class="contact-form-field">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-12">
                    <div class="form-value">
                    	<h2>Arrange a Consultation Now</h2>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis turpis, sodales eu hendrerit vel, vestibulum id metus. Vestibulum ante ipsum primis in faucibus orci luca</p>
               <?php echo do_shortcode('[contact-form-7 id="67" title="Contact form 1"]');?>
                </div>
                </div>
            </div>	
     	</div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
<script>
$(document).ready(function(){
    $(".contact-arrow span").click(function(){
        $(".contact-form-field").slideToggle("slow");
    });
});
</script>