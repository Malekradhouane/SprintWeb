<?php

/* @Karhabty/Resetting/check_email.html.twig */
class __TwigTemplate_b401d1c2c97b47f9a9d8eb349a37b22f4535641059bcd470775c29f543f81063 extends Twig_Template
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
        $__internal_247282d1817c8e0a1717d8cae904e03630b6f584e585107701dabea84cc952c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247282d1817c8e0a1717d8cae904e03630b6f584e585107701dabea84cc952c1->enter($__internal_247282d1817c8e0a1717d8cae904e03630b6f584e585107701dabea84cc952c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247282d1817c8e0a1717d8cae904e03630b6f584e585107701dabea84cc952c1->leave($__internal_247282d1817c8e0a1717d8cae904e03630b6f584e585107701dabea84cc952c1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf1e35d8c1ebc0ef349f437e5951067864038291b2c8d4ae819de3c81cd11c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1e35d8c1ebc0ef349f437e5951067864038291b2c8d4ae819de3c81cd11c15->enter($__internal_bf1e35d8c1ebc0ef349f437e5951067864038291b2c8d4ae819de3c81cd11c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_bf1e35d8c1ebc0ef349f437e5951067864038291b2c8d4ae819de3c81cd11c15->leave($__internal_bf1e35d8c1ebc0ef349f437e5951067864038291b2c8d4ae819de3c81cd11c15_prof);

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
", "@Karhabty/Resetting/check_email.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
