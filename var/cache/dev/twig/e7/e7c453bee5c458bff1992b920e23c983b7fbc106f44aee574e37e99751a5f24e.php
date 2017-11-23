<?php

/* @Karhabty/Group/list.html.twig */
class __TwigTemplate_e05d8ea0ce0837c3d93ad0d0e488c748cc5ea987448347741d8ca92a0036b0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@Karhabty/Group/list.html.twig", 1);
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
        $__internal_48df6e1c369fbb6bae1c450c7e27e8067a86f59405845c1116a61f2081119964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48df6e1c369fbb6bae1c450c7e27e8067a86f59405845c1116a61f2081119964->enter($__internal_48df6e1c369fbb6bae1c450c7e27e8067a86f59405845c1116a61f2081119964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48df6e1c369fbb6bae1c450c7e27e8067a86f59405845c1116a61f2081119964->leave($__internal_48df6e1c369fbb6bae1c450c7e27e8067a86f59405845c1116a61f2081119964_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9689b9e3b816431cd64d1ec5313a8080a6ef62af843b45ca4b6e8e7e765995f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9689b9e3b816431cd64d1ec5313a8080a6ef62af843b45ca4b6e8e7e765995f->enter($__internal_c9689b9e3b816431cd64d1ec5313a8080a6ef62af843b45ca4b6e8e7e765995f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@Karhabty/Group/list.html.twig", 4)->display($context);
        
        $__internal_c9689b9e3b816431cd64d1ec5313a8080a6ef62af843b45ca4b6e8e7e765995f->leave($__internal_c9689b9e3b816431cd64d1ec5313a8080a6ef62af843b45ca4b6e8e7e765995f_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@Karhabty/Group/list.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
