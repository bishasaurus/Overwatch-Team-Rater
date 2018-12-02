# Overwatch-Team-Rater
Rate your Overwatch teams with this handy web app!

![Home page view](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_home.PNG)

<h2>Overview and key functions</h2>

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

<p>You can rate saved teams again by going to <span style="color:orange;">Saved Teams</span> -page. There, scroll to the right of the table and press the <span style="color:orange;">Rate Team</span> -button to send the team from the corresponding row to the rating page.</p>

![Saved teams](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_saved_teams.PNG)

<h3>Deleting teams</h3>

<p>Table for saved teams can store up to 30 teams into itself. If the table runs out of free space, you can head to Manage Teams -page and delete some teams there.
  
To delete teams, type the deletable rows' numbers into the input field below the table. If you want to delete many rows at the same time, separate the values with commas. For example, if you want to delete rows numbered 12, 14 and 89, type "12,14,89" into the input field. After you've given the rows to delete, send the input with Enter or pressing Send Input! -button below.</p>

![Manage teams](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_delete.PNG)

<h3>Register an account and login</h3>

<p>You can create an account for the site. Your username will be displayed with the teams saved to the table (column reserved for username will be left blank if you haven't logged in when saving team).
  
To register, go to Sign up -page, enter the username and password of your wish, and press Submit.

![Sign up page](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_register.PNG)

You might get errors when creating a user, if your username is already taken or the password is too short, Come up with a new username and/or create a longer password, and try again.

After you've created an account you can login in the Login-page. Just fill in your credentials and press Login.

![Login page](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_prelogin.PNG)

After you've logged in, you can change password and log out in the *Account name*'s Account -page.

![Account page](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_login.PNG)

By pressing the Reset Your Password -button, you can change your old password into a new one. Just fill in the new password twice into the input fields and press Submit. You have to login again after changing password, so keep that in mind.</p>

![Password reset page](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_reset.PNG)

<h2>Deployment instructions</h2>

<p>This is the Mircosoft Azure -version of Overwatch Team Rater, so after you've downloaded every file in your computer, you have to change the connection strings to match your database environment. For instructions in this, check <a href="https://www.w3schools.com/php/php_mysql_connect.asp">PHP Connect to MySQL</a> -tutorial.
  
I'd recommend using <a href="https://www.apachefriends.org/download.html">XAMPP</a> for hosting this site locally. After you've downloaded Overwatch Team Rater folder, put it into xampp > htdocs. Then, after you've created a database to be used with the tables, create the tables mentioned in <a href="https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/create_table_scripts">create_table_scripts</a>-document using phpmyadmin (localhost/phpmyadmin).

An example of the file path to overwatch-team-rater:
![File path](https://github.com/bishasaurus/Overwatch-Team-Rater/blob/master/screenshots/owtr_file_path.PNG)
  
After these steps, you should be good to go!</p>
