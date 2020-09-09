<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_4f3d299fc50b16ba351554cc2d5bc051692d6c782ae1e9d3b07af903026cd78b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        $__internal_5357f1c0f8a8ef8c67786277f65d0d1f0672f02ea995544ef70dad7a2d6a563b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5357f1c0f8a8ef8c67786277f65d0d1f0672f02ea995544ef70dad7a2d6a563b->enter($__internal_5357f1c0f8a8ef8c67786277f65d0d1f0672f02ea995544ef70dad7a2d6a563b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $__internal_df0824297ed6faa9de791d3e867beebc8198d9e187014d5e07dba7d1c369258b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0824297ed6faa9de791d3e867beebc8198d9e187014d5e07dba7d1c369258b->enter($__internal_df0824297ed6faa9de791d3e867beebc8198d9e187014d5e07dba7d1c369258b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5357f1c0f8a8ef8c67786277f65d0d1f0672f02ea995544ef70dad7a2d6a563b->leave($__internal_5357f1c0f8a8ef8c67786277f65d0d1f0672f02ea995544ef70dad7a2d6a563b_prof);

        
        $__internal_df0824297ed6faa9de791d3e867beebc8198d9e187014d5e07dba7d1c369258b->leave($__internal_df0824297ed6faa9de791d3e867beebc8198d9e187014d5e07dba7d1c369258b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e1f22a146e4a1d1e7470940dbbefd913729ec92f9fea98ec6a68cd1740e2d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1f22a146e4a1d1e7470940dbbefd913729ec92f9fea98ec6a68cd1740e2d1f->enter($__internal_5e1f22a146e4a1d1e7470940dbbefd913729ec92f9fea98ec6a68cd1740e2d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_da337765be0734171b0b2445cf464f998c0358f9ea8a7fd407d29b799a6cdc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da337765be0734171b0b2445cf464f998c0358f9ea8a7fd407d29b799a6cdc1a->enter($__internal_da337765be0734171b0b2445cf464f998c0358f9ea8a7fd407d29b799a6cdc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        $context["helper"] = $this;
        // line 5
        ob_start();
        // line 6
        echo $context["helper"]->getset_handler($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", array()));
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array())) {
            // line 10
            ob_start();
            // line 11
            echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "controller", array()), $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "route", array()), ((("GET" != $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "method", array()))) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "method", array())) : ("")));
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 15
        if ((($this->getAttribute(($context["collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "forward", array()), false)) : (false))) {
            // line 16
            ob_start();
            // line 17
            echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "forward", array()), "controller", array()));
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 21
        $context["request_status_code_color"] = ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", array()) >= 400)) ? ("red") : (((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", array()) >= 300)) ? ("yellow") : ("green"))));
        // line 23
        ob_start();
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, ($context["request_status_code_color"] ?? $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", array()), "html", null, true);
        echo "</span>";
        // line 25
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "route", array())) {
            // line 26
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array())) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 27
            if ((($this->getAttribute(($context["collector"] ?? null), "forward", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "forward", array()), false)) : (false))) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 28
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, ((("GET" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "method", array()))) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "method", array())) : ("")), "html", null, true);
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "route", array()), "html", null, true);
            echo "</span>";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statuscode", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "statustext", array()), "html", null, true);
        echo "</span>
            </div>";
        // line 40
        if (("GET" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "method", array()))) {
            // line 41
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "method", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 46
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 49
        echo twig_escape_filter($this->env, ($context["request_handler"] ?? $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
            </div>";
        // line 52
        if ($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 53
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Controller class</b>
                    <span>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", array()), "class", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 58
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "route", array()), "NONE")) : ("NONE")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>";
        // line 70
        if (array_key_exists("redirect_handler", $context)) {
            // line 71
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "status_code", array()), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>";
            // line 78
            echo twig_escape_filter($this->env, ($context["redirect_handler"] ?? $this->getContext($context, "redirect_handler")), "html", null, true);
            echo "
                        (<a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "redirect", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>";
        }
        // line 85
        if (array_key_exists("forward_handler", $context)) {
            // line 86
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>";
            // line 90
            echo twig_escape_filter($this->env, ($context["forward_handler"] ?? $this->getContext($context, "forward_handler")), "html", null, true);
            echo "
                        (<a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "forward", array()), "token", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "forward", array()), "token", array()), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>";
        }
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 98
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        
        $__internal_da337765be0734171b0b2445cf464f998c0358f9ea8a7fd407d29b799a6cdc1a->leave($__internal_da337765be0734171b0b2445cf464f998c0358f9ea8a7fd407d29b799a6cdc1a_prof);

        
        $__internal_5e1f22a146e4a1d1e7470940dbbefd913729ec92f9fea98ec6a68cd1740e2d1f->leave($__internal_5e1f22a146e4a1d1e7470940dbbefd913729ec92f9fea98ec6a68cd1740e2d1f_prof);

    }

    // line 101
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d08d21b549c8c3cc5f4757dc119f0118aeedc7742ffe59568544c874acc8027c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08d21b549c8c3cc5f4757dc119f0118aeedc7742ffe59568544c874acc8027c->enter($__internal_d08d21b549c8c3cc5f4757dc119f0118aeedc7742ffe59568544c874acc8027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e32ecfea8a047735164c5e4175fbd7e5d732950f8fc17c54a0940e5e6b6814a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32ecfea8a047735164c5e4175fbd7e5d732950f8fc17c54a0940e5e6b6814a2->enter($__internal_e32ecfea8a047735164c5e4175fbd7e5d732950f8fc17c54a0940e5e6b6814a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 102
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 103
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>";
        
        $__internal_e32ecfea8a047735164c5e4175fbd7e5d732950f8fc17c54a0940e5e6b6814a2->leave($__internal_e32ecfea8a047735164c5e4175fbd7e5d732950f8fc17c54a0940e5e6b6814a2_prof);

        
        $__internal_d08d21b549c8c3cc5f4757dc119f0118aeedc7742ffe59568544c874acc8027c->leave($__internal_d08d21b549c8c3cc5f4757dc119f0118aeedc7742ffe59568544c874acc8027c_prof);

    }

    // line 108
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f478c0a5b069951f167dcc94282a3053089eb5dee503151e15534a9eaaba7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f478c0a5b069951f167dcc94282a3053089eb5dee503151e15534a9eaaba7b0->enter($__internal_7f478c0a5b069951f167dcc94282a3053089eb5dee503151e15534a9eaaba7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b01baad19d05b712901d37091ed13b44bd4165978b37e3ed6b1146bf92c7c5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01baad19d05b712901d37091ed13b44bd4165978b37e3ed6b1146bf92c7c5c8->enter($__internal_b01baad19d05b712901d37091ed13b44bd4165978b37e3ed6b1146bf92c7c5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 109
        $context["helper"] = $this;
        // line 110
        echo "
    <h2>";
        // line 112
        echo $context["helper"]->getset_handler($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "controller", array()));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>";
        // line 122
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestquery", array()), "all", array()))) {
            // line 123
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>";
        } else {
            // line 127
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestquery", array()), "maxDepth" => 1), false);
        }
        // line 129
        echo "
                <h3>POST Parameters</h3>";
        // line 132
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestrequest", array()), "all", array()))) {
            // line 133
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>";
        } else {
            // line 137
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestrequest", array()), "maxDepth" => 1), false);
        }
        // line 139
        echo "
                <h3>Request Attributes</h3>";
        // line 142
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestattributes", array()), "all", array()))) {
            // line 143
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>";
        } else {
            // line 147
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestattributes", array())), false);
        }
        // line 149
        echo "
                <h3>Request Headers</h3>";
        // line 151
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "

                <h3>Request Content</h3>";
        // line 155
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "content", array()) == false)) {
            // line 156
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>";
        } elseif ($this->getAttribute(        // line 159
($context["collector"] ?? $this->getContext($context, "collector")), "content", array())) {
            // line 160
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "content", array()), "html", null, true);
            echo "</pre>
                    </div>";
        } else {
            // line 164
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>";
        }
        // line 168
        echo "
                <h3>Server Parameters</h3>";
        // line 170
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestserver", array())), false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>";
        // line 180
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responseheaders", array()), "labels" => array(0 => "Header", 1 => "Value"), "maxDepth" => 1), false);
        echo "
            </div>
        </div>

        <div class=\"tab";
        // line 184
        echo (((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestcookies", array()), "all", array())) && twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responsecookies", array()), "all", array())))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>";
        // line 190
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestcookies", array()), "all", array()))) {
            // line 191
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>";
        } else {
            // line 195
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestcookies", array())), false);
        }
        // line 197
        echo "
                <h3>Response Cookies</h3>";
        // line 200
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responsecookies", array()), "all", array()))) {
            // line 201
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>";
        } else {
            // line 205
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "responsecookies", array())), true);
        }
        // line 207
        echo "            </div>
        </div>

        <div class=\"tab";
        // line 210
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>";
        // line 216
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", array()))) {
            // line 217
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>";
        } else {
            // line 221
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionmetadata", array())), false);
        }
        // line 223
        echo "
                <h3>Session Attributes</h3>";
        // line 226
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionattributes", array()))) {
            // line 227
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>";
        } else {
            // line 231
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sessionattributes", array()), "labels" => array(0 => "Attribute", 1 => "Value")), false);
        }
        // line 233
        echo "            </div>
        </div>

        <div class=\"tab";
        // line 236
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "flashes", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>";
        // line 242
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "flashes", array()))) {
            // line 243
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>";
        } else {
            // line 247
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "flashes", array())), false);
        }
        // line 249
        echo "            </div>
        </div>";
        // line 252
        if ($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array())) {
            // line 253
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token =";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "token", array()), "html", null, true);
            echo ")</small>
                </h3>";
            // line 262
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            echo "
            </div>
        </div>";
        }
        // line 267
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()))) {
            // line 268
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 269
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 273
                echo "                    <h3>
                        <a href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">";
                // line 275
                echo $context["helper"]->getset_handler($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "controller", array()));
                echo "
                        </a>
                        <small>(token = <a href=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", array()), "html", null, true);
                echo "</a>)</small>
                    </h3>";
                // line 280
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "            </div>
        </div>";
        }
        // line 285
        echo "    </div>";
        
        $__internal_b01baad19d05b712901d37091ed13b44bd4165978b37e3ed6b1146bf92c7c5c8->leave($__internal_b01baad19d05b712901d37091ed13b44bd4165978b37e3ed6b1146bf92c7c5c8_prof);

        
        $__internal_7f478c0a5b069951f167dcc94282a3053089eb5dee503151e15534a9eaaba7b0->leave($__internal_7f478c0a5b069951f167dcc94282a3053089eb5dee503151e15534a9eaaba7b0_prof);

    }

    // line 288
    public function getset_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f410c1b476a9977151cd0c1d258796d0473e15b43ea69c40afd0036a9fdc5ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f410c1b476a9977151cd0c1d258796d0473e15b43ea69c40afd0036a9fdc5ada->enter($__internal_f410c1b476a9977151cd0c1d258796d0473e15b43ea69c40afd0036a9fdc5ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            $__internal_3fce7cfdecc3dca039547602efc7318b8ca77cb76215e47ab20419c032b584b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3fce7cfdecc3dca039547602efc7318b8ca77cb76215e47ab20419c032b584b2->enter($__internal_3fce7cfdecc3dca039547602efc7318b8ca77cb76215e47ab20419c032b584b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 289
            if ($this->getAttribute(($context["controller"] ?? null), "class", array(), "any", true, true)) {
                // line 290
                if (((array_key_exists("method", $context)) ? (_twig_default_filter(($context["method"] ?? $this->getContext($context, "method")), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
                    echo "</span>";
                }
                // line 291
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "line", array()));
                // line 292
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "file", array()), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span>";
                }
                // line 294
                if (((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? $this->getContext($context, "route")), false)) : (false))) {
                    // line 295
                    echo "@";
                    echo twig_escape_filter($this->env, ($context["route"] ?? $this->getContext($context, "route")), "html", null, true);
                } else {
                    // line 297
                    echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "class", array()))), "html", null, true);
                    // line 298
                    echo twig_escape_filter($this->env, (($this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "method", array())) ? ((" :: " . $this->getAttribute(($context["controller"] ?? $this->getContext($context, "controller")), "method", array()))) : ("")), "html", null, true);
                }
                // line 301
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 303
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? $this->getContext($context, "route")), ($context["controller"] ?? $this->getContext($context, "controller")))) : (($context["controller"] ?? $this->getContext($context, "controller")))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_3fce7cfdecc3dca039547602efc7318b8ca77cb76215e47ab20419c032b584b2->leave($__internal_3fce7cfdecc3dca039547602efc7318b8ca77cb76215e47ab20419c032b584b2_prof);

            
            $__internal_f410c1b476a9977151cd0c1d258796d0473e15b43ea69c40afd0036a9fdc5ada->leave($__internal_f410c1b476a9977151cd0c1d258796d0473e15b43ea69c40afd0036a9fdc5ada_prof);

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
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 303,  577 => 301,  574 => 298,  572 => 297,  568 => 295,  566 => 294,  556 => 292,  554 => 291,  548 => 290,  546 => 289,  526 => 288,  516 => 285,  512 => 282,  506 => 280,  500 => 277,  495 => 275,  492 => 274,  489 => 273,  485 => 272,  480 => 269,  477 => 268,  475 => 267,  469 => 262,  465 => 259,  461 => 258,  454 => 253,  452 => 252,  449 => 249,  446 => 247,  441 => 243,  439 => 242,  432 => 236,  427 => 233,  424 => 231,  419 => 227,  417 => 226,  414 => 223,  411 => 221,  406 => 217,  404 => 216,  397 => 210,  392 => 207,  389 => 205,  384 => 201,  382 => 200,  379 => 197,  376 => 195,  371 => 191,  369 => 190,  362 => 184,  355 => 180,  344 => 170,  341 => 168,  336 => 164,  331 => 161,  328 => 160,  326 => 159,  322 => 156,  320 => 155,  315 => 151,  312 => 149,  309 => 147,  304 => 143,  302 => 142,  299 => 139,  296 => 137,  291 => 133,  289 => 132,  286 => 129,  283 => 127,  278 => 123,  276 => 122,  265 => 112,  262 => 110,  260 => 109,  251 => 108,  238 => 103,  235 => 102,  226 => 101,  216 => 98,  206 => 91,  202 => 90,  197 => 86,  195 => 85,  186 => 79,  182 => 78,  176 => 74,  171 => 71,  169 => 70,  160 => 66,  152 => 61,  147 => 58,  142 => 55,  138 => 53,  136 => 52,  132 => 49,  127 => 46,  122 => 43,  118 => 41,  116 => 40,  111 => 37,  106 => 34,  104 => 33,  99 => 29,  94 => 28,  90 => 27,  86 => 26,  84 => 25,  78 => 24,  76 => 23,  74 => 21,  70 => 17,  68 => 16,  66 => 15,  62 => 11,  60 => 10,  58 => 9,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    {% import _self as helper %}
    {% set request_handler %}
        {{ helper.set_handler(collector.controller) }}
    {% endset %}

    {% if collector.redirect %}
        {% set redirect_handler %}
            {{ helper.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}
        {% endset %}
    {% endif %}

    {% if collector.forward|default(false) %}
        {% set forward_handler %}
            {{ helper.set_handler(collector.forward.controller) }}
        {% endset %}
    {% endif %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            {% if collector.redirect %}{{ include('@WebProfiler/Icon/redirect.svg') }}{% endif %}
            {% if collector.forward|default(false) %}{{ include('@WebProfiler/Icon/forward.svg') }}{% endif %}
            <span class=\"sf-toolbar-label\">{{ 'GET' != collector.method ? collector.method }} @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
            </div>

            {% if 'GET' != collector.method -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>{{ collector.method }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>{{ request_handler }}</span>
            </div>

            {% if collector.controller.class is defined -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Controller class</b>
                    <span>{{ collector.controller.class }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ collector.route|default('NONE') }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>
        </div>

        {% if redirect_handler is defined -%}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">{{ collector.redirect.status_code }}</span>
                        Redirect from
                    </b>
                    <span>
                        {{ redirect_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.redirect.token }) }}\">{{ collector.redirect.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}

        {% if forward_handler is defined %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        {{ forward_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.forward.token }) }}\">{{ collector.forward.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>
        {{ helper.set_handler(collector.controller) }}
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                {% if collector.requestquery.all is empty %}
                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>POST Parameters</h3>

                {% if collector.requestrequest.all is empty %}
                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"card\">
                        <pre class=\"break-long-words\">{{ collector.content }}</pre>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}

                <h3>Server Parameters</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestserver }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.requestcookies.all is empty and collector.responsecookies.all is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Response Cookies</h3>

                {% if collector.responsecookies.all is empty %}
                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responsecookies }, with_context = true) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        <a href=\"{{ path('_profiler', { token: child.token }) }}\">
                            {{ helper.set_handler(child.getcollector('request').controller) }}
                        </a>
                        <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% macro set_handler(controller, route, method) %}
    {% if controller.class is defined -%}
        {%- if method|default(false) %}<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">{{ method }}</span>{% endif -%}
        {%- set link = controller.file|file_link(controller.line) %}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% else %}<span>{% endif %}

            {%- if route|default(false) -%}
                @{{ route }}
            {%- else -%}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {%- endif -%}

        {%- if link %}</a>{% else %}</span>{% endif %}
    {%- else -%}
        <span>{{ route|default(controller) }}</span>
    {%- endif %}
{% endmacro %}
", "@WebProfiler/Collector/request.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\request.html.twig");
    }
}
