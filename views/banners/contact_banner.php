<div id="contact_left">
<h2 class="contact_heading">Contact Larry Finn Photography</h2>

<?php
if(isset($sent) && $sent == true)
{
echo "";
}else{
?>
  
  <?php if(isset($warning)){echo "$message";} ?>
  <form method="post" action="contact_script.php" name="contact">
    
    <label>* Name:</label><br />
			<div class="form_field">
    		<input name="name" type="text" value="<?php echo $name; ?>" size="35"/><br />
			</div>
			<div class="error">
				<!--ERRORMSG:name-->
			</div>
    <label>* Email:</label><br />
			<div class="form_field">
      	<input name="email_address" type="text" value="<?php echo $email_address; ?>" size="35"/><br />
			</div>
			<div class="error">
				<!--ERRORMSG:email_address-->
			</div>
    <label>* Telephone: (555-555-5555)</label><br />
			<div class="form_field">
      	<input name="tel" type="text" value="<?php echo $tel; ?>" size="35"/><br />
			</div>
			<div class="error">
				<!--ERRORMSG:tel-->
			</div>
			<div class="form_field_select">
    <label>Select One:</label><br /> 
      	<select name="select">
        	<option>General Inquiry</option>
        	<option>Commercial Marketing</option>
        	<option>Portraits/Headshots</option>
        	<option>Promotional Events</option>
					<option>Weddings</option>
					<option>Engagements</option>
					<option>Real Estate</option>
					<option>Fine Art Prints</option>
					<option>Video Services</option>
      	</select>
			</div>
			<div class="error"></div>
    <label> Additional Comments:</label><br />
			<div class="form_field_text">
    	<textarea name="comments" cols="35" rows="6"><?php echo $comments; ?></textarea>
			</div>
<div class="clear"></div>
			<div class="form_field_button">
      <input name="submit" type="submit" value="Submit" class="btn" />
			</div>
  </form>
	<?php } ?>
</div>
<div id="contact_right">
	<img src="public/images/contact_image.png">
</div>
