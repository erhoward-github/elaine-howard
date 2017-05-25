<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'meta.php'; ?>
<title>Work - Elaine Howard</title>
<!--
http://localhost/dev/elainehoward/work.php
-->    
<?php include 'styles.php'; ?>
<?php include 'ie.php'; ?>
</head>
<body id="work">
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

  <!-- Nav tabs -->
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation" class="active">
      <a href="#fp" aria-controls="fp" role="tab" data-toggle="pill">Financial Professionals</a>
    </li>
    <li role="presentation">
      <a href="#aumpub" aria-controls="aumpub" role="tab" data-toggle="pill">AUM Publisher</a>
    </li>
    <li role="presentation">
      <a href="#hackathon" aria-controls="hackathon" role="tab" data-toggle="pill">BLK Hackathon</a>
    </li>
    <li role="presentation">
      <a href="#up" aria-controls="up" role="tab" data-toggle="pill">User Platform</a>
    </li>
    
    <li role="presentation">
      <a href="#wwac-hackathon" aria-controls="wwac-hackathon" role="tab" data-toggle="pill">WWAC Hackathon</a>
    </li>
    
    
  </ul>

  <!-- Tab panes -->
  <!-- begin tab content -->
  <div class="tab-content">
    <!-- begin fp tab panel -->
    <div role="tabpanel" class="tab-pane active" id="fp">
    
    
    

