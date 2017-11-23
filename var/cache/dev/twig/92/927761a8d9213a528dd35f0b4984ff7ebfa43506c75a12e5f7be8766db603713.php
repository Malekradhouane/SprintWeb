<?php

/* AutoEcoleBundle:Default:affichercoursadmin.html.twig */
class __TwigTemplate_81d02cfb38f6ed36776f781404a29078152f002997bc732243ef7133bcf5601a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:base2.html.twig", "AutoEcoleBundle:Default:affichercoursadmin.html.twig", 1);
        $this->blocks = array(
            'tite' => array($this, 'block_tite'),
            'sheets' => array($this, 'block_sheets'),
            'BreadCrumb' => array($this, 'block_BreadCrumb'),
            'container' => array($this, 'block_container'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_656268911fb63cf82516a90b75f990f3e6477a6e9c76da4b23954027073f11de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656268911fb63cf82516a90b75f990f3e6477a6e9c76da4b23954027073f11de->enter($__internal_656268911fb63cf82516a90b75f990f3e6477a6e9c76da4b23954027073f11de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:affichercoursadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656268911fb63cf82516a90b75f990f3e6477a6e9c76da4b23954027073f11de->leave($__internal_656268911fb63cf82516a90b75f990f3e6477a6e9c76da4b23954027073f11de_prof);

    }

    // line 3
    public function block_tite($context, array $blocks = array())
    {
        $__internal_83f21c583bb469900f5f6bccd87f1fcc9eb38645b81e8308131b9685834365cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f21c583bb469900f5f6bccd87f1fcc9eb38645b81e8308131b9685834365cb->enter($__internal_83f21c583bb469900f5f6bccd87f1fcc9eb38645b81e8308131b9685834365cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tite"));

        echo "    <title> Page AutoEcole</title>  ";
        
        $__internal_83f21c583bb469900f5f6bccd87f1fcc9eb38645b81e8308131b9685834365cb->leave($__internal_83f21c583bb469900f5f6bccd87f1fcc9eb38645b81e8308131b9685834365cb_prof);

    }

    // line 5
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_876a54ffa5d4b091e9b9c757a0d49d9c926edc8ac4dcab8ce70440ba4647a6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876a54ffa5d4b091e9b9c757a0d49d9c926edc8ac4dcab8ce70440ba4647a6b9->enter($__internal_876a54ffa5d4b091e9b9c757a0d49d9c926edc8ac4dcab8ce70440ba4647a6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

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
        
        $__internal_876a54ffa5d4b091e9b9c757a0d49d9c926edc8ac4dcab8ce70440ba4647a6b9->leave($__internal_876a54ffa5d4b091e9b9c757a0d49d9c926edc8ac4dcab8ce70440ba4647a6b9_prof);

    }

    // line 24
    public function block_BreadCrumb($context, array $blocks = array())
    {
        $__internal_d03aa69bf29c8bf02b83ae7a3eaf148df627fbd4868d3c1ff37fff899494ac3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03aa69bf29c8bf02b83ae7a3eaf148df627fbd4868d3c1ff37fff899494ac3a->enter($__internal_d03aa69bf29c8bf02b83ae7a3eaf148df627fbd4868d3c1ff37fff899494ac3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BreadCrumb"));

        // line 25
        echo "    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/index"), "html", null, true);
        echo "\"><h3 class=\"text-themecolor\">Go To Karhbaty</h3></a>
            </ol>
        </div>
        <div class=\"\">
            <button class=\"right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-settings text-white\"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
";
        
        $__internal_d03aa69bf29c8bf02b83ae7a3eaf148df627fbd4868d3c1ff37fff899494ac3a->leave($__internal_d03aa69bf29c8bf02b83ae7a3eaf148df627fbd4868d3c1ff37fff899494ac3a_prof);

    }

    // line 45
    public function block_container($context, array $blocks = array())
    {
        $__internal_96e086fa23ddec73dc113213feaab8ce23f7499955979f184b5c2080c6cdcdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e086fa23ddec73dc113213feaab8ce23f7499955979f184b5c2080c6cdcdf3->enter($__internal_96e086fa23ddec73dc113213feaab8ce23f7499955979f184b5c2080c6cdcdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 46
        echo "
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <!-- .left-right-aside-column-->
                <div class=\"contact-page-aside\">
                    <!-- .left-aside-column-->
                    <div class=\"left-aside bg-light-part\">
                        <ul class=\"list-style-none\">
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/coursall"), "html", null, true);
        echo "\">Show Driving Courses<span></span></a></li>

                            <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/testadmin"), "html", null, true);
        echo "\">Show Driving Tests<span></span></a></li>

                            <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/ajoutcours"), "html", null, true);
        echo "\">Add Driving Courses</a></li>
                            <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/ajouttest"), "html", null, true);
        echo "\">Add Driving Tests</a></li>


                    </div>
                    <!-- /.left-aside-column-->
                    <div class=\"right-aside \">
                        <div class=\"right-page-header\">

                            <div class=\"well text-center form-group  black_input col-md-12\">
                                <form class=\"text-center form-group  black_input col-md-12\" >
                                    <div class=\"table-responsive\">
                                        <table id=\"demo-foo-addrow\" class=\"table m-t-30 table-hover no-wrap contact-list\" data-page-size=\"10\">
                                            <thead>
                                            <tr>
                                                <th>Id Cours</th>
                                                <th>Cours</th>
                                                <th>Type</th>
                                                <th>Image</th>
                                            </tr>
                                            </thead>



                                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coursautoecole"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coursautoecole"]) {
            // line 85
            echo "                                            <tr>

                                            <tr>
                                                <td style=\"width:50px;\" align=\"center\"><span class=\"action-icons\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "idcours", array()), "html", null, true);
            echo "</span></td>
                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "cours", array()), "html", null, true);
            echo "</span></td>
                                            <td align=\"center\"><span class=\"label label-light-danger label-icon\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "type", array()), "html", null, true);
            echo "</span></td>
                                            <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                    <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["coursautoecole"], "path", array()))), "html", null, true);
            echo "\" alt=\"\">
                                                                    </span></td>
                                            <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_cours", array("id" => $this->getAttribute($context["coursautoecole"], "idcours", array()))), "html", null, true);
            echo "\">Delete</a>
                                                                    </span></td>

                                            <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_cours", array("id" => $this->getAttribute($context["coursautoecole"], "idcours", array()))), "html", null, true);
            echo "\">Update</a>


                                                                    </span></td>

                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coursautoecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                    </table>
                                    </div>
                                </form>
                                <div class=\" pagination text-center \">
                                    ";
        // line 110
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["coursautoecole"]) ? $context["coursautoecole"] : $this->getContext($context, "coursautoecole")));
        echo "


                                </div>

                            </div>
                            <div class=\"ml-auto\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .left-aside-column-->
                <!-- /.left-right-aside-column-->
            </div>
        </div>
    </div>
    </div>

