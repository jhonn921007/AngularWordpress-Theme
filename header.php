<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="myapp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Mi AngularJS Tema</title>
  <?php wp_head();?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="http://getbootstrap.com/examples/blog/blog.css">
<style>
	  /* Sticky footer styles
  -------------------------------------------------- */
  html {
    position: relative;
    min-height: 100%;
  }
  body {
    /* Margin bottom by footer height */
    margin-bottom: 60px;
  }
  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    /* Set the fixed height of the footer here */
    height: 60px;
    background-color: #f5f5f5;
  }


  /* Custom page CSS
  -------------------------------------------------- */
  /* Not required for template or sticky footer method. */

  body > .container {
    padding: 60px 15px 0;
  }
  .container .text-muted {
    margin: 20px 0;
  }

  .footer > .container {
    padding-right: 15px;
    padding-left: 15px;
  }
</style>
</head>
<body>

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
      <a class="navbar-brand" href="#"><?php echo $bloginfo = get_bloginfo(); ?> </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse" ng-controller="tabsController">
      <ul class="nav navbar-nav">
        <li ng-class="{ active : tab === 1 }" ><a ng-click="selectTab(1)" href="#">Home</a></li>
        <li ng-class="{ active : tab === 2 }" ><a ng-click="selectTab(2)" href="#/pagina-ejemplo">Página de ejemplo</a></li>
        <!-- <li><a href="#about">About</a></li> -->


      </ul>

      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">

        </div>
        <button type="submit" class="btn btn-default">Crear Post</button>
      </form>

    </div><!--/.nav-collapse -->


  </div>
</nav>

<!-- Begin page content -->
<div class="container">
