<?php

/* KarhabtyBundle:Registration:email.txt.twig */
class __TwigTemplate_c9f0afe1963a6c6d9970f8f7be34b5a28a8cf61656fa3b829544a4dd82d335f1 extends Twig_Template
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
        $__internal_341e9e1ef952fa310f66ea4e59b92c9a2f5677e2e1397384adc7df3202c8096f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341e9e1ef952fa310f66ea4e59b92c9a2f5677e2e1397384adc7df3202c8096f->enter($__internal_341e9e1ef952fa310f66ea4e59b92c9a2f5677e2e1397384adc7df3202c8096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_341e9e1ef952fa310f66ea4e59b92c9a2f5677e2e1397384adc7df3202c8096f->leave($__internal_341e9e1ef952fa310f66ea4e59b92c9a2f5677e2e1397384adc7df3202c8096f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5bf4aa27b9ea0293457ec4c963c086901b034eee675ba2f095b743ab383c9617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf4aa27b9ea0293457ec4c963c086901b034eee675ba2f095b743ab383c9617->enter($__internal_5bf4aa27b9ea0293457ec4c963c086901b034eee675ba2f095b743ab383c9617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_5bf4aa27b9ea0293457ec4c963c086901b034eee675ba2f095b743ab383c9617->leave($__internal_5bf4aa27b9ea0293457ec4c963c086901b034eee675ba2f095b743ab383c9617_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_04d3f2a15f01e750fe2cfb415cdca7e54d055d54fb0279ac852a86de6d98e72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d3f2a15f01e750fe2cfb415cdca7e54d055d54fb0279ac852a86de6d98e72a->enter($__internal_04d3f2a15f01e750fe2cfb415cdca7e54d055d54fb0279ac852a86de6d98e72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_04d3f2a15f01e750fe2cfb415cdca7e54d055d54fb0279ac852a86de6d98e72a->leave($__internal_04d3f2a15f01e750fe2cfb415cdca7e54d055d54fb0279ac852a86de6d98e72a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9b7e4249b88a5789b5847027e11baa62ff59bb45a0562455aa4e02057f6f2d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b7e4249b88a5789b5847027e11baa62ff59bb45a0562455aa4e02057f6f2d1c->enter($__internal_9b7e4249b88a5789b5847027e11baa62ff59bb45a0562455aa4e02057f6f2d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9b7e4249b88a5789b5847027e11baa62ff59bb45a0562455aa4e02057f6f2d1c->leave($__internal_9b7e4249b88a5789b5847027e11baa62ff59bb45a0562455aa4e02057f6f2d1c_prof);

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
