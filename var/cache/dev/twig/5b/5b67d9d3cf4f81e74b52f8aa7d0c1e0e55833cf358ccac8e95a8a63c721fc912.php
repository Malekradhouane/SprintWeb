<?php

/* @Annonce/Modele/notification.html.twig */
class __TwigTemplate_6247cc374df1564206e75642264d583b93f1bebf8c596e0494b385e2369ac164 extends Twig_Template
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
        $__internal_048463a870f869b93f1624c91f3b500a6a97aefa5832cdefcb508716fb033f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048463a870f869b93f1624c91f3b500a6a97aefa5832cdefcb508716fb033f3d->enter($__internal_048463a870f869b93f1624c91f3b500a6a97aefa5832cdefcb508716fb033f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/Modele/notification.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")));
        
        $__internal_048463a870f869b93f1624c91f3b500a6a97aefa5832cdefcb508716fb033f3d->leave($__internal_048463a870f869b93f1624c91f3b500a6a97aefa5832cdefcb508716fb033f3d_prof);

    }

    public function getTemplateName()
    {
        return "@Annonce/Modele/notification.html.twig";
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
        return new Twig_Source("{{ dump(annonce) }}", "@Annonce/Modele/notification.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AnnonceBundle\\Resources\\views\\Modele\\notification.html.twig");
    }
}
