<?php
include 'menu.php'
?>
<h2>
    <p class="text-center small" style="color: #000"><b>Serviços</b></p>
</h2>
<hr>
<div id="msg">

</div>
<table class="table table-striped table-sm table-bordered table-hover" id="servico">
    <thead>
        <tr>
            <th class="col-12" style="width: 85%; font-weight: normal">
                <input type="text" id="input_pesquisa" class="form-control small" placeholder="Pesquise pelo nome do serviço" onkeyup="busca_servico()">
                <div>
                <div class="text-danger"></div>
                    <div class="input-group" id="div_cadastro" style="display: none;">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="check_pecas" aria-label="Checkbox for following text input"> 
                                <span class="small" id="">&nbsp;Pagamento por peças</span>
                            </div>
                        </div>
                        <input type="text" id="input_cadastro" class="form-control small" placeholder="Descrição do serviço">
                        <input type="text" id="input_id" style="display: none">
                    </div>
                </div>
                
            </th>
            <th class="col-12 text-center" style="width"> 
                <a href="#" id="novo_servico" class="btn btn-dark btn-sm" onclick="cadastro_servico(this)">
                    <i class="fas fa-plus" style="margin-top: 0.1rem; margin-right: 0.5rem"></i> Cadastrar serviço
                </a>
                <a href="#" id="confirma_inclusao" class="btn btn-dark btn-sm" style="display: none" onclick="cadastro_servico(this)">
                    <i class="fas fa-check"></i>
                </a>
                <a href="#" id="cancela_inclusao" class="btn btn-dark btn-sm" onclick="cadastro_servico(this)" style="display: none">
                    <i class="fas fa-times "></i>
                </a>
                <a href="#" id="confirma_alteracao" class="btn btn-dark btn-sm" style="display: none" onclick="altera_registro(this)">
                    <i class="fas fa-check"></i>
                </a>
                <a href="#" id="cancela_alteracao" class="btn btn-dark btn-sm" style="display: none" onclick="altera_registro(this)">
                    <i class="fas fa-times "></i>
                </a>
            </th>
        </tr>
    </thead>
    <tbody id="tbody_servico">
        
    </tbody>
</table>
<nav>
    <ul class="pager" id="paginacao">
        
    </ul>
</nav>
</main>
</div>
</body>
</html>
<script>
//Função que troca os campos para pesquisa ou inclusão e realiza a inclusão no banco
var tipo_pagamento = document.getElementById('check_pecas');
function cadastro_servico(e){
    tipo_pagamento.disabled = false;
    tipo_pagamento.checked = false;
    if (e.id == "novo_servico"){
        $('#confirma_inclusao').show();
        $('#cancela_inclusao').show();
        $('#div_cadastro').show();
        $('#input_pesquisa').hide();
        $('#novo_servico').hide();
    } else if (e.id == "cancela_inclusao"){
        $('#confirma_inclusao').hide();
        $('#cancela_inclusao').hide();
        $('#div_cadastro').hide();
        $('#input_pesquisa').show();
        $('#novo_servico').show();
    } else if (e.id == "confirma_inclusao"){
        var t = document.getElementById("check_pecas"); 
        var validacao_ok = true; 
        var desc_servico = $('#input_cadastro').val();
        if (t.checked == true){
            remove_erro_input($('#input_cadastro'));
                var data = {
                    desc_servico: desc_servico,
                    check: "1",
                    funcao: "incluir"
                };
        }else {
            remove_erro_input($('#input_cadastro'));
                var data = {
                    desc_servico: desc_servico,
                    check: "0",
                    funcao: "incluir"
                };
        }
        $.ajax({
            url: 'controller/servicos.php',
            method: "post",
            data: data ,
            success: function(data){
                busca_servico();
                monta_msg_sucesso(" Inclusão realizada com sucesso.");
            }
        });
    }
}

//Função que monta a lista
busca_servico();
var nr_pag = 1;
var lista_registros ;

function atualiza_nr_pag(numero){
    nr_pag = numero;
    monta_lista(lista_registros);
}

function busca_servico(){
    $('#paginacao').html("")
    $('#tbody_servico').html("");
    //Limpara variável do campo de cadastro, após ser realizado um cadastro
    $('#input_cadastro').val("");
    var check = document.getElementById("check_pecas");
    check.checked = false;
    //Mostra a div de loading no carregamento da pagina
    $('#preloader').show();
    var desc_servico = $('#input_pesquisa').val();
    //alert(desc_servico);
    var data = {
        desc_servico: desc_servico,
        funcao: "consulta"
    };
    $.ajax({
        url: 'controller/servicos.php',
        method: "post",
        data: data ,
        success: function(data){
            if (data == "0"){
                $('#preloader').hide();
                monta_msg_alerta_permanente(" Você não possui serviços cadastrados. Cliquem em <b>cadastrar serviço</b> para iniciar.")
            }else {
                remove_msg();
                var lista = $.parseJSON(data);
                lista_registros = lista;
                monta_lista(lista_registros);          
            }
        }
    });
}

