<?php
include 'menu.php';
?>

<h2>
    <p class="text-center small" style="color: #000"><b>Processo Eletrônico</b></p>
</h2>
<hr>
<div id="msg"></div>
<div class="row">
<div class="col-12">
    <div class="float-sm-left" id="numero_servico">
        
    </div>
    <div class="float-sm-right" id="dia_cadastro">
        
    </div>
</div>
</div>
<!-- Inicio do collapse -->
<div id="accordion">
    <div class="card">
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h3 class="small mb-0 text-left font-weight-normal">    
                Cliente & Veículo
            </h3>
        </button>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <h6 class="small">Nome</h6>   
                        <div class="input-group">
                            <input type="text" id="nome" class="form-control"  placeholder="Ex.:  Exemplo exemplo " maxlength="200" name="nome">
                            <input type="text" id="id_empresa" hidden>
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-3">
                        <h6 class="small">Nascimento</h6> 
                        <div class="input-group">
                            <input class="form-control" placeholder="Ex.: 99/99/9999"  id="nascimento" name="event_date" id="event_date" type="text" >
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-4">
                        <h6 class="small" style="margin-top:1rem">CPF</h6>    
                        <div class="input-group">
                            <input type="text" id="cpf" class="form-control"  placeholder="Ex.: 999.999.999-99" name="">
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-4">
                        <h6 class="small" style="margin-top:1rem">RG</h6> 
                        <div class="input-group">
                            <input type="text" id="rg" class="form-control"  placeholder="Ex.: 9999999"  name="">
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-4">
                        <h6 class="small" style="margin-top:1rem">Orgão Emissor</h6>  
                        <div class="input-group">
                            <input type="text" id="orgao_emissor" class="form-control"  placeholder="Ex.: SSP-DF" maxlength="50" name="">
                        </div>
                        <div class="text-danger"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h6 class="small" style="margin-top:1rem">E-Mail</h6> 
                        <div class="input-group ">
                            <input type="email" id="email" class="form-control"  placeholder="Ex.: exemplo@exemplo.com"  name="">
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Telefone</h6>   
                        <div class="input-group ">
                            <input type="text" id="telefone" class="form-control"  placeholder="Ex.: (99) 9999-9999" name="">
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Celular</h6>    
                        <div class="input-group">
                            <input type="text" id="celular" class="form-control"  placeholder="Ex.: (99) 99999-9999" name="">
                        </div>
                        <div class="text-danger"></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h6 class="small">CEP</h6>    
                        <div class="input-group">
                            <input type="text" id="cep" class="form-control" onkeyup="busca_cep()" placeholder="Ex.: 99999-999" >
                        </div>
                        <div class="text-danger"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h6 class="small" style="margin-top:1rem">Endereco</h6>   
                        <div class="input-group">
                            <input type="text" id="endereco" class="form-control" placeholder="Ex.: Exemplo exemplo exemplo" >
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-2">
                        <h6 class="small" style="margin-top:1rem">Número</h6> 
                        <div class="input-group">
                            <input type="text" id="numero" class="form-control" placeholder="Ex.: 99 "  >
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-4">
                        <h6 class="small" style="margin-top:1rem">Complemento</h6>    
                        <div class="input-group">
                            <input type="text" id="complemento" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="50" >
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-6">
                        <h6 class="small" style="margin-top:1rem">Bairro</h6> 
                        <div class="input-group ">
                            <input type="text" id="bairro" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="100" >
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-4">
                        <h6 class="small" style="margin-top:1rem">Cidade</h6> 
                        <div class="input-group ">
                            <input type="text" id="cidade" class="form-control" placeholder="Ex.: Exemplo exemplo" maxlength="100" >
                        </div>
                        <div class="text-danger"></div>
                    </div>
                    <div class="col-2">
                        <h6 class="small" style="margin-top:1rem">UF</h6> 
                        <div class="input-group ">
                            <input type="text" id="uf" class="form-control" placeholder="Ex.: DF" maxlength="2" >
                        </div>
                        <div class="text-danger"></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h6 class="small">Placa</h6>  
                        <div class="input-group">
                            <input type="text" id="placa" class="form-control" placeholder="Ex.: AAA-9999"  name="">
                        </div>
                    </div>
                    <div class="col-8">
                        <h6 class="small">Modelo</h6> 
                        <div class="input-group">
                            <input type="text" id="modelo" class="form-control"  placeholder="Ex.: Exemplo Exemplo"  maxlength="100" name="">
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Ano Modelo</h6> 
                        <div class="input-group">
                            <input type="text" id="ano_modelo" class="form-control"  placeholder="Ex.: Exemplo Exemplo" maxlength="100" name="">
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Ano Fabricação</h6> 
                        <div class="input-group">
                            <input type="text" id="ano_fabricacao" class="form-control"  placeholder="Ex.: Exemplo Exemplo" maxlength="100" name="">
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="small" style="margin-top:1rem">Fabricante</h6>
                        <div class="input-group input-group-sm">
                            <select name="" id="fabricante"  class="form-control">
                                <option value="0">Selecione...</option>
                                <option value="Agrale">Agrale </option>
                                <option value="Aston Martin">Aston Martin </option>
                                <option value="Audi">Audi </option>
                                <option value="Bentley">Bentley </option>
                                <option value="BMW">BMW </option>
                                <option value="Changan">Changan </option>
                                <option value="Chery">Chery </option>
                                <option value="Chrysler">Chrysler </option>
                                <option value="Citroën">Citroën </option>
                                <option value="Dodge">Dodge </option>
                                <option value="Effa">Effa </option>
                                <option value="Ferrari">Ferrari </option>
                                <option value="Fiat">Fiat </option>
                                <option value="Ford">Ford </option>
                                <option value="Geely">Geely </option>
                                <option value="GM/Chevrolet">GM/Chevrolet </option>
                                <option value="Hafei">Hafei </option>
                                <option value="Honda">Honda </option>
                                <option value="Hyundai">Hyundai </option>
                                <option value="Iveco">Iveco </option>
                                <option value="Jac Motors">Jac Motors </option>
                                <option value="Jaguar">Jaguar </option>
                                <option value="Jeep">Jeep </option>
                                <option value="Jinbei">Jinbei </option>
                                <option value="Kia">Kia </option>
                                <option value="Lamborghini">Lamborghini </option>
                                <option value="Land Rover">Land Rover </option>
                                <option value="Lexus">Lexus </option>
                                <option value="Lifan">Lifan </option>
                                <option value="Mahindra">Mahindra </option>
                                <option value="Maserati">Maserati </option>
                                <option value="Mercedes-Benz">Mercedes-Benz </option>
                                <option value="MG Motors">MG Motors </option>
                                <option value="Mini">Mini </option>
                                <option value="Mitsubishi">Mitsubishi </option>
                                <option value="Nissan">Nissan </option>
                                <option value="Peugeot">Peugeot </option>
                                <option value="Porsche">Porsche </option>
                                <option value="Ram">Ram </option>
                                <option value="Renault">Renault </option>
                                <option value="Smart">Smart </option>
                                <option value="Ssangyong">Ssangyong </option>
                                <option value="Subaru">Subaru </option>
                                <option value="Suzuki">Suzuki </option>
                                <option value="Tesla">Tesla </option>
                                <option value="Toyota">Toyota </option>
                                <option value="Troller">Troller </option>
                                <option value="Volkswagen">Volkswagen </option>
                                <option value="Volvo">Volvo </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <h6 class="small" style="margin-top:1rem">Cor</h6>    
                        <div class="input-group">
                            <input type="text" id="cor" class="form-control"  placeholder="Ex.: Exemplo "   maxlength="50" name="">
                        </div>
                    </div>
                    <div class="col-8">
                        <h6 class="small" style="margin-top:1rem">Chassi</h6> 
                        <div class="input-group">
                            <input type="text" id="chassi" class="form-control" placeholder="Ex.: Exemplo"  maxlength="50" name="">
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="small" style="margin-top:1rem">Seguradora</h6>  
                        <div class="input-group input-group-sm">
                            <select class="form-control" id="seguradora" >
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="small" style="margin-top:1rem">Corretor</h6>   
                        <div class="input-group input-group-sm">
                            <select class="form-control" id="corretor" >
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="small" style="margin-top:1rem">Tipo</h6>   
                        <div class="input-group input-group-sm">
                            <select class="form-control" id="tipo_cadastro" >
                                <option value="0">Selecione...</option>
                                <option value="segurado" id="teste">Segurado</option>
                                <option value="terceiro">Terceiro</option>
                                <option value="particular">Particular</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-dark btn-sm float-right" id="btnEnviar" onClick="altera_cliente();"> 
                            <i class="fa fa-check float-left" style="margin-top: 0.1rem; margin-right: 0.3rem"></i> 
                                Salvar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <button class="btn btn-secondary" style="width: 100%" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5 class="small mb-0 text-left font-weight-normal">    
                Tramitação do processo
            </h5>
        </button>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <h6 class="small">Sinistro</h6>
                        <div class="input-group">
                            <input type="text" id="sinistro" disabled class="form-control"  placeholder="123456" name="">
                        </div>
                    </div>
                    <div class="col-2" style="margin-top:1.2rem">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" id="pt"> 
                                </span>
                                <span class="input-group-text">Perda Total</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" style="margin-top:1.2rem">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" id="pendenciaPecas">
                                </span>
                                <span class="input-group-text">Pendência de peças</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Vistoria realizada</h6>
                            <div class="input-group">
                                <input type="text" id="vistoria_realizada" class="form-control" data-mask="99/99/9999" placeholder="Ex... 99/99/9999" name="">
                            </div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Autorização</h6>
                        <div class="input-group">
                            <input type="text" id="autorizacao" class="form-control" data-mask="99/99/9999" placeholder="Ex... 99/99/9999" name="">
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Entrada</h6>
                        <div class="input-group">
                            <input type="text" id="entrada" class="form-control" data-mask="99/99/9999" placeholder="Ex... 99/99/9999" name="">
                        </div>
                    </div>
                    <div class="col-3" style="margin-top:2.3rem">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" id="pronto">
                                </span>
                                <span class="input-group-text">Pronto</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Saída</h6>
                        <div class="input-group ">
                            <input type="text" id="saida" data-mask="99/99/9999" class="form-control"  placeholder="Ex... 99/99/9999" name="">
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Complemento realizado</h6>
                        <div class="input-group ">
                            <input type="text" id="icomplemento" class="form-control" data-mask="99/99/9999" placeholder="Ex... 99/99/9999" name="">
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Agendamento</h6>
                        <div class="input-group ">
                            <input type="text" id="agendamento" class="form-control" data-mask="99/99/9999" placeholder="Ex... 99/99/9999" name="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Previsão de entrega</h6>
                        <div class="input-group ">
                            <input type="text" id="previsao_entrega" class="form-control" data-mask="99/99/9999" placeholder="Ex... 99/99/9999" name="">
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Entregue</h6>
                        <div class="input-group ">
                            <input type="text" id="entregue" onchange="verifica_entrega();" class="form-control" data-mask="99/99/9999" placeholder="Ex... 99/99/9999" name="">
                        </div>
                    </div>
                    <div class="col-2" style="margin-top:2.3rem">
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <input type="checkbox" onclick="habilita_retorno()" id="retorno">
                                </span>
                                <span class="input-group-text">Retorno</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 class="small" style="margin-top:1rem">Data do retorno</h6>
                        <div class="input-group input">
                            <input type="text" id="dtRetorno" disabled class="form-control" data-mask="99/99/9999"  placeholder="Ex... 99/99/9999" name="">
                        </div>
                    </div>
                    <div class="col-12" id="check_tc" style="margin-top:1rem" hidden>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <input type="checkbox" onclick="habilita_retorno_tc()" id="retorno_tc">
                                </span>
                                <span class="input-group-text">Termo de compromisso</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" id="area_tc" hidden>
                        <h6 class="small" style="margin-top:1rem">Termo de Compromisso</h6>
                        <div class="input-group ">
                            <textarea rows="2" id="tc" placeholder="Ex.: Exemplo" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 1rem;">
                        <button class="btn btn-dark btn-sm float-right" id="btnEnviar" onClick="altera_tramitacao();"> 
                            <i class="fa fa-check float-left" style="margin-top: 0.1rem; margin-right: 0.3rem"></i> 
                                Salvar
                        </button>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col-4">
                        <h6 style="margin-top:1rem"><i>Particular</i></h6>
                        <div class="input-group ">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-question"></i></span>
                            <select class="custom-select" id="particular" onchange="verifica_particular()">
                                <option selected>Selecione...</option>
                                <option value="1">Sim</option>
                                <option value="2">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" id="osParticular" hidden>
                    <div class="col-4">
                        <button class="btn btn-dark" id="btnNovaOs" > 
                            <i class="fa fa-check float-left" style="margin-top: 0.1rem; margin-right: 0.3rem"></i> 
                                Criar nova OS
                        </button>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <div class="card">
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <h5 class="small mb-0 text-left font-weight-normal">    
                Pendências internas
            </h5>
        </button>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                            <table class="table table-stripped">
                                <thead >
                                    <tr>
                                        <th width="180" scope="col" class="small"><b>Funcionário</b></th>
                                        <th width="532" scope="col" class="small"><b>Serviço</b></th>
                                        <th scope="col">
                                            <button  onclick="busca_funcionario()"  class="btn btn-sm btn-dark col-12"><i class="fa fa-plus"></i> Adicionar</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="tbody_funcionario">
                                    
                                </tbody>
                            </table>
                        <div class="msg_funcionarios">
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 1rem;">
                        <button class="btn btn-dark btn-sm float-right" id="btnEnviar_pend" disabled onClick="salva_pendencia();"> 
                            <i class="fa fa-check float-left" style="margin-top: 0.1rem; margin-right: 0.3rem"></i> 
                                Salvar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            <h5 class="small mb-0 text-left font-weight-normal">    
                Serviços
            </h5>
        </button>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
                <div id="msg_servicos">
                
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-stripped">
                            <thead >
                                <tr>
                                    <th width="180" scope="col" class="small"><b>Serviço</b></th>
                                    <th width="428" scope="col" class="small"><b>Funcionário</b></th>
                                    <th width="278" scope="col" class="small"><b>Qtd. Peças</b></th>
                                    <th class="small" scope="col">
                                        <button  onclick="busca_servicos()"  class="btn btn-dark btn-sm col-12"><i class="fa fa-plus"></i> Adicionar</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tbody_servico">

                            </tbody>
                        </table>
                    </div>
                    <div class="col-12" style="margin-top: 1rem;">
                        <button class="btn btn-dark btn-sm float-right" id="btnEnviar_serv" disabled onClick="salva_servicos();"> 
                            <i class="fa fa-check float-left" style="margin-top: 0.1rem; margin-right: 0.3rem"></i> 
                                Salvar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            <h5 class="small mb-0 text-left font-weight-normal">    
                Registros
            </h5>
        </button>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
        <div class="card-body">
            <div id="msg">
            </div>
            <div id="msg_registro"></div>
            <div class="row">
                <div class="col-12">
                    <font size="2">
                        <p>Os logs são separados por:</p>
                        <ul>
                            <li>Tipo; Campos alterados; Novos valores</li>
                        </ul>
                    </font>
                    <div class="card">
                        <div class="card-body" style="height: 15rem; overflow-x: hidden;" id="logs">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <button class="btn btn-secondary" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            <h5 class="small mb-0 text-left font-weight-normal">    
                Comunicações
            </h5>
        </button>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven  " data-parent="#accordion">
        <div class="card-body">
            <div id="msg">
            </div>
            <div id="msg_registro"></div>
            <div class="row">
                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-body" id="comunicador_msg" style="height: 15rem; overflow-x: hidden;">
                            <!--<div class="alert alert-warning  float-right" style="width: 90%;" role="alert">
                                <h6 class="text-right">Mensagem enviada <br>
                                <font size="1px" class="text-left">19/03/2018 - 10:00</font>
                                </h6>
                            </div>
                            <div class="alert alert-success float-left" style="width: 90%;" role="alert">
                                <h6 class="text-left">Mensagem recebida <br>
                                <font size="1px" class="text-left">19/03/2018 - 10:00</font><br>
                                <font size="1px" class="text-left"><b>Funcionário</b></font>
                                </h6>
                            </div>-->
                        </div>
                        <div class="card-footer text-muted">
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="comunicador">
                                            <h6 class="small" style="margin-top:1rem">Funcionário</h6>
                                        </label>
                                        <select multiple class="form-control" id="comunicadorFuncionario">
                                        </select>
                                    </div>
                                    <div class="text-danger"></div>
                                </div>
                                <div class="col-7">
                                    <textarea style="margin-top:3rem" class="form-control" placeholder="Mensagem..." id="comunicadorMensagem" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-danger"></div>
                        <button class="btn btn-sm btn-dark float-right" id="enviar_comunicador" onclick="envia_comunicador(this.id)"> 
                            <i class="fa fa-share-square float-left" style="margin-top: 0.1rem; margin-right: 0.3rem"></i> 
                                Enviar
                        </button>
                    </div>
                </div>
                <div class="linha-vertical"></div>
                <div class="col-6">
                    <div class="col-12">
                        <div class="card text-center">
                            <div class="card-body" id="mensagens_interna" style="height: 18rem; overflow-x: hidden;">
                                
                            </div>
                            <div class="card-footer text-muted">
                                <textarea class="form-control" id="registro_interno" rows="6" placeholder="Mensagem..."></textarea>
                            </div>
                            <div class="text-danger"></div>
                                <button class="btn btn-sm btn-dark float-right" id="enviar_registro" onclick="envia_comunicador(this.id)"> 
                                    <i class="fa fa-share-square float-left" style="margin-top: 0.1rem; margin-right: 0.3rem"></i> 
                                        Enviar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal para busca-->
