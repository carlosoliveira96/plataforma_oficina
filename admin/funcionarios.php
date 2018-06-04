<?php
include 'menu.php';
?>
            <h2>
                <p class="text-center small" style="color: #000"><i><b>Cadastro de funcionários</b></i></p>
            </h2>
            <hr>
            <div id="msg"></div>
            <div class="row" id="dados">
                <div class="col-4">
                    <div class="fileinput fileinput-new " data-provides="fileinput" style="margin-left: 1rem">
                        <div class="fileinput-preview thumbnail img-thumbnail" data-trigger="fileinput" style="width: 20rem;  height: 17.5rem"></div>
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
                            <h6 class="small"  style="margin-top:1rem"><i><b>Nome</b></i></h6>   
                            <div class="input-group input-group-sm">
                                <input type="text" id="nome" class="form-control" placeholder="Ex.:  Exemplo exemplo " maxlength="200" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem"><i><b>CPF</b></i></h6>    
                            <div class="input-group input-group-sm ">
                                <input type="text" id="cpf"  onkeyup="verifica_cpf()" class="form-control" placeholder="Ex.: 999.999.999-99" data-mask="999.999.999-99" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem"><i><b>Nascimento</b></i></h6> 
                            <div class="input-group input-group-sm ">
                                <input class="form-control" placeholder="Ex.: 99/99/9999" data-mask="99/99/9999" id="nascimento"   type="text" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem"><i><b>RG</b></i></h6> 
                            <div class="input-group input-group-sm ">
                                <input type="text" id="rg" class="form-control" placeholder="Ex.: 9999999" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem"><i><b>Orgão Emissor</b></i></h6>  
                            <div class="input-group input-group-sm ">
                                <input type="text" id="orgao_emissor" class="form-control" placeholder="Ex.: SSP-DF" maxlength="50" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-12">
                            <h6 class="small" style="margin-top:1rem"><i><b>E-Mail</b></i></h6> 
                            <div class="input-group input-group-sm ">
                                <input type="email" id="email" onkeyup="valida_email()" class="form-control" placeholder="Ex.: exemplo@exemplo.com"  >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem"><i><b>Telefone</b></i></h6>   
                            <div class="input-group input-group-sm ">
                                <input type="text" id="telefone" class="form-control" placeholder="Ex.: (99) 9999-9999" data-mask="(99) 9999-9999" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                        <div class="col-6">
                            <h6 class="small" style="margin-top:1rem"><i><b>Celular</b></i></h6>    
                            <div class="input-group input-group-sm ">
                                <input type="text" id="celular" class="form-control" placeholder="Ex.: (99) 99999-9999" data-mask="(99) 99999-9999" >
                            </div>
                            <div class="text-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i><b>Nome de Usuário</b></i></h6>    
                    <div class="input-group input-group-sm ">
                        <input type="text" id="nome_usuario" class="form-control" onkeyup="verifica_usuario()" placeholder="Ex.: Exemplo exemplo" >
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i><b>Cargo</b></i></h6>    
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
            </div>
            <div class="row">
                <div class="col-12">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6 class="small" style="margin-top:1rem"><i><b>CEP</b></i></h6>    
                    <div class="input-group input-group-sm" >
                        <input type="text"  id="cep" class="form-control" placeholder="Ex.: 99999-999" data-mask="99999-999"  onkeyup="busca_cep()">
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
            </div>
            <div class="row">
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i><b>Endereco</b></i></h6>   
                    <div class="input-group input-group-sm ">
                        <input type="text" id="endereco"  class="form-control" placeholder="Ex.: Exemplo exemplo exemplo"  disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <h6 class="small" style="margin-top:1rem"><i><b>Número</b></i></h6> 
                    <div class="input-group input-group-sm ">
                        <input type="text" id="numero"  class="form-control" placeholder="Ex.: 99 "  disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-4">
                    <h6 class="small" style="margin-top:1rem"><i><b>Complemento</b></i></h6>    
                    <div class="input-group input-group-sm ">
                        <input type="text" id="complemento"  class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="50" disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-6">
                    <h6 class="small" style="margin-top:1rem"><i><b>Bairro</b></i></h6> 
                    <div class="input-group input-group-sm ">
                        <input type="text" id="bairro"  class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="100" disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-4">
                    <h6 class="small" style="margin-top:1rem"><i><b>Cidade</b></i></h6> 
                    <div class="input-group input-group-sm ">
                        <input type="text" id="cidade"  class="form-control" placeholder="Ex.: Exemplo exemplo" maxlength="100" disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
                <div class="col-2">
                    <h6 class="small" style="margin-top:1rem"><i><b>UF</b></i></h6> 
                    <div class="input-group input-group-sm ">
                        <input type="text" id="uf"   class="form-control" placeholder="Ex.: DF" maxlength="2" disabled>
                    </div>
                    <div class="text-danger"></div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <button style="margin-top: 1rem;margin-bottom: 2rem" class="btn btn-dark btn-lg btn-block" onclick="salvar()">
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
    });

    var controle_cep = true;
    var controle_usuario = true;
    var controle_cpf = true ; 
    var controle_email = true;
    var validacao_ok = true;

    function salvar(){

        validacao_ok = true;

        var sem_cep = $('#sem_cep');

        var nome = $('#nome').val();  
        var cpf = $('#cpf').val();  
        var nascimento = $('#nascimento').val();  
        var email = $('#email').val();  
        var telefone = $('#telefone').val();  
        var celular = $('#celular').val();  
        var nome_usuario = $('#nome_usuario').val();  
        var cargo = $('#cargo').val();  
        var rg = $('#rg').val();  
        var orgao_emissor = $('#orgao_emissor').val();  

		var cep = $('#cep').val();
		var endereco = $('#endereco').val();
		var numero = $('#numero').val();
		var complemento = $('#complemento').val();
		var bairro = $('#bairro').val();
		var cidade = $('#cidade').val();
		var uf = $('#uf').val();

        if(nome.length == 0 ){
            add_erro_input($('#nome') , "Por favor preencha o campo Nome");
            validacao_ok = false;
        }else{
            remove_erro_input($('#nome'));
        }  

        if(cpf.length == 0 ){
            add_erro_input($('#cpf') , "Por favor preencha o campo CPF");
            validacao_ok = false;
        }else{
            remove_erro_input($('#cpf'));
        }

        if(nascimento.length == 0 ){
            add_erro_input($('#nascimento') , "Por favor preencha o campo Nascimento");
            validacao_ok = false;
        }else{
            remove_erro_input($('#nascimento'));
        }

        if(email.length == 0 ){
            add_erro_input($('#email') , "Por favor preencha o campo E-mail");
            validacao_ok = false;
        }else{
            remove_erro_input($('#email'));
        }

        if(nome_usuario.length == 0 ){
            add_erro_input($('#nome_usuario') , "Por favor preencha o campo Nome de Usuário");
            validacao_ok = false;
        }else{
            remove_erro_input($('#nome_usuario'));
        }

        if(cargo == 0 ){
            add_erro_input($('#cargo') , "Por favor selecione um Cargo");
            validacao_ok = false;
        }else{
            remove_erro_input($('#cargo'));
        }

        if(celular.length == 0 && telefone.length == 0  ){
			add_erro_input($('#telefone') , "Por favor preencha o campo Telefone e/ou o campo Celular");
			add_erro_input($('#celular') , "Por favor preencha o campo Telefone e/ou o campo Celular");
            validacao_ok = false;
		}else{
			remove_erro_input($('#telefone'));
			remove_erro_input($('#celular'));
		}

        if(sem_cep.is(':checked')){

			if(endereco.length == 0 ){
				add_erro_input($('#endereco') , "Por favor preencha o campo Endereco");
				validacao_ok = false;
			}else{
				remove_erro_input($('#endereco'));
			}

			if(numero.length == 0 ){
				add_erro_input($('#numero') , "Por favor preencha o campo Número");
				validacao_ok = false;
			}else{
				remove_erro_input($('#numero'));
			}

			if(bairro.length == 0 ){
				add_erro_input($('#bairro') , "Por favor preencha o campo Bairro");
				validacao_ok = false;
			}else{
				remove_erro_input($('#bairro'));
			}

			if(cidade.length == 0 ){
				add_erro_input($('#cidade') , "Por favor preencha o campo Cidade");
				validacao_ok = false;
			}else{
				remove_erro_input($('#cidade'));
			}

			if(uf.length == 0 ){
				add_erro_input($('#uf') , "Por favor preencha o campo UF");
				validacao_ok = false;
			}else{
				remove_erro_input($('#uf'));
			}

			if(complemento.length == 0 ){
				add_erro_input($('#complemento') , "Por favor preencha o campo Complemento");
				validacao_ok = false;
			}else{
				remove_erro_input($('#complemento'));
			}

		}else{

			if(cep.length == 0 ){
				add_erro_input($('#cep') , "Por favor preencha o campo CEP");
				validacao_ok = false;
			}else if(controle_cep){
				remove_erro_input($('#cep'));

				if(numero.length == 0 ){
					add_erro_input($('#numero') , "Por favor preencha o campo Número");
					validacao_ok = false;
				}else{
					remove_erro_input($('#numero'));
				}
			}
		}

        if(controle_cep && validacao_ok && controle_usuario && controle_email){ 
 			
           var data = new FormData();
           data.append('arquivo',$('#arquivo').prop('files')[0]);
           data.append('funcao',"cadastro");
           data.append('nome',nome);
           data.append('email',email);
           data.append('cpf',cpf);
           data.append('nascimento',nascimento);
           data.append('telefone',telefone);
           data.append('celular',celular);
           data.append('nome_usuario',nome_usuario);
           data.append('cargo',cargo);
           data.append('rg',rg);
           data.append('orgao_emissor',orgao_emissor);
           data.append('cep',cep);
           data.append('endereco',endereco);
           data.append('numero',numero);
           data.append('complemento',complemento);  
           data.append('bairro',bairro);
           data.append('bairro',bairro);
           data.append('cidade',cidade);
           data.append('uf',uf);
           $('#preloader').show();
            $.ajax({
				url: '../../controller/funcionarioCadastro.php',
				method: "post",
				data: data ,
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
				success: function(data){
					if(data){
                        $('#dados').load( "funcionarioCadastro.php #dados" );
                        html = '<div class="alert alert-success"><i class="fa fa-check"></i><strong> Cadastro efetuado com secesso</strong></div>';
                        $('#msg').html(html);
                        window.location.href='#body';
                        window.setInterval(function(){
                            window.location.href='funcionarioCadastroServico.php?codFun='+data;
                        },3000);

					}else{
						window.location.href='#body';
						monta_msg_erro("Ocorreu um erro, por favor tente mais tarde!");
					}
                    $('#preloader').hide();
				}
			});
        }
    }

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