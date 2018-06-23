<?php
include 'menu.php';
?>
<h2>
<p class="text-center small" style="color: #000"><b>Expedientes</b></p>
</h2>
<hr>
<div id="msg_expediente">

</div>
<div id="msg">

</div>
<table class="table table-striped table-bordered table-hover" id="peças">
    <thead >
        <tr>
            <th class="col-12">
                <input type="text" class="form-control small" placeholder="Pesquise pelo nome do expediemte">
            </th>
            <th class="col-3">
                <a href="#" class="btn btn-dark btn-sm col-12" data-toggle="modal" data-target="#incluiExpediente">
                    <i class="fas fa-plus" style="margin-top: 0.1rem; margin-right: 0.5rem"></i> Cadastrar expediente
                </a>
            </th>
        </tr>
    </thead>
    <tbody id="expedientes">
        
    </tbody>
</table>
<nav>
    <ul class="pager" id="paginacao">
        
    </ul>
</nav>

<!-- Modal incluir expediente -->
<div class="modal fade" data-backdrop="static" id="incluiExpediente" tabindex="-1" role="dialog" aria-labelledby="adicionaExpediente" aria-hidden="true">
    <div class="modal-dialog modal-md" id="modal_expedientes" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo_modal"><b>Cadastro de expedientes</b></h5>
                <button type="button" class="close" onclick="listar();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="adicionaPeca-body" style="overflow-y: auto">
                <div id="msg_sucesso">
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6 class="small" style="margin-top:1rem">Título do expediente</h6>
                        <div class="input-group ">
                            <input type="text" hidden id="id_expediente">
                            <input type="text" id="titulo_expediente" class="form-control small" placeholder="Ex.: Exemplo">
                        </div>
                        <div class="text-danger"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6 class="small" style="margin-top:1rem">Descrição do expediente</h6>
                        <div class="input-group ">
                            <textarea id="descricao_expediente" class="form-control small"  placeholder="Ex.: Exemplo"></textarea>
                        </div>
                        <div class="text-danger"></div>
                    </div>
                </div>
                <div class="row" id="data_criacao" hidden>
                    <div class="col-12">
                        <h6 class="small" style="margin-top:1rem">Data da criação</h6>
                        <div class="input-group ">
                            <input type="text" id="data_expediente" class="form-control small" placeholder="Ex.: Exemplo">
                        </div>
                        <div class="text-danger"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6 class="small" style="margin-top:1rem">Observações</h6>
                        <div class="input-group ">
                            <textarea id="observacao_expediente" class="form-control small"  placeholder="Ex.: Exemplo"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="botao_cadastrar" type="button" onclick="cadastro()" class="btn btn-sm btn-dark btn-block">
                    <i class="fa fa-check float-left" style="margin-top: 0.3rem;"></i> Salvar
                </button>
                <button id="botao_alterar" hidden type="button" onclick="salva_alteracao()" class="btn btn-sm btn-dark btn-block">
                    <i class="fa fa-check float-left" style="margin-top: 0.3rem;"></i> Salvar
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Fim modal incluir expediente -->
<!-- Modal imprimir -->
<div class="modal fade" id="imprimir-expediente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="titulo-modal-expediente">{Titulo do expediente}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row" style="max-height: 50%; overflow-y: auto;">
                <table class="table table-striped table-bordered table-hover" id="veiculos-expediente">
                    <thead >
                        <tr>
                            <th>
                                
                            </th>
                            <th>
                                <input type="text" class="form-control small" placeholder="Nome" id="nome-expediente">
                            </th>
                            <th>
                                <input type="text" class="form-control small" placeholder="Carro" id="carro-expediente">
                            </th>
                            <th>
                                <input type="text" class="form-control small" placeholder="Sinistro" id="sinistro-expediente">
                            </th>
                            <th>
                                <input type="text" class="form-control" placeholder="Placa" data-mask="99/99/9999" id="placa-expediente">
                            </th>
                        </tr>
                    </thead>
                    <tbody id="expedientes">
                        <tr>
                            <td scope="row" class="small">
                                <input type="radio" name="veiculo-seleciona" value="teste">
                            </td>
                            <td scope="row" class="small">Nome do cliente</td>
                            <td scope="row" class="small">Ford KA</td>
                            <td scope="row" class="small">123456789</td>
                            <td scope="row" class="small">OVP-0001</td>
                        </tr>
                        <tr>
                            <td scope="row" class="small">
                                <input type="radio" name="veiculo-seleciona" value="teste2">
                            </td>
                            </div>
                            <td scope="row" class="small">Nome do cliente</td>
                            <td scope="row" class="small">Ford KA</td>
                            <td scope="row" class="small">123456789</td>
                            <td scope="row" class="small">OVP-0001</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <h6 class="small" style="margin-top:1rem">Descrição do expediente</h6>
                    <div class="input-group ">
                        <textarea id="descricao_imprimir" class="form-control small" rows="4" placeholder="Ex.: Exemplo"></textarea>
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark btn-sm">
                <span class="fas fa-print"></span> Imprimir
            </button>
        </div>
        </div>
    </div>
