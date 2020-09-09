<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_788b210e5e512fcc413f265e4fb235aeeb3febcb5188dc9168817ce417f4dcbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cfe815ac9d72071d51879860391df32b84111038546a27675442438d8532fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfe815ac9d72071d51879860391df32b84111038546a27675442438d8532fc5->enter($__internal_8cfe815ac9d72071d51879860391df32b84111038546a27675442438d8532fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_297615e0d3bb422fef3e5c92e3dfa009c4b915743744fe0b8d54b36926cd1ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297615e0d3bb422fef3e5c92e3dfa009c4b915743744fe0b8d54b36926cd1ce3->enter($__internal_297615e0d3bb422fef3e5c92e3dfa009c4b915743744fe0b8d54b36926cd1ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cfe815ac9d72071d51879860391df32b84111038546a27675442438d8532fc5->leave($__internal_8cfe815ac9d72071d51879860391df32b84111038546a27675442438d8532fc5_prof);

        
        $__internal_297615e0d3bb422fef3e5c92e3dfa009c4b915743744fe0b8d54b36926cd1ce3->leave($__internal_297615e0d3bb422fef3e5c92e3dfa009c4b915743744fe0b8d54b36926cd1ce3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_209177df73aac7d5d70b770c6f375a48e60952b8f5913d01960d9b4396e37bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209177df73aac7d5d70b770c6f375a48e60952b8f5913d01960d9b4396e37bbf->enter($__internal_209177df73aac7d5d70b770c6f375a48e60952b8f5913d01960d9b4396e37bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73aa74790b89aa4f8246047c610c90f79da18ed0faed32940836fd10bba8137f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aa74790b89aa4f8246047c610c90f79da18ed0faed32940836fd10bba8137f->enter($__internal_73aa74790b89aa4f8246047c610c90f79da18ed0faed32940836fd10bba8137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>";
        
        $__internal_73aa74790b89aa4f8246047c610c90f79da18ed0faed32940836fd10bba8137f->leave($__internal_73aa74790b89aa4f8246047c610c90f79da18ed0faed32940836fd10bba8137f_prof);

        
        $__internal_209177df73aac7d5d70b770c6f375a48e60952b8f5913d01960d9b4396e37bbf->leave($__internal_209177df73aac7d5d70b770c6f375a48e60952b8f5913d01960d9b4396e37bbf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_643b25a09b2d41c10a4c4f5060f0c8d4d59a8a11551e05bb371f0a68845baae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643b25a09b2d41c10a4c4f5060f0c8d4d59a8a11551e05bb371f0a68845baae4->enter($__internal_643b25a09b2d41c10a4c4f5060f0c8d4d59a8a11551e05bb371f0a68845baae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a12dc89d51e704209d47e286adfa0a1884546c3b091759ff85f37c61dabae5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12dc89d51e704209d47e286adfa0a1884546c3b091759ff85f37c61dabae5d5->enter($__internal_a12dc89d51e704209d47e286adfa0a1884546c3b091759ff85f37c61dabae5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")";
        
        $__internal_a12dc89d51e704209d47e286adfa0a1884546c3b091759ff85f37c61dabae5d5->leave($__internal_a12dc89d51e704209d47e286adfa0a1884546c3b091759ff85f37c61dabae5d5_prof);

        
        $__internal_643b25a09b2d41c10a4c4f5060f0c8d4d59a8a11551e05bb371f0a68845baae4->leave($__internal_643b25a09b2d41c10a4c4f5060f0c8d4d59a8a11551e05bb371f0a68845baae4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_276f7d9e9bac8d35c4d365c59c7fce5380a0512b79fc9098daa1e1353e567ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276f7d9e9bac8d35c4d365c59c7fce5380a0512b79fc9098daa1e1353e567ff8->enter($__internal_276f7d9e9bac8d35c4d365c59c7fce5380a0512b79fc9098daa1e1353e567ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3552ded650cf45845fc56fed33fa337231cee0f57e11c0b35fe8a9af2964f5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3552ded650cf45845fc56fed33fa337231cee0f57e11c0b35fe8a9af2964f5fc->enter($__internal_3552ded650cf45845fc56fed33fa337231cee0f57e11c0b35fe8a9af2964f5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3552ded650cf45845fc56fed33fa337231cee0f57e11c0b35fe8a9af2964f5fc->leave($__internal_3552ded650cf45845fc56fed33fa337231cee0f57e11c0b35fe8a9af2964f5fc_prof);

        
        $__internal_276f7d9e9bac8d35c4d365c59c7fce5380a0512b79fc9098daa1e1353e567ff8->leave($__internal_276f7d9e9bac8d35c4d365c59c7fce5380a0512b79fc9098daa1e1353e567ff8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 141,  213 => 140,  199 => 137,  190 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
