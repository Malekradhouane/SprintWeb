<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_417f6c208a26a7bf3ef4d3f3cca90639852867bca227fc1ee1b0ee791b4d70ef extends Twig_Template
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
        $__internal_bb226a070a0bcf8c144bffd2293b22adba83c16299b6e44f4d830c17abf73afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb226a070a0bcf8c144bffd2293b22adba83c16299b6e44f4d830c17abf73afd->enter($__internal_bb226a070a0bcf8c144bffd2293b22adba83c16299b6e44f4d830c17abf73afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb226a070a0bcf8c144bffd2293b22adba83c16299b6e44f4d830c17abf73afd->leave($__internal_bb226a070a0bcf8c144bffd2293b22adba83c16299b6e44f4d830c17abf73afd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55ed386b4a07a56cb65d52bcdb36004d0fdcc7bcf9851f1021ad5ca9aaf3d74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ed386b4a07a56cb65d52bcdb36004d0fdcc7bcf9851f1021ad5ca9aaf3d74e->enter($__internal_55ed386b4a07a56cb65d52bcdb36004d0fdcc7bcf9851f1021ad5ca9aaf3d74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_55ed386b4a07a56cb65d52bcdb36004d0fdcc7bcf9851f1021ad5ca9aaf3d74e->leave($__internal_55ed386b4a07a56cb65d52bcdb36004d0fdcc7bcf9851f1021ad5ca9aaf3d74e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c77dec571137452aa4b9a697138e6c49f0777b3c8dcbe603bfe0e5b7fe1da7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77dec571137452aa4b9a697138e6c49f0777b3c8dcbe603bfe0e5b7fe1da7af->enter($__internal_c77dec571137452aa4b9a697138e6c49f0777b3c8dcbe603bfe0e5b7fe1da7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c77dec571137452aa4b9a697138e6c49f0777b3c8dcbe603bfe0e5b7fe1da7af->leave($__internal_c77dec571137452aa4b9a697138e6c49f0777b3c8dcbe603bfe0e5b7fe1da7af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_88d86680cae414ef9e7e99c62c8f4dcdf62c2b7bc6bf70b3f6d8ffa0668338b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d86680cae414ef9e7e99c62c8f4dcdf62c2b7bc6bf70b3f6d8ffa0668338b1->enter($__internal_88d86680cae414ef9e7e99c62c8f4dcdf62c2b7bc6bf70b3f6d8ffa0668338b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_88d86680cae414ef9e7e99c62c8f4dcdf62c2b7bc6bf70b3f6d8ffa0668338b1->leave($__internal_88d86680cae414ef9e7e99c62c8f4dcdf62c2b7bc6bf70b3f6d8ffa0668338b1_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
