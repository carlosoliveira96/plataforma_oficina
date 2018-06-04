<?php
include 'menu.php';
?>

        <div>
            <h2>
                <p class="text-center small" style="color: #000"><i><b>Empresa</b></i></p>
            </h2>
            <hr>
            <div class="row">
                <div class="col-4">
                    <div class="fileinput fileinput-new " data-provides="fileinput" style="margin-left: 1rem">
                        <div class="fileinput-preview thumbnail img-thumbnail" data-trigger="fileinput" style="width: 20rem;  height: 17.5rem"></div>
                        <div>
                            <span class="btn btn-dark btn-file btn-sm col-12">
                                <span class="fileinput-new ">Selecione o logotipo</span>
                                <span class="fileinput-exists" data-dismiss="fileinput">Alterar</span>
                                <input type="file" id="arquivo" name="arquivo" accept="image/*">
                            </span>
                            <a href="#" class="btn btn-dark btn-sm fileinput-exists col-12" data-dismiss="fileinput" style="margin-top: 0.5rem">Remover</a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="small"><i><b>Razão social</b></i></h6>
                            <div class="input-group input-group-sm">
                                <input type="text" id="razao-social" class="form-control" placeholder="Razão social da empresa" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 class="small"><i><b>Nome fantasia</b></i></h6>
                            <div class="input-group input-group-sm">
                                <input type="text" id="nome-fantasia" class="form-control" placeholder="Nome fantasia da empresa" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 style="margin-top:1rem" class="small"><i><b>CNPJ</b></i></h6>
                            <div class="input-group input-group-sm">
                                <input type="text" id="cnpj" class="form-control" data-mask="99.999.999/9999-99" placeholder="00.000.000/0000-00" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 style="margin-top:1rem" class="small"><i><b>IE</b></i></h6>
                            <div class="input-group input-group-sm">
                                <input type="text" id="ie" class="form-control" placeholder="123456789" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 style="margin-top:1rem" class="small"><i><b>Telefone</b></i></h6>	
                            <div class="input-group input-group-sm">
                                <input type="text" id="telefone" data-mask="(99) 9999-9999" class="form-control" placeholder="(99) 9999-9999">
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 style="margin-top:1rem" class="small"><i><b>Telefone/Celular</b></i></h6>	
                            <div class="input-group input-group-sm">
                                <input type="text" id="telefone-celular" data-mask="(99) 99999-9999" class="form-control" placeholder="(99) 99999-9999">
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-12">
                            <h6 style="margin-top:1rem" class="small"><i><b>E-mail</b></i></h6>	
                            <div class="input-group input-group-sm">
                                <input type="text" id="email" class="form-control" placeholder="exemplo@exemplo.com">
                            </div>
                            <div class="text-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <h6 style="margin-top:1rem" class="small"><i><b>CEP</b></i></h6>	
                    <div class="input-group input-group-sm">
                        <input type="text" id="cep" class="form-control" placeholder="Ex.: 99999-999" data-mask="99999-999"  onkeyup="busca_cep()">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <div class="form-check" style="margin-top: 2.5rem">
                        <input class="form-check-input" type="checkbox" value="" id="sem_cep" onchange="nao_sei_cep()">
                        <label class="form-check-label small" for="defaultCheck1">
                            Não sei o CEP
                        </label>
                    </div>
                </div>
                <div class="col-6">
                    <h6 style="margin-top:1rem" class="small"><i><b>Endereço</b></i></h6>	
                    <div class="input-group input-group-sm">
                        <input type="text" id="endereco" class="form-control" placeholder="Ex.: Exemplo exemplo exemplo"  disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <h6 style="margin-top:1rem" class="small"><i><b>Número</b></i></h6>	
                    <div class="input-group input-group-sm">
                        <input type="text" id="numero" class="form-control" placeholder="Ex.: 99 "  disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-4">
                    <h6 style="margin-top:1rem" class="small"><i><b>Complemento</b></i></h6>	
                    <div class="input-group input-group-sm">
                        <input type="text" id="complemento" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="50" disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 style="margin-top:1rem" class="small"><i><b>Bairro</b></i></h6>	
                    <div class="input-group input-group-sm">
                        <input type="text" id="bairro" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="100" disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-4">
                    <h6 style="margin-top:1rem" class="small"><i><b>Cidade</b></i></h6>	
                    <div class="input-group input-group-sm">
                        <input type="text" id="cidade" class="form-control" placeholder="Ex.: Exemplo exemplo" maxlength="100" disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <h6 style="margin-top:1rem" class="small"><i><b>UF</b></i></h6>	
                    <div class="input-group input-group-sm">
                        <input type="text" id="uf" class="form-control" placeholder="Ex.: DF" maxlength="2" disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button style="margin-top: 1rem" class="btn btn-dark btn-sm btn-block" onclick="salvar()">
                        <i class="fa fa-check float-left" style="margin-top: 0.2rem;"></i> Salvar
                    </button>
                    <br>
                </div>
            </div>
        </div>

        </main>
    </div>
    <!-- page-wrapper -->
  </body>
</html>