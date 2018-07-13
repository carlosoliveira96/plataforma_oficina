<?php

switch ($lista){
case 'nome':
    if (strlen($valor) <= 0){
        $nome = 'NULL';
    }else{
        $nome = "'".$valor."'";
    };
    $log = $log."Nome = {$valor}; <br>"; 
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."nome = {$nome}";  
    }else {
        $campos_valores = $campos_valores."nome = {$nome}, ";
    }
break;
case 'nascimento':
    if (strlen($valor) <= 0){
        $nascimento = 'NULL';
    }else{
        $nascimento = "'".$valor."'";
    };
    $log = $log."Data de nascimento = {$valor}; <br>"; 
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_nascimento = {$nascimento}";  
    }else {
        $campos_valores = $campos_valores."data_nascimento = {$nascimento}, ";
    }
break;
case 'cpf':
    if (strlen($valor) <= 0){
        $cpf = 'NULL';
    }else{
        $cpf = "'".$valor."'";
    };
    $log = $log."CPF = {$valor}; <br>"; 
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."cpf = {$cpf}";  
    }else {
        $campos_valores = $campos_valores."cpf = {$cpf}, ";
    }
break;
case 'rg':
    if (strlen($valor) <= 0){
        $rg = 'NULL';
    }else{
        $rg = "'".$valor."'";
    };
    $log = $log."RG = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."rg = {$rg}";  
    }else {
        $campos_valores = $campos_valores."rg = {$rg}, ";
    }
break;
case 'orgao_emissor':
    if (strlen($valor) <= 0){
        $orgao_emissor = 'NULL';
    }else{
        $orgao_emissor = "'".$valor."'";
    };
    $log = $log."Orgão emissor = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."orgao_emissor = {$orgao_emissor}";  
    }else {
        $campos_valores = $campos_valores."orgao_emissor = {$orgao_emissor}, ";
    }
break;
case 'email':
    if (strlen($valor) <= 0){
        $email = 'NULL';
    }else{
        $email = "'".$valor."'";
    };
    $log = $log."E-mail = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."email = {$email}";  
    }else {
        $campos_valores = $campos_valores."email = {$email}, ";
    }
break;
case 'telefone':
    if (strlen($valor) <= 0){
        $telefone = 'NULL';
    }else{
        $telefone = "'".$valor."'";
    };
    $log = $log."Telefone = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."telefone = {$telefone}";  
    }else {
        $campos_valores = $campos_valores."telefone = {$telefone}, ";
    }
break;
case 'celular':
    if (strlen($valor) <= 0){
        $celular = 'NULL';
    }else{
        $celular = "'".$valor."'";
    };
    $log = $log."Celular = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."celular = {$celular}";  
    }else {
        $campos_valores = $campos_valores."celular = {$celular}, ";
    }
break;
case 'cep':
    if (strlen($valor) <= 0){
        $cep = 'NULL';
    }else{
        $cep = "'".$valor."'";
    };
    $log = $log."CEP = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."cep = {$cep}";  
    }else {
        $campos_valores = $campos_valores."cep = {$cep}, ";
    }
break;
case 'endereco':
    if (strlen($valor) <= 0){
        $endereco = 'NULL';
    }else{
        $endereco = "'".$valor."'";
    };
    $log = $log."Endereço = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."endereco = {$endereco}";  
    }else {
        $campos_valores = $campos_valores."endereco = {$endereco}, ";
    }
break;
case 'numero':
    if (strlen($valor) <= 0){
        $numero = 'NULL';
    }else{
        $numero = "'".$valor."'";
    };
    $log = $log."Número = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."numero = {$numero}";  
    }else {
        $campos_valores = $campos_valores."numero = {$numero}, ";
    }
break;
case 'complemento':
    if (strlen($valor) <= 0){
        $complemento = 'NULL';
    }else{
        $complemento = "'".$valor."'";
    };
    $log = $log."Complemento = {$valor}; <br>";  
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."complemento = {$complemento}";  
    }else {
        $campos_valores = $campos_valores."complemento = {$complemento}, ";
    }
