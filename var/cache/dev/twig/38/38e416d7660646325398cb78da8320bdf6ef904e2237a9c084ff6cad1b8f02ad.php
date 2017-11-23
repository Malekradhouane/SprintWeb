<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ae9fbd73891fb8eeba050de73dbecd4f88c8e1f275a889bb46b37a50fd53c3cf extends Twig_Template
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
        $__internal_d1a400501f5c51f3dc60e633864ae4baeeb7d6b0ef57fd16c8e62c656be5f652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a400501f5c51f3dc60e633864ae4baeeb7d6b0ef57fd16c8e62c656be5f652->enter($__internal_d1a400501f5c51f3dc60e633864ae4baeeb7d6b0ef57fd16c8e62c656be5f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d1a400501f5c51f3dc60e633864ae4baeeb7d6b0ef57fd16c8e62c656be5f652->leave($__internal_d1a400501f5c51f3dc60e633864ae4baeeb7d6b0ef57fd16c8e62c656be5f652_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
