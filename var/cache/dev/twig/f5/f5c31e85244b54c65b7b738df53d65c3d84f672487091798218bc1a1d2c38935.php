<?php

/* KarhabtyBundle:Resetting:request.html.twig */
class __TwigTemplate_edd2072cd4dd2c56fa0e11587ee61430e08b6ed955a5305ebd7d7a082896c4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c805a678e760aa0d3d0d14013f13e51161427ed2714038349ddde5668c3b78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c805a678e760aa0d3d0d14013f13e51161427ed2714038349ddde5668c3b78e->enter($__internal_1c805a678e760aa0d3d0d14013f13e51161427ed2714038349ddde5668c3b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c805a678e760aa0d3d0d14013f13e51161427ed2714038349ddde5668c3b78e->leave($__internal_1c805a678e760aa0d3d0d14013f13e51161427ed2714038349ddde5668c3b78e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5bcc3534645fcd302daa9f98a5c6949fdc3e7b03beb7c8b2d6877165f0a9d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bcc3534645fcd302daa9f98a5c6949fdc3e7b03beb7c8b2d6877165f0a9d81->enter($__internal_e5bcc3534645fcd302daa9f98a5c6949fdc3e7b03beb7c8b2d6877165f0a9d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "KarhabtyBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e5bcc3534645fcd302daa9f98a5c6949fdc3e7b03beb7c8b2d6877165f0a9d81->leave($__internal_e5bcc3534645fcd302daa9f98a5c6949fdc3e7b03beb7c8b2d6877165f0a9d81_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Resetting/request.html.twig");
    }
}
