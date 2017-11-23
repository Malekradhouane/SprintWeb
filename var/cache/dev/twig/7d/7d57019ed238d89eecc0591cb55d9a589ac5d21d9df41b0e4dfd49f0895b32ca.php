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
        $__internal_a3d9e79f37f13ff7b2966e101d6f2bde8a8963989c0f2b52b21723f3cdcb62a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d9e79f37f13ff7b2966e101d6f2bde8a8963989c0f2b52b21723f3cdcb62a1->enter($__internal_a3d9e79f37f13ff7b2966e101d6f2bde8a8963989c0f2b52b21723f3cdcb62a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a3d9e79f37f13ff7b2966e101d6f2bde8a8963989c0f2b52b21723f3cdcb62a1->leave($__internal_a3d9e79f37f13ff7b2966e101d6f2bde8a8963989c0f2b52b21723f3cdcb62a1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b3661807d6a6b8cfcf9696372105c1820c5033180cdd4a569bafb88d39d8b87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3661807d6a6b8cfcf9696372105c1820c5033180cdd4a569bafb88d39d8b87d->enter($__internal_b3661807d6a6b8cfcf9696372105c1820c5033180cdd4a569bafb88d39d8b87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b3661807d6a6b8cfcf9696372105c1820c5033180cdd4a569bafb88d39d8b87d->leave($__internal_b3661807d6a6b8cfcf9696372105c1820c5033180cdd4a569bafb88d39d8b87d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_56036dd32525de036778945c5e42e478135c15e6e4d84d95d6c0d4cbdc534e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56036dd32525de036778945c5e42e478135c15e6e4d84d95d6c0d4cbdc534e5d->enter($__internal_56036dd32525de036778945c5e42e478135c15e6e4d84d95d6c0d4cbdc534e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_56036dd32525de036778945c5e42e478135c15e6e4d84d95d6c0d4cbdc534e5d->leave($__internal_56036dd32525de036778945c5e42e478135c15e6e4d84d95d6c0d4cbdc534e5d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3d75f7250856e1ffaacbbb0e4bf996e6342d989739bb772a2ceefb512969c796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d75f7250856e1ffaacbbb0e4bf996e6342d989739bb772a2ceefb512969c796->enter($__internal_3d75f7250856e1ffaacbbb0e4bf996e6342d989739bb772a2ceefb512969c796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3d75f7250856e1ffaacbbb0e4bf996e6342d989739bb772a2ceefb512969c796->leave($__internal_3d75f7250856e1ffaacbbb0e4bf996e6342d989739bb772a2ceefb512969c796_prof);

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
