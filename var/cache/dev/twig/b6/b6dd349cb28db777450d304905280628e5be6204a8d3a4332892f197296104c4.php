<?php

/* @erp/Client/setClient.html.twig */
class __TwigTemplate_caab95f8ddaa4513031e07e2fb2c7383f6d634926393955d07613b1fcd5575ea extends Twig_Template
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
        $__internal_89d9941801b8f9f030f43b3cb302c73b9fec8df7952847ea748ecf7284d298af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d9941801b8f9f030f43b3cb302c73b9fec8df7952847ea748ecf7284d298af->enter($__internal_89d9941801b8f9f030f43b3cb302c73b9fec8df7952847ea748ecf7284d298af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Client/setClient.html.twig"));

        $__internal_885a209fe24cbb36f2d73bd14aefbb148db567d0ac4d5ecbe9fd13117c891287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885a209fe24cbb36f2d73bd14aefbb148db567d0ac4d5ecbe9fd13117c891287->enter($__internal_885a209fe24cbb36f2d73bd14aefbb148db567d0ac4d5ecbe9fd13117c891287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Client/setClient.html.twig"));

        // line 1
        echo "
<h1>Ajout client</h1>

<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("erp_somme", array("permierNombre" => 102, "deuxiemeNombre" => 105)), "html", null, true);
        echo "\">somme</a>";
        
        $__internal_89d9941801b8f9f030f43b3cb302c73b9fec8df7952847ea748ecf7284d298af->leave($__internal_89d9941801b8f9f030f43b3cb302c73b9fec8df7952847ea748ecf7284d298af_prof);

        
        $__internal_885a209fe24cbb36f2d73bd14aefbb148db567d0ac4d5ecbe9fd13117c891287->leave($__internal_885a209fe24cbb36f2d73bd14aefbb148db567d0ac4d5ecbe9fd13117c891287_prof);

    }

    public function getTemplateName()
    {
        return "@erp/Client/setClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
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
<h1>Ajout client</h1>

<a href=\"{{path('erp_somme', {permierNombre: 102, deuxiemeNombre: 105})}}\">somme</a>", "@erp/Client/setClient.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\src\\erpBundle\\Resources\\views\\Client\\setClient.html.twig");
    }
}
