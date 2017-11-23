<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6ac22bb030958c08fbcc6ebb3a49a6a8dab7dacbd8bd93d26c606a5fa2ba7cfa extends Twig_Template
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
        $__internal_4beece2ecdd0694f4dacef406baeb57ed2f1999af4cf9168ff4254c7807df8b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4beece2ecdd0694f4dacef406baeb57ed2f1999af4cf9168ff4254c7807df8b1->enter($__internal_4beece2ecdd0694f4dacef406baeb57ed2f1999af4cf9168ff4254c7807df8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4beece2ecdd0694f4dacef406baeb57ed2f1999af4cf9168ff4254c7807df8b1->leave($__internal_4beece2ecdd0694f4dacef406baeb57ed2f1999af4cf9168ff4254c7807df8b1_prof);

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
