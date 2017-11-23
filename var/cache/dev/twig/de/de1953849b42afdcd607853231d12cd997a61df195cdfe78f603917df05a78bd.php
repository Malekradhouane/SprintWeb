<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_99416ef515bcaf29c91a6f75af70fa5291d767fa5a5c4e71865437fe8902ddee extends Twig_Template
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
        $__internal_9e6631d8fe8a3b03abc00d3d56ce6cd6ebbd3ee8458693053bbdd00c7f2095d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6631d8fe8a3b03abc00d3d56ce6cd6ebbd3ee8458693053bbdd00c7f2095d8->enter($__internal_9e6631d8fe8a3b03abc00d3d56ce6cd6ebbd3ee8458693053bbdd00c7f2095d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9e6631d8fe8a3b03abc00d3d56ce6cd6ebbd3ee8458693053bbdd00c7f2095d8->leave($__internal_9e6631d8fe8a3b03abc00d3d56ce6cd6ebbd3ee8458693053bbdd00c7f2095d8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_faae7f935a3c6cd239b362ad9962b54da2dcbb68b941caccc446673be8ee13d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faae7f935a3c6cd239b362ad9962b54da2dcbb68b941caccc446673be8ee13d2->enter($__internal_faae7f935a3c6cd239b362ad9962b54da2dcbb68b941caccc446673be8ee13d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_faae7f935a3c6cd239b362ad9962b54da2dcbb68b941caccc446673be8ee13d2->leave($__internal_faae7f935a3c6cd239b362ad9962b54da2dcbb68b941caccc446673be8ee13d2_prof);

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
