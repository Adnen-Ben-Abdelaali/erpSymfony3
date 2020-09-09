<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2feac64b1350155ae1d793f64fa506e1c90a04f498598399af24188d04ffce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f6e8072a223d30b1bd006f6241bbcde4e2312d2075b2e85dc652797abaf54691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e8072a223d30b1bd006f6241bbcde4e2312d2075b2e85dc652797abaf54691->enter($__internal_f6e8072a223d30b1bd006f6241bbcde4e2312d2075b2e85dc652797abaf54691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0f7e9460cec92348d15b3e7f5f066a2e411edcb4e9d7823de07d741cd38ebf5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7e9460cec92348d15b3e7f5f066a2e411edcb4e9d7823de07d741cd38ebf5c->enter($__internal_0f7e9460cec92348d15b3e7f5f066a2e411edcb4e9d7823de07d741cd38ebf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6e8072a223d30b1bd006f6241bbcde4e2312d2075b2e85dc652797abaf54691->leave($__internal_f6e8072a223d30b1bd006f6241bbcde4e2312d2075b2e85dc652797abaf54691_prof);

        
        $__internal_0f7e9460cec92348d15b3e7f5f066a2e411edcb4e9d7823de07d741cd38ebf5c->leave($__internal_0f7e9460cec92348d15b3e7f5f066a2e411edcb4e9d7823de07d741cd38ebf5c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e71f70e098261a99709e2394936a3e197bdc76fb41acb45dd5230612cc5002e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71f70e098261a99709e2394936a3e197bdc76fb41acb45dd5230612cc5002e4->enter($__internal_e71f70e098261a99709e2394936a3e197bdc76fb41acb45dd5230612cc5002e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22f91ce99ad069bac033a9be8e419da13cc3004c09f4ff9c8a8e58827422397e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f91ce99ad069bac033a9be8e419da13cc3004c09f4ff9c8a8e58827422397e->enter($__internal_22f91ce99ad069bac033a9be8e419da13cc3004c09f4ff9c8a8e58827422397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22f91ce99ad069bac033a9be8e419da13cc3004c09f4ff9c8a8e58827422397e->leave($__internal_22f91ce99ad069bac033a9be8e419da13cc3004c09f4ff9c8a8e58827422397e_prof);

        
        $__internal_e71f70e098261a99709e2394936a3e197bdc76fb41acb45dd5230612cc5002e4->leave($__internal_e71f70e098261a99709e2394936a3e197bdc76fb41acb45dd5230612cc5002e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45800fd2f2f32d4f3a1edc1881b460cde14942f5139e90fb64a8e438669ce554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45800fd2f2f32d4f3a1edc1881b460cde14942f5139e90fb64a8e438669ce554->enter($__internal_45800fd2f2f32d4f3a1edc1881b460cde14942f5139e90fb64a8e438669ce554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_67b167089fd74ab6f3cdb14ff730ede1818fd6fccca29ed2c9e1c60e17e68785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b167089fd74ab6f3cdb14ff730ede1818fd6fccca29ed2c9e1c60e17e68785->enter($__internal_67b167089fd74ab6f3cdb14ff730ede1818fd6fccca29ed2c9e1c60e17e68785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>";
        
        $__internal_67b167089fd74ab6f3cdb14ff730ede1818fd6fccca29ed2c9e1c60e17e68785->leave($__internal_67b167089fd74ab6f3cdb14ff730ede1818fd6fccca29ed2c9e1c60e17e68785_prof);

        
        $__internal_45800fd2f2f32d4f3a1edc1881b460cde14942f5139e90fb64a8e438669ce554->leave($__internal_45800fd2f2f32d4f3a1edc1881b460cde14942f5139e90fb64a8e438669ce554_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd798e08559d8ff03b6aff38f21f04af928ecf81c85f6e229c4b7d1548646be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd798e08559d8ff03b6aff38f21f04af928ecf81c85f6e229c4b7d1548646be7->enter($__internal_bd798e08559d8ff03b6aff38f21f04af928ecf81c85f6e229c4b7d1548646be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e7611f628ca1e0ef08563cbce908278ab8878c6a4f3c6b7724182f454719f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7611f628ca1e0ef08563cbce908278ab8878c6a4f3c6b7724182f454719f8d->enter($__internal_2e7611f628ca1e0ef08563cbce908278ab8878c6a4f3c6b7724182f454719f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        
        $__internal_2e7611f628ca1e0ef08563cbce908278ab8878c6a4f3c6b7724182f454719f8d->leave($__internal_2e7611f628ca1e0ef08563cbce908278ab8878c6a4f3c6b7724182f454719f8d_prof);

        
        $__internal_bd798e08559d8ff03b6aff38f21f04af928ecf81c85f6e229c4b7d1548646be7->leave($__internal_bd798e08559d8ff03b6aff38f21f04af928ecf81c85f6e229c4b7d1548646be7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
