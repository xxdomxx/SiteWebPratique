<html>
 <head>
  <?php include("allIncludes.php");?>
  <title></title>
  
  <nav class="navbar navbar-inverse"><!--navbar-default &&  navbar-inverse-->
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search for your songs...">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
		<li><a href="#">Inbox <span class="badge">42</span></a></li>

		<form class="navbar-form navbar-left">
			<button class="btn btn-info" type="button">
			  Messages <span class="badge">4</span>
			</button></form>
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
 </head>
 <body>
	<div class="alert alert-success" role="alert">success</div>
	<div class="alert alert-info" role="alert">alert</div>
	<div class="alert alert-warning" role="alert">warning</div>
	<div class="alert alert-danger" role="alert">danger</div>
	
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Warning!</strong> Better check yourself, you're not looking too good.
	</div>
	
	<div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		<span class="sr-only">60% Complete</span>
	  </div>
	</div>
	
	<div class="progress">
	  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		60%
	  </div>
	</div>
	
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
	</div>
	
	<div class="embed-responsive embed-responsive-4by3">
	  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0"></iframe>
	</div>
	
	<div class="row">
	  <div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		  <img src="..." alt="...">
		  <div class="caption">
			<h3>Thumbnail label</h3>
			<p>...</p>
			<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
		  </div>
		</div>
	  </div>
	</div>

	
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<div class="item active">
		  <img src="..." alt="...">
		  <div class="carousel-caption">
			...
		  </div>
		</div>
		<div class="item">
		  <img src="..." alt="...">
		  <div class="carousel-caption">
			...
		  </div>
		</div>
		...
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div>
 </body>
</html>
