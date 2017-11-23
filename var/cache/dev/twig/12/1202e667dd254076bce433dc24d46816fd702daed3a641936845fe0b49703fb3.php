<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8442385a93e36147ae7d7c80b12826091e5252541a0652d14b4b85e0dcee7306 extends Twig_Template
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
        $__internal_72a8a5118b82fd83f9e0d83b63ab584af9ad8ebf28d02848b991d7599373bc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a8a5118b82fd83f9e0d83b63ab584af9ad8ebf28d02848b991d7599373bc72->enter($__internal_72a8a5118b82fd83f9e0d83b63ab584af9ad8ebf28d02848b991d7599373bc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_72a8a5118b82fd83f9e0d83b63ab584af9ad8ebf28d02848b991d7599373bc72->leave($__internal_72a8a5118b82fd83f9e0d83b63ab584af9ad8ebf28d02848b991d7599373bc72_prof);

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
