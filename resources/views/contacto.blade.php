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
                <li class="active">Contacto</li>
            </ul><!-- /breadcrumb -->
            <h2><!-- Page Title -->
                <strong>Contacto</strong>
            </h2><!-- /Page Title -->

        </header>
    </div>
</div>


<!-- CONTENT -->
<section>
    <div class="container">

        <div class="row">

            <!-- FORM -->
            <div class="col-md-9">

                <h3>Drop us a line or just say <strong><em>Hello!</em></strong></h3>

                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus.</p>

                <!-- CALLOUT -->
                <div class="alert callout alert-default fade in">

                    <div class="row">

                        <div class="col-md-9 col-sm-9"><!-- left text -->
                            <h4><strong>You know</strong> you like Epona!</h4>
                            <p>
                                Purchase now and get lifetime update! We are constantly improving Epona for you.
                            </p>
                        </div><!-- /left text -->


                        <div class="col-md-3 col-sm-3 text-right"><!-- right btn -->
                            <a href="#purchase" rel="nofollow" target="_blank" class="btn btn-warning btn-lg">PURCHASE NOW</a>
                        </div><!-- /right btn -->

                    </div>

                </div>
                <!-- /CALLOUT -->

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>


                <form id="contactForm" class="margin-top60" action="php/contact.php" method="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Nombre completo *</label>
                                <input required type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="contact_name" id="contact_name">
                            </div>
                            <div class="col-md-6">
                                <label>Correo electonico *</label>
                                <input required type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="contact_email" id="contact_email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Asunto</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="contact_subject" id="contact_subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Mensaje *</label>
                                <textarea required maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="contact_comment" id="contact_comment"></textarea>
                            </div>
                        </div>
                    </div>

                    <br />

                    <div class="row">
                        <div class="col-md-12">
                            <input class="hidden" type="text" name="captcha" id="captcha" value="" /><!-- keep it hidden -->
                            <input type="submit" value="Envíanos un mensaje" class="btn btn-primary btn-lg" id="contact_submit" />
                        </div>
                    </div>
                </form>

            </div>
            <!-- /FORM -->


            <!-- INFO -->
            <div class="col-md-3">

                <h2>Visit Us</h2>

                <div id="gmap" class="grayscale"><!-- google map --></div>
                <script type="text/javascript">
                    var $googlemap_latitude = -37.812344,
                            $googlemap_longitude = 144.968900,
                            $googlemap_zoom = 13;
                </script>

                <p class="nomargin-bottom margin-top30">
                    <span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> Street Name, City, Country</span>
                    <span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-555-1234">1800-555-1234</a></span>
                    <span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">mail@yourdomain.com</a></span>
                </p>

                <div class="divider half-margins"><!-- divider --></div>

                <h4 class="font300">Business Hours</h4>
                <p>
                    <span class="block"><strong>Monday - Friday:</strong> 10am to 6pm</span>
                    <span class="block"><strong>Saturday:</strong> 10am to 2pm</span>
                    <span class="block"><strong>Sunday:</strong> Closed</span>
                </p>


            </div>
            <!-- /INFO -->

        </div>

    </div>
</section>
<!-- /CONTENT -->

@stop