<?php

/* ActualiteBundle:Default:index.html.twig */
class __TwigTemplate_2a87938aeb1c0d5fd1966554ab54b9a9855e4da6f0342cfa333bed174e30a1d8 extends Twig_Template
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
        $__internal_ce409b132d9d6831a6e28111f5ba873a8ee95b8df795afe4a77c57502ad8fb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce409b132d9d6831a6e28111f5ba873a8ee95b8df795afe4a77c57502ad8fb54->enter($__internal_ce409b132d9d6831a6e28111f5ba873a8ee95b8df795afe4a77c57502ad8fb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ActualiteBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ce409b132d9d6831a6e28111f5ba873a8ee95b8df795afe4a77c57502ad8fb54->leave($__internal_ce409b132d9d6831a6e28111f5ba873a8ee95b8df795afe4a77c57502ad8fb54_prof);

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
