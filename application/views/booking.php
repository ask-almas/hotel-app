<div class="wrapper">
    <div class="content">
		<div class="indent">
	
    		<h2>Fill this form</h2>
            <p>If you did not get "Success" message you filled incorrectly</p>
            
            <hr />
            
            <?php echo form_open('pages/register', 'id="reservation-form"')?>
            
            <form action="" id="reservation-form">
            
			<p> SSN:&nbsp;&nbsp; <input type="text" name="ssn" value="" maxlength="9" >  </p>
            
            First Name: &nbsp;<input type="text" name="fname" value="" />
            &nbsp; &nbsp; &nbsp; &nbsp; Last Name:&nbsp; <input type="text" name="lname" value=""/>
            
            <p> Phone Number <input type="text" name="phone" value="" maxlength="10" > &nbsp;&nbsp;    
                        
            E-mail   <input type="text"  name="email" value="" maxlength="25" >         &nbsp;&nbsp;

            Adress     <input type="text"  name="adress" value="" maxlength="25" >
            </p>
            
            <p>
            Status    <select class="select2" name="status">
                            <option value="1" >Single</option>
                            <option value="2" >Family</option>
                            </select>
    
            &nbsp;&nbsp;                
            Room Number     <input type="text"  name="room_number" value="" maxlength="5" >
            </p>
            
            <p>
            Check in Date     <input type="text"  name="checkin" value="2015-11-29" maxlength="10" >&nbsp;&nbsp;
            Check out Date     <input type="text"  name="checkout" value="2015-11-29" maxlength="10" >
            </p>
            
            <button type="submit">Submit</button>
            
            </form>
        </div>
	</div>
</div>