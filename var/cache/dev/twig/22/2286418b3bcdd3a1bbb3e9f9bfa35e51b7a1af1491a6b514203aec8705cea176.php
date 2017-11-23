<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_fe63c12023f0b3025105fc40f19f809d655cc68ee90c94c651e79072ad6adc57 extends Twig_Template
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
        $__internal_8098d93792c7f94526605b9a3e7f4104b2c16f0215a20e9343dd0cf1b6ee89a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8098d93792c7f94526605b9a3e7f4104b2c16f0215a20e9343dd0cf1b6ee89a5->enter($__internal_8098d93792c7f94526605b9a3e7f4104b2c16f0215a20e9343dd0cf1b6ee89a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8098d93792c7f94526605b9a3e7f4104b2c16f0215a20e9343dd0cf1b6ee89a5->leave($__internal_8098d93792c7f94526605b9a3e7f4104b2c16f0215a20e9343dd0cf1b6ee89a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
