<?php
include 'menu.php';
?>
<h2>
    <p class="text-center small" style="color: #000"><b>Empresa</b></p>
</h2>
<hr>
<div id="msg"></div>
<div class="row">
    <div class="col-4">
        <div class="fileinput fileinput-new" id="cadastro-img" data-provides="fileinput" style="width: 100%">
            <div class="fileinput-preview thumbnail img-thumbnail" id="imagem" data-trigger="fileinput" style="width: 100%;  height: 17.5rem"></div>
            <div>
                <span class="btn btn-dark btn-file btn-sm col-12">
                    <span class="fileinput-new ">Selecione o logotipo</span>
                    <span class="fileinput-exists" data-dismiss="fileinput">Alterar</span>
                    <input type="file" id="arquivo" name="arquivo" accept="image/*">
                </span>
                <button id="btn-remove" class="btn btn-dark btn-sm fileinput-exists col-12" data-dismiss="fileinput" style="margin-top: 0.5rem">Remover</button>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="row">
            <div class="col-6">
                <h6 class="small">Razão social</h6>
                <div class="input-group input-group-sm">
                    <input type="text" id="razao-social" class="form-control" placeholder="Razão social da empresa" aria-describedby="basic-addon1">
                    <input type="text" id="id" hidden>
                </div>
            </div>
            <div class="col-6">
                <h6 class="small">Nome fantasia</h6>
                <div class="input-group input-group-sm">
                    <input type="text" id="nome-fantasia" class="form-control" placeholder="Nome fantasia da empresa" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-6">
                <h6 style="margin-top:1rem" class="small">CNPJ</h6>
                <div class="input-group input-group-sm">
                    <input type="text" id="cnpj" class="form-control" data-mask="99.999.999/9999-99" placeholder="00.000.000/0000-00" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-6">
                <h6 style="margin-top:1rem" class="small">IE</h6>
                <div class="input-group input-group-sm">
                    <input type="text" id="ie" class="form-control" placeholder="123456789" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-6">
                <h6 style="margin-top:1rem" class="small">Telefone</h6>	
                <div class="input-group input-group-sm">
                    <input type="text" id="telefone" data-mask="(99) 9999-9999" class="form-control" placeholder="(99) 9999-9999">
                </div>
                <div class="text-danger"></div>
            </div>
            <div class="col-6">
                <h6 style="margin-top:1rem" class="small">Telefone/Celular</h6>	
                <div class="input-group input-group-sm">
                    <input type="text" id="telefone-celular" data-mask="(99) 99999-999?9" class="form-control" placeholder="(99) 99999-9999">
                </div>
                <div class="text-danger"></div>
            </div>
            <div class="col-12">
                <h6 style="margin-top:1rem" class="small">E-mail</h6>	
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
        <h6 style="margin-top:1rem" class="small">CEP</h6>	
        <div class="input-group input-group-sm">
            <input type="text" id="cep" class="form-control" placeholder="Ex.: 99999-999" data-mask="99999-999"  onkeyup="busca_cep()">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-6">
        <h6 style="margin-top:1rem" class="small">Endereço</h6>	
        <div class="input-group input-group-sm">
            <input type="text" id="endereco" class="form-control" placeholder="Ex.: Exemplo exemplo exemplo">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-2">
        <h6 style="margin-top:1rem" class="small">Número</h6>	
        <div class="input-group input-group-sm">
            <input type="text" id="numero" class="form-control" placeholder="Ex.: 99">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-4">
        <h6 style="margin-top:1rem" class="small">Complemento</h6>	
        <div class="input-group input-group-sm">
            <input type="text" id="complemento" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="50">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-6">
        <h6 style="margin-top:1rem" class="small">Bairro</h6>	
        <div class="input-group input-group-sm">
            <input type="text" id="bairro" class="form-control" placeholder="Ex.: Exemplo Exemplo " maxlength="100">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-4">
        <h6 style="margin-top:1rem" class="small">Cidade</h6>	
        <div class="input-group input-group-sm">
            <input type="text" id="cidade" class="form-control" placeholder="Ex.: Exemplo exemplo" maxlength="100">
        </div>
        <div class="text-danger"></div>
    </div>
    <div class="col-2">
        <h6 style="margin-top:1rem" class="small">UF</h6>	
        <div class="input-group input-group-sm">
            <input type="text" id="uf" class="form-control" placeholder="Ex.: DF" maxlength="2">
        </div>
        <div class="text-danger"></div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <button style="margin-top: 1rem; display: none" id="btn-desbloqueia" class="btn btn-dark btn-sm btn-block" onclick="desbloqueia_campos()">
            <i class="fa fa-check float-left" style="margin-top: 0.2rem;"></i> Alterar
        </button>
        <button style="margin-top: 1rem" id="btn-incluir" class="btn btn-dark btn-sm btn-block" onclick="incluir()">
            <i class="fa fa-check float-left" style="margin-top: 0.2rem;"></i> Salvar
        </button>
    </div>
    <div class="col-6">
        <button style="margin-top: 1rem; display: none" id="btn-alterar" class="btn btn-dark btn-sm btn-block" onclick="alterar()">
            <i class="fa fa-check float-left" style="margin-top: 0.2rem;"></i> Salvar alteração
        </button>
        <br>
    </div>
    <div class="col-6">
        <button style="margin-top: 1rem; display: none" id="btn-cancelar" class="btn btn-dark btn-sm btn-block" onclick="busca_empresa()">
            <i class="fa fa-ban float-left" style="margin-top: 0.2rem;"></i> Cancelar
        </button>
    </div>
