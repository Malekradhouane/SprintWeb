<?php

/* KarhabtyBundle:Profile:show_content.html.twig */
class __TwigTemplate_0b6e9d0378e0ac4235edc5fec892daa3be53a838417085d2e9a47554982baa5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf4b0f7ee50b4ae7f0c75f3d7976cde63b668c51e71d7ef9fc107acd10fd60b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4b0f7ee50b4ae7f0c75f3d7976cde63b668c51e71d7ef9fc107acd10fd60b5->enter($__internal_bf4b0f7ee50b4ae7f0c75f3d7976cde63b668c51e71d7ef9fc107acd10fd60b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_bf4b0f7ee50b4ae7f0c75f3d7976cde63b668c51e71d7ef9fc107acd10fd60b5->leave($__internal_bf4b0f7ee50b4ae7f0c75f3d7976cde63b668c51e71d7ef9fc107acd10fd60b5_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "KarhabtyBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Profile/show_content.html.twig");
    }
}
