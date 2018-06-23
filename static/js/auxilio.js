//Função para sair do sistema
function logout(){  
    var usuario = null;
    var senha = null;
    var data = {usuario: usuario, 
        senha:senha, 
        funcao: 'logout'
    };
    var html ;
    $.ajax({
        url: 'controller/login.php',
        method: "post",
        data: data ,
        success: function(data){
            window.location.href = "controle.php";
        }
    })
}

function add_erro_input(input , msg){
    input.addClass("is-invalid");
    input.parent().next().html(msg);
}

function remove_erro_input(input){
    input.removeClass("is-invalid");
    input.parent().next().html("");
}

function monta_msg_erro(msg){
    html = '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i><strong>  '+ msg +'</strong></div>';
    $('#msg').html(html);
    window.setInterval(function(){
        remove_msg();
    },10000);
}

function monta_msg_sucesso(msg){
    html = '<div class="alert alert-success"><i class="fa fa-check"></i><strong> '+ msg +'</strong></div>';
    $('#msg').html(html);
}

//Monta mensagem de alerta ao excluir registro
function monta_msg_alerta(msg){
    html = '<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i><strong>'+ msg +'</strong></div>';
    $('#msg').html(html);
    window.setInterval(function(){
        remove_msg();
    },10000);
}

function monta_msg_sucesso_modal(msg){
    html = '<div class="alert alert-success"><i class="fa fa-check"></i><strong>'+ msg +'</strong></div>';
    $('#msg_sucesso').html(html);
    window.setInterval(function(){
        $('#msg_sucesso').html('');
    },10000);
}

function monta_msg_registro(msg){
    html = '<div class="alert alert-success"><i class="fa fa-check"></i><strong>'+ msg +'</strong></div>';
    $('#msg_registro').html(html);
    window.setInterval(function(){
        remove_msg_registro();
    },10000);
}

function remove_msg_registro(){
    $('#msg_registro').html('');
}

function remove_msg(){
    $('#msg').html('');
}

//Monta mensagem de confirmação
function monta_msg_confirma(msg){
    html = '<div class="alert alert-dark"><i class="fas fa-exclamation-triangle"></i><strong>'+ msg +'</strong></div>';
    $('#msg').html(html);
}

//Monta mensagem de quando não existem registros
function monta_msg_alerta_permanente(msg){
    html = '<div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i><strong>'+ msg +'</strong></div>';
    $('#msg_expediente').html(html);
}

function remove_msg_expediente(){
    $('#msg_expediente').html('');
}

//Busca endereço pelo cep
function busca_cep(){

    var cep =  $('#cep').val();
    if(cep.length > 8 && ($.isNumeric(cep.charAt(0))) &&
        ($.isNumeric(cep.charAt(1))) && ($.isNumeric(cep.charAt(2))) &&
        ($.isNumeric(cep.charAt(3))) && ($.isNumeric(cep.charAt(4))) &&
        ($.isNumeric(cep.charAt(6))) && ($.isNumeric(cep.charAt(7))) &&
        ($.isNumeric(cep.charAt(8))) ){

       //Função que busca o cep
       $.getScript('http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep='+cep,

       function(){
           if (resultadoCEP["resultado"] > 0){
                $('#endereco').val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
                $('#bairro').val(unescape(resultadoCEP['bairro']));
                $('#cidade').val(unescape(resultadoCEP['cidade']));
                $('#uf').val(unescape(resultadoCEP['uf']));
                $('#numero').removeAttr("disabled");
                $('#complemento').removeAttr("disabled");
                $('#numero').focus();
                remove_erro_input($('#cep'));

               
           }else{
                add_erro_input($('#cep') , 'CEP inválido');
                $('#endereco').val('');
                $('#numero').val('');
                $('#complemento').val('');
                $('#bairro').val('');
                $('#cidade').val('');
                $('#uf').val('');	
           }
       });
    }else{
        $('#endereco').val('');
        $('#numero').val('');
        $('#complemento').val('');
        $('#bairro').val('');
        $('#cidade').val('');
        $('#uf').val('');	
    }
}

//Função para verificar se usuário possui informações do veículo (cliente&veiculo.php)
function esconde_campos(){
    var check_cliente = document.getElementById("check_cliente");
    if (check_cliente.checked){
        $('#dados_veiculo').hide();
        $('#info_manual').show();
        limpa_campos();
    } else {
        $('#dados_veiculo').show();
        $('#info_manual').hide();
        limpa_campos();
    }
}

//Função para limpar campos (cliente&veiculo.php)
function limpa_campos(){
    remove_erro_input($('#dt_entrada'));
    remove_erro_input($('#hr_entrada'));
    remove_erro_input($('#obs'));
    remove_erro_input($('#placa'));
    remove_erro_input($('#modelo'));
    remove_erro_input($('#ano_modelo'));
    remove_erro_input($('#ano_fabricacao'));
    remove_erro_input($('#fabricante'));
    remove_erro_input($('#cor'));
    remove_erro_input($('#dt_entrada'));
    remove_erro_input($('#hr_entrada'));
    remove_erro_input($('#obs'));
    $('#placa').val("");
    $('#modelo').val("");
    $('#ano_modelo').val("");
    $('#ano_fabricacao').val("");
    $('#fabricante').val("0");
    $('#cor').val("");
    $('#chassi').val("");
    $('#dt_entrada').val("");
    $('#hr_entrada').val("");
    $('#obs').val("");

}


//Função para verificar o tipo de pessoa selecionada no fornecedor.php
function verifica_tipo_pessoa(){
    var fisico = document.getElementById("check_fisica");
    var juridico = document.getElementById("check_juridica");
    if (fisico.checked){
        $('#cnpj').val('');
        $('#inscricao_estadual').val('');
        $('#razao_social').val('');
        $('#nome_fantasia').val('');
        $('#nome').val('');
        $('#nascimento').val('');
        $('#cpf').val('');
        $('#rg').val('');
        $('#orgao_emissor').val('');
        $('#email').val('');
        $('#telefone').val('');
        $('#celular').val('');
        $('#cep').val('');
        $('#endereco').val('');
        $('#numero').val('');
        $('#complemento').val('');
        $('#bairro').val('');
        $('#cidade').val('');
        $('#uf').val('');
        document.getElementById('observacao').value="";

        $('#juridica').hide();
		$('#fisica').show();
    }else{
        $('#cnpj').val('');
        $('#inscricao_estadual').val('');
        $('#razao_social').val('');
        $('#nome_fantasia').val('');
        $('#nome').val('');
        $('#nascimento').val('');
        $('#cpf').val('');
        $('#rg').val('');
        $('#orgao_emissor').val('');
        $('#email').val('');
        $('#telefone').val('');
        $('#celular').val('');
        $('#cep').val('');
        $('#endereco').val('');
        $('#numero').val('');
        $('#complemento').val('');
        $('#bairro').val('');
        $('#cidade').val('');
        $('#uf').val('');
        document.getElementById('observacao').value="";
        
        $('#fisica').hide();
        $('#juridica').show();
    }
}