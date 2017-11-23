<?php

/* @Reclamation/Default/index.html.twig */
class __TwigTemplate_5fa5026aa865a2933d8fc9d75ac999aa2439edf6c5757645590b087ff2033f28 extends Twig_Template
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
        $__internal_198fceb953a75c6ea3c6dd396443e785a3f22ce65460afaaf7e086b9c7766e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198fceb953a75c6ea3c6dd396443e785a3f22ce65460afaaf7e086b9c7766e6c->enter($__internal_198fceb953a75c6ea3c6dd396443e785a3f22ce65460afaaf7e086b9c7766e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Reclamation/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_198fceb953a75c6ea3c6dd396443e785a3f22ce65460afaaf7e086b9c7766e6c->leave($__internal_198fceb953a75c6ea3c6dd396443e785a3f22ce65460afaaf7e086b9c7766e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Default/index.html.twig";
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
", "@Reclamation/Default/index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\ReclamationBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
