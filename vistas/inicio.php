<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php";
	require_once "alerta.php";
	?>
</head>
<body>
	<main class="page-wrapper">
	    <section class="bg-dark dark-mode position-relative min-vh-100 overflow-hidden pt-5">
        	<ellipse cx="131" cy="30.5" rx="131" ry="129.5" fill="white" fill-opacity=".03"></ellipse>
        	<div class="container position-relative zindex-5 text-center pt-5 mt-lg-4 mt-xl-5">
          		<h1 class="display-1 pt-4 mt-sm-3"><span class="text-white fw-normal">Bienvenidos a Inventario Digital </span></h1>
          		<p class="fs-xl mb-5">Estamos aca para darte un servicio de calidad y te daremos asesoria a cualquier hora y en cualquier momento que lo deses.</p><a class="scroll-down-btn" href="#landings" data-scroll="" data-scroll-offset="20">
        		<div class="mouse"></div>
       		</div>
       </section>
	</main>
</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
?>