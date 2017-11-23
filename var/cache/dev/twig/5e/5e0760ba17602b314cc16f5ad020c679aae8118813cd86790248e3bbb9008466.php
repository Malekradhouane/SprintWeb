<?php

/* ::base3.html.twig */
class __TwigTemplate_fc5f5ca0e7f7c522ecbacca234293dd3a58379d5d9a18a583a8486252cb65368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'Sheets' => array($this, 'block_Sheets'),
            'PageHeader' => array($this, 'block_PageHeader'),
            'Content' => array($this, 'block_Content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'registration_content' => array($this, 'block_registration_content'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_559ff9e50a894f011420073192ab5a4729ec0db214f3a4fbeda9daf50b331bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559ff9e50a894f011420073192ab5a4729ec0db214f3a4fbeda9daf50b331bc2->enter($__internal_559ff9e50a894f011420073192ab5a4729ec0db214f3a4fbeda9daf50b331bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base3.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"en\">


<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title> ";
        // line 11
        $this->displayBlock('Title', $context, $blocks);
        echo " }</title>

    ";
        // line 13
        $this->displayBlock('Sheets', $context, $blocks);
        // line 19
        echo "
    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon-icon/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon-icon/apple-touch-icon-144-precomposed.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon-icon/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon-icon/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon-icon/favicon.png"), "html", null, true);
        echo "\">
    <!-- Google-Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<!--Header-->
<header>
    <div class=\"default-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2\">
                    <div class=\"logo\"> <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo1.png"), "html", null, true);
        echo "\" alt=\"image\"/></a> </div>
                </div>
                <div class=\"col-sm-9 col-md-10\">
                    <div class=\"header_info\">
                        <div class=\"header_widgets\">
                            <div class=\"circle_icon\"> <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> </div>
                            <p class=\"uppercase_text\">For Support Mail us : </p>
                            <a href=\"mailto:info@example.com\">karhabtyapplication@gmail.com</a> </div>
                        <div class=\"header_widgets\">
                            <div class=\"circle_icon\"> <i class=\"fa fa-phone\" aria-hidden=\"true\"></i> </div>
                            <p class=\"uppercase_text\">Service Helpline Call Us: </p>
                            <a href=\"tel:61-1234-5678-09\">+21692339150</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id=\"navigation_bar\" class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button id=\"menu_slide\" data-target=\"#navigation\" aria-expanded=\"false\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
            </div>
            <div class=\"header_wrap\">
                <div class=\"user_login\">
                    <ul>
                        <li class=\"dropdown\"> <a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"profile-settings.html\">Profile Settings</a></li>
                                <li><a href=\"my-vehicles.html\">My Vehicles</a></li>
                                <li><a href=\"post-vehicle.html\">Post a Vehicle</a></li>
                                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_contactus");
        echo "\">Contact US</a></li>
                                <li><a href=\"#\">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class=\"header_search\">
                    <div id=\"search_toggle\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
                    <form action=\"#\" method=\"get\" id=\"header-search-form\">
                        <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
                        <button type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                    </form>
                </div>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navigation\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Home</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_client");
        echo "\">Home Page 1</a></li>
                            <li><a href=\"index-2.html\">Home Page 2</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AbouUs");
        echo "\">About Us</a></li>
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">driving school</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"GridStyle.html\">Driving Courses</a></li>
                            <li><a href=\"detailPageStyle2.html\">Driving Tests</a></li>

                        </ul>
                    </li>
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Announcements</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/annonce/manageannonce"), "html", null, true);
        echo "\">Manage Announcements</a></li>
                            <li><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tout_annonceC");
        echo "\">All Announcements </a></li>
                            <li><a href=\"dealers-profile.html\">Comparator</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">News</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"blog-left-sidebar.html\">All News</a></li>
                            <li><a href=\"blog-right-sidebar.html\">Events</a></li>
                            <li><a href=\"blog-detail.html\">auction</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header>
