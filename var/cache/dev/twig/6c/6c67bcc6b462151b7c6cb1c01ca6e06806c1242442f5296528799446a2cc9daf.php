<?php

/* @AutoEcole/Default/index.html.twig */
class __TwigTemplate_8cfc3aa132560dbe973d7c3f00834b07dc5449c90c10c1543ac0d9b3a2cf886b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:base2.html.twig", "@AutoEcole/Default/index.html.twig", 1);
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
        $__internal_15b0f56a4cf216d1152be4c5f8ac4ae825bc33d5d849d724e0cd84154d21efd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b0f56a4cf216d1152be4c5f8ac4ae825bc33d5d849d724e0cd84154d21efd0->enter($__internal_15b0f56a4cf216d1152be4c5f8ac4ae825bc33d5d849d724e0cd84154d21efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AutoEcole/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b0f56a4cf216d1152be4c5f8ac4ae825bc33d5d849d724e0cd84154d21efd0->leave($__internal_15b0f56a4cf216d1152be4c5f8ac4ae825bc33d5d849d724e0cd84154d21efd0_prof);

    }

    // line 3
    public function block_tite($context, array $blocks = array())
    {
        $__internal_78ebdde43dfbbdf68125a54beb540bff9546271c1f848bd9db09fd5b4c7ccb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ebdde43dfbbdf68125a54beb540bff9546271c1f848bd9db09fd5b4c7ccb0e->enter($__internal_78ebdde43dfbbdf68125a54beb540bff9546271c1f848bd9db09fd5b4c7ccb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tite"));

        echo "    <title> Page AutoEcole</title>  ";
        
        $__internal_78ebdde43dfbbdf68125a54beb540bff9546271c1f848bd9db09fd5b4c7ccb0e->leave($__internal_78ebdde43dfbbdf68125a54beb540bff9546271c1f848bd9db09fd5b4c7ccb0e_prof);

    }

    // line 5
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_4c71f6f5d6e6ba9f4591b09cf2bbcfb3326b90a0eab86a6c688478a034fcf38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c71f6f5d6e6ba9f4591b09cf2bbcfb3326b90a0eab86a6c688478a034fcf38d->enter($__internal_4c71f6f5d6e6ba9f4591b09cf2bbcfb3326b90a0eab86a6c688478a034fcf38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

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
        
        $__internal_4c71f6f5d6e6ba9f4591b09cf2bbcfb3326b90a0eab86a6c688478a034fcf38d->leave($__internal_4c71f6f5d6e6ba9f4591b09cf2bbcfb3326b90a0eab86a6c688478a034fcf38d_prof);

    }

    // line 26
    public function block_BreadCrumb($context, array $blocks = array())
    {
        $__internal_6113baa766f8421b799b19e2f2278e43a2829bc5b3bbaa90c75d1dc8a93e7499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6113baa766f8421b799b19e2f2278e43a2829bc5b3bbaa90c75d1dc8a93e7499->enter($__internal_6113baa766f8421b799b19e2f2278e43a2829bc5b3bbaa90c75d1dc8a93e7499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BreadCrumb"));

        // line 27
        echo "    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"row page-titles\">
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
        
        $__internal_6113baa766f8421b799b19e2f2278e43a2829bc5b3bbaa90c75d1dc8a93e7499->leave($__internal_6113baa766f8421b799b19e2f2278e43a2829bc5b3bbaa90c75d1dc8a93e7499_prof);

    }

    // line 47
    public function block_container($context, array $blocks = array())
    {
        $__internal_161e7c84bec00eea5d2097652a0006be3c0a0068e18ce421d924bd3a90a0d672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161e7c84bec00eea5d2097652a0006be3c0a0068e18ce421d924bd3a90a0d672->enter($__internal_161e7c84bec00eea5d2097652a0006be3c0a0068e18ce421d924bd3a90a0d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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


                    </div>
                    <!-- /.left-aside-column-->
                    <div class=\"right-aside \">
                        <div class=\"right-page-header\">

                            <div class=\"well text-center \">
                                ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                                ";
        // line 73
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

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
        
        $__internal_161e7c84bec00eea5d2097652a0006be3c0a0068e18ce421d924bd3a90a0d672->leave($__internal_161e7c84bec00eea5d2097652a0006be3c0a0068e18ce421d924bd3a90a0d672_prof);

    }

    // line 90
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_3d5fc2c6c438c9f0df03f26f15332ec55af51a66d265c3898520d4d5bc818ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5fc2c6c438c9f0df03f26f15332ec55af51a66d265c3898520d4d5bc818ee2->enter($__internal_3d5fc2c6c438c9f0df03f26f15332ec55af51a66d265c3898520d4d5bc818ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 91
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--Wave Effects -->
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/waves.js"), "html", null, true);
        echo "\"></script>
    <!--Menu sidebar -->
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <!--stickey kit -->
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!--Custom JavaScript -->
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Footable -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/footable-init.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_3d5fc2c6c438c9f0df03f26f15332ec55af51a66d265c3898520d4d5bc818ee2->leave($__internal_3d5fc2c6c438c9f0df03f26f15332ec55af51a66d265c3898520d4d5bc818ee2_prof);

    }

    public function getTemplateName()
    {
        return "@AutoEcole/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 113,  262 => 109,  257 => 107,  252 => 105,  247 => 103,  243 => 102,  238 => 100,  233 => 98,  228 => 96,  223 => 94,  219 => 93,  213 => 91,  207 => 90,  184 => 73,  180 => 72,  168 => 63,  164 => 62,  159 => 60,  154 => 58,  142 => 48,  136 => 47,  118 => 35,  108 => 27,  102 => 26,  91 => 21,  85 => 18,  80 => 16,  76 => 15,  71 => 13,  67 => 12,  62 => 10,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
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

                            <div class=\"well text-center \">
                                {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                                {{ form_end(form) }}

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


{% endblock %}", "@AutoEcole/Default/index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
