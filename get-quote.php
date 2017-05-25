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
    $quote = '<p>' . mysqli_error($conn) . '</p>';
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
    echo $quote;
}
if($isOK)
{
    mysqli_close($conn);
}
?>