break;
case 'bairro':
    if (strlen($valor) <= 0){
        $bairro = 'NULL';
    }else{
        $bairro = "'".$valor."'";
    };
    $log = $log."Bairro = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."bairro = {$bairro}";  
    }else {
        $campos_valores = $campos_valores."bairro = {$bairro}, ";
    }
break;
case 'cidade':
    if (strlen($valor) <= 0){
        $cidade = 'NULL';
    }else{
        $cidade = "'".$valor."'";
    };
    $log = $log."Cidade = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."cidade = {$cidade}";  
    }else {
        $campos_valores = $campos_valores."cidade = {$cidade}, ";
    }
break;
case 'uf':
    if (strlen($valor) <= 0){
        $uf = 'NULL';
    }else{
        $uf = "'".$valor."'";
    };
    $log = $log."UF = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."uf = {$uf}";  
    }else {
        $campos_valores = $campos_valores."uf = {$uf}, ";
    }
break;
case 'placa':
    if (strlen($valor) <= 0){
        $placa = 'NULL';
    }else{
        $placa = "'".$valor."'";
    };
    $log = $log."Placa = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."placa = {$placa}";  
    }else {
        $campos_valores = $campos_valores."placa = {$placa}, ";
    }
break;
case 'modelo':
    if (strlen($valor) <= 0){
        $modelo = 'NULL';
    }else{
        $modelo = "'".$valor."'";
    };
    $log = $log."Modelo = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."modelo = {$modelo}";  
    }else {
        $campos_valores = $campos_valores."modelo = {$modelo}, ";
    }
break;
case 'ano_modelo':
    if (strlen($valor) <= 0){
        $ano_modelo = 'NULL';
    }else{
        $ano_modelo = "'".$valor."'";
    };
    $log = $log."Ano modelo = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."ano_modelo = {$ano_modelo}";  
    }else {
        $campos_valores = $campos_valores."ano_modelo = {$ano_modelo}, ";
    }
break;
case 'ano_fabricacao':
    if (strlen($valor) <= 0){
        $ano_fabricacao = 'NULL';
    }else{
        $ano_fabricacao = "'".$valor."'";
    };
    $log = $log."Ano fabricação = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."ano_fabricacao = {$ano_fabricacao}";  
    }else {
        $campos_valores = $campos_valores."ano_fabricacao = {$ano_fabricacao}, ";
    }
break;
case 'fabricante':
    if (strlen($valor) <= 0){
        $fabricante = 'NULL';
    }else{
        $fabricante = "'".$valor."'";
    };
    $log = $log."Fabricante = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."fabricante = {$fabricante}";  
    }else {
        $campos_valores = $campos_valores."fabricante = {$fabricante}, ";
    }
break;
case 'cor':
    if (strlen($valor) <= 0){
        $cor = 'NULL';
    }else{
        $cor = "'".$valor."'";
    };
    $log = $log."Cor = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."cor = {$cor}";  
    }else {
        $campos_valores = $campos_valores."cor = {$cor}, ";
    }
break;
case 'chassi':
    if (strlen($valor) <= 0){
        $chassi = 'NULL';
    }else{
        $chassi = "'".$valor."'";
    };
    $log = $log."Chassi = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."chassi = {$chassi}";  
    }else {
        $campos_valores = $campos_valores."chassi = {$chassi}, ";
    }
break;
case 'seguradora':
    if (strlen($valor) <= 0){
        $seguradora = 'NULL';
    }else{
        $seguradora = "'".$valor."'";
    };
    $log = $log."Seguradora = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."seguradora = {$seguradora}";  
    }else {
        $campos_valores = $campos_valores."seguradora = {$seguradora}, ";
    }
break;
case 'corretor':
    if (strlen($valor) <= 0){
        $corretor = 'NULL';
    }else{
        $corretor = "'".$valor."'";
    };
    $log = $log."Corretor = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."corretor = {$corretor}";  
    }else {
        $campos_valores = $campos_valores."corretor = {$corretor}, ";
    }
