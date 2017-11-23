<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_ca1244c9ebdd8d74d356696dab09776dff087594d26432d00128c757eb780652 extends Twig_Template
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
        $__internal_131cc7ff2c8e7d20dd70eded2e45769c22ffcdcda487f78e3afa9a47d205a9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131cc7ff2c8e7d20dd70eded2e45769c22ffcdcda487f78e3afa9a47d205a9b7->enter($__internal_131cc7ff2c8e7d20dd70eded2e45769c22ffcdcda487f78e3afa9a47d205a9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_131cc7ff2c8e7d20dd70eded2e45769c22ffcdcda487f78e3afa9a47d205a9b7->leave($__internal_131cc7ff2c8e7d20dd70eded2e45769c22ffcdcda487f78e3afa9a47d205a9b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
