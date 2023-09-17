<!DOCTYPE html>
<html>
<head>
<title>Pets</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_400.font.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_600.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png');</script>
<![endif]-->
<body id="page1">
<div id="main">
  <!-- HEADER -->
  <div id="header">
    <div class="container">
      <div class="row-1">
        <div class="fleft">
          <form action="#" method="post" id="search-form">
            <fieldset>
              <div>
                <input type="text" value="Keyword" onfocus="if(this.value=='Keyword'){this.value=''}" onblur="if(this.value==''){this.value='Keyword'}" />
                <a href="#"><em><b>Search<span>Search</span></b></em></a> </div>
            </fieldset>
          </form>
        </div>
        <div class="fright">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About</a></li>
            <li><a href="articles.php">Articles</a></li>
            <li><a href="contact-us.php">Contact</a></li>
            <li class="last"><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
      <div class="row-2">
        <div class="fleft"><a href="#"><img src="images/logo.gif" alt="" /></a></div>
        <div class="fright"><img src="images/slogan.gif" alt="" /><span><a href="login.php"><img src="images/button.gif" alt="" /></a></span></div>
      </div>
      <div class="extra"><img src="images/header-img.png" class="png" alt="" /></div>
    </div>
  </div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
  margin-top: auto;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="login.php" method="post" style="max-width:500px;margin:auto;margin-top:100px">
  <h2 style="margin-bottom:15px">LOGIN</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">Login</button>
</form>

</body>
</html>
