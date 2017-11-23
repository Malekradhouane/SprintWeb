<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4c7d90221be001b60dd53ab2b8a8686ff3fc07d3365912e827e125ef34f099de extends Twig_Template
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
        $__internal_86e85cc8fc00d8bbc5c23b4ca6930eaa20ed2ae4f9b3fbd61de5f64e50a92b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e85cc8fc00d8bbc5c23b4ca6930eaa20ed2ae4f9b3fbd61de5f64e50a92b27->enter($__internal_86e85cc8fc00d8bbc5c23b4ca6930eaa20ed2ae4f9b3fbd61de5f64e50a92b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_86e85cc8fc00d8bbc5c23b4ca6930eaa20ed2ae4f9b3fbd61de5f64e50a92b27->leave($__internal_86e85cc8fc00d8bbc5c23b4ca6930eaa20ed2ae4f9b3fbd61de5f64e50a92b27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
