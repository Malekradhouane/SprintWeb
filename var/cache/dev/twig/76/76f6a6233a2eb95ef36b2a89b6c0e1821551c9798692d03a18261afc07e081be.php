<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_df88dd89b9f4c6f05a513e1daf6f85e561cd125996e965c9473e520fed104369 extends Twig_Template
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
        $__internal_b2d92ebda06a59512b88c546ab05504393a4f7a8aaab9e654009b953cc9a7fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d92ebda06a59512b88c546ab05504393a4f7a8aaab9e654009b953cc9a7fc5->enter($__internal_b2d92ebda06a59512b88c546ab05504393a4f7a8aaab9e654009b953cc9a7fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b2d92ebda06a59512b88c546ab05504393a4f7a8aaab9e654009b953cc9a7fc5->leave($__internal_b2d92ebda06a59512b88c546ab05504393a4f7a8aaab9e654009b953cc9a7fc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}