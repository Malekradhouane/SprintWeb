<?php

/* ReclamationBundle:Default:index.html.twig */
class __TwigTemplate_865145f5b6722ea38732c631d9df9df6349a5f3b933a67842d8f8089b63897ed extends Twig_Template
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
        $__internal_db0e22d2971a9bca0b6985808a94f5d5ec2e72d51b6d9d0f2b0cc8643cc8d031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0e22d2971a9bca0b6985808a94f5d5ec2e72d51b6d9d0f2b0cc8643cc8d031->enter($__internal_db0e22d2971a9bca0b6985808a94f5d5ec2e72d51b6d9d0f2b0cc8643cc8d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_db0e22d2971a9bca0b6985808a94f5d5ec2e72d51b6d9d0f2b0cc8643cc8d031->leave($__internal_db0e22d2971a9bca0b6985808a94f5d5ec2e72d51b6d9d0f2b0cc8643cc8d031_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Default:index.html.twig";
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
", "ReclamationBundle:Default:index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\ReclamationBundle/Resources/views/Default/index.html.twig");
    }
}
