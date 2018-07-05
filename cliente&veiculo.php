<?php
include 'menu.php';
?>
<h2>
    <p class="text-center small" style="color: #000"><b>Cliente e Veículo</b></p>
</h2>
<hr>
<div id="msg"></div>
<!-- Inicio do cadastro de cliente -->
<div class="row" id="fisica">
    <div class="col-9">
        <h6 class="small">Nome</h6>
        <div class="input-group">
            <input type="text" id="nome" class="form-control" placeholder="Ex.:  Exemplo exemplo " maxlength="200" name="">
        </div>
    </div>
    <div class="col-3">
        <h6 class="small">Nascimento</h6>
        <div class="input-group">
            <input class="form-control" placeholder="Ex.: 99/99/9999" data-mask="99/99/9999"  id="nascimento" name="event_date" id="event_date" type="text" >
        </div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">CPF</h6>
        <div class="input-group">
            <input type="text" id="cpf" class="form-control" placeholder="Ex.: 999.999.999-99" data-mask="999.999.999-99" name="">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">RG</h6>
        <div class="input-group">
            <input type="text" id="rg" class="form-control" placeholder="Ex.: 9999999"  name="">
        </div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">Orgão Emissor</h6>
        <div class="input-group">
            <input type="text" id="orgao_emissor" class="form-control" placeholder="Ex.: SSP-DF" maxlength="50" name="">
        </div>
        <div class="text-danger"></div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <h6 class="small" style="margin-top:1rem">E-Mail</h6>
        <div class="input-group">
            <input type="email" id="email" class="form-control" placeholder="Ex.: exemplo@exemplo.com"  name="">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-3">
        <h6 class="small" style="margin-top:1rem">Telefone</h6>
        <div class="input-group">
            <input type="text" id="telefone" class="form-control" placeholder="Ex.: (99) 9999-9999" data-mask="(99) 9999-9999" name="">
        </div>
    </div>
    <div class="col-3">
        <h6 class="small" style="margin-top:1rem">Celular</h6>
        <div class="input-group ">
            <input type="text" id="celular" class="form-control" placeholder="Ex.: (99) 99999-9999" data-mask="(99) 99999-9999" name="">
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-4">
        <h6 class="small">CEP</h6>
        <div class="input-group">
            <input type="text" id="cep" class="form-control" placeholder="Ex.: 99999-999" data-mask="99999-999"  onkeyup="busca_cep()">
        </div>
        <div class="text-danger"></div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <h6 class="small" style="margin-top:1rem">Endereço</h6>
        <div class="input-group">
            <input type="text" id="endereco" class="form-control" placeholder="Ex.: Exemplo exemplo exemplo">
        </div>
    </div>
    <div class="col-2">
        <h6 class="small" style="margin-top:1rem">Número</h6>
        <div class="input-group">
            <input type="text" id="numero" class="form-control" placeholder="Ex.: 99">
        </div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">Complemento</h6>
        <div class="input-group">
            <input type="text" id="complemento" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="50">
        </div>
    </div>
    <div class="col-6">
        <h6 class="small" style="margin-top:1rem">Bairro</h6>
        <div class="input-group">
            <input type="text" id="bairro" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="100">
        </div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">Cidade</h6>
        <div class="input-group ">
            <input type="text" id="cidade" class="form-control" placeholder="Ex.: Exemplo exemplo" maxlength="100">
        </div>
    </div>
    <div class="col-2">
        <h6 class="small" style="margin-top:1rem">UF</h6>
        <div class="input-group ">
            <input type="text" id="uf" class="form-control" placeholder="Ex.: DF" maxlength="2">
        </div>
    </div>
</div>

<!-- Fim do cadastro de cliente -->

<!-- Inicio do cadastro de veículo -->
<hr>
<div id="msg"></div>
<div class="row" id="info_cliente">
    <div class="col-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" onclick="esconde_campos()" id="check_info" aria-label="Checkbox for following text input">
            <label class="form-check-label small" style="margin-top: 0.2rem">
                Não possuo informações do veículo
            </label>
        </div>
    </div>
