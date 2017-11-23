<?php

/* @Karhabty/Resetting/request.html.twig */
class __TwigTemplate_698a68aea383594442655694f540043a45b5b7b2239175e0370913ac599fcd80 extends Twig_Template
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
        $__internal_7d2e9cf047cea79735c6187e5cb6deeeb356bf4fc729cdae8f832b5899904da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2e9cf047cea79735c6187e5cb6deeeb356bf4fc729cdae8f832b5899904da6->enter($__internal_7d2e9cf047cea79735c6187e5cb6deeeb356bf4fc729cdae8f832b5899904da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d2e9cf047cea79735c6187e5cb6deeeb356bf4fc729cdae8f832b5899904da6->leave($__internal_7d2e9cf047cea79735c6187e5cb6deeeb356bf4fc729cdae8f832b5899904da6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed97352ab328f029d343195f2729d9d1169a1429489ac976389597f6d6490ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed97352ab328f029d343195f2729d9d1169a1429489ac976389597f6d6490ecb->enter($__internal_ed97352ab328f029d343195f2729d9d1169a1429489ac976389597f6d6490ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@Karhabty/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ed97352ab328f029d343195f2729d9d1169a1429489ac976389597f6d6490ecb->leave($__internal_ed97352ab328f029d343195f2729d9d1169a1429489ac976389597f6d6490ecb_prof);

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