<!-- begin fp carousel -->
<div id="fp-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#fp-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#fp-carousel" data-slide-to="1"></li>
    <li data-target="#fp-carousel" data-slide-to="2"></li>
    <li data-target="#fp-carousel" data-slide-to="3"></li>
    <li data-target="#fp-carousel" data-slide-to="4"></li>
    <li data-target="#fp-carousel" data-slide-to="5"></li>
    <li data-target="#fp-carousel" data-slide-to="6"></li>
    <li data-target="#fp-carousel" data-slide-to="7"></li>
    <li data-target="#fp-carousel" data-slide-to="8"></li>
    <li data-target="#fp-carousel" data-slide-to="9"></li>
    <li data-target="#fp-carousel" data-slide-to="10"></li>
    <li data-target="#fp-carousel" data-slide-to="11"></li>
    <li data-target="#fp-carousel" data-slide-to="12"></li>
    <li data-target="#fp-carousel" data-slide-to="13"></li>
    <li data-target="#fp-carousel" data-slide-to="14"></li>
    <li data-target="#fp-carousel" data-slide-to="15"></li>
    <!--
    <li data-target="#fp-carousel" data-slide-to="16"></li>
    <li data-target="#fp-carousel" data-slide-to="17"></li>
    -->

  </ol>

  <!-- Wrapper for slides -->
  <!--
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/elaine_linkedIn01.jpg" alt="...">
      <div class="carousel-caption">
        Caption 1...
      </div>
    </div>
    <div class="item">
      <img src="images/elaine_linkedIn01.jpg" alt="...">
      <div class="carousel-caption">
        Caption 2...
      </div>
    </div>
  </div>
  -->
  

  <!-- begin carousel inner -->
  <div class="carousel-inner" role="listbox">
  
    <!-- 0 -->
    <div class="item active">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The Alternative Investments Gadget allow a user to browse fund types in a hierarchical and intuitive manner.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Alternative Investments Gadget</p>
                <img src="images/alternativeInvestmentGadget.png" 
                width="445"
                height="342"
                alt="Alternative Investments Gadget"
                class="img-responsive center"
                >
            </div>
        </div>
        <div class="carousel-caption">
        Alternative Investments Gadget
        </div>
    </div>

    <!-- 1 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The Bond Analyser tool supports the US Retail sales force in generating analysis on bond positions of prospective clients - analysis to drive conversations around the values of active management with a BlackRock separately managed account. 
             </p>
             <p class="center">
             
             In addition, the Bond Analyzer tool combines analysis on both taxable and tax-exempt investmemnts.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Bond Analyzer Main Page</p>
                <img src="images/bondAnalyzer1.png" 
                width="445"
                height="342"
                
                alt="Bond Analyzer Main Page"
                class="img-responsive center">  
            </div>
        </div>
        <div class="carousel-caption">
        Bond Analyzer 1
        </div>
    </div>

    <!-- 2 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
                <p class="center">Bond Analyzer Search Page</p>
                <img src="images/bondAnalyzer2.png" 
                width="445"
                height="342"
                alt="Bond Analyzer Search Page"
                class="img-responsive center">
            </div>
            <div class="col-md-6">
                <p class="center">Bond Analyzer Example Report</p>
                <img src="images/bondAnalyzer3.png" 
                width="445"
                height="342"
                alt="Bond Analyzer Example Report"
                class="center">
            </div>
        </div>
        <div class="carousel-caption">
        Bond Analyzer 2
        </div>
    </div>

    <!-- 3 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The Conversation Starters page gives the user answers to important questions in multiple views based on category.
             </p>
             <p class="center">
             It allows inline searches and displays data in images.
             </p>
             <p class="center">
             The data uderlying the page is in JSON format and is maintained through a form in an Access database.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Conversation Starters</p>
                <img src="images/conversationStarters.png" 
                width="445"
                height="342"
                alt="Conversation Starters"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Conversation Starters
        </div>
    </div>

    <!-- 4 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The data collection gadget is a client-side control that works in conjunction with server-side code to retrieve and display large amounts of data.
             </p>
             <p class="center">
             It was designed with flexibility in mind and can display data in multiple formats.
             </p>
             <p class="center">
             The gadget allows users to do the following.
             </p>
             <ul>
             <li>View large sets of information</li>
             <li>Alter number of items per page</li>
             <li>Iterate through information page by page</li>
             <li>Set filter conditions</li>
             </ul>
            </div>
            <div class="col-md-6">
                <p class="center">Data Collection Gadget</p>
                <img src="images/dataCollectionGadget1.png" 
                width="445"
                height="342"
                alt="Data Collection Gadget"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Data Collection Gadget
        </div>
    </div>

    <!-- 5 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
                <p class="center">Data Collection Gadget: Alter items per page and iterate through multiple pages of information. . .</p>
                <img src="images/dataCollectionGadget2.png" 
                width="445"
                height="342"
                alt="Data Collection Gadget"
                class="img-responsive center">
            </div>
            <div class="col-md-6">
                <p class="center">Data Collection Gadget: Set advanced filter conditions. . .</p>
                <img src="images/dataCollectionGadget3.png" 
                width="445"
                height="342"
                alt="Data Collection Gadget"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Data Collection Gadget
        </div>
    </div>

    <!-- 6 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
                <p class="center">Data Collection Gadget: View data in various formats. . .</p>
                <img src="images/dataCollectionGadget4.png" 
                width="445"
                height="342"
                alt="Data Collection Gadget"
                class="img-responsive center">
            </div>
            <div class="col-md-6">
                <p class="center">Set filter conditions. . .</p>
                <img src="images/dataCollectionGadget5.png" 
                width="445"
                height="342"
                alt="Data Collection Gadget"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Data Collection Gadget
        </div>
    </div>

    <!-- 7 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The dynamic pie charts display a large amount of data in graphical and list formats in a very restricted space on the page. 
             </p>
             <p class="center">
             The user can glean information very quickly and easily.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Dynamic Pie Charts</p>
                <img src="images/dynamicPieCharts.png" 
                width="445"
                height="342"
                alt="Dynamic Pie Charts"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Dynamic Pie Charts
        </div>
    </div>
    
    <!-- 8 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             Flowplayer develops a video player platform to display Flash videos. 
             </p>
             <p class="center">
             Along with Vyoo, it is also used by BlackRock to deliver video content.
             </p>
             <p>
             The code I developed at BlackRock provides a wrapper around the Flowplayer player functionality, thereby making display of video on a web page even easier for the page/content designer.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Flowplayer Flash Video Player</p>
                <img src="images/flowplayerFlashVideoPlayer.png" 
                width="445"
                height="342"
                alt="Flowplayer Flash Video Player"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Flowplayer Flash Video Player
        </div>
    </div>

    <!-- 9 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The Investment Communications page on the Intranet provides centralized market views and thought leadership from BlackRock Investment professionals throughout the firm. 
             </p>
             <p class="center">
             On this Intranet page, employees have the ability to search for and subscribe to various documents.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Investment Communcations</p>
                <img src="images/investmentCommunications2.png" 
                width="445"
                height="342"
                alt="Investment Communcations"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Investment Communcations
        </div>
    </div>

    <!-- 10 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The Investment communications Administration page is not available on the Intranet. 
             </p>
             <p class="center">
             Rather, this page is available "off-line" and it allows easy maintenance of the information underlying the Intranet page by an administrator.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Investment Communcations</p>
                <img src="images/investmentCommunications1.png" 
                width="445"
                height="342"
                alt="Investment Communcations"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Investment Communcations
        </div>
    </div>
    
    <!-- 11 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The Literature List Module provides an easy way for a page designer to retrieve and display literature data by specifying a query in HTML markup. 
             </p>
             <p class="center">
             The page designer can specify that the data will be shown in a short format (as a list) or in long format (as a table).
             </p>
             <p class="center">
             When a user views the page, a JavaScript script will detect the HTML markup provided by the page designer, construct the query and send the request to a server program.
             </p>
             <p class="center">
             The server program, in turn will retrieve the data and send it back to the web page where it will be properly formatted for display as specified by the page desinger.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Literature List Module</p>
                <img src="images/litListModule.png" 
                width="445"
                height="342"
                alt="Literature List Module"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Literature List Module
        </div>
    </div>

    <!-- 12 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The mega menu offers an easy, intuitive way to gain access to the many features of the various BlackRock web pages.
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">Mega Menu</p>
                <img src="images/megaMenu.png" 
                width="445"
                height="342"
                alt="Mega Menu"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Mega Menu
        </div>
    </div>

    <!-- 13 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The ML Platform Availability page is where a user can gain access to product availability information across all Merrill Lynch products.
             </p>
             <p class="center">
             The "accordion" structure allows display of a large amount of information in a small space.
             </p>
             
            </div>
            <div class="col-md-6">
                <p class="center">ML Platform Availability</p>
                <img src="images/mlPlatformAvailability.png" 
                width="445"
                height="342"
                alt="ML Platform Availability"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        ML Platform Availability
        </div>
    </div>

    <!-- 14 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             The Money Fund Aggregator offers dynamic views of money market fund holdings across providers and also offers educational piedes to increase knowledge.
             </p>
             <p class="center">
             The user can add up to fifteen funds into the user's portfolio of holdings and generate reports shoinwg data in various formats.
             </p>
             
            </div>
            <div class="col-md-6">
                <p class="center">Money Fund Aggregator</p>
                <img src="images/moneyFundAggregator1.png" 
                width="445"
                height="342"
                alt="Money Fund Aggregator"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Money Fund Aggregator
        </div>
    </div>

    <!-- 15 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
                <p class="center">Money Fund Aggregator: Interface with example values. . .</p>
                <img src="images/moneyFundAggregator2.png" 
                width="445"
                height="342"
                alt="Money Fund Aggregator"
                class="img-responsive center">
            </div>
            <div class="col-md-6">
                <p class="center">Money Fund Aggregator: Example report. . .</p>
                <img src="images/moneyFundAggregator3.png" 
                width="445"
                height="342"
                alt="Money Fund Aggregator"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        Money Fund Aggregator
        </div>
    </div>

  </div>
  <!-- end carousel inner -->

  <!-- begin controls -->
  <a class="left carousel-control" href="#fp-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#fp-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- end controls -->
  
