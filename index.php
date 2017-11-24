<?php

include('db.php');

if(isset($_POST['create-wish']))
{

//prevent sql injection
$title=mysqli_real_escape_string($con,$_POST["title"]);

//prevent xss
$title = htmlspecialchars($title,ENT_COMPAT);

//friendly URL conversion
function to_prety_url($str){
    if($str !== mb_convert_encoding( mb_convert_encoding($str, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32') )
        $str = mb_convert_encoding($str, 'UTF-8', mb_detect_encoding($str));
    $str = htmlentities($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $str);
    $str = html_entity_decode($str, ENT_NOQUOTES, 'UTF-8');
    $str = preg_replace(array('`[^a-z0-9]`i','`[-]+`'), '-', $str);
    $str = strtolower( trim($str, '-') );
    return $str;
}
$str=to_prety_url($title);

// sql query for inserting data into database
$sql_query = "INSERT INTO event_wishes (title,str) VALUES ('$title','$str')";
$result_set=mysqli_query($con,$sql_query);

// Replace http://localhost/$str with your Greeting WEB APP URL
header("Location: http://localhost/newyear/$str");
exit();
}
?>

<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebSite">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#9b59b6">
<meta name="robots" content="index,follow" />
<?php $current_page = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 echo '<link rel="canonical" href="'.$current_page.'" itemprop="url"/>'; ?>


<!-- Seo Meta Tags -->
<title>Happy New year 2018 - Expressing wishes Heart full on New Year</title>
<meta name="description" content="Happy new year greetings 2018: wish your loved ones a pleasant Happy New Year wishes in 2018 with our attractive greeting and a Specially designed Web page."/>
<link rel="shortcut icon" href="favicon.png" type="image/png" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Happy New year 2018 - Expressing wishes Heart full on New Year" />
<meta name="twitter:description" content="Happy new year greetings 2018: wish your loved ones a pleasant Happy New Year wishes in 2018 with our attractive greeting and a Specially designed Web page." />
<meta name="twitter:image" content="TWITTER OG THUMBNAIL URL" />
<meta name="twitter:creator" content="@username" />

<!-- Facebook Open Graph data -->
<meta property="og:title" content="Happy New year 2018 - Expressing wishes Heart full on New Year" />
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $current_page; ?>" />
<meta property="og:image" content="FB OG THUMBNAIL URL" />
<meta property="og:image:alt" content="Happy new Year" />
<meta property="og:description" content="Happy new year greetings 2018: wish your loved ones a pleasant Happy New Year wishes in 2018 with our attractive greeting and a Specially designed Web page." /> 
<meta property="og:site_name" content="Happy New year" />
<meta property="fb:app_id" content="YOUR FB APP ID" />
<meta property="article:publisher" content="YOUR FB PAGE URL" />

<!-- Google+ Meta Tags. -->
<meta itemprop="name" content="Happy New year 2018 - Expressing wishes Heart full on New Year">
<meta itemprop="description" content="Happy new year greetings 2018: wish your loved ones a pleasant Happy New Year wishes in 2018 with our attractive greeting and a Specially designed Web page.">
<meta itemprop="image" content="OG THUMBNAIL URL">

<link rel="stylesheet" type="text/css" href="build/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="build/css/animate.css" />
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
body {
    background-image: url("build/image/bg.gif");
    font-family: 'Lato', sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;  
    font-size: 18px
}
/* Author image */
.userimg {
    border:5px solid #d2d2d2;
    padding:2px;
    }
    .img-circle {
        border-radius: 50%;
    }
    .panel-default > .panel-heading-custom {
        background: #8e44ad; color: #fff;
    }
    .para {
        font-size: 14px;
    }
    .phead {
        font-size: 16px;
    }
    .footer {
        margin-top: 1.5em;
    }
    .footer-text {
        font-size: .8em;
        text-align: center;
        font-weight: 400;
    }
    p {
        line-height: 1.5;
        font-weight: 400;
        letter-spacing: 0;
        color: #2c3643;
    }
    /* Keep images centered, and allow images wider than the main
   text column to break out. */
.post-content img {
    display: block;
    max-width: 126%;
    height: auto;
    padding: 0.6em 0;
    /* Centers an image by (1) pushing its left edge to the
       center of its container and (2) shifting the entire image
       in the opposite direction by half its own width.
       Works for images that are larger than their containers. */
    position: relative;
    left: 50%;
    -webkit-transform: translateX(-50%); /* for Safari and iOS */
    -ms-transform: translateX(-50%); /* for IE9 */
    transform: translateX(-50%);
}
.post-content img {
    max-height: 100%;
    max-width: 100%;
    }
    .post-title{
        font-size:23px
    }
    .post-content h2 {
        font-size:23px
    }
    .post-content p {
        line-height: 24px;
        margin-bottom: 20px;
        font-size: 16px;
    }
    .post-author {
        font-size: 16px;
        text-transform: uppercase;
        color: #000;
        font-weight: 700;
    }
    .veer {
        border: 2px solid rgb(255, 204, 0);
        padding: 8px 10px;
        font-size: 120%;
        color: black;
        font-weight: bold;
        background-color: rgb(255, 255, 153);
        border-radius:20px 20px 0 20px;
        } 
/* SHAREBUTTONS */
.sharebuttons a { color: #fff !important; }
.sharebuttons span {
    font-size: 16px;
}
.btn-whatsapp { background: #128c7e;}
.btn-facebook { background: #3b5998;}
.btn-whatsapp:hover { background: #075e54;}
.btn-facebook:hover { background: #2f4679;}
.panel-default > .panel-heading-custom {
 background: #8e44ad; color: #fff;
}
.btn {
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #fff;
}
@media only screen and (max-width:480px) {
 .h-mbl {
 display: none !important;}
 }
.veer-img {
border:5px solid #d2d2d2;
padding:2px;
}
.veer-panel {
background-color: #b3e5fc;}
.hello-head{font-weight: bold;font-variant: small-caps;text-align: center;font-size: 45px;}
.home-logo {
  font-family: Lato;
  font-size: 24px;
  font-style: oblique;
  font-variant: normal;
  font-weight: bold;
  line-height: 37.5px;
}
.home-footer{padding:20px 0;background-color:#666;color:#FFF;margin:25px 0 0}
.lnf{color:#fff;}
</style>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<br />
<!-- Greeting Card Start -->
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">
<section class="text-center">
<div class="veer home-logo"><span class="post-author">Happy New Year Wishes 2018</span></div>
</section>
</div>
</div>
</div>
<br />

<section class="post-content">
<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-offset-3 text-center">
<div class="panel panel-primary">
<div class="panel-heading panel-heading-custom">
<h4 class="phead section-heading">Happy New Year</h4>
</div>
<div class="panel-body veer-panel">
<div class="text-center">
<p class="animated infinite tada" ><img src="build/image/happynewyear2018-web1.png" width="300" alt="Happy New Year"></p>
</div>
<p class="post-title text-center">Happy New Year Wishes - Send Happy New Year Greeting Wishes to your Friends &amp; Family Members.</p><br/>
<p class="post-title text-center">Happy New year Greetings - wish your loved ones a pleasant Happy New Year wishes in 2018 with our attractive greeting and a Specially Designed Web page.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<br />

<div class="container">
<div class="row">
<div class="col-lg-6 col-lg-offset-3 text-center">
<div class="panel panel-default">
<div class="panel-heading panel-heading-custom">
<h3 class="section-heading">Create Greeting</h3>
</div>
<div class="panel-body">
<form method="post" class="form-inline">
<p class="para">Enter your name to wish your friends and Family memebers. <b>"Happy New year"</b></p>
<div class="form-group">
<input type="text" class="form-control" id="title" onkeydown="validateAlpha();" name="title" maxlength="25" placeholder="Enter Your Name" required>
</div>
<button type="submit" name="create-wish" class="btn btn-success">Create</button>
</form>
</div>
</div>
</div>
</div>
</div>
<br />

<footer class="home-footer text-center">
<p class="lnf footer-text">Copyright &copy; 2018 Happy New year Wishes.</p>
</footer>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="build/js/bootstrap.min.js"></script>

<script type="text/javascript">

    function validateAlpha(){
    $('#error-display').hide();
    $('#title').keypress(function (e) {
    var regex = new RegExp("^[a-zA-Z0-9. ]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }

    e.preventDefault();
    return false;
    });
}
</script>

</body>
</html>