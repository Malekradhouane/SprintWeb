<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b81baa98cbdbaf5fe22a999d9433a85236c93a2478a191839f38a05a8c1be25a extends Twig_Template
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
        $__internal_37adffc175016f3b3e64bb8f2555a062d8e5df402af2f63e3a92ea3f736ee47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37adffc175016f3b3e64bb8f2555a062d8e5df402af2f63e3a92ea3f736ee47d->enter($__internal_37adffc175016f3b3e64bb8f2555a062d8e5df402af2f63e3a92ea3f736ee47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_37adffc175016f3b3e64bb8f2555a062d8e5df402af2f63e3a92ea3f736ee47d->leave($__internal_37adffc175016f3b3e64bb8f2555a062d8e5df402af2f63e3a92ea3f736ee47d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
