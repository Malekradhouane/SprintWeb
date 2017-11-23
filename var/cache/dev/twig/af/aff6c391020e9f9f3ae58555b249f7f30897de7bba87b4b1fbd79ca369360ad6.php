<?php

/* @Karhabty/Registration/register.html.twig */
class __TwigTemplate_d8500da7896161720d9c45be7486a6aba22924044596729c1ebf0e19ff0e8e3d extends Twig_Template
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
        $__internal_d9022ce27b559d2d4b516999b5a194410938b6ab6cd0c4cfb2556b730c07e7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9022ce27b559d2d4b516999b5a194410938b6ab6cd0c4cfb2556b730c07e7ff->enter($__internal_d9022ce27b559d2d4b516999b5a194410938b6ab6cd0c4cfb2556b730c07e7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Registration/register.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('registration_content', $context, $blocks);
        
        $__internal_d9022ce27b559d2d4b516999b5a194410938b6ab6cd0c4cfb2556b730c07e7ff->leave($__internal_d9022ce27b559d2d4b516999b5a194410938b6ab6cd0c4cfb2556b730c07e7ff_prof);

    }

    public function block_registration_content($context, array $blocks = array())
    {
        $__internal_54699ae94d5f9c900bce479e941ee3f5db20dda3bd031ac6bb62dc4d2e6a185c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54699ae94d5f9c900bce479e941ee3f5db20dda3bd031ac6bb62dc4d2e6a185c->enter($__internal_54699ae94d5f9c900bce479e941ee3f5db20dda3bd031ac6bb62dc4d2e6a185c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registration_content"));

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
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@Karhabty/Registration/register.html.twig", 16)->display($context);
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
        
        $__internal_54699ae94d5f9c900bce479e941ee3f5db20dda3bd031ac6bb62dc4d2e6a185c->leave($__internal_54699ae94d5f9c900bce479e941ee3f5db20dda3bd031ac6bb62dc4d2e6a185c_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Registration/register.html.twig";
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
", "@Karhabty/Registration/register.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
