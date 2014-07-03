<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "RO Request";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
//$page_nav["tables"]["sub"]["normal"]["active"] = true;
$page_nav["rorequest"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		//$breadcrumbs["Tables"] = "";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-table fa-fw "></i> Recent RO Request <span>
			</div>
			<!--
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				<ul id="sparks" class="">
					<li class="sparks-info">
						<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
						<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
							1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
						<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
						<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
				</ul>
			</div>
			-->
		</div>

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->
			<div class="row">

				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-editbutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->
						
						<header>
							<span class="widget-icon"> <i class="fa fa-table"></i> </span>
						</header>

						<!-- widget div-->
						<div>

							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->

							</div>
							<!-- end widget edit box -->

							<!-- widget content -->
							<div class="widget-body no-padding">
								<!--
								<div class="alert alert-info no-margin fade in">
									<button class="close" data-dismiss="alert">
										×
									</button>
									<i class="fa-fw fa fa-info"></i>
									Adds zebra-striping to table row within <code>
										&lt;table&gt;</code>
									by adding the <code>
										.table-striped</code>
									with the base class
								</div>
								-->
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Remote Office</th>
											<th>Tgl Mulai Sewa</th>
											<th>Tgl Habis Sewa</th>
											<th colspan="2">Informasi Tambahan</th>
											<th>Action</th>
											<th>Keterangan</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="7">1</td>
											<td rowspan="7">Balikpapan</td>
											<td rowspan="7">01 April 2012</td>
											<td rowspan="7">01 April 2014</td>
											<td>Alamat</td>
											<td>Perumahan Borneo Paradiso cluster 1 Blok 12 kel. Batakan Kota Balikpapan</td>
											<td rowspan="7">
											<?php
											if ($usertype=='sd' || $usertype=='fi') {
												echo '<a href="javascript:void(0);" class="btn btn-primary btn-default">OK</a>';	
											} elseif  ($usertype=='ga' || $usertype=='pu') {
												echo '<br><br><br><br><a href="javascript:void(0);" class="btn btn-primary btn-default">OK</a><br><br><br>';
												echo '<a href="javascript:void(0);" class="btn btn-danger btn-sm">STOP PROCESS</a>';
											} else {
												echo '<a href="javascript:void(0);" class="btn btn-primary btn-default">OK</a><br><br>';
												echo '<label class="input"> <i class="icon-append fa fa-calendar"></i>';
												echo '<input type="text" name="startdate" id="startdate" placeholder="Tgl Mulai Sewa">';
												echo '<br><br>';
												echo '<label class="input"> <i class="icon-append fa fa-calendar"></i>';
												echo '<input type="text" name="startdate" id="startdate" placeholder="Tgl Habis Sewa">';
												echo '</label>';
											}
											?>
											</td>
											<td rowspan="7">
											</td>
										</tr>
										<tr>
											<td>Nama Engineer/PIC</td>
											<td>Satriya Aditya (kontrak), HP. 0856-4991-5546 Kantor (0542) 442269</td>
										</tr>
										<tr>
											<td>Harga Sewa</td>
											<td>38.000.000/2Th</td>
										</tr>
										<tr>
											<td>Spesifikasi</td>
											<td>LT. 128 M2, LB. 45 M2</td>
										</tr>
										<tr>
											<td>Nama Pemilik</td>
											<td>Triana</td>
										</tr>
										<tr>
											<td>No. Tlp Pemilik</td>
											<td>0811-5418-896</td>
										</tr>
										<tr>
											<td>Tempat Tinggal Pemilik</td>
											<td>Bintaro</td>
										</tr>
									</tbody>
								</table>

							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
					<!-- end widget -->

			</div>

			<!-- end row -->

		</section>
		<!-- end widget grid -->

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->

<script>

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>