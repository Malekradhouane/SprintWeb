<?php

/* AnnonceBundle:Default:index.html.twig */
class __TwigTemplate_081e666b707c86f9deddaeb9a981bb753dc9b0afb21f00f6283d35146b7c11a9 extends Twig_Template
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
        $__internal_9d07ff5559524fb57603f075ee031e56003eb8b15b376a08ff3c952bd518b2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d07ff5559524fb57603f075ee031e56003eb8b15b376a08ff3c952bd518b2d4->enter($__internal_9d07ff5559524fb57603f075ee031e56003eb8b15b376a08ff3c952bd518b2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_9d07ff5559524fb57603f075ee031e56003eb8b15b376a08ff3c952bd518b2d4->leave($__internal_9d07ff5559524fb57603f075ee031e56003eb8b15b376a08ff3c952bd518b2d4_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AnnonceBundle:Default:index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AnnonceBundle/Resources/views/Default/index.html.twig");
    }
}
