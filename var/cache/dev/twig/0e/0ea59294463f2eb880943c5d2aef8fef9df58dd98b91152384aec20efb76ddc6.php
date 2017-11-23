<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_eb200570c47ccf1a0f0ce93e4c6e4e1938af0d6eff6814c905baa8eeb7447775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_758abc5e0eb2d987dce913768850c46876b4b396a0b0a2ff94f0c7c52ea1b327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758abc5e0eb2d987dce913768850c46876b4b396a0b0a2ff94f0c7c52ea1b327->enter($__internal_758abc5e0eb2d987dce913768850c46876b4b396a0b0a2ff94f0c7c52ea1b327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_758abc5e0eb2d987dce913768850c46876b4b396a0b0a2ff94f0c7c52ea1b327->leave($__internal_758abc5e0eb2d987dce913768850c46876b4b396a0b0a2ff94f0c7c52ea1b327_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30a62eb64547766314e498b55cef3081f0bd7bcc6da0e8fe4a2074b9350a6aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a62eb64547766314e498b55cef3081f0bd7bcc6da0e8fe4a2074b9350a6aa3->enter($__internal_30a62eb64547766314e498b55cef3081f0bd7bcc6da0e8fe4a2074b9350a6aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30a62eb64547766314e498b55cef3081f0bd7bcc6da0e8fe4a2074b9350a6aa3->leave($__internal_30a62eb64547766314e498b55cef3081f0bd7bcc6da0e8fe4a2074b9350a6aa3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f9cee4383e15fc75bb9390181b79f3a87a4578cbdca0d5c30d9cc64d6465963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9cee4383e15fc75bb9390181b79f3a87a4578cbdca0d5c30d9cc64d6465963->enter($__internal_9f9cee4383e15fc75bb9390181b79f3a87a4578cbdca0d5c30d9cc64d6465963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f9cee4383e15fc75bb9390181b79f3a87a4578cbdca0d5c30d9cc64d6465963->leave($__internal_9f9cee4383e15fc75bb9390181b79f3a87a4578cbdca0d5c30d9cc64d6465963_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9fa53d3ce8469c3623fa4439f60fdd9972f83375395aa869dd3ab3581ed0b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fa53d3ce8469c3623fa4439f60fdd9972f83375395aa869dd3ab3581ed0b83->enter($__internal_d9fa53d3ce8469c3623fa4439f60fdd9972f83375395aa869dd3ab3581ed0b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d9fa53d3ce8469c3623fa4439f60fdd9972f83375395aa869dd3ab3581ed0b83->leave($__internal_d9fa53d3ce8469c3623fa4439f60fdd9972f83375395aa869dd3ab3581ed0b83_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
