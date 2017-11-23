<?php

/* KarhabtyBundle:Registration:register.html.twig */
class __TwigTemplate_d0025061544c60f14a8b3facfe9501666878664ca4b6c39746fbdadfa9201c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'registration_content' => array($this, 'block_registration_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8900b7647a2fad3d8218ddf4b3651363901e9d5f5a34ec9b7be9b17514e9b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8900b7647a2fad3d8218ddf4b3651363901e9d5f5a34ec9b7be9b17514e9b12->enter($__internal_e8900b7647a2fad3d8218ddf4b3651363901e9d5f5a34ec9b7be9b17514e9b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Registration:register.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('registration_content', $context, $blocks);
        
        $__internal_e8900b7647a2fad3d8218ddf4b3651363901e9d5f5a34ec9b7be9b17514e9b12->leave($__internal_e8900b7647a2fad3d8218ddf4b3651363901e9d5f5a34ec9b7be9b17514e9b12_prof);

    }

    public function block_registration_content($context, array $blocks = array())
    {
        $__internal_0c951cc8d56bd81ace81c1a336f1dc08d7f4483776bd1ab6287907b9bf21f851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c951cc8d56bd81ace81c1a336f1dc08d7f4483776bd1ab6287907b9bf21f851->enter($__internal_0c951cc8d56bd81ace81c1a336f1dc08d7f4483776bd1ab6287907b9bf21f851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registration_content"));

        // line 4
        echo "    <div class=\"modal fade\" id=\"signupform\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h3 class=\"modal-title\">Sign Up</h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"signup_wrap\">
                            <div class=\"col-md-6 col-sm-6\">
                                <div class=\"form-group\">
                                    ";
        // line 16
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "KarhabtyBundle:Registration:register.html.twig", 16)->display($context);
        // line 17
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer text-center\">
                    <p>Already got an account? <a href=\"#loginform\" data-toggle=\"modal\" data-dismiss=\"modal\">Login Here</a></p>
                </div>
            </div>
        </div>
    </div>






";
        
        $__internal_0c951cc8d56bd81ace81c1a336f1dc08d7f4483776bd1ab6287907b9bf21f851->leave($__internal_0c951cc8d56bd81ace81c1a336f1dc08d7f4483776bd1ab6287907b9bf21f851_prof);

    }

    public function getTemplateName()
    {
        return "KarhabtyBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  53 => 16,  39 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block registration_content  %}
    <div class=\"modal fade\" id=\"signupform\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h3 class=\"modal-title\">Sign Up</h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"signup_wrap\">
                            <div class=\"col-md-6 col-sm-6\">
                                <div class=\"form-group\">
                                    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer text-center\">
                    <p>Already got an account? <a href=\"#loginform\" data-toggle=\"modal\" data-dismiss=\"modal\">Login Here</a></p>
                </div>
            </div>
        </div>
    </div>






{% endblock registration_content  %}
", "KarhabtyBundle:Registration:register.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle/Resources/views/Registration/register.html.twig");
    }
}