</div>
<!-- Fim modal imprimir -->
</main>
</div>
</body>
<script>
listar();
//Lista os expedientes cadastrados
var nr_pag = 1;
var lista_registros ;

function atualiza_nr_pag(numero){
    nr_pag = numero;
    monta_lista(lista_registros);
}

function listar(){
    $('#paginacao').html("")
    $('#expedientes').html("");
    $('#preloader').show();
    var data = {
        funcao: "consultar"
    };
    $.ajax({
        url: 'controller/expedientes.php',
        method: "post",
        data: data ,
        success: function(data){
            if (!data){
                $('#preloader').hide();
                monta_msg_alerta_permanente(" Você não possui expedientes. Clique em <b>cadastrar expediente</b> para iniciar uma inclusão.")
            }else {
                remove_msg_expediente();
                var lista = $.parseJSON(data);
                lista_registros = lista;
                monta_lista(lista_registros);          
            }
        }
    });
}

function monta_lista(lista){
    $('#paginacao').html("");
    $('#expedientes').html("");
    var qtd_pag = lista.length / 14 ;
    qtd_pag = parseInt(qtd_pag);
    var ultima_pag = lista.length % 14;
    if(ultima_pag != 0){
        qtd_pag += 1 ;
    }
    //Paginação começa aqui
    var active = "";
    if (nr_pag == 1){
        active = 'disabled';
    }
    var html2 = '<li class="'+active+'">'
                    +'<a href="#" onclick="atualiza_nr_pag(1)">Primeira</a>'
                +'</li>'
                +'<li class="'+active+'">'
                    +'<a href="#" onclick="atualiza_nr_pag('+(nr_pag-1)+')"><</a>'
                +'</li>';
    $('#paginacao').append(html2);
    var inicio = 0;
    inicio = (nr_pag * 14) - 14  ;
    for(var i = 1 ; i <= qtd_pag ; i++){
        var active = "";
        if (nr_pag == i){
            active = 'active';
        }
        var html = '<li class="' +active+'"><a href="#" onclick="atualiza_nr_pag('+i+')">'+i+'</a></li>';
    $('#paginacao').append(html);
    }
    var active = "";
    if (qtd_pag == nr_pag){
        active = 'disabled';
    }
    var html2 = '<li class="'+active+'">'
                    +'<a href="#" onclick="atualiza_nr_pag('+(nr_pag + 1)+')">></a>'
                +'</li>'
                +'<li class="'+active+'">'
                    +'<a href="#" onclick="atualiza_nr_pag('+qtd_pag+')">Última</a>'
                +'</li>';
    $('#paginacao').append(html2);
    //Paginação termina aqui
    var html = "";
    $('#preloader').hide();
    if(nr_pag == qtd_pag && ultima_pag != 0 ){
        for(var i = 0; i < ultima_pag ; i++){
        html += '<tr>'+
                    '<td scope="row" class="small">'+lista[inicio].titulo+'</td>'+
                    '<td scope="row" class="text-center">'+
                        '<button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#incluiExpediente" onclick="visualizar('+lista[inicio].id+', \''+lista[inicio].titulo+'\', \''+lista[inicio].conteudo+'\', \''+lista[inicio].observacao+'\')" title="Visualizar">'+
                            '<i class="fas fa-eye "></i>'+
                        '</button>'+
                        '<button type="button" data-toggle="modal" data-target="#incluiExpediente" class="btn btn-dark btn-sm" style="margin-left: 0.2rem" onclick="alterar('+lista[inicio].id+', \''+lista[inicio].titulo+'\', \''+lista[inicio].conteudo+'\', \''+lista[inicio].observacao+'\')" title="Alterar">'+
                            '<i class="fas fa-edit "></i>'+
                        '</button>'+
                        '<button type="button" class="btn btn-dark btn-sm" title="Imprimir" style="margin-left: 0.2rem" onclick="imprimir(\''+lista[inicio].titulo+'\', \''+lista[inicio].conteudo+'\')" data-toggle="modal" data-target="#imprimir-expediente">'+
                            '<i class="fas fa-print"></i>'+
                        '</button>'+
                        '<button type="button" class="btn btn-dark btn-sm" style="margin-left: 0.2rem" onclick="confirma_exclusao('+lista[inicio].id+')" title="Remover">'+
                            '<i class="fas fa-trash "></i>'+
                        '</button>'+
                    '</td>'+
                '</tr>';
        inicio += 1 ;
    }
        $('#expedientes').append(html);
    }else{
        for(var i = 0; i < 14; i++){
            html += '<tr>'+
                        '<td scope="row" class="small">'+lista[inicio].titulo+'</td>'+
                        '<td scope="row" class="text-center">'+
                            '<button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#incluiExpediente" onclick="visualizar('+lista[inicio].id+', \''+lista[inicio].titulo+'\', \''+lista[inicio].conteudo+'\', \''+lista[inicio].observacao+'\')" title="Visualizar">'+
                                '<i class="fas fa-eye "></i>'+
                            '</button>'+
                            '<button type="button" data-toggle="modal" data-target="#incluiExpediente" class="btn btn-dark btn-sm" style="margin-left: 0.2rem" onclick="alterar('+lista[inicio].id+', \''+lista[inicio].titulo+'\', \''+lista[inicio].conteudo+'\', \''+lista[inicio].observacao+'\')" title="Alterar">'+
                                '<i class="fas fa-edit "></i>'+
                            '</button>'+
                            '<button type="button" class="btn btn-dark btn-sm" title="Imprimir" style="margin-left: 0.2rem" data-toggle="modal" data-target="#imprimir-expediente">'+
                                '<i class="fas fa-print"></i>'+
                            '</button>'+
                            '<button type="button" class="btn btn-dark btn-sm" style="margin-left: 0.2rem" onclick="confirma_exclusao('+lista[inicio].id+')" title="Remover">'+
                                '<i class="fas fa-trash "></i>'+
                            '</button>'+
                        '</td>'+
                    '</tr>';
            inicio += 1 ;
        }
            $('#expedientes').append(html);
    }
}

