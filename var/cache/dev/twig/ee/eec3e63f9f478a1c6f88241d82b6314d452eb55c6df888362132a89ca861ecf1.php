<?php

/* AnnonceBundle:Default:afficheoldCL.html.twig */
class __TwigTemplate_9c88c1614e7a099648b26dea596e4ca53e9a491117b83a40bd0929cba0c91312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base3.html.twig", "AnnonceBundle:Default:afficheoldCL.html.twig", 1);
        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'Sheets' => array($this, 'block_Sheets'),
            'Content' => array($this, 'block_Content'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f65473b4c462085eed9bb82b56735af19df89bd7bb5d8ae3d8411c69a7a4b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f65473b4c462085eed9bb82b56735af19df89bd7bb5d8ae3d8411c69a7a4b26->enter($__internal_9f65473b4c462085eed9bb82b56735af19df89bd7bb5d8ae3d8411c69a7a4b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Default:afficheoldCL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f65473b4c462085eed9bb82b56735af19df89bd7bb5d8ae3d8411c69a7a4b26->leave($__internal_9f65473b4c462085eed9bb82b56735af19df89bd7bb5d8ae3d8411c69a7a4b26_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_db2752e7101c480f969fbc0c110851f77c29052cfbfb92f51df1594e53338fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2752e7101c480f969fbc0c110851f77c29052cfbfb92f51df1594e53338fc1->enter($__internal_db2752e7101c480f969fbc0c110851f77c29052cfbfb92f51df1594e53338fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_db2752e7101c480f969fbc0c110851f77c29052cfbfb92f51df1594e53338fc1->leave($__internal_db2752e7101c480f969fbc0c110851f77c29052cfbfb92f51df1594e53338fc1_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_0df90f078eff3f7609328f8f8a5b2e1d779bb49fba80e64e7f50f613309df8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df90f078eff3f7609328f8f8a5b2e1d779bb49fba80e64e7f50f613309df8c5->enter($__internal_0df90f078eff3f7609328f8f8a5b2e1d779bb49fba80e64e7f50f613309df8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_0df90f078eff3f7609328f8f8a5b2e1d779bb49fba80e64e7f50f613309df8c5->leave($__internal_0df90f078eff3f7609328f8f8a5b2e1d779bb49fba80e64e7f50f613309df8c5_prof);

    }

    // line 26
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0c92140ec94fae91efbc1c588a63f0dbd66f4745bf7789a8488d900776adcfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c92140ec94fae91efbc1c588a63f0dbd66f4745bf7789a8488d900776adcfdd->enter($__internal_0c92140ec94fae91efbc1c588a63f0dbd66f4745bf7789a8488d900776adcfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 27
        echo "
    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h2 style=\"color: rebeccapurple\" >Used Cars Announcements list</h2>
            <table>
                <tr>
                    <td> Title</td>
                    <td> Category</td>
                    <td> City</td>
                    <td> Description</td>
                    <td> Price</td>
                    <td>Image(s)</td>
                    <td>Want More ?</td>
                </tr>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annoce"]) {
            // line 42
            echo "                    ";
            if (($this->getAttribute($context["annoce"], "garantie", array()) == null)) {
                // line 43
                echo "                        <tr>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "titre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "categorie", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "prix", array()), "html", null, true);
                echo "</td>
                            <td><img src=\"";
                // line 49
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["annoce"], "image", array())), "html", null, true);
                echo "\"></td>
                            <td><a id=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "idAnnonce", array()), "html", null, true);
                echo "\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"

                                                                                                                                                               aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "idAnnonce", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                        <!-- Modal content-->
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">

                                            </div>
                                            <div class=\"modal-body modal-body-sub_agile\">
                                                <div class=\"col-md-8 \" align=\"center\">
                                                    ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
                foreach ($context['_seq'] as $context["_key"] => $context["annoc"]) {
                    // line 63
                    echo "
                                                    <div class=\"clearfix\"></div>
                                                    ";
                    // line 65
                    if (($this->getAttribute($context["annoc"], "idAnnonce", array()) == $this->getAttribute($context["annoce"], "idAnnonce", array()))) {
                        // line 66
                        echo "
                                                    <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title : ";
                        // line 67
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "titre", array()), "html", null, true);
                        echo "</h3>
                                                    <ul>
                                                        <li><strong>";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annoc"], "idUser", array()), "username", array()), "html", null, true);
                        echo "</strong></li>
                                                        <li>";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "categorie", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "ville", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "description", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 73
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "prix", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "region", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "type", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "adresse", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "kilometrage", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 78
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annoc"], "miseCirculation", array()), "Y/M/d"), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "numTel", array()), "html", null, true);
                        echo "</li>
                                                        <img src=\"";
                        // line 80
                        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["annoc"], "image", array())), "html", null, true);
                        echo "\">
                                                    </ul>
                                                </div>
                                                ";
                    }
                    // line 84
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <!-- //Modal content-->
                                    </div>

                                </div>
                            </td>
                        </tr>
                    ";
            }
            // line 95
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            </table>
        </div>
    </section>




    <!--Trending Car-->
    <section class=\"section-padding gray-bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Trending <span>Cars of the Year</span></h2>
                <p></p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div id=\"trending_slider\">
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">BMW 535i</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Trending Car-->



