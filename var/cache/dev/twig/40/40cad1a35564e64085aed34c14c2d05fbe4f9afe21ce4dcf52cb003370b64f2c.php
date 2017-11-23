<?php

/* KarhabtyBundle:Registration:check_email.html.twig */
class __TwigTemplate_7531814d082e211dbc2fcb1dec7760be5898521f357d80f9ac198559215034b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Registration:check_email.html.twig", 1);
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
        $__internal_d6e69d1cc50c2cbe8091e5b9def49b77f1bf35e7443167f935cd53e32f6aeeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e69d1cc50c2cbe8091e5b9def49b77f1bf35e7443167f935cd53e32f6aeeac->enter($__internal_d6e69d1cc50c2cbe8091e5b9def49b77f1bf35e7443167f935cd53e32f6aeeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e69d1cc50c2cbe8091e5b9def49b77f1bf35e7443167f935cd53e32f6aeeac->leave($__internal_d6e69d1cc50c2cbe8091e5b9def49b77f1bf35e7443167f935cd53e32f6aeeac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b3e563c81904275060d06d6afc159cf5fd5161435e5409e840f022706213fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3e563c81904275060d06d6afc159cf5fd5161435e5409e840f022706213fa5->enter($__internal_5b3e563c81904275060d06d6afc159cf5fd5161435e5409e840f022706213fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5b3e563c81904275060d06d6afc159cf5fd5161435e5409e840f022706213fa5->leave($__internal_5b3e563c81904275060d06d6afc159cf5fd5161435e5409e840f022706213fa5_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "KarhabtyBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Registration/check_email.html.twig");
    }
}
