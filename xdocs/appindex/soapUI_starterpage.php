<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>soupUI - Open Source</title>
<link href="css/software.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
-->
</style>
<script type="text/javascript" src="http://www.google-analytics.com/urchin.js"></script>
<script type="text/javascript">_uacct = "UA-92447-1";
urchinTracker();</script>
</head>

<body>

<div id="page">
<!--header-->
<div id="header">

<div id="top-stripe"><span class="left">
<script type="text/javascript">
//starter
today=new Date(); 
date=today.getDate(); 
year=1900 + today.getYear(); //cheating here
day = today.getDay(); 
month=today.getMonth()+1; 

// Day in text
var dayName=new Array(7)
dayName[0]="Sunday";
dayName[1]="Monday";
dayName[2]="Tuesday";
dayName[3]="Wednesday";
dayName[4]="Thursday";
dayName[5]="Friday";
dayName[6]="Saturday";

// SuffiXToDate
if (date==1) suffix=("st");
else if (date==2) suffix=("nd");
else if (date==3) suffix=("rd");
else if (date==21) suffix=("st");
else if (date==22) suffix=("nd");
else if (date==23) suffix=("rd");
else if (date==31) suffix=("st");
else suffix=("th");

// Month in text
if (month==1) monthName=("January");
else if (month==2) monthName=("February");
else if (month==3) monthName=("March");
else if (month==4) monthName=("April");
else if (month==5) monthName=("May");
else if (month==6) monthName=("June");
else if (month==7) monthName=("July");
else if (month==8) monthName=("August");
else if (month==9) monthName=("September");
else if (month==10) monthName=("October");
else if (month==11) monthName=("November");
else monthName=("December");

// Write date
document.write(dayName[day] + ", " + monthName + " " + date + suffix + ", " + year);
</script>
</span>
<span class="right">&copy; 2009 <a href="http://www.eviware.com" target="_blank">Eviware AB</a></span></div>

<div id="try-buy">
<a onclick="javascript:urchinTracker('/appindexsoapUITopTry')" href="http://www.eviware.com/trial" title="Try SoapUI"><img src="images/try.png" alt="Try SoapUI" /></a><a onclick="javascript:urchinTracker('/appindexsoapUITopBuy')" href="http://www.eviware.com/store" title="Buy SoapUI"><img src="images/buy.png" alt="Buy SoapUI" /></a></div>



</div>
<!--end of header-->

<!--content-->
<div id="content">

<!--column-3-->
<div id="column-3">

<div id="header-rightbox">
<div class="title"><img src="images/news-title.png" alt="News" /></div>
<h2>soapUI 3 - The Reporting Release: The Features</h2>
<p>Read more about what's in soapUI 3...</p>
<div class="links"><a onclick="javascript:urchinTracker('/appindexsoapUIMinorNewsReadMore')" "href="http://www.soapui.org/new_and_noteworthy_3_0.html">Read more</a></div>
<div class="clearfix"></div>
</div>

<div class="ad-type-3">
<div class="title"><img src="images/feature-focus-title.png" alt="News" /></div>
<h2>Data Driven Testing</h2>
<p>soapUI Pro gives you the ability to do Data Driven Testing.</p>
<div class="links"><a onclick="javascript:urchinTracker('/appindexsoapUIDataDrivenReadMore')" href="http://www.eviware.com/blogs/oleblog/?p=619">Read more</a></div>
<div class="clearfix"></div>
</div>
<div class="ad-type-3">
<div class="title"><img src="images/training.png" alt="News" /></div>
<h2>Get Trained!<br />
</h2>
<p>Go get the course &quot;soapUI 3&quot; from our partner <strong>Think88.</strong> </p>
<p>Learn how to construct robust functional, scalability, and reliability tests for your Service Oriented Architecture (SOA), Web  services, and REST-based services.</p>
<div class="links"><a onclick="javascript:urchinTracker('/appindexsoapUITrainingReadMore')" href="http://www.think88.com/soap.html">Read more</a></div>
<div class="clearfix"></div>
</div>
<div class="ad-type-3">
<div class="title"><img src="images/feature-focus-title.png" alt="News" /></div>
<h2>WADL and Schema Inference</h2>
<p>In soapUI 3 you can now infer schema from XML. Why? Create specs from that undocumented REST Service.</p>
<div class="links"><a onclick="javascript:urchinTracker('/appindexsoapUISchemaInferenceReadMore')" href="http://www.eviware.com/blogs/oleblog/?p=530">Read more</a></div>
<div class="clearfix"></div>
</div>
</div><!--end of column-3-->

