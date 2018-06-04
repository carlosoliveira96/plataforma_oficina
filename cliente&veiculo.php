<?php
include 'menu.php';
?>
<h2>
    <p class="text-center small" style="color: #000"><b>Cliente e Veículo</b></p>
</h2>
<hr>
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
            <input type="text" id="cpf" class="form-control" onkeyup="verifica_cpf()" placeholder="Ex.: 999.999.999-99" data-mask="999.999.999-99" name="">
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
            <input type="email" id="email" class="form-control" onkeyup="valida_email()" placeholder="Ex.: exemplo@exemplo.com"  name="">
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
<hr>
<div class="row">
    <div class="col-12">
        <h6 class="small">Observações</h6>	
        <textarea class="form-control small" rows="3" id="observacao"></textarea>
    </div>
</div>
<!-- Fim do cadastro de cliente -->

<!-- Inicio do cadastro de veículo --> 
<hr>
<div id="msg"></div>
<div class="row" id="info_cliente">
    <div class="col-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" onclick="esconde_campos()" id="check_cliente" aria-label="Checkbox for following text input">
            <label class="form-check-label small" style="margin-top: 0.2rem">
                Não possuo informações do veículo
            </label>
        </div>
    </div>
</div>
<div id="dados_veiculo">
    <div class="row">
        <div class="col-6">
            <h6 class="small">Seguradora</h6>	
            <div class="input-group input-group-sm">
                <select name="" id="fabricante"  class="form-control">
                    <option value="0">Selecione...</option>
                </select>
            </div>
        </div>
        <div class="col-6">
            <h6 class="small">Corretor</h6>	
            <div class="input-group input-group-sm">
                <select name="" id="fabricante"  class="form-control">
                    <option value="0">Selecione...</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <h6 class="small" style="margin-top:1rem">Placa</h6>	
            <div class="input-group ">
                <input type="text" id="placa" class="form-control" placeholder="Ex.: AAA-9999"  data-mask="aaa-9999"  name="">
            </div>
        </div>
        <div class="col-8">
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
        <div class="col-3">
            <h6 class="small" style="margin-top:1rem">Data de entrada</h6>	
            <div class="input-group">
                <input type="text" id="dt_entrada_ok" data-mask="99/99/9999"  class="form-control" placeholder="Ex.: 99/99/9999">
            </div>
        </div>
        <div class="col-3">
            <h6 class="small" style="margin-top:1rem">Data de vistoria</h6>	
            <div class="input-group">
                <input type="text" id="dt_vistoria" data-mask="99/99/9999"  class="form-control" placeholder="Ex.: 99/99/9999">
            </div>
        </div>
        <div class="col-3">
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
    <div class="col-12">
        <h6 class="small" style="margin-top:1rem">Observações</h6>	
        <div class="input-group ">
            <textarea id="obs" class="form-control" placeholder="Informações sobre a entrada do veículo" rows="3"></textarea>
        </div>
    </div>
</div>
<!-- Fim do cadastro de veículo -->

<div class="row">
    <div class="col-12">
        <button style="margin-top: 1rem" class="btn btn-dark btn-sm btn-block" onclick="salvar()">
            <i class="fa fa-check float-left" style="margin-top: 0.3rem;"></i> Salvar
        </button>
        <br>
    </div>
</div>
</main>
</div>
<!-- page-wrapper -->
</body>
<script>

    //Função datepicker
    $(function() {
        $('#nascimento').datepicker();
        $('#dt_entrada').datepicker();
        $('#dt_entrada_ok').datepicker();
        $('#dt_vistoria').datepicker();
        $('#dt_autorizacao').datepicker();
    });
    
</script>
</html>