<div class="modal fade" id="adicionaFuncionario" tabindex="-1" role="dialog" aria-labelledby="adicionaFuncionario" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Funcionarios</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group input-group-sm">
                                <input type="text" id="pesquisa_funcionario" onkeyup="busca_funcionario()" class="form-control"  placeholder="Digite para pesquisar" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" id="lista_funcionarios">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal cadastrar servico -->

<div class="modal fade" id="adicionaServicos" tabindex="-1" role="dialog" aria-labelledby="adicionaServicos" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Serviços</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group input-group-sm">
                                <input type="text" id="pesquisa_servico" onkeyup="busca_servicos()" class="form-control"  placeholder="Digite para pesquisar" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" id="lista_servicos">

                        </div>
                    </div>
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
//Função datepicker
$( function() {
    $('#vistoria_realizada').datepicker();
    $('#autorizacao').datepicker();
    $('#entrada').datepicker();
    $('#saida').datepicker();
    $('#icomplemento').datepicker();
    $('#agendamento').datepicker();
    $('#previsao_entrega').datepicker();
    $('#entregue').datepicker();
    $('#dtRetorno').datepicker();
    $('#nascimento').datepicker();
});

var query = location.search.slice(1);
var partes = query.split('&');
var os_id;
var data = {};
partes.forEach(function (parte) {
    var chaveValor = parte.split('=');
    var chave = chaveValor[0];
    var valor = chaveValor[1];
    data[chave] = valor;
});

