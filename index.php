<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive Portfolio Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional Portfolio for Ernesto Cortez">
    <meta name="author" content="Ernesto Cortez">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css"/>
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/src/github-activity.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <?php require_once("./assets/sections/header.php"); ?>
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>I am an experienced technician in the information technology support and service field, and a studious undergraduate in Software Engineering. The transition from IT support to software development has kept me in the computer technology world, but adds a creative aspect that keeps me excited about making contributions that will change the way users interact with computer technology. </p>  
                            <p>I have a passion for teaching what I love, a capacity for empathy, and cumulative experience as a service technician, coder, and trainer. These qualities have driven me towards roles and projects that require a melding of collaborative and technical skills.</p>
                            <p>Reach out to me via email to learn more about how I can add value to your development team.</p>
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
            <?php 
                require_once("./assets/sections/latest_section.php");
                // require_once("./assets/sections/projects_section.php");
                require_once("./assets/sections/github_section.php");
            ?>
                
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                
            <?php 
                require_once("./assets/asides/info_aside.php");
                require_once("./assets/asides/education_aside.php");
                require_once("./assets/sections/experience_section.php");
            ?>

            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

