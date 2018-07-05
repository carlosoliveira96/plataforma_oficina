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
                    <input type="text" id="cpf" class="form-control" onkeyup="verifica_cpf()" placeholder="Ex.: 999.999.999-99" data-mask="999.999.999-99" >
                </div>
                <div class="text-danger"></div>
            </div>
            <div class="col-6">
                <h6 class="small" style="margin-top:1rem">Nascimento</h6> 
                <div class="input-group input-group-sm ">
                    <input class="form-control" placeholder="Ex.: 99/99/9999" data-mask="99/99/9999" id="nascimento" type="text" >
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
                <h6 class="small" style="margin-top:1rem">Admissão</h6> 
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
            <input type="email" id="email" class="form-control" placeholder="Ex.: exemplo@exemplo.com"  >
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
        <h6 class="small" style="margin-top:1rem">Nível de acesso</h6>
        <div class="form-check form-check-inline" style="margin-top:0.5rem">
            <input class="form-check-input" type="radio" onchange="nivel_acesso()" name="acesso" title="Acesso completo ao sistema" id="1" value="1">
            <label class="form-check-label" for="master" title="Acesso completo ao sistema">Master</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onchange="nivel_acesso()" name="acesso" title="Controle de acesso e permissão pessoal não acessível" id="2" value="2">
            <label class="form-check-label" for="senior" title="Controle de acesso e permissão pessoal não acessível">Sênior</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onchange="nivel_acesso()" name="acesso" title="Administrativo e relatórios financeiros não acessível" id="3" value="3">
            <label class="form-check-label" for="pleno" title="Administrativo e relatórios financeiros não acessível">Pleno</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onchange="nivel_acesso()" name="acesso" title="Administrativo e financeiro não acessível" id="4" value="4">
            <label class="form-check-label" for="junior" title="Administrativo e financeiro não acessível">Junior</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" onchange="nivel_acesso()" name="acesso" title="Visualização do sistema, com exceção do administrativo e financeiro" id="5" value="5">
            <label class="form-check-label" for="trainee" title="Visualização do sistema, com exceção do administrativo e financeiro">Trainee</label>
        </div>
        <div class="text-danger" id="erro_nivel"></div>       
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
    <div class="col-12" >
        <h6 class="small" style="margin-top:1rem">Adicionar Serviços</h6> 
        <div style="min-height:5rem;max-height:15rem; overflow-y:auto">
            <table class="table table-striped table-sm table-bordered table-hover" style="margin-top:1rem;">
                <thead>
                    <tr>
                        <th class="small" scope="col" style="width: 3%">#</th>
                        <th class="small" scope="col">Serviços</th>
                    </tr>
                </thead>
                <tbody id="add-servicos">
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <button style="margin-top: 1rem;margin-bottom: 2rem" onclick="salvar()" class="btn btn-dark btn-sm btn-block">
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
            url: 'controller/funcionarios.php',
            method: "post",
            data: data ,
            success: function(data){
                if(data){
                    controle_cpf = false;
                    add_erro_input($('#cpf') , "CPF já cadastrado");
                    window.location.href='#cpf';
                }else{
                    controle_cpf = true;
                    remove_erro_input($('#cpf'));
                }
                $('#preloader').hide();
            }
        });
    }
}

//Função que busca os serviços
var lista_id_servicos = [];
busca_servicos();
function busca_servicos(){
    var data = {
        funcao: 'busca_servicos', 
    };
    $.ajax({
    url: 'controller/funcionarios.php',
    method: "post",
    data: data ,
    success: function(data){
        if(data){
            var resultado = $.parseJSON(data);
            if(resultado.length > 0){
                var html = "";
                for(var i = 0 ; i < resultado.length ; i++ ){
                    lista_id_servicos.push(resultado[i].id);
                    html += '<tr>'+
                                '<th class="small" scope="row">'+
                                    '<input type="checkbox" name="servico"  id="'+resultado[i].id+'_servico" value="'+resultado[i].id+'">'+
                                '</th>'+
                                '<th class="small">'+resultado[i].servico+'</th>'+
                            '</tr>';
                           
                }
                $('#add-servicos').html(html);
            }else{

            }
        }else{
            $('#adicionar_servicos').html('');
        }
    }
    });
}

var nivel = 0;
function nivel_acesso(){
    var valueAcesso = document.getElementsByName('acesso');
    for (var i=0;i<valueAcesso.length;i++){
        if (valueAcesso[i].checked) {
            nivel = valueAcesso[i].value;
        }
    }
}

//Função que inclui funcionário 
function salvar(){   
    validacao_ok = true;
    var nome = $('#nome').val();  
    var cpf = $('#cpf').val(); 

    if(nivel == 0){
        $('#erro_nivel').html("Por favor selecione um nível de acesso");
        validacao_ok = false;
        window.location.href='#5';        
    }else{
        $('#erro_nivel').html("");
    }

    if(cpf.length == 0 ){
        add_erro_input($('#cpf') , "Por favor preencha o campo CPF");
        validacao_ok = false;
        window.location.href='#cpf';                
    }else{
        remove_erro_input($('#cpf'));
    }

    if(nome.length == 0 ){
        add_erro_input($('#nome') , "Por favor preencha o campo Nome");
        validacao_ok = false;
        window.location.href='#nome';        
    }else{
        remove_erro_input($('#nome'));
    } 

    var servicosSelecionados = [];
    if(validacao_ok && controle_cpf){
        var data = new FormData();
        data.append('arquivo',$('#arquivo').prop('files')[0]);
        data.append('funcao',"cadastro");
        data.append('nome', $('#nome').val());
        data.append('cpf', $('#cpf').val());
        data.append('nascimento', $('#nascimento').val());
        data.append('rg', $('#rg').val());
        data.append('orgaoEmissor', $('#orgao_emissor').val());
        data.append('pisPasep', $('#pis').val());
        data.append('ctps', $('#ctps').val());
        data.append('tituloEleitor', $('#titulo').val());
        data.append('admissao', $('#admissao').val());
        data.append('email', $('#email').val());
        data.append('telefone', $('#telefone').val());
        data.append('celular', $('#celular').val());
        data.append('nome_usuario', $('#cpf').val());
        data.append('nivelAcesso', nivel);  
        data.append('cep', $('#cep').val());
        data.append('endereco', $('#endereco').val());
        data.append('numero', $('#numero').val());
        data.append('complemento', $('#complemento').val());
        data.append('bairro', $('#bairro').val());
        data.append('cidade', $('#cidade').val());
        data.append('uf', $('#uf').val());
        data.append('cargo', $('#cargo').val());

        for (var i=0; i < lista_id_servicos.length;i++){
            var servico = $('#'+lista_id_servicos[i]+'_servico');
            if(servico.is(':checked')){
                servicosSelecionados.push(lista_id_servicos[i]);
            }
        }
        
        var dados ={
            servicosFuncionario : servicosSelecionados
        }

        data.append('servicos', JSON.stringify(dados));
        $('#preloader').show();
        $.ajax({
            url: 'controller/funcionarios.php',
            method: "post",
            data: data ,
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
                if(data){
                    window.location.href='#body';
                    $('#preloader').hide();
                    monta_msg_sucesso(' Inclusão realizada com sucesso.');
                    window.setInterval(function(){
                        remove_msg();
                        window.location.reload();
                    },2000);

                }else{
                    window.location.href='#body';
                    monta_msg_erro("Ocorreu um erro, por favor tente novamente mais tarde!");
                }
            }
        });
    }
    
}

</script>
</html>