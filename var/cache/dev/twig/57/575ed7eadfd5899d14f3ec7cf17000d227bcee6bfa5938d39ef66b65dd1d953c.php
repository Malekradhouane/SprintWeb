<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3eb40f87821b7ae30d58e62229daa3f06a2f675822eaed4ffb9d656150caf6d8 extends Twig_Template
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
        $__internal_285a16fda00f4d3e60d2c16647daa9588bfa10ad639a687ab37069ad0d8270e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285a16fda00f4d3e60d2c16647daa9588bfa10ad639a687ab37069ad0d8270e5->enter($__internal_285a16fda00f4d3e60d2c16647daa9588bfa10ad639a687ab37069ad0d8270e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_285a16fda00f4d3e60d2c16647daa9588bfa10ad639a687ab37069ad0d8270e5->leave($__internal_285a16fda00f4d3e60d2c16647daa9588bfa10ad639a687ab37069ad0d8270e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
