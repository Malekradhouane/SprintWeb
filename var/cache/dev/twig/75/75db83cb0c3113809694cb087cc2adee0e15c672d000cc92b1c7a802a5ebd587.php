<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_db0f9bd5905ded94494ad9b3989c03d4404c689686227d20400148311d4e91e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_72eb9257e95e1486056691873d554b86ac60b09fd5d242772a19762499407237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72eb9257e95e1486056691873d554b86ac60b09fd5d242772a19762499407237->enter($__internal_72eb9257e95e1486056691873d554b86ac60b09fd5d242772a19762499407237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72eb9257e95e1486056691873d554b86ac60b09fd5d242772a19762499407237->leave($__internal_72eb9257e95e1486056691873d554b86ac60b09fd5d242772a19762499407237_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_11ddd13e9f66af70d78efdb384d0705e16196ec198a7cfdd085644ccee5b8761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ddd13e9f66af70d78efdb384d0705e16196ec198a7cfdd085644ccee5b8761->enter($__internal_11ddd13e9f66af70d78efdb384d0705e16196ec198a7cfdd085644ccee5b8761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_11ddd13e9f66af70d78efdb384d0705e16196ec198a7cfdd085644ccee5b8761->leave($__internal_11ddd13e9f66af70d78efdb384d0705e16196ec198a7cfdd085644ccee5b8761_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0920ad17059d961f9979f65304e1e4771c769985a1a9a1783c7c2acce51d711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0920ad17059d961f9979f65304e1e4771c769985a1a9a1783c7c2acce51d711->enter($__internal_b0920ad17059d961f9979f65304e1e4771c769985a1a9a1783c7c2acce51d711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b0920ad17059d961f9979f65304e1e4771c769985a1a9a1783c7c2acce51d711->leave($__internal_b0920ad17059d961f9979f65304e1e4771c769985a1a9a1783c7c2acce51d711_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
