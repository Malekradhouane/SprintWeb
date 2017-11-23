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
        $__internal_564df76435ba32c19b0a64d9cb932daaf66a36a5f6cd21e7be7570c2ed41aae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564df76435ba32c19b0a64d9cb932daaf66a36a5f6cd21e7be7570c2ed41aae6->enter($__internal_564df76435ba32c19b0a64d9cb932daaf66a36a5f6cd21e7be7570c2ed41aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564df76435ba32c19b0a64d9cb932daaf66a36a5f6cd21e7be7570c2ed41aae6->leave($__internal_564df76435ba32c19b0a64d9cb932daaf66a36a5f6cd21e7be7570c2ed41aae6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0f2a6aba5956f8006d9f67eaf61f11c35d19c5edd30b36a98bc58e7f77f8ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f2a6aba5956f8006d9f67eaf61f11c35d19c5edd30b36a98bc58e7f77f8ce8->enter($__internal_a0f2a6aba5956f8006d9f67eaf61f11c35d19c5edd30b36a98bc58e7f77f8ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@Karhabty/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_a0f2a6aba5956f8006d9f67eaf61f11c35d19c5edd30b36a98bc58e7f77f8ce8->leave($__internal_a0f2a6aba5956f8006d9f67eaf61f11c35d19c5edd30b36a98bc58e7f77f8ce8_prof);

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
", "@Karhabty/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
