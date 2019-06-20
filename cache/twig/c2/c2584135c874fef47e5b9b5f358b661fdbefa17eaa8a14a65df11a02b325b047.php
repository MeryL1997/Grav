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

/* forms/fields/radio/radio.html.twig */
class __TwigTemplate_3bd3ef13e7d6b1254d8f1ede3bf77040364942cc45208e4bbc23a905375727cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/radio/radio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_input($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 8
            echo "        ";
            $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", []), $this->getAttribute(($context["field"] ?? null), "name", []))) : ($this->getAttribute(($context["field"] ?? null), "name", []))) . "-") . $context["key"]);
            // line 9
            echo "
        <div class=\"radio ";
            // line 10
            echo ($context["form_field_wrapper_classes"] ?? null);
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
            echo "\">
            <input type=\"radio\"
                   value=\"";
            // line 12
            echo twig_escape_filter($this->env, $context["key"]);
            echo "\"
                   id=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\"
                   name=\"";
            // line 14
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            echo "\"
                   ";
            // line 15
            if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
                echo "class=\"";
                echo $this->getAttribute(($context["field"] ?? null), "classes", []);
                echo "\" ";
            }
            // line 16
            echo "                   ";
            if (($context["key"] == ($context["value"] ?? null))) {
                echo "checked=\"checked\" ";
            }
            // line 17
            echo "                   ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 18
            echo "                   ";
            if (($context["required"] ?? null)) {
                echo "required=\"required\"";
            }
            // line 19
            echo "            />
            <label style=\"display: inline\" class=\"inline\" for=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]);
            echo "</label>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/radio/radio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  98 => 19,  93 => 18,  88 => 17,  83 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  58 => 10,  55 => 9,  52 => 8,  47 => 7,  44 => 6,  39 => 1,  37 => 4,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% set originalValue = value %}
{% set value = (value is null ? field.default : value) %}

{% block input %}
    {% for key, text in field.options %}
        {% set id = field.id|default(field.name) ~ '-' ~ key %}

        <div class=\"radio {{ form_field_wrapper_classes }} {{ field.wrapper_classes }}\">
            <input type=\"radio\"
                   value=\"{{ key|e }}\"
                   id=\"{{ id|e }}\"
                   name=\"{{ (scope ~ field.name)|fieldName }}\"
                   {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                   {% if key == value %}checked=\"checked\" {% endif %}
                   {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                   {% if required %}required=\"required\"{% endif %}
            />
            <label style=\"display: inline\" class=\"inline\" for=\"{{ id|e }}\">{{ text|t|raw }}</label>
        </div>
    {% endfor %}
{% endblock %}
", "forms/fields/radio/radio.html.twig", "C:\\xampp\\htdocs\\GyA\\user\\plugins\\form\\templates\\forms\\fields\\radio\\radio.html.twig");
    }
}
