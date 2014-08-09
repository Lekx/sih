<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/personalizado.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<nav id="menuprincipal">
	<span class="menuitem">
	<?php echo CHtml::link('inicio',array('site/index')); ?>
	</span>
	<span class="menuitem">
	
	<?php echo CHtml::link('Iniciar sesión',array('site/login')); ?>
	</span>
	<span class="menuitem">
	<a href="#">incidencias</a>
		<span class="submenu">
			<a href="#"> Mis incidencias</a>
			<a href="#"> Crear</a><br>
			<a href="#"> Ver</a><br>
		</span>
	</span>
		<span class="menuitem">
	<a href="#">reportes</a>
		<span class="submenu">
			<a href="#"> Totales</a><br>
			<a href="#"> inventario</a><br>
			<a href="#"> entradas</a>
		</span>
	</span>
		<span class="menuitem">
	<a href="#">inventario</a>
		<span class="submenu">
			<a href="#"> revisar</a><br>
			<a href="#"> gestionar</a><br>
			<a href="#"> crear</a>
		</span>
	</span>
		<span class="menuitem">
	<a href="#">administración</a>
		<span class="submenu">
			<a href="#"> Personal</a><br>
			<a href="#"> Crear</a><br>
			<a href="#"> Buscar</a>
			<a href="#"> Personal</a><br>
			<a href="#"> Crear</a><br>
			<a href="#"> Buscar</a>
			<a href="#"> Personal</a><br>
			<a href="#"> Crear</a><br>
			<a href="#"> Buscar</a>
		</span>
	</span>
</nav>
	
<header>
<span id="logo">
	<img src="images/siloelogo.png" style="width:100%;height:auto;margin-top:15px;">
</span>
<span id="titulos">
	<span id="titulo">HOSPITAL SILOÉ</span>
	<span id="subtitulo"> GESTIÓN INTEGRAL HOSPITALARIA</span>
</span>
</header>
<main>
<?php echo $content; ?>

</main>
</body>
</html>
