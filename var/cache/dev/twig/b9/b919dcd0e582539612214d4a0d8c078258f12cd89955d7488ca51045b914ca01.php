<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_643c74220dfacce68f06586b296128643b35aca45e31b66caf5b8e344df2e4cb extends Twig_Template
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
        $__internal_82cea7b68c4bbbc3c30e002f704ba096253591b6d3a0ce0f0857bcc967f37782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cea7b68c4bbbc3c30e002f704ba096253591b6d3a0ce0f0857bcc967f37782->enter($__internal_82cea7b68c4bbbc3c30e002f704ba096253591b6d3a0ce0f0857bcc967f37782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_82cea7b68c4bbbc3c30e002f704ba096253591b6d3a0ce0f0857bcc967f37782->leave($__internal_82cea7b68c4bbbc3c30e002f704ba096253591b6d3a0ce0f0857bcc967f37782_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
