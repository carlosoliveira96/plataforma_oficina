<?php
include 'menu.php';
?>

<div>
    <h2>
        <p class="text-center small" style="color: #000"><b>Consulta de Veículos</b></p>
    </h2>
    <hr>
    <div class="row">
        <div class="col-3">
            <h6 class="small">Placa/Sinistro/Nome/Carro</h6>
            <div class="input-group input-group-sm">
                <input type="text" id="pesquisa" class="form-control" placeholder="Placa/Sinistro/Nome/Carro" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="col-2">
            <h6 class="small">Data Início</h6>
            <div class="input-group input-group-sm">
                <input type="text" id="data_inicio" class="form-control" data-mask="99/99/9999"  placeholder="99/99/9999" name="">
            </div> 
        </div>
        <div class="col-2">
            <h6 class="small">Data Fim</h6>
            <div class="input-group input-group-sm">
                <input type="text" id="data_fim" class="form-control" data-mask="99/99/9999"  placeholder="99/99/9999" name="">
            </div>
        </div>
        <div class="col-2">
            <h6 class="small">Corretor</h6>
            <div class="input-group input-group-sm">
                <select class="form-control" id="corretor">
                    <option value="">Selecione..</option>
                </select>
            </div>
        </div>
        <div class="col-3">
            <h6 class="small">Seguradora</h6>
            <div class="input-group input-group-sm">
                <select class="form-control" id="seguradora">
                    <option value="">Selecione...</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-dark" id="buscar_os" onclick="busca_os(); busca_pendencia();" type="button">
                        <i class="fas fa-search float-left" style="margin-top: 0.1rem;"></i> Buscar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="div-veiculos" id="container" style="width: 100%; overflow-x: auto;">
        <div class="row" id="row">
            <div class="" style="padding-right: 0; padding-left: 15px;">
                <table class="table table-dark table-bordered table-striped table-hover" id="registro">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col" class="text-center small">Registro</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_registro">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="lanternagem">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Entrada</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_entrada">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="lanternagem">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Aut. com cliente</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_autorizado_cliente">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="pintura">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Aut. na oficina</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_autorizado_oficina">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="finalizacao">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Pend. peças</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_pendencia_pecas">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Agendamento</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_agendamento">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-center small">Fazer OS</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_fazer_os">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-center small">Triagem</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_triagem">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Particular</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_particular">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Serviço</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_servico">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-center small">Pend. Interna</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_pendencia_interna">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Prev. entrega</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_previsao_entrega">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-center small">Saída</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_saida">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-center small">T.C</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_tc">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-center small">I.I</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_ii">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center small">Retorno</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_retorno">
                        
                    </tbody>
                </table>
            </div>
            <div class="" style="padding-right: 0; padding-left: 0;">
                <table class="table table-dark table-bordered table-striped table-hover" id="entregue">
                    <thead>
                        <tr>
                            <th scope="col" colspan="2" class="text-center small">Pronto</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_pronto">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal ver mais -->
    <div class="modal fade" id="verificaCarro" tabindex="-1" role="dialog" aria-labelledby="adicionaServicos" aria-hidden="true">
        <div id="preloader2" class="carregando" style="display: none">
            <img src="../static/gif/loading.gif" style="position: fixed; margin-top: 25%; margin-left: 45%;">
        </div>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title small">Informações do veículo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="verificaCarro-body" style="overflow-y: auto">
                    <div class="row">
                        <div class="col-8">
                            <h6 class="small" style="margin-top:1rem">Veículo</h6>
                            <div class="input-group">
                                <input type="text" id="veiculo_modal" class="form-control" disabled placeholder="Honda Civic - Preto" name="">
                            </div>
                        </div>
                        <div class="col-4">
                            <h6 class="small" style="margin-top:1rem">Data de liberação</h6>
                            <div class="input-group ">
                                <input type="text" id="data_entrada_modal" class="form-control" disabled  placeholder="10/01/2018" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <h6 class="small" style="margin-top:1rem">Placa</h6>
                            <div class="input-group">
                                <input type="text" id="placa_modal" class="form-control" disabled  placeholder="ABC-1234" name="">
                            </div>
                        </div>
                        <div class="col-7">
                            <h6 class="small" style="margin-top:1rem">Sinistro</h6>
                            <div class="input-group ">
                                <input type="text" id="sinistro_modal" class="form-control" disabled  placeholder="123456" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">Nome</h6>
                            <div class="input-group ">
                                <input type="text" id="nome_modal" class="form-control" disabled  placeholder="Nome do cliente" name="">
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">Telefone</h6>
                            <div class="input-group ">
                                <input type="text" id="telefone_modal" class="form-control" disabled  placeholder="(61) 99999-9999" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="small" style="margin-top:1rem">E-mail</h6>
                            <div class="input-group ">
                                <input type="text" id="email_modal" class="form-control" disabled  placeholder="email@email.com" name="">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-secondary table-striped table-sm table-bordered table-hover" id="entregue">
                                <thead>
                                    <tr>
                                        <th class="text-center">Serviço</th>
                                        <th scope="col" class="text-center">Data Inicio</th>
                                        <th scope="col" class="text-center">Executante</th>
                                        <th scope="col" class="text-center">Data Fim</th>
                                    </tr>
                                </thead>
                                <tbody data-link="row" id="tabela_servicos">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" id="botao_modal">
                    
                </div>
            </div>
        </div>
    </div>
