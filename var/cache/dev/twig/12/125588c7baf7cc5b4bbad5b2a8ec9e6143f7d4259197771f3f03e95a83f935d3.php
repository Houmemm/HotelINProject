<?php

/* @MyAppUser/layout.html.twig */
class __TwigTemplate_b7f79731f14dc9eb31eb9ae1596a9b08eb72e4aa11f26622ff712e2fd24e5081 extends Twig_Template
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
        $__internal_64858e91e1a3bb0791262cecc49809a173183a44f6ff274e2eda9974493d2ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64858e91e1a3bb0791262cecc49809a173183a44f6ff274e2eda9974493d2ee5->enter($__internal_64858e91e1a3bb0791262cecc49809a173183a44f6ff274e2eda9974493d2ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MyAppUser/layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index.html"), "html", null, true);
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
                                <li class=\"top-user-area-avatar\">
                                    <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile.html"), "html", null, true);
        echo "\">
                                        <img class=\"origin round\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/40x40.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"AMaze\" />Hi, John</a>
                                </li>
                                <li><a href=\"#\">Sign Out</a>
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
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index.html"), "html", null, true);
        echo "\">Home</a>
                        <ul>
                            <li><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index.html"), "html", null, true);
        echo "\">Default</a>
                            </li>
                            <li class=\"active\"><a  href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-1.html"), "html", null, true);
        echo "\">Layout 1</a>
                            </li>
                            <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                            </li>
                            <li><a  href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                            </li>
                            <li><a  href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                            </li>
                            <li><a  href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-5.html"), "html", null, true);
        echo "\">Layout 5</a>
                            </li>
                            <li><a  href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-6.html"), "html", null, true);
        echo "\">Layout 6</a>
                            </li>
                            <li><a  href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index-7.html"), "html", null, true);
        echo "\">Layout 7</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/success-payment.html"), "html", null, true);
        echo "\">Pages</a>
                        <ul>
                            <li><a  href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/success-payment.html"), "html", null, true);
        echo "\">Success Payment</a>
                            </li>
                            <li><a  href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile.html"), "html", null, true);
        echo "\">User Profile</a>
                                <ul>
                                    <li><a  href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile.html"), "html", null, true);
        echo "\">Overview</a>
                                    </li>
                                    <li><a  href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-settings.html"), "html", null, true);
        echo "\">Settings</a>
                                    </li>
                                    <li><a  href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-photos.html"), "html", null, true);
        echo "\">Photos</a>
                                    </li>
                                    <li><a  href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-booking-history.html"), "html", null, true);
        echo "\">Booking History</a>
                                    </li>
                                    <li><a  href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-cards.html"), "html", null, true);
        echo "\">Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/user-profile-wishlist.html"), "html", null, true);
        echo "\">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog.html"), "html", null, true);
        echo "\">Blog</a>
                                <ul>
                                    <li><a  href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog.html"), "html", null, true);
        echo "\">Sidebar Right</a>
                                    </li>
                                    <li><a  href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-sidebar-left.html"), "html", null, true);
        echo "\">Sidebar Left</a>
                                    </li>
                                    <li><a  href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-full-width.html"), "html", null, true);
        echo "\">Full Width</a>
                                    </li>
                                    <li><a  href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-post.html"), "html", null, true);
        echo "\">Post</a>
                                        <ul>
                                            <li><a  href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-post.html"), "html", null, true);
        echo "\">Sidebar Right</a>
                                            </li>
                                            <li><a  href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-post-sidebar-left.html"), "html", null, true);
        echo "\">Sidebar Left</a>
                                            </li>
                                            <li><a  href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/blog-post-full-width.html"), "html", null, true);
        echo "\">Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/404.html"), "html", null, true);
        echo "\">404 page</a>
                            </li>
                            <li><a  href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/contact-us.html"), "html", null, true);
        echo "\">Contact Us</a>
                            </li>
                            <li><a  href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/about.html"), "html", null, true);
        echo "\">About</a>
                            </li>
                            <li><a  href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/login-register.html"), "html", null, true);
        echo "\">Login/Register</a>
                                <ul>
                                    <li><a  href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/login-register.html"), "html", null, true);
        echo "\">Full Page</a>
                                    </li>
                                    <li><a  href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/login-register-normal.html"), "html", null, true);
        echo "\">Normal</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/loading.html"), "html", null, true);
        echo "\">Loading</a>
                            </li>
                            <li><a  href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/comming-soon.html"), "html", null, true);
        echo "\">Comming Soon</a>
                            </li>
                            <li><a  href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/gallery.html"), "html", null, true);
        echo "\">Gallery</a>
                                <ul>
                                    <li><a  href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/gallery.html"), "html", null, true);
        echo "\">4 Columns</a>
                                    </li>
                                    <li><a  href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/gallery-3-col.html"), "html", null, true);
        echo "\">3 columns</a>
                                    </li>
                                    <li><a  href=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/gallery-2-col.html"), "html", null, true);
        echo "\">2 columns</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/page-full-width.html"), "html", null, true);
        echo "\">Full Width</a>
                            </li>
                            <li><a  href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/page-sidebar-right.html"), "html", null, true);
        echo "\">Sidebar Right</a>
                            </li>
                            <li><a  href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/page-sidebar-left.html"), "html", null, true);
        echo "\">Sidebar Left</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-typography.html"), "html", null, true);
        echo "\">Features</a>
                        <ul>
                            <li><a  href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-typography.html"), "html", null, true);
        echo "\">Typography</a>
                            </li>
                            <li><a  href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-icons.html"), "html", null, true);
        echo "\">Icons</a>
                            </li>
                            <li><a  href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-forms.html"), "html", null, true);
        echo "\">Forms</a>
                            </li>
                            <li><a  href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-icon-effects.html"), "html", null, true);
        echo "\">Icon Effects</a>
                            </li>
                            <li><a  href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-elements.html"), "html", null, true);
        echo "\">Elements</a>
                            </li>
                            <li><a  href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-grid.html"), "html", null, true);
        echo "\">Grid</a>
                            </li>
                            <li><a  href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-hovers.html"), "html", null, true);
        echo "\">Hover effects</a>
                            </li>
                            <li><a  href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-lightbox.html"), "html", null, true);
        echo "\">Lightbox</a>
                            </li>
                            <li><a  href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/feature-media.html"), "html", null, true);
        echo "\">Media</a>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotels.html"), "html", null, true);
        echo "\">Hotels</a>
                        <ul>
                            <li><a  href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-details.html"), "html", null, true);
        echo "\">Details</a>
                                <ul>
                                    <li><a  href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-details.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-details-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-details-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-details-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a  href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a  href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a  href=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotels.html"), "html", null, true);
        echo "\">Results</a>
                                <ul>
                                    <li><a  href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotels.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotels-search-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotels-search-results-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotels-search-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                    <li><a  href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/hotel-search-results-5.html"), "html", null, true);
        echo "\">Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights.html"), "html", null, true);
        echo "\">Flights</a>
                        <ul>
                            <li><a  href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a  href=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a  href=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a  href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flight-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights.html"), "html", null, true);
        echo "\">List</a>
                                <ul>
                                    <li><a  href=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights-search-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights-search-results-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/flights-search-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals.html"), "html", null, true);
        echo "\">Rentals</a>
                        <ul>
                            <li><a  href=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-details.html"), "html", null, true);
        echo "\">Details</a>
                                <ul>
                                    <li><a  href=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-details.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-details-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-details-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rental-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a  href=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rental-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a  href=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rental-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rental-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a  href=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals.html"), "html", null, true);
        echo "\">Results</a>
                                <ul>
                                    <li><a  href=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-results-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                    <li><a  href=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/rentals-search-results-5.html"), "html", null, true);
        echo "\">Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars.html"), "html", null, true);
        echo "\">Cars</a>
                        <ul>
                            <li><a  href=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-details.html"), "html", null, true);
        echo "\">Details</a>
                            </li>
                            <li><a  href=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a  href=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a  href=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a  href=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/car-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars.html"), "html", null, true);
        echo "\"> Results</a>
                                <ul>
                                    <li><a  href=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars.html"), "html", null, true);
        echo "\"> Layout 1</a>
                                    </li>
                                    <li><a  href=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars-results-3.html"), "html", null, true);
        echo "\"> Layout 3</a>
                                    </li>
                                    <li><a href=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                    <li><a href=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/cars-results-5.html"), "html", null, true);
        echo "\"> Layout 5</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a  href=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities.html"), "html", null, true);
        echo "\"> Activities</a>
                        <ul>
                            <li><a href=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-details.html"), "html", null, true);
        echo "\">Details</a>
                                <ul>
                                    <li><a href=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-details.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a href=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-details-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a href=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-details-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activity-search.html"), "html", null, true);
        echo "\">Search</a>
                                <ul>
                                    <li><a href=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activity-search.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a href=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activity-search-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-payment.html"), "html", null, true);
        echo "\">Payment</a>
                                <ul>
                                    <li><a href=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-payment.html"), "html", null, true);
        echo "\">Registered</a>
                                    </li>
                                    <li><a href=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activity-payment-registered-card.html"), "html", null, true);
        echo "\">Existed Cards</a>
                                    </li>
                                    <li><a href=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activitiy-payment-unregistered.html"), "html", null, true);
        echo "\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities.html"), "html", null, true);
        echo "\">Results</a>
                                <ul>
                                    <li><a href=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities.html"), "html", null, true);
        echo "\">Layout 1</a>
                                    </li>
                                    <li><a href=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities-search-results-2.html"), "html", null, true);
        echo "\">Layout 2</a>
                                    </li>
                                    <li><a href=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities-search-results-3.html"), "html", null, true);
        echo "\">Layout 3</a>
                                    </li>
                                    <li><a href=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/activities-search-results-4.html"), "html", null, true);
        echo "\">Layout 4</a>
                                    </li>
                                    <li><a href=\"";
        // line 399
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
        // line 411
        $this->displayBlock('video', $context, $blocks);
        // line 867
        echo "    <div class=\"gap\"></div>


    <footer id=\"main-footer\">
        <div class=\"container\">
            <div class=\"row row-wrap\">
                <div class=\"col-md-3\">
                    <a class=\"logo\" href=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 875
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
        // line 938
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 939
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 940
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/slimmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 941
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 942
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 943
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 944
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/dropit.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/ionrangeslider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/icheck.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/jquery.js"), "html", null, true);
        echo "js/fotorama.js\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false\"></script>
    <script src=\"";
        // line 949
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/typeahead.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 950
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/card-payment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 951
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/magnific.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 952
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 953
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/fitvids.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 954
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/tweet.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 955
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/countdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 956
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/gridrotator.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/js/custom.js"), "html", null, true);
        echo "\"></script>
