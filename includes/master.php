<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?php echo constant("TITLE"); ?></title>

    <link rel="stylesheet" type="text/css" href="./css/fontawesome-free-5.13.0-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap_v4_css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/table/datatables.bootstrap4.min.css">


    <script src="./js/jquery/jquery-3.3.1.min.js"></script>
    <script src="./js/popper/popper.min.js"></script>
    <script src="./js/boostrap_v4/bootstrap.min.js"></script>
    <script src="./js/table/jquery.datatables.min.js"></script>
    <script src="./js/table/datatables.bootstrap4.min.js"></script>


    <script src="./plugins/element-queries.js"></script>
    <script src="./js/script.js"></script>

</head>

<body>


    <!-- menu -->

    <div class="nav-side-menu" style="z-index: 10;">
        
        <div class="brand">
            <div class="brand-title"><span><i class="far fa-edit"></i></span> Logo</div>
        </div>
        

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li <?php if (constant("ACTIVE_PAGE") == 'index' || constant("ACTIVE_PAGE") == 'detalhe_publicacao' || constant("ACTIVE_PAGE") == 'editar_publicacao' || constant("ACTIVE_PAGE") == 'registar_publicacao') {
                        echo 'class="active_item_menu"';
                    } ?>>
                    <a id="item1" href="index.php"> Mapa Mensal</a>
                </li>

                <div id="item1-sublist" class="sublist">
                    <ul>
                        <li><a id="item1-sublist-ano-1" href="#">2021</a></li>
                        <div id="item1-sublist-meses-1" class="sublist">
                            <ul>
                                <li><a href="index.php">Janeiro</a></li>
                            </ul>
                        </div>
                        <li><a id="item1-sublist-ano-2" href="#">2020</a></li>
                        <div id="item1-sublist-meses-2" class="sublist">
                            <ul>
                                <li><a href="#">Janeiro</a></li>
                                <li><a href="#">Fevereiro</a></li>
                                <li><a href="#">Março</a></li>
                                <li><a href="#">Abril</a></li>
                                <li><a href="#">Maio</a></li>
                                <li><a href="#">Junho</a></li>
                                <li><a href="#">Julho</a></li>
                                <li><a href="#">Agosto</a></li>
                                <li><a href="#">Setembro</a></li>
                                <li><a href="#">Outubro</a></li>
                                <li><a href="#">Novembro</a></li>
                                <li><a href="#">Dezembro</a></li>
                            </ul>
                        </div>
                        <li><a id="item1-sublist-ano-3" href="#">2019</a></li>
                        <div id="item1-sublist-meses-3" class="sublist">
                            <ul>
                                <li><a href="#">Janeiro</a></li>
                                <li><a href="#">Fevereiro</a></li>
                                <li><a href="#">Março</a></li>
                                <li><a href="#">Abril</a></li>
                                <li><a href="#">Maio</a></li>
                                <li><a href="#">Junho</a></li>
                                <li><a href="#">Julho</a></li>
                                <li><a href="#">Agosto</a></li>
                                <li><a href="#">Setembro</a></li>
                                <li><a href="#">Outubro</a></li>
                                <li><a href="#">Novembro</a></li>
                                <li><a href="#">Dezembro</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>


                <li <?php if (constant("ACTIVE_PAGE") == 'requisicoes' || constant("ACTIVE_PAGE") == 'detalhe_requisicao') {
                        echo 'class="active_item_menu"';
                    } ?>>
                    <a href="#"> Menu 1</a>
                </li>

                <li <?php if (constant("ACTIVE_PAGE") == 'requisicao_atual') {
                        echo 'class="active_item_menu"';
                    } ?>>
                    <a href="#"> Menu 2</a>
                </li>

                <li>
                    <a href="#"> Menu 3</a>
                </li>

                <li>
                    <a href="#"> Menu 4</a>
                </li>

                <li>
                    <a href="#"> Menu 5</a>
                </li>

                <li>
                    <a href="#"> Menu 6</a>
                </li>

                <li <?php if (constant("ACTIVE_PAGE") == 'Acordeao') {
                        echo 'class="active_item_menu"';
                    } ?>>
                    <a href="./acordeao.php"> Menu 7</a>
                </li>

                <li <?php if (constant("ACTIVE_PAGE") == 'menu_direito') {
                        echo 'class="active_item_menu"';
                    } ?>>
                    <a href="./menu_direito.php"> Menu 8</a>
                </li>



            </ul>
        </div>
    </div>


    <div style="margin-bottom: 90px; background-color: lime";>
        <div class="header">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="top-bar">
                        <div id="control-sidebar" class="btn-group" role="group" aria-label="Controls">
                            <button type="button" class="btn btn-sm btn-info toggle-sidebar custom-button" id="toggle-sidebar-button">&lt;</button>
                        </div>
                        <div class="user-info">
                            <span>Utilizador XYZ</span>
                            <span>&nbsp;|&nbsp;</span>
                            <span>Sair</span>

                        </div>
                    </div>
                </div>



                <div class="col-12">
                    <div class="navigation-top">
                        <div class="navigation-top-container">
                            <div class="pagina_atual"><?php echo constant("CURRENT_PAGE") ?></div>
                            <div class="outras_paginas">
                                <ul>
                                    <li><a href="#" <?php if (constant("ACTIVE_PAGE") == 'index' || constant("ACTIVE_PAGE") == 'detalhe_publicacao' || constant("ACTIVE_PAGE") == 'editar_publicacao' || constant("ACTIVE_PAGE") == 'registar_publicacao') {
                                                                echo 'class="active_item_top_bar"';
                                                            } ?>>Opção Menu 1</a></li>
                                    <li><a href="#" <?php if (constant("ACTIVE_PAGE") == 'requisicoes' || constant("ACTIVE_PAGE") == 'detalhe_requisicao') {
                                                                echo 'class="active_item_top_bar"';
                                                            } ?>>Opção Menu 2</a></li>
                                    <li><a href="#" <?php if (constant("ACTIVE_PAGE") == 'requisicao_atual') {
                                                                echo 'class="active_item_top_bar"';
                                                            } ?>>Opção Menu 3</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>