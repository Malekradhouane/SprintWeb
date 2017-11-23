<?php

/* @Karhabty/Profile/show.html.twig */
class __TwigTemplate_4f10f3e311ae779902ae6fca0df7545f052107a136597b0303a5bb6e3ffc7be9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Profile/show.html.twig", 1);
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
        $__internal_738c5a9522f6153e311dc35d9369000ec9193ac6ba94bb5a4d4d0b9ea1642ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738c5a9522f6153e311dc35d9369000ec9193ac6ba94bb5a4d4d0b9ea1642ad7->enter($__internal_738c5a9522f6153e311dc35d9369000ec9193ac6ba94bb5a4d4d0b9ea1642ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738c5a9522f6153e311dc35d9369000ec9193ac6ba94bb5a4d4d0b9ea1642ad7->leave($__internal_738c5a9522f6153e311dc35d9369000ec9193ac6ba94bb5a4d4d0b9ea1642ad7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e9b5a9eb33878a365defab2cc2487e2e8330a3561914ee15d49abd058bd9893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9b5a9eb33878a365defab2cc2487e2e8330a3561914ee15d49abd058bd9893->enter($__internal_0e9b5a9eb33878a365defab2cc2487e2e8330a3561914ee15d49abd058bd9893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@Karhabty/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0e9b5a9eb33878a365defab2cc2487e2e8330a3561914ee15d49abd058bd9893->leave($__internal_0e9b5a9eb33878a365defab2cc2487e2e8330a3561914ee15d49abd058bd9893_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Profile/show.html.twig";
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
", "@Karhabty/Profile/show.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
