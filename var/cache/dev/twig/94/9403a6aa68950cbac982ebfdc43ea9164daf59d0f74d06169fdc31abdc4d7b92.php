<?php

/* @Karhabty/Profile/edit.html.twig */
class __TwigTemplate_55a74f438259c78d0d45fea1c0e7791be3c1e9c08e01f96a35321becd17c6c2c extends Twig_Template
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
        $__internal_acecf7cdd8a756a1d3c02a28e40043a1fd5c605b7f2c78bf8e8350634e372c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acecf7cdd8a756a1d3c02a28e40043a1fd5c605b7f2c78bf8e8350634e372c3f->enter($__internal_acecf7cdd8a756a1d3c02a28e40043a1fd5c605b7f2c78bf8e8350634e372c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acecf7cdd8a756a1d3c02a28e40043a1fd5c605b7f2c78bf8e8350634e372c3f->leave($__internal_acecf7cdd8a756a1d3c02a28e40043a1fd5c605b7f2c78bf8e8350634e372c3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d15ba9f57e2642109039361c86a0db881b6686ec65657e41dfe95a81803b637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d15ba9f57e2642109039361c86a0db881b6686ec65657e41dfe95a81803b637->enter($__internal_7d15ba9f57e2642109039361c86a0db881b6686ec65657e41dfe95a81803b637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@Karhabty/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7d15ba9f57e2642109039361c86a0db881b6686ec65657e41dfe95a81803b637->leave($__internal_7d15ba9f57e2642109039361c86a0db881b6686ec65657e41dfe95a81803b637_prof);

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
