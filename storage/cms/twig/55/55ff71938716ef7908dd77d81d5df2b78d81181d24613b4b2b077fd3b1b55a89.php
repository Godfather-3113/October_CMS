<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Volumes/BACKUPC-2/WebServer/www/October_Project/themes/demo/layouts/default.htm */
class __TwigTemplate_0c5627ca99554c62a35586235c94e95a9960f785c6bcb820f29e2efc9aa8ef49 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("styles" => 14, "partial" => 20, "page" => 26, "framework" => 42, "scripts" => 43);
        $filters = array("escape" => 5, "theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 15
        echo "    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            Hellow
            ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "        </section>
        <section id=\"layout-content\">
            Hellow
           
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 42
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 43
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 44
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Volumes/BACKUPC-2/WebServer/www/October_Project/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 44,  160 => 43,  149 => 42,  145 => 41,  141 => 40,  137 => 39,  132 => 36,  128 => 35,  118 => 27,  116 => 26,  109 => 21,  105 => 20,  98 => 15,  95 => 14,  91 => 13,  87 => 12,  83 => 11,  76 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            Hellow
            {% page %}
        </section>
        <section id=\"layout-content\">
            Hellow
           
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "/Volumes/BACKUPC-2/WebServer/www/October_Project/themes/demo/layouts/default.htm", "");
    }
}
