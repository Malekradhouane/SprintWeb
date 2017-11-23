<?php

/* KarhabtyBundle:Resetting:request.html.twig */
class __TwigTemplate_05f2ccff9cb3f8dae88e6cdd10773908dddc25115d8c660d7cab6a0b5f8fdfca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Resetting:request.html.twig", 1);
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
        $__internal_5c93bd40eab6e8654fc304fd7b27c2416699c8762a2f8d51ac81577ba812e869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c93bd40eab6e8654fc304fd7b27c2416699c8762a2f8d51ac81577ba812e869->enter($__internal_5c93bd40eab6e8654fc304fd7b27c2416699c8762a2f8d51ac81577ba812e869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c93bd40eab6e8654fc304fd7b27c2416699c8762a2f8d51ac81577ba812e869->leave($__internal_5c93bd40eab6e8654fc304fd7b27c2416699c8762a2f8d51ac81577ba812e869_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f50f3cf3b82e0feeab45bc4bc3b52cc6726c16507540ee78e9b434d684371630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50f3cf3b82e0feeab45bc4bc3b52cc6726c16507540ee78e9b434d684371630->enter($__internal_f50f3cf3b82e0feeab45bc4bc3b52cc6726c16507540ee78e9b434d684371630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "KarhabtyBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f50f3cf3b82e0feeab45bc4bc3b52cc6726c16507540ee78e9b434d684371630->leave($__internal_f50f3cf3b82e0feeab45bc4bc3b52cc6726c16507540ee78e9b434d684371630_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Resetting/request.html.twig");
    }
}
