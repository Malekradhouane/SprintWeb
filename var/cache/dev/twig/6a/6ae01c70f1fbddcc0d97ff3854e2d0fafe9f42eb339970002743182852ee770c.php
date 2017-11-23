<?php

/* @Karhabty/Default/index.html.twig */
class __TwigTemplate_847ba3ca2e633522b63b2e02249fba7c8f64ce43115f14977b4ff4bc26da076d extends Twig_Template
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
        $__internal_82efa7ff606d8f27db92047d6ff567d117e0c1a3b1b9584149ee37e0b8fc0573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82efa7ff606d8f27db92047d6ff567d117e0c1a3b1b9584149ee37e0b8fc0573->enter($__internal_82efa7ff606d8f27db92047d6ff567d117e0c1a3b1b9584149ee37e0b8fc0573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_82efa7ff606d8f27db92047d6ff567d117e0c1a3b1b9584149ee37e0b8fc0573->leave($__internal_82efa7ff606d8f27db92047d6ff567d117e0c1a3b1b9584149ee37e0b8fc0573_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Default/index.html.twig";
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
", "@Karhabty/Default/index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
