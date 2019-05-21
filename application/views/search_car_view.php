<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cars</title>
    
    <link href="<?php echo base_url(); ?>assets/user/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/user/css/layout.css" rel="stylesheet" type="text/css" />
    
    <script src="<?php echo base_url(); ?>assets/user/js/maxheight.js" type="text/javascript"></script>
    <!--[if lt IE 7]>
	<link href="<?php echo base_url(); ?>assets/user/css/ie_style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/user/js/ie_png.js"></script>
    <script type="text/javascript">
    ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');
    </script>
    <![endif]-->

</head>
<body id="page1" onload="new ElementMaxHeight();">
<div id="main">
<!-- header -->
	<div id="header">
		<div class="row-1">

		</div>
		<div class="row-2">
	 		<div class="indent">
<!-- header-box begin -->
				<div class="header-box">
					<div class="inner">
						<ul class="nav">
                            <li><?php echo anchor ('pages', 'Home')?></li>
							<li><?php echo anchor ('pages/services', 'Services')?></li>
							<li><?php echo anchor ('pages/cars', 'Cars')?></li>
							<li><?php echo anchor ('pages/booking', 'Booking')?></li>
                            <li><?php echo anchor ('pages/payment', 'Payment')?></li>
                            <li><?php echo anchor ('pages/check_out', 'Check out')?></li>
						</ul>
					</div>
				</div>
<!-- header-box end -->
			</div>
		</div>
	</div><div class="ic">Lovely Flash templates from TemplateMonster!</div>
<!-- content -->
	<div id="content">
                <h3>Available Cars to rent</h3>
                <p>If there is no Plate Number, there is no available cars</p>
                <hr />
                
                <?php foreach($car as $item):?>

                <p> Plate Number:&nbsp;&nbsp;<?=$item['Plate_No']; ?> </p>
                <hr />
                <?php endforeach;?>
                
                <?php echo form_open('pages/rent_car', 'id="reservation-form"')?>
                
                <p>Type Plate Number:&nbsp;&nbsp;
                <input type="text" name="plate" value="" maxlength="10" >&nbsp;&nbsp;
                
                Type SSN:&nbsp;&nbsp;
                <input type="text" name="gssn" value="" maxlength="10" >&nbsp;&nbsp;
                
                Order Date:&nbsp;&nbsp;
                <input type="text" name="order" value="2015-11-29" maxlength="10" >&nbsp;&nbsp;
                
                Return Date:&nbsp;&nbsp;
                <input type="text" name="return" value="2015-11-29" maxlength="10" >&nbsp;&nbsp;
                
                <button type="submit" >Rent</button>
                
                </p>
		</div>
	</div>
<!-- footer -->
	<div id="footer">
	</div>
</div>
</body>
</html>