<?php

/* AnnonceBundle:Modele:notification.html.twig */
class __TwigTemplate_6609f6204f944f91410876fbe269540768105e464c6c693f5c6dff5252359ec8 extends Twig_Template
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
        $__internal_96025a551f0c1f6d5e5c9bc5485531fe0e4aaf40af8ff5df6fe8d336ceb830fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96025a551f0c1f6d5e5c9bc5485531fe0e4aaf40af8ff5df6fe8d336ceb830fb->enter($__internal_96025a551f0c1f6d5e5c9bc5485531fe0e4aaf40af8ff5df6fe8d336ceb830fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Modele:notification.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")));
        
        $__internal_96025a551f0c1f6d5e5c9bc5485531fe0e4aaf40af8ff5df6fe8d336ceb830fb->leave($__internal_96025a551f0c1f6d5e5c9bc5485531fe0e4aaf40af8ff5df6fe8d336ceb830fb_prof);

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
