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

/* core/modules/system/templates/item-list.html.twig */
class __TwigTemplate_1bce06202211d87f9879e11adbbe73c9 extends Template
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
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 24)) {
            // line 25
            $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [("item-list__" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 25), 25, $this->source))], "method", false, false, true, 25);
        }
        // line 27
        if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
            // line 28
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["title"] ?? null))) {
                // line 29
                yield "<h3>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 29, $this->source), "html", null, true);
                yield "</h3>";
            }
            // line 32
            if (($context["items"] ?? null)) {
                // line 33
                yield "<";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 33, $this->source), "html", null, true);
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source), "html", null, true);
                yield ">";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    yield "<li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    yield ">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    yield "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "</";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 37, $this->source), "html", null, true);
                yield ">";
            } else {
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 39, $this->source), "html", null, true);
            }
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["context", "items", "empty", "title", "list_type"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/system/templates/item-list.html.twig";
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
        return array (  84 => 39,  79 => 37,  69 => 35,  65 => 34,  60 => 33,  58 => 32,  53 => 29,  51 => 28,  49 => 27,  46 => 25,  44 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/system/templates/item-list.html.twig", "C:\\xampp2\\htdocs\\drupal-10.3.6\\drupal-10.3.6\\core\\modules\\system\\templates\\item-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "set" => 25, "for" => 34);
        static $filters = array("escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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