os_id = data.codOS;

//Função para buscar dados da OS
busca_corretores();
busca_seguradoras();
busca_os();
busca_log();
function busca_log(){
    $('#preloader').show();
    var data = {
        id : os_id,
        funcao : "buscar_log"
    };
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            if(data){
                var retorno = $.parseJSON(data);
                var html = "";
                for(var i=0; i < retorno.length ; i++ ){
                    html += '<div class="alert alert-warning" role="alert">'+
                        '<b><font size="2px" class="text-left">'+retorno[i].titulo+': '+retorno[i].descricao+'</b><br>'+
                            '<font size="1px" class="text-left">'+retorno[i].nome+' - '+retorno[i].data+' - '+retorno[i].hora+'</font><br>'+
                        '</font>'+
                    '</div>';
                }
                $('#logs').append(html);
            }
        }
    });
}
function busca_os(){
    $('#preloader').show();
    var data = {
        id : os_id,
        funcao : "buscar_os"
    };
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            $('#preloader').hide();
            if(data){
                var resultado = $.parseJSON(data);
                $('#numero_servico').html('<b>Número do serviço: </b>' +resultado.numero_servico);
                $('#dia_cadastro').html('<b>Cadastrado em: </b>' +resultado.data_cadastro);
                //Dados do cliente
                $('#nome').attr('value', resultado.nome_cliente);
                $('#id_empresa').attr('value', resultado.empresa_id);
                $('#nome').attr('value', resultado.nome);
                $('#nascimento').attr('value', resultado.data_nascimento);
                $('#cpf').attr('value', resultado.cpf);
                $('#rg').attr('value', resultado.rg);
                $('#orgao_emissor').attr('value', resultado.orgao_emissor);
                $('#email').attr('value', resultado.email);
                $('#telefone').attr('value', resultado.telefone);
                $('#celular').attr('value', resultado.celular);
                $('#cep').attr('value', resultado.cep);
                $('#endereco').attr('value', resultado.endereco);
                $('#numero').attr('value', resultado.numero);
                $('#complemento').attr('value', resultado.complemento);
                $('#bairro').attr('value', resultado.bairro);
                $('#cidade').attr('value', resultado.cidade);
                $('#uf').attr('value', resultado.uf);

                //Dados do veiculo
                $('#placa').attr('value', resultado.placa);
                $('#modelo').attr('value', resultado.modelo);
                $('#ano_modelo').attr('value', resultado.ano_modelo);
                $('#ano_fabricacao').attr('value', resultado.ano_fabricacao);
                $('#fabricante').val(resultado.fabricante);
                $('#cor').attr('value', resultado.cor);
                $('#chassi').attr('value', resultado.chassi);
                $('#tipo_cadastro').val(resultado.tipo);
                $('#seguradora').val(resultado.seguradora_id);
                $('#corretor').val(resultado.corretor_id);

                //Numero do sinistro
                $('#sinistro').attr('value', resultado.sinistro);

                //Datas
                if (resultado.perda_total == 1){
                    $('#pt').attr('checked', true);
                }
                if (resultado.pendencia_peca == 1){
                    $('#pendenciaPecas').attr('checked', true);
                }

                if (resultado.data_retorno != null){
                    $('#retorno').attr('checked', true);
                    $('#dtRetorno').removeAttr('disabled');
                    $('#check_tc').removeAttr('hidden');
                }

                if (resultado.situacao_tc == 1){
                    $('#check_tc').removeAttr('hidden');
                    $('#retorno_tc').attr('checked', true);
                    $('#area_tc').removeAttr('hidden');
                    document.getElementById('tc').value = resultado.termo_comp;

                }

                $('#vistoria_realizada').attr('value', resultado.data_vistoria_realizada);
                $('#autorizacao').attr('value', resultado.data_autorizacao);
                $('#entrada').attr('value', resultado.data_entrada);
                $('#saida').attr('value', resultado.data_saida);
                $('#icomplemento').attr('value', resultado.data_complemento_realizado);
                $('#agendamento').attr('value', resultado.data_agendamento);
                $('#previsao_entrega').attr('value', resultado.data_previsao_entrega);
                $('#entregue').attr('value', resultado.data_entrega);
                $('#dtRetorno').attr('value', resultado.data_retorno);

                $('#preloader').hide();
            }
        }
    });
}

