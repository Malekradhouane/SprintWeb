<?php

/* @Reclamation/Default/index.html.twig */
class __TwigTemplate_8df7445058188fa218fd8d34b868f2dcdaa1b3ca9cb2f1ff8857e3bee8ef5719 extends Twig_Template
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
        $__internal_fe04b2c8e05ae2f43e48242a5bc8687c13dc9f0b82b35c8f10222674b1820d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe04b2c8e05ae2f43e48242a5bc8687c13dc9f0b82b35c8f10222674b1820d3e->enter($__internal_fe04b2c8e05ae2f43e48242a5bc8687c13dc9f0b82b35c8f10222674b1820d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Reclamation/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fe04b2c8e05ae2f43e48242a5bc8687c13dc9f0b82b35c8f10222674b1820d3e->leave($__internal_fe04b2c8e05ae2f43e48242a5bc8687c13dc9f0b82b35c8f10222674b1820d3e_prof);

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
