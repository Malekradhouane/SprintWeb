<?php

/* @Karhabty/ChangePassword/change_password.html.twig */
class __TwigTemplate_4fe4b92b4d89846087b3f808d4fa9eb50a962d22d9bf654f1b678c15eb214e94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/ChangePassword/change_password.html.twig", 1);
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
        $__internal_ccd965de653a346c4f0a23e2171baf7a700ba0647100a5d737ce85b4664db7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd965de653a346c4f0a23e2171baf7a700ba0647100a5d737ce85b4664db7eb->enter($__internal_ccd965de653a346c4f0a23e2171baf7a700ba0647100a5d737ce85b4664db7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd965de653a346c4f0a23e2171baf7a700ba0647100a5d737ce85b4664db7eb->leave($__internal_ccd965de653a346c4f0a23e2171baf7a700ba0647100a5d737ce85b4664db7eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83487c7cf89d7399923480c97c3b0f4663f3d0d44dec940badeb9f3f37015209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83487c7cf89d7399923480c97c3b0f4663f3d0d44dec940badeb9f3f37015209->enter($__internal_83487c7cf89d7399923480c97c3b0f4663f3d0d44dec940badeb9f3f37015209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@Karhabty/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_83487c7cf89d7399923480c97c3b0f4663f3d0d44dec940badeb9f3f37015209->leave($__internal_83487c7cf89d7399923480c97c3b0f4663f3d0d44dec940badeb9f3f37015209_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/ChangePassword/change_password.html.twig";
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
", "@Karhabty/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
