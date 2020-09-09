<?php

/* @erp/employe/affiche.html.twig */
class __TwigTemplate_ffe72a0ee1d88313e2600a830d2bea15f01753e99e25fb9a12332839168caa72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@erp/blank.html.twig", "@erp/employe/affiche.html.twig", 2);
        $this->blocks = array(
            'mainContaint' => array($this, 'block_mainContaint'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@erp/blank.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2c0f8ae158a44bd091d6ca038620170d7a750dfd503815e945ed0c7a0a9b2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c0f8ae158a44bd091d6ca038620170d7a750dfd503815e945ed0c7a0a9b2b3->enter($__internal_b2c0f8ae158a44bd091d6ca038620170d7a750dfd503815e945ed0c7a0a9b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/employe/affiche.html.twig"));

        $__internal_f584d9e60dc9fe12257c4586fca11f54b3de175f4d3cdd82c6ff5ddc65f6d8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f584d9e60dc9fe12257c4586fca11f54b3de175f4d3cdd82c6ff5ddc65f6d8e3->enter($__internal_f584d9e60dc9fe12257c4586fca11f54b3de175f4d3cdd82c6ff5ddc65f6d8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/employe/affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2c0f8ae158a44bd091d6ca038620170d7a750dfd503815e945ed0c7a0a9b2b3->leave($__internal_b2c0f8ae158a44bd091d6ca038620170d7a750dfd503815e945ed0c7a0a9b2b3_prof);

        
        $__internal_f584d9e60dc9fe12257c4586fca11f54b3de175f4d3cdd82c6ff5ddc65f6d8e3->leave($__internal_f584d9e60dc9fe12257c4586fca11f54b3de175f4d3cdd82c6ff5ddc65f6d8e3_prof);

    }

    // line 4
    public function block_mainContaint($context, array $blocks = array())
    {
        $__internal_a3470918898f7251850b73843a64e8ee92b4c025bbb5fcfef2b53a045fc9a2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3470918898f7251850b73843a64e8ee92b4c025bbb5fcfef2b53a045fc9a2a3->enter($__internal_a3470918898f7251850b73843a64e8ee92b4c025bbb5fcfef2b53a045fc9a2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContaint"));

        $__internal_6f0d97f32cc4d8c9b680eaf1e27d3a0dcbba9499b23f7c7f4406db9021490dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0d97f32cc4d8c9b680eaf1e27d3a0dcbba9499b23f7c7f4406db9021490dc1->enter($__internal_6f0d97f32cc4d8c9b680eaf1e27d3a0dcbba9499b23f7c7f4406db9021490dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContaint"));

        // line 5
        echo " 
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>email</th>
                      <th>Statut</th>
                      <th>Ajouter</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>email</th>
                      <th>Statut</th>
                      <th>Ajouter</th>
                      <th>Supprimer</th>
                    </tr>
                  </tfoot>
                  <tbody>";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["result"] ?? $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["cle"]) {
            // line 39
            echo "   
              
<div class=\"modal fade\" id=\"exampleModal";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">New message</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
 
        <form method=\"post\" action=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Modifier");
            echo "\">
          <div class=\"form-group\">
            <label for=\"nom\" class=\"col-form-label\">Nom:</label>
            <input type=\"hidden\" class=\"form-control\" name=\"id\" value=";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "id", array()), "html", null, true);
            echo ">
            <input type=\"text\" class=\"form-control\" name=\"nom\" value=";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "nom", array()), "html", null, true);
            echo ">
          </div>
          <div class=\"form-group\">
            <label for=\"prenom\" class=\"col-form-label\">Prénom:</label>
            <input type=\"text\" class=\"form-control\" name=\"prenom\" value=";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "prenom", array()), "html", null, true);
            echo ">
          </div>
          <div>
            <label for=\"email\" class=\"col-form-label\">Email</label>
            <input class=\"form-control\" name=\"email\" value=";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "email", array()), "html", null, true);
            echo " />
          </div>
          <div>
            <label for=\"statut\" class=\"col-form-label\">Statut</label>
            <input class=\"form-control\" name=\"statut\" value=";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "statut", array()), "html", null, true);
            echo " />
          </div>
           <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
      </div>
        </form>

      </div>
     
    </div>
  </div>
