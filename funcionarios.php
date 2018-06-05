<?php
include 'menu.php';
?>
            <h2>
                <p class="text-center small" style="color: #000"><b>Cadastro de funcionários</b></p>
            </h2>
            <hr>
            <div id="msg"></div>
            <div class="row" id="dados">
                <div class="col-4">
                    <div class="fileinput fileinput-new " data-provides="fileinput" style="width: 100%">
                        <div class="fileinput-preview thumbnail img-thumbnail" data-trigger="fileinput" style="width: 100%;  height: 17.5rem"></div>
                        <div>
                            <span class="btn btn-dark btn-file btn-sm col-12">
                                <span class="fileinput-new ">Selecione a imagem</span>
                                <span class="fileinput-exists" data-dismiss="fileinput">Alterar</span>
                                <input type="file" id="arquivo" name="arquivo" accept="image/*">
                            </span>
                            <a href="#" class="btn btn-dark btn-sm fileinput-exists col-12" data-dismiss="fileinput" style="margin-top: 0.5rem">Remover</a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="small">Nome</h6>   
                            <div class="input-group input-group-sm">
                                <input type="text" id="nome" class="form-control" placeholder="Ex.:  Exemplo exemplo " maxlength="200" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">CPF</h6>    
                            <div class="input-group input-group-sm ">
                                <input type="text" id="cpf"  onkeyup="verifica_cpf()" class="form-control" placeholder="Ex.: 999.999.999-99" data-mask="999.999.999-99" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">Nascimento</h6> 
                            <div class="input-group input-group-sm ">
                                <input class="form-control" placeholder="Ex.: 99/99/9999" data-mask="99/99/9999" id="nascimento"   type="text" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">RG</h6> 
                            <div class="input-group input-group-sm ">
                                <input type="text" id="rg" class="form-control" placeholder="Ex.: 9999999" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">Orgão Emissor</h6>
                            <div class="input-group input-group-sm ">
                                <input type="text" id="orgao_emissor" class="form-control" placeholder="Ex.: SSP-DF" maxlength="50" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">PIS/PASEP</h6>
                            <div class="input-group input-group-sm ">
                                <input type="text" id="pis" class="form-control" placeholder="Ex.: 9999999" maxlength="50" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">CTPS</h6>
                            <div class="input-group input-group-sm ">
                                <input type="text" id="ctps" class="form-control" placeholder="Ex.: 9999999" maxlength="50" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">Título de eleitor</h6>
                            <div class="input-group input-group-sm ">
                                <input type="text" id="titulo" class="form-control" placeholder="Ex.: 999999999" maxlength="50" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem">Admissão/h6> 
                            <div class="input-group input-group-sm ">
                                <input class="form-control" placeholder="Ex.: 99/99/9999" data-mask="99/99/9999" id="admissao" type="text">
                            </div>
                            <div class="text-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h6 class="small" style="margin-top:1rem">E-Mail</h6> 
                    <div class="input-group input-group-sm ">
                        <input type="email" id="email" onkeyup="valida_email()" class="form-control" placeholder="Ex.: exemplo@exemplo.com"  >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem">Telefone</h6>   
                    <div class="input-group input-group-sm ">
                        <input type="text" id="telefone" class="form-control" placeholder="Ex.: (99) 9999-9999" data-mask="(99) 9999-9999" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem">Celular</h6>    
                    <div class="input-group input-group-sm ">
                        <input type="text" id="celular" class="form-control" placeholder="Ex.: (99) 99999-9999" data-mask="(99) 99999-9999" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem">Nome de Usuário</h6>    
                    <div class="input-group input-group-sm ">
                        <input type="text" id="nome_usuario" class="form-control" onkeyup="verifica_usuario()" placeholder="Ex.: Exemplo exemplo" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem">Nível de acesso</h6>
                    <div class="form-check form-check-inline" style="margin-top:0.5rem">
                        <input class="form-check-input" type="radio" name="acesso" title="Acesso completo ao sistema" id="master" value="option1">
                        <label class="form-check-label" for="master" title="Acesso completo ao sistema">Master</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="acesso" title="Controle de acesso e permissão pessoal não acessível" id="senior" value="option1">
                        <label class="form-check-label" for="senior" title="Controle de acesso e permissão pessoal não acessível">Sênior</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="acesso" title="Administrativo e relatórios financeiros não acessível" id="pleno" value="option1">
                        <label class="form-check-label" for="pleno" title="Administrativo e relatórios financeiros não acessível">Pleno</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="acesso" title="Administrativo e financeiro não acessível" id="junior" value="option1">
                        <label class="form-check-label" for="junior" title="Administrativo e financeiro não acessível">Junior</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="acesso" title="Visualização do sistema, com exceção do administrativo e financeiro" id="trainee" value="option1">
                        <label class="form-check-label" for="trainee" title="Visualização do sistema, com exceção do administrativo e financeiro">Trainee</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6 class="small">CEP</h6>    
                    <div class="input-group input-group-sm" >
                        <input type="text"  id="cep" class="form-control" placeholder="Ex.: 99999-999" data-mask="99999-999"  onkeyup="busca_cep()">
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem">Endereco</h6>   
                    <div class="input-group input-group-sm ">
                        <input type="text" id="endereco"  class="form-control" placeholder="Ex.: Exemplo exemplo exemplo">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <h6 class="small" style="margin-top:1rem">Número</h6> 
                    <div class="input-group input-group-sm ">
                        <input type="text" id="numero"  class="form-control" placeholder="Ex.: 99">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-4">
                    <h6 class="small" style="margin-top:1rem">Complemento</h6>    
                    <div class="input-group input-group-sm ">
                        <input type="text" id="complemento"  class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="50">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem">Bairro</h6> 
                    <div class="input-group input-group-sm ">
                        <input type="text" id="bairro"  class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="100">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-4">
                    <h6 class="small" style="margin-top:1rem">Cidade</h6> 
                    <div class="input-group input-group-sm ">
                        <input type="text" id="cidade"  class="form-control" placeholder="Ex.: Exemplo exemplo" maxlength="100">
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <h6 class="small" style="margin-top:1rem">UF</h6> 
                    <div class="input-group input-group-sm ">
                        <input type="text" id="uf"   class="form-control" placeholder="Ex.: DF" maxlength="2">
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-6">
                    <h6 class="small" style="margin-top:1rem">Cargo</h6>    
                    <div class="input-group input-group-sm ">
                        <select class="form-control" id="cargo" >
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
                <div class="col-12">
                    <h6 class="small" style="margin-top:1rem">Adicionar Serviços</h6> 
                    <div class="card" style="margin-top:1rem;height:20rem;">
                        <div class="card-head">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="text" id="pesquisa" onkeyup="busca_servicos()" class="form-control" placeholder="Pesquisar serviços" maxlength="200" name="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="height:18rem; overflow-y: auto">
                            <div class="row">
                                <div class="col-12" id="adicionar_servicos">
                                    
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" value="Montador" disabled>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <button style="margin-top: 1rem;margin-bottom: 2rem" class="btn btn-dark btn-sm btn-block">
                        <i class="fa fa-check float-left" style="margin-top: 0.3rem;"></i> Salvar
                    </button>
                </div>
            </div>
        </main>
    </div>
    </body>

    <script>

    //Função datepicker
    $( function() {
        $('#nascimento').datepicker();
        $('#admissao').datepicker();
    });

    var controle_cep = true;
    var controle_usuario = true;
    var controle_cpf = true ; 
    var controle_email = true;
    var validacao_ok = true;


    function verifica_cpf(){
		var cpf = $('#cpf').val();
		if(cpf.length = 14 && ($.isNumeric(cpf.charAt(0))) 
			&& ($.isNumeric(cpf.charAt(1))) && ($.isNumeric(cpf.charAt(2)))
			&& ($.isNumeric(cpf.charAt(4))) && ($.isNumeric(cpf.charAt(5)))
			&& ($.isNumeric(cpf.charAt(6))) && ($.isNumeric(cpf.charAt(8)))
			&& ($.isNumeric(cpf.charAt(9))) && ($.isNumeric(cpf.charAt(10)))
			&& ($.isNumeric(cpf.charAt(12))) && ($.isNumeric(cpf.charAt(13))) ){
            $('#preloader').show();
			var data = {cpf: cpf, funcao: 'verifica_cpf'};
			$.ajax({
				url: '../../controller/funcionarioCadastro.php',
				method: "post",
				data: data ,
				success: function(data){
					if(data){
						controle_cpf = false;
						add_erro_input($('#cpf') , "CPF já cadastrado");
					}else{
						controle_cpf = true;
						remove_erro_input($('#cpf'));
					}
                    $('#preloader').hide();
				}
			});
		}
	}

    function verifica_usuario(){
		var nome_usuario = $('#nome_usuario').val();

		if (nome_usuario.length <= 3 ){
			add_erro_input($('#nome_usuario') , "Nome de usuário deve conter 4 caracteres no mínimo");
			controle_usuario = false;
		}else{
			var data = {usuario: nome_usuario, funcao: 'verifica_usuario'};
			$.ajax({
				url: '../../controller/cadastro.php',
				method: "post",
				data: data ,
				success: function(data){
					if(data){
						controle_usuario = false;
						add_erro_input($('#nome_usuario') , "Nome de Usuário já cadastrado");
					}else{
						remove_erro_input($('#nome_usuario'));
						controle_usuario = true;
					}
				}
			});
		}
	}

    function valida_email(){
		var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		if(!filter.test($('#email').val())){
			add_erro_input( $('#email') , "E-mail inválido" )
			controle_email = false;
		} else {
			controle_email = true;
			remove_erro_input($('#email'));
		}
	}
    </script>
</html>