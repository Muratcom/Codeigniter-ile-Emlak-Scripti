<!DOCTYPE html><?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<?php include("head.php"); ?>
  <body>
<?php include("header.php"); ?>


<div id="slider-home" class="row-fluid slider-home">
    <div class="span12">
      <section class="slider">
        <div id="main-slider" class="flexslider">
          <ul class="slides">
		  
		  <?php
foreach($veri as $rs)
	{
?>
            <li>
              <div class="container flex-caption">
                <div class="title">
                  <span> 
                  <?php echo  $rs->baslik ; ?> <br/> 
                    <?php echo  $rs->adres ; ?>	
                  </span>
                </div>
              </div>
			  <a href="<?php echo base_url();?>ogrenci/detay?id=<?php echo  $rs->id ; ?>" title=""> 

              <img alt="" width="1900" height="600" src="<?php echo base_url();?><?php echo  $rs->slider ; ?>" />
            </li>
			
	<?php } ?>
            
          </ul>
        </div>
      </section>
    </div>
  </div>

<!-- BEGIN CONTENT -->
<div class="main-content">
	<!-- Tabber Find -->
	<!-- Tabber -->
  
  <!-- Tabber -->
  <!-- End Tabber Find -->
  
  <!-- Properties -->
  <div class="properties">
   <!-- Properties scroll -->
   
  
  <!-- End Scroll -->
  
  <!-- Properties List -->
  <div id="property-list" class="container">
    <h3>İlanlar </h3>
    <!-- Filterable -->  
    <div class="filter-pro clearfix">
      <div class="row">
        <div class="span8">
          <ul  id="able-filter">
            <li><a href="#all" title="">Hepsi</a></li>
            <li><a href="#daire" title="" rel="daire">Daire</a></li>
            <li><a href="#mustakil" title="" rel="mustakil">Müstakil Ev</a></li>
            <li><a href="#apartment" title="" rel="rezidans">Residence</a></li>
            <li><a href="#villa" title="" rel="villa">Villa</a></li>
          </ul>
        </div>
        <div class="span4">
          <div class="list-grid pull-right">
            <ul>
              <li><a href="grid_fullwidth_4_column.html"><i class="grid4col"></i></a></li>
              <li><a class="active" href="grid_fullwidth_3_column.html"><i class="grid3col"></i></a></li>
              <li><a href="list_fullwidth2.html"><i class="grid2list"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Filterable -->  
    <div class="row">
      <ul class="products" id="able-list">
        
        
         <?php
foreach($veri as $rs)
	{
?>
        <li class="span4 <?php echo  $rs->tip ; ?>">
          <div class="product-item">
            <div class="imagewrapper">
			  <a href="<?php echo base_url();?>ogrenci/detay?id=<?php echo  $rs->id ; ?>" title="">
              <img alt="" width="300" height="180" src="<?php echo base_url();?><?php echo  $rs->resim1 ; ?>">
              <span class="price"> <?php echo  $rs->fiyat ; ?>TL</span>
            </div>
            <h3><a href="<?php echo base_url();?>ogrenci/detay?id=<?php echo  $rs->id ; ?>" title=""> <?php echo  $rs->baslik ; ?> </a></h3>
            <ul class="title-info">
             <li>Fiyatı: <span> <?php echo  $rs->fiyat ; ?>TL</span> </li>
              <li>Kat: <span> <?php echo  $rs->kat ; ?></span></li>
              <li>Isınma: <span><?php echo  $rs->isinma ; ?></span></li>
              <li>Tipi: <span><?php echo  $rs->tip ; ?></span></li>
            </ul>
          </div>
        </li>
	<?php } ?>
        
      </ul>
    </div>
  </div>
  <!-- End Properties List -->
  
</div>
<!-- End Properties -->

<!-- Our Agents -->
<div class="ouragents">
</div>
<!-- End Our Agents -->

</div>
<!-- END CONTENT -->
<div id='bttop'>BACK TO TOP</div>
<?php include("footer.php"); ?>
<!-- END FOOTER -->

<!-- Always latest version of jQuery-->
<script src="<?php echo base_url();?>js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- Some scripts that are used in almost every page -->
<script src="<?php echo base_url();?>js/tinynav/tinynav.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tabber/tabber.js"></script>
<!-- Load template main javascript file -->
<script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>

<!-- ===================================================== -->
<!-- ================ Index page only scripts ============ -->
<script src="<?php echo base_url();?>js/flexflider/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url();?>js/nicescroll/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>js/filterable/filterable.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
jQuery(function($){
  $('#main-slider').flexslider();

  jQuery('.box').niceScroll({
    autohidemode:false,
    scrollspeed: 100,
    cursorcolor: '#d84949',
    cursorwidth: '15px',
    cursorborderradius: '0px',
    cursorborder: '0',
    background: '#dddddd'
  });
});
/* ]]> */
</script>

</body>
</html>

