<div id="sidebar">
	<h3 class="sidebar_index_header">Online Service Request</h3>
		<?php
		if(isset($sent) && $sent == true)
		{
		echo "";
		}else{
		?>
		  <?php if(isset($warning)){echo "$message";} ?>
		  <form method="post" action="request_script.php" name="contact">

		    <label>* Name:</label><br />
					<div class="form_field">
		    		<input name="name" type="text" value="<?php echo $name; ?>"/><br />
					</div>
					<div class="error">
						<!--ERRORMSG:name-->
					</div>
		    <label>* Email:</label><br />
					<div class="form_field">
		      	<input name="email_address" type="text" value="<?php echo $email_address; ?>"/><br />
					</div>
					<div class="error">
						<!--ERRORMSG:email_address-->
					</div>
		    <label>* Telephone: (555-555-5555)</label><br />
					<div class="form_field">
		      	<input name="tel" type="text" value="<?php echo $tel; ?>"/><br />
					</div>
					<div class="error">
						<!--ERRORMSG:tel-->
					</div>
					<div class="error"></div>
		    <label>* Service Description:</label><br />
					<div class="form_field_text">
		    	<textarea name="comments" rows="6"><?php echo $comments; ?></textarea>
					</div>
		<div class="clear"></div>
					<div class="form_field_button">
		      <input name="submit" type="submit" value="Submit" class="btn" />
					</div>
					<div class="required">
						* Required Field
					</div>
		  </form>
			<?php } ?>
</div><!--end sidebar-->