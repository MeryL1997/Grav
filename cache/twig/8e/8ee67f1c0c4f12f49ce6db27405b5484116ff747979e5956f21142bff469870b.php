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

/* formdata.html.twig */
class __TwigTemplate_83337c7a7e26ddbe93f3ac05a8d0322dbaac311dc30744472f7977317c18bdbd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "  <div class=\"modular-row bottom \">
    ";
        // line 5
        echo ($context["content"] ?? null);
        echo "

    <h2>";
        // line 7
        echo $this->getAttribute(($context["form"] ?? null), "message", []);
        echo "</h2>
    <p>Here is the summary of what you wrote to us:</p>

    ";
        // line 10
        $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 10)->display($context);
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  56 => 10,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
  <div class=\"modular-row bottom \">
    {{ content }}

    <h2>{{ form.message }}</h2>
    <p>Here is the summary of what you wrote to us:</p>

    {% include \"forms/data.html.twig\" %}
</div>
{% endblock %}
", "formdata.html.twig", "/var/www/html/grav/user/themes/deliver/templates/formdata.html.twig");
    }
}
