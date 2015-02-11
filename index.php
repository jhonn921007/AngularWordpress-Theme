<?php get_header(); ?>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Name Project</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <!-- <li><a href="#about">About</a></li> -->


      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!-- Begin page content -->
<div class="container">

  <div ng-controller="mycontroller">
    <!-- display all post titles in a list -->
    <ul>
      <li ng-repeat="post in postdata">{{post.title}}</li>
    </ul>
  </div>

</div>

<footer class="footer">
  <div class="container">
    <p class="text-muted">SMS Voice Free © 2015 All Rights Reserved.</p>
  </div>
</footer>



<?php get_footer(); ?>
