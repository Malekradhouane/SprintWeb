<?php

/* ReclamationBundle:Default:index.html.twig */
class __TwigTemplate_2ed870afac9f6a847e3530d8867d40e55086c72f6a675e2186387e41657537b7 extends Twig_Template
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
        $__internal_ca14cf690156532839e6baaea84c1d6a8210913dcfb04f551f669054b6dd70d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca14cf690156532839e6baaea84c1d6a8210913dcfb04f551f669054b6dd70d5->enter($__internal_ca14cf690156532839e6baaea84c1d6a8210913dcfb04f551f669054b6dd70d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ca14cf690156532839e6baaea84c1d6a8210913dcfb04f551f669054b6dd70d5->leave($__internal_ca14cf690156532839e6baaea84c1d6a8210913dcfb04f551f669054b6dd70d5_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Default:index.html.twig";
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
", "ReclamationBundle:Default:index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\ReclamationBundle/Resources/views/Default/index.html.twig");
    }
}
