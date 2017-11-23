<?php

/* @AutoEcole/Default/Note.html.twig */
class __TwigTemplate_88ae4e3e21a2e94653b1e507d2aee5b860feb24544246752da0cb9d6b2ff64e6 extends Twig_Template
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
        $__internal_4e7e5a40bbea8a9fedf63449d539968a1a3fba1eff9b6a57a8f80be408f267b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7e5a40bbea8a9fedf63449d539968a1a3fba1eff9b6a57a8f80be408f267b4->enter($__internal_4e7e5a40bbea8a9fedf63449d539968a1a3fba1eff9b6a57a8f80be408f267b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AutoEcole/Default/Note.html.twig"));

        // line 33
        echo "<img height=\"200\" width=\"600\" src=\"file:///C:/Users/MALEK/Desktop/hazard-cyclist.jpg\"  alt=\"\">

EKHDEM NA3N DIN RABBEK!";
        
        $__internal_4e7e5a40bbea8a9fedf63449d539968a1a3fba1eff9b6a57a8f80be408f267b4->leave($__internal_4e7e5a40bbea8a9fedf63449d539968a1a3fba1eff9b6a57a8f80be408f267b4_prof);

    }

    public function getTemplateName()
    {
        return "@AutoEcole/Default/Note.html.twig";
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

EKHDEM NA3N DIN RABBEK!", "@AutoEcole/Default/Note.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle\\Resources\\views\\Default\\Note.html.twig");
    }
}
