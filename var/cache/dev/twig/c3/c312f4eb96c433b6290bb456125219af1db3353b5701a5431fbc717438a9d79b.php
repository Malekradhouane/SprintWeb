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
        $__internal_815076f46367a25fcccf2394f501e59faef560bbb8918a14e2f300d4483e208c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815076f46367a25fcccf2394f501e59faef560bbb8918a14e2f300d4483e208c->enter($__internal_815076f46367a25fcccf2394f501e59faef560bbb8918a14e2f300d4483e208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_815076f46367a25fcccf2394f501e59faef560bbb8918a14e2f300d4483e208c->leave($__internal_815076f46367a25fcccf2394f501e59faef560bbb8918a14e2f300d4483e208c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_762e25d4a764763f950a59eea8777102eaf26dd8e45981cc9c0bb7437a8b3750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762e25d4a764763f950a59eea8777102eaf26dd8e45981cc9c0bb7437a8b3750->enter($__internal_762e25d4a764763f950a59eea8777102eaf26dd8e45981cc9c0bb7437a8b3750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "KarhabtyBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_762e25d4a764763f950a59eea8777102eaf26dd8e45981cc9c0bb7437a8b3750->leave($__internal_762e25d4a764763f950a59eea8777102eaf26dd8e45981cc9c0bb7437a8b3750_prof);

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
", "KarhabtyBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
