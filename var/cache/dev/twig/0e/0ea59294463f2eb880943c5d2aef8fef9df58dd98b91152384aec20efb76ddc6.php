<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_eb200570c47ccf1a0f0ce93e4c6e4e1938af0d6eff6814c905baa8eeb7447775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ac2d9a58f846e71013659f856db6d7223b13ae65eaba4b12071414105df32ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac2d9a58f846e71013659f856db6d7223b13ae65eaba4b12071414105df32ac->enter($__internal_8ac2d9a58f846e71013659f856db6d7223b13ae65eaba4b12071414105df32ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac2d9a58f846e71013659f856db6d7223b13ae65eaba4b12071414105df32ac->leave($__internal_8ac2d9a58f846e71013659f856db6d7223b13ae65eaba4b12071414105df32ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4119ddc77856f260b561ad587d32da0ca3cd602e6ee2898e30e0962007980f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4119ddc77856f260b561ad587d32da0ca3cd602e6ee2898e30e0962007980f7f->enter($__internal_4119ddc77856f260b561ad587d32da0ca3cd602e6ee2898e30e0962007980f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4119ddc77856f260b561ad587d32da0ca3cd602e6ee2898e30e0962007980f7f->leave($__internal_4119ddc77856f260b561ad587d32da0ca3cd602e6ee2898e30e0962007980f7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76a7a45336b531ee0b21d65855fd5f97b06589835a1ad29e46ffa4024aeea920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a7a45336b531ee0b21d65855fd5f97b06589835a1ad29e46ffa4024aeea920->enter($__internal_76a7a45336b531ee0b21d65855fd5f97b06589835a1ad29e46ffa4024aeea920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76a7a45336b531ee0b21d65855fd5f97b06589835a1ad29e46ffa4024aeea920->leave($__internal_76a7a45336b531ee0b21d65855fd5f97b06589835a1ad29e46ffa4024aeea920_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af3741b263568473b8cd9ec5c0e3c9f82755b369632a8881907bd4f4c95e1cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3741b263568473b8cd9ec5c0e3c9f82755b369632a8881907bd4f4c95e1cc7->enter($__internal_af3741b263568473b8cd9ec5c0e3c9f82755b369632a8881907bd4f4c95e1cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af3741b263568473b8cd9ec5c0e3c9f82755b369632a8881907bd4f4c95e1cc7->leave($__internal_af3741b263568473b8cd9ec5c0e3c9f82755b369632a8881907bd4f4c95e1cc7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
