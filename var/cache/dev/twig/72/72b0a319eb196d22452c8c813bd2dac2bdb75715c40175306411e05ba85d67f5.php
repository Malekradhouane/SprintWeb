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
        $__internal_31b255dfc8aa70647631daf3bf937070d5a01dcdb4e3911b8cec17d0a4674758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b255dfc8aa70647631daf3bf937070d5a01dcdb4e3911b8cec17d0a4674758->enter($__internal_31b255dfc8aa70647631daf3bf937070d5a01dcdb4e3911b8cec17d0a4674758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Modele:notification.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")));
        
        $__internal_31b255dfc8aa70647631daf3bf937070d5a01dcdb4e3911b8cec17d0a4674758->leave($__internal_31b255dfc8aa70647631daf3bf937070d5a01dcdb4e3911b8cec17d0a4674758_prof);

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
        return new Twig_Source("{{ dump(annonce) }}", "AnnonceBundle:Modele:notification.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AnnonceBundle/Resources/views/Modele/notification.html.twig");
    }
}
