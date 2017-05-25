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
