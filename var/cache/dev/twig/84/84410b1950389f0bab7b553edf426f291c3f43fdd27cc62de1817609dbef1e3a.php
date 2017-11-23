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
        $__internal_3673f4081c8341a1206ab7633c3e67f501493534140f09c76690b6069d57d357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3673f4081c8341a1206ab7633c3e67f501493534140f09c76690b6069d57d357->enter($__internal_3673f4081c8341a1206ab7633c3e67f501493534140f09c76690b6069d57d357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3673f4081c8341a1206ab7633c3e67f501493534140f09c76690b6069d57d357->leave($__internal_3673f4081c8341a1206ab7633c3e67f501493534140f09c76690b6069d57d357_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_af58e727a65d327030d8e4331194de0b690419525f2527458e54060f86937d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af58e727a65d327030d8e4331194de0b690419525f2527458e54060f86937d13->enter($__internal_af58e727a65d327030d8e4331194de0b690419525f2527458e54060f86937d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_af58e727a65d327030d8e4331194de0b690419525f2527458e54060f86937d13->leave($__internal_af58e727a65d327030d8e4331194de0b690419525f2527458e54060f86937d13_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d98408350cfd9ace801ffa76214654f5407ae05d9304511f7e59df941953dd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98408350cfd9ace801ffa76214654f5407ae05d9304511f7e59df941953dd99->enter($__internal_d98408350cfd9ace801ffa76214654f5407ae05d9304511f7e59df941953dd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d98408350cfd9ace801ffa76214654f5407ae05d9304511f7e59df941953dd99->leave($__internal_d98408350cfd9ace801ffa76214654f5407ae05d9304511f7e59df941953dd99_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4a585640971d658989dbe62cd8f4dc8bf97f8af22235d9c303dc084cbd285366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a585640971d658989dbe62cd8f4dc8bf97f8af22235d9c303dc084cbd285366->enter($__internal_4a585640971d658989dbe62cd8f4dc8bf97f8af22235d9c303dc084cbd285366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4a585640971d658989dbe62cd8f4dc8bf97f8af22235d9c303dc084cbd285366->leave($__internal_4a585640971d658989dbe62cd8f4dc8bf97f8af22235d9c303dc084cbd285366_prof);

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
", "KarhabtyBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Registration/email.txt.twig");
    }
}
