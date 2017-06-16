<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema para BAD">
    <meta name="author" content="{{ trans('tntmessage.LosEternos') }}">

    <title>{{ trans('tntmessage.Tanatos') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>

    <link rel="shortcut icon" href="{{ asset('/img/tanatos/welcome/Logo.png') }}">
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>{{ trans('tntmessage.Tanatos') }}</b></a>
        </div>
        <div class="navbar-collapse collapse"> 
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                <li><a href="#desc" class="smoothScroll">{{ trans('adminlte_lang::message.description') }}</a></li>
                <li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>
                <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->usuario }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="col-lg-5">
                        
        </div>
        <div class="col-lg-2">
             <img class="img-responsive" src="{{ asset('/img/tanatos/welcome/Logo.png') }}" alt="Tanatos">
        </div>
        <div class="col-lg-5">

        </div>
        <div class="row centered">
            <div class="col-lg-12">
                
                <h1><b style="color:red;">T</b>ANATOS</h1>
                <hr>
                <h3> 
                    {{ trans('tntmessage.DescripcionTanatos') }}<b><a href="#">{{ trans('tntmessage.LosEternos') }}</a></b>
                    {{ trans('tntmessage.DescripcionTanatos2') }} <b>{{ trans('tntmessage.BAD') }}</b>
                    <b><a href="http://www.fia.ues.edu.sv/" target="_blank"> {{ trans('tntmessage.U') }}</a></b><b>.</b>

                </h3>
                @if (Auth::guest())
                    <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">{{ trans('tntmessage.Registrarme') }}</a></h3>
                @else
                    <h3><a href="{{ url('/home') }}" class="btn btn-lg btn-success">{{ trans('tntmessage.Comencemos') }}</a></h3>
                @endif
                <hr>
            </div>
            
            <div class="col-lg-2">
                <h5>{{ trans('tntmessage.GeneralChequeo') }}</h5>
                <p>{{ trans('tntmessage.GeneralChequeo_Cuerpo') }}</p>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="{{ asset('/img/tanatos/welcome/Banner_1.jpg') }}" alt="">
            </div>
            <div class="col-lg-2">
                <br>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                <h5>{{ trans('tntmessage.AmpliaGama') }}</h5>
                <p>
                    ... certificados por <a href="#">OMS</a> 
                    garantizamos tu salud y la calidad de nuestos 
                    <a href="#"> medicamentos</a>.
                    
                </p>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->


<section id="desc" name="desc"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>Piensa en Salud</h1>
            <br>
            <br>
            <div class="col-lg-4">
                <img src="{{ asset('/img/intro01.png') }}" alt="">
                <h3>Serivicio</h3>
                <p>Moderno servicio de respuesta a <a href="#">examenes</a> y registros de expedientes </p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/img/intro02.png') }}" alt="">
                <h3>Citas</h3>
                <p>Programa tus <a href="#">citas</a> a travez de nuestra plataforma web según te convenga</p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('/img/intro03.png') }}" alt="">
                <h3>Atención</h3>
                <p>Contamos con <a href="#">personal calificado</a> para estar pendiendte de ti 24/7.</p>
            </div>
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

<!-- FEATURES WRAP -->
<div id="features">
    <div class="container">
        <div class="row">
            <h1 class="centered">{{ trans('adminlte_lang::message.whatnew') }}</h1>
            <br>
            <br>
            <div class="col-lg-6 centered">
                <img class="centered" src="{{ asset('/img/tanatos/welcome/mobile.png') }}" alt="">
            </div>

            <div class="col-lg-6">
                <h3>{{ trans('adminlte_lang::message.features') }}</h3>
                <br>
                <!-- ACCORDION -->
                <div class="accordion ac" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                {{ trans('adminlte_lang::message.design') }}
                            </a>
                        </div><!-- /accordion-heading -->
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                {{ trans('adminlte_lang::message.retina') }}
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                {{ trans('adminlte_lang::message.support') }}
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                {{ trans('adminlte_lang::message.responsive') }}
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>
                </div><!-- Accordion -->
            </div>
        </div>
    </div><!--/ .container -->
</div><!--/ #features -->


<section id="showcase" name="showcase"></section>
<div id="showcase">
    <div class="container">
        <div class="row">
            <h1 class="centered">{{ trans('adminlte_lang::message.screenshots') }}</h1>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/tanatos/welcome/pc_1.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/tanatos/welcome/pc_2.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/tanatos/welcome/pc_3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>


<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>{{ trans('adminlte_lang::message.address') }}</h3>
            <p>
                Av. El Amo 666,<br/>
                San Salvador,<br/>
                55542<br/>
                Sivar
            </p>
        </div>

        <div class="col-lg-7">
            <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                </div>
                <div class="form-group">
                    <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                </div>
                <div class="form-group">
                    <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
            </form>
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <!-- To the right -->
            <div class=" hidden-xs">
                <strong>{{ trans('adminlte_lang::message.seecode') }}</strong> <a href="#">{{ trans('tntmessage.CodigoFuente') }}</a>
            </div>
        </p>
        <p>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2017 .</strong> {{ trans('adminlte_lang::message.createdby') }} <a href="#">{{ trans('tntmessage.LosEternos') }}</a>.
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
