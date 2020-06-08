<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "projeto-loja-virtual";
	const SITE_NOME = "Loja Virtual";
	const SITE_EMAIL_ADM = "lojavirtualfreitas@gmail.com";


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojavirtual",
		  BD_PREFIX = "";


	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "lojavirtualaps@gmail.com";
	const EMAIL_NOME = "Contato Loja Virtual";
	const EMAIL_SENHA = "pacemdomine2020";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "lojavirtualaps@gmail.com";



}
 ?>

