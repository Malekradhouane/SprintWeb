<?php

/* KarhabtyBundle:Resetting:check_email.html.twig */
class __TwigTemplate_2a33e0e05a5ea82f0ba5e9fa2848a315a8bdfed98ef214871b74173c99647bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_67fe48561198eaa9a5af01e6fb26ccf6f9497a4867ddd22f4102067eeb238af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fe48561198eaa9a5af01e6fb26ccf6f9497a4867ddd22f4102067eeb238af2->enter($__internal_67fe48561198eaa9a5af01e6fb26ccf6f9497a4867ddd22f4102067eeb238af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fe48561198eaa9a5af01e6fb26ccf6f9497a4867ddd22f4102067eeb238af2->leave($__internal_67fe48561198eaa9a5af01e6fb26ccf6f9497a4867ddd22f4102067eeb238af2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a654c609bce8edef55a382e718660e69da20ae78a75f81fd289c19b05758474e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a654c609bce8edef55a382e718660e69da20ae78a75f81fd289c19b05758474e->enter($__internal_a654c609bce8edef55a382e718660e69da20ae78a75f81fd289c19b05758474e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_a654c609bce8edef55a382e718660e69da20ae78a75f81fd289c19b05758474e->leave($__internal_a654c609bce8edef55a382e718660e69da20ae78a75f81fd289c19b05758474e_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "KarhabtyBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
