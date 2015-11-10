
@extends('layouts.master')
@include('layouts.navigation')
@include('layouts.slider_revolution')
@section('title', 'Page Title')



@section('content')


<!-- CONTENT -->
<section>
    <div class="container">

        <header class="nomargin">
            <h2>
               Toro eventos entrega
                <span class="word-rotator"><!-- word rotator -->
                    <span class="items bold">
                        <span><em>Calidad</em></span>
                        <span><em>Servicio</em></span>
                        <span><em>Profesionalismo</em></span>
                    </span>
                </span><!-- /word rotator -->
            </h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et.</p>
        </header>

        <div id="portfolio" class="container">

            <ul class="nav nav-pills isotope-filter isotope-filter" data-sort-id="isotope-list" data-option-key="filter">
                <li data-option-value="*" class="active"><a href="#">Galería eventos</a></li>
<!--                <li data-option-value=".development"><a href="#">Development</a></li>
                <li data-option-value=".photography"><a href="#">Photography</a></li>-->
                <!--<li data-option-value=".design"><a href="#">Design</a></li>-->
            </ul>


            <div class="row">

                <ul class="sort-destination isotope" data-sort-id="isotope-list">

                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="#">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>Eventos</strong> profesionales
                                    </span>
                                </a>
                                <img class="img-responsive" src="/img/eventos/baja_resolucion/600x480/mesas_moradas5.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Toro eventos</h4>
                                <!--<small class="styleColor">29 June, 2014</small>-->
                            </div>
                        </div>
                    </li>
                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="#">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>Eventos</strong> profesionales
                                    </span>
                                </a>
                                <img class="img-responsive" src="/img/eventos/baja_resolucion/600x480/mesas_azules.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Toro eventos</h4>
                                <!--<small class="styleColor">29 June, 2014</small>-->
                            </div>
                        </div>
                    </li>
                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="#">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>Eventos</strong> profesionales
                                    </span>
                                </a>
                                <img class="img-responsive" src="/img/eventos/baja_resolucion/600x480/plateria.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Toro eventos</h4>
                                <!--<small class="styleColor">29 June, 2014</small>-->
                            </div>
                        </div>
                    </li>
                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="#">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>Eventos</strong> profesionales
                                    </span>
                                </a>
                                <img class="img-responsive" src="/img/eventos/baja_resolucion/600x480/postres.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Toro eventos</h4>
                                <!--<small class="styleColor">29 June, 2014</small>-->
                            </div>
                        </div>
                    </li>
                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="#">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>Eventos</strong> profesionales
                                    </span>
                                </a>
                                <img class="img-responsive" src="/img/eventos/baja_resolucion/600x480/cafeteria.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Toro eventos</h4>
                                <!--<small class="styleColor">29 June, 2014</small>-->
                            </div>
                        </div>
                    </li>
                    <li class="sotope-item col-sm-6 col-md-4 development"><!-- item -->
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="#">
                                    <span class="overlay color2"></span>
                                    <span class="inner">
                                        <span class="block fa fa-plus fsize20"></span>
                                        <strong>Eventos</strong> profesionales
                                    </span>
                                </a>
                                <img class="img-responsive" src="/img/eventos/baja_resolucion/600x480/bartman2.jpg" width="260" height="260" alt="">
                            </figure>
                            <div class="item-box-desc">
                                <h4>Toro eventos</h4>
                                <!--<small class="styleColor">29 June, 2014</small>-->
                            </div>
                        </div>
                    </li>

                    

                </ul>

            </div><!-- /.masonry-container -->


            <!-- Banner -->
<!--            <a class="margin-bottom60 block clearfix" href="#purchase" target="_blank" rel="nofollow">
                <img class="img-responsive" src="/epona/images/big_banner.png" alt="">
            </a> /Banner -->

        </div>


    </div>
</section>
<!-- /CONTENT -->


@stop