<div id="header-leftbox">
<div class="title"><img src="images/news-title.png" alt="News" /></div>
<h2>soapUI 3.0  - The Reporting Release is out</h2>
<img class="picture" title="New release" src="images/release.jpg" />
<p> With soapUI 3.0 we introduce an extensive framework for creating and producing test reports in soapUI. <br />
  We also introduce Improved REST, JavaScript Support, WS-ReliableMessaging and Much More<br /> </p>
<div class="links"><a onclick="javascript:urchinTracker('/appindexsoapUIMainNewsReadMore')" href="http://www.soapui.org/new_and_noteworthy_3_0.html">Read more</a><a onclick="javascript:urchinTracker('/appindexsoapUIMainNewsDownload')" href="http://sourceforge.net/project/showfiles.php?group_id=136013&amp;package_id=163662&amp;release_id=695609">Download here</a></div>
<div class="clearleft"></div>
</div>


<!--column-1-->
<div id="column-1">
<div id="did-you-know">
<div class="top"></div>
<div class="middle">
<h2>Did you know...</h2>
<p> soapUI Pro builds on the functionality of soapUI and makes it more useful for the enterprise customer. soapUI Pro will improve your productivity and make Web Service testing more fun.</p>
<ol>
<li>Get a <span class="YellowText">Form Based </span>or <span class="style2">Outlined view</span> of your Requests and Responses.</li>
<li>Create <span class="YellowText">Data Driven Tests</span> with the DataSource TestStep. </li>
<li>Determine how well Tested Your Web Services are with <span class="YellowText">Coverage</span></li>
<li>Save data from your tests with the <span class="YellowText">DataSink TestStep</span>.</li>
<li>Distribute Test Results with soapUI's powerful <span class="YellowText">Reporting</span>.</li>
<li>Do point and click testing with <span class="YellowText">XPath Selection</span>.</li>
<li>Get<span class="YellowText"> World Class Support</span>!</li>
</ol>
</div>
<div class="bottom">
<a onclick="javascript:urchinTracker('/appindexsoapUIDYKTry')" href="http://www.eviware.com/trial">Download Free Trial</a>
</div>
</div>
<div class="ad-type-1"><a onclick="javascript:urchinTracker('/appindexsoapUIDownDocs')" href="http://www.soapui.org"><img src="images/documentation.png" alt="Documentation" /></a></div>
<div class="ad-type-1"><a onclick="javascript:urchinTracker('/appindexsoapUIDownHelp')" href="http://www.eviware.com/forums"><img src="images/help.png" alt="Help" /></a></div>
</div><!--end of column-1-->

<!--column-2-->
<div id="column-2">
<div class="ad-type-2">
<div class="ad-type-2-inner">
<div class="title"><img src="images/tellus.png" alt="News" /></div>
<img class="type-2-picture" src="images/tee.png" alt="T-Shirt" />
<p>This T-Shirt can be yours! Take our Survey and win a T-Shirt or a MoosePad!</p>
<div class="links"><a onclick="javascript:urchinTracker('/appindexsoapUISurvey')" href="http://www.surveymonkey.com/s.aspx?sm=W3Nw2wWWAI8dw3_2f8vETsIw_3d_3d">Take the Survey!</a></div>
</div>
</div>
<div class="ad-type-2">
<div class="ad-type-2-inner button">
<div class="title"><img src="images/tips-and-trix-title.png" alt="News" /></div>
<img class="type-2-picture" src="images/10HackingTips.png" alt="10tips" />
<p>Starting July 7, we will be introducing one tip on Web Service Login Security Testing per day. Read our Tips and Tricks for Web Service hacking!</p>
<a class="learnmore" title="Learn more" onclick="javascript:urchinTracker('/appindexsoapUITaT') href="http://www.soapui.org/userguide/scenarios/loginhacking.html"><img src="images/blank.gif" alt="blank" /></a></div>
</div>
</div><!--end of column-2-->


<div class="clearfix"></div>
</div>
<!--end of content-->


</div>

</body>
</html>
