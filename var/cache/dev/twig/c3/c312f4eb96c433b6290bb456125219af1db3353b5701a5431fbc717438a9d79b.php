<?php

/* KarhabtyBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_f80476966ae10aa457d6bb9fd36c858742f90e9e09c485588eaf265fbfb8a16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_d9379996a8c717a50e4dafe75fa3984ec809b6363f931ef5ae660cd0e4fbd87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9379996a8c717a50e4dafe75fa3984ec809b6363f931ef5ae660cd0e4fbd87e->enter($__internal_d9379996a8c717a50e4dafe75fa3984ec809b6363f931ef5ae660cd0e4fbd87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9379996a8c717a50e4dafe75fa3984ec809b6363f931ef5ae660cd0e4fbd87e->leave($__internal_d9379996a8c717a50e4dafe75fa3984ec809b6363f931ef5ae660cd0e4fbd87e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e5b2e22e0dd08563705c8f324a88f97f46aed9591bc498ebcc313992c21a5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5b2e22e0dd08563705c8f324a88f97f46aed9591bc498ebcc313992c21a5eb->enter($__internal_8e5b2e22e0dd08563705c8f324a88f97f46aed9591bc498ebcc313992c21a5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "KarhabtyBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8e5b2e22e0dd08563705c8f324a88f97f46aed9591bc498ebcc313992c21a5eb->leave($__internal_8e5b2e22e0dd08563705c8f324a88f97f46aed9591bc498ebcc313992c21a5eb_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
