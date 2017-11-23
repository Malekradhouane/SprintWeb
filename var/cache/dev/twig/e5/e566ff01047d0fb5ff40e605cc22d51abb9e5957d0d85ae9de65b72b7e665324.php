<?php

/* KarhabtyBundle:Group:show.html.twig */
class __TwigTemplate_d4d1f047787a84c044e004ba966a88af2fad404a84c03057246530d95936d6c8 extends Twig_Template
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
        $__internal_e224cf5335e83711644c0c9b032ab42ce95df395766a5e63b176c2b95a781813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e224cf5335e83711644c0c9b032ab42ce95df395766a5e63b176c2b95a781813->enter($__internal_e224cf5335e83711644c0c9b032ab42ce95df395766a5e63b176c2b95a781813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e224cf5335e83711644c0c9b032ab42ce95df395766a5e63b176c2b95a781813->leave($__internal_e224cf5335e83711644c0c9b032ab42ce95df395766a5e63b176c2b95a781813_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_739696dab9e0c3ae800d4843e1f5eba60a83da2dcca5226589efaf0c05548d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739696dab9e0c3ae800d4843e1f5eba60a83da2dcca5226589efaf0c05548d5f->enter($__internal_739696dab9e0c3ae800d4843e1f5eba60a83da2dcca5226589efaf0c05548d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "KarhabtyBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_739696dab9e0c3ae800d4843e1f5eba60a83da2dcca5226589efaf0c05548d5f->leave($__internal_739696dab9e0c3ae800d4843e1f5eba60a83da2dcca5226589efaf0c05548d5f_prof);

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