function busca_corretores(){
    var data = {funcao: 'busca_corretores'};
    var html ;
    $.ajax({
        url: 'controller/cliente&veiculo.php',
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
    var data = {funcao: 'busca_seguradoras'};
    var html ;
    $.ajax({
        url: 'controller/cliente&veiculo.php',
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

//função que habilida campo de retorno
function habilita_retorno(){
    var check_retorno = document.getElementById("retorno");
    if (check_retorno.checked){
        $('#dtRetorno').removeAttr('disabled');
        $('#check_tc').removeAttr('hidden');
    } else {
        $('#dtRetorno').attr('disabled', true);
        $('#check_tc').attr('hidden', true);
        $('#area_tc').attr('hidden', true);
        document.getElementById("retorno_tc").checked = false;
    }
}

//função que habilida campo de retorno
function habilita_retorno_tc(){
    var retorno_tc = document.getElementById("retorno_tc");
    if (retorno_tc.checked){
        $('#area_tc').removeAttr('hidden');
    } else {
        $('#area_tc').attr('hidden', true);
    }
}

//Função para buscar funcionários da pendencia interna
function busca_funcionario(){
    $('#preloader').show();
    $('#lista_funcionarios').val("");
    var pesquisa = $('#pesquisa_funcionario').val();
    var data = {
        funcao : "buscar_funcionario" , 
        pesquisa : pesquisa 
    };
    var html= "";
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            if(data){
                var resultado = $.parseJSON(data);
                if(resultado.length > 0){
                    $('#adicionaFuncionario').modal('show');
                    for(var i = 0; i < resultado.length ; i++){
                        html += '<div class="input-group intpu-group-sm" style="margin-top:1rem">'+
                        '<input type="text" class="form-control" disabled placeholder="'+resultado[i].nome+'" aria-label="Recipients username" aria-describedby="basic-addon2">'+
                        '<div class="input-group-append">'+
                        '<button class="btn btn-sm btn-dark" id="'+resultado[i].nome+'" onclick="adiciona_funcionario('+resultado[i].id+', this); pendencia_interna();" type="button">Adicionar</button>'+
                        '</div>'+
                        '</div>';
                    }
                    $('#lista_funcionarios').html(html);
                    $('#preloader').hide();
                }else{

                }
            }else{
                $('#preloader').hide();
            }
        }
    });
}

//Função para adicionar funcionario a tabela
var id_funcionarios = [];
function adiciona_funcionario(id, nome){
    var html = "";
    var confere = true;
    for(var i = 0 ; i < id_funcionarios.length ; i++){
        if( id == id_funcionarios[i] ){
            confere = false;
        }
    }
    id_funcionarios.push(id);
    var nome = nome.id;
    var nome_string = nome.substring(0, 20);
    var nome_funcionario = "";
    if (nome.length >= 20){
        nome_funcionario = nome_string+'...';
    }else{
        nome_funcionario = nome;
    }
    html += '<tr id="'+id+'tr">'+
            '<th style="vertical-align: middle" class="small" title="'+nome+'" scope="col" id="'+id+'">'+nome_funcionario+'</th>'+
            '<th scope="col">'+
            '<input id="id_funcionario_pend" value="'+id+'" hidden>'+
            '<input id="nome_funcionario_pend'+id+'p" value="'+nome+'" hidden>'+
            '<input id="servico_pendencia'+id+'p" onkeyup="habilita_salvar()" class="form-control" maxlength="150">'+       
            '</th>'+
            '<th scope="col">'+
            '<button class="btn btn-sm btn-dark col-12" onclick="remove_funcionario('+id+', \''+nome+'\');"><i class="fa fa-trash"></i> Remover</buttona>'+
            '</th>'+
        '</tr>';
    $('#tbody_funcionario').append(html);
}

//Função para remover funcionário da tabela
function remove_funcionario(id, nome){    
    $('#preloader').show();
    var data = {
        id_funcionario: id,
        id: os_id,
        nome: nome,
        meu_id: meu_id,
        funcao: "remove_pendencias"
    };
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            $('#preloader').hide();
            $('#'+id+'tr').remove();
        }
    });
}