<!-- /Header -->

";
        // line 129
        $this->displayBlock('PageHeader', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('Content', $context, $blocks);
        // line 137
        echo "
<!--Brands-->
<section class=\"brand-section gray-bg\">
    <div class=\"container\">
        <div class=\"brand-hadding\">
            <h5>Popular Brands</h5>
        </div>
        <div class=\"brand-logo-list\">
            <div id=\"popular_brands\">
                <div><a href=\"#\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-5.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
            </div>
        </div>
    </div>
</section>
<!-- /Brands-->

<!--Footer -->
<footer>
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <h6>Top Categores</h6>
                    <ul>
                        <li><a href=\"#\">Crossovers</a></li>
                        <li><a href=\"#\">Hybrids</a></li>
                        <li><a href=\"#\">Hybrid Cars</a></li>
                        <li><a href=\"#\">Hybrid SUVs</a></li>
                        <li><a href=\"#\">Concept Vehicles</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <h6>About Us</h6>
                    <ul>
                        <li><a href=\"#\">Privacy</a></li>
                        <li><a href=\"#\">Hybrid Cars</a></li>
                        <li><a href=\"#\">Cookies</a></li>
                        <li><a href=\"#\">Trademarks</a></li>
                        <li><a href=\"#\">Terms of use</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href=\"#\">Our Partners</a></li>
                        <li><a href=\"#\">Careers</a></li>
                        <li><a href=\"#\">Sitemap</a></li>
                        <li><a href=\"#\">Investors</a></li>
                        <li><a href=\"#\">Request a Quote</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <h6>Subscribe Newsletter</h6>
                    <div class=\"newsletter-form\">
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control newsletter-input\" required placeholder=\"Enter Email Address\" />
                            </div>
                            <button type=\"submit\" class=\"btn btn-block\">Subscribe <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></button>
                        </form>
                        <p class=\"subscribed-text\">*We send great deals and latest auto news to our subscribed users very week.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-push-6 text-right\">
                    <div class=\"footer_widget\">
                        <p>Download Our APP:</p>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-android\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-apple\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"footer_widget\">
                        <p>Connect with Us:</p>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-md-pull-6\">
                    <p class=\"copy-right\">Copyright &copy; 2017 Karhabty. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer-->

<!--Back to top-->
<div id=\"back-top\" class=\"back-top\"> <a href=\"#top\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i> </a> </div>
<!--/Back to top-->

";
        // line 242
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('registration_content', $context, $blocks);
        // line 249
        echo "<!--Login-Form -->

<!--/Login-Form -->

<!--Register-Form -->

<!--/Register-Form -->

<!--Forgot-password-Form -->

<!--/Forgot-password-Form -->

";
        // line 261
        $this->displayBlock('Script', $context, $blocks);
        // line 264
        echo "

</body>

</html>";
        
        $__internal_559ff9e50a894f011420073192ab5a4729ec0db214f3a4fbeda9daf50b331bc2->leave($__internal_559ff9e50a894f011420073192ab5a4729ec0db214f3a4fbeda9daf50b331bc2_prof);

    }

    // line 11
    public function block_Title($context, array $blocks = array())
    {
        $__internal_c5276f0f0eee0d8cbf1248f09adb1ad603c1ddbd15fb1cf0e4b8074c0aae754b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5276f0f0eee0d8cbf1248f09adb1ad603c1ddbd15fb1cf0e4b8074c0aae754b->enter($__internal_c5276f0f0eee0d8cbf1248f09adb1ad603c1ddbd15fb1cf0e4b8074c0aae754b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        echo " ";
        
        $__internal_c5276f0f0eee0d8cbf1248f09adb1ad603c1ddbd15fb1cf0e4b8074c0aae754b->leave($__internal_c5276f0f0eee0d8cbf1248f09adb1ad603c1ddbd15fb1cf0e4b8074c0aae754b_prof);

    }

    // line 13
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_b5fd4dab00659d30aac1c4dda327d5876edd5d7c97c9d225173f7d90b445d3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fd4dab00659d30aac1c4dda327d5876edd5d7c97c9d225173f7d90b445d3c1->enter($__internal_b5fd4dab00659d30aac1c4dda327d5876edd5d7c97c9d225173f7d90b445d3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

        // line 14
        echo "
        <!--Custome Style -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">

    ";
        
        $__internal_b5fd4dab00659d30aac1c4dda327d5876edd5d7c97c9d225173f7d90b445d3c1->leave($__internal_b5fd4dab00659d30aac1c4dda327d5876edd5d7c97c9d225173f7d90b445d3c1_prof);

    }

    // line 129
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_8017f1197af0e9ca4d40750a82fc7d9e87511e57b70a5d8229a20b7a527b5196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8017f1197af0e9ca4d40750a82fc7d9e87511e57b70a5d8229a20b7a527b5196->enter($__internal_8017f1197af0e9ca4d40750a82fc7d9e87511e57b70a5d8229a20b7a527b5196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

        // line 130
        echo "
";
        
        $__internal_8017f1197af0e9ca4d40750a82fc7d9e87511e57b70a5d8229a20b7a527b5196->leave($__internal_8017f1197af0e9ca4d40750a82fc7d9e87511e57b70a5d8229a20b7a527b5196_prof);

    }

    // line 133
    public function block_Content($context, array $blocks = array())
    {
        $__internal_6677a98fedc430ace08ae9fe291ef0d163b0d2b5d5973687c363866a6682422f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6677a98fedc430ace08ae9fe291ef0d163b0d2b5d5973687c363866a6682422f->enter($__internal_6677a98fedc430ace08ae9fe291ef0d163b0d2b5d5973687c363866a6682422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 134
        echo "

";
        
        $__internal_6677a98fedc430ace08ae9fe291ef0d163b0d2b5d5973687c363866a6682422f->leave($__internal_6677a98fedc430ace08ae9fe291ef0d163b0d2b5d5973687c363866a6682422f_prof);

    }

    // line 242
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fb1d42d5646338248f8b087bd17e1027c10b53246e618caaeac164aac2409a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb1d42d5646338248f8b087bd17e1027c10b53246e618caaeac164aac2409a3->enter($__internal_3fb1d42d5646338248f8b087bd17e1027c10b53246e618caaeac164aac2409a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 243
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Security:login"));
        echo "
";
        
        $__internal_3fb1d42d5646338248f8b087bd17e1027c10b53246e618caaeac164aac2409a3->leave($__internal_3fb1d42d5646338248f8b087bd17e1027c10b53246e618caaeac164aac2409a3_prof);

    }

    // line 246
    public function block_registration_content($context, array $blocks = array())
    {
        $__internal_702e3c83cd8b74cae18d45704e170adb1428b1fe76646c186b35925b4813bc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702e3c83cd8b74cae18d45704e170adb1428b1fe76646c186b35925b4813bc41->enter($__internal_702e3c83cd8b74cae18d45704e170adb1428b1fe76646c186b35925b4813bc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registration_content"));

        // line 247
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Registration:register"));
        echo "
";
        
        $__internal_702e3c83cd8b74cae18d45704e170adb1428b1fe76646c186b35925b4813bc41->leave($__internal_702e3c83cd8b74cae18d45704e170adb1428b1fe76646c186b35925b4813bc41_prof);

    }

    // line 261
    public function block_Script($context, array $blocks = array())
    {
        $__internal_1ad255f0e333a106d684613f9597d964567ea556b90f025dfd8ae80299fb2c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad255f0e333a106d684613f9597d964567ea556b90f025dfd8ae80299fb2c83->enter($__internal_1ad255f0e333a106d684613f9597d964567ea556b90f025dfd8ae80299fb2c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 262
        echo "
";
        
        $__internal_1ad255f0e333a106d684613f9597d964567ea556b90f025dfd8ae80299fb2c83->leave($__internal_1ad255f0e333a106d684613f9597d964567ea556b90f025dfd8ae80299fb2c83_prof);

    }

    public function getTemplateName()
    {
        return "::base3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 262,  454 => 261,  444 => 247,  438 => 246,  428 => 243,  422 => 242,  413 => 134,  407 => 133,  399 => 130,  393 => 129,  383 => 16,  379 => 14,  373 => 13,  361 => 11,  350 => 264,  348 => 261,  334 => 249,  332 => 246,  329 => 245,  327 => 242,  232 => 150,  228 => 149,  224 => 148,  220 => 147,  216 => 146,  205 => 137,  203 => 133,  200 => 132,  198 => 129,  174 => 108,  170 => 107,  157 => 97,  150 => 93,  129 => 75,  121 => 70,  89 => 43,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  52 => 21,  48 => 19,  46 => 13,  41 => 11,  29 => 1,);
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
<html lang=\"en\">


<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <title> {% block Title %} {% endblock %} }</title>

    {% block Sheets %}

        <!--Custome Style -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">

    {% endblock %}

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('images/favicon-icon/apple-touch-icon-144-precomposed.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('images/favicon-icon/apple-touch-icon-144-precomposed.html') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('images/favicon-icon/apple-touch-icon-72-precomposed.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('images/favicon-icon/apple-touch-icon-57-precomposed.png') }}\">
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon-icon/favicon.png') }}\">
    <!-- Google-Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Lato:300,400,700,900\" rel=\"stylesheet\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<!--Header-->
<header>
    <div class=\"default-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-md-2\">
                    <div class=\"logo\"> <a href=\"{{ path('template_homepage') }}\"><img src=\"{{ asset('images/logo1.png') }}\" alt=\"image\"/></a> </div>
                </div>
                <div class=\"col-sm-9 col-md-10\">
                    <div class=\"header_info\">
                        <div class=\"header_widgets\">
                            <div class=\"circle_icon\"> <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> </div>
                            <p class=\"uppercase_text\">For Support Mail us : </p>
                            <a href=\"mailto:info@example.com\">karhabtyapplication@gmail.com</a> </div>
                        <div class=\"header_widgets\">
                            <div class=\"circle_icon\"> <i class=\"fa fa-phone\" aria-hidden=\"true\"></i> </div>
                            <p class=\"uppercase_text\">Service Helpline Call Us: </p>
                            <a href=\"tel:61-1234-5678-09\">+21692339150</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id=\"navigation_bar\" class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button id=\"menu_slide\" data-target=\"#navigation\" aria-expanded=\"false\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
            </div>
            <div class=\"header_wrap\">
                <div class=\"user_login\">
                    <ul>
                        <li class=\"dropdown\"> <a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>{{ app.user.username }}<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"profile-settings.html\">Profile Settings</a></li>
                                <li><a href=\"my-vehicles.html\">My Vehicles</a></li>
                                <li><a href=\"post-vehicle.html\">Post a Vehicle</a></li>
                                <li><a href=\"{{ path('reclamation_contactus') }}\">Contact US</a></li>
                                <li><a href=\"#\">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class=\"header_search\">
                    <div id=\"search_toggle\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
                    <form action=\"#\" method=\"get\" id=\"header-search-form\">
                        <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
                        <button type=\"submit\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                    </form>
                </div>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navigation\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Home</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('template_client') }}\">Home Page 1</a></li>
                            <li><a href=\"index-2.html\">Home Page 2</a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{ path('template_AbouUs') }}\">About Us</a></li>
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">driving school</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"GridStyle.html\">Driving Courses</a></li>
                            <li><a href=\"detailPageStyle2.html\">Driving Tests</a></li>

                        </ul>
                    </li>
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Announcements</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ asset('app_dev.php/annonce/manageannonce') }}\">Manage Announcements</a></li>
                            <li><a href=\"{{ path('tout_annonceC') }}\">All Announcements </a></li>
                            <li><a href=\"dealers-profile.html\">Comparator</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">News</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"blog-left-sidebar.html\">All News</a></li>
                            <li><a href=\"blog-right-sidebar.html\">Events</a></li>
                            <li><a href=\"blog-detail.html\">auction</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header>
