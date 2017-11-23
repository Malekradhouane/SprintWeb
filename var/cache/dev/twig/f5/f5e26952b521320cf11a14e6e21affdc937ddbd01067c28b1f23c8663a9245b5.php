<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3e66333e5a8d7210a8442ee91a9da52876d3b998a1c112cf2ff30bb0b4996449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b12a481b9ab1d71f8b94d06e93b51ed7b663dfe5050219e6634c53da67a32829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12a481b9ab1d71f8b94d06e93b51ed7b663dfe5050219e6634c53da67a32829->enter($__internal_b12a481b9ab1d71f8b94d06e93b51ed7b663dfe5050219e6634c53da67a32829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b12a481b9ab1d71f8b94d06e93b51ed7b663dfe5050219e6634c53da67a32829->leave($__internal_b12a481b9ab1d71f8b94d06e93b51ed7b663dfe5050219e6634c53da67a32829_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7b6254525cd456173161b10e58ab4afae7d5018bda61d8a9d9e43b8ac3006449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6254525cd456173161b10e58ab4afae7d5018bda61d8a9d9e43b8ac3006449->enter($__internal_7b6254525cd456173161b10e58ab4afae7d5018bda61d8a9d9e43b8ac3006449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7b6254525cd456173161b10e58ab4afae7d5018bda61d8a9d9e43b8ac3006449->leave($__internal_7b6254525cd456173161b10e58ab4afae7d5018bda61d8a9d9e43b8ac3006449_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
