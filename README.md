# SanePie
Keywords Based Mini Domain Name Search Engine

- You will need a LAMP stack to run the website on local environment.

- Windows users can install XAMPP for running in the local enironment.

- XAMPP: 

1. Put the project folder inside Xampp/htdocs

2. Import the database available from SanePie/Database Backup into MySQL

3. Update the database connectivity setting inside these files:

To Edit -> $link=mysqli_connect("localhost","root","","sanepie")or die("Database Not Connected");

    a) index.php
    b) sanesearching.php
    c) addyourwebsite.php
    d) admin9108/index.php
    e) admin9108/adminaccount.php
    
- SanePie Administrator Account:

  Administrator account gives you the permission to add more websites from the backend.
  
  Keywords could be associated along with the website's url for searching.
  
  Administrator account access details:
  
  1. URL: Sanepie/admin9108
  2. Default Username: guest
  3. Deafult Password: guest2016
  
- SanePie is a responsive website, ready for viewing on mobile and portable devices.