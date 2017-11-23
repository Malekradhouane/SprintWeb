<?php

/* @Karhabty/Resetting/request.html.twig */
class __TwigTemplate_0b0b606b24e2f54e1a568972dc0bab8867808167da6351c8b44f3726d44de710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Resetting/request.html.twig", 1);
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
        $__internal_2d9eea6391c85d4c5d1d933f83e74eefdd404fc0b3d5a2fc7075210b52995234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9eea6391c85d4c5d1d933f83e74eefdd404fc0b3d5a2fc7075210b52995234->enter($__internal_2d9eea6391c85d4c5d1d933f83e74eefdd404fc0b3d5a2fc7075210b52995234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d9eea6391c85d4c5d1d933f83e74eefdd404fc0b3d5a2fc7075210b52995234->leave($__internal_2d9eea6391c85d4c5d1d933f83e74eefdd404fc0b3d5a2fc7075210b52995234_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90d7cda799568a65e86ffbf041c5e36b8da9b077474213d3e36d92a328a6dcd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d7cda799568a65e86ffbf041c5e36b8da9b077474213d3e36d92a328a6dcd6->enter($__internal_90d7cda799568a65e86ffbf041c5e36b8da9b077474213d3e36d92a328a6dcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@Karhabty/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_90d7cda799568a65e86ffbf041c5e36b8da9b077474213d3e36d92a328a6dcd6->leave($__internal_90d7cda799568a65e86ffbf041c5e36b8da9b077474213d3e36d92a328a6dcd6_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Resetting/request.html.twig";
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
", "@Karhabty/Resetting/request.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
