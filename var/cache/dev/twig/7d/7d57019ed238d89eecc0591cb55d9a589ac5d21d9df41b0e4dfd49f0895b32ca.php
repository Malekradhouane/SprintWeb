<?php

/* @Karhabty/Registration/email.txt.twig */
class __TwigTemplate_a34ebbd7edeb98c93a0e0c969c719fccdbd41da26124568819267425ca393222 extends Twig_Template
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
        $__internal_489c6cb69aa8fd769dfed97b0f3601d799842bd4918cb6f51a5c22cb92690c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489c6cb69aa8fd769dfed97b0f3601d799842bd4918cb6f51a5c22cb92690c9d->enter($__internal_489c6cb69aa8fd769dfed97b0f3601d799842bd4918cb6f51a5c22cb92690c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_489c6cb69aa8fd769dfed97b0f3601d799842bd4918cb6f51a5c22cb92690c9d->leave($__internal_489c6cb69aa8fd769dfed97b0f3601d799842bd4918cb6f51a5c22cb92690c9d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0c40d3d3b5accea930ab371c81bb59701cd19ec79f88871dfe58d010c8950793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c40d3d3b5accea930ab371c81bb59701cd19ec79f88871dfe58d010c8950793->enter($__internal_0c40d3d3b5accea930ab371c81bb59701cd19ec79f88871dfe58d010c8950793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_0c40d3d3b5accea930ab371c81bb59701cd19ec79f88871dfe58d010c8950793->leave($__internal_0c40d3d3b5accea930ab371c81bb59701cd19ec79f88871dfe58d010c8950793_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c6015ae6402b4740371801e5bda5c6c017be31898ee75893387acf5b91eed46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6015ae6402b4740371801e5bda5c6c017be31898ee75893387acf5b91eed46f->enter($__internal_c6015ae6402b4740371801e5bda5c6c017be31898ee75893387acf5b91eed46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c6015ae6402b4740371801e5bda5c6c017be31898ee75893387acf5b91eed46f->leave($__internal_c6015ae6402b4740371801e5bda5c6c017be31898ee75893387acf5b91eed46f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_17c7b2a546d781be606deca0b64dba6b95bfe083096732089f9c4d5fc17c6fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c7b2a546d781be606deca0b64dba6b95bfe083096732089f9c4d5fc17c6fde->enter($__internal_17c7b2a546d781be606deca0b64dba6b95bfe083096732089f9c4d5fc17c6fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_17c7b2a546d781be606deca0b64dba6b95bfe083096732089f9c4d5fc17c6fde->leave($__internal_17c7b2a546d781be606deca0b64dba6b95bfe083096732089f9c4d5fc17c6fde_prof);

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
", "@Karhabty/Registration/email.txt.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
