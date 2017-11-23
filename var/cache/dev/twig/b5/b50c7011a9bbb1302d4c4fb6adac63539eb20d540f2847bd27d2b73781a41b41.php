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
        $__internal_4b7c8b924404aef31818ac575e7c0253bec240e37baf060969f6eefdfb378e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7c8b924404aef31818ac575e7c0253bec240e37baf060969f6eefdfb378e1f->enter($__internal_4b7c8b924404aef31818ac575e7c0253bec240e37baf060969f6eefdfb378e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7c8b924404aef31818ac575e7c0253bec240e37baf060969f6eefdfb378e1f->leave($__internal_4b7c8b924404aef31818ac575e7c0253bec240e37baf060969f6eefdfb378e1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2aa996bef56e41917983a2676addacbf8c1de9c5f9cff7542127b6337327da5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa996bef56e41917983a2676addacbf8c1de9c5f9cff7542127b6337327da5c->enter($__internal_2aa996bef56e41917983a2676addacbf8c1de9c5f9cff7542127b6337327da5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2aa996bef56e41917983a2676addacbf8c1de9c5f9cff7542127b6337327da5c->leave($__internal_2aa996bef56e41917983a2676addacbf8c1de9c5f9cff7542127b6337327da5c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2466356dde4b4dbd11dc529415872030686b9b7e34201dda8d088968de6bea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2466356dde4b4dbd11dc529415872030686b9b7e34201dda8d088968de6bea6->enter($__internal_b2466356dde4b4dbd11dc529415872030686b9b7e34201dda8d088968de6bea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2466356dde4b4dbd11dc529415872030686b9b7e34201dda8d088968de6bea6->leave($__internal_b2466356dde4b4dbd11dc529415872030686b9b7e34201dda8d088968de6bea6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6542faf6695e1471e2a287b467fc8f5d2f4868f74f81e80f306c29289a4b6de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6542faf6695e1471e2a287b467fc8f5d2f4868f74f81e80f306c29289a4b6de8->enter($__internal_6542faf6695e1471e2a287b467fc8f5d2f4868f74f81e80f306c29289a4b6de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6542faf6695e1471e2a287b467fc8f5d2f4868f74f81e80f306c29289a4b6de8->leave($__internal_6542faf6695e1471e2a287b467fc8f5d2f4868f74f81e80f306c29289a4b6de8_prof);

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
