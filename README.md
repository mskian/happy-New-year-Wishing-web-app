# Happy New year Wishing Web App

- Bootstrap CSS (Frontend Framework)
- PHP/MYSQL

## Customization

Create Database Table for Store the user's Entries.

```
CREATE TABLE event_wishes
(
 id INT NOT NULL AUTO_INCREMENT,
 title VARCHAR (500) NOT NULL UNIQUE, 
 str VARCHAR (500) NOT NULL UNIQUE,
 PRIMARY KEY (ID)
);

```

- Connect your Database
- open `db.php` & enter your Database user detailes & passwords
- Next open `index.php` & update Web APP URL
- Find the below line on `index.php`
- Replace `http://localhost/newyear` it with your web app Home page URL

```
header("Location: http://localhost/newyear/$str");

```

- open `wish.php`
- Find this Below line on `wish.php`
- Replace `http://localhost/newyear` it with your web app Home page URL

```
<form method="post" action="http://localhost/newyear" class="form-inline">

```

- That's all Done - Happy Event :-) 

