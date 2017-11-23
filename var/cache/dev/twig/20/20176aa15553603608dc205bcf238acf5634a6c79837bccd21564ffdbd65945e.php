<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_866edb7135b2383213f1caf856fc4678241b3bc612d609ac61dbec7e04805e0a extends Twig_Template
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
        $__internal_934b2643efafa7cbe68db9a4dea8d527f0d3d16bec94abfc779d9c3f59517957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934b2643efafa7cbe68db9a4dea8d527f0d3d16bec94abfc779d9c3f59517957->enter($__internal_934b2643efafa7cbe68db9a4dea8d527f0d3d16bec94abfc779d9c3f59517957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934b2643efafa7cbe68db9a4dea8d527f0d3d16bec94abfc779d9c3f59517957->leave($__internal_934b2643efafa7cbe68db9a4dea8d527f0d3d16bec94abfc779d9c3f59517957_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4768daee5a58c4965055b94beab105d232a9ad400df9c0258a5b0f48ca8163e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4768daee5a58c4965055b94beab105d232a9ad400df9c0258a5b0f48ca8163e0->enter($__internal_4768daee5a58c4965055b94beab105d232a9ad400df9c0258a5b0f48ca8163e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4768daee5a58c4965055b94beab105d232a9ad400df9c0258a5b0f48ca8163e0->leave($__internal_4768daee5a58c4965055b94beab105d232a9ad400df9c0258a5b0f48ca8163e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5ed6480097491a5a69315ad6c30388c4025ee3f33f1c4b50b1e22eefa4b83db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ed6480097491a5a69315ad6c30388c4025ee3f33f1c4b50b1e22eefa4b83db->enter($__internal_a5ed6480097491a5a69315ad6c30388c4025ee3f33f1c4b50b1e22eefa4b83db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5ed6480097491a5a69315ad6c30388c4025ee3f33f1c4b50b1e22eefa4b83db->leave($__internal_a5ed6480097491a5a69315ad6c30388c4025ee3f33f1c4b50b1e22eefa4b83db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48a743fc97075a2c4fc07546820f87e015657d20f835f172cac218be7e0e4960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a743fc97075a2c4fc07546820f87e015657d20f835f172cac218be7e0e4960->enter($__internal_48a743fc97075a2c4fc07546820f87e015657d20f835f172cac218be7e0e4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48a743fc97075a2c4fc07546820f87e015657d20f835f172cac218be7e0e4960->leave($__internal_48a743fc97075a2c4fc07546820f87e015657d20f835f172cac218be7e0e4960_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
