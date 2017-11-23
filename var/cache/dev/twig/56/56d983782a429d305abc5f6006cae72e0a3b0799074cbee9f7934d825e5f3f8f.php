<?php

/* AutoEcoleBundle:Default:index.html.twig */
class __TwigTemplate_01bb5ff328101564b0c52b41c40bcf37d0e33f3b01cf5d475d836167acf03f75 extends Twig_Template
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
        $__internal_6f3515423de9f7f9b173d796de84e40b2fd6a52f164ff4241d528d8f0b86f003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3515423de9f7f9b173d796de84e40b2fd6a52f164ff4241d528d8f0b86f003->enter($__internal_6f3515423de9f7f9b173d796de84e40b2fd6a52f164ff4241d528d8f0b86f003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_6f3515423de9f7f9b173d796de84e40b2fd6a52f164ff4241d528d8f0b86f003->leave($__internal_6f3515423de9f7f9b173d796de84e40b2fd6a52f164ff4241d528d8f0b86f003_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "AutoEcoleBundle:Default:index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle/Resources/views/Default/index.html.twig");
    }
}
