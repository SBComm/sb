<article>
    <section class="clearfix site-carousel inside-header academics-img white-background">
        <div class="border-box">
            <div class="carousel-wrapper">
                <div id="the-carousel-1" class="owl-carousel carousel-style-03">
                    <div class="item">
                        <div class="carousel-image clearfix" data-image="01"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clearfix inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <header class="section-header clearfix">
                <?php
                    $selected_sub_nav = 6;
                    $file = "undergraduate-admissions/academics/academics-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Faculty and Research</h3>
            <div class="content">
                <p>Our leading scholars and researchers are also inspiring teachers and they have the awards to prove it. We're committed to putting our best teachers into our undergraduate classes.</p>
                <p>Explore and discover new knowledge. Let your curiosity lead you to a fabulous research internship with Stony Brook faculty either on campus, at Stony Brook University Hospital, at our Southampton Marine Station or at nearby Brookhaven National Laboratory, a federal energy laboratory co-managed by Stony Brook.</p>
                <p>We're one of only ten research universities nationwide to receive a Recognition Award for the Integration of Research and Education (RAIRE) from the National Science Foundation (NSF).</p>
                <h4>Undergraduate Research &amp; Creative Activities (URECA)</h4>
                <p>Through <a class="external-link" href="http://www.stonybrook.edu/ureca/" target="_blank">URECA</a></strong>, Stony Brook undergraduates are introduced to the world of research through introductory research-oriented courses, independent supervised research projects, and support services on writing abstracts, giving presentations, and finding appropriate research mentors. Our URECA program involves students from every discipline and culminates each year in a celebration of achievements.</p>
            </div>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content col-2">
                <h4>Brookhaven National Laboratory</h4>
                <p>The University co-manages <a class="external-link" href="http://www.bnl.gov/world/" target="_blank">Brookhaven National Laboratory</a></strong>, joining an elite group of universities–including Berkeley, University of Chicago, Cornell, MIT, and Princeton–that run federal laboratories. BNL houses large, state-of-the-art facilities such as the Relativistic Heavy Ion Collider (RHIC), the National Synchrotron Light Source (NSLS), and the Center for Functional Nanomaterials.</p>
                <p>Brookhaven National Laboratory offers outstanding research opportunities for students in physics, material sciences, environmental studies, biology, chemistry, engineering and other areas. BNL offers qualified students:</p>
                <ul class="default-bullets">
                    <li>research opportunities with the world’s top scientists</li>
                    <li>internships during the academic year and the summer</li>
                    <li>shuttle service to BNL from the Stony Brook campus</li>
                    <li>internships for students in the Women in Science and Engineering (WISE) program</li>
                    <li>undergraduate scholarships through the Homeland Scholars and Fellows Program</li>
                    <li>one-week mini-semesters during winter break</li>
                </ul>
            </div>
            <div class="content col-2">
                <p>
                    <div class="videoWrapper">
                        <!-- Copy & Pasted from YouTube -->
                        <iframe width="560" height="349" src="http://www.youtube.com/embed/o9mw75xX2YE?controls=2&showinfo=0&rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                    </div>
                </p>
            </div>
        </div>
        <div class="border-box wrapper clearfix">
            <div class="content">
                <h4>Young Investigators Review</h4>
                <p>The <a class="external-link" href="http://sbyir.com/" target="_blank"><em>Young Investigators Review</em></a></strong> is a student-run science journal dedicated to promoting undergraduate research in the natural and applied sciences at Stony Brook. The journal, published once each semester, is wide in scope, including primary research articles, reviews, opinion essays, science news, interviews with faculty and students, and more.</p>
                <h4>Center of Excellence in Wireless &amp; Information Technology (CEWIT)</h4>
                <p>The <a class="external-link" href="http://www.cewit.org/" target="_blank">Center of Excellence in Wireless &amp; Information Technology (CEWIT)</a></strong> is a next generation research and educational facility. CEWIT has state-of-the-art laboratories for research into wireless and IT technologies, flexible incubator space for the use of private industry and substantial computing support space.</p>
                <h4>Discoveries</h4>
                <p>Our commitment to both research and excellence has led to many ground-breaking discoveries:</p>
                <ul class="default-bullets">
                    <li>Identification and cataloging of 328 distant galaxies</li>
                    <li>The link between smoking and emphysema</li>
                    <li>Development of the drug ReoPro&#174;, recommended for all cardiac angioplasties</li>
                    <li>An ultrasound method to speed up healing of bone fractures</li>
                    <li>Creation of the smallest electronic switch, using just one electron</li>
                    <li>The cause of Lyme disease</li>
                    <li>3-D imaging software for 3-D colonoscopy</li>
                    <li>The golden bamboo lemur, Hapalemur aureus</li>
                    <li>The most primitive fossil bird, linking birds to dinosaurs</li>
                    <li>Construction of the first nuclear magnetic resonance image of a living organism</li>
                    <li>Homo floresiensis, a hobbit-like 17,000 year-old hominid</li>
                    <li>The “Giant Frog From Hell,” Beelzebufo ampinga, a 10-pound ancient frog in Madagascar</li>
                    <li>Design and synthesis of a new class of weakened polioviruses, demonstrating that a synthetic weakened virus can immunize an animal</li>
                    <li>Thermoplastic spray paint made from old plastic bottles</li>
                    <li>Parthenogenesis (virgin birth) in a female hammerhead sharks</li>
                    <li>The first commercially successful bar code reader</li>
                    <li>A new species of mouse lemur Microcebus mittermeieri</li>
                </ul>

            </div>
            <a class="check-button apply-button" href="undergraduate-admissions/apply/international/application-procedures"><span>Apply Now</span></a>
        </div>
    </section>

    <!-- <social-sidebar> -->
        <?php if($social_sidebar!='') {
            $file = "sidebars/".$social_sidebar."-social-sidebar.php";
            include($path . $file);
        } ?>
    <!-- </social-sidebar> -->

</article>