</div>
                    <tr>
                      <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "id", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "nom", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "prenom", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "email", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["cle"], "statut", array()), "html", null, true);
            echo "</td>
                      <td> <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajout", array("id" => $this->getAttribute($context["cle"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                      <td> <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprime", array("id" => $this->getAttribute($context["cle"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
                    </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>";
        
        $__internal_6f0d97f32cc4d8c9b680eaf1e27d3a0dcbba9499b23f7c7f4406db9021490dc1->leave($__internal_6f0d97f32cc4d8c9b680eaf1e27d3a0dcbba9499b23f7c7f4406db9021490dc1_prof);

        
        $__internal_a3470918898f7251850b73843a64e8ee92b4c025bbb5fcfef2b53a045fc9a2a3->leave($__internal_a3470918898f7251850b73843a64e8ee92b4c025bbb5fcfef2b53a045fc9a2a3_prof);

    }

    public function getTemplateName()
    {
        return "@erp/employe/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 91,  175 => 88,  171 => 87,  167 => 86,  163 => 85,  159 => 84,  155 => 83,  151 => 82,  134 => 68,  127 => 64,  120 => 60,  113 => 56,  109 => 55,  103 => 52,  89 => 41,  85 => 39,  81 => 38,  49 => 5,  40 => 4,  11 => 2,);
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
 {% extends '@erp/blank.html.twig' %}
 
 {% block mainContaint %}
 
          <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
              <h6 class=\"m-0 font-weight-bold text-primary\">DataTables Example</h6>
            </div>
            <div class=\"card-body\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>email</th>
                      <th>Statut</th>
                      <th>Ajouter</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>email</th>
                      <th>Statut</th>
                      <th>Ajouter</th>
                      <th>Supprimer</th>
                    </tr>
                  </tfoot>
                  <tbody>
        

                {% for cle in result %}
   
              
<div class=\"modal fade\" id=\"exampleModal{{cle.id}}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">New message</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
 
        <form method=\"post\" action=\"{{path('Modifier')}}\">
          <div class=\"form-group\">
            <label for=\"nom\" class=\"col-form-label\">Nom:</label>
            <input type=\"hidden\" class=\"form-control\" name=\"id\" value={{ cle.id }}>
            <input type=\"text\" class=\"form-control\" name=\"nom\" value={{ cle.nom }}>
          </div>
          <div class=\"form-group\">
            <label for=\"prenom\" class=\"col-form-label\">Prénom:</label>
            <input type=\"text\" class=\"form-control\" name=\"prenom\" value={{ cle.prenom}}>
          </div>
          <div>
            <label for=\"email\" class=\"col-form-label\">Email</label>
            <input class=\"form-control\" name=\"email\" value={{ cle.email}} />
          </div>
          <div>
            <label for=\"statut\" class=\"col-form-label\">Statut</label>
            <input class=\"form-control\" name=\"statut\" value={{cle.statut}} />
          </div>
           <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
        <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
      </div>
        </form>

      </div>
     
    </div>
  </div>
</div>
                    <tr>
                      <td>{{ cle.id }}</td>
                      <td>{{cle.nom}}</td>
                      <td>{{ cle.prenom}}</td>
                      <td>{{cle.email}}</td>
                      <td>{{cle.statut}}</td>
                      <td> <a href=\"{{path('ajout',{'id':cle.id})}}\">Modifier</a></td>
                      <td> <a href=\"{{ path('supprime', {'id': cle.id}) }}\">Supprimer</a></td>
                    </tr>
                {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












{% endblock %}", "@erp/employe/affiche.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\src\\erpBundle\\Resources\\views\\employe\\affiche.html.twig");
    }
}
