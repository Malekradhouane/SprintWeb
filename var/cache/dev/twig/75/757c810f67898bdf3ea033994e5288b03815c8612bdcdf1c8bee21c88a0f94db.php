<?php

/* @Karhabty/Resetting/email.txt.twig */
class __TwigTemplate_2d91cf77e8e08c0926b7d11b491954327a54e0d90d21be76d3c91821b7442880 extends Twig_Template
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
        $__internal_43b99fb4f8ed13dd298fa480a4d13008fa77c933897774b5a098602691048777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b99fb4f8ed13dd298fa480a4d13008fa77c933897774b5a098602691048777->enter($__internal_43b99fb4f8ed13dd298fa480a4d13008fa77c933897774b5a098602691048777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_43b99fb4f8ed13dd298fa480a4d13008fa77c933897774b5a098602691048777->leave($__internal_43b99fb4f8ed13dd298fa480a4d13008fa77c933897774b5a098602691048777_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_29f9f207e90e85810a7fbcf0e6dfd28175b521e101dcdd715b6c5d200422baca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f9f207e90e85810a7fbcf0e6dfd28175b521e101dcdd715b6c5d200422baca->enter($__internal_29f9f207e90e85810a7fbcf0e6dfd28175b521e101dcdd715b6c5d200422baca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_29f9f207e90e85810a7fbcf0e6dfd28175b521e101dcdd715b6c5d200422baca->leave($__internal_29f9f207e90e85810a7fbcf0e6dfd28175b521e101dcdd715b6c5d200422baca_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7c4a0201712573f051922570967dd9143b0cf40b827f4f145e8a43affedc9490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4a0201712573f051922570967dd9143b0cf40b827f4f145e8a43affedc9490->enter($__internal_7c4a0201712573f051922570967dd9143b0cf40b827f4f145e8a43affedc9490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7c4a0201712573f051922570967dd9143b0cf40b827f4f145e8a43affedc9490->leave($__internal_7c4a0201712573f051922570967dd9143b0cf40b827f4f145e8a43affedc9490_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_312e7b98f458d04291af304ffa9525ed1dda89a4a4ea99761d08a5b28751269f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312e7b98f458d04291af304ffa9525ed1dda89a4a4ea99761d08a5b28751269f->enter($__internal_312e7b98f458d04291af304ffa9525ed1dda89a4a4ea99761d08a5b28751269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_312e7b98f458d04291af304ffa9525ed1dda89a4a4ea99761d08a5b28751269f->leave($__internal_312e7b98f458d04291af304ffa9525ed1dda89a4a4ea99761d08a5b28751269f_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Resetting/email.txt.twig";
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
", "@Karhabty/Resetting/email.txt.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
