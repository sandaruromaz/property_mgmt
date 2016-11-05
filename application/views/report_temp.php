<!DOCTYPE html>
<html lang="en">

<!-- designingmedia.com/html/bistro/index.html -->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- Set meta informations -->
<title> <?php echo $title; ?> </title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Style Files -->

<!--<link href=" <?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href=" <?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href=" <?php echo base_url(); ?>assets/css/fancySelect.css" rel="stylesheet" media="screen, projection" />
	<link href=" <?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all" />
	<link href=" <?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />-->


<!--[if IE 7]>
		<link rel="stylesheet" href=" css/font-awesome-ie7.min.css">
	<![endif]-->

<!-- JS Files -->


<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
	<![endif]-->
<style type="text/css">
.tableClass { background-color: #f1f1f1; border-collapse: collapse; 
font-family: DejaVuSansCondensed; font-size: 9pt; line-height: 1.2;
margin-top: 2pt; margin-bottom: 5pt; width: 100%;
topntail: 0.02cm solid #495b4a; }
.theadClass { font-weight: bold; vertical-align: bottom; }
.tdClass { padding-left: 4mm; vertical-align: top; text-align:left;
padding-right: 4mm; padding-top: 0.5mm; padding-bottom: 0.5mm;
border-top: 1px solid #FFFFFF; font-size:10px; }
.headerRow td, .headerRow th { background-gradient: linear #89908b #f1f1f1 0 2 0 0.2; padding: 1mm; }
.headc { font-size: 8pt; line-height: 0.9; }

.headerhr { margin-top:-2mm; border-style:double }
img.watermark {
 filter:alpha(opacity=75);
 opacity:.3;
 position:fixed;
 margin-top:200px;
 background-position:center;
 background-image:  url(<?php echo base_url(); ?>assets/images/<?php echo $logo ?>) 
}
</style>
</head>
<body >
<?php if (count($main_details)){ 
foreach ($main_details-> result_array() as $row){
?>
<table width="100%" border="0" class="headc">
  <tr>
    <td width="75%" rowspan="4"><img src="<?php echo base_url(); ?>assets/images/<?php echo $logo ?>" width="120" /></td>
    <td width="25%"><?php echo $row['name']; ?>,</td>
  </tr>
  <tr>
    <td><?php echo $row['address']; ?></td>
  </tr>
  <tr>
    <td>Tel :  <?php echo $row['contact1'];?></td>
  </tr>
  <tr>
    <td>E-mail : <?php echo $row['email']; ?></td>
  </tr>
</table>
<?php }}?>
<hr  class="headerhr" color="#000000"/>
<!-- END Header Bar --> 

<!-- Start Site Container -->

<?php $this-> load-> view($main);?>

<!-- End Site Container -->


<!-- End footer -->


<!-- designingmedia.com/html/bistro/index.html-->
</html>