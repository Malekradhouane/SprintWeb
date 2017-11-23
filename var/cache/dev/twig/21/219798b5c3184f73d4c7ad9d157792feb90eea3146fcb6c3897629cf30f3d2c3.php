<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6a95970cbf0d4377c7be97ba0bc939466fc2143af7621021227d5f13c1e11a67 extends Twig_Template
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
        $__internal_90aee8fc4e7145447a8586aa92dd6a533c0f3ef16c892474ea5c35fbfe958409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90aee8fc4e7145447a8586aa92dd6a533c0f3ef16c892474ea5c35fbfe958409->enter($__internal_90aee8fc4e7145447a8586aa92dd6a533c0f3ef16c892474ea5c35fbfe958409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_90aee8fc4e7145447a8586aa92dd6a533c0f3ef16c892474ea5c35fbfe958409->leave($__internal_90aee8fc4e7145447a8586aa92dd6a533c0f3ef16c892474ea5c35fbfe958409_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
