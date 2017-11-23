<?php

/* @Karhabty/Profile/show.html.twig */
class __TwigTemplate_339ca27124b42ea6055050e08bafb369ff82b81755a2665f9354f654703d0980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Profile/show.html.twig", 1);
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
        $__internal_d2f5f2107c2b8d91824079382843405a67c7b2059f0f0178c091f1c0f1bd1051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f5f2107c2b8d91824079382843405a67c7b2059f0f0178c091f1c0f1bd1051->enter($__internal_d2f5f2107c2b8d91824079382843405a67c7b2059f0f0178c091f1c0f1bd1051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f5f2107c2b8d91824079382843405a67c7b2059f0f0178c091f1c0f1bd1051->leave($__internal_d2f5f2107c2b8d91824079382843405a67c7b2059f0f0178c091f1c0f1bd1051_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_167f14f44a74462da512a87f20c58f281f218a4d6bb44ffdc85a8191fbad7dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167f14f44a74462da512a87f20c58f281f218a4d6bb44ffdc85a8191fbad7dd9->enter($__internal_167f14f44a74462da512a87f20c58f281f218a4d6bb44ffdc85a8191fbad7dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@Karhabty/Profile/show.html.twig", 4)->display($context);
        
        $__internal_167f14f44a74462da512a87f20c58f281f218a4d6bb44ffdc85a8191fbad7dd9->leave($__internal_167f14f44a74462da512a87f20c58f281f218a4d6bb44ffdc85a8191fbad7dd9_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@Karhabty/Profile/show.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
