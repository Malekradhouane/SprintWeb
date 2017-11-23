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
        $__internal_acb0615ab4261bd23ee2787f0fba538431eb5f8ec818d7eca94697972e48bbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb0615ab4261bd23ee2787f0fba538431eb5f8ec818d7eca94697972e48bbec->enter($__internal_acb0615ab4261bd23ee2787f0fba538431eb5f8ec818d7eca94697972e48bbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_acb0615ab4261bd23ee2787f0fba538431eb5f8ec818d7eca94697972e48bbec->leave($__internal_acb0615ab4261bd23ee2787f0fba538431eb5f8ec818d7eca94697972e48bbec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fbd7d8079f597237c8edb9b5f235afa267dc14562025931664b4c3d4bc1538af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd7d8079f597237c8edb9b5f235afa267dc14562025931664b4c3d4bc1538af->enter($__internal_fbd7d8079f597237c8edb9b5f235afa267dc14562025931664b4c3d4bc1538af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_fbd7d8079f597237c8edb9b5f235afa267dc14562025931664b4c3d4bc1538af->leave($__internal_fbd7d8079f597237c8edb9b5f235afa267dc14562025931664b4c3d4bc1538af_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_136d608d0ff558455fea8e1fbe80b764079481ef90ea6629537adb2e7ace7cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136d608d0ff558455fea8e1fbe80b764079481ef90ea6629537adb2e7ace7cdc->enter($__internal_136d608d0ff558455fea8e1fbe80b764079481ef90ea6629537adb2e7ace7cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_136d608d0ff558455fea8e1fbe80b764079481ef90ea6629537adb2e7ace7cdc->leave($__internal_136d608d0ff558455fea8e1fbe80b764079481ef90ea6629537adb2e7ace7cdc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a4710be2426522d273a3871df21e58f305a50e5f3407bb23fed84d90922abcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4710be2426522d273a3871df21e58f305a50e5f3407bb23fed84d90922abcee->enter($__internal_a4710be2426522d273a3871df21e58f305a50e5f3407bb23fed84d90922abcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a4710be2426522d273a3871df21e58f305a50e5f3407bb23fed84d90922abcee->leave($__internal_a4710be2426522d273a3871df21e58f305a50e5f3407bb23fed84d90922abcee_prof);

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
", "@Karhabty/Resetting/email.txt.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