//Função para buscar pendencias
busca_pendencias();
function busca_pendencias(){
    $('#preloader').show();
    var data = {
        id : os_id,
        funcao : "buscar_pendencias"
    };
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            var html = "";
            if(data){
                var resultado = $.parseJSON(data);
                if (resultado.length > 0){
                    for(var i = 0; i < resultado.length ; i++  ){
                        var nome = resultado[i].nome;
                        var nome_string = nome.substring(0, 20);
                        var nome_funcionario = "";
                        if (nome_string.length >= 20){
                            nome_funcionario = nome_string+'...';
                        }else{
                            nome_funcionario = nome;
                        }
                        html += '<tr id="'+resultado[i].id+'tr">'+
                                '<th style="vertical-align: middle" class="small" title="'+nome+'" scope="col" id="'+resultado[i].id+'">'+nome_funcionario+'</th>'+
                                '<th scope="col">'+
                                '<input id="id_funcionario_pend" value="'+resultado[i].id+'" hidden>'+
                                '<input id="nome_funcionario_pend'+resultado[i].id+'p" value="'+nome+'" hidden>'+
                                '<input id="servico_pendencia" class="form-control" maxlength="150" value="'+resultado[i].servico+'" disabled>'+       
                                '</th>'+
                                '<th scope="col">'+
                                '<button class="btn btn-sm btn-dark col-12" onclick="remove_funcionario('+resultado[i].id+', \''+nome+'\');"><i class="fa fa-trash"></i> Remover</buttona>'+
                                '</th>'+
                            '</tr>';
                        $('#tbody_funcionario').html(html);
                    }
                }
                
            }
        }
    });
}

