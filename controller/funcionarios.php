<?php
include('crud/crud.php');
include('../conexao/conexao.php');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'busca_servicos':
        $pesquisa = $_POST['pesquisa'];

        $condicao = "situacao = 1 AND servico LIKE '%$pesquisa%'";

        $servicos = busca_detalhada_varios($conexao, $condicao, 'servico');

        if($servicos != null){
            print json_encode($servicos);
        }
        
    break;
    case 'cadastro':

        $destino = "";
        // verifica se foi enviado um arquivo 
        if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            $nome = $_FILES['arquivo']['name'];
            // Pega a extensao
            $extensao = strrchr($nome, '.');
            // Converte a extensao para mimusculo
            $extensao = strtolower($extensao);
            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfilero as extesões permitidas e separo por ';'
            // Isso server apenas para eu poder pesquisar dentro desta String
            if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                // Cria um nome único para esta imagem
                // Evita que duplique as imagens no servidor.
                $novoNome = md5(microtime()) . $extensao;
                // Concatena a pasta com o nome
                $destino = $novoNome;
                @move_uploaded_file($arquivo_tmp, '../imagens/'.$destino);
            }
        } 
            
        if (strlen($destino) <= 0){
            $destino = 'NULL';
        }else{
            $destino = "'".$destino."'";
        };

        if (strlen($_POST['nome']) <= 0){
            $nome = 'NULL';
        }else{
            $nome = "'".$_POST['nome']."'";
        };

        if (strlen($_POST['cpf']) <= 0){
            $cpf = 'NULL';
        }else{
            $cpf = "'".$_POST['cpf']."'";
        };

        if (strlen($_POST['nascimento']) <= 0){
            $nascimento = 'NULL';
        }else{
            $nascimento = "'".$_POST['nascimento']."'";
        };

        if (strlen($_POST['email']) <= 0){
            $email = 'NULL';
        }else{
            $email = "'".$_POST['email']."'";
        };

        if (strlen($_POST['telefone']) <= 0){
            $telefone = 'NULL';
        }else{
            $telefone = "'".$_POST['telefone']."'";
        };

        if (strlen($_POST['celular']) <= 0){
            $celular = 'NULL';
        }else{
            $celular = "'".$_POST['celular']."'";
        };

        if (strlen($_POST['nome_usuario']) <= 0){
            $nome_usuario = 'NULL';
        }else{
            $nome_usuario = "'".$_POST['nome_usuario']."'";
        };

        if (strlen($_POST['cargo']) <= 0){
            $cargo = 'NULL';
        }else{
            $cargo = "'".$_POST['cargo']."'";
        };

        if (strlen($_POST['rg']) <= 0){
            $rg = 'NULL';
        }else{
            $rg = "'".$_POST['rg']."'";
        };

        if (strlen($_POST['orgaoEmissor']) <= 0){
            $orgao_emissor = 'NULL';
        }else{
            $orgao_emissor = "'".$_POST['orgaoEmissor']."'";
        };

        if (strlen($_POST['cep']) <= 0){
            $cep = 'NULL';
        }else{
            $cep = "'".$_POST['cep']."'";
        };

        if (strlen($_POST['endereco']) <= 0){
            $endereco = 'NULL';
        }else{
            $endereco = "'".$_POST['endereco']."'";
        };

        if (strlen($_POST['numero']) <= 0){
            $numero = 'NULL';
        }else{
            $numero = "'".$_POST['numero']."'";
        };

        if (strlen($_POST['complemento']) <= 0){
            $complemento = 'NULL';
        }else{
            $complemento = "'".$_POST['complemento']."'";
        };

        if (strlen($_POST['bairro']) <= 0){
            $bairro = 'NULL';
        }else{
            $bairro = "'".$_POST['bairro']."'";
        };

        if (strlen($_POST['cidade']) <= 0){
            $cidade = 'NULL';
        }else{
            $cidade = "'".$_POST['cidade']."'";
        };

        if (strlen($_POST['uf']) <= 0){
            $uf = 'NULL';
        }else{
            $uf = "'".$_POST['uf']."'";
        };

        if (strlen($_POST['nivelAcesso']) <= 0){
            $nivelAcesso = 'NULL';
        }else{
            $nivelAcesso = "'".$_POST['nivelAcesso']."'";
        };

        if (strlen($_POST['pisPasep']) <= 0){
            $pisPasep = 'NULL';
        }else{
            $pisPasep = "'".$_POST['pisPasep']."'";
        };

        if (strlen($_POST['ctps']) <= 0){
            $ctps = 'NULL';
        }else{
            $ctps = "'".$_POST['ctps']."'";
        };

        if (strlen($_POST['tituloEleitor']) <= 0){
            $tituloEleitor = 'NULL';
        }else{
            $tituloEleitor = "'".$_POST['tituloEleitor']."'";
        };

        if (strlen($_POST['admissao']) <= 0){
            $admissao = 'NULL';
        }else{
            $admissao = "'".$_POST['admissao']."'";
        };

        $senha = md5('123');

        $campos = "login, senha, status, perfil_id";
        $valores= "$nome_usuario, '$senha', '1', $nivelAcesso";
        
        $login = insere($conexao, $campos, $valores, "login");

        if (strlen($login['id']) <= 0) {

            $campos = "nome, data_nascimento, rg, orgao_emissor, cpf, pis, ctps, titulo_eleitor,
            telefone, celular, cargo, situacao, login_login, url_imagem, cep, endereco, numero,
            complemento, bairro, cidade, uf";
            $valores= "$nome, $nascimento, $rg, $orgao_emissor, $cpf, $pisPasep, $ctps, 
            $tituloEleitor, $telefone, $celular, $cargo, '1', $nome_usuario, $destino, $cep,
            $endereco, $numero, $complemento, $bairro, $cidade, $uf";
            
            $funcionario = insere($conexao, $campos, $valores, "funcionario");

            if (strlen($funcionario['id']) <= 0 ) {
                //var_dump($_POST['servicos']);
                //die();
                $lista_servico = json_decode($_POST['servicos']);
                $id = mysqli_insert_id($conexao);
                
                foreach ($lista_servico->servicosFuncionario as $servicos){

                    //Passa informações de inclusão na variável utilizada
                    $campos = "funcionario_id, servico_id";
                    $valores= "$id, '$servicos'";

                    $servico = insere($conexao, $campos, $valores, "funcionario_servico");
                    
                    //if (strlen($servico['id']) <= 0 ) {
                    //    print json_encode($servico);
                    //}
                }

                $campos = "data_admissao, funcionario_id";
                $valores = "$admissao, $id";

                $admissao = insere($conexao, $campos, $valores, "admissao");
                
                if (strlen($admissao['id']) <= 0 ) {
                    print json_encode($admissao);
                }
            }
        }

    break;
    default:
    break;
}