<!-- /Header -->

{% block PageHeader %}

{% endblock %}

{% block Content %}


{% endblock %}

<!--Brands-->
<section class=\"brand-section gray-bg\">
    <div class=\"container\">
        <div class=\"brand-hadding\">
            <h5>Popular Brands</h5>
        </div>
        <div class=\"brand-logo-list\">
            <div id=\"popular_brands\">
                <div><a href=\"#\"><img src=\"{{ asset('images/brand-logo-1.png') }}\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"{{ asset('images/brand-logo-2.png') }}\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"{{ asset('images/brand-logo-3.png') }}\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"{{ asset('images/brand-logo-4.png') }}\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"{{ asset('images/brand-logo-5.png') }}\" class=\"img-responsive\" alt=\"image\"></a></div>
            </div>
        </div>
    </div>
</section>
<!-- /Brands-->

<!--Footer -->
<footer>
    <div class=\"footer-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <h6>Top Categores</h6>
                    <ul>
                        <li><a href=\"#\">Crossovers</a></li>
                        <li><a href=\"#\">Hybrids</a></li>
                        <li><a href=\"#\">Hybrid Cars</a></li>
                        <li><a href=\"#\">Hybrid SUVs</a></li>
                        <li><a href=\"#\">Concept Vehicles</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <h6>About Us</h6>
                    <ul>
                        <li><a href=\"#\">Privacy</a></li>
                        <li><a href=\"#\">Hybrid Cars</a></li>
                        <li><a href=\"#\">Cookies</a></li>
                        <li><a href=\"#\">Trademarks</a></li>
                        <li><a href=\"#\">Terms of use</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href=\"#\">Our Partners</a></li>
                        <li><a href=\"#\">Careers</a></li>
                        <li><a href=\"#\">Sitemap</a></li>
                        <li><a href=\"#\">Investors</a></li>
                        <li><a href=\"#\">Request a Quote</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                    <h6>Subscribe Newsletter</h6>
                    <div class=\"newsletter-form\">
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control newsletter-input\" required placeholder=\"Enter Email Address\" />
                            </div>
                            <button type=\"submit\" class=\"btn btn-block\">Subscribe <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></button>
                        </form>
                        <p class=\"subscribed-text\">*We send great deals and latest auto news to our subscribed users very week.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-push-6 text-right\">
                    <div class=\"footer_widget\">
                        <p>Download Our APP:</p>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-android\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-apple\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"footer_widget\">
                        <p>Connect with Us:</p>
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-md-pull-6\">
                    <p class=\"copy-right\">Copyright &copy; 2017 Karhabty. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer-->

<!--Back to top-->
<div id=\"back-top\" class=\"back-top\"> <a href=\"#top\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i> </a> </div>
<!--/Back to top-->

{% block fos_user_content %}
    {{ render(controller('FOSUserBundle:Security:login')) }}
{% endblock fos_user_content %}

{% block registration_content %}
    {{ render(controller('FOSUserBundle:Registration:register')) }}
{% endblock registration_content %}
<!--Login-Form -->

<!--/Login-Form -->

<!--Register-Form -->

<!--/Register-Form -->

<!--Forgot-password-Form -->

<!--/Forgot-password-Form -->

{% block Script %}

{% endblock %}


</body>

</html>", "::base3.html.twig", "C:\\wamp64\\www\\SprintWeb\\app/Resources\\views/base3.html.twig");
    }
}
