<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_673b7cb99de0176861e099dff0720738638cb11cdff947fd570a8fa577915128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_2521cb2dee4bdfd96ed8bdb8ae95f4e9272973720f62b6237cf3cab1c916be65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2521cb2dee4bdfd96ed8bdb8ae95f4e9272973720f62b6237cf3cab1c916be65->enter($__internal_2521cb2dee4bdfd96ed8bdb8ae95f4e9272973720f62b6237cf3cab1c916be65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_01ea044efbc82e4bffc51c853932ecdf20c2a86e0a6d924184932bfe7de59877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ea044efbc82e4bffc51c853932ecdf20c2a86e0a6d924184932bfe7de59877->enter($__internal_01ea044efbc82e4bffc51c853932ecdf20c2a86e0a6d924184932bfe7de59877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2521cb2dee4bdfd96ed8bdb8ae95f4e9272973720f62b6237cf3cab1c916be65->leave($__internal_2521cb2dee4bdfd96ed8bdb8ae95f4e9272973720f62b6237cf3cab1c916be65_prof);

        
        $__internal_01ea044efbc82e4bffc51c853932ecdf20c2a86e0a6d924184932bfe7de59877->leave($__internal_01ea044efbc82e4bffc51c853932ecdf20c2a86e0a6d924184932bfe7de59877_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_932f91f918d2500656c8d678703456a138cfc3fd7b9ace20802a3b6036128eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932f91f918d2500656c8d678703456a138cfc3fd7b9ace20802a3b6036128eb5->enter($__internal_932f91f918d2500656c8d678703456a138cfc3fd7b9ace20802a3b6036128eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_bd403f23d21085671376751304af7a75ebe0dc7e09bfb4ef1297d83601ad76df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd403f23d21085671376751304af7a75ebe0dc7e09bfb4ef1297d83601ad76df->enter($__internal_bd403f23d21085671376751304af7a75ebe0dc7e09bfb4ef1297d83601ad76df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_bd403f23d21085671376751304af7a75ebe0dc7e09bfb4ef1297d83601ad76df->leave($__internal_bd403f23d21085671376751304af7a75ebe0dc7e09bfb4ef1297d83601ad76df_prof);

        
        $__internal_932f91f918d2500656c8d678703456a138cfc3fd7b9ace20802a3b6036128eb5->leave($__internal_932f91f918d2500656c8d678703456a138cfc3fd7b9ace20802a3b6036128eb5_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9b32678944a0c5580b0b6bed6e8e99e49510d572ff9cd521bd5a03e64bb7498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b32678944a0c5580b0b6bed6e8e99e49510d572ff9cd521bd5a03e64bb7498->enter($__internal_b9b32678944a0c5580b0b6bed6e8e99e49510d572ff9cd521bd5a03e64bb7498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0c1796e53fb53fdaa772e22329bf272ec4718d91d17ba664b811f7cf5c48780d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1796e53fb53fdaa772e22329bf272ec4718d91d17ba664b811f7cf5c48780d->enter($__internal_0c1796e53fb53fdaa772e22329bf272ec4718d91d17ba664b811f7cf5c48780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())) {
            // line 7
            $context["is_authenticated"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "authenticated", array()));
            // line 8
            $context["color_code"] = ((($context["is_authenticated"] ?? $this->getContext($context, "is_authenticated"))) ? ("") : ("yellow"));
        } else {
            // line 10
            $context["color_code"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) ? ("red") : (""));
        }
        // line 13
        ob_start();
        // line 14
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        ob_start();
        // line 19
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "impersonated", array())) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "impersonatorUser", array()), "html", null, true);
            echo "</span>
                </div>
            </div>";
        }
        // line 27
        echo "
        <div class=\"sf-toolbar-info-group\">";
        // line 29
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) {
            // line 30
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())) {
                // line 31
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "user", array()), "html", null, true);
                echo "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 38
                echo ((($context["is_authenticated"] ?? $this->getContext($context, "is_authenticated"))) ? ("green") : ("red"));
                echo "\">";
                echo ((($context["is_authenticated"] ?? $this->getContext($context, "is_authenticated"))) ? ("Yes") : ("No"));
                echo "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "tokenClass", array()));
                echo "</span>
                    </div>";
            } else {
                // line 46
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>";
            }
            // line 52
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array())) {
                // line 53
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    </div>";
            }
            // line 59
            if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()) && $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logoutUrl", array()))) {
                // line 60
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a>";
                // line 64
                if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "impersonated", array()) && $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "impersonationExitPath", array()))) {
                    // line 65
                    echo "                                | <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "impersonationExitPath", array()), "html", null, true);
                    echo "\">Exit impersonation</a>";
                }
                // line 67
                echo "                        </span>
                    </div>";
            }
        } else {
            // line 71
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>";
        }
        // line 75
        echo "        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 78
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["color_code"] ?? $this->getContext($context, "color_code"))));
        
        $__internal_0c1796e53fb53fdaa772e22329bf272ec4718d91d17ba664b811f7cf5c48780d->leave($__internal_0c1796e53fb53fdaa772e22329bf272ec4718d91d17ba664b811f7cf5c48780d_prof);

        
        $__internal_b9b32678944a0c5580b0b6bed6e8e99e49510d572ff9cd521bd5a03e64bb7498->leave($__internal_b9b32678944a0c5580b0b6bed6e8e99e49510d572ff9cd521bd5a03e64bb7498_prof);

    }

    // line 81
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4292156e27896c2332f544fba0bf8dac86e1d5fe0d80bba44003aa4fa26e10cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4292156e27896c2332f544fba0bf8dac86e1d5fe0d80bba44003aa4fa26e10cf->enter($__internal_4292156e27896c2332f544fba0bf8dac86e1d5fe0d80bba44003aa4fa26e10cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f03d43e55d9f9701645b787a98f82514dc9a78b3b99d78619dd1b9ce6c8e5da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03d43e55d9f9701645b787a98f82514dc9a78b3b99d78619dd1b9ce6c8e5da4->enter($__internal_f03d43e55d9f9701645b787a98f82514dc9a78b3b99d78619dd1b9ce6c8e5da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 82
        echo "    <span class=\"label";
        echo ((( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array()) ||  !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 83
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>";
        
        $__internal_f03d43e55d9f9701645b787a98f82514dc9a78b3b99d78619dd1b9ce6c8e5da4->leave($__internal_f03d43e55d9f9701645b787a98f82514dc9a78b3b99d78619dd1b9ce6c8e5da4_prof);

        
        $__internal_4292156e27896c2332f544fba0bf8dac86e1d5fe0d80bba44003aa4fa26e10cf->leave($__internal_4292156e27896c2332f544fba0bf8dac86e1d5fe0d80bba44003aa4fa26e10cf_prof);

    }

    // line 88
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e6e2c2f21948659360515ad5f3a74d5efa0ae2c4ed1893d0d1ad07e07d6d741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6e2c2f21948659360515ad5f3a74d5efa0ae2c4ed1893d0d1ad07e07d6d741->enter($__internal_0e6e2c2f21948659360515ad5f3a74d5efa0ae2c4ed1893d0d1ad07e07d6d741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f627588a582e96bf2c58ff2593a424567e86f80d5b44c305bf312fc249e87fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f627588a582e96bf2c58ff2593a424567e86f80d5b44c305bf312fc249e87fe7->enter($__internal_f627588a582e96bf2c58ff2593a424567e86f80d5b44c305bf312fc249e87fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 89
        echo "    <h2>Security Token</h2>";
        // line 91
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) {
            // line 92
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())) {
                // line 93
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 95
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "user", array()) == "anon.")) ? ("Anonymous") : ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "user", array()))), "html", null, true);
                echo "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 100
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>";
                // line 116
                echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "roles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "roles", array()), 1))));
                // line 118
                if (( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "authenticated", array()) && twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "roles", array())))) {
                    // line 119
                    echo "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>";
                }
                // line 121
                echo "                        </td>
                    </tr>";
                // line 124
                if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "supportsRoleHierarchy", array())) {
                    // line 125
                    echo "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 127
                    echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inheritedRoles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inheritedRoles", array()), 1))));
                    echo "</td>
                    </tr>";
                }
                // line 131
                if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())) {
                    // line 132
                    echo "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 134
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array())));
                    echo "</td>
                    </tr>";
                }
                // line 137
                echo "                </tbody>
            </table>";
            } elseif ($this->getAttribute(            // line 139
($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) {
                // line 140
                echo "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>";
            }
            // line 144
            echo "

        <h2>Security Firewall</h2>";
            // line 148
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array())) {
                // line 149
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 155
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "security_enabled", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 159
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "stateless", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 163
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "allows_anonymous", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>";
                // line 168
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "security_enabled", array())) {
                    // line 169
                    echo "                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 181
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "provider", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "provider", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 185
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "context", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "context", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 189
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "entry_point", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "entry_point", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 193
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "user_checker", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "user_checker", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 197
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "access_denied_handler", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "access_denied_handler", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 201
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "access_denied_url", array())) ? ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "access_denied_url", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 205
                    echo ((twig_test_empty($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "listeners", array()))) ? ("(none)") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "firewall", array()), "listeners", array()), 1))));
                    echo "</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>";
                    // line 212
                    if (twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "listeners", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "listeners", array()), array())) : (array())))) {
                        // line 213
                        echo "                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>";
                    } else {
                        // line 217
                        echo "                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>";
                        // line 226
                        $context["previous_event"] = twig_first($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "listeners", array()));
                        // line 227
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "listeners", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                            // line 228
                            if (($this->getAttribute($context["loop"], "first", array()) || ($context["listener"] != ($context["previous_event"] ?? $this->getContext($context, "previous_event"))))) {
                                // line 229
                                if ( !$this->getAttribute($context["loop"], "first", array())) {
                                    // line 230
                                    echo "                                    </tbody>";
                                }
                                // line 232
                                echo "
                                <tbody>";
                                // line 234
                                $context["previous_event"] = $context["listener"];
                            }
                            // line 236
                            echo "
                            <tr>
                                <td class=\"font-normal\">";
                            // line 238
                            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "stub", array())));
                            echo "</td>
                                <td class=\"no-wrap\">";
                            // line 239
                            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["listener"], "time", array()) * 1000)), "html", null, true);
                            echo " ms</td>
                                <td class=\"font-normal\">";
                            // line 240
                            echo (($this->getAttribute($context["listener"], "response", array())) ? (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "response", array())))) : ("(none)"));
                            echo "</td>
                            </tr>";
                            // line 243
                            if ($this->getAttribute($context["loop"], "last", array())) {
                                // line 244
                                echo "                                </tbody>";
                            }
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 247
                        echo "                    </table>";
                    }
                }
            } elseif ($this->getAttribute(            // line 250
($context["collector"] ?? $this->getContext($context, "collector")), "enabled", array())) {
                // line 251
                echo "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>";
            }
        } else {
            // line 256
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>";
        }
        // line 261
        if ( !twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "voters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "voters", array()), array())) : (array())))) {
            // line 262
            echo "        <h2>Security Voters <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "voters", array())), "html", null, true);
            echo ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 266
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "voterStrategy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "voterStrategy", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "voters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 281
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 282
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 283
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["voter"]));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            echo "            </tbody>
        </table>";
        }
        // line 290
        if ( !twig_test_empty((($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "accessDecisionLog", array()), array())) : (array())))) {
            // line 291
            echo "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "accessDecisionLog", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 310
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 311
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 313
                echo (($this->getAttribute($context["decision"], "result", array())) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 316
                echo "
                        </td>
                        <td>";
                // line 319
                if ((twig_length_filter($this->env, $this->getAttribute($context["decision"], "attributes", array())) == 1)) {
                    // line 320
                    echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($context["decision"], "attributes", array())), "html", null, true);
                } else {
                    // line 322
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "attributes", array())));
                }
                // line 324
                echo "                        </td>
                        <td>";
                // line 325
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["decision"], "seek", array(0 => "object"), "method")));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            echo "            </tbody>
        </table>";
        }
        
        $__internal_f627588a582e96bf2c58ff2593a424567e86f80d5b44c305bf312fc249e87fe7->leave($__internal_f627588a582e96bf2c58ff2593a424567e86f80d5b44c305bf312fc249e87fe7_prof);

        
        $__internal_0e6e2c2f21948659360515ad5f3a74d5efa0ae2c4ed1893d0d1ad07e07d6d741->leave($__internal_0e6e2c2f21948659360515ad5f3a74d5efa0ae2c4ed1893d0d1ad07e07d6d741_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  659 => 328,  643 => 325,  640 => 324,  637 => 322,  634 => 320,  632 => 319,  628 => 316,  626 => 313,  622 => 311,  619 => 310,  602 => 309,  583 => 291,  581 => 290,  577 => 286,  561 => 283,  557 => 282,  554 => 281,  537 => 280,  521 => 266,  513 => 262,  511 => 261,  506 => 256,  500 => 251,  498 => 250,  494 => 247,  479 => 244,  477 => 243,  473 => 240,  469 => 239,  465 => 238,  461 => 236,  458 => 234,  455 => 232,  452 => 230,  450 => 229,  448 => 228,  431 => 227,  429 => 226,  420 => 217,  415 => 213,  413 => 212,  405 => 205,  398 => 201,  391 => 197,  384 => 193,  377 => 189,  370 => 185,  363 => 181,  349 => 169,  347 => 168,  341 => 163,  334 => 159,  327 => 155,  320 => 151,  316 => 149,  314 => 148,  310 => 144,  305 => 140,  303 => 139,  300 => 137,  295 => 134,  291 => 132,  289 => 131,  284 => 127,  280 => 125,  278 => 124,  275 => 121,  272 => 119,  270 => 118,  268 => 116,  250 => 100,  242 => 95,  238 => 93,  236 => 92,  234 => 91,  232 => 89,  223 => 88,  210 => 83,  205 => 82,  196 => 81,  186 => 78,  183 => 75,  178 => 71,  173 => 67,  168 => 65,  166 => 64,  163 => 63,  158 => 60,  156 => 59,  151 => 55,  147 => 53,  145 => 52,  139 => 46,  134 => 43,  124 => 38,  116 => 33,  112 => 31,  110 => 30,  108 => 29,  105 => 27,  99 => 23,  94 => 20,  92 => 19,  90 => 18,  86 => 15,  82 => 14,  80 => 13,  77 => 10,  74 => 8,  72 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.token %}
        {% set is_authenticated = collector.enabled and collector.authenticated  %}
        {% set color_code = is_authenticated ? '' : 'yellow' %}
    {% else %}
        {% set color_code = collector.enabled ? 'red' : '' %}
    {% endif %}

    {% set icon %}
        {{ include('@Security/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
    {% endset %}

    {% set text %}
        {% if collector.impersonated %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>{{ collector.impersonatorUser }}</span>
                </div>
            </div>
        {% endif %}

        <div class=\"sf-toolbar-info-group\">
            {% if collector.enabled %}
                {% if collector.token %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>{{ collector.user }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}\">{{ is_authenticated ? 'Yes' : 'No' }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>{{ collector.tokenClass|abbr_class }}</span>
                    </div>
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>
                {% endif %}

                {% if collector.firewall %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>{{ collector.firewall.name }}</span>
                    </div>
                {% endif %}

                {% if collector.token and collector.logoutUrl %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"{{ collector.logoutUrl }}\">Logout</a>
                            {% if collector.impersonated and collector.impersonationExitPath %}
                                | <a href=\"{{ collector.impersonationExitPath }}\">Exit impersonation</a>
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.enabled or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security Token</h2>

    {% if collector.enabled %}
        {% if collector.token %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                            {% if not collector.authenticated and collector.roles is empty %}
                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            {% endif %}
                        </td>
                    </tr>

                    {% if collector.supportsRoleHierarchy %}
                    <tr>
                        <th>Inherited Roles</th>
                        <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                    </tr>
                    {% endif %}

                    {% if collector.token %}
                    <tr>
                        <th>Token</th>
                        <td>{{ profiler_dump(collector.token) }}</td>
                    </tr>
                    {% endif %}
                </tbody>
            </table>
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        {% endif %}


        <h2>Security Firewall</h2>

        {% if collector.firewall %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.firewall.name }}</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.allows_anonymous ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            {% if collector.firewall.security_enabled %}
                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>{{ collector.firewall.context ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>{{ collector.firewall.listeners is empty ? '(none)' : profiler_dump(collector.firewall.listeners, maxDepth=1) }}</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                {% if collector.listeners|default([]) is empty %}
                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                {% else %}
                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        {% set previous_event = (collector.listeners|first) %}
                        {% for listener in collector.listeners %}
                            {% if loop.first or listener != previous_event %}
                                {% if not loop.first %}
                                    </tbody>
                                {% endif %}

                                <tbody>
                                {% set previous_event = listener %}
                            {% endif %}

                            <tr>
                                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
                                <td class=\"no-wrap\">{{ '%0.2f'|format(listener.time * 1000) }} ms</td>
                                <td class=\"font-normal\">{{ listener.response ? profiler_dump(listener.response) : '(none)' }}</td>
                            </tr>

                            {% if loop.last %}
                                </tbody>
                            {% endif %}
                        {% endfor %}
                    </table>
                {% endif %}
            {% endif %}
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        {% endif %}
    {% else %}
        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    {% endif %}

    {% if collector.voters|default([]) is not empty %}
        <h2>Security Voters <small>({{ collector.voters|length }})</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                {% for voter in collector.voters %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if collector.accessDecisionLog|default([]) is not empty %}
        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                {% for decision in collector.accessDecisionLog %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">
                            {{ decision.result
                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                : '<span class=\"label status-error same-width\">DENIED</span>'
                            }}
                        </td>
                        <td>
                            {% if decision.attributes|length == 1 %}
                                {{ decision.attributes|first }}
                            {% else %}
                                {{ profiler_dump(decision.attributes) }}
                            {% endif %}
                        </td>
                        <td>{{ profiler_dump(decision.seek('object')) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Resources\\views\\Collector\\security.html.twig");
    }
}
