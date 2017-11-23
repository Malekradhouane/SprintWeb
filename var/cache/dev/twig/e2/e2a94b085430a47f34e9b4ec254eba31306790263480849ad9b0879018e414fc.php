<?php

/* KarhabtyBundle:Registration:check_email.html.twig */
class __TwigTemplate_2dd278213902ed0777669330c3d5294d7e17d12a9b71d9cf06f8ff6f784304e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Registration:check_email.html.twig", 1);
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
        $__internal_aeb08ab6fa440185886bb0b9756ebbfa0aeacdbb852c7ea59f4ae797a7840765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb08ab6fa440185886bb0b9756ebbfa0aeacdbb852c7ea59f4ae797a7840765->enter($__internal_aeb08ab6fa440185886bb0b9756ebbfa0aeacdbb852c7ea59f4ae797a7840765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb08ab6fa440185886bb0b9756ebbfa0aeacdbb852c7ea59f4ae797a7840765->leave($__internal_aeb08ab6fa440185886bb0b9756ebbfa0aeacdbb852c7ea59f4ae797a7840765_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6eee874574827bf7b9adb79b0039e6f96b5ab89638e6df45a79fa4952e659f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eee874574827bf7b9adb79b0039e6f96b5ab89638e6df45a79fa4952e659f74->enter($__internal_6eee874574827bf7b9adb79b0039e6f96b5ab89638e6df45a79fa4952e659f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6eee874574827bf7b9adb79b0039e6f96b5ab89638e6df45a79fa4952e659f74->leave($__internal_6eee874574827bf7b9adb79b0039e6f96b5ab89638e6df45a79fa4952e659f74_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Registration:check_email.html.twig";
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
", "KarhabtyBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Registration/check_email.html.twig");
    }
}
