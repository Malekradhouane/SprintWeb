<?php

/* @Karhabty/Group/list.html.twig */
class __TwigTemplate_190bc9f66f58b3ea4e418b4493e3bbb61bf6f57bd812a860ed0225ae1b8b16d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Group/list.html.twig", 1);
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
        $__internal_79d3985f63f6945e2281f5c20de8bab16539c0a8b1c125db78260a94c9ece409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d3985f63f6945e2281f5c20de8bab16539c0a8b1c125db78260a94c9ece409->enter($__internal_79d3985f63f6945e2281f5c20de8bab16539c0a8b1c125db78260a94c9ece409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d3985f63f6945e2281f5c20de8bab16539c0a8b1c125db78260a94c9ece409->leave($__internal_79d3985f63f6945e2281f5c20de8bab16539c0a8b1c125db78260a94c9ece409_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b50e92cf8e5d6c6d364b65653544d53218e51950420fe1a6389736c58ba1a7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50e92cf8e5d6c6d364b65653544d53218e51950420fe1a6389736c58ba1a7d0->enter($__internal_b50e92cf8e5d6c6d364b65653544d53218e51950420fe1a6389736c58ba1a7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@Karhabty/Group/list.html.twig", 4)->display($context);
        
        $__internal_b50e92cf8e5d6c6d364b65653544d53218e51950420fe1a6389736c58ba1a7d0->leave($__internal_b50e92cf8e5d6c6d364b65653544d53218e51950420fe1a6389736c58ba1a7d0_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Group/list.html.twig";
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
", "@Karhabty/Group/list.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
