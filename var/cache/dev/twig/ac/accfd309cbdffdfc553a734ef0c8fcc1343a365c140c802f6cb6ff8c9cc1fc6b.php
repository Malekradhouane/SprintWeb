<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2b095cc229494c9756693ea47ac1f84aaf4baa93faa85ef88787334f46512970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e7949a798a6fca50bfc34a99d91bd7ce3e35d30e8db50e12427c0beea1c0cd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7949a798a6fca50bfc34a99d91bd7ce3e35d30e8db50e12427c0beea1c0cd8b->enter($__internal_e7949a798a6fca50bfc34a99d91bd7ce3e35d30e8db50e12427c0beea1c0cd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7949a798a6fca50bfc34a99d91bd7ce3e35d30e8db50e12427c0beea1c0cd8b->leave($__internal_e7949a798a6fca50bfc34a99d91bd7ce3e35d30e8db50e12427c0beea1c0cd8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b7eec7595cdb63d5d32a800320a98d98f2798ffc286bd8c0705314fb260e966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7eec7595cdb63d5d32a800320a98d98f2798ffc286bd8c0705314fb260e966->enter($__internal_9b7eec7595cdb63d5d32a800320a98d98f2798ffc286bd8c0705314fb260e966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9b7eec7595cdb63d5d32a800320a98d98f2798ffc286bd8c0705314fb260e966->leave($__internal_9b7eec7595cdb63d5d32a800320a98d98f2798ffc286bd8c0705314fb260e966_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c9ecde1f2e2432dcc2a1da7e4ec98c3d933070f8638cf633616741c7ae15191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9ecde1f2e2432dcc2a1da7e4ec98c3d933070f8638cf633616741c7ae15191->enter($__internal_5c9ecde1f2e2432dcc2a1da7e4ec98c3d933070f8638cf633616741c7ae15191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5c9ecde1f2e2432dcc2a1da7e4ec98c3d933070f8638cf633616741c7ae15191->leave($__internal_5c9ecde1f2e2432dcc2a1da7e4ec98c3d933070f8638cf633616741c7ae15191_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_044ecc85801cfe179ee6dbe431c4d21ae555fa68701b86e8cf1a296b44c3ad81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044ecc85801cfe179ee6dbe431c4d21ae555fa68701b86e8cf1a296b44c3ad81->enter($__internal_044ecc85801cfe179ee6dbe431c4d21ae555fa68701b86e8cf1a296b44c3ad81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_044ecc85801cfe179ee6dbe431c4d21ae555fa68701b86e8cf1a296b44c3ad81->leave($__internal_044ecc85801cfe179ee6dbe431c4d21ae555fa68701b86e8cf1a296b44c3ad81_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
