<?php
session_start();
if (isset($_SESSION["usuarioLogado"])){
    header("Location:controle.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br" style="min-height:100%; position: relative;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plataforma da Oficina</title>

        <!-- Arquivos CSS -->
        <link href="static/css/bootstrap.css" rel="stylesheet">
        <link  href="static/css/fontawesome-all.min.css" rel="stylesheet">
        <!-- Arquivos JS -->
        <script type="text/javascript" src="static/js/jquery.js"></script>
    </head>
    <body>
        <div style="background-color: #343A40">
            <p class="text-center">
                <b>
                    <font class="text-center" size="10" color="white">
                        Plataforma da Oficina
                    </font>
                </b>
            </p>
        </div>
        <hr style="border: 1px solid rgba(0, 0, 0, 0.5)">
        <div class="container col-6" style="margin-top: 5%;">
            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.5)">
                <div class="card-header text-center" style="border-bottom: 1px solid rgba(0, 0, 0, 0.5)">
                    <b>Primeiro Acesso</b>
                </div>
                <div class="card-body">
                    <div id="erro">
                        <div class="alert alert-danger"> <strong id="msg_erro">Usuário inválido</strong> </div>
                        <a href="login.php">Voltar</a>
                    </div>
                    <div id="sucesso_alteracao">
                        <div class="alert alert-success"> <strong>Senha Alterada com Sucesso</strong> </div>
                        <a href="login.php">Fazer Login</a>                        
                    </div>
                    <div id="sucesso">
                        <div class="row"  style="margin-top: 2rem">
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text" id="sizing-addon1"><i class="fas fa-unlock-alt"></i></span>
                                    <input type="text" id="cpf" disabled class="form-control" placeholder="cpf..." aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="text-danger small"></div>
                            </div>
                        </div>
                        <div class="row"  style="margin-top: 2rem">
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text" id="sizing-addon1"><i class="fas fa-unlock-alt"></i></span>
                                    <input type="password" id="senha1" class="form-control" placeholder="Nova senha..." aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="text-danger small"></div>
                            </div>
                        </div>
                        <div class="row"  style="margin-top: 2rem">
                            <div class="col-12">
                                <div class="input-group">
                                    <span class="input-group-text" id="sizing-addon1"><i class="fas fa-unlock-alt"></i></span>
                                    <input type="password" id="senha2" class="form-control" placeholder="Confirme a senha..." aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="text-danger small"></div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-dark btn-sm btn-block" onclick="enviar()" style="margin-top: 1rem">
                                <i class="fas fa-sign-in-alt float-left" style="margin-top: 0.3rem;"></i> <b>Alterar</b>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="static/js/popper.js"></script>
    <script type="text/javascript" src="static/js/bootstrap.js"></script>
    </body>

    <script>

    $('#erro').hide();
    $('#sucesso_alteracao').hide();

    var query = location.search.slice(1);
    var partes = query.split('&');
    var cpf = 0;
    var data = {};
    partes.forEach(function (parte) {
        var chaveValor = parte.split('=');
        var chave = chaveValor[0];
        var valor = chaveValor[1];
        data[chave] = valor;
    });

    cpf = data.cpf;

    if(cpf == 0 || cpf == undefined || cpf == ""){
        $('#erro').show();
        $('#sucesso').hide();
    }else{
        $('#erro').hide();
        $('#sucesso').show();
    }

    consultar();

    document.addEventListener('keypress', function(e){
        if(e.which == 13){
            enviar();
        }
    }, false);

    function consultar(){

        var data = {
            funcao : "consultar_login",
            cpf: cpf
        };

        $.ajax({
            url: 'controller/login.php',
            method: "post",
            data: data,
            success: function(data){
                if(data == '1'){
                    $('#erro').hide();
                    $('#sucesso').show();
                    $('#cpf').val(cpf);                    
                }else{
                    $('#erro').show();
                    $('#sucesso').hide();
                }
            }
        });
    }

    function enviar(){
        var senha1 = $('#senha1').val();
        var senha2 = $('#senha2').val();
        var validacao_ok = true;

        if (senha1.length == 0){
            validacao_ok = false;
            add_erro_input($('#senha1') , "Informe sua nova senha");
        } else {
            remove_erro_input($('#senha1'));
        }

        if (senha2.length == 0){
            validacao_ok = false;
            add_erro_input($('#senha2') , "As senhas não são iguais");
        } else {
            remove_erro_input($('#senha2'));
        }

        if (senha2 != senha1){
            validacao_ok = false;
            add_erro_input($('#senha2') , "As senhas não são iguais");
        } else {
            remove_erro_input($('#senha2'));
        }

        if (validacao_ok){
            var data = {
                login: cpf,
                senha: senha2,
                funcao: "alterar_senha_primeiro_acesso"
            };
            $.ajax({
                url: 'controller/login.php',
                method: "post",
                data: data,
                success: function(data){
                    if(data == 1){
                        $('#erro').hide();
                        $('#sucesso').hide();
                        $('#sucesso_alteracao').show();
                    }else{
                        $('#erro').show();
                        $('#msg_erro').html("Ocorreu um erro, tente novamente mais tarde!");
                        $('#sucesso').hide();
                        $('#sucesso_alteracao').hide();
                    }
                }
            });
        }
    }

    function add_erro_input(input , msg){
        input.addClass("is-invalid");
        input.parent().next().html(msg);
    }

    function remove_erro_input(input){
        input.removeClass("is-invalid");
        input.parent().next().html("");
    }
    </script>
</html>
