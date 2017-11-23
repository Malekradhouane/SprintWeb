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
        $__internal_aff6a905f62d0075bb7ed3a2c6fb003fe6518ac3e25c317650aa901f224674a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff6a905f62d0075bb7ed3a2c6fb003fe6518ac3e25c317650aa901f224674a8->enter($__internal_aff6a905f62d0075bb7ed3a2c6fb003fe6518ac3e25c317650aa901f224674a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aff6a905f62d0075bb7ed3a2c6fb003fe6518ac3e25c317650aa901f224674a8->leave($__internal_aff6a905f62d0075bb7ed3a2c6fb003fe6518ac3e25c317650aa901f224674a8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0185b8792273370ebdd14e1f7e74e32b24501943703bea11c48af875aec3de60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0185b8792273370ebdd14e1f7e74e32b24501943703bea11c48af875aec3de60->enter($__internal_0185b8792273370ebdd14e1f7e74e32b24501943703bea11c48af875aec3de60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0185b8792273370ebdd14e1f7e74e32b24501943703bea11c48af875aec3de60->leave($__internal_0185b8792273370ebdd14e1f7e74e32b24501943703bea11c48af875aec3de60_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8ce780b8d11595a54cbe2cb3a052d9ef6a397188c77a5d0b85ca74514f9b350e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce780b8d11595a54cbe2cb3a052d9ef6a397188c77a5d0b85ca74514f9b350e->enter($__internal_8ce780b8d11595a54cbe2cb3a052d9ef6a397188c77a5d0b85ca74514f9b350e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8ce780b8d11595a54cbe2cb3a052d9ef6a397188c77a5d0b85ca74514f9b350e->leave($__internal_8ce780b8d11595a54cbe2cb3a052d9ef6a397188c77a5d0b85ca74514f9b350e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_45300488a1c886ab98b95f0300a8da380fa84302937153201d7568b414240490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45300488a1c886ab98b95f0300a8da380fa84302937153201d7568b414240490->enter($__internal_45300488a1c886ab98b95f0300a8da380fa84302937153201d7568b414240490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_45300488a1c886ab98b95f0300a8da380fa84302937153201d7568b414240490->leave($__internal_45300488a1c886ab98b95f0300a8da380fa84302937153201d7568b414240490_prof);

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
", "KarhabtyBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Resetting/email.txt.twig");
    }
}
