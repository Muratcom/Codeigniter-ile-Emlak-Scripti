<!DOCTYPE html>
<html lang="en">

	<?php include('head.php');	?>
  <body>
    <!-- BEGIN HEADER -->
    <header>
      <div class="container">
        <?php include('header.php'); ?>
   </div>
   <!-- Bannber -->
   <div class="row-fluid">
    <div class="span12">
      <section class="pic-cat">
        <img width="1900" height="200" alt="" src="<?php echo base_url();?>img/imgdemo/ust.png">
      </section>
    </div>
  </div>
  <!-- End Bannber -->
</header>
<!-- END HEADER -->

<!--BEGIN CONTENT -->
<div class="main-content">
  <div class="properties">
    <div class="container">
      <div class="grid_full_width gird_sidebar">
        <div class="row">
         <!-- Main content -->
         <div class="span8">
          <!-- Contact -->
		  
		  
          <div class="contact">
            <h1> Iletisim </h1>
            <div class="contact-bor">
              <div class="infotext">
                Daha fazla bilgi almak için Lütfen bizimle iletiþime geçin.
              </div>
              <div class="map"><iframe width="580" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=34.669359,-95.712891&amp;spn=40.915036,86.572266&amp;t=m&amp;z=4&amp;output=embed"></iframe></div>
              <div class="add-contact">
                <div class="row">
                  <div class="span280px">
                    <h6>Adresimiz</h6>
                    Denizli Anafartalar Mh. 2128 SK 
                  </div>
                  <div class="span280px pull-right">
                    <strong>Tel:</strong>. 012.666.999 <br/>
                    <strong>Fax:</strong> 012.666.999 <br/>
                    <strong>E-mail:</strong> <a href="mailto:pixelgeeklab@gmail.com?subject=SweetWords &body=Please send me a copy of your new program!">bilgi@webdekiyerin.com</a> <br/>
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-form">
             <?php
 echo form_open(base_url().'ogrenci/kayit_ekle');
   echo form_label('Konu:');
   echo form_input(array('id'=>'numara','name'=>'baslik'));
   echo "<br>";
   echo form_label('Mesaj:');
   echo form_input(array('id'=>'adsoy','name'=>'detay'));
   echo "<br>";
   
   echo form_submit(array('id'=>'submit','value'=>'Gonder'));
 echo form_close();

?>
            </div>
          </div>
          <!-- End contact -->
        </div>
        <!-- End Main content -->
        
        <!-- Sidebar left  --><!-- End Sidebar left  -->
    </div>
  </div>
</div>
</div>
</div>
<!-- END CONTENT -->

<!-- FOOTER -->
<?php include('footer.php'); ?>
<div id='bttop'>BACK TO TOP</div>
<!-- END FOOTER -->
<!-- Always latest version of jQuery-->
<script src="<?php echo base_url();?>js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- Some scripts that are used in almost every page -->
<script src="<?php echo base_url();?>js/tinynav/tinynav.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tabber/tabber.js"></script>
<!-- Load template main javascript file -->
<script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
</body>
</html>

