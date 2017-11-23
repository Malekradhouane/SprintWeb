<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_522b0836e915f0fb8cceeb0173457e6734ec87433bb3f2e1f5237646c80e74a4 extends Twig_Template
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
        $__internal_0c2b5ae29083a6bcfa5795ea9d9b3b940670e96d7ab1c2f9d819a50e0dc07b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2b5ae29083a6bcfa5795ea9d9b3b940670e96d7ab1c2f9d819a50e0dc07b4f->enter($__internal_0c2b5ae29083a6bcfa5795ea9d9b3b940670e96d7ab1c2f9d819a50e0dc07b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0c2b5ae29083a6bcfa5795ea9d9b3b940670e96d7ab1c2f9d819a50e0dc07b4f->leave($__internal_0c2b5ae29083a6bcfa5795ea9d9b3b940670e96d7ab1c2f9d819a50e0dc07b4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
