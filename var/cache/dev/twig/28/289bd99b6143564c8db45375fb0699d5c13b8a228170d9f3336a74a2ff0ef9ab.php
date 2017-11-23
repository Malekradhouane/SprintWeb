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
        $__internal_1003f537a24d48884691d1b51e129b8f564ad54d7c44f699e4055168a9b9dfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1003f537a24d48884691d1b51e129b8f564ad54d7c44f699e4055168a9b9dfc4->enter($__internal_1003f537a24d48884691d1b51e129b8f564ad54d7c44f699e4055168a9b9dfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1003f537a24d48884691d1b51e129b8f564ad54d7c44f699e4055168a9b9dfc4->leave($__internal_1003f537a24d48884691d1b51e129b8f564ad54d7c44f699e4055168a9b9dfc4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5b4bef126ba9bd018e9c2919ddc48aed96b4ef368a4dc43beac1d8475de7b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b4bef126ba9bd018e9c2919ddc48aed96b4ef368a4dc43beac1d8475de7b13->enter($__internal_a5b4bef126ba9bd018e9c2919ddc48aed96b4ef368a4dc43beac1d8475de7b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a5b4bef126ba9bd018e9c2919ddc48aed96b4ef368a4dc43beac1d8475de7b13->leave($__internal_a5b4bef126ba9bd018e9c2919ddc48aed96b4ef368a4dc43beac1d8475de7b13_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