</div>
<div id="dados_veiculo">
    <div class="row">
        <div class="col-4">
            <h6 class="small">Tipo</h6>
            <div class="input-group input-group-sm">
                <select class="form-control" id="tipo">
                    <option value="0">Selecione...</option>
                    <option value="segurado">Segurado</option>
                    <option value="terceiro">Terceiro</option>
                    <option value="particular">Particular</option>
                </select>
            </div>
        </div>
        <div class="col-4">
            <h6 class="small">Seguradora</h6>
            <div class="input-group input-group-sm">
                <select name="" id="seguradora"  class="form-control">
                    <option value="">Selecione...</option>
                </select>
            </div>
        </div>
        <div class="col-4">
            <h6 class="small">Corretor</h6>
            <div class="input-group input-group-sm">
                <select name="" id="corretor"  class="form-control">
                    <option value="">Selecione...</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <h6 class="small" style="margin-top:1rem">Sinistro</h6>
            <div class="input-group ">
                <input type="text" id="sinistro" class="form-control"  placeholder="Ex.: 123456"  maxlength="100" name="">
            </div>
        </div>
        <div class="col-4">
            <h6 class="small" style="margin-top:1rem">Placa</h6>
            <div class="input-group ">
                <input type="text" id="placa" class="form-control" placeholder="Ex.: AAA-9999"  data-mask="aaa-9999"  name="">
            </div>
        </div>
        <div class="col-6">
            <h6 class="small" style="margin-top:1rem">Modelo</h6>
            <div class="input-group ">
                <input type="text" id="modelo" class="form-control"  placeholder="Ex.: Exemplo Exemplo"  maxlength="100" name="">
            </div>
        </div>
        <div class="col-3">
            <h6 class="small" style="margin-top:1rem">Ano Modelo</h6>
            <div class="input-group ">
                <input type="text" id="ano_modelo" class="form-control"  placeholder="Ex.: Exemplo Exemplo"  data-mask="9999" maxlength="100" name="">
            </div>
        </div>
        <div class="col-3">
            <h6 class="small" style="margin-top:1rem">Ano Fabricação</h6>
            <div class="input-group ">
                <input type="text" id="ano_fabricacao" class="form-control"  placeholder="Ex.: Exemplo Exemplo"  data-mask="9999" maxlength="100" name="">
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
                <input type="text" id="cor" class="form-control" placeholder="Ex.: Exemplo "   maxlength="50" name="">
            </div>
        </div>
        <div class="col-8">
            <h6 class="small" style="margin-top:1rem">Chassi</h6>
            <div class="input-group">
                <input type="text" id="chassi" class="form-control" placeholder="Ex.: Exemplo "   maxlength="50" name="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <h6 class="small" style="margin-top:1rem">Data de entrada</h6>
            <div class="input-group">
                <input type="text" id="dt_entrada_ok" data-mask="99/99/9999"  class="form-control" placeholder="Ex.: 99/99/9999">
            </div>
        </div>
        <div class="col-4">
            <h6 class="small" style="margin-top:1rem">Data de vistoria</h6>
            <div class="input-group">
                <input type="text" id="dt_vistoria" data-mask="99/99/9999"  class="form-control" placeholder="Ex.: 99/99/9999">
            </div>
        </div>
        <div class="col-4">
            <h6 class="small" style="margin-top:1rem">Data de autorização</h6>
            <div class="input-group">
                <input type="text" id="dt_autorizacao" data-mask="99/99/9999"  class="form-control" placeholder="Ex.: 99/99/9999">
            </div>
        </div>
    </div>
