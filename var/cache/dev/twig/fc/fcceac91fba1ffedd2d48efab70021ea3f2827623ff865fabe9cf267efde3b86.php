<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d1f86d72f3b76a563f86063e25c177806fa1547eb651c592d38172600d811356 extends Twig_Template
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
        $__internal_d9aca3efa8585cd68f7521eb3057a38cd676e36f7593ec599a6668352e460830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9aca3efa8585cd68f7521eb3057a38cd676e36f7593ec599a6668352e460830->enter($__internal_d9aca3efa8585cd68f7521eb3057a38cd676e36f7593ec599a6668352e460830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d9aca3efa8585cd68f7521eb3057a38cd676e36f7593ec599a6668352e460830->leave($__internal_d9aca3efa8585cd68f7521eb3057a38cd676e36f7593ec599a6668352e460830_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
