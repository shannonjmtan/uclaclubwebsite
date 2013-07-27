<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/todc-bootstrap.css" rel="stylesheet" media="screen">
  </head>
  
  <style type="text/css">
      body {
          padding-top: 60px;
          padding-bottom: 40px;
      }
      
      .sidebar-nav {
          padding: 9px 0;
      }
      
      .center {
          text-align: center;
      }
      
      .hero-unit {
          background-color: #0073CF;
          color: #FFB300;
      }
      
      .hero-unit > p {
          padding-top: 5px;
          color: white;
      }
  </style>
  
  <body>
      
    <?php include 'navbar.php'; ?>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>UCLA Engineering Student Organizations</h1>
            <p>In addition to a world class education, UCLA Engineering provides the opportunity to be involved with numerous student organizations to provide priceless experience to be competitive in industry.</p>
            <p><a href="#" class="btn btn-primary btn-large">View a full list &raquo;</a></p>
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h2>By Major</h2>
              <p>From computer science to bioengineering, there are clubs for students of every major and interest.</p>
              <p><a class="btn" href="#">Search by Major &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>By Type</h2>
              <p>To accommodate the variety of interests in the student body, there are social clubs, honor societies, and professional development organizations.</p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>By Project</h2>
              <p>Several student organizations both design and build a variety of projects to learn skills that will set them apart on a resume and in the workplace.</p>
              <p><a class="btn" href="#">Search by Project &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->
      <hr>

      <footer class="center">
        <p>Club on!</p>
      </footer>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>