<?php

/* KarhabtyBundle:Profile:edit.html.twig */
class __TwigTemplate_5286259611fa9a5f24b013136f2453ac7a556226231363f56a20c8645b2fca43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Profile:edit.html.twig", 1);
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
        $__internal_33ca7cbc6d17f2a3798ebf0e571d687d94f2108c1b6923a6eed5646ded9286e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ca7cbc6d17f2a3798ebf0e571d687d94f2108c1b6923a6eed5646ded9286e8->enter($__internal_33ca7cbc6d17f2a3798ebf0e571d687d94f2108c1b6923a6eed5646ded9286e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ca7cbc6d17f2a3798ebf0e571d687d94f2108c1b6923a6eed5646ded9286e8->leave($__internal_33ca7cbc6d17f2a3798ebf0e571d687d94f2108c1b6923a6eed5646ded9286e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4dc2e4d9459802979b83781b7af75cd415491ffc04bba83ce156a76739858c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc2e4d9459802979b83781b7af75cd415491ffc04bba83ce156a76739858c00->enter($__internal_4dc2e4d9459802979b83781b7af75cd415491ffc04bba83ce156a76739858c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "KarhabtyBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4dc2e4d9459802979b83781b7af75cd415491ffc04bba83ce156a76739858c00->leave($__internal_4dc2e4d9459802979b83781b7af75cd415491ffc04bba83ce156a76739858c00_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Profile/edit.html.twig");
    }
}
