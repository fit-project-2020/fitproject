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

/* themes/showcase_lite/templates/block--system-branding-block.html.twig */
class __TwigTemplate_caa66341d867ef193f5385761b1c7d666d5d602fd758135f3c22480647787ebc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 19];
        $filters = ["t" => 21, "escape" => 22];
        $functions = ["path" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape'],
                ['path']
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
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 16
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method");
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/showcase_lite/templates/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        // line 18
        echo "  <div class=\"logo-and-site-name-wrapper clearfix\">
    ";
        // line 19
        if (($context["site_logo"] ?? null)) {
            // line 20
            echo "      <div class=\"logo\">
        <a href=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-branding__logo\">
          <img src=\"";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" />
        </a>
      </div>
    ";
        }
        // line 26
        echo "    ";
        if (($context["site_name"] ?? null)) {
            // line 27
            echo "      <div class=\"site-name site-branding__name\">
        <a href=\"";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 31
        echo "    ";
        if (($context["site_slogan"] ?? null)) {
            // line 32
            echo "      <div class=\"site-slogan site-branding__slogan\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "</div>
    ";
        }
        // line 34
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 34,  112 => 32,  109 => 31,  99 => 28,  96 => 27,  93 => 26,  84 => 22,  78 => 21,  75 => 20,  73 => 19,  70 => 18,  67 => 17,  62 => 1,  60 => 16,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Showcase Lite's theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% set attributes = attributes.addClass('site-branding') %}
{% block content %}
  <div class=\"logo-and-site-name-wrapper clearfix\">
    {% if site_logo %}
      <div class=\"logo\">
        <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\" class=\"site-branding__logo\">
          <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
        </a>
      </div>
    {% endif %}
    {% if site_name %}
      <div class=\"site-name site-branding__name\">
        <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
      </div>
    {% endif %}
    {% if site_slogan %}
      <div class=\"site-slogan site-branding__slogan\">{{ site_slogan }}</div>
    {% endif %}
  </div>
{% endblock %}
", "themes/showcase_lite/templates/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\fitproject\\web\\themes\\showcase_lite\\templates\\block--system-branding-block.html.twig");
    }
}