//Funções de cadastro de registro
function monta_cadastro(){
    $('#msg_sucesso').html('');
    //Limpa campos
    $('#titulo_expediente').attr('value', '');
    document.getElementById('descricao_expediente').value = '';
    document.getElementById('observacao_expediente').value = '';
    //Remove atributos
    $('#botao_cadastrar').removeAttr('hidden'); 
    $('#botao_alterar').attr('hidden', true); 
    $('#titulo_modal').html('Cadastrar expediente');
    $('#titulo_expediente').removeAttr('disabled');
    $('#descricao_expediente').removeAttr('disabled');
    $('#observacao_expediente').removeAttr('disabled');
}

function cadastro(){
    //Recupera valores dos campos
    var titulo = $('#titulo_expediente').val();
    var descricao = $('#descricao_expediente').val();
    var observacoes = $('#observacao_expediente').val();
    $('#incluiExpediente').hide();
    $('#preloader').show();
    var data = {
        titulo: titulo,
        descricao: descricao,
        observacoes: observacoes,
        funcao: "cadastrar"
    };
    $.ajax({
        url: 'controller/expedientes.php',
        method: "post",
        data: data ,
        success: function(data){
            if (data){
                $('#preloader').hide();
                $('#incluiExpediente').show();
                monta_msg_sucesso_modal(" Cadastro realizado com sucesso.");
                $('#titulo_expediente').val("");
                $('#descricao_expediente').val("");
                $('#observacao_expediente').val("");

            }
        }
    });
}

