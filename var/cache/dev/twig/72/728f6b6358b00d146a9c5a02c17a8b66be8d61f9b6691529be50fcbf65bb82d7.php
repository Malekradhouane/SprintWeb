<?php

/* KarhabtyBundle:Resetting:reset.html.twig */
class __TwigTemplate_6d9389867180ec548c0ef244b17708dbbcfda5edaf7672d30340a4e8c791563c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Resetting:reset.html.twig", 1);
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
        $__internal_567f7fc7f0385a4b1afe626bf51b73311462a9ae1e5f9c585caa155fccd42cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567f7fc7f0385a4b1afe626bf51b73311462a9ae1e5f9c585caa155fccd42cc8->enter($__internal_567f7fc7f0385a4b1afe626bf51b73311462a9ae1e5f9c585caa155fccd42cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_567f7fc7f0385a4b1afe626bf51b73311462a9ae1e5f9c585caa155fccd42cc8->leave($__internal_567f7fc7f0385a4b1afe626bf51b73311462a9ae1e5f9c585caa155fccd42cc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cec94b7207c6087f654e2bb639130eb4f1dc1e7267cd7caecdb9d3a472dd91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cec94b7207c6087f654e2bb639130eb4f1dc1e7267cd7caecdb9d3a472dd91e->enter($__internal_6cec94b7207c6087f654e2bb639130eb4f1dc1e7267cd7caecdb9d3a472dd91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "KarhabtyBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6cec94b7207c6087f654e2bb639130eb4f1dc1e7267cd7caecdb9d3a472dd91e->leave($__internal_6cec94b7207c6087f654e2bb639130eb4f1dc1e7267cd7caecdb9d3a472dd91e_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Resetting/reset.html.twig");
    }
}