</div>
<!-- end fp carousel -->




    </div>
    <!-- end fp tab panel -->
    
    
    <!-- begin aumpub tab panel -->
    <div role="tabpanel" class="tab-pane" id="aumpub">


<!-- begin aumpub carousel -->
<div id="aumpub-carousel" class="carousel slide" data-ride="carousel">

  <!-- begin indicators -->
  
  <ol class="carousel-indicators" style="padding-top:8em;">
    <li data-target="#aumpub-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#aumpub-carousel" data-slide-to="1"></li>
    <li data-target="#aumpub-carousel" data-slide-to="2"></li>
  </ol>    
  
  <!-- end indicators -->
  
  <!-- begin carousel inner -->
  <div class="carousel-inner" role="listbox">
  
    <!-- 0 -->
    <div class="item active">
        <div class="row" style="padding:16px">
        
            <div class="col-md-12">
            
                <p class="center">
                AUM Publisher. . .
                </p>
                <div style="height:342px">
<p>
The Assets Under Management (AUM) Publisher is a web application used for publishing corporate AUM. 
It is used to gather AUM from various sources and to create and publish a "point-in-time" view of BlackRocks's AUM - the AUM snapshot. 
These data are then sent to various database systems to be used for financial reporting.
</p>
<p>
The existing application captured Corporate AUM - externally reported assets. 
The AUM team, which accumulates, analyzes and publishes AUM for the company, required new functionality to capture managed view - 
internally reported assets - to properly credit portfolio managers for the portfolios that they manage.
</p>
<p>
The publisher application needed to be updated:</p>
<ul>
<li>Additional file upload capability to capture managed view data in a database. 
<li>Enhanced reporting that would be published along with the corporate view data
</ul>
<p>
<ul>
<li>Gathered requirements from AUM team</li>
<li>Developed new Managed View screen</li>
<li>Enhanced file upload screen</li>
<li>Worked with development team to integrate front-end and back-end code</li>
<li>Performed user acceptance testing with AUM team</li>
<li>Helped deploy and maintain application.</li>
</ul>
</p>
<p>
The AUM team now has an enhanced application allowing complete calculation and reporting of earnings of the company.              
</p>
                </div>
                
                
            </div>
            
        </div>
        <div class="carousel-caption">
        AUM Publisher
        </div>
    </div>

    <!-- 1 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
            
                <p class="center">AUM Publisher: Managed View Snapshot of Past and Current Earnings</p>
                <img src="images/aumPubMvAum01.png" 
                width="445"
                height="342"
                alt="AUM Publisher"
                class="img-responsive center">
             
            </div>
            <div class="col-md-6">
            
                <p class="center">AUM Publisher: Managed View Snapshot Reports Available</p>
                <img src="images/aumPubMvAum02.png" 
                width="445"
                height="342"
                alt="AUM Publisher"
                class="img-responsive center">
                
            </div>
        </div>
        <div class="carousel-caption">
        AUM Publisher
        </div>
    </div>

    <!-- 2 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
            
            
                <p class="center">AUM Publisher Enhanced File Upload Screen</p>
                <img src="images/aumPubUploadFile01.png" 
                width="445"
                height="342"
                alt="AUM Publisher"
                class="img-responsive center">
             
             
            </div>
            <div class="col-md-6">
            
                <p class="center">AUM Publisher: Online Documentation</p>
                <img src="images/aumPubUploadFile02.png" 
                width="445"
                height="342"
                alt="AUM Publisher"
                class="center">
            
                
                
            </div>
        </div>
        <div class="carousel-caption">
        AUM Publisher
        </div>
    </div>
    
  </div>
  <!-- end carousel inner -->


  <!-- begin controls -->
  <a class="left carousel-control" href="#aumpub-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#aumpub-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- end controls -->

  <!--
  <ol class="carousel-indicators" style="padding-top:8em;position:relative;">
    <li data-target="#aumpub-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#aumpub-carousel" data-slide-to="1"></li>
    <li data-target="#aumpub-carousel" data-slide-to="2"></li>
  </ol>    
  -->
  
