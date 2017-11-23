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
        $__internal_57f1f19f6797812e8af7e409170045c233667d67a95919c9d98c263153522797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f1f19f6797812e8af7e409170045c233667d67a95919c9d98c263153522797->enter($__internal_57f1f19f6797812e8af7e409170045c233667d67a95919c9d98c263153522797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f1f19f6797812e8af7e409170045c233667d67a95919c9d98c263153522797->leave($__internal_57f1f19f6797812e8af7e409170045c233667d67a95919c9d98c263153522797_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d500225ac97703aeb3d1c02d09ee593b6ba5b7d1d0102bb9407a9c2163c23ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d500225ac97703aeb3d1c02d09ee593b6ba5b7d1d0102bb9407a9c2163c23ed->enter($__internal_9d500225ac97703aeb3d1c02d09ee593b6ba5b7d1d0102bb9407a9c2163c23ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d500225ac97703aeb3d1c02d09ee593b6ba5b7d1d0102bb9407a9c2163c23ed->leave($__internal_9d500225ac97703aeb3d1c02d09ee593b6ba5b7d1d0102bb9407a9c2163c23ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb4f46becd6fab146edfae73b0d8c80f3e022a6b76acb02db1dd0b085cbc7f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4f46becd6fab146edfae73b0d8c80f3e022a6b76acb02db1dd0b085cbc7f65->enter($__internal_eb4f46becd6fab146edfae73b0d8c80f3e022a6b76acb02db1dd0b085cbc7f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb4f46becd6fab146edfae73b0d8c80f3e022a6b76acb02db1dd0b085cbc7f65->leave($__internal_eb4f46becd6fab146edfae73b0d8c80f3e022a6b76acb02db1dd0b085cbc7f65_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
