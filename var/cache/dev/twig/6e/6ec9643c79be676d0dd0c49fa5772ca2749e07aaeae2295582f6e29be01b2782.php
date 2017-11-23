<?php

/* KarhabtyBundle:Security:login.html.twig */
class __TwigTemplate_86b08d6526917c545aef8ce86b40ed5bf243c3fb0a26d1540c435a25a7984ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_712c91e9f0a88ff7302336d40b6c9c43387fe404dc943e6bbae4bf09540d0088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712c91e9f0a88ff7302336d40b6c9c43387fe404dc943e6bbae4bf09540d0088->enter($__internal_712c91e9f0a88ff7302336d40b6c9c43387fe404dc943e6bbae4bf09540d0088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Security:login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_712c91e9f0a88ff7302336d40b6c9c43387fe404dc943e6bbae4bf09540d0088->leave($__internal_712c91e9f0a88ff7302336d40b6c9c43387fe404dc943e6bbae4bf09540d0088_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d6e5793e2418d78c6d685d0243fb690ee925a4b58665890e0e4582af98c1726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6e5793e2418d78c6d685d0243fb690ee925a4b58665890e0e4582af98c1726->enter($__internal_7d6e5793e2418d78c6d685d0243fb690ee925a4b58665890e0e4582af98c1726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7d6e5793e2418d78c6d685d0243fb690ee925a4b58665890e0e4582af98c1726->leave($__internal_7d6e5793e2418d78c6d685d0243fb690ee925a4b58665890e0e4582af98c1726_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "KarhabtyBundle:Security:login.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Security/login.html.twig");
    }
}
