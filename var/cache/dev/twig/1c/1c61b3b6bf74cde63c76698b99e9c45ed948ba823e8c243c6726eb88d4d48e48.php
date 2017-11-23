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
        $__internal_e84404454dfc085a8cd93b44de7f750a9c3fe8bd13fd4061d42f79850d94cca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84404454dfc085a8cd93b44de7f750a9c3fe8bd13fd4061d42f79850d94cca9->enter($__internal_e84404454dfc085a8cd93b44de7f750a9c3fe8bd13fd4061d42f79850d94cca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84404454dfc085a8cd93b44de7f750a9c3fe8bd13fd4061d42f79850d94cca9->leave($__internal_e84404454dfc085a8cd93b44de7f750a9c3fe8bd13fd4061d42f79850d94cca9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc7ae0d8fd39beb01e048bca5c8dae622bc34b2f4bd01b57eb96cbea9bf105c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7ae0d8fd39beb01e048bca5c8dae622bc34b2f4bd01b57eb96cbea9bf105c3->enter($__internal_cc7ae0d8fd39beb01e048bca5c8dae622bc34b2f4bd01b57eb96cbea9bf105c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_cc7ae0d8fd39beb01e048bca5c8dae622bc34b2f4bd01b57eb96cbea9bf105c3->leave($__internal_cc7ae0d8fd39beb01e048bca5c8dae622bc34b2f4bd01b57eb96cbea9bf105c3_prof);

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
", "KarhabtyBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
