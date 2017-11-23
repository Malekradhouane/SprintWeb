<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c40e0d553773b118ad0999c3dd59aa1df07b26cb1009e28ce5c3965fb57a829f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e25949c0275a1a1cc929ed2bb294484e76f66ec3b5a9ad5737d67d4fc5d9fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e25949c0275a1a1cc929ed2bb294484e76f66ec3b5a9ad5737d67d4fc5d9fb8->enter($__internal_0e25949c0275a1a1cc929ed2bb294484e76f66ec3b5a9ad5737d67d4fc5d9fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e25949c0275a1a1cc929ed2bb294484e76f66ec3b5a9ad5737d67d4fc5d9fb8->leave($__internal_0e25949c0275a1a1cc929ed2bb294484e76f66ec3b5a9ad5737d67d4fc5d9fb8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a57b6fe0c4891c13d922071330f3b8b2c63653dd847f2d413be2d608ab3f81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a57b6fe0c4891c13d922071330f3b8b2c63653dd847f2d413be2d608ab3f81d->enter($__internal_5a57b6fe0c4891c13d922071330f3b8b2c63653dd847f2d413be2d608ab3f81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5a57b6fe0c4891c13d922071330f3b8b2c63653dd847f2d413be2d608ab3f81d->leave($__internal_5a57b6fe0c4891c13d922071330f3b8b2c63653dd847f2d413be2d608ab3f81d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ff3284735351b1f3e814dc8e5b30cf00a8ee011d76f30e096fe4e540c5b9293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff3284735351b1f3e814dc8e5b30cf00a8ee011d76f30e096fe4e540c5b9293->enter($__internal_7ff3284735351b1f3e814dc8e5b30cf00a8ee011d76f30e096fe4e540c5b9293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7ff3284735351b1f3e814dc8e5b30cf00a8ee011d76f30e096fe4e540c5b9293->leave($__internal_7ff3284735351b1f3e814dc8e5b30cf00a8ee011d76f30e096fe4e540c5b9293_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
