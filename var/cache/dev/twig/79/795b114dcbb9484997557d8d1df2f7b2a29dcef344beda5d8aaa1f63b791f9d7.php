<?php

/* @Annonce/Modele/ajoutAnnonceNeuve.html.twig */
class __TwigTemplate_5825e3faeff6684e4cd8110b1ae823f8f5a42bfea5d90606b28669d30b8262c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base3.html.twig", "@Annonce/Modele/ajoutAnnonceNeuve.html.twig", 1);
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
        $__internal_5fec81e93e1f56b7260d2ef4d17d9213fff88790e244de776be0715e3931ca33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fec81e93e1f56b7260d2ef4d17d9213fff88790e244de776be0715e3931ca33->enter($__internal_5fec81e93e1f56b7260d2ef4d17d9213fff88790e244de776be0715e3931ca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Annonce/Modele/ajoutAnnonceNeuve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fec81e93e1f56b7260d2ef4d17d9213fff88790e244de776be0715e3931ca33->leave($__internal_5fec81e93e1f56b7260d2ef4d17d9213fff88790e244de776be0715e3931ca33_prof);

    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        $__internal_d1e2458a4bb248e559f7be9e4ce5721d0a390e19cc0d026483b486d0efc9c3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e2458a4bb248e559f7be9e4ce5721d0a390e19cc0d026483b486d0efc9c3e3->enter($__internal_d1e2458a4bb248e559f7be9e4ce5721d0a390e19cc0d026483b486d0efc9c3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Title"));

        // line 4
        echo "    Welcome - Karhabty
";
        
        $__internal_d1e2458a4bb248e559f7be9e4ce5721d0a390e19cc0d026483b486d0efc9c3e3->leave($__internal_d1e2458a4bb248e559f7be9e4ce5721d0a390e19cc0d026483b486d0efc9c3e3_prof);

    }

    // line 7
    public function block_Sheets($context, array $blocks = array())
    {
        $__internal_3ca6e7cd999b7680a79bb2f5ed38d65482d618f027ebd2fef5f0f7f571386790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca6e7cd999b7680a79bb2f5ed38d65482d618f027ebd2fef5f0f7f571386790->enter($__internal_3ca6e7cd999b7680a79bb2f5ed38d65482d618f027ebd2fef5f0f7f571386790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Sheets"));

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
        
        $__internal_3ca6e7cd999b7680a79bb2f5ed38d65482d618f027ebd2fef5f0f7f571386790->leave($__internal_3ca6e7cd999b7680a79bb2f5ed38d65482d618f027ebd2fef5f0f7f571386790_prof);

    }

    // line 25
    public function block_PageHeader($context, array $blocks = array())
    {
        $__internal_60c1d1c3f975b188c78ac30bd8a6932ae77d0b35264fc8eba73b0419d12bbbee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c1d1c3f975b188c78ac30bd8a6932ae77d0b35264fc8eba73b0419d12bbbee->enter($__internal_60c1d1c3f975b188c78ac30bd8a6932ae77d0b35264fc8eba73b0419d12bbbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PageHeader"));

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
        
        $__internal_60c1d1c3f975b188c78ac30bd8a6932ae77d0b35264fc8eba73b0419d12bbbee->leave($__internal_60c1d1c3f975b188c78ac30bd8a6932ae77d0b35264fc8eba73b0419d12bbbee_prof);

    }

    // line 47
    public function block_Content($context, array $blocks = array())
    {
        $__internal_8aaca39fd5e6a190480c72ad6f309f9938cdaaa2d3978b93ebe1978fc460132a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aaca39fd5e6a190480c72ad6f309f9938cdaaa2d3978b93ebe1978fc460132a->enter($__internal_8aaca39fd5e6a190480c72ad6f309f9938cdaaa2d3978b93ebe1978fc460132a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 48
        echo "    <section id=\"filter_form\" class=\"gray-bg\">
        <div class=\"section-header text-center\">
            <h1>Add a new car announcement</h1>
            <div align=\"center\">
                <div style=\"width: 50%\" class=\"well black_input \" align=\"center\">
                    ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 54
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
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
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Ford Shelby GT350</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-3.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Volvo v40</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Toyota Corolla</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/trending-car-img-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" class=\"img-responsive\" /> </div>
                            <div class=\"trending-hover\">
                                <h4><a href=\"#\">Mazda CX-5 SX, V6, ABS</a></h4>
                            </div>
                        </div>
                        <div class=\"trending-car-m\">
                            <div class=\"trending-car-img\"> <img src=\"";
        // line 111
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
        // line 133
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
        // line 142
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
        // line 151
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
        // line 160
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
        // line 169
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
        // line 178
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
        // line 214
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
        // line 239
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
        // line 264
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
        
        $__internal_8aaca39fd5e6a190480c72ad6f309f9938cdaaa2d3978b93ebe1978fc460132a->leave($__internal_8aaca39fd5e6a190480c72ad6f309f9938cdaaa2d3978b93ebe1978fc460132a_prof);

    }

    // line 284
    public function block_Script($context, array $blocks = array())
    {
        $__internal_8c53f60cb8f282f046ee9ba40ec64dbe62c3e1bf920c275419d27ba324ea0716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c53f60cb8f282f046ee9ba40ec64dbe62c3e1bf920c275419d27ba324ea0716->enter($__internal_8c53f60cb8f282f046ee9ba40ec64dbe62c3e1bf920c275419d27ba324ea0716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Script"));

        // line 285
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/interface.js"), "html", null, true);
        echo "\"></script>
    <!--bootstrap-slider-JS-->
    <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
    <!--Slider-JS-->
    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_8c53f60cb8f282f046ee9ba40ec64dbe62c3e1bf920c275419d27ba324ea0716->leave($__internal_8c53f60cb8f282f046ee9ba40ec64dbe62c3e1bf920c275419d27ba324ea0716_prof);

    }

    public function getTemplateName()
    {
        return "@Annonce/Modele/ajoutAnnonceNeuve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 294,  460 => 293,  455 => 291,  450 => 289,  446 => 288,  442 => 287,  438 => 285,  432 => 284,  406 => 264,  378 => 239,  350 => 214,  311 => 178,  299 => 169,  287 => 160,  275 => 151,  263 => 142,  251 => 133,  226 => 111,  217 => 105,  208 => 99,  199 => 93,  190 => 87,  181 => 81,  151 => 54,  147 => 53,  140 => 48,  134 => 47,  108 => 26,  102 => 25,  93 => 21,  88 => 19,  83 => 17,  78 => 15,  74 => 14,  69 => 12,  64 => 10,  58 => 8,  52 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
            <h1>Add a new car announcement</h1>
            <div align=\"center\">
                <div style=\"width: 50%\" class=\"well black_input \" align=\"center\">
                    {{ form_start(form,{'attr': {'class': 'form-horizontal'} })}}
                    {{ form_end(form) }}
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




", "@Annonce/Modele/ajoutAnnonceNeuve.html.twig", "C:\\wamp64\\www\\SprintWeb\\src\\AnnonceBundle\\Resources\\views\\Modele\\ajoutAnnonceNeuve.html.twig");
    }
}
