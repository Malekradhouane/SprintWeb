<?php

/* KarhabtyBundle:Group:show.html.twig */
class __TwigTemplate_40c82ced673b0164f3a4ed9f8a291cf7523ff8756fd7a661a1b500f3915ed1cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Group:show.html.twig", 1);
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
        $__internal_1ba65dbe556581ac9b1fc267ce9e03320467f002b01ebd2a247876092c714f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba65dbe556581ac9b1fc267ce9e03320467f002b01ebd2a247876092c714f40->enter($__internal_1ba65dbe556581ac9b1fc267ce9e03320467f002b01ebd2a247876092c714f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ba65dbe556581ac9b1fc267ce9e03320467f002b01ebd2a247876092c714f40->leave($__internal_1ba65dbe556581ac9b1fc267ce9e03320467f002b01ebd2a247876092c714f40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7151074f78da115bf7d9b7c127ae07169aed716514087fe2ae3dc8a61386eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7151074f78da115bf7d9b7c127ae07169aed716514087fe2ae3dc8a61386eac->enter($__internal_c7151074f78da115bf7d9b7c127ae07169aed716514087fe2ae3dc8a61386eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "KarhabtyBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c7151074f78da115bf7d9b7c127ae07169aed716514087fe2ae3dc8a61386eac->leave($__internal_c7151074f78da115bf7d9b7c127ae07169aed716514087fe2ae3dc8a61386eac_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Group:show.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Group/show.html.twig");
    }
}
