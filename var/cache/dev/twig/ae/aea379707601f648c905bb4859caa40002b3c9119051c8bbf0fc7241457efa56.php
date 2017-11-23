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
        $__internal_a18ac93b06ffdd6e94497c486d67bd9d2fd27de85b2f0ff83b28d1941fcbd679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18ac93b06ffdd6e94497c486d67bd9d2fd27de85b2f0ff83b28d1941fcbd679->enter($__internal_a18ac93b06ffdd6e94497c486d67bd9d2fd27de85b2f0ff83b28d1941fcbd679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a18ac93b06ffdd6e94497c486d67bd9d2fd27de85b2f0ff83b28d1941fcbd679->leave($__internal_a18ac93b06ffdd6e94497c486d67bd9d2fd27de85b2f0ff83b28d1941fcbd679_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4048a8c92ab3c20440aede23ce02ef89867f85d6151c2dcdadefe530e062ae3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4048a8c92ab3c20440aede23ce02ef89867f85d6151c2dcdadefe530e062ae3f->enter($__internal_4048a8c92ab3c20440aede23ce02ef89867f85d6151c2dcdadefe530e062ae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4048a8c92ab3c20440aede23ce02ef89867f85d6151c2dcdadefe530e062ae3f->leave($__internal_4048a8c92ab3c20440aede23ce02ef89867f85d6151c2dcdadefe530e062ae3f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad6632feea6bf7eb797aad35392e9ba482698144ff063c34c8d7eda678828653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6632feea6bf7eb797aad35392e9ba482698144ff063c34c8d7eda678828653->enter($__internal_ad6632feea6bf7eb797aad35392e9ba482698144ff063c34c8d7eda678828653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad6632feea6bf7eb797aad35392e9ba482698144ff063c34c8d7eda678828653->leave($__internal_ad6632feea6bf7eb797aad35392e9ba482698144ff063c34c8d7eda678828653_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58ab370db8228076a5f3832a71135391d333208c417830d5ac2d8e9f37bdaec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ab370db8228076a5f3832a71135391d333208c417830d5ac2d8e9f37bdaec1->enter($__internal_58ab370db8228076a5f3832a71135391d333208c417830d5ac2d8e9f37bdaec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58ab370db8228076a5f3832a71135391d333208c417830d5ac2d8e9f37bdaec1->leave($__internal_58ab370db8228076a5f3832a71135391d333208c417830d5ac2d8e9f37bdaec1_prof);

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
