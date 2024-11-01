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

/* themes/creative_responsive_theme/templates/navigation/menu--main.html.twig */
class __TwigTemplate_2c7c2e30b8c065ad6df7dcd72ef8850f extends Template
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
        // line 18
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 19
        yield "
";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 24, $context, $this->getSourceContext()));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 26
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 27
            yield "  ";
            $macros["menus"] = $this;
            // line 28
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 29
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 30
                    yield "      <ul class=\"sm menu-base-theme\" id=\"main-menu\" ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu", "nav", "navbar-nav"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                    yield ">
    ";
                } else {
                    // line 32
                    yield "      <ul>
    ";
                }
                // line 34
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    yield "      ";
                    if (((($context["menu_level"] ?? null) == 0) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 35))) {
                        // line 36
                        yield "        <li>
        <a href=\"";
                        // line 37
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        yield "\" data-target=\"#\" data-toggle=\"dropdown\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                        yield "</a>
      ";
                    } else {
                        // line 39
                        yield "        <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                        yield ">
        ";
                        // line 40
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 40), 40, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), 40, $this->source)), "html", null, true);
                        yield "
      ";
                    }
                    // line 42
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 42)) {
                        // line 43
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_links", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 43), CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["nav", "navbar-nav"], "method", false, false, true, 43), (($context["menu_level"] ?? null) + 1)], 43, $context, $this->getSourceContext()));
                        yield "
      ";
                    }
                    // line 45
                    yield "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/creative_responsive_theme/templates/navigation/menu--main.html.twig";
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
        return array (  135 => 47,  128 => 45,  122 => 43,  119 => 42,  114 => 40,  109 => 39,  102 => 37,  99 => 36,  96 => 35,  91 => 34,  87 => 32,  81 => 30,  78 => 29,  75 => 28,  72 => 27,  58 => 26,  49 => 24,  46 => 19,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/creative_responsive_theme/templates/navigation/menu--main.html.twig", "C:\\xampp2\\htdocs\\drupal-10.3.6\\themes\\creative_responsive_theme\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 34);
        static $filters = array("escape" => 30);
        static $functions = array("link" => 40);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link'],
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
