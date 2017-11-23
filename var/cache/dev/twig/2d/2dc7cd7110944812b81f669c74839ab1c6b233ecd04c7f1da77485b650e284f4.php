<?php

/* :default:base2.html.twig */
class __TwigTemplate_0f4ae732126ce87d40165ddde3df9ed84d50d32ca70d8f1be93a2c4a10b2ee53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tite' => array($this, 'block_tite'),
            'sheets' => array($this, 'block_sheets'),
            'BreadCrumb' => array($this, 'block_BreadCrumb'),
            'container' => array($this, 'block_container'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_176f4a53632b4a8f2797c8a2afa9ffd21c8c5040acd1524e07ec46652b9e6b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176f4a53632b4a8f2797c8a2afa9ffd21c8c5040acd1524e07ec46652b9e6b4d->enter($__internal_176f4a53632b4a8f2797c8a2afa9ffd21c8c5040acd1524e07ec46652b9e6b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/main/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 22:56:25 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/assets/images/favicon.png"), "html", null, true);
        echo "\">
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        setInterval(function () {
            var notif = document.getElementById(\"notifications\");
            notif.innerHTML = getNotifCount();
            \$.ajax({
                url: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("count_notification");
        echo "',
                dataType: \"json\"
            });
        }, 5000);

        function getNotifCount() {
            var nbre;
            \$.ajax({
                url: '";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("count_notification");
        echo "',
                type: 'GET',
                async: false,
                ifModified: true,
                success: function (data) {
                    console.log(data);
                    nbre = data;

                }
            });
            return nbre;
        }
    </script>
     ";
        // line 42
        $this->displayBlock('tite', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('sheets', $context, $blocks);
        // line 48
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"fix-header fix-sidebar card-no-border\">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"loader\">
        <div class=\"loader__figure\"></div>
        <p class=\"loader__label\">Admin Pro</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-light\">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src=\"../assets/images/logo-icon.png\" alt=\"homepage\" class=\"dark-logo\" />
                        <!-- Light Logo icon -->
                        <img src=\"../assets/images/logo-light-icon.png\" alt=\"homepage\" class=\"light-logo\" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src=\"../assets/images/logo-text.png\" alt=\"homepage\" class=\"dark-logo\" />
                        <!-- Light Logo text -->
                         <img src=\"../assets/images/logo-light-text.png\" class=\"light-logo\" alt=\"homepage\" /></span> </a>
            </div>

            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav mr-auto\">
                    <!-- This is  -->
                    <li class=\"nav-item\"> <a class=\"nav-link nav-toggler hidden-md-up waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a> </li>
                    <li class=\"nav-item\"> <a class=\"nav-link sidebartoggler hidden-sm-down waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a> </li>

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav my-lg-0\">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                    <li class=\"nav-item hidden-xs-down search-box\"> <a class=\"nav-link hidden-sm-down waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                        <form class=\"app-search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search & enter\"> <a class=\"srh-btn\"><i class=\"ti-close\"></i></a> </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <!-- nott -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-message\"></i>
                            <div class=\"notify\">  <span></span> </div>
                        </a>

                    <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\">
                            <ul>
                                <li>
                                    <div class=\"drop-title\">Notifications</div>
                                </li>
                                <li>
                                    <div class=\"message-center\">
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"btn btn-danger btn-circle\"><i class=\"fa fa-link\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Luanch Admin</h5> <span class=\"mail-desc\">Just see the my new admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Event today</h5> <span class=\"mail-desc\">Just a reminder that you have event</span> <span class=\"time\">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"btn btn-info btn-circle\"><i class=\"ti-settings\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Settings</h5> <span class=\"mail-desc\">You can customize this template as you want</span> <span class=\"time\">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"btn btn-primary btn-circle\"><i class=\"ti-user\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class=\"nav-link text-center\" href=\"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation_back");
        echo "\"> <strong>Check all Claims</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" id=\"2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-email\"></i>
                            <div class=\"notify\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                        </a>
                        <div class=\"dropdown-menu mailbox dropdown-menu-right animated bounceInDown\" aria-labelledby=\"2\">
                            <ul>
                                <li>
                                    <div class=\"drop-title\">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class=\"message-center\">
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"../assets/images/users/1.jpg\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status online pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"../assets/images/users/2.jpg\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status busy pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Sonu Nigam</h5> <span class=\"mail-desc\">I've sung a song! See you at</span> <span class=\"time\">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"../assets/images/users/3.jpg\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status away pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Arijit Sinh</h5> <span class=\"mail-desc\">I am a singer!</span> <span class=\"time\">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"../assets/images/users/4.jpg\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status offline pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class=\"nav-link text-center\" href=\"javascript:void(0);\"> <strong>See all e-Mails</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown mega-dropdown\"> <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"mdi mdi-view-grid\"></i></a>
                        <div class=\"dropdown-menu animated bounceInDown\">
                            <ul class=\"mega-dropdown-menu row\">
                                <li class=\"col-lg-3 col-xlg-2 m-b-30\">
                                    <h4 class=\"m-b-20\">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"carousel-item active\">
                                                <div class=\"container\"> <img class=\"d-block img-fluid\" src=\"../assets/images/big/img1.jpg\" alt=\"First slide\"></div>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <div class=\"container\"><img class=\"d-block img-fluid\" src=\"../assets/images/big/img2.jpg\" alt=\"Second slide\"></div>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <div class=\"container\"><img class=\"d-block img-fluid\" src=\"../assets/images/big/img3.jpg\" alt=\"Third slide\"></div>
                                            </div>
                                        </div>
                                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Previous</span> </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class=\"col-lg-3 m-b-30\">
                                    <h4 class=\"m-b-20\">ACCORDION</h4>
                                    <!-- Accordian -->
                                    <div id=\"accordion\" class=\"nav-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                        <div class=\"card\">
                                            <div class=\"card-header\" role=\"tab\" id=\"headingOne\">
                                                <h5 class=\"mb-0\">
                                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </h5> </div>
                                            <div id=\"collapseOne\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                                <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header\" role=\"tab\" id=\"headingTwo\">
                                                <h5 class=\"mb-0\">
                                                    <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                        Collapsible Group Item #2
                                                    </a>
                                                </h5> </div>
                                            <div id=\"collapseTwo\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                                <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header\" role=\"tab\" id=\"headingThree\">
                                                <h5 class=\"mb-0\">
                                                    <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                        Collapsible Group Item #3
                                                    </a>
                                                </h5> </div>
                                            <div id=\"collapseThree\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                                                <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class=\"col-lg-3 col-xlg-4 m-b-30\">
                                    <h4 class=\"m-b-20\">List style</h4>
                                    <!-- List style -->
                                    <ul class=\"list-style-none\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> You can give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another Give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Forth link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another fifth link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"../assets/images/users/1.jpg\" alt=\"user\" class=\"profile-pic\" /></a>
                        <div class=\"dropdown-menu dropdown-menu-right animated flipInY\">
                            <ul class=\"dropdown-user\">
                                <li>
                                    <div class=\"dw-user-box\">
                                        <div class=\"u-img\"><img src=\"../assets/images/users/1.jpg\" alt=\"user\"></div>
                                        <div class=\"u-text\">
                                            <h4>Steave Jobs</h4>
                                            <p class=\"text-muted\">varun@gmail.com</p><a href=\"pages-profile.html\" class=\"btn btn-rounded btn-danger btn-sm\">View Profile</a></div>
                                    </div>
                                </li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"ti-user\"></i> My Profile</a></li>
                                <li><a href=\"#\"><i class=\"ti-email\"></i> Inbox</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"ti-settings\"></i> Account Setting</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class=\"left-sidebar\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\">
                    <li class=\"user-profile\">
                        <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><img src=\"../assets/images/users/profile.png\" alt=\"user\" /><span class=\"hide-menu\">Steave Jobs </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"javascript:void(0)\">My Profile </a></li>
                            <li><a href=\"javascript:void(0)\">Inbox</a></li>
                            <li><a href=\"javascript:void(0)\">Account Setting</a></li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell-o\"></i>
                                    <span class=\"label label-warning\" id=\"notifications\">Announcements</span>
                                </a>

                            </li>
                            <li><a href=\"";
        // line 360
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annonce_admin");
        echo "\">Announcements</a></li>
                            <li><a href=\"javascript:void(0)\">Logout</a></li>

                        </ul>
                    </li>
                    <li class=\"nav-devider\"></li>

                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-email\"></i><span class=\"hide-menu\">Inbox</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"app-email.html\">Mailbox</a></li>
                            <li><a href=\"app-email-detail.html\">Mailbox Detail</a></li>
                            <li><a href=\"app-compose.html\">Compose Mail</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
            ";
        // line 393
        $this->displayBlock('BreadCrumb', $context, $blocks);
        // line 394
        echo "            ";
        $this->displayBlock('container', $context, $blocks);
        // line 395
        echo "            <!-- footer -->
        <footer class=\"footer\"> © 2017 Karhbaty </footer>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

";
        // line 408
        $this->displayBlock('scripts', $context, $blocks);
        // line 415
        echo "</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/main/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 22:56:26 GMT -->
</html>";
        
        $__internal_176f4a53632b4a8f2797c8a2afa9ffd21c8c5040acd1524e07ec46652b9e6b4d->leave($__internal_176f4a53632b4a8f2797c8a2afa9ffd21c8c5040acd1524e07ec46652b9e6b4d_prof);

    }

    // line 42
    public function block_tite($context, array $blocks = array())
    {
        $__internal_7ef737d40e7de4a0da57d074755848c82c3a1e25417662168160ae740c77ccaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef737d40e7de4a0da57d074755848c82c3a1e25417662168160ae740c77ccaa->enter($__internal_7ef737d40e7de4a0da57d074755848c82c3a1e25417662168160ae740c77ccaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tite"));

        // line 43
        echo "     ";
        
        $__internal_7ef737d40e7de4a0da57d074755848c82c3a1e25417662168160ae740c77ccaa->leave($__internal_7ef737d40e7de4a0da57d074755848c82c3a1e25417662168160ae740c77ccaa_prof);

    }

    // line 45
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_3320834a2019a48a7416c4e90512c7ccf68312388de7973bb595150ec88717ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3320834a2019a48a7416c4e90512c7ccf68312388de7973bb595150ec88717ee->enter($__internal_3320834a2019a48a7416c4e90512c7ccf68312388de7973bb595150ec88717ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        // line 46
        echo "
    ";
        
        $__internal_3320834a2019a48a7416c4e90512c7ccf68312388de7973bb595150ec88717ee->leave($__internal_3320834a2019a48a7416c4e90512c7ccf68312388de7973bb595150ec88717ee_prof);

    }

    // line 393
    public function block_BreadCrumb($context, array $blocks = array())
    {
        $__internal_0e6b1df2916bb3415b998afbefde3c822e2240a56f52368f54f8860c26074118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6b1df2916bb3415b998afbefde3c822e2240a56f52368f54f8860c26074118->enter($__internal_0e6b1df2916bb3415b998afbefde3c822e2240a56f52368f54f8860c26074118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BreadCrumb"));

        echo " ";
        
        $__internal_0e6b1df2916bb3415b998afbefde3c822e2240a56f52368f54f8860c26074118->leave($__internal_0e6b1df2916bb3415b998afbefde3c822e2240a56f52368f54f8860c26074118_prof);

    }

    // line 394
    public function block_container($context, array $blocks = array())
    {
        $__internal_dd76131ba7bff532bceab73e01482bbe5a911bd5291a5e0dc222ae2966f95bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd76131ba7bff532bceab73e01482bbe5a911bd5291a5e0dc222ae2966f95bc0->enter($__internal_dd76131ba7bff532bceab73e01482bbe5a911bd5291a5e0dc222ae2966f95bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        echo " ";
        
        $__internal_dd76131ba7bff532bceab73e01482bbe5a911bd5291a5e0dc222ae2966f95bc0->leave($__internal_dd76131ba7bff532bceab73e01482bbe5a911bd5291a5e0dc222ae2966f95bc0_prof);

    }

    // line 408
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_5854214826438edf63bac50d0b8d10584064e3b32a16976a40ef30a845278eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5854214826438edf63bac50d0b8d10584064e3b32a16976a40ef30a845278eb8->enter($__internal_5854214826438edf63bac50d0b8d10584064e3b32a16976a40ef30a845278eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 409
        echo "
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->

";
        
        $__internal_5854214826438edf63bac50d0b8d10584064e3b32a16976a40ef30a845278eb8->leave($__internal_5854214826438edf63bac50d0b8d10584064e3b32a16976a40ef30a845278eb8_prof);

    }

    public function getTemplateName()
    {
        return ":default:base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 409,  523 => 408,  511 => 394,  499 => 393,  491 => 46,  485 => 45,  478 => 43,  472 => 42,  461 => 415,  459 => 408,  444 => 395,  441 => 394,  439 => 393,  403 => 360,  204 => 164,  86 => 48,  84 => 45,  81 => 44,  79 => 42,  63 => 29,  52 => 21,  42 => 14,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/main/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 22:56:25 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('admin/assets/images/favicon.png') }}\">
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        setInterval(function () {
            var notif = document.getElementById(\"notifications\");
            notif.innerHTML = getNotifCount();
            \$.ajax({
                url: '{{ path('count_notification') }}',
                dataType: \"json\"
            });
        }, 5000);

        function getNotifCount() {
            var nbre;
            \$.ajax({
                url: '{{ path('count_notification') }}',
                type: 'GET',
                async: false,
                ifModified: true,
                success: function (data) {
                    console.log(data);
                    nbre = data;

                }
            });
            return nbre;
        }
    </script>
     {% block tite %}
     {% endblock %}

    {% block sheets %}

    {% endblock %}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"fix-header fix-sidebar card-no-border\">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class=\"preloader\">
    <div class=\"loader\">
        <div class=\"loader__figure\"></div>
        <p class=\"loader__label\">Admin Pro</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id=\"main-wrapper\">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class=\"topbar\">
        <nav class=\"navbar top-navbar navbar-expand-md navbar-light\">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"index.html\">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class=\"wi wi-sunset\"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src=\"../assets/images/logo-icon.png\" alt=\"homepage\" class=\"dark-logo\" />
                        <!-- Light Logo icon -->
                        <img src=\"../assets/images/logo-light-icon.png\" alt=\"homepage\" class=\"light-logo\" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src=\"../assets/images/logo-text.png\" alt=\"homepage\" class=\"dark-logo\" />
                        <!-- Light Logo text -->
                         <img src=\"../assets/images/logo-light-text.png\" class=\"light-logo\" alt=\"homepage\" /></span> </a>
            </div>

            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class=\"navbar-collapse\">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav mr-auto\">
                    <!-- This is  -->
                    <li class=\"nav-item\"> <a class=\"nav-link nav-toggler hidden-md-up waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a> </li>
                    <li class=\"nav-item\"> <a class=\"nav-link sidebartoggler hidden-sm-down waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-menu\"></i></a> </li>

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class=\"navbar-nav my-lg-0\">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                    <li class=\"nav-item hidden-xs-down search-box\"> <a class=\"nav-link hidden-sm-down waves-effect waves-dark\" href=\"javascript:void(0)\"><i class=\"ti-search\"></i></a>
                        <form class=\"app-search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search & enter\"> <a class=\"srh-btn\"><i class=\"ti-close\"></i></a> </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <!-- nott -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-message\"></i>
                            <div class=\"notify\">  <span></span> </div>
                        </a>

                    <div class=\"dropdown-menu dropdown-menu-right mailbox animated bounceInDown\">
                            <ul>
                                <li>
                                    <div class=\"drop-title\">Notifications</div>
                                </li>
                                <li>
                                    <div class=\"message-center\">
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"btn btn-danger btn-circle\"><i class=\"fa fa-link\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Luanch Admin</h5> <span class=\"mail-desc\">Just see the my new admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"btn btn-success btn-circle\"><i class=\"ti-calendar\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Event today</h5> <span class=\"mail-desc\">Just a reminder that you have event</span> <span class=\"time\">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"btn btn-info btn-circle\"><i class=\"ti-settings\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Settings</h5> <span class=\"mail-desc\">You can customize this template as you want</span> <span class=\"time\">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"btn btn-primary btn-circle\"><i class=\"ti-user\"></i></div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class=\"nav-link text-center\" href=\"{{ path('reclamation_back') }}\"> <strong>Check all Claims</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" id=\"2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"mdi mdi-email\"></i>
                            <div class=\"notify\"> <span class=\"heartbit\"></span> <span class=\"point\"></span> </div>
                        </a>
                        <div class=\"dropdown-menu mailbox dropdown-menu-right animated bounceInDown\" aria-labelledby=\"2\">
                            <ul>
                                <li>
                                    <div class=\"drop-title\">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class=\"message-center\">
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"../assets/images/users/1.jpg\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status online pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"../assets/images/users/2.jpg\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status busy pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Sonu Nigam</h5> <span class=\"mail-desc\">I've sung a song! See you at</span> <span class=\"time\">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"../assets/images/users/3.jpg\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status away pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Arijit Sinh</h5> <span class=\"mail-desc\">I am a singer!</span> <span class=\"time\">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href=\"#\">
                                            <div class=\"user-img\"> <img src=\"../assets/images/users/4.jpg\" alt=\"user\" class=\"img-circle\"> <span class=\"profile-status offline pull-right\"></span> </div>
                                            <div class=\"mail-contnet\">
                                                <h5>Pavan kumar</h5> <span class=\"mail-desc\">Just see the my admin!</span> <span class=\"time\">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class=\"nav-link text-center\" href=\"javascript:void(0);\"> <strong>See all e-Mails</strong> <i class=\"fa fa-angle-right\"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown mega-dropdown\"> <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"mdi mdi-view-grid\"></i></a>
                        <div class=\"dropdown-menu animated bounceInDown\">
                            <ul class=\"mega-dropdown-menu row\">
                                <li class=\"col-lg-3 col-xlg-2 m-b-30\">
                                    <h4 class=\"m-b-20\">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"carousel-item active\">
                                                <div class=\"container\"> <img class=\"d-block img-fluid\" src=\"../assets/images/big/img1.jpg\" alt=\"First slide\"></div>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <div class=\"container\"><img class=\"d-block img-fluid\" src=\"../assets/images/big/img2.jpg\" alt=\"Second slide\"></div>
                                            </div>
                                            <div class=\"carousel-item\">
                                                <div class=\"container\"><img class=\"d-block img-fluid\" src=\"../assets/images/big/img3.jpg\" alt=\"Third slide\"></div>
                                            </div>
                                        </div>
                                        <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\"> <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Previous</span> </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\"> <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span> <span class=\"sr-only\">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class=\"col-lg-3 m-b-30\">
                                    <h4 class=\"m-b-20\">ACCORDION</h4>
                                    <!-- Accordian -->
                                    <div id=\"accordion\" class=\"nav-accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                                        <div class=\"card\">
                                            <div class=\"card-header\" role=\"tab\" id=\"headingOne\">
                                                <h5 class=\"mb-0\">
                                                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                                        Collapsible Group Item #1
                                                    </a>
                                                </h5> </div>
                                            <div id=\"collapseOne\" class=\"collapse show\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                                                <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header\" role=\"tab\" id=\"headingTwo\">
                                                <h5 class=\"mb-0\">
                                                    <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                                        Collapsible Group Item #2
                                                    </a>
                                                </h5> </div>
                                            <div id=\"collapseTwo\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
                                                <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-header\" role=\"tab\" id=\"headingThree\">
                                                <h5 class=\"mb-0\">
                                                    <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                                        Collapsible Group Item #3
                                                    </a>
                                                </h5> </div>
                                            <div id=\"collapseThree\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
                                                <div class=\"card-body\"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class=\"col-lg-3 col-xlg-4 m-b-30\">
                                    <h4 class=\"m-b-20\">List style</h4>
                                    <!-- List style -->
                                    <ul class=\"list-style-none\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> You can give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another Give link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Forth link</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"fa fa-check text-success\"></i> Another fifth link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle waves-effect waves-dark\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><img src=\"../assets/images/users/1.jpg\" alt=\"user\" class=\"profile-pic\" /></a>
                        <div class=\"dropdown-menu dropdown-menu-right animated flipInY\">
                            <ul class=\"dropdown-user\">
                                <li>
                                    <div class=\"dw-user-box\">
                                        <div class=\"u-img\"><img src=\"../assets/images/users/1.jpg\" alt=\"user\"></div>
                                        <div class=\"u-text\">
                                            <h4>Steave Jobs</h4>
                                            <p class=\"text-muted\">varun@gmail.com</p><a href=\"pages-profile.html\" class=\"btn btn-rounded btn-danger btn-sm\">View Profile</a></div>
                                    </div>
                                </li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"ti-user\"></i> My Profile</a></li>
                                <li><a href=\"#\"><i class=\"ti-email\"></i> Inbox</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"ti-settings\"></i> Account Setting</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"fa fa-power-off\"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class=\"left-sidebar\">
        <!-- Sidebar scroll-->
        <div class=\"scroll-sidebar\">
            <!-- Sidebar navigation-->
            <nav class=\"sidebar-nav\">
                <ul id=\"sidebarnav\">
                    <li class=\"user-profile\">
                        <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><img src=\"../assets/images/users/profile.png\" alt=\"user\" /><span class=\"hide-menu\">Steave Jobs </span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"javascript:void(0)\">My Profile </a></li>
                            <li><a href=\"javascript:void(0)\">Inbox</a></li>
                            <li><a href=\"javascript:void(0)\">Account Setting</a></li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-bell-o\"></i>
                                    <span class=\"label label-warning\" id=\"notifications\">Announcements</span>
                                </a>

                            </li>
                            <li><a href=\"{{ path('annonce_admin') }}\">Announcements</a></li>
                            <li><a href=\"javascript:void(0)\">Logout</a></li>

                        </ul>
                    </li>
                    <li class=\"nav-devider\"></li>

                    <li> <a class=\"has-arrow waves-effect waves-dark\" href=\"#\" aria-expanded=\"false\"><i class=\"mdi mdi-email\"></i><span class=\"hide-menu\">Inbox</span></a>
                        <ul aria-expanded=\"false\" class=\"collapse\">
                            <li><a href=\"app-email.html\">Mailbox</a></li>
                            <li><a href=\"app-email-detail.html\">Mailbox Detail</a></li>
                            <li><a href=\"app-compose.html\">Compose Mail</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class=\"page-wrapper\">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class=\"container-fluid\">
            {% block BreadCrumb %} {% endblock %}
            {% block container %} {% endblock %}
            <!-- footer -->
        <footer class=\"footer\"> © 2017 Karhbaty </footer>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

{% block scripts %}

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->

{% endblock  %}
</body>


<!-- Mirrored from wrappixel.com/demos/admin-templates/admin-pro/main/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2017 22:56:26 GMT -->
</html>", ":default:base2.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\app/Resources\\views/default/base2.html.twig");
    }
}
