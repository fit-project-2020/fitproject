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

/* themes/showcase_lite/templates/node--article.html.twig */
class __TwigTemplate_7cbb252e9ed1f6efd93965b93d1f47f17dc5d5b3aa9e7e53eb2cd43fa0b91017 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11, "trans" => 40];
        $filters = ["escape" => 10, "format_date" => 38];
        $functions = ["attach_library" => 23];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'format_date'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doGetParent(array $context)
    {
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("node.html.twig", "themes/showcase_lite/templates/node--article.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_meta_area($context, array $blocks = [])
    {
        // line 10
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 11
        if ( !($context["page"] ?? null)) {
            // line 12
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
      <a href=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 16
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 17
        if (($context["display_submitted"] ?? null)) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 20
        echo "
";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        // line 23
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
        echo "\t
    ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "\t
  </div>
  ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
  
";
        // line 30
        if (((($context["display_submitted"] ?? null) || $this->getAttribute(($context["node"] ?? null), "comment", [])) || ((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", [])))) {
            // line 31
            echo "    <div class=\"node__meta\">
       <ul class=\"inline-list\">
          ";
            // line 33
            if ((($context["display_submitted"] ?? null) || ($this->getAttribute(($context["node"] ?? null), "comment", []) && (($context["comment_count"] ?? null) > 0)))) {
                // line 34
                echo "            <li class=\"inline-list__item\">
              ";
                // line 35
                if (($context["display_submitted"] ?? null)) {
                    // line 36
                    echo "                <span";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method")), "html", null, true);
                    echo ">
                  <span class=\"node__submitted-date\">
                    ";
                    // line 38
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "F d, Y"]), "html", null, true);
                    echo "
                  </span>
                  ";
                    // line 40
                    echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                    // line 41
                    echo "                </span>
                ";
                    // line 42
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
                    echo "
              ";
                }
                // line 44
                echo "              ";
                if (($this->getAttribute(($context["node"] ?? null), "comment", []) && (($context["comment_count"] ?? null) > 0))) {
                    // line 45
                    echo "                <span class=\"comments-count__counter text--colored\">
                  ";
                    // line 46
                    echo \Drupal::translation()->formatPlural(abs(                    // line 48
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                     // line 49
($context["comment_count"] ?? null), ));
                    // line 51
                    echo "                </span>
              ";
                }
                // line 53
                echo "            </li>
          ";
            }
            // line 55
            echo "        ";
            if (((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", []))) {
                // line 56
                echo "          <li class=\"inline-list__item\">
            ";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/reading-time"), "html", null, true);
                echo "
            <span class=\"reading-time\">
              <span class=\"text--dark\">";
                // line 59
                echo t("Time to read", array());
                echo "</span>
              ";
                // line 60
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 61
                    echo "                ";
                    echo t("less than 1 minute", array());
                    // line 62
                    echo "              ";
                } elseif ((($context["minutes"] ?? null) < 2)) {
                    // line 63
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["minutes"] ?? null)), "html", null, true);
                    echo " ";
                    echo t("minute", array());
                    // line 64
                    echo "   F           ";
                } else {
                    // line 65
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["minutes"] ?? null)), "html", null, true);
                    echo " ";
                    echo t("minutes", array());
                    // line 66
                    echo "              ";
                }
                // line 67
                echo "            </span>
          </li>
        ";
            }
            // line 70
            echo "      </ul>
    </div>
  ";
        }
        // line 73
        echo "  ";
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 74
            echo "<button class=\"teasr-leer-mas\">
<a href=\"";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">leer mas</a>
</button>
";
        }
        // line 78
        echo "  
";
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 78,  236 => 75,  233 => 74,  230 => 73,  225 => 70,  220 => 67,  217 => 66,  212 => 65,  209 => 64,  204 => 63,  201 => 62,  198 => 61,  196 => 60,  192 => 59,  187 => 57,  184 => 56,  181 => 55,  177 => 53,  173 => 51,  171 => 49,  170 => 48,  169 => 46,  166 => 45,  163 => 44,  158 => 42,  155 => 41,  153 => 40,  148 => 38,  142 => 36,  140 => 35,  137 => 34,  135 => 33,  131 => 31,  129 => 30,  124 => 28,  119 => 26,  115 => 25,  109 => 23,  106 => 22,  101 => 20,  95 => 18,  93 => 17,  88 => 16,  80 => 13,  75 => 12,  73 => 11,  68 => 10,  65 => 9,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Showcase Lites's theme implementation to display a Article node.
 */
#}

{% extends \"node.html.twig\" %}
{% block meta_area %}
  {{ title_prefix }}
  {% if not page %}
    <h2{{ title_attributes.addClass('node__title') }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h2>
  {% endif %}
  {{ title_suffix }}
  {% if display_submitted %}
    {{ author_picture }}
  {% endif %}

{% endblock %}
{% block content %}
  {{ attach_library('showcase_lite/node-article') }}
  <div class=\"node__main-content-section\">
    {{ content.field_image }}\t
    {{ content.body}}\t
  </div>
  {{ content.comment }}
  
{% if display_submitted or node.comment or (view_mode == \"full\" and mt_setting.reading_time) %}
    <div class=\"node__meta\">
       <ul class=\"inline-list\">
          {% if display_submitted or (node.comment and comment_count > 0) %}
            <li class=\"inline-list__item\">
              {% if display_submitted %}
                <span{{ author_attributes.addClass('node__submitted-info') }}>
                  <span class=\"node__submitted-date\">
                    {{ node.createdtime|format_date('custom', 'F d, Y') }}
                  </span>
                  {% trans %}<span class=\"node__submitted-info-text\">By</span> {{ author_name }}{% endtrans %}
                </span>
                {{ metadata }}
              {% endif %}
              {% if node.comment and comment_count > 0 %}
                <span class=\"comments-count__counter text--colored\">
                  {% trans %}
                    1 comment
                  {% plural comment_count %}
                    {{ comment_count }} comments
                  {% endtrans %}
                </span>
              {% endif %}
            </li>
          {% endif %}
        {% if view_mode == \"full\" and mt_setting.reading_time %}
          <li class=\"inline-list__item\">
            {{ attach_library('showcase_lite/reading-time') }}
            <span class=\"reading-time\">
              <span class=\"text--dark\">{% trans %}Time to read{% endtrans %}</span>
              {% if minutes < 1 %}
                {% trans %}less than 1 minute{% endtrans %}
              {% elseif minutes < 2 %}
                {{ minutes }} {% trans %}minute{% endtrans %}
   F           {% else %}
                {{ minutes }} {% trans %}minutes{% endtrans %}
              {% endif %}
            </span>
          </li>
        {% endif %}
      </ul>
    </div>
  {% endif %}
  {% if view_mode == 'teaser' %}
<button class=\"teasr-leer-mas\">
<a href=\"{{ url }}\">leer mas</a>
</button>
{% endif %}
  
{% endblock %}", "themes/showcase_lite/templates/node--article.html.twig", "C:\\xampp\\htdocs\\fitproject\\web\\themes\\showcase_lite\\templates\\node--article.html.twig");
    }
}