</div>     
</main>
</div>
<!-- page-wrapper -->
</body>
<script>
busca_corretores();
busca_seguradoras();
busca_os();
function busca_corretores(){
    var data = {
        funcao: 'busca_corretores'
    };
    var html ;
    $.ajax({
        url: 'controller/inicio.php',
        method: "post",
        data: data ,
        success: function(data){
            if(data){
                var retorno = $.parseJSON(data);
                html = "";
                html += '<option value="">Selecione...</option>';
                for(var i=0; i < retorno.length ; i++ ){
                    if(retorno[i].nome != null){
                        html += '<option value="'+retorno[i].id+'">'+retorno[i].nome+ '</option>';
                    }else{
                        html += '<option value="'+retorno[i].id+'">'+retorno[i].nome_fantasia+ '</option>';
                    }
                }

                $('#corretor').html(html);
            }
        }
    });
}

function busca_seguradoras(){
    var data = {
        funcao: 'busca_seguradoras'
    };
    var html ;
    $.ajax({
        url: 'controller/inicio.php',
        method: "post",
        data: data ,
        success: function(data){
            if(data){
                var retorno = $.parseJSON(data);

                html = "";
                html += '<option value="">Selecione...</option>';
                for(var i=0; i < retorno.length ; i++ ){
                    if(retorno[i].nome != null){
                        html += '<option value="'+retorno[i].id+'">'+retorno[i].nome+ '</option>';
                    }else{
                        html += '<option value="'+retorno[i].id+'">'+retorno[i].nome_fantasia+ '</option>';
                    }
                }

                $('#seguradora').html(html);
            }
        }
    });
}

