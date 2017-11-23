<?php

/* KarhabtyBundle:Resetting:reset.html.twig */
class __TwigTemplate_c623a46aea654a316d9edb80518218a7649cb9dc14c2bd44d4a6a289e3b4859e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Resetting:reset.html.twig", 1);
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
        $__internal_2c9cd4d599721584cd97bca78b882d1083fdd49518178257009be569eb98a184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9cd4d599721584cd97bca78b882d1083fdd49518178257009be569eb98a184->enter($__internal_2c9cd4d599721584cd97bca78b882d1083fdd49518178257009be569eb98a184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9cd4d599721584cd97bca78b882d1083fdd49518178257009be569eb98a184->leave($__internal_2c9cd4d599721584cd97bca78b882d1083fdd49518178257009be569eb98a184_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5cb0a254b929b05299ca5108cf6db3583633577059ab23703df96674ead1dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cb0a254b929b05299ca5108cf6db3583633577059ab23703df96674ead1dd5->enter($__internal_f5cb0a254b929b05299ca5108cf6db3583633577059ab23703df96674ead1dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "KarhabtyBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f5cb0a254b929b05299ca5108cf6db3583633577059ab23703df96674ead1dd5->leave($__internal_f5cb0a254b929b05299ca5108cf6db3583633577059ab23703df96674ead1dd5_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Resetting/reset.html.twig");
    }
}
