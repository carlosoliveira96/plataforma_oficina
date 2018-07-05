<?php
session_start();
if(!isset($_SESSION['meu_id_funcionario'])){
    header("Location:login.php");
}
?>
<html lang="pt-br" style="min-height:100%; position: relative;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal da Oficina</title>
        <link rel="shortcut icon" href="" type="image/x-icon">
        <!-- Arquivos CSS -->
        <link rel="stylesheet" href="static/css/bootstrap.css">
        <link rel="stylesheet" href="static/css/jasny-bootstrap.css">
        <link rel="stylesheet" href="static/css/jquery-ui.css">
        <link rel="stylesheet" href="static/css/menu-custom.css">
        <link rel="stylesheet" href="static/css/fontawesome-all.css">
        <link rel="stylesheet" href="static/css/customScrollbar.css">
        <!-- Arquivos JS -->
        <script src="static/js/jquery.js"></script>
        <script src="static/js/popper.js"></script>
        <script src="static/js/jasny-bootstrap.min.js"></script>
        <script src="static/js/bootstrap.js"></script>
        
        <script src="static/js/menu-custom.js"></script>
        <script src="static/js/auxilio.js"></script>
        <script src="static/js/jquery-ui.js"></script>
        <script src="static/js/customScrollbat.js"></script>
        <script src="static/js/fontawesome-all.js"></script>
    </head>
    <body id="body">
    <div id="preloader" class="carregando" style="display: none">
        <img src="static/gif/loading.gif" style="position: fixed; margin-top: 25%; margin-left: 45%;">
    </div>
    <div class="page-wrapper cool-theme toggled" id="div">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
            <span class="badge badge-pill badge-warning notification" id="qtd_notificacao2"></span>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="inicio.php" title="Página inícial">CRT</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo $_SESSION["nomeUsuario"] ?></strong>
                            <input type="hidden" value="<?php echo $_SESSION['meu_id_funcionario']?>" id="meu_id">
                            <input type="hidden" value="<?php echo $_SESSION["nomeUsuario"] ?>" id="meu_nome">
                        </span>
                        <span class="user-role"><?php echo $_SESSION["textoPerfil"] ?></span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-menu">
                    <ul>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-clipboard"></i>
                            <span>Administrativo</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="empresa.php">Empresa</a>
                                </li>
                                <li>
                                    <a href="funcionarios.php">Funcionários</a>
                                </li>
                                <li>
                                    <a href="expedientesAdm.php">Expedientes</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-chart-line"></i>
                            <span>Financeiro</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="funcionarioListar.php">Funcionários</a>
                                </li>
                                <li>
                                    <a href="#">Atendimentos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-pencil-alt"></i>
                            <span>Manutenção</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="servicos.php">Serviços</a>
                                </li>
                                <li>
                                    <a href="expedientes.php">Expedientes</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-paste"></i>
                            <span>Atendimento</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="cliente&veiculo.php">Cliente & Veículo

                                    </a>
                                </li>
                                <li>
                                    <a href="fornecedor.php">Fornecedor</a>
                                </li>
                                <li>
                                    <a href="seguradora.php">Seguradora</a>
                                </li>
                                <li>
                                    <a href="corretor.php">Corretor</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-print"></i>
                            <span>Relatórios</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Administrativo</a>
                                </li>
                                <li>
                                    <a href="#">Financeiro</a>
                                </li>
                                <li>
                                    <a href="#">Atendimento</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#" title="Notificação de mensagem" onclick="buscarNotificacoes(1);" data-toggle="modal" data-target="#notificacao">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification" id="qtd_notificacao"></span>
                </a>
                <a href="#" title="Comunicador" onclick="buscarfuncionarios();" data-toggle="modal" data-target="#comunicacao">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="#" title="Sair" onClick="logout()">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">

        <div class="modal fade" id="comunicacao"  tabindex="-1" role="dialog" aria-labelledby="comunicacaoInterna" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Comunicador</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="height: 70%" id="comunicador-body" >
                        <div class="row">
                            <div class="col-4" >
                                <div class="row">
                                    <div class="col-12">
                                        <table class="table" style="margin: 0">
                                            <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <td>Funcionário</td>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="col-12" id="col-4" style="overflow-y: auto ; height: 90%">
                                        <table class="table">
                                            <tbody id="tbody_conversas"></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div  class="card" id="card_msg" style="height: 100%">
                                    <div class="card-header">
                                        <div class="row" >
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-2" id="img_contato"  >
                                                        <img src=""  style="margin-left:0.5rem" class="rounded-circle" height="50" width="50">
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="hidden" id="id_contato">
                                                        <input type="hidden" id="input_nome_contato">
                                                        <div style="margin-top:0.5rem"><b id="nome_contato">Usuário</b></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="chat-box" class="card-body" style="overflow-x: hidden">
                                        <!--
                                        <div class="row" style="margin-top: 1rem">
                                            <div class="col-10" style="margin-left:0.5rem">
                                                <div class="card text-white bg-primary ">
                                                    <div class="body" style="margin-top:0.5rem ; margin-bottom : 0.5rem">
                                                        <div style="margin-left:0.5rem"><strong>Usuário</strong></div>
                                                        <div style="margin-left:1rem">teste</div> 
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="row justify-content-end" style="margin-top: 1rem">
                                            <div class="col-10 " style="margin-right:0.5rem">
                                                <div class="card text-white bg-success ">
                                                    <div class="body" style="margin-top:0.5rem ; margin-bottom : 0.5rem">
                                                        <div style="margin-right:0.5rem"  class="text-right"><strong>Usuário</strong></div>
                                                        <div style="margin-right:1rem" class="text-right">teste</div> 
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                        -->
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-11">
                                                <textarea placeholder="Mensagem..." id="chat-message" rows="4" class="form-control"></textarea>
                                            </div>
                                            <div class="col-1" style="padding:0">
                                                <button class="btn btn-dark btn-sm" id="btnSend" name="send-chat-message" title="Enviar"> 
                                                    <i class="fa fa-share-square float-left" style="height: 3.5rem"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="notificacao"  tabindex="-1" role="dialog" aria-labelledby="notificaaco" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Notificações</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="height: 70%" id="comunicador-body" >
                        <div class="row">
                            <div class="col-12 col align-self-end">
                                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                                    <label class="btn btn-outline-secondary btn-sm" onclick="buscarNotificacoes(1);">
                                        <input type="radio" name="options" id="option1" autocomplete="off"  checked> Não lidas
                                    </label>
                                    <label class="btn btn-outline-secondary btn-sm" onclick="buscarNotificacoes(0);">
                                        <input type="radio" name="options" id="option2" autocomplete="off" >Lidas
                                    </label>

                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 0.5rem">
                            <div class="col-12" style="overflow-y: auto ; height: 90%">
                                <table class="table table-bordered">
                                    <thead class="">
                                        <tr>
                                            <th><small>Data</small></th>
                                            <th><small>Notificação</small></th>
                                            <th><small>#</small></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_notificacao" >
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
<script>

    var lista_id_conversa = [];
    var lista_funcionario = [];
    var lista_funcionarios_selecionados = [];
    var meu_id = $('#meu_id').val();
    var meu_nome = $('#meu_nome').val();
    var altura = $('#chat-box').height();

    $('#card_msg').hide();

    function showMessage(messageHTML) {
        $('#chat-box').append(messageHTML);
    }

    var altura = $('#chat-box').height();

    $(document).ready(function(){
        var websocket = new WebSocket("ws://localhost:8090/php-socket.php"); 
        websocket.onopen = function(event) { 
           // showMessage("<div class='chat-connection-ack'>Connection is established!</div>");       
        }
        websocket.onmessage = function(event) {
            var id_contato_aberto = $('#id_contato').val();
            var data = JSON.parse(event.data);
            
            var string_nome = data.meu_nome;

            var nome = string_nome.substring(0 , 25);

            if(data.meu_nome.length > 25){
                nome +="...";
            }

            //createChatBoxMessage( $meu_id ,$id_contado , $lista_id , $mensagem , $data , $hora , $meu_nome )
            if(data.meu_id != null){
                if(data.meu_id == meu_id ){
                    var html = '<div class="row justify-content-end" style="margin-top: 1rem">';
                        html += '<div class="col-10 " style="margin-right:0.5rem">';
                        html += '<div class="card text-white bg-success ">';
                        html += '<div class="body" style="margin-top:0.5rem ; margin-bottom : 0.5rem">';
                        html += '<div style="margin-right:0.5rem"  class="text-right"><small>'+data.data+' - '+data.hora+' &nbsp;&nbsp; </small><strong> Eu </strong></div>';
                        html += '<div style="margin-right:1rem" class="text-right">'+data.mensagem+'</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                    showMessage(html);
                }else if(data.contado_id == meu_id && data.meu_id == id_contato_aberto ){
                    var html = '<div class="row" style="margin-top: 1rem">';
                        html += '<div class="col-10" style="margin-left:0.5rem">';
                        html += '<div class="card text-white bg-primary ">';
                        html += '<div class="body" style="margin-top:0.5rem ; margin-bottom : 0.5rem">';
                        html += '<div style="margin-left:0.5rem"><strong titlle="'+data.meu_nome+'">'+nome+'</strong><small> &nbsp;&nbsp;'+data.data+' - '+data.hora+'</small></div>';
                        html += '<div style="margin-left:1rem">'+data.mensagem+'</div>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';    
                        html += '</div>';
                    showMessage(html);
                    atualiza_notificacao(data.data , data.hora , meu_id);
                }else if(data.contado_id == meu_id && data.meu_id != id_contato_aberto ){
                    busca_quantidade_notificacao();
                }
            } 

            altura += 90;

            $('#chat-box').animate({
                    scrollTop: altura
                }, 500);

            $('#chat-message').val('');
        };
        
        websocket.onerror = function(event){
            showMessage("<div class='error'>Problem due to some Error</div>");
        };
        websocket.onclose = function(event){
            showMessage("<div class='chat-connection-ack'>Connection Closed</div>");
        }; 

        
        $('#btnSend').click(function(e){

            var data2 = new Date();
            // Guarda cada pedaço em uma variável
            var dia     = data2.getDate();           // 1-31
            var mes     = data2.getMonth();          // 0-11 (zero=janeiro)
            var ano4    = data2.getFullYear();       // 4 dígitos
            var hora    = data2.getHours();          // 0-23
            var min     = data2.getMinutes();        // 0-59
            // Formata a data e a hora (note o mês + 1)

            if (dia < 10){
                dia = "0"+ dia;
            }

            var m1 = mes+1;
            if (m1 < 10){
                m1 = "0"+ m1;
            }

            if (min < 10){
                min = "0"+ min;
            }

            if (hora < 10){
                hora = "0"+ hora;
            }

            var str_hora = hora +':'+min;
            var str_data = dia + '/' + m1 + '/' + ano4;
            
            var id_contato = $('#id_contato').val();
            var messageJSON = {};

            messageJSON = {
                meu_id : meu_id, 
                contado_id : id_contato, 
                lista_id : lista_id_conversa, 
                mensagem : $('#chat-message').val(),
                hora : str_hora,
                data : str_data,
                meu_nome: meu_nome
            };

            var texto = $('#chat-message').val();

            if (texto.length > 0){          
                salva_mensagem(messageJSON);
            }else{
                messageJSON = {
                meu_id : null, 
                contado_id : null, 
                lista_id : null, 
                mensagem : null,
                hora : null,
                data : null,
                meu_nome: null
            };
            }

            $('#chat-message').val('');
            websocket.send(JSON.stringify(messageJSON));
        });

        $('#chat-box').append(messageHTML);
    });

    function buscarfuncionarios(id){
        var data = {funcao: 'busca_funcionarios', meu_id : meu_id};
        var html ;
        $.ajax({
            url: 'controller/chat.php',
            method: "post",
            data: data ,
            success: function(data){ 
                if(data){
                    var resultado = JSON.parse(data);

                    if(resultado.length > 0){
                        var html = '';
                        lista_funcionario = resultado;
                        $('#tbody_conversas').html('');
                        var posicao = -1;
                        for(var i = 0 ; i < resultado.length ; i++){
                    
                            var string_nome = resultado[i].nome;

                            var nome = string_nome.substring(0 , 15);

                            if(resultado[i].nome.length > 15){
                                nome +="...";
                            }
                    
                            html+="<tr>";
                            if(id == resultado[i].id){
                                html+="<td><input type='checkbox' checked id='"+resultado[i].id+"c_chat' onclick='addConversa("+resultado[i].id+","+i+")'></td>";
                            }else{
                                html+="<td><input type='checkbox'  id='"+resultado[i].id+"c_chat' onclick='addConversa("+resultado[i].id+","+i+")'></td>";                                
                            }
                            html+="<td>"+nome+"</td>";
                            html+="</tr>";

                            if(id == resultado[i].id){
                                posicao = i;
                            }
                        }
                        $('#tbody_conversas').append(html);
                        if(posicao >= 0){
                            addConversa(id , posicao);
                        }
                    }
                }
            }
        })
    }

    function addConversa(id , posicao ){

        var check_id = $('#'+id+'c_chat');
        $('#chat-box').html('');
        
        if(check_id.is(":checked")){
            lista_id_conversa.push(id);
            lista_funcionarios_selecionados.push(lista_funcionario[posicao]);
        }else{            
            remove_id(id , posicao);
        }

        var posicao =  lista_funcionarios_selecionados.length - 1;
        if(lista_funcionarios_selecionados.length == 0){
            $('#card_msg').hide();
            $('#img_contato').html('');
            $('#nome_contato').html('');
            $('#input_nome_contato').val('');
            $('#id_contato').val("");
            lista_id_conversa = [];
        }else{
            var html = "";
            if(lista_funcionarios_selecionados[posicao].url_imagem == null){
                html += '<img src="static/img/user.png"  style="margin-left:0.5rem" class="rounded-circle" height="35" width="35">';
            }else{
                html += '<img src="imagens/'+lista_funcionarios_selecionados[posicao].url_imagem+'"  style="margin-left:0.5rem" class="rounded-circle" height="35" width="35">';
            }
            
            altura = $('#chat-box').height();

            $('#img_contato').html(html);
            $('#nome_contato').html(lista_funcionarios_selecionados[posicao].nome);
            $('#input_nome_contato').val(lista_funcionarios_selecionados[posicao].nome);
            $('#id_contato').val(lista_funcionarios_selecionados[posicao].id);
            
            $('#card_msg').show();

            var data = {
                funcao : 'busca_conversa',
                meu_id : meu_id,
                funcionario_id : lista_funcionarios_selecionados[posicao].id
            };

            $.ajax({
                url: 'controller/chat.php',
                method: "post",
                data: data ,
                success: function(data){ 
                    if(data){
                        var resultado = JSON.parse(data);
                        if(resultado.length > 0){
                            var nome_contato =  $('#input_nome_contato').val();

                            var nome = nome_contato.substring(0 , 25);

                            if(nome_contato.length > 25){
                                nome +="...";
                            }

                            for(var i=0; i<resultado.length ; i++){
                                if(resultado[i].funcionario_de == meu_id ){
                                    var html = '<div class="row justify-content-end" style="margin-top: 1rem">';
                                        html += '<div class="col-10 " style="margin-right:0.5rem">';
                                        html += '<div class="card text-white bg-success ">';
                                        html += '<div class="body" style="margin-top:0.5rem ; margin-bottom : 0.5rem">';
                                        html += '<div style="margin-right:0.5rem"  class="text-right"><small>'+resultado[i].data+' - '+resultado[i].hora+' &nbsp;&nbsp; </small><strong> Eu </strong></div>';
                                        html += '<div style="margin-right:1rem" class="text-right">'+resultado[i].conteudo+'</div>';
                                        html += '</div>';
                                        html += '</div>';
                                        html += '</div>';
                                        html += '</div>';
                                    showMessage(html);
                                }else{
                                    var html = '<div class="row" style="margin-top: 1rem">';
                                        html += '<div class="col-10" style="margin-left:0.5rem">';
                                        html += '<div class="card text-white bg-primary ">';
                                        html += '<div class="body" style="margin-top:0.5rem ; margin-bottom : 0.5rem">';
                                        html += '<div style="margin-left:0.5rem"><strong>'+nome+'</strong><small> &nbsp;&nbsp;'+resultado[i].data+' - '+resultado[i].hora+'</small></div>';
                                        html += '<div style="margin-left:1rem">'+resultado[i].conteudo+'</div>';
                                        html += '</div>';
                                        html += '</div>';
                                        html += '</div>';    
                                        html += '</div>';
                                    showMessage(html);
                                }
                                altura += 90;
                            }
                                
                            $('#chat-box').animate({
                                scrollTop: altura
                            }, 5);

                        }
                    }
                }
            })
        }        
    }

    function remove_id(id , posicao){
        var nova_lista = lista_id_conversa;
        lista_id_conversa = [];
        for(var i = 0; i < nova_lista.length ; i++ ){
            if ( nova_lista[i] != id ){
                lista_id_conversa.push(nova_lista[i]);
            }
        }

        var nova_lista_posicao = lista_funcionarios_selecionados;
        lista_funcionarios_selecionados = [];
        for(var i = 0; i < nova_lista_posicao.length ; i++ ){
            if ( nova_lista_posicao[i].id != id ){
                lista_funcionarios_selecionados.push(nova_lista_posicao[i]);
            }
        }

    }
     
    busca_quantidade_notificacao();

    function busca_quantidade_notificacao(){

        var data = {
            funcao : 'busca_quantidade_notificacoes',
            meu_id : meu_id,
        };

        $.ajax({
            url: 'controller/chat.php',
            method: "post",
            data: data ,
            success: function(data){ 
                if(data){
                    $('#qtd_notificacao').html(data);
                    $('#qtd_notificacao2').html(data);
                }
            }
        });
    }

    function salva_mensagem(dados){

        var lista_id = {
            id : lista_id_conversa
        }

        var data = {
            funcao : 'salva_mensagem',
            meu_id : meu_id , 
            id_contato : dados.contado_id ,
            lista_id : JSON.stringify(lista_id) , 
            data : dados.data , 
            hora : dados.hora , 
            mensagem : dados.mensagem
        };

        $.ajax({
            url: 'controller/chat.php',
            method: "post",
            data: data ,
            success: function(data){
            }
        })      
    }

    lista_notificacao = [];
    function buscarNotificacoes(status){
       
        data = {
            funcao : "buscar_notificacoes" ,
            id : meu_id , 
            status : status,
        }

        $.ajax({
            url: 'controller/chat.php',
            method: "post",
            data: data ,
            success: function(data){
                if(data){
                    var resultado = JSON.parse(data);
                    lista_notificacao = resultado;
                    if(resultado.length > 0){
                        var html = "";
                        for(var i = 0; i < resultado.length ; i++){
                            html += "<tr>";
                            html += "<td>"+resultado[i].data+"</td>";
                            html += "<td>"+resultado[i].descricao+"</td>";
                            if(status == 1){
                                html += "<td><button class='btn btn-dark btn-sm' onclick='vizualizarMensagem("+i+")'><i class='fa fa-external-link-alt'></i></button</td>";
                            }else{
                                html += "<td><div class='row'><div class='col-6'><button class='btn btn-dark btn-sm' onclick='vizualizarMensagem("+i+")'><i class='fa fa-external-link-alt'></i></button></div>"+                                
                                        "<div class='col-6' style='padding-left:0.3rem'><button class='btn btn-dark btn-sm' onclick='apagarMensagem("+i+")'><i class='fa fa-trash'></i></button></td></div></div>";                                
                            }
                            html += "</tr>";
                        }
                        $('#tbody_notificacao').html(html);
                    }
                }else{
                    var html = "";
                    $('#tbody_notificacao').html(html);                    
                }
            }
        })  
    }

    function vizualizarMensagem(posicao){
        var notificacao = lista_notificacao[posicao];

        data = {
            funcao : "buscar_mensagem_notificacao" ,
            id : notificacao.id
        }

        $.ajax({
            url: 'controller/chat.php',
            method: "post",
            data: data ,
            success: function(data){
                if(data){
                    var resultado = JSON.parse(data);
                    if(resultado.cliente_id == null){
                        
                        buscarfuncionarios(resultado.funcionario_de);
                        
                        $('#notificacao').modal('hide');
                        $('#comunicacao').modal('show');
                    }else{
                        window.location.href='detalhamento.php?codOS='+resultado.cliente_id;
                    }

                    busca_quantidade_notificacao();

                }
            }
                
        }) 
        
    }

    function apagarMensagem(posicao){
        
        var notificacao = lista_notificacao[posicao];

        data = {
            funcao : "apagar_notificacao" ,
            id : notificacao.id
        }

        $.ajax({
            url: 'controller/chat.php',
            method: "post",
            data: data ,
            success: function(data){
                buscarNotificacoes(0);
                busca_quantidade_notificacao();
            }
                
        }) 
    }

    function atualiza_notificacao( data , hora , id){
        data = {
            funcao : "atualiza_notificacao" ,
            data : data,
            hora : hora,
            id : id
        }

        $.ajax({
            url: 'controller/chat.php',
            method: "post",
            data: data ,
            success: function(data){
                buscarNotificacoes(0);
                busca_quantidade_notificacao();
            }
                
        }) 
    }

    $('#comunicacao').on('hidden.bs.modal', function (e) {
        $('#card_msg').hide();
        $('#img_contato').html('');
        $('#nome_contato').html('');
        $('#input_nome_contato').val('');
        $('#id_contato').val("");
        lista_funcionarios_selecionados = [];
        lista_id_conversa = [];
    });

</script>
