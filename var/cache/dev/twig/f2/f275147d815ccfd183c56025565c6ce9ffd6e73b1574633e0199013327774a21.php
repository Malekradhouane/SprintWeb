<?php

/* @Karhabty/Registration/confirmed.html.twig */
class __TwigTemplate_b752d436e91d05ccdda5302cbaac8caf8ca4cfac4a027ebb8cc534145dbf6873 extends Twig_Template
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
        $__internal_734df889b735173dda6d1d2f77d814aa6368999cf2afb123ebded709edf0813b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734df889b735173dda6d1d2f77d814aa6368999cf2afb123ebded709edf0813b->enter($__internal_734df889b735173dda6d1d2f77d814aa6368999cf2afb123ebded709edf0813b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734df889b735173dda6d1d2f77d814aa6368999cf2afb123ebded709edf0813b->leave($__internal_734df889b735173dda6d1d2f77d814aa6368999cf2afb123ebded709edf0813b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f10afe6cd8d16929fb834dac84d026cf8612f5058c82d8998a8b4556950069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f10afe6cd8d16929fb834dac84d026cf8612f5058c82d8998a8b4556950069b->enter($__internal_1f10afe6cd8d16929fb834dac84d026cf8612f5058c82d8998a8b4556950069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1f10afe6cd8d16929fb834dac84d026cf8612f5058c82d8998a8b4556950069b->leave($__internal_1f10afe6cd8d16929fb834dac84d026cf8612f5058c82d8998a8b4556950069b_prof);

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
