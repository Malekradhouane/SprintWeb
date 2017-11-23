<?php

/* AutoEcoleBundle:Default:courspdf.html.twig */
class __TwigTemplate_cda5e24368f5f65083763370ecace59bb2615c095d440ee852a07f4937b07214 extends Twig_Template
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
        $__internal_24bafc61be61f6523e501b13f580caaf0cf5de0dc60ffb2076b95c3962f2c151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24bafc61be61f6523e501b13f580caaf0cf5de0dc60ffb2076b95c3962f2c151->enter($__internal_24bafc61be61f6523e501b13f580caaf0cf5de0dc60ffb2076b95c3962f2c151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:courspdf.html.twig"));

        // line 1
        echo "
<h4>Karhabty</h4>
<img width=\"900\" height=\"1000\" src=\"file:///C:/Users/MALEK/Desktop/PDFIM.PNG\"  alt=\"\">


";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["coursautoecole"]);
        foreach ($context['_seq'] as $context["_key"] => $context["coursautoecole"]) {
            // line 7
            echo "    <br>
    <br>
    <h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "type", array()), "html", null, true);
            echo "</h2>
    <br>
    <br>
    ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["coursautoecole"], "cours", array()), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coursautoecole'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_24bafc61be61f6523e501b13f580caaf0cf5de0dc60ffb2076b95c3962f2c151->leave($__internal_24bafc61be61f6523e501b13f580caaf0cf5de0dc60ffb2076b95c3962f2c151_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:courspdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  37 => 9,  33 => 7,  29 => 6,  22 => 1,);
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
<h4>Karhabty</h4>
<img width=\"900\" height=\"1000\" src=\"file:///C:/Users/MALEK/Desktop/PDFIM.PNG\"  alt=\"\">


{% for coursautoecole in coursautoecole %}
    <br>
    <br>
    <h2>{{ coursautoecole.type }}</h2>
    <br>
    <br>
    {{ coursautoecole.cours }}

{% endfor %}", "AutoEcoleBundle:Default:courspdf.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle/Resources/views/Default/courspdf.html.twig");
    }
}
