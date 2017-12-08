<?php

/* @MyAppUser/layout.html.twig */
class __TwigTemplate_02d22b0f8992a87f9b57ac06cebfbd869124877ffe7fac5c027b16010bed85ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'video' => array($this, 'block_video'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d517edf66140454e585757c31b116ca357e49ce6878420680dba4ae9331a62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d517edf66140454e585757c31b116ca357e49ce6878420680dba4ae9331a62d->enter($__internal_0d517edf66140454e585757c31b116ca357e49ce6878420680dba4ae9331a62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyAppUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Index 1</title>


    <meta content=\"text/html;charset=utf-8\" http-equiv=\"Content-Type\">
    <meta name=\"keywords\" content=\"Template, html, premium, themeforest\" />
    <meta name=\"description\" content=\"Traveler - Premium template for travel companies\">
    <meta name=\"author\" content=\"Tsoy\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/mystyles.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/modernizr.js"), "html", null, true);
        echo "\"></script>


</head>

<body>

<!-- FACEBOOK WIDGET -->
<div id=\"fb-root\"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- /FACEBOOK WIDGET -->
<div class=\"global-wrap\">
    <header id=\"main-header\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <a class=\"logo\"  href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://localhost:8083/HolidaysIN-le-mien/web/app_dev.php/"), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                        </a>
                    </div>
                    <div class=\"col-md-3 col-md-offset-2\">

                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"top-user-area clearfix\">
                            <ul class=\"top-user-area-list list list-horizontal list-border\">
                                <li><a href=\"/HolidaysIN-le-mien/web/app_dev.php/login\">connexion </a>  </li>
                                <li><a href=\"/HolidaysIN-le-mien/web/app_dev.php/login\">S'inscrire</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"nav\">
                <ul class=\"slimmenu\" id=\"slimmenu\">
                    <li class=\"active\"><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index.html"), "html", null, true);
        echo "\">Home</a>
                        <ul>
                            <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index.html"), "html", null, true);
        echo "\">Default</a>
                            </li>
                            <li class=\"active\"><a  href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-1.html"), "html", null, true);
        echo "\">Layout 1</a>
                            </li>
                            <li><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                            </li>
                            <li><a  href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                            </li>
                            <li><a  href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                            </li>
                            <li><a  href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-5.html"), "html", null, true);
        echo "\">Layout 5</a>
                            </li>
                            <li><a  href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-6.html"), "html", null, true);
        echo "\">Layout 6</a>
                            </li>
                            <li><a  href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-7.html"), "html", null, true);
        echo "\">Layout 7</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/success-payment.html"), "html", null, true);
        echo "\">Pages</a>
                        <ul>
                            <li><a  href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/success-payment.html"), "html", null, true);
        echo "\">Success Payment</a>
                            </li>
                            <li><a  href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile.html"), "html", null, true);
        echo "\">User Profile</a>
                                <ul>
                                    <li><a  href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile.html"), "html", null, true);
        echo "\">Overview</a>
                                    </li>
                                    <li><a  href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-settings.html"), "html", null, true);
        echo "\">Settings</a>
                                    </li>
                                    <li><a  href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-photos.html"), "html", null, true);
        echo "\">Photos</a>
                                    </li>
                                    <li><a  href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-booking-history.html"), "html", null, true);
        echo "\">Booking History</a>
                                    </li>
                                    <li><a  href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-cards.html"), "html", null, true);
        echo "\">Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-wishlist.html"), "html", null, true);
        echo "\">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog.html"), "html", null, true);
        echo "\">Blog</a>
                                <ul>
                                    <li><a  href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog.html"), "html", null, true);
        echo "\">Sidebar Right</a>
                                    </li>
                                    <li><a  href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-sidebar-left.html"), "html", null, true);
        echo "\">Sidebar Left</a>
                                    </li>
                                    <li><a  href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-full-width.html"), "html", null, true);
        echo "\">Full Width</a>
                                    </li>
                                    <li><a  href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-post.html"), "html", null, true);
        echo "\">Post</a>
                                        <ul>
                                            <li><a  href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-post.html"), "html", null, true);
        echo "\">Sidebar Right</a>
                                            </li>
                                            <li><a  href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-post-sidebar-left.html"), "html", null, true);
        echo "\">Sidebar Left</a>
                                            </li>
                                            <li><a  href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-post-full-width.html"), "html", null, true);
        echo "\">Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/404.html"), "html", null, true);
        echo "\">404 page</a>
                            </li>
                            <li><a  href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/contact-us.html"), "html", null, true);
        echo "\">Contact Us</a>
                            </li>
                            <li><a  href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/about.html"), "html", null, true);
        echo "\">About</a>
                            </li>
                            <li><a  href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/login-register.html"), "html", null, true);
        echo "\">Login/Register</a>
                                <ul>
                                    <li><a  href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/login-register.html"), "html", null, true);
        echo "\">Full Page</a>
                                    </li>
                                    <li><a  href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/login-register-normal.html"), "html", null, true);
        echo "\">Normal</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/loading.html"), "html", null, true);
        echo "\">Loading</a>
                            </li>
                            <li><a  href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/comming-soon.html"), "html", null, true);
        echo "\">Comming Soon</a>
                            </li>
                            <li><a  href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/gallery.html"), "html", null, true);
        echo "\">Gallery</a>
                                <ul>
                                    <li><a  href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/gallery.html"), "html", null, true);
        echo "\">4 Columns</a>
                                    </li>
                                    <li><a  href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/gallery-3-col.html"), "html", null, true);
        echo "\">3 columns</a>
                                    </li>
                                    <li><a  href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/gallery-2-col.html"), "html", null, true);
        echo "\">2 columns</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/page-full-width.html"), "html", null, true);
        echo "\">Full Width</a>
                            </li>
                            <li><a  href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/page-sidebar-right.html"), "html", null, true);
        echo "\">Sidebar Right</a>
                            </li>
                            <li><a  href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/page-sidebar-left.html"), "html", null, true);
        echo "\">Sidebar Left</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-typography.html"), "html", null, true);
        echo "\">Features</a>
                        <ul>
                            <li><a  href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-typography.html"), "html", null, true);
        echo "\">Typography</a>
                            </li>
                            <li><a  href=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-icons.html"), "html", null, true);
        echo "\">Icons</a>
                            </li>
                            <li><a  href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-forms.html"), "html", null, true);
        echo "\">Forms</a>
                            </li>
                            <li><a  href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-icon-effects.html"), "html", null, true);
        echo "\">Icon Effects</a>
                            </li>
                            <li><a  href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-elements.html"), "html", null, true);
        echo "\">Elements</a>
                            </li>
                            <li><a  href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-grid.html"), "html", null, true);
        echo "\">Grid</a>
                            </li>
                            <li><a  href=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-hovers.html"), "html", null, true);
        echo "\">Hover effects</a>
                            </li>
                            <li><a  href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-lightbox.html"), "html", null, true);
        echo "\">Lightbox</a>
                            </li>
                            <li><a  href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-media.html"), "html", null, true);
        echo "\">Media</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hotel_diplayAll");
        echo "\">Hotels</a>
                        <ul>
                            <li><a  href=\"";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hotel_add");
        echo "\"> Hotel </a>
                                <ul>
                                    <li><a  href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_hotel");
        echo "\">rechercher</a>
                                    </li>
                                    <li><a  href=\"";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hotel_add");
        echo "\">ajouter</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a   href=\"";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ShowAll_chambre");
        echo "\"> chambre</a>
                                <ul>
                                    <li><a  href=\"";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_chambre");
        echo "\">ajouter</a>
                                    </li>
                                    <li><a  href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ShowAll_chambre");
        echo "\">Afficher</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a   href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ShowAll_reservationHotel");
        echo "\">reservation</a>
                                <ul>
                                    <li><a   href=\"";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esprit_hotel_diplay");
        echo "\">liste des hotels</a>
                                    </li>
                                    <li><a   href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_reservationHotel");
        echo "\">resrever </a>
                                    </li>
                                    <li><a   href=\"";
        // line 216
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ShowAll_reservationHotel");
        echo "\">afficher les reservations</a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights.html"), "html", null, true);
        echo "\">Flights</a>
                        <ul>
                            <li><a  href=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a  href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a  href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a  href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights.html"), "html", null, true);
        echo "\">List</a>
                                <ul>
                                    <li><a  href=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights-search-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights-search-results-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights-search-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals.html"), "html", null, true);
        echo "\">Rentals</a>
                        <ul>
                            <li><a  href=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-details.html"), "html", null, true);
        echo "\">Details</a>
                                <ul>
                                    <li><a  href=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-details.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-details-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-details-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rental-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a  href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rental-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a  href=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rental-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rental-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a  href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals.html"), "html", null, true);
        echo "\">Results</a>
                                <ul>
                                    <li><a  href=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-results-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                    <li><a  href=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-results-5.html"), "html", null, true);
        echo "\">Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars.html"), "html", null, true);
        echo "\">Cars</a>
                        <ul>
                            <li><a  href=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-details.html"), "html", null, true);
        echo "\">Details</a>
                            </li>
                            <li><a  href=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a  href=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a  href=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a  href=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars.html"), "html", null, true);
        echo "\"> Results</a>
                                <ul>
                                    <li><a  href=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars.html"), "html", null, true);
        echo "\"> Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars-results-3.html"), "html", null, true);
        echo "\"> Layout 3</a>
                                    </li>
                                    <li><a href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                    <li><a href=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars-results-5.html"), "html", null, true);
        echo "\"> Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities.html"), "html", null, true);
        echo "\"> Activities</a>
                        <ul>
                            <li><a href=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-details.html"), "html", null, true);
        echo "\">Details</a>
                                <ul>
                                    <li><a href=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-details.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a href=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-details-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a href=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-details-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activity-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a href=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activity-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a href=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activity-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a href=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a href=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activity-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a href=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities.html"), "html", null, true);
        echo "\">Results</a>
                                <ul>
                                    <li><a href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a href=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities-search-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a href=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities-search-results-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                    <li><a href=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities-search-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                    <li><a href=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities-search-results-5.html"), "html", null, true);
        echo "\">Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- TOP AREA -->
    ";
        // line 394
        $this->displayBlock('video', $context, $blocks);
        // line 850
        echo "    <div class=\"gap\"></div>


    <footer id=\"main-footer\">
        <div class=\"container\">
            <div class=\"row row-wrap\">
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 858
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                    </a>
                    <p class=\"mb20\">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                    <ul class=\"list list-horizontal list-space\">
                        <li>
                            <a class=\"fa fa-facebook box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                        <li>
                            <a class=\"fa fa-twitter box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                        <li>
                            <a class=\"fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                        <li>
                            <a class=\"fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                        <li>
                            <a class=\"fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-md-3\">
                    <h4>Newsletter</h4>
                    <form>
                        <label>Enter your E-mail Address</label>
                        <input type=\"text\" class=\"form-control\">
                        <p class=\"mt5\"><small>*We Never Send Spam</small>
                        </p>
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Subscribe\">
                    </form>
                </div>
                <div class=\"col-md-2\">
                    <ul class=\"list list-footer\">
                        <li><a href=\"#\">About US</a>
                        </li>
                        <li><a href=\"#\">Press Centre</a>
                        </li>
                        <li><a href=\"#\">Best Price Guarantee</a>
                        </li>
                        <li><a href=\"#\">Travel News</a>
                        </li>
                        <li><a href=\"#\">Jobs</a>
                        </li>
                        <li><a href=\"#\">Privacy Policy</a>
                        </li>
                        <li><a href=\"#\">Terms of Use</a>
                        </li>
                        <li><a href=\"#\">Feedback</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h4>Have Questions?</h4>
                    <h4 class=\"text-color\">+1-202-555-0173</h4>
                    <h4><a href=\"#\" class=\"text-color\">support@traveler.com</a></h4>
                    <p>24/7 Dedicated Customer Support</p>
                </div>

            </div>
        </div>
    </footer>

    <script src=\"";
        // line 921
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 922
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 923
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/slimmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 925
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 926
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 927
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/dropit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 928
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/ionrangeslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 929
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/icheck.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 930
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery.js"), "html", null, true);
        echo "js/fotorama.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
    <script src=\"";
        // line 932
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/typeahead.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 933
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/card-payment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 934
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/magnific.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 935
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 936
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/fitvids.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 937
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/tweet.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 938
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/countdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 939
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/gridrotator.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 940
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/custom.js"), "html", null, true);
        echo "\"></script>
