<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_effc3327e4f4ab2d06706dcb9900f02c3892ece4cfc3582c992ebb535a523272 extends Twig_Template
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
        $__internal_10393d6a843f9d13250aa68011a380aaeedb4cdc06c0d8cd7ba3b6464a2e1c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10393d6a843f9d13250aa68011a380aaeedb4cdc06c0d8cd7ba3b6464a2e1c70->enter($__internal_10393d6a843f9d13250aa68011a380aaeedb4cdc06c0d8cd7ba3b6464a2e1c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_10393d6a843f9d13250aa68011a380aaeedb4cdc06c0d8cd7ba3b6464a2e1c70->leave($__internal_10393d6a843f9d13250aa68011a380aaeedb4cdc06c0d8cd7ba3b6464a2e1c70_prof);

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
