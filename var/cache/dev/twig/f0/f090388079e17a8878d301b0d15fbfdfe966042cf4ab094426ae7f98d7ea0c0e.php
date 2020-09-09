<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_6813928da1ebc6bbb717cc9e5a0129723c38d852978d7c1ad4d2ebcacc6bcd82 extends Twig_Template
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
        $__internal_b36d37bad6014ebae3d086c84562cced5447ff862c105bba855e46e1640aa56a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36d37bad6014ebae3d086c84562cced5447ff862c105bba855e46e1640aa56a->enter($__internal_b36d37bad6014ebae3d086c84562cced5447ff862c105bba855e46e1640aa56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_91dc6126ea29aede9cfb15d1e84c9e407dde5b30a4ee6475e62edc98c902f162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dc6126ea29aede9cfb15d1e84c9e407dde5b30a4ee6475e62edc98c902f162->enter($__internal_91dc6126ea29aede9cfb15d1e84c9e407dde5b30a4ee6475e62edc98c902f162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b36d37bad6014ebae3d086c84562cced5447ff862c105bba855e46e1640aa56a->leave($__internal_b36d37bad6014ebae3d086c84562cced5447ff862c105bba855e46e1640aa56a_prof);

        
        $__internal_91dc6126ea29aede9cfb15d1e84c9e407dde5b30a4ee6475e62edc98c902f162->leave($__internal_91dc6126ea29aede9cfb15d1e84c9e407dde5b30a4ee6475e62edc98c902f162_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
