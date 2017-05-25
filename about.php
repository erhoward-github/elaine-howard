<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'meta.php'; ?>
<title>About - Elaine Howard</title>
<!--
http://localhost/dev/elainehoward/about.php
-->
<?php include 'styles.php'; ?>
<?php include 'ie.php'; ?>
</head>
<body id="about">

<div class="container">

<!-- begin header -->
<header>
<!-- begin logo,tag line -->
<?php include 'header.php'; ?>
<!-- begin navigation -->
<?php 
include 'nav.php'; 
?>
</header>
<!-- end header -->

<!-- begin content -->
<section style="display:none;">
<h3 style="text-align:center">I'll be the roundabout. . .</h3>
<p>
I am a freelance web developer and consultant. I provide user-friendly, up-to-date solutions - get a website for your delight. . .
</p>
<p>
I am currently working as a volunteer for Professional Services Group of Central New Jersey. My role there is a web developer helping to update the architecture and visual identity of their website. I'm also on the IT Committee of Professional Services Group of Mercer County. My role there is to help keep the content of their website up-to-date.
</p>
<p>
I have worked at BlackRock, Inc in Princeton, NJ on the Corporate Applications team. I participated in the design, development and maintenance of Corporate Applications team software solutions such as: 
</p>
<ul>
<li>AladdinView (provides client and portfolio data for BlackRock’s Asset, Liability And Debt and Derivative Investment Network), 
<li>AUM Publisher (creates and publishes a "point-in-time" view of BlackRock’s assets under management)
<li>myBlackRock (provides employee profile information) and 
<li>User Platform (displays login screens for the BlackRock website). 
</ul>
<p>
To accomplish these tasks, I used various technologies such as JavaScript, jQuery, AngularJS, JSON, FreeMarker, Perl, JSP, HTML, CSS.
</p>
<p>
Prior to joining BlackRock, I worked as a software engineer at Interpool, Inc in Princeton, NJ. In this role, I was a key member of the client and server side development team for the PoolStat chassis tracking application. To accomplish these tasks, I used various technologies such as Visual C++, MFC and Oracle PL/SQL.
</p>

<h3 style="text-align:center">. . .I spend the day your way</h3>

</section>

<!--
<section>
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-condensed">
<caption>Technology Used</caption>
<thead>
<tr><th>Page</th><th>Description</th></tr>
</thead>
<tbody>
<tr><td>Home</td>
<td>
<p>
This page uses the <a href="https://d3js.org/">D3</a> visualization library to visualize the structure of this web site. It uses a pulsing force layout. 
The clickable/draggable nodes are formed from SVG shapes. The nodes move as if alive, beckoning the user to click on them.
</p>

</td></tr>
<tr><td>Work</td>
<td>
This page uses a <a href="http://getbootstrap.com/javascript/#carousel">Bootstrap carousel</a> to display work that I've done.
</td></tr>
<tr><td>Resume</td>
<td>

</td></tr>
<tr><td>Music</td><td></td></tr>
<tr><td>Thoughts</td>
<td>

</td></tr>
<tr><td>Contact</td>
<td>

</td></tr>
<tr><td>About</td>
<td>

</td></tr>
</tbody>
</table>
</div>
</section>
-->
<!-- end content -->

<!-- begin footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->

</div>
<!-- end container -->

<?php include 'scripts.php'; ?><script>
$(document).ready(function(){
    $("section").show(2000);
});
</script>
</body>
</html>
