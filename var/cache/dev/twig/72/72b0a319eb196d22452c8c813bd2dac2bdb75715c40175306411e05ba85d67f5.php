<?php

/* AnnonceBundle:Modele:notification.html.twig */
class __TwigTemplate_5dbd1e087eb2a348f8d138fcff4bcb28bb22bbbf4e86d3d705e9f80c050162f5 extends Twig_Template
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
        $__internal_69cd06932c27d87fdd9d4794945174ee54abcfc6053f2480ca94a7b967d81064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cd06932c27d87fdd9d4794945174ee54abcfc6053f2480ca94a7b967d81064->enter($__internal_69cd06932c27d87fdd9d4794945174ee54abcfc6053f2480ca94a7b967d81064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Modele:notification.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")));
        
        $__internal_69cd06932c27d87fdd9d4794945174ee54abcfc6053f2480ca94a7b967d81064->leave($__internal_69cd06932c27d87fdd9d4794945174ee54abcfc6053f2480ca94a7b967d81064_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Modele:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ dump(annonce) }}", "AnnonceBundle:Modele:notification.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AnnonceBundle/Resources/views/Modele/notification.html.twig");
    }
}
