<?php

/* ReclamationBundle:Default:contactus.html.twig */
class __TwigTemplate_ddd41438a8a01a916f66a299512ca1d2bf5c7f789ece7bdc29b5eda371de295c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ReclamationBundle:Default:contactus.html.twig", 1);
        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'Sheets' => array($this, 'block_Sheets'),
            'PageHeader' => array($this, 'block_PageHeader'),
            'Content' => array($this, 'block_Content'),
            'Script' => array($this, 'block_Script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbb27a73b87cbfce9e329a951eebb36a2f90a00bfb48cf558962eea14e178433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb27a73b87cbfce9e329a951eebb36a2f90a00bfb48cf558962eea14e178433->enter($__internal_dbb27a73b87cbfce9e329a951eebb36a2f90a00bfb48cf558962eea14e178433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:contactus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb27a73b87cbfce9e329a951eebb36a2f90a00bfb48cf558962eea14e178433->leave($__internal_dbb27a73b87cbfce9e329a951eebb36a2f90a00bfb48cf558962eea14e178433_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_ac15ace45221d5962fd62bbcbed1418ee7e258c095af0a26da0756a040a0cb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac15ace45221d5962fd62bbcbed1418ee7e258c095af0a26da0756a040a0cb96->enter($__internal_ac15ace45221d5962fd62bbcbed1418ee7e258c095af0a26da0756a040a0cb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Contact Us - Karhabty
";
        
        $__internal_ac15ace45221d5962fd62bbcbed1418ee7e258c095af0a26da0756a040a0cb96->leave($__internal_ac15ace45221d5962fd62bbcbed1418ee7e258c095af0a26da0756a040a0cb96_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_d80019ad53bbb1aa87d8f8d1651c4ce98974b1e4e265e6461803f9b203231b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80019ad53bbb1aa87d8f8d1651c4ce98974b1e4e265e6461803f9b203231b4d->enter($__internal_d80019ad53bbb1aa87d8f8d1651c4ce98974b1e4e265e6461803f9b203231b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

        // line 8
        echo "        ";
        $this->displayParentBlock("Sheets", $context, $blocks);
        echo "
        <!--Bootstrap -->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <!--Custome Style -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <!--OWL Carousel slider-->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.transitions.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <!--slick-slider -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--bootstrap-slider -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-slider.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--FontAwesome Font Style -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_d80019ad53bbb1aa87d8f8d1651c4ce98974b1e4e265e6461803f9b203231b4d->leave($__internal_d80019ad53bbb1aa87d8f8d1651c4ce98974b1e4e265e6461803f9b203231b4d_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_9d77a974892ca68a6ad2e7802554f198903770cd36a90fd2c461a57b5a73dc30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d77a974892ca68a6ad2e7802554f198903770cd36a90fd2c461a57b5a73dc30->enter($__internal_9d77a974892ca68a6ad2e7802554f198903770cd36a90fd2c461a57b5a73dc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

        // line 26
        echo "
    <!--Page Header-->
    <section class=\"page-header contactus_page\">
        <div class=\"container\">
            <div class=\"page-header_wrap\">
                <div class=\"page-heading\">
                    <h1>Contact Us</h1>
                </div>
                <ul class=\"coustom-breadcrumb\">
                    <li><a href=\"#\">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Page Header-->

";
        
        $__internal_9d77a974892ca68a6ad2e7802554f198903770cd36a90fd2c461a57b5a73dc30->leave($__internal_9d77a974892ca68a6ad2e7802554f198903770cd36a90fd2c461a57b5a73dc30_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_4ffb988018739928c9f0de13badd5f8be0e1679ad12abbf10c304190331e28c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffb988018739928c9f0de13badd5f8be0e1679ad12abbf10c304190331e28c3->enter($__internal_4ffb988018739928c9f0de13badd5f8be0e1679ad12abbf10c304190331e28c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 48
        echo "
    <!--Contact-us-->
    <section class=\"contact_us section-padding\">
        <div class=\"container\">
            <div  class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Get in touch using the claim form below</h3>
                    <div class=\"contact_form gray-bg\">
                        <form action=\"\" method=\"POST\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">the claim's subject <span>*</span></label>
                                <select  id=\"list\" name=\"objet\" class=\"form-control white_bg\" onselect=\"choixobjet()\">
                                    <option value=\"Technique\">Technique</option>
                                    <option value=\"voiture occasion\">voiture occasion</option>
                                    <option value=\"voiture neuve\">voiture neuve</option>
                                    <option value=\"mail publicitaire\">mail publicitaire</option>
                                </select>
                               <!-- <input type=\"text\" class=\"form-control white_bg\" id=\"phonenumber\" name=\"objet\"> -->
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">Description<span>*</span></label>
                                <textarea class=\"form-control white_bg\" rows=\"4\" name=\"description\"></textarea>
                            </div>

                            <div class=\"form-group\" >
                                <label class=\"control-label\" >Upload Images  ( size = 900 x 560 )</label><br>
                                <div class=\"form-group\" align=\"center\">
                                    <div class=\"upload_user_logo\" align=\"center\"> <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/dealer-logo.jpg"), "html", null, true);
        echo "\" alt=\"image\">
                                        <div class=\"upload_newlogo\" align=\"center\">
                                            <input name=\"capture\" type=\"file\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br>
                            <div class=\"form-group\">
                                    <button class=\"btn\" type=\"submit\" align=\"center\">Send Claim <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <h3>Contact Info</h3>
                    <div class=\"contact_detail\">
                        <ul>
                            <li>
                                <div class=\"icon_wrap\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></div>
                                <div class=\"contact_info_m\">PO Box 1025MNO Collins Street West Victoria 8007 Australia</div>
                            </li>
                            <li>
                                <div class=\"icon_wrap\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></div>
                                <div class=\"contact_info_m\"><a href=\"tel:61-1234-567-90\">+61-123-456-789</a></div>
                            </li>
                            <li>
                                <div class=\"icon_wrap\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></div>
                                <div class=\"contact_info_m\"><a href=\"mailto:contact@exampleurl.com\">contact@exampleurl.com</a></div>
                            </li>
                        </ul>
                        <div class=\"map_wrap\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361315.424069386!2d-113.75658747371207!3d36.241096924675375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1483614660041\" width=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact-us-->


";
        
        $__internal_4ffb988018739928c9f0de13badd5f8be0e1679ad12abbf10c304190331e28c3->leave($__internal_4ffb988018739928c9f0de13badd5f8be0e1679ad12abbf10c304190331e28c3_prof);

    }

    // line 119
    public function block_Script($context, array $blocks = array())
    {
        $__internal_ff7797dc3b91f186c423440b1d7f932d6a600e49e8ac4050d4040e0774de41cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7797dc3b91f186c423440b1d7f932d6a600e49e8ac4050d4040e0774de41cd->enter($__internal_ff7797dc3b91f186c423440b1d7f932d6a600e49e8ac4050d4040e0774de41cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 120
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>

    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/objet.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_ff7797dc3b91f186c423440b1d7f932d6a600e49e8ac4050d4040e0774de41cd->leave($__internal_ff7797dc3b91f186c423440b1d7f932d6a600e49e8ac4050d4040e0774de41cd_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Default:contactus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 131,  252 => 130,  248 => 129,  243 => 127,  237 => 124,  233 => 123,  229 => 122,  225 => 120,  219 => 119,  169 => 75,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block Title %}
    Contact Us - Karhabty
{% endblock %}

{% block Sheets %}
        {{ parent() }}
        <!--Bootstrap -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" type=\"text/css\">
        <!--Custome Style -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">
        <!--OWL Carousel slider-->
        <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.css') }}\" type=\"text/css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/owl.transitions.css') }}\" type=\"text/css\">
        <!--slick-slider -->
        <link href=\"{{ asset('css/slick.css') }}\" rel=\"stylesheet\">
        <!--bootstrap-slider -->
        <link href=\"{{ asset('css/bootstrap-slider.min.css') }}\" rel=\"stylesheet\">
        <!--FontAwesome Font Style -->
        <link href=\"{{ asset('css/font-awesome.min.css') }}\" rel=\"stylesheet\">
{% endblock %}


{% block PageHeader %}

    <!--Page Header-->
    <section class=\"page-header contactus_page\">
        <div class=\"container\">
            <div class=\"page-header_wrap\">
                <div class=\"page-heading\">
                    <h1>Contact Us</h1>
                </div>
                <ul class=\"coustom-breadcrumb\">
                    <li><a href=\"#\">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Page Header-->

{% endblock %}

{% block Content %}

    <!--Contact-us-->
    <section class=\"contact_us section-padding\">
        <div class=\"container\">
            <div  class=\"row\">
                <div class=\"col-md-6\">
                    <h3>Get in touch using the claim form below</h3>
                    <div class=\"contact_form gray-bg\">
                        <form action=\"\" method=\"POST\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">the claim's subject <span>*</span></label>
                                <select  id=\"list\" name=\"objet\" class=\"form-control white_bg\" onselect=\"choixobjet()\">
                                    <option value=\"Technique\">Technique</option>
                                    <option value=\"voiture occasion\">voiture occasion</option>
                                    <option value=\"voiture neuve\">voiture neuve</option>
                                    <option value=\"mail publicitaire\">mail publicitaire</option>
                                </select>
                               <!-- <input type=\"text\" class=\"form-control white_bg\" id=\"phonenumber\" name=\"objet\"> -->
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">Description<span>*</span></label>
                                <textarea class=\"form-control white_bg\" rows=\"4\" name=\"description\"></textarea>
                            </div>

                            <div class=\"form-group\" >
                                <label class=\"control-label\" >Upload Images  ( size = 900 x 560 )</label><br>
                                <div class=\"form-group\" align=\"center\">
                                    <div class=\"upload_user_logo\" align=\"center\"> <img src=\"{{ asset('images/dealer-logo.jpg') }}\" alt=\"image\">
                                        <div class=\"upload_newlogo\" align=\"center\">
                                            <input name=\"capture\" type=\"file\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br>
                            <div class=\"form-group\">
                                    <button class=\"btn\" type=\"submit\" align=\"center\">Send Claim <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <h3>Contact Info</h3>
                    <div class=\"contact_detail\">
                        <ul>
                            <li>
                                <div class=\"icon_wrap\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></div>
                                <div class=\"contact_info_m\">PO Box 1025MNO Collins Street West Victoria 8007 Australia</div>
                            </li>
                            <li>
                                <div class=\"icon_wrap\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></div>
                                <div class=\"contact_info_m\"><a href=\"tel:61-1234-567-90\">+61-123-456-789</a></div>
                            </li>
                            <li>
                                <div class=\"icon_wrap\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></div>
                                <div class=\"contact_info_m\"><a href=\"mailto:contact@exampleurl.com\">contact@exampleurl.com</a></div>
                            </li>
                        </ul>
                        <div class=\"map_wrap\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361315.424069386!2d-113.75658747371207!3d36.241096924675375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1483614660041\" width=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact-us-->


{% endblock %}

{% block Script %}

    <!-- Scripts -->
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/interface.js') }}\"></script>

    <!--bootstrap-slider-JS-->
    <script src=\"{{ asset('js/bootstrap-slider.min.js') }}\"></script>
    <!--Slider-JS-->
    <script src=\"{{ asset('js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('js/objet.js') }}\"></script>

{% endblock %}




", "ReclamationBundle:Default:contactus.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\ReclamationBundle/Resources/views/Default/contactus.html.twig");
    }
}
