<?php

/* KarhabtyBundle:Default:index.html.twig */
class __TwigTemplate_004006deb4357bdcad0457e97607276b2e3015d2073a3da2c95790294afc73ea extends Twig_Template
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
        $__internal_690ddd7ba5556bef247ccacde1ca5539046848d5876d48f3e8607d3e543dfeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690ddd7ba5556bef247ccacde1ca5539046848d5876d48f3e8607d3e543dfeef->enter($__internal_690ddd7ba5556bef247ccacde1ca5539046848d5876d48f3e8607d3e543dfeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_690ddd7ba5556bef247ccacde1ca5539046848d5876d48f3e8607d3e543dfeef->leave($__internal_690ddd7ba5556bef247ccacde1ca5539046848d5876d48f3e8607d3e543dfeef_prof);

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