";
        
        $__internal_0c92140ec94fae91efbc1c588a63f0dbd66f4745bf7789a8488d900776adcfdd->leave($__internal_0c92140ec94fae91efbc1c588a63f0dbd66f4745bf7789a8488d900776adcfdd_prof);

    }

    // line 166
    public function block_Script($context, array $blocks = array())
    {
        $__internal_3546147582460b79226fc37a0b7556e42f1105277dd7f5dcbfe5edc7cdb51ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3546147582460b79226fc37a0b7556e42f1105277dd7f5dcbfe5edc7cdb51ac6->enter($__internal_3546147582460b79226fc37a0b7556e42f1105277dd7f5dcbfe5edc7cdb51ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 167
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3546147582460b79226fc37a0b7556e42f1105277dd7f5dcbfe5edc7cdb51ac6->leave($__internal_3546147582460b79226fc37a0b7556e42f1105277dd7f5dcbfe5edc7cdb51ac6_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Default:afficheoldCL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 176,  390 => 175,  385 => 173,  380 => 171,  376 => 170,  372 => 169,  368 => 167,  362 => 166,  339 => 149,  329 => 142,  319 => 135,  309 => 128,  299 => 121,  289 => 114,  269 => 96,  263 => 95,  251 => 85,  245 => 84,  238 => 80,  234 => 79,  230 => 78,  226 => 77,  222 => 76,  218 => 75,  214 => 74,  210 => 73,  206 => 72,  202 => 71,  198 => 70,  194 => 69,  189 => 67,  186 => 66,  184 => 65,  180 => 63,  176 => 62,  164 => 53,  158 => 50,  154 => 49,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  134 => 44,  131 => 43,  128 => 42,  124 => 41,  108 => 27,  102 => 26,  92 => 21,  87 => 19,  82 => 17,  77 => 15,  73 => 14,  68 => 12,  63 => 10,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base3.html.twig' %}

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


{% block Content %}

    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h2 style=\"color: rebeccapurple\" >Used Cars Announcements list</h2>
            <table>
                <tr>
                    <td> Title</td>
                    <td> Category</td>
                    <td> City</td>
                    <td> Description</td>
                    <td> Price</td>
                    <td>Image(s)</td>
                    <td>Want More ?</td>
                </tr>
                {% for annoce in annonces %}
                    {% if(annoce.garantie == null)%}
                        <tr>
                            <td>{{ annoce.titre }}</td>
                            <td>{{ annoce.categorie }}</td>
                            <td>{{ annoce.ville }}</td>
                            <td>{{ annoce.description }}</td>
                            <td>{{ annoce.prix }}</td>
                            <td><img src=\"{{ asset('images/Oussama/') ~ annoce.image }}\"></td>
                            <td><a id=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#{{ annoce.idAnnonce }}\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"

                                                                                                                                                               aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"{{ annoce.idAnnonce }}\" tabindex=\"-1\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                        <!-- Modal content-->
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">

                                            </div>
                                            <div class=\"modal-body modal-body-sub_agile\">
                                                <div class=\"col-md-8 \" align=\"center\">
                                                    {% for annoc in annonces %}

                                                    <div class=\"clearfix\"></div>
                                                    {% if(annoc.idAnnonce == annoce.idAnnonce) %}

                                                    <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title : {{ annoc.titre }}</h3>
                                                    <ul>
                                                        <li><strong>{{ annoc.idUser.username }}</strong></li>
                                                        <li>{{ annoc.categorie }}</li>
                                                        <li>{{ annoc.ville }}</li>
                                                        <li>{{ annoc.description }}</li>
                                                        <li>{{ annoc.prix }}</li>
                                                        <li>{{ annoc.region }}</li>
                                                        <li>{{ annoc.type }}</li>
                                                        <li>{{ annoc.adresse }}</li>
                                                        <li>{{ annoc.kilometrage }}</li>
                                                        <li>{{ annoc.miseCirculation|date('Y/M/d') }}</li>
                                                        <li>{{ annoc.numTel }}</li>
                                                        <img src=\"{{ asset('images/Oussama/') ~ annoc.image }}\">
                                                    </ul>
                                                </div>
                                                {% endif %}
                                                {% endfor %}
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <!-- //Modal content-->
                                    </div>

                                </div>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </table>
        </div>
    </section>




    <!--Trending Car-->
    <section class=\"section-padding gray-bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Trending <span>Cars of the Year</span></h2>
                <p></p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div id=\"trending_slider\">
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"{{ asset('images/trending-car-img-1.jpg') }}\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"{{ asset('images/trending-car-img-2.jpg') }}\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"{{ asset('images/trending-car-img-3.jpg') }}\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"{{ asset('images/trending-car-img-1.jpg') }}\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"{{ asset('images/trending-car-img-2.jpg') }}\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"{{ asset('images/trending-car-img-3.jpg') }}\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">BMW 535i</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Trending Car-->



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




", "AnnonceBundle:Default:afficheoldCL.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AnnonceBundle\\Resources\\views\\Default\\afficheoldCL.html.twig");
    }
}