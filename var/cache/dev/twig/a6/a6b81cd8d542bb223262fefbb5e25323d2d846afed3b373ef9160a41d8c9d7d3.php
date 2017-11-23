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
        $__internal_a58b99002d9fa5c0490df3f62a994eb12d92d0b6bf7da3b97054bdeb5c8ce79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58b99002d9fa5c0490df3f62a994eb12d92d0b6bf7da3b97054bdeb5c8ce79f->enter($__internal_a58b99002d9fa5c0490df3f62a994eb12d92d0b6bf7da3b97054bdeb5c8ce79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a58b99002d9fa5c0490df3f62a994eb12d92d0b6bf7da3b97054bdeb5c8ce79f->leave($__internal_a58b99002d9fa5c0490df3f62a994eb12d92d0b6bf7da3b97054bdeb5c8ce79f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bd12c7aad49f5fdefe6bbc22f34f5737e0ca1f371f0797ffb87cfdfea5634f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd12c7aad49f5fdefe6bbc22f34f5737e0ca1f371f0797ffb87cfdfea5634f9->enter($__internal_0bd12c7aad49f5fdefe6bbc22f34f5737e0ca1f371f0797ffb87cfdfea5634f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "KarhabtyBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0bd12c7aad49f5fdefe6bbc22f34f5737e0ca1f371f0797ffb87cfdfea5634f9->leave($__internal_0bd12c7aad49f5fdefe6bbc22f34f5737e0ca1f371f0797ffb87cfdfea5634f9_prof);

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
", "KarhabtyBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Profile/edit.html.twig");
    }
}
