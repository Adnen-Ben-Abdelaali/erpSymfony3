<?php

/* @erp/Default/somme.html.twig */
class __TwigTemplate_44ef36ec188214bd780ca602b4563114dea1224d18b29be0e282123af323a56f extends Twig_Template
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
        $__internal_96aa49ab989021d07050dd5f1aa354b1bbc27a857c8980e19a1492178666d799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96aa49ab989021d07050dd5f1aa354b1bbc27a857c8980e19a1492178666d799->enter($__internal_96aa49ab989021d07050dd5f1aa354b1bbc27a857c8980e19a1492178666d799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Default/somme.html.twig"));

        $__internal_82d695091681765c71b85bb1eb0cdb7bb15bc2c9fae32d89d8b625b00cbdfaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d695091681765c71b85bb1eb0cdb7bb15bc2c9fae32d89d8b625b00cbdfaf0->enter($__internal_82d695091681765c71b85bb1eb0cdb7bb15bc2c9fae32d89d8b625b00cbdfaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Default/somme.html.twig"));

        // line 1
        echo "
<h1><Bienvenue à somme </h1>

<h2>la somme de &nbsp;";
        // line 4
        echo twig_escape_filter($this->env, ($context["premierNombre"] ?? $this->getContext($context, "premierNombre")), "html", null, true);
        echo " et &nbsp;";
        echo twig_escape_filter($this->env, ($context["deuxiemeNombre"] ?? $this->getContext($context, "deuxiemeNombre")), "html", null, true);
        echo " est égale à &nbsp;";
        echo twig_escape_filter($this->env, ($context["sommeTotale"] ?? $this->getContext($context, "sommeTotale")), "html", null, true);
        echo "</h2>
";
        
        $__internal_96aa49ab989021d07050dd5f1aa354b1bbc27a857c8980e19a1492178666d799->leave($__internal_96aa49ab989021d07050dd5f1aa354b1bbc27a857c8980e19a1492178666d799_prof);

        
        $__internal_82d695091681765c71b85bb1eb0cdb7bb15bc2c9fae32d89d8b625b00cbdfaf0->leave($__internal_82d695091681765c71b85bb1eb0cdb7bb15bc2c9fae32d89d8b625b00cbdfaf0_prof);

    }

    public function getTemplateName()
    {
        return "@erp/Default/somme.html.twig";
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
<h1><Bienvenue à somme </h1>

<h2>la somme de &nbsp; {{premierNombre}} et &nbsp; {{deuxiemeNombre}} est égale à &nbsp; {{sommeTotale}}</h2>
", "@erp/Default/somme.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\src\\erpBundle\\Resources\\views\\Default\\somme.html.twig");
    }
}
