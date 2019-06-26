<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_49c10120262afd4b20c1f91b682c02d028b4b9aa2a6257b00b572a0ad4aac250 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'social' => [$this, 'block_social'],
            'header_extra' => [$this, 'block_header_extra'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'showcase' => [$this, 'block_showcase'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TV7JDKC');</script>
    <!-- End Google Tag Manager -->
";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 54
        echo "</head>
<body id=\"top\" class=\"";
        // line 55
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TV7JDKC\"
    height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id=\"sb-site\">
        ";
        // line 61
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('showcase', $context, $blocks);
        // line 81
        echo "
        ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 95
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 95)->display($context);
        // line 96
        echo "        </div>
    </div>
    ";
        // line 98
        $this->displayBlock('bottom', $context, $blocks);
        // line 111
        echo "</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 12
    public function block_head($context, array $blocks = [])
    {
        // line 13
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 14
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
    ";
        // line 15
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('assets', $context, $blocks);
        // line 52
        echo "
";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/template.css", 1 => 101], "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slidebars.min.css"], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slideme.css"], "method");
        // line 26
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
            // line 27
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie10.css"], "method");
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 30
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie9.css"], "method");
            // line 31
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pure-0.5.0/grids-min.css"], "method");
            // line 32
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "    ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/deliver.js"], "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slidebars.min.js"], "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.slideme2.js"], "method");
        // line 42
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sticky_menu", []), "enabled", [])) {
            // line 43
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-scrolltofixed-min.js"], "method");
            // line 44
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/fixed-header.js"], "method");
            // line 45
            echo "        ";
        }
        // line 46
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 48
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 49
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 50
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 61
    public function block_header($context, array $blocks = [])
    {
        // line 62
        echo "        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"";
        // line 64
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "</a></h3>
                    ";
        // line 65
        $this->displayBlock('social', $context, $blocks);
        // line 68
        echo "                </div>
                <div id=\"navbar\">
                    ";
        // line 70
        $this->displayBlock('header_extra', $context, $blocks);
        // line 71
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 74
        echo "                    ";
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 74)->display($context);
        // line 75
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 65
    public function block_social($context, array $blocks = [])
    {
        // line 66
        echo "                        ";
        $this->loadTemplate("partials/social.html.twig", "partials/base.html.twig", 66)->display($context);
        // line 67
        echo "                    ";
    }

    // line 70
    public function block_header_extra($context, array $blocks = [])
    {
    }

    // line 71
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 72
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "                    ";
    }

    // line 80
    public function block_showcase($context, array $blocks = [])
    {
    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        // line 83
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "
            ";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "        </section>
        ";
    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
    }

    // line 86
    public function block_footer($context, array $blocks = [])
    {
        // line 87
        echo "            ";
        $this->loadTemplate("modular/footer.html.twig", "partials/base.html.twig", 87)->display($context);
        // line 88
        echo "            ";
    }

    // line 98
    public function block_bottom($context, array $blocks = [])
    {
        // line 99
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 99,  350 => 98,  346 => 88,  343 => 87,  340 => 86,  335 => 84,  330 => 89,  328 => 86,  325 => 85,  323 => 84,  318 => 83,  315 => 82,  310 => 80,  306 => 73,  303 => 72,  300 => 71,  295 => 70,  291 => 67,  288 => 66,  285 => 65,  278 => 75,  275 => 74,  272 => 71,  270 => 70,  266 => 68,  264 => 65,  258 => 64,  254 => 62,  251 => 61,  244 => 50,  239 => 49,  236 => 48,  227 => 46,  224 => 45,  221 => 44,  218 => 43,  215 => 42,  212 => 41,  209 => 40,  206 => 39,  203 => 38,  200 => 37,  197 => 36,  193 => 34,  190 => 33,  187 => 32,  184 => 31,  181 => 30,  178 => 29,  175 => 28,  172 => 27,  169 => 26,  166 => 25,  163 => 24,  160 => 23,  157 => 22,  154 => 21,  151 => 20,  148 => 19,  143 => 52,  141 => 48,  138 => 47,  136 => 36,  133 => 35,  131 => 19,  126 => 17,  123 => 16,  121 => 15,  113 => 14,  110 => 13,  107 => 12,  100 => 111,  98 => 98,  94 => 96,  92 => 95,  86 => 91,  84 => 82,  81 => 81,  79 => 80,  76 => 79,  74 => 61,  65 => 55,  62 => 54,  60 => 12,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TV7JDKC');</script>
    <!-- End Google Tag Manager -->
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/template.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}
        {% do assets.addCss('theme://css/slideme.css') %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addCss('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/deliver.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
        {% do assets.addJs('theme://js/jquery.slideme2.js') %}
        {% if theme_config.sticky_menu.enabled %}
            {% do assets.addJs('theme://js/jquery-scrolltofixed-min.js') %}
            {% do assets.addJs('theme://js/fixed-header.js') %}
        {% endif %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TV7JDKC\"
    height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"{{ base_url_absolute }}\">{{ config.site.title }}</a></h3>
                    {% block social %}
                        {% include 'partials/social.html.twig' %}
                    {% endblock %}
                </div>
                <div id=\"navbar\">
                    {% block header_extra %}{% endblock %}
                    {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                    {% endblock %}
                    {% include 'partials/search.html.twig' %}
                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}

            {% block footer %}
            {% include 'modular/footer.html.twig' %}
            {% endblock %}
        </section>
        {% endblock %}

    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
    {{ assets.js('bottom')|raw }}
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/deliver/templates/partials/base.html.twig");
    }
}
