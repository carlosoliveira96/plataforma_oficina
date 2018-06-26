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
        <div class="row" id="row" style="overflow: auto;  width: 89rem;">
            <div class="" style="padding-right: 0; padding-left: 15px;">
                <table class="table table-dark table-bordered table-striped table-hover" id="desmontagem">
                    <thead>
                        <tr>
                            <th colspan="2" scope="col" class="text-center small">Registro</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_registro">
                        <!--
                        <tr>
                            <td scope="row" class="text-center"><b><a href="#" data-toggle="modal" data-target="#verificaCarro">ABC-1234</a></b></td>
                        </tr>
                        -->
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
                            <th scope="col" class="text-center small">Fazer OS</th>
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
                            <th scope="col" class="text-center small">Triagem</th>
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
                            <th scope="col" class="text-center small">Saída</th>
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
                            <th scope="col" class="text-center small">T.C</th>
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
                            <th scope="col" class="text-center small">I.I</th>
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
                            <th scope="col" class="text-center small">Conferência</th>
                        </tr>
                    </thead>
                    <tbody data-link="row" class="rowlink" id="tbody_conferencia">
                        
                    </tbody>
                </table>
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
                    for(var i = 0 ; i <retorno.length ; i++ ){
                        id_os = retorno[i].id;

                        if(retorno[i].data_entrada != null){
                            html_entrada += '<tr>'+
                                '<td><b class="text-success"><a href="#" data-toggle="modal" data-target="#verificaCarro" onclick="detalha_os(\''+retorno[i].id_os+'\', \''+retorno[i].modelo+'\', \''+retorno[i].data_liberacao+'\', \''+retorno[i].placa+'\', \''+retorno[i].sinistro+'\', \''+retorno[i].nome+'\', \''+retorno[i].telefone+'\', \''+retorno[i].email+'\'); busca_servicos_os('+retorno[i].id+')">'+ retorno[i].modelo + ' - ' + retorno[i].placa + '</b></a></td>'+
                                '</tr>';
                        }
                    }
                }
            }
            $('#tbody_entrada').html(html_entrada);
        }
    });
}
</script>
</html>