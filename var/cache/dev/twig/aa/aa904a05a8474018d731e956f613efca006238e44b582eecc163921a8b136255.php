<?php

/* @Karhabty/Group/new.html.twig */
class __TwigTemplate_78a067c6fe066a246ad0537c7710b890c1f0c90007caa045f1a63044a169dd4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Group/new.html.twig", 1);
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
        $__internal_4f602dcddabbf8d989562b30fe495a1e898e9692a28159be84a1f1bca5616155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f602dcddabbf8d989562b30fe495a1e898e9692a28159be84a1f1bca5616155->enter($__internal_4f602dcddabbf8d989562b30fe495a1e898e9692a28159be84a1f1bca5616155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f602dcddabbf8d989562b30fe495a1e898e9692a28159be84a1f1bca5616155->leave($__internal_4f602dcddabbf8d989562b30fe495a1e898e9692a28159be84a1f1bca5616155_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f98087b3ddcfbfbb8b71b613fa7fe33b73a829acba51bbf6822eba159d963174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98087b3ddcfbfbb8b71b613fa7fe33b73a829acba51bbf6822eba159d963174->enter($__internal_f98087b3ddcfbfbb8b71b613fa7fe33b73a829acba51bbf6822eba159d963174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@Karhabty/Group/new.html.twig", 4)->display($context);
        
        $__internal_f98087b3ddcfbfbb8b71b613fa7fe33b73a829acba51bbf6822eba159d963174->leave($__internal_f98087b3ddcfbfbb8b71b613fa7fe33b73a829acba51bbf6822eba159d963174_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@Karhabty/Group/new.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