</div>
<div class="row" id="info_manual" style="display:none">
<!--Escondido para quando o usuário não souber informações do veículo-->
    <div class="col-3">
        <h6 class="small">Data de entrada</h6>
        <div class="input-group">
            <input type="text" id="dt_entrada" data-mask="99/99/9999"  class="form-control" placeholder="Ex.: 99/99/9999">
        </div>
    </div>
    <div class="col-3">
        <h6 class="small">Hora de entrada</h6>
        <div class="input-group">
            <input type="text" id="hr_entrada" data-mask="99:99" class="form-control" placeholder="Ex.: 12:00">
        </div>
    </div>
</div>
<div id="dados_complementares">
  <hr>
  <div class="row">
      <!-- <div class="col-12" id="col_imagem">
      <h6 class="small" style="margin-top:1rem">Imagem</h6>
          <div class="fileinput fileinput-new" style="margin-top: 0rem" data-provides="fileinput" style="margin-left: 1rem">
              <div class="fileinput-preview thumbnail img-thumbnail" data-trigger="fileinput" style="width: 69.5rem;  height: 17.5rem"></div>
              <div>
                  <span class="btn btn-dark btn-sm btn-file col-12">
                      <span class="fileinput-new ">Selecione a imagem</span>
                      <span class="fileinput-exists" data-dismiss="fileinput">Alterar</span>
                      <input type="file" id="arquivo" name="arquivo" accept="image/*">
                  </span>
                  <a href="#" class="btn btn-dark btn-sm fileinput-exists col-12" data-dismiss="fileinput" style="margin-top: 0.5rem">Remover</a>
              </div>
          </div>
      </div> -->
      <div class="col-12">
          <h6 class="small" style="margin-top:1rem">Imagem</h6>
          <div class="form-group">
            <div class="input-group input-file" name="Fichier1">
                <span class="input-group-prepend">
                    <button class="btn btn-sm btn-dark btn-choose"  type="button">
                        <small> 
                            Escolher Arquivo
                        </small>     
                    </button>
                </span>
                <input type="text"  accept="image/*" id="imagem" class="form-control" style="height: 32px;" placeholder='Selecione uma imagem' />
                <span class="input-group-append">
                    <button class="btn btn-sm btn-dark btn-reset" type="button">
                       <span class="fa fa-trash"></span>
                    </button>
                </span>
            </div>
            <div class="text-danger"></div>
          </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
          <h6 class="small" style="margin-top:1rem">Serviços</h6>
          <table class="table table-stripped" width="100%">
              <thead >
                  <tr>
                      <th class="small" scope="col">Serviço</th>
                      <th class="small" scope="col">Funcionário</th>
                      <th class="small" scope="col">Qtd. Peças</th>
                      <th class="small" scope="col">
                          <button  onclick="busca_servicos()"  class="btn btn-dark btn-sm col-12"><i class="fa fa-plus"></i> Adicionar</button>
                      </th>
                  </tr>
              </thead>
              <tbody id="tbody">
              </tbody>
          </table>
      </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-12">
          <h6 class="small">Observações</h6>
          <textarea class="form-control small" rows="3" id="observacao"></textarea>
      </div>
  </div>
</div>
<!-- Fim do cadastro de veículo -->

