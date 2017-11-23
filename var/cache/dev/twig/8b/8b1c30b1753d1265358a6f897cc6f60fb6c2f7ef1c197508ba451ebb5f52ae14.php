<?php

/* KarhabtyBundle:Group:show.html.twig */
class __TwigTemplate_40c82ced673b0164f3a4ed9f8a291cf7523ff8756fd7a661a1b500f3915ed1cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Group:show.html.twig", 1);
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
        $__internal_d8d6a64caa601b55c6c805e06be2bf9d701457bc11121562cf22cd21680da0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d6a64caa601b55c6c805e06be2bf9d701457bc11121562cf22cd21680da0e7->enter($__internal_d8d6a64caa601b55c6c805e06be2bf9d701457bc11121562cf22cd21680da0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8d6a64caa601b55c6c805e06be2bf9d701457bc11121562cf22cd21680da0e7->leave($__internal_d8d6a64caa601b55c6c805e06be2bf9d701457bc11121562cf22cd21680da0e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4fb83f09ad3166da3e6cf46f81b115cbddf60ca55dbfd219e3f3240fd922ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fb83f09ad3166da3e6cf46f81b115cbddf60ca55dbfd219e3f3240fd922ba4->enter($__internal_b4fb83f09ad3166da3e6cf46f81b115cbddf60ca55dbfd219e3f3240fd922ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "KarhabtyBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b4fb83f09ad3166da3e6cf46f81b115cbddf60ca55dbfd219e3f3240fd922ba4->leave($__internal_b4fb83f09ad3166da3e6cf46f81b115cbddf60ca55dbfd219e3f3240fd922ba4_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Group:show.html.twig";
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
", "KarhabtyBundle:Group:show.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Group/show.html.twig");
    }
}
