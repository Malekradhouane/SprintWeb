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
        $__internal_3143163c6154d5ae7ad4522716cf207b518ea3ae396df4379a03d6a4081b7da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3143163c6154d5ae7ad4522716cf207b518ea3ae396df4379a03d6a4081b7da8->enter($__internal_3143163c6154d5ae7ad4522716cf207b518ea3ae396df4379a03d6a4081b7da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3143163c6154d5ae7ad4522716cf207b518ea3ae396df4379a03d6a4081b7da8->leave($__internal_3143163c6154d5ae7ad4522716cf207b518ea3ae396df4379a03d6a4081b7da8_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
