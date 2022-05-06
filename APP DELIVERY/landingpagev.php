<?php
$login = new Login(3);
if($login->CheckLogin()):
  $idusuar = $_SESSION['userlogin']['user_id'];
  $lerbanco->ExeRead('ws_empresa', "WHERE user_id = :idcliente", "idcliente={$idusuar}");
  if (!$lerbanco->getResult()):       
  else:
    foreach ($lerbanco->getResult() as $i):
      extract($i);
    endforeach;
    header("Location: {$site}{$nome_empresa_link}/pedidos");
  endif;
else:
endif;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->

<head><meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title><?=$texto['titulo_site_landing'];?></title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="assets_land/images/favicon.png">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="assets_land/css/bootstrap.css">
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="assets_land/css/owl.carousel.min.css">
    <!--Magnific PopUp Stylesheet-->
    <link rel="stylesheet" type="text/css" href="assets_land/css/magnific-popup.css">
    <!--Icofont CSS-->
    <link rel="stylesheet" type="text/css" href="assets_land/css/icofont.css">
    <!--Mailer CSS-->
    <link rel="stylesheet" type="text/css" href="mailer_land/mailer-style.css">
    <!--Animate CSS-->
    <link rel="stylesheet" type="text/css" href="assets_land/css/animate.css">
    <!--Bootsnav CSS-->
    <link rel="stylesheet" type="text/css" href="assets_land/css/bootsnav.css">
    <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets_land/css/style.css">
    <!--Responsive CSS-->
    <link rel="stylesheet" type="text/css" href="assets_land/css/responsive.css">

    <!--Modanizr JS-->
    <script src="//code.tidio.co/n201ovekzsqbhne7fvbpvlri4xqfgang.js" async></script>
    <script src="assets_land/js/modernizr.custom.js"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--End Preloader-->

    <!--Start Body Wrap-->
    <div id="body-wrap">
        <!--Start Header-->
        <header id="header">
            <nav class="navbar navbar-default bootsnav" data-spy="affix" data-offset-top="10">
                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li><a href="/Demo"><i class="icofont icofont-download-alt"></i> Demo</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="icofont icofont-navigation-menu"></i>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets_land/images/logo.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li class="active"><a href="#header">Home</a></li>
                            <li><a href="#about">Sobre</a></li>
                            <li><a href="#features">Funcionalidades</a></li>
                            <li><a href="#app-screenshot">Veja o Sistema</a></li>
                            <li><a href="#pricing">Planos</a></li>
                            <li><a href="#faq">Faq</a></li>
                            <li><a href="#contact">Contato</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/cadastro">Cadastro</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <div class="clearfix"></div>
        </header>
        <!--End Header-->

        <!--Start Banner Section-->
        <section id="banner" class="gradient-bg full-height">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Banner Caption-->
                    <div class="col-md-6">
                        <div class="caption-content">
                            <h1 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">Pedidos rápidos pelo whatsapp</h1>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">Conheça a nossa plataforma de Delivery, onde 100% do valor do pedido é do estabelecimento. E o seu preço é igual pro cliente no app e no seu local.</p>
                            <div class="caption-btn wow fadeInUp" data-wow-delay="0.3s">
                                <a class="font-600" href="/Demo">Ver loja exemplo</a><a class="font-600" href="/cadastro">Teste grátis</a>
                            </div>
                        </div>
                    </div>
                    <!--End Banner Caption-->

                    <!--Start Banner Image-->
                    <div class="col-md-6">
                        <div class="banner-img wow fadeIn" data-wow-delay="0.4s">
                            <img src="assets_land/images/app1.png" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End Banner Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Banner Section-->

        <!--Start About Section-->
        <section id="about">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Sobre o pede no zap</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Veja como funciona a nossa plataforma.</p>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start About Row-->
                <div class="row">
                    <!--Start About Image-->
                    <div class="col-md-6">
                        <div class="about-img wow fadeIn" data-wow-delay="0.2s">
                            <img src="assets_land/images/app2.png" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End About Image-->

                    <!--Start About Content-->
                    <div class="col-md-6">
                        <div class="about-content">
                            <h3 class="font-700 wow fadeInUp" data-wow-delay="0.1s">Revolucionamos a maneira de fazer pedidos pelo whatsapp</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Pede no Zap chegou revolucionando a forma de realizar pedidos via whatsapp, uma plataforma leve, simples para o seu cliente e complexa para o seu estabelecimento. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Diferentes de outras plataformas que querem ser "sócios" nós queremos apenas te ajudar, não cobramos porcentagem sobre suas vendas, apenas um valor mensal fixo para a manutenção do seu cardápio.</p>
                        </div>
                        <div class="about-btn btn-lg p-0 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="gradient-bg-1" href="https://api.whatsapp.com/send?phone=55<?=PHONE_NUMBER;?>&text=Olá!%A0Gostaria de conhecer mais sobre o sistema." target="_blank"></i><span class="float-right text-center font-w-700">Quero Conhecer</a>
                        </div>
                    </div>
                    <!--End About Content-->
                </div>
                <!--End About Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End About Section-->

        <!--Start Features Section-->
        <section id="features" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Nossas Funcionalidades</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Aqui você verá todos os recursos que a nossa plataforma te oferece.</p>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start Feature Items Row-->
                <div class="row">
                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.1s">
                            <i class="icofont icofont-edit gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Configure seu delivery</h5>
                            <p>Cadastre os dados da sua loja, como endereço, horário de atendimento e seu número de whatsapp.</p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.2s">
                            <i class="icofont icofont-touch gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Configure seus produtos</h5>
                            <p>Cadastre seus produtos, incluindo ingredientes opcionais para aumentar seu ticket de venda.</p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.3s">
                            <i class="icofont icofont-motor-biker gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Configure sua entrega</h5>
                            <p>Configure os bairros ou faixas de CEP que você entrega e parametrize as formas de pagamento que você aceita.</p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.4s">
                            <i class="icofont icofont-food-cart gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Controle seus pedidos</h5>
                            <p>Faça o controle de seus pedidos através de uma tela única, e tenha maior controle sobre eles.</p>
                        </div>
                    </div>
                    <!--End Feature Item-->
                </div>
                <!--End Feature Items Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Features Section-->

        <!--Start Why Choose Section-->
        <section id="why-choose">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Why Choose Content-->
                    <div class="col-md-6">
                        <div class="why-choose-content">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Como fazemos</h2>
                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-restaurant-menu"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-600">Cardápio Simples</h5>
                                    <p>Tenha um cardápio simples e intuitivo. Fácil para seus clientes e prático para você.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-money-bag"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-600">Aumente seu Faturamento</h5>
                                    <p>Com o Pede no Zap você consegue aumentar seu faturamento, otimizando tempo no recebimento do seu pedido.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-ruler-pencil"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-600">Fácil para Editar</h5>
                                    <p>Um sistema muito simples, aonde você consegue configurar sua loja, seu cardápio, seus itens, cupons e etc.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->

                            <!--Start Why Choose Item-->
                            <div class="why-choose-single fix wow fadeInUp" data-wow-delay="0.1s">
                                <div class="why-chose-icon float-left">
                                    <i class="icofont icofont-link"></i>
                                </div>
                                <div class="why-choose-single-details float-right">
                                    <h5 class="font-600">Link Amigável</h5>
                                    <p>Tenha um link simples e amigável para enviar a seus cliente, sem precisar baixar aplicativos.</p>
                                </div>
                            </div>
                            <!--End Why Choose Item-->
                        </div>
                    </div>
                    <!--End Why Choose Content-->

                    <!--Start Why Choose Image-->
                    <div class="col-md-6">
                        <div class="why-choose-img wow fadeIn" data-wow-delay="0.2s">
                            <img src="assets_land/images/app3.png" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End Why Choose Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Why Choose Section-->

        <!--Start App Screenshots Section-->
        <section id="app-screenshot" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Nossa plataforma</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Confira abaixo algumas imagens da nossa plataforma.</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Screenshots Slider-->
                <div class="screenshots-slider owl-carousel wow fadeIn" data-wow-delay="0.1s">
                    <img src="assets_land/images/screenshot-1.jpg" class="img-responsive" alt="Image">
                    <img src="assets_land/images/screenshot-2.jpg" class="img-responsive" alt="Image">
                    <img src="assets_land/images/screenshot-3.jpg" class="img-responsive" alt="Image">
                    <img src="assets_land/images/screenshot-4.jpg" class="img-responsive" alt="Image">
                    <img src="assets_land/images/screenshot-5.jpg" class="img-responsive" alt="Image">
                </div>
                <!--End Screenshots Slider-->
            </div>
            <!--End Container-->
        </section>
        <!--End App Screenshots Section-->

        <!--Start Demo Video Section-->
        <section id="demo-video" class="bg-cover position-relative">
            <div class="overlay"></div>
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Video Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="video-content text-center">
                            <h2 class="font-700 text-uppercase color-white wow fadeInUp" data-wow-delay="0.1s">VEJA COMO FUNCIONA</h2>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">Assista ao vídeo e veja como é simples e fácil ter o Pede no Zap em seu estabelecimento.</p>
                            <div class="video-popup-icon position-relative">
                                <div class="pulse1"></div>
                                <div class="pulse2"></div>
                                <a class="popup-video" href="https://www.youtube.com/watch?v=EOA1oXpLT0w"><i class="icofont icofont-play-alt-2"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--End Video Content-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Demo Video Section-->

        <!--Start Pricing Section-->
        <section id="pricing">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Nossos Planos</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Confira abaixo os valores de nossos planos, teste grátis por durante 30 dias.</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Pricing Row-->
                <div class="row">
                    <!--Start Pricing Table-->
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table-single text-center wow fadeIn" data-wow-delay="0.1s">
                            <div class="pricing-title">
                                <h3 class="font-700">Teste</h3>
                            </div>
                            <div class="price-amount">
                                <h2 class="font-700 color-base2"><span>30 Dias para Teste</span></h2>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li class="font-500 ">Clientes Ilimitados</li>
                                    <li class="font-500 ">Pedidos Ilimitados</li>
                                    <li class="font-500 ">Link Amigável</li>
                                    <li class="font-500 no">Suporte para Instalação</li>
                                    <li class="font-500 no">Configuração e Cadastro dos <br>Produtos</li>
                                    <li class="font-500">Grátis 30 Dias</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="font-600" href="/cadastro">Assinar</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table-->

                    <!--Start Pricing Table-->
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table-single text-center wow fadeIn" data-wow-delay="0.2s">
                            <div class="pricing-title">
                                <h3 class="font-700">Mensal</h3>
                            </div>
                            <div class="price-amount">
                                <h2 class="font-700 color-base2"><span>R$</span> 69 <sup class="font-800">.90</sup> <sub class="font-600"></sub></h2>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li class="font-500 ">Clientes Ilimitados</li>
                                    <li class="font-500 ">Pedidos Ilimitados</li>
                                    <li class="font-500 ">Link Amigável</li>
                                    <li class="font-500 ">Suporte para Instalação</li>
                                    <li class="font-500 ">Configuração e Cadastro dos <br>Produtos</li>
                                    <li class="font-500">Menos de <b>R$ 2,40</b> por dia</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="font-600" href="https://api.whatsapp.com/send?phone=55<?=PHONE_NUMBER;?>&text=Olá! Gostaria de assinar o plano mensal.">Assinar</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table-->

                    <!--Start Pricing Table-->
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table-single text-center wow fadeIn" data-wow-delay="0.3s">
                            <div class="pricing-title">
                                <h3 class="font-700">Trimestral</h3>
                            </div>
                            <div class="price-amount">
                                <h2 class="font-700 color-base2"><span>R$</span> 180 <sup>.00</sup> <sub></sub></h2>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li class="font-500 ">Clientes Ilimitados</li>
                                    <li class="font-500 ">Pedidos Ilimitados</li>
                                    <li class="font-500 ">Link Amigável</li>
                                    <li class="font-500 ">Suporte para Instalação</li>
                                    <li class="font-500 ">Configuração e Cadastro dos <br>Produtos</li>
                                    <li class="font-500">Apenas <b>R$ 2,00</b> por dia</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="font-600" href="https://api.whatsapp.com/send?phone=55<?=PHONE_NUMBER;?>&text=Olá! Gostaria de assinar o plano trimestral.">Assinar</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table-->

                    <!--Start Pricing Table-->
                    <div class="col-md-3 col-sm-6">
                        <div class="pricing-table-single text-center wow fadeIn" data-wow-delay="0.4s">
                            <div class="pricing-title">
                                <h3 class="font-700 ">Anual</h3>
                            </div>
                            <div class="price-amount">
                                <h2 class="font-700 color-base2"><span>R$</span> 659 <sup>.90</sup> <sub></sub></h2>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li class="font-500 ">Clientes Ilimitados</li>
                                    <li class="font-500 ">Pedidos Ilimitados</li>
                                    <li class="font-500 ">Link Amigável</li>
                                    <li class="font-500 ">Suporte para Instalação</li>
                                    <li class="font-500 ">Configuração e Cadastro dos <br>Produtos</li>
                                    <li class="font-500">Menos de <b>R$ 1,90</b> por dia</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="font-600" href="https://api.whatsapp.com/send?phone=55<?=PHONE_NUMBER;?>&text=Olá! Gostaria de assinar o plano anual.">Assinar</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table-->
                </div>
                <!--End Pricing Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Pricing Section-->

        <!--Start Faq Section-->
        <section id="faq" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Perguntas Frequentes</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Configra abaixo algumas dúvidas frequentes relacionadas a nossa plataforma.</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Faq Row-->
                <div class="row">
                    <!--Start Faq Accordian-->
                    <div class="col-md-6">
                        <div class="panel-group" id="accordion">
                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.1s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Eu preciso baixar algum aplicativo ? </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="font-500 panel-body">Não, nossa plataforma é totalmente online e responsiva.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.2s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Meu cliente precisa baixar algum aplicativo ? </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Não, você precisa apenas enviar o link do seu cardápio para seu cliente realizar os pedidos.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.3s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">O cliente realiza o pagamento pela plataforma ?</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Não, todo o pagamento é feito na entrega ou na retirada diretamente para o estabelecimento, o Pede no Zap não tem contato algum com o dinheiro recebido.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.4s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Funciona no meu celular
                                        ?</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Sim, nossa plataforma foi desenvolvida para atender a necessidade de todos, você consegue acessar apenas com um smartphone ou computador conectado a internet. Nossa plataforma é totalmente responsiva.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->

                            <!--Start Accordian Single-->
                            <div class="panel panel-default wow fadeInUp" data-wow-delay="0.5s">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="font-600 accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse5">O Pede no Zap tem fidelidade ?</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="font-500 panel-body">Não, você pode cancelar a sua assinatura assim que desejar sem custo algum.</div>
                                </div>
                            </div>
                            <!--End Accordian Single-->
                        </div>
                    </div>
                    <!--End Faq Accordian-->

                    <!--Start Faq Image-->
                    <div class="col-md-6">
                        <div class="faq-img float-right wow fadeIn" data-wow-delay="0.2s">
                            <img src="assets_land/images/app8.png" class="img-responsive" alt="Image">
                        </div>
                    </div>
                    <!--End Faq Image-->
                </div>
                <!--Start Faq Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Faq Section-->

        <!--Start Testimonial Section-->
        <section id="testimonial" class="gradient-bg">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">O QUE ANDAM FALANDO DE NÓS</h2>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">Confira abaixo alguns testemunhos de clientes após conhecerem e usarem o Pede no Zap em seu estabelecimento.</p>
                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Testimonial Row-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <!--Start Testimonial Carousel-->
                        <div class="testimonial-carousel owl-carousel">
                            <!--Start Testimonial Single-->
                            <div class="testimonial-single row">
                                <div class="col-sm-3">
                                    <div class="client-info text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <img src="assets_land/images/client-2.jpg" alt="">
                                        <h4 class="font-600">Edy</h4>
                                        <p>Magic Burger</p>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="testimonial-border"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="client-comment">
                                        <p class="wow fadeInUp" data-wow-delay="0.1s">O Pede no Zap nos ajudou bastante, nossos clientes agora não precisam ficar pedindo cardápio, escolhendo ou perguntando. Muito prátio, ágil e fácil de utiliar, recomendo o Pede no Zap a todos.</p>
                                        <span class="wow fadeInUp" data-wow-delay="0.2s"><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span><span class="float-right"><i class="icofont icofont-quote-right"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Single-->

                        </div>
                        <!--End Testimonial Carousel-->
                    </div>
                </div>
                <!--End Testimonial Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Testimonial Section-->
	
        <!--Start Contact Section-->
        <section id="contact" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Col-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <!--Start Heading-->
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Entre em contato conosco</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Estamos esperando o seu contato, escolha um de nossos canais ou envie uma mensagem pelo nosso formulário.</p>
                        </div>
                        <!--End Heading-->
                    </div>
                    <!--End Heading Col-->
                </div>
                <!--End Heading Row-->

                <!--Start Contact Info-->
                <div class="contact-info">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.1s">
                                <i class="icofont icofont-email gradient-bg-1 color-white"></i>
                                <p>contato@pedenozap.online</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.2s">
                                <i class="icofont icofont-phone gradient-bg-1 color-white"></i>
                                <p>41 9 9244.0825</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.3s">
                                <i class="icofont icofont-social-google-map gradient-bg-1 color-white"></i>
                                <p>275, R. das Garças - Jd. Esperança</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->
                        <div class="col-sm-3">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.4s">
                                <i class="icofont icofont-social-instagram gradient-bg-1 color-white"></i>
                                <p>pedenozap_</p>
                            </div>
                        </div>
                        <!--End Contact Info Single-->
                    </div>
                    <!--End Row-->
                </div>
                <!--End Contact Info-->

                <!--Start Contact Form Content-->
                <div class="contact-form-content">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Contact Form-->
                        <div class="col-md-6">
                            <div class="contact-form">
                                <h3 class="font-600 text-center">Envie-nos uma mensagem</h3>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nome*" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email*" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Assunto" id="subject" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10" placeholder="Escreva Sua Mensagem" id="message" name="message" required></textarea>
                                    </div>
                                    <div class="contact-btn">
                                        <button class="font-500 gradient-bg-1 color-white" type="submit" name="action" value="send_message">Enviar</button>
                                    </div>
                                </form>
                                <div id="form-messages">
                                    <?
                                    if (isset($_POST) and isset($_POST['action']) and $_POST['action'] == "send_message") {
                                        extract($_POST);
                                        if (!empty($name) and !empty($email) and !empty($subject) and !empty($message)) {
                                            require_once "_app/Config.inc.php";
                                            $to      = EMAIL_MSG;
                                            $subject = $subject;
                                            $message = 'Nome: '.$name. "\r\n" .$message;
                                            $headers = 'From: '.$email . "\r\n" .
                                                       'Reply-To: '.$email . "\r\n" .
                                                       'X-Mailer: PHP/' . phpversion();

                                            if (mail($to, $subject, $message, $headers)) {
                                                ?>
                                                <div class="alert alert-success" style="margin-top: 15px;">
                                                    <strong>Sucesso!</strong><span> Sua mensagem foi enviada com sucesso!</span>
                                                </div>
                                                <?
                                            }
                                            else {
                                                ?>
                                                <div class="alert alert-danger" style="margin-top: 15px;">
                                                    <strong>Erro!</strong><span> Falha ao enviar sua mensagem!</span>
                                                </div>
                                                <?
                                            }
                                        }
                                    }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                        <!--End Contact Form-->

                        <!--Start Google Map-->
                        <div class="col-md-6">
                            <div class="google-map">
                                <h3 class="font-600 text-center">Encontre-nos no Google Maps</h3>
                                <div id="map"></div>
                            </div>
                        </div>
                        <!--End Google Map-->
                    </div>
                    <!--End Row-->
                </div>
                <!--End Contact Form Content-->
            </div>
            <!--End Container-->
        </section>
        <!--End Contact Section-->

        <!--Start Footer-->
        <footer id="footer">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Footer Social-->
                    <div class="col-sm-4">
                        <div class="footer-social text-left wow fadeIn" data-wow-delay="0.1s">
                            <ul>
                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer Social-->

                    <!--Start Copyright Text-->
                    <div class="col-sm-8">
                        <div class="copyright-text text-right wow fadeIn" data-wow-delay="0.2s">
                            <p class="color-white">&copy; 2021 Todos os direitos reservados <a class="color-base" href="#">Pede no Zap</a></p>
                        </div>
                    </div>
                    <!--End Copyright Text-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->

            <!--Start ClickToTop-->
            <div class="click-to-top">
                <a class="gradient-bg" href="#header"><i class="icofont icofont-simple-up"></i></a>
            </div>
            <!--End ClickToTop-->
        </footer>
        <!--End Footer-->
    </div>
    <!--End Body Wrap-->

    <!--jQuery JS-->
    <script src="assets_land/js/jquery.min.js"></script>
    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4yKUBz0tTKwfw8zY8mYOR7MAZy9coIMg&callback" async defer></script>
    <script src="assets_land/js/map.js"></script>
    <!--Counter JS-->
    <script src="assets_land/js/waypoints.js"></script>
    <script src="assets_land/js/jquery.counterup.min.js"></script>
    <!--Bootstrap JS-->
    <script src="assets_land/js/bootstrap.min.js"></script>
    <!--Magnic PopUp JS-->
    <script src="assets_land/js/magnific-popup.min.js"></script>
    <!--Owl Carousel JS-->
    <script src="assets_land/js/owl.carousel.min.js"></script>
    <!--Wow JS-->
    <script src="assets_land/js/wow.min.js"></script>
    <!--Bootsnavs JS-->
    <script src="assets_land/js/bootsnav.js"></script>
    <!--Contact Form JS-->
    <script src="mailer_land/ajax-contact-form.js"></script>
    <!--Main-->
    <script src="assets_land/js/custom.js"></script>

</body>

</html>