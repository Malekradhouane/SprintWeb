<?php

/* AutoEcoleBundle:Default:coursroad.html.twig */
class __TwigTemplate_4a7e39426dc9cba81fb315058b27f696000c36e9eeb952db1eeb612774ed17f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AutoEcoleBundle:Default:coursroad.html.twig", 1);
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
        $__internal_c5c60a36a0a52832ac8d2cfa7a24875b5ed20aee7d22444a1ab2c9079d6ce5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c60a36a0a52832ac8d2cfa7a24875b5ed20aee7d22444a1ab2c9079d6ce5dd->enter($__internal_c5c60a36a0a52832ac8d2cfa7a24875b5ed20aee7d22444a1ab2c9079d6ce5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:coursroad.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c60a36a0a52832ac8d2cfa7a24875b5ed20aee7d22444a1ab2c9079d6ce5dd->leave($__internal_c5c60a36a0a52832ac8d2cfa7a24875b5ed20aee7d22444a1ab2c9079d6ce5dd_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_11ada8b34dd66ba62a15c6a4298b73b09aa9555f2c70d179d435c0f86909ff60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ada8b34dd66ba62a15c6a4298b73b09aa9555f2c70d179d435c0f86909ff60->enter($__internal_11ada8b34dd66ba62a15c6a4298b73b09aa9555f2c70d179d435c0f86909ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_11ada8b34dd66ba62a15c6a4298b73b09aa9555f2c70d179d435c0f86909ff60->leave($__internal_11ada8b34dd66ba62a15c6a4298b73b09aa9555f2c70d179d435c0f86909ff60_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_26e7b3f820cf59a7888b353d4bb669185436c6f795c2c885de3a4b01e498d8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e7b3f820cf59a7888b353d4bb669185436c6f795c2c885de3a4b01e498d8da->enter($__internal_26e7b3f820cf59a7888b353d4bb669185436c6f795c2c885de3a4b01e498d8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_26e7b3f820cf59a7888b353d4bb669185436c6f795c2c885de3a4b01e498d8da->leave($__internal_26e7b3f820cf59a7888b353d4bb669185436c6f795c2c885de3a4b01e498d8da_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_9806b1a41a61a17dc4e69f2b5c7258fd79f8017fa571554454f54ddc3058afd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9806b1a41a61a17dc4e69f2b5c7258fd79f8017fa571554454f54ddc3058afd9->enter($__internal_9806b1a41a61a17dc4e69f2b5c7258fd79f8017fa571554454f54ddc3058afd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

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
        
        $__internal_9806b1a41a61a17dc4e69f2b5c7258fd79f8017fa571554454f54ddc3058afd9->leave($__internal_9806b1a41a61a17dc4e69f2b5c7258fd79f8017fa571554454f54ddc3058afd9_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_97363407cac813fe34e6504b0181be73a778b0961a2263be731ee7b9b032df33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97363407cac813fe34e6504b0181be73a778b0961a2263be731ee7b9b032df33->enter($__internal_97363407cac813fe34e6504b0181be73a778b0961a2263be731ee7b9b032df33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Module-Icons-1.8-JS-Traffic-lights.png"), "html", null, true);
        echo "\" alt=\"Image\" />


            </div>
        </div>

    </section>

    <!-- /About -->
    <!-- About -->
    <section id=\"coursroad\" class=\"about-us-section section-padding\">
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
                    ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "Path", array()), "html", null, true);
            echo "
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
        // line 86
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["coursautoecole"]) ? $context["coursautoecole"] : $this->getContext($context, "coursautoecole")));
        echo "
        </div>

    </section>

    <!-- /About -->




";
        
        $__internal_97363407cac813fe34e6504b0181be73a778b0961a2263be731ee7b9b032df33->leave($__internal_97363407cac813fe34e6504b0181be73a778b0961a2263be731ee7b9b032df33_prof);

    }

    // line 98
    public function block_Script($context, array $blocks = array())
    {
        $__internal_e3b08b70aca7802dafddd479675f50514c29de3c1b3c9e9bc700cdd565366b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b08b70aca7802dafddd479675f50514c29de3c1b3c9e9bc700cdd565366b5c->enter($__internal_e3b08b70aca7802dafddd479675f50514c29de3c1b3c9e9bc700cdd565366b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 99
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_e3b08b70aca7802dafddd479675f50514c29de3c1b3c9e9bc700cdd565366b5c->leave($__internal_e3b08b70aca7802dafddd479675f50514c29de3c1b3c9e9bc700cdd565366b5c_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:coursroad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 108,  245 => 107,  240 => 105,  235 => 103,  231 => 102,  227 => 101,  223 => 99,  217 => 98,  199 => 86,  194 => 83,  185 => 80,  179 => 77,  175 => 75,  171 => 74,  154 => 60,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
                <img src=\"{{ asset('images/Module-Icons-1.8-JS-Traffic-lights.png') }}\" alt=\"Image\" />


            </div>
        </div>

    </section>

    <!-- /About -->
    <!-- About -->
    <section id=\"coursroad\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">

                {% for coursautoecole in coursautoecole %}
                    <br>
                    <br>
                    {{ coursautoecole.Path }}
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




", "AutoEcoleBundle:Default:coursroad.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle/Resources/views/Default/coursroad.html.twig");
    }
}
