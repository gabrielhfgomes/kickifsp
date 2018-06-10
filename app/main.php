<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KICKIFSP</title>

        <!-- Fontes e efeitos CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">                 
        <!-- CSS Principal -->
        <link href="css/app.css" rel="stylesheet">

    </head>
    <body>
        <header id="header" class="clearfix" data-current-skin="green">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>

                <li class="logo hidden-xs">
                    <a href="../index.html">KICKIFSP  <span><img src="img/geral/LogoFB.png" width="16" height="16"></span></a>
                </li>
        </header>
        
        <section id="main" data-layout="layout-1">
            <aside id="sidebar" class="sidebar c-overflow">
                <div class="profile-menu">
                    <a href="">
                        <div class="profile-pic">
                            <img src="img/profile-pics/2.jpg" alt="">
                        </div>

                        <div class="profile-info">
                            Usuário

                           <!-- <i class="zmdi zmdi-caret-down"></i>-->
                        </div>
                    </a>
                </div>

                <ul class="main-menu">
                    <li class="active">
                        <a href="main.html"><i class="zmdi zmdi-home"></i> Home</a>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-view-list"></i> Novo</a>

                        <ul>
                            <li><a href="novoProjeto.html">Projeto </a></li>
                            <li><a href="novaDoacao.html">Doação</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-search"></i> Buscar Projetos</a>

                        <ul>
                            <li><a href="projetosNovos.html">Novos</a></li>
                            <li><a href="top-mainmenu.html">Fase Final</a></li>
                        </ul>
                    </li>
                    <li><a href="minhasDoacoes.html"><i class="zmdi zmdi-star"></i> Minhas doações</a></li>
                </ul>
            </aside>
                       
            <section id="content">
                <div class="container">

                    <div class="block-header">
                        <h2>Kickifsp - Informações Gerais</h2>
                    </div>

                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } else {
                            echo "conectou";
                        }
                        //echo "Connected successfully";
                        
                        $sql = "SELECT id_projeto FROM projeto";
                        $result = $conn->query($sql);
                        var_dump($result);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                                echo "results exist";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();                    
                    ?>

                    <!-- Estatísticas Gerais -->
                    <div class="mini-charts">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-cyan">
                                    <div class="clearfix">
                                        <div class="chart stats-bar"></div>
                                        <div class="count">
                                            <small>Total Doado Hoje</small>
                                            <h2>R$ 325.984,00</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-lightgreen">
                                    <div class="clearfix">
                                        <div class="chart stats-bar-2"></div>
                                        <div class="count">
                                            <small>Projetos Sucedidos</small>
                                            <h2>10.503</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-orange">
                                    <div class="clearfix">
                                        <div class="chart stats-line"></div>
                                        <div class="count">
                                            <small>Projetos em Andament0</small>
                                            <h2>23.340</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-bluegray">
                                    <div class="clearfix">
                                        <div class="chart stats-line-2"></div>
                                        <div class="count">
                                            <small>Usuários</small>
                                            <h2>150.859</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Estatísticas Gerais -->
                    
                    <!-- Top Projetos Recentes-->
                    <div class="card">
                        <div class="card-header">
                            <h2>Últimos Projetos <small>Confira aqui o melhor dos últimos projetos adicionados</small></h2>
                        </div>
                        
                        <div class="card-body card-padding">
                            <div>
                                <h3>Recall Overwatch - Animação<small> site: "http://youtube.com"</small><h3>
                                <div class="row">
                                    <div class="col-sm-6 videos">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2aH_fjI5XQI"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card video-descricao z-depth-5">
                                            <div class="card-header">
                                                Animação sem limites
                                            </div>
                                            <div class="card-body card-padding">
                                                <p>
                                                    Este é um projeto pioneiro da companhia CGI Express. 
                                                    <br>
                                                    A animação já concorre a prêmios mesmo sem ainda ter sido publicada completamente.

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <a href="novaDoacao.html?id=12302" class="btn btn-success">Doe</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>                                  
                                </div>
                            </div>
                            <div>
                                <h3>Futuro Já<small> site: "http://futuro.com"</small><h3>
                                <div class="row">
                                    <div class="col-sm-6 video">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cmt48AQu1EU"></iframe>
                                        </div>
                                    </div>  
                                    <div class="col-sm-6">
                                        <div class="card video-descricao z-depth-5">
                                            <div class="card-header">
                                                Que coisa louca!
                                            </div>
                                            <div class="card-body card-padding">
                                                <p>
                                                    Este é um projeto maravilhoso de como as coisas serão no futuro.
                                                    <br>
                                                    A tecnologia trará ainda mais benefícios para o mundo.
                                                    

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <a href="novaDoacao.html?id=1230" class="btn btn-success">Doe</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>                                                                      
                                </div>
                            </div>  
                            <div>
                                <h3>Projeto Teste<small> site: "http://projeto.com"</small><h3>
                                <div class="row">
                                    <div class="col-sm-6 video">
                                        <div class="embed-responsive embed-responsive-4by3">
                                            <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/Kxe_RRonq0o"></iframe>
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="card video-descricao z-depth-5">
                                            <div class="card-header">
                                                Coisa louca!
                                            </div>
                                            <div class="card-body card-padding">
                                                Este é um projeto maravilhoso de uma WebSerie que vem crescendo a cada dia. Sabe o que falta pra continuar crescendo? Sua doação!!!

                                                <br>
                                                <br>
                                                <br>
                                                <a href="novaDoacao.html?id=12301" class="btn btn-success">Doe</a>
                                            </div>
                                        </div>
                                    </div>                                      
                                </div>
                            </div>     
                        </div>
                    </div>
                    <!-- Fim Top Projetos Recentes-->

                </div>
            </section>
        </section>
        
        <footer id="footer">
            Copyright &copy; 2016 Kickfisp
        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Aguarde...</p>
            </div>
        </div>
        
        <!-- Jquery para manipulação básica do DOM e ScrollBar plugin-->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!--funções gerais da app -->
        <script src="js/functions.js"></script>
       
    </body>
  </html>