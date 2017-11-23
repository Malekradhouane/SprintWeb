<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_2fc3ca88cc758a61abe6aacafc1197f9a4c6322e64d5062ff696b5e93695130a extends Twig_Template
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
        $__internal_53c4eb88450c912d3047a5d74d54c69cf1c3b0f840c680a45c6c53943147398d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c4eb88450c912d3047a5d74d54c69cf1c3b0f840c680a45c6c53943147398d->enter($__internal_53c4eb88450c912d3047a5d74d54c69cf1c3b0f840c680a45c6c53943147398d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_53c4eb88450c912d3047a5d74d54c69cf1c3b0f840c680a45c6c53943147398d->leave($__internal_53c4eb88450c912d3047a5d74d54c69cf1c3b0f840c680a45c6c53943147398d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
