<?php

/* @Annonce/Modele/gererAnnonce.html.twig */
class __TwigTemplate_16e5468fd965821c161f34e95a2873f5f22646e8c0476e5afde3a12508495056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base3.html.twig", "@Annonce/Modele/gererAnnonce.html.twig", 1);
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
        return "::base3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5920a864cfb74a6b47b5e70b02b43734c9090b087b8814bfb452d26abb172ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5920a864cfb74a6b47b5e70b02b43734c9090b087b8814bfb452d26abb172ac6->enter($__internal_5920a864cfb74a6b47b5e70b02b43734c9090b087b8814bfb452d26abb172ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/Modele/gererAnnonce.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5920a864cfb74a6b47b5e70b02b43734c9090b087b8814bfb452d26abb172ac6->leave($__internal_5920a864cfb74a6b47b5e70b02b43734c9090b087b8814bfb452d26abb172ac6_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_8f2cf9c45bab261c00fe4782f73af94fbd8a8ef015341a167e48237d4b5ab7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2cf9c45bab261c00fe4782f73af94fbd8a8ef015341a167e48237d4b5ab7d7->enter($__internal_8f2cf9c45bab261c00fe4782f73af94fbd8a8ef015341a167e48237d4b5ab7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_8f2cf9c45bab261c00fe4782f73af94fbd8a8ef015341a167e48237d4b5ab7d7->leave($__internal_8f2cf9c45bab261c00fe4782f73af94fbd8a8ef015341a167e48237d4b5ab7d7_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_cfe67ff73e9a8317c39552cf88973090c6b7f26bd524e78e0fe562b95de70826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe67ff73e9a8317c39552cf88973090c6b7f26bd524e78e0fe562b95de70826->enter($__internal_cfe67ff73e9a8317c39552cf88973090c6b7f26bd524e78e0fe562b95de70826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_cfe67ff73e9a8317c39552cf88973090c6b7f26bd524e78e0fe562b95de70826->leave($__internal_cfe67ff73e9a8317c39552cf88973090c6b7f26bd524e78e0fe562b95de70826_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_0ed237d30af2337aa1c739063aced8b6fe97d616960c4513f7c6c26f48335de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed237d30af2337aa1c739063aced8b6fe97d616960c4513f7c6c26f48335de2->enter($__internal_0ed237d30af2337aa1c739063aced8b6fe97d616960c4513f7c6c26f48335de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

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
        
        $__internal_0ed237d30af2337aa1c739063aced8b6fe97d616960c4513f7c6c26f48335de2->leave($__internal_0ed237d30af2337aa1c739063aced8b6fe97d616960c4513f7c6c26f48335de2_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_b4f83353b53ac3be1551ee0009c541d86be00f25cf3948129ebee56b58304189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f83353b53ac3be1551ee0009c541d86be00f25cf3948129ebee56b58304189->enter($__internal_b4f83353b53ac3be1551ee0009c541d86be00f25cf3948129ebee56b58304189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 48
        echo "
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/looking-used-car.png"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>You want to sell <span>a Used Car?</span></h3><br>

                            <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/annonce/ajoutannonce"), "html", null, true);
        echo "\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/looking-new-car.png"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>You want to sell <span>a New Car?</span></h3> <br>

                            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/annonce/ajoutannonceneuve"), "html", null, true);
        echo "\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/looking-new-car.png"), "html", null, true);
        echo "\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>Consult  <span>Your announcements </span></h3> <br>

                            <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter_annonce");
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
        // line 110
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
        // line 134
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
        // line 158
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
        // line 182
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
        // line 206
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
        // line 230
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
        // line 258
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
        // line 282
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
        // line 306
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
        // line 330
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
        // line 354
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
        // line 378
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
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 494
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
        // line 516
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
        // line 525
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
        // line 534
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
        // line 543
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
        // line 552
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
        // line 561
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
        // line 597
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
        // line 622
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
        // line 647
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
        
        $__internal_b4f83353b53ac3be1551ee0009c541d86be00f25cf3948129ebee56b58304189->leave($__internal_b4f83353b53ac3be1551ee0009c541d86be00f25cf3948129ebee56b58304189_prof);

    }

    // line 667
    public function block_Script($context, array $blocks = array())
    {
        $__internal_82a5789557d57e9db24bd05a07f3e71f9557fb4b6f0f0fcff54a86354e6cf790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a5789557d57e9db24bd05a07f3e71f9557fb4b6f0f0fcff54a86354e6cf790->enter($__internal_82a5789557d57e9db24bd05a07f3e71f9557fb4b6f0f0fcff54a86354e6cf790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 668
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_82a5789557d57e9db24bd05a07f3e71f9557fb4b6f0f0fcff54a86354e6cf790->leave($__internal_82a5789557d57e9db24bd05a07f3e71f9557fb4b6f0f0fcff54a86354e6cf790_prof);

    }

    public function getTemplateName()
    {
        return "@Annonce/Modele/gererAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  895 => 677,  891 => 676,  886 => 674,  881 => 672,  877 => 671,  873 => 670,  869 => 668,  863 => 667,  837 => 647,  809 => 622,  781 => 597,  742 => 561,  730 => 552,  718 => 543,  706 => 534,  694 => 525,  682 => 516,  657 => 494,  648 => 488,  639 => 482,  630 => 476,  621 => 470,  612 => 464,  523 => 378,  496 => 354,  469 => 330,  442 => 306,  415 => 282,  388 => 258,  357 => 230,  330 => 206,  303 => 182,  276 => 158,  249 => 134,  222 => 110,  190 => 81,  183 => 77,  175 => 72,  168 => 68,  160 => 63,  153 => 59,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base3.html.twig' %}

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
                            <h3>You want to sell <span>a Used Car?</span></h3><br>

                            <a href=\"{{ asset('app_dev.php/annonce/ajoutannonce') }}\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"{{ asset('images/looking-new-car.png') }}\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>You want to sell <span>a New Car?</span></h3> <br>

                            <a href=\"{{ asset('app_dev.php/annonce/ajoutannonceneuve') }}\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-sm-6\">
                    <div class=\"looking-car\">
                        <div class=\"looking-cat-image\"> <img src=\"{{ asset('images/looking-new-car.png') }}\" alt=\"Image\" /> </div>
                        <div class=\"looking-car-content\">
                            <h3>Consult  <span>Your announcements </span></h3> <br>

                            <a href=\"{{ path('consulter_annonce') }}\" class=\"btn\">View Listing<i class=\"fa fa-chevron-circle-right\" aria-hidden=\"true\"></i></a> </div>
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




", "@Annonce/Modele/gererAnnonce.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AnnonceBundle\\Resources\\views\\Modele\\gererAnnonce.html.twig");
    }
}
