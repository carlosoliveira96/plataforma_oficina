<?php
include 'menu.php'
?>
<h2>
    <p class="text-center small" style="color: #000"><i><b>Serviços</b></i></p>
</h2>
<hr>
<div id="msg">

</div>
<table class="table table-striped table-bordered table-hover" id="servico">
    <thead>
        <tr>
            <th class="col-12" style="width: 90%; font-weight: normal">
                <input type="text" id="input_pesquisa" class="form-control small" placeholder="Pesquise pelo nome do serviço">
                <div>
                <div class="text-danger"></div>
                    <div class="input-group" id="div_cadastro" style="display: none;">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" id="check_pecas" aria-label="Checkbox for following text input"> 
                                <span class="small" id="">&nbsp;Pagamento por peças</span>
                            </div>
                        </div>
                        <input type="text" id="input_cadastro" class="form-control small" placeholder="Descrição do serviço">
                        <input type="text" id="input_id" style="display: none">
                    </div>
                </div>
                
            </th>
            <th class="col-1 text-center"> 
                <a href="#" id="novo_servico" class="btn btn-dark btn-sm" onclick="cadastro_servico(this)">
                    <i class="fas fa-plus" style="margin-top: 0.1rem; margin-right: 0.5rem"></i> Cadastrar serviço
                </a>
                <a href="#" id="confirma_inclusao" class="btn btn-dark btn-sm" style="display: none">
                    <i class="fas fa-check"></i>
                </a>
                <a href="#" id="cancela_inclusao" class="btn btn-dark btn-sm" onclick="cadastro_servico(this)" style="display: none">
                    <i class="fas fa-times "></i>
                </a>
                <a href="#" id="confirma_alteracao" class="btn btn-dark btn-sm" style="display: none">
                    <i class="fas fa-check"></i>
                </a>
                <a href="#" id="cancela_alteracao" class="btn btn-dark btn-sm" style="display: none">
                    <i class="fas fa-times "></i>
                </a>
            </th>
        </tr>
    </thead>
    <tbody data-link="row" id="tbody_servico">
        <tr>
            <td scope="row" class="small">Serviço</td>
            <td scope="row" class="text-center small">
                <a href="#" class="btn btn-dark btn-sm" title="Visualizar">
                    <i class="fas fa-eye "></i>
                </a>
                <a href="#" class="btn btn-dark btn-sm" title="Alterar">
                    <i class="fas fa-edit "></i>
                </a>
                <a href="#" class="btn btn-dark btn-sm" title="Remover">
                    <i class="fas fa-trash "></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>
<nav>
    <ul class="pager" id="paginacao">
        
    </ul>
</nav>
</main>
</div>
</body>
</html>
<script>
    //Função que troca os campos para pesquisa ou inclusão e realiza a inclusão no banco
    function cadastro_servico(e){
        if (e.id == "novo_servico"){
            $('#confirma_inclusao').show();
            $('#cancela_inclusao').show();
            $('#div_cadastro').show();
            $('#input_pesquisa').hide();
            $('#novo_servico').hide();
        } else if (e.id == "cancela_inclusao"){
            $('#confirma_inclusao').hide();
            $('#cancela_inclusao').hide();
            $('#div_cadastro').hide();
            $('#input_pesquisa').show();
            $('#novo_servico').show();
        }
    }
</script>
                