function monta_lista(lista){
    $('#paginacao').html("")
    $('#tbody_servico').html("");
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
        var funcao = '';
        for(var i = 0; i < ultima_pag ; i++){
        html += '<tr>'
                    +'<td scope="row" class="small">'+lista[inicio].servico+'</td>'
                    +'<td scope="row" class="text-center">'
                        +'<button type="button" class="btn btn-dark btn-sm" onclick="monta_alteracao('+lista[inicio].id+', \''+lista[inicio].servico+'\', \''+lista[inicio].tipo+'\')" title="Alterar serviço">'
                            +'<i class="fas fa-edit"></i>'
                        +'</button>';
                        if (lista[inicio].situacao == '0'){
                            funcao = 'reativar';
                            html += '<button type="button" class="btn btn-dark btn-sm" style="margin-left: 0.2rem" onclick="confirma_exclusao('+lista[inicio].id+', \''+funcao+'\')" title="Reativar serviço">'
                                +'<i class="fas fa-check-circle"></i>'
                            +'</button>';
                        }else {
                            funcao = 'excluir';
                            html += '<button type="button" class="btn btn-dark btn-sm" style="margin-left: 0.2rem" onclick="confirma_exclusao('+lista[inicio].id+', \''+funcao+'\')" title="Remover serviço">'
                                +'<i class="fas fa-trash"></i>'
                            +'</button>' ;
                        }
                    html += '</td>'
                +'</tr>';
        inicio += 1 ;
    }
        $('#tbody_servico').append(html);
    }else{
        var funcao = '';
        for(var i = 0; i < 14 ; i++){
            html += '<tr>'
                        +'<td scope="row" class="small">'+lista[inicio].servico+'</td>'
                        +'<td scope="row" class="text-center">'
                            +'<button type="button" class="btn btn-dark btn-sm" onclick="monta_alteracao('+lista[inicio].id+', \''+lista[inicio].servico+'\', \''+lista[inicio].tipo+'\')" title="Alterar serviço">'
                                +'<i class="fas fa-edit"></i>'
                                +'</button>';
                        if (lista[inicio].situacao == '0'){
                            funcao = 'reativar';
                            html += '<button type="button" class="btn btn-dark btn-sm" style="margin-left: 0.2rem" onclick="confirma_exclusao('+lista[inicio].id+', \''+funcao+'\')" title="Reativar serviço">'
                                +'<i class="fas fa-check-circle"></i>'
                            +'</button>';
                        }else {
                            funcao = 'excluir';
                            html += '<button type="button" class="btn btn-dark btn-sm" style="margin-left: 0.2rem" onclick="confirma_exclusao('+lista[inicio].id+', \''+funcao+'\')" title="Remover serviço">'
                                +'<i class="fas fa-trash"></i>'
                            +'</button>' ;
                        }
                    html += '</td>'
                +'</tr>';
            inicio += 1 ;
        }
            $('#tbody_servico').append(html);
    }
}

//Função para alterar serviço
function monta_alteracao(id, servico, tipo){
    $('#confirma_alteracao').show();
    $('#cancela_alteracao').show();
    $('#div_cadastro').show();
    $('#confirma_inclusao').hide();
    $('#cancela_inclusao').hide();
    $('#input_pesquisa').hide();
    $('#novo_servico').hide();
    $('#input_cadastro').val(servico);
    $('#input_id').val(id);
    tipo_pagamento.disabled = true;
    if (tipo == '1'){
        tipo_pagamento.checked = true;
    }else{
        tipo_pagamento.checked = false;
    }

}

function altera_registro(e){
    if (e.id == "cancela_alteracao"){
        $('#confirma_alteracao').hide();
        $('#cancela_alteracao').hide();
        $('#div_cadastro').hide();
        $('#input_cadastro').val("");
        $('#input_pesquisa').show();
        $('#novo_servico').show();
        $('#preloader').hide();
    } else if (e.id == "confirma_alteracao"){
            var desc_servico = $('#input_cadastro').val();
            var id = $('#input_id').val();
            var data = {
                desc_servico: desc_servico,
                id_servico: id,
                funcao: "altera"
            };
            $.ajax({
                url: 'controller/servicos.php',
                method: "post",
                data: data ,
                success: function(data){
                    monta_msg_sucesso(" Alteração realizada com sucesso.");
                    window.setInterval(function(){
                        remove_msg();
                        window.location.reload();
                    },10000);
                    $('#confirma_alteracao').hide();
                    $('#cancela_alteracao').hide();
                    $('#div_cadastro').hide();
                    $('#input_pesquisa').show();
                    $('#novo_servico').show();
                }
            });
        }
}


function confirma_exclusao(id, funcao){
    //Mensagem de confirmação
    if(funcao == 'excluir'){
        monta_msg_confirma(' Confirma exclusão do serviço? <a href="#" id="confirma" class="btn btn-dark btn-sm" onclick="exclui_servico('+id+', this, \''+funcao+'\')">Sim</a> <a href="#" id="cancela" class="btn btn-secondary btn-sm" onclick="exclui_servico(0, this, \''+funcao+'\')">Não</a> ');
    }else{
        monta_msg_confirma(' Confirma reativação do serviço? <a href="#" id="confirma" class="btn btn-dark btn-sm" onclick="exclui_servico('+id+', this, \''+funcao+'\')">Sim</a> <a href="#" id="cancela" class="btn btn-secondary btn-sm" onclick="exclui_servico(0, this, \''+funcao+'\')">Não</a> ');
    }
}    

function exclui_servico(id, id_button, tipo){
    if (id_button.id == "confirma"){
        var desc_servico = $('#input_cadastro').val();
        if (tipo == 'excluir'){
            var data = {
                id_servico: id,
                funcao: "excluir"
            };
        }else{
            var data = {
                id_servico: id,
                funcao: "reativar"
            };
        }
        $.ajax({
            url: 'controller/servicos.php',
            method: "post",
            data: data ,
            success: function(data){
                if (tipo == 'excluir'){
                    monta_msg_alerta(" Serviço inativado! Caso deseje ativá-lo novamente, entre em contato com o administrador.");
                }
                else{
                    monta_msg_alerta(" Serviço reativado! Caso deseje ativá-lo novamente, entre em contato com o administrador.");
                }
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
</script>
                