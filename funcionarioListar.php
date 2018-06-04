<?php
include 'menu.php';
?>
<h2>
    <p class="text-center small" style="color: #000"><i><b>Lista de funcionários</b></i></p>
</h2>
<hr>
<div id="msg_funcionario"></div>
<table class="table table-striped table-bordered table-hover" id="funcionario">
    <thead>
        <tr>
            <th class="col-12" style="width: 70%; font-weight: normal">
                <input type="text" id="input_pesquisa" class="form-control small" placeholder="Funcionário">                     
            </th>
            <th class="col-12" style="width: 30%; font-weight: normal">
                <div class="input-group input-group-sm ">
                    <select class="form-control" id="input_pesquisa_cargo">
                        <option value="">Todos os Cargos</option>
                        <option value="Lanterneiro">Lanterneiro</option>
                        <option value="Mecânico">Mecânico</option>
                        <option value="Polidor">Polidor</option>
                        <option value="Montador">Montador</option>
                        <option value="Financeiro">Financeiro</option>
                    </select>
                </div>          
            </th>
        </tr>
    </thead>
    <tbody data-link="row" id="tbody_funcionario">
        <tr>
            <td scope="row" class="small">Funcionario</td>
            <td scope="row" class="text-center small">
                <a href="#" data-toggle="modal" data-target="#modal_funcionario" class="btn btn-dark btn-sm" title="Visualizar">
                    <i class="fas fa-eye "></i>
                </a>
                <a href="#" class="btn btn-dark btn-sm" title="Remover - Quando funcionário demitido">
                    <i class="fas fa-trash "></i>
                </a>
                <a href="#" class="btn btn-dark btn-sm" title="Informações financeiras">
                    <i class="fas fa-dollar-sign"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>
<nav>
    <ul class="pager" id="paginacao">
        
    </ul>
</nav>
</div>
<div class="modal fade" data-backdrop="static" id="modal_funcionario" tabindex="-1" role="dialog" aria-labelledby="modal_funcionario" aria-hidden="true">
<div id="preloader_modal" class="carregando" style="display: none">
    <img src="../static/gif/loading.gif" style="position: fixed; margin-top: 25%; margin-left: 45%;">
</div>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div class="btn-group " role="group" aria-label="Button group with nested dropdown">
                <button hidden class="btn btn-dark btn-sm" id="cancelar" onclick="cancela_alteracao()">
                    <i class="fa fa-times float-left" style="margin-top: 0.2rem; margin-right: 0.3rem"></i> Cancelar
                </button>
                <button class="btn btn-dark btn-sm" id="alterar" onclick="alterar()">
                    <i class="fa fa-edit float-left" style="margin-top: 0.2rem; margin-right: 0.3rem"></i> Alterar
                </button>
                <button class="btn btn-dark btn-sm" id="vizualizar"  onclick="vizualizar()">
                    <i class="fa fa-external-link-alt float-left" style="margin-top: 0.2rem; margin-right: 0.3rem"></i> Serviços
                </button>
            </div>
            <h5 class="" style="margin-left: 10rem;" id="titulo_funcionario">Funcionário</h5>
            <button type="button" onclick="cancela_alteracao()" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div id="msg_sucesso">
        </div>
            <div class="row justify-content-md-center" id="dados">
                <div class="col-6" id="img_funconario">

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h6 class="small" style="margin-top:1rem"><i>Nome</i></h6>   
                    <div class="input-group ">
                        <input type="text" id="nome" class="form-control small" disabled placeholder="Ex.:  Exemplo exemplo " maxlength="200" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i>CPF</i></h6>    
                    <div class="input-group ">
                        <input type="text" id="cpf" onkeyup="verifica_cpf()" disabled class="form-control small" placeholder="Ex.: 999.999.999-99" data-mask="999.999.999-99" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i>Nascimento</i></h6> 
                    <div class="input-group ">
                        <input class="form-control small" placeholder="Ex.: 99/99/9999" disabled  id="nascimento"   type="text" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i>RG</i></h6> 
                    <div class="input-group ">
                        <input type="text" id="rg" class="form-control small" disabled placeholder="Ex.: 9999999" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i>Orgão Emissor</i></h6>  
                    <div class="input-group ">
                        <input type="text" id="orgao_emissor" class="form-control small" disabled placeholder="Ex.: SSP-DF" maxlength="50" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-12">
                    <h6 class="small" style="margin-top:1rem"><i>E-Mail</i></h6> 
                    <div class="input-group ">
                        <input type="email" id="email" onkeyup="valida_email()" disabled class="form-control small" placeholder="Ex.: exemplo@exemplo.com"  >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i>Telefone</i></h6>   
                    <div class="input-group">
                        <input type="text" id="telefone" class="form-control small" disabled placeholder="Ex.: (99) 9999-9999" data-mask="(99) 9999-9999" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i>Celular</i></h6>    
                    <div class="input-group">
                        <input type="text" id="celular" class="form-control small" disabled placeholder="Ex.: (99) 99999-9999" data-mask="(99) 99999-9999" >
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h6 class="small" style="margin-top:1rem"><i>Cargo</i></h6>    
                    <div class="input-group input-group-sm">
                        <select class="form-control" disabled  id="cargo" >
                            <option value="0">Selecione...</option>
                            <option value="Lanterneiro">Lanterneiro</option>
                            <option value="Mecânico">Mecânico</option>
                            <option value="Polidor">Polidor</option>
                            <option value="Montador">Montador</option>
                            <option value="Financeiro">Financeiro</option>
                        </select>
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6 class="small" style="margin-top:1rem"><i>CEP</i></h6>    
                    <div class="input-group">
                        <input type="text" id="cep" disabled class="form-control small" placeholder="Ex.: 99999-999" data-mask="99999-999"  onkeyup="busca_cep()">
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i>Endereco</i></h6>   
                    <div class="input-group">
                        <input type="text" id="endereco" disabled class="form-control small" placeholder="Ex.: Exemplo exemplo exemplo">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <h6 class="small" style="margin-top:1rem"><i>Número</i></h6> 
                    <div class="input-group">
                        <input type="text" id="numero" disabled class="form-control small" placeholder="Ex.: 99">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-4">
                    <h6 class="small" style="margin-top:1rem"><i>Complemento</i></h6>    
                    <div class="input-group">
                        <input type="text" id="complemento" disabled class="form-control small" placeholder="Ex.: Exemplo Exemplo " maxlength="50">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i>Bairro</i></h6> 
                    <div class="input-group">
                        <input type="text" id="bairro" disabled class="form-control small" placeholder="Ex.: Exemplo Exemplo " maxlength="100">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-4">
                    <h6 class="small" style="margin-top:1rem"><i>Cidade</i></h6> 
                    <div class="input-group">
                        <input type="text" id="cidade" disabled class="form-control small" placeholder="Ex.: Exemplo exemplo" maxlength="100">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <h6 class="small" style="margin-top:1rem"><i>UF</i></h6> 
                    <div class="input-group">
                        <input type="text" id="uf" disabled  class="form-control small" placeholder="Ex.: DF" maxlength="2">
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
            <div id="botao_salvar" hidden>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-dark col-12 btn-sm" onclick="salva_alteracao()">
                            <i class="fa fa-check float-left" style="margin-top: 0.3rem;"></i> Salvar alterações
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>