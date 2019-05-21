<div class="indent">
			<h2>Cars</h2>
            
			
            <ul class="list4">
				<li><img alt="" src="<?php echo base_url(); ?>assets/user/images/mercedes.jpg" width="240" ><h6>Mercedes</h6>Price:  50$</li>
				<li><img alt="" src="<?php echo base_url(); ?>assets/user/images/toyota.jpg" width="240"><h6>Toyota</h6>Price:    40$</li>
				<li><img alt="" src="<?php echo base_url(); ?>assets/user/images/bmw.jpg" width="240"><h6>BMW</h6>Price:    30$</li>
			</ul>
            
            <?php echo form_open('pages/search_car', 'id="reservation-form"')?>
            <fieldset>
            <p>    Car type    <select class="select2" name="model">
                            <option value="1" >Mercedes</option>
                            <option value="2" >Toyota</option>
                            <option value="3" >BMW</option>
                            </select> 
                            </p>
                            
                            <button type="submit" >Search Car</button>
            </fieldset>
</div>