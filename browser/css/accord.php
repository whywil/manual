<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- William Whyte (C) Sept. 2013 -->
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="News feed">
    <meta name="author" content="William Whyte">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="http://www.williamwhyte.ie/favicon.ico" />
    <title>JS Reference</title>
    <!-- CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="../css/custom.css" rel="stylesheet" media="screen">
    <style type="text/css">
    dt {margin-bottom: 3px;}
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 7]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
  </head>
  <body>
    <!-- Main application content begins -->
        
<div class="container">
  
  <?php include("../common/header.html");  //masthead ?> 
  <?php include("../common/navbar.html"); //navbar ?>

<section class="row">
  <article class="col-sm-7"> 
    <h1>JavaScript DOM Reference</h1>
     <dl class="accordion">

      <dt><a href="">document.addEventListener()</a></dt>
      <dd>Attaches an event handler to the document. Use the element.addEventListener() method to attach an event handler to a specified element.<br />
      <pre>
  document.addEventListener("click", function(){
  document.getElementById("demo").innerHTML = "Hello World";
  });

  function checkUsername() {
  // code to check the length of username
  }
  var el = document.getElementById('username');
  el.addEventListener('blur', checkUsername, false);
      </pre>  
      </dd>

      <dt><a href="">document.createAttribute()</a></dt>
      <dd>Creates an attribute node.<br />
      <pre>
  var att=document.createAttribute("class");
  att.value="democlass";
  document.getElementsByTagName("h1")[0].setAttributeNode(att);
      </pre>  
      </dd>

      <dt><a href="">document.createElement()</a></dt>
      <dd>Creates an Element node. For example to create a button:<br />
      <pre>
  var btn=document.createElement("BUTTON");
  var t=document.createTextNode("CLICK ME");
  btn.appendChild(t);
      </pre>  
      </dd>

      <dt><a href="">document.getElementById() </a></dt>
      <dd>Returns the element that has the specified ID attribute .<br />
      <pre>
    function myFunction() {
        document.getElementById("demo").innerHTML = "Hello World";
    }
      </pre>  
      </dd>

      <dt><a href="">document.getElementsByClassName()</a></dt>
      <dd>Returns a NodeList containing all elements with the specified class name.<br />
      <pre>
  function myFunction() {
      var x = document.getElementsByClassName("example");
      x[0].innerHTML = "Hello World!";
  }
      </pre>  
      </dd>

      <dt><a href="">document.getElementsByTagName()</a></dt>
      <dd>Returns a NodeList containing all elements with the specified tagname.<br />
      <pre>
  function myFunction() {
      var x = document.getElementsByTagName("LI");
      document.getElementById("demo").innerHTML = x[1].innerHTML;
  }
      </pre>  
      </dd>

      <dt><a href="">document.querySelector()</a></dt>
      <dd>Returns the FIRST element node that matches a specified CSS selector(s) in the document.<br />
      <pre>
  function myFunction() {
      ver el = document.querySelector('li.hot');
      el.className = 'cool';
  }
      </pre>  
      </dd>

      <dt><a href="">document.querySelectorAll()</a></dt>
      <dd>Returns a NodeList of all the matches of the specified CSS selector(s) in the document. In this
        example the second matching element (3rd list item) is selected and changed.<br />
      <pre>
  function myFunction() {
      ver els = document.querySelectorAll('li.hot');
      els[1].className = 'cool';
  }
      </pre>  
      </dd>
    </dl>

  </article>


  <aside class="col-sm-5"> 
    <h1>Sitepoint Dev Articles</h1>
    <div id="rss_feed"></div>
  </aside>

</section> <!--/.row -->
  <?php include("../common/footer.html");  //footer ?> 

    </div> <!--/.container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-1.9.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.rss.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
   
      var allPanels = $('.accordion > dd').hide();
        
      $('.accordion > dt > a').click(function() {
        allPanels.slideUp();
        $(this).parent().next().slideDown(1000);
        return false;
      });


      $("#rss_feed").rss("http://www.sitepoint.com/feed/",  {
          limit: 4,
          layoutTemplate: '<div>{entries}</div>',
          entryTemplate: '<p><a href="{url}" target="_blank">{title}</a><br />{shortBodyPlain}[{author}@{date}]</p>'
      }).show();
    });

    </script>
  </body>
</html>