</div>
<!-- end aumpub carousel -->




    </div>
    <!-- end aumpub tab panel -->
    <!-- begin hackathon tab panel -->
    <div role="tabpanel" class="tab-pane" id="hackathon">





<!-- begin hackathon carousel -->
<div id="hackathon-carousel" class="carousel slide" data-ride="carousel">

  <!-- begin indicators -->
  <ol class="carousel-indicators">
    <li data-target="#hackathon-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#hackathon-carousel" data-slide-to="1"></li>
    <li data-target="#hackathon-carousel" data-slide-to="2"></li>
    <li data-target="#hackathon-carousel" data-slide-to="3"></li>
    <li data-target="#hackathon-carousel" data-slide-to="4"></li>
    <li data-target="#hackathon-carousel" data-slide-to="5"></li>
  </ol>    
  <!-- end indicators -->
  
  <!-- begin carousel inner -->
  <div class="carousel-inner" role="listbox">
  
    <!-- 0 -->
    <div class="item active">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
                 <p class="center">
                 The Enterprise Data Analysis tool is an application that two colleagues and I developed for a Hackathon at BlackRock.
                 This application provides a single platform for any kind of data analysis for BlackRock such as:
                 </p>
                 <ul>
                     <li>Data Comparison</li>
                     <li>Data Quality Check</li>
                     <li>Data Reconciliation</li>
                     <li>Regression Testing</li>
                     <li>Expression Processing</li>
                     <li>Complex Rule-Based Data Transformation</li>
                 </ul>
                 <p class="center">
                 The business rules are built using SQL-like expressions based on column names. 
                 The rule expression supports a wide variety of mathematical and logical operators and reporting formats.
                 The tool provides a user-friendly Web UI to take user input for Data Analysis to generate reports.
                 </p>
            </div>
            <div class="col-md-6">
            
                <p class="center">Hackathon - Data Analysis Tool: Data Rules</p>
                <img src="images/hackDatData.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="img-responsive center">
                
            </div>
        </div>
        <div class="carousel-caption">
        Hackathon - Data Analysis Tool
        </div>
    </div>

    <!-- 1 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
            
                <p class="center">Hackathon - Data Analysis Tool: Match Rules</p>
                <img src="images/hackDatData2.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="center">
                
            </div>
            <div class="col-md-6">

                <p class="center">Hackathon - Data Analysis Tool: Data Rules</p>
                <img src="images/hackDatData3.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="center">
            
            </div>
        </div>
        <div class="carousel-caption">
        Hackathon - Data Analysis Tool
        </div>
    </div>


    <!-- 2 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
            
                <p class="center">Hackathon - Data Analysis Tool: Documentation</p>
                <img src="images/hackDatDoc.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="img-responsive center">
             
            </div>
            <div class="col-md-6">
            
                <p class="center">Hackathon - Data Analysis Tool: Landing Page</p>
                <img src="images/hackDatHome.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="img-responsive center">
                
            </div>
        </div>
        <div class="carousel-caption">
        Hackathon - Data Analysis Tool
        </div>
    </div>
    
    <!-- 3 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
            
                <p class="center">Hackathon - Data Analysis Tool: Debugging Data Modal</p>
                <img src="images/hackDatHomeDebug.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="img-responsive center">
             
            </div>
            <div class="col-md-6">
            
                <p class="center">Hackathon - Data Analysis Tool: Column Mapping</p>
                <img src="images/hackDatMapping.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="img-responsive center">
                
            </div>
        </div>
        <div class="carousel-caption">
        Hackathon - Data Analysis Tool
        </div>
    </div>
    
    <!-- 4 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
            
                <p class="center">Hackathon - Data Analysis Tool: Column Mapping Modal</p>
                <img src="images/hackDatMapping2.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="img-responsive center">
             
            </div>
            <div class="col-md-6">
            
                <p class="center">Hackathon - Data Analysis Tool: Report Formats</p>
                <img src="images/hackDatReport.png" 
                width="445"
                height="342"
                alt="Hackathon"
                class="img-responsive center">
                
            </div>
        </div>
        <div class="carousel-caption">
        Hackathon - Data Analysis Tool
        </div>
    </div>
    
    <!-- 5 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-12">
            
                <p style="text-align:center;">Hackathon - Data Analysis Tool: Upload</p>
                <img src="images/hackDatUpload.png" 
                width="445"
                height="342"
                alt="Hackathon"
                style="display:block;margin:0 auto;">  
                
            </div>
        </div>
        <div class="carousel-caption">
        Hackathon - Data Analysis Tool
        </div>
    </div>
    
    
  </div>
  <!-- end carousel inner -->

  <!-- begin controls -->
  <a class="left carousel-control" href="#hackathon-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#hackathon-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- end controls -->
  
