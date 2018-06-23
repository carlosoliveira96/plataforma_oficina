<?php

$conexao=mysqli_connect("localhost","root","","plat_ofic") OR DIE ("Erro: Ocorreu um erro na conexão com o banco de dados. Tente novamente ou contate o suporte.");
//$conexao=mysqli_connect("185.28.21.242","u497254162_ofic","portaloficina123","u497254162_ofic") OR DIE ("Erro: Ocorreu um erro na conexão com o banco de dados. Tente novamente ou contate o suporte.");
//$conexao=mysqli_connect("plat_ofic.mysql.dbaas.com.br","plat_ofic","plat_ofic*2018","plat_ofic") OR DIE ("Erro: Ocorreu um erro na conexão com o banco de dados. Tente novamente ou contate o suporte.");
mysqli_query($conexao, "SET CHARACTER SET utf8");
?>
