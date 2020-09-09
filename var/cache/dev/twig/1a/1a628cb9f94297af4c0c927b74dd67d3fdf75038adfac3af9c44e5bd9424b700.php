<?php

/* @erp/Default/personne.html.twig */
class __TwigTemplate_0c2412064e2a5af636ca939cc553c085a41f0acbf409bec38c7ad43c9b92a556 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebe822c90dbf0d933b345a44487993bbc4fe54d7066441294bb49075016404c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe822c90dbf0d933b345a44487993bbc4fe54d7066441294bb49075016404c8->enter($__internal_ebe822c90dbf0d933b345a44487993bbc4fe54d7066441294bb49075016404c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Default/personne.html.twig"));

        $__internal_b393967943293f2a91cc59db38964eed33543af027a82dc1b0089d5547bc21c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b393967943293f2a91cc59db38964eed33543af027a82dc1b0089d5547bc21c5->enter($__internal_b393967943293f2a91cc59db38964eed33543af027a82dc1b0089d5547bc21c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Default/personne.html.twig"));

        // line 1
        echo "
Interface client 
<h2>Le nom du client est &nbsp;";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</h2>";
        
        $__internal_ebe822c90dbf0d933b345a44487993bbc4fe54d7066441294bb49075016404c8->leave($__internal_ebe822c90dbf0d933b345a44487993bbc4fe54d7066441294bb49075016404c8_prof);

        
        $__internal_b393967943293f2a91cc59db38964eed33543af027a82dc1b0089d5547bc21c5->leave($__internal_b393967943293f2a91cc59db38964eed33543af027a82dc1b0089d5547bc21c5_prof);

    }

    public function getTemplateName()
    {
        return "@erp/Default/personne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
Interface client 
<h2>Le nom du client est &nbsp;{{ name}}</h2>", "@erp/Default/personne.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\src\\erpBundle\\Resources\\views\\Default\\personne.html.twig");
    }
}
