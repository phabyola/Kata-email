<?php

	$destinatario= 'phabyola@gmail.com';
	$assunto= $_POST['Assunto'];
	$corpo= $_POST['Mensagem'];
	mail ($destinatario, $assunto, $corpo );

?>