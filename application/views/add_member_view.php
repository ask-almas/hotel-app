<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Booking</title>
    
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
            
            <h3>Fill this form.</h3>
            
            <?php echo form_open('pages/add_member', 'id="reservation-form"')?>
            <form action="" id="reservation-form">
                
                <p> SSN:&nbsp;&nbsp; <input type="fssn" name="ssn" value="" maxlength="9" > &nbsp;&nbsp;
                Age:&nbsp;&nbsp; <input type="text" name="age" value="" maxlength="5" ></p>
                
                <p>Relation:&nbsp;&nbsp; <input type="text" name="rel" value="" maxlength="15"> &nbsp;&nbsp;
                
                Name:&nbsp;&nbsp; <input type="text" name="name" value="" maxlength="15"> 
                
                </p>
                
                Next Step   <select class="select2" name="step">
                            <option value="1" >Finish</option>
                            <option value="2" >Add another</option>
                            </select>
            
                <button type="submit">Go</button>
            </form>
            
		</div>
	</div>
<!-- footer -->
	<div id="footer">
	</div>
</body>
</html>