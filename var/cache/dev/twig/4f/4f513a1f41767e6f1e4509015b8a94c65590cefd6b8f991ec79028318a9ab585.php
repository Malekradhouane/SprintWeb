<?php

/* ::base.html.twig */
class __TwigTemplate_763651f85b0fed717bf74307d0ed648dbc9d2481cafc85675dfa3449cfb3748d extends Twig_Template
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
        $__internal_820a511d0a49d741d94263acf1d6623cb8163cfbc109664735cda9a634013ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820a511d0a49d741d94263acf1d6623cb8163cfbc109664735cda9a634013ffc->enter($__internal_820a511d0a49d741d94263acf1d6623cb8163cfbc109664735cda9a634013ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                        <div class=\"social-follow\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"login_btn\"> <a href=\"#loginform\" class=\"btn btn-xs uppercase\" data-toggle=\"modal\" data-dismiss=\"modal\">Login / Register</a> </div>
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
                        <li class=\"dropdown\"> <a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> User Name <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"profile-settings.html\">Profile Settings</a></li>
                                <li><a href=\"my-vehicles.html\">My Vehicles</a></li>
                                <li><a href=\"post-vehicle.html\">Post a Vehicle</a></li>
                                <li><a href=\"";
        // line 85
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
                            <li><a href=\"index.html\">Home Page 1</a></li>
                            <li><a href=\"index-2.html\">Home Page 2</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_AbouUs");
        echo "\">About Us</a></li>
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">driving school</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/autoecole"), "html", null, true);
        echo "\">Driving Courses</a></li>
                            <li><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/test"), "html", null, true);
        echo "\">Driving Tests</a></li>

                        </ul>
                    </li>
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Announcements</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/annonce/afficherannonce"), "html", null, true);
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
        // line 138
        $this->displayBlock('PageHeader', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('Content', $context, $blocks);
        // line 146
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
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-3.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand-logo-4.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a></div>
                <div><a href=\"#\"><img src=\"";
        // line 159
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
        // line 251
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('registration_content', $context, $blocks);
        // line 258
        echo "<!--Login-Form -->

<!--/Login-Form -->

<!--Register-Form -->

<!--/Register-Form -->

<!--Forgot-password-Form -->

<!--/Forgot-password-Form -->

";
        // line 270
        $this->displayBlock('Script', $context, $blocks);
        // line 273
        echo "

</body>

</html>";
        
        $__internal_820a511d0a49d741d94263acf1d6623cb8163cfbc109664735cda9a634013ffc->leave($__internal_820a511d0a49d741d94263acf1d6623cb8163cfbc109664735cda9a634013ffc_prof);

    }

    // line 11
    public function block_Title($context, array $blocks = array())
    {
        $__internal_b8c33c5d968aff15458c82a9a0ab041779eb49d46e1f844f26e6e6ebbab5aee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c33c5d968aff15458c82a9a0ab041779eb49d46e1f844f26e6e6ebbab5aee6->enter($__internal_b8c33c5d968aff15458c82a9a0ab041779eb49d46e1f844f26e6e6ebbab5aee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        echo " ";
        
        $__internal_b8c33c5d968aff15458c82a9a0ab041779eb49d46e1f844f26e6e6ebbab5aee6->leave($__internal_b8c33c5d968aff15458c82a9a0ab041779eb49d46e1f844f26e6e6ebbab5aee6_prof);

    }

    // line 13
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_a7fecd1efc55a9568287ef7fab6b794ed69caaf88ad239a677060c8ec28029f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fecd1efc55a9568287ef7fab6b794ed69caaf88ad239a677060c8ec28029f6->enter($__internal_a7fecd1efc55a9568287ef7fab6b794ed69caaf88ad239a677060c8ec28029f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

        // line 14
        echo "
        <!--Custome Style -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">

    ";
        
        $__internal_a7fecd1efc55a9568287ef7fab6b794ed69caaf88ad239a677060c8ec28029f6->leave($__internal_a7fecd1efc55a9568287ef7fab6b794ed69caaf88ad239a677060c8ec28029f6_prof);

    }

    // line 138
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_54faf5ff73edc2e27836bd786f5aa51ae568a6151a88fac1093f2d784d52ba8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54faf5ff73edc2e27836bd786f5aa51ae568a6151a88fac1093f2d784d52ba8c->enter($__internal_54faf5ff73edc2e27836bd786f5aa51ae568a6151a88fac1093f2d784d52ba8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

        // line 139
        echo "
";
        
        $__internal_54faf5ff73edc2e27836bd786f5aa51ae568a6151a88fac1093f2d784d52ba8c->leave($__internal_54faf5ff73edc2e27836bd786f5aa51ae568a6151a88fac1093f2d784d52ba8c_prof);

    }

    // line 142
    public function block_Content($context, array $blocks = array())
    {
        $__internal_da67d7b8ded3b7488dc8432e1bba5f6ec21b162bc40ae2feb5d85a54159a51b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da67d7b8ded3b7488dc8432e1bba5f6ec21b162bc40ae2feb5d85a54159a51b8->enter($__internal_da67d7b8ded3b7488dc8432e1bba5f6ec21b162bc40ae2feb5d85a54159a51b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 143
        echo "

";
        
        $__internal_da67d7b8ded3b7488dc8432e1bba5f6ec21b162bc40ae2feb5d85a54159a51b8->leave($__internal_da67d7b8ded3b7488dc8432e1bba5f6ec21b162bc40ae2feb5d85a54159a51b8_prof);

    }

    // line 251
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80d29e3b642a79a275f7e18eb276e2c0826cc3f65d9bba9fe95182277c615a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d29e3b642a79a275f7e18eb276e2c0826cc3f65d9bba9fe95182277c615a5b->enter($__internal_80d29e3b642a79a275f7e18eb276e2c0826cc3f65d9bba9fe95182277c615a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 252
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Security:login"));
        echo "
";
        
        $__internal_80d29e3b642a79a275f7e18eb276e2c0826cc3f65d9bba9fe95182277c615a5b->leave($__internal_80d29e3b642a79a275f7e18eb276e2c0826cc3f65d9bba9fe95182277c615a5b_prof);

    }

    // line 255
    public function block_registration_content($context, array $blocks = array())
    {
        $__internal_8b8f3baa62e1b44dbdc79164dc244b3433f6859ea6101b5801377553644e06e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8f3baa62e1b44dbdc79164dc244b3433f6859ea6101b5801377553644e06e3->enter($__internal_8b8f3baa62e1b44dbdc79164dc244b3433f6859ea6101b5801377553644e06e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registration_content"));

        // line 256
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOSUserBundle:Registration:register"));
        echo "
";
        
        $__internal_8b8f3baa62e1b44dbdc79164dc244b3433f6859ea6101b5801377553644e06e3->leave($__internal_8b8f3baa62e1b44dbdc79164dc244b3433f6859ea6101b5801377553644e06e3_prof);

    }

    // line 270
    public function block_Script($context, array $blocks = array())
    {
        $__internal_099e8e32c9dd67778f265ebb178b210bd68f70b085bbb607f8c9f4fc3c5631c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099e8e32c9dd67778f265ebb178b210bd68f70b085bbb607f8c9f4fc3c5631c7->enter($__internal_099e8e32c9dd67778f265ebb178b210bd68f70b085bbb607f8c9f4fc3c5631c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 271
        echo "
";
        
        $__internal_099e8e32c9dd67778f265ebb178b210bd68f70b085bbb607f8c9f4fc3c5631c7->leave($__internal_099e8e32c9dd67778f265ebb178b210bd68f70b085bbb607f8c9f4fc3c5631c7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 271,  460 => 270,  450 => 256,  444 => 255,  434 => 252,  428 => 251,  419 => 143,  413 => 142,  405 => 139,  399 => 138,  389 => 16,  385 => 14,  379 => 13,  367 => 11,  356 => 273,  354 => 270,  340 => 258,  338 => 255,  335 => 254,  333 => 251,  238 => 159,  234 => 158,  230 => 157,  226 => 156,  222 => 155,  211 => 146,  209 => 142,  206 => 141,  204 => 138,  180 => 117,  171 => 111,  167 => 110,  161 => 107,  136 => 85,  89 => 43,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  52 => 21,  48 => 19,  46 => 13,  41 => 11,  29 => 1,);
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
                        <div class=\"social-follow\">
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"login_btn\"> <a href=\"#loginform\" class=\"btn btn-xs uppercase\" data-toggle=\"modal\" data-dismiss=\"modal\">Login / Register</a> </div>
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
                        <li class=\"dropdown\"> <a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i> User Name <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
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
                            <li><a href=\"index.html\">Home Page 1</a></li>
                            <li><a href=\"index-2.html\">Home Page 2</a></li>
                        </ul>
                    </li>
                    <li><a href=\"{{ path('template_AbouUs') }}\">About Us</a></li>
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">driving school</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ asset('app_dev.php/auto/autoecole') }}\">Driving Courses</a></li>
                            <li><a href=\"{{ asset('app_dev.php/auto/test') }}\">Driving Tests</a></li>

                        </ul>
                    </li>
                    <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Announcements</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ asset('app_dev.php/annonce/afficherannonce') }}\">All Announcements </a></li>
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

</html>", "::base.html.twig", "C:\\wamp64\\www\\SprintWeb\\app\\Resources\\views\\base.html.twig");
    }
}
