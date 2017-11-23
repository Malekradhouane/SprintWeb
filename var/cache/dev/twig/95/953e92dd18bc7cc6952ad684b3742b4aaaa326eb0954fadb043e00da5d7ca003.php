<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_60d35334363f5c9a2c65eadf9191e48d4bc8dad47d09a0cd321b2fd557b7d94e extends Twig_Template
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
        $__internal_ea6ecdbbefd871ab86acdf08fc15deb5c668b908e9945b28a4c1bed3139dfaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6ecdbbefd871ab86acdf08fc15deb5c668b908e9945b28a4c1bed3139dfaf7->enter($__internal_ea6ecdbbefd871ab86acdf08fc15deb5c668b908e9945b28a4c1bed3139dfaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ea6ecdbbefd871ab86acdf08fc15deb5c668b908e9945b28a4c1bed3139dfaf7->leave($__internal_ea6ecdbbefd871ab86acdf08fc15deb5c668b908e9945b28a4c1bed3139dfaf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
