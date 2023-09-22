<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The New Pike Admin - Free Bootstrap 5 Admin Template</title>
	<meta name="description" content="Free Bootstrap 5.3.2 Admin Theme | Jeff Admin">
	<meta name="author" content="Jeff Web Development - https://www.vzsfoto.hu">
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

	<!-- FORM -->
	<link href="assets/plugins/select2-4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css" />		
	<link href="assets/css/select2-bootstrap-5-theme.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/summernote-0.8.18-dist/summernote-lite.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/plugins/tempus-dominus-6.0.0/dist/css/tempus-dominus.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />	
	<link href="/assets/plugins/jquery-toastmessage-plugin-master/src/main/resources/css/jquery.toastmessage.css" rel="stylesheet" type="text/css" />	

	<!-- /.FORM -->

	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />		

	<!-- BEGIN CSS for this page -->

	<!-- END CSS for this page -->
				
</head>

<body class="adminbody" style="background: #E7E2D8;">

<div id="main">

	<?php include_once("elements/header.php") ?>

	<?php include_once("elements/leftSidebar.php") ?>
	

    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">
				<?php include_once("elements/breadcrumbBar.php") ?>
				<?php include_once("elements/searchBar.php") ?>
				
<?php
	$m = $_GET['m'] ?? 'index';
	
	switch($m){
		case "index": 
			include_once("index-content.php");
			break;
		case "form": 
			include_once("form-content.php");
			break;
		case "view": 
			include_once("view-content.php");
			break;

		default: 
			include_once("index-content.php");
	}
?>
	
            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<?php include_once("elements/footer.php") ?>

</div>
<!-- END main -->

<!--script src="assets/js/modernizr.min.js"></script-->
<script src="assets/js/jquery.min.js"></script>
<!--script src="assets/js/moment.min.js"></script-->
<script src="assets/js/moment-with-locales.js"></script>
<!--script src="assets/plugins/moment/min/moment-with-locales.min.js"></script-->
<script src="assets/js/bootstrap.bundle.min.js"></script>


<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<!--script src="assets/js/jquery.blockUI.js"></script-->
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- FORM -->
<script src="assets/plugins/select2-4.1.0-rc.0/dist/js/select2.full.min.js"></script>
<script src="assets/plugins/select2-4.1.0-rc.0/dist/js/i18n/hu.js"></script>
<script src="assets/plugins/summernote-0.8.18-dist/summernote-lite.min.js"></script>
<script src="assets/plugins/summernote-0.8.18-dist/lang/summernote-hu-HU.js"></script>
<script src="assets/plugins/bootstrap-input-spinner-bs-5/src/bootstrap-input-spinner.js"></script>
<script src="/assets/js/popper.js"></script>	
<script src="/assets/plugins/tempus-dominus-6.0.0/dist/js/tempus-dominus.min.js"></script>
<script src="/assets/plugins/jReadMore-master/dist/read-more.min.js"></script>
<script src="/assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="/assets/plugins/jquery-toastmessage-plugin-master/src/main/javascript/jquery.toastmessage.js"></script>

<!-- /.FORM -->

