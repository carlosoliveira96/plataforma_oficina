<?php
include('crud/crud.php');
include('../conexao/conexao.php');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'incluir':

        $destino = "";
        // verifica se foi enviado um arquivo 
        if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            $nome = $_FILES['arquivo']['name'];
            // Pega a extensao
            $extensao = strrchr($nome, '.');
            // Converte a extensao para mimusculo
            $extensao = strtolower($extensao);
            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfilero as extesões permitidas e separo por ';'
            // Isso server apenas para eu poder pesquisar dentro desta String
            if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                // Cria um nome único para esta imagem
                // Evita que duplique as imagens no servidor.
                $novoNome = md5(microtime()) . $extensao;
                // Concatena a pasta com o nome
                $destino = $novoNome;
                @move_uploaded_file($arquivo_tmp, '../imagens/'.$destino);
            }
        } 

        if (strlen($destino) <= 0){
            $destino = 'NULL';
        }else{
            $destino = "'".$destino."'";
        };

        if (strlen($_POST['razaoSocial']) <= 0){
            $razaoSocial = 'NULL';
        }else{
            $razaoSocial = "'".$_POST['razaoSocial']."'";
        }

        if (strlen($_POST['nomeFantasia']) <= 0){
            $nomeFantasia = 'NULL';
        }else{
            $nomeFantasia = "'".$_POST['nomeFantasia']."'";
        }

        if (strlen($_POST['cnpj']) <= 0){
            $cnpj = 'NULL';
        }else{
            $cnpj = "'".$_POST['cnpj']."'";
        }

        if (strlen($_POST['ie']) <= 0){
            $ie = 'NULL';
        }else{
            $ie = "'".$_POST['ie']."'";
        }

        if (strlen($_POST['telefone']) <= 0){
            $telefone = 'NULL';
        }else{
            $telefone = "'".$_POST['telefone']."'";
        }

        if (strlen($_POST['telefoneCelular']) <= 0){
            $telefoneCelular = 'NULL';
        }else{
            $telefoneCelular = "'".$_POST['telefoneCelular']."'";
        }

        if (strlen($_POST['email']) <= 0){
            $email = 'NULL';
        }else{
            $email = "'".$_POST['email']."'";
        }

        if (strlen($_POST['cep']) <= 0){
            $cep = 'NULL';
        }else{
            $cep = "'".$_POST['cep']."'";
        }

        if (strlen($_POST['endereco']) <= 0){
            $endereco = 'NULL';
        }else{
            $endereco = "'".$_POST['endereco']."'";
        }

        if (strlen($_POST['numero']) <= 0){
            $numero = 'NULL';
        }else{
            $numero = "'".$_POST['numero']."'";
        }

        if (strlen($_POST['complemento']) <= 0){
            $complemento = 'NULL';
        }else{
            $complemento = "'".$_POST['complemento']."'";
        }

        if (strlen($_POST['bairro']) <= 0){
            $bairro = 'NULL';
        }else{
            $bairro = "'".$_POST['bairro']."'";
        }

        if (strlen($_POST['cidade']) <= 0){
            $cidade = 'NULL';
        }else{
            $cidade = "'".$_POST['cidade']."'";
        }

        if (strlen($_POST['uf']) <= 0){
            $uf = 'NULL';
        }else{
            $uf = "'".$_POST['uf']."'";
        }

        $campos = "razao_social, nome_fantasia, cnpj, inscricao_estadual, telefone, celular,
                    email, cep, endereco, numero, complemento, bairro, cidade, uf, url_imagem";
        $valores = "{$razaoSocial}, {$nomeFantasia}, {$cnpj}, {$ie}, {$telefone}, 
                    {$telefoneCelular}, {$email}, {$cep}, {$endereco}, {$numero},
                    {$complemento}, {$bairro}, {$cidade}, {$uf}, {$destino}";

        $empresa = insere($conexao, $campos , $valores , "empresa"); 
        if (strlen($empresa['id']) <= 0 ) {
			print json_encode($empresa);
        }
        break;
    
    case 'busca_empresa':

        $empresa = busca_todos($conexao,  "empresa");
        if ($empresa != null){
            print json_encode($empresa);
        }
        break;
    
    case 'alterar':
        
        $destino = "";
        // verifica se foi enviado um arquivo 
        if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            $nome = $_FILES['arquivo']['name'];
            // Pega a extensao
            $extensao = strrchr($nome, '.');
            // Converte a extensao para mimusculo
            $extensao = strtolower($extensao);
            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfilero as extesões permitidas e separo por ';'
            // Isso server apenas para eu poder pesquisar dentro desta String
            if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                // Cria um nome único para esta imagem
                // Evita que duplique as imagens no servidor.
                $novoNome = md5(microtime()) . $extensao;
                // Concatena a pasta com o nome
                $destino = $novoNome;
                @move_uploaded_file($arquivo_tmp, '../imagens/'.$destino);
            }
        } 

        if (strlen($destino) <= 0){
            $destino = 'NULL';
        }else{
            $destino = "'".$destino."'";
        }

        if (strlen($_POST['razaoSocial']) <= 0){
            $razaoSocial = 'NULL';
        }else{
            $razaoSocial = "'".$_POST['razaoSocial']."'";
        }

        if (strlen($_POST['nomeFantasia']) <= 0){
            $nomeFantasia = 'NULL';
        }else{
            $nomeFantasia = "'".$_POST['nomeFantasia']."'";
        }

        if (strlen($_POST['cnpj']) <= 0){
            $cnpj = 'NULL';
        }else{
            $cnpj = "'".$_POST['cnpj']."'";
        }

        if (strlen($_POST['ie']) <= 0){
            $ie = 'NULL';
        }else{
            $ie = "'".$_POST['ie']."'";
        }

        if (strlen($_POST['telefone']) <= 0){
            $telefone = 'NULL';
        }else{
            $telefone = "'".$_POST['telefone']."'";
        }

        if (strlen($_POST['telefoneCelular']) <= 0){
            $telefoneCelular = 'NULL';
        }else{
            $telefoneCelular = "'".$_POST['telefoneCelular']."'";
        }

        if (strlen($_POST['email']) <= 0){
            $email = 'NULL';
        }else{
            $email = "'".$_POST['email']."'";
        }

        if (strlen($_POST['cep']) <= 0){
            $cep = 'NULL';
        }else{
            $cep = "'".$_POST['cep']."'";
        }

        if (strlen($_POST['endereco']) <= 0){
            $endereco = 'NULL';
        }else{
            $endereco = "'".$_POST['endereco']."'";
        }

        if (strlen($_POST['numero']) <= 0){
            $numero = 'NULL';
        }else{
            $numero = "'".$_POST['numero']."'";
        }

        if (strlen($_POST['complemento']) <= 0){
            $complemento = 'NULL';
        }else{
            $complemento = "'".$_POST['complemento']."'";
        }

        if (strlen($_POST['bairro']) <= 0){
            $bairro = 'NULL';
        }else{
            $bairro = "'".$_POST['bairro']."'";
        }

        if (strlen($_POST['cidade']) <= 0){
            $cidade = 'NULL';
        }else{
            $cidade = "'".$_POST['cidade']."'";
        }

        if (strlen($_POST['uf']) <= 0){
            $uf = 'NULL';
        }else{
            $uf = "'".$_POST['uf']."'";
        }

        $id = $_POST['id'];

        if($_POST['arquivo'] == 'undefined'){
            $campos_valores = "razao_social = {$razaoSocial}, nome_fantasia = {$nomeFantasia},
            cnpj = {$cnpj}, inscricao_estadual = {$ie}, telefone = {$telefone},
            celular = {$telefoneCelular}, email = {$email}, cep = {$cep}, endereco = {$endereco},
            numero = {$numero}, complemento = {$complemento}, bairro = {$bairro}, cidade = {$cidade},
            uf = {$uf}";
        }else {
            $campos_valores = "razao_social = {$razaoSocial}, nome_fantasia = {$nomeFantasia},
            cnpj = {$cnpj}, inscricao_estadual = {$ie}, telefone = {$telefone},
            celular = {$telefoneCelular}, email = {$email}, cep = {$cep}, endereco = {$endereco},
            numero = {$numero}, complemento = {$complemento}, bairro = {$bairro}, cidade = {$cidade},
            uf = {$uf}, url_imagem = {$destino}";
        }

        $condicao = "id = '$id'";

        $empresa = altera($conexao, $campos_valores, $condicao, 'empresa');

        if (strlen($empresa['id']) <= 0 ) {
            print json_encode($empresa);
        }
        
    default:
        break;
    
}
?>