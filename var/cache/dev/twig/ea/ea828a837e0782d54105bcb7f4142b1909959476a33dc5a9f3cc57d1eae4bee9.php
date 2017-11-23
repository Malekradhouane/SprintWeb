<?php

/* KarhabtyBundle:Resetting:email.txt.twig */
class __TwigTemplate_b8a0b4182af5ce4d8ef003e6defb862aa0126b30f07d3ae7b22bfa888763efca extends Twig_Template
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
        $__internal_2bf106ae22c70954fd196cf8ef4939658e42b9c49226d094178783d86155fe77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf106ae22c70954fd196cf8ef4939658e42b9c49226d094178783d86155fe77->enter($__internal_2bf106ae22c70954fd196cf8ef4939658e42b9c49226d094178783d86155fe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2bf106ae22c70954fd196cf8ef4939658e42b9c49226d094178783d86155fe77->leave($__internal_2bf106ae22c70954fd196cf8ef4939658e42b9c49226d094178783d86155fe77_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7506784d0fb76f7b5488b226a4cc6ffbfa3cf908000337a7e08fe381a8eafa5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7506784d0fb76f7b5488b226a4cc6ffbfa3cf908000337a7e08fe381a8eafa5f->enter($__internal_7506784d0fb76f7b5488b226a4cc6ffbfa3cf908000337a7e08fe381a8eafa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_7506784d0fb76f7b5488b226a4cc6ffbfa3cf908000337a7e08fe381a8eafa5f->leave($__internal_7506784d0fb76f7b5488b226a4cc6ffbfa3cf908000337a7e08fe381a8eafa5f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3fb211124beee0441b83005ae6e04fd5833e83511706dcb57cfa823ef856755e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb211124beee0441b83005ae6e04fd5833e83511706dcb57cfa823ef856755e->enter($__internal_3fb211124beee0441b83005ae6e04fd5833e83511706dcb57cfa823ef856755e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3fb211124beee0441b83005ae6e04fd5833e83511706dcb57cfa823ef856755e->leave($__internal_3fb211124beee0441b83005ae6e04fd5833e83511706dcb57cfa823ef856755e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f1496713b94d938a996d7e59b2dcb783d09e5a1015d61471fe6b31569a5cc9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1496713b94d938a996d7e59b2dcb783d09e5a1015d61471fe6b31569a5cc9f2->enter($__internal_f1496713b94d938a996d7e59b2dcb783d09e5a1015d61471fe6b31569a5cc9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f1496713b94d938a996d7e59b2dcb783d09e5a1015d61471fe6b31569a5cc9f2->leave($__internal_f1496713b94d938a996d7e59b2dcb783d09e5a1015d61471fe6b31569a5cc9f2_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "KarhabtyBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Resetting/email.txt.twig");
    }
}
