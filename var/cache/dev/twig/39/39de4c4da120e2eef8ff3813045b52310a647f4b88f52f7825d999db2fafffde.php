<?php

/* @Karhabty/Profile/show.html.twig */
class __TwigTemplate_4f10f3e311ae779902ae6fca0df7545f052107a136597b0303a5bb6e3ffc7be9 extends Twig_Template
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
        $__internal_a13d214ea05af75518e91896af872823dd067873fbfd0ceca6eb388add27045b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13d214ea05af75518e91896af872823dd067873fbfd0ceca6eb388add27045b->enter($__internal_a13d214ea05af75518e91896af872823dd067873fbfd0ceca6eb388add27045b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a13d214ea05af75518e91896af872823dd067873fbfd0ceca6eb388add27045b->leave($__internal_a13d214ea05af75518e91896af872823dd067873fbfd0ceca6eb388add27045b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac227ef5c562c45be46b72f86d609317d8243e0e061e6804198a73980ec8d947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac227ef5c562c45be46b72f86d609317d8243e0e061e6804198a73980ec8d947->enter($__internal_ac227ef5c562c45be46b72f86d609317d8243e0e061e6804198a73980ec8d947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@Karhabty/Profile/show.html.twig", 4)->display($context);
        
        $__internal_ac227ef5c562c45be46b72f86d609317d8243e0e061e6804198a73980ec8d947->leave($__internal_ac227ef5c562c45be46b72f86d609317d8243e0e061e6804198a73980ec8d947_prof);

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
