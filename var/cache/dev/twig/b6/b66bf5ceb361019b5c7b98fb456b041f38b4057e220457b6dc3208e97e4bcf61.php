<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5a0e6c3fc8dbcb4ee4b755f38437369dded2e416d15a3d4ee353f40419fda8aa extends Twig_Template
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
        $__internal_1c52a43ba6db97a656cb6b75a59fdff8e9bd1ffbb7b9a3c3dfa722dee688a122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c52a43ba6db97a656cb6b75a59fdff8e9bd1ffbb7b9a3c3dfa722dee688a122->enter($__internal_1c52a43ba6db97a656cb6b75a59fdff8e9bd1ffbb7b9a3c3dfa722dee688a122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c52a43ba6db97a656cb6b75a59fdff8e9bd1ffbb7b9a3c3dfa722dee688a122->leave($__internal_1c52a43ba6db97a656cb6b75a59fdff8e9bd1ffbb7b9a3c3dfa722dee688a122_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c0e392be92e7c0a1c14be1dfb92217ccdd233eac1af1c76fa1a991b9e1770e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0e392be92e7c0a1c14be1dfb92217ccdd233eac1af1c76fa1a991b9e1770e2->enter($__internal_7c0e392be92e7c0a1c14be1dfb92217ccdd233eac1af1c76fa1a991b9e1770e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7c0e392be92e7c0a1c14be1dfb92217ccdd233eac1af1c76fa1a991b9e1770e2->leave($__internal_7c0e392be92e7c0a1c14be1dfb92217ccdd233eac1af1c76fa1a991b9e1770e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcd3c1e50071f0dcb5f3685b61e8f204c3fa59bbf5e7b3bb01a710deb07e637a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd3c1e50071f0dcb5f3685b61e8f204c3fa59bbf5e7b3bb01a710deb07e637a->enter($__internal_fcd3c1e50071f0dcb5f3685b61e8f204c3fa59bbf5e7b3bb01a710deb07e637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fcd3c1e50071f0dcb5f3685b61e8f204c3fa59bbf5e7b3bb01a710deb07e637a->leave($__internal_fcd3c1e50071f0dcb5f3685b61e8f204c3fa59bbf5e7b3bb01a710deb07e637a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_306ef97fa59ab483167c3816170695154e061cbddcc4dfd270af0aaf4a12839d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306ef97fa59ab483167c3816170695154e061cbddcc4dfd270af0aaf4a12839d->enter($__internal_306ef97fa59ab483167c3816170695154e061cbddcc4dfd270af0aaf4a12839d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_306ef97fa59ab483167c3816170695154e061cbddcc4dfd270af0aaf4a12839d->leave($__internal_306ef97fa59ab483167c3816170695154e061cbddcc4dfd270af0aaf4a12839d_prof);

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
