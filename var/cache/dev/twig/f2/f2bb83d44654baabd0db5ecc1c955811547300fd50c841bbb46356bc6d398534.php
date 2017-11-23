<?php

/* KarhabtyBundle:Group:new.html.twig */
class __TwigTemplate_eef729ceebd6c7557271433826c6f26cacfc0bde3088cc5bd75af1ce9d47a0cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "KarhabtyBundle:Group:new.html.twig", 1);
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
        $__internal_ffab82bd703920c8184a254520c51e2dc360491e963ce9262a4b2ede3b247928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffab82bd703920c8184a254520c51e2dc360491e963ce9262a4b2ede3b247928->enter($__internal_ffab82bd703920c8184a254520c51e2dc360491e963ce9262a4b2ede3b247928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffab82bd703920c8184a254520c51e2dc360491e963ce9262a4b2ede3b247928->leave($__internal_ffab82bd703920c8184a254520c51e2dc360491e963ce9262a4b2ede3b247928_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0797fea6322209760a04814ae9bb5fb2b093e2bba62eb8905517e9d86e8c222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0797fea6322209760a04814ae9bb5fb2b093e2bba62eb8905517e9d86e8c222->enter($__internal_c0797fea6322209760a04814ae9bb5fb2b093e2bba62eb8905517e9d86e8c222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "KarhabtyBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c0797fea6322209760a04814ae9bb5fb2b093e2bba62eb8905517e9d86e8c222->leave($__internal_c0797fea6322209760a04814ae9bb5fb2b093e2bba62eb8905517e9d86e8c222_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "KarhabtyBundle:Group:new.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Group/new.html.twig");
    }
}
