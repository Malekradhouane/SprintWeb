<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ba94aaf2af62f9527f2b044a547b0078e203fcf17cda9d8e73ba0c8758f00698 extends Twig_Template
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
        $__internal_1ffbdeb33dce27658a72cb992f4342caf6d61c5d121fc705c796a443f1428742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffbdeb33dce27658a72cb992f4342caf6d61c5d121fc705c796a443f1428742->enter($__internal_1ffbdeb33dce27658a72cb992f4342caf6d61c5d121fc705c796a443f1428742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('registration_content', $context, $blocks);
        
        $__internal_1ffbdeb33dce27658a72cb992f4342caf6d61c5d121fc705c796a443f1428742->leave($__internal_1ffbdeb33dce27658a72cb992f4342caf6d61c5d121fc705c796a443f1428742_prof);

    }

    public function block_registration_content($context, array $blocks = array())
    {
        $__internal_480b1809efd62fab6fba85ae51571aec2157187004b09a720350eb59959d63a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480b1809efd62fab6fba85ae51571aec2157187004b09a720350eb59959d63a5->enter($__internal_480b1809efd62fab6fba85ae51571aec2157187004b09a720350eb59959d63a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registration_content"));

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
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 16)->display($context);
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
        
        $__internal_480b1809efd62fab6fba85ae51571aec2157187004b09a720350eb59959d63a5->leave($__internal_480b1809efd62fab6fba85ae51571aec2157187004b09a720350eb59959d63a5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
