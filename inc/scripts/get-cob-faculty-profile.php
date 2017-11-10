<?php

	// Return the HTML output for the data table using faculty $record data
	function createTable($record,$node,$vars,$considerDisplay,$label,$tableOptions=NULL) {

		$tablesawMode = $tableOptions['mode'];
		if(!isset($tablesawMode)) {
			$tablesawMode = 'stack';
		}

		$html = '';
		$html .= '<h4>'.$label.'</h4>';
		$html .= '
			<table class="tablesaw tablesaw-stack light-grey-table tablesaw-sortable" data-tablesaw-mode="'.$tablesawMode.'" data-tablesaw-sortable="data-tablesaw-sortable" data-tablesaw-hide-empty="data-tablesaw-hide-empty" border="0" cellpadding="0" cellspacing="0" id="table-'.rand().'">
	            <thead>
	               <tr>
	    ';

    	foreach ($vars as $key => $value) {
    		$html .= '<th data-tablesaw-sortable-col="data-tablesaw-sortable-col">'.$value.'</th>';
    	}

	    $html .= '
	               </tr>
	            </thead>
	            <tbody>
	    ';

	    foreach ($record->$node as $item) {
	    	//check INCLUDE_WEB
	    	if($item->INCLUDE_WEB == 'true' || $considerDisplay!=true) {
	        	$html .= '<tr>';
	        	//print_r($vars);
	        	foreach ($vars as $key => $value) {
					$v = $item->$key;
	        		//print_r($v);
					if ($key == 'WEB_ADDRESS' && $v!='') {
						$v = '<a href="'.$v.'" target="_blank">View <em class="fa fa-angle-right" aria-hidden="true"></em></a>';
					}
	        		$html .= '<td>'.$v.'</td>';
	        	}
	        	$html .= '</tr>';
	        }
        }

		$html .= '
	            </tbody>
	         </table>

	    ';

		return $html;
	}

	// If there are no rows, return false regardless;
	// Otherwise, return true if there is at least one entry for this node that is set to display on web; otherwise, return false
	function includeSection($record,$node,$considerDisplay) {
		if(count($record->$node)==0) {
			$includeSection = false;
		} else if($considerDisplay == true) {
		    $includeSection = false;
		    foreach ($record->$node as $item) {
		    	$count++;
		    	if($item->INCLUDE_WEB == 'true') {
		    		$includeSection = true;
		    		break;
		    	}
		    }
		} else {
			$includeSection = true;
		}
	    return $includeSection;
	}

	// Return the HTML output for the tab and section, using the provided labels
	function outputSection($table,$tabLabels) {
        return '<li class="tab"><span tabindex="0" data-hash="'.$tabLabels['hash'].'" data-mce-mark="1" class="">'.$tabLabels['label'].'</span><section class="courses hide" style="top: 54px;">
                                <div class="clearfix">
                                    '. $table .'
                                </div></section></li>
        ';
	}

	// Define the Source XML files
	$fac_profile_url = 'http://www.stonybrook.edu/far-beyond/_resources/php/GetBusinessProfileXML.php?id='.$_GET["id"];
	$fac_schema_url  = 'http://www.stonybrook.edu/far-beyond/_resources/php/GetBusinessSchemaXML.php';

	// Instantiate the primary HTML output variable
	$fp_html = '';

	// Get the profile information via Digital Measures API
	if (($response_xml_data = file_get_contents($fac_profile_url)) === false) {
	    echo "Error fetching XML\n";
	} else {
	    libxml_use_internal_errors(true);
	    $profile_data = simplexml_load_string($response_xml_data);
	    $profile_data->registerXPathNamespace('dm', 'http://www.digitalmeasures.com/schema/data');
	    $profile_data->registerXPathNamespace('dmd', 'http://www.digitalmeasures.com/schema/data-metadata');
	    if (!$profile_data) {
	        echo "Error loading XML\n";
	        foreach (libxml_get_errors() as $error) {
	            echo "\t", $error->message;
	        }
	    } else {
	        // Get the schema information via Digital Measures API
	        if (($response_xml_data = file_get_contents($fac_schema_url)) === false) {
	            echo "Error fetching XML\n";
	        } else {
	            libxml_use_internal_errors(true);
	            $schema_data = simplexml_load_string($response_xml_data);
	            $schema_data->registerXPathNamespace('dm', 'http://www.digitalmeasures.com/schema/data');
	            $schema_data->registerXPathNamespace('dmd', 'http://www.digitalmeasures.com/schema/data-metadata');
	            if (!$schema_data) {
	                echo "Error loading XML\n";
	                foreach (libxml_get_errors() as $error) {
	                    echo "\t", $error->message;
	                }
	            } else {
	                // Gather data for the profile
	                foreach ($profile_data as $record) {
	                    $dm_username = $record['username'];
	                    $fp_name     = $record->PCI->FNAME.' '.$record->PCI->LNAME;
	                    $fp_email    = $record->PCI->EMAIL;
	                    $fp_building = $record->PCI->BUILDING;
	                    $fp_room     = $record->PCI->ROOMNUM;
	                    $fp_phone_1  = $record->PCI->OPHONE2;
	                    $fp_phone_2  = $record->PCI->OPHONE3;
	                    $fp_photo    = $record->PCI->UPLOAD_PHOTO;
	                    $fp_website  = $record->PCI->WEBSITE;
	                    $fp_dept     = $record->xpath('//dmd:IndexEntry/@text');
	                    
	                    $fp_bio = $record->PROFILE->BIO;
	                    $fp_ti  = $record->PROFILE->TEACHING_INTERESTS;
	                    $fp_ri  = $record->PROFILE->RESEARCH_INTERESTS;

	                    $fp_research_interests_html = '';
	                    if($fp_ri!='' && $fp_ri!='N/A') {
		                    $fp_research_interests_html = '
		                    	<p>
		                        	<span style="font-size: 14pt;">
		                            	<strong>Research Interests:</strong> '.$fp_ri.'
		                        	</span>
		                        </p>
		                    ';
	                    }

	                    $fp_teaching_interests_html = '';
	                    if($fp_ti!='' && $fp_ti!='N/A') {
		                    $fp_teaching_interests_html = '
		                    	<p>
		                        	<span style="font-size: 14pt;">
		                            	<strong>Teaching Interests:</strong> '.$fp_ti.'
		                        	</span>
		                        </p>
		                    ';
	                    }

	                    $fp_website_html = '';
	                    if($fp_website!='' && $fp_website!='N/A') {
		                    $fp_website_html = '
		                    	<p>
		                        	<span style="font-size: 14pt;">
		                            	<strong>Website:</strong> <a href="http://'.$fp_website.'" target="_blank">'.$fp_website.'</a>
		                        	</span>
		                        </p>
		                    ';
	                    }
	                    
	                    $fp_title = $record->ADMIN[0]->RANK;
	                    
	                    // Education
	                    $fp_edu_degree = $record->EDUCATION->DEG;
	                    $fp_edu_school = $record->EDUCATION->SCHOOL;
	                    $fp_edu_major  = $record->EDUCATION->MAJOR;
						
						$fp_education = '';
	                    if($fp_edu_degree!='') {
	                    	$fp_education .= $fp_edu_degree;
	                    	if($fp_edu_degree!='' && $fp_edu_school!='') {
	                    		$fp_education .= ', ';
	                    	}
	                    }
	                    if($fp_edu_school!='') {
	                    	$fp_education .= $fp_edu_school;
	                    }

	                    $fp_education_html = '';
	                    if($fp_education!='') {
		                    $fp_education_html = '
		                    	<p>
		                        	<span style="font-size: 14pt;">
		                            	<strong><br>Education:</strong> '.$fp_education.'
		                        	</span>
		                        </p>
		                    ';
	                    }
	                    
	                    // Office
						$fp_office = '';
	                    if($fp_room!='') {
	                    	$fp_office .= $fp_room;
	                    	if($fp_room!='' && $fp_building!='') {
	                    		$fp_office .= ' ';
	                    	}
	                    }
	                    if($fp_building!='') {
	                    	$fp_office .= $fp_building;
	                    }

	                    $fp_office_html = '';
	                    if($fp_office!='') {
		                    $fp_office_html = '
		                        <span style="font-size: 14pt;">
                                	<strong>Office: &nbsp;</strong>'.$fp_office.'
                                </span><br>
		                    ';
	                    }
	                }
	                
	                //print_r($schema_data);
	                //print_r($profile_data);

	                $fp_html .= '
	                      <div class="clearfix responsive-container">
	                          <div class="whole clearfix section-bkg-container column-layout-container">
	                             <div class="border-box wrapper clearfix">
	                                <div class="sbu-columns border-box whole clearfix no-pad-top no-pad-bottom no-margin-top no-margin-bottom black-text">
	                                   <div class="sbu-columns--column one-third 
	                                    left-col-content ">
	                                      
	                                         <img class="" src="http://www.stonybrook.edu/commcms/business-1/_images/faculty/'.$dm_username.'.jpg" alt="Image of '.$fp_name.'" width="330" height="386">
	                                      
	                                   </div>
	                                   <div class="sbu-columns--column two-third">
	                                      
	                                         <h1>'.$fp_name.'</h1>
	                                         <h3 style="color: #828282; font-style: italic;">
	                                            <span style="font-size: 18pt;">'.$fp_title.', '.$fp_dept[0].'</span>
	                                         </h3>'.
	                                         $fp_education_html
	                                         .'<p>'.
	                                            $fp_office_html
	                                            .'<span style="font-size: 14pt;">
	                                               <strong>Email: &nbsp;</strong>
	                                               <a href="mailto:'.$fp_email.'">'.$fp_email.'</a>
	                                            </span>
	                                         </p>'.
	                                         $fp_website_html . $fp_research_interests_html . $fp_teaching_interests_html
	                                         .'
	                                         <p>&nbsp;</p>
	                                      
	                                   </div>
	                                </div>
	                             </div>
	                          </div>
	                       </div>
	                   ';
	                
	                $fp_html .= '
	                          <div class="clearfix responsive-container">
	                          <div class="whole clearfix section-bkg-container column-layout-container">
	                             <div class="border-box wrapper clearfix">
	                                <div class="border-box whole clearfix no-pad-top no-pad-bottom no-margin-top no-margin-bottom" style="display: block;">
	                                    <ul class="accordion-nav" id="accordion-nav" style="margin-bottom: 230px;">';

							                /* foreach ($schema_data->View->Entity as $section) {
							                    $section_text = $section['text'];
							                    $section_key = $section['key'];

							                    echo $record->PCI->BUILDING;

							                	$fp_html .= '
							                		<li class="tab"><span tabindex="0" data-hash="'.$section_text.'" data-mce-mark="1" class="active">'.$section_text.'</span><section class="courses is-open" style="top: 54px;">
			                                        <div class="clearfix">
			                                            <p>Keli Xiao received his Ph.D. in Finance from Rutgers Business School in 2013, the Master</p>
			                                        </div></section></li>
							                	';

							                } */

					/* BIO */
	                $fp_html .= '
	                                        <li class="tab"><span tabindex="0" data-hash="Biography" data-mce-mark="1">Biography</span><section class="courses hide" style="top: 54px;">
	                                        <h4>Biography of '.$fp_name.'</h4>
	                                        <div class="clearfix">
	                                            <p>'. $fp_bio .'</p>
	                                        </div></section></li>
	                ';



					/* AWARDS TABLE */
					$node = 'AWARDHONOR';
	                $vars = array(
	                	"NAME" => "Award Name",
	                	"DESC" => "Description",
	                	"ORG" => "Organization",
	                	"NOMREC" => "Status",
	                	"DTM_DATE" => "Month",
	                	"DTD_DATE" => "Day",
	                	"DTY_DATE" => "Year",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "Awards&amp;Honors",
                		"label" => "Awards &amp; Honors",
                	);
	                if(includeSection($record,$node,$considerDisplay)) {
	                	$table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                	$fp_html .= outputSection($table,$tabLabels);
	                }

	                /* EDUCATION TABLE */
	                $node = 'EDUCATION';
	                $vars = array(
	                	"SCHOOL" => "School",
	                	"DEG" => "Degree",
	                	"MAJOR" => "Major",
	                	"DTY_COMP" => "Date Completed",
	                	"DISTINCTION" => "Distinction",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "Education",
                		"label" => "Education",
                	);
	                if(includeSection($record,$node,$considerDisplay)) {
	                	$table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                	$fp_html .= outputSection($table,$tabLabels);
	                }

	                /* SCHEDULED TEACHING TABLE */
	                $node = 'SCHTEACH';
	                $vars = array(
						"TITLE" => "Course Name",
						"COURSEPRE" => "Prefix",
						"COURSENUM" => "Number",
						"SECTION" => "Section",
						"CHOURS" => "Credits",
						"LEVEL" => "Level",
	                	"TYT_TERM" => "Semester",
						"TYY_TERM" => "Year",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "ScheduledTeaching",
                		"label" => "Scheduled Teaching",
                	);
	                if(includeSection($record,$node,$considerDisplay)) {
	                	$table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                	$fp_html .= outputSection($table,$tabLabels);
	                }

	                /* CONTRACTS, FELLOWSHIPS, GRANTS & SPONSORED RESEARCH TABLE */
	                $node = 'CONGRANT';
	                $vars = array(
	                	"TYPE" => "Type",
						"TITLE" => "Title",
						"SPONORG" => "Sponsor",
						"AWARDORG" => "Award",
						"CLASSIFICATION" => "Class",
						"AMOUNT" => "Amt",
						"ABSTRACT" => "Abstract",
						"DTM_EXPSUB" => "Month",
						"DTY_EXPSUB" => "Year",
	                );
	                $considerDisplay = true;
                	$tabLabels = array(
                		"hash" => "SponsoredResearch",
                		"label" => "Contracts, Fellowships, Grants &amp; Sponsored Research",
                	);
	                if(includeSection($record,$node,$considerDisplay)) {
	                	$table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                	$fp_html .= outputSection($table,$tabLabels);
	                }

	                /* INTELLECTUAL CONTRIBUTIONS TABLE */
	                $node = 'INTELLCONT';
	                $vars = array(
	                	"CONTYPE" => "Type",
						"CLASSIFICATION" => "Classification",
						"STATUS" => "Status",
						"TITLE" => "Title",
						"JOURNAL_NAME" => "Journal Name",
						"PUBLISHER" => "Publisher",
						"VOLUME" => "Vol",
						"ISSUE" => "Issue",
						"PAGENUM" => "Page",
						"WEB_ADDRESS" => "Link",
	                );
	                $considerDisplay = true;
                	$tabLabels = array(
                		"hash" => "Publications",
                		"label" => "Publications",
                	);
                	$tableOptions = array(
                		"mode" => "stack",
                	);
	                if(includeSection($record,$node,$considerDisplay)) {
	                	$table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label'],$tableOptions);
	                	$fp_html .= outputSection($table,$tabLabels);
	                }

	                /* INTELLECTUAL PROPERTIES TABLE */
	                $node = 'INTELLPROP';
	                $vars = array(
						"TITLE" => "Title",
	                	"FORMAT" => "Format",
						"ID_NUMBER" => "ID",
						"DTM_LICENSE" => "Month",
						"DTY_LICENSE" => "Year",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "IntellectualProperties",
                		"label" => "Intellectual Properties",
                	);
	                if(includeSection($record,$node,$considerDisplay)) {
	                	$table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                	$fp_html .= outputSection($table,$tabLabels);
	                }

	                /* PRESENTATIONS TABLE */
	                $node = 'PRESENT';
	                $vars = array(
						"TITLE" => "Title",
						"PRESENTATION_TYPE" => "Type",
						"MEETING_TYPE" => "Meeting",
						"NAME" => "Name",
						"ORG" => "Organization",
						"STATE" => "State",
						"COUNTRY" => "Country",
						"CLASSIFICATION" => "Classification",
						"DTM_DATE" => "Month",
						"DTY_DATE" => "Year",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "Presentations",
                		"label" => "Presentations",
                	);
	                if(includeSection($record,$node,$considerDisplay)) {
	                	$table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                	$fp_html .= outputSection($table,$tabLabels);
	                }

	                /* RESEARCH TABLE */
	                $node = 'RESPROG';
	                $vars = array(
						"TITLE" => "Title",
						"DESC" => "Desc",
						"RESEARCH_TYPE" => "Research Type",
						"STATUS" => "Status",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "Research",
                		"label" => "Current Research",
                	);
	                if(includeSection($record,$node,$considerDisplay)) {
	                	$table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                	$fp_html .= outputSection($table,$tabLabels);
	                }

	                /* PROFESSIONAL ACTIVITIES - Combines multiple tables in one section */
	                $node = 'CONSULT';
	                $vars = array(
						"TYPE" => "Type",
						"ORG" => "Organization",
						"STATE" => "State",
						"COUNTRY" => "Country",
						"NUMHOURS_YEARLY" => "Hrs",
						"DESC" => "Description of Service",
						"DTM_START" => "Month",
						"DTY_START" => "Year",
	                );
	                $table = '';
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "Consulting",
                		"label" => "Consulting",
                	);
	                $includeConsulting = includeSection($record,$node,$considerDisplay);
	                if($includeConsulting) {
	                	$table .= createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                }

	                $node = 'SERVICE_UNIVERSITY';
	                $vars = array(
						"TYPE" => "Type",
						"ORG" => "Organization",
						"ROLE" => "Role",
						"NUMHOURS_YEARLY" => "Hrs",
						"ELECAPP" => "Elecapp",
						"DESC" => "Description of Service",
						"ACCOMPLISH" => "Accomplishments",
						"DTM_START" => "Month",
						"DTY_START" => "Year",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "UniversityService",
                		"label" => "University Service",
                	);
	                $includeUniversity = includeSection($record,$node,$considerDisplay);
	                if($includeUniversity) {
	                	$table .= createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                }
	                
	                $node = 'SERVICE_PROFESSIONAL';
	                $vars = array(
						"ORG" => "Organization",
						"ROLE" => "Role",
						"STATE" => "State",
						"COUNTRY" => "Country",
						"NUMHOURS_YEARLY" => "Hrs",
						"DESC" => "Description of Service",
						"ACCOMPLISH" => "Accomplishments",
						"DTM_START" => "Month",
						"DTY_START" => "Year",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "ProfessionalService",
                		"label" => "Professional Service",
                	);
	                $includeProfessional = includeSection($record,$node,$considerDisplay);
	                if($includeProfessional) {
	                	$table .= createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                }
	                
	                $node = 'SERVICE_PUBLIC';
	                $vars = array(
						"ORG" => "Organization",
						"ROLE" => "Role",
						"STATE" => "State",
						"COUNTRY" => "Country",
						"NUMHOURS_YEARLY" => "Hrs",
						"DESC" => "Description of Service",
						"ACCOMPLISH" => "Accomplishments",
						"DTM_START" => "Month",
						"DTY_START" => "Year",
	                );
	                $considerDisplay = false;
                	$tabLabels = array(
                		"hash" => "PublicService",
                		"label" => "Public Service",
                	);
	                $includePublic = includeSection($record,$node,$considerDisplay);
	                if($includePublic) {
	                	$table .= createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                }

	                if($includeConsulting || $includeUniversity || $includeProfessional || $includePublic) {
	                	$tabLabels = array(
	                		"hash" => "Professional Activities",
	                		"label" => "Professional Activities",
	                	);
		                $fp_html .= outputSection($table,$tabLabels);
	                }

	                /* ANOTHER TABLE */
	                /* $node = 'AWARDHONOR';
	                $vars = array(
	                	"" => "",
	                	"" => "",
	                	"" => "",
	                	"" => "",
	                	"" => "",
	                	"" => "",
	                	"" => "",
	                	"" => "",
	                	"" => ""
	                );
	                $table = createTable($record,$node,$vars,$considerDisplay,$tabLabels['label']);
	                $fp_html .= '
	                                        <li class="tab"><span tabindex="0" data-hash="Awards&amp;Honors" data-mce-mark="1" class="">Awards &amp; Honors</span><section class="courses hide" style="top: 54px;">
	                                        <div class="clearfix">
	                                            '. $table .'
	                                        </div></section></li>
	                ';
	                */
	                
	                $fp_html .= '
	                                    </ul>
	                                </div>
	                             </div>
	                          </div>
	                       </div>
	                   ';
	                
	                echo ($fp_html);
	            }
	        }
	        
	    }
	}

?>