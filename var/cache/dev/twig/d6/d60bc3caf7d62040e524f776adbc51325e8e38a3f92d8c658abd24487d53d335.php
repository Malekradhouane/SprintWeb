<?php

/* AutoEcoleBundle:Default:Note.html.twig */
class __TwigTemplate_8e94a1d2257775ff91e37a9285ecd6b138460b4e639c8f5436f8c594e089b028 extends Twig_Template
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
        $__internal_f8306f59f6b344297844a7b2ae6ccfe04dd367219f537459ac031e562a2a336c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8306f59f6b344297844a7b2ae6ccfe04dd367219f537459ac031e562a2a336c->enter($__internal_f8306f59f6b344297844a7b2ae6ccfe04dd367219f537459ac031e562a2a336c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:Note.html.twig"));

        // line 33
        echo "<img height=\"200\" width=\"600\" src=\"file:///C:/Users/MALEK/Desktop/hazard-cyclist.jpg\"  alt=\"\">

EKHDEM NA3N DIN RABBEK!";
        
        $__internal_f8306f59f6b344297844a7b2ae6ccfe04dd367219f537459ac031e562a2a336c->leave($__internal_f8306f59f6b344297844a7b2ae6ccfe04dd367219f537459ac031e562a2a336c_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:Note.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
<!doctype html>
<html>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<body>
<input type=\"text\" name=\"text\">
<a href=\"#\" class=\"say\">say</a>

<audio src=\"\" class=\"speech\" hidden></audio>


<script>



    \$(function()
    {
        \$(a.say).on('click', function (e) {
            e.preventDefault();
            var text = \$('input[name=\"text\"]').val();
            text = encodeURIComponent(text);
            console.log(text);
            console.log(text);

            var url = \"https://translate.google.com/translate_tts?ie=UTF-8&total=1&idx=0&textlen=32&client=tw-ob&q=\" + text + \"&tl=en\";
            \$('audio').attr('src', url).get(0).play();
        });
    });
</script>
</body>
</html>
#}
<img height=\"200\" width=\"600\" src=\"file:///C:/Users/MALEK/Desktop/hazard-cyclist.jpg\"  alt=\"\">

EKHDEM NA3N DIN RABBEK!", "AutoEcoleBundle:Default:Note.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle/Resources/views/Default/Note.html.twig");
    }
}
