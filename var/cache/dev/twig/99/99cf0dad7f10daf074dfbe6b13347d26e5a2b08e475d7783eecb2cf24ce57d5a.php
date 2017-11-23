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
        $__internal_be20b1498871fa42162c61234f51e6161b91b58acfddee5afa6816037ba90c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be20b1498871fa42162c61234f51e6161b91b58acfddee5afa6816037ba90c0a->enter($__internal_be20b1498871fa42162c61234f51e6161b91b58acfddee5afa6816037ba90c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be20b1498871fa42162c61234f51e6161b91b58acfddee5afa6816037ba90c0a->leave($__internal_be20b1498871fa42162c61234f51e6161b91b58acfddee5afa6816037ba90c0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39ae5c7264ebe60e183c89ee1304d31ff327ab400ac513e67e2ddc2e080d3cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ae5c7264ebe60e183c89ee1304d31ff327ab400ac513e67e2ddc2e080d3cf9->enter($__internal_39ae5c7264ebe60e183c89ee1304d31ff327ab400ac513e67e2ddc2e080d3cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "KarhabtyBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_39ae5c7264ebe60e183c89ee1304d31ff327ab400ac513e67e2ddc2e080d3cf9->leave($__internal_39ae5c7264ebe60e183c89ee1304d31ff327ab400ac513e67e2ddc2e080d3cf9_prof);

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
", "KarhabtyBundle:Group:new.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Group/new.html.twig");
    }
}