</div>
<!-- end hackathon carousel -->
    
    </div>
    <!-- end hackathon tab panel -->
    
    
<!-- begin hackathon tab panel -->
    
<div role="tabpanel" class="tab-pane" id="wwac-hackathon">
<p>
The <a href="http://www.westwindsorarts.org/index.html" target="_blank">West Windsor Arts Council</a> 
and <a href="http://codeforprinceton.org/" target="_blank">Code for Princeton</a> hosted a pilot collaborative project – a data visualization hackathon. 
The all-day event brought together artists, programmers, community members, designers, and more to visualize data in the West Windsor community. 
Through this project, participants explored how data can be visually compelling, informative, and foster civic engagement by creating art based from data. 
Over the course of the day, 
teams were led by both developers and artists to create projects in both the physical and digital realm that visualize data in order to bring awareness to the community.
</p><p>
Out project, led by developer Chris Marsh-Bourdon and artist Laurie Pettine, mined Twitter to understand notions of "safety" that is of concern to the people of West Windsor. 
Topics of interest could be safety in schools, water, food, news/media, elections - all gleaned from analysis of hashtags: Some of our hashtags that revealed matters that concern people.    
</p><p>
The Weight of a Word – A Twitter Crawl
</p><p>
It wasn’t easy to miss the the sculpture with various wired boxes and contraptions depicting a physical equivalent of a digital word cloud made by doing a data crawl on twitter to understand the meaning of safety in West Windsor area.    
</p>
<p>
<a class="btn btn-success" role="button" href="http://www.elainehoward.com/nitwit/" target="_blank">WWAC Hackathon - see more. . .</a>
</p>
</div>


    
    <!-- begin up tab panel -->
    <div role="tabpanel" class="tab-pane" id="up">
    
