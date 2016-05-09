# smsNewsletterSignupApp

##Description
A signup form article made for the RIT Media Science app. Interested highschool students, grad students, teachers, or guidance counselors can fill out to be added to the SMS/Connect database. Entries on this list can receive email blasts with news or updates from the School of Media Sciences.

This form is modeled after the CMS form located here: http://connectcrm.cias.rit.edu/, and should serve the same purpose while matching the style of the rest of the app's articles. This article uses different libraries to style the form and check the forms input values before submission (more info in below).

##Article Status
- Article was never published on the RIT Media Sciences app.

##Code Status
1. The form needs to be tested to see if it correctly submits information to the CRM database. A php file ('assets/includes/person_insert.php') that will submit the information is included at the top of the index file but has not been tested yet.

2. The form uses css styles from the form templates located here: https://standards.usa.gov/form-controls/ and https://standards.usa.gov/form-templates/. The template styles affect the appearance of the normal form elements and highlight/color elements that appear when a user interacts with the form.

3. The form also uses a js form validation plugin called [Parsley](http://parsleyjs.org/). We could keep this in the code or take it out and use built HTML5 validation methods. I used Parsely because it has more validation options and will wait to validate until the user stops interacting with that part of the form.

###Hayden's Recommendations
- First step if we want to use this is to test interaction with CRM database by getting the
  - 'person_insert.php' (database connection, php sanitation, pass form info to database) and the 
  - 'utilities.php' (normalizing some values) 
  
  files working. Same files Gouda used to get the online form working--probably will need some guidance from Graham.
