<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_12499570b0a7b186751d7378ceffae85b4c32c0c0b5c636e6c8a6fa5f334b22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c2edbe5eb8fe90197ab37ae7cc14da38f9f509f0bc9611524e20e3762d6dfa5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2edbe5eb8fe90197ab37ae7cc14da38f9f509f0bc9611524e20e3762d6dfa5f->enter($__internal_c2edbe5eb8fe90197ab37ae7cc14da38f9f509f0bc9611524e20e3762d6dfa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2edbe5eb8fe90197ab37ae7cc14da38f9f509f0bc9611524e20e3762d6dfa5f->leave($__internal_c2edbe5eb8fe90197ab37ae7cc14da38f9f509f0bc9611524e20e3762d6dfa5f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1183b821e5a673f860c9dc58d6d86fea7f3e55818fe3fd392696a229435f43a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1183b821e5a673f860c9dc58d6d86fea7f3e55818fe3fd392696a229435f43a1->enter($__internal_1183b821e5a673f860c9dc58d6d86fea7f3e55818fe3fd392696a229435f43a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1183b821e5a673f860c9dc58d6d86fea7f3e55818fe3fd392696a229435f43a1->leave($__internal_1183b821e5a673f860c9dc58d6d86fea7f3e55818fe3fd392696a229435f43a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0f32ba5384049f661f3cbf0864b17228a5da2b8dc94754786567a8c9e1c49de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f32ba5384049f661f3cbf0864b17228a5da2b8dc94754786567a8c9e1c49de->enter($__internal_c0f32ba5384049f661f3cbf0864b17228a5da2b8dc94754786567a8c9e1c49de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c0f32ba5384049f661f3cbf0864b17228a5da2b8dc94754786567a8c9e1c49de->leave($__internal_c0f32ba5384049f661f3cbf0864b17228a5da2b8dc94754786567a8c9e1c49de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
