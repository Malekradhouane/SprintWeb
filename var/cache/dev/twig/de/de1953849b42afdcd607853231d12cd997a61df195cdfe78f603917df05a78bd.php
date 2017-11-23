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
        $__internal_f45b361b5308dcf304c72aa8f040f4899c32181d48568a5b3c9c6f800e471453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45b361b5308dcf304c72aa8f040f4899c32181d48568a5b3c9c6f800e471453->enter($__internal_f45b361b5308dcf304c72aa8f040f4899c32181d48568a5b3c9c6f800e471453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f45b361b5308dcf304c72aa8f040f4899c32181d48568a5b3c9c6f800e471453->leave($__internal_f45b361b5308dcf304c72aa8f040f4899c32181d48568a5b3c9c6f800e471453_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b5c30d61c00a9d50e7ccf000401918958eeb358e9315e2d7990bb6f8c60294b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5c30d61c00a9d50e7ccf000401918958eeb358e9315e2d7990bb6f8c60294b->enter($__internal_5b5c30d61c00a9d50e7ccf000401918958eeb358e9315e2d7990bb6f8c60294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5b5c30d61c00a9d50e7ccf000401918958eeb358e9315e2d7990bb6f8c60294b->leave($__internal_5b5c30d61c00a9d50e7ccf000401918958eeb358e9315e2d7990bb6f8c60294b_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
