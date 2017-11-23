<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_441dc6eb7967e2af6b8eff72ca8c1d27994a382f4704948ac3373b5d27a7af73 extends Twig_Template
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
        $__internal_03164b372a1e51c460b05d7b1d3e06f16fda515bbdaeb85f722c8b3ba96cedfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03164b372a1e51c460b05d7b1d3e06f16fda515bbdaeb85f722c8b3ba96cedfc->enter($__internal_03164b372a1e51c460b05d7b1d3e06f16fda515bbdaeb85f722c8b3ba96cedfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_03164b372a1e51c460b05d7b1d3e06f16fda515bbdaeb85f722c8b3ba96cedfc->leave($__internal_03164b372a1e51c460b05d7b1d3e06f16fda515bbdaeb85f722c8b3ba96cedfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
