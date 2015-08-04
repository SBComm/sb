<div class="profile clearfix no-pad-wrapper" data-faculty-type="expert">
    <div class="left-col">
        <img src="{IMG_SRC}" />
        <div class="social-list social-list-desktop">
            <div class="hide-on-faculty-experts">
                <a href="{WEBSITE_URL}" target="_blank"><em class="fa fa-laptop website"></em>Website</a>
                <a href="https://twitter.com/{TWITTER_HANDLE}" target="_blank"><em class="fa fa-twitter" target="_blank"></em>Twitter</a>
                <a href="{LINKEDIN_URL}" target="_blank"><em class="fa fa-linkedin" target="_blank"></em>LinkedIn</a>
            </div>
            <a class="hide-on-faculty-directory" href="http://sb.cc.stonybrook.edu/news/media_relations/contact.php" target="_blank"><em class="fa fa-reply" target="_blank"></em>Contact</a>
        </div>
    </div>
    <div class="right-col">
        <div class="summary clearfix">
            <span class="name-1 faculty-name">{PREFIX} {FIRST} {MIDDLE} {LAST} {SUFFIX}</span>
            <span class="summary-1">{PROFESSIONAL_TITLE}</span>
            <span class="summary-1">{DEPARTMENT}</span>
        </div>
        <div class="profile-section contact-info clearfix fac-contact-info-section hide-on-faculty-experts">
            <h3>Contact Information</h3>
            <p><em class="fa fa-institution icon"></em> <span>{ROOM_NUMBER} {BUILDING}</span>
             </p>
            <p><em class="fa fa-map-marker icon"></em> <span>{CITY}, NY {ZIP}-{ZIP_PLUS4}</span>
             </p>
            <p><em class="fa fa-clock-o icon"></em> <span>{OFFICE_HOURS}</span>
             </p>
            <p><em class="fa fa-phone icon"></em> <span>{PHONE}</span>
             </p>
            <p><a class="email-link-hover" href="mailto:{EMAIL}" target="_blank"><em class="fa fa-envelope icon"></em> {EMAIL}</a></p>
        </div>
        <div class="profile-section clearfix topics-expertise-section hide-on-faculty-directory">
            <h3>Expertise</h3>
            <div class="list">
                <a href="faculty-experts/results/?keyword={Topic+Label+1}">{TOPIC_LABEL}</a>
                <a href="faculty-experts/results/?keyword={Topic+Label+2}">{TOPIC_LABEL}</a>
                <a href="faculty-experts/results/?keyword={Topic+Label+1}">{TOPIC_LABEL}</a>
            </div>
        </div>
        <div class="profile-section clearfix">
            <h3>Biography</h3>
            <div class="bio">
                <p>{BIO_TEXT}</p>
                <p><a class="external-link" href="{BIO_URL}" target="_blank">Learn More</a></p>
            </div>
        </div>
        <div class="profile-section clearfix">
            <h3>Education</h3>
            <ul class="education">
                <li>{EDU_BULLET}</li>
                <li>{EDU_BULLET}</li>
                <li>{EDU_BULLET}</li>
            </ul>
        </div>
        <div class="profile-section clearfix fac-research-int-section hide-on-faculty-experts">
            <h3>Research Interests</h3>
            <ul class="education">
                <li>{DESCRIPTION}</li>
                <li>{DESCRIPTION}</li>
                <li>{DESCRIPTION}</li>
            </ul>
        </div>
        <div class="profile-section clearfix fac-research-grants-section hide-on-faculty-experts">
            <h3>Research Grants</h3>
            <table class="tablesaw tablesaw-stack light-grey-table" data-tablesaw-mode="stack" data-tablesaw-sortable border="0" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th data-tablesaw-sortable-col>Award</th>
                        <th data-tablesaw-sortable-col>Start</th>
                        <th data-tablesaw-sortable-col>End</th>
                        <th data-tablesaw-sortable-col>Sponsor</th>
                        <th data-tablesaw-sortable-col>Type</th>
                        <th data-tablesaw-sortable-col>Amount</th>
                        <th data-tablesaw-sortable-col>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{AWARD_TITLE}</td>
                        <td>{START_DATE}</td>
                        <td>{END_DATE}</td>
                        <td>{SPONSOR_NAME}</td>
                        <td>{SPONSOR_TYPE}</td>
                        <td>{BUDGET_TOTAL}</td>
                        <td>{AWARD_STATUS}</td>
                    </tr>
                    <tr>
                        <td>{AWARD_TITLE}</td>
                        <td>{START_DATE}</td>
                        <td>{END_DATE}</td>
                        <td>{SPONSOR_NAME}</td>
                        <td>{SPONSOR_TYPE}</td>
                        <td>{BUDGET_TOTAL}</td>
                        <td>{AWARD_STATUS}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="profile-section clearfix fac-publications-section hide-on-faculty-experts">
            <h3>Publications</h3>
            <ol class="education">
                <li>
                    <span class="author-type">{AUTHOR_TYPE}</span>
                    <span class="publication-type">{PUBLICATION_TYPE}</span>
                    <span class="super-title">{SUPER_TITLE}</span>
                    <span class="sub-title">{SUB_TITLE}</span>
                    <span class="publisher">{PUBLISHER}</span>
                    <span class="publication-status">{PUBLICATION_STATUS}</span>
                    <span class="year">{YEAR}</span>
                    <span class="month">{MONTH}</span>
                    <span class="day">{DAY}</span>
                    <span class="volume">{VOLUME}</span>
                    <span class="issue">{ISSUE}</span>
                    <span class="pages">{PAGES}</span>
                </li>
                <li>
                    <span class="author-type">{AUTHOR_TYPE}</span>
                    <span class="publication-type">{PUBLICATION_TYPE}</span>
                    <span class="super-title">{SUPER_TITLE}</span>
                    <span class="sub-title">{SUB_TITLE}</span>
                    <span class="publisher">{PUBLISHER}</span>
                    <span class="publication-status">{PUBLICATION_STATUS}</span>
                    <span class="year">{YEAR}</span>
                    <span class="month">{MONTH}</span>
                    <span class="day">{DAY}</span>
                    <span class="volume">{VOLUME}</span>
                    <span class="issue">{ISSUE}</span>
                    <span class="pages">{PAGES}</span>
                </li>
            </ol>
        </div>
        <div class="profile-section clearfix fac-courses-section hide-on-faculty-experts">
            <h3>Courses</h3>
            <table class="tablesaw tablesaw-stack light-grey-table" data-tablesaw-mode="stack" data-tablesaw-sortable border="0" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th data-tablesaw-sortable-col>Term</th>
                        <th data-tablesaw-sortable-col>Role</th>
                        <th data-tablesaw-sortable-col>Course ID</th>
                        <th data-tablesaw-sortable-col>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{TERM_SEMESTER} {TERM_YEAR}</td>
                        <td>{INSTRUCTOR_ROLE}</td>
                        <td>{COURSE_ID}</td>
                        <td>{CLASS_DESCRIPTION}</td>
                    </tr>
                    <tr>
                        <td>{TERM_SEMESTER} {TERM_YEAR}</td>
                        <td>{INSTRUCTOR_ROLE}</td>
                        <td>{COURSE_ID}</td>
                        <td>{CLASS_DESCRIPTION}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="profile-section clearfix fac-honors-section hide-on-faculty-experts">
            <h3>Honors</h3>
            <table class="tablesaw tablesaw-stack light-grey-table" data-tablesaw-mode="stack" data-tablesaw-sortable border="0" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th data-tablesaw-sortable-col>Type</th>
                        <th data-tablesaw-sortable-col>Description</th>
                        <th data-tablesaw-sortable-col>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{HONOR_TYPE}</td>
                        <td>{DESCRIPTION}</td>
                        <td>{START_YEAR}</td>
                    </tr>
                    <tr>
                        <td>{HONOR_TYPE}</td>
                        <td>{DESCRIPTION}</td>
                        <td>{START_YEAR}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="profile-section clearfix scholarly-act-section hide-on-faculty-experts">
            <h3>Scholarly Activities</h3>
            <table class="tablesaw tablesaw-stack light-grey-table" data-tablesaw-mode="stack" data-tablesaw-sortable border="0" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th data-tablesaw-sortable-col>Activity</th>
                        <th data-tablesaw-sortable-col>Title</th>
                        <th data-tablesaw-sortable-col>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{ACTIVITY_TYPE}</td>
                        <td>{TITLE}</td>
                        <td>{START_YEAR}-{START_MONTH}-{START_DAY}</td>
                    </tr>
                    <tr>
                        <td>{ACTIVITY_TYPE}</td>
                        <td>{TITLE}</td>
                        <td>{START_YEAR}-{START_MONTH}-{START_DAY}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="profile-section clearfix prof-service-section hide-on-faculty-experts">
            <h3>Professional Service</h3>
            <table class="tablesaw tablesaw-stack light-grey-table" data-tablesaw-mode="stack" data-tablesaw-sortable border="0" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th data-tablesaw-sortable-col>Service</th>
                        <th data-tablesaw-sortable-col>Title</th>
                        <th data-tablesaw-sortable-col>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{SERVICE_TYPE}</td>
                        <td>{DESCRIPTION}</td>
                        <td>{START_YEAR} - {END_YEAR}</td>
                    </tr>
                    <tr>
                        <td>{SERVICE_TYPE}</td>
                        <td>{DESCRIPTION}</td>
                        <td>{START_YEAR} - {END_YEAR}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="profile-section clearfix u-service-section hide-on-faculty-experts">
            <h3>University Service</h3>
            <table class="tablesaw tablesaw-stack light-grey-table" data-tablesaw-mode="stack" data-tablesaw-sortable border="0" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th data-tablesaw-sortable-col>Service</th>
                        <th data-tablesaw-sortable-col>Title</th>
                        <th data-tablesaw-sortable-col>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{SERVICE_TYPE}</td>
                        <td>{DESCRIPTION}</td>
                        <td>{START_YEAR} - {END_YEAR}</td>
                    </tr>
                    <tr>
                        <td>{SERVICE_TYPE}</td>
                        <td>{DESCRIPTION}</td>
                        <td>{START_YEAR} - {END_YEAR}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="profile-section clearfix video-section">
            <h3>Video</h3>
            <div class="video videoWrapper">
                <iframe width="560" height="349" src="http://www.youtube.com/embed/{VIDEO_ID}?controls=2&showinfo=0&rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="profile-section clearfix social-list-mobile hide-on-faculty-experts">
            <h3>Connect On...</h3>
            <div class="social-list">
                <a href="{WEBSITE_URL}" target="_blank" title="View Website"><em class="fa fa-laptop website" target="_blank"></em></a>
                <a href="https://twitter.com/{TWITTER_HANDLE}" target="_blank" title="View Twitter"><em class="fa fa-twitter" target="_blank"></em></a>
                <a href="{LINKEDIN_URL}" target="_blank" title="View LinkedIn"><em class="fa fa-linkedin" target="_blank"></em></a>
            </div>
        </div>
        <div class="profile-section clearfix in-the-media-section">
            <h3>News Highlights</h3>
            <div class="news-wrapper clearfix">
                <a class="clearfix" href="{NEWS_URL}" target="_blank">
                    <span class="date">{NEWS_DATE}</span>
                    <span class="title">{NEWS_TITLE}</span>
                    <span class="read-label fa-arrow-after"><span>Read Article</span></span>
                </a>
                <a class="clearfix" href="{NEWS_URL}" target="_blank">
                    <span class="date">{NEWS_DATE}</span>
                    <span class="title">{NEWS_TITLE}</span>
                    <span class="read-label fa-arrow-after"><span>Read Article</span></span>
                </a>
            </div>
        </div>
    </div>
</div>