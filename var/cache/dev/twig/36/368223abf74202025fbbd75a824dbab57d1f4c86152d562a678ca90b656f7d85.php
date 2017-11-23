<?php

/* AnnonceBundle:Default:index.html.twig */
class __TwigTemplate_69b29f944778d5e0f35ddfc113696bb76c8788cf7b611cead80cd6e4775a4f51 extends Twig_Template
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
        $__internal_787d9fac22b65429e29105f7083d15d77667f72f86fe6a671c3a938c577d5e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787d9fac22b65429e29105f7083d15d77667f72f86fe6a671c3a938c577d5e2d->enter($__internal_787d9fac22b65429e29105f7083d15d77667f72f86fe6a671c3a938c577d5e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_787d9fac22b65429e29105f7083d15d77667f72f86fe6a671c3a938c577d5e2d->leave($__internal_787d9fac22b65429e29105f7083d15d77667f72f86fe6a671c3a938c577d5e2d_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Default:index.html.twig";
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
", "AnnonceBundle:Default:index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AnnonceBundle/Resources/views/Default/index.html.twig");
    }
}
