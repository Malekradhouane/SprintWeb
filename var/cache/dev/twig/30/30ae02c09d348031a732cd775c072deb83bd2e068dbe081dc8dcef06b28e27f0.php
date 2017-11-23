<?php

/* @Karhabty/Resetting/reset.html.twig */
class __TwigTemplate_1fa5b6320f60378ec7782e416963a8e1b50daa14d7af5789ecc99c28ae06cf17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d83b31f213b1ba15feec3c960e51186e8d4ca02a5ff45165ee9883146788437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d83b31f213b1ba15feec3c960e51186e8d4ca02a5ff45165ee9883146788437->enter($__internal_0d83b31f213b1ba15feec3c960e51186e8d4ca02a5ff45165ee9883146788437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d83b31f213b1ba15feec3c960e51186e8d4ca02a5ff45165ee9883146788437->leave($__internal_0d83b31f213b1ba15feec3c960e51186e8d4ca02a5ff45165ee9883146788437_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2861ede99e3263c90b9092dee8f9ea87b01a1047c4dd3dc7e2ef889ad42ba6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2861ede99e3263c90b9092dee8f9ea87b01a1047c4dd3dc7e2ef889ad42ba6f3->enter($__internal_2861ede99e3263c90b9092dee8f9ea87b01a1047c4dd3dc7e2ef889ad42ba6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@Karhabty/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_2861ede99e3263c90b9092dee8f9ea87b01a1047c4dd3dc7e2ef889ad42ba6f3->leave($__internal_2861ede99e3263c90b9092dee8f9ea87b01a1047c4dd3dc7e2ef889ad42ba6f3_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@Karhabty/Resetting/reset.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
