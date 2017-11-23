<?php

/* KarhabtyBundle:Resetting:email.txt.twig */
class __TwigTemplate_b8d64434e661536562920c6122a13d3354fba108039c816bb2268576cd7366ba extends Twig_Template
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
        $__internal_99c7cef8cb43908f0a833885441cb1001aa6c4e5629a360f08e1c9bac9cc4ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c7cef8cb43908f0a833885441cb1001aa6c4e5629a360f08e1c9bac9cc4ca6->enter($__internal_99c7cef8cb43908f0a833885441cb1001aa6c4e5629a360f08e1c9bac9cc4ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_99c7cef8cb43908f0a833885441cb1001aa6c4e5629a360f08e1c9bac9cc4ca6->leave($__internal_99c7cef8cb43908f0a833885441cb1001aa6c4e5629a360f08e1c9bac9cc4ca6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d33d13ebdaf7f02cdb61f7dbb7c3c10c8a37ca001d2d26b9eb48b0279412f72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33d13ebdaf7f02cdb61f7dbb7c3c10c8a37ca001d2d26b9eb48b0279412f72d->enter($__internal_d33d13ebdaf7f02cdb61f7dbb7c3c10c8a37ca001d2d26b9eb48b0279412f72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d33d13ebdaf7f02cdb61f7dbb7c3c10c8a37ca001d2d26b9eb48b0279412f72d->leave($__internal_d33d13ebdaf7f02cdb61f7dbb7c3c10c8a37ca001d2d26b9eb48b0279412f72d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ccb2b74f0ad08d2e3f6e21617799cc44af0a0cdc9560d5e168cf512b8442c9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb2b74f0ad08d2e3f6e21617799cc44af0a0cdc9560d5e168cf512b8442c9e1->enter($__internal_ccb2b74f0ad08d2e3f6e21617799cc44af0a0cdc9560d5e168cf512b8442c9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ccb2b74f0ad08d2e3f6e21617799cc44af0a0cdc9560d5e168cf512b8442c9e1->leave($__internal_ccb2b74f0ad08d2e3f6e21617799cc44af0a0cdc9560d5e168cf512b8442c9e1_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_033dd98716924b9c44b9f3f41c5abb007e91dbb8bb32a45e5d9718719a531886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033dd98716924b9c44b9f3f41c5abb007e91dbb8bb32a45e5d9718719a531886->enter($__internal_033dd98716924b9c44b9f3f41c5abb007e91dbb8bb32a45e5d9718719a531886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_033dd98716924b9c44b9f3f41c5abb007e91dbb8bb32a45e5d9718719a531886->leave($__internal_033dd98716924b9c44b9f3f41c5abb007e91dbb8bb32a45e5d9718719a531886_prof);

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
