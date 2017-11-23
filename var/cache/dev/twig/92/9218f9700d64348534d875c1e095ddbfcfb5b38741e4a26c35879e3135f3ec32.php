<?php

/* KarhabtyBundle:Resetting:reset.html.twig */
class __TwigTemplate_c623a46aea654a316d9edb80518218a7649cb9dc14c2bd44d4a6a289e3b4859e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e0816579b68ba792df30fa8d44248bbf26270e75ad3324310172b6dcdc7942bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0816579b68ba792df30fa8d44248bbf26270e75ad3324310172b6dcdc7942bc->enter($__internal_e0816579b68ba792df30fa8d44248bbf26270e75ad3324310172b6dcdc7942bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0816579b68ba792df30fa8d44248bbf26270e75ad3324310172b6dcdc7942bc->leave($__internal_e0816579b68ba792df30fa8d44248bbf26270e75ad3324310172b6dcdc7942bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77f124c6b57015637794c632cdeb65fd8d3883fe9d9fc1970ed61dd491807147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f124c6b57015637794c632cdeb65fd8d3883fe9d9fc1970ed61dd491807147->enter($__internal_77f124c6b57015637794c632cdeb65fd8d3883fe9d9fc1970ed61dd491807147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "KarhabtyBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_77f124c6b57015637794c632cdeb65fd8d3883fe9d9fc1970ed61dd491807147->leave($__internal_77f124c6b57015637794c632cdeb65fd8d3883fe9d9fc1970ed61dd491807147_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Resetting/reset.html.twig");
    }
}
