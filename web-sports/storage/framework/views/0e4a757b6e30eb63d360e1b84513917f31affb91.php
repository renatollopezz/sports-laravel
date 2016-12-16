<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Sports</title>
	<link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo asset('css/hover-min.css')?>">
</head>
<body>

<!--
    <nav class="navbar navbar-inverse navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo e(url('/')); ?>">Visão Geral</a></li>
            <li><a href="<?php echo e(route('teams.index')); ?>">Times</a></li>
            <li><a href="<?php echo e(route('matches.index')); ?>">Partidas</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<?php echo $__env->yieldContent('content'); ?>
        </div>
      </div>
    </div>

    -->   
     <nav class="navbar navbar-inverse navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WebSports</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <!-- segunda parte do layout -->
     <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="hvr-underline-reveal" href="<?php echo e(url('/')); ?>">Visão Geral</a></li>
            <li><a class="hvr-underline-reveal" href="<?php echo e(route('teams.index')); ?>">Times</a></li>
            <li><a class="hvr-underline-reveal" href="<?php echo e(route('matches.index')); ?>">Partidas</a></li>
            <li><a class="hvr-underline-reveal" href="<?php echo e(route('competitions.index')); ?>">Competições</a></li>
          </ul>
        </div>
        <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> quebra layout--> 
        <div class="row">
          <div class="col-md-offset-2 col-sm-offset-3 main">
          <div class="container-fluid left-bar-dark">
              <?php echo $__env->yieldContent('content'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>


  <script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>" ></script>
  <script type="text/javascript" src="<?php echo asset('js/bootstrap.js')?>"></script>
</body>
</html>