//Função para buscar serviços cadastrados
busca_servico_cadastrado();
function busca_servico_cadastrado(){
    $('#preloader').show();
    var data = {
        id : os_id,
        funcao : "busca_servico_cadastrado"
    };
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            var html = "";
            if(data){
                var resultado = $.parseJSON(data);
                if (resultado.length > 0){
                    for(var i = 0; i < resultado.length ; i++){
                        var servico = resultado[i].servico;
                        var servico_string = servico.substring(0, 20);
                        var servico_funcionario = "";
                        if (servico_string.length >= 20){
                            servico_funcionario = servico_string+'...';
                        }else{
                            servico_funcionario = servico;
                        }
                        var qtd_pecas = '';
                        if (resultado[i].qtd == '0'){
                            qtd_pecas = 'Por carro';
                        }else{
                            qtd_pecas = resultado[i].qtd;
                        }
                        html += '<tr id="'+resultado[i].id+'tr">'+
                                '<th style="vertical-align: middle" class="small" title="'+servico+'" scope="col" id="'+resultado[i].servico_id+'">'+servico_funcionario+'</th>'+
                                '<th scope="col">'+
                                '<input id="id_servico" value="'+resultado[i].servico_id+'" hidden>'+
                                '<input id="id_funcionario_servico" value="'+resultado[i].funcionario_id+'" hidden>'+
                                '<div class="input-group input-group-sm">'+
                                '<select disabled class="form-control" id="select_funcionario">'+
                                '<option value="'+resultado[i].funcionario_id+'">'+resultado[i].nome+'</option>'+       
                                '</select>'+  
                                '</div>'+
                                '</th>'+
                                '<th scope="col">'+
                                '<div>'+
                                '<input id="servico_cliente'+resultado[i].servico_id+'sc" class="form-control" maxlength="150" value="'+qtd_pecas+'" disabled>'+       
                                '</div>'+
                                '</th>'+
                                '<th scope="col">'+
                                '<button class="btn btn-sm btn-dark col-12" onclick="remove_servico('+resultado[i].servico_id+', \''+servico_funcionario+'\');"><i class="fa fa-trash"></i> Remover</buttona>'+
                                '</th>'+
                            '</tr>';
                        $('#tbody_servico').html(html);
                    }
                }
                
            }
        }
    });
}

// Função para buscar serviços
var id_servicos  = [];
function busca_servicos (){
    $('#preloader').show();
    $('#lista_servicos').val("");
    var pesquisa = $('#pesquisa_servico').val();
    var data = {
        funcao : "buscar_servicos" , 
        pesquisa : pesquisa 
    };
    var html= "";
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            if(data){
                var resultado = $.parseJSON(data);
                if(resultado.length > 0){

                    $('#msg_servicos').html("");

                    $('#adicionaServicos').modal('show');
                    var html = "";
                    for(var i = 0; i < resultado.length ; i++){

                        html += '<div class="input-group" style="margin-top:1rem">'+
                        '<input type="text" class="form-control" disabled placeholder="'+resultado[i].servico+'" aria-label="Recipients username" aria-describedby="basic-addon2">'+
                        '<div class="input-group-append">'+
                        '<button class="btn btn-sm btn-dark" id="'+resultado[i].servico+'" onclick="adiciona_servico('+resultado[i].id +','+ resultado[i].tipo+', this); servicos_os()" type="button">Adicionar</button>'+
                        '</div>'+
                        '</div>';
                    }
                    $('#lista_servicos').html(html);

                    $('#preloader').hide();

                }else{
                    var html =  '<div class="alert alert-danger">'+
                                '<i class="fa fa-exclamation-triangle"></i>  Ocorreu um erro, por favor tente mais tarde'+
                                '</div>';

                    window.location.href='#msg_servicos';
                    $('#msg_servicos').html(html);
                    $('#preloader').hide();
                }
            }else{
                var html =  '<div class="alert alert-danger">'+
                            '<i class="fa fa-exclamation-triangle"></i>  Não possui nenhum serviço cadastrado,  cadastre um para prosseguir com esta ação'+
                            '</div>';
                window.location.href='#msg_servicos';
                $('#msg_servicos').html(html);
                $('#preloader').hide();
            }
        }
    });
}

