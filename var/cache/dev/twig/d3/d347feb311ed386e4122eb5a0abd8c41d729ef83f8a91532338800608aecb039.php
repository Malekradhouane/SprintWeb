<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2b89a4cd2fe742f581c9c574751d891bd62209c72613fc8a2ef9f0dfa2302703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a8c26ae281e8ef5ce61cd50e403d371f8cdce32dc2626de2d8148b49eeed558f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c26ae281e8ef5ce61cd50e403d371f8cdce32dc2626de2d8148b49eeed558f->enter($__internal_a8c26ae281e8ef5ce61cd50e403d371f8cdce32dc2626de2d8148b49eeed558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c26ae281e8ef5ce61cd50e403d371f8cdce32dc2626de2d8148b49eeed558f->leave($__internal_a8c26ae281e8ef5ce61cd50e403d371f8cdce32dc2626de2d8148b49eeed558f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_69ccd238cf7c27354b22bb6d9ef115871239a7c976736c514deffb18fec62668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ccd238cf7c27354b22bb6d9ef115871239a7c976736c514deffb18fec62668->enter($__internal_69ccd238cf7c27354b22bb6d9ef115871239a7c976736c514deffb18fec62668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_69ccd238cf7c27354b22bb6d9ef115871239a7c976736c514deffb18fec62668->leave($__internal_69ccd238cf7c27354b22bb6d9ef115871239a7c976736c514deffb18fec62668_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b05128de2e5dbd0e72a9cd952fcc2d156e265ce1e16f3cc0d97a80a2c7bcb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b05128de2e5dbd0e72a9cd952fcc2d156e265ce1e16f3cc0d97a80a2c7bcb4f->enter($__internal_3b05128de2e5dbd0e72a9cd952fcc2d156e265ce1e16f3cc0d97a80a2c7bcb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b05128de2e5dbd0e72a9cd952fcc2d156e265ce1e16f3cc0d97a80a2c7bcb4f->leave($__internal_3b05128de2e5dbd0e72a9cd952fcc2d156e265ce1e16f3cc0d97a80a2c7bcb4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d51c805f429bb51e6bea80fce9d7106c8c505eedeb438197f117ad952036371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d51c805f429bb51e6bea80fce9d7106c8c505eedeb438197f117ad952036371->enter($__internal_8d51c805f429bb51e6bea80fce9d7106c8c505eedeb438197f117ad952036371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8d51c805f429bb51e6bea80fce9d7106c8c505eedeb438197f117ad952036371->leave($__internal_8d51c805f429bb51e6bea80fce9d7106c8c505eedeb438197f117ad952036371_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
