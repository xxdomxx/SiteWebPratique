<html>
<head>
<title>Section d'administration</title>
<?php 
	include("../allIncludes.php"); 
	
	@session_start();
	$session = @$_GET['s'];
	
	if($session === 'disconnected')
	{
		session_destroy();
		header("Location:index.php");
	}
	
	$user = @$_SESSION['user'];

	if($user == null || $user == '') 
		echo "<script type='text/javascript' src='modalConnexion.js'></script>";
	elseif($user === 'admin')
	{
?>

<nav class="navbar navbar-default">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="index.php">Image</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	 <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
	    <?php
	      $nomutil=$_SESSION['user'];
	      echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Connecté en tant que <b>$nomutil</b><span class='caret'></span></a>";
	    ?>
        <ul class="dropdown-menu" role="menu">
		  <li class="dropdown-header">Gérer le site</li>
		  <li><a href="#">Ajouter des produits<span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></li>
          <li><a href="#">Supprimer des produits<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></li>
          <li><a href="#">Modifier des produits<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Compte</li>
          <li><a href="#">Gérer le compte<span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></li>
          <li><a href="index.php?s=disconnected">Déconnexion<span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></li>
        </ul>
       </li>
     </ul>
	</div>
</nav>
<?php
}
?>
</head>
<body>

<button id="btnConnexion" type="button" data-toggle="modal" data-target="#ConnexionModal" hidden></button>
<form method='post' action='connectUser.php'>
	<div class="modal fade bs-example-modal-lg" id="ConnexionModal">
	 <div class="modal-dialog modal-lg">
      <div class="modal-content">
	    <div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <h4 class="modal-title">Veuillez-vous connecter</h4>
		</div>
		<div class="modal-body">
		  <input type="text" name="username" value="" placeholder="Nom d'utilisateur"/>
		  <input type="password" name="password" value="" placeholder="Mot de passe"/>
		</div>
		<div class="modal-footer">
		  <button type="submit" class="btn btn-primary">Connexion</button>
		 </div>
	  </div>
	 </div>
	</div>
</form>

</body>
<footer>
</footer>
</html>