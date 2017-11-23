<?php

/* @Template/Default/AboutUs.html.twig */
class __TwigTemplate_68b198a6b66915a6f29b9d3ba2717fa0c36931f391b0ece3eeeb608688156dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Template/Default/AboutUs.html.twig", 1);
        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'Sheets' => array($this, 'block_Sheets'),
            'PageHeader' => array($this, 'block_PageHeader'),
            'Content' => array($this, 'block_Content'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3adfe1b3a62a7ed91ce7c7ef9c1872b093d7815ff4049659aadc29e601133e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adfe1b3a62a7ed91ce7c7ef9c1872b093d7815ff4049659aadc29e601133e52->enter($__internal_3adfe1b3a62a7ed91ce7c7ef9c1872b093d7815ff4049659aadc29e601133e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Template/Default/AboutUs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3adfe1b3a62a7ed91ce7c7ef9c1872b093d7815ff4049659aadc29e601133e52->leave($__internal_3adfe1b3a62a7ed91ce7c7ef9c1872b093d7815ff4049659aadc29e601133e52_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_09ffa3e4c9f025a12cb267e060110254370aa504ff21d3b8ce216e565ff4c78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ffa3e4c9f025a12cb267e060110254370aa504ff21d3b8ce216e565ff4c78d->enter($__internal_09ffa3e4c9f025a12cb267e060110254370aa504ff21d3b8ce216e565ff4c78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    About Us - Karhabty
";
        
        $__internal_09ffa3e4c9f025a12cb267e060110254370aa504ff21d3b8ce216e565ff4c78d->leave($__internal_09ffa3e4c9f025a12cb267e060110254370aa504ff21d3b8ce216e565ff4c78d_prof);

    }

    // line 8
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_9066e56256f697bcc59d881b31dcf44074d6362aec08cc77083f6bd6f4d6eb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9066e56256f697bcc59d881b31dcf44074d6362aec08cc77083f6bd6f4d6eb48->enter($__internal_9066e56256f697bcc59d881b31dcf44074d6362aec08cc77083f6bd6f4d6eb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("Sheets", $context, $blocks);
        echo "

    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <!--slick-slider -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--bootstrap-slider -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-slider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--FontAwesome Font Style -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_9066e56256f697bcc59d881b31dcf44074d6362aec08cc77083f6bd6f4d6eb48->leave($__internal_9066e56256f697bcc59d881b31dcf44074d6362aec08cc77083f6bd6f4d6eb48_prof);

    }

    // line 26
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_0aa133f91aa448905e2d30c0bb4d187ab16861d9eb9321a4d7ab6d8d2b9242d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa133f91aa448905e2d30c0bb4d187ab16861d9eb9321a4d7ab6d8d2b9242d9->enter($__internal_0aa133f91aa448905e2d30c0bb4d187ab16861d9eb9321a4d7ab6d8d2b9242d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

        // line 27
        echo "
    <section class=\"page-header aboutus_page\">
        <div class=\"container\">
            <div class=\"page-header_wrap\">
                <div class=\"page-heading\">
                    <h1>About Us</h1>
                </div>
                <ul class=\"coustom-breadcrumb\">
                    <li><a href=\"#\">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>

";
        
        $__internal_0aa133f91aa448905e2d30c0bb4d187ab16861d9eb9321a4d7ab6d8d2b9242d9->leave($__internal_0aa133f91aa448905e2d30c0bb4d187ab16861d9eb9321a4d7ab6d8d2b9242d9_prof);

    }

    // line 46
    public function block_Content($context, array $blocks = array())
    {
        $__internal_3af4585be1f8b2cbafbb61e5f73ce9fc86691c556890dd542ecc7ed5102d08cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af4585be1f8b2cbafbb61e5f73ce9fc86691c556890dd542ecc7ed5102d08cc->enter($__internal_3af4585be1f8b2cbafbb61e5f73ce9fc86691c556890dd542ecc7ed5102d08cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 47
        echo "    <!--About-us-->
    <section class=\"about_us section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Welcome <span>to the Car Dealer</span></h2>
                <p>It's easy to get screwed with a car, but fear no more, Karhabty is here to help. Follow us and you should have no problem at all buying your car. Enjoy the ride ! </p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                    <div class=\"about_content row\">
                        <div class=\"col-md-5 col-sm-4 col-xs-4\">
                            <div class=\"about_img\"> <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about_us_img1.jpg"), "html", null, true);
        echo "\" alt=\"image\"> </div>
                        </div>
                        <div class=\"col-md-7 col-sm-8 col-xs-8\">
                            <h3>Who <span>Are We</span></h3>
                            <p>there are a lot of websites that do what we do . They share the same what and how . But our partners work with us for our why and our who .. We are minds and makers ! </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6\">
                    <div class=\"about_content row\">
                        <div class=\"col-md-5 col-sm-4 col-xs-4\">
                            <div class=\"about_img\"> <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/about_us_img2.jpg"), "html", null, true);
        echo "\" alt=\"image\"> </div>
                        </div>
                        <div class=\"col-md-7 col-sm-8 col-xs-8\">
                            <h3>Our <span>Mission</span></h3>
                            <p> The process of finding and purchasing your dream vehicule can be quite the headache ... But your mission is completed with Karhabty ,the best cars website providing you with all the necessary informations </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- /About-us-->

    <!-- Fun-Facts-->
    <section class=\"fun-facts-section\">
        <div class=\"container div_zindex\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>40+</h2>
                            <p>Years In Business</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-car\" aria-hidden=\"true\"></i>1200+</h2>
                            <p>New Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-car\" aria-hidden=\"true\"></i>1000+</h2>
                            <p>Used Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i>600+</h2>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Fun-Facts-->

    <!-- Meet-the-Team-->
    <section class=\"meet_team section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Meet <span>the Team</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3\">
                    <div class=\"team_member\">
                        <div class=\"team_img\"> <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mariemm.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                            <div class=\"team_more_info\">
                                <div class=\"info_wrap\">
                                    <p><span>Phone:</span> <a href=\"tel:+61-12134-567-89\">+21692339150</a></p>
                                    <p><span>Email:</span> <a href=\"mailto:contact@example.com\">mariem.hasnaoui@esprit.tn</a></p>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"team_info\">
                            <H6>Mariem Hasnaoui</H6>
                            <P>Web Developper</P>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3\">
                    <div class=\"team_member\">
                        <div class=\"team_img\"> <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/nour.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                            <div class=\"team_more_info\">
                                <div class=\"info_wrap\">
                                    <p><span>Phone:</span> <a href=\"tel:+61-12134-567-89\">+61-12134-567-89</a></p>
                                    <p><span>Email:</span> <a href=\"mailto:contact@example.com\">nourelhouda.guesmi@esprit.tn</a></p>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"team_info\">
                            <H6>NourElHouda Guesmi </H6>
                            <P>Web Developper</P>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3\">
                    <div class=\"team_member\">
                        <div class=\"team_img\"> <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/malek.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                            <div class=\"team_more_info\">
                                <div class=\"info_wrap\">
                                    <p><span>Phone:</span> <a href=\"tel:+61-12134-567-89\">+61-12134-567-89</a></p>
                                    <p><span>Email:</span> <a href=\"mailto:contact@example.com\">malek.radhouane@esprit.tn</a></p>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"team_info\">
                            <H6>Malek Radhouane</H6>
                            <P>Web Developper</P>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3\">
                    <div class=\"team_member\">
                        <div class=\"team_img\"> <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/islemm.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                            <div class=\"team_more_info\">
                                <div class=\"info_wrap\">
                                    <p><span>Phone:</span> <a href=\"tel:+61-12134-567-89\">+61-12134-567-89</a></p>
                                    <p><span>Email:</span> <a href=\"mailto:contact@example.com\">islem.guizani@esprit.tn</a></p>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"team_info\">
                            <H6>Islem Guizani</H6>
                            <P>Web Developper</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meet-the-Team-->

";
        
        $__internal_3af4585be1f8b2cbafbb61e5f73ce9fc86691c556890dd542ecc7ed5102d08cc->leave($__internal_3af4585be1f8b2cbafbb61e5f73ce9fc86691c556890dd542ecc7ed5102d08cc_prof);

    }

    // line 230
    public function block_Script($context, array $blocks = array())
    {
        $__internal_55363a146acfcd7b4db5849293ae6dd2960573475a785a22e8ff80803682297c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55363a146acfcd7b4db5849293ae6dd2960573475a785a22e8ff80803682297c->enter($__internal_55363a146acfcd7b4db5849293ae6dd2960573475a785a22e8ff80803682297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 231
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>

    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_55363a146acfcd7b4db5849293ae6dd2960573475a785a22e8ff80803682297c->leave($__internal_55363a146acfcd7b4db5849293ae6dd2960573475a785a22e8ff80803682297c_prof);

    }

    public function getTemplateName()
    {
        return "@Template/Default/AboutUs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 241,  374 => 240,  369 => 238,  363 => 235,  359 => 234,  355 => 233,  351 => 231,  345 => 230,  312 => 203,  287 => 181,  262 => 159,  237 => 137,  166 => 69,  152 => 58,  139 => 47,  133 => 46,  109 => 27,  103 => 26,  94 => 23,  89 => 21,  84 => 19,  79 => 17,  75 => 16,  70 => 14,  65 => 12,  58 => 9,  52 => 8,  44 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block Title %}
    About Us - Karhabty
{% endblock %}


{% block Sheets %}
    {{ parent() }}

    <!--Bootstrap -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" type=\"text/css\">
    <!--Custome Style -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">
    <!--OWL Carousel slider-->
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.transitions.css') }}\" type=\"text/css\">
    <!--slick-slider -->
    <link href=\"{{ asset('css/slick.css') }}\" rel=\"stylesheet\">
    <!--bootstrap-slider -->
    <link href=\"{{ asset('css/bootstrap-slider.min.css') }}\" rel=\"stylesheet\">
    <!--FontAwesome Font Style -->
    <link href=\"{{ asset('css/font-awesome.min.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block PageHeader %}

    <section class=\"page-header aboutus_page\">
        <div class=\"container\">
            <div class=\"page-header_wrap\">
                <div class=\"page-heading\">
                    <h1>About Us</h1>
                </div>
                <ul class=\"coustom-breadcrumb\">
                    <li><a href=\"#\">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>

{% endblock %}

{% block Content %}
    <!--About-us-->
    <section class=\"about_us section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Welcome <span>to the Car Dealer</span></h2>
                <p>It's easy to get screwed with a car, but fear no more, Karhabty is here to help. Follow us and you should have no problem at all buying your car. Enjoy the ride ! </p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6\">
                    <div class=\"about_content row\">
                        <div class=\"col-md-5 col-sm-4 col-xs-4\">
                            <div class=\"about_img\"> <img src=\"{{ asset('images/about_us_img1.jpg') }}\" alt=\"image\"> </div>
                        </div>
                        <div class=\"col-md-7 col-sm-8 col-xs-8\">
                            <h3>Who <span>Are We</span></h3>
                            <p>there are a lot of websites that do what we do . They share the same what and how . But our partners work with us for our why and our who .. We are minds and makers ! </p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6\">
                    <div class=\"about_content row\">
                        <div class=\"col-md-5 col-sm-4 col-xs-4\">
                            <div class=\"about_img\"> <img src=\"{{ asset('images/about_us_img2.jpg') }}\" alt=\"image\"> </div>
                        </div>
                        <div class=\"col-md-7 col-sm-8 col-xs-8\">
                            <h3>Our <span>Mission</span></h3>
                            <p> The process of finding and purchasing your dream vehicule can be quite the headache ... But your mission is completed with Karhabty ,the best cars website providing you with all the necessary informations </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- /About-us-->

    <!-- Fun-Facts-->
    <section class=\"fun-facts-section\">
        <div class=\"container div_zindex\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>40+</h2>
                            <p>Years In Business</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-car\" aria-hidden=\"true\"></i>1200+</h2>
                            <p>New Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-car\" aria-hidden=\"true\"></i>1000+</h2>
                            <p>Used Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3 col-xs-6\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i>600+</h2>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Fun-Facts-->

    <!-- Meet-the-Team-->
    <section class=\"meet_team section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Meet <span>the Team</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-3\">
                    <div class=\"team_member\">
                        <div class=\"team_img\"> <img src=\"{{ asset('images/mariemm.jpg') }}\" alt=\"image\">
                            <div class=\"team_more_info\">
                                <div class=\"info_wrap\">
                                    <p><span>Phone:</span> <a href=\"tel:+61-12134-567-89\">+21692339150</a></p>
                                    <p><span>Email:</span> <a href=\"mailto:contact@example.com\">mariem.hasnaoui@esprit.tn</a></p>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"team_info\">
                            <H6>Mariem Hasnaoui</H6>
                            <P>Web Developper</P>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3\">
                    <div class=\"team_member\">
                        <div class=\"team_img\"> <img src=\"{{ asset('images/nour.jpg') }}\" alt=\"image\">
                            <div class=\"team_more_info\">
                                <div class=\"info_wrap\">
                                    <p><span>Phone:</span> <a href=\"tel:+61-12134-567-89\">+61-12134-567-89</a></p>
                                    <p><span>Email:</span> <a href=\"mailto:contact@example.com\">nourelhouda.guesmi@esprit.tn</a></p>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"team_info\">
                            <H6>NourElHouda Guesmi </H6>
                            <P>Web Developper</P>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3\">
                    <div class=\"team_member\">
                        <div class=\"team_img\"> <img src=\"{{ asset('images/malek.jpg') }}\" alt=\"image\">
                            <div class=\"team_more_info\">
                                <div class=\"info_wrap\">
                                    <p><span>Phone:</span> <a href=\"tel:+61-12134-567-89\">+61-12134-567-89</a></p>
                                    <p><span>Email:</span> <a href=\"mailto:contact@example.com\">malek.radhouane@esprit.tn</a></p>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"team_info\">
                            <H6>Malek Radhouane</H6>
                            <P>Web Developper</P>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 col-sm-3\">
                    <div class=\"team_member\">
                        <div class=\"team_img\"> <img src=\"{{ asset('images/islemm.jpg') }}\" alt=\"image\">
                            <div class=\"team_more_info\">
                                <div class=\"info_wrap\">
                                    <p><span>Phone:</span> <a href=\"tel:+61-12134-567-89\">+61-12134-567-89</a></p>
                                    <p><span>Email:</span> <a href=\"mailto:contact@example.com\">islem.guizani@esprit.tn</a></p>
                                    <ul>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"team_info\">
                            <H6>Islem Guizani</H6>
                            <P>Web Developper</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Meet-the-Team-->

{% endblock %}

{% block Script %}

    <!-- Scripts -->
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/interface.js') }}\"></script>

    <!--bootstrap-slider-JS-->
    <script src=\"{{ asset('js/bootstrap-slider.min.js' ) }}\"></script>
    <!--Slider-JS-->
    <script src=\"{{ asset('js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>

{% endblock %}", "@Template/Default/AboutUs.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\TemplateBundle\\Resources\\views\\Default\\AboutUs.html.twig");
    }
}