//Função para visualizar registro
function visualizar(id, titulo, conteudo, observacao){
    $('#msg_sucesso').html('');
    //Movimenta valores
    $('#id_expediente').attr('value', id);
    $('#titulo_expediente').attr('value', titulo);
    document.getElementById('descricao_expediente').value = conteudo;
    if (observacao == 'null'){
        document.getElementById('observacao_expediente').value = '';
    }else {
        document.getElementById('observacao_expediente').value = observacao;
    }
    //Bloqueia campos
    $('#titulo_expediente').attr('disabled', true);
    $('#descricao_expediente').attr('disabled', true);
    $('#observacao_expediente').attr('disabled', true);
    //Esconde botão
    $('#botao_alterar').removeAttr('hidden');
    $('#botao_cadastrar').attr('hidden', true);
    $('#botao_alterar').attr('hidden', true);
    $('#titulo_modal').html('Visualizar expediente');

}

//Funções para alterar registro
function alterar(id, titulo, conteudo, observacao){
    $('#msg_sucesso').html('');
    $('#id_expediente').attr('value', id);
    $('#titulo_expediente').attr('value', titulo);
    document.getElementById('descricao_expediente').value = conteudo;
    if (observacao == 'null'){
        document.getElementById('observacao_expediente').value = '';
    }else {
        document.getElementById('observacao_expediente').value = observacao;
    }
    $('#botao_alterar').removeAttr('hidden');
    $('#botao_cadastrar').attr('hidden', true);
    $('#titulo_modal').html('Alterar expediente');
    //Desbloqueia campos caso entre em visualizar
    $('#titulo_expediente').removeAttr('disabled');
    $('#descricao_expediente').removeAttr('disabled');
    $('#observacao_expediente').removeAttr('disabled');
}

function salva_alteracao(){
    //Recupera valores dos campos
    var id = $('#id_expediente').val();
    var titulo = $('#titulo_expediente').val();
    var descricao = $('#descricao_expediente').val();
    var observacoes = $('#observacao_expediente').val();

    var data = {
        id: id,
        titulo: titulo,
        descricao: descricao,
        observacoes: observacoes,
        funcao: "alterar"
    };
    $.ajax({
        url: 'controller/expedientes.php',
        method: "post",
        data: data ,
        success: function(data){
            if (data){
                monta_msg_sucesso_modal(" Alteração realizada com sucesso.");
            }
        }
    });
}

//Funções para excluir registro
function confirma_exclusao(id){
    //Mensagem de confirmação
    monta_msg_confirma(' Confirma exclusão do expediente? <a href="#" id="confirma" class="btn btn-dark btn-sm" onclick="excluir('+id+', this)">Sim</a> <a href="#" id="cancela" class="btn btn-secondary btn-sm" onclick="excluir(0, this)">Não</a> ');
}

function excluir(id, id_button){
    if (id_button.id == "confirma"){
        var desc_servico = $('#input_cadastro').val();
        var data = {
            id_expediente: id,
            funcao: "excluir"
        };
        $.ajax({
            url: 'controller/expedientes.php',
            method: "post",
            data: data ,
            success: function(data){
                listar();
                monta_msg_sucesso(" Expediente excluído com sucesso!");
                window.setInterval(function(){
                    remove_msg();
                    window.location.reload();
                },10000);
            }
        });
    }else {
        remove_msg();
    }
}

function imprimir(titulo, descricao){
    $('#titulo-modal-expediente').html('Expediente: '+titulo);
    document.getElementById('descricao_imprimir').value = descricao;
}
</script>
</html>