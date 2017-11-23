<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2a997bf23cc9ee9fe9f8e5db7b42e3ed05fc57b4eab36f37689c82beee4b421d extends Twig_Template
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
        $__internal_01ab436f09dd706ba15428e02a2f24dec0e21f3444c1c4d1079b4aae4cba69a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ab436f09dd706ba15428e02a2f24dec0e21f3444c1c4d1079b4aae4cba69a8->enter($__internal_01ab436f09dd706ba15428e02a2f24dec0e21f3444c1c4d1079b4aae4cba69a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_01ab436f09dd706ba15428e02a2f24dec0e21f3444c1c4d1079b4aae4cba69a8->leave($__internal_01ab436f09dd706ba15428e02a2f24dec0e21f3444c1c4d1079b4aae4cba69a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
