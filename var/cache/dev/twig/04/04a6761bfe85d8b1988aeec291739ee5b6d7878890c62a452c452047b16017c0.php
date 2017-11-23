<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b7a016de0a7605eeec9e0cbb7289ea850bb9aad2fdd7666536f2f33aa70910a6 extends Twig_Template
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
        $__internal_0993f0dc7bb81fd86fd39a1213764a3f348a5dba3e23408cb3307145ee047090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0993f0dc7bb81fd86fd39a1213764a3f348a5dba3e23408cb3307145ee047090->enter($__internal_0993f0dc7bb81fd86fd39a1213764a3f348a5dba3e23408cb3307145ee047090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0993f0dc7bb81fd86fd39a1213764a3f348a5dba3e23408cb3307145ee047090->leave($__internal_0993f0dc7bb81fd86fd39a1213764a3f348a5dba3e23408cb3307145ee047090_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
