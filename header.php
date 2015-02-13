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

<navbar></navbar>

<!-- Begin page content -->
<div class="container">
