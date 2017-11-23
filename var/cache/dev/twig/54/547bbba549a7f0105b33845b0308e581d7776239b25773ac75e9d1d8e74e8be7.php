<?php

/* @Karhabty/Group/new.html.twig */
class __TwigTemplate_32090113904d77b121397a9448448a236573891d72fff19408a6fe3215735d5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Group/new.html.twig", 1);
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
        $__internal_9fafc58db0ce19e00a50f99377254edbff3c28f34bf5bbb86a07946f6ff78a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fafc58db0ce19e00a50f99377254edbff3c28f34bf5bbb86a07946f6ff78a3f->enter($__internal_9fafc58db0ce19e00a50f99377254edbff3c28f34bf5bbb86a07946f6ff78a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fafc58db0ce19e00a50f99377254edbff3c28f34bf5bbb86a07946f6ff78a3f->leave($__internal_9fafc58db0ce19e00a50f99377254edbff3c28f34bf5bbb86a07946f6ff78a3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15f9c247e2cb3f996bc14690206c29a75b5c96ad8967e27b3a748d7713bc6e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f9c247e2cb3f996bc14690206c29a75b5c96ad8967e27b3a748d7713bc6e9a->enter($__internal_15f9c247e2cb3f996bc14690206c29a75b5c96ad8967e27b3a748d7713bc6e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@Karhabty/Group/new.html.twig", 4)->display($context);
        
        $__internal_15f9c247e2cb3f996bc14690206c29a75b5c96ad8967e27b3a748d7713bc6e9a->leave($__internal_15f9c247e2cb3f996bc14690206c29a75b5c96ad8967e27b3a748d7713bc6e9a_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@Karhabty/Group/new.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
