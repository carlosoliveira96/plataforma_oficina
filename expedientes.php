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
                <tbody data-link="row" id="expedientes">
                    <tr>
                        <td scope="row" class="small">Expediente</td>
                        <td scope="row" class="text-center small">
                            <a href="#" class="btn btn-dark btn-sm" title="Visualizar">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-dark btn-sm" title="Alterar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-dark btn-sm" title="Imprimir">
                                <i class="fas fa-print"></i>
                            </a>
                            <a href="#" class="btn btn-dark btn-sm" title="Remover">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
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
        </main>
    </div>
  </body>
</html>