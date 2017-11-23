<?php

/* @Karhabty/Group/edit.html.twig */
class __TwigTemplate_f6dde0dc8be6fb31ce83ddbbe3cf88cef19821c2383272338f23ea273e5f7f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Group/edit.html.twig", 1);
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
        $__internal_165c067c8ffcc5cfec3f614a3548f64bc8bf6bb1ac7d0bb254ac792752d767a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165c067c8ffcc5cfec3f614a3548f64bc8bf6bb1ac7d0bb254ac792752d767a3->enter($__internal_165c067c8ffcc5cfec3f614a3548f64bc8bf6bb1ac7d0bb254ac792752d767a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165c067c8ffcc5cfec3f614a3548f64bc8bf6bb1ac7d0bb254ac792752d767a3->leave($__internal_165c067c8ffcc5cfec3f614a3548f64bc8bf6bb1ac7d0bb254ac792752d767a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc06e63ce57f547cdd35edd52f6c0faf0103177aa41d8ae605487689cad1e6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc06e63ce57f547cdd35edd52f6c0faf0103177aa41d8ae605487689cad1e6ef->enter($__internal_dc06e63ce57f547cdd35edd52f6c0faf0103177aa41d8ae605487689cad1e6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@Karhabty/Group/edit.html.twig", 4)->display($context);
        
        $__internal_dc06e63ce57f547cdd35edd52f6c0faf0103177aa41d8ae605487689cad1e6ef->leave($__internal_dc06e63ce57f547cdd35edd52f6c0faf0103177aa41d8ae605487689cad1e6ef_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@Karhabty/Group/edit.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
