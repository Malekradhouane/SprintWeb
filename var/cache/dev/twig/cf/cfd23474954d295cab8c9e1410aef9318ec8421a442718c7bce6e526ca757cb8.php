<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7d9a55c344686bc9bf201c92e4020cd040a6992932915103490748450e7a30cb extends Twig_Template
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
        $__internal_1e501c3af4748e0e1ea562d1ff64a86f7a2e66ab59a00635ea3024925ee52040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e501c3af4748e0e1ea562d1ff64a86f7a2e66ab59a00635ea3024925ee52040->enter($__internal_1e501c3af4748e0e1ea562d1ff64a86f7a2e66ab59a00635ea3024925ee52040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1e501c3af4748e0e1ea562d1ff64a86f7a2e66ab59a00635ea3024925ee52040->leave($__internal_1e501c3af4748e0e1ea562d1ff64a86f7a2e66ab59a00635ea3024925ee52040_prof);

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
