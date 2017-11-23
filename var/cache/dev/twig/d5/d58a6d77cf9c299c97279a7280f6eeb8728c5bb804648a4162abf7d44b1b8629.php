<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c6c18304b269dcf6cccfae3ac07cf9c3ac3de820461b518bb2bf5270305072d8 extends Twig_Template
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
        $__internal_3dc60d25c6bdb0b4570fe6c7677ec7d1e0cbb308fa9bda717beca30ffcc3f1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc60d25c6bdb0b4570fe6c7677ec7d1e0cbb308fa9bda717beca30ffcc3f1f1->enter($__internal_3dc60d25c6bdb0b4570fe6c7677ec7d1e0cbb308fa9bda717beca30ffcc3f1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3dc60d25c6bdb0b4570fe6c7677ec7d1e0cbb308fa9bda717beca30ffcc3f1f1->leave($__internal_3dc60d25c6bdb0b4570fe6c7677ec7d1e0cbb308fa9bda717beca30ffcc3f1f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\SprintWeb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
