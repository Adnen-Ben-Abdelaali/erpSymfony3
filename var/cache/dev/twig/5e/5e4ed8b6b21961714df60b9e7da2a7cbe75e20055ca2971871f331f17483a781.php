<?php

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_e00c8f9fdd74fb7121d89128b9e96245fe814eb954f22d7f30ab76ead2787235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
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
        $__internal_7f73d94ae869399323fcb727b41ace7b83b8c5185087c5c40ef5ad92e97d5a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f73d94ae869399323fcb727b41ace7b83b8c5185087c5c40ef5ad92e97d5a07->enter($__internal_7f73d94ae869399323fcb727b41ace7b83b8c5185087c5c40ef5ad92e97d5a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $__internal_55c6fa04186d3ad1d85706938dcf356f702d9ca1da06ab89f2f6b59dc093de25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c6fa04186d3ad1d85706938dcf356f702d9ca1da06ab89f2f6b59dc093de25->enter($__internal_55c6fa04186d3ad1d85706938dcf356f702d9ca1da06ab89f2f6b59dc093de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f73d94ae869399323fcb727b41ace7b83b8c5185087c5c40ef5ad92e97d5a07->leave($__internal_7f73d94ae869399323fcb727b41ace7b83b8c5185087c5c40ef5ad92e97d5a07_prof);

        
        $__internal_55c6fa04186d3ad1d85706938dcf356f702d9ca1da06ab89f2f6b59dc093de25->leave($__internal_55c6fa04186d3ad1d85706938dcf356f702d9ca1da06ab89f2f6b59dc093de25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5ca6f7f23ec9bce5e158e11d94a4bcd19c27fa6063171a911c57d863d01ea3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ca6f7f23ec9bce5e158e11d94a4bcd19c27fa6063171a911c57d863d01ea3b->enter($__internal_c5ca6f7f23ec9bce5e158e11d94a4bcd19c27fa6063171a911c57d863d01ea3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d02082e90f257a1cc758ce460cb9e213844b8f3719c10345baa42d07ed5b30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d02082e90f257a1cc758ce460cb9e213844b8f3719c10345baa42d07ed5b30d->enter($__internal_2d02082e90f257a1cc758ce460cb9e213844b8f3719c10345baa42d07ed5b30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        if (("unknown" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 5
            $context["block_status"] = "";
            // line 6
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
        } elseif (("eol" == $this->getAttribute(        // line 7
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 8
            $context["block_status"] = "red";
            // line 9
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
        } elseif (("eom" == $this->getAttribute(        // line 10
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 11
            $context["block_status"] = "yellow";
            // line 12
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
        } elseif (("dev" == $this->getAttribute(        // line 13
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 14
            $context["block_status"] = "yellow";
            // line 15
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
        } else {
            // line 17
            $context["block_status"] = "";
            // line 18
            $context["symfony_version_status"] = "";
        }
        // line 21
        ob_start();
        // line 22
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array())) {
            // line 23
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-value\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>";
        } elseif ($this->getAttribute(        // line 25
($context["collector"] ?? null), "symfonyState", array(), "any", true, true)) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">";
            // line 27
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
            </span>
            <span class=\"sf-toolbar-value\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">";
        // line 35
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array())) {
            // line 36
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</b>
                    <span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 41
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>";
        // line 45
        if (($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))) {
            // line 46
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>";
        } else {
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()), "html", null, true);
        }
        // line 50
        echo "                </span>
            </div>";
        // line 53
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()))) {
            // line 54
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 60
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()))) {
            // line 61
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 67
        if ( !("n/a" === $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array()))) {
            // line 68
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array())) ? ("green") : ("red"));
            echo "\">";
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
            echo "</span>
                </div>";
        }
        // line 73
        echo "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
        // line 78
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversionextra", array())) {
            echo " title=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()) . $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversionextra", array())), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "
                    &nbsp; <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 86
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 87
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasapcu", array())) ? ("green") : ("red"));
        echo "\">APCu</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 88
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "haszendopcache", array())) ? ("green") : ("red"));
        echo "\">OPcache</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">";
        // line 98
        if ($this->getAttribute(($context["collector"] ?? null), "symfonyversion", array(), "any", true, true)) {
            // line 99
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>";
            // line 102
            if (("Silex" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()))) {
                // line 103
                echo "                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>";
            } else {
                // line 107
                echo "                            <a href=\"https://symfony.com/doc/";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
                echo "/index.html\" rel=\"help\">
                                Read Symfony";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
                echo " Docs
                            </a>";
            }
            // line 111
            echo "                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>";
        }
        // line 122
        echo "        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 125
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => ($context["block_status"] ?? $this->getContext($context, "block_status")), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? $this->getContext($context, "symfony_version_status"))) . "\"")));
        
        $__internal_2d02082e90f257a1cc758ce460cb9e213844b8f3719c10345baa42d07ed5b30d->leave($__internal_2d02082e90f257a1cc758ce460cb9e213844b8f3719c10345baa42d07ed5b30d_prof);

        
        $__internal_c5ca6f7f23ec9bce5e158e11d94a4bcd19c27fa6063171a911c57d863d01ea3b->leave($__internal_c5ca6f7f23ec9bce5e158e11d94a4bcd19c27fa6063171a911c57d863d01ea3b_prof);

    }

    // line 128
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9956f685bed4052da9ded31fa529c8a0866f7dde68841b2ddad4ea152eeb754b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9956f685bed4052da9ded31fa529c8a0866f7dde68841b2ddad4ea152eeb754b->enter($__internal_9956f685bed4052da9ded31fa529c8a0866f7dde68841b2ddad4ea152eeb754b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f6566c59126a9fe244d17a44f907080af1f6d43860d82e3daac80db4ae885e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6566c59126a9fe244d17a44f907080af1f6d43860d82e3daac80db4ae885e16->enter($__internal_f6566c59126a9fe244d17a44f907080af1f6d43860d82e3daac80db4ae885e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 129
        echo "    <span class=\"label label-status-";
        echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()) == "eol")) ? ("red") : (((twig_in_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()), array(0 => "eom", 1 => "dev"))) ? ("yellow") : (""))));
        echo "\">
        <span class=\"icon\">";
        // line 130
        echo twig_include($this->env, $context, "@WebProfiler/Icon/config.svg");
        echo "</span>
        <strong>Configuration</strong>
    </span>";
        
        $__internal_f6566c59126a9fe244d17a44f907080af1f6d43860d82e3daac80db4ae885e16->leave($__internal_f6566c59126a9fe244d17a44f907080af1f6d43860d82e3daac80db4ae885e16_prof);

        
        $__internal_9956f685bed4052da9ded31fa529c8a0866f7dde68841b2ddad4ea152eeb754b->leave($__internal_9956f685bed4052da9ded31fa529c8a0866f7dde68841b2ddad4ea152eeb754b_prof);

    }

    // line 135
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87c359760a0bcdec1b1d26b18bf654afa151ad689fb7f04e20e89c57be87f09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c359760a0bcdec1b1d26b18bf654afa151ad689fb7f04e20e89c57be87f09b->enter($__internal_87c359760a0bcdec1b1d26b18bf654afa151ad689fb7f04e20e89c57be87f09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89efbc9fb065d7a5e90941f431c5cb63582aacbd8f1ed1eda01a9630d736b094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89efbc9fb065d7a5e90941f431c5cb63582aacbd8f1ed1eda01a9630d736b094->enter($__internal_89efbc9fb065d7a5e90941f431c5cb63582aacbd8f1ed1eda01a9630d736b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 136
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array())) {
            // line 138
            echo "        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</a>
        </p>";
        } else {
            // line 156
            echo "        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Symfony version</span>
            </div>";
            // line 164
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()))) {
                // line 165
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Application name</span>
                </div>";
            }
            // line 171
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()))) {
                // line 172
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Environment</span>
                </div>";
            }
            // line 178
            if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array()))) {
                // line 179
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 180
                echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", array())) ? ("enabled") : ("disabled"));
                echo "</span>
                    <span class=\"label\">Debug</span>
                </div>";
            }
            // line 184
            echo "        </div>";
            // line 186
            $context["symfony_status"] = array("dev" => "Unstable Version", "stable" => "Stable Version", "eom" => "Maintenance Ended", "eol" => "Version Expired");
            // line 187
            $context["symfony_status_class"] = array("dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error");
            // line 188
            echo "        <table>
            <thead class=\"small\">
                <tr>
                    <th>Symfony Status</th>
                    <th>Bugs";
            // line 192
            echo ((twig_in_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonystate", array()), array(0 => "eom", 1 => "eol"))) ? ("were") : ("are"));
            echo " fixed until</th>
                    <th>Security issues";
            // line 193
            echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonystate", array()) == "eol")) ? ("were") : ("are"));
            echo " fixed until</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"font-normal\">
                        <span class=\"label status-";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute(($context["symfony_status_class"] ?? $this->getContext($context, "symfony_status_class")), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonystate", array()), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["symfony_status"] ?? $this->getContext($context, "symfony_status")), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonystate", array()), array(), "array")), "html", null, true);
            echo "</span>
                    </td>
                    <td class=\"font-normal\">";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyeom", array()), "html", null, true);
            echo "</td>
                    <td class=\"font-normal\">";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyeol", array()), "html", null, true);
            echo "</td>
                    <td class=\"font-normal\">
                        <a href=\"https://symfony.com/roadmap?version=";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyminorversion", array()), "html", null, true);
            echo "#checker\">View roadmap</a>
                    </td>
                </tr>
            </tbody>
        </table>";
        }
        // line 211
        echo "
    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversionextra", array())) {
            echo " <span class=\"unit\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversionextra", array()), "html", null, true);
            echo "</span>";
        }
        echo "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phparchitecture", array()), "html", null, true);
        echo " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpintllocale", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phptimezone", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 238
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "haszendopcache", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 243
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasapcu", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">APCu</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 248
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", array())) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View full PHP configuration</a>
    </p>";
        // line 257
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array())) {
            // line 258
            echo "        <h2>Enabled Bundles <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array())), "html", null, true);
            echo ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 268
                echo "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 269
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                    <td class=\"font-normal\">";
                // line 270
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", array()), $context["name"], array(), "array")));
                echo "</td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 273
            echo "            </tbody>
        </table>";
        }
        
        $__internal_89efbc9fb065d7a5e90941f431c5cb63582aacbd8f1ed1eda01a9630d736b094->leave($__internal_89efbc9fb065d7a5e90941f431c5cb63582aacbd8f1ed1eda01a9630d736b094_prof);

        
        $__internal_87c359760a0bcdec1b1d26b18bf654afa151ad689fb7f04e20e89c57be87f09b->leave($__internal_87c359760a0bcdec1b1d26b18bf654afa151ad689fb7f04e20e89c57be87f09b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 273,  538 => 270,  534 => 269,  531 => 268,  527 => 267,  515 => 258,  513 => 257,  509 => 254,  500 => 248,  492 => 243,  484 => 238,  474 => 231,  466 => 226,  458 => 221,  445 => 216,  438 => 211,  430 => 205,  425 => 203,  421 => 202,  414 => 200,  404 => 193,  400 => 192,  394 => 188,  392 => 187,  390 => 186,  388 => 184,  382 => 180,  379 => 179,  377 => 178,  371 => 173,  368 => 172,  366 => 171,  360 => 166,  357 => 165,  355 => 164,  350 => 160,  344 => 156,  339 => 153,  330 => 147,  322 => 142,  316 => 138,  314 => 136,  305 => 135,  292 => 130,  287 => 129,  278 => 128,  268 => 125,  265 => 122,  253 => 111,  248 => 108,  243 => 107,  238 => 103,  236 => 102,  232 => 99,  230 => 98,  223 => 93,  215 => 88,  211 => 87,  207 => 86,  198 => 80,  194 => 79,  187 => 78,  180 => 73,  173 => 70,  169 => 68,  167 => 67,  162 => 63,  158 => 61,  156 => 60,  151 => 56,  147 => 54,  145 => 53,  142 => 50,  139 => 48,  132 => 46,  130 => 45,  125 => 41,  120 => 38,  116 => 37,  113 => 36,  111 => 35,  109 => 34,  107 => 33,  102 => 29,  97 => 27,  95 => 26,  93 => 25,  90 => 24,  85 => 23,  83 => 22,  81 => 21,  78 => 18,  76 => 17,  73 => 15,  71 => 14,  69 => 13,  67 => 12,  65 => 11,  63 => 10,  61 => 9,  59 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    {% if 'unknown' == collector.symfonyState %}
        {% set block_status = '' %}
        {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
    {% elseif 'eol' == collector.symfonyState %}
        {% set block_status = 'red' %}
        {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
    {% elseif 'eom' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
    {% elseif 'dev' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
    {% else %}
        {% set block_status = '' %}
        {% set symfony_version_status = '' %}
    {% endif %}

    {% set icon %}
        {% if collector.applicationname %}
            <span class=\"sf-toolbar-label\">{{ collector.applicationname }}</span>
            <span class=\"sf-toolbar-value\">{{ collector.applicationversion }}</span>
        {% elseif collector.symfonyState is defined %}
            <span class=\"sf-toolbar-label\">
                {{ include('@WebProfiler/Icon/symfony.svg') }}
            </span>
            <span class=\"sf-toolbar-value\">{{ collector.symfonyversion }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            {% if collector.applicationname %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ collector.applicationname }}</b>
                    <span>{{ collector.applicationversion }}</span>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>

            {% if 'n/a' is not same as(collector.appname) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Kernel name</b>
                    <span>{{ collector.appname }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.env) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>{{ collector.env }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.debug) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                </div>
            {% endif %}
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span{% if collector.phpversionextra %} title=\"{{ collector.phpversion ~ collector.phpversionextra }}\"{% endif %}>
                    {{ collector.phpversion }}
                    &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasapcu ? 'green' : 'red' }}\">APCu</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.haszendopcache ? 'green' : 'red' }}\">OPcache</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            {% if collector.symfonyversion is defined %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        {% if 'Silex' == collector.applicationname %}
                            <a href=\"http://silex.sensiolabs.org/documentation\" rel=\"help\">
                                Read Silex Docs
                            </a>
                        {% else %}
                            <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
                                Read Symfony {{ collector.symfonyversion }} Docs
                            </a>
                        {% endif %}
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"http://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right', block_attrs: 'title=\"' ~ symfony_version_status ~ '\"' }) }}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' : '' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/config.svg') }}</span>
        <strong>Configuration</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.applicationname %}
        {# this application is not the Symfony framework #}
        <h2>Project Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationname }}</span>
                <span class=\"label\">Application name</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.applicationversion }}</span>
                <span class=\"label\">Application version</span>
            </div>
        </div>

        <p>
            Based on <a class=\"text-bold\" href=\"https://symfony.com\">Symfony {{ collector.symfonyversion }}</a>
        </p>
    {% else %}
        <h2>Symfony Configuration</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.symfonyversion }}</span>
                <span class=\"label\">Symfony version</span>
            </div>

            {% if 'n/a' != collector.appname %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.appname }}</span>
                    <span class=\"label\">Application name</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.env %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.env }}</span>
                    <span class=\"label\">Environment</span>
                </div>
            {% endif %}

            {% if 'n/a' != collector.debug %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                    <span class=\"label\">Debug</span>
                </div>
            {% endif %}
        </div>

        {% set symfony_status = { dev: 'Unstable Version', stable: 'Stable Version', eom: 'Maintenance Ended', eol: 'Version Expired' } %}
        {% set symfony_status_class = { dev: 'warning', stable: 'success', eom: 'warning', eol: 'error' } %}
        <table>
            <thead class=\"small\">
                <tr>
                    <th>Symfony Status</th>
                    <th>Bugs {{ collector.symfonystate in ['eom', 'eol'] ? 'were' : 'are' }} fixed until</th>
                    <th>Security issues {{ collector.symfonystate == 'eol' ? 'were' : 'are' }} fixed until</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"font-normal\">
                        <span class=\"label status-{{ symfony_status_class[collector.symfonystate] }}\">{{ symfony_status[collector.symfonystate]|upper }}</span>
                    </td>
                    <td class=\"font-normal\">{{ collector.symfonyeom }}</td>
                    <td class=\"font-normal\">{{ collector.symfonyeol }}</td>
                    <td class=\"font-normal\">
                        <a href=\"https://symfony.com/roadmap?version={{ collector.symfonyminorversion }}#checker\">View roadmap</a>
                    </td>
                </tr>
            </tbody>
        </table>
    {% endif %}

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpversion }}{% if collector.phpversionextra %} <span class=\"unit\">{{ collector.phpversionextra }}</span>{% endif %}</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phparchitecture }} <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpintllocale }}</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phptimezone }}</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">OPcache</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasapcu ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">APCu</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>
            <span class=\"label\">Xdebug</span>
        </div>
    </div>

    <p>
        <a href=\"{{ path('_profiler_phpinfo') }}\">View full PHP configuration</a>
    </p>

    {% if collector.bundles %}
        <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Path</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.bundles|keys|sort %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">{{ name }}</th>
                    <td class=\"font-normal\">{{ profiler_dump(collector.bundles[name]) }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/config.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\config.html.twig");
    }
}
