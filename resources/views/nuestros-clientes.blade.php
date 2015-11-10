@extends('layouts.master')
@include('layouts.navigation')
@section('title', 'Page Title')



@section('content')


<div class="parallax parallax-1" style="background-image: url(/img/breadcumb.jpg); background-attachment: fixed; background-position: 50% 37px;">
    <span class="parallax-overlay"></span>
    <div class="container parallax-content">
        <header>
            <ul class="breadcrumb"><!-- breadcrumb -->
                <li><a href="/">Inicio</a></li>
                <li class="active">Nuestros clientes</li>
            </ul><!-- /breadcrumb -->
            <h2><!-- Page Title -->
                <strong>Nuestros</strong> clientes
            </h2><!-- /Page Title -->

        </header>
    </div>
</div>



<!-- CONTENT -->
<section>
    <div class="container">

        <div class="row">

            <!-- LEFT COLUMNS -->
            <div class="col-md-9">

                <div class="row"><!-- item -->
                    <div class="col-md-2"><!-- company logo -->
                        <img src="/epona/images/demo/brands/1.jpg" class="img-responsive" alt="company logo">
                    </div>
                    <div class="col-md-10"><!-- company detail -->
                        <h3 class="margin-bottom10">Company Name, Inc</h3>
                        <ul class="list-inline">
                            <li><i class="fa fa-globe text-success"></i> <a class="text-success" href="#">http://www.domain.com</a></li>
                            <li><i class="fa fa-briefcase"></i> <span class="text-warning">Marketing &amp; Design</span></li>
                        </ul>
                        <p>Lorem ipsum eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati</p>
                    </div>
                </div><!-- /item -->

                <hr class="half-margins" />

                <div class="row"><!-- item -->
                    <div class="col-md-2"><!-- company logo -->
                        <img src="/epona/images/demo/brands/2.jpg" class="img-responsive" alt="company logo">
                    </div>
                    <div class="col-md-10"><!-- company detail -->
                        <h3 class="margin-bottom10">Company Name, Inc</h3>
                        <ul class="list-inline">
                            <li><i class="fa fa-globe text-success"></i> <a class="text-success" href="#">http://www.domain.com</a></li>
                            <li><i class="fa fa-briefcase"></i> <span class="text-warning">Marketing &amp; Design</span></li>
                        </ul>
                        <p>Lorem ipsum eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati</p>
                    </div>
                </div><!-- /item -->

                <hr class="half-margins" />

                <div class="row"><!-- item -->
                    <div class="col-md-2"><!-- company logo -->
                        <img src="/epona/images/demo/brands/3.jpg" class="img-responsive" alt="company logo">
                    </div>
                    <div class="col-md-10"><!-- company detail -->
                        <h3 class="margin-bottom10">Company Name, Inc</h3>
                        <ul class="list-inline">
                            <li><i class="fa fa-globe text-success"></i> <a class="text-success" href="#">http://www.domain.com</a></li>
                            <li><i class="fa fa-briefcase"></i> <span class="text-warning">Marketing &amp; Design</span></li>
                        </ul>
                        <p>Lorem ipsum eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati</p>
                    </div>
                </div><!-- /item -->

                <hr class="half-margins" />

                <div class="row"><!-- item -->
                    <div class="col-md-2"><!-- company logo -->
                        <img src="/epona/images/demo/brands/4.jpg" class="img-responsive" alt="company logo">
                    </div>
                    <div class="col-md-10"><!-- company detail -->
                        <h3 class="margin-bottom10">Company Name, Inc</h3>
                        <ul class="list-inline">
                            <li><i class="fa fa-globe text-success"></i> <a class="text-success" href="#">http://www.domain.com</a></li>
                            <li><i class="fa fa-briefcase"></i> <span class="text-warning">Marketing &amp; Design</span></li>
                        </ul>
                        <p>Lorem ipsum eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati</p>
                    </div>
                </div><!-- /item -->

                <hr class="half-margins" />

                <div class="row"><!-- item -->
                    <div class="col-md-2"><!-- company logo -->
                        <img src="/epona/images/demo/brands/5.jpg" class="img-responsive" alt="company logo">
                    </div>
                    <div class="col-md-10"><!-- company detail -->
                        <h3 class="margin-bottom10">Company Name, Inc</h3>
                        <ul class="list-inline">
                            <li><i class="fa fa-globe text-success"></i> <a class="text-success" href="#">http://www.domain.com</a></li>
                            <li><i class="fa fa-briefcase"></i> <span class="text-warning">Marketing &amp; Design</span></li>
                        </ul>
                        <p>Lorem ipsum eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati</p>
                    </div>
                </div><!-- /item -->

                <hr class="half-margins" />

                <!-- CALLOUT -->
                <div class="alert alert-default fade in">

                    <div class="row">

                        <div class="col-md-9 col-sm-9"><!-- left text -->
                            <h4><strong>You know</strong> you like Epona!</h4>
                            <p>
                                Purchase now and get lifetime update! We are constantly improving Epona for you.
                            </p>
                        </div><!-- /left text -->


                        <div class="col-md-3 col-sm-3 text-right"><!-- right btn -->
                            <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-primary btn-lg">PURCHASE NOW</a>
                        </div><!-- /right btn -->

                    </div>

                </div>
                <!-- /CALLOUT -->

            </div>
            <!-- /LEFT COLUMNS -->

            <!-- RIGHT COLUMNS -->
            <div class="col-md-3">

                <h4><strong>Let's</strong> Colaborate</h4>
                <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet.</em></p>

                <hr class="half-margins" />

                <ul class="list-icon angle-right"><!-- block 1 -->
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Consectetur adipiscing elit</a></li>
                    <li><a href="#">Quisque rutrum pellentesque</a></li>
                </ul><!-- /block 1 -->

                <ul class="list-icon angle-right"><!-- block 2 -->
                    <li><a href="#">Nulla lacinia iaculis nulla</a></li>
                    <li><a href="#">Cum sociis natoque penatibus</a></li>
                    <li><a href="#">Magnis dis parturient montes</a></li>
                </ul><!-- /block 2 -->


                <hr class="half-margins" />

                <h4><strong>Contact</strong> Us</h4>
                <form action="#" method="post" class="sky-form clearfix">

                    <label class="input">
                        <i class="icon-prepend fa fa-user"></i>
                        <input type="text" placeholder="Name">
                    </label>

                    <label class="input">
                        <i class="icon-prepend fa fa-envelope"></i>
                        <input type="text" placeholder="Email">
                    </label>

                    <label class="textarea">
                        <i class="icon-prepend fa fa-comment"></i>
                        <textarea rows="3" placeholder="Type your message..."></textarea>
                    </label>

                    <button class="btn btn-primary btn-sm pull-right">Submit your message</button>

                </form>

            </div>
            <!-- /RIGHT COLUMNS -->

        </div>

    </div>
</section>
<!-- /CONTENT -->



@stop