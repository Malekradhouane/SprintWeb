<?php

/* KarhabtyBundle:Default:index.html.twig */
class __TwigTemplate_da57cbc1c027b933ffd3355306ad287badc384c2907fa7c94d1a9807efbbd51b extends Twig_Template
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
        $__internal_5eda58340e7e5fe6801bcfaf539d189ee4d55fd22876c0575eab7d891b2ae1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eda58340e7e5fe6801bcfaf539d189ee4d55fd22876c0575eab7d891b2ae1d1->enter($__internal_5eda58340e7e5fe6801bcfaf539d189ee4d55fd22876c0575eab7d891b2ae1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_5eda58340e7e5fe6801bcfaf539d189ee4d55fd22876c0575eab7d891b2ae1d1->leave($__internal_5eda58340e7e5fe6801bcfaf539d189ee4d55fd22876c0575eab7d891b2ae1d1_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Default:index.html.twig";
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
", "KarhabtyBundle:Default:index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Default/index.html.twig");
    }
}
