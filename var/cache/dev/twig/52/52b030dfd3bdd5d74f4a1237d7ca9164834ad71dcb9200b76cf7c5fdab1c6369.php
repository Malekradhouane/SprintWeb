<?php

/* @Karhabty/Group/show.html.twig */
class __TwigTemplate_70b79c1f9e6d27a1c450d4c673a31e6c30909b539e743ae97db04e862c1018a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Group/show.html.twig", 1);
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
        $__internal_8e13574c6eda25cd8ad8425d059bc981f90a6836f8b1b5b9b8d2be083f353bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e13574c6eda25cd8ad8425d059bc981f90a6836f8b1b5b9b8d2be083f353bf9->enter($__internal_8e13574c6eda25cd8ad8425d059bc981f90a6836f8b1b5b9b8d2be083f353bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e13574c6eda25cd8ad8425d059bc981f90a6836f8b1b5b9b8d2be083f353bf9->leave($__internal_8e13574c6eda25cd8ad8425d059bc981f90a6836f8b1b5b9b8d2be083f353bf9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55ce5e724e8aa0dba0e112aab0ea038d5c742d60e890baceb90f8c7d80b2cf1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ce5e724e8aa0dba0e112aab0ea038d5c742d60e890baceb90f8c7d80b2cf1b->enter($__internal_55ce5e724e8aa0dba0e112aab0ea038d5c742d60e890baceb90f8c7d80b2cf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@Karhabty/Group/show.html.twig", 4)->display($context);
        
        $__internal_55ce5e724e8aa0dba0e112aab0ea038d5c742d60e890baceb90f8c7d80b2cf1b->leave($__internal_55ce5e724e8aa0dba0e112aab0ea038d5c742d60e890baceb90f8c7d80b2cf1b_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@Karhabty/Group/show.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
