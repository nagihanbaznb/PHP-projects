<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Pets | Contact Us</title>
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
</head>
<body id="page5">
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
  <!-- CONTENT -->
  <div id="content">
    <div class="inner_copy">More <a href="#">Website Templates</a> @ Templates.com!</div>
    <div class="container">
      <div class="indent">
        <div class="wrapper">
          <div class="col-1">
            <h3>Latest News</h3>
            <ul>
              <li><a href="#">February 15, 2010</a><br />
                Sed ut perspiciatis unde omnis iste natus error sit .</li>
              <li><a href="#">January 31, 2010</a><br />
                Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</li>
              <li><a href="#">January 22, 2010</a><br />
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</li>
              <li><a href="#">January 14, 2010</a><br />
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</li>
            </ul>
            <a href="#">News Archive</a>
            <div class="banner"><a href="#"><img src="images/banner.png" alt="" class="png" /></a></div>
          </div>
          <div class="col-2">
            <div class="box">
              <div class="border-top">
                <div class="border-right">
                  <div class="border-bot">
                    <div class="border-left">
                      <div class="left-top-corner">
                        <div class="right-top-corner">
                          <div class="right-bot-corner">
                            <div class="left-bot-corner">
                              <div class="inner">
                                <h3 class="aligncenter">Contact Us</h3>
                                <form action="contact-us.php" method="post">
                                  <fieldset>
                                    <div class="field">
                                      <label>Name Surname:</label>
                                      <input type="text" name="isim"/>
                                    </div>
                                    <div class="field">
                                      <label>Your E-mail:</label>
                                      <input type="text" name="email"/>
                                    </div>
                                    <div class="field">
                                      <label>Phone Number:</label>
                                      <input type="text" name="number"/>
                                    </div>
                                    <div class="field">
                                      <label>Message:</label>
                                      <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message..." required class="form-control"></textarea>
                                      <input type="submit" value="Send">
                                    </div>
                                    
                                  </fieldset>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER -->
  <div id="footer">
    <div class="container">
      <div class="indent">
        <div class="fleft">Copyright - Type in your name here</div>
        <div class="fright">Designed by &nbsp; <a href="http://www.templates.com"><img alt="" src="images/templates-logo.gif" /></a> &nbsp; Your <a href="http://www.templates.com/product/3d-models/">3D Models</a> Marketplace</div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

<?php

include("baglanti.php"); 

if(isset($_POST["isim"], $_POST["email"], $_POST["number"], $_POST["message"]))
{
    $namesurname=$_POST["isim"];
    $email=$_POST["email"];
    $phonenumber=$_POST["number"];
    $message=$_POST["message"];
    
    $ekle="INSERT INTO contact (namesurname, email, phonenumber, message) VALUES ('".$namesurname."' , '".$email."' , '".$phonenumber."' , '".$message."')";
    
    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Your message has been sent successfully.')</script>";
    }
    
}

?>