<!-- App js -->
<script src="assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
<script>

	Swal.fire({
	  title: 'Error!',
	  text: 'Do you want to continue',
	  icon: 'error',
	  confirmButtonText: 'Cool'
	})


	$(function () {
		$('[data-bs-toggle="tooltip"]').tooltip()
		
		// ToastMessage
		// https://github.com/akquinet/jquery-toastmessage-plugin
		$().toastmessage('showNoticeToast', 'some message here');
		
		$().toastmessage('showToast', {
			text     : 'Hello World',
			stayTime : 5000,
			//sticky   : true,
			position : 'top-right',
			type     : 'success',		// notice, success, warning, error
			close    : function () {
				//console.log("toast is closed ...");
			}
		});	
		
		
		// Search block
		$('#collapseSearch').on('shown.bs.collapse', function () {
			$("#search").focus();
		})		
		
		// --------------------- FORM --------------------------
		
		// Select2:
		$('.select2').select2({
			theme: 'bootstrap-5',
			placeholder: 'Kérem válasszon...'
		});		
		
		$('.select-multi').select2({	// A multinál nem jó a bootstrap css, ezért marad az alap.
			//theme: 'bootstrap',	// Itt nem kell a stílus, mert eddig nincs jó az 5-öshöz...
			placeholder: 'Kérem válasszon...'
		});		

		$('.select2').on('select2:open', function (e) {
			//console.log('Open');
			//$('.select2-container .select2-selection--multiple').css('height', 75);
		});		

		// Summernote:
		// https://summernote.org/getting-started/#installation
		$('#summernote').summernote({
			placeholder: 'Ide írhatja a megjegyzést...',
			tabsize: 2,
			height: 400,
			lang: 'hu-HU' // default: 'en-US'
		});

		// Spinner
		// file:///D:/www/My/www/PikeAdmin/src/assets/plugins/bootstrap-input-spinner-bs-5/index.html
		$("input[type='number']").inputSpinner()


		// Show More text
		$('.read-more').readMore({
			readMoreHeight: 70,
			readMoreText: "több...",
			readLessText: "...kevesebb"
		});
		
		// ------------------- /.FORM --------------------------
		$(".card-body").animate({opacity: 1}, 500);
	});


	// DateTime picker
	const datetimepicker = new tempusDominus.TempusDominus(document.getElementById('datetimepicker'), {
		localization: { locale: 'hu', format: 'L LTS', dayViewHeaderFormat: { month: 'long', year: 'numeric' }},
		display: {
			//dayViewHeaderFormat: { month: 'long', year: '4-digit' },	
			icons: {type: 'icons', time: 'fa fa-clock-o', date: 'fa fa-calendar', up: 'fa fa-arrow-up', down: 'fa fa-arrow-down', previous: 'fa fa-chevron-left', next: 'fa fa-chevron-right', today: 'fa fa-calendar-check-o', clear: 'fa fa-times', close: 'fa fa-check'},
			sideBySide: true,
	        buttons: { today: true, clear: true, close: true},
			components: {calendar: true, date: true, month: true, year: true, decades: true, clock: true, hours: true, minutes: true, seconds: true, useTwentyfourHour: true},			
		},
	});
	datetimepicker.dates.setValue(datetimepicker.dates.parseInput(new Date(moment('2013-02-17 21:23:42', 'YYYY-MM-DD HH:mm:ss'))), datetimepicker.dates.lastPickedIndexs);



	// Date picker
	const datepicker = new tempusDominus.TempusDominus(document.getElementById('datepicker'), {
		localization: {locale: 'hu', format: 'L', dayViewHeaderFormat: { month: 'long', year: 'numeric' } },
		display: {
			icons: {type: 'icons', time: 'fa fa-clock-o', date: 'fa fa-calendar', up: 'fa fa-arrow-up', down: 'fa fa-arrow-down', previous: 'fa fa-chevron-left', next: 'fa fa-chevron-right', today: 'fa fa-calendar-check-o', clear: 'fa fa-times', close: 'fa fa-check'},
			buttons: {today: true, clear: true,close: true},
			components: { calendar: true, date: true, month: true, year: true, decades: true, clock: false, hours: false, minutes: false, seconds: false, useTwentyfourHour: undefined},			
		},
	});
	datepicker.dates.setValue(datepicker.dates.parseInput(new Date(moment('2019-08-27', 'YYYY-MM-DD'))), datepicker.dates.lastPickedIndexs);



	// Time picker
	const timepicker = new tempusDominus.TempusDominus(document.getElementById('timepicker'), {
		localization: {locale: 'hu', format: 'LTS'},
		display: {
			//viewMode: 'clock',
			icons: { type: 'icons', time: 'fa fa-clock-o', date: 'fa fa-calendar', up: 'fa fa-arrow-up', down: 'fa fa-arrow-down', previous: 'fa fa-chevron-left', next: 'fa fa-chevron-right', today: 'fa fa-clock-o', clear: 'fa fa-times', close: 'fa fa-check' },
			buttons: {today: true, clear: true, close: true},
			components: {decades: false, year: false, month: false, date: false, hours: true, minutes: true, seconds: true},			
		},		
	});
	//const parsedDate = timepicker.dates.parseInput(new Date(0, 0, 0, 12, 23, 45));
	let time = '14:37:49';
	timepicker.dates.setValue(timepicker.dates.parseInput(new Date(moment('2000-01-01 ' + time, 'YYYY-MM-DD HH:mm:ss'))), timepicker.dates.lastPickedIndexs);


</script>
<!-- END Java Script for this page -->


</body>
</html>