<!-- begin up carousel -->
<div id="up-carousel" class="carousel slide" data-ride="carousel">

  <!-- begin indicators -->
  <ol class="carousel-indicators">
    <li data-target="#up-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#up-carousel" data-slide-to="1"></li>
  </ol>    
  <!-- end indicators -->
  
  <!-- begin carousel inner -->
  <div class="carousel-inner" role="listbox">
  
    <!-- 0 -->
    <div class="item active">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
             <p class="center">
             BlackRock required single sign on for its various web sites. 
             This part of the User Platform project.
             Developed and implemented login screen with sophisticated client-side validation. 
             Allowed user much easier access to BlackRock’s financial information. 
             </p>
            </div>
            <div class="col-md-6">
                <p class="center">User Platform: detect invalid email address (user id)</p>
                <img src="images/upLogin1.png" 
                width="446"
                height="342"
                
                alt="User Platform"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        User Platform
        </div>
    </div>
    
    <!-- 1 -->
    <div class="item">
        <div class="row" style="padding:16px">
            <div class="col-md-6">
                <p class="center">User Platform: prevent cross-site scripting</p>
                <img src="images/upLogin2.png" 
                width="455"
                height="342"
                alt="User Platform"
                class="img-responsive center">
            </div>
            <div class="col-md-6">
                <p class="center">User Platform: valid credentials</p>
                <img src="images/upLogin3.png" 
                width="455"
                height="342"
                
                alt="User Platform"
                class="img-responsive center">
            </div>
        </div>
        <div class="carousel-caption">
        User Platform
        </div>
    </div>
    
  </div>
  <!-- end carousel inner -->

  <!-- begin controls -->
  <a class="left carousel-control" href="#up-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#up-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!-- end controls -->
  
</div>
<!-- end up carousel -->


    </div>
    <!-- end up tab panel -->
    
  </div>
  <!-- end tab content -->

</section>
<!-- end content -->

<!-- begin footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->

</div>
<!-- end container -->

<?php include 'scripts.php'; ?>
<script>
$("#fp-carousel,#aumpub-carousel,#hackathon-carousel,#up-carousel").carousel({"interval":false});
</script>
</body>
</html>
