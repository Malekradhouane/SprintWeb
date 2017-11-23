<?php

/* AnnonceBundle:Modele:consulterAnnonce.html.twig */
class __TwigTemplate_48045a7c13c9c8661b0254105b35d6f68958e2cb6e4fc652f04112a4175196f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base3.html.twig", "AnnonceBundle:Modele:consulterAnnonce.html.twig", 1);
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
        $__internal_72eac059a330939b1ae66103dbe6555639b2b3e0fa4853a2f15b94de1a1a40c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72eac059a330939b1ae66103dbe6555639b2b3e0fa4853a2f15b94de1a1a40c7->enter($__internal_72eac059a330939b1ae66103dbe6555639b2b3e0fa4853a2f15b94de1a1a40c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Modele:consulterAnnonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72eac059a330939b1ae66103dbe6555639b2b3e0fa4853a2f15b94de1a1a40c7->leave($__internal_72eac059a330939b1ae66103dbe6555639b2b3e0fa4853a2f15b94de1a1a40c7_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_e93784bdd596bba9e66cdfb391876a069d8249cd20c3e962e5cdfd138cb87afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93784bdd596bba9e66cdfb391876a069d8249cd20c3e962e5cdfd138cb87afc->enter($__internal_e93784bdd596bba9e66cdfb391876a069d8249cd20c3e962e5cdfd138cb87afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_e93784bdd596bba9e66cdfb391876a069d8249cd20c3e962e5cdfd138cb87afc->leave($__internal_e93784bdd596bba9e66cdfb391876a069d8249cd20c3e962e5cdfd138cb87afc_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_962a737cedd1d1028104fb3375f366c8d6eab76eeddb5ebf64f877ee058f5e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962a737cedd1d1028104fb3375f366c8d6eab76eeddb5ebf64f877ee058f5e60->enter($__internal_962a737cedd1d1028104fb3375f366c8d6eab76eeddb5ebf64f877ee058f5e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_962a737cedd1d1028104fb3375f366c8d6eab76eeddb5ebf64f877ee058f5e60->leave($__internal_962a737cedd1d1028104fb3375f366c8d6eab76eeddb5ebf64f877ee058f5e60_prof);

    }

    // line 28
    public function block_Content($context, array $blocks = array())
    {
        $__internal_718f9a65ebcbe921dbed14a93c7d744e4ecd43d67a42af49eeb1468aaa56f28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718f9a65ebcbe921dbed14a93c7d744e4ecd43d67a42af49eeb1468aaa56f28e->enter($__internal_718f9a65ebcbe921dbed14a93c7d744e4ecd43d67a42af49eeb1468aaa56f28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 29
        echo "    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h2 style=\"color: rebeccapurple\">New Cars Announcements list</h2>
            These are your new car(s) annoucement(s) <h3
                    style=\"color: rebeccapurple ; font-family: 'Comic Sans MS'\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " </h3>
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annoce"]) {
            // line 45
            echo "                    ";
            if ((($this->getAttribute($context["annoce"], "garantie", array()) != null) && ($this->getAttribute($this->getAttribute($context["annoce"], "idUser", array()), "nom", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())))) {
                // line 46
                echo "                        <tr>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "titre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "categorie", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "prix", array()), "html", null, true);
                echo "</td>
                            <td><img src=\"";
                // line 52
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["annoce"], "image", array())), "html", null, true);
                echo "\"></td>
                            <td><a href=\"#\" data-toggle=\"modal\" data-target=\"#";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "idAnnonce", array()), "html", null, true);
                echo "\" class=\"btn\">Read
                                    More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                      aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"";
                // line 56
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
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
                foreach ($context['_seq'] as $context["_key"] => $context["annoce"]) {
                    // line 66
                    echo "
                                                    <div class=\"clearfix\"></div>
                                                    ";
                    // line 68
                    if (($this->getAttribute($context["annoce"], "garantie", array()) != null)) {
                        // line 69
                        echo "                                                    <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title
                                                        : ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "titre", array()), "html", null, true);
                        echo "</h3>
                                                    <ul>
                                                        <li><strong>";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annoce"], "idUser", array()), "username", array()), "html", null, true);
                        echo "</strong></li>
                                                        <li>";
                        // line 73
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "categorie", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "ville", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 75
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "description", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "prix", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 77
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "region", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 78
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "type", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 79
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "garantie", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "nbrePlaces", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 81
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "nbrePortes", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "energie", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 83
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "nbreCylindres", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "puissance", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 85
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "consomationMixte", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "vitesseMax", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 87
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "performance", array()), "html", null, true);
                        echo "</li>
                                                        <img src=\"";
                        // line 88
                        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["annoce"], "image", array())), "html", null, true);
                        echo "\"
                                                             width=\"300\" height=\"300\">
                                                    </ul>
                                                </div>
                                                ";
                    }
                    // line 93
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoce'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
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
            // line 104
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </table>
        </div>
    </section>
    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h2 style=\"color: rebeccapurple\">Used Cars Announcements list</h2>
            These are your old car(s) annoucement(s) <h3
                    style=\"color: rebeccapurple ; font-family: 'Comic Sans MS'\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " </h3>
            <table>
                <tr>
                    <th> Title</th>
                    <th> Category</th>
                    <th> City</th>
                    <th> Description</th>
                    <th> Price</th>
                    <th>Image(s)</th>
                    <th>Want More ?</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annoce"]) {
            // line 126
            echo "                    ";
            if (($this->getAttribute($context["annoce"], "garantie", array()) == null)) {
                // line 127
                echo "                        <tr>
                            <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "titre", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "categorie", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "ville", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "description", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "prix", array()), "html", null, true);
                echo "</td>
                            <td><img src=\"";
                // line 133
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["annoce"], "image", array())), "html", null, true);
                echo "\" width=\"100\" height=\"100\"></td>
                            <td><a id=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "idAnnonce", array()), "html", null, true);
                echo "\" class=\"btn\">Read
                                    More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"

                                                                      aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"";
                // line 138
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
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
                foreach ($context['_seq'] as $context["_key"] => $context["annoc"]) {
                    // line 148
                    echo "
                                                    <div class=\"clearfix\"></div>
                                                    ";
                    // line 150
                    if (($this->getAttribute($context["annoc"], "idAnnonce", array()) == $this->getAttribute($context["annoce"], "idAnnonce", array()))) {
                        // line 151
                        echo "
                                                    <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title
                                                        : ";
                        // line 153
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "titre", array()), "html", null, true);
                        echo "</h3>
                                                    <ul>
                                                        <li><strong>";
                        // line 155
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annoc"], "idUser", array()), "username", array()), "html", null, true);
                        echo "</strong></li>
                                                        <li>";
                        // line 156
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "categorie", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 157
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "ville", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 158
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "description", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 159
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "prix", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 160
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "region", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 161
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "type", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 162
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "adresse", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 163
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "kilometrage", array()), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 164
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annoc"], "miseCirculation", array()), "Y/M/d"), "html", null, true);
                        echo "</li>
                                                        <li>";
                        // line 165
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "numTel", array()), "html", null, true);
                        echo "</li>
                                                        <img src=\"";
                        // line 166
                        echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["annoc"], "image", array())), "html", null, true);
                        echo "\"
                                                             width=\"300\" height=\"300\">
                                                    </ul>
                                                </div>
                                                ";
                    }
                    // line 171
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <!-- //Modal content-->
                                    </div>

                                </div>
                            </td>
                            <td><a href=\"#\" data-toggle=\"modal\" data-target=\"#del\" class=\"btn\">Delete <span
                                            class=\"angle_arrow\"><i class=\"fa fa-angle-right\"

                                                                   aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"del\" tabindex=\"-1\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                        <!-- Modal content-->
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <div class=\"col-md-8 \" align=\"center\">
                                                    ";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
                foreach ($context['_seq'] as $context["_key"] => $context["annoc"]) {
                    // line 191
                    echo "
                                                    <div class=\"clearfix\"></div>
                                                    ";
                    // line 193
                    if (($this->getAttribute($context["annoc"], "idAnnonce", array()) == $this->getAttribute($context["annoce"], "idAnnonce", array()))) {
                        // line 194
                        echo "
                                                    <h4 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">
                                                        Announcement title : ";
                        // line 196
                        echo twig_escape_filter($this->env, $this->getAttribute($context["annoc"], "titre", array()), "html", null, true);
                        echo "</h4>

                                                </div>
                                            </div>
                                            <div class=\"modal-body modal-body-sub_agile\">

                                                <div>
                                                    <h4 align=\"center\">Are you sure to delete this Post ?</h4>
                                                </div>
                                                <div>
                                                    <a href=\"";
                        // line 206
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_annonce", array("id" => $this->getAttribute($context["annoc"], "idAnnonce", array()))), "html", null, true);
                        echo "\"
                                                       data-toggle=\"modal\" data-target=\"#\" class=\"btn\">Delete <span
                                                                class=\"angle_arrow\">
                                                                <i class=\"fa fa-angle-right\"
                                                                   aria-hidden=\"true\"></i></span></a>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <!-- //Modal content-->
                                    </div>

                                </div>
                            </td>
                            <td><a href=\"";
                        // line 220
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_annonce", array("id" => $this->getAttribute($context["annoc"], "idAnnonce", array()))), "html", null, true);
                        echo "\" class=\"btn\">Update <span
                                            class=\"angle_arrow\">
                                        <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></a>
                            </td>
                            ";
                    }
                    // line 225
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                echo "                        </tr>
                    ";
            }
            // line 228
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
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
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\"
                                                               alt=\"Image\" class=\"img-responsive\"/></div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"><img src=\"";
        // line 279
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
        
        $__internal_718f9a65ebcbe921dbed14a93c7d744e4ecd43d67a42af49eeb1468aaa56f28e->leave($__internal_718f9a65ebcbe921dbed14a93c7d744e4ecd43d67a42af49eeb1468aaa56f28e_prof);

    }

    // line 296
    public function block_Script($context, array $blocks = array())
    {
        $__internal_f83fde10236b1af32c3090c4b59d3a5c5dc6e0f753375379db3e67d3bc0afd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83fde10236b1af32c3090c4b59d3a5c5dc6e0f753375379db3e67d3bc0afd87->enter($__internal_f83fde10236b1af32c3090c4b59d3a5c5dc6e0f753375379db3e67d3bc0afd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 297
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f83fde10236b1af32c3090c4b59d3a5c5dc6e0f753375379db3e67d3bc0afd87->leave($__internal_f83fde10236b1af32c3090c4b59d3a5c5dc6e0f753375379db3e67d3bc0afd87_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Modele:consulterAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 306,  655 => 305,  650 => 303,  645 => 301,  641 => 300,  637 => 299,  633 => 297,  627 => 296,  604 => 279,  594 => 272,  584 => 265,  574 => 258,  564 => 251,  554 => 244,  537 => 229,  531 => 228,  527 => 226,  521 => 225,  513 => 220,  496 => 206,  483 => 196,  479 => 194,  477 => 193,  473 => 191,  469 => 190,  449 => 172,  443 => 171,  435 => 166,  431 => 165,  427 => 164,  423 => 163,  419 => 162,  415 => 161,  411 => 160,  407 => 159,  403 => 158,  399 => 157,  395 => 156,  391 => 155,  386 => 153,  382 => 151,  380 => 150,  376 => 148,  372 => 147,  360 => 138,  353 => 134,  349 => 133,  345 => 132,  341 => 131,  337 => 130,  333 => 129,  329 => 128,  326 => 127,  323 => 126,  319 => 125,  303 => 112,  294 => 105,  288 => 104,  276 => 94,  270 => 93,  262 => 88,  258 => 87,  254 => 86,  250 => 85,  246 => 84,  242 => 83,  238 => 82,  234 => 81,  230 => 80,  226 => 79,  222 => 78,  218 => 77,  214 => 76,  210 => 75,  206 => 74,  202 => 73,  198 => 72,  193 => 70,  190 => 69,  188 => 68,  184 => 66,  180 => 65,  168 => 56,  162 => 53,  158 => 52,  154 => 51,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  135 => 46,  132 => 45,  128 => 44,  114 => 33,  108 => 29,  102 => 28,  92 => 21,  87 => 19,  82 => 17,  77 => 15,  73 => 14,  68 => 12,  63 => 10,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
            <h2 style=\"color: rebeccapurple\">New Cars Announcements list</h2>
            These are your new car(s) annoucement(s) <h3
                    style=\"color: rebeccapurple ; font-family: 'Comic Sans MS'\">{{ app.user.nom }} </h3>
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
                    {% if(annoce.garantie != null) and (annoce.idUser.nom == app.user.nom) %}
                        <tr>
                            <td>{{ annoce.titre }}</td>
                            <td>{{ annoce.categorie }}</td>
                            <td>{{ annoce.ville }}</td>
                            <td>{{ annoce.description }}</td>
                            <td>{{ annoce.prix }}</td>
                            <td><img src=\"{{ asset('images/Oussama/') ~ annoce.image }}\"></td>
                            <td><a href=\"#\" data-toggle=\"modal\" data-target=\"#{{ annoce.idAnnonce }}\" class=\"btn\">Read
                                    More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                      aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"{{ annoce.idAnnonce }}\" tabindex=\"-1\" role=\"dialog\">
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
                                                    <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title
                                                        : {{ annoce.titre }}</h3>
                                                    <ul>
                                                        <li><strong>{{ annoce.idUser.username }}</strong></li>
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
                                                        <img src=\"{{ asset('images/Oussama/') ~ annoce.image }}\"
                                                             width=\"300\" height=\"300\">
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
    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h2 style=\"color: rebeccapurple\">Used Cars Announcements list</h2>
            These are your old car(s) annoucement(s) <h3
                    style=\"color: rebeccapurple ; font-family: 'Comic Sans MS'\">{{ app.user.nom }} </h3>
            <table>
                <tr>
                    <th> Title</th>
                    <th> Category</th>
                    <th> City</th>
                    <th> Description</th>
                    <th> Price</th>
                    <th>Image(s)</th>
                    <th>Want More ?</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                {% for annoce in annonces %}
                    {% if(annoce.garantie == null) %}
                        <tr>
                            <td>{{ annoce.titre }}</td>
                            <td>{{ annoce.categorie }}</td>
                            <td>{{ annoce.ville }}</td>
                            <td>{{ annoce.description }}</td>
                            <td>{{ annoce.prix }}</td>
                            <td><img src=\"{{ asset('images/Oussama/') ~ annoce.image }}\" width=\"100\" height=\"100\"></td>
                            <td><a id=\"\" href=\"#\" data-toggle=\"modal\" data-target=\"#{{ annoce.idAnnonce }}\" class=\"btn\">Read
                                    More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"

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

                                                    <h3 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">Title
                                                        : {{ annoc.titre }}</h3>
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
                                                        <img src=\"{{ asset('images/Oussama/') ~ annoc.image }}\"
                                                             width=\"300\" height=\"300\">
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
                            <td><a href=\"#\" data-toggle=\"modal\" data-target=\"#del\" class=\"btn\">Delete <span
                                            class=\"angle_arrow\"><i class=\"fa fa-angle-right\"

                                                                   aria-hidden=\"true\"></i></span></a>
                                <div class=\"modal fade\" id=\"del\" tabindex=\"-1\" role=\"dialog\">
                                    <div class=\"modal-dialog\">
                                        <!-- Modal content-->
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <div class=\"col-md-8 \" align=\"center\">
                                                    {% for annoc in annonces %}

                                                    <div class=\"clearfix\"></div>
                                                    {% if(annoc.idAnnonce == annoce.idAnnonce) %}

                                                    <h4 class=\"agileinfo_sign\" style=\"color: red\" align=\"center\">
                                                        Announcement title : {{ annoc.titre }}</h4>

                                                </div>
                                            </div>
                                            <div class=\"modal-body modal-body-sub_agile\">

                                                <div>
                                                    <h4 align=\"center\">Are you sure to delete this Post ?</h4>
                                                </div>
                                                <div>
                                                    <a href=\"{{ path('delete_annonce',{'id':annoc.idAnnonce}) }}\"
                                                       data-toggle=\"modal\" data-target=\"#\" class=\"btn\">Delete <span
                                                                class=\"angle_arrow\">
                                                                <i class=\"fa fa-angle-right\"
                                                                   aria-hidden=\"true\"></i></span></a>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <!-- //Modal content-->
                                    </div>

                                </div>
                            </td>
                            <td><a href=\"{{ path('modifier_annonce',{'id':annoc.idAnnonce}) }}\" class=\"btn\">Update <span
                                            class=\"angle_arrow\">
                                        <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></a>
                            </td>
                            {% endif %}
                            {% endfor %}
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




", "AnnonceBundle:Modele:consulterAnnonce.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AnnonceBundle\\Resources\\views\\Modele\\consulterAnnonce.html.twig");
    }
}
