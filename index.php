<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Debug</title>
	<link rel="stylesheet" href="src/css/style.css">
	<script src="https://code.jquery.com/jquery-1.9.0.min.js"></script>
	<script src="src/js/jquery.browser.min.js"></script>
</head>
<body>
	<div class="content">
		<div>
			<h1>Navegador</h1>
			<script>document.write($.browser.name + ' browser ' + $.browser.version);</script>
		</div>

		<div>
			<h1>Resolução de tela</h1>
			<strong>Largura:</strong> <span id="larguraTela"></span><br>
			<strong>Altura:</strong> <span id="alturaTela"></span>
		</div>

		<div>
			<h1>Informações gerais</h1>
			<script>
			for(var i in navigator){
    			document.write(i+"="+navigator[i]+'<br>');
			}
			</script>
		</div>
	</div>
</body>
	
	
	<script>

	jQuery(document).ready(function(){
		var altura = jQuery(window).height();
		var largura = jQuery(window).width();

		var lWidth = window.screen.width;
		var lHeight = window.screen.height;

		$('#larguraTela').text(lWidth+'px');
		$('#alturaTela').text(lHeight+'px');
	});



	</script>
</html>