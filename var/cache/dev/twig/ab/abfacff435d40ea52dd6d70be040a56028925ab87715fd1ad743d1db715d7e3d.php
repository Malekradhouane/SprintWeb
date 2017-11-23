<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_818e3bf4818e337cc092bac1907ff7b7a6e700dc89f96472e08d1e6cda69170e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_414fac23103e9a918f2650504b299b0c59c01fe4b7c555399338c591079e50c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414fac23103e9a918f2650504b299b0c59c01fe4b7c555399338c591079e50c6->enter($__internal_414fac23103e9a918f2650504b299b0c59c01fe4b7c555399338c591079e50c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_414fac23103e9a918f2650504b299b0c59c01fe4b7c555399338c591079e50c6->leave($__internal_414fac23103e9a918f2650504b299b0c59c01fe4b7c555399338c591079e50c6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_050ff956f5136a18be4ce6993d102e457c20c731c66c5433f56b266ce5ba4504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050ff956f5136a18be4ce6993d102e457c20c731c66c5433f56b266ce5ba4504->enter($__internal_050ff956f5136a18be4ce6993d102e457c20c731c66c5433f56b266ce5ba4504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_050ff956f5136a18be4ce6993d102e457c20c731c66c5433f56b266ce5ba4504->leave($__internal_050ff956f5136a18be4ce6993d102e457c20c731c66c5433f56b266ce5ba4504_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
