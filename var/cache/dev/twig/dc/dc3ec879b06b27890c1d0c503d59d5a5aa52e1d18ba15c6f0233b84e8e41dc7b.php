<?php

/* @Karhabty/Registration/check_email.html.twig */
class __TwigTemplate_cda6e0e611c1c2e856b6ae909a8d3f2777d7e995b38f7f2c2b3dab2f4786ede9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Registration/check_email.html.twig", 1);
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
        $__internal_a8abf5f12c50eaa196762b92740672df76376231c158d64f2054a08b2f43081a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8abf5f12c50eaa196762b92740672df76376231c158d64f2054a08b2f43081a->enter($__internal_a8abf5f12c50eaa196762b92740672df76376231c158d64f2054a08b2f43081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8abf5f12c50eaa196762b92740672df76376231c158d64f2054a08b2f43081a->leave($__internal_a8abf5f12c50eaa196762b92740672df76376231c158d64f2054a08b2f43081a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cceb435ff1fa0b0bbcc1081e0a885ed82a86d95d8e275f8f2db6b8e06a36aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cceb435ff1fa0b0bbcc1081e0a885ed82a86d95d8e275f8f2db6b8e06a36aba->enter($__internal_9cceb435ff1fa0b0bbcc1081e0a885ed82a86d95d8e275f8f2db6b8e06a36aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9cceb435ff1fa0b0bbcc1081e0a885ed82a86d95d8e275f8f2db6b8e06a36aba->leave($__internal_9cceb435ff1fa0b0bbcc1081e0a885ed82a86d95d8e275f8f2db6b8e06a36aba_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Registration/check_email.html.twig";
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
", "@Karhabty/Registration/check_email.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
