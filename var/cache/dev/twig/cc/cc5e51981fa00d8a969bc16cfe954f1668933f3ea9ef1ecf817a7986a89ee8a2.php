<?php

/* ReclamationBundle:Default:Reclam.html.twig */
class __TwigTemplate_a160415b37890c1f68276a566aa4132f46a6dab89a3845358e9e02b0bd6cb780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:base2.html.twig", "ReclamationBundle:Default:Reclam.html.twig", 1);
        $this->blocks = array(
            'tite' => array($this, 'block_tite'),
            'sheets' => array($this, 'block_sheets'),
            'BreadCrumb' => array($this, 'block_BreadCrumb'),
            'container' => array($this, 'block_container'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00133866ac9170e94e4bf8b1ea4460e79cc06993120d9b51ffad094144c26dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00133866ac9170e94e4bf8b1ea4460e79cc06993120d9b51ffad094144c26dcc->enter($__internal_00133866ac9170e94e4bf8b1ea4460e79cc06993120d9b51ffad094144c26dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ReclamationBundle:Default:Reclam.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00133866ac9170e94e4bf8b1ea4460e79cc06993120d9b51ffad094144c26dcc->leave($__internal_00133866ac9170e94e4bf8b1ea4460e79cc06993120d9b51ffad094144c26dcc_prof);

    }

    // line 3
    public function block_tite($context, array $blocks = array())
    {
        $__internal_eb32620b596699c9131742063d369307a586751cf01ef28c3e720f815ffb7ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb32620b596699c9131742063d369307a586751cf01ef28c3e720f815ffb7ab9->enter($__internal_eb32620b596699c9131742063d369307a586751cf01ef28c3e720f815ffb7ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tite"));

        echo "    <title> Page Admin</title>  ";
        
        $__internal_eb32620b596699c9131742063d369307a586751cf01ef28c3e720f815ffb7ab9->leave($__internal_eb32620b596699c9131742063d369307a586751cf01ef28c3e720f815ffb7ab9_prof);

    }

    // line 5
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_301f274f556586555d8f8ceedc61959a6e1c7fb63132fc23e5fb433475061f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301f274f556586555d8f8ceedc61959a6e1c7fb63132fc23e5fb433475061f81->enter($__internal_301f274f556586555d8f8ceedc61959a6e1c7fb63132fc23e5fb433475061f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        // line 6
        echo "    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Footable CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/footable/css/footable.core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Page CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/pages/contact-app-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/pages/footable-page.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- You can change the theme colors from here -->
    <!-- You can change the theme colors from here -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/colors/default-dark.css"), "html", null, true);
        echo "\" id=\"theme\" rel=\"stylesheet\">
";
        
        $__internal_301f274f556586555d8f8ceedc61959a6e1c7fb63132fc23e5fb433475061f81->leave($__internal_301f274f556586555d8f8ceedc61959a6e1c7fb63132fc23e5fb433475061f81_prof);

    }

    // line 24
    public function block_BreadCrumb($context, array $blocks = array())
    {
        $__internal_716a7a57002663147e10adf82a21b53faf30ab5d90d33cc12a2d87873c938fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716a7a57002663147e10adf82a21b53faf30ab5d90d33cc12a2d87873c938fc7->enter($__internal_716a7a57002663147e10adf82a21b53faf30ab5d90d33cc12a2d87873c938fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BreadCrumb"));

        // line 25
        echo "    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h3 class=\"text-themecolor\">Administration</h3>
        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                <li class=\"breadcrumb-item active\">Claims</li>
            </ol>
        </div>
        <div class=\"\">
            <button class=\"right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-settings text-white\"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
";
        
        $__internal_716a7a57002663147e10adf82a21b53faf30ab5d90d33cc12a2d87873c938fc7->leave($__internal_716a7a57002663147e10adf82a21b53faf30ab5d90d33cc12a2d87873c938fc7_prof);

    }

    // line 47
    public function block_container($context, array $blocks = array())
    {
        $__internal_53284c4ca67d7d73e24859af83c2dd3a90c2b2624b1291aa9ceb47c1689f8fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53284c4ca67d7d73e24859af83c2dd3a90c2b2624b1291aa9ceb47c1689f8fbb->enter($__internal_53284c4ca67d7d73e24859af83c2dd3a90c2b2624b1291aa9ceb47c1689f8fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 48
        echo "
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <!-- .left-right-aside-column-->
                <div class=\"contact-page-aside\">
                    <!-- .left-aside-column-->
                    <div class=\"left-aside bg-light-part\">
                        <ul class=\"list-style-none\">
                            <li class=\"box-label\"><a href=\"javascript:void(0)\">All Claims <span></span></a></li>
                            <li class=\"divider\"></li>

                            <li><a href=\"javascript:void(0)\">Technique <span></span></a></li>
                            <li><a href=\"javascript:void(0)\">Used Cars <span></span></a></li>
                            <li><a href=\"javascript:void(0)\">New Cars <span></span></a></li>
                            <li><a href=\"javascript:void(0)\">Others <span></span></a></li>
                            <div id=\"myModal\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h4 class=\"modal-title\" id=\"myModalLabel\">Add Lable</h4>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <from class=\"form-horizontal\">
                                                <div class=\"form-group\">
                                                    <label class=\"col-md-12\">Name of Label</label>
                                                    <div class=\"col-md-12\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"type name\"> </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"col-md-12\">Select Number of people</label>
                                                    <div class=\"col-md-12\">
                                                        <select class=\"form-control\">
                                                            <option>All Contacts</option>
                                                            <option>10</option>
                                                            <option>20</option>
                                                            <option>30</option>
                                                            <option>40</option>
                                                            <option>Custome</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </from>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Save</button>
                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Cancel</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </ul>
                    </div>
                    <!-- /.left-aside-column-->
                    <div class=\"right-aside \">
                        <div class=\"right-page-header\">
                            <div class=\"d-flex\">
                                <div class=\"align-self-center\">
                                    <h4 class=\"card-title m-t-10\"> Claims List </h4></div>
                                <div class=\"ml-auto\">
                                    <input type=\"text\" id=\"demo-input-search2\" placeholder=\"search Claim\" class=\"form-control\"> </div>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table id=\"demo-foo-addrow\" class=\"table m-t-30 table-hover no-wrap contact-list\" data-page-size=\"10\">
                                <thead>
                                <tr>
                                    <th>Claim_id</th>
                                    <th>Object of the Claim</th>
                                    <th type=\"date\">Sending Date</th>
                                    <th>Details</th>
                                    <th>Handling</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <!--
                                    <td>
                                        <a href=\"app-contact-detail.html\"><img src=\"../assets/images/users/1.jpg\" alt=\"user\" class=\"img-circle\" /> Genelia Deshmukh</a>
                                    </td>

                                    <td>
                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                    </td>-->
                                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclams"]) ? $context["reclams"] : $this->getContext($context, "reclams")));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 136
            echo "
                                    <tr>
                                        <td style=\"width:50px;\" align=\"center\"><span class=\"action-icons\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "idReclamation", array()), "html", null, true);
            echo "</span></td>
                                        <td align=\"center\"><span class=\"label label-light-danger label-icon\">";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "sujet", array()), "html", null, true);
            echo "</span></td>
                                        <td align=\"center\"><span class=\"label label-themecolor label-icon\">";
            // line 140
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "dateReclamation", array()), "y-m-d"), "html", null, true);
            echo "</span></td>

                                        <td >
                                            <button type=\"button\" class=\"btn btn-block btn-outline-success fa fa-check-square-o\" data-toggle=\"modal\"
                                                    data-target=\" #add-contact\" > Show Details</button>
                                            <div id=\"add-contact\"  class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h4 class=\"modal-title\" id=\"myModalLabel\">Claims List</h4>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <from class=\"form-horizontal form-material\">
                                                                <div class=\"form-group\">

                                                                    <div class=\"col-md-12 m-b-20\">
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> Date d'envoi : </label>

                                                                    </div>
                                                                    <div class=\"col-md-12 m-b-20\">
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> Objet : </label>
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> </label>
                                                                    </div>
                                                                    <div class=\"col-md-12 m-b-20\">
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> Description : </label>
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\">  </label>

                                                                    </div>
                                                                    <div class=\"col-md-12 m-b-20\">
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> Etat: </label>
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> </label>

                                                                    </div>

                                                                </div>
                                                            </from>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Save</button>
                                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>

                                                <!-- /.modal-dialog -->
                                            </div>

                                        </td>
                                        <td >
                                            <button type=\"button\" class=\"btn btn-block btn-outline-warning fa fa-plus\" data-toggle=\"modal\" data-target=\"#todo\"> Add to 'To Do List</button>
                                        </td>
                                        <td><a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_Suppback", array("id" => $this->getAttribute($context["rec"], "idReclamation", array()))), "html", null, true);
            echo "\">X</a></td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "
                                </tbody>
                                <tfoot>
                                <tr>


                                    <div id=\"todo\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">ADD TASK : </h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <from class=\"form-horizontal form-material\">
                                                        <div class=\"form-group\">

                                                                <div class=\"col-md-12 m-b-20\">
                                                                    <h5 class=\"modal-title\" id=\"myModalLabel\">TO DO : </h5><br>
                                                                    <textarea type=\"text\" class=\"form-control\" placeholder=\"TO DO\"> </textarea></div>


                                                        </div>
                                                    </from>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Save</button>
                                                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <td colspan=\"7\">
                                        <div class=\"text-right\">
                                            <ul class=\"pagination\"> </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>

                            </table>
                        </div>
                        <!-- .left-aside-column-->
                    </div>
                </div>
                    <!-- /.left-right-aside-column-->
            </div>
        </div>
    </div>
    </div>

";
        
        $__internal_53284c4ca67d7d73e24859af83c2dd3a90c2b2624b1291aa9ceb47c1689f8fbb->leave($__internal_53284c4ca67d7d73e24859af83c2dd3a90c2b2624b1291aa9ceb47c1689f8fbb_prof);

    }

    // line 251
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_0cda8b2763c9446865deee69c316ef8b2c523367ed57d47ae23652ed2fae16b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cda8b2763c9446865deee69c316ef8b2c523367ed57d47ae23652ed2fae16b4->enter($__internal_0cda8b2763c9446865deee69c316ef8b2c523367ed57d47ae23652ed2fae16b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 252
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--Wave Effects -->
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/waves.js"), "html", null, true);
        echo "\"></script>
    <!--Menu sidebar -->
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <!--stickey kit -->
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!--Custom JavaScript -->
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Footable -->
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/footable/js/footable.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/footable-init.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0cda8b2763c9446865deee69c316ef8b2c523367ed57d47ae23652ed2fae16b4->leave($__internal_0cda8b2763c9446865deee69c316ef8b2c523367ed57d47ae23652ed2fae16b4_prof);

    }

    public function getTemplateName()
    {
        return "ReclamationBundle:Default:Reclam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 275,  428 => 271,  423 => 269,  419 => 268,  414 => 266,  409 => 264,  405 => 263,  400 => 261,  395 => 259,  390 => 257,  385 => 255,  381 => 254,  375 => 252,  369 => 251,  309 => 196,  300 => 193,  244 => 140,  240 => 139,  236 => 138,  232 => 136,  228 => 135,  139 => 48,  133 => 47,  106 => 25,  100 => 24,  91 => 21,  85 => 18,  80 => 16,  76 => 15,  71 => 13,  67 => 12,  62 => 10,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ':default:base2.html.twig' %}

{% block tite %}    <title> Page Admin</title>  {% endblock %}

{% block sheets %}
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"../assets/images/favicon.png\">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href=\"{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Footable CSS -->
    <link href=\"{{ asset('admin/assets/plugins/footable/css/footable.core.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/assets/plugins/bootstrap-select/bootstrap-select.min.css') }}\" rel=\"stylesheet\" />
    <!-- Page CSS -->
    <link href=\"{{ asset('admin/css/pages/contact-app-page.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('admin/css/pages/footable-page.css') }}\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link href=\"{{ asset('admin/css/style.css') }}\" rel=\"stylesheet\">
    <!-- You can change the theme colors from here -->
    <!-- You can change the theme colors from here -->
    <link href=\"{{ asset('admin/css/colors/default-dark.css') }}\" id=\"theme\" rel=\"stylesheet\">
{% endblock %}

{% block BreadCrumb %}
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=\"row page-titles\">
        <div class=\"col-md-5 align-self-center\">
            <h3 class=\"text-themecolor\">Administration</h3>
        </div>
        <div class=\"col-md-7 align-self-center\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Home</a></li>
                <li class=\"breadcrumb-item active\">Claims</li>
            </ol>
        </div>
        <div class=\"\">
            <button class=\"right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10\"><i class=\"ti-settings text-white\"></i></button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
{% endblock %}

{% block container %}

    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <!-- .left-right-aside-column-->
                <div class=\"contact-page-aside\">
                    <!-- .left-aside-column-->
                    <div class=\"left-aside bg-light-part\">
                        <ul class=\"list-style-none\">
                            <li class=\"box-label\"><a href=\"javascript:void(0)\">All Claims <span></span></a></li>
                            <li class=\"divider\"></li>

                            <li><a href=\"javascript:void(0)\">Technique <span></span></a></li>
                            <li><a href=\"javascript:void(0)\">Used Cars <span></span></a></li>
                            <li><a href=\"javascript:void(0)\">New Cars <span></span></a></li>
                            <li><a href=\"javascript:void(0)\">Others <span></span></a></li>
                            <div id=\"myModal\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h4 class=\"modal-title\" id=\"myModalLabel\">Add Lable</h4>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                        </div>
                                        <div class=\"modal-body\">
                                            <from class=\"form-horizontal\">
                                                <div class=\"form-group\">
                                                    <label class=\"col-md-12\">Name of Label</label>
                                                    <div class=\"col-md-12\">
                                                        <input type=\"text\" class=\"form-control\" placeholder=\"type name\"> </div>
                                                </div>
                                                <div class=\"form-group\">
                                                    <label class=\"col-md-12\">Select Number of people</label>
                                                    <div class=\"col-md-12\">
                                                        <select class=\"form-control\">
                                                            <option>All Contacts</option>
                                                            <option>10</option>
                                                            <option>20</option>
                                                            <option>30</option>
                                                            <option>40</option>
                                                            <option>Custome</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </from>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Save</button>
                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Cancel</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </ul>
                    </div>
                    <!-- /.left-aside-column-->
                    <div class=\"right-aside \">
                        <div class=\"right-page-header\">
                            <div class=\"d-flex\">
                                <div class=\"align-self-center\">
                                    <h4 class=\"card-title m-t-10\"> Claims List </h4></div>
                                <div class=\"ml-auto\">
                                    <input type=\"text\" id=\"demo-input-search2\" placeholder=\"search Claim\" class=\"form-control\"> </div>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table id=\"demo-foo-addrow\" class=\"table m-t-30 table-hover no-wrap contact-list\" data-page-size=\"10\">
                                <thead>
                                <tr>
                                    <th>Claim_id</th>
                                    <th>Object of the Claim</th>
                                    <th type=\"date\">Sending Date</th>
                                    <th>Details</th>
                                    <th>Handling</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <!--
                                    <td>
                                        <a href=\"app-contact-detail.html\"><img src=\"../assets/images/users/1.jpg\" alt=\"user\" class=\"img-circle\" /> Genelia Deshmukh</a>
                                    </td>

                                    <td>
                                        <button type=\"button\" class=\"btn btn-sm btn-icon btn-pure btn-outline delete-row-btn\" data-toggle=\"tooltip\" data-original-title=\"Delete\"><i class=\"ti-close\" aria-hidden=\"true\"></i></button>
                                    </td>-->
                                    {% for rec in reclams %}

                                    <tr>
                                        <td style=\"width:50px;\" align=\"center\"><span class=\"action-icons\">{{ rec.idReclamation }}</span></td>
                                        <td align=\"center\"><span class=\"label label-light-danger label-icon\">{{ rec.sujet }}</span></td>
                                        <td align=\"center\"><span class=\"label label-themecolor label-icon\">{{ rec.dateReclamation | date(\"y-m-d\") }}</span></td>

                                        <td >
                                            <button type=\"button\" class=\"btn btn-block btn-outline-success fa fa-check-square-o\" data-toggle=\"modal\"
                                                    data-target=\" #add-contact\" > Show Details</button>
                                            <div id=\"add-contact\"  class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h4 class=\"modal-title\" id=\"myModalLabel\">Claims List</h4>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <from class=\"form-horizontal form-material\">
                                                                <div class=\"form-group\">

                                                                    <div class=\"col-md-12 m-b-20\">
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> Date d'envoi : </label>

                                                                    </div>
                                                                    <div class=\"col-md-12 m-b-20\">
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> Objet : </label>
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> </label>
                                                                    </div>
                                                                    <div class=\"col-md-12 m-b-20\">
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> Description : </label>
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\">  </label>

                                                                    </div>
                                                                    <div class=\"col-md-12 m-b-20\">
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> Etat: </label>
                                                                        <label type=\"text\" class=\"form-control\" placeholder=\"Type name\"> </label>

                                                                    </div>

                                                                </div>
                                                            </from>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Save</button>
                                                            <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Cancel</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>

                                                <!-- /.modal-dialog -->
                                            </div>

                                        </td>
                                        <td >
                                            <button type=\"button\" class=\"btn btn-block btn-outline-warning fa fa-plus\" data-toggle=\"modal\" data-target=\"#todo\"> Add to 'To Do List</button>
                                        </td>
                                        <td><a href=\"{{ path('reclamation_Suppback',{'id':rec.idReclamation} ) }}\">X</a></td>
                                    </tr>
                                    {% endfor %}

                                </tbody>
                                <tfoot>
                                <tr>


                                    <div id=\"todo\" class=\"modal fade in\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h4 class=\"modal-title\" id=\"myModalLabel\">ADD TASK : </h4>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <from class=\"form-horizontal form-material\">
                                                        <div class=\"form-group\">

                                                                <div class=\"col-md-12 m-b-20\">
                                                                    <h5 class=\"modal-title\" id=\"myModalLabel\">TO DO : </h5><br>
                                                                    <textarea type=\"text\" class=\"form-control\" placeholder=\"TO DO\"> </textarea></div>


                                                        </div>
                                                    </from>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-info waves-effect\" data-dismiss=\"modal\">Save</button>
                                                    <button type=\"button\" class=\"btn btn-default waves-effect\" data-dismiss=\"modal\">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <td colspan=\"7\">
                                        <div class=\"text-right\">
                                            <ul class=\"pagination\"> </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>

                            </table>
                        </div>
                        <!-- .left-aside-column-->
                    </div>
                </div>
                    <!-- /.left-right-aside-column-->
            </div>
        </div>
    </div>
    </div>

{% endblock %}

{% block scripts %}
    <script src=\"{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"{{ asset('admin/assets/plugins/bootstrap/js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}\"></script>
    <!--Wave Effects -->
    <script src=\"{{ asset('admin/js/waves.js') }}\"></script>
    <!--Menu sidebar -->
    <script src=\"{{ asset('admin/js/sidebarmenu.js') }}\"></script>
    <!--stickey kit -->
    <script src=\"{{ asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/sparkline/jquery.sparkline.min.js') }}\"></script>
    <!--Custom JavaScript -->
    <script src=\"{{ asset('admin/js/custom.min.js') }}\"></script>
    <!-- Footable -->
    <script src=\"{{ asset('admin/assets/plugins/footable/js/footable.all.min.js') }}\"></script>
    <script src=\"{{ asset('admin/assets/plugins/bootstrap-select/bootstrap-select.min.js') }}\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"{{ asset('admin/js/footable-init.js') }}\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"{{ asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}\"></script>
{% endblock %}", "ReclamationBundle:Default:Reclam.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\ReclamationBundle\\Resources\\views\\Default\\Reclam.html.twig");
    }
}