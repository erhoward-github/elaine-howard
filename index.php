<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'meta.php'; ?>
<title>Home - Elaine Howard</title>
<!--
http://localhost/dev/elainehoward/index.php
http://www.elainehoward.com/index.php
-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/styles.css">
<?php include 'ie.php'; ?>
</head>
<body id="index">

<div class="container">

<!-- begin header -->
<header>
<!-- begin logo,tag line -->
<?php include 'header.php'; ?>
<!-- begin navigation -->
<?php 
# include 'nav.php'; 
?>
</header>
<!-- end header -->

<!-- begin content -->
<section>
    
    <svg height="384"
        width="100%"
        id="svgSection"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        style="background-color:transparent;"
        focusable="false"
        >
        
        <defs>
            <linearGradient id="homeGradient"
                            x1="0%" y1="0%"
                            x2="0%" y2="100%"
                            spreadMethod="pad">
              <stop offset="0%"   stop-color="#ffe69a" stop-opacity="1"></stop>
              <stop offset="100%" stop-color="#f2b600" stop-opacity="1"></stop>
            </linearGradient>
            <linearGradient id="childGradient"
                            x1="0%" y1="0%"
                            x2="0%" y2="100%"
                            spreadMethod="pad">
              <stop offset="0%"   stop-color="#94c3ea" stop-opacity="1"></stop>
              <stop offset="100%" stop-color="#0a5a9c" stop-opacity="1"></stop>
            </linearGradient>
            <linearGradient id="subChildGradient"
                            x1="0%" y1="0%"
                            x2="0%" y2="100%"
                            spreadMethod="pad">
              <stop offset="0%"   stop-color="#2376bb" stop-opacity="1"></stop>
              <stop offset="100%" stop-color="#0a5a9c" stop-opacity="1"></stop>
            </linearGradient>
            
            <filter id="blurFilter2" y="-10" height="40" x="-10" width="150">
                <feOffset in="SourceAlpha" dx="3" dy="3" result="offset2" />
                <feGaussianBlur in="offset2" stdDeviation="3"  result="blur2"/>

                <feMerge>
                    <feMergeNode in="blur2" />
                    <feMergeNode in="SourceGraphic" />
                </feMerge>
            </filter>            
        </defs>
  
    </svg>
    
</section>
<!-- end content -->

<!-- begin footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->

</div>
<!-- end container -->

<script src="js/d3.min.js"></script>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
