<?php
include 'menu.php';
?>
<h2>
    <p class="text-center small" style="color: #000"><b>Cadastro de fornecedor</b></p>
</h2>
<hr>
<div id="msg"></div>
<div class="row">
    <div class="col-12">
        <h6 class="small" style="margin-top:1rem">Tipo de cadastro</h6>
        <div class="form-check form-check-inline">
            <input onclick="verifica_tipo_pessoa()" class="form-check-input" type="radio" name="tipo-pessoa" title="Cadastro para pessoa física" id="check_fisica" value="option1" checked>
            <label class="form-check-label" for="check_fisica" title="Cadastro para pessoa física">Física</label>
        </div>
        <div class="form-check form-check-inline">
            <input onclick="verifica_tipo_pessoa()" class="form-check-input" type="radio" name="tipo-pessoa" title="Cadastro para pessoa jurídica" id="check_juridica" value="option2">
            <label class="form-check-label" for="check_juridica" title="Cadastro para pessoa jurídica">Jurídica</label>
        </div>
    </div>
</div>
<div class="row" id="fisica">
    <div class="col-9">
        <h6 class="small">Nome</h6>	
        <div class="input-group ">
            <input type="text" id="nome" class="form-control" placeholder="Ex.:  Exemplo exemplo " maxlength="200" name="">
        </div>
    </div>
    <div class="col-3">
        <h6 class="small">Nascimento</h6>	
        <div class="input-group ">
            <input class="form-control" placeholder="Ex.: 99/99/9999" data-mask="99/99/9999"  id="nascimento" name="event_date" id="event_date" type="text" >
        </div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">CPF</h6>	
        <div class="input-group ">
            <input type="text" id="cpf" class="form-control" onkeyup="verifica_cpf()" placeholder="Ex.: 999.999.999-99" data-mask="999.999.999-99" name="">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">RG</h6>	
        <div class="input-group ">
            <input type="text" id="rg" class="form-control" placeholder="Ex.: 9999999"  name="">
        </div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">Orgão Emissor</h6>	
        <div class="input-group ">
            <input type="text" id="orgao_emissor" class="form-control" placeholder="Ex.: SSP-DF" maxlength="50" name="">
        </div>
    </div>
</div>
<div class="row" id="juridica" style="display: none">
    <div class="col-6">
        <h6 class="small">CNPJ</h6>	
        <div class="input-group ">
            <input type="text" id="cnpj" onkeyup="verifica_cnpj()" class="form-control" placeholder="Ex.: 99.999.999/9999-99" data-mask="99.999.999/9999-99" name="">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-6">
        <h6 class="small">I.E</h6>	
        <div class="input-group ">
            <input type="text" id="inscricao_estadual" class="form-control" placeholder="Ex.: 99999999999"  name="">
        </div>
    </div>
    <div class="col-6">
        <h6 class="small" style="margin-top:1rem">Razão social</h6>	
        <div class="input-group ">
            <input type="text" id="razao_social" class="form-control" placeholder="Ex.:  Exemplo exemplo LTDA" maxlength="200" name="">
        </div>
    </div>
    <div class="col-6">
        <h6 class="small" style="margin-top:1rem">Nome fantasia</h6>	
        <div class="input-group ">
            <input type="text" id="nome_fantasia" class="form-control" placeholder="Ex.: Exemplo exemplo" maxlength="200" name="">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <h6 class="small" style="margin-top:1rem">E-Mail</h6>	
        <div class="input-group ">
            <input type="email" id="email" class="form-control" onkeyup="valida_email()" placeholder="Ex.: exemplo@exemplo.com"  name="">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-3">
        <h6 class="small" style="margin-top:1rem">Telefone</h6>	
        <div class="input-group ">
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
        <div class="input-group ">
            <input type="text" id="cep" class="form-control" placeholder="Ex.: 99999-999" data-mask="99999-999"  onkeyup="busca_cep()">
        </div>
        <div class="text-danger"></div>
    </div>
</div>
<div class="row">
    <div class="col-6">
        <h6 class="small" style="margin-top:1rem">Endereco</h6>	
        <div class="input-group ">
            <input type="text" id="endereco" class="form-control" placeholder="Ex.: Exemplo exemplo exemplo">
        </div>
    </div>
    <div class="col-2">
        <h6 class="small" style="margin-top:1rem">Número</h6>	
        <div class="input-group ">
            <input type="text" id="numero" class="form-control" placeholder="Ex.: 99 ">
        </div>
    </div>
    <div class="col-4">
        <h6 class="small" style="margin-top:1rem">Complemento</h6>	
        <div class="input-group ">
            <input type="text" id="complemento" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="50">
        </div>
    </div>
    <div class="col-6">
        <h6 class="small" style="margin-top:1rem">Bairro</h6>	
        <div class="input-group ">
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
<hr>
<div class="row" id="cadastro_fornecedor">
    <div class="col-6">
        <h6 class="small">Fabricante</h6>	
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
</div>
<div class="row">
    <div class="col-12">
        <h6 class="small" style="margin-top:1rem">Observações</h6>	
        <textarea class="form-control" rows="3" id="observacao"></textarea>
    </div>
    <div class="col-12">
        <button style="margin-top: 1rem" class="btn btn-dark btn-sm btn-block" onclick="cadastrar()">
            <i class="fa fa-check float-left" style="margin-top: 0.3rem;"></i> Salvar
        </button>
        <br>
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

//Função salvar cadastro
function cadastrar(){
    $('#preloader').show();
    var data = {
        cnpj: $('#cnpj').val(),
        ie: $('#inscricao_estadual').val(),
        razaoSocial: $('#razao_social').val(),
        nomeFantasia: $('#nome_fantasia').val(),
        nome: $('#nome').val(),
        nascimento: $('#nascimento').val(),
        cpf: $('#cpf').val(),
        rg: $('#rg').val(),
        orgaoEmissor: $('#orgao_emissor').val(),
        email: $('#email').val(),
        telefone: $('#telefone').val(),
        celular: $('#celular').val(),
        cep: $('#cep').val(),
        endereco: $('#endereco').val(),
        numero: $('#numero').val(),
        complemento: $('#complemento').val(),
        bairro: $('#bairro').val(),
        cidade: $('#cidade').val(),
        uf: $('#uf').val(),
        fabricante: $('#fabricante').val(),
        observacoes: $('#observacao').val(),
        funcao: 'cadastro'
    };
    
    $.ajax({
        url: 'controller/fornecedor.php',
        method: "post",
        data: data ,
        success: function(data){
            alert(data);
            if (data){
                $('#preloader').hide();
                window.location.href='#body';
                monta_msg_sucesso(" Cadastro realizado com sucesso.");
                window.setInterval(function(){
                    remove_msg();
                    window.location.reload();
                },10000);

            }
        }
    });
}
</script>
</html>