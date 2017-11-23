<?php

/* @Karhabty/Group/show_content.html.twig */
class __TwigTemplate_2a31fa9e451f12ec4a81439a9437ab38bd8170964d5885113882f14a95cb8ea6 extends Twig_Template
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
        $__internal_9d1e9b51a44ae2442014d95dff9e5647d4d03a34a039d557c574a67a927b3287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1e9b51a44ae2442014d95dff9e5647d4d03a34a039d557c574a67a927b3287->enter($__internal_9d1e9b51a44ae2442014d95dff9e5647d4d03a34a039d557c574a67a927b3287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/show_content.html.twig"));

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
        
        $__internal_9d1e9b51a44ae2442014d95dff9e5647d4d03a34a039d557c574a67a927b3287->leave($__internal_9d1e9b51a44ae2442014d95dff9e5647d4d03a34a039d557c574a67a927b3287_prof);

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
