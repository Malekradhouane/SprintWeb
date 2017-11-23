<?php

/* @Karhabty/Registration/confirmed.html.twig */
class __TwigTemplate_13827637be96db164d7e986d866ddbc675bfc3949bf2caee05c1694a7058a869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d2717e93aa12ba3dbef86f56bb0754480a31ff8411f926301d1689b984b7bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2717e93aa12ba3dbef86f56bb0754480a31ff8411f926301d1689b984b7bf5->enter($__internal_5d2717e93aa12ba3dbef86f56bb0754480a31ff8411f926301d1689b984b7bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2717e93aa12ba3dbef86f56bb0754480a31ff8411f926301d1689b984b7bf5->leave($__internal_5d2717e93aa12ba3dbef86f56bb0754480a31ff8411f926301d1689b984b7bf5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cedbbe038ff59bcad04f0793fdc552b089850c194c27fe8d4156239adf1b1f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedbbe038ff59bcad04f0793fdc552b089850c194c27fe8d4156239adf1b1f4c->enter($__internal_cedbbe038ff59bcad04f0793fdc552b089850c194c27fe8d4156239adf1b1f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_cedbbe038ff59bcad04f0793fdc552b089850c194c27fe8d4156239adf1b1f4c->leave($__internal_cedbbe038ff59bcad04f0793fdc552b089850c194c27fe8d4156239adf1b1f4c_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@Karhabty/Registration/confirmed.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
