<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6b05c6d2eba4cbf392f307354e0aa74dc7a706eb6e72286ff90ffd538fbbd102 extends Twig_Template
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
        $__internal_24194dcbf527dc01b0136ec80645eb8a73fa5237c2449a58d7254ec75b3653a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24194dcbf527dc01b0136ec80645eb8a73fa5237c2449a58d7254ec75b3653a7->enter($__internal_24194dcbf527dc01b0136ec80645eb8a73fa5237c2449a58d7254ec75b3653a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_24194dcbf527dc01b0136ec80645eb8a73fa5237c2449a58d7254ec75b3653a7->leave($__internal_24194dcbf527dc01b0136ec80645eb8a73fa5237c2449a58d7254ec75b3653a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
