<?php

/* KarhabtyBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9f65005090e17d629f8f1f22c32175f71f921fb2fdb6b89fcafec7fca831bb13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_bb5af04aed2b4218e8781639ec9f0c2dbf6213564978165ec7ce4315792e15d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5af04aed2b4218e8781639ec9f0c2dbf6213564978165ec7ce4315792e15d2->enter($__internal_bb5af04aed2b4218e8781639ec9f0c2dbf6213564978165ec7ce4315792e15d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb5af04aed2b4218e8781639ec9f0c2dbf6213564978165ec7ce4315792e15d2->leave($__internal_bb5af04aed2b4218e8781639ec9f0c2dbf6213564978165ec7ce4315792e15d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bc5c8feec82649123dacb60f2b0eda1c80170ab398aee245d8a7b9a9c92e8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc5c8feec82649123dacb60f2b0eda1c80170ab398aee245d8a7b9a9c92e8c2->enter($__internal_5bc5c8feec82649123dacb60f2b0eda1c80170ab398aee245d8a7b9a9c92e8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "KarhabtyBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5bc5c8feec82649123dacb60f2b0eda1c80170ab398aee245d8a7b9a9c92e8c2->leave($__internal_5bc5c8feec82649123dacb60f2b0eda1c80170ab398aee245d8a7b9a9c92e8c2_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
