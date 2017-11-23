<?php

/* AutoEcoleBundle:Default:courstrafic.html.twig */
class __TwigTemplate_819fe2e34395ef51ff7d0864d23ee1e59ecfb62249823b82225931dee420bf0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AutoEcoleBundle:Default:courstrafic.html.twig", 1);
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
        $__internal_fd4de4d2b2d102682a68d9f6836daaf1401d466da61921a5d7b05116dd78e110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4de4d2b2d102682a68d9f6836daaf1401d466da61921a5d7b05116dd78e110->enter($__internal_fd4de4d2b2d102682a68d9f6836daaf1401d466da61921a5d7b05116dd78e110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:courstrafic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4de4d2b2d102682a68d9f6836daaf1401d466da61921a5d7b05116dd78e110->leave($__internal_fd4de4d2b2d102682a68d9f6836daaf1401d466da61921a5d7b05116dd78e110_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_f0e992996e37973642439dc6545e39cc9d82284e7c3b5cfb02bc4fd7bb1318f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e992996e37973642439dc6545e39cc9d82284e7c3b5cfb02bc4fd7bb1318f5->enter($__internal_f0e992996e37973642439dc6545e39cc9d82284e7c3b5cfb02bc4fd7bb1318f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_f0e992996e37973642439dc6545e39cc9d82284e7c3b5cfb02bc4fd7bb1318f5->leave($__internal_f0e992996e37973642439dc6545e39cc9d82284e7c3b5cfb02bc4fd7bb1318f5_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_afe8ab52aafd0582d35018c78e1e5e7bbb627e1671a92374055ded7e84317b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe8ab52aafd0582d35018c78e1e5e7bbb627e1671a92374055ded7e84317b3b->enter($__internal_afe8ab52aafd0582d35018c78e1e5e7bbb627e1671a92374055ded7e84317b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_afe8ab52aafd0582d35018c78e1e5e7bbb627e1671a92374055ded7e84317b3b->leave($__internal_afe8ab52aafd0582d35018c78e1e5e7bbb627e1671a92374055ded7e84317b3b_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_d7c4bba6fdac70f54c04184d9dde0402e8602a088c550fdc5e2c2a339064c43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c4bba6fdac70f54c04184d9dde0402e8602a088c550fdc5e2c2a339064c43f->enter($__internal_d7c4bba6fdac70f54c04184d9dde0402e8602a088c550fdc5e2c2a339064c43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

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
        
        $__internal_d7c4bba6fdac70f54c04184d9dde0402e8602a088c550fdc5e2c2a339064c43f->leave($__internal_d7c4bba6fdac70f54c04184d9dde0402e8602a088c550fdc5e2c2a339064c43f_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_63bc458c92888e00a4de0ecf5a0b70d810a4de82cf5798828bd289a4e48c183c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bc458c92888e00a4de0ecf5a0b70d810a4de82cf5798828bd289a4e48c183c->enter($__internal_63bc458c92888e00a4de0ecf5a0b70d810a4de82cf5798828bd289a4e48c183c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
    <section id=\"courstrafic\" class=\"about-us-section section-padding\">
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
            // line 78
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(""), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "Path", array()), "html", null, true);
            echo "\" alt=\"Image\" />


                    <br>
                    <br>
                    ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "cours", array()), "html", null, true);
            echo "

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coursautoecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </div>
        </div>
        <div class=\" navigation text-center \">
            ";
        // line 89
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["coursautoecole"]) ? $context["coursautoecole"] : $this->getContext($context, "coursautoecole")));
        echo "
        </div>

    </section>

    <!-- /About -->





";
        
        $__internal_63bc458c92888e00a4de0ecf5a0b70d810a4de82cf5798828bd289a4e48c183c->leave($__internal_63bc458c92888e00a4de0ecf5a0b70d810a4de82cf5798828bd289a4e48c183c_prof);

    }

    // line 102
    public function block_Script($context, array $blocks = array())
    {
        $__internal_617f3bdd23d2afc0401935596d8dc2b7fe96f3b0034282db3fadf0526946754f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617f3bdd23d2afc0401935596d8dc2b7fe96f3b0034282db3fadf0526946754f->enter($__internal_617f3bdd23d2afc0401935596d8dc2b7fe96f3b0034282db3fadf0526946754f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 103
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_617f3bdd23d2afc0401935596d8dc2b7fe96f3b0034282db3fadf0526946754f->leave($__internal_617f3bdd23d2afc0401935596d8dc2b7fe96f3b0034282db3fadf0526946754f_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:courstrafic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 112,  250 => 111,  245 => 109,  240 => 107,  236 => 106,  232 => 105,  228 => 103,  222 => 102,  203 => 89,  198 => 86,  189 => 83,  179 => 78,  175 => 75,  171 => 74,  154 => 60,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
    <section id=\"courstrafic\" class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">

                {% for coursautoecole in coursautoecole %}
                    <br>
                    <br>
                   {# <a href=\"{{ asset('') }}{{ coursautoecole.Path }}\">Télécharger</a>#}
                    <img src=\"{{ asset('') }}{{ coursautoecole.Path }}\" alt=\"Image\" />


                    <br>
                    <br>
                    {{ coursautoecole.cours }}

                {% endfor %}
            </div>
        </div>
        <div class=\" navigation text-center \">
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




", "AutoEcoleBundle:Default:courstrafic.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle/Resources/views/Default/courstrafic.html.twig");
    }
}
