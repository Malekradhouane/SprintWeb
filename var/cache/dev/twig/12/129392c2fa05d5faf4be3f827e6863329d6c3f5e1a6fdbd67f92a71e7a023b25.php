<?php

/* TemplateBundle:Default:indexAdmin.html.twig */
class __TwigTemplate_3f784cb29fbf73ee6397227d68aba371a70679248801eb40e193d3f82ff5678b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:base2.html.twig", "TemplateBundle:Default:indexAdmin.html.twig", 1);
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
        $__internal_6323b1e597dc6b3baad033419936e3976f46c206d5f4fe2c1cfda5567dc5e3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6323b1e597dc6b3baad033419936e3976f46c206d5f4fe2c1cfda5567dc5e3f6->enter($__internal_6323b1e597dc6b3baad033419936e3976f46c206d5f4fe2c1cfda5567dc5e3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TemplateBundle:Default:indexAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6323b1e597dc6b3baad033419936e3976f46c206d5f4fe2c1cfda5567dc5e3f6->leave($__internal_6323b1e597dc6b3baad033419936e3976f46c206d5f4fe2c1cfda5567dc5e3f6_prof);

    }

    // line 2
    public function block_tite($context, array $blocks = array())
    {
        $__internal_586f7fd5ec81c7b30e2b2ddfb2881aa40b30071b67a4ba64e9bb330ef4c938d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_586f7fd5ec81c7b30e2b2ddfb2881aa40b30071b67a4ba64e9bb330ef4c938d9->enter($__internal_586f7fd5ec81c7b30e2b2ddfb2881aa40b30071b67a4ba64e9bb330ef4c938d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tite"));

        echo "    <title> Page d'acceuil Admin</title>  ";
        
        $__internal_586f7fd5ec81c7b30e2b2ddfb2881aa40b30071b67a4ba64e9bb330ef4c938d9->leave($__internal_586f7fd5ec81c7b30e2b2ddfb2881aa40b30071b67a4ba64e9bb330ef4c938d9_prof);

    }

    // line 4
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_c46b5f360b0c4bf0b85ab14ecbc850a04f3e7e8bb09122343a4eb44653ea2dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46b5f360b0c4bf0b85ab14ecbc850a04f3e7e8bb09122343a4eb44653ea2dc8->enter($__internal_c46b5f360b0c4bf0b85ab14ecbc850a04f3e7e8bb09122343a4eb44653ea2dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        // line 5
        echo "         <!-- Bootstrap Core CSS -->
         <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         <!-- This page CSS -->
         <!-- chartist CSS -->
         <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/chartist-js/dist/chartist.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         <!--c3 CSS -->
         <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/c3-master/c3.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
         <!-- Custom CSS -->
         <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         <!-- Dashboard 1 Page CSS -->
         <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/pages/dashboard2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
         <!-- You can change the theme colors from here -->
         <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/colors/default-dark.css"), "html", null, true);
        echo "\" id=\"theme\" rel=\"stylesheet\">
";
        
        $__internal_c46b5f360b0c4bf0b85ab14ecbc850a04f3e7e8bb09122343a4eb44653ea2dc8->leave($__internal_c46b5f360b0c4bf0b85ab14ecbc850a04f3e7e8bb09122343a4eb44653ea2dc8_prof);

    }

    // line 22
    public function block_BreadCrumb($context, array $blocks = array())
    {
        $__internal_7cae22754db0de8ff7cb6d8aa8211582efbeeed5d8ce92512dd7e0e2acf84bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cae22754db0de8ff7cb6d8aa8211582efbeeed5d8ce92512dd7e0e2acf84bda->enter($__internal_7cae22754db0de8ff7cb6d8aa8211582efbeeed5d8ce92512dd7e0e2acf84bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BreadCrumb"));

        // line 23
        echo "    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h3 class=\"text-themecolor\">Dashboard 2</h3>
        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                <li class=\"breadcrumb-item active\">Dashboard 2</li>
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
        
        $__internal_7cae22754db0de8ff7cb6d8aa8211582efbeeed5d8ce92512dd7e0e2acf84bda->leave($__internal_7cae22754db0de8ff7cb6d8aa8211582efbeeed5d8ce92512dd7e0e2acf84bda_prof);

    }

    // line 45
    public function block_container($context, array $blocks = array())
    {
        $__internal_24f16e5475b794c3b94b759866f09d87e729a9ffc84c5bf9cbfcaf5d0ea7667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f16e5475b794c3b94b759866f09d87e729a9ffc84c5bf9cbfcaf5d0ea7667d->enter($__internal_24f16e5475b794c3b94b759866f09d87e729a9ffc84c5bf9cbfcaf5d0ea7667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 46
        echo "tojrab
";
        
        $__internal_24f16e5475b794c3b94b759866f09d87e729a9ffc84c5bf9cbfcaf5d0ea7667d->leave($__internal_24f16e5475b794c3b94b759866f09d87e729a9ffc84c5bf9cbfcaf5d0ea7667d_prof);

    }

    // line 49
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8dce6f4cd808e27b5f27d3f172a03d73979fab113b9541c0ef95a93a22c0d78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dce6f4cd808e27b5f27d3f172a03d73979fab113b9541c0ef95a93a22c0d78c->enter($__internal_8dce6f4cd808e27b5f27d3f172a03d73979fab113b9541c0ef95a93a22c0d78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 50
        echo "    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/bootstrap.min.jss"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--Wave Effects -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/waves.js"), "html", null, true);
        echo "\"></script>
    <!--Menu sidebar -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <!--Custom JavaScript -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/chartist-js/dist/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <!--c3 JavaScript -->
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/d3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/c3-master/c3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart JS -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/dashboard2.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8dce6f4cd808e27b5f27d3f172a03d73979fab113b9541c0ef95a93a22c0d78c->leave($__internal_8dce6f4cd808e27b5f27d3f172a03d73979fab113b9541c0ef95a93a22c0d78c_prof);

    }

    public function getTemplateName()
    {
        return "TemplateBundle:Default:indexAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 79,  215 => 75,  210 => 73,  206 => 72,  201 => 70,  197 => 69,  189 => 64,  184 => 62,  179 => 60,  174 => 58,  169 => 56,  165 => 55,  160 => 53,  155 => 50,  149 => 49,  141 => 46,  135 => 45,  108 => 23,  102 => 22,  93 => 19,  88 => 17,  83 => 15,  78 => 13,  73 => 11,  69 => 10,  63 => 7,  59 => 6,  56 => 5,  50 => 4,  38 => 2,  11 => 1,);
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
{% block tite %}    <title> Page d'acceuil Admin</title>  {% endblock %}

{% block sheets %}
         <!-- Bootstrap Core CSS -->
         <link href=\"{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
         <link href=\"{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}\" rel=\"stylesheet\">
         <!-- This page CSS -->
         <!-- chartist CSS -->
         <link href=\"{{ asset('admin/assets/plugins/chartist-js/dist/chartist.min.css') }}\" rel=\"stylesheet\">
         <link href=\"{{ asset('admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}\" rel=\"stylesheet\">
         <!--c3 CSS -->
         <link href=\"{{ asset('admin/assets/plugins/c3-master/c3.min.css') }}\"  rel=\"stylesheet\">
         <!-- Custom CSS -->
         <link href=\"{{ asset('admin/css/style.css') }}\" rel=\"stylesheet\">
         <!-- Dashboard 1 Page CSS -->
         <link href=\"{{ asset('admin/css/pages/dashboard2.css') }}\" rel=\"stylesheet\">
         <!-- You can change the theme colors from here -->
         <link href=\"{{ asset('admin/css/colors/default-dark.css') }}\" id=\"theme\" rel=\"stylesheet\">
{% endblock %}

{% block BreadCrumb %}
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h3 class=\"text-themecolor\">Dashboard 2</h3>
        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                <li class=\"breadcrumb-item active\">Dashboard 2</li>
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
tojrab
{% endblock %}

{% block scripts %}
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src=\"{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}\"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src=\"{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.jss') }}\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}\"></script>
    <!--Wave Effects -->
    <script src=\"{{ asset('admin/js/waves.js') }}\"></script>
    <!--Menu sidebar -->
    <script src=\"{{ asset('admin/js/sidebarmenu.js') }}\"></script>
    <!--Custom JavaScript -->
    <script src=\"{{ asset('admin/js/custom.min.js') }}\"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <script src=\"{{ asset('admin/assets/plugins/chartist-js/dist/chartist.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}\"></script>
    <!--c3 JavaScript -->
    <script src=\"{{  asset('admin/assets/plugins/d3/d3.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/c3-master/c3.min.js') }}\"></script>
    <!-- Chart JS -->
    <script src=\"{{ asset('admin/js/dashboard2.js') }}\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"{{ asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}\"></script>

{% endblock %}

", "TemplateBundle:Default:indexAdmin.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\TemplateBundle/Resources/views/Default/indexAdmin.html.twig");
    }
}
