<?php

/* @Karhabty/Group/show.html.twig */
class __TwigTemplate_a1d4c490910d21f206305450103de0905124015be57b8c7204a1650d211db567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Group/show.html.twig", 1);
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
        $__internal_f80d40f4bfd12026d339b3e588d6891f31c30097148958dcad14ca8fc207cebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80d40f4bfd12026d339b3e588d6891f31c30097148958dcad14ca8fc207cebf->enter($__internal_f80d40f4bfd12026d339b3e588d6891f31c30097148958dcad14ca8fc207cebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80d40f4bfd12026d339b3e588d6891f31c30097148958dcad14ca8fc207cebf->leave($__internal_f80d40f4bfd12026d339b3e588d6891f31c30097148958dcad14ca8fc207cebf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d76139dbfb6bdb7e3fb4ae7c6451f2fa41baa9685b34c5cd590f788863da7d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76139dbfb6bdb7e3fb4ae7c6451f2fa41baa9685b34c5cd590f788863da7d88->enter($__internal_d76139dbfb6bdb7e3fb4ae7c6451f2fa41baa9685b34c5cd590f788863da7d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@Karhabty/Group/show.html.twig", 4)->display($context);
        
        $__internal_d76139dbfb6bdb7e3fb4ae7c6451f2fa41baa9685b34c5cd590f788863da7d88->leave($__internal_d76139dbfb6bdb7e3fb4ae7c6451f2fa41baa9685b34c5cd590f788863da7d88_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Group/show.html.twig";
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
", "@Karhabty/Group/show.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
