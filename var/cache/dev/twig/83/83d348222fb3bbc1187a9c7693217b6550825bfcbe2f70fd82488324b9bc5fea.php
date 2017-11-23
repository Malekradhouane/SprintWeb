<?php

/* @AutoEcole/Default/index.html.twig */
class __TwigTemplate_5049da7685666966f2807050177ac4ca5769986a84259e92f71d4697da0cfd38 extends Twig_Template
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
        $__internal_fa4a3963585b8f9a0b65074e34e82f5300083785395494e99c86023ddee4cf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4a3963585b8f9a0b65074e34e82f5300083785395494e99c86023ddee4cf47->enter($__internal_fa4a3963585b8f9a0b65074e34e82f5300083785395494e99c86023ddee4cf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AutoEcole/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fa4a3963585b8f9a0b65074e34e82f5300083785395494e99c86023ddee4cf47->leave($__internal_fa4a3963585b8f9a0b65074e34e82f5300083785395494e99c86023ddee4cf47_prof);

    }

    public function getTemplateName()
    {
        return "@AutoEcole/Default/index.html.twig";
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
", "@AutoEcole/Default/index.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AutoEcoleBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
