<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="assets/css/styles.css"/>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<title>HCI for Technology Executives</title>
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/animate.js"></script> 
<script src="assets/js/hamburger.js"></script>
<script src="assets/js/main.js"></script>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

</head>


<body>

	<div id="contentLayer"></div>
    
        <header>
        <div class="dec"></div>
        	<nav>
                <div id="nav-container">
                	<div id="hamburger">
                        <div></div>
                        <div id="middle"></div>
                        <div></div>
                    </div> 
                    <ul id="main_nav">
                        <li  id="first-nav-item"><a href="index.php" <?php if ($thisPage=="index") echo " class=\"on\""; ?>>About the Course</a></li>
                        <li><a href="schedule_syllabus.php" <?php if ($thisPage=="schedule_syllabus") echo " class=\"on\""; ?>>Schedule &amp; Syllabus</a></li>
                        <li><a href="homework.php" <?php if ($thisPage=="homework") echo " class=\"on\""; ?>>Homework</a></li>
                        <li><a href="staff_information.php" <?php if ($thisPage=="staff_information") echo " class=\"on\""; ?>>Staff Information</a></li>
                    </ul>
                </div>
              </nav>
        </header>

        <nav id="mobile_nav">
            <ul>
            <li id="icon-close">X</li>
            <li class="m-nav-item"><a href="#" class="m-nav-link" id="on-mobile">About the Course</a></li>
            <li class="m-nav-item"><a href="#" class="m-nav-link">Schedule &amp; Syllabus</a></li>
            <li class="m-nav-item"><a href="#" class="m-nav-link">Homework</a></li>
            <li class="m-nav-item" id="m-nav-item-last"><a href="staff_information.php" class="m-nav-link">Staff Information</a></li>
         </ul>
        </nav>    
        
        <div id="container">