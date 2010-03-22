<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Kata Email</title>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style> article, aside, figure, footer, header, hgroup, menu, nav, section { display: block; } </style>
	
</head>
<body>
	<div class="container">
		<?php
		error_reporting(0);
		$destinatario= 'phabyola@gmail.com';
		$assunto= $_POST['Assunto'];
		$corpo= $_POST['Mensagem'];
	
		if (mail ($destinatario, $assunto, $corpo )):
	
		?>
	
			<p>Email enviado com sucesso!</p>
		<?php else: ?>
			<p>Erro. Email não enviado</p>
		<?php endif; ?>
	
	</div>
</body>
</html>