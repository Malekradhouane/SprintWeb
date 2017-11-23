<?php

/* AnnonceBundle:Modele:modifier.html.twig */
class __TwigTemplate_d031a381d605cca5e822e5b5143a940aa4cedcb6f964d710eaf8116d0eac847d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base3.html.twig", "AnnonceBundle:Modele:modifier.html.twig", 1);
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
        $__internal_adacf263404b534cf2c22b959eb610b069fd4f0aca393b9d701c12f1cf7acb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adacf263404b534cf2c22b959eb610b069fd4f0aca393b9d701c12f1cf7acb85->enter($__internal_adacf263404b534cf2c22b959eb610b069fd4f0aca393b9d701c12f1cf7acb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AnnonceBundle:Modele:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adacf263404b534cf2c22b959eb610b069fd4f0aca393b9d701c12f1cf7acb85->leave($__internal_adacf263404b534cf2c22b959eb610b069fd4f0aca393b9d701c12f1cf7acb85_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_2c7449a48601e2042c82dfef2a2e53ddc6e13b33de09822981d107b781c06b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7449a48601e2042c82dfef2a2e53ddc6e13b33de09822981d107b781c06b0b->enter($__internal_2c7449a48601e2042c82dfef2a2e53ddc6e13b33de09822981d107b781c06b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_2c7449a48601e2042c82dfef2a2e53ddc6e13b33de09822981d107b781c06b0b->leave($__internal_2c7449a48601e2042c82dfef2a2e53ddc6e13b33de09822981d107b781c06b0b_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_4b1f4258f6860a33c2fe098a531f175cfc23b78b2297725a49c5f45c604873a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1f4258f6860a33c2fe098a531f175cfc23b78b2297725a49c5f45c604873a2->enter($__internal_4b1f4258f6860a33c2fe098a531f175cfc23b78b2297725a49c5f45c604873a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_4b1f4258f6860a33c2fe098a531f175cfc23b78b2297725a49c5f45c604873a2->leave($__internal_4b1f4258f6860a33c2fe098a531f175cfc23b78b2297725a49c5f45c604873a2_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_541d9cb6ab198f57d5ce7b403030425a1d5c19ea0abf8824d7bc8b9f0e18bfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541d9cb6ab198f57d5ce7b403030425a1d5c19ea0abf8824d7bc8b9f0e18bfb2->enter($__internal_541d9cb6ab198f57d5ce7b403030425a1d5c19ea0abf8824d7bc8b9f0e18bfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

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
        
        $__internal_541d9cb6ab198f57d5ce7b403030425a1d5c19ea0abf8824d7bc8b9f0e18bfb2->leave($__internal_541d9cb6ab198f57d5ce7b403030425a1d5c19ea0abf8824d7bc8b9f0e18bfb2_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_149c558e22c311543b31137ab7310b86eea576f8840ee9797e2401e4d520fb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149c558e22c311543b31137ab7310b86eea576f8840ee9797e2401e4d520fb36->enter($__internal_149c558e22c311543b31137ab7310b86eea576f8840ee9797e2401e4d520fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 48
        echo "    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h1>Update your car announcement</h1>
            <div align=\"center\">
                <div style=\"width: 50%\" class=\"well black_input \" align=\"center\">
                <input type=\"text\" value=\"\">
                </div>
            </div>
        </div>
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 110
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
        // line 132
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
        // line 141
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
        // line 150
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
        // line 159
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
        // line 168
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
        // line 177
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
        // line 213
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
        // line 238
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
        // line 263
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
        
        $__internal_149c558e22c311543b31137ab7310b86eea576f8840ee9797e2401e4d520fb36->leave($__internal_149c558e22c311543b31137ab7310b86eea576f8840ee9797e2401e4d520fb36_prof);

    }

    // line 283
    public function block_Script($context, array $blocks = array())
    {
        $__internal_96fba42b58d3ac102d53c806130050e0ddabfbe69ae4478752b46d56628e3fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fba42b58d3ac102d53c806130050e0ddabfbe69ae4478752b46d56628e3fa6->enter($__internal_96fba42b58d3ac102d53c806130050e0ddabfbe69ae4478752b46d56628e3fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 284
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_96fba42b58d3ac102d53c806130050e0ddabfbe69ae4478752b46d56628e3fa6->leave($__internal_96fba42b58d3ac102d53c806130050e0ddabfbe69ae4478752b46d56628e3fa6_prof);

    }

    public function getTemplateName()
    {
        return "AnnonceBundle:Modele:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 293,  453 => 292,  448 => 290,  443 => 288,  439 => 287,  435 => 286,  431 => 284,  425 => 283,  399 => 263,  371 => 238,  343 => 213,  304 => 177,  292 => 168,  280 => 159,  268 => 150,  256 => 141,  244 => 132,  219 => 110,  210 => 104,  201 => 98,  192 => 92,  183 => 86,  174 => 80,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h1>Update your car announcement</h1>
            <div align=\"center\">
                <div style=\"width: 50%\" class=\"well black_input \" align=\"center\">
                <input type=\"text\" value=\"\">
                </div>
            </div>
        </div>
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




", "AnnonceBundle:Modele:modifier.html.twig", "C:\\wamp64\\www\\ProjetKarhabtyBase2\\src\\AnnonceBundle/Resources/views/Modele/modifier.html.twig");
    }
}
