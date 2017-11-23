<?php

/* @Karhabty/Registration/email.txt.twig */
class __TwigTemplate_807a5b82e45f3fbd440b2ad92973c7091f78eb30abeb3ad7514350523060aece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddd87c9d4a900ca6614616fba40603235ebb1c7f8e312978083bd1333e1e62c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd87c9d4a900ca6614616fba40603235ebb1c7f8e312978083bd1333e1e62c6->enter($__internal_ddd87c9d4a900ca6614616fba40603235ebb1c7f8e312978083bd1333e1e62c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ddd87c9d4a900ca6614616fba40603235ebb1c7f8e312978083bd1333e1e62c6->leave($__internal_ddd87c9d4a900ca6614616fba40603235ebb1c7f8e312978083bd1333e1e62c6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f1d193e63c76ac3a218ea166ab178f29072d77f300967a491f1c93c37a764ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d193e63c76ac3a218ea166ab178f29072d77f300967a491f1c93c37a764ec6->enter($__internal_f1d193e63c76ac3a218ea166ab178f29072d77f300967a491f1c93c37a764ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_f1d193e63c76ac3a218ea166ab178f29072d77f300967a491f1c93c37a764ec6->leave($__internal_f1d193e63c76ac3a218ea166ab178f29072d77f300967a491f1c93c37a764ec6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a3128f48ad54e03107dda605ed26d39e2a1902f30b5cd49e4b2fcfa330b28c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3128f48ad54e03107dda605ed26d39e2a1902f30b5cd49e4b2fcfa330b28c39->enter($__internal_a3128f48ad54e03107dda605ed26d39e2a1902f30b5cd49e4b2fcfa330b28c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a3128f48ad54e03107dda605ed26d39e2a1902f30b5cd49e4b2fcfa330b28c39->leave($__internal_a3128f48ad54e03107dda605ed26d39e2a1902f30b5cd49e4b2fcfa330b28c39_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cca1b0faf27b7b3e5f0c1921ebe75ae3ba4404abb7c9bcd3a4dcf6cf9a71c5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca1b0faf27b7b3e5f0c1921ebe75ae3ba4404abb7c9bcd3a4dcf6cf9a71c5fc->enter($__internal_cca1b0faf27b7b3e5f0c1921ebe75ae3ba4404abb7c9bcd3a4dcf6cf9a71c5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cca1b0faf27b7b3e5f0c1921ebe75ae3ba4404abb7c9bcd3a4dcf6cf9a71c5fc->leave($__internal_cca1b0faf27b7b3e5f0c1921ebe75ae3ba4404abb7c9bcd3a4dcf6cf9a71c5fc_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@Karhabty/Registration/email.txt.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