break;
case 'tipo_cadastro':
    if (strlen($valor) <= 0){
        $tipo_cadastro = 'NULL';
    }else{
        $tipo_cadastro = "'".$valor."'";
    };
    $log = $log."Tipo = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."tipo = {$tipo_cadastro}";  
    }else {
        $campos_valores = $campos_valores."tipo = {$tipo_cadastro}, ";
    }
break;
//Informações de tramitação do processo
case 'vistoria_realizada':
    if (strlen($valor) <= 0){
        $vistoria_realizada = 'NULL';
    }else{
        $vistoria_realizada = "'".$valor."'";
    };
    $log = $log."Vistoria realizada = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_vistoria_realizada = {$vistoria_realizada}";  
    }else {
        $campos_valores = $campos_valores."data_vistoria_realizada = {$vistoria_realizada}, ";
    }
break;
case 'autorizacao':
    if (strlen($valor) <= 0){
        $autorizacao = 'NULL';
    }else{
        $autorizacao = "'".$valor."'";
    };
    $log = $log."Autorização = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_autorizacao = {$autorizacao}";  
    }else {
        $campos_valores = $campos_valores."data_autorizacao = {$autorizacao}, ";
    }
break;
case 'entrada':
    if (strlen($valor) <= 0){
        $entrada = 'NULL';
    }else{
        $entrada = "'".$valor."'";
    };
    $log = $log."Entrada = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_entrada = {$entrada}";  
    }else {
        $campos_valores = $campos_valores."data_entrada = {$entrada}, ";
    }
break;
case 'saida':
    if (strlen($valor) <= 0){
        $saida = 'NULL';
    }else{
        $saida = "'".$valor."'";
    };
    $log = $log."Saída = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_saida = {$saida}";  
    }else {
        $campos_valores = $campos_valores."data_saida = {$saida}, ";
    }
break;
case 'icomplemento':
    if (strlen($valor) <= 0){
        $icomplemento = 'NULL';
    }else{
        $icomplemento = "'".$valor."'";
    };
    $log = $log."Complemento realizado = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_complemento_realizado = {$icomplemento}";  
    }else {
        $campos_valores = $campos_valores."data_complemento_realizado = {$icomplemento}, ";
    }
break;
case 'agendamento':
    if (strlen($valor) <= 0){
        $agendamento = 'NULL';
    }else{
        $agendamento = "'".$valor."'";
    };
    $log = $log."Agendamento = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_agendamento = {$agendamento}";  
    }else {
        $campos_valores = $campos_valores."data_agendamento = {$agendamento}, ";
    }
break;
case 'previsao_entrega':
    if (strlen($valor) <= 0){
        $previsao_entrega = 'NULL';
    }else{
        $previsao_entrega = "'".$valor."'";
    };
    $log = $log."Previsão entrega = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_previsao_entrega = {$previsao_entrega}";  
    }else {
        $campos_valores = $campos_valores."data_previsao_entrega = {$previsao_entrega}, ";
    }
break;
case 'entregue':
    if (strlen($valor) <= 0){
        $entregue = 'NULL';
    }else{
        $entregue = "'".$valor."'";
    };
    $log = $log."Entrega = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_entrega = {$entregue}";  
    }else {
        $campos_valores = $campos_valores."data_entrega = {$entregue}, ";
    }
break;
case 'dtRetorno':
    if (strlen($valor) <= 0){
        $dtRetorno = 'NULL';
    }else{
        $dtRetorno = "'".$valor."'";
    };
    $log = $log."Retorno = {$valor}; <br>";
    if(count($lista_valor) == ($i+1)){
        $campos_valores = $campos_valores."data_retorno = {$dtRetorno}";  
    }else {
        $campos_valores = $campos_valores."data_retorno = {$dtRetorno}, ";
    }
break;
// case 'tc':
//     if (strlen($valor) <= 0){
//         $tc = 'NULL';
//     }else{
//         $tc = "'".$valor."'";
//     };
//     $log = $log."Retorno = {$valor} <br>";
//     if(count($lista_valor) == ($i+1)){
//         $campos_valores = $campos_valores."data_retorno = {$tc}";  
//     }else {
//         $campos_valores = $campos_valores."data_retorno = {$tc}, ";
//     }
// break;
default:
break;
}