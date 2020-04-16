<!-- 
	*** Modelo de projeto PHP para desenvolvimento de página da web
	*** Desenvolvido por Fábio de Almeida Martins
-->
<html lang="pt-br" dir="ltr">

<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Detector de navegadores" />
	<meta name="author" content="Fábio de Almeida Martins" />
	<meta name="copyright" content="© 2020  -  Fábio de Almeida Martins" />
	<meta name="reply-to" content="fabio.martins.01@hotmail.com">
	<meta name="keywords" content="php, browser checker, detector de navegador" />
	<meta name="rating" content="general" />
	<meta name="robots" content="noindex,nofollow" />
	<meta name="googlebots" content="noindex,nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="canonical" href="./BrowserCheckerPhp.php" />
<!--	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> -->
	<link rel="stylesheet" type="text/css" href="estilos.css" media="screen" />
	
	<title>Detector de navegador - Fábio Martins</title>

</head>]

<body>

	<a id="topo"><h1 class="titulo">Browser Detector</h1></a>
	<br>

	<?php
		?>
		<h3>Navegador detectado</h3>
		<?php
		$browser = $_SERVER['HTTP_USER_AGENT'];

		// Testa os navegadores Safari, Chrome e Edge
		if (strpos($browser, 'Safari') == TRUE) {
			if (strpos($browser, 'Chrome') == TRUE) {
				if (strpos($browser, 'Edge') == TRUE) {
					?>
					<p>Você está usando <strong>Microsoft Edge</strong>.</p>
					<?php
				} else {
					?>
					<p>Você está usando <strong>Google Chrome</strong>.</p>
					<?php
				} 
			} else {
				?>
				<p>Você está usando <strong>Apple Safari</strong>.</p>
				<?php
			}
		}
		// Testa os navegadores Opera e Firefox
		if (strpos($browser, 'Opera') == TRUE) {
			if ((strpos($browser, 'Mini') == TRUE) || (strpos($browser, 'Mobile') == TRUE)) {
				?>
				<p>Você está usando <strong>Opera Mini</strong> ou <strong>Opera Mobile </strong>.</p>
				<?php
			} else {
				?>
				<p>Você está usando <strong>Opera</strong>.</p>
				<?php
			}
		} else {
			if (strpos($browser, 'Firefox') == TRUE) {
				?>
				<p>Você está usando <strong>Mozilla Firefox</strong>.</p>
				<?php
			}
		}
		// Testa os navegadores Internet Explorer
		if (strpos($browser, 'MSIE') == TRUE) {
			if (strpos($browser, 'IEMobile') == TRUE) {
				?>
				<p>Você está usando <strong>IE Mobile</strong>.</p>
				<?php
			} else {
				?>
				<p>Você está usando <strong>Internet Explorer</strong>.</p>
				<?php
			}
		} 
		// Testa o navegador Netscape Navigator
		if ((strpos($browser, 'Netscape') == TRUE) || (strpos($browser, 'Navigator') == TRUE)) {
			?>
			<p>Você está usando <strong>Netscape Navigator</strong>.</p>
			<?php
		}
		
		echo "Seu sistema é: {$_SERVER['HTTP_USER_AGENT']}.";
	?>
	
	<br><br><br>
	<footer class="rodape"><br>Desenvolvido por <strong>Fábio de Almeida Martins</strong>. <br>© 2020  -  Fábio de Almeida Martins</footer>

</body>
</html>