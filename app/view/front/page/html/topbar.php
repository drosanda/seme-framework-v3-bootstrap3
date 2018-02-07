<?php
	if(!isset($page)) $page = 'home';
	$page = strtolower($page);
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>">Seme Framework</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php if($page =='home') echo 'active'; ?>"><a href="<?=base_url()?>">Col-2-Left <?php if($page =='home') echo '<span class="sr-only">(current)</span>'; ?></a></li>
        <li class="<?php if($page =='col_2_right') echo 'active'; ?>"><a href="<?=base_url('home/col_2_right')?>">Col-2-right  <?php if($page =='col_2_right') echo '<span class="sr-only">(current)</span>'; ?></a></li>
        <li class="<?php if($page =='col_1') echo 'active'; ?>"><a href="<?=base_url('home/col_1')?>">Col-1  <?php if($page =='col_1') echo '<span class="sr-only">(current)</span>'; ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Layout <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url()?>">Col-2-Left</a></li>
            <li><a href="<?=base_url('home/col_2_right')?>">Col-2-Right</a></li>
            <li><a href="<?=base_url('home/col_1')?>">Col-1</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Back</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=base_url('asdasdasd')?>">404 Page</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>