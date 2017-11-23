<?php

/* KarhabtyBundle:Security:login.html.twig */
class __TwigTemplate_8e9a7889671ab52269ab0ab1fd3aa788922839586b3a299871a953116fc03480 extends Twig_Template
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
        $__internal_e85bf4817d888a27e3bf049a7742a423dc887a86293569e7faa8d7627ba1c523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85bf4817d888a27e3bf049a7742a423dc887a86293569e7faa8d7627ba1c523->enter($__internal_e85bf4817d888a27e3bf049a7742a423dc887a86293569e7faa8d7627ba1c523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Security:login.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e85bf4817d888a27e3bf049a7742a423dc887a86293569e7faa8d7627ba1c523->leave($__internal_e85bf4817d888a27e3bf049a7742a423dc887a86293569e7faa8d7627ba1c523_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0344979b9cc4652e160e26ad8098697cd28986c6681e3e5d2bed82e4d57dd721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0344979b9cc4652e160e26ad8098697cd28986c6681e3e5d2bed82e4d57dd721->enter($__internal_0344979b9cc4652e160e26ad8098697cd28986c6681e3e5d2bed82e4d57dd721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0344979b9cc4652e160e26ad8098697cd28986c6681e3e5d2bed82e4d57dd721->leave($__internal_0344979b9cc4652e160e26ad8098697cd28986c6681e3e5d2bed82e4d57dd721_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Security:login.html.twig";
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
", "KarhabtyBundle:Security:login.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Security/login.html.twig");
    }
}
