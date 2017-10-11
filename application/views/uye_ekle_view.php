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
                        <h4>Üye Kayıt Formu</h4>
                 
			 <?php
 echo form_open(base_url().'ogrenci/uye_ekle_2');
   echo form_label('İsim:');
   echo form_input(array('id'=>'numara','name'=>'isim'));
   echo "<br>";
   echo form_label('Cinsiyet:');
   echo form_input(array('id'=>'adsoy','name'=>'cinsiyet'));
   echo "<br>";
   echo form_label('Yas:');
   echo form_input(array('id'=>'yas','name'=>'yas'));
   echo "<br>";
   echo form_label('Mail Adresi:');
   echo form_input(array('id'=>'mail','name'=>'mail'));
   echo "<br>";
   echo form_label('Sifre:');
   echo form_input(array('id'=>'sifre','name'=>'sifre'));
   echo "<br>";
   
   echo "<br>";
   echo form_submit(array('id'=>'submit','value'=>'Kayıt ol'));
 echo form_close();

		 ?>
                      
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



