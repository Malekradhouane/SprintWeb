<?php

/* @AutoEcole/Default/affichertestadmin.html.twig */
class __TwigTemplate_4308c2acd06cacfd6c2d937402ea3c253580e216f8c146c49e10b6ab8cc37a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:base2.html.twig", "@AutoEcole/Default/affichertestadmin.html.twig", 1);
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
        $__internal_3a80f7e658061e37df25288c61e6a4ef862ecb5364e35585410367ca3d4ae001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a80f7e658061e37df25288c61e6a4ef862ecb5364e35585410367ca3d4ae001->enter($__internal_3a80f7e658061e37df25288c61e6a4ef862ecb5364e35585410367ca3d4ae001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AutoEcole/Default/affichertestadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a80f7e658061e37df25288c61e6a4ef862ecb5364e35585410367ca3d4ae001->leave($__internal_3a80f7e658061e37df25288c61e6a4ef862ecb5364e35585410367ca3d4ae001_prof);

    }

    // line 3
    public function block_tite($context, array $blocks = array())
    {
        $__internal_f32fbbc367c6e0f27eb70d2506a2ebf2f3b33ca1f4668352d1d9231f8add9605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32fbbc367c6e0f27eb70d2506a2ebf2f3b33ca1f4668352d1d9231f8add9605->enter($__internal_f32fbbc367c6e0f27eb70d2506a2ebf2f3b33ca1f4668352d1d9231f8add9605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tite"));

        echo "    <title> Page AutoEcole</title>  ";
        
        $__internal_f32fbbc367c6e0f27eb70d2506a2ebf2f3b33ca1f4668352d1d9231f8add9605->leave($__internal_f32fbbc367c6e0f27eb70d2506a2ebf2f3b33ca1f4668352d1d9231f8add9605_prof);

    }

    // line 5
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_3bb3e0e8d9eef89547f6db39bd823882c6dba85cf27f8f90e0992bc469342716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb3e0e8d9eef89547f6db39bd823882c6dba85cf27f8f90e0992bc469342716->enter($__internal_3bb3e0e8d9eef89547f6db39bd823882c6dba85cf27f8f90e0992bc469342716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

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
        
        $__internal_3bb3e0e8d9eef89547f6db39bd823882c6dba85cf27f8f90e0992bc469342716->leave($__internal_3bb3e0e8d9eef89547f6db39bd823882c6dba85cf27f8f90e0992bc469342716_prof);

    }

    // line 24
    public function block_BreadCrumb($context, array $blocks = array())
    {
        $__internal_02917fafd51b3a43d236070d820204254713407561a31a40846b66471a42c658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02917fafd51b3a43d236070d820204254713407561a31a40846b66471a42c658->enter($__internal_02917fafd51b3a43d236070d820204254713407561a31a40846b66471a42c658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BreadCrumb"));

        // line 25
        echo "    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\" row page-titles\">
        <div class=\"col-md-5 align-self-center\">


        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <a href=\"";
        // line 35
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
        
        $__internal_02917fafd51b3a43d236070d820204254713407561a31a40846b66471a42c658->leave($__internal_02917fafd51b3a43d236070d820204254713407561a31a40846b66471a42c658_prof);

    }

    // line 47
    public function block_container($context, array $blocks = array())
    {
        $__internal_c2504cedca6a654dceda34baf9bdd44efea06998db81102859ce50caa0eaf1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2504cedca6a654dceda34baf9bdd44efea06998db81102859ce50caa0eaf1e5->enter($__internal_c2504cedca6a654dceda34baf9bdd44efea06998db81102859ce50caa0eaf1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 48
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
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/coursall"), "html", null, true);
        echo "\">Show Driving Courses<span></span></a></li>

                            <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/testadmin"), "html", null, true);
        echo "\">Show Driving Tests<span></span></a></li>

                            <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/ajoutcours"), "html", null, true);
        echo "\">Add Driving Courses</a></li>
                            <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/auto/ajouttest"), "html", null, true);
        echo "\">Add Driving Tests</a></li>
                        </ul>

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
                                                <th>Id Test</th>
                                                <th>Questions</th>
                                                <th>Answer 1</th>
                                                <th>Answer 2</th>
                                                <th>Answer 3</th>
                                                <th>Answer 4</th>
                                                <th>Image</th>

                                            </tr>
                                            </thead>



                                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["testautoecole"]);
        foreach ($context['_seq'] as $context["_key"] => $context["testautoecole"]) {
            // line 91
            echo "                                                <tr>

                                                <tr>
                                                    <td style=\"width:50px;\" align=\"center\"><span class=\"action-icons\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["testautoecole"], "idtest", array()), "html", null, true);
            echo "</span></td>
                                                    <td align=\"center\"><span class=\"label label-light-danger label-icon\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["testautoecole"], "questions", array()), "html", null, true);
            echo "</span></td>
                                                    <td align=\"center\"><span class=\"label label-light-danger label-icon\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["testautoecole"], "reponses", array()), "html", null, true);
            echo "</span></td>
                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["testautoecole"], "fausse1", array()), "html", null, true);
            echo "</span></td>
                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["testautoecole"], "fausse2", array()), "html", null, true);
            echo "</span></td>
                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["testautoecole"], "fausse3", array()), "html", null, true);
            echo "</span></td>


                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                    <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["testautoecole"], "path", array()))), "html", null, true);
            echo "\" alt=\"\">
                                                                    </span></td>
                                                    <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_test", array("id" => $this->getAttribute($context["testautoecole"], "idtest", array()))), "html", null, true);
            echo "\">Delete</a>
                                                                    </span></td>

                                                    <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_test", array("id" => $this->getAttribute($context["testautoecole"], "idtest", array()))), "html", null, true);
            echo "\">Update</a>


                                                                    </span></td>

                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testautoecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                                        </table>
                                    </div>
                                </form>
                                <div class=\" pagination text-center \">
                                    ";
        // line 121
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["testautoecole"]) ? $context["testautoecole"] : $this->getContext($context, "testautoecole")));
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
        
        $__internal_c2504cedca6a654dceda34baf9bdd44efea06998db81102859ce50caa0eaf1e5->leave($__internal_c2504cedca6a654dceda34baf9bdd44efea06998db81102859ce50caa0eaf1e5_prof);

    }

    // line 139
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_28e32de6a92e1c69893b0cd8911e689b2bd4e44e7335d28c467744e62172cdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e32de6a92e1c69893b0cd8911e689b2bd4e44e7335d28c467744e62172cdfd->enter($__internal_28e32de6a92e1c69893b0cd8911e689b2bd4e44e7335d28c467744e62172cdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 140
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--Wave Effects -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/waves.js"), "html", null, true);
        echo "\"></script>
    <!--Menu sidebar -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <!--stickey kit -->
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!--Custom JavaScript -->
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Footable -->
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/footable-init.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_28e32de6a92e1c69893b0cd8911e689b2bd4e44e7335d28c467744e62172cdfd->leave($__internal_28e32de6a92e1c69893b0cd8911e689b2bd4e44e7335d28c467744e62172cdfd_prof);

    }

    public function getTemplateName()
    {
        return "@AutoEcole/Default/affichertestadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 162,  345 => 158,  340 => 156,  335 => 154,  330 => 152,  326 => 151,  321 => 149,  316 => 147,  311 => 145,  306 => 143,  302 => 142,  296 => 140,  290 => 139,  266 => 121,  260 => 117,  247 => 110,  240 => 106,  234 => 103,  227 => 99,  223 => 98,  219 => 97,  215 => 96,  211 => 95,  207 => 94,  202 => 91,  198 => 90,  168 => 63,  164 => 62,  159 => 60,  154 => 58,  142 => 48,  136 => 47,  118 => 35,  106 => 25,  100 => 24,  91 => 21,  85 => 18,  80 => 16,  76 => 15,  71 => 13,  67 => 12,  62 => 10,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
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
    <div class=\" row page-titles\">
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
                        </ul>

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
                                                <th>Id Test</th>
                                                <th>Questions</th>
                                                <th>Answer 1</th>
                                                <th>Answer 2</th>
                                                <th>Answer 3</th>
                                                <th>Answer 4</th>
                                                <th>Image</th>

                                            </tr>
                                            </thead>



                                            {% for testautoecole in testautoecole %}
                                                <tr>

                                                <tr>
                                                    <td style=\"width:50px;\" align=\"center\"><span class=\"action-icons\">{{ testautoecole.idtest }}</span></td>
                                                    <td align=\"center\"><span class=\"label label-light-danger label-icon\">{{ testautoecole.questions }}</span></td>
                                                    <td align=\"center\"><span class=\"label label-light-danger label-icon\">{{ testautoecole.reponses }}</span></td>
                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">{{ testautoecole.fausse1 }}</span></td>
                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">{{ testautoecole.fausse2 }}</span></td>
                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">{{ testautoecole.fausse3 }}</span></td>


                                                <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                    <img src=\"{{ asset('images/'~testautoecole.path) }}\" alt=\"\">
                                                                    </span></td>
                                                    <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                <a href=\"{{ path('delete_test',{'id':testautoecole.idtest}) }}\">Delete</a>
                                                                    </span></td>

                                                    <td align=\"center\"><span class=\"label label-light-danger label-icon\">
                                                <a href=\"{{ path('update_test',{'id':testautoecole.idtest}) }}\">Update</a>


                                                                    </span></td>

                                                </tr>
                                            {% endfor %}
                                        </table>
                                    </div>
                                </form>
                                <div class=\" pagination text-center \">
                                    {{ knp_pagination_render(testautoecole) }}
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
{% endblock %}", "@AutoEcole/Default/affichertestadmin.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle\\Resources\\views\\Default\\affichertestadmin.html.twig");
    }
}
