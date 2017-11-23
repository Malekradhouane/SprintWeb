<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5be3e030fe5cbad91ab00b7743d7e56bfe685f77803887f432602660c790770c extends Twig_Template
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
        $__internal_7917d36e38cb67219fa9da48b6c4e93224c9612a70d1ffdfe543f0b4e7350618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7917d36e38cb67219fa9da48b6c4e93224c9612a70d1ffdfe543f0b4e7350618->enter($__internal_7917d36e38cb67219fa9da48b6c4e93224c9612a70d1ffdfe543f0b4e7350618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7917d36e38cb67219fa9da48b6c4e93224c9612a70d1ffdfe543f0b4e7350618->leave($__internal_7917d36e38cb67219fa9da48b6c4e93224c9612a70d1ffdfe543f0b4e7350618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
