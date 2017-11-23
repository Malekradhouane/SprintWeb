<?php

/* TemplateBundle:Default:rechercheAnnonce.html.twig */
class __TwigTemplate_937ad1880ee3028a25c6788be8e7e98d2378ff45131e92d3f1275f1c8bb3a416 extends Twig_Template
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
        $__internal_d2e1573f3340fa3a91c688275bace04d95265bd27dda6f99bb3bc01f7fb21d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e1573f3340fa3a91c688275bace04d95265bd27dda6f99bb3bc01f7fb21d39->enter($__internal_d2e1573f3340fa3a91c688275bace04d95265bd27dda6f99bb3bc01f7fb21d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TemplateBundle:Default:rechercheAnnonce.html.twig"));

        // line 1
        echo "<h1>New Cars Announcements list</h1>
<table border=\"1\">
    <tr>
        <td> Title</td>
        <td> Category</td>
        <td> City</td>
        <td> Description</td>
        <td> Price</td>
        <td>Image(s)</td>
    </tr>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["annonce"]);
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 12
            echo "            <tr>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "categorie", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "image", array()), "html", null, true);
            echo "</td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>";
        
        $__internal_d2e1573f3340fa3a91c688275bace04d95265bd27dda6f99bb3bc01f7fb21d39->leave($__internal_d2e1573f3340fa3a91c688275bace04d95265bd27dda6f99bb3bc01f7fb21d39_prof);

    }

    public function getTemplateName()
    {
        return "TemplateBundle:Default:rechercheAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  38 => 12,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>New Cars Announcements list</h1>
<table border=\"1\">
    <tr>
        <td> Title</td>
        <td> Category</td>
        <td> City</td>
        <td> Description</td>
        <td> Price</td>
        <td>Image(s)</td>
    </tr>
    {% for annonce in annonce %}
            <tr>
                <td>{{ annonce.titre }}</td>
                <td>{{ annonce.categorie }}</td>
                <td>{{ annonce.ville }}</td>
                <td>{{ annonce.description }}</td>
                <td>{{ annonce.prix }}</td>
                <td>{{ annonce.image }}</td>
            </tr>
    {% endfor %}
</table>", "TemplateBundle:Default:rechercheAnnonce.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\TemplateBundle/Resources/views/Default/rechercheAnnonce.html.twig");
    }
}
