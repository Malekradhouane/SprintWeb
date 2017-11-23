<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2631ca65fb4adb4f68df522b5d1207087339f0e8a445650e9ac86cb73c5fb536 extends Twig_Template
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
        $__internal_2d24163bc1cf757c22da0673d5f896aa22b5bd916f9eb37ea1f8f7a80690fdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d24163bc1cf757c22da0673d5f896aa22b5bd916f9eb37ea1f8f7a80690fdae->enter($__internal_2d24163bc1cf757c22da0673d5f896aa22b5bd916f9eb37ea1f8f7a80690fdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2d24163bc1cf757c22da0673d5f896aa22b5bd916f9eb37ea1f8f7a80690fdae->leave($__internal_2d24163bc1cf757c22da0673d5f896aa22b5bd916f9eb37ea1f8f7a80690fdae_prof);

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
