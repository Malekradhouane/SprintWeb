<?php

/* AnnonceBundle:Default:afficheold.html.twig */
class __TwigTemplate_0fb90372a956c724866699fa469719985f01c6591e744ff18445df728e69ec38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AnnonceBundle:Default:afficheold.html.twig", 1);
        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'Sheets' => array($this, 'block_Sheets'),
            'Content' => array($this, 'block_Content'),
            'popup1' => array($this, 'block_popup1'),
            'popup2' => array($this, 'block_popup2'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c998e5264d82ac2d1bca8625b86936a851e96e831120fc6de2a33ecd6ea391b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c998e5264d82ac2d1bca8625b86936a851e96e831120fc6de2a33ecd6ea391b->enter($__internal_0c998e5264d82ac2d1bca8625b86936a851e96e831120fc6de2a33ecd6ea391b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Default:afficheold.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c998e5264d82ac2d1bca8625b86936a851e96e831120fc6de2a33ecd6ea391b->leave($__internal_0c998e5264d82ac2d1bca8625b86936a851e96e831120fc6de2a33ecd6ea391b_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_4bddfb0e99167c13d8ce45bdff88103915f689e0c9cdd0a3598d69a05473ff48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bddfb0e99167c13d8ce45bdff88103915f689e0c9cdd0a3598d69a05473ff48->enter($__internal_4bddfb0e99167c13d8ce45bdff88103915f689e0c9cdd0a3598d69a05473ff48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_4bddfb0e99167c13d8ce45bdff88103915f689e0c9cdd0a3598d69a05473ff48->leave($__internal_4bddfb0e99167c13d8ce45bdff88103915f689e0c9cdd0a3598d69a05473ff48_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_250d15c444a3ea3b1bb7f61976bd545f88edca286c3ac1aa58915cc9ee183c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250d15c444a3ea3b1bb7f61976bd545f88edca286c3ac1aa58915cc9ee183c27->enter($__internal_250d15c444a3ea3b1bb7f61976bd545f88edca286c3ac1aa58915cc9ee183c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_250d15c444a3ea3b1bb7f61976bd545f88edca286c3ac1aa58915cc9ee183c27->leave($__internal_250d15c444a3ea3b1bb7f61976bd545f88edca286c3ac1aa58915cc9ee183c27_prof);

    }

    // line 26
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ab26f6d905cee9e4740372cf33c6c3ccd23670de494fd5e26427588a14f709a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab26f6d905cee9e4740372cf33c6c3ccd23670de494fd5e26427588a14f709a0->enter($__internal_ab26f6d905cee9e4740372cf33c6c3ccd23670de494fd5e26427588a14f709a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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

    ";
        // line 100
        $this->displayBlock('popup1', $context, $blocks);
        // line 106
        echo "
    ";
        // line 107
        $this->displayBlock('popup2', $context, $blocks);
        // line 155
        echo "
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
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 202
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
        
        $__internal_ab26f6d905cee9e4740372cf33c6c3ccd23670de494fd5e26427588a14f709a0->leave($__internal_ab26f6d905cee9e4740372cf33c6c3ccd23670de494fd5e26427588a14f709a0_prof);

    }

    // line 100
    public function block_popup1($context, array $blocks = array())
    {
        $__internal_574bd5e969cee8bd6af122007fb0e46dcdd9f69554f2acb4b55d3e8ef0af5cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574bd5e969cee8bd6af122007fb0e46dcdd9f69554f2acb4b55d3e8ef0af5cb9->enter($__internal_574bd5e969cee8bd6af122007fb0e46dcdd9f69554f2acb4b55d3e8ef0af5cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup1"));

        // line 101
        echo "
        <!-- /Fun Facts<!-- POP UP Reclamation -->

        <!-- //POP UP Reclamation -->-->
    ";
        
        $__internal_574bd5e969cee8bd6af122007fb0e46dcdd9f69554f2acb4b55d3e8ef0af5cb9->leave($__internal_574bd5e969cee8bd6af122007fb0e46dcdd9f69554f2acb4b55d3e8ef0af5cb9_prof);

    }

    // line 107
    public function block_popup2($context, array $blocks = array())
    {
        $__internal_9bcc5633748a10097500ff4a404c71b668e3bed23fa1ae606192ed1ec769a4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcc5633748a10097500ff4a404c71b668e3bed23fa1ae606192ed1ec769a4c3->enter($__internal_9bcc5633748a10097500ff4a404c71b668e3bed23fa1ae606192ed1ec769a4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup2"));

        // line 108
        echo "
        <!-- /Fun Facts<!-- POP UP Reclamation -->
        <div class=\"modal fade\" id=\"newcar\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">

                    </div>
                    <div class=\"modal-body modal-body-sub_agile\">
                        <div class=\"col-md-8 \" align=\"center\">
                            ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annoce"]) {
            // line 120
            echo "
                            <div class=\"clearfix\"></div>
                            ";
            // line 122
            if (($this->getAttribute($context["annoce"], "garantie", array()) != null)) {
                // line 123
                echo "                            <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "titre", array()), "html", null, true);
                echo "</h3>
                            <ul>

                                <li>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "categorie", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "ville", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "description", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "prix", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "region", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "type", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "garantie", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "nbrePlaces", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "nbrePortes", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "energie", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "nbreCylindres", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "puissance", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "consomationMixte", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "vitesseMax", array()), "html", null, true);
                echo "</li>
                                <li>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "performance", array()), "html", null, true);
                echo "</li>
                                <img src=\"";
                // line 141
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["annoce"], "image", array())), "html", null, true);
                echo "\">
                            </ul>
                        </div>
                        ";
            }
            // line 145
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <!-- //Modal content-->
            </div>

        </div>
        <!-- //POP UP Reclamation -->-->
    ";
        
        $__internal_9bcc5633748a10097500ff4a404c71b668e3bed23fa1ae606192ed1ec769a4c3->leave($__internal_9bcc5633748a10097500ff4a404c71b668e3bed23fa1ae606192ed1ec769a4c3_prof);

    }

    // line 219
    public function block_Script($context, array $blocks = array())
    {
        $__internal_6bbbf9a5e4b7b049d6a5fc1f50fc648f01c1b3acf315dcf94d57744ddf0a5406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbbf9a5e4b7b049d6a5fc1f50fc648f01c1b3acf315dcf94d57744ddf0a5406->enter($__internal_6bbbf9a5e4b7b049d6a5fc1f50fc648f01c1b3acf315dcf94d57744ddf0a5406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 220
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6bbbf9a5e4b7b049d6a5fc1f50fc648f01c1b3acf315dcf94d57744ddf0a5406->leave($__internal_6bbbf9a5e4b7b049d6a5fc1f50fc648f01c1b3acf315dcf94d57744ddf0a5406_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Default:afficheold.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 229,  540 => 228,  535 => 226,  530 => 224,  526 => 223,  522 => 222,  518 => 220,  512 => 219,  497 => 146,  491 => 145,  484 => 141,  480 => 140,  476 => 139,  472 => 138,  468 => 137,  464 => 136,  460 => 135,  456 => 134,  452 => 133,  448 => 132,  444 => 131,  440 => 130,  436 => 129,  432 => 128,  428 => 127,  424 => 126,  417 => 123,  415 => 122,  411 => 120,  407 => 119,  394 => 108,  388 => 107,  377 => 101,  371 => 100,  348 => 202,  338 => 195,  328 => 188,  318 => 181,  308 => 174,  298 => 167,  284 => 155,  282 => 107,  279 => 106,  277 => 100,  271 => 96,  265 => 95,  253 => 85,  247 => 84,  240 => 80,  236 => 79,  232 => 78,  228 => 77,  224 => 76,  220 => 75,  216 => 74,  212 => 73,  208 => 72,  204 => 71,  200 => 70,  196 => 69,  191 => 67,  188 => 66,  186 => 65,  182 => 63,  178 => 62,  166 => 53,  160 => 50,  156 => 49,  152 => 48,  148 => 47,  144 => 46,  140 => 45,  136 => 44,  133 => 43,  130 => 42,  126 => 41,  110 => 27,  104 => 26,  94 => 21,  89 => 19,  84 => 17,  79 => 15,  75 => 14,  70 => 12,  65 => 10,  59 => 8,  53 => 7,  45 => 4,  39 => 3,  11 => 1,);
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

    {% block popup1 %}

        <!-- /Fun Facts<!-- POP UP Reclamation -->

        <!-- //POP UP Reclamation -->-->
    {% endblock %}

    {% block popup2 %}

        <!-- /Fun Facts<!-- POP UP Reclamation -->
        <div class=\"modal fade\" id=\"newcar\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">

                    </div>
                    <div class=\"modal-body modal-body-sub_agile\">
                        <div class=\"col-md-8 \" align=\"center\">
                            {% for annoce in annonces %}

                            <div class=\"clearfix\"></div>
                            {% if(annoce.garantie != null) %}
                            <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title : {{ annoce.titre }}</h3>
                            <ul>

                                <li>{{ annoce.categorie }}</li>
                                <li>{{ annoce.ville }}</li>
                                <li>{{ annoce.description }}</li>
                                <li>{{ annoce.prix }}</li>
                                <li>{{ annoce.region }}</li>
                                <li>{{ annoce.type }}</li>
                                <li>{{ annoce.garantie }}</li>
                                <li>{{ annoce.nbrePlaces }}</li>
                                <li>{{ annoce.nbrePortes }}</li>
                                <li>{{ annoce.energie }}</li>
                                <li>{{ annoce.nbreCylindres }}</li>
                                <li>{{ annoce.puissance }}</li>
                                <li>{{ annoce.consomationMixte }}</li>
                                <li>{{ annoce.vitesseMax }}</li>
                                <li>{{ annoce.performance }}</li>
                                <img src=\"{{ asset('images/Oussama/') ~ annoce.image }}\">
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
        <!-- //POP UP Reclamation -->-->
    {% endblock %}

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




", "AnnonceBundle:Default:afficheold.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AnnonceBundle\\Resources\\views\\Default\\afficheold.html.twig");
    }
}