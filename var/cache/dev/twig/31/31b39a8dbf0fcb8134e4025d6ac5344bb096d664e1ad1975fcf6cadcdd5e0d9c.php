<?php

/* AnnonceBundle:Default:affichenewCL.html.twig */
class __TwigTemplate_e29e30245e3d491f002f9120e272aaf6e45837e0a099cef8b478c3ffa1cbeecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base3.html.twig", "AnnonceBundle:Default:affichenewCL.html.twig", 1);
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
        $__internal_446449499ea3007c863ae407283b71c0f20a62efc301772bcb7015eb8ae8138a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446449499ea3007c863ae407283b71c0f20a62efc301772bcb7015eb8ae8138a->enter($__internal_446449499ea3007c863ae407283b71c0f20a62efc301772bcb7015eb8ae8138a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Default:affichenewCL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446449499ea3007c863ae407283b71c0f20a62efc301772bcb7015eb8ae8138a->leave($__internal_446449499ea3007c863ae407283b71c0f20a62efc301772bcb7015eb8ae8138a_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_542218a7a8c516aa4319a4edf0f1ec8a5cf15161a908568311b340b28d09d25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542218a7a8c516aa4319a4edf0f1ec8a5cf15161a908568311b340b28d09d25c->enter($__internal_542218a7a8c516aa4319a4edf0f1ec8a5cf15161a908568311b340b28d09d25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_542218a7a8c516aa4319a4edf0f1ec8a5cf15161a908568311b340b28d09d25c->leave($__internal_542218a7a8c516aa4319a4edf0f1ec8a5cf15161a908568311b340b28d09d25c_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_d25460bec89146829669b03f426a895aa8496beea1eadf167934eeaa3fda3075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25460bec89146829669b03f426a895aa8496beea1eadf167934eeaa3fda3075->enter($__internal_d25460bec89146829669b03f426a895aa8496beea1eadf167934eeaa3fda3075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_d25460bec89146829669b03f426a895aa8496beea1eadf167934eeaa3fda3075->leave($__internal_d25460bec89146829669b03f426a895aa8496beea1eadf167934eeaa3fda3075_prof);

    }

    // line 28
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b14c52988a8c45eed52c3724eef42c8ec716155123fac5152305df546c1bb617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14c52988a8c45eed52c3724eef42c8ec716155123fac5152305df546c1bb617->enter($__internal_b14c52988a8c45eed52c3724eef42c8ec716155123fac5152305df546c1bb617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 29
        echo "    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h1>New Cars Announcements list</h1>
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 43
            echo "                    ";
            if (($this->getAttribute($context["modele"], "garantie", array()) != null)) {
                // line 44
                echo "                        <tr>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "categorie", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prix", array()), "html", null, true);
                echo "</td>
                            <td><img src=\"";
                // line 50
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["modele"], "image", array())), "html", null, true);
                echo "\"></td>
                            <td><a href=\"#\" data-toggle=\"modal\" data-target=\"#";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "idAnnonce", array()), "html", null, true);
                echo "\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                                                                                                         aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "idAnnonce", array()), "html", null, true);
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
                foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
                    // line 63
                    echo "
                                                    <div class=\"clearfix\"></div>
                                                    ";
                    // line 65
                    if (($this->getAttribute($context["modele"], "garantie", array()) != null)) {
                        // line 66
                        echo "                                                    <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
                        echo "</h3>
                                                    <ul>
                                                        <li><strong>";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["modele"], "idUser", array()), "username", array()), "html", null, true);
                        echo "</strong></li>
                                                        <li>";
                        // line 69
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "categorie", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "ville", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prix", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 73
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "region", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "type", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "garantie", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "nbrePlaces", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "nbrePortes", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "energie", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "nbreCylindres", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "puissance", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "consomationMixte", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "vitesseMax", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 83
                        echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "performance", array()), "html", null, true);
                        echo "</li>
                                                        <img src=\"";
                        // line 84
                        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["modele"], "image", array())), "html", null, true);
                        echo "\">
                                                    </ul>
                                                </div>
                                                ";
                    }
                    // line 88
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
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
            // line 99
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            </table>
        </div>
    </section>



    <!-- /Fun Facts-->




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
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 157
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
        
        $__internal_b14c52988a8c45eed52c3724eef42c8ec716155123fac5152305df546c1bb617->leave($__internal_b14c52988a8c45eed52c3724eef42c8ec716155123fac5152305df546c1bb617_prof);

    }

    // line 174
    public function block_Script($context, array $blocks = array())
    {
        $__internal_3feb183dbeffbf959537aae0a71e8bcc81df1d700b59f20b2324dc98a5ec4e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3feb183dbeffbf959537aae0a71e8bcc81df1d700b59f20b2324dc98a5ec4e8d->enter($__internal_3feb183dbeffbf959537aae0a71e8bcc81df1d700b59f20b2324dc98a5ec4e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 175
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3feb183dbeffbf959537aae0a71e8bcc81df1d700b59f20b2324dc98a5ec4e8d->leave($__internal_3feb183dbeffbf959537aae0a71e8bcc81df1d700b59f20b2324dc98a5ec4e8d_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Default:affichenewCL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 184,  410 => 183,  405 => 181,  400 => 179,  396 => 178,  392 => 177,  388 => 175,  382 => 174,  359 => 157,  349 => 150,  339 => 143,  329 => 136,  319 => 129,  309 => 122,  285 => 100,  279 => 99,  267 => 89,  261 => 88,  254 => 84,  250 => 83,  246 => 82,  242 => 81,  238 => 80,  234 => 79,  230 => 78,  226 => 77,  222 => 76,  218 => 75,  214 => 74,  210 => 73,  206 => 72,  202 => 71,  198 => 70,  194 => 69,  190 => 68,  184 => 66,  182 => 65,  178 => 63,  174 => 62,  162 => 53,  157 => 51,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  130 => 44,  127 => 43,  123 => 42,  108 => 29,  102 => 28,  92 => 21,  87 => 19,  82 => 17,  77 => 15,  73 => 14,  68 => 12,  63 => 10,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
            <h1>New Cars Announcements list</h1>
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
                {% for modele in annonces %}
                    {% if(modele.garantie != null) %}
                        <tr>
                            <td>{{ modele.titre }}</td>
                            <td>{{ modele.categorie }}</td>
                            <td>{{ modele.ville }}</td>
                            <td>{{ modele.description }}</td>
                            <td>{{ modele.prix }}</td>
                            <td><img src=\"{{ asset('images/Oussama/') ~ modele.image }}\"></td>
                            <td><a href=\"#\" data-toggle=\"modal\" data-target=\"#{{ modele.idAnnonce }}\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                                                                                                         aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"{{ modele.idAnnonce }}\" tabindex=\"-1\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                        <!-- Modal content-->
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">

                                            </div>
                                            <div class=\"modal-body modal-body-sub_agile\">
                                                <div class=\"col-md-8 \" align=\"center\">
                                                    {% for modele in annonces %}

                                                    <div class=\"clearfix\"></div>
                                                    {% if(modele.garantie != null) %}
                                                    <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title : {{ modele.titre }}</h3>
                                                    <ul>
                                                        <li><strong>{{ modele.idUser.username }}</strong></li>
                                                        <li>{{ modele.categorie }}</li>
                                                        <li>{{ modele.ville }}</li>
                                                        <li>{{ modele.description }}</li>
                                                        <li>{{ modele.prix }}</li>
                                                        <li>{{ modele.region }}</li>
                                                        <li>{{ modele.type }}</li>
                                                        <li>{{ modele.garantie }}</li>
                                                        <li>{{ modele.nbrePlaces }}</li>
                                                        <li>{{ modele.nbrePortes }}</li>
                                                        <li>{{ modele.energie }}</li>
                                                        <li>{{ modele.nbreCylindres }}</li>
                                                        <li>{{ modele.puissance }}</li>
                                                        <li>{{ modele.consomationMixte }}</li>
                                                        <li>{{ modele.vitesseMax }}</li>
                                                        <li>{{ modele.performance }}</li>
                                                        <img src=\"{{ asset('images/Oussama/') ~ modele.image }}\">
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



    <!-- /Fun Facts-->




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




", "AnnonceBundle:Default:affichenewCL.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AnnonceBundle/Resources/views/Default/affichenewCL.html.twig");
    }
}
