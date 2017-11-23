<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eef3c34cb6a0666053dc86ec82715a06fde0b10b06fb66d157b75d7ef089a107 extends Twig_Template
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
        $__internal_7793ccfe566ff4e5f31534da13acd7234cb01137e8a1c993439b8da5a38a0f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7793ccfe566ff4e5f31534da13acd7234cb01137e8a1c993439b8da5a38a0f7f->enter($__internal_7793ccfe566ff4e5f31534da13acd7234cb01137e8a1c993439b8da5a38a0f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7793ccfe566ff4e5f31534da13acd7234cb01137e8a1c993439b8da5a38a0f7f->leave($__internal_7793ccfe566ff4e5f31534da13acd7234cb01137e8a1c993439b8da5a38a0f7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
