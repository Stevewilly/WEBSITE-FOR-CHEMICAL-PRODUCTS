<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SYSCO BRISTOW RESOURCES</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'example@exaample.com'; 
    $EmailSubject = 'from grain website'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$MESSAGE_BODY = "Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "Company: ".$_POST["companyname"].""; 
     $MESSAGE_BODY .= "address: ".$_POST["address"].""; 
     $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
	$MESSAGE_BODY = "Country: ".$_POST["country"].""; 
    $MESSAGE_BODY .= "State: ".$_POST["state"].""; 
	 $MESSAGE_BODY .= "Telephone: ".$_POST["phone"].""; 
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."";
    $MESSAGE_BODY ="You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nCountry name: $country\n\nstate: $state\n\nPhone: $phone\n\nMessage:\n$message";
    
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
Your message was sent
<?php 
} else { 
?> 

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="img-responsive-fixed-top img-portfolio img-hover" src="logo.png" style="height:40px;width:80px;margin:1px;" alt="">
                <a class="navbar-brand" href="index.html">
                Sysco Bristow Resources</a> 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    
                    
                    <li class="dropdown">
                        <a href="products.html" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                  <a href="products.html">View Products</a>
                            </li>
                        
                            
                        </ul>
                         <li>
                        <a href="enquiry.html">Enquiry</a>
                    </li>
                        
                        <li>
                        <a href="career.html">Careers</a>
                    </li>
                    <li class="active">
                        <a href="contact.html">Contact</a>
                    </li>
                  </li>  
                    
                </ul>
                
                      <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,es,fr,it,ja,la,ms,nl,pt,ru,zh-CN,zh-TW,zu', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Enquiry
                  <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        
            
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div id="loginbox" style="margin-top:40px" class="mainbox col-md-8 col-md-offset-2 col-md-8 col-md-offset-2">
        <div class="panel panel-primary" >
          <div class="panel-heading">
            <h3 class="panel-title active">Details</h3>
          </div>
          <div class="panel-body">
          
          <div class="row">
      <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form  action="enquiry.php" method="post" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Company Name</label>
                            <input type="text" class="form-control" id="companyname" name="companyname">
                            <p class="help-block"></p>
                        </div>
                    </div>
                     
                    <div class="control-group form-group">
                        <div class="controls">
                            <script type= "text/javascript" src = "js/countries.js"></script>
	<label>Select Country:</label>
   <select id="country" name="country" class="form-control" required data-validation-required-message="Please enter your Country."> </select> 
	<label>Select State: 
    </label><select name="state" id ="state" class="form-control" required data-validation-required-message="Please enter your state."></select>  
   
                            </div>
                    </div>

            <script language="javascript">
	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country2");
	populateCountries("country2");
</script>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name ="email" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>

        </div>
            </div>
          <div class="panel-footer-primary"></div>
        </div>
</div>
<br>
<br>
<br>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SYSCO BRISTOW RESOURCES</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file.  -->
    
     <script src="js/countries.js"></script>
<script src="js/bootstrap-formhelpers-countries.js"></script>
<script src="js/bootstrap-formhelpers-languages.js"></script>


</body>
<?php 
}; 
?>
</html>
