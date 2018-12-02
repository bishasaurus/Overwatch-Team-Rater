# Overwatch-Team-Rater
Rate your Overwatch teams with this handy web app!

![Home page view](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_home.PNG)

<h2>Overview and Key Functions</h2>

<p>This is a Overwatch fan site, where you can rate your team's competence. The app takes the team's damaging, healing, tanking and other attributes into account, and gives a review of its potential. You can then save your reviewed teams, and see their and other saved teams' rating again from the Saved teams -page. You can delete saved teams from Manage teams -page. You can also create an account in the Sign up -page, and login afterwards via Login & Account -page, so that your account's name will be visible with the teams you've created. 

Hope you can create good team compositions with Overwatch Team Rater!</p>

<h2>How to use</h2>
<p>1. Choose Heroes of your desire by clicking the images below. 
  
![Hero selection](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_hero_select.PNG)

2. After you've selected the Heroes you desire, rate the team's competence by pressing <span style="color:orange;">Rate Team!</span> below the pictures.

![Rating page](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_rating.PNG)

3. In the review page, you can save your team by scrolling down and pressing <span style="color:orange;">Save Team!</span>

4. If you wish to delete saved teams, head to the <span style="color:orange;">Manage Teams</span> -page and follow the instructions.</p>

![Menu banner](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_banner2.PNG)

<h3>Re-rating saved teams</h3>

<p>You can rate saved teams again by going to <span style="color:orange;">Saved Teams</span> -page. There, scroll to the right of the table and press the <span style="color:orange;">Rate Team</span -button to send the team from the corresponding row to the rating page.

![Saved teams](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_saved_teams.PNG)



<h2>Deployment instructions</h2>

<p>This is the Mircosoft Azure -version of Overwatch Team Rater, so after you've downloaded every file in your computer, you have to change the connection strings to match your database environment. For instructions in this, check <a href="https://www.w3schools.com/php/php_mysql_connect.asp">PHP Connect to MySQL</a> -tutorial.
  
I'd recommend using <a href="https://www.apachefriends.org/download.html">XAMPP</a> for hosting this site locally. After you've downloaded Overwatch Team Rater folder, put it into xampp > htdocs. Then, after you've created a database to be used with the tables, create the tables mentioned in <a href="https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/create_table_scripts">create_table_scripts</a>-document using phpmyadmin (localhost/phpmyadmin).
  
After these steps, you should be good to go!</p>
