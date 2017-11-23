<?php

/* @Karhabty/Resetting/email.txt.twig */
class __TwigTemplate_ab73f4f213b9816e0fa70f33d62c5b3f7a07ccdc2a5ac544826a5670eb07c960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98fa6bb23f95c2fe03f28102e6b89791f156e64941b69a69d5df85531c9f9420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fa6bb23f95c2fe03f28102e6b89791f156e64941b69a69d5df85531c9f9420->enter($__internal_98fa6bb23f95c2fe03f28102e6b89791f156e64941b69a69d5df85531c9f9420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_98fa6bb23f95c2fe03f28102e6b89791f156e64941b69a69d5df85531c9f9420->leave($__internal_98fa6bb23f95c2fe03f28102e6b89791f156e64941b69a69d5df85531c9f9420_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1b634527550dc754ed7486fd6677e63fa0faa0436a1e845f766f54e01acac9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b634527550dc754ed7486fd6677e63fa0faa0436a1e845f766f54e01acac9d2->enter($__internal_1b634527550dc754ed7486fd6677e63fa0faa0436a1e845f766f54e01acac9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_1b634527550dc754ed7486fd6677e63fa0faa0436a1e845f766f54e01acac9d2->leave($__internal_1b634527550dc754ed7486fd6677e63fa0faa0436a1e845f766f54e01acac9d2_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f3b33c5e560aab7f860802a26ab1dedb03407e5d78a720708a8cba81f730df8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b33c5e560aab7f860802a26ab1dedb03407e5d78a720708a8cba81f730df8e->enter($__internal_f3b33c5e560aab7f860802a26ab1dedb03407e5d78a720708a8cba81f730df8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f3b33c5e560aab7f860802a26ab1dedb03407e5d78a720708a8cba81f730df8e->leave($__internal_f3b33c5e560aab7f860802a26ab1dedb03407e5d78a720708a8cba81f730df8e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3395792b241bfb72d7c420782c9090f310a5ad52abd485cebd6dbe6325a6088f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3395792b241bfb72d7c420782c9090f310a5ad52abd485cebd6dbe6325a6088f->enter($__internal_3395792b241bfb72d7c420782c9090f310a5ad52abd485cebd6dbe6325a6088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3395792b241bfb72d7c420782c9090f310a5ad52abd485cebd6dbe6325a6088f->leave($__internal_3395792b241bfb72d7c420782c9090f310a5ad52abd485cebd6dbe6325a6088f_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@Karhabty/Resetting/email.txt.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
