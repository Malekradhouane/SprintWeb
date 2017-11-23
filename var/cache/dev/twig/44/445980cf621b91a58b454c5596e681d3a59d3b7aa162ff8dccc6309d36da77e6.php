<?php

/* @Karhabty/Resetting/check_email.html.twig */
class __TwigTemplate_d4725e53d0bf1ecf6110fe0e1f02824cedb1402e8768aa4fed9b4b486e54970c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Resetting/check_email.html.twig", 1);
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
        $__internal_b9c567bbd40cad4d29e108b7431a11406561f3be88c5009ab949a81799a27aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c567bbd40cad4d29e108b7431a11406561f3be88c5009ab949a81799a27aba->enter($__internal_b9c567bbd40cad4d29e108b7431a11406561f3be88c5009ab949a81799a27aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9c567bbd40cad4d29e108b7431a11406561f3be88c5009ab949a81799a27aba->leave($__internal_b9c567bbd40cad4d29e108b7431a11406561f3be88c5009ab949a81799a27aba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d42295d84f052e2fbf72be932cc7a0a91e29f400e6235550ec8240fdf8168b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42295d84f052e2fbf72be932cc7a0a91e29f400e6235550ec8240fdf8168b19->enter($__internal_d42295d84f052e2fbf72be932cc7a0a91e29f400e6235550ec8240fdf8168b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d42295d84f052e2fbf72be932cc7a0a91e29f400e6235550ec8240fdf8168b19->leave($__internal_d42295d84f052e2fbf72be932cc7a0a91e29f400e6235550ec8240fdf8168b19_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Resetting/check_email.html.twig";
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
", "@Karhabty/Resetting/check_email.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
