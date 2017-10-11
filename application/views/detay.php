

<!DOCTYPE html><?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
  
		foreach($veri as $rs)
		{	 if( $_GET["id"]==$rs->id) { 
?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Webdeki Emlak</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Your styles -->
  <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/flexslider/flexslider.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/tabber/tabber.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/colorbox/colorbox.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/styles.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet" media="screen">
  <link href='<?php echo base_url();?>http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='<?php echo base_url();?>http://fonts.googleapis.com/css?family=Raleway:400,700,100,200,300' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim, for Ie6-8 support of HTML5 elements -->
    <!--[if lt Ie 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <!-- BEGIN HEADER -->
    <header>
      <div class="container">
        <div class="top-header">
          <!-- Logo -->
          <div class="realestate-logo pull-left"><a href="<?php echo base_url();?>Ogrenci/indexfunc" title=""> <img alt="" src="<?php echo base_url();?>img/logo.png"></a></div>
          <!-- End Logo -->
          
          <!-- Menu --> 

         <div class="menu-navbar  pull-left">

            <div class="navbar">

              <ul class="nav" id="navmenu">

               <li><a  href="<?php echo base_url();?>Ogrenci/anasayfa" title="">Anasayfa </a></li>

               <li class="dropdown">

                <a class="dropdown-toggle" data-target="#" data-toggle="dropdown" href="<?php echo base_url();?>Ogrenci/liste">İlanlar </a>

                <ul class="dropdown-menu">

                  <li><a href="<?php echo base_url();?>Ogrenci/liste">İlan Listesi</a></li>
                </ul>

                <div class="clearfix"></div>

              </li>


              <li class="dropdown">

                <a class="active dropdown-toggle" data-target="#" data-toggle="dropdown" href="#">Hakkımızda  </a>

                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url();?>Ogrenci/about">Misyon ve Vizyon</a></li>

                </ul>

                <div class="clearfix"></div>

              </li>
              

              <li><a href="<?php echo base_url();?>Ogrenci/contactfunc" title="">İletişim</a></li>

             

           </ul>

         </div>

       </div>

       <!-- End Menu --> 
       
     </div>
   </div>
   <!-- Bannber -->
   <div class="row-fluid">
    <div class="span12">
      <section class="pic-cat">
        <img width="1900" height="200" alt="" src="<?php echo base_url();?>img/imgdemo/ust.png">
      </section>
    </div>
</div>
  <!-- Banner -->
</header>
<!-- END HEADER -->

<!-- BEGIN CONTENT -->
<div class="main-content">
  <div class="properties">
    <div class="container">
      <div class="grid_full_width gird_sidebar">
        <div class="row">
        
		
         <!-- Main content -->
         <div class="span8">
           <!-- Property detail -->
           <div class="property_detail">
            <section class="slider-detail">
              <div id="pic-detail" class="flexslider">
                <ul class="slides">
                  <li>
                    <a class="detailbox" href="<?php echo base_url();?>img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="<?php echo base_url();?><?php echo  $rs->resim1 ; ?>" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="<?php echo base_url();?><?php echo  $rs->resim2 ; ?>" /></a>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="img/imgdemo/620x388.gif" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                  <li>
                    <a class="detailbox" href="" title="1524A consectetur purus sit amet fermentum."><img alt=""  width="620" height="388" src="img/imgdemo/620x388.gif" /></a>
                  </li>
                </ul>
              </div>
              <div id="pic-control" class="flexslider">
                <ul class="slides">
                  <li>
                    <img alt="" src=" <?php echo base_url();?><?php echo  $rs->resim1 ; ?>" />
                  </li>
                  <li>
                    <img alt="" src="<?php echo base_url();?><?php echo  $rs->resim2 ; ?>" />
                  </li>
                  <li>
                    <img alt="" src="img/imgdemo/620x388.gif" />
                  </li>
                  <li>
                    <img alt="" src="img/imgdemo/620x388.gif" />
                  </li>
                  <li>
                    <img alt="" src="img/imgdemo/620x388.gif" />
                  </li>
                  <li>
                    <img alt="" src="img/imgdemo/620x388.gif" />
                  </li>
                  <li>
                    <img alt="" src="img/imgdemo/620x388.gif" />
                  </li>
                  <li>
                    <img alt="" src="img/imgdemo/620x388.gif" />
                  </li>
                  <li>
                    <img alt="" src="img/imgdemo/620x388.gif" />
                  </li>
                  <li>
                    <img alt="" src="img/imgdemo/620x388.gif" />
                  </li>
                </ul>
              </div>
            </section>
            <div class="infotext-detail">
			
              <h3><?php echo $rs->baslik; ?> </h3>
              <span class="price"><?php echo $rs->fiyat; ?>TL</span>
              <div class="row">
                <div class="span260px">
                  <ul class="title-info">
                    <li>Oda Sayısı: <span> 4</span> </li>
                    <li>Kat: <span><?php echo $rs->kat; ?></span></li>
                    <li>Isınma: <span><?php echo $rs->isinma; ?></span></li>
                    <li>Tipi: <span><?php echo $rs->tip; ?></span></li>
                  </ul>
                </div>
                <div class="span260px pull-right">
                  <ul class="title-info">
                    <li>Bina Yaşı: <span> 7</span> </li>
                    <li> Garaj <span> 2</span></li>
                  </ul>
                </div>
              </div>
              <div class="excerpt">
                <p><?php echo $rs->detay; ?></p>
                <br/>
               
              </div>
             
            </div>
          </div>
          <!-- End Property -->
        </div>
        <!-- End Main content -->  
        
        
        <!-- Sidebar left  -->
        <div class="span4">
          <div class="box-siderbar-container">
            <!-- sidebar-box map-box -->
            <div class="sidebar-box map-box">
              <h3>Haritada</h3>
              <iframe width="260" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=34.669359,-95.712891&amp;spn=40.915036,86.572266&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- End sidebar-box map-box -->
            
            <!-- sidebar-box our-box -->
            <div class="sidebar-box our-box">
              <h3>Satıcı</h3>
              <ul>
                <li>
                  <div class="our-border clearfix">
                    <div class="our-img"><img alt="" height="90" width="90" src="img/imgdemo/90x90.gif"></div>
                    <div class="our-info">
                      <h4>Ad</h4>
                      <h5>Soyad</h5>
                      <span>Tel. </span>012.666.999 <br/>
                      <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">mailiniz@gmail.com</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End sidebar-box our-box -->
            
            
            <!-- sidebar-box product_list_wg -->
            <div class="sidebar-box">
              <h3>Diğer İlanlar</h3>
              <ul class="product_list_wg">
                <li>
                  <div class="clearfix">
                    <a title="" href="#">
                      <img width="90" height="54" alt="" class="thumbnail_pic" src="img/imgdemo/90x54.gif">
                      Denizli Anafartalar Mh. 2128 SK
                    </a> 
                    <div class="amount">2.000 TL</div>
                  </div>
                </li>
                <li>
                  <div class="clearfix">
                    <a title="" href="#">
                      <img width="90" height="54" alt="" class="thumbnail_pic" src="img/imgdemo/90x54.gif">
                      Denizli Anafartalar Mh. 2128 SK
                    </a> 
                    <div class="amount">2.000 TL</div>
                  </div>
                </li>
                <li>
                  <div class="clearfix">
                    <a title="" href="#">
                      <img width="90" height="54" alt="" class="thumbnail_pic" src="img/imgdemo/90x54.gif">
                      Denizli Anafartalar Mh. 2128 SK
                    </a> 
                    <div class="amount">2.000 TL</div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End sidebar-box product_list_wg -->
            
            <!-- sidebar-box searchbox -->
            <div class="sidebar-box searchbox">
              <div class="row-fluid">
                <div class="span12">
                  <div class="find">
                    <div class="tabber">
                      <div class="tabbertab">
                        <h2>Satılık</h2>
                        <form>
                          <div class="span12">
                            <input type="text" class="keywordfind" placeholder="İlan Arayın">
                          </div>
                          <div class="span12">
                            <div class="row-fluid">
                              <div class="span6">
                                <select>
                                  <option>Minumum Fiyat</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                                </select>
                              </div>
                              <div class="span6">
                                <select>
                                 <option>Maksimum Fiyat</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                      <option>358.000 TL</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="span12">
                            <div class="row-fluid">
                              <div class="span6">
                                <select>
                                  <option>Oda Sayısı</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4+</option>
                                </select>
                              </div>
                              <div class="span6">
                                <select>
                                  <option>Kat</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4+</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="span12">
                            <label>
                              <select>
                                <option>Ev Tipi</option>
                    <option>Apartman</option>
                    <option>Müstakil Ev</option>
                    <option>Residence</option>
                    <option>Çiftlik Evi</option>
                    <option>Yazlık</option>
                    <option>Villa</option>
                              </select>
                            </label>
                            <label>	
                              <button class="search" type="button">Ara</button>
                            </label>	
                          </div>
                        </form>
                      </div>
                      <div class="tabbertab">
                        <h2>Kiralık</h2>
                        <form>
                          <div class="span12">
                            <input type="text" class="keywordfind" placeholder="İlan Arayın">
                          </div>
                          <div class="span12">
                            <div class="row-fluid">
                              <div class="span6">
                                <select>
                                  <option>Minumum Fiyat</option>
                                  <option>1.000 TL</option>
                                  <option>1.000 TL</option>
                                  <option>1.000 TL</option>
                                  <option>Hepsi</option>
                                </select>
                              </div>
                              <div class="span6">
                                <select>
                                  <option>Maksimum Fiyat</option>
                                  <option>1.000 TL</option>
                                  <option>1.000 TL</option>
                                  <option>1.000 TL</option>
                                  <option>Hepsi</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="span12">
                            <div class="row-fluid">
                              <div class="span6">
                                <select>
                                  <option>Oda Sayısı</option>
                                  <option>Oda Sayısı</option>
                                  <option>Oda Sayısı</option>
                                  <option>Oda Sayısı</option>
                                  <option>Oda Sayısı</option>
                                </select>
                              </div>
                              <div class="span6">
                                <select>
                                  <option>Kat</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="span12">
                            <label>
                              <select>
                                <option>Ev Tipi</option>
                    <option>Apartman</option>
                    <option>Müstakil Ev</option>
                    <option>Residence</option>
                    <option>Çiftlik Evi</option>
                    <option>Yazlık</option>
                    <option>Villa</option>
                              </select>
                            </label>
                            <label>	
                              <button class="search" type="button">Ara</button>
                            </label>	
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End sidebar-box searchbox -->
            
          </div>
        </div>
        <!-- End Sidebar left  -->
        
      </div>
    </div>
  </div>
</div>
</div>
<!-- END CONTENT -->

<!-- BEGIN FOOTER -->
<!-- FOOTER -->
<footer>
  <div class="footer-container">
    <div class="container">
      <!-- Footer box -->
      <div class="footer-top">
        <div class="row">
          <div class="span4">
            <h3>İletişim Detayları</h3>
            <p>Denizli Anafartalar Mh. 2128 SK </p>
            <span>Tel: 012.666.999 </span><br/><span>Fax: 012.666.999 </span><br/><span>E-Mail: <a href="mailto:someone@example.com?Subject=Hello%20again">Pixelgeeklab@gmail.com</a>  </span><br/>
          </div>
          <div class="span4">
            <h3>Hakkımızda</h3>
            <ul>
              2000 yılında Aksoy Group bünyesinde kurulan emlak.com, yenilikçi ürün ve hizmet uygulamaları ile internet alanındaki standartların belirleyicisi olmaya devam ediyor.
            </ul>
          </div>
          <div class="span4">
            <h3>Haberdar Olun</h3>
            <p>Yeni eklenen ilanlardan haberdar olmak için mail adresinizi bırakabilirsiniz	</p>
            <div class="newletter">
              <form>
                <input type="text" class="textnewletter" placeholder="E-mail adresinizi girin...">
                <button type="submit" class="buttonnewletter">Gönder</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer box -->
      <div class="footer-bottom">
        <div class="row">
          <div class="span6">
            <p>Copyright © 2013 PGL RealEstast. Designed by <a href="#" title="">PixelGeekLab</a><br/>All rights reserved.</p>
          </div>
          <div class="span6">
            <div class="social pull-right">
              <ul>
                <li><a class="facebook" title="" href="#"> Facebook </a></li>
                <li><a class="twitter" title="" href="#"> twitter </a></li>
                <li><a class="googplus" title="" href="#"> googplus </a></li>
                <li><a class="pinterest" title="" href="#"> pinterest </a></li>
                <li><a class="email" title="" href="#"> Email </a></li>
                <li><a class="feed" title="" href="#"> Feed </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<div id='bttop'>BACK TO TOP</div>
<!-- END FOOTER -->
<div id='bttop'>BACK TO TOP</div>

<!-- Always latest version of jQuery-->
<script src="<?php echo base_url();?>js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- Some scripts that are used in almost every page -->
<script src="<?php echo base_url();?>js/tinynav/tinynav.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tabber/tabber.js"></script>
<!-- Load template main javascript file -->
<script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>

<!-- ===================================================== -->
<!-- ================ Property-detail page only scripts ============ -->
<script src="<?php echo base_url();?>js/flexflider/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url();?>js/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
jQuery(function($){
  $('#pic-control').flexslider({
    animation: "slide",
    controlNav: false,

    animationLoop: false,
    slideshow: false,
    itemWidth: 55,
    itemMargin: 10,
    maxItems: 7,
    asNavFor: '#pic-detail'
  });

  $('#pic-detail').flexslider({
    controlNav: false,
    directionNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#pic-control",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });

  $(".detailbox").colorbox({rel:'detailbox'});
});
/* ]]> */
</script>
</body>
</html>

<?php } } ?>
		