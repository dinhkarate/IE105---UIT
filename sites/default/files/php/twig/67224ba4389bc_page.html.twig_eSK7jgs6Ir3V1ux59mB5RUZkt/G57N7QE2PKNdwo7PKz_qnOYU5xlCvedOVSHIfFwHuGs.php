<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/creative_responsive_theme/templates/layout/page.html.twig */
class __TwigTemplate_755015cb19516bb032ff703b8f318ae5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 67)) {
            // line 68
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 70
        yield "      </div>

      ";
        // line 72
        if (($context["show_social_icon"] ?? null)) {
            // line 73
            yield "        <div class=\"col-sm-8 col-md-9\">
          <div class=\"social-media\">
            ";
            // line 75
            if (($context["facebook_url"] ?? null)) {
                // line 76
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 76, $this->source), "html", null, true);
                yield "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 78
            yield "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 79
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 79, $this->source), "html", null, true);
                yield "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 81
            yield "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 82
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 82, $this->source), "html", null, true);
                yield "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 84
            yield "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 85
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 85, $this->source), "html", null, true);
                yield "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 87
            yield "            ";
            if (($context["rss_url"] ?? null)) {
                // line 88
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 88, $this->source), "html", null, true);
                yield "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 90
            yield "          </div>
        </div>
      ";
        }
        // line 93
        yield "    </div>

    <div class=\"row\">
      <div class=\"navbar-header col-md-12\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button> 

          ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 105)) {
            // line 106
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            yield "
          ";
        }
        // line 108
        yield "        </nav>
      </div>
    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  
</div>

<!-- Banner -->
  ";
        // line 121
        if ((($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 121))) {
            yield "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 125
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slideshow", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            yield "
        </div>
      </div>
    </div>
  ";
        }
        // line 130
        yield "  <!-- End Banner -->


<!--Highlighted-->
  ";
        // line 134
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134)) {
            // line 135
            yield "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 138
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            yield "
        </div>
      </div>
    </div>
  ";
        }
        // line 143
        yield "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 147
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 147) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 147)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 147))) {
            // line 148
            yield "  <div class=\"topwidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = ";
            // line 154
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 154, $this->source), "html", null, true);
            yield ">
          ";
            // line 155
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 155)) {
                // line 156
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 158
            yield "        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = ";
            // line 161
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 161, $this->source), "html", null, true);
            yield ">
          ";
            // line 162
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 162)) {
                // line 163
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 165
            yield "        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = ";
            // line 168
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null), 168, $this->source), "html", null, true);
            yield ">
          ";
            // line 169
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 169)) {
                // line 170
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 172
            yield "        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
";
        }
        // line 178
        yield "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 182
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 182) &&  !($context["is_front"] ?? null))) {
            // line 183
            yield "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 187
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </div>
";
        }
        // line 192
        yield "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 201
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 201)) {
            // line 202
            yield "        <div class=\"row\">
          ";
            // line 203
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 206
        yield "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 210
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
        yield "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 215
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 215)) {
            // line 216
            yield "        <div class=\"sidebar\" >
          <div class = ";
            // line 217
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 217, $this->source), "html", null, true);
            yield " >
            ";
            // line 218
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            yield "
          </div>
        </div>
      ";
        }
        // line 222
        yield "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 225
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 225)) {
            // line 226
            yield "        <div class=\"content_layout\">
          <div class=";
            // line 227
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 227, $this->source), "html", null, true);
            yield ">
            ";
            // line 228
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            yield "
          </div>
        </div>
      ";
        }
        // line 232
        yield "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 235
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 235)) {
            // line 236
            yield "        <div class=\"sidebar\">
          <div class=";
            // line 237
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 237, $this->source), "html", null, true);
            yield ">
            ";
            // line 238
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 238), 238, $this->source), "html", null, true);
            yield "
          </div>
        </div>
      ";
        }
        // line 242
        yield "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 248
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 248)) {
            // line 249
            yield "      <div class=\"row\">
        ";
            // line 250
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 253
        yield "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->









<!-- start: Footer -->
";
        // line 267
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 267) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 267)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 267))) {
            // line 268
            yield "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 274
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 274, $this->source), "html", null, true);
            yield ">
          ";
            // line 275
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 275)) {
                // line 276
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 278
            yield "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 282
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 282, $this->source), "html", null, true);
            yield ">
          ";
            // line 283
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 283)) {
                // line 284
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 284), 284, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 286
            yield "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 290
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 290, $this->source), "html", null, true);
            yield ">
          ";
            // line 291
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 291)) {
                // line 292
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
                yield "
          ";
            }
            // line 294
            yield "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 300
        yield "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 303
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 303)) {
            // line 304
            yield "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 308
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 308), 308, $this->source), "html", null, true);
            yield "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 315
        yield "<!-- End Footer Menu -->

";
        // line 317
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 318
            yield "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 324
            if (($context["copyright_text"] ?? null)) {
                yield "        
          <p>";
                // line 325
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 325, $this->source), "html", null, true);
                yield "</p>        
        ";
            }
            // line 327
            yield "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 331
            if (($context["show_credit_link"] ?? null)) {
                // line 332
                yield "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 336
            yield "      <!-- End Credit link -->
            
    </div>
  </div>
</div>
";
        }
        // line 342
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "show_social_icon", "facebook_url", "twitter_url", "linkedin_url", "pinterest_url", "rss_url", "is_front", "topwidget_class", "topwidget_third_class", "sidebarfirst", "contentlayout", "sidebarsecond", "footer_class", "copyright_text", "show_credit_link"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/creative_responsive_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  548 => 342,  540 => 336,  534 => 332,  532 => 331,  526 => 327,  521 => 325,  517 => 324,  509 => 318,  507 => 317,  503 => 315,  493 => 308,  487 => 304,  485 => 303,  480 => 300,  472 => 294,  466 => 292,  464 => 291,  460 => 290,  454 => 286,  448 => 284,  446 => 283,  442 => 282,  436 => 278,  430 => 276,  428 => 275,  424 => 274,  416 => 268,  414 => 267,  398 => 253,  392 => 250,  389 => 249,  387 => 248,  379 => 242,  372 => 238,  368 => 237,  365 => 236,  363 => 235,  358 => 232,  351 => 228,  347 => 227,  344 => 226,  342 => 225,  337 => 222,  330 => 218,  326 => 217,  323 => 216,  321 => 215,  313 => 210,  307 => 206,  301 => 203,  298 => 202,  296 => 201,  285 => 192,  277 => 187,  271 => 183,  269 => 182,  263 => 178,  255 => 172,  249 => 170,  247 => 169,  243 => 168,  238 => 165,  232 => 163,  230 => 162,  226 => 161,  221 => 158,  215 => 156,  213 => 155,  209 => 154,  201 => 148,  199 => 147,  193 => 143,  185 => 138,  180 => 135,  178 => 134,  172 => 130,  164 => 125,  157 => 121,  142 => 108,  136 => 106,  134 => 105,  120 => 93,  115 => 90,  109 => 88,  106 => 87,  100 => 85,  97 => 84,  91 => 82,  88 => 81,  82 => 79,  79 => 78,  73 => 76,  71 => 75,  67 => 73,  65 => 72,  61 => 70,  55 => 68,  53 => 67,  44 => 60,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/creative_responsive_theme/templates/layout/page.html.twig", "C:\\xampp2\\htdocs\\drupal-10.3.6\\drupal-10.3.6\\themes\\creative_responsive_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67);
        static $filters = array("escape" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
