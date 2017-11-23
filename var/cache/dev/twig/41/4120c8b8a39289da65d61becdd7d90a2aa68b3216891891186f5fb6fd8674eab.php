<?php

/* @Karhabty/Registration/check_email.html.twig */
class __TwigTemplate_34011fc624797059003b65bd377953c12b329fda5ea640393d6ae5870260852e extends Twig_Template
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
        $__internal_1ca818b5606a786725fb692785c70653cbe978015e4d7c8c6ded7ef055e5b263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca818b5606a786725fb692785c70653cbe978015e4d7c8c6ded7ef055e5b263->enter($__internal_1ca818b5606a786725fb692785c70653cbe978015e4d7c8c6ded7ef055e5b263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca818b5606a786725fb692785c70653cbe978015e4d7c8c6ded7ef055e5b263->leave($__internal_1ca818b5606a786725fb692785c70653cbe978015e4d7c8c6ded7ef055e5b263_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56e6994cf5156132224ebe9160afab49f3d34bb815cb01d032f6bb850c7aefa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e6994cf5156132224ebe9160afab49f3d34bb815cb01d032f6bb850c7aefa0->enter($__internal_56e6994cf5156132224ebe9160afab49f3d34bb815cb01d032f6bb850c7aefa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_56e6994cf5156132224ebe9160afab49f3d34bb815cb01d032f6bb850c7aefa0->leave($__internal_56e6994cf5156132224ebe9160afab49f3d34bb815cb01d032f6bb850c7aefa0_prof);

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
