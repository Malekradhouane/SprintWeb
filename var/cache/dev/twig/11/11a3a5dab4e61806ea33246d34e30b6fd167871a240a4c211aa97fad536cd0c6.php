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
        $__internal_8fb95da49db98c4fac9c33e9bd9e6c3e02b7eb5843db3691a73f7442d14bcdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb95da49db98c4fac9c33e9bd9e6c3e02b7eb5843db3691a73f7442d14bcdf8->enter($__internal_8fb95da49db98c4fac9c33e9bd9e6c3e02b7eb5843db3691a73f7442d14bcdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fb95da49db98c4fac9c33e9bd9e6c3e02b7eb5843db3691a73f7442d14bcdf8->leave($__internal_8fb95da49db98c4fac9c33e9bd9e6c3e02b7eb5843db3691a73f7442d14bcdf8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d0b9bdbdf071bc23816c232f6296e1edc7ce6dc008472feed3e8d1612ef9174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0b9bdbdf071bc23816c232f6296e1edc7ce6dc008472feed3e8d1612ef9174->enter($__internal_5d0b9bdbdf071bc23816c232f6296e1edc7ce6dc008472feed3e8d1612ef9174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@Karhabty/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_5d0b9bdbdf071bc23816c232f6296e1edc7ce6dc008472feed3e8d1612ef9174->leave($__internal_5d0b9bdbdf071bc23816c232f6296e1edc7ce6dc008472feed3e8d1612ef9174_prof);

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
", "@Karhabty/Profile/edit.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
