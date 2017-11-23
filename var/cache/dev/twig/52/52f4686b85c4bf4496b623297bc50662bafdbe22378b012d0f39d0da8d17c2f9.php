<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_38d7a6cce3f76c8b1fca31d5295424f59caa879f93586d239aaf0135ba2c6394 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_097209f80a6a403e14e69690f7705a1536ef0cb119a5a0df127f1843836bb527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097209f80a6a403e14e69690f7705a1536ef0cb119a5a0df127f1843836bb527->enter($__internal_097209f80a6a403e14e69690f7705a1536ef0cb119a5a0df127f1843836bb527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_097209f80a6a403e14e69690f7705a1536ef0cb119a5a0df127f1843836bb527->leave($__internal_097209f80a6a403e14e69690f7705a1536ef0cb119a5a0df127f1843836bb527_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da62a181903045a895370ace43cca654df7a8958c7b102af4089c11293ccd21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da62a181903045a895370ace43cca654df7a8958c7b102af4089c11293ccd21e->enter($__internal_da62a181903045a895370ace43cca654df7a8958c7b102af4089c11293ccd21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da62a181903045a895370ace43cca654df7a8958c7b102af4089c11293ccd21e->leave($__internal_da62a181903045a895370ace43cca654df7a8958c7b102af4089c11293ccd21e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3bc685f04d65640a10d0a505c11e54565e5b88a3bd15fad8c6973a33bde5bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bc685f04d65640a10d0a505c11e54565e5b88a3bd15fad8c6973a33bde5bde->enter($__internal_d3bc685f04d65640a10d0a505c11e54565e5b88a3bd15fad8c6973a33bde5bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d3bc685f04d65640a10d0a505c11e54565e5b88a3bd15fad8c6973a33bde5bde->leave($__internal_d3bc685f04d65640a10d0a505c11e54565e5b88a3bd15fad8c6973a33bde5bde_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fec93dca6d1ce99e756f6e999213f2422f8f7ec1de7ca602af44be421869841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fec93dca6d1ce99e756f6e999213f2422f8f7ec1de7ca602af44be421869841->enter($__internal_0fec93dca6d1ce99e756f6e999213f2422f8f7ec1de7ca602af44be421869841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0fec93dca6d1ce99e756f6e999213f2422f8f7ec1de7ca602af44be421869841->leave($__internal_0fec93dca6d1ce99e756f6e999213f2422f8f7ec1de7ca602af44be421869841_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
