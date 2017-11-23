<?php

/* ActualiteBundle:Default:index.html.twig */
class __TwigTemplate_e1c4af6e8397dc3a1b4db650ce0694c1255b83c047580f1b0917d93fc90a0ec7 extends Twig_Template
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
        $__internal_7e34974d280e8b4bd03193f1f5219dead1bb8c2e0692f0256ce75a01ce007c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e34974d280e8b4bd03193f1f5219dead1bb8c2e0692f0256ce75a01ce007c30->enter($__internal_7e34974d280e8b4bd03193f1f5219dead1bb8c2e0692f0256ce75a01ce007c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActualiteBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_7e34974d280e8b4bd03193f1f5219dead1bb8c2e0692f0256ce75a01ce007c30->leave($__internal_7e34974d280e8b4bd03193f1f5219dead1bb8c2e0692f0256ce75a01ce007c30_prof);

    }

    public function getTemplateName()
    {
        return "ActualiteBundle:Default:index.html.twig";
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
", "ActualiteBundle:Default:index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\ActualiteBundle/Resources/views/Default/index.html.twig");
    }
}
