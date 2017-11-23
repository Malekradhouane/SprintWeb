<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_69eedf1c67f525e0783e26bae85c18e232b55a9b3242c295ef792abaf4bd0662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_111411922cbed8b54f4aecb2bbd598cb644758e5af3c69160ce81808274f7e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111411922cbed8b54f4aecb2bbd598cb644758e5af3c69160ce81808274f7e96->enter($__internal_111411922cbed8b54f4aecb2bbd598cb644758e5af3c69160ce81808274f7e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_111411922cbed8b54f4aecb2bbd598cb644758e5af3c69160ce81808274f7e96->leave($__internal_111411922cbed8b54f4aecb2bbd598cb644758e5af3c69160ce81808274f7e96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28ea094e555f766e190579515cc39fd3b9ab4bff9a3cf349c67b6ef9fd248002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ea094e555f766e190579515cc39fd3b9ab4bff9a3cf349c67b6ef9fd248002->enter($__internal_28ea094e555f766e190579515cc39fd3b9ab4bff9a3cf349c67b6ef9fd248002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28ea094e555f766e190579515cc39fd3b9ab4bff9a3cf349c67b6ef9fd248002->leave($__internal_28ea094e555f766e190579515cc39fd3b9ab4bff9a3cf349c67b6ef9fd248002_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_993d399a778657d7871b04a8462d8d883cc2a56e31c4abd1b029a46575983265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993d399a778657d7871b04a8462d8d883cc2a56e31c4abd1b029a46575983265->enter($__internal_993d399a778657d7871b04a8462d8d883cc2a56e31c4abd1b029a46575983265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_993d399a778657d7871b04a8462d8d883cc2a56e31c4abd1b029a46575983265->leave($__internal_993d399a778657d7871b04a8462d8d883cc2a56e31c4abd1b029a46575983265_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_002ff9a5042f1f002332457b4b3fce1143972391dd5bb131fa9f8e6524739d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002ff9a5042f1f002332457b4b3fce1143972391dd5bb131fa9f8e6524739d35->enter($__internal_002ff9a5042f1f002332457b4b3fce1143972391dd5bb131fa9f8e6524739d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_002ff9a5042f1f002332457b4b3fce1143972391dd5bb131fa9f8e6524739d35->leave($__internal_002ff9a5042f1f002332457b4b3fce1143972391dd5bb131fa9f8e6524739d35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
