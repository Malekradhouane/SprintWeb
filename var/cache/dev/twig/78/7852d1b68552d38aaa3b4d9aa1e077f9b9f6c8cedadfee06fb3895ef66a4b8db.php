<?php

/* @Karhabty/ChangePassword/change_password.html.twig */
class __TwigTemplate_487f7c2c456a98845199873554f64286b78e877cf0ac1e1b837f8dc255353362 extends Twig_Template
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
        $__internal_9b14abd0457c704621f0e5349e18d7712140092fd04153b68f94839001e30d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b14abd0457c704621f0e5349e18d7712140092fd04153b68f94839001e30d7f->enter($__internal_9b14abd0457c704621f0e5349e18d7712140092fd04153b68f94839001e30d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b14abd0457c704621f0e5349e18d7712140092fd04153b68f94839001e30d7f->leave($__internal_9b14abd0457c704621f0e5349e18d7712140092fd04153b68f94839001e30d7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3c946dd93d20a6376ed21c15fea9df53553d28a1b398dd8177437912d48cc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c946dd93d20a6376ed21c15fea9df53553d28a1b398dd8177437912d48cc52->enter($__internal_b3c946dd93d20a6376ed21c15fea9df53553d28a1b398dd8177437912d48cc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@Karhabty/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_b3c946dd93d20a6376ed21c15fea9df53553d28a1b398dd8177437912d48cc52->leave($__internal_b3c946dd93d20a6376ed21c15fea9df53553d28a1b398dd8177437912d48cc52_prof);

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
