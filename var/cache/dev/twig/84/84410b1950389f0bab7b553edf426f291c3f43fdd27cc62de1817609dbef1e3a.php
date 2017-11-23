<?php

/* KarhabtyBundle:Registration:email.txt.twig */
class __TwigTemplate_be21f64f119f99c6706d1f45165da05e9d09f87651e9e00e022a984e09bd7360 extends Twig_Template
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
        $__internal_782c0829675808935de265d0d344fc87f0621cf0152413ad016fbf967a786c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782c0829675808935de265d0d344fc87f0621cf0152413ad016fbf967a786c91->enter($__internal_782c0829675808935de265d0d344fc87f0621cf0152413ad016fbf967a786c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_782c0829675808935de265d0d344fc87f0621cf0152413ad016fbf967a786c91->leave($__internal_782c0829675808935de265d0d344fc87f0621cf0152413ad016fbf967a786c91_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_84f33f173b0e950fca82f537c184e0f82b1eb7d1b2f62a9c4f1c99daeca542b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f33f173b0e950fca82f537c184e0f82b1eb7d1b2f62a9c4f1c99daeca542b6->enter($__internal_84f33f173b0e950fca82f537c184e0f82b1eb7d1b2f62a9c4f1c99daeca542b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_84f33f173b0e950fca82f537c184e0f82b1eb7d1b2f62a9c4f1c99daeca542b6->leave($__internal_84f33f173b0e950fca82f537c184e0f82b1eb7d1b2f62a9c4f1c99daeca542b6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d98d5ae339cb58f6e225dec8609942d90cb9502287a47dd4a4217949139299d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98d5ae339cb58f6e225dec8609942d90cb9502287a47dd4a4217949139299d4->enter($__internal_d98d5ae339cb58f6e225dec8609942d90cb9502287a47dd4a4217949139299d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d98d5ae339cb58f6e225dec8609942d90cb9502287a47dd4a4217949139299d4->leave($__internal_d98d5ae339cb58f6e225dec8609942d90cb9502287a47dd4a4217949139299d4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_420077d9be814b1f31c1fd1cbff3a6d860603f4cd5a15003e11abd83902e354c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420077d9be814b1f31c1fd1cbff3a6d860603f4cd5a15003e11abd83902e354c->enter($__internal_420077d9be814b1f31c1fd1cbff3a6d860603f4cd5a15003e11abd83902e354c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_420077d9be814b1f31c1fd1cbff3a6d860603f4cd5a15003e11abd83902e354c->leave($__internal_420077d9be814b1f31c1fd1cbff3a6d860603f4cd5a15003e11abd83902e354c_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Registration:email.txt.twig";
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
", "KarhabtyBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Registration/email.txt.twig");
    }
}
