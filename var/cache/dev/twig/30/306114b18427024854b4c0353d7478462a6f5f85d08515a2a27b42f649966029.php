<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f68b394fc368a560058a470a92923613d8f221fde23d758dfcc25d2604e74823 extends Twig_Template
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
        $__internal_29312867cf40777d906b0e3ba9a4dfcba7eb0bbb693ea141327d468a195e46fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29312867cf40777d906b0e3ba9a4dfcba7eb0bbb693ea141327d468a195e46fc->enter($__internal_29312867cf40777d906b0e3ba9a4dfcba7eb0bbb693ea141327d468a195e46fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_29312867cf40777d906b0e3ba9a4dfcba7eb0bbb693ea141327d468a195e46fc->leave($__internal_29312867cf40777d906b0e3ba9a4dfcba7eb0bbb693ea141327d468a195e46fc_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