</div>
</main>
</div>
</body>
<script>
function incluir(){ 
    var data = new FormData();
    data.append('arquivo', $('#arquivo').prop('files')[0]);
    data.append('razaoSocial', $('#razao-social').val());
    data.append('nomeFantasia', $('#nome-fantasia').val());
    data.append('cnpj', $('#cnpj').val());
    data.append('ie', $('#ie').val());
    data.append('telefone', $('#telefone').val());
    data.append('telefoneCelular', $('#telefone-celular').val());
    data.append('email', $('#email').val());
    data.append('cep', $('#cep').val());
    data.append('endereco', $('#endereco').val());
    data.append('numero', $('#numero').val());
    data.append('complemento', $('#complemento').val());
    data.append('bairro', $('#bairro').val());
    data.append('cidade', $('#cidade').val());
    data.append('uf', $('#uf').val());
    data.append('funcao', "incluir");
    $.ajax({
        url: 'controller/empresa.php',
        method: "post",
        data: data,
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            if(data){
                window.location.href='#body';
                monta_msg_sucesso(' Inclusão realizada com sucesso.');
                window.setInterval(function(){
                    remove_msg();
                    window.location.reload();
                },10000);
            }else{
                window.location.href='#body';
                monta_msg_erro("Ocorreu um erro, por favor tente novamente mais tarde!");
            }
        }
    });
}

