<?php

/* KarhabtyBundle:Group:show_content.html.twig */
class __TwigTemplate_06c821241284ddfed6e317e1c113e7d908b511cc713c0461c2d080d0eceb6193 extends Twig_Template
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
        $__internal_51ad69e78d46f2eaa4bbaf856b89091f833ca6d5ceef29ce452c4141cf6dbb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ad69e78d46f2eaa4bbaf856b89091f833ca6d5ceef29ce452c4141cf6dbb11->enter($__internal_51ad69e78d46f2eaa4bbaf856b89091f833ca6d5ceef29ce452c4141cf6dbb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_51ad69e78d46f2eaa4bbaf856b89091f833ca6d5ceef29ce452c4141cf6dbb11->leave($__internal_51ad69e78d46f2eaa4bbaf856b89091f833ca6d5ceef29ce452c4141cf6dbb11_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "KarhabtyBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Group/show_content.html.twig");
    }
}
