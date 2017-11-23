<?php

/* KarhabtyBundle:Profile:show.html.twig */
class __TwigTemplate_0bb78d7e1d14318f80ae517947ed1d24eed5d0a78f0c7d2778f40090b0edaeb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Profile:show.html.twig", 1);
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
        $__internal_e24d978fa238d2acfe886e0ef69e1b54bfedd0afb38712cbddf971bb887a2f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24d978fa238d2acfe886e0ef69e1b54bfedd0afb38712cbddf971bb887a2f40->enter($__internal_e24d978fa238d2acfe886e0ef69e1b54bfedd0afb38712cbddf971bb887a2f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e24d978fa238d2acfe886e0ef69e1b54bfedd0afb38712cbddf971bb887a2f40->leave($__internal_e24d978fa238d2acfe886e0ef69e1b54bfedd0afb38712cbddf971bb887a2f40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f498a632328ed19134c81894e3fe4e4b5642762f9b348963643e48b66999c5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f498a632328ed19134c81894e3fe4e4b5642762f9b348963643e48b66999c5a4->enter($__internal_f498a632328ed19134c81894e3fe4e4b5642762f9b348963643e48b66999c5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "KarhabtyBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f498a632328ed19134c81894e3fe4e4b5642762f9b348963643e48b66999c5a4->leave($__internal_f498a632328ed19134c81894e3fe4e4b5642762f9b348963643e48b66999c5a4_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Profile:show.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Profile/show.html.twig");
    }
}
