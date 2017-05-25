<?php include 'login.php'; ?>
<?php
$isOK = TRUE;
$result = NULL;
$maxId = 0;
$item = 0;
$sql = '';
$numRows = 0;
$row = NULL;
$words = '';
$author = '';
$source = '';
$message = '';
$quote = '';
$songs = '';

if($isOK)
{
    $conn = mysqli_connect($host, $usr, $pwd, $db);
    if(!$conn)
    {
        $isOK = FALSE;
        $message = '<p>' . mysqli_connect_error() . '</p>';
    }
}
if($isOK)
{
  $sql = "SELECT id, words, author, source FROM quote ORDER BY RAND() LIMIT 1";

  $result = mysqli_query($conn, $sql);
  if(!$result)
  {
    $message = '<p>' . mysqli_error($conn) . '</p>';
    $isOK = FALSE;
  }
}
if($isOK)
{
    $item = 0;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $item++;
        $words = $row['words'];
        $author = $row['author'];
        $source = $row['source'];

        $quote =  "<dl id='homeQuote'>" . 
            "<dt>" . $words . "</dt>" . 
            "<dd>-- " . $author . ", " . $source . "</dd>" . 
            "</dl>";
    }
}
if($isOK)
{
  $sql = "SELECT url, title, description, style, status, duration FROM song ORDER BY RAND() LIMIT 3";

  $result = mysqli_query($conn, $sql);
  if(!$result)
  {
    $message = '<p>' . mysqli_error($conn) . '</p>';
    $isOK = FALSE;
  }
}
if($isOK)
{
    $item = 0;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $in = $item == 0 ? 'in' : '';
        $item++;
        $url = $row['url'];
        $title = $row['title'];
        $description = $row['description'];
        $style = $row['style'];
        $status = $row['status'];
        $duration = $row['duration'];
            
$songs .= <<<"DOC"
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{$item}">
          $title
        </a>
      </h4>
    </div>
    <div id="collapse{$item}" class="panel-collapse collapse $in">
      <div class="panel-body">
<iframe 
    width="100%" 
    height="20" 
    scrolling="no" 
    frameborder="no" 
    src="{$url}&amp;color=ff5500&amp;inverse=false&amp;auto_play=false&amp;show_user=true">
</iframe>
<div>$description</div>
      </div>
    </div>
  </div>
DOC;
    }
}
if($isOK)
{
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'meta.php'; ?>
<title>Music - Elaine Howard</title>
<!--
http://localhost/dev/elainehoward/music.php
-->
<?php include 'styles.php'; ?>
<?php include 'ie.php'; ?>
</head>
<body id="music">
<div class="container">
<!-- begin header -->
<header>
<?php include 'header.php'; ?>
<!-- begin navigation -->
<?php include 'nav.php'; ?>
<!-- end navigation -->
</header>
<!-- end header -->

<!-- begin content -->
<section>

<div class="row">


<div class="col-md-9">


<div class="panel panel-info">

  <div class="panel-heading" style="text-align:center;">
    <span>Music comforteth like sunshine after rain. . .</span>
  </div>

  <div class="panel-body">
    <p>
      Welcome! 
      Here, find respite for a few minutes, from all that might trouble you by listening to the music below.  
      With those sweet sounds, transport your mind to another more beauteous realm. 
      Happy travels!
    </p>
    

    <!-- begin accordion -->
    <div class="panel-group" id="accordion">
    <?php
    echo $songs;
    ?>
    </div>
    <!-- end accordion -->

  </div>
    
    
    <div class="panel-footer" style="text-align:center;">
        <p id='moreMoreMore'>
            <a href="https://soundcloud.com/likesunshineafterrain" target="_blank" title="More, more, more. . .">
                More, more, more. . .
            </a>
        </p>
    </div>  

</div>

</div>


<div class="col-md-3 noprint">

    <div id="quote">
    <?php
    #echo '<p>' . mysqli_get_server_info($conn) . ' on ' . mysqli_get_host_info($conn) . '</p>';
    echo $quote;
    ?>
    </div>

</div>





</div>

</section>
<!-- end content -->

<!-- begin footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->

</div>
<!-- end container -->

<?php include 'scripts.php'; ?>
<script>
$(document).ready(function(){
    pulseFontWeight("moreMoreMore", 1000);
    
    window.setInterval(function(){
        $( "#quote" ).load( "get-quote.php", function() {
            //console.log( "load was performed. . ." );
        });
    }, 15000);
});
</script>

</body>
</html>
