<?php

/* AutoEcoleBundle:Default:layout.html.twig */
class __TwigTemplate_7f3eaf4404d947d8f1f546e7ab95d795ac032dc6074a48b40b08e519a5078696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AutoEcoleBundle:Default:layout.html.twig", 1);
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
        $__internal_fffbc1b20b83eee9aa654ff1a48c5cbb3e613868012a6d0779128d6db6b5f57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffbc1b20b83eee9aa654ff1a48c5cbb3e613868012a6d0779128d6db6b5f57a->enter($__internal_fffbc1b20b83eee9aa654ff1a48c5cbb3e613868012a6d0779128d6db6b5f57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffbc1b20b83eee9aa654ff1a48c5cbb3e613868012a6d0779128d6db6b5f57a->leave($__internal_fffbc1b20b83eee9aa654ff1a48c5cbb3e613868012a6d0779128d6db6b5f57a_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_5c4e354b49ba34253c172eb2a562a8181562886931240ee01750b7b79b1b9dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4e354b49ba34253c172eb2a562a8181562886931240ee01750b7b79b1b9dd0->enter($__internal_5c4e354b49ba34253c172eb2a562a8181562886931240ee01750b7b79b1b9dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_5c4e354b49ba34253c172eb2a562a8181562886931240ee01750b7b79b1b9dd0->leave($__internal_5c4e354b49ba34253c172eb2a562a8181562886931240ee01750b7b79b1b9dd0_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_b24bf9bbf1456c74f33e2c64b20bd90ce212524cf6f3c3b919035af4c1a8a752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24bf9bbf1456c74f33e2c64b20bd90ce212524cf6f3c3b919035af4c1a8a752->enter($__internal_b24bf9bbf1456c74f33e2c64b20bd90ce212524cf6f3c3b919035af4c1a8a752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

        // line 8
        echo "        ";
        $this->displayParentBlock("Sheets", $context, $blocks);
        echo "
        <!--Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <!--Custome Style -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <!--OWL Carousel slider-->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <!--slick-slider -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--bootstrap-slider -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-slider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--FontAwesome Font Style -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_b24bf9bbf1456c74f33e2c64b20bd90ce212524cf6f3c3b919035af4c1a8a752->leave($__internal_b24bf9bbf1456c74f33e2c64b20bd90ce212524cf6f3c3b919035af4c1a8a752_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_39b6bf81589ccd93abbcdbbb0550916a10f8f3b56543b4f323ce64ae3bc53b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b6bf81589ccd93abbcdbbb0550916a10f8f3b56543b4f323ce64ae3bc53b54->enter($__internal_39b6bf81589ccd93abbcdbbb0550916a10f8f3b56543b4f323ce64ae3bc53b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

        // line 26
        echo "
    <!-- Banners -->
    <section  class=\"cc-section\">
         <div class=\"container\">
                <div class=\"div_zindex\">
               <div class=\"row\">
                    <div class=\"col-md-5 col-md-push-7\">
                        <div class=\"banner_content1\">

                        <h1>Learning to drive .</h1>
                            <p><strong>Check out the Tunisian Road Code below and get ready to nail your learner's test</strong> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banners -->

";
        
        $__internal_39b6bf81589ccd93abbcdbbb0550916a10f8f3b56543b4f323ce64ae3bc53b54->leave($__internal_39b6bf81589ccd93abbcdbbb0550916a10f8f3b56543b4f323ce64ae3bc53b54_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_22f7a8abd2d6eb67c44d3b1f85dc9db2b24820a31292c532e069cec42635ad15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f7a8abd2d6eb67c44d3b1f85dc9db2b24820a31292c532e069cec42635ad15->enter($__internal_22f7a8abd2d6eb67c44d3b1f85dc9db2b24820a31292c532e069cec42635ad15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 48
        echo "


    <!-- About -->
    <section class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Tunisian Road Code </h2>
                <p>Select a chapter from the Road Code and work your way through the units. Each time you complete a unit or a chapter we'll update your progress.
                </p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Module-Icons-1.8-JS-Traffic-lights.png"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>About <span>Traffic lights</span></h3> <br>

                            <a href=\"#feu\" class=\"btn\">See Over<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Module-Icons-1.8-JS-About-Signs.png"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>

                            <h3>About <span> Road signs</span></h3><br>

                            <a href=\"#priorite\" class=\"btn\">See Over<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>

                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Module-Icons-1.8-JS-Speed-limits.png"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>About <span>Speed limits and signs</span></h3> <br>

                            <a href=\"#speed\" class=\"btn\">See Over<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
            <div class=\"col-lg-6 col-sm-6\">
                <div class=\"looking-car\">
                    <div class=\"looking-cat-image\"> <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Module-Icons-1.8-JS-Your-licence.pngdrivib"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>
                    <div class=\"looking-car-content\">
                        <h3>Free <span>Test</span></h3> <br>

                        <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/"), "html", null, true);
        echo "\" class=\"btn\">Ready to pass <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                </div>
            </div>

            </div>


        </div>
        <div class=\"section-header text-center\">
            <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/pdf"), "html", null, true);
        echo "\" class=\"btn\">Get it PDF</a> </div>
    </section>
    <!-- /About -->

    <!-- About -->
    <section id=\"feu\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>OBJECTIVE OF Trafic lights section</h2>
                <p>
                    The objective of this section is to let you know, in what case and according to the places and circumstances, which lights to use, night and day when visibility is low.
                    <br>
                    Every driver must, during the night and whenever the conditions of visibility require it by day, make use of the lights relating to the equipment and the arrangement of the vehicles.
                    <br>
                    In order to drive safely, it is imperative that you have good visibility. It means two things:
                      <br>  
                    - to see the other users, thanks to its lighting (low beam for example)
<br>
                    - be well seen by other users thanks to its lighting and signaling
                </p>
                <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/courstrafic#courstrafic"), "html", null, true);
        echo "\" class=\"btn\">Lessons</a> </div>

        </div>
        </div>
    </section>
    <!-- /About -->
    <!-- About -->
    <section id=\"priorite\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>OBJECTIVE OF Road signs section</h2>
            <p>The intersection is certainly the situation that requires the utmost vigilance and the greatest respect for implicit and explicit rules: (priority right, the lights, the stop, give way)
                 <br>
                This section aims to:<br>
                To define the rules of priorities in the different cases of intersections, namely:<br>
                Intersections:<br>
                • with and without panels<br>
                • in roundabout<br>
                • with fires<br>
                Each of these intersections is governed by specific rules that you must learn and apply.This will ensure:<br>

                - better flow of traffic<br>
                - the safety of all road users<br></p>
                <a href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/coursroad#coursroad"), "html", null, true);
        echo "\" class=\"btn\">Lessons</a> </div>

        </div>
        </div>
    </section>
    <!-- /About -->
    <!-- About -->
    <section id=\"speed\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>OBJECTIVE OF Speed limits section</h2>
                <p>
                    To stay in control of your vehicle as required by the rules of the road, it is necessary to know how to estimate the distance needed to stop your vehicle in an emergency situation.
                    <br>
                    To give oneself the means to control his speed makes it possible to increase the security of each one.
                    <br>
                    In this section you will learn how to calculate:<br>
                         stopping distance<br>
                         the reaction distance<br>
                         the safety distance<br>
                </p>
                <a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/coursspeed#coursspeed"), "html", null, true);
        echo "\" class=\"btn\">Lessons</a> </div>

        </div>
        </div>
    </section>
    <!-- /About -->






    <!-- /Blog-->

";
        
        $__internal_22f7a8abd2d6eb67c44d3b1f85dc9db2b24820a31292c532e069cec42635ad15->leave($__internal_22f7a8abd2d6eb67c44d3b1f85dc9db2b24820a31292c532e069cec42635ad15_prof);

    }

    // line 183
    public function block_Script($context, array $blocks = array())
    {
        $__internal_84998c73ce99a673fd5e33b24edd94bc4cc5cdacade6b865640d69ee7fcd50b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84998c73ce99a673fd5e33b24edd94bc4cc5cdacade6b865640d69ee7fcd50b6->enter($__internal_84998c73ce99a673fd5e33b24edd94bc4cc5cdacade6b865640d69ee7fcd50b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 184
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_84998c73ce99a673fd5e33b24edd94bc4cc5cdacade6b865640d69ee7fcd50b6->leave($__internal_84998c73ce99a673fd5e33b24edd94bc4cc5cdacade6b865640d69ee7fcd50b6_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 193,  335 => 192,  330 => 190,  325 => 188,  321 => 187,  317 => 186,  313 => 184,  307 => 183,  285 => 167,  261 => 146,  235 => 123,  212 => 103,  200 => 94,  193 => 90,  181 => 81,  168 => 71,  156 => 62,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
    Welcome - Karhabty
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

    <!-- Banners -->
    <section  class=\"cc-section\">
         <div class=\"container\">
                <div class=\"div_zindex\">
               <div class=\"row\">
                    <div class=\"col-md-5 col-md-push-7\">
                        <div class=\"banner_content1\">

                        <h1>Learning to drive .</h1>
                            <p><strong>Check out the Tunisian Road Code below and get ready to nail your learner's test</strong> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banners -->

{% endblock %}

{% block Content %}



    <!-- About -->
    <section class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Tunisian Road Code </h2>
                <p>Select a chapter from the Road Code and work your way through the units. Each time you complete a unit or a chapter we'll update your progress.
                </p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"{{ asset('images/Module-Icons-1.8-JS-Traffic-lights.png') }}\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>About <span>Traffic lights</span></h3> <br>

                            <a href=\"#feu\" class=\"btn\">See Over<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"{{ asset('images/Module-Icons-1.8-JS-About-Signs.png') }}\" alt=\"Image\" /> </div>

                            <h3>About <span> Road signs</span></h3><br>

                            <a href=\"#priorite\" class=\"btn\">See Over<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>

                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"{{ asset('images/Module-Icons-1.8-JS-Speed-limits.png') }}\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>About <span>Speed limits and signs</span></h3> <br>

                            <a href=\"#speed\" class=\"btn\">See Over<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
            <div class=\"col-lg-6 col-sm-6\">
                <div class=\"looking-car\">
                    <div class=\"looking-cat-image\"> <img src=\"{{ asset('images/Module-Icons-1.8-JS-Your-licence.pngdrivib') }}\" alt=\"Image\" /> </div>
                    <div class=\"looking-car-content\">
                        <h3>Free <span>Test</span></h3> <br>

                        <a href=\"{{ asset('app_dev.php/auto/') }}\" class=\"btn\">Ready to pass <i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                </div>
            </div>

            </div>


        </div>
        <div class=\"section-header text-center\">
            <a href=\"{{ asset('app_dev.php/auto/pdf') }}\" class=\"btn\">Get it PDF</a> </div>
    </section>
    <!-- /About -->

    <!-- About -->
    <section id=\"feu\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>OBJECTIVE OF Trafic lights section</h2>
                <p>
                    The objective of this section is to let you know, in what case and according to the places and circumstances, which lights to use, night and day when visibility is low.
                    <br>
                    Every driver must, during the night and whenever the conditions of visibility require it by day, make use of the lights relating to the equipment and the arrangement of the vehicles.
                    <br>
                    In order to drive safely, it is imperative that you have good visibility. It means two things:
                      <br>  
                    - to see the other users, thanks to its lighting (low beam for example)
<br>
                    - be well seen by other users thanks to its lighting and signaling
                </p>
                <a href=\"{{ asset('app_dev.php/auto/courstrafic#courstrafic') }}\" class=\"btn\">Lessons</a> </div>

        </div>
        </div>
    </section>
    <!-- /About -->
    <!-- About -->
    <section id=\"priorite\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>OBJECTIVE OF Road signs section</h2>
            <p>The intersection is certainly the situation that requires the utmost vigilance and the greatest respect for implicit and explicit rules: (priority right, the lights, the stop, give way)
                 <br>
                This section aims to:<br>
                To define the rules of priorities in the different cases of intersections, namely:<br>
                Intersections:<br>
                • with and without panels<br>
                • in roundabout<br>
                • with fires<br>
                Each of these intersections is governed by specific rules that you must learn and apply.This will ensure:<br>

                - better flow of traffic<br>
                - the safety of all road users<br></p>
                <a href=\"{{ asset('app_dev.php/auto/coursroad#coursroad') }}\" class=\"btn\">Lessons</a> </div>

        </div>
        </div>
    </section>
    <!-- /About -->
    <!-- About -->
    <section id=\"speed\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>OBJECTIVE OF Speed limits section</h2>
                <p>
                    To stay in control of your vehicle as required by the rules of the road, it is necessary to know how to estimate the distance needed to stop your vehicle in an emergency situation.
                    <br>
                    To give oneself the means to control his speed makes it possible to increase the security of each one.
                    <br>
                    In this section you will learn how to calculate:<br>
                         stopping distance<br>
                         the reaction distance<br>
                         the safety distance<br>
                </p>
                <a href=\"{{ asset('app_dev.php/auto/coursspeed#coursspeed') }}\" class=\"btn\">Lessons</a> </div>

        </div>
        </div>
    </section>
    <!-- /About -->






    <!-- /Blog-->

{% endblock %}

{% block Script %}

    <!-- Scripts -->
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/interface.js') }}\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"{{ asset('js/bootstrap-slider.min.js') }}\"></script>
    <!--Slider-JS-->
    <script src=\"{{ asset('js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>

{% endblock %}




", "AutoEcoleBundle:Default:layout.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle/Resources/views/Default/layout.html.twig");
    }
}
