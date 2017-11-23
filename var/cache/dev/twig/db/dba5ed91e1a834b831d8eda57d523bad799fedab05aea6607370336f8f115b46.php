<?php

/* @AutoEcole/Default/courstrafic.html.twig */
class __TwigTemplate_51256e3ae4f9eb30825433809f8d44007652eb267fd70f65d2bd48274b57fb46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@AutoEcole/Default/courstrafic.html.twig", 1);
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
        $__internal_d42cbfaad3f570631dfc0bdc2371103794b44df3f6cc0a0597d5790306c5827e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42cbfaad3f570631dfc0bdc2371103794b44df3f6cc0a0597d5790306c5827e->enter($__internal_d42cbfaad3f570631dfc0bdc2371103794b44df3f6cc0a0597d5790306c5827e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AutoEcole/Default/courstrafic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42cbfaad3f570631dfc0bdc2371103794b44df3f6cc0a0597d5790306c5827e->leave($__internal_d42cbfaad3f570631dfc0bdc2371103794b44df3f6cc0a0597d5790306c5827e_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_f23a8b4f9b3f67c698a2ed089f744605f177268855e9c7fca1e4cd4b822d2a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23a8b4f9b3f67c698a2ed089f744605f177268855e9c7fca1e4cd4b822d2a6f->enter($__internal_f23a8b4f9b3f67c698a2ed089f744605f177268855e9c7fca1e4cd4b822d2a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_f23a8b4f9b3f67c698a2ed089f744605f177268855e9c7fca1e4cd4b822d2a6f->leave($__internal_f23a8b4f9b3f67c698a2ed089f744605f177268855e9c7fca1e4cd4b822d2a6f_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_813186682887b15ca2c0566112db6c602d45a2a1fbfdb2f0bf0a991db52a1afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813186682887b15ca2c0566112db6c602d45a2a1fbfdb2f0bf0a991db52a1afa->enter($__internal_813186682887b15ca2c0566112db6c602d45a2a1fbfdb2f0bf0a991db52a1afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_813186682887b15ca2c0566112db6c602d45a2a1fbfdb2f0bf0a991db52a1afa->leave($__internal_813186682887b15ca2c0566112db6c602d45a2a1fbfdb2f0bf0a991db52a1afa_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_d959649059850d35d2b5fd3434f5b5ad22c0ba5aa8632e3c50475d4e4a0378cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d959649059850d35d2b5fd3434f5b5ad22c0ba5aa8632e3c50475d4e4a0378cc->enter($__internal_d959649059850d35d2b5fd3434f5b5ad22c0ba5aa8632e3c50475d4e4a0378cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

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
        
        $__internal_d959649059850d35d2b5fd3434f5b5ad22c0ba5aa8632e3c50475d4e4a0378cc->leave($__internal_d959649059850d35d2b5fd3434f5b5ad22c0ba5aa8632e3c50475d4e4a0378cc_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_2f084ee596c411967fbe182437ce3248867ba728b7df21eb861afc5fa4eba4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f084ee596c411967fbe182437ce3248867ba728b7df21eb861afc5fa4eba4de->enter($__internal_2f084ee596c411967fbe182437ce3248867ba728b7df21eb861afc5fa4eba4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_2f084ee596c411967fbe182437ce3248867ba728b7df21eb861afc5fa4eba4de->leave($__internal_2f084ee596c411967fbe182437ce3248867ba728b7df21eb861afc5fa4eba4de_prof);

    }

    // line 102
    public function block_Script($context, array $blocks = array())
    {
        $__internal_8e56020918f98f38f901189af205c817b13cc48aed7008ffc9944e78e59f5862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e56020918f98f38f901189af205c817b13cc48aed7008ffc9944e78e59f5862->enter($__internal_8e56020918f98f38f901189af205c817b13cc48aed7008ffc9944e78e59f5862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

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
        
        $__internal_8e56020918f98f38f901189af205c817b13cc48aed7008ffc9944e78e59f5862->leave($__internal_8e56020918f98f38f901189af205c817b13cc48aed7008ffc9944e78e59f5862_prof);

    }

    public function getTemplateName()
    {
        return "@AutoEcole/Default/courstrafic.html.twig";
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




", "@AutoEcole/Default/courstrafic.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle\\Resources\\views\\Default\\courstrafic.html.twig");
    }
}
