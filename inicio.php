<?php
include 'menu.php';
?>

        <div>
            <h2>
                <p class="text-center small" style="color: #000"><i><b>Consulta de Veículos</b></i></p>
            </h2>
            <hr>
            <div class="row">
                <div class="col-3">
                    <h6 class="small"><i>Placa/Sinistro/Nome/Carro</i></h6>
                    <div class="input-group input-group-sm">
                        <input type="text" id="pesquisa" class="form-control" placeholder="Placa/Sinistro/Nome/Carro" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="col-2">
                    <h6 class="small"><i>Data Início</i></h6>
                    <div class="input-group input-group-sm">
                        <input type="text" id="data_inicio" class="form-control" data-mask="99/99/9999"  placeholder="99/99/9999" name="">
                    </div> 
                </div>
                <div class="col-2">
                    <h6 class="small"><i>Data Fim</i></h6>
                    <div class="input-group input-group-sm">
                        <input type="text" id="data_fim" class="form-control" data-mask="99/99/9999"  placeholder="99/99/9999" name="">
                    </div>
                </div>
                <div class="col-2">
                    <h6 class="small"><i>Corretor</i></h6>
                    <div class="input-group input-group-sm">
                        <select class="form-control" id="corretor">
                            <option value="">Selecione..</option>
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <h6 class="small"><i>Seguradora</i></h6>
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
            <div class="div-veiculos" id="container" style="width: 100%; overflow-x: auto; background-color: #fff;">
                <div class="row" id="row" style="overflow: auto;  width: 98rem;">
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
                                    <th scope="col" class="text-center small">Autorizado com cliente</th>
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
                                    <th scope="col" class="text-center small">Autorizado na oficina</th>
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
                                    <th scope="col" class="text-center small">Pendência peças</th>
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
                                    <th scope="col" colspan="2" class="text-center small">Pendência Interna</th>
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
                                    <th scope="col" class="text-center small">Previsão entrega</th>
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
</html>