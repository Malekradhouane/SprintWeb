<?php

/* KarhabtyBundle:Resetting:request_content.html.twig */
class __TwigTemplate_d84d7fc95b4e0abb94c7ff470f288d8e7ff4f002e0946af2a0dac349495a5ac3 extends Twig_Template
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
        $__internal_f782d24a2af726ce360c5ee50f95c464f8857fd4051d274f414643860bc1e92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f782d24a2af726ce360c5ee50f95c464f8857fd4051d274f414643860bc1e92e->enter($__internal_f782d24a2af726ce360c5ee50f95c464f8857fd4051d274f414643860bc1e92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_f782d24a2af726ce360c5ee50f95c464f8857fd4051d274f414643860bc1e92e->leave($__internal_f782d24a2af726ce360c5ee50f95c464f8857fd4051d274f414643860bc1e92e_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  30 => 5,  25 => 3,  22 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "KarhabtyBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
