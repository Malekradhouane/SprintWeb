<?php

/* KarhabtyBundle:Profile:show.html.twig */
class __TwigTemplate_646d8eae9b6a5264891d1ca91dc0a038ab2b710e77a8afbf8bb5358b12fb8e61 extends Twig_Template
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
        $__internal_aa0076941a516e156a149a18abe2a58ebe9416c442d3c1088ec1173e1d6b6620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0076941a516e156a149a18abe2a58ebe9416c442d3c1088ec1173e1d6b6620->enter($__internal_aa0076941a516e156a149a18abe2a58ebe9416c442d3c1088ec1173e1d6b6620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa0076941a516e156a149a18abe2a58ebe9416c442d3c1088ec1173e1d6b6620->leave($__internal_aa0076941a516e156a149a18abe2a58ebe9416c442d3c1088ec1173e1d6b6620_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a9d2d5275fd47d3587b450cbf2f540bbd4d00de60933d8b50b3a010109a2fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9d2d5275fd47d3587b450cbf2f540bbd4d00de60933d8b50b3a010109a2fb4->enter($__internal_5a9d2d5275fd47d3587b450cbf2f540bbd4d00de60933d8b50b3a010109a2fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "KarhabtyBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5a9d2d5275fd47d3587b450cbf2f540bbd4d00de60933d8b50b3a010109a2fb4->leave($__internal_5a9d2d5275fd47d3587b450cbf2f540bbd4d00de60933d8b50b3a010109a2fb4_prof);

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
", "KarhabtyBundle:Profile:show.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Profile/show.html.twig");
    }
}
