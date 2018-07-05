<?php
include("../conexao/conexao.php");


function insere($conexao, $campos , $valores , $tabela ) {
    $query = "INSERT INTO {$tabela} ({$campos}) VALUES ({$valores})";

    if(mysqli_query($conexao, $query)){
        $id = mysqli_insert_id($conexao);
        return $id;
    }
    else{
        echo mysqli_error($conexao);
        die();
     }
}

function busca_detalhada_varios($conexao, $condicao , $tabela , $campos = null){

    $resultados = array();
    if ($campos){
        $query = "SELECT {$campos} FROM {$tabela} WHERE {$condicao} ";
    } else {
        $query = "SELECT * FROM {$tabela} WHERE {$condicao}";
    }

    $result = mysqli_query($conexao, $query);

    if ($result == true) {
        while ($resultado = mysqli_fetch_assoc($result)) {
            array_push($resultados, $resultado);
        }
        return $resultados ;
    }
}

function busca_todos($conexao,  $tabela){
    $resultados = array();
    $query = "SELECT * FROM {$tabela}";
    $result = mysqli_query($conexao, $query);


    if ($result == true) {
        while ($resultado = mysqli_fetch_assoc($result)) {
            array_push($resultados, $resultado);
        }
        return $resultados ;
    }

}

function busca_detalhada_um($conexao, $condicao , $tabela , $campos = null){
    $query = "";

    if ($campos){
        $query = "SELECT {$campos} FROM {$tabela} WHERE {$condicao} ";
    }else{
        $query = "SELECT * FROM {$tabela} WHERE {$condicao} ";
    }

    $result = mysqli_query($conexao, $query);
    $resultado = mysqli_fetch_assoc($result);

    return $resultado;
}

function altera($conexao, $campos_valores, $condicao = null, $tabela) {

    $query = "";

    if ($condicao){
        $query = "UPDATE {$tabela} SET {$campos_valores} WHERE {$condicao} ";
    }else{
        $query = "UPDATE {$tabela} SET {$campos_valores} ";
    }

    if(mysqli_query($conexao, $query)){
        $id = mysqli_insert_id($conexao);
        return $id;
    }else{
        echo mysqli_error($conexao);
        die();
    }
}

function deleta($conexao , $tabela , $condicao){
    $query = "DELETE FROM  {$tabela} WHERE {$condicao} ";

    if(mysqli_query($conexao, $query)){
        $id = mysqli_insert_id($conexao);
        return $id;
    }else{
        echo mysqli_error($conexao);
        die();
    }
}

function logaUsuario($usuario) {
    $_SESSION["usuarioLogado"] = true;
    $_SESSION["perfilUsuario"] = $usuario['perfil_id'];
    $_SESSION["usuario"] = $usuario['login'];
    $_SESSION["meu_id_funcionario"] = $usuario['id'];
    $_SESSION["nomeUsuario"] = $usuario['nome'];
    $_SESSION["textoPerfil"] = $usuario['perfil'];
    $_SESSION["perfil"] = $usuario['id_perfil'];
    //$_SESSION['img_usurio'] = $usuario['url_imagem'];
    //$_SESSION['cargo'] = $usuario['cargo'];
 }

 function logout() {
     session_destroy();
 }

?>
