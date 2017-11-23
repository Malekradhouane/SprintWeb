<?php

/* @Karhabty/Resetting/reset.html.twig */
class __TwigTemplate_6c92c92d9362536e03eac61b33f4c9f07576a844ebdf24ad41b3076276140ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Resetting/reset.html.twig", 1);
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
        $__internal_f4840d959aa76f35d3f62b581d36fd601d2ec8a79403b71c4a8d622aa9ca9d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4840d959aa76f35d3f62b581d36fd601d2ec8a79403b71c4a8d622aa9ca9d50->enter($__internal_f4840d959aa76f35d3f62b581d36fd601d2ec8a79403b71c4a8d622aa9ca9d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4840d959aa76f35d3f62b581d36fd601d2ec8a79403b71c4a8d622aa9ca9d50->leave($__internal_f4840d959aa76f35d3f62b581d36fd601d2ec8a79403b71c4a8d622aa9ca9d50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_185698accfba18f32de5e702b70c4137aa67633a33ab5087be0fdf3b877e079b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185698accfba18f32de5e702b70c4137aa67633a33ab5087be0fdf3b877e079b->enter($__internal_185698accfba18f32de5e702b70c4137aa67633a33ab5087be0fdf3b877e079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@Karhabty/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_185698accfba18f32de5e702b70c4137aa67633a33ab5087be0fdf3b877e079b->leave($__internal_185698accfba18f32de5e702b70c4137aa67633a33ab5087be0fdf3b877e079b_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Resetting/reset.html.twig";
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
", "@Karhabty/Resetting/reset.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