function adiciona_servico(id, tipo_pagamento, descricao){
    var html = "";
    var confere = true;

    for(var i = 0 ; i < id_servicos.length ; i++){
        if( id == id_servicos[i] ){
            confere = false;
        }
    }

    id_servicos.push(id);
    $('#msg_servicos').html("");  

    if(tipo_pagamento == 0 && confere){
        busca_funcionario_servico(id);
        html += '<tr id="'+id+'tr">'+
                '<th style="display:none">'+
                '<input type="text" id="'+id+'func" hide value="'+id+'">'+
                '</th>'+
                '<th style="vertical-align: middle" class="small" scope="col">'+descricao.id+'</th>'+
                '<td scope="col">'+
                '<div class="input-group input-group-sm">'+
                '<select class="form-control" id="'+id+'s">'+
                '<option value="0">Selecione um Funcionario</option>'+       
                '</select>'+     
                '</div>'+   
                '<div class="text-danger"></div>'+          
                '</td>'+
                '<th scope="col">'+
                    '<div>'+
                    '<input type="text" class="form-control" placeholder="Qtd. peças" id="'+id+'qtd">'+
                    '</div>'+   
                    '<div class="text-danger"></div>'+ 
                '</th>'+
                '<th scope="col">'+
                '<button class="btn btn-sm btn-dark col-12" onclick="remove_servico('+id+');"><i class="fa fa-trash"></i> Remover</buttona>'+
                '</th>'+
                '</tr>';
    }else if(confere){
        busca_funcionario_servico(id);
        html += '<tr id="'+id+'tr">'+
                '<th style="display:none" id="'+id+'func" value="'+id+'">'+id+'</th>'+
                '<th style="vertical-align: middle" class="small" scope="col">'+descricao.id+'</th>'+
                '<td scope="col">'+
                '<div class="input-group input-group-sm">'+
                '<select class="form-control" id="'+id+'s">'+
                '<option value="0">Selecione um Funcionario</option>'+       
                '</select>'+     
                '</div>'+   
                '<div class="text-danger"></div>'+     
                '</td>'+
                '<td scope="col">'+
                    '<div>'+
                    '<input type="text" class="form-control" id="'+id+'i"  disabled value="Por carro">'+
                    '</div>'+   
                    '<div class="text-danger"></div>'+ 
                '</td>'+
                '<th scope="col">'+
                '<button class="btn btn-sm btn-dark col-12" onclick="remove_servico('+id+');"><i class="fa fa-trash"></i> Remover</buttona>'+
                '</th>'+
                '</tr>';
    }
    $('#tbody_servico').append(html);
}

function busca_funcionario_servico(servico_id){
    var data = {
        funcao : "busca_funcionarios_servico", 
        servico_id : servico_id 
    };
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            if(data){
                var html = '';
                var resultado = $.parseJSON(data);
                for(var i = 0; i < resultado.length; i++){
                    html += '<option value="'+resultado[i].id+'">'+resultado[i].nome+'</option>'; 
                }   
                $('#'+servico_id+'s').append(html);
            }
        }
    });
}

function remove_servico(id, servico){
    $('#preloader').show();
    var data = {
        id_servico: id,
        id: os_id,
        servico: servico,
        meu_id: meu_id,
        funcao: "remove_servicos"
    };
    $.ajax({
        url: 'controller/detalhamento.php',
        method: "post",
        data: data ,
        success: function(data){
            $('#preloader').hide();
            $('#'+id+'tr').remove();
        }
    });
}

var alterado = false;
var lista = [];
$(document).ready(function(e) {
    $('input').keypress(function(element){
        alterado = true;
        var validacao = true;
        for(var i = 0; i < lista.length; i++){
            if(lista[i] == element.delegateTarget.id){
                validacao = false;
            }
        }
        if($('#servico_pendencia').keypress){
            validacao = false;
        }
        if (validacao){
            alert();
            lista.push(element.delegateTarget.id);
        }
    });
    $('textarea').keypress(function(element){
        alterado = true;
        var validacao = true;
        for(var i = 0; i < lista.length; i++){
            if(lista[i] == element.delegateTarget.id){
                validacao = false;
            }
        }
        if (validacao){
            lista.push(element.delegateTarget.id);
        }
    });
    $('select').change(function(element){
        alterado = true;
        var validacao = true;
        for(var i = 0; i < lista.length; i++){
            if(lista[i] == element.delegateTarget.id){
                validacao = false;
            }
        }
        if (validacao){
            lista.push(element.delegateTarget.id);
        }
    });
    $('input').change(function(element){
        alterado = true;
        var validacao = true;
        for(var i = 0; i < lista.length; i++){
            if(lista[i] == element.delegateTarget.id){
                validacao = false;
            }
        }
        if($('#servico_pendencia').keypress){
            validacao = false;
        }
        if (validacao){
            lista.push(element.delegateTarget.id);
        }
	});
});

