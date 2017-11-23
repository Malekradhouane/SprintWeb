<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ff299e9ae49e36020d9c8202148a2a84adc11e043a857bcfac738e6da40ab0c6 extends Twig_Template
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
        $__internal_c21d5f7c2e0e95fc831f77b3609a12924283df9eb0ce2adda07bd1ae644d6fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21d5f7c2e0e95fc831f77b3609a12924283df9eb0ce2adda07bd1ae644d6fdc->enter($__internal_c21d5f7c2e0e95fc831f77b3609a12924283df9eb0ce2adda07bd1ae644d6fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c21d5f7c2e0e95fc831f77b3609a12924283df9eb0ce2adda07bd1ae644d6fdc->leave($__internal_c21d5f7c2e0e95fc831f77b3609a12924283df9eb0ce2adda07bd1ae644d6fdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
