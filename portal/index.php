<?php
include ('scripts/pages.php');
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/favicon.png">
    <title>Portal do TCC - Painel</title>

    <!-- Vendor CSS -->
    <link href="assets/plugins/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="assets/plugins/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/plugins/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
    <link href="assets/plugins/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
    
    
    
    <!-- CSS -->
    <link href="assets/css/app.css" rel="stylesheet">

    <!-- Editor -->
    <script type="text/javascript" src="assets/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            theme: "modern",

            plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
            ],
            content_css: "css/content.css",
            language : 'pt_BR',
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
            style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Título', block: 'h1'},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        }); 
</script>
</head>
<body>
    <header id="header">
        <ul class="header-inner">
            <li id="menu-trigger" data-trigger="#sidebar">
                <div class="line-wrap">
                    <div class="line top"></div>
                    <div class="line center"></div>
                    <div class="line bottom"></div>
                </div>
            </li>
            
            <li class="logo hidden-xs">
                <a href="index.php"><?php echo $_SESSION['nome']; ?></a>
            </li>
            
            <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                    <li id="top-search">
                        <a class="tm-search" href=""></a>
                    </li>
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href=""></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="hidden-xs">
                                <a href="index.php?page=1000"><i class="zmdi zmdi-lock-outline"></i> Sair</a>
                            </li>
                        </ul>
                    </li>
                    
                </li>
            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>
        
        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner c-overflow">
                    <ul class="main-menu">
                        <li class="active"><a href="index.php"><i class="zmdi zmdi-home"></i> Página Inicial</a></li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-collection-text"></i> Meus Trabalhos</a>

                            <ul>
                                <li><a href="index.php?page=10">Trabalhos Cadastrados</a></li>
                                <li><a href="index.php?page=10.1">Cadastrar Trabalho</a></li>
                                <li><a href="form-validations.html">Visualizar Colaboradores</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href=""><i class="zmdi zmdi-layers"></i> Colaborar</a>

                            <ul>
                                <li><a href="index.php?page=40.3">Fazer uma Colaboração</a></li>
                                <li><a href="index.php?page=40">Procurar Trabalhos</a></li>
                                <li><a href="form-components.html">Minhas Colaborações</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?page=30"><i class="zmdi zmdi-assignment-account"></i> Minhas Informações</a></li>
                        
                    </ul>
                </div>
            </aside>
            
            <section id="content">
                <div class="container">
                    <?php include("$page"); ?>
                </div>
            </section>
        </section>
        
        <footer id="footer">
            Copyright &copy; 2015 Portal do TCC
        </footer>
        
        
        
        <!-- Javascript Libraries -->
        <script src="assets/plugins/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="assets/plugins/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="assets/plugins/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="assets/plugins/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="assets/plugins/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="assets/plugins/vendors/sparklines/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        
        <script src="assets/plugins/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="assets/plugins/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js "></script>
        <script src="assets/plugins/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
        <script src="assets/plugins/vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="assets/plugins/vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="assets/plugins/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="assets/plugins/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="assets/plugins/vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
            <![endif]-->
            
            <script src="assets/js/flot-charts/curved-line-chart.js"></script>
            <script src="assets/js/flot-charts/line-chart.js"></script>
            <script src="assets/js/charts.js"></script>
            
            <script src="assets/js/charts.js"></script>
            <script src="assets/js/functions.js"></script>
            <script src="assets/js/demo.js"></script>

            
        </body>
        </html>