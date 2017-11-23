<?php

/* @Annonce/Modele/AnnonceAdmin.html.twig */
class __TwigTemplate_50e8c0e59dc56f03a9acb3fff30fe132fb7110b71bd5547a95d656c297ada229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:base2.html.twig", "@Annonce/Modele/AnnonceAdmin.html.twig", 1);
        $this->blocks = array(
            'tite' => array($this, 'block_tite'),
            'sheets' => array($this, 'block_sheets'),
            'BreadCrumb' => array($this, 'block_BreadCrumb'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6658cd47aae7262a257d87745bd35fc4cac4af0778f196c674b232fa924d7da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6658cd47aae7262a257d87745bd35fc4cac4af0778f196c674b232fa924d7da9->enter($__internal_6658cd47aae7262a257d87745bd35fc4cac4af0778f196c674b232fa924d7da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/Modele/AnnonceAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6658cd47aae7262a257d87745bd35fc4cac4af0778f196c674b232fa924d7da9->leave($__internal_6658cd47aae7262a257d87745bd35fc4cac4af0778f196c674b232fa924d7da9_prof);

    }

    // line 3
    public function block_tite($context, array $blocks = array())
    {
        $__internal_173e77717108acaa7932fb0d159fd61c1ad074eee06705b5a6d5fedf60fcc928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173e77717108acaa7932fb0d159fd61c1ad074eee06705b5a6d5fedf60fcc928->enter($__internal_173e77717108acaa7932fb0d159fd61c1ad074eee06705b5a6d5fedf60fcc928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tite"));

        echo "    <title> Page Admin</title>  ";
        
        $__internal_173e77717108acaa7932fb0d159fd61c1ad074eee06705b5a6d5fedf60fcc928->leave($__internal_173e77717108acaa7932fb0d159fd61c1ad074eee06705b5a6d5fedf60fcc928_prof);

    }

    // line 5
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_0cc1d24d8f21e191f79a348115c20b316be1eb9f529248164e6e153438c6d1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc1d24d8f21e191f79a348115c20b316be1eb9f529248164e6e153438c6d1f2->enter($__internal_0cc1d24d8f21e191f79a348115c20b316be1eb9f529248164e6e153438c6d1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        // line 6
        echo "    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Footable CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/footable/css/footable.core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Page CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/pages/contact-app-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/pages/footable-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- You can change the theme colors from here -->
    <!-- You can change the theme colors from here -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/colors/default-dark.css"), "html", null, true);
        echo "\" id=\"theme\" rel=\"stylesheet\">
";
        
        $__internal_0cc1d24d8f21e191f79a348115c20b316be1eb9f529248164e6e153438c6d1f2->leave($__internal_0cc1d24d8f21e191f79a348115c20b316be1eb9f529248164e6e153438c6d1f2_prof);

    }

    // line 24
    public function block_BreadCrumb($context, array $blocks = array())
    {
        $__internal_3f466727cb10a4e5f18bed2e88e80ce2ae6e0d6fb7aa294241983b80eacaf80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f466727cb10a4e5f18bed2e88e80ce2ae6e0d6fb7aa294241983b80eacaf80f->enter($__internal_3f466727cb10a4e5f18bed2e88e80ce2ae6e0d6fb7aa294241983b80eacaf80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BreadCrumb"));

        // line 25
        echo "    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h3 class=\"text-themecolor\">Administration</h3>
        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                <li class=\"breadcrumb-item active\">Announcements</li>
            </ol>
        </div>
        <div class=\"\">
            <button class=\"right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-settings text-white\"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <table class=\"table\">
        <tr>
            <th> Title</th>
            <th> Category</th>
            <th> City</th>
            <th> Description</th>
            <th> Price</th>
            <th>Image(s)</th>
            <th>Type</th>
            <th>Want More ?</th>
            <th>Accept</th>
            <th>Reject</th>
        </tr>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annoce"]) {
            // line 59
            echo "            ";
            if (($this->getAttribute($context["annoce"], "connectivite", array()) == 0)) {
                // line 60
                echo "                <tr>
                    <td style=\"width:50px; color: olive\" align=\"center\"><span class=\"action-icons\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "titre", array()), "html", null, true);
                echo "</span></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "categorie", array()), "html", null, true);
                echo "</span></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "ville", array()), "html", null, true);
                echo "</span></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "description", array()), "html", null, true);
                echo "</span></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "prix", array()), "html", null, true);
                echo "</span></td>
                    <td><img src=\"";
                // line 66
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Oussama/") . $this->getAttribute($context["annoce"], "image", array())), "html", null, true);
                echo "\" height=\"70\" width=\"70\"></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["annoce"], "type", array()), "html", null, true);
                echo "</span></td>
                    <td><a href=\"#\" data-toggle=\"modal\" data-target=\"#oldcar\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                                                                                 aria-hidden=\"true\"></i></span></a>
                    </td>
                    <td><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/annonce/accAnn/") . $this->getAttribute($context["annoce"], "idAnnonce", array())), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Accept</a></td>
                    <td><a href=\"";
                // line 72
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/annonce/refAnn/") . $this->getAttribute($context["annoce"], "idAnnonce", array())), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Reject</a></td>
                </tr>
        ";
            }
            // line 75
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annoce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </table>


";
        
        $__internal_3f466727cb10a4e5f18bed2e88e80ce2ae6e0d6fb7aa294241983b80eacaf80f->leave($__internal_3f466727cb10a4e5f18bed2e88e80ce2ae6e0d6fb7aa294241983b80eacaf80f_prof);

    }

    // line 81
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_403957da4ce4200a03fe38802afba106a2b4f07ab905637d41bfde57e7d8a839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403957da4ce4200a03fe38802afba106a2b4f07ab905637d41bfde57e7d8a839->enter($__internal_403957da4ce4200a03fe38802afba106a2b4f07ab905637d41bfde57e7d8a839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 82
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--Wave Effects -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/waves.js"), "html", null, true);
        echo "\"></script>
    <!--Menu sidebar -->
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <!--stickey kit -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!--Custom JavaScript -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Footable -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/footable/js/footable.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/footable-init.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_403957da4ce4200a03fe38802afba106a2b4f07ab905637d41bfde57e7d8a839->leave($__internal_403957da4ce4200a03fe38802afba106a2b4f07ab905637d41bfde57e7d8a839_prof);

    }

    public function getTemplateName()
    {
        return "@Annonce/Modele/AnnonceAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 105,  266 => 101,  261 => 99,  257 => 98,  252 => 96,  247 => 94,  243 => 93,  238 => 91,  233 => 89,  228 => 87,  223 => 85,  219 => 84,  213 => 82,  207 => 81,  197 => 76,  191 => 75,  185 => 72,  181 => 71,  174 => 67,  170 => 66,  166 => 65,  162 => 64,  158 => 63,  154 => 62,  150 => 61,  147 => 60,  144 => 59,  140 => 58,  105 => 25,  99 => 24,  90 => 21,  84 => 18,  79 => 16,  75 => 15,  70 => 13,  66 => 12,  61 => 10,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':default:base2.html.twig' %}

{% block tite %}    <title> Page Admin</title>  {% endblock %}

{% block sheets %}
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Footable CSS -->
    <link href=\"{{ asset('admin/assets/plugins/footable/css/footable.core.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/assets/plugins/bootstrap-select/bootstrap-select.min.css') }}\" rel=\"stylesheet\" />
    <!-- Page CSS -->
    <link href=\"{{ asset('admin/css/pages/contact-app-page.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/css/pages/footable-page.css') }}\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"{{ asset('admin/css/style.css') }}\" rel=\"stylesheet\">
    <!-- You can change the theme colors from here -->
    <!-- You can change the theme colors from here -->
    <link href=\"{{ asset('admin/css/colors/default-dark.css') }}\" id=\"theme\" rel=\"stylesheet\">
{% endblock %}

{% block BreadCrumb %}
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h3 class=\"text-themecolor\">Administration</h3>
        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                <li class=\"breadcrumb-item active\">Announcements</li>
            </ol>
        </div>
        <div class=\"\">
            <button class=\"right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-settings text-white\"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <table class=\"table\">
        <tr>
            <th> Title</th>
            <th> Category</th>
            <th> City</th>
            <th> Description</th>
            <th> Price</th>
            <th>Image(s)</th>
            <th>Type</th>
            <th>Want More ?</th>
            <th>Accept</th>
            <th>Reject</th>
        </tr>
        {% for annoce in annonces %}
            {% if annoce.connectivite ==0 %}
                <tr>
                    <td style=\"width:50px; color: olive\" align=\"center\"><span class=\"action-icons\">{{ annoce.titre }}</span></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">{{ annoce.categorie }}</span></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">{{ annoce.ville }}</span></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">{{ annoce.description }}</span></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">{{ annoce.prix }}</span></td>
                    <td><img src=\"{{ asset('images/Oussama/') ~ annoce.image }}\" height=\"70\" width=\"70\"></td>
                    <td align=\"center\"><span class=\"label label-themecolor label-icon\">{{ annoce.type }}</span></td>
                    <td><a href=\"#\" data-toggle=\"modal\" data-target=\"#oldcar\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\"
                                                                                                                                 aria-hidden=\"true\"></i></span></a>
                    </td>
                    <td><a href=\"{{ asset('app_dev.php/annonce/accAnn/')~ annoce.idAnnonce }}\" type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Accept</a></td>
                    <td><a href=\"{{ asset('app_dev.php/annonce/refAnn/')~ annoce.idAnnonce }}\" type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Reject</a></td>
                </tr>
        {% endif %}
        {% endfor %}
    </table>


{% endblock %}

{% block scripts %}
    <script src=\"{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}\"></script>
    <!--Wave Effects -->
    <script src=\"{{ asset('admin/js/waves.js') }}\"></script>
    <!--Menu sidebar -->
    <script src=\"{{ asset('admin/js/sidebarmenu.js') }}\"></script>
    <!--stickey kit -->
    <script src=\"{{ asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/sparkline/jquery.sparkline.min.js') }}\"></script>
    <!--Custom JavaScript -->
    <script src=\"{{ asset('admin/js/custom.min.js') }}\"></script>
    <!-- Footable -->
    <script src=\"{{ asset('admin/assets/plugins/footable/js/footable.all.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/bootstrap-select/bootstrap-select.min.js') }}\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"{{ asset('admin/js/footable-init.js') }}\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"{{ asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}\"></script>
{% endblock %}", "@Annonce/Modele/AnnonceAdmin.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AnnonceBundle\\Resources\\views\\Modele\\AnnonceAdmin.html.twig");
    }
}
