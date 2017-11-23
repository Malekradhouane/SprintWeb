<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bc105328fdc4c286526ab31e160c75cf25ece219c281bda6f61e0c4cc451e5ab extends Twig_Template
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
        $__internal_70722b40d27ba2767f06336f174f50f7be3b492e93f7239515a57f1479ef6d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70722b40d27ba2767f06336f174f50f7be3b492e93f7239515a57f1479ef6d21->enter($__internal_70722b40d27ba2767f06336f174f50f7be3b492e93f7239515a57f1479ef6d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70722b40d27ba2767f06336f174f50f7be3b492e93f7239515a57f1479ef6d21->leave($__internal_70722b40d27ba2767f06336f174f50f7be3b492e93f7239515a57f1479ef6d21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a599f78d82b76ad21adfbf29d51a56b09fe3b4136bec2d105db8e9ee73bbe8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a599f78d82b76ad21adfbf29d51a56b09fe3b4136bec2d105db8e9ee73bbe8ee->enter($__internal_a599f78d82b76ad21adfbf29d51a56b09fe3b4136bec2d105db8e9ee73bbe8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a599f78d82b76ad21adfbf29d51a56b09fe3b4136bec2d105db8e9ee73bbe8ee->leave($__internal_a599f78d82b76ad21adfbf29d51a56b09fe3b4136bec2d105db8e9ee73bbe8ee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b229d0d7b669215b171e9bf9b92981deea86563b3741d8e326d12ac2b66e958e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b229d0d7b669215b171e9bf9b92981deea86563b3741d8e326d12ac2b66e958e->enter($__internal_b229d0d7b669215b171e9bf9b92981deea86563b3741d8e326d12ac2b66e958e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b229d0d7b669215b171e9bf9b92981deea86563b3741d8e326d12ac2b66e958e->leave($__internal_b229d0d7b669215b171e9bf9b92981deea86563b3741d8e326d12ac2b66e958e_prof);

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
