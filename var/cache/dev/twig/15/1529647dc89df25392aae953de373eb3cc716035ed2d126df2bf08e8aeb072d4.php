<?php

/* KarhabtyBundle:Registration:register.html.twig */
class __TwigTemplate_a52a9c806a7941cf4c49462577c04ca8bbe17c9273976d96f1c9efb20a4aa08f extends Twig_Template
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
        $__internal_aa896baee358c316526dbf3a84853c41824157b0323b400e9b614819f5258544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa896baee358c316526dbf3a84853c41824157b0323b400e9b614819f5258544->enter($__internal_aa896baee358c316526dbf3a84853c41824157b0323b400e9b614819f5258544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KarhabtyBundle:Registration:register.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('registration_content', $context, $blocks);
        
        $__internal_aa896baee358c316526dbf3a84853c41824157b0323b400e9b614819f5258544->leave($__internal_aa896baee358c316526dbf3a84853c41824157b0323b400e9b614819f5258544_prof);

    }

    public function block_registration_content($context, array $blocks = array())
    {
        $__internal_ee5beeecc9ea34ea488a242c7a7d033a4c059428e57ba91ee779b0354b4d32a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5beeecc9ea34ea488a242c7a7d033a4c059428e57ba91ee779b0354b4d32a4->enter($__internal_ee5beeecc9ea34ea488a242c7a7d033a4c059428e57ba91ee779b0354b4d32a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "registration_content"));

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
        
        $__internal_ee5beeecc9ea34ea488a242c7a7d033a4c059428e57ba91ee779b0354b4d32a4->leave($__internal_ee5beeecc9ea34ea488a242c7a7d033a4c059428e57ba91ee779b0354b4d32a4_prof);

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
", "KarhabtyBundle:Registration:register.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\KarhabtyBundle/Resources/views/Registration/register.html.twig");
    }
}
