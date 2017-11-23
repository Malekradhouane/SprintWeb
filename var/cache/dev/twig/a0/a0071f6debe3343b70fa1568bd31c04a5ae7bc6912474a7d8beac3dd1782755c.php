<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_446707e965abb3124b859cd3de7185151495d72cebadb6eed5bb5c7325805833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70a4886d44daa1906a59b54bef3fa3e9a8810c348a84eae3bed383ab1ba2cc86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a4886d44daa1906a59b54bef3fa3e9a8810c348a84eae3bed383ab1ba2cc86->enter($__internal_70a4886d44daa1906a59b54bef3fa3e9a8810c348a84eae3bed383ab1ba2cc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a4886d44daa1906a59b54bef3fa3e9a8810c348a84eae3bed383ab1ba2cc86->leave($__internal_70a4886d44daa1906a59b54bef3fa3e9a8810c348a84eae3bed383ab1ba2cc86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_856621e9d696103cdff6439dc8c17453175f1905c27e8b56b728daa849b60a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856621e9d696103cdff6439dc8c17453175f1905c27e8b56b728daa849b60a44->enter($__internal_856621e9d696103cdff6439dc8c17453175f1905c27e8b56b728daa849b60a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_856621e9d696103cdff6439dc8c17453175f1905c27e8b56b728daa849b60a44->leave($__internal_856621e9d696103cdff6439dc8c17453175f1905c27e8b56b728daa849b60a44_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cb83253e225552cfa10efefc60bcb60c451fb54dadcce7421158ebeff8a0740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb83253e225552cfa10efefc60bcb60c451fb54dadcce7421158ebeff8a0740->enter($__internal_3cb83253e225552cfa10efefc60bcb60c451fb54dadcce7421158ebeff8a0740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3cb83253e225552cfa10efefc60bcb60c451fb54dadcce7421158ebeff8a0740->leave($__internal_3cb83253e225552cfa10efefc60bcb60c451fb54dadcce7421158ebeff8a0740_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a93a2754cf1b6f97b74651078e7881822fd7666c89bcd96d83a2d60807929ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a93a2754cf1b6f97b74651078e7881822fd7666c89bcd96d83a2d60807929ef->enter($__internal_2a93a2754cf1b6f97b74651078e7881822fd7666c89bcd96d83a2d60807929ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2a93a2754cf1b6f97b74651078e7881822fd7666c89bcd96d83a2d60807929ef->leave($__internal_2a93a2754cf1b6f97b74651078e7881822fd7666c89bcd96d83a2d60807929ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