</div>
</body>

</html>


";
        
        $__internal_0d517edf66140454e585757c31b116ca357e49ce6878420680dba4ae9331a62d->leave($__internal_0d517edf66140454e585757c31b116ca357e49ce6878420680dba4ae9331a62d_prof);

    }

    // line 394
    public function block_video($context, array $blocks = array())
    {
        $__internal_6b8ee9605fbce0bea82fc99364b0fdc3b042ae9e5b4116804537df36f6c83013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8ee9605fbce0bea82fc99364b0fdc3b042ae9e5b4116804537df36f6c83013->enter($__internal_6b8ee9605fbce0bea82fc99364b0fdc3b042ae9e5b4116804537df36f6c83013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@MyAppUser/layout.html.twig"));

        // line 395
        echo "    <div class=\"top-area show-onload\">
        <div class=\"bg-holder full\">
            <div class=\"bg-mask\"></div>
            <div class=\"bg-img\" style=\"background-image:url(";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/2048x1365Gray.png"), "html", null, true);
        echo ");\"></div>

            <video class=\"bg-video hidden-sm hidden-xs\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" poster=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/video-bg.jpg"), "html", null, true);
        echo "\">
                <source src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/media/loop.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                <source src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/media/loop.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
            </video>

            <div class=\"bg-content\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-md-offset-7\">
                            }
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"bg-front full-height\">
                <div class=\"container rel full-height\">
                    ";
        // line 416
        $this->displayBlock('content', $context, $blocks);
        // line 844
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- END TOP AREA  -->
    ";
        
        $__internal_6b8ee9605fbce0bea82fc99364b0fdc3b042ae9e5b4116804537df36f6c83013->leave($__internal_6b8ee9605fbce0bea82fc99364b0fdc3b042ae9e5b4116804537df36f6c83013_prof);

    }

    // line 416
    public function block_content($context, array $blocks = array())
    {
        $__internal_78d743009545f41a7ad77d73e98f46628d2daf2801c12fc63d023220be1b8aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d743009545f41a7ad77d73e98f46628d2daf2801c12fc63d023220be1b8aac->enter($__internal_78d743009545f41a7ad77d73e98f46628d2daf2801c12fc63d023220be1b8aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@MyAppUser/layout.html.twig"));

        echo " <div class=\"search-tabs search-tabs-bg search-tabs-bottom\">
                        <div class=\"tabbable\">
                            <ul class=\"nav nav-tabs\" id=\"myTab\">
                                <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Hotels</span></a>
                                </li>
                                <li><a href=\"#tab-2\" data-toggle=\"tab\"><i class=\"fa fa-plane\"></i> <span >Flights</span></a>
                                </li>
                                <li><a href=\"#tab-3\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i> <span >Rentals</span></a>
                                </li>
                                <li><a href=\"#tab-4\" data-toggle=\"tab\"><i class=\"fa fa-car\"></i> <span >Cars</span></a>
                                </li>
                                <li><a href=\"#tab-5\" data-toggle=\"tab\"><i class=\"fa fa-bolt\"></i> <span >Activities</span></a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                    <h2>Search and Save on Hotels</h2>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                    <label>Where are you going?</label>
                                                    <input class=\"typeahead form-control\" placeholder=\"City, Airport, Point of Interest or U.S. Zip Code\" type=\"text\" />
                                                </div>
                                            </div>
                                            <div class=\"col-md-8\">
                                                <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Check-in</label>
                                                                <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Check-out</label>
                                                                <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                <label>Rooms</label>
                                                                <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                    <label class=\"btn btn-primary active\">
                                                                        <input type=\"radio\" name=\"options\" />1</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />2</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3+</label>
                                                                </div>
                                                                <select class=\"form-control hidden\">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected=\"selected\">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                <label>Guests</label>
                                                                <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                    <label class=\"btn btn-primary active\">
                                                                        <input type=\"radio\" name=\"options\" />1</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />2</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3+</label>
                                                                </div>
                                                                <select class=\"form-control hidden\">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected=\"selected\">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\" >Search for Hotels</button>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"tab-2\">
                                    <h2>Search for Cheap Flights</h2>
                                    <form>
                                        <div class=\"tabbable\">
                                            <ul class=\"nav nav-pills nav-sm nav-no-br mb10\" id=\"flightChooseTab\">
                                                <li class=\"active\"><a href=\"#flight-search-1\" data-toggle=\"tab\">Round Trip</a>
                                                </li>
                                                <li><a href=\"#flight-search-2\" data-toggle=\"tab\">One Way</a>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content\">
                                                <div class=\"tab-pane fade in active\" id=\"flight-search-1\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-6\">
                                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                                        <label>From</label>
                                                                        <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-6\">
                                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                                        <label>To</label>
                                                                        <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                            <label>Departing</label>
                                                                            <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                            <label>Returning</label>
                                                                            <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                            <label>Passngers</label>
                                                                            <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                                <label class=\"btn btn-primary active\">
                                                                                    <input type=\"radio\" name=\"options\" />1</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />2</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />3</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />3+</label>
                                                                            </div>
                                                                            <select class=\"form-control hidden\">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option selected=\"selected\">4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"flight-search-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-6\">
                                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                                        <label>From</label>
                                                                        <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-6\">
                                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                                        <label>To</label>
                                                                        <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                            <label>Departing</label>
                                                                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\" />
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                            <label>Passngers</label>
                                                                            <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                                <label class=\"btn btn-primary active\">
                                                                                    <input type=\"radio\" name=\"options\" />1</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />2</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />3</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />3+</label>
                                                                            </div>
                                                                            <select class=\"form-control hidden\">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option selected=\"selected\">4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Flights</button>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"tab-3\">
                                    <h2>Find Your Perfect Home</h2>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                    <label>Where are you going?</label>
                                                    <input class=\"typeahead form-control\" placeholder=\"City, Airport, Point of Interest or U.S. Zip Code\" type=\"text\" />
                                                </div>
                                            </div>
                                            <div class=\"col-md-8\">
                                                <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Check-in</label>
                                                                <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Check-out</label>
                                                                <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                <label>Rooms</label>
                                                                <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                    <label class=\"btn btn-primary active\">
                                                                        <input type=\"radio\" name=\"options\" />1</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />2</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3+</label>
                                                                </div>
                                                                <select class=\"form-control hidden\">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected=\"selected\">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                <label>Guests</label>
                                                                <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                    <label class=\"btn btn-primary active\">
                                                                        <input type=\"radio\" name=\"options\" />1</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />2</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3+</label>
                                                                </div>
                                                                <select class=\"form-control hidden\">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected=\"selected\">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Vacation Rentals</button>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"tab-4\">
                                    <h2>Search for Cheap Rental Cars</h2>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                            <label>Pick-up Location</label>
                                                            <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                            <label>Drop-off Location</label>
                                                            <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Pick-up Date</label>
                                                                <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Drop-ff Date</label>
                                                                <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Rental Cars</button>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"tab-5\">
                                    <h2>Search for Activities</h2>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                    <label>Where are you going?</label>
                                                    <input class=\"typeahead form-control\" placeholder=\"City, Airport, Point of Interest or U.S. Zip Code\" type=\"text\" />
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>From</label>
                                                                <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>To</label>
                                                                <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Activities</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> ";
        
        $__internal_78d743009545f41a7ad77d73e98f46628d2daf2801c12fc63d023220be1b8aac->leave($__internal_78d743009545f41a7ad77d73e98f46628d2daf2801c12fc63d023220be1b8aac_prof);

    }

    public function getTemplateName()
    {
        return "@MyAppUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1045 => 416,  1033 => 844,  1031 => 416,  1014 => 402,  1010 => 401,  1006 => 400,  1001 => 398,  996 => 395,  990 => 394,  975 => 940,  971 => 939,  967 => 938,  963 => 937,  959 => 936,  955 => 935,  951 => 934,  947 => 933,  943 => 932,  938 => 930,  934 => 929,  930 => 928,  926 => 927,  922 => 926,  918 => 925,  914 => 924,  910 => 923,  906 => 922,  902 => 921,  836 => 858,  832 => 857,  823 => 850,  821 => 394,  806 => 382,  801 => 380,  796 => 378,  791 => 376,  786 => 374,  781 => 372,  774 => 368,  769 => 366,  764 => 364,  759 => 362,  752 => 358,  747 => 356,  742 => 354,  735 => 350,  730 => 348,  725 => 346,  720 => 344,  715 => 342,  706 => 336,  701 => 334,  696 => 332,  691 => 330,  686 => 328,  681 => 326,  674 => 322,  669 => 320,  664 => 318,  657 => 314,  652 => 312,  647 => 310,  642 => 308,  637 => 306,  632 => 304,  623 => 298,  618 => 296,  613 => 294,  608 => 292,  603 => 290,  598 => 288,  591 => 284,  586 => 282,  581 => 280,  574 => 276,  569 => 274,  564 => 272,  559 => 270,  552 => 266,  547 => 264,  542 => 262,  537 => 260,  532 => 258,  523 => 252,  518 => 250,  513 => 248,  508 => 246,  503 => 244,  496 => 240,  491 => 238,  486 => 236,  479 => 232,  474 => 230,  469 => 228,  464 => 226,  459 => 224,  448 => 216,  443 => 214,  438 => 212,  433 => 210,  425 => 205,  420 => 203,  415 => 201,  407 => 196,  402 => 194,  397 => 192,  392 => 190,  385 => 186,  380 => 184,  375 => 182,  370 => 180,  365 => 178,  360 => 176,  355 => 174,  350 => 172,  345 => 170,  340 => 168,  333 => 164,  328 => 162,  323 => 160,  316 => 156,  311 => 154,  306 => 152,  301 => 150,  296 => 148,  291 => 146,  284 => 142,  279 => 140,  274 => 138,  269 => 136,  264 => 134,  259 => 132,  250 => 126,  245 => 124,  240 => 122,  235 => 120,  230 => 118,  225 => 116,  220 => 114,  215 => 112,  208 => 108,  203 => 106,  198 => 104,  193 => 102,  188 => 100,  183 => 98,  178 => 96,  173 => 94,  168 => 92,  161 => 88,  156 => 86,  151 => 84,  146 => 82,  141 => 80,  136 => 78,  131 => 76,  126 => 74,  121 => 72,  96 => 50,  92 => 49,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  43 => 18,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Index 1</title>


    <meta content=\"text/html;charset=utf-8\" http-equiv=\"Content-Type\">
    <meta name=\"keywords\" content=\"Template, html, premium, themeforest\" />
    <meta name=\"description\" content=\"Traveler - Premium template for travel companies\">
    <meta name=\"author\" content=\"Tsoy\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel=\"stylesheet\" href=\"{{asset('bundles/framework/css/bootstrap.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('bundles/framework/css/font-awesome.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('bundles/framework/css/icomoon.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('bundles/framework/css/styles.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('bundles/framework/css/mystyles.css')}}\">
    <script src=\"{{asset('bundles/framework/js/modernizr.js')}}\"></script>


</head>

<body>

<!-- FACEBOOK WIDGET -->
<div id=\"fb-root\"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- /FACEBOOK WIDGET -->
<div class=\"global-wrap\">
    <header id=\"main-header\">
        <div class=\"header-top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <a class=\"logo\"  href=\"{{asset('http://localhost:8083/HolidaysIN-le-mien/web/app_dev.php/')}}\">
                            <img src=\"{{asset('bundles/framework/images/logo-invert.png')}}\" alt=\"Image Alternative text\" title=\"Image Title\" />
                        </a>
                    </div>
                    <div class=\"col-md-3 col-md-offset-2\">

                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"top-user-area clearfix\">
                            <ul class=\"top-user-area-list list list-horizontal list-border\">
                                <li><a href=\"/HolidaysIN-le-mien/web/app_dev.php/login\">connexion </a>  </li>
                                <li><a href=\"/HolidaysIN-le-mien/web/app_dev.php/login\">S'inscrire</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"nav\">
                <ul class=\"slimmenu\" id=\"slimmenu\">
                    <li class=\"active\"><a href=\"{{asset('bundles/framework/index.html')}}\">Home</a>
                        <ul>
                            <li><a href=\"{{asset('bundles/framework/index.html')}}\">Default</a>
                            </li>
                            <li class=\"active\"><a  href=\"{{asset('bundles/framework/index-1.html')}}\">Layout 1</a>
                            </li>
                            <li><a href=\"{{asset('bundles/framework/index-2.html')}}\">Layout 2</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/index-3.html')}}\">Layout 3</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/index-4.html')}}\">Layout 4</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/index-5.html')}}\">Layout 5</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/index-6.html')}}\">Layout 6</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/index-7.html')}}\">Layout 7</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"{{asset('bundles/framework/success-payment.html')}}\">Pages</a>
                        <ul>
                            <li><a  href=\"{{asset('bundles/framework/success-payment.html')}}\">Success Payment</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/user-profile.html')}}\">User Profile</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/user-profile.html')}}\">Overview</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/user-profile-settings.html')}}\">Settings</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/user-profile-photos.html')}}\">Photos</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/user-profile-booking-history.html')}}\">Booking History</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/user-profile-cards.html')}}\">Cards</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/user-profile-wishlist.html')}}\">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/blog.html')}}\">Blog</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/blog.html')}}\">Sidebar Right</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/blog-sidebar-left.html')}}\">Sidebar Left</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/blog-full-width.html')}}\">Full Width</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/blog-post.html')}}\">Post</a>
                                        <ul>
                                            <li><a  href=\"{{asset('bundles/framework/blog-post.html')}}\">Sidebar Right</a>
                                            </li>
                                            <li><a  href=\"{{asset('bundles/framework/blog-post-sidebar-left.html')}}\">Sidebar Left</a>
                                            </li>
                                            <li><a  href=\"{{asset('bundles/framework/blog-post-full-width.html')}}\">Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/404.html')}}\">404 page</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/contact-us.html')}}\">Contact Us</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/about.html')}}\">About</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/login-register.html')}}\">Login/Register</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/login-register.html')}}\">Full Page</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/login-register-normal.html')}}\">Normal</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/loading.html')}}\">Loading</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/comming-soon.html')}}\">Comming Soon</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/gallery.html')}}\">Gallery</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/gallery.html')}}\">4 Columns</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/gallery-3-col.html')}}\">3 columns</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/gallery-2-col.html')}}\">2 columns</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/page-full-width.html')}}\">Full Width</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/page-sidebar-right.html')}}\">Sidebar Right</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/page-sidebar-left.html')}}\">Sidebar Left</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"{{asset('bundles/framework/feature-typography.html')}}\">Features</a>
                        <ul>
                            <li><a  href=\"{{asset('bundles/framework/feature-typography.html')}}\">Typography</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/feature-icons.html')}}\">Icons</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/feature-forms.html')}}\">Forms</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/feature-icon-effects.html')}}\">Icon Effects</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/feature-elements.html')}}\">Elements</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/feature-grid.html')}}\">Grid</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/feature-hovers.html')}}\">Hover effects</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/feature-lightbox.html')}}\">Lightbox</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/feature-media.html')}}\">Media</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"{{path('esprit_hotel_diplayAll')}}\">Hotels</a>
                        <ul>
                            <li><a  href=\"{{path('esprit_hotel_add')}}\"> Hotel </a>
                                <ul>
                                    <li><a  href=\"{{path('list_hotel')}}\">rechercher</a>
                                    </li>
                                    <li><a  href=\"{{path('esprit_hotel_add')}}\">ajouter</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a   href=\"{{path('ShowAll_chambre')}}\"> chambre</a>
                                <ul>
                                    <li><a  href=\"{{path('add_chambre')}}\">ajouter</a>
                                    </li>
                                    <li><a  href=\"{{path('ShowAll_chambre')}}\">Afficher</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a   href=\"{{path('ShowAll_reservationHotel')}}\">reservation</a>
                                <ul>
                                    <li><a   href=\"{{path('esprit_hotel_diplay')}}\">liste des hotels</a>
                                    </li>
                                    <li><a   href=\"{{path('add_reservationHotel')}}\">resrever </a>
                                    </li>
                                    <li><a   href=\"{{path('ShowAll_reservationHotel')}}\">afficher les reservations</a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li><a  href=\"{{asset('bundles/framework/flights.html')}}\">Flights</a>
                        <ul>
                            <li><a  href=\"{{asset('bundles/framework/flight-payment.html')}}\">Payment</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/flight-payment.html')}}\">Registered</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/flight-payment-registered-card.html')}}\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/flight-payment-unregistered.html')}}\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/flight-search.html')}}\">Search</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/flight-search.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/flight-search-2.html')}}\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/flights.html')}}\">List</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/flights.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/flights-search-results-2.html')}}\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/flights-search-results-3.html')}}\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/flights-search-results-4.html')}}\">Layout 4</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"{{asset('bundles/framework/rentals.html')}}\">Rentals</a>
                        <ul>
                            <li><a  href=\"{{asset('bundles/framework/rentals-details.html')}}\">Details</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-details.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-details-2.html')}}\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-details-3.html')}}\">Layout 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/rental-payment.html')}}\">Payment</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/rental-payment.html')}}\">Registered</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rental-payment-registered-card.html')}}\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rental-payment-unregistered.html')}}\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/rentals-search.html')}}\">Search</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-search.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-search-2.html')}}\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/rentals.html')}}\">Results</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/rentals.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-search-results-2.html')}}\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-search-results-3.html')}}\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-search-results-4.html')}}\">Layout 4</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/rentals-search-results-5.html')}}\">Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"{{asset('bundles/framework/cars.html')}}\">Cars</a>
                        <ul>
                            <li><a  href=\"{{asset('bundles/framework/car-details.html')}}\">Details</a>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/car-payment.html')}}\">Payment</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/car-payment.html')}}\">Registered</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/car-payment-registered-card.html')}}\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/car-payment-unregistered.html')}}\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/car-search.html')}}\">Search</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/car-search.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/car-search-2.html')}}\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/cars.html')}}\"> Results</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/cars.html')}}\"> Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/cars-results-2.html')}}\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/cars-results-3.html')}}\"> Layout 3</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/cars-results-4.html')}}\">Layout 4</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/cars-results-5.html')}}\"> Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"{{asset('bundles/framework/activities.html')}}\"> Activities</a>
                        <ul>
                            <li><a href=\"{{asset('bundles/framework/activitiy-details.html')}}\">Details</a>
                                <ul>
                                    <li><a href=\"{{asset('bundles/framework/activitiy-details.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activitiy-details-2.html')}}\">Layout 2</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activitiy-details-3.html')}}\">Layout 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"{{asset('bundles/framework/activity-search.html')}}\">Search</a>
                                <ul>
                                    <li><a href=\"{{asset('bundles/framework/activity-search.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activity-search-2.html')}}\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"{{asset('bundles/framework/activitiy-payment.html')}}\">Payment</a>
                                <ul>
                                    <li><a href=\"{{asset('bundles/framework/activitiy-payment.html')}}\">Registered</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activity-payment-registered-card.html')}}\">Existed Cards</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activitiy-payment-unregistered.html')}}\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"{{asset('bundles/framework/activities.html')}}\">Results</a>
                                <ul>
                                    <li><a href=\"{{asset('bundles/framework/activities.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activities-search-results-2.html')}}\">Layout 2</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activities-search-results-3.html')}}\">Layout 3</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activities-search-results-4.html')}}\">Layout 4</a>
                                    </li>
                                    <li><a href=\"{{asset('bundles/framework/activities-search-results-5.html')}}\">Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- TOP AREA -->
    {% block video  %}
    <div class=\"top-area show-onload\">
        <div class=\"bg-holder full\">
            <div class=\"bg-mask\"></div>
            <div class=\"bg-img\" style=\"background-image:url({{asset('bundles/framework/images/2048x1365Gray.png')}});\"></div>

            <video class=\"bg-video hidden-sm hidden-xs\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" poster=\"{{asset('bundles/framework/images/video-bg.jpg')}}\">
                <source src=\"{{asset('bundles/framework/media/loop.webm')}}\" type=\"video/webm\" />
                <source src=\"{{asset('bundles/framework/media/loop.mp4')}}\" type=\"video/mp4\" />
            </video>

            <div class=\"bg-content\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5 col-md-offset-7\">
                            }
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"bg-front full-height\">
                <div class=\"container rel full-height\">
                    {% block content %} <div class=\"search-tabs search-tabs-bg search-tabs-bottom\">
                        <div class=\"tabbable\">
                            <ul class=\"nav nav-tabs\" id=\"myTab\">
                                <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Hotels</span></a>
                                </li>
                                <li><a href=\"#tab-2\" data-toggle=\"tab\"><i class=\"fa fa-plane\"></i> <span >Flights</span></a>
                                </li>
                                <li><a href=\"#tab-3\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i> <span >Rentals</span></a>
                                </li>
                                <li><a href=\"#tab-4\" data-toggle=\"tab\"><i class=\"fa fa-car\"></i> <span >Cars</span></a>
                                </li>
                                <li><a href=\"#tab-5\" data-toggle=\"tab\"><i class=\"fa fa-bolt\"></i> <span >Activities</span></a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                    <h2>Search and Save on Hotels</h2>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                    <label>Where are you going?</label>
                                                    <input class=\"typeahead form-control\" placeholder=\"City, Airport, Point of Interest or U.S. Zip Code\" type=\"text\" />
                                                </div>
                                            </div>
                                            <div class=\"col-md-8\">
                                                <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Check-in</label>
                                                                <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Check-out</label>
                                                                <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                <label>Rooms</label>
                                                                <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                    <label class=\"btn btn-primary active\">
                                                                        <input type=\"radio\" name=\"options\" />1</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />2</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3+</label>
                                                                </div>
                                                                <select class=\"form-control hidden\">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected=\"selected\">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                <label>Guests</label>
                                                                <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                    <label class=\"btn btn-primary active\">
                                                                        <input type=\"radio\" name=\"options\" />1</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />2</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3+</label>
                                                                </div>
                                                                <select class=\"form-control hidden\">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected=\"selected\">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\" >Search for Hotels</button>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"tab-2\">
                                    <h2>Search for Cheap Flights</h2>
                                    <form>
                                        <div class=\"tabbable\">
                                            <ul class=\"nav nav-pills nav-sm nav-no-br mb10\" id=\"flightChooseTab\">
                                                <li class=\"active\"><a href=\"#flight-search-1\" data-toggle=\"tab\">Round Trip</a>
                                                </li>
                                                <li><a href=\"#flight-search-2\" data-toggle=\"tab\">One Way</a>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content\">
                                                <div class=\"tab-pane fade in active\" id=\"flight-search-1\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-6\">
                                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                                        <label>From</label>
                                                                        <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-6\">
                                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                                        <label>To</label>
                                                                        <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                            <label>Departing</label>
                                                                            <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                            <label>Returning</label>
                                                                            <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                            <label>Passngers</label>
                                                                            <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                                <label class=\"btn btn-primary active\">
                                                                                    <input type=\"radio\" name=\"options\" />1</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />2</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />3</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />3+</label>
                                                                            </div>
                                                                            <select class=\"form-control hidden\">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option selected=\"selected\">4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"tab-pane fade\" id=\"flight-search-2\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-6\">
                                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                                        <label>From</label>
                                                                        <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-md-6\">
                                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                                        <label>To</label>
                                                                        <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                            <label>Departing</label>
                                                                            <input class=\"date-pick form-control\" data-date-format=\"M d, D\" type=\"text\" />
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-md-4\">
                                                                        <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                            <label>Passngers</label>
                                                                            <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                                <label class=\"btn btn-primary active\">
                                                                                    <input type=\"radio\" name=\"options\" />1</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />2</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />3</label>
                                                                                <label class=\"btn btn-primary\">
                                                                                    <input type=\"radio\" name=\"options\" />3+</label>
                                                                            </div>
                                                                            <select class=\"form-control hidden\">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option selected=\"selected\">4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                                <option>10</option>
                                                                                <option>11</option>
                                                                                <option>12</option>
                                                                                <option>13</option>
                                                                                <option>14</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Flights</button>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"tab-3\">
                                    <h2>Find Your Perfect Home</h2>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-4\">
                                                <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                    <label>Where are you going?</label>
                                                    <input class=\"typeahead form-control\" placeholder=\"City, Airport, Point of Interest or U.S. Zip Code\" type=\"text\" />
                                                </div>
                                            </div>
                                            <div class=\"col-md-8\">
                                                <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Check-in</label>
                                                                <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Check-out</label>
                                                                <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                <label>Rooms</label>
                                                                <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                    <label class=\"btn btn-primary active\">
                                                                        <input type=\"radio\" name=\"options\" />1</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />2</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3+</label>
                                                                </div>
                                                                <select class=\"form-control hidden\">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected=\"selected\">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-3\">
                                                            <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                <label>Guests</label>
                                                                <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                    <label class=\"btn btn-primary active\">
                                                                        <input type=\"radio\" name=\"options\" />1</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />2</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3</label>
                                                                    <label class=\"btn btn-primary\">
                                                                        <input type=\"radio\" name=\"options\" />3+</label>
                                                                </div>
                                                                <select class=\"form-control hidden\">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected=\"selected\">4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                    <option>13</option>
                                                                    <option>14</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Vacation Rentals</button>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"tab-4\">
                                    <h2>Search for Cheap Rental Cars</h2>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                            <label>Pick-up Location</label>
                                                            <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                            <label>Drop-off Location</label>
                                                            <input class=\"typeahead form-control\" placeholder=\"City, Airport, U.S. Zip\" type=\"text\" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Pick-up Date</label>
                                                                <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>Drop-ff Date</label>
                                                                <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Rental Cars</button>
                                    </form>
                                </div>
                                <div class=\"tab-pane fade\" id=\"tab-5\">
                                    <h2>Search for Activities</h2>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-md-8\">
                                                <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                    <label>Where are you going?</label>
                                                    <input class=\"typeahead form-control\" placeholder=\"City, Airport, Point of Interest or U.S. Zip Code\" type=\"text\" />
                                                </div>
                                            </div>
                                            <div class=\"col-md-4\">
                                                <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                    <div class=\"row\">
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>From</label>
                                                                <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-md-6\">
                                                            <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                <label>To</label>
                                                                <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Activities</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> {% endblock content %}
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP AREA  -->
    {% endblock video %}
    <div class=\"gap\"></div>


    <footer id=\"main-footer\">
        <div class=\"container\">
            <div class=\"row row-wrap\">
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"{{asset('bundles/framework/index.html')}}\">
                        <img src=\"{{asset('bundles/framework/images/logo-invert.png')}}\" alt=\"Image Alternative text\" title=\"Image Title\" />
                    </a>
                    <p class=\"mb20\">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                    <ul class=\"list list-horizontal list-space\">
                        <li>
                            <a class=\"fa fa-facebook box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                        <li>
                            <a class=\"fa fa-twitter box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                        <li>
                            <a class=\"fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                        <li>
                            <a class=\"fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                        <li>
                            <a class=\"fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                        </li>
                    </ul>
                </div>

                <div class=\"col-md-3\">
                    <h4>Newsletter</h4>
                    <form>
                        <label>Enter your E-mail Address</label>
                        <input type=\"text\" class=\"form-control\">
                        <p class=\"mt5\"><small>*We Never Send Spam</small>
                        </p>
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Subscribe\">
                    </form>
                </div>
                <div class=\"col-md-2\">
                    <ul class=\"list list-footer\">
                        <li><a href=\"#\">About US</a>
                        </li>
                        <li><a href=\"#\">Press Centre</a>
                        </li>
                        <li><a href=\"#\">Best Price Guarantee</a>
                        </li>
                        <li><a href=\"#\">Travel News</a>
                        </li>
                        <li><a href=\"#\">Jobs</a>
                        </li>
                        <li><a href=\"#\">Privacy Policy</a>
                        </li>
                        <li><a href=\"#\">Terms of Use</a>
                        </li>
                        <li><a href=\"#\">Feedback</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <h4>Have Questions?</h4>
                    <h4 class=\"text-color\">+1-202-555-0173</h4>
                    <h4><a href=\"#\" class=\"text-color\">support@traveler.com</a></h4>
                    <p>24/7 Dedicated Customer Support</p>
                </div>

            </div>
        </div>
    </footer>

    <script src=\"{{asset('bundles/framework/js/jquery.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/bootstrap.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/slimmenu.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/bootstrap-datepicker.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/bootstrap-timepicker.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/nicescroll.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/dropit.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/ionrangeslider.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/icheck.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/jquery.js')}}js/fotorama.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
    <script src=\"{{asset('bundles/framework/js/typeahead.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/card-payment.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/magnific.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/owl-carousel.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/fitvids.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/tweet.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/countdown.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/gridrotator.js')}}\"></script>
    <script src=\"{{asset('bundles/framework/js/custom.js')}}\"></script>
</div>
</body>

</html>


", "@MyAppUser/layout.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
