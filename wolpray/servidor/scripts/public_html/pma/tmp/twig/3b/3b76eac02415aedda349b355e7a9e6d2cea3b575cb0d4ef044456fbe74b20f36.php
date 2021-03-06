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

/* server/replication/master_replication.twig */
class __TwigTemplate_b31210b2f738d0c70dfa8137e78497d4379eb493896a7b5824b555e5d45656b3 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !($context["clear_screen"] ?? null)) {
            // line 2
            echo "  <fieldset>
    <legend>";
            // line 3
            echo _gettext("Master replication");
            echo "</legend>
    ";
            // line 4
            echo _gettext("This server is configured as master in a replication process.");
            // line 5
            echo "    <ul>
      <li>
        <a href=\"#master_status_href\" id=\"master_status_href\">
          ";
            // line 8
            echo _gettext("Show master status");
            // line 9
            echo "        </a>
        ";
            // line 10
            echo ($context["master_status_table"] ?? null);
            echo "
      </li>
      <li>
        <p>
          <a href=\"#master_slaves_href\" id=\"master_slaves_href\">
            ";
            // line 15
            echo _gettext("Show connected slaves");
            // line 16
            echo "          </a>
        </p>

        <div id=\"replication_slaves_section\" style=\"display: none;\">
          <table class=\"data\">
            <thead>
              <tr>
                <th>";
            // line 23
            echo _gettext("Server ID");
            echo "</th>
                <th>";
            // line 24
            echo _gettext("Host");
            echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slaves"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slave"]) {
                // line 29
                echo "                <tr>
                  <td class=\"value\">";
                // line 30
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["slave"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["Server_id"] ?? null) : null), "html", null, true);
                echo "</td>
                  <td class=\"value\">";
                // line 31
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["slave"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["Host"] ?? null) : null), "html", null, true);
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slave'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </tbody>
          </table>
          <br>
          ";
            // line 37
            echo call_user_func_array($this->env->getFilter('notice')->getCallable(), [_gettext("Only slaves started with the --report-host=host_name option are visible in this list.")]);
            echo "
          <br>
        </div>
      </li>
      <li>
        <a href=\"server_replication.php\" data-post=\"";
            // line 42
            echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null), "");
            echo "\" id=\"master_addslaveuser_href\">
          ";
            // line 43
            echo _gettext("Add slave replication user");
            // line 44
            echo "        </a>
      </li>
";
        }
        // line 47
        if (($context["master_add_user"] ?? null)) {
            // line 48
            echo "    ";
            echo ($context["master_add_slave_user"] ?? null);
            echo "
";
        } elseif ( !        // line 49
($context["clear_screen"] ?? null)) {
            // line 50
            echo "    </ul>
  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "server/replication/master_replication.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  139 => 49,  134 => 48,  132 => 47,  127 => 44,  125 => 43,  121 => 42,  113 => 37,  108 => 34,  99 => 31,  95 => 30,  92 => 29,  88 => 28,  81 => 24,  77 => 23,  68 => 16,  66 => 15,  58 => 10,  55 => 9,  53 => 8,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "server/replication/master_replication.twig", "/home/wolpray/public_html/pma/templates/server/replication/master_replication.twig");
    }
}
