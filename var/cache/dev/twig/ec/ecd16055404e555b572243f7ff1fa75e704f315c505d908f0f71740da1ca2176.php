<?php

/* @Karhabty/Group/edit.html.twig */
class __TwigTemplate_b58ce1e2b72161d6ec1e780d45e5cc2ffa3cddfe927a0b200cd60e20717daae8 extends Twig_Template
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
        $__internal_63bcbe261bd3d879e260d4dfd1a124acafcc79f1843ddcedd81059749a6e499d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bcbe261bd3d879e260d4dfd1a124acafcc79f1843ddcedd81059749a6e499d->enter($__internal_63bcbe261bd3d879e260d4dfd1a124acafcc79f1843ddcedd81059749a6e499d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63bcbe261bd3d879e260d4dfd1a124acafcc79f1843ddcedd81059749a6e499d->leave($__internal_63bcbe261bd3d879e260d4dfd1a124acafcc79f1843ddcedd81059749a6e499d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90ea8fc6050e5eb47f49cb6a350b3d3f64942c459e845c4ad7db318647a7c0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ea8fc6050e5eb47f49cb6a350b3d3f64942c459e845c4ad7db318647a7c0ea->enter($__internal_90ea8fc6050e5eb47f49cb6a350b3d3f64942c459e845c4ad7db318647a7c0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@Karhabty/Group/edit.html.twig", 4)->display($context);
        
        $__internal_90ea8fc6050e5eb47f49cb6a350b3d3f64942c459e845c4ad7db318647a7c0ea->leave($__internal_90ea8fc6050e5eb47f49cb6a350b3d3f64942c459e845c4ad7db318647a7c0ea_prof);

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
