<head>
  <meta charset="utf-8">
  <title>
  <?php foreach($veri6 as $rs6) {	?>	
			<?php echo $rs6->bilgi ; ?>
            <?php } ?>
	</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="<?php foreach($veri4 as $rs4) {	?>	
			<?php echo $rs4->bilgi ; ?>,
            <?php } ?>">
			
			
  <meta name="description" content="<?php foreach($veri5 as $rs5)
{	?>	
             <?php echo $rs5->bilgi ; ?> 
             
            <?php } ?>">
  <meta name="author" content="">
  <!-- Your styles -->
  <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/flexslider/flexslider.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/tabber/tabber.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/styles.css" rel="stylesheet" media="screen">
  <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet" media="screen">
  <link href='<?php echo base_url();?>http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='<?php echo base_url();?>http://fonts.googleapis.com/css?family=Raleway:400,700,100,200,300' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim, for Ie6-8 support of HTML5 elements -->
    <!--[if lt Ie 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- styles for Ie -->
  </head>