</div>
</body>

</html>


";
        
        $__internal_64858e91e1a3bb0791262cecc49809a173183a44f6ff274e2eda9974493d2ee5->leave($__internal_64858e91e1a3bb0791262cecc49809a173183a44f6ff274e2eda9974493d2ee5_prof);

    }

    // line 411
    public function block_video($context, array $blocks = array())
    {
        $__internal_a1a50b6507b405f2bb16f20bf0b060155f1e26e4ea99029e3b506eb978403d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a50b6507b405f2bb16f20bf0b060155f1e26e4ea99029e3b506eb978403d42->enter($__internal_a1a50b6507b405f2bb16f20bf0b060155f1e26e4ea99029e3b506eb978403d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@MyAppUser/layout.html.twig"));

        // line 412
        echo "    <div class=\"top-area show-onload\">
        <div class=\"bg-holder full\">
            <div class=\"bg-mask\"></div>
            <div class=\"bg-img\" style=\"background-image:url(";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/2048x1365Gray.png"), "html", null, true);
        echo ");\"></div>

            <video class=\"bg-video hidden-sm hidden-xs\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" poster=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/video-bg.jpg"), "html", null, true);
        echo "\">
                <source src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/media/loop.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                <source src=\"";
        // line 419
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
        // line 433
        $this->displayBlock('content', $context, $blocks);
        // line 861
        echo "                </div>
            </div>
        </div>
    </div>
    <!-- END TOP AREA  -->
    ";
        
        $__internal_a1a50b6507b405f2bb16f20bf0b060155f1e26e4ea99029e3b506eb978403d42->leave($__internal_a1a50b6507b405f2bb16f20bf0b060155f1e26e4ea99029e3b506eb978403d42_prof);

    }

    // line 433
    public function block_content($context, array $blocks = array())
    {
        $__internal_e39374fc27394b37910ab2168039e8466b90323ac16405d31e8a0d776b95c70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39374fc27394b37910ab2168039e8466b90323ac16405d31e8a0d776b95c70c->enter($__internal_e39374fc27394b37910ab2168039e8466b90323ac16405d31e8a0d776b95c70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@MyAppUser/layout.html.twig"));

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
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Hotels</button>
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
        
        $__internal_e39374fc27394b37910ab2168039e8466b90323ac16405d31e8a0d776b95c70c->leave($__internal_e39374fc27394b37910ab2168039e8466b90323ac16405d31e8a0d776b95c70c_prof);

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
        return array (  1092 => 433,  1080 => 861,  1078 => 433,  1061 => 419,  1057 => 418,  1053 => 417,  1048 => 415,  1043 => 412,  1037 => 411,  1022 => 957,  1018 => 956,  1014 => 955,  1010 => 954,  1006 => 953,  1002 => 952,  998 => 951,  994 => 950,  990 => 949,  985 => 947,  981 => 946,  977 => 945,  973 => 944,  969 => 943,  965 => 942,  961 => 941,  957 => 940,  953 => 939,  949 => 938,  883 => 875,  879 => 874,  870 => 867,  868 => 411,  853 => 399,  848 => 397,  843 => 395,  838 => 393,  833 => 391,  828 => 389,  821 => 385,  816 => 383,  811 => 381,  806 => 379,  799 => 375,  794 => 373,  789 => 371,  782 => 367,  777 => 365,  772 => 363,  767 => 361,  762 => 359,  753 => 353,  748 => 351,  743 => 349,  738 => 347,  733 => 345,  728 => 343,  721 => 339,  716 => 337,  711 => 335,  704 => 331,  699 => 329,  694 => 327,  689 => 325,  684 => 323,  679 => 321,  670 => 315,  665 => 313,  660 => 311,  655 => 309,  650 => 307,  645 => 305,  638 => 301,  633 => 299,  628 => 297,  621 => 293,  616 => 291,  611 => 289,  606 => 287,  599 => 283,  594 => 281,  589 => 279,  584 => 277,  579 => 275,  570 => 269,  565 => 267,  560 => 265,  555 => 263,  550 => 261,  543 => 257,  538 => 255,  533 => 253,  526 => 249,  521 => 247,  516 => 245,  511 => 243,  506 => 241,  497 => 235,  492 => 233,  487 => 231,  482 => 229,  477 => 227,  472 => 225,  465 => 221,  460 => 219,  455 => 217,  448 => 213,  443 => 211,  438 => 209,  433 => 207,  426 => 203,  421 => 201,  416 => 199,  411 => 197,  406 => 195,  401 => 193,  394 => 189,  389 => 187,  384 => 185,  379 => 183,  374 => 181,  369 => 179,  364 => 177,  359 => 175,  354 => 173,  349 => 171,  342 => 167,  337 => 165,  332 => 163,  325 => 159,  320 => 157,  315 => 155,  310 => 153,  305 => 151,  300 => 149,  293 => 145,  288 => 143,  283 => 141,  278 => 139,  273 => 137,  268 => 135,  259 => 129,  254 => 127,  249 => 125,  244 => 123,  239 => 121,  234 => 119,  229 => 117,  224 => 115,  217 => 111,  212 => 109,  207 => 107,  202 => 105,  197 => 103,  192 => 101,  187 => 99,  182 => 97,  177 => 95,  170 => 91,  165 => 89,  160 => 87,  155 => 85,  150 => 83,  145 => 81,  140 => 79,  135 => 77,  130 => 75,  113 => 61,  109 => 60,  96 => 50,  92 => 49,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  43 => 18,  24 => 1,);
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
                        <a class=\"logo\"  href=\"{{asset('bundles/framework/index.html')}}\">
                            <img src=\"{{asset('bundles/framework/images/logo-invert.png')}}\" alt=\"Image Alternative text\" title=\"Image Title\" />
                        </a>
                    </div>
                    <div class=\"col-md-3 col-md-offset-2\">

                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"top-user-area clearfix\">
                            <ul class=\"top-user-area-list list list-horizontal list-border\">
                                <li class=\"top-user-area-avatar\">
                                    <a href=\"{{asset('bundles/framework/user-profile.html')}}\">
                                        <img class=\"origin round\" src=\"{{asset('bundles/framework/images/40x40.png')}}\" alt=\"Image Alternative text\" title=\"AMaze\" />Hi, John</a>
                                </li>
                                <li><a href=\"#\">Sign Out</a>
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
                    <li><a  href=\"{{asset('bundles/framework/hotels.html')}}\">Hotels</a>
                        <ul>
                            <li><a  href=\"{{asset('bundles/framework/hotel-details.html')}}\">Details</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-details.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-details-2.html')}}\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-details-3.html')}}\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-details-4.html')}}\">Layout 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/hotel-payment.html')}}\">Payment</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-payment.html')}}\">Registered</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-payment-registered-card.html')}}\">Existed Cards</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-payment-unregistered.html')}}\">Unregistered</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/hotel-search.html')}}\">Search</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-search.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-search-2.html')}}\">Layout 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a  href=\"{{asset('bundles/framework/hotels.html')}}\">Results</a>
                                <ul>
                                    <li><a  href=\"{{asset('bundles/framework/hotels.html')}}\">Layout 1</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotels-search-results-2.html')}}\">Layout 2</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotels-search-results-3.html')}}\">Layout 3</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotels-search-results-4.html')}}\">Layout 4</a>
                                    </li>
                                    <li><a  href=\"{{asset('bundles/framework/hotel-search-results-5.html')}}\">Layout 5</a>
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
                                        <button class=\"btn btn-primary btn-lg\" type=\"submit\">Search for Hotels</button>
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


", "@MyAppUser/layout.html.twig", "C:\\wamp64\\www\\HolidaysIN\\src\\MyApp\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
