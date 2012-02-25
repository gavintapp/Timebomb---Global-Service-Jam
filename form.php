<?php

/* 
File: form.php
Author: Gavin Tapp
Date: 25 Feb 2012
Desc: The main form and related functions used through the app

*/


$form = <<<EOD



<div class="demo-description" style="display: none; ">
<p>The datepicker is tied to a standard form input field.  Focus on the input (click, or use the tab key) to open an interactive calendar in a small overlay.  Choose a date, click elsewhere on the page (blur the input), or hit the Esc key to close. If a date is chosen, feedback is shown as the input's value.</p>
</div><!-- End demo-description -->

<form action="{$_SERVER['PHP_SELF']}" method="get"> 
		<label for="secret">My secret is?</label> 
		<textarea rows="4" cols="50" name="secret" placeholder="Luke, I am your father." required ></textarea>
		
		<label for="email">Send to:</label> 
		<input type="email" name="email" required placeholder="luke@rebels.com" />

		<label for="date">on this date:</label> 
		<input type="text" name="date"  />

		<label for="warn">Do you want to let the receiver know there is a secret?:</label> 
		<input type="checkbox" name="warn" />

		<label for="remind">Remind me 30 days before the release date? (handy if you might change your mind or need a postponement)</label> 
		<input type="checkbox" name="remind" />
		
		<label for="website">Public URL for this secret? (only works after release date):</label> 
		<input type="url" name="website" required readonly value="http://www.example.com" />
	
		<input type="submit" value="Hide your treasure!" />
			</form>
			
			
			
	
EOD;

?>