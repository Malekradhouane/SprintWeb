<?php

/* @Annonce/Modele/notification.html.twig */
class __TwigTemplate_679ab7dd4c0f6234c32041b6af49540cd2f5a2dcf11b6e832df7062ea963ac14 extends Twig_Template
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
        $__internal_38b3048d0e6455a88bdce6d8ad37691631399560bb5b55ca8772329004d5d468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b3048d0e6455a88bdce6d8ad37691631399560bb5b55ca8772329004d5d468->enter($__internal_38b3048d0e6455a88bdce6d8ad37691631399560bb5b55ca8772329004d5d468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/Modele/notification.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")));
        
        $__internal_38b3048d0e6455a88bdce6d8ad37691631399560bb5b55ca8772329004d5d468->leave($__internal_38b3048d0e6455a88bdce6d8ad37691631399560bb5b55ca8772329004d5d468_prof);

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
        return new Twig_Source("{{ dump(annonce) }}", "@Annonce/Modele/notification.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AnnonceBundle\\Resources\\views\\Modele\\notification.html.twig");
    }
}
