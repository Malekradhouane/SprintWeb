<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f8a66ecdd1e2afacbb50c6a64a5172ad7a5d7fc23d1717dc9200cb8c05fe1599 extends Twig_Template
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
        $__internal_b67f587f386e33877a31d9006e5aa5bbe0a1d2badf4ba46b5b5e09b6bc82cacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67f587f386e33877a31d9006e5aa5bbe0a1d2badf4ba46b5b5e09b6bc82cacc->enter($__internal_b67f587f386e33877a31d9006e5aa5bbe0a1d2badf4ba46b5b5e09b6bc82cacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b67f587f386e33877a31d9006e5aa5bbe0a1d2badf4ba46b5b5e09b6bc82cacc->leave($__internal_b67f587f386e33877a31d9006e5aa5bbe0a1d2badf4ba46b5b5e09b6bc82cacc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}