<?php

/* KarhabtyBundle:Group:new.html.twig */
class __TwigTemplate_1ef9cc3e0ba579ab11480ed18bb7042cb35909e1e5d61ac508538426d50646d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Group:new.html.twig", 1);
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
        $__internal_e336be6c8429273e5eb8f117ada6715c8c9236b390fa758d299a4ae665376a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e336be6c8429273e5eb8f117ada6715c8c9236b390fa758d299a4ae665376a19->enter($__internal_e336be6c8429273e5eb8f117ada6715c8c9236b390fa758d299a4ae665376a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e336be6c8429273e5eb8f117ada6715c8c9236b390fa758d299a4ae665376a19->leave($__internal_e336be6c8429273e5eb8f117ada6715c8c9236b390fa758d299a4ae665376a19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3be6b6b33dc2ac5c182819bfaf459047c0191abe0e34077d7a4ccf0c3b2df96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3be6b6b33dc2ac5c182819bfaf459047c0191abe0e34077d7a4ccf0c3b2df96->enter($__internal_b3be6b6b33dc2ac5c182819bfaf459047c0191abe0e34077d7a4ccf0c3b2df96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "KarhabtyBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b3be6b6b33dc2ac5c182819bfaf459047c0191abe0e34077d7a4ccf0c3b2df96->leave($__internal_b3be6b6b33dc2ac5c182819bfaf459047c0191abe0e34077d7a4ccf0c3b2df96_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Group:new.html.twig";
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
", "KarhabtyBundle:Group:new.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Group/new.html.twig");
    }
}
