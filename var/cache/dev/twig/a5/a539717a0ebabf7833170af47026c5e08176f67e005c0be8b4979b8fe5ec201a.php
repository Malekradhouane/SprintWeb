<?php

/* AutoEcoleBundle:Default:deletecours.html.twig */
class __TwigTemplate_265e716d8146ba1d20c7dd1f4998917a0abc6f7b01098dc7c3387f84e15d6d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:base2.html.twig", "AutoEcoleBundle:Default:deletecours.html.twig", 1);
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
        $__internal_3b9835d5db46af474c7e639c1458e7b37fa68bc41230e7472f7cf19b0e82afc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9835d5db46af474c7e639c1458e7b37fa68bc41230e7472f7cf19b0e82afc5->enter($__internal_3b9835d5db46af474c7e639c1458e7b37fa68bc41230e7472f7cf19b0e82afc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AutoEcoleBundle:Default:deletecours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b9835d5db46af474c7e639c1458e7b37fa68bc41230e7472f7cf19b0e82afc5->leave($__internal_3b9835d5db46af474c7e639c1458e7b37fa68bc41230e7472f7cf19b0e82afc5_prof);

    }

    // line 3
    public function block_tite($context, array $blocks = array())
    {
        $__internal_3dc6dbb522af4e31c9e79c5bfdc984cea0cc31c6ac2ecc83d00df5a502dab4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc6dbb522af4e31c9e79c5bfdc984cea0cc31c6ac2ecc83d00df5a502dab4ad->enter($__internal_3dc6dbb522af4e31c9e79c5bfdc984cea0cc31c6ac2ecc83d00df5a502dab4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tite"));

        echo "    <title> Page Admin</title>  ";
        
        $__internal_3dc6dbb522af4e31c9e79c5bfdc984cea0cc31c6ac2ecc83d00df5a502dab4ad->leave($__internal_3dc6dbb522af4e31c9e79c5bfdc984cea0cc31c6ac2ecc83d00df5a502dab4ad_prof);

    }

    // line 5
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_a13c6ba9850548b493b05b97315fdca3358416927639bb95180eb9d81388e1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13c6ba9850548b493b05b97315fdca3358416927639bb95180eb9d81388e1db->enter($__internal_a13c6ba9850548b493b05b97315fdca3358416927639bb95180eb9d81388e1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

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
        
        $__internal_a13c6ba9850548b493b05b97315fdca3358416927639bb95180eb9d81388e1db->leave($__internal_a13c6ba9850548b493b05b97315fdca3358416927639bb95180eb9d81388e1db_prof);

    }

    // line 24
    public function block_BreadCrumb($context, array $blocks = array())
    {
        $__internal_b6a8615e3a3356ed306c836c86ce5add8fe35acf28a32673fe9fdbebf8957c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a8615e3a3356ed306c836c86ce5add8fe35acf28a32673fe9fdbebf8957c44->enter($__internal_b6a8615e3a3356ed306c836c86ce5add8fe35acf28a32673fe9fdbebf8957c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BreadCrumb"));

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
        
        $__internal_b6a8615e3a3356ed306c836c86ce5add8fe35acf28a32673fe9fdbebf8957c44->leave($__internal_b6a8615e3a3356ed306c836c86ce5add8fe35acf28a32673fe9fdbebf8957c44_prof);

    }

    // line 47
    public function block_container($context, array $blocks = array())
    {
        $__internal_b8bed75c2309c11b2d5bad8fb624b33e10bb22767fd9bb02aa5e9272cfce87b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bed75c2309c11b2d5bad8fb624b33e10bb22767fd9bb02aa5e9272cfce87b7->enter($__internal_b8bed75c2309c11b2d5bad8fb624b33e10bb22767fd9bb02aa5e9272cfce87b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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


                                        </td>
                                        <td >
                                            <button type=\"button\" class=\"btn btn-block btn-outline-warning fa fa-plus\" data-toggle=\"modal\" data-target=\"#todo\"> Add to 'To Do List</button>
                                        </td>
                                    </tr>

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
        
        $__internal_b8bed75c2309c11b2d5bad8fb624b33e10bb22767fd9bb02aa5e9272cfce87b7->leave($__internal_b8bed75c2309c11b2d5bad8fb624b33e10bb22767fd9bb02aa5e9272cfce87b7_prof);

    }

    // line 195
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_57b1a72496f2f3e1e8a2655a37f7c65574f44118558207cdef189df738948655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b1a72496f2f3e1e8a2655a37f7c65574f44118558207cdef189df738948655->enter($__internal_57b1a72496f2f3e1e8a2655a37f7c65574f44118558207cdef189df738948655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 196
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!--Wave Effects -->
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/waves.js"), "html", null, true);
        echo "\"></script>
    <!--Menu sidebar -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <!--stickey kit -->
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!--Custom JavaScript -->
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Footable -->
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/footable/js/footable.all.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/bootstrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--FooTable init-->
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/footable-init.js"), "html", null, true);
        echo "\"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_57b1a72496f2f3e1e8a2655a37f7c65574f44118558207cdef189df738948655->leave($__internal_57b1a72496f2f3e1e8a2655a37f7c65574f44118558207cdef189df738948655_prof);

    }

    public function getTemplateName()
    {
        return "AutoEcoleBundle:Default:deletecours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 219,  350 => 215,  345 => 213,  341 => 212,  336 => 210,  331 => 208,  327 => 207,  322 => 205,  317 => 203,  312 => 201,  307 => 199,  303 => 198,  297 => 196,  291 => 195,  139 => 48,  133 => 47,  106 => 25,  100 => 24,  91 => 21,  85 => 18,  80 => 16,  76 => 15,  71 => 13,  67 => 12,  62 => 10,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
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


                                        </td>
                                        <td >
                                            <button type=\"button\" class=\"btn btn-block btn-outline-warning fa fa-plus\" data-toggle=\"modal\" data-target=\"#todo\"> Add to 'To Do List</button>
                                        </td>
                                    </tr>

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
{% endblock %}", "AutoEcoleBundle:Default:deletecours.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AutoEcoleBundle/Resources/views/Default/deletecours.html.twig");
    }
}
