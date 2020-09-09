<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_11ab5b3fe2eaa3a0f4b9fd73e466ab8a17127ac91ef3314e60df4128cf68ccb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3970d1946bbe804049f44f9471e2b13b76ab22cf4d1ef6e48c780170bb8feb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3970d1946bbe804049f44f9471e2b13b76ab22cf4d1ef6e48c780170bb8feb3->enter($__internal_d3970d1946bbe804049f44f9471e2b13b76ab22cf4d1ef6e48c780170bb8feb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_38aff0d6e05841dbef9d53850e3e0f57c4904be4d9dcf514726813f0c8882945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38aff0d6e05841dbef9d53850e3e0f57c4904be4d9dcf514726813f0c8882945->enter($__internal_38aff0d6e05841dbef9d53850e3e0f57c4904be4d9dcf514726813f0c8882945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3970d1946bbe804049f44f9471e2b13b76ab22cf4d1ef6e48c780170bb8feb3->leave($__internal_d3970d1946bbe804049f44f9471e2b13b76ab22cf4d1ef6e48c780170bb8feb3_prof);

        
        $__internal_38aff0d6e05841dbef9d53850e3e0f57c4904be4d9dcf514726813f0c8882945->leave($__internal_38aff0d6e05841dbef9d53850e3e0f57c4904be4d9dcf514726813f0c8882945_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb9a2221c5c2a2e3a03d7505da0ec4921c6a10d0e32ffbfb30c75a4105e3e4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9a2221c5c2a2e3a03d7505da0ec4921c6a10d0e32ffbfb30c75a4105e3e4dd->enter($__internal_bb9a2221c5c2a2e3a03d7505da0ec4921c6a10d0e32ffbfb30c75a4105e3e4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1e697d7dd9adf5e691c39bf3a74f8012e07a76cf20d7b7ea4e91b543a584975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e697d7dd9adf5e691c39bf3a74f8012e07a76cf20d7b7ea4e91b543a584975->enter($__internal_d1e697d7dd9adf5e691c39bf3a74f8012e07a76cf20d7b7ea4e91b543a584975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        
        $__internal_d1e697d7dd9adf5e691c39bf3a74f8012e07a76cf20d7b7ea4e91b543a584975->leave($__internal_d1e697d7dd9adf5e691c39bf3a74f8012e07a76cf20d7b7ea4e91b543a584975_prof);

        
        $__internal_bb9a2221c5c2a2e3a03d7505da0ec4921c6a10d0e32ffbfb30c75a4105e3e4dd->leave($__internal_bb9a2221c5c2a2e3a03d7505da0ec4921c6a10d0e32ffbfb30c75a4105e3e4dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  56 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
