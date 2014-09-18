<article>
    <section class="clearfix site-carousel inside-header freshman-criteria white-background">
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
                    $selected_sub_nav = 2;
                    $file = "undergraduate-admissions/international/international-nav.php";
                    include($path . $content . $secLv . $file);
                ?>
            </header>
        </div>
    </section>
    <section class="clearfix inside-content main-inside-content two-col white-background">
        <div class="border-box wrapper clearfix">
            <h3>Admissions Criteria for International Applicants</h3>
            <div class="content">
                <p>Stony Brook is a selective institution located in New York. We will give your application individual attention, weighing many factors to gauge your potential to succeed at Stony Brook.</p>
                <h4>Application Types:</h4>
                <p>You should apply as an international student if you:</p>
                <ul class="default-bullets">
                    <li>Wish to study in the U.S. under a student (F-1) visa. Those with valid B-1 or B-2 visas, must change their status to F-1, or:</li>
                    <li>Currently hold an F-1, F-2, J-1, or J-2 visa.</li>
                </ul>
                <p><a href="undergraduate-admissions/apply/international/visa-classifications/">More visa classifications</a></p>
                <h4>Academic Criteria</h4>
                <ul class="default-bullets">
                    <li>If you are a <strong>freshman applicant</strong>, you must have completed the highest level of secondary education in your country of residence. We look for a strong secondary academic program with courses in math, natural sciences, and English (or, if English is the language of instruction, another language).</li>
                    <li>If you have attended any college or university after graduating from secondary school you must apply as a <strong>transfer student</strong>. Applicants are required to have performed well in a strong academic program, having completed at least 24 credits with a GPA of 3.0 or higher by the time they submit their application. If the applicant has earned fewer than 24 credits, high school transcripts must also be submitted.</li>
                </ul>
                <h4 id="english-proficiency">English Proficiency</h4>
                <p>All applicants must prove their English proficiency. The TOEFL [Test Of English as a Foreign Language], IB TOEFL (Internet-based TOEFL), or IELTS International English Language Testing System) examination, or SAT must be taken by anyone whose native language is not English, even if you have attended high school in the United States. If you are a transfer student and have not completed a college-level writing course at a U.S. college or university (or received a grade below a C in the course), one of the aforementioned exams is required for you as well.</p>
                <table class="light-grey-table full-width">
                    <tr>
                        <th>Exam</th>
                        <th>Minimum Score</th>
                    </tr>
                    <tr>
                        <td>TOEFL (Computer-based)</td>
                        <td>213</td>
                    </tr>
                    <tr>
                        <td>TOEFL (Paper-based)</td>
                        <td>550</td>
                    </tr>
                    <tr>
                        <td>TOEFL (Internet-based)</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>IELTS</td>
                        <td>6.5</td>
                    </tr>
                    <tr>
                        <td>SAT Critical Reading</td>
                        <td>430</td>
                    </tr>
                </table>
                <p>Satisfactory completion of Stony Brook's <a href="http://www.stonybrook.edu/commcms/iec/">Intensive English Center</a> program at the advanced level with a grade of B or better will be accepted in place of a TOEFL score. For more information on Stony Brook's Intensive English Center, please call (631)632-7031.</p>
                <h4>Financial Documentation</h4>
                <p>International applicants must document their ability to meet educational and living expenses for <strong>one-year of study</strong> so that Stony Brook University can issue a Certiﬁcate of Visa Eligibility (I-20). Currently, students must show proof of $40,650 (as of September 2014; subject to change).</p>
                <p>Fore more information on Financial Requirements, see <a href="undergraduate-admissions/apply/international/application-procedures">International Application Procedures and Deadlines</a>.</p>
                <h4>Secondary School Documentation Guide</h4>
                <p><a href="undergraduate-admissions/apply/international/guide">View the valid forms of documentation from each nation</a>.</p>
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