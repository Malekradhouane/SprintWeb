<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f7871b5ce3a731a82492ddb9dffc670a2a7884cf07ff471bc98acb9334db6230 extends Twig_Template
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
        $__internal_5d5b45f173d2820295d52c2bdc6df19ad4e81aafc9df5719dbb0fd6d1c0276f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5b45f173d2820295d52c2bdc6df19ad4e81aafc9df5719dbb0fd6d1c0276f5->enter($__internal_5d5b45f173d2820295d52c2bdc6df19ad4e81aafc9df5719dbb0fd6d1c0276f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5b45f173d2820295d52c2bdc6df19ad4e81aafc9df5719dbb0fd6d1c0276f5->leave($__internal_5d5b45f173d2820295d52c2bdc6df19ad4e81aafc9df5719dbb0fd6d1c0276f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ff0b2e7ac83b194a260a99f277d832fc5a3587520f6bcf0699252b54226815e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff0b2e7ac83b194a260a99f277d832fc5a3587520f6bcf0699252b54226815e->enter($__internal_4ff0b2e7ac83b194a260a99f277d832fc5a3587520f6bcf0699252b54226815e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4ff0b2e7ac83b194a260a99f277d832fc5a3587520f6bcf0699252b54226815e->leave($__internal_4ff0b2e7ac83b194a260a99f277d832fc5a3587520f6bcf0699252b54226815e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87dc23acca19a21ee82049ee967ce678e15a99960ceb4f0a1fd21c67ebb23846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dc23acca19a21ee82049ee967ce678e15a99960ceb4f0a1fd21c67ebb23846->enter($__internal_87dc23acca19a21ee82049ee967ce678e15a99960ceb4f0a1fd21c67ebb23846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87dc23acca19a21ee82049ee967ce678e15a99960ceb4f0a1fd21c67ebb23846->leave($__internal_87dc23acca19a21ee82049ee967ce678e15a99960ceb4f0a1fd21c67ebb23846_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_660c497893e4232b301d852ea81ebd96bc97d1e1804a9bad08678abb1130c80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660c497893e4232b301d852ea81ebd96bc97d1e1804a9bad08678abb1130c80f->enter($__internal_660c497893e4232b301d852ea81ebd96bc97d1e1804a9bad08678abb1130c80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_660c497893e4232b301d852ea81ebd96bc97d1e1804a9bad08678abb1130c80f->leave($__internal_660c497893e4232b301d852ea81ebd96bc97d1e1804a9bad08678abb1130c80f_prof);

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
