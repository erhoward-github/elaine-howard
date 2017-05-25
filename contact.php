<?php
$blnFound = false;
$blnError = false;
$strMsg = "";
$strFirstName = "";
$strLastName = "";
$strEmailAddress = "";
$strComments = "";
$strRegExp = "";
$strHeaders = 'From: webmaster@elainehoward.com';
$message = '';
if(isset($_POST["txtFirstName"]))
/*
if(isset($_POST["txtFirstName"]) && 
   isset($_POST["txtLastName"]) && 
   isset($_POST["txtEmailAddress"]) && 
   isset($_POST["txtComments"]) 
  )
  */
{
  $blnError = false;
  $strMsg = "";
  $strFirstName = trim($_POST["txtFirstName"]);
  $strLastName = trim($_POST["txtLastName"]);
  $strEmailAddress = trim($_POST["txtEmailAddress"]);
  $strComments = trim($_POST["txtComments"]);
  
  /*
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  
  */
  
  if(strlen($strFirstName) == 0)
  {
    $strMsg .= "<li><a href='#txtFirstName'>Please enter your first name.</a></li>";
    $blnError = true;
  }

  if(strlen($strLastName) == 0)
  {
    $strMsg .= "<li><a href='#txtLastName'>Please enter your last name.</a></li>";
    $blnError = true;
  }

  if(strlen($strEmailAddress) == 0)
  {
    $strMsg .= "<li><a href='#txtEmailAddress'>Please enter your email address.</a></li>";
    $blnError = true;
  }
  else
  {
    $strRegExp = "/^[^@]+@([a-z0-9\-]+\.)+[a-z]{2,4}$/";
    #if(!ereg($strRegExp, $strEmailAddress)) 
    if(preg_match($strRegExp, $strEmailAddress) == 1) 
    {
        
    }
    else if(preg_match($strRegExp, $strEmailAddress) == 0)
    {
      $strMsg .= "<li><a href='#txtEmailAddress'>Please enter a valid email address.</a></li>";
      $blnError = true;
    }
    else
    {
      # is FALSE: an error occurred
      $strMsg .= "<li><a href='#txtEmailAddress'>An error occurred.</a></li>";
      $blnError = true;
    }
  }
    
  if(strlen($strComments) == 0)
  {
    $strMsg .= "<li><a href='#txtComments'>Please enter your comments.</a></li>";
    $blnError = true;
  }
  
  if($blnError)
  {
    #echo "<fieldset>";
    #echo "<legend>There was a problem with the form.</legend>";
    #$strMsg = "<ul style='color:red;background-color:transparent;'>" . $strMsg . "</ul>";
    #echo $strMsg;
    #echo "</fieldset>";
    
    
$message = <<< "DOC"
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>$strMsg</strong>
</div>
DOC;

    
  }
  else
  {
    #echo "<fieldset>";
    #echo "<legend>Success!</legend>";
    #echo "<p><b>Thank you for responding.</b></p>";
    #echo "</fieldset>";


$message = <<< "DOC"
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Thank you for responding!</strong>
</div>
DOC;

    
    $strMsg = "";
    $strMsg .= "First Name: " . $strFirstName . "\n";
    $strMsg .= "Last Name: " . $strLastName . "\n";
    $strMsg .= "E-mail: " . $strEmailAddress . "\n";
    $strMsg .= "Comments: " . $strComments . "\n";
    
    # echo $strMsg;
    
    
    mail("elainehoward9991@gmail.com", // to
        "Contact", // subject
        $strMsg,
        $strHeaders);
    
    
    $strMsg = "";
    $strFirstName = "";
    $strLastName = "";
    $strEmailAddress = "";
    $strComments = "";
    
  } // if($blnError)
} // if(isset($_POST["txtFirstName"]) &&
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'meta.php'; ?>
<title>Contact - Elaine Howard</title>
<!--
http://localhost/dev/elainehoward/contact.php
-->    
<?php include 'styles.php'; ?>
<style>
.hide
{
    display:none;
}
.show
{
    display:block;
}
</style>
<?php include 'ie.php'; ?>
</head>
<body id="contact">
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
<!--
<p>
I'd love to hear from you.  Take a minute and drop me a line.  I'll get back to you, presently.
</p>
-->
<div class="row">
  <div class="col-md-4">
        <p>
        I'd love to hear from you.  Take a minute and drop me a line.  I'll get back to you, presently.
        </p>
      <img alt="elaineH" 
        id="elaineH"
        width="300" 
        height="273" 
        style="display:none;"
        class="img-circle img-responsive"
        src="images/elaine_linkedIn01.jpg">
  </div>
  <div class="col-md-8">


<!-- begin form -->
  <form method="post" 
    action="contact.php" 
    id="frmContact" 
    onsubmit="return validateDataEntry();" 
    enctype="application/x-www-form-urlencoded"
    role="form">


<fieldset>

<?php
echo $message;
?>



<div id="userWarning" class="alert alert-warning alert-dismissible hide" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong id="userMessage"></strong>
</div>



<div class="form-group">
<label for="txtFirstName">
<b>First Name: </b>
</label>
<input type="text" 
       class="form-control"
       name="txtFirstName" 
       id="txtFirstName" 
       value = "" 
       size="28" 
       maxlength="28" />
</div>

<div class="form-group">
<label for="txtLastName">
<b>Last Name: </b>
</label>
<input type="text" 
       class="form-control"
       name="txtLastName" 
       id="txtLastName" 
       value = ""
       size="28"
       maxlength="28" />
</div>

<div class="form-group">
<label for="txtEmailAddress">
<b>  E-mail Address: </b>
</label>
<input type="text" 
       class="form-control"
       name="txtEmailAddress" 
       id="txtEmailAddress" 
       value = "" 
       size="56" 
       maxlength="56" />
</div>

<div class="form-group">      
<label for="txtComments" style="vertical-align:top;">
<b>Comments: </b>
</label>
<textarea name="txtComments" 
          id="txtComments" 
          class="form-control"
          cols="40" 
          rows="6"></textarea>      
</div>

<div class="form-group">
<label>
<button type="submit" class="btn btn-default">Send!</button>
</label>
<!--
<input type="reset" value="Reset" name="btnReset" id="btnReset" class="button" />
-->
</div>

</fieldset>

</form>
<!-- end form -->


  </div>
</div>

</section>
<!-- end content -->

<!-- begin footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->

</div>
<!-- end container -->

<?php include 'scripts.php'; ?><script>
$(document).ready(function(){
    $("#elaineH").show(4000);
});
</script>
</body>
</html>
