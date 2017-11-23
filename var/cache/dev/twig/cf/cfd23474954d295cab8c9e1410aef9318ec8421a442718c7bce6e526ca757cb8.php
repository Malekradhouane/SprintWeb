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
        $__internal_622e5ea28ce1e046f4e9be002c66fa939894b7b9552f22fc390ed31b5468bad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622e5ea28ce1e046f4e9be002c66fa939894b7b9552f22fc390ed31b5468bad5->enter($__internal_622e5ea28ce1e046f4e9be002c66fa939894b7b9552f22fc390ed31b5468bad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_622e5ea28ce1e046f4e9be002c66fa939894b7b9552f22fc390ed31b5468bad5->leave($__internal_622e5ea28ce1e046f4e9be002c66fa939894b7b9552f22fc390ed31b5468bad5_prof);

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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
