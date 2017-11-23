<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_300e3df01507501dc1e1d7669772f0acece8664044d22d993cd94dd8352ead9b extends Twig_Template
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
        $__internal_f1c22a3ac7c8dc0c19b9e277b1d9a8cf2a25986aa3cd48b1ddd7989ffba4cb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c22a3ac7c8dc0c19b9e277b1d9a8cf2a25986aa3cd48b1ddd7989ffba4cb3e->enter($__internal_f1c22a3ac7c8dc0c19b9e277b1d9a8cf2a25986aa3cd48b1ddd7989ffba4cb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f1c22a3ac7c8dc0c19b9e277b1d9a8cf2a25986aa3cd48b1ddd7989ffba4cb3e->leave($__internal_f1c22a3ac7c8dc0c19b9e277b1d9a8cf2a25986aa3cd48b1ddd7989ffba4cb3e_prof);

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
