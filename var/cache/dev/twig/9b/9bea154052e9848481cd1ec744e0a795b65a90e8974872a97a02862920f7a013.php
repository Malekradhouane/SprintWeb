<?php

/* @Karhabty/Security/login.html.twig */
class __TwigTemplate_1984c596e8bdbb6a70e62f8e8fc3e16ce57c1a66373e9c71c096a2c7b8b6e28e extends Twig_Template
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
        $__internal_100882e0afec6c44089c2a0f2bd2578f4f51c336539a2eef2a5ca330ea82d34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100882e0afec6c44089c2a0f2bd2578f4f51c336539a2eef2a5ca330ea82d34a->enter($__internal_100882e0afec6c44089c2a0f2bd2578f4f51c336539a2eef2a5ca330ea82d34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Security/login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_100882e0afec6c44089c2a0f2bd2578f4f51c336539a2eef2a5ca330ea82d34a->leave($__internal_100882e0afec6c44089c2a0f2bd2578f4f51c336539a2eef2a5ca330ea82d34a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ec83840bfe765713bb5fa79ea6cb0d3c9e26cbf8c263c63c596a1ae48e9ec73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec83840bfe765713bb5fa79ea6cb0d3c9e26cbf8c263c63c596a1ae48e9ec73->enter($__internal_4ec83840bfe765713bb5fa79ea6cb0d3c9e26cbf8c263c63c596a1ae48e9ec73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_4ec83840bfe765713bb5fa79ea6cb0d3c9e26cbf8c263c63c596a1ae48e9ec73->leave($__internal_4ec83840bfe765713bb5fa79ea6cb0d3c9e26cbf8c263c63c596a1ae48e9ec73_prof);

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
