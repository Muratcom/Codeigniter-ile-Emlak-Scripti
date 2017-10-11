<?php
    require_once('auth.php');
?>

<?php 
				  if($auth->vip==1){ 
				  
				  ?>
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Anasayfa </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Gayrimenkuller </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="gayrimenkuller.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Kendi Ýlanlarým
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="ilan-ekle.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Gayrimenkul Ekle
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="galeri-ekle.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Galeriye Resim Ekle
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>
					
					
					
				
					

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
				  <?php } else { ?>
				  <div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="">
						<a href="index.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Anasayfa </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Gayrimenkuller </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="gayrimenkuller.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Kendi Ýlanlarým
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="ilan-ekle.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Gayrimenkul Ekle
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="galeri-ekle.php">
									<i class="menu-icon fa fa-caret-right"></i>
									Galeriye Resim Ekle
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>
					
					

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>
				  <?php } ?>