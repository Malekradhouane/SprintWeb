<?php

/* KarhabtyBundle:Registration:confirmed.html.twig */
class __TwigTemplate_9d62589a1c88a0a95924270f0dca55696f5ed455d66b6039be53f835fffe0d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_712656e02ab7b943d038aa3af70b74e4da36846061ed98f7cc73874bd84fc2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712656e02ab7b943d038aa3af70b74e4da36846061ed98f7cc73874bd84fc2dd->enter($__internal_712656e02ab7b943d038aa3af70b74e4da36846061ed98f7cc73874bd84fc2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712656e02ab7b943d038aa3af70b74e4da36846061ed98f7cc73874bd84fc2dd->leave($__internal_712656e02ab7b943d038aa3af70b74e4da36846061ed98f7cc73874bd84fc2dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7184be6ce2a6bdc9309a5522f3f5a9ce7e71df8ca98129efd6ae3045c1658a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7184be6ce2a6bdc9309a5522f3f5a9ce7e71df8ca98129efd6ae3045c1658a9->enter($__internal_b7184be6ce2a6bdc9309a5522f3f5a9ce7e71df8ca98129efd6ae3045c1658a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_b7184be6ce2a6bdc9309a5522f3f5a9ce7e71df8ca98129efd6ae3045c1658a9->leave($__internal_b7184be6ce2a6bdc9309a5522f3f5a9ce7e71df8ca98129efd6ae3045c1658a9_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
