Stony Brook University
Summer Session Course Search Program
v1.2.0

Copyright 2015
Media Overhaul



Important facts:
===================

1. The entire application is in the application folder and is portable.
2. The three .php files in the root folder (browse_departments.php, search_courses.php, and search.php) are an example of how to implement the program.



How to install the application on an existing website:
=========================================================

1. Set up the '/search' URL redirect.
	Copy the .htaccess file to the root of your existing website or copy the RewriteRule in it and append it to your existing .htaccess file. Note: The mod_rewrite Apache module must be activated in order to use the RewriteRule.
2. Copy the application folder.
	Copy the application folder and all of its contents to the root of your existing website.
3. Change the URLs to the XML data files to valid URLs.
	- In application/init.php on line 10 change the $xml_url variable to the URL of an XML file that contains all of the course data. (Accepted course data format is outlined in the technical specifications for this project dated 1/8/2015)
	- In application/services/course_data.php on line 163 change the $url variable to the URL of an XML file that contains all of the SBC code data.
4. You may now begin to implement features (see below).



How to implement features of the application on an existing website:
=======================================================================

1. General Information
	- On any page that you wish to use an application feature you must include the 
	application/init.php file in that page. It must be included before any functions are called.

		<?php include_once('application/init.php'); ?>


2. Add the core search results page
	- In order for the search function to easily work with the .htaccess '/search' rewrite (e.g. www.domain.com/search?keywords=this+is+a+query), it is recommended that you place the following code in a file called search.php in the root directory of your website (next to .htaccess). If you need to set this up in a file with a different name please see the note at the end of this documentation.

	In the search.php file, underneath the include for application/init.php, add:

		<?php
			$search = new \Services\Search($courseData->xmlObject);
			$search_response = $search->run($_GET);
		?>

	You may display the search results anywhere below on the same page by adding this code:
			
			<?=$render->displaySearchQuery($search_response['query'])?>
			Showing <?=$search_response['number_of_results']?> result(s).

			<ul>
				<?=$render->displaySearchResults($search_response['search_results'])?>
			</ul>


3. List all departments with links to the courses in each department
	- Include this code anywhere in the page that you wish to implement it.
	  (This may be included multiple times on the same page e.g. sidebar and content).
			
			<ul>
				<?=$render->listAllDepartments()?>
			</ul>
	

4. Add the search courses form and functionality
	- Simply include this code anywhere in the page.

			<form method="GET" action="search">

				<label>Keywords
					<input type="text" name="keywords" />
				</label>

				<label>Department
					<select name="department">
						<option value="">All</option>
						<?=$render->getDepartmentSelectOptions()?>
					</select>
				</label>

				<label>Course Level
					<select name="course_level">
						<option value="">All</option>
						<?=$render->getCourseLevelOptions()?>
					</select>
				</label>

				<label>Location
					<select name="location">
						<option value="">All</option>
						<?=$render->getLocationSelectOptions()?>
					</select>
				</label>

				<label>SBC
					<select name="SBC">
						<option value="">All</option>
						<?=$render->getSBCSelectOptions()?>
					</select>
				</label>

				<label>DEC
					<select name="DEC">
						<option value="">All</option>
						<?=$render->getDECSelectOptions()?>
					</select>
				</label>

				<input type="submit" />

			</form>



Notes:
=========

- In order to use a different filename or location for the htaccess redirect, change the RewriteRule to reflect it. (e.g. RewriteRule ^search$ path/to/your/file.php$1)

- The program has fail-safes so if you see an error saying "Sorry, there has been an error. Please try again. If the problem persists please contact the System Administrator.", the corresponding error will be in the error log (application/logs/error_log.txt).

- If you need additional assistance please contact Media Overhaul at 631-772-9327.





