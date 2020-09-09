<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_a72fea9ff101efaa7c7e04c9562f877b89e8ce1fa9740513bb9c73da43e7205a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf218178c15fcb4021285dfd41ce930df93ede3c0f3c74815713060c2e00de7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf218178c15fcb4021285dfd41ce930df93ede3c0f3c74815713060c2e00de7a->enter($__internal_cf218178c15fcb4021285dfd41ce930df93ede3c0f3c74815713060c2e00de7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a136468684eecead755bf122bfd9ea2ca6a8231298862d1b77b70d83d0e89a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a136468684eecead755bf122bfd9ea2ca6a8231298862d1b77b70d83d0e89a59->enter($__internal_a136468684eecead755bf122bfd9ea2ca6a8231298862d1b77b70d83d0e89a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_cf218178c15fcb4021285dfd41ce930df93ede3c0f3c74815713060c2e00de7a->leave($__internal_cf218178c15fcb4021285dfd41ce930df93ede3c0f3c74815713060c2e00de7a_prof);

        
        $__internal_a136468684eecead755bf122bfd9ea2ca6a8231298862d1b77b70d83d0e89a59->leave($__internal_a136468684eecead755bf122bfd9ea2ca6a8231298862d1b77b70d83d0e89a59_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed0b3ddd27c8d07688cd448528651150722067f986bca095a55062abad6e72a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0b3ddd27c8d07688cd448528651150722067f986bca095a55062abad6e72a3->enter($__internal_ed0b3ddd27c8d07688cd448528651150722067f986bca095a55062abad6e72a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a3e021d8a880b0ff64bfbece531a1289ecd1386dc21cbb4052b8c1b689cae4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3e021d8a880b0ff64bfbece531a1289ecd1386dc21cbb4052b8c1b689cae4c->enter($__internal_9a3e021d8a880b0ff64bfbece531a1289ecd1386dc21cbb4052b8c1b689cae4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9a3e021d8a880b0ff64bfbece531a1289ecd1386dc21cbb4052b8c1b689cae4c->leave($__internal_9a3e021d8a880b0ff64bfbece531a1289ecd1386dc21cbb4052b8c1b689cae4c_prof);

        
        $__internal_ed0b3ddd27c8d07688cd448528651150722067f986bca095a55062abad6e72a3->leave($__internal_ed0b3ddd27c8d07688cd448528651150722067f986bca095a55062abad6e72a3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_88c1ef2101248d566e0400e0faf67efce7a67ac8ce8d6e81079671612701a5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c1ef2101248d566e0400e0faf67efce7a67ac8ce8d6e81079671612701a5ad->enter($__internal_88c1ef2101248d566e0400e0faf67efce7a67ac8ce8d6e81079671612701a5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2438e54a9af3166a86eb78ca7a43015abd27c2a5ec76cbda7761bb5a539ddc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2438e54a9af3166a86eb78ca7a43015abd27c2a5ec76cbda7761bb5a539ddc4c->enter($__internal_2438e54a9af3166a86eb78ca7a43015abd27c2a5ec76cbda7761bb5a539ddc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2438e54a9af3166a86eb78ca7a43015abd27c2a5ec76cbda7761bb5a539ddc4c->leave($__internal_2438e54a9af3166a86eb78ca7a43015abd27c2a5ec76cbda7761bb5a539ddc4c_prof);

        
        $__internal_88c1ef2101248d566e0400e0faf67efce7a67ac8ce8d6e81079671612701a5ad->leave($__internal_88c1ef2101248d566e0400e0faf67efce7a67ac8ce8d6e81079671612701a5ad_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9042867fc848c70a9754f13168c9cd20d61c0f25e31063c713d4b33bb6b750fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9042867fc848c70a9754f13168c9cd20d61c0f25e31063c713d4b33bb6b750fa->enter($__internal_9042867fc848c70a9754f13168c9cd20d61c0f25e31063c713d4b33bb6b750fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31d22ddc5a3899c704f8f02e6503269b9537677b8ec2dae34ffda6811004cc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d22ddc5a3899c704f8f02e6503269b9537677b8ec2dae34ffda6811004cc8a->enter($__internal_31d22ddc5a3899c704f8f02e6503269b9537677b8ec2dae34ffda6811004cc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31d22ddc5a3899c704f8f02e6503269b9537677b8ec2dae34ffda6811004cc8a->leave($__internal_31d22ddc5a3899c704f8f02e6503269b9537677b8ec2dae34ffda6811004cc8a_prof);

        
        $__internal_9042867fc848c70a9754f13168c9cd20d61c0f25e31063c713d4b33bb6b750fa->leave($__internal_9042867fc848c70a9754f13168c9cd20d61c0f25e31063c713d4b33bb6b750fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  116 => 10,  99 => 7,  85 => 34,  83 => 33,  75 => 26,  65 => 19,  58 => 15,  52 => 11,  50 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
