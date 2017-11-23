<?php

/* @Annonce/Default/index.html.twig */
class __TwigTemplate_2eb452a8de1b7e739092e516a7f1503b24c094808ee91502d83cc6a40887fee4 extends Twig_Template
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
        $__internal_fe443b814bdcbc71ab948a2961f794fcf51ab90c89396ee5360a7c6c4bbb2419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe443b814bdcbc71ab948a2961f794fcf51ab90c89396ee5360a7c6c4bbb2419->enter($__internal_fe443b814bdcbc71ab948a2961f794fcf51ab90c89396ee5360a7c6c4bbb2419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fe443b814bdcbc71ab948a2961f794fcf51ab90c89396ee5360a7c6c4bbb2419->leave($__internal_fe443b814bdcbc71ab948a2961f794fcf51ab90c89396ee5360a7c6c4bbb2419_prof);

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
