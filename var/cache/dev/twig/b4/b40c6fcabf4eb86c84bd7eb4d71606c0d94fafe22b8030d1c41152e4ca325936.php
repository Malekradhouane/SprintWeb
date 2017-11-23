<?php

/* KarhabtyBundle:Group:list.html.twig */
class __TwigTemplate_6be890ff514c32f1d14c0f58de4b4ba06b157771ae612df2b74efe4f915f29b1 extends Twig_Template
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
        $__internal_457bcb2f9e3f2645492f5441e4e14110af0b4453143d72391267bfa38e40bc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457bcb2f9e3f2645492f5441e4e14110af0b4453143d72391267bfa38e40bc95->enter($__internal_457bcb2f9e3f2645492f5441e4e14110af0b4453143d72391267bfa38e40bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_457bcb2f9e3f2645492f5441e4e14110af0b4453143d72391267bfa38e40bc95->leave($__internal_457bcb2f9e3f2645492f5441e4e14110af0b4453143d72391267bfa38e40bc95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a587d1625d141a3a5be2832afa376c7b1c471bf140d878b1078996a3dd7f598a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a587d1625d141a3a5be2832afa376c7b1c471bf140d878b1078996a3dd7f598a->enter($__internal_a587d1625d141a3a5be2832afa376c7b1c471bf140d878b1078996a3dd7f598a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "KarhabtyBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a587d1625d141a3a5be2832afa376c7b1c471bf140d878b1078996a3dd7f598a->leave($__internal_a587d1625d141a3a5be2832afa376c7b1c471bf140d878b1078996a3dd7f598a_prof);

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
