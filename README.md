# Happy New Year Wishing Web App

Happy New Year Name Wishing Web APP :100:

- Bootstrap CSS (Frontend Framework)
- PHP/MYSQL [PHP Version - version 5.6 or greater(PHP 7 Recommended)/ MYSQL Version -  5.5 or greater]

## Demo

Watch demo in youtube - <a href="https://youtu.be/WoVyj0X2-EA" target="_blank">Demo</a>

Forum Discussion - <a href="https://goo.gl/Mkebuv" target="_blank">Join Now</a>

## Customization :electric_plug:

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
- Replace `http://localhost/newyear/` it with your web app Home page URL Don't remove "/" 

```

<form method="post" action="http://localhost/newyear/" class="form-inline">

```

- That's all Done - Happy Event :-) 

