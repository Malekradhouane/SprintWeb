<?php

/* @Karhabty/Security/login.html.twig */
class __TwigTemplate_ba7b5c6e7e77ee7cad486bfcd29fd74d09d4085ea557f0a1a26a75829fa7f246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65e9520228e2993fd5cbf83816923cecfd0cbaf1ea53d3fe2892d67879fdb7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e9520228e2993fd5cbf83816923cecfd0cbaf1ea53d3fe2892d67879fdb7df->enter($__internal_65e9520228e2993fd5cbf83816923cecfd0cbaf1ea53d3fe2892d67879fdb7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Security/login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_65e9520228e2993fd5cbf83816923cecfd0cbaf1ea53d3fe2892d67879fdb7df->leave($__internal_65e9520228e2993fd5cbf83816923cecfd0cbaf1ea53d3fe2892d67879fdb7df_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5573d530acb943bb37b1d12d0e70bd05919bb80d62e49b7789e0837f537faa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5573d530acb943bb37b1d12d0e70bd05919bb80d62e49b7789e0837f537faa5->enter($__internal_a5573d530acb943bb37b1d12d0e70bd05919bb80d62e49b7789e0837f537faa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a5573d530acb943bb37b1d12d0e70bd05919bb80d62e49b7789e0837f537faa5->leave($__internal_a5573d530acb943bb37b1d12d0e70bd05919bb80d62e49b7789e0837f537faa5_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@Karhabty/Security/login.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
