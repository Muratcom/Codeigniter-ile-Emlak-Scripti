<!DOCTYPE html>

<html lang="en">

  <?php include('head.php');?>

  <body>

 <?php include('header.php');?>

	<div class="row-fluid">
    <div class="span12">
      <section class="pic-cat">
        <img width="1900" height="200" alt="" src="<?php echo base_url();?>img/imgdemo/ust.png">
      </section>
    </div>
</div>

	<!-- BEGIN CONTENT -->

    <div class="main-content">

      <div class="properties">

        <div class="container">

          <div class="grid_full_width">

			<!-- About US -->

            <div class="about_us">

              
              <div class="welcome">
                <div class="row">
                  <div class="span6">
                    <div class="picct">
                      <img src="<?php echo base_url();?>img/imgdemo/webdeki.png" alt="">
                    </div>
                  </div>
                  <div class="span6">
                      <div class="textct">
                        <h4>Webdeki Emlak !</h4>
                 <?php foreach ($veri7 as $rs7)
				 {?>
				 <?php echo  $rs7->icerik; ?>
				 
				 <?php }?>
                      
                      </div>
                  </div>
                </div>
              </div>

             

            </div>

			<!-- End About US -->

			

          </div>

        </div>

      </div>

    </div>

	<!-- END CONTENT -->

	

	<!-- BEGIN FOOTER -->

	<?php  include('footer.php'); ?>

  <div id='bttop'>BACK TO TOP</div>

	<!-- End footer -->

  <!-- Always latest version of jQuery-->

  <script src="js/jquery-1.8.3.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <!-- Some scripts that are used in almost every page -->

  <script src="js/tinynav/tinynav.js" type="text/javascript"></script>

  <script type="text/javascript" src="js/tabber/tabber.js"></script>

  <!-- Load template main javascript file -->

  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript">

/* <![CDATA[ */

jQuery(function(){
  $('.abouttext').hide();
  jQuery('.btshowhide').click(function(e){
    e.preventDefault();
    var target = jQuery('.class' + jQuery(this).attr('rel'));
    jQuery('.abouttext').not(target).hide();
    target.show();
    jQuery('.btshowhide').not(this).removeClass("active");
    jQuery(this).addClass("active");
  })
});



/* ]]> */

</script>

  </body>

</html>



