<?php

/* @Annonce/Modele/affichetout.html.twig */
class __TwigTemplate_8002c0f55352061d7694cda4b77423ea98fcf988304b8044360a4b002ffb16d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Annonce/Modele/affichetout.html.twig", 1);
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
        $__internal_f5c5dd4bfd0694aec086ee80a937351bf94a235a7c2377f8e747a2a1138a0e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c5dd4bfd0694aec086ee80a937351bf94a235a7c2377f8e747a2a1138a0e0b->enter($__internal_f5c5dd4bfd0694aec086ee80a937351bf94a235a7c2377f8e747a2a1138a0e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/Modele/affichetout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c5dd4bfd0694aec086ee80a937351bf94a235a7c2377f8e747a2a1138a0e0b->leave($__internal_f5c5dd4bfd0694aec086ee80a937351bf94a235a7c2377f8e747a2a1138a0e0b_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_59b032a33b273c2610fc7f4bf6a9dfaa067dad7404a36f58a0eeb83dba31501b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b032a33b273c2610fc7f4bf6a9dfaa067dad7404a36f58a0eeb83dba31501b->enter($__internal_59b032a33b273c2610fc7f4bf6a9dfaa067dad7404a36f58a0eeb83dba31501b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_59b032a33b273c2610fc7f4bf6a9dfaa067dad7404a36f58a0eeb83dba31501b->leave($__internal_59b032a33b273c2610fc7f4bf6a9dfaa067dad7404a36f58a0eeb83dba31501b_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_9dd198bf5d5892071bc246ad0a9662cfcecb1ebb1bdda9d95a3b10098bcc0417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd198bf5d5892071bc246ad0a9662cfcecb1ebb1bdda9d95a3b10098bcc0417->enter($__internal_9dd198bf5d5892071bc246ad0a9662cfcecb1ebb1bdda9d95a3b10098bcc0417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_9dd198bf5d5892071bc246ad0a9662cfcecb1ebb1bdda9d95a3b10098bcc0417->leave($__internal_9dd198bf5d5892071bc246ad0a9662cfcecb1ebb1bdda9d95a3b10098bcc0417_prof);

    }

    // line 27
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_e8cbe67cc88bf3f99c29af85732943431bf9a72c8dcaa1a00be4180cee842129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8cbe67cc88bf3f99c29af85732943431bf9a72c8dcaa1a00be4180cee842129->enter($__internal_e8cbe67cc88bf3f99c29af85732943431bf9a72c8dcaa1a00be4180cee842129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

        // line 28
        echo "
    <!-- Banners -->

    <!-- /Banners -->

";
        
        $__internal_e8cbe67cc88bf3f99c29af85732943431bf9a72c8dcaa1a00be4180cee842129->leave($__internal_e8cbe67cc88bf3f99c29af85732943431bf9a72c8dcaa1a00be4180cee842129_prof);

    }

    // line 35
    public function block_Content($context, array $blocks = array())
    {
        $__internal_e4052a356df5f81bf71f9382766ff1fb827b5072b07e640bb0e99649a061950a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4052a356df5f81bf71f9382766ff1fb827b5072b07e640bb0e99649a061950a->enter($__internal_e4052a356df5f81bf71f9382766ff1fb827b5072b07e640bb0e99649a061950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 36
        echo "    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h1>New Cars Announcements list</h1>
            <table>
                <thead>
                <tr>
                    <td> Title</td>
                    <td> Category</td>
                    <td> City</td>
                    <td> Description</td>
                    <td> Price</td>
                    <td>Image(s)</td>
                    <td>Want More ?</td>
                </tr>
                </thead>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 52
            echo "                    ";
            if (($this->getAttribute($context["modele"], "garantie", array()) != null)) {
                // line 53
                echo "                        <tbody>
                        <tr>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "categorie", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prix", array()), "html", null, true);
                echo "</td>
                            <td><img src=\"";
                // line 60
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["modele"], "image", array())), "html", null, true);
                echo "\"></td>
                            <td>
                                <a href=\"#\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                                               aria-hidden=\"true\"></i></span></a>
                            </td>
                        </tr>
                        </tbody>
                    ";
            }
            // line 68
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </table>
        </div>
    </section>

    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h1>Old Cars Announcements list</h1>
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 87
            echo "                    ";
            if (($this->getAttribute($context["modele"], "garantie", array()) == null)) {
                // line 88
                echo "                        <tr>
                            <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "titre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "categorie", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "prix", array()), "html", null, true);
                echo "</td>
                            <td><img src=\"";
                // line 94
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["modele"], "image", array())), "html", null, true);
                echo "\"></td>
                            <td>
                                <a href=\"#\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                                               aria-hidden=\"true\"></i></span></a>
                            </td>
                        </tr>
                    ";
            }
            // line 101
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            </table>
        </div>
    </section>

    <!--End of Wrap -->


    <!--Start of Modal -->

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
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 162
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
        
        $__internal_e4052a356df5f81bf71f9382766ff1fb827b5072b07e640bb0e99649a061950a->leave($__internal_e4052a356df5f81bf71f9382766ff1fb827b5072b07e640bb0e99649a061950a_prof);

    }

    // line 179
    public function block_Script($context, array $blocks = array())
    {
        $__internal_301c13ce15547655482ae9f45b03f8bc87d57e428b653f05177b21687907e86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301c13ce15547655482ae9f45b03f8bc87d57e428b653f05177b21687907e86c->enter($__internal_301c13ce15547655482ae9f45b03f8bc87d57e428b653f05177b21687907e86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 180
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_301c13ce15547655482ae9f45b03f8bc87d57e428b653f05177b21687907e86c->leave($__internal_301c13ce15547655482ae9f45b03f8bc87d57e428b653f05177b21687907e86c_prof);

    }

    public function getTemplateName()
    {
        return "@Annonce/Modele/affichetout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 189,  386 => 188,  381 => 186,  376 => 184,  372 => 183,  368 => 182,  364 => 180,  358 => 179,  335 => 162,  325 => 155,  315 => 148,  305 => 141,  295 => 134,  285 => 127,  258 => 102,  252 => 101,  242 => 94,  238 => 93,  234 => 92,  230 => 91,  226 => 90,  222 => 89,  219 => 88,  216 => 87,  212 => 86,  193 => 69,  187 => 68,  176 => 60,  172 => 59,  168 => 58,  164 => 57,  160 => 56,  156 => 55,  152 => 53,  149 => 52,  145 => 51,  128 => 36,  122 => 35,  110 => 28,  104 => 27,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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

    <!-- /Banners -->

{% endblock %}

{% block Content %}
    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h1>New Cars Announcements list</h1>
            <table>
                <thead>
                <tr>
                    <td> Title</td>
                    <td> Category</td>
                    <td> City</td>
                    <td> Description</td>
                    <td> Price</td>
                    <td>Image(s)</td>
                    <td>Want More ?</td>
                </tr>
                </thead>
                {% for modele in modeles %}
                    {% if(modele.garantie != null) %}
                        <tbody>
                        <tr>
                            <td>{{ modele.titre }}</td>
                            <td>{{ modele.categorie }}</td>
                            <td>{{ modele.ville }}</td>
                            <td>{{ modele.description }}</td>
                            <td>{{ modele.prix }}</td>
                            <td><img src=\"{{ asset('images/Oussama/') ~ modele.image }}\"></td>
                            <td>
                                <a href=\"#\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                                               aria-hidden=\"true\"></i></span></a>
                            </td>
                        </tr>
                        </tbody>
                    {% endif %}
                {% endfor %}
            </table>
        </div>
    </section>

    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h1>Old Cars Announcements list</h1>
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
                {% for modele in modeles %}
                    {% if(modele.garantie == null) %}
                        <tr>
                            <td>{{ modele.titre }}</td>
                            <td>{{ modele.categorie }}</td>
                            <td>{{ modele.ville }}</td>
                            <td>{{ modele.description }}</td>
                            <td>{{ modele.prix }}</td>
                            <td><img src=\"{{ asset('images/Oussama/') ~ modele.image }}\"></td>
                            <td>
                                <a href=\"#\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                                               aria-hidden=\"true\"></i></span></a>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </table>
        </div>
    </section>

    <!--End of Wrap -->


    <!--Start of Modal -->

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




", "@Annonce/Modele/affichetout.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AnnonceBundle\\Resources\\views\\Modele\\affichetout.html.twig");
    }
}