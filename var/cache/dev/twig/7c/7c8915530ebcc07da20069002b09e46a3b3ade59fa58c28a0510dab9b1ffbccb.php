<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4215432299a72a9ea8f1dd0f44f9351841075cf961bd4ef63bd5e503b0b30a6e extends Twig_Template
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
        $__internal_6495f02116c7f3699a8f81f25e39f17f3bd568f41800080dae57a102e5c7dd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6495f02116c7f3699a8f81f25e39f17f3bd568f41800080dae57a102e5c7dd5a->enter($__internal_6495f02116c7f3699a8f81f25e39f17f3bd568f41800080dae57a102e5c7dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6495f02116c7f3699a8f81f25e39f17f3bd568f41800080dae57a102e5c7dd5a->leave($__internal_6495f02116c7f3699a8f81f25e39f17f3bd568f41800080dae57a102e5c7dd5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09cd252ef7ba3d5e6b107c37da50d2ebabe8ff7901b7987ad80fb4a1acc3c3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09cd252ef7ba3d5e6b107c37da50d2ebabe8ff7901b7987ad80fb4a1acc3c3bb->enter($__internal_09cd252ef7ba3d5e6b107c37da50d2ebabe8ff7901b7987ad80fb4a1acc3c3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09cd252ef7ba3d5e6b107c37da50d2ebabe8ff7901b7987ad80fb4a1acc3c3bb->leave($__internal_09cd252ef7ba3d5e6b107c37da50d2ebabe8ff7901b7987ad80fb4a1acc3c3bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b6d27123acf6593a82b4945c73fa45aa44903c0be0dbfbf28a11e0387c95376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6d27123acf6593a82b4945c73fa45aa44903c0be0dbfbf28a11e0387c95376->enter($__internal_1b6d27123acf6593a82b4945c73fa45aa44903c0be0dbfbf28a11e0387c95376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b6d27123acf6593a82b4945c73fa45aa44903c0be0dbfbf28a11e0387c95376->leave($__internal_1b6d27123acf6593a82b4945c73fa45aa44903c0be0dbfbf28a11e0387c95376_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7f1e738598eeb4b7d6866f6355c3f04e89ac25478500114aba8ee6088e32706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f1e738598eeb4b7d6866f6355c3f04e89ac25478500114aba8ee6088e32706->enter($__internal_c7f1e738598eeb4b7d6866f6355c3f04e89ac25478500114aba8ee6088e32706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c7f1e738598eeb4b7d6866f6355c3f04e89ac25478500114aba8ee6088e32706->leave($__internal_c7f1e738598eeb4b7d6866f6355c3f04e89ac25478500114aba8ee6088e32706_prof);

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
