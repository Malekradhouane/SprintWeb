<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_66a03d596329dbbf72caebb9136a85272295398396cf7e667b6bf0654f0d55f0 extends Twig_Template
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
        $__internal_ef79b0595a05fa7be0c8ec58c60e6ce3642a5280e6621440ea0a5123ec0b0f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef79b0595a05fa7be0c8ec58c60e6ce3642a5280e6621440ea0a5123ec0b0f26->enter($__internal_ef79b0595a05fa7be0c8ec58c60e6ce3642a5280e6621440ea0a5123ec0b0f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ef79b0595a05fa7be0c8ec58c60e6ce3642a5280e6621440ea0a5123ec0b0f26->leave($__internal_ef79b0595a05fa7be0c8ec58c60e6ce3642a5280e6621440ea0a5123ec0b0f26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
