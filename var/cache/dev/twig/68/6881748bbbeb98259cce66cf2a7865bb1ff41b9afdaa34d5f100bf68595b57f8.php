<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_0bc3b5fa9561f440a70599dd8123000b34c7b0e8f25f113da316de80b05f8ec4 extends Twig_Template
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
        $__internal_f8f568f810589fc6c16b4b6402ec543684990ac07e2ce1b9369dfd3451db44b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f568f810589fc6c16b4b6402ec543684990ac07e2ce1b9369dfd3451db44b1->enter($__internal_f8f568f810589fc6c16b4b6402ec543684990ac07e2ce1b9369dfd3451db44b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f8f568f810589fc6c16b4b6402ec543684990ac07e2ce1b9369dfd3451db44b1->leave($__internal_f8f568f810589fc6c16b4b6402ec543684990ac07e2ce1b9369dfd3451db44b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