var id_os = 0;
function busca_os(){ 
    $('#preloader').show();
    var corretor = $('#corretor').val();
    var seguradora = $('#seguradora').val();
    var pesquisa = $('#pesquisa').val();
    var data_inicio = $('#data_inicio').val();
    var data_fim = $('#data_fim').val();

    var data = {
        funcao: 'busca_os', 
        corretor : corretor, 
        seguradora : seguradora, 
        pesquisa : pesquisa, 
        data_inicio : data_inicio, 
        data_fim : data_fim 
    };
    var html ;
    $.ajax({
        url: 'controller/inicio.php',
        method: "post",
        data: data ,
        success: function(data){
            $('#preloader').hide();
            if(data){
                var retorno = $.parseJSON(data);
                if(retorno.length > 0 ){
                    var html_entrada = "";
                    var html_pendencia_pecas = "";
                    var html_fazer_os = "";
                    var html_triagem = "";
                    var html_agendamento = "";
                    var html_retorno = "";
                    var html_autorizado_oficina = "";
                    var html_autorizado_cliente = "";
                    var html_servico = "";
                    var html_registro = "";
                    var html_tc = "";
                    var html_pronto = "";
                    var html_ii = "";
                    var html_saida = "";
                    var html_previsao_entrega = "";
                    var html_pendencia_interna = "";
                    var html_particular = "";
                    for(var i = 0 ; i <retorno.length ; i++ ){
                        id_os = retorno[i].id;
                        
                        if (((retorno[i].data_vistoria_realizada == null) || (retorno[i].data_vistoria_realizada != null)) && 
                            ((retorno[i].data_autorizacao == null) || (retorno[i].data_autorizacao != null)) && 
                            ((retorno[i].data_entrada == null) || (retorno[i].data_entrada != null)) &&
                            ((retorno[i].data_saida == null) || (retorno[i].data_saida != null)) && 
                            ((retorno[i].data_complemento_realizado == null) || (retorno[i].data_complemento_realizado != null)) && 
                            ((retorno[i].data_agendamento == null) || (retorno[i].data_agendamento != null)) && 
                            ((retorno[i].data_previsao_entrega == null) || (retorno[i].data_previsao_entrega != null)) && 
                            ((retorno[i].data_entrega == null) || (retorno[i].data_entrega != null)) && 
                            (retorno[i].data_retorno != null)){
                                if(retorno[i].termo_compromisso == '1'){
                                    html_tc += '<tr>'+
                                    '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_previsao_entrega != null){
                                    html_previsao_entrega += '<tr>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_complemento_realizado != null){
                                    html_triagem += '<tr class="complemento_realizado">'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                }
                                html_retorno += '<tr class="retorno">'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_autorizado_oficina += '<tr class="retorno">'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_pendencia_pecas += '<tr class="retorno">'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_triagem += '<tr class="retorno">'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_entrada += '<tr class="retorno">'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_servico += '<tr class="retorno">'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                        }else if(retorno[i].data_saida){
                            html_saida += '<tr>'+
                            '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                            '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                            '</tr>';
                        }else if((retorno[i].pronto == '1') && ((retorno[i].perda_total == '0') || (retorno[i].perda_total == null))){
                            html_pronto += '<tr>'+
                            '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                            '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                            '</tr>';
                        }else if(retorno[i].perda_total == '1'){
                            html_ii += '<tr>'+
                            '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                            '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                            '</tr>';
                        }else if((retorno[i].data_vistoria_realizada == null) && 
                            (retorno[i].data_autorizacao == null) && 
                            (retorno[i].data_entrada == null) &&
                            (retorno[i].data_saida == null) && 
                            (retorno[i].data_agendamento == null) && 
                            (retorno[i].data_entrega == null) && 
                            (retorno[i].data_retorno == null)){
                                if(retorno[i].termo_compromisso == '1'){
                                    html_tc += '<tr>'+
                                    '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_previsao_entrega != null){
                                    html_previsao_entrega += '<tr title="'+retorno[i].data_previsao_entrega+'">'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_complemento_realizado != null){
                                    html_triagem += '<tr class="complemento_realizado">'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                }
                                html_registro += '<tr>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                        }else if(((retorno[i].data_vistoria_realizada == null) || (retorno[i].data_vistoria_realizada != null)) && 
                            (retorno[i].data_autorizacao == null) && 
                            (retorno[i].data_entrada != null) &&
                            (retorno[i].data_saida == null) && 
                            (retorno[i].data_agendamento == null) && 
                            (retorno[i].data_entrega == null) && 
                            (retorno[i].data_retorno == null)){
                                if(retorno[i].termo_compromisso == '1'){
                                    html_tc += '<tr>'+
                                    '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_previsao_entrega != null){
                                    html_previsao_entrega += '<tr>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_complemento_realizado != null){
                                    html_triagem += '<tr class="complemento_realizado">'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                }
                                html_entrada += '<tr>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                        } else if (((retorno[i].data_vistoria_realizada == null) || (retorno[i].data_vistoria_realizada != null)) && 
                            (retorno[i].data_autorizacao != null) && 
                            (retorno[i].data_entrada != null) &&
                            (retorno[i].data_saida == null) && 
                            (retorno[i].data_agendamento == null) && 
                            (retorno[i].data_entrega == null) && 
                            (retorno[i].data_retorno == null)){
                                if(retorno[i].termo_compromisso == '1'){
                                    html_tc += '<tr>'+
                                    '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_previsao_entrega != null){
                                    html_previsao_entrega += '<tr>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_complemento_realizado != null){
                                    html_triagem += '<tr class="complemento_realizado">'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                }
                                html_entrada += '<tr>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_pendencia_pecas += '<tr>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_fazer_os += '<tr>'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_triagem += '<tr>'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                        }else if (((retorno[i].data_vistoria_realizada == null) || (retorno[i].data_vistoria_realizada != null)) && 
                            (retorno[i].data_autorizacao == null) && 
                            (retorno[i].data_entrada != null) &&
                            (retorno[i].data_saida == null) && 
                            (retorno[i].data_agendamento != null) && 
                            (retorno[i].data_entrega == null) && 
                            (retorno[i].data_retorno == null)){
                                if(retorno[i].termo_compromisso == '1'){
                                    html_tc += '<tr>'+
                                    '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_previsao_entrega != null){
                                    html_previsao_entrega += '<tr>'+
                                    '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                    '</tr>';
                                }
                                if(retorno[i].data_complemento_realizado != null){
                                    html_triagem += '<tr class="complemento_realizado">'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                }
                                html_entrada += '<tr>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_agendamento += '<tr>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_fazer_os += '<tr>'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                                html_triagem += '<tr>'+
                                '<td style="width: 1px"><input disabled id="check_pendencia" type="checkbox" aria-label="Checkbox for following text input"></td>'+
                                '<td><b class="small"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_entrada+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                        }
                    }
                }
            }
            $('#tbody_entrada').html(html_entrada);
            $('#tbody_pendencia_pecas').html(html_pendencia_pecas);
            $('#tbody_fazer_os').html(html_fazer_os);
            $('#tbody_triagem').html(html_triagem);
            $('#tbody_agendamento').html(html_agendamento);
            $('#tbody_retorno').html(html_retorno);
            $('#tbody_autorizado_oficina').html(html_autorizado_oficina);
            $('#tbody_autorizado_cliente').html(html_autorizado_cliente);
            $('#tbody_servico').html(html_servico);
            $('#tbody_fazer_os').html(html_fazer_os);
            $('#tbody_registro').html(html_registro);
            $('#tbody_tc').html(html_tc);
            $('#tbody_pronto').html(html_pronto);
            $('#tbody_ii').html(html_ii);
            $('#tbody_saida').html(html_saida);
            $('#tbody_previsao_entrega').html(html_previsao_entrega);
            $('#tbody_pendencia_interna').html(html_pendencia_interna);
            $('#tbody_particular').html(html_particular);
        }
    });
}

function detalha_os(id_os, modelo, data_entrada, placa, sinistro, nome, telefone, email){
    var html = "";
    var dados_os;
    if(modelo == 'null'){
        $('#veiculo_modal').attr('placeholder', '');
    }else {
        $('#veiculo_modal').attr('value', modelo);
    }
    if(data_entrada == 'null'){
        $('#data_entrada_modal').attr('placeholder', '');
    }else {
        $('#data_entrada_modal').attr('value', data_entrada);
    }
    if(placa == 'null'){
        $('#placa_modal').attr('placeholder', '');
    }else {
        $('#placa_modal').attr('value', placa);
    }
    if(sinistro == 'null'){
        $('#sinistro_modal').attr('placeholder', '');
    }else {
        $('#sinistro_modal').attr('value', sinistro);
    }
    if(nome == 'null'){
        $('#nome_modal').attr('placeholder', '');
    }else {
        $('#nome_modal').attr('value', nome);
    }
    if(telefone == 'null'){
        $('#telefone_modal').attr('placeholder', '');
    }else {
        $('#telefone_modal').attr('value', telefone);
    }
    if(email == 'null'){
        $('#email_modal').attr('placeholder', '');
    }else {
        $('#email_modal').attr('value', email);
    }
    dados_os = id_os;
    html = '<a href="detalhamento.php?codOS='+dados_os+'" onclick="os_completa();" class="btn btn-dark btn-block">Ver ordem de serviço completa</a>'
    $('#botao_modal').html(html);
}

function busca_servicos_os(id_os){
    $('#preloader2').show();
    $('#tabela_servicos').html("");
    var data = { 
        id: id_os,
        funcao: "buscar_servicos"
    };
    $.ajax({
        url: 'controller/inicio.php',
        method: "post",
        data: data ,
        success: function(data){
            if(data){
                var resultado = $.parseJSON(data);
                if(resultado.length > 0){
                    var html = "";
                    for(var i = 0; i < resultado.length; i++){
                        if(resultado[i].data_inicio == null){
                            resultado[i].data_inicio = "";
                        }
                        if(resultado[i].data_fim == null){
                            resultado[i].data_fim = "";
                        }
                        html += '<tr>'+
                                    '<td scope="row" class="text-center" id="servoco'+resultado[i].os_id+'">'+resultado[i].servico+'</td>'+
                                    '<td scope="row" class="text-center" id="dtInicio'+resultado[i].os_id+'">'+resultado[i].data_inicio+'</td>'+
                                    '<td scope="row" class="text-center" id="funcionario'+resultado[i].os_id+'">'+resultado[i].nome+'</td>'+
                                    '<td scope="row" class="text-center" id="dtFim'+resultado[i].os_id+'">'+resultado[i].data_fim+'</td>'+
                                '</tr>';
                    }
                    $('#tabela_servicos').html(html);
                }
            }
            $('#preloader2').hide();
        }
    });
}

atualiza_tamanho();
function atualiza_tamanho(){
    var row = $(window).width();
    row += 880;
    $('#row').css("width", row);
}

window.addEventListener('resize', function(){
    atualiza_tamanho();
});

</script>
</html>