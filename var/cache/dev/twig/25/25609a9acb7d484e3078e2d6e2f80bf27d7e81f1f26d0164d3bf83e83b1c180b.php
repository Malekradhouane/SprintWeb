<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_15c1793974df1a0eea26a103534436f38bfaf2013df87dc8a6753e3a2fd36995 extends Twig_Template
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
        $__internal_612e3c9637dc0884bf3c879ef1769adbe975dc036d54c7b46ae91c1e95c950d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612e3c9637dc0884bf3c879ef1769adbe975dc036d54c7b46ae91c1e95c950d4->enter($__internal_612e3c9637dc0884bf3c879ef1769adbe975dc036d54c7b46ae91c1e95c950d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_612e3c9637dc0884bf3c879ef1769adbe975dc036d54c7b46ae91c1e95c950d4->leave($__internal_612e3c9637dc0884bf3c879ef1769adbe975dc036d54c7b46ae91c1e95c950d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
