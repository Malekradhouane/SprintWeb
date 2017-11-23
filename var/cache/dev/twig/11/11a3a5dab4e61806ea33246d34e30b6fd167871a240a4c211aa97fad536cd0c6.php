<?php

/* @Karhabty/Profile/edit.html.twig */
class __TwigTemplate_8379e3e7b500f0919553d47448f5004e7ca8ba7a393276ceb201c36ee367634e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Profile/edit.html.twig", 1);
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
        $__internal_71576e195028db36d57825ed757fdc0e75c1087b4713f9491d4f551be4f0301f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71576e195028db36d57825ed757fdc0e75c1087b4713f9491d4f551be4f0301f->enter($__internal_71576e195028db36d57825ed757fdc0e75c1087b4713f9491d4f551be4f0301f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71576e195028db36d57825ed757fdc0e75c1087b4713f9491d4f551be4f0301f->leave($__internal_71576e195028db36d57825ed757fdc0e75c1087b4713f9491d4f551be4f0301f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2bae103b239e13e6fd6e0649ebb9f3aabe01f5392243c892de69216125e3cbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bae103b239e13e6fd6e0649ebb9f3aabe01f5392243c892de69216125e3cbea->enter($__internal_2bae103b239e13e6fd6e0649ebb9f3aabe01f5392243c892de69216125e3cbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@Karhabty/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_2bae103b239e13e6fd6e0649ebb9f3aabe01f5392243c892de69216125e3cbea->leave($__internal_2bae103b239e13e6fd6e0649ebb9f3aabe01f5392243c892de69216125e3cbea_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Profile/edit.html.twig";
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
", "@Karhabty/Profile/edit.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
