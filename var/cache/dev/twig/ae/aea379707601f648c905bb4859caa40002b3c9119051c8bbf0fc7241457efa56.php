<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c59856651509fac7e82a913f9edff792f000184b8a36b09d8e9993c5fb848d0 extends Twig_Template
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
        $__internal_90cb81b6c4352628b05587da7ea8108f1967d6b6481c5c3b775cf5e6ff7e963c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cb81b6c4352628b05587da7ea8108f1967d6b6481c5c3b775cf5e6ff7e963c->enter($__internal_90cb81b6c4352628b05587da7ea8108f1967d6b6481c5c3b775cf5e6ff7e963c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90cb81b6c4352628b05587da7ea8108f1967d6b6481c5c3b775cf5e6ff7e963c->leave($__internal_90cb81b6c4352628b05587da7ea8108f1967d6b6481c5c3b775cf5e6ff7e963c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7365e11ffd867c27e7af17dc61df93f6d045277623a7054ae0f560d94fbc28da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7365e11ffd867c27e7af17dc61df93f6d045277623a7054ae0f560d94fbc28da->enter($__internal_7365e11ffd867c27e7af17dc61df93f6d045277623a7054ae0f560d94fbc28da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7365e11ffd867c27e7af17dc61df93f6d045277623a7054ae0f560d94fbc28da->leave($__internal_7365e11ffd867c27e7af17dc61df93f6d045277623a7054ae0f560d94fbc28da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_648e081bd353b36cd0406cd873b26b3ae13202f9664deb490c8a019d8e09bd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648e081bd353b36cd0406cd873b26b3ae13202f9664deb490c8a019d8e09bd5d->enter($__internal_648e081bd353b36cd0406cd873b26b3ae13202f9664deb490c8a019d8e09bd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_648e081bd353b36cd0406cd873b26b3ae13202f9664deb490c8a019d8e09bd5d->leave($__internal_648e081bd353b36cd0406cd873b26b3ae13202f9664deb490c8a019d8e09bd5d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c526a828c1c3831ad48e95a7beac90de6f89ca85c26997cf83dc7467953df3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c526a828c1c3831ad48e95a7beac90de6f89ca85c26997cf83dc7467953df3a7->enter($__internal_c526a828c1c3831ad48e95a7beac90de6f89ca85c26997cf83dc7467953df3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c526a828c1c3831ad48e95a7beac90de6f89ca85c26997cf83dc7467953df3a7->leave($__internal_c526a828c1c3831ad48e95a7beac90de6f89ca85c26997cf83dc7467953df3a7_prof);

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
