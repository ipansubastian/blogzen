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

/* include/sidebar.twig */
class __TwigTemplate_0f632bcd03e7e5758dfea400b2ef44643a66d5320b718be1fab420a56d257f76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">Admin</div>
\t<div class=\"list-group\">
\t\t";
        // line 4
        if ((($context["status"] ?? null) == "masuk")) {
            // line 5
            echo "\t\t\t<a href=\"#!\" class=\"list-group-item\">Tulisan Baru</a>
\t\t\t<a href=\"#!\" class=\"list-group-item\">Logout</a>\t
\t\t";
        } else {
            // line 8
            echo "\t\t\t<a href=\"#!\" class=\"list-group-item\">Login</a>    
\t\t";
        }
        // line 10
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "include/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  42 => 8,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">Admin</div>
\t<div class=\"list-group\">
\t\t{% if status == 'masuk' %}
\t\t\t<a href=\"#!\" class=\"list-group-item\">Tulisan Baru</a>
\t\t\t<a href=\"#!\" class=\"list-group-item\">Logout</a>\t
\t\t{% else %}
\t\t\t<a href=\"#!\" class=\"list-group-item\">Login</a>    
\t\t{% endif %}
\t</div>
</div>", "include/sidebar.twig", "/mnt/C48455A884559E2C/web/blogzen/application/views/include/sidebar.twig");
    }
}