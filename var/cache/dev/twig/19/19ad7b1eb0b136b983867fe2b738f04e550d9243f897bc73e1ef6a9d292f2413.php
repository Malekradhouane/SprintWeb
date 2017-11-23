<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_962a0116725d096d0a6fafdd75ed2723102898ed45dbd717c03c08f32585735f extends Twig_Template
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
        $__internal_9b316ca2e5c24d90cf252c3a42ab4fbaabfd76928b8ebdf88cb53f337f84c6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b316ca2e5c24d90cf252c3a42ab4fbaabfd76928b8ebdf88cb53f337f84c6d7->enter($__internal_9b316ca2e5c24d90cf252c3a42ab4fbaabfd76928b8ebdf88cb53f337f84c6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9b316ca2e5c24d90cf252c3a42ab4fbaabfd76928b8ebdf88cb53f337f84c6d7->leave($__internal_9b316ca2e5c24d90cf252c3a42ab4fbaabfd76928b8ebdf88cb53f337f84c6d7_prof);

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
