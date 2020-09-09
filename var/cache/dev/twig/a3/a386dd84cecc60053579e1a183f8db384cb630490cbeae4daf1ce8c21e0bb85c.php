<?php

/* @WebProfiler/Collector/validator.html.twig */
class __TwigTemplate_6b1270744131eb459b23f4adb882504f75e7d2576a320de7912811275b5b3313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/validator.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83c626d151bdc847199f374bab2597d0d7aa42ae47a764f9a9b2f7c8eaf555a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c626d151bdc847199f374bab2597d0d7aa42ae47a764f9a9b2f7c8eaf555a3->enter($__internal_83c626d151bdc847199f374bab2597d0d7aa42ae47a764f9a9b2f7c8eaf555a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/validator.html.twig"));

        $__internal_f21a1956be26b0c398b6f1b7c3f4afdce57785960493a9771e45f231f3aeafef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21a1956be26b0c398b6f1b7c3f4afdce57785960493a9771e45f231f3aeafef->enter($__internal_f21a1956be26b0c398b6f1b7c3f4afdce57785960493a9771e45f231f3aeafef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/validator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c626d151bdc847199f374bab2597d0d7aa42ae47a764f9a9b2f7c8eaf555a3->leave($__internal_83c626d151bdc847199f374bab2597d0d7aa42ae47a764f9a9b2f7c8eaf555a3_prof);

        
        $__internal_f21a1956be26b0c398b6f1b7c3f4afdce57785960493a9771e45f231f3aeafef->leave($__internal_f21a1956be26b0c398b6f1b7c3f4afdce57785960493a9771e45f231f3aeafef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2076e682252dce5c08d2789508c3281eb702f1c647c2cee5aa6d4e83e7f466f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2076e682252dce5c08d2789508c3281eb702f1c647c2cee5aa6d4e83e7f466f->enter($__internal_e2076e682252dce5c08d2789508c3281eb702f1c647c2cee5aa6d4e83e7f466f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dcb05518b0b85e8c3ec1848173cfc622caf43dc9c3f4740b715190938bcd384b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb05518b0b85e8c3ec1848173cfc622caf43dc9c3f4740b715190938bcd384b->enter($__internal_dcb05518b0b85e8c3ec1848173cfc622caf43dc9c3f4740b715190938bcd384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()) > 0) || twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())))) {
            // line 5
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array())) ? ("red") : (""));
            // line 6
            ob_start();
            // line 7
            echo twig_include($this->env, $context, "@WebProfiler/Icon/validator.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array())) : (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())))), "html", null, true);
            echo "
            </span>";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Validator calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of violations</b>
                <span class=\"sf-toolbar-status";
            // line 20
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()) > 0)) ? (" sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()), "html", null, true);
            echo "</span>
            </div>";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        }
        
        $__internal_dcb05518b0b85e8c3ec1848173cfc622caf43dc9c3f4740b715190938bcd384b->leave($__internal_dcb05518b0b85e8c3ec1848173cfc622caf43dc9c3f4740b715190938bcd384b_prof);

        
        $__internal_e2076e682252dce5c08d2789508c3281eb702f1c647c2cee5aa6d4e83e7f466f->leave($__internal_e2076e682252dce5c08d2789508c3281eb702f1c647c2cee5aa6d4e83e7f466f_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2abe71874d2748c4aba88653692a39fd64461d33a53a904572973a0f1c3a729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2abe71874d2748c4aba88653692a39fd64461d33a53a904572973a0f1c3a729->enter($__internal_d2abe71874d2748c4aba88653692a39fd64461d33a53a904572973a0f1c3a729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2c93c09b4403d388463217cc6549a1f4186947dffa9c1bd94dbbd9118126fad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c93c09b4403d388463217cc6549a1f4186947dffa9c1bd94dbbd9118126fad5->enter($__internal_2c93c09b4403d388463217cc6549a1f4186947dffa9c1bd94dbbd9118126fad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array())) ? (" label-status-error") : (""));
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Icon/validator.svg");
        echo "</span>
        <strong>Validator</strong>";
        // line 32
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()) > 0)) {
            // line 33
            echo "            <span class=\"count\">
                <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "violationsCount", array()), "html", null, true);
            echo "</span>
            </span>";
        }
        // line 37
        echo "    </span>";
        
        $__internal_2c93c09b4403d388463217cc6549a1f4186947dffa9c1bd94dbbd9118126fad5->leave($__internal_2c93c09b4403d388463217cc6549a1f4186947dffa9c1bd94dbbd9118126fad5_prof);

        
        $__internal_d2abe71874d2748c4aba88653692a39fd64461d33a53a904572973a0f1c3a729->leave($__internal_d2abe71874d2748c4aba88653692a39fd64461d33a53a904572973a0f1c3a729_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e283df9482a12a345d8df64c933f28d6dd16dd8fe509bc6bfe36917f1f0102e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e283df9482a12a345d8df64c933f28d6dd16dd8fe509bc6bfe36917f1f0102e->enter($__internal_5e283df9482a12a345d8df64c933f28d6dd16dd8fe509bc6bfe36917f1f0102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d03dc4b93a64b2d117ef38251ee7a52d173f23a4d723fe305237a45874d4fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d03dc4b93a64b2d117ef38251ee7a52d173f23a4d723fe305237a45874d4fea->enter($__internal_1d03dc4b93a64b2d117ef38251ee7a52d173f23a4d723fe305237a45874d4fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    <h2>Validator calls</h2>";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calls", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
            // line 44
            echo "        <div class=\"sf-validator sf-reset\">
            <span class=\"metadata\">In";
            // line 46
            $context["caller"] = $this->getAttribute($context["call"], "caller", array());
            // line 47
            if ($this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "line", array())) {
                // line 48
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "file", array()), $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "line", array()));
                // line 49
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    // line 50
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "name", array()), "html", null, true);
                    echo "</a>";
                } else {
                    // line 52
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "name", array()), "html", null, true);
                    echo "</abbr>";
                }
            } else {
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "name", array()), "html", null, true);
            }
            // line 57
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "line", array()), "html", null, true);
            echo "</a> (<a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-context-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">context</a>):
            </span>

            <div class=\"sf-validator-compact hidden\" id=\"sf-trace-";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "file", array()), $this->getAttribute(($context["caller"] ?? $this->getContext($context, "caller")), "line", array()));
            echo "
                </div>
            </div>

            <div class=\"sf-validator-compact hidden sf-validator-context\" id=\"sf-context-";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            // line 67
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["call"], "context", array()), 1));
            echo "
            </div>";
            // line 70
            if (twig_length_filter($this->env, $this->getAttribute($context["call"], "violations", array()))) {
                // line 71
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Path</th>
                            <th>Message</th>
                            <th>Invalid value</th>
                            <th>Violation</th>
                        </tr>
                    </thead>";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["call"], "violations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                    // line 81
                    echo "                        <tr>
                            <td>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["violation"], "propertyPath", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["violation"], "message", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 84
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["violation"], "seek", array(0 => "invalidValue"), "method")));
                    echo "</td>
                            <td>";
                    // line 85
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["violation"]));
                    echo "</td>
                        </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                </table>";
            } else {
                // line 90
                echo "                No violations";
            }
            // line 92
            echo "        </div>";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 94
            echo "        <div class=\"empty\">
            <p>No calls to the validator were collected during this request.</p>
        </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1d03dc4b93a64b2d117ef38251ee7a52d173f23a4d723fe305237a45874d4fea->leave($__internal_1d03dc4b93a64b2d117ef38251ee7a52d173f23a4d723fe305237a45874d4fea_prof);

        
        $__internal_5e283df9482a12a345d8df64c933f28d6dd16dd8fe509bc6bfe36917f1f0102e->leave($__internal_5e283df9482a12a345d8df64c933f28d6dd16dd8fe509bc6bfe36917f1f0102e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/validator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 94,  270 => 92,  267 => 90,  264 => 88,  256 => 85,  252 => 84,  248 => 83,  244 => 82,  241 => 81,  237 => 80,  227 => 71,  225 => 70,  221 => 67,  218 => 66,  211 => 62,  207 => 60,  196 => 57,  193 => 55,  185 => 52,  176 => 50,  174 => 49,  172 => 48,  170 => 47,  168 => 46,  165 => 44,  147 => 43,  145 => 41,  136 => 40,  126 => 37,  121 => 34,  118 => 33,  116 => 32,  112 => 30,  106 => 29,  97 => 28,  86 => 24,  79 => 20,  72 => 16,  68 => 14,  66 => 13,  61 => 9,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.violationsCount > 0 or collector.calls|length %}
        {% set status_color = collector.violationsCount ? 'red' : '' %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/validator.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.violationsCount ?: collector.calls|length }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Validator calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.calls|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of violations</b>
                <span class=\"sf-toolbar-status {{- collector.violationsCount > 0 ? ' sf-toolbar-status-red' }}\">{{ collector.violationsCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{- collector.violationsCount ? ' label-status-error' }} {{ collector.calls is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/validator.svg') }}</span>
        <strong>Validator</strong>
        {% if collector.violationsCount > 0 %}
            <span class=\"count\">
                <span>{{ collector.violationsCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Validator calls</h2>

    {% for call in collector.calls %}
        <div class=\"sf-validator sf-reset\">
            <span class=\"metadata\">In
                {% set caller = call.caller %}
                {% if caller.line %}
                    {% set link = caller.file|file_link(caller.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                    {% else %}
                        <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ caller.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ caller.line }}</a> (<a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-context-{{ loop.index0 }}\">context</a>):
            </span>

            <div class=\"sf-validator-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ caller.file|file_excerpt(caller.line) }}
                </div>
            </div>

            <div class=\"sf-validator-compact hidden sf-validator-context\" id=\"sf-context-{{ loop.index0 }}\">
                {{ profiler_dump(call.context, maxDepth=1) }}
            </div>

            {% if call.violations|length %}
                <table>
                    <thead>
                        <tr>
                            <th>Path</th>
                            <th>Message</th>
                            <th>Invalid value</th>
                            <th>Violation</th>
                        </tr>
                    </thead>
                    {% for violation in call.violations %}
                        <tr>
                            <td>{{ violation.propertyPath }}</td>
                            <td>{{ violation.message }}</td>
                            <td>{{ profiler_dump(violation.seek('invalidValue')) }}</td>
                            <td>{{ profiler_dump(violation) }}</td>
                        </tr>
                    {% endfor %}
                </table>
            {% else %}
                No violations
            {% endif %}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No calls to the validator were collected during this request.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@WebProfiler/Collector/validator.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\validator.html.twig");
    }
}