";
        
        $__internal_96e086fa23ddec73dc113213feaab8ce23f7499955979f184b5c2080c6cdcdf3->leave($__internal_96e086fa23ddec73dc113213feaab8ce23f7499955979f184b5c2080c6cdcdf3_prof);

    }

    // line 130
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_fa676be98731c6af56c012d86d42480ee6b86021f78ecb87a46c0c9cb6df0ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa676be98731c6af56c012d86d42480ee6b86021f78ecb87a46c0c9cb6df0ba5->enter($__internal_fa676be98731c6af56c012d86d42480ee6b86021f78ecb87a46c0c9cb6df0ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 131
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--Wave Effects -->
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/waves.js"), "html", null, true);
        echo "\"></script>
    <!--Menu sidebar -->
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <!--stickey kit -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!--Custom JavaScript -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Footable -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/footable-init.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fa676be98731c6af56c012d86d42480ee6b86021f78ecb87a46c0c9cb6df0ba5->leave($__internal_fa676be98731c6af56c012d86d42480ee6b86021f78ecb87a46c0c9cb6df0ba5_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:affichercoursadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 153,  327 => 149,  322 => 147,  317 => 145,  312 => 143,  308 => 142,  303 => 140,  298 => 138,  293 => 136,  288 => 134,  284 => 133,  278 => 131,  272 => 130,  246 => 110,  240 => 106,  227 => 99,  220 => 95,  214 => 92,  209 => 90,  205 => 89,  201 => 88,  196 => 85,  192 => 84,  166 => 61,  162 => 60,  157 => 58,  152 => 56,  140 => 46,  134 => 45,  116 => 33,  106 => 25,  100 => 24,  91 => 21,  85 => 18,  80 => 16,  76 => 15,  71 => 13,  67 => 12,  62 => 10,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
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

{% block tite %}    <title> Page AutoEcole</title>  {% endblock %}

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
        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <a href=\"{{ asset('app_dev.php/index') }}\"><h3 class=\"text-themecolor\">Go To Karhbaty</h3></a>
            </ol>
        </div>
        <div class=\"\">
            <button class=\"right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-settings text-white\"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
{% endblock %}

{% block container %}

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <!-- .left-right-aside-column-->
                <div class=\"contact-page-aside\">
                    <!-- .left-aside-column-->
                    <div class=\"left-aside bg-light-part\">
                        <ul class=\"list-style-none\">
                            <li class=\"divider\"></li>
                            <li><a href=\"{{ asset('app_dev.php/auto/coursall') }}\">Show Driving Courses<span></span></a></li>

                            <li><a href=\"{{ asset('app_dev.php/auto/testadmin') }}\">Show Driving Tests<span></span></a></li>

                            <li><a href=\"{{ asset('app_dev.php/auto/ajoutcours') }}\">Add Driving Courses</a></li>
                            <li><a href=\"{{ asset('app_dev.php/auto/ajouttest') }}\">Add Driving Tests</a></li>


                    </div>
                    <!-- /.left-aside-column-->
                    <div class=\"right-aside \">
                        <div class=\"right-page-header\">

                            <div class=\"well text-center form-group  black_input col-md-12\">
                                <form class=\"text-center form-group  black_input col-md-12\" >
                                    <div class=\"table-responsive\">
                                        <table id=\"demo-foo-addrow\" class=\"table m-t-30 table-hover no-wrap contact-list\" data-page-size=\"10\">
                                            <thead>
                                            <tr>
                                                <th>Id Cours</th>
                                                <th>Cours</th>
                                                <th>Type</th>
                                                <th>Image</th>
                                            </tr>
                                            </thead>



                                        {% for coursautoecole in coursautoecole%}
                                            <tr>

                                            <tr>
                                                <td style=\"width:50px;\" align=\"center\"><span class=\"action-icons\">{{ coursautoecole.idcours }}</span></td>
                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">{{ coursautoecole.cours }}</span></td>
                                            <td align=\"center\"><span class=\"label label-light-danger label-icon\">{{ coursautoecole.type }}</span></td>
                                            <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                    <img src=\"{{ asset('images/'~coursautoecole.path) }}\" alt=\"\">
                                                                    </span></td>
                                            <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                <a href=\"{{ path('delete_cours',{'id':coursautoecole.idcours}) }}\">Delete</a>
                                                                    </span></td>

                                            <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                <a href=\"{{ path('update_cours',{'id':coursautoecole.idcours}) }}\">Update</a>


                                                                    </span></td>

                                        </tr>
                                        {% endfor %}
                                    </table>
                                    </div>
                                </form>
                                <div class=\" pagination text-center \">
                                    {{ knp_pagination_render(coursautoecole) }}


                                </div>

                            </div>
                            <div class=\"ml-auto\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .left-aside-column-->
                <!-- /.left-right-aside-column-->
            </div>
        </div>
    </div>
    </div>

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
    <script src=\"{{ asset('admin/assets/plugins/bootstrap-select/bootstrap-select.min.js') }}\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"{{ asset('admin/js/footable-init.js') }}\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"{{ asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}\"></script>
{% endblock %}", "AutoEcoleBundle:Default:affichercoursadmin.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle/Resources/views/Default/affichercoursadmin.html.twig");
    }
}
