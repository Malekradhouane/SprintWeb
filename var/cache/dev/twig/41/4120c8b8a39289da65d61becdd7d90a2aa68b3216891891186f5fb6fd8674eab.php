<?php

/* @Karhabty/Registration/check_email.html.twig */
class __TwigTemplate_34011fc624797059003b65bd377953c12b329fda5ea640393d6ae5870260852e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Registration/check_email.html.twig", 1);
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
        $__internal_b4b05be98f629220fd5b511724b197e9da7b7a548c7d7cc150c0e5ed414575dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b05be98f629220fd5b511724b197e9da7b7a548c7d7cc150c0e5ed414575dc->enter($__internal_b4b05be98f629220fd5b511724b197e9da7b7a548c7d7cc150c0e5ed414575dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b05be98f629220fd5b511724b197e9da7b7a548c7d7cc150c0e5ed414575dc->leave($__internal_b4b05be98f629220fd5b511724b197e9da7b7a548c7d7cc150c0e5ed414575dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4633af7acc4d2f447185f267d0cd1ab5ea819e97582d95ec1fb9f3d6c31a63fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4633af7acc4d2f447185f267d0cd1ab5ea819e97582d95ec1fb9f3d6c31a63fb->enter($__internal_4633af7acc4d2f447185f267d0cd1ab5ea819e97582d95ec1fb9f3d6c31a63fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4633af7acc4d2f447185f267d0cd1ab5ea819e97582d95ec1fb9f3d6c31a63fb->leave($__internal_4633af7acc4d2f447185f267d0cd1ab5ea819e97582d95ec1fb9f3d6c31a63fb_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@Karhabty/Registration/check_email.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
