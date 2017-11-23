<?php

/* @Karhabty/Resetting/request.html.twig */
class __TwigTemplate_0b0b606b24e2f54e1a568972dc0bab8867808167da6351c8b44f3726d44de710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ca8880ab417ace41c048d9a23160369e370e407ef86f061a604f4a744d2b18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca8880ab417ace41c048d9a23160369e370e407ef86f061a604f4a744d2b18a->enter($__internal_1ca8880ab417ace41c048d9a23160369e370e407ef86f061a604f4a744d2b18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca8880ab417ace41c048d9a23160369e370e407ef86f061a604f4a744d2b18a->leave($__internal_1ca8880ab417ace41c048d9a23160369e370e407ef86f061a604f4a744d2b18a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1676d72b44a4e41ea48ac9bad10f384b844c9f755605c7b5cc49b9311c2c3417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1676d72b44a4e41ea48ac9bad10f384b844c9f755605c7b5cc49b9311c2c3417->enter($__internal_1676d72b44a4e41ea48ac9bad10f384b844c9f755605c7b5cc49b9311c2c3417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@Karhabty/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_1676d72b44a4e41ea48ac9bad10f384b844c9f755605c7b5cc49b9311c2c3417->leave($__internal_1676d72b44a4e41ea48ac9bad10f384b844c9f755605c7b5cc49b9311c2c3417_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@Karhabty/Resetting/request.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
