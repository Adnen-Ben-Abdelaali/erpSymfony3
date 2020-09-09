<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_57d002691e538338c5eb21a2b7ef97ea9a7ace5123b954e76d04ffae4eab4fac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
        $__internal_542ac5b98ce0e92324c6c6faaa0a95da571a97086faf011f5267222f97f447f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542ac5b98ce0e92324c6c6faaa0a95da571a97086faf011f5267222f97f447f8->enter($__internal_542ac5b98ce0e92324c6c6faaa0a95da571a97086faf011f5267222f97f447f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_9d5f657739dfafab170490d34455939ef61102c2a3a40efcb49a19a98bd7b13b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5f657739dfafab170490d34455939ef61102c2a3a40efcb49a19a98bd7b13b->enter($__internal_9d5f657739dfafab170490d34455939ef61102c2a3a40efcb49a19a98bd7b13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_542ac5b98ce0e92324c6c6faaa0a95da571a97086faf011f5267222f97f447f8->leave($__internal_542ac5b98ce0e92324c6c6faaa0a95da571a97086faf011f5267222f97f447f8_prof);

        
        $__internal_9d5f657739dfafab170490d34455939ef61102c2a3a40efcb49a19a98bd7b13b->leave($__internal_9d5f657739dfafab170490d34455939ef61102c2a3a40efcb49a19a98bd7b13b_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47bba10130ed291631bd5e1cc478161abbca9c77f46b7b38d6e9ce00871e37f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bba10130ed291631bd5e1cc478161abbca9c77f46b7b38d6e9ce00871e37f0->enter($__internal_47bba10130ed291631bd5e1cc478161abbca9c77f46b7b38d6e9ce00871e37f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_216b555b0496a3fceb6235c06e87d9b56d134d38d149bb5fb798be7c04b75e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216b555b0496a3fceb6235c06e87d9b56d134d38d149bb5fb798be7c04b75e09->enter($__internal_216b555b0496a3fceb6235c06e87d9b56d134d38d149bb5fb798be7c04b75e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) {
            // line 7
            ob_start();
            // line 8
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : ("yellow"));
            // line 9
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())))), "html", null, true);
            echo "</span>";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countwarnings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countwarnings", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        }
        
        $__internal_216b555b0496a3fceb6235c06e87d9b56d134d38d149bb5fb798be7c04b75e09->leave($__internal_216b555b0496a3fceb6235c06e87d9b56d134d38d149bb5fb798be7c04b75e09_prof);

        
        $__internal_47bba10130ed291631bd5e1cc478161abbca9c77f46b7b38d6e9ce00871e37f0->leave($__internal_47bba10130ed291631bd5e1cc478161abbca9c77f46b7b38d6e9ce00871e37f0_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_443b7d3fb264e86f40ddf01fe96aac6b864cbc50e3cc7861f64bd6a06de8afdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_443b7d3fb264e86f40ddf01fe96aac6b864cbc50e3cc7861f64bd6a06de8afdd->enter($__internal_443b7d3fb264e86f40ddf01fe96aac6b864cbc50e3cc7861f64bd6a06de8afdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_382e37e847c35d3007e8ea2a9e7992466bda6527ad1cbb3e6ef7a6e321976557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382e37e847c35d3007e8ea2a9e7992466bda6527ad1cbb3e6ef7a6e321976557->enter($__internal_382e37e847c35d3007e8ea2a9e7992466bda6527ad1cbb3e6ef7a6e321976557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : (((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) ? ("warning") : (""))));
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>";
        // line 38
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())))), "html", null, true);
            echo "</span>
            </span>";
        }
        // line 43
        echo "    </span>";
        
        $__internal_382e37e847c35d3007e8ea2a9e7992466bda6527ad1cbb3e6ef7a6e321976557->leave($__internal_382e37e847c35d3007e8ea2a9e7992466bda6527ad1cbb3e6ef7a6e321976557_prof);

        
        $__internal_443b7d3fb264e86f40ddf01fe96aac6b864cbc50e3cc7861f64bd6a06de8afdd->leave($__internal_443b7d3fb264e86f40ddf01fe96aac6b864cbc50e3cc7861f64bd6a06de8afdd_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_417be481ff489f7081b350d12e7478e244582171bee114e69b97b972905e0ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417be481ff489f7081b350d12e7478e244582171bee114e69b97b972905e0ded->enter($__internal_417be481ff489f7081b350d12e7478e244582171bee114e69b97b972905e0ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8165198af1ee5e86b9c33df24a32ddbd7c5e449d186f966c7d80a9e05ffdb0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8165198af1ee5e86b9c33df24a32ddbd7c5e449d186f966c7d80a9e05ffdb0ab->enter($__internal_8165198af1ee5e86b9c33df24a32ddbd7c5e449d186f966c7d80a9e05ffdb0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>";
        // line 49
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>";
        } else {
            // line 55
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 57
                if (($this->getAttribute($context["log"], "scream", array(), "any", true, true) &&  !$this->getAttribute($context["log"], "scream", array()))) {
                    // line 58
                    $context["deprecation_logs"] = twig_array_merge(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")), array(0 => $context["log"]));
                } elseif (($this->getAttribute(                // line 59
$context["log"], "scream", array(), "any", true, true) && $this->getAttribute($context["log"], "scream", array()))) {
                    // line 60
                    $context["silenced_logs"] = twig_array_merge(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")), array(0 => $context["log"]));
                } elseif (($this->getAttribute(                // line 61
$context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 62
                    $context["debug_logs"] = twig_array_merge(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")), array(0 => $context["log"]));
                } else {
                    // line 64
                    $context["info_and_error_logs"] = twig_array_merge(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")), array(0 => $context["log"]));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())) ? ("warning") : (""))));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (twig_length_filter($this->env, ($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs"))))), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">";
            // line 74
            if (twig_test_empty(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")))) {
                // line 75
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>";
            } else {
                // line 79
                echo $context["helper"]->getrender_table(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")), "info", true);
            }
            // line 81
            echo "                </div>
            </div>

            <div class=\"tab\">";
            // line 87
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">";
            // line 91
            if (twig_test_empty(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")))) {
                // line 92
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>";
            } else {
                // line 96
                echo $context["helper"]->getrender_table(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")), "deprecation", false, true);
            }
            // line 98
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 102
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["debug_logs"] ?? $this->getContext($context, "debug_logs"))), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">";
            // line 106
            if (twig_test_empty(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")))) {
                // line 107
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>";
            } else {
                // line 111
                echo $context["helper"]->getrender_table(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")), "debug");
            }
            // line 113
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">";
            // line 117
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">";
            // line 121
            if (twig_test_empty(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")))) {
                // line 122
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>";
            } else {
                // line 126
                echo $context["helper"]->getrender_table(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")), "silenced");
            }
            // line 128
            echo "                </div>
            </div>";
            // line 131
            $context["compilerLogTotal"] = 0;
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "compilerLogs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
                // line 133
                $context["compilerLogTotal"] = (($context["compilerLogTotal"] ?? $this->getContext($context, "compilerLogTotal")) + twig_length_filter($this->env, $context["logs"]));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">";
            // line 136
            echo twig_escape_filter($this->env, ($context["compilerLogTotal"] ?? $this->getContext($context, "compilerLogTotal")), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">";
            // line 140
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "compilerLogs", array()))) {
                // line 141
                echo "                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>";
            } else {
                // line 145
                echo "                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "compilerLogs", array()));
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
                foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                    // line 155
                    echo "                                    <tr class=\"\">
                                        <td class=\"font-normal\">";
                    // line 157
                    $context["context_id"] = ("context-compiler-" . $this->getAttribute($context["loop"], "index", array()));
                    // line 158
                    echo "
                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                    // line 159
                    echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                    echo "\" data-toggle-alt-content=\"";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</a>

                                             <div id=\"";
                    // line 161
                    echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                    echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["logs"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                        // line 164
                        echo "                                                    <li>";
                        echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute($context["log"], "message", array()));
                        echo "</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">";
                    // line 169
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["logs"]), "html", null, true);
                    echo "</td>
                                    </tr>";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                            </tbody>
                        </table>";
            }
            // line 175
            echo "                </div>
            </div>

        </div>";
        }
        
        $__internal_8165198af1ee5e86b9c33df24a32ddbd7c5e449d186f966c7d80a9e05ffdb0ab->leave($__internal_8165198af1ee5e86b9c33df24a32ddbd7c5e449d186f966c7d80a9e05ffdb0ab_prof);

        
        $__internal_417be481ff489f7081b350d12e7478e244582171bee114e69b97b972905e0ded->leave($__internal_417be481ff489f7081b350d12e7478e244582171bee114e69b97b972905e0ded_prof);

    }

    // line 182
    public function getrender_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2bbd11abd9b918b1b0731d5f54c4ef9fe73ee79f86c9317756a288bad4da7435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2bbd11abd9b918b1b0731d5f54c4ef9fe73ee79f86c9317756a288bad4da7435->enter($__internal_2bbd11abd9b918b1b0731d5f54c4ef9fe73ee79f86c9317756a288bad4da7435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_1cfb33edd321f5d6479731ac4771361979cd2ae7d041e7cc08202a9db478ad60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1cfb33edd321f5d6479731ac4771361979cd2ae7d041e7cc08202a9db478ad60->enter($__internal_1cfb33edd321f5d6479731ac4771361979cd2ae7d041e7cc08202a9db478ad60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 183
            $context["helper"] = $this;
            // line 184
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? $this->getContext($context, "logs"))), "channel", array(), "any", true, true);
            // line 185
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 189
            echo ((($context["show_level"] ?? $this->getContext($context, "show_level"))) ? ("Level") : ("Time"));
            echo "</th>";
            // line 190
            if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                echo "<th>Channel</th>";
            }
            // line 191
            echo "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 197
                $context["css_class"] = ((($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) ? ("") : (((twig_in_filter($this->getAttribute(                // line 198
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((($this->getAttribute(                // line 199
$context["log"], "priorityName", array()) == "WARNING")) ? ("status-warning") : (""))))));
                // line 201
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? $this->getContext($context, "css_class")), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\" nowrap>";
                // line 203
                if (($context["show_level"] ?? $this->getContext($context, "show_level"))) {
                    // line 204
                    echo "                            <span class=\"colored text-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>";
                }
                // line 206
                echo "                        <span class=\"text-muted newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>";
                // line 209
                if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                    // line 210
                    echo "                        <td class=\"font-normal text-small text-bold\" nowrap>";
                    // line 211
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                    // line 212
                    if (($this->getAttribute($context["log"], "errorCount", array(), "any", true, true) && ($this->getAttribute($context["log"], "errorCount", array()) > 1))) {
                        // line 213
                        echo "                                <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "errorCount", array()), "html", null, true);
                        echo " times)</span>";
                    }
                    // line 215
                    echo "                        </td>";
                }
                // line 218
                echo "
                    <td class=\"font-normal\">";
                // line 219
                echo $context["helper"]->getrender_log_message(($context["category"] ?? $this->getContext($context, "category")), $this->getAttribute($context["loop"], "index", array()), $context["log"]);
                echo "</td>
                </tr>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "        </tbody>
    </table>";
            
            $__internal_1cfb33edd321f5d6479731ac4771361979cd2ae7d041e7cc08202a9db478ad60->leave($__internal_1cfb33edd321f5d6479731ac4771361979cd2ae7d041e7cc08202a9db478ad60_prof);

            
            $__internal_2bbd11abd9b918b1b0731d5f54c4ef9fe73ee79f86c9317756a288bad4da7435->leave($__internal_2bbd11abd9b918b1b0731d5f54c4ef9fe73ee79f86c9317756a288bad4da7435_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 226
    public function getrender_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c91f79a6140568b3aee77b8508d428e2b7f1c8dce98ef29359ff02f3aab9ca3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c91f79a6140568b3aee77b8508d428e2b7f1c8dce98ef29359ff02f3aab9ca3b->enter($__internal_c91f79a6140568b3aee77b8508d428e2b7f1c8dce98ef29359ff02f3aab9ca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_bdc704e0f21922d0a771340f219110211e923f0dc3714df4a12f4ac1c2cb6f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_bdc704e0f21922d0a771340f219110211e923f0dc3714df4a12f4ac1c2cb6f0c->enter($__internal_bdc704e0f21922d0a771340f219110211e923f0dc3714df4a12f4ac1c2cb6f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 227
            $context["has_context"] = ($this->getAttribute(($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array())));
            // line 228
            $context["has_trace"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array(), "any", false, true), "exception", array(), "any", false, true), "trace", array(), "any", true, true);
            // line 230
            if ( !($context["has_context"] ?? $this->getContext($context, "has_context"))) {
                // line 231
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()));
            } else {
                // line 233
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()), $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()));
                echo "

        <div class=\"text-small font-normal\">";
                // line 236
                $context["context_id"] = ((("context-" . ($context["category"] ?? $this->getContext($context, "category"))) . "-") . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                // line 237
                echo "            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>";
                // line 239
                if (($context["has_trace"] ?? $this->getContext($context, "has_trace"))) {
                    // line 240
                    echo "                &nbsp;&nbsp;";
                    // line 241
                    $context["trace_id"] = ((("trace-" . ($context["category"] ?? $this->getContext($context, "category"))) . "-") . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                    // line 242
                    echo "                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    echo twig_escape_filter($this->env, ($context["trace_id"] ?? $this->getContext($context, "trace_id")), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>";
                }
                // line 244
                echo "        </div>

        <div id=\"";
                // line 246
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">";
                // line 247
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()), 1));
                echo "
        </div>";
                // line 250
                if (($context["has_trace"] ?? $this->getContext($context, "has_trace"))) {
                    // line 251
                    echo "            <div id=\"";
                    echo twig_escape_filter($this->env, ($context["trace_id"] ?? $this->getContext($context, "trace_id")), "html", null, true);
                    echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">";
                    // line 252
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()), "exception", array()), "trace", array()), 1));
                    echo "
            </div>";
                }
            }
            
            $__internal_bdc704e0f21922d0a771340f219110211e923f0dc3714df4a12f4ac1c2cb6f0c->leave($__internal_bdc704e0f21922d0a771340f219110211e923f0dc3714df4a12f4ac1c2cb6f0c_prof);

            
            $__internal_c91f79a6140568b3aee77b8508d428e2b7f1c8dce98ef29359ff02f3aab9ca3b->leave($__internal_c91f79a6140568b3aee77b8508d428e2b7f1c8dce98ef29359ff02f3aab9ca3b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  623 => 252,  619 => 251,  617 => 250,  613 => 247,  610 => 246,  606 => 244,  601 => 242,  599 => 241,  597 => 240,  595 => 239,  591 => 237,  589 => 236,  584 => 233,  581 => 231,  579 => 230,  577 => 228,  575 => 227,  555 => 226,  533 => 222,  517 => 219,  514 => 218,  511 => 215,  506 => 213,  504 => 212,  502 => 211,  500 => 210,  498 => 209,  493 => 206,  488 => 204,  486 => 203,  481 => 201,  479 => 199,  478 => 198,  477 => 197,  460 => 196,  454 => 191,  450 => 190,  447 => 189,  441 => 185,  439 => 184,  437 => 183,  416 => 182,  402 => 175,  398 => 172,  382 => 169,  377 => 166,  369 => 164,  365 => 163,  361 => 161,  352 => 159,  349 => 158,  347 => 157,  344 => 155,  327 => 154,  317 => 145,  312 => 141,  310 => 140,  304 => 136,  301 => 135,  295 => 133,  291 => 132,  289 => 131,  286 => 128,  283 => 126,  278 => 122,  276 => 121,  270 => 117,  264 => 113,  261 => 111,  256 => 107,  254 => 106,  248 => 102,  242 => 98,  239 => 96,  234 => 92,  232 => 91,  223 => 87,  218 => 81,  215 => 79,  210 => 75,  208 => 74,  200 => 70,  195 => 67,  188 => 64,  185 => 62,  183 => 61,  181 => 60,  179 => 59,  177 => 58,  175 => 57,  171 => 56,  169 => 55,  164 => 50,  162 => 49,  160 => 47,  151 => 46,  141 => 43,  136 => 40,  133 => 39,  131 => 38,  127 => 36,  121 => 35,  112 => 34,  101 => 30,  94 => 26,  84 => 21,  74 => 16,  70 => 14,  68 => 13,  64 => 10,  60 => 9,  58 => 8,  56 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : 'yellow' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations or collector.countwarnings ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.logs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {# sort collected logs in groups #}
        {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}
        {% for log in collector.logs %}
            {% if log.scream is defined and not log.scream %}
                {% set deprecation_logs = deprecation_logs|merge([log]) %}
            {% elseif log.scream is defined and log.scream %}
                {% set silenced_logs = silenced_logs|merge([log]) %}
            {% elseif log.priorityName == 'DEBUG' %}
                {% set debug_logs = debug_logs|merge([log]) %}
            {% else %}
                {% set info_and_error_logs = info_and_error_logs|merge([log]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' }}\">{{ collector.counterrors ?: info_and_error_logs|length }}</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    {% if info_and_error_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(info_and_error_logs, 'info', true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                {# 'deprecation_logs|length' is not used because deprecations are
                now grouped and the group count doesn't match the message count #}
                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">
                    {% if deprecation_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(deprecation_logs, 'deprecation', false, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">{{ debug_logs|length }}</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    {% if debug_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(debug_logs, 'debug') }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">{{ collector.countscreams|default(0) }}</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">
                    {% if silenced_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(silenced_logs, 'silenced') }}
                    {% endif %}
                </div>
            </div>

            {% set compilerLogTotal = 0 %}
            {% for logs in collector.compilerLogs %}
                {% set compilerLogTotal = compilerLogTotal + logs|length %}
            {% endfor %}
            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">{{ compilerLogTotal }}</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">
                    {% if collector.compilerLogs is empty %}
                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>
                    {% else %}
                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>
                                {% for class, logs in collector.compilerLogs %}
                                    <tr class=\"\">
                                        <td class=\"font-normal\">
                                            {% set context_id = 'context-compiler-' ~ loop.index %}

                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"{{ class }}\">{{ class }}</a>

                                             <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>
                                                {% for log in logs %}
                                                    <li>{{ profiler_dump_log(log.message) }}</li>
                                                {% endfor %}
                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">{{ logs|length }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            </div>

        </div>
    {% endif %}
{% endblock %}

{% macro render_table(logs, category = '', show_level = false, is_deprecation = false) %}
    {% import _self as helper %}
    {% set channel_is_defined = (logs|first).channel is defined %}

    <table class=\"logs\">
        <thead>
            <tr>
                <th>{{ show_level ? 'Level' : 'Time' }}</th>
                {% if channel_is_defined %}<th>Channel</th>{% endif %}
                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            {% for log in logs %}
                {% set css_class = is_deprecation ? ''
                    : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'
                    : log.priorityName == 'WARNING' ? 'status-warning'
                %}
                <tr class=\"{{ css_class }}\">
                    <td class=\"font-normal text-small\" nowrap>
                        {% if show_level %}
                            <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                        {% endif %}
                        <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
                    </td>

                    {% if channel_is_defined %}
                        <td class=\"font-normal text-small text-bold\" nowrap>
                            {{ log.channel }}
                            {% if log.errorCount is defined and log.errorCount > 1 %}
                                <span class=\"text-muted\">({{ log.errorCount }} times)</span>
                            {% endif %}
                        </td>

                    {% endif %}

                    <td class=\"font-normal\">{{ helper.render_log_message(category, loop.index, log) }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_log_message(category, log_index, log) %}
    {% set has_context = log.context is defined and log.context is not empty %}
    {% set has_trace = log.context.exception.trace is defined %}

    {% if not has_context %}
        {{ profiler_dump_log(log.message) }}
    {% else %}
        {{ profiler_dump_log(log.message, log.context) }}

        <div class=\"text-small font-normal\">
            {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>

            {% if has_trace %}
                &nbsp;&nbsp;
                {% set trace_id = 'trace-' ~ category ~ '-' ~ log_index %}
                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
            {% endif %}
        </div>

        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(log.context, maxDepth=1) }}
        </div>

        {% if has_trace %}
            <div id=\"{{ trace_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.exception.trace, maxDepth=1) }}
            </div>
        {% endif %}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\logger.html.twig");
    }
}
