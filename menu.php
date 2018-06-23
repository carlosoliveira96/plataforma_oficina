<?php
include 'controle.php';
?>
<html lang="pt-br" style="min-height:100%; position: relative;">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portal da Oficina</title>
        <link rel="shortcut icon" href="" type="image/x-icon">
        <!-- Arquivos CSS -->
        <link rel="stylesheet" href="static/css/bootstrap.css">
        <link rel="stylesheet" href="static/css/jasny-bootstrap.css">
        <link rel="stylesheet" href="static/css/jquery-ui.css">
        <link rel="stylesheet" href="static/css/menu-custom.css">
        <link rel="stylesheet" href="static/css/fontawesome-all.css">
        <link rel="stylesheet" href="static/css/customScrollbar.css">
        <!-- Arquivos JS -->
        <script src="static/js/jquery.js"></script>
        <script src="static/js/popper.js"></script>
        <script src="static/js/jasny-bootstrap.min.js"></script>
        <script src="static/js/bootstrap.js"></script>
        
        <script src="static/js/menu-custom.js"></script>
        <script src="static/js/auxilio.js"></script>
        <script src="static/js/jquery-ui.js"></script>
        <script src="static/js/customScrollbat.js"></script>
        <script src="static/js/fontawesome-all.js"></script>
    </head>
    <body id="body">
    <div id="preloader" class="carregando" style="display: none">
        <img src="static/gif/loading.gif" style="position: fixed; margin-top: 25%; margin-left: 45%;">
    </div>
    <div class="page-wrapper cool-theme toggled" id="div">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="inicio.php" title="Página inícial">CRT</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-info">
                        <span class="user-name">
                            <strong><?php echo $_SESSION["nomeUsuario"] ?></strong>
                        </span>
                        <span class="user-role">Administrator</span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-menu">
                    <ul>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-clipboard"></i>
                            <span>Administrativo</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="empresa.php">Empresa</a>
                                </li>
                                <li>
                                    <a href="funcionarios.php">Funcionários</a>
                                </li>
                                <li>
                                    <a href="expedientesAdm.php">Expedientes</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-chart-line"></i>
                            <span>Financeiro</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="funcionarioListar.php">Funcionários</a>
                                </li>
                                <li>
                                    <a href="#">Atendimentos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-pencil-alt"></i>
                            <span>Manutenção</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="servicos.php">Serviços</a>
                                </li>
                                <li>
                                    <a href="expedientes.php">Expedientes</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-paste"></i>
                            <span>Atendimento</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="cliente&veiculo.php">Cliente & Veículo

                                    </a>
                                </li>
                                <li>
                                    <a href="fornecedor.php">Fornecedor</a>
                                </li>
                                <li>
                                    <a href="seguradora.php">Seguradora</a>
                                </li>
                                <li>
                                    <a href="corretor.php">Corretor</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-print"></i>
                            <span>Relatórios</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Administrativo</a>
                                </li>
                                <li>
                                    <a href="#">Financeiro</a>
                                </li>
                                <li>
                                    <a href="#">Atendimento</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#" title="Notificação de mensagem">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#" title="Comunicador">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#" title="Sair" onClick="logout()">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
