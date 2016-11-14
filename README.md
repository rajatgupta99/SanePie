# SanePie
Keywords Based Mini Domain Name Search Engine

- You will need a LAMP stack to run the website on local environment.

- Windows users can install XMAPP for running in the local enironment.

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