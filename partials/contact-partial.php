	<section class="section  contact" id="contact-section">
		<div class="contact-top"></div>
		<div class="container">
			<h2 class="section-title">Let's Chat...</h2>
			<form role="form" name="contact-form" class="validate-form" id="contactForm" method="POST" action="#">
				<div id="errorContainer">
				<p>Please correct the following error(s) before a message can be sent:</p>
					<ul id="errors"></ul>
				</div>
				<fieldset>
					<label for="fullname">Full Name<span class="required">*</span></label>
					<input 
						type="text" 
						class="fullname"
						id="fullname"
						name="fullname"
						placeholder="Full name" 
						required />
					<label for="email">Email<span class="required">*</span></label>
					<input 
						type="email" 
						id="email" 
						class="email" 
						name="email" 
						placeholder="Email" 
						required  />
					<label for="message">Message<span class="required">*</span></label>
					<textarea 
						class="message" 
						id="message" 
						name="message" 
						placeholder="Your message..."
						cols="30" 
						rows="5" 
						required></textarea>

					<input type="submit" name="Send" id="sendBtn" value="Send" />
				</fieldset>
			</form>
		</div>
	</section>