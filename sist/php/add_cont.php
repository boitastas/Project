<form id="addcont" name="add_frm" action="php/addcont.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Add Contact</legend>
		<div>
			<label for="email">Email: </label>
			<input type="email" id="email" class="config" name="email_txt" placeholder="Insert your e-mail" title="Your Email" required />
		</div>
		<div>
			<label for="name">Name: </label>
			<input type="text" id="name" class="config" name="name_txt" placeholder="Insert your name" title="Your Name" required />
		</div>
		<div>
			<label for="m">Sex: </label>
			<input type="radio" id="m" name="sex_rdo" title="Your Sex" value="M" required />&nbsp;<label for="m">Masculine</label>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" id="f" name="sex_rdo" title="Your Sex" value="F" required />&nbsp;<label for="f">Feminine</label>
		</div>
		<div>
			<label for="birth">Birth Date: </label>
			<input type="date" id="birth" class="config" name="birth_txt" title="Your Birth Date" required />
		</div>
		<div>
			<label for="phone">Phone Number: </label>
			<input type="number" id="phone" class="config" name="phone_txt" placeholder="Insert your phone number" title="Your Phone Number" required />
		</div>
		<div>
			<label for="country">Country: </label>
			<select id="country" class="config" name="country_slc" required />
				<option value="">- - -</option>
				<?php include("select-country.php"); ?>
			</select>
		</div>
		<div>
			<input type="submit" id="send-add" class="config" name="send_btn" value="Add" />
		</div>
		<?php include("php/mensages.php"); ?>
	</fieldset>
</form>