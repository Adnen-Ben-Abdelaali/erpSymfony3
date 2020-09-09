<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f2048d29e25e32f8001fe1b2bd3870e4c25c335840225e9a6de2ccda5434cc4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ab0db6bce3f159b14fde58a95fd21057d4bf000a85816425f390a856ac24857a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0db6bce3f159b14fde58a95fd21057d4bf000a85816425f390a856ac24857a->enter($__internal_ab0db6bce3f159b14fde58a95fd21057d4bf000a85816425f390a856ac24857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_99526177b69ec431287ef746aa9e02898a2761d5fc7d9744702f6a662d919680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99526177b69ec431287ef746aa9e02898a2761d5fc7d9744702f6a662d919680->enter($__internal_99526177b69ec431287ef746aa9e02898a2761d5fc7d9744702f6a662d919680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab0db6bce3f159b14fde58a95fd21057d4bf000a85816425f390a856ac24857a->leave($__internal_ab0db6bce3f159b14fde58a95fd21057d4bf000a85816425f390a856ac24857a_prof);

        
        $__internal_99526177b69ec431287ef746aa9e02898a2761d5fc7d9744702f6a662d919680->leave($__internal_99526177b69ec431287ef746aa9e02898a2761d5fc7d9744702f6a662d919680_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_474b36842a3633755bb72a7d9f30db4aee0801cea5f1985f904cb41914935f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474b36842a3633755bb72a7d9f30db4aee0801cea5f1985f904cb41914935f22->enter($__internal_474b36842a3633755bb72a7d9f30db4aee0801cea5f1985f904cb41914935f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc5f3aa76e24e23aa93e45246751c1c09e14afda65673efb1a73ff89c90cbf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5f3aa76e24e23aa93e45246751c1c09e14afda65673efb1a73ff89c90cbf4d->enter($__internal_bc5f3aa76e24e23aa93e45246751c1c09e14afda65673efb1a73ff89c90cbf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>";
        }
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_bc5f3aa76e24e23aa93e45246751c1c09e14afda65673efb1a73ff89c90cbf4d->leave($__internal_bc5f3aa76e24e23aa93e45246751c1c09e14afda65673efb1a73ff89c90cbf4d_prof);

        
        $__internal_474b36842a3633755bb72a7d9f30db4aee0801cea5f1985f904cb41914935f22->leave($__internal_474b36842a3633755bb72a7d9f30db4aee0801cea5f1985f904cb41914935f22_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f8b42104e3ca975d5dc2e9a0c407b3fc40bf52925e3dd851078328a4b26b46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8b42104e3ca975d5dc2e9a0c407b3fc40bf52925e3dd851078328a4b26b46b->enter($__internal_7f8b42104e3ca975d5dc2e9a0c407b3fc40bf52925e3dd851078328a4b26b46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d6f6b50cc543b2b232a77dcb3e7eec733d0d20a3ae0227a17ac64212c3ebb77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f6b50cc543b2b232a77dcb3e7eec733d0d20a3ae0227a17ac64212c3ebb77a->enter($__internal_d6f6b50cc543b2b232a77dcb3e7eec733d0d20a3ae0227a17ac64212c3ebb77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>";
        }
        // line 21
        echo "    </span>";
        
        $__internal_d6f6b50cc543b2b232a77dcb3e7eec733d0d20a3ae0227a17ac64212c3ebb77a->leave($__internal_d6f6b50cc543b2b232a77dcb3e7eec733d0d20a3ae0227a17ac64212c3ebb77a_prof);

        
        $__internal_7f8b42104e3ca975d5dc2e9a0c407b3fc40bf52925e3dd851078328a4b26b46b->leave($__internal_7f8b42104e3ca975d5dc2e9a0c407b3fc40bf52925e3dd851078328a4b26b46b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0371db3e8e79f014260ac690f8a1e45959437870c5da042783ea9347c3ca7753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0371db3e8e79f014260ac690f8a1e45959437870c5da042783ea9347c3ca7753->enter($__internal_0371db3e8e79f014260ac690f8a1e45959437870c5da042783ea9347c3ca7753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e10d2609723e8a65f075c3926bf8824f978d4355af6a71b8bcc29d02f941fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e10d2609723e8a65f075c3926bf8824f978d4355af6a71b8bcc29d02f941fac->enter($__internal_5e10d2609723e8a65f075c3926bf8824f978d4355af6a71b8bcc29d02f941fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>";
        }
        
        $__internal_5e10d2609723e8a65f075c3926bf8824f978d4355af6a71b8bcc29d02f941fac->leave($__internal_5e10d2609723e8a65f075c3926bf8824f978d4355af6a71b8bcc29d02f941fac_prof);

        
        $__internal_0371db3e8e79f014260ac690f8a1e45959437870c5da042783ea9347c3ca7753->leave($__internal_0371db3e8e79f014260ac690f8a1e45959437870c5da042783ea9347c3ca7753_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  123 => 32,  118 => 28,  116 => 27,  114 => 25,  105 => 24,  95 => 21,  90 => 17,  88 => 16,  84 => 14,  79 => 13,  70 => 12,  60 => 9,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