busca_empresa();
//Busca empresa: Caso exista, campos bloqueados e botão de alterar
function busca_empresa(){
    var data = {
        funcao: 'busca_empresa'
    };
    $.ajax({
        url: 'controller/empresa.php',
        method: "post",
        data: data,
        success: function(data){
            var resultado = $.parseJSON(data);
            if (data){
                $('#id').val(resultado[0].id);
                $('#razao-social').val(resultado[0].razao_social);
                $('#nome-fantasia').val(resultado[0].nome_fantasia);
                $('#cnpj').val(resultado[0].cnpj);
                $('#ie').val(resultado[0].inscricao_estadual);
                $('#telefone').val(resultado[0].telefone);
                $('#telefone-celular').val(resultado[0].celular);
                $('#email').val(resultado[0].email);
                $('#cep').val(resultado[0].cep);
                $('#endereco').val(resultado[0].endereco);
                $('#numero').val(resultado[0].numero);
                $('#complemento').val(resultado[0].complemento);
                $('#bairro').val(resultado[0].bairro);
                $('#cidade').val(resultado[0].cidade);
                $('#uf').val(resultado[0].uf);

                $('#visualiza-img').html('');
                var html = "";
                if(resultado[0].url_imagem == null){
                    html += '<img src="static/img/user.png" class="img-thumbnail" style="width: 26rem; height: 20rem">';
                }else{
                    html += '<img src="imagens/'+resultado[0].url_imagem+'" class="img-thumbnail" style="width:26rem; height : 20rem">';
                }   

                //Bloqueia campos
                $('#razao-social').attr('disabled', true);
                $('#nome-fantasia').attr('disabled', true);
                $('#cnpj').attr('disabled', true);
                $('#ie').attr('disabled', true);
                $('#telefone').attr('disabled', true);
                $('#telefone-celular').attr('disabled', true);
                $('#email').attr('disabled', true);
                $('#cep').attr('disabled', true);
                $('#endereco').attr('disabled', true);
                $('#numero').attr('disabled', true);
                $('#complemento').attr('disabled', true);
                $('#bairro').attr('disabled', true);
                $('#cidade').attr('disabled', true);
                $('#uf').attr('disabled', true);

                $('#btn-alterar').hide();
                $('#btn-cancelar').hide();
                $('#btn-incluir').hide();
                $('#btn-desbloqueia').show();
                
                $('#imagem').html(html);
                $('#cadastro-img').removeClass('fileinput-new');
                $('#cadastro-img').addClass('fileinput-exists');
                $('#arquivo').attr('disabled', true);
                $('#btn-remove').attr('disabled', true);
            }
        }
    });
}

//Função que desbloqueia campos para alteração
function desbloqueia_campos(){
    //Desbloqueia campos
    $('#btn-desbloqueia').hide();
    $('#btn-alterar').show();
    $('#btn-cancelar').show();
    $('#arquivo').removeAttr('disabled');
    $('#btn-remove').removeAttr('disabled');
    $('#razao-social').removeAttr('disabled');
    $('#nome-fantasia').removeAttr('disabled');
    $('#cnpj').removeAttr('disabled');
    $('#ie').removeAttr('disabled');
    $('#telefone').removeAttr('disabled');
    $('#telefone-celular').removeAttr('disabled');
    $('#email').removeAttr('disabled');
    $('#cep').removeAttr('disabled');
    $('#endereco').removeAttr('disabled');
    $('#numero').removeAttr('disabled');
    $('#complemento').removeAttr('disabled');
    $('#bairro').removeAttr('disabled');
    $('#cidade').removeAttr('disabled');
    $('#uf').removeAttr('disabled');
}

//Função alterar empresa
function alterar(){
    var data = new FormData();
    //if ($('#arquivo').length > 0) {
    //    alert('1');
    //    data.append('arquivo', 'not');
    //}else{
    //    alert('0');
        data.append('arquivo', $('#arquivo').prop('files')[0]);
    //}
    data.append('arquivo', $('#arquivo').prop('files')[0]);
    data.append('id', $('#id').val());
    data.append('razaoSocial', $('#razao-social').val());
    data.append('nomeFantasia', $('#nome-fantasia').val());
    data.append('cnpj', $('#cnpj').val());
    data.append('ie', $('#ie').val());
    data.append('telefone', $('#telefone').val());
    data.append('telefoneCelular', $('#telefone-celular').val());
    data.append('email', $('#email').val());
    data.append('cep', $('#cep').val());
    data.append('endereco', $('#endereco').val());
    data.append('numero', $('#numero').val());
    data.append('complemento', $('#complemento').val());
    data.append('bairro', $('#bairro').val());
    data.append('cidade', $('#cidade').val());
    data.append('uf', $('#uf').val());
    data.append('funcao', "alterar");
    $.ajax({
        url: 'controller/empresa.php',
        method: "post",
        data: data,
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            if(data){
                window.location.href='#body';
                monta_msg_sucesso(' Alteração realizada com sucesso.');
                window.setInterval(function(){
                    remove_msg();
                    window.location.reload();
                },10000);
            }else{
                window.location.href='#body';
                monta_msg_erro("Ocorreu um erro, por favor tente novamente mais tarde!");
            }
        }
    });

}
</script>
</html>