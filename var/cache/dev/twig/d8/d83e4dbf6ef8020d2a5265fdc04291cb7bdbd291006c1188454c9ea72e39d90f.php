<?php

/* @Actualite/Default/index.html.twig */
class __TwigTemplate_db811dd0acb4b30a962a823a19f75e3d5573c6de776fb549a28cca9998c7d866 extends Twig_Template
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
        $__internal_80469e93eb79bca47240ef2b18f274465411b9ba074dd55a95279ec3c263864a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80469e93eb79bca47240ef2b18f274465411b9ba074dd55a95279ec3c263864a->enter($__internal_80469e93eb79bca47240ef2b18f274465411b9ba074dd55a95279ec3c263864a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Actualite/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_80469e93eb79bca47240ef2b18f274465411b9ba074dd55a95279ec3c263864a->leave($__internal_80469e93eb79bca47240ef2b18f274465411b9ba074dd55a95279ec3c263864a_prof);

    }

    public function getTemplateName()
    {
        return "@Actualite/Default/index.html.twig";
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
", "@Actualite/Default/index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\ActualiteBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
