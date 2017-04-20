<div id="basic-contact-form_pres-2017_wrapper" class="basic-contact-form_pres-2017">
    <form id="basic-contact-form_pres-2017" class="brand-form brand-form_label_above clearfix" action="/thank-you/generic.php" method="POST">
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
            <input id="input-email" class="" name="email" type="email" placeholder="your.name@stonybrook.edu" required="required" value="<?php echo htmlspecialchars($_POST['email']); ?>"  />
        </div>
        <div class="brand-form_container one-quarter">
            <label class="brand-form_control-label" for="date">Date Requested</label>
            <select id="input-date" class="" name="date" placeholder="Date Requested" required="required">
                <option value="<?php echo htmlspecialchars($_POST['date']); ?>"><?php echo htmlspecialchars($_POST['date']); ?></option>
            </select>
        </div>
        <div class="brand-form_container one-quarter">
            <label class="brand-form_control-label" for="topic">Department</label>
            <input id="input-topic" class="" name="topic" type="text" required="required" value="<?php echo htmlspecialchars($_POST['topic']); ?>"  />
        </div>
        <div class="brand-form_container one-fifth hidden" style="display: none !important">
            <label class="brand-form_control-label" for="last-name">Source URL</label>
            <input id="input-source-url" class="" name="source-url" type="text" placeholder="URL" value="<?php echo htmlspecialchars($_POST['source-url']); ?>" />
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