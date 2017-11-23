<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e03e833e2ffe3a116cad3d1ece0ab6444ebf2814588b2ec848454cb6a2451648 extends Twig_Template
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
        $__internal_a986ac18c4c155e5fb60f82ff5c89f3e6bdf8e073816abd3a3741a84ce33b90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a986ac18c4c155e5fb60f82ff5c89f3e6bdf8e073816abd3a3741a84ce33b90d->enter($__internal_a986ac18c4c155e5fb60f82ff5c89f3e6bdf8e073816abd3a3741a84ce33b90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a986ac18c4c155e5fb60f82ff5c89f3e6bdf8e073816abd3a3741a84ce33b90d->leave($__internal_a986ac18c4c155e5fb60f82ff5c89f3e6bdf8e073816abd3a3741a84ce33b90d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