function altera_cliente(){
    var lista_valores = [];
	if(alterado){	
        for (var i = 0; i < lista.length; i++){
            var valor = $('#'+lista[i] ).val();
            lista_valores.push(valor);
        }
        var dados = {
            lista_alterados: lista,
            lista_valores: lista_valores          
        };

        var data = {
            funcao : "alterar_cliente",
            alterados : JSON.stringify(dados),
            id: os_id,
            id_funcionario: meu_id
        };
        $.ajax({
            url: 'controller/detalhamento.php',
            method: "post",
            data: data,
            success: function(data){
                monta_msg_sucesso(" Alteração efetuada com sucesso");
                window.location.href='#msg';
                window.setInterval(function(){
                    window.location.href='detalhamento.php?codOS='+os_id;
                },1500);
            }
        });
	}else{
        monta_msg_alerta(" Não houve alterações no formulário. Favor, verifique e tente novamente");
        window.location.href='#msg';
        window.setInterval(function(){
            remove_msg();
        },3500);
	}
}

function altera_tramitacao(){
    var lista_valores = [];
    var check_pt = '0';
    var check_pend_pecas = '0';
    var check_retorno = '0';
    var check_tc = '0';
    var check_pronto = '0';
	if(alterado){	
        for (var i = 0; i < lista.length; i++){
            var valor = $('#'+lista[i] ).val();
            lista_valores.push(valor);
        }
        if (document.getElementById("pt").checked){
            check_pt = '1';
        }else{
            check_pt = '0';
        }
        if (document.getElementById("pendenciaPecas").checked){
            check_pend_pecas = '1';
        }else{
            check_pend_pecas = '0';
        }
        if (document.getElementById("retorno").checked){
            check_retorno = '1';
        }else{
            check_retorno = '0';
        }
        if (document.getElementById("retorno_tc").checked){
            check_tc = '1';
        }else{
            check_tc = '0';
        }
        if (document.getElementById("pronto").checked){
            check_pronto = '1';
        }else{
            check_pronto = '0';
        }
        var dados = {
            lista_alterados: lista,
            lista_valores: lista_valores

        };

        var data = {
            funcao : "alterar_tramitacao",
            alterados : JSON.stringify(dados),
            id: os_id,
            id_funcionario: meu_id,
            check_pt: check_pt,
            check_pend_pecas: check_pend_pecas,
            check_retorno: check_retorno,
            check_tc: check_tc,
            check_pronto: check_pronto
        };
        $.ajax({
            url: 'controller/detalhamento.php',
            method: "post",
            data: data,
            success: function(data){
                monta_msg_sucesso(" Alteração efetuada com sucesso");
                window.location.href='#msg';
                window.setInterval(function(){
                    remove_msg();
                },3500);
            }
        });
	}else{
        monta_msg_alerta(" Não houve alterações no formulário. Favor, verifique e tente novamente");
        window.location.href='#msg';
        window.setInterval(function(){
            remove_msg();
        },3500);
	}
}

//Função para verificar acionamento de pendencias internas para desabilitar botão
function pendencia_interna(){
    if (id_funcionarios.length > 0){
        $('#btnEnviar_pend').removeAttr('disabled');
    }else {
        $('#btnEnviar_pend').attr('disabled', 'true');
    }
}

//Função para verificar acionamento de pendencias internas para desabilitar botão
function servicos_os(){
    if (id_servicos.length > 0){
        $('#btnEnviar_serv').removeAttr('disabled');
    }else {
        $('#btnEnviar_serv').attr('disabled', 'true');
    }
}

function salva_pendencia(){
    $('#preloader').show();
    for(var i = 0; i < id_funcionarios.length; i++){
        var servico_pendencia = $('#servico_pendencia'+id_funcionarios[i]+'p').val();
        var nome_funcionarios = $('#nome_funcionario_pend'+id_funcionarios[i]+'p').val();
        var funcionario_id = id_funcionarios[i];
        var data = {
            id_funcionario: funcionario_id,
            id: os_id,
            nome: nome_funcionarios,
            meu_id: meu_id,
            servico: servico_pendencia,
            funcao: "salva_pendencias"
        };
        $.ajax({
            url: 'controller/detalhamento.php',
            method: "post",
            data: data ,
            success: function(data){
                $('#preloader').hide();
                alert(data);
            }
        });
    }
}

//Salvar servicos
function salva_servicos(){
    $('#preloader').show();
    for(var i = 0; i < id_servicos.length; i++){
        var funcionario_id = $('#'+id_servicos[i]+'s').val();
        var servico_id = $('#'+id_servicos[i]+'func').val();
        var qtd_pecas = $('#'+id_servicos[i]+'qtd').val();
        if(qtd_pecas == undefined){
            qtd_pecas = '';
        }
        var data = {
            funcionario_id: funcionario_id,
            servico_id: servico_id,
            cliente_id: os_id,
            qtd_pecas: qtd_pecas,
            meu_id: meu_id,
            funcao: "salva_servicos"
        };
        $.ajax({
            url: 'controller/detalhamento.php',
            method: "post",
            data: data ,
            success: function(data){
                $('#preloader').hide();
                alert(data);
            }
        });
    }
}
</script>