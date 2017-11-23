<?php

/* @Actualite/Default/index.html.twig */
class __TwigTemplate_1b5958960c8224e5d358bbb478c8d807c6a09f7a070026bb28b669c03946c5d9 extends Twig_Template
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
        $__internal_2f5685065cbe987e1b7cc0d589a5e72665b8ee7ad0b209823d761b16f0e0cbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5685065cbe987e1b7cc0d589a5e72665b8ee7ad0b209823d761b16f0e0cbd8->enter($__internal_2f5685065cbe987e1b7cc0d589a5e72665b8ee7ad0b209823d761b16f0e0cbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Actualite/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2f5685065cbe987e1b7cc0d589a5e72665b8ee7ad0b209823d761b16f0e0cbd8->leave($__internal_2f5685065cbe987e1b7cc0d589a5e72665b8ee7ad0b209823d761b16f0e0cbd8_prof);

    }

    public function getTemplateName()
    {
        return "@Actualite/Default/index.html.twig";
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
", "@Actualite/Default/index.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\ActualiteBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
