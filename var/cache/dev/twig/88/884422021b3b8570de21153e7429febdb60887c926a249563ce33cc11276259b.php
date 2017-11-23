<?php

/* @Reclamation/Default/index.html.twig */
class __TwigTemplate_5fa5026aa865a2933d8fc9d75ac999aa2439edf6c5757645590b087ff2033f28 extends Twig_Template
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
        $__internal_f1c6a89da6cce732c73112613d2b3816a582ed28b4a65ecebe61e4d4053503f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c6a89da6cce732c73112613d2b3816a582ed28b4a65ecebe61e4d4053503f7->enter($__internal_f1c6a89da6cce732c73112613d2b3816a582ed28b4a65ecebe61e4d4053503f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Reclamation/Default/index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f1c6a89da6cce732c73112613d2b3816a582ed28b4a65ecebe61e4d4053503f7->leave($__internal_f1c6a89da6cce732c73112613d2b3816a582ed28b4a65ecebe61e4d4053503f7_prof);

    }

    public function getTemplateName()
    {
        return "@Reclamation/Default/index.html.twig";
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
", "@Reclamation/Default/index.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\ReclamationBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