<div class="row">
    <div class="col-12">
        <button style="margin-top: 1rem" class="btn btn-dark btn-sm btn-block" onclick="incluir()">
            <i class="fa fa-check float-left" style="margin-top: 0.3rem;"></i> Salvar
        </button>
        <br>
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
                            <input type="text" id="pesquisa_servico" onkeyup="busca_servicos()" class="form-control"  placeholder="Digite para pesquisar" name="">
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
function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' id='arquivo' name='arquivo' class='input-ghost' accept='image/*' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
//Função datepicker
$(function() {
    $('#nascimento').datepicker();
    $('#dt_entrada').datepicker();
    $('#dt_entrada_ok').datepicker();
    $('#dt_vistoria').datepicker();
    $('#dt_autorizacao').datepicker();
});

var id_servicos  = [];

// Função para buscar serviços
function busca_servicos (){
    $('#preloader').show();
    $('#lista_servicos').val("");
    var pesquisa = $('#pesquisa_servico').val();
    var data = {funcao : "buscar_servicos" , pesquisa : pesquisa };
    var html= "";
    $.ajax({
        url: 'controller/cliente&veiculo.php',
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
                        '<button class="btn btn-dark" id="'+resultado[i].servico+'" onclick="adiciona_servico('+resultado[i].id +','+ resultado[i].tipo+', this)" type="button">Adicionar</button>'+
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

function adiciona_servico(id , tipo_pagamento , descricao){
    var html = "";
    var confere = true;

    for(var i = 0 ; i < id_servicos.length ; i++){
        if( id == id_servicos[i] ){
            confere = false;
        }
    }
    
    if(confere){
        id_servicos.push(id);
    }

    $('#msg_servicos').html("");

    if(tipo_pagamento == 0 && confere){
        busca_funcionario(id);
        html += '<tr id="'+id+'tr">'+
                '<th style="display:none" id="'+id+'">'+id+'</th>'+
                '<th style="text-align: center; vertical-align: middle" class="small" scope="col">'+descricao.id+'</th>'+
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
                    '<input type="text" class="form-control" placeholder="Qtd. peças" id="'+id+'i" placeholder="Qtd. peças" >'+
                    '</div>'+
                    '<div class="text-danger"></div>'+
                '</th>'+
                '<th scope="col">'+
                '<button class="btn btn-sm btn-dark col-12" onclick="remove_servico('+id+');"><i class="fa fa-trash"></i> Remover</buttona>'+
                '</th>'+
                '</tr>';
    }else if(confere){
        busca_funcionario(id);
        html += '<tr id="'+id+'tr">'+
                '<th style="display:none">'+id+'</th>'+
                '<th style="text-align: center; vertical-align: middle" class="small" scope="col">'+descricao.id+'</th>'+
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
                    '<input type="text" class="form-control" id="'+id+'i" disabled value="Por carro"  >'+
                    '</div>'+
                    '<div class="text-danger"></div>'+
                '</td>'+
                '<th scope="col">'+
                '<button class="btn btn-sm btn-dark col-12" onclick="remove_servico('+id+');"><i class="fa fa-trash"></i> Remover</buttona>'+
                '</th>'+
                '</tr>';
    }
    $('#tbody').append(html);
}

function busca_funcionario(servico_id){
    var data = {funcao : "busca_funcionarios" , servico_id : servico_id };
    $.ajax({
        url: 'controller/cliente&veiculo.php',
        method: "post",
        data: data ,
        success: function(data){
            if(data){
                var html = '';
                var resultado = $.parseJSON(data);
                for(var i = 0; i < resultado.length ; i++  ){
                    html += '<option value="'+resultado[i].id+'">'+resultado[i].nome+'</option>';
                }
                $('#'+servico_id+'s').append(html);
            }
        }
    });
}

function remove_servico(id ){
    var nova_lista = id_servicos;
    id_servicos = [];
    for(var i = 0; i < nova_lista.length ; i++ ){
        if ( nova_lista[i] != id ){
            id_servicos.push(nova_lista[i]);
        }
    }
    $('#'+id+'tr').remove();
}

//Função para selecionar corretor e seguradora
busca_corretores();
busca_seguradoras();
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

//Incluir
function incluir(){
    var validacao_ok = true;
    var servicos = [];

    if(id_servicos.length > 0 ){
      for (var i = 0 ; i < id_servicos.length ; i++ ){

          var qtd_pecas = $('#'+id_servicos[i]+'i' ).val();
          var id_funcionario = $('#'+id_servicos[i]+'s' ).val();

          if(!isNaN(qtd_pecas)){
              if(qtd_pecas <= 0 ){
                  validacao_ok = false;
                  add_erro_input($('#'+id_servicos[i]+'i') , "Por favor informe a quantidade de peças");
              }else{
                  remove_erro_input($('#'+id_servicos[i]+'i'));
              }
          }else{
              remove_erro_input($('#'+id_servicos[i]+'i'));
          }

          if(id_funcionario == 0){
              validacao_ok = false;
              add_erro_input($('#'+id_servicos[i]+'s') , "Por favor selecione um funcionário");
          }else{
              remove_erro_input($('#'+id_servicos[i]+'s'));
          }

      }
    }

    if(validacao_ok){
      for (var i = 0 ; i < id_servicos.length ; i++ ){
            var dados = {};
            dados.id_funcionario = $('#'+id_servicos[i]+'s' ).val();
            dados.id_servico = id_servicos[i];

            var qtd_pecas = $('#'+id_servicos[i]+'i' ).val();
            if(!isNaN(qtd_pecas)){
                dados.qtd_pecas =  qtd_pecas;
            }else{
                dados.qtd_pecas =  "";
            }
            
            servicos.push(dados);
            
      }

      var data = new FormData();
      data.append('arquivo', $('#arquivo').prop('files')[0]);
      data.append('nome', $('#nome').val());
      data.append('nascimento', $('#nascimento').val());
      data.append('cpf', $('#cpf').val());
      data.append('rg', $('#rg').val());
      data.append('orgaoEmissor', $('#orgao_emissor').val());
      data.append('email', $('#email').val());
      data.append('telefone', $('#telefone').val());
      data.append('celular', $('#celular').val());
      data.append('cep', $('#cep').val());
      data.append('endereco', $('#endereco').val());
      data.append('numero', $('#numero').val());
      data.append('complemento', $('#complemento').val());
      data.append('bairro', $('#bairro').val());
      data.append('cidade', $('#cidade').val());
      data.append('uf', $('#uf').val());
      data.append('observacoes', $('#observacao').val());
      data.append('horaEntrada', $('#hr_entrada').val());
      //verifica check
      if(document.getElementById('check_info').checked == true){
          data.append('check', '1');
          data.append('dataEntrada', $('#dt_entrada').val());
      }else{
          data.append('check', '0');
          data.append('dataEntrada', $('#dt_entrada_ok').val());
      }
      data.append('tipo', $('#tipo').val());
      data.append('seguradora', $('#seguradora').val());
      data.append('corretor', $('#corretor').val());
      data.append('sinistro', $('#sinistro').val());
      data.append('placa', $('#placa').val());
      data.append('modelo', $('#modelo').val());
      data.append('anoModelo', $('#ano_modelo').val());
      data.append('anoFabricacao', $('#ano_fabricacao').val());
      data.append('fabricante', $('#fabricante').val());
      data.append('cor', $('#cor').val());
      data.append('chassi', $('#chassi').val());
      data.append('dataVistoria', $('#dt_vistoria').val());
      data.append('dataAutorizacao', $('#dt_autorizacao').val());
      data.append('funcao', "incluir");
      data.append('servicos', JSON.stringify(servicos))
      data.append('meu_id', meu_id)

      $.ajax({
          url: 'controller/cliente&veiculo.php',
          method: "post",
          data: data,
          dataType: 'script',
          cache: false,
          contentType: false,
          processData: false,
          success: function(data){
              if(data){           
                if(data == 'false'){  
                    window.location.href='#imagem';                                              
                    add_erro_input($('#imagem') , "Por favor selecione uma imagem");
                  }else{
                    remove_erro_input($('#imagem'));
                    monta_msg_sucesso("Cadastro efetuado com sucesso");
                    window.location.href='#msg';
                    window.setInterval(function(){
                        window.location.href='cliente&veiculo.php';
                    },1500);

                  }
              }else{
                window.location.href='#msg';                                                                
                monta_msg_erro("Ocorreu um erro, tente novamente mais tarde!");
              }
          }
      });
    }

}

</script>
</html>
