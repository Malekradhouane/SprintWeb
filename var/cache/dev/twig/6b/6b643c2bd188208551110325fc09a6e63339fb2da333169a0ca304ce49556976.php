<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8d94fcbf3841f84c326b6121b9ac0bceb813726bcfb051bb2ef1b2649f9acf59 extends Twig_Template
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
        $__internal_8618ff36d0524b6a7fa2c9395be164514ba5e7b3ab5b4a2a7ce66cb5f3854966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8618ff36d0524b6a7fa2c9395be164514ba5e7b3ab5b4a2a7ce66cb5f3854966->enter($__internal_8618ff36d0524b6a7fa2c9395be164514ba5e7b3ab5b4a2a7ce66cb5f3854966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8618ff36d0524b6a7fa2c9395be164514ba5e7b3ab5b4a2a7ce66cb5f3854966->leave($__internal_8618ff36d0524b6a7fa2c9395be164514ba5e7b3ab5b4a2a7ce66cb5f3854966_prof);

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
