<?php

/* KarhabtyBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9173ab328de41ad41420e8fc789f3f86bfe83865ebc34edeec75b1a07cdd07c1 extends Twig_Template
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
        $__internal_bb7a5f49b3a046c9286998113bc808598bd87860b5376774c42e894da6c14f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7a5f49b3a046c9286998113bc808598bd87860b5376774c42e894da6c14f0c->enter($__internal_bb7a5f49b3a046c9286998113bc808598bd87860b5376774c42e894da6c14f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7a5f49b3a046c9286998113bc808598bd87860b5376774c42e894da6c14f0c->leave($__internal_bb7a5f49b3a046c9286998113bc808598bd87860b5376774c42e894da6c14f0c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd204087319c6ddb53e03adc2eedf1d240076115aaaf8c6ebb24e3b114ee3878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd204087319c6ddb53e03adc2eedf1d240076115aaaf8c6ebb24e3b114ee3878->enter($__internal_dd204087319c6ddb53e03adc2eedf1d240076115aaaf8c6ebb24e3b114ee3878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_dd204087319c6ddb53e03adc2eedf1d240076115aaaf8c6ebb24e3b114ee3878->leave($__internal_dd204087319c6ddb53e03adc2eedf1d240076115aaaf8c6ebb24e3b114ee3878_prof);

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
