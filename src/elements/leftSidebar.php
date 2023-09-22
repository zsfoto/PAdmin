	<!-- Left Sidebar -->
	<div class="left main-sidebar">	
		<div class="sidebar-inner leftscroll">
			<div id="sidebar-menu">
				<ul>
					<li class="submenu">
						<a href="index.html"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
					</li>

<?php
	$m = $_GET['m'] ?? 'index';

	$activeIndex	= "";
	$activeIndexD	= "";
	$activeForm		= "";
	$activeView		= "";
	
	switch($m){
		case "index": 
			$activeIndex="active";
			break;
		case "form": 
			$activeForm="active";
			break;
		case "view": 
			$activeView="active";
			break;
	}
?>


					<li class="submenu">
						<a href="#" class="active"><i class="fa fa-fw fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li class="<?= $activeIndex ?>"><a href="/">Basic Tables</a></li>
							<!-- li class="<?= $activeIndexD ?>"><a href="/">Data Tables</a></li -->
							<li class="<?= $activeForm ?>"><a href="index.php?m=form">Forms</a></li>
							<li class="<?= $activeView ?>"><a href="index.php?m=view">View</a></li>
						</ul>
					</li>

					<li class="submenu">
						<a href="#"><i class="fa fa-fw fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="tables-basic.html">Basic Tables</a></li>
							<li><a href="tables-datatable.html">Data Tables</a></li>
							<li><a href="forms.html">Forms</a></li>
						</ul>
					</li>
					
				</ul>

				<div class="clearfix"></div>
			</div>        
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- End Sidebar -->
