<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_12e0acacc8cd38084c77444354c8bd950858c7e997c155c9b21b0405fba4da41 extends Twig_Template
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
        $__internal_f9717100c7e9c02b6d952548882412ad700a060dd2e455ba37879fc6a006e645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9717100c7e9c02b6d952548882412ad700a060dd2e455ba37879fc6a006e645->enter($__internal_f9717100c7e9c02b6d952548882412ad700a060dd2e455ba37879fc6a006e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f9717100c7e9c02b6d952548882412ad700a060dd2e455ba37879fc6a006e645->leave($__internal_f9717100c7e9c02b6d952548882412ad700a060dd2e455ba37879fc6a006e645_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8ddee8bb22010dfeda0d0e095bcb135d7f6c0f192346b61ca3078eb0af349e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddee8bb22010dfeda0d0e095bcb135d7f6c0f192346b61ca3078eb0af349e2f->enter($__internal_8ddee8bb22010dfeda0d0e095bcb135d7f6c0f192346b61ca3078eb0af349e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8ddee8bb22010dfeda0d0e095bcb135d7f6c0f192346b61ca3078eb0af349e2f->leave($__internal_8ddee8bb22010dfeda0d0e095bcb135d7f6c0f192346b61ca3078eb0af349e2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
