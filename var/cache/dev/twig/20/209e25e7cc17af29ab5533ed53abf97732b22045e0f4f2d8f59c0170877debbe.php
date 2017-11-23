<?php

/* KarhabtyBundle:Group:edit.html.twig */
class __TwigTemplate_2422d9138b764cfd827f920994c095ac43efdd4b3b1d34cf87bddae3bea26777 extends Twig_Template
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
        $__internal_04db9fbebfcc0fd93c9120cbcb0234cdb62cc289e9b144a42e2b6077ed3a5438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04db9fbebfcc0fd93c9120cbcb0234cdb62cc289e9b144a42e2b6077ed3a5438->enter($__internal_04db9fbebfcc0fd93c9120cbcb0234cdb62cc289e9b144a42e2b6077ed3a5438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04db9fbebfcc0fd93c9120cbcb0234cdb62cc289e9b144a42e2b6077ed3a5438->leave($__internal_04db9fbebfcc0fd93c9120cbcb0234cdb62cc289e9b144a42e2b6077ed3a5438_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ac1320e46819d95a1286194a70b34fe3eb1df3374315c5597077e11cc3ce4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac1320e46819d95a1286194a70b34fe3eb1df3374315c5597077e11cc3ce4a6->enter($__internal_3ac1320e46819d95a1286194a70b34fe3eb1df3374315c5597077e11cc3ce4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "KarhabtyBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3ac1320e46819d95a1286194a70b34fe3eb1df3374315c5597077e11cc3ce4a6->leave($__internal_3ac1320e46819d95a1286194a70b34fe3eb1df3374315c5597077e11cc3ce4a6_prof);

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
", "KarhabtyBundle:Group:edit.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Group/edit.html.twig");
    }
}
