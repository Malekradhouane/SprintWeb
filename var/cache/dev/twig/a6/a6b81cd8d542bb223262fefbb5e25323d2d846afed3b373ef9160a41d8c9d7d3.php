<?php

/* KarhabtyBundle:Profile:edit.html.twig */
class __TwigTemplate_c583e66042becd5c51577ec9dc4c5cf2e8578d158e04a325b50f237db986b72c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Profile:edit.html.twig", 1);
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
        $__internal_523780b5bb3693ab3b603929c9bd09ff57532f40df87a39de333a910ea12443f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523780b5bb3693ab3b603929c9bd09ff57532f40df87a39de333a910ea12443f->enter($__internal_523780b5bb3693ab3b603929c9bd09ff57532f40df87a39de333a910ea12443f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523780b5bb3693ab3b603929c9bd09ff57532f40df87a39de333a910ea12443f->leave($__internal_523780b5bb3693ab3b603929c9bd09ff57532f40df87a39de333a910ea12443f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adbef48388b3592c06f8b8061e2e288878bb0e6dbf95988ccf60013ab9666059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbef48388b3592c06f8b8061e2e288878bb0e6dbf95988ccf60013ab9666059->enter($__internal_adbef48388b3592c06f8b8061e2e288878bb0e6dbf95988ccf60013ab9666059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "KarhabtyBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_adbef48388b3592c06f8b8061e2e288878bb0e6dbf95988ccf60013ab9666059->leave($__internal_adbef48388b3592c06f8b8061e2e288878bb0e6dbf95988ccf60013ab9666059_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Profile/edit.html.twig");
    }
}
