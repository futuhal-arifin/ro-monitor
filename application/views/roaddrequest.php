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
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-table fa-fw "></i> Add New RO Request <span>
			</div>
		</div>

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->
			<div class="row">

				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-custombutton="false">
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
							<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
							<h2>Add New RO Request </h2>				
							
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
								
								<form id="order-form" class="smart-form" novalidate="novalidate">
									<header>
										General Information
									</header>

									<fieldset>
										<div class="row">
											<section class="col col-8">
												<label class="input"> <i class="icon-append fa fa-building"></i>
													<input type="text" name="name" placeholder="Remote Office">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-4">
												<label class="input"> <i class="icon-append fa fa-calendar"></i>
													<input type="text" name="startdate" id="startdate" placeholder="Expected start date">
												</label>
											</section>
											<section class="col col-4">
												<label class="input"> <i class="icon-append fa fa-calendar"></i>
													<input type="text" name="finishdate" id="finishdate" placeholder="Expected finish date">
												</label>
											</section>
										</div>
									</fieldset>

									<header>
										Additional Information
									</header>

									<fieldset>
										<div class="row">
											<section class="col col-4">
												<label class="input"> <i class="icon-append fa fa-user"></i>
													<input type="tel" name="phone" placeholder="Engineer Name">
												</label>
											</section>
											<section class="col col-4">
												<label class="input"> <i class="icon-append fa fa-dollar"></i>
													<input type="tel" name="phone" placeholder="Rent Fee">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-8">
												<label class="input"> <i class="icon-append fa fa-gear "></i>
													<input type="tel" name="phone" placeholder="Spesification">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-4">
												<label class="input"> <i class="icon-append fa fa-user"></i>
													<input type="tel" name="phone" placeholder="Owner Name">
												</label>
											</section>
											<section class="col col-4">
												<label class="input"> <i class="icon-append fa fa-phone"></i>
													<input type="tel" name="phone" placeholder="Owner Contact" data-mask="(999) 999-9999">
												</label>
											</section>
										</div>
										<div class="row">
											<section class="col col-8">
												<label class="input"> <i class="icon-append fa fa-home"></i>
													<input type="tel" name="phone" placeholder="Owner Resident">
												</label>
											</section>
										</div>

										<section>
											<label class="textarea col-8"> <i class="icon-append fa fa-envelope-square"></i> 										
												<textarea rows="5" name="comment" placeholder="Address"></textarea> 
											</label>
										</section>
									</fieldset>
									<footer>
										<button type="submit" class="btn btn-primary">
											Submit
										</button>
									</footer>
								</form>

							</div>
							<!-- end widget content -->
							
						</div>
						<!-- end widget div -->
						
					</div>

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
		// START AND FINISH DATE
		$('#startdate').datepicker({
			dateFormat : 'dd.mm.yy',
			prevText : '<i class="fa fa-chevron-left"></i>',
			nextText : '<i class="fa fa-chevron-right"></i>',
			onSelect : function(selectedDate) {
				$('#finishdate').datepicker('option', 'minDate', selectedDate);
			}
		});
		
		$('#finishdate').datepicker({
			dateFormat : 'dd.mm.yy',
			prevText : '<i class="fa fa-chevron-left"></i>',
			nextText : '<i class="fa fa-chevron-right"></i>',
			onSelect : function(selectedDate) {
				$('#startdate').datepicker('option', 'maxDate', selectedDate);
			}
		});
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>