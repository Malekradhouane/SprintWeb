<?php

/* @Karhabty/Group/show_content.html.twig */
class __TwigTemplate_f84f865a719521a7cc5407995e5ddbd7065d26d4c67ee58fffb5c957c6a6d5f4 extends Twig_Template
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
        $__internal_53bad75acd272c9d63ebd7ed28ff8d7655efa7c1c0611e058de4467d42717e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53bad75acd272c9d63ebd7ed28ff8d7655efa7c1c0611e058de4467d42717e16->enter($__internal_53bad75acd272c9d63ebd7ed28ff8d7655efa7c1c0611e058de4467d42717e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/show_content.html.twig"));

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
        
        $__internal_53bad75acd272c9d63ebd7ed28ff8d7655efa7c1c0611e058de4467d42717e16->leave($__internal_53bad75acd272c9d63ebd7ed28ff8d7655efa7c1c0611e058de4467d42717e16_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Group/show_content.html.twig";
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
", "@Karhabty/Group/show_content.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
