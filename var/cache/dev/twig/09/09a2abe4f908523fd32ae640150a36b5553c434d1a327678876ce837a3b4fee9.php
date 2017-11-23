<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b7437d4c76cf99de48ce90ed8e57f7293660693cdcba71b799cff61dddd855ca extends Twig_Template
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
        $__internal_a020fe26d26a1a8d1c9ee450ad66db6d6e8d1be443c59ef6c0eec6f24bae5a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a020fe26d26a1a8d1c9ee450ad66db6d6e8d1be443c59ef6c0eec6f24bae5a19->enter($__internal_a020fe26d26a1a8d1c9ee450ad66db6d6e8d1be443c59ef6c0eec6f24bae5a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a020fe26d26a1a8d1c9ee450ad66db6d6e8d1be443c59ef6c0eec6f24bae5a19->leave($__internal_a020fe26d26a1a8d1c9ee450ad66db6d6e8d1be443c59ef6c0eec6f24bae5a19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
