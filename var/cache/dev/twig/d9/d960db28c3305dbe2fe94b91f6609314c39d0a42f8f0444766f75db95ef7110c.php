<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_88f63c4c6405b9a42377ec9f1ae1e4984ee6fe5cd74557c74a293db42af513d6 extends Twig_Template
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
        $__internal_f8971eb3d00077042c28aa4ae58d158921fa79c768fcfc4a966bd78caec22125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8971eb3d00077042c28aa4ae58d158921fa79c768fcfc4a966bd78caec22125->enter($__internal_f8971eb3d00077042c28aa4ae58d158921fa79c768fcfc4a966bd78caec22125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8971eb3d00077042c28aa4ae58d158921fa79c768fcfc4a966bd78caec22125->leave($__internal_f8971eb3d00077042c28aa4ae58d158921fa79c768fcfc4a966bd78caec22125_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b57e09fe654c37885151b04f595aac46f0be794fa7c55020e7ce8bf5c21bd94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57e09fe654c37885151b04f595aac46f0be794fa7c55020e7ce8bf5c21bd94d->enter($__internal_b57e09fe654c37885151b04f595aac46f0be794fa7c55020e7ce8bf5c21bd94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b57e09fe654c37885151b04f595aac46f0be794fa7c55020e7ce8bf5c21bd94d->leave($__internal_b57e09fe654c37885151b04f595aac46f0be794fa7c55020e7ce8bf5c21bd94d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e155a92f0f184a3af8bdec485a6a076172f3610e66b124b0f675f519b66c08c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e155a92f0f184a3af8bdec485a6a076172f3610e66b124b0f675f519b66c08c3->enter($__internal_e155a92f0f184a3af8bdec485a6a076172f3610e66b124b0f675f519b66c08c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e155a92f0f184a3af8bdec485a6a076172f3610e66b124b0f675f519b66c08c3->leave($__internal_e155a92f0f184a3af8bdec485a6a076172f3610e66b124b0f675f519b66c08c3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2b7a619b39114b8b1cea7ebcbf055d9df01f089f6e95b72d6a6023449a0f7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b7a619b39114b8b1cea7ebcbf055d9df01f089f6e95b72d6a6023449a0f7bb->enter($__internal_a2b7a619b39114b8b1cea7ebcbf055d9df01f089f6e95b72d6a6023449a0f7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2b7a619b39114b8b1cea7ebcbf055d9df01f089f6e95b72d6a6023449a0f7bb->leave($__internal_a2b7a619b39114b8b1cea7ebcbf055d9df01f089f6e95b72d6a6023449a0f7bb_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
