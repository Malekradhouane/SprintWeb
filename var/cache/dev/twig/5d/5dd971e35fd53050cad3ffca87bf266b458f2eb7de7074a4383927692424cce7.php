<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c1096e2507042c3cf7d596ea1d3a6de2ca60212c54a0ed7602e87886bc9e4610 extends Twig_Template
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
        $__internal_c21010d4e40c80955c8e6458ccddaddd3c30e994a696bbd8043f4f7b8d6d09d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21010d4e40c80955c8e6458ccddaddd3c30e994a696bbd8043f4f7b8d6d09d8->enter($__internal_c21010d4e40c80955c8e6458ccddaddd3c30e994a696bbd8043f4f7b8d6d09d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c21010d4e40c80955c8e6458ccddaddd3c30e994a696bbd8043f4f7b8d6d09d8->leave($__internal_c21010d4e40c80955c8e6458ccddaddd3c30e994a696bbd8043f4f7b8d6d09d8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf2f90d3ceaa3ad8e768cdedade8e613a90eee3ca24bbd70818a5cd58fc6dfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2f90d3ceaa3ad8e768cdedade8e613a90eee3ca24bbd70818a5cd58fc6dfd8->enter($__internal_cf2f90d3ceaa3ad8e768cdedade8e613a90eee3ca24bbd70818a5cd58fc6dfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_cf2f90d3ceaa3ad8e768cdedade8e613a90eee3ca24bbd70818a5cd58fc6dfd8->leave($__internal_cf2f90d3ceaa3ad8e768cdedade8e613a90eee3ca24bbd70818a5cd58fc6dfd8_prof);

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
