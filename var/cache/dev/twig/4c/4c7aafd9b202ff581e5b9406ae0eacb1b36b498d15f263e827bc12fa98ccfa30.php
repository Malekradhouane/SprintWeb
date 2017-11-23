<?php

/* @Karhabty/Resetting/reset.html.twig */
class __TwigTemplate_6c92c92d9362536e03eac61b33f4c9f07576a844ebdf24ad41b3076276140ab8 extends Twig_Template
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
        $__internal_d914ec9a1a7c940e9d893742882000626ab17d9615aba6cfdf78788375ddfe34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d914ec9a1a7c940e9d893742882000626ab17d9615aba6cfdf78788375ddfe34->enter($__internal_d914ec9a1a7c940e9d893742882000626ab17d9615aba6cfdf78788375ddfe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d914ec9a1a7c940e9d893742882000626ab17d9615aba6cfdf78788375ddfe34->leave($__internal_d914ec9a1a7c940e9d893742882000626ab17d9615aba6cfdf78788375ddfe34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bdc9b8d28d9919e3f85614d6ebd538eaecc0f69fe916498a0215db2f5066873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdc9b8d28d9919e3f85614d6ebd538eaecc0f69fe916498a0215db2f5066873->enter($__internal_3bdc9b8d28d9919e3f85614d6ebd538eaecc0f69fe916498a0215db2f5066873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@Karhabty/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_3bdc9b8d28d9919e3f85614d6ebd538eaecc0f69fe916498a0215db2f5066873->leave($__internal_3bdc9b8d28d9919e3f85614d6ebd538eaecc0f69fe916498a0215db2f5066873_prof);

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
