<?php

/* @Template/Default/index.html.twig */
class __TwigTemplate_807fa28e81f5bf814b8287e55da694ee9013730c0c0e64c5ff8496ce8caee840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Template/Default/index.html.twig", 1);
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
        $__internal_c637241de4504eb18e703dd718979cb7d3485a62b5de47627dc4c24d043594e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c637241de4504eb18e703dd718979cb7d3485a62b5de47627dc4c24d043594e2->enter($__internal_c637241de4504eb18e703dd718979cb7d3485a62b5de47627dc4c24d043594e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Template/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c637241de4504eb18e703dd718979cb7d3485a62b5de47627dc4c24d043594e2->leave($__internal_c637241de4504eb18e703dd718979cb7d3485a62b5de47627dc4c24d043594e2_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_361295ef68e9cf008d870331d02675bcaf6232869a3140d6517e65811cf06e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361295ef68e9cf008d870331d02675bcaf6232869a3140d6517e65811cf06e1a->enter($__internal_361295ef68e9cf008d870331d02675bcaf6232869a3140d6517e65811cf06e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_361295ef68e9cf008d870331d02675bcaf6232869a3140d6517e65811cf06e1a->leave($__internal_361295ef68e9cf008d870331d02675bcaf6232869a3140d6517e65811cf06e1a_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_cb3cf8c7f0d400624f4b2799dd450643986515b288e6a071c7dc365083e0aa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3cf8c7f0d400624f4b2799dd450643986515b288e6a071c7dc365083e0aa35->enter($__internal_cb3cf8c7f0d400624f4b2799dd450643986515b288e6a071c7dc365083e0aa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_cb3cf8c7f0d400624f4b2799dd450643986515b288e6a071c7dc365083e0aa35->leave($__internal_cb3cf8c7f0d400624f4b2799dd450643986515b288e6a071c7dc365083e0aa35_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_e4b0f4a81d435f6fec57c8da0d852ddf46304b916afc83a01dad243048ee38ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b0f4a81d435f6fec57c8da0d852ddf46304b916afc83a01dad243048ee38ac->enter($__internal_e4b0f4a81d435f6fec57c8da0d852ddf46304b916afc83a01dad243048ee38ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

        // line 26
        echo "
    <!-- Banners -->
    <section id=\"banner\" class=\"banner-section\">
        <div class=\"container\">
            <div class=\"div_zindex\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-md-push-7\">
                        <div class=\"banner_content\">
                            <h1>Find the right car for you.</h1>
                            <p>We have more than a thousand cars for you to choose. </p>
                            <a href=\"#\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banners -->

";
        
        $__internal_e4b0f4a81d435f6fec57c8da0d852ddf46304b916afc83a01dad243048ee38ac->leave($__internal_e4b0f4a81d435f6fec57c8da0d852ddf46304b916afc83a01dad243048ee38ac_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d26a4b3e993c5258017deda5ae01d344b43ee29f9cfc6e34c56460588001643d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26a4b3e993c5258017deda5ae01d344b43ee29f9cfc6e34c56460588001643d->enter($__internal_d26a4b3e993c5258017deda5ae01d344b43ee29f9cfc6e34c56460588001643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 48
        echo "
    <!-- Filter-Form -->
    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"container\">
            <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>
            <div class=\"row\">
                <form action=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recherche_annonce");
        echo "\" method=\"POST\">
                    <div class=\"form-group col-md-3 col-sm-6 black_input\">
                        <div class=\"select\">
                            <select  name=\"location\" class=\"form-control\">
                                <option name=\"shay\">Select Location </option>
                                <option name=\"ben_arous\">Ben arous </option>
                                <option na=\"Tunis\">Tunis </option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group col-md-3 col-sm-6 black_input\">
                        <div class=\"select\">
                            <select name=\"categorie\" class=\"form-control\">
                                <option>Select Brand</option>
                                <option>Audi</option>
                                <option>BMW</option>
                                <option>Nissan</option>
                                <option>Toyota</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group col-md-6 col-sm-6 black_input\">
                        <label class=\"form-label\">Price Range (DT)</label>
                        <input name=\"price_range\" id=\"price_range\" type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1000\" data-slider-max=\"50000\" data-slider-step=\"5\" data-slider-value=\"[1000,50000]\"/>
                    </div>
                    <div class=\"form-group col-md-3 col-sm-6 black_input\">
                        <div class=\"select\">
                            <select name=\"type\" class=\"form-control\">
                                <option>Type of Car </option>
                                <option>New Car</option>
                                <option>Used Car</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group col-md-3 col-sm-6\">
                        <button type=\"submit\" class=\"btn btn-block\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i> Search Car </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /Filter-Form -->

    <!-- About -->
    <section class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Welcome <span>to Karhabty</span></h2>
                <p>The process of finding and purchasing your dream vehicule can be quite the headache ... But your mission is completed with Karhabty ,the best cars website providing you with all the necessary informations </p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/looking-used-car.png"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>Looking <span>Used Car?</span></h3><br>

                            <a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_old");
        echo "\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/looking-new-car.png"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>Looking <span>New Car?</span></h3> <br>

                            <a href=\"";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_new");
        echo "\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About -->

    <!-- Resent Cat-->
    <section class=\"section-padding gray-bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Find the Best <span>CarForYou</span></h2>
                <p>It's easy to get screwed with a car, but fear no more, Karhabty is here to help. Follow us and you should have no problem at all buying your car. Enjoy the ride !</p>
            </div>
            <div class=\"row\">

                <!-- Nav tabs -->
                <div class=\"recent-tab\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#resentnewcar\" role=\"tab\" data-toggle=\"tab\">New Car</a></li>
                        <li role=\"presentation\"><a href=\"#resentusecar\" role=\"tab\" data-toggle=\"tab\">Use Car</a></li>
                    </ul>
                </div>
                <!-- Recently Listed New Cars -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"resentnewcar\">
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare4\">
                                            <label for=\"compare4\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Ford Shelby GT350</a></h6>
                                    <span class=\"price\">\$45,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare5\">
                                            <label for=\"compare5\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">BMW 535i</a></h6>
                                    <span class=\"price\">\$20,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare6\">
                                            <label for=\"compare6\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Volvo v40</a></h6>
                                    <span class=\"price\">\$60,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare7\">
                                            <label for=\"compare7\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Audi TT RS</a></h6>
                                    <span class=\"price\">\$90,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Great explorer of the truth, the master-builder of human happiness.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare8\">
                                            <label for=\"compare8\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Audi A3</a></h6>
                                    <span class=\"price\">\$49,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare9\">
                                            <label for=\"compare9\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">BMW 535i</a></h6>
                                    <span class=\"price\">\$20,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recently Listed Used Cars -->
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"resentusecar\">
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare90\">
                                            <label for=\"compare9\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Audi TT RS</a></h6>
                                    <span class=\"price\">\$90,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare10\">
                                            <label for=\"compare10\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Audi A3</a></h6>
                                    <span class=\"price\">\$49,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare11\">
                                            <label for=\"compare11\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">BMW 535i</a></h6>
                                    <span class=\"price\">\$20,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare12\">
                                            <label for=\"compare12\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Ford Shelby GT350</a></h6>
                                    <span class=\"price\">\$45,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare13\">
                                            <label for=\"compare13\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">BMW 535i</a></h6>
                                    <span class=\"price\">\$20,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-car-3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare14\">
                                            <label for=\"compare14\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Volvo v40</a></h6>
                                    <span class=\"price\">\$60,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Resent Cat -->

    <!-- Fun Facts-->
    <section class=\"fun-facts-section\">
        <div class=\"container div_zindex\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-xs-6 col-sm-3\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>40+</h2>
                            <p>Years In Business</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6 col-sm-3\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-car\" aria-hidden=\"true\"></i>1200+</h2>
                            <p>New Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6 col-sm-3\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-car\" aria-hidden=\"true\"></i>1000+</h2>
                            <p>Used Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6 col-sm-3\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i>600+</h2>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Fun Facts-->




    <!--Trending Car-->
    <section class=\"section-padding gray-bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Trending <span>Cars of the Year</span></h2>
                <p></p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div id=\"trending_slider\">
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">BMW 535i</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Trending Car-->

    <!--Testimonial -->
    <section class=\"section-padding testimonial-section parallex-bg\">
        <div class=\"container div_zindex\">
            <div class=\"section-header white-text text-center\">
                <h2>Our Satisfied <span>Customers</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
            <div class=\"row\">
                <div id=\"testimonial-slider\">
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/testimonial-img-1.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Donald Brooks</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/testimonial-img-2.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Enzo Giovanotelli</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/testimonial-img-1.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Donald Brooks</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/testimonial-img-2.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Enzo Giovanotelli</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/testimonial-img-1.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Donald Brooks</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/testimonial-img-2.jpg"), "html", null, true);
        echo "\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Enzo Giovanotelli</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Testimonial-->

    <!--Blog -->
    <section class=\"section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Latest Updates In<span> Automobile Industry</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4\">
                    <article class=\"blog-list\">
                        <div class=\"blog-info-box\">
                            <div class=\"share_article\">
                                <p><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></p>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <a href=\"#\"><img src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-blog-1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>Latest Cars</a></li>
                                <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>15 Nov 2016</li>
                                <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>10 Comments</a></li>
                            </ul>
                        </div>
                        <div class=\"blog-content\">
                            <h5><a href=\"#\">But I must explain to you how all this mistaken idea.</a></h5>
                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
                            <a href=\"#\" class=\"btn-link\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
                    </article>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <article class=\"blog-list\">
                        <div class=\"blog-info-box\">
                            <div class=\"share_article\">
                                <p><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></p>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <a href=\"#\"><img src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-blog-2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>Latest Cars</a></li>
                                <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>10 Nov 2016</li>
                                <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>21 Comments</a></li>
                            </ul>
                        </div>
                        <div class=\"blog-content\">
                            <h5><a href=\"#\">On the other hand, we denounce with righteous indignation.</a></h5>
                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
                            <a href=\"#\" class=\"btn-link\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
                    </article>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <article class=\"blog-list\">
                        <div class=\"blog-info-box\">
                            <div class=\"share_article\">
                                <p><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></p>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <a href=\"#\"><img src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/recent-blog-3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\"></a>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>Latest Cars</a></li>
                                <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>05 Nov 2016</li>
                                <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>18 Comments</a></li>
                            </ul>
                        </div>
                        <div class=\"blog-content\">
                            <h5><a href=\"#\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a></h5>
                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
                            <a href=\"#\" class=\"btn-link\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog-->

";
        
        $__internal_d26a4b3e993c5258017deda5ae01d344b43ee29f9cfc6e34c56460588001643d->leave($__internal_d26a4b3e993c5258017deda5ae01d344b43ee29f9cfc6e34c56460588001643d_prof);

    }

    // line 706
    public function block_Script($context, array $blocks = array())
    {
        $__internal_0459663f2a9e61e408b2e3774612515406fb626400956f9d72556349ebeee798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0459663f2a9e61e408b2e3774612515406fb626400956f9d72556349ebeee798->enter($__internal_0459663f2a9e61e408b2e3774612515406fb626400956f9d72556349ebeee798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 707
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_0459663f2a9e61e408b2e3774612515406fb626400956f9d72556349ebeee798->leave($__internal_0459663f2a9e61e408b2e3774612515406fb626400956f9d72556349ebeee798_prof);

    }

    public function getTemplateName()
    {
        return "@Template/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  931 => 716,  927 => 715,  922 => 713,  917 => 711,  913 => 710,  909 => 709,  905 => 707,  899 => 706,  873 => 686,  845 => 661,  817 => 636,  778 => 600,  766 => 591,  754 => 582,  742 => 573,  730 => 564,  718 => 555,  693 => 533,  684 => 527,  675 => 521,  666 => 515,  657 => 509,  648 => 503,  559 => 417,  532 => 393,  505 => 369,  478 => 345,  451 => 321,  424 => 297,  393 => 269,  366 => 245,  339 => 221,  312 => 197,  285 => 173,  258 => 149,  226 => 120,  219 => 116,  211 => 111,  204 => 107,  148 => 54,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
    Welcome - Karhabty
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

    <!-- Banners -->
    <section id=\"banner\" class=\"banner-section\">
        <div class=\"container\">
            <div class=\"div_zindex\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-md-push-7\">
                        <div class=\"banner_content\">
                            <h1>Find the right car for you.</h1>
                            <p>We have more than a thousand cars for you to choose. </p>
                            <a href=\"#\" class=\"btn\">Read More <span class=\"angle_arrow\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banners -->

{% endblock %}

{% block Content %}

    <!-- Filter-Form -->
    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"container\">
            <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>
            <div class=\"row\">
                <form action=\"{{ path('recherche_annonce') }}\" method=\"POST\">
                    <div class=\"form-group col-md-3 col-sm-6 black_input\">
                        <div class=\"select\">
                            <select  name=\"location\" class=\"form-control\">
                                <option name=\"shay\">Select Location </option>
                                <option name=\"ben_arous\">Ben arous </option>
                                <option na=\"Tunis\">Tunis </option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group col-md-3 col-sm-6 black_input\">
                        <div class=\"select\">
                            <select name=\"categorie\" class=\"form-control\">
                                <option>Select Brand</option>
                                <option>Audi</option>
                                <option>BMW</option>
                                <option>Nissan</option>
                                <option>Toyota</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group col-md-6 col-sm-6 black_input\">
                        <label class=\"form-label\">Price Range (DT)</label>
                        <input name=\"price_range\" id=\"price_range\" type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1000\" data-slider-max=\"50000\" data-slider-step=\"5\" data-slider-value=\"[1000,50000]\"/>
                    </div>
                    <div class=\"form-group col-md-3 col-sm-6 black_input\">
                        <div class=\"select\">
                            <select name=\"type\" class=\"form-control\">
                                <option>Type of Car </option>
                                <option>New Car</option>
                                <option>Used Car</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group col-md-3 col-sm-6\">
                        <button type=\"submit\" class=\"btn btn-block\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i> Search Car </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /Filter-Form -->

    <!-- About -->
    <section class=\"about-us-section section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Welcome <span>to Karhabty</span></h2>
                <p>The process of finding and purchasing your dream vehicule can be quite the headache ... But your mission is completed with Karhabty ,the best cars website providing you with all the necessary informations </p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"{{ asset('images/looking-used-car.png') }}\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>Looking <span>Used Car?</span></h3><br>

                            <a href=\"{{ path('afficher_old') }}\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"{{ asset('images/looking-new-car.png') }}\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>Looking <span>New Car?</span></h3> <br>

                            <a href=\"{{ path('afficher_new') }}\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About -->

    <!-- Resent Cat-->
    <section class=\"section-padding gray-bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Find the Best <span>CarForYou</span></h2>
                <p>It's easy to get screwed with a car, but fear no more, Karhabty is here to help. Follow us and you should have no problem at all buying your car. Enjoy the ride !</p>
            </div>
            <div class=\"row\">

                <!-- Nav tabs -->
                <div class=\"recent-tab\">
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li role=\"presentation\" class=\"active\"><a href=\"#resentnewcar\" role=\"tab\" data-toggle=\"tab\">New Car</a></li>
                        <li role=\"presentation\"><a href=\"#resentusecar\" role=\"tab\" data-toggle=\"tab\">Use Car</a></li>
                    </ul>
                </div>
                <!-- Recently Listed New Cars -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"resentnewcar\">
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-1.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare4\">
                                            <label for=\"compare4\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Ford Shelby GT350</a></h6>
                                    <span class=\"price\">\$45,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-2.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare5\">
                                            <label for=\"compare5\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">BMW 535i</a></h6>
                                    <span class=\"price\">\$20,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-3.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare6\">
                                            <label for=\"compare6\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Volvo v40</a></h6>
                                    <span class=\"price\">\$60,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-4.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare7\">
                                            <label for=\"compare7\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Audi TT RS</a></h6>
                                    <span class=\"price\">\$90,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Great explorer of the truth, the master-builder of human happiness.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-5.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare8\">
                                            <label for=\"compare8\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Audi A3</a></h6>
                                    <span class=\"price\">\$49,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-6.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare9\">
                                            <label for=\"compare9\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">BMW 535i</a></h6>
                                    <span class=\"price\">\$20,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recently Listed Used Cars -->
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"resentusecar\">
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-4.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare90\">
                                            <label for=\"compare9\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Audi TT RS</a></h6>
                                    <span class=\"price\">\$90,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-5.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare10\">
                                            <label for=\"compare10\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Audi A3</a></h6>
                                    <span class=\"price\">\$49,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>But I must explain to you how all this mistaken idea of denouncing.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-6.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare11\">
                                            <label for=\"compare11\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">BMW 535i</a></h6>
                                    <span class=\"price\">\$20,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-1.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare12\">
                                            <label for=\"compare12\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Ford Shelby GT350</a></h6>
                                    <span class=\"price\">\$45,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-2.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare13\">
                                            <label for=\"compare13\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">BMW 535i</a></h6>
                                    <span class=\"price\">\$20,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-list-3\">
                            <div class=\"recent-car-list\">
                                <div class=\"car-info-box\"> <a href=\"#\"><img src=\"{{ asset('images/recent-car-3.jpg') }}\" class=\"img-responsive\" alt=\"\"></a>
                                    <div class=\"compare_item\">
                                        <div class=\"checkbox\">
                                            <input type=\"checkbox\" id=\"compare14\">
                                            <label for=\"compare14\">Compare</label>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><i class=\"fa fa-road\" aria-hidden=\"true\"></i>20,000 km</li>
                                        <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>2005 Model</li>
                                        <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Colorado, USA</li>
                                    </ul>
                                </div>
                                <div class=\"car-title-m\">
                                    <h6><a href=\"#\">Volvo v40</a></h6>
                                    <span class=\"price\">\$60,000</span>
                                </div>
                                <div class=\"inventory_info_m\">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Resent Cat -->

    <!-- Fun Facts-->
    <section class=\"fun-facts-section\">
        <div class=\"container div_zindex\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-xs-6 col-sm-3\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>40+</h2>
                            <p>Years In Business</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6 col-sm-3\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-car\" aria-hidden=\"true\"></i>1200+</h2>
                            <p>New Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6 col-sm-3\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-car\" aria-hidden=\"true\"></i>1000+</h2>
                            <p>Used Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-xs-6 col-sm-3\">
                    <div class=\"fun-facts-m\">
                        <div class=\"cell\">
                            <h2><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i>600+</h2>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Fun Facts-->




    <!--Trending Car-->
    <section class=\"section-padding gray-bg\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Trending <span>Cars of the Year</span></h2>
                <p></p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div id=\"trending_slider\">
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"{{ asset('images/trending-car-img-1.jpg') }}\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"{{ asset('images/trending-car-img-2.jpg') }}\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"{{ asset('images/trending-car-img-3.jpg') }}\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"{{ asset('images/trending-car-img-1.jpg') }}\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"{{ asset('images/trending-car-img-2.jpg') }}\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"{{ asset('images/trending-car-img-3.jpg') }}\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">BMW 535i</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Trending Car-->

    <!--Testimonial -->
    <section class=\"section-padding testimonial-section parallex-bg\">
        <div class=\"container div_zindex\">
            <div class=\"section-header white-text text-center\">
                <h2>Our Satisfied <span>Customers</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
            <div class=\"row\">
                <div id=\"testimonial-slider\">
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"{{ asset('images/testimonial-img-1.jpg') }}\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Donald Brooks</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"{{ asset('images/testimonial-img-2.jpg') }}\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Enzo Giovanotelli</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"{{ asset('images/testimonial-img-1.jpg') }}\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Donald Brooks</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"{{ asset('images/testimonial-img-2.jpg') }}\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Enzo Giovanotelli</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"{{ asset('images/testimonial-img-1.jpg') }}\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Donald Brooks</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                    <div class=\"testimonial-m\">
                        <div class=\"testimonial-img\"> <img src=\"{{ asset('images/testimonial-img-2.jpg') }}\" alt=\"\" /> </div>
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial-heading\">
                                <h5>Enzo Giovanotelli</h5>
                                <span class=\"client-designation\">CEO of xzy company</span> </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class=\"dark-overlay\"></div>
    </section>
    <!-- /Testimonial-->

    <!--Blog -->
    <section class=\"section-padding\">
        <div class=\"container\">
            <div class=\"section-header text-center\">
                <h2>Latest Updates In<span> Automobile Industry</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-4\">
                    <article class=\"blog-list\">
                        <div class=\"blog-info-box\">
                            <div class=\"share_article\">
                                <p><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></p>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <a href=\"#\"><img src=\"{{ asset('images/recent-blog-1.jpg') }}\" class=\"img-responsive\" alt=\"image\"></a>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>Latest Cars</a></li>
                                <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>15 Nov 2016</li>
                                <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>10 Comments</a></li>
                            </ul>
                        </div>
                        <div class=\"blog-content\">
                            <h5><a href=\"#\">But I must explain to you how all this mistaken idea.</a></h5>
                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
                            <a href=\"#\" class=\"btn-link\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
                    </article>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <article class=\"blog-list\">
                        <div class=\"blog-info-box\">
                            <div class=\"share_article\">
                                <p><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></p>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <a href=\"#\"><img src=\"{{ asset('images/recent-blog-2.jpg') }}\" class=\"img-responsive\" alt=\"image\"></a>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>Latest Cars</a></li>
                                <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>10 Nov 2016</li>
                                <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>21 Comments</a></li>
                            </ul>
                        </div>
                        <div class=\"blog-content\">
                            <h5><a href=\"#\">On the other hand, we denounce with righteous indignation.</a></h5>
                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
                            <a href=\"#\" class=\"btn-link\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
                    </article>
                </div>
                <div class=\"col-md-4 col-sm-4\">
                    <article class=\"blog-list\">
                        <div class=\"blog-info-box\">
                            <div class=\"share_article\">
                                <p><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></p>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <a href=\"#\"><img src=\"{{ asset('images/recent-blog-3.jpg') }}\" class=\"img-responsive\" alt=\"image\"></a>
                            <ul>
                                <li><a href=\"#\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>Latest Cars</a></li>
                                <li><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>05 Nov 2016</li>
                                <li><a href=\"#\"><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i>18 Comments</a></li>
                            </ul>
                        </div>
                        <div class=\"blog-content\">
                            <h5><a href=\"#\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a></h5>
                            <p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because</p>
                            <a href=\"#\" class=\"btn-link\">Read More <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i></a> </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- /Blog-->

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

{% endblock %}




", "@Template/Default/index.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\TemplateBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
