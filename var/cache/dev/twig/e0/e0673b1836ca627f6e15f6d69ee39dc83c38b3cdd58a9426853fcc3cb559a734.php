<?php

/* AutoEcoleBundle:Default:coursspeed.html.twig */
class __TwigTemplate_9b04def96cbcefa886fc77fb8e788ce5e7e82d3818bcb4c24794705fe865956f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AutoEcoleBundle:Default:coursspeed.html.twig", 1);
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
        $__internal_c0dc4842029dd7188505b13db5ed0ddd5e0a08cec0fe9738d6bb637b03133023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0dc4842029dd7188505b13db5ed0ddd5e0a08cec0fe9738d6bb637b03133023->enter($__internal_c0dc4842029dd7188505b13db5ed0ddd5e0a08cec0fe9738d6bb637b03133023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:coursspeed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0dc4842029dd7188505b13db5ed0ddd5e0a08cec0fe9738d6bb637b03133023->leave($__internal_c0dc4842029dd7188505b13db5ed0ddd5e0a08cec0fe9738d6bb637b03133023_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_87c818ec1199ef14f65cce10f199f46b10495892c29970186c0e171a930229f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c818ec1199ef14f65cce10f199f46b10495892c29970186c0e171a930229f2->enter($__internal_87c818ec1199ef14f65cce10f199f46b10495892c29970186c0e171a930229f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_87c818ec1199ef14f65cce10f199f46b10495892c29970186c0e171a930229f2->leave($__internal_87c818ec1199ef14f65cce10f199f46b10495892c29970186c0e171a930229f2_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_ac23e22c9bcbd51b0f125d2885c1e1f2d55343d4644c5cde37297841018aea20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac23e22c9bcbd51b0f125d2885c1e1f2d55343d4644c5cde37297841018aea20->enter($__internal_ac23e22c9bcbd51b0f125d2885c1e1f2d55343d4644c5cde37297841018aea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

        // line 8
        echo "         ";
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
        
        $__internal_ac23e22c9bcbd51b0f125d2885c1e1f2d55343d4644c5cde37297841018aea20->leave($__internal_ac23e22c9bcbd51b0f125d2885c1e1f2d55343d4644c5cde37297841018aea20_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_eebc1d420b7b3fc53544b1afb11da9d5ea58bda35105ba6f6d97f8e11c6d575d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebc1d420b7b3fc53544b1afb11da9d5ea58bda35105ba6f6d97f8e11c6d575d->enter($__internal_eebc1d420b7b3fc53544b1afb11da9d5ea58bda35105ba6f6d97f8e11c6d575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

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
        
        $__internal_eebc1d420b7b3fc53544b1afb11da9d5ea58bda35105ba6f6d97f8e11c6d575d->leave($__internal_eebc1d420b7b3fc53544b1afb11da9d5ea58bda35105ba6f6d97f8e11c6d575d_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b7ee88b040954f389212dd74b25c8d45a49b6f497d1a02eee2ea9e2d809b2e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ee88b040954f389212dd74b25c8d45a49b6f497d1a02eee2ea9e2d809b2e7a->enter($__internal_b7ee88b040954f389212dd74b25c8d45a49b6f497d1a02eee2ea9e2d809b2e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
            <div class=\"row text-center\">
                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Module-Icons-1.8-JS-Speed-limits.png"), "html", null, true);
        echo "\" alt=\"Image\" />


            </div>
        </div>

    </section>

    <!-- /About -->
    <!-- About -->
    <section id=\"coursspeed\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">

                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coursautoecole"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coursautoecole"]) {
            // line 75
            echo "                    <br>
                    <br>
                    <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["coursautoecole"], "path", array()))), "html", null, true);
            echo "\" alt=\"\">
                    <br>
                    <br>
                    ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "cours", array()), "html", null, true);
            echo "

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coursautoecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "            </div>
        </div>

            <div class=\" navigation text-center\">
                ";
        // line 87
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["coursautoecole"]) ? $context["coursautoecole"] : $this->getContext($context, "coursautoecole")));
        echo "
            </div>


    </section>

    <!-- /About -->




    <!-- /Fun Facts-->




";
        
        $__internal_b7ee88b040954f389212dd74b25c8d45a49b6f497d1a02eee2ea9e2d809b2e7a->leave($__internal_b7ee88b040954f389212dd74b25c8d45a49b6f497d1a02eee2ea9e2d809b2e7a_prof);

    }

    // line 105
    public function block_Script($context, array $blocks = array())
    {
        $__internal_923e25b39f41d4a446bc9e81f6e797943a87156b20cb47847679cfd9e5454732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923e25b39f41d4a446bc9e81f6e797943a87156b20cb47847679cfd9e5454732->enter($__internal_923e25b39f41d4a446bc9e81f6e797943a87156b20cb47847679cfd9e5454732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 106
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_923e25b39f41d4a446bc9e81f6e797943a87156b20cb47847679cfd9e5454732->leave($__internal_923e25b39f41d4a446bc9e81f6e797943a87156b20cb47847679cfd9e5454732_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:coursspeed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 115,  252 => 114,  247 => 112,  242 => 110,  238 => 109,  234 => 108,  230 => 106,  224 => 105,  200 => 87,  194 => 83,  185 => 80,  179 => 77,  175 => 75,  171 => 74,  154 => 60,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
            <div class=\"row text-center\">
                <img src=\"{{ asset('images/Module-Icons-1.8-JS-Speed-limits.png') }}\" alt=\"Image\" />


            </div>
        </div>

    </section>

    <!-- /About -->
    <!-- About -->
    <section id=\"coursspeed\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">

                {% for coursautoecole in coursautoecole %}
                    <br>
                    <br>
                    <img src=\"{{ asset('images/'~coursautoecole.path) }}\" alt=\"\">
                    <br>
                    <br>
                    {{ coursautoecole.cours }}

                {% endfor %}
            </div>
        </div>

            <div class=\" navigation text-center\">
                {{ knp_pagination_render(coursautoecole) }}
            </div>


    </section>

    <!-- /About -->




    <!-- /Fun Facts-->




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




", "AutoEcoleBundle:Default:coursspeed.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle\\Resources\\views\\Default\\coursspeed.html.twig");
    }
}
