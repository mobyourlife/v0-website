<?php

/* Configurações do aplicativo no Facebook. */
$app_id = "{app_id}";
$app_secret = "{app_secret}";

/* Endereço do website. */
$website_ssl = false;
$website_proto = ($website_ssl == true ? "https" : "http");
$website_host = $_SERVER["HTTP_HOST"];
$website_root = "";

/* Dados de conexão ao banco de dados. */
$mysql_hostname = "{mysql_hostname}";
$mysql_database = "{mysql_database}";
$mysql_username = "{mysql_username}";
$mysql_password = "{mysql_password}";

/* Dados de pagamento. */
$pgs_producao = false;
$pgs_token = "{token_pagseguro}";

?>