<div id="basic-contact-form_admissions-2017_wrapper" class="basic-contact-form_admissions-2017">
    <form id="basic-contact-form_admissions-2017" class="brand-form brand-form_label_above clearfix" action="thank-you/index.php" method="POST">
        <div class="brand-form_container one-quarter">
            <label class="brand-form_control-label" for="first-name">First Name</label>
            <input id="input-first-name" class="" name="first-name" type="text" placeholder="Wolfie" required="required" value="<?php echo htmlspecialchars($_POST['first-name']); ?>" />
        </div>
        <div class="brand-form_container one-quarter">
            <label class="brand-form_control-label" for="last-name">Last Name</label>
            <input id="input-last-name" class="" name="last-name" type="text" placeholder="Seawolf" required="required" value="<?php echo htmlspecialchars($_POST['last-name']); ?>" />
        </div>
        <div class="brand-form_container one-quarter">
            <label class="brand-form_control-label" for="email">Email Address</label>
            <input id="input-email" class="" name="email" type="email" placeholder="your@email.com" required="required" value="<?php echo htmlspecialchars($_POST['email']); ?>"  />
        </div>
        <div id="recaptcha-location"></div>
        <div class="brand-form_container one-quarter submit-container">
            <button id="form-submit" class="clearfix search-button brand-button" type="submit">SUBMIT</button>
        </div>
    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=reCaptchaOnloadCallback&render=explicit"
        async defer>
    </script>
    <div class="brand-form">
        <div class="brand-form_container whole">
            <span id="input-feedback" class="brand-form_status-message"></span>
        </div>
    </div>
</div>