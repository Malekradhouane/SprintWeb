<?php

/* @Karhabty/Security/login_content.html.twig */
class __TwigTemplate_223e0aa70a5f501b7b9e230e8fdb159778dbe9a3d4abb6482cc394b2142d43bd extends Twig_Template
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
        $__internal_0fd27038d8c5dacf1760a7a507f6129ea35efec22d997ea097c38f997705b80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd27038d8c5dacf1760a7a507f6129ea35efec22d997ea097c38f997705b80c->enter($__internal_0fd27038d8c5dacf1760a7a507f6129ea35efec22d997ea097c38f997705b80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Karhabty/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div class=\"alert\">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        <span class=\"close\"></span>
    </div>
";
        }
        // line 9
        echo "
<!--Login-Form -->
<div class=\"modal fade\" id=\"loginform\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h3 class=\"modal-title\">Login</h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"login_wrap\">
                        <div class=\"col-md-6 col-sm-6\">
                            <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                ";
        // line 23
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 24
            echo "                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
                                ";
        }
        // line 26
        echo "                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Username or Email address*\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password*\">
                                </div>
                                <div class=\"form-group checkbox\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" >
                                    <label for=\"remember\" >Remember Me</label>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"  class=\"btn btn-block\"> Log in </button>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-6 col-sm-6\">
                            <h6 class=\"gray_text\">Login the Quick Way</h6>
                            <a href=\"#\" class=\"btn btn-block facebook-btn\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i> Login with Facebook</a> <a href=\"#\" class=\"btn btn-block twitter-btn\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i> Login with Twitter</a> <a href=\"#\" class=\"btn btn-block googleplus-btn\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i> Login with Google+</a> </div>
                        <div class=\"mid_divider\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer text-center\">
                <p>Don't have an account? <a href=\"#signupform\" data-toggle=\"modal\" data-dismiss=\"modal\">Signup Here</a></p>
                <p><a href=\"#forgotpassword\" data-toggle=\"modal\" data-dismiss=\"modal\">Forgot Password ?</a></p>
            </div>
        </div>
    </div>
</div>
<!--/Login-Form -->

<!--Register-Form -->

<!--/Register-Form -->

<!--Forgot-password-Form -->
<div class=\"modal fade\" id=\"forgotpassword\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">

                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h3 class=\"modal-title\">Password Recovery</h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"forgotpassword_wrap\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" method=\"get\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Your Email address*\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" value=\"Reset My Password\" class=\"btn btn-block\">
                                </div>
                            </form>
                            <div class=\"text-center\">
                                <p class=\"gray_text\">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                                <p><a href=\"#loginform\" data-toggle=\"modal\" data-dismiss=\"modal\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i> Back to Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Forgot-password-Form -->


";
        
        $__internal_0fd27038d8c5dacf1760a7a507f6129ea35efec22d997ea097c38f997705b80c->leave($__internal_0fd27038d8c5dacf1760a7a507f6129ea35efec22d997ea097c38f997705b80c_prof);

    }

    public function getTemplateName()
    {
        return "@Karhabty/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  64 => 26,  58 => 24,  56 => 23,  52 => 22,  37 => 9,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div class=\"alert\">
        {{ error.messageKey|trans(error.messageData, 'security') }}
        <span class=\"close\"></span>
    </div>
{% endif %}

<!--Login-Form -->
<div class=\"modal fade\" id=\"loginform\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h3 class=\"modal-title\">Login</h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"login_wrap\">
                        <div class=\"col-md-6 col-sm-6\">
                            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                {% if csrf_token %}
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                                {% endif %}
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" required=\"required\" placeholder=\"Username or Email address*\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password*\">
                                </div>
                                <div class=\"form-group checkbox\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" >
                                    <label for=\"remember\" >Remember Me</label>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"  class=\"btn btn-block\"> Log in </button>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-6 col-sm-6\">
                            <h6 class=\"gray_text\">Login the Quick Way</h6>
                            <a href=\"#\" class=\"btn btn-block facebook-btn\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i> Login with Facebook</a> <a href=\"#\" class=\"btn btn-block twitter-btn\"><i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i> Login with Twitter</a> <a href=\"#\" class=\"btn btn-block googleplus-btn\"><i class=\"fa fa-google-plus-square\" aria-hidden=\"true\"></i> Login with Google+</a> </div>
                        <div class=\"mid_divider\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer text-center\">
                <p>Don't have an account? <a href=\"#signupform\" data-toggle=\"modal\" data-dismiss=\"modal\">Signup Here</a></p>
                <p><a href=\"#forgotpassword\" data-toggle=\"modal\" data-dismiss=\"modal\">Forgot Password ?</a></p>
            </div>
        </div>
    </div>
</div>
<!--/Login-Form -->

<!--Register-Form -->

<!--/Register-Form -->

<!--Forgot-password-Form -->
<div class=\"modal fade\" id=\"forgotpassword\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">

                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h3 class=\"modal-title\">Password Recovery</h3>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"forgotpassword_wrap\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" method=\"get\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" placeholder=\"Your Email address*\">
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" value=\"Reset My Password\" class=\"btn btn-block\">
                                </div>
                            </form>
                            <div class=\"text-center\">
                                <p class=\"gray_text\">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                                <p><a href=\"#loginform\" data-toggle=\"modal\" data-dismiss=\"modal\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i> Back to Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Forgot-password-Form -->


", "@Karhabty/Security/login_content.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\KarhabtyBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
