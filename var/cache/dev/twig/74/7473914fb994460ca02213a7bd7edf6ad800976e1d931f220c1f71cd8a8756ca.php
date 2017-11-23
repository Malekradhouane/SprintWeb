<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8dca199068b6bebb6b255cc961fdf76706a9430e5a07a39f26487e5ddf327125 extends Twig_Template
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
        $__internal_74cc93ee7415bd667562b4e78d6d0788e0097ba3af44d44eae6f62476ae48bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cc93ee7415bd667562b4e78d6d0788e0097ba3af44d44eae6f62476ae48bf1->enter($__internal_74cc93ee7415bd667562b4e78d6d0788e0097ba3af44d44eae6f62476ae48bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_74cc93ee7415bd667562b4e78d6d0788e0097ba3af44d44eae6f62476ae48bf1->leave($__internal_74cc93ee7415bd667562b4e78d6d0788e0097ba3af44d44eae6f62476ae48bf1_prof);

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
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
