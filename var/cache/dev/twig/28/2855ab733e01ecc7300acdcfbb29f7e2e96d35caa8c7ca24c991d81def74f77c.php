<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_eec8e318f3adb128954c8c68a6b8e59dd5dabb1d8b1ba80cb1301ce59d060035 extends Twig_Template
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
        $__internal_99ae6be70b0a87e0d20e10f2b35d946be405fe3206021c6feb42cc5a8cc475b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ae6be70b0a87e0d20e10f2b35d946be405fe3206021c6feb42cc5a8cc475b8->enter($__internal_99ae6be70b0a87e0d20e10f2b35d946be405fe3206021c6feb42cc5a8cc475b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_99ae6be70b0a87e0d20e10f2b35d946be405fe3206021c6feb42cc5a8cc475b8->leave($__internal_99ae6be70b0a87e0d20e10f2b35d946be405fe3206021c6feb42cc5a8cc475b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
