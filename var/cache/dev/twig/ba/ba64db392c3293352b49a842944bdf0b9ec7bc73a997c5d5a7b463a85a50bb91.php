<?php

/* @Karhabty/Default/index.html.twig */
class __TwigTemplate_101a02fa8045458cfc58d105998082c1b198a45adcaa0db0176e9f3a5ea7c1db extends Twig_Template
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
        $__internal_c8b4f0d2f52475fbdff5abad350f5cfa7a2a605c9d10dc0cdb0a4fa049db75e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b4f0d2f52475fbdff5abad350f5cfa7a2a605c9d10dc0cdb0a4fa049db75e5->enter($__internal_c8b4f0d2f52475fbdff5abad350f5cfa7a2a605c9d10dc0cdb0a4fa049db75e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_c8b4f0d2f52475fbdff5abad350f5cfa7a2a605c9d10dc0cdb0a4fa049db75e5->leave($__internal_c8b4f0d2f52475fbdff5abad350f5cfa7a2a605c9d10dc0cdb0a4fa049db75e5_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Default/index.html.twig";
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
", "@Karhabty/Default/index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
