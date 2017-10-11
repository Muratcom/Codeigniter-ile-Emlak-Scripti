<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
  <body>
<?php include("header.php"); ?>
<!-- BEGIN CONTENT -->
<div class="main-content">
	<!-- Tabber Find -->

	
<div class="row-fluid">
    <div class="span12">
      <section class="pic-cat">
        <img width="1900" height="200" alt="" src="<?php echo base_url();?>img/imgdemo/ust.png">
      </section>
    </div>
</div>
  <!-- End Tabber Find -->
  <div class="properties">
    <div class="container">
	
	
      <!-- grid_full_width 4column -->
      <div class="grid_full_width " id="4column">
        <div class="all-text">
          
        </div>
		
        <div class="shop-nav clearfix">
          <div class="row">
		 
            <div class="span6">
              
            </div>
            <div class="span6">
              <div class="ordering pull-right">
                <select class="orderby">
                  <option>Sırala</option>
                  <option>Önce en düşük</option>
                  <option>Önce en yüksek</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
		 <?php foreach($veri as $rs)
	{
?>
        <li class="span4 <?php echo  $rs->tip ; ?>">
          <div class="product-item">
            <div class="imagewrapper">
			<a href="<?php echo base_url();?>ogrenci/detay?id=<?php echo  $rs->id ; ?>" title=""> 
              <img alt="" width="300" height="180"  src="<?php echo base_url();?><?php echo  $rs->resim1 ; ?>"></a>
              
            </div>
            <h3><a href="<?php echo base_url();?>ogrenci/detay?id=<?php echo  $rs->id ; ?>" title=""> <?php echo  $rs->baslik ; ?>  </a></h3>
            <ul class="title-info">
             <li>Fiyatı: <span> <?php echo  $rs->fiyat ; ?>TL</span> </li>
              <li>Kat: <span> <?php echo  $rs->kat ; ?></span></li>
              <li>Isınma: <span><?php echo  $rs->isinma ; ?></span></li>
              <li>Tipi: <span><?php echo  $rs->tip ; ?></span></li>
            </ul>
          </div>
        </li>
	<?php } ?>
        
        </div>
        <!-- Page-ination -->
        <div class="page-ination">
          <div class="page-in">
            <ul class="clearfix">
              <li><a href="#"><img alt="" src="img/icon/pre2.png"></a></li>
              <li><a href="#"><img alt="" src="img/icon/pre1.png"></a></li>
              <li><a class="current" href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><img alt="" src="img/icon/next1.png"></a></li>
              <li><a href="#"><img alt="" src="img/icon/next2.png"></a></li>
            </ul>
          </div>
        </div>
        <!-- End Page-ination -->
      </div>
    </div>
  </div>
</div>
<!-- END CONTENT -->
<?php include("footer.php"); ?>

<div id='bttop'>BACK TO TOP</div>
<!-- END FOOTER -->
<div id='bttop'>BACK TO TOP</div>
<!-- Always latest version of jQuery-->
<script src="<?php echo base_url();?>js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- Some scripts that are used in almost every page -->
<script src="<?php echo base_url();?>js/tinynav/tinynav.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?><?php echo base_url();?>js/tabber/tabber.js"></script>
<!-- Load template main javascript file -->
<script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
</body>
</html>

