<div>
    <article id="basic-contact-form_admissions-2017_wrapper-outer" class="clearfix second-level-header brand-form-promo-overlay">
        <section class="clearfix page-content">
            <h4>A Brighter Future</h4>
            <p>Take the first step towards an education that will take you far beyond.</p>
            <div id="basic-contact-form_admissions-2017_wrapper">
                <form id="basic-contact-form_admissions-2017" class="brand-form brand-form_label_above clearfix" action="http://www.stonybrook.edu//thank-you/index.php" method="POST">
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

                    <div class="brand-form_container one-quarter brand-form_container_break-left">
                        <label class="brand-form_control-label" for="term">College Entry Term</label>
                        <select id="input-term" class="" name="term" placeholder="Starting Term" required="required" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <option value="Fall_2017">Fall 2017</option>
                            <option value="Spring_2018">Spring 2018</option>
                            <option value="Fall_2018">Fall 2018</option>
                            <option value="Spring_2019">Spring 2019</option>
                            <option value="Fall_2019">Fall 2019</option>
                        </select>
                    </div>
                    <div class="brand-form_container one-quarter">
                        <label class="brand-form_control-label" for="type">Student Type</label>
                        <select id="input-type" class="" name="type" placeholder="Freshman or Transfer" required="required" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <option value="Freshman">Freshman</option>
                            <option value="Transfer">Transfer</option>
                        </select>
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
            <img class="hide-accessible-mobile" src="img/student-life/grads-2000.jpg" />
        </section>
    </article>
</div>