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
    html = '<div class="alert alert-success"><i class="fa fa-check"></i><strong>'+ msg +'</strong></div>';
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

//Bloqueia/desbloqueia campos 'não sei cep'
function nao_sei_cep(){

    var sem_cep = $('#sem_cep');

    var cep = $('#cep');
    var endereco = $('#endereco');
    var numero = $('#numero');
    var complemento = $('#complemento');
    var bairro = $('#bairro');
    var cidade = $('#cidade');
    var uf = $('#uf');

    if(sem_cep.is(':checked')){
        cep.val("");
        cep.attr("disabled" , "true");

        endereco.val("");
        endereco.removeAttr("disabled" , "true");

        numero.val("");
        numero.removeAttr("disabled" , "true");
        
        complemento.val("");
        complemento.removeAttr("disabled" , "true");
        
        bairro.val("");
        bairro.removeAttr("disabled" , "true");
        
        cidade.val("");
        cidade.removeAttr("disabled" , "true");
        
        uf.val("");
        uf.removeAttr("disabled" , "true");
    }else{
        cep.removeAttr("disabled");

        endereco.val("");
        endereco.attr("disabled" , "true");

        numero.val("");
        numero.attr("disabled" , "true");
        
        complemento.val("");
        complemento.attr("disabled" , "true");
        
        bairro.val("");
        bairro.attr("disabled" , "true");
        
        cidade.val("");
        cidade.attr("disabled" , "true");
    
        uf.val("");
        uf.attr("disabled" , "true");
    }
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
                add_erro_input($('#cep') , 'CEP inválido')
                $('#endereco').val('');
                $('#numero').val('');
                $('#complemento').val('');
                $('#bairro').val('');
                $('#cidade').val('');
                $('#uf').val('');	

                $('#endereco').attr("disabled" , true);
                $('#numero').attr("disabled" , true);
                $('#complemento').attr("disabled" , true);
                $('#bairro').attr("disabled" , true);
                $('#cidade').attr("disabled" , true);
                $('#uf').attr("disabled" , true);
           }
       });
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