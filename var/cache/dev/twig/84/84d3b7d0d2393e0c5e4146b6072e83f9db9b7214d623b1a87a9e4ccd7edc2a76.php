<?php

/* @Annonce/Default/index.html.twig */
class __TwigTemplate_7a97833cefab1dab881a8fdf732e871f98c568142eea029bd63c97d6272560b3 extends Twig_Template
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
        $__internal_cc38d9cac969660410ea0bc26da37345a9f40021f91f501da977e860e21f355c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc38d9cac969660410ea0bc26da37345a9f40021f91f501da977e860e21f355c->enter($__internal_cc38d9cac969660410ea0bc26da37345a9f40021f91f501da977e860e21f355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_cc38d9cac969660410ea0bc26da37345a9f40021f91f501da977e860e21f355c->leave($__internal_cc38d9cac969660410ea0bc26da37345a9f40021f91f501da977e860e21f355c_prof);

    }

    public function getTemplateName()
    {
        return "@Annonce/Default/index.html.twig";
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
", "@Annonce/Default/index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AnnonceBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
