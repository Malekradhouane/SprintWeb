<?php

/* KarhabtyBundle:Group:edit.html.twig */
class __TwigTemplate_d3b04384681c309b531720603eb6d0b52ae1b340725a73bbdc26be9a6e1f5b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Group:edit.html.twig", 1);
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
        $__internal_2136782e33e9cc0971546fb5e4cbfa6bb87c0b8740a9ab6a5f32f0a76b222c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2136782e33e9cc0971546fb5e4cbfa6bb87c0b8740a9ab6a5f32f0a76b222c08->enter($__internal_2136782e33e9cc0971546fb5e4cbfa6bb87c0b8740a9ab6a5f32f0a76b222c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2136782e33e9cc0971546fb5e4cbfa6bb87c0b8740a9ab6a5f32f0a76b222c08->leave($__internal_2136782e33e9cc0971546fb5e4cbfa6bb87c0b8740a9ab6a5f32f0a76b222c08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d38072ab7e92248f09bc3e8b8607af417ea2008faa1f5e0fe1233c88d84a06c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38072ab7e92248f09bc3e8b8607af417ea2008faa1f5e0fe1233c88d84a06c9->enter($__internal_d38072ab7e92248f09bc3e8b8607af417ea2008faa1f5e0fe1233c88d84a06c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "KarhabtyBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d38072ab7e92248f09bc3e8b8607af417ea2008faa1f5e0fe1233c88d84a06c9->leave($__internal_d38072ab7e92248f09bc3e8b8607af417ea2008faa1f5e0fe1233c88d84a06c9_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Group:edit.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Group/edit.html.twig");
    }
}
