<?php

/* @Karhabty/Profile/edit_content.html.twig */
class __TwigTemplate_ecc0cbd395c6e0f86c794176efb2b2abf4b65c9909b3c6d0b8152d3170ba687a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_853c1e5fe3ffd711c7f076ca6b7c8faec684ea34f32859d44ef2db8db91f243e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853c1e5fe3ffd711c7f076ca6b7c8faec684ea34f32859d44ef2db8db91f243e->enter($__internal_853c1e5fe3ffd711c7f076ca6b7c8faec684ea34f32859d44ef2db8db91f243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_853c1e5fe3ffd711c7f076ca6b7c8faec684ea34f32859d44ef2db8db91f243e->leave($__internal_853c1e5fe3ffd711c7f076ca6b7c8faec684ea34f32859d44ef2db8db91f243e_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@Karhabty/Profile/edit_content.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Profile\\edit_content.html.twig");
    }
}
