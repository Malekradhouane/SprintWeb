<?php

/* KarhabtyBundle:Group:list.html.twig */
class __TwigTemplate_f075b70e7da75c3ed5bab330fce549d288e2f1cd1216dec0a53e6b5c3959ba2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Group:list.html.twig", 1);
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
        $__internal_c10cc752575d0eb5a3d911e46a1be41da4db3a5ba837837522b8ddd2c5c529d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10cc752575d0eb5a3d911e46a1be41da4db3a5ba837837522b8ddd2c5c529d8->enter($__internal_c10cc752575d0eb5a3d911e46a1be41da4db3a5ba837837522b8ddd2c5c529d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10cc752575d0eb5a3d911e46a1be41da4db3a5ba837837522b8ddd2c5c529d8->leave($__internal_c10cc752575d0eb5a3d911e46a1be41da4db3a5ba837837522b8ddd2c5c529d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_799d6535f4d9b0ec34d86daac8148c77d958d6565cc89cea633cdf20a9449d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799d6535f4d9b0ec34d86daac8148c77d958d6565cc89cea633cdf20a9449d5a->enter($__internal_799d6535f4d9b0ec34d86daac8148c77d958d6565cc89cea633cdf20a9449d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "KarhabtyBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_799d6535f4d9b0ec34d86daac8148c77d958d6565cc89cea633cdf20a9449d5a->leave($__internal_799d6535f4d9b0ec34d86daac8148c77d958d6565cc89cea633cdf20a9449d5a_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Group:list.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Group/list.html.twig");
    }
}
