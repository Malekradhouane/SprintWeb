<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_78068966aaf10f997edb3312985e7aec77d2a08b159a16fe4559c4e444948821 extends Twig_Template
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
        $__internal_7c00a8fe5e445a3997bd42c64a8491705b331fe3a386017e40184de97ae57689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c00a8fe5e445a3997bd42c64a8491705b331fe3a386017e40184de97ae57689->enter($__internal_7c00a8fe5e445a3997bd42c64a8491705b331fe3a386017e40184de97ae57689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_7c00a8fe5e445a3997bd42c64a8491705b331fe3a386017e40184de97ae57689->leave($__internal_7c00a8fe5e445a3997bd42c64a8491705b331fe3a386017e40184de97ae57689_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_babbe93e21d937daf0ed7b96de48d860fa456b5bf019e97cda617f3a127a5ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babbe93e21d937daf0ed7b96de48d860fa456b5bf019e97cda617f3a127a5ba7->enter($__internal_babbe93e21d937daf0ed7b96de48d860fa456b5bf019e97cda617f3a127a5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_babbe93e21d937daf0ed7b96de48d860fa456b5bf019e97cda617f3a127a5ba7->leave($__internal_babbe93e21d937daf0ed7b96de48d860fa456b5bf019e97cda617f3a127a5ba7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
