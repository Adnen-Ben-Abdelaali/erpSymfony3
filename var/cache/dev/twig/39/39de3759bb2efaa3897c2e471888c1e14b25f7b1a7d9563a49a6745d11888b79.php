<?php

/* @erp/Default/index.html.twig */
class __TwigTemplate_a03a2cfe75e4349c573b7aaa60390fdc64f9c5422729f30760a2311ccfdabd0d extends Twig_Template
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
        $__internal_f17a37013cb0e83697193dc81a82adec647dc663c82ad1ad1691f11524807d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17a37013cb0e83697193dc81a82adec647dc663c82ad1ad1691f11524807d11->enter($__internal_f17a37013cb0e83697193dc81a82adec647dc663c82ad1ad1691f11524807d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Default/index.html.twig"));

        $__internal_73132f9b6a3a833861615d3821587237f40d6bed848be5c519b42e1e031c9e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73132f9b6a3a833861615d3821587237f40d6bed848be5c519b42e1e031c9e93->enter($__internal_73132f9b6a3a833861615d3821587237f40d6bed848be5c519b42e1e031c9e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->

  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/erp/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/erp/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

  <div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

      <div class=\"col-xl-10 col-lg-12 col-md-9\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
          <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
              <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
              <div class=\"col-lg-6\">
                <div class=\"p-5\">
                  <div class=\"text-center\">
                    <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                  </div>
                  <form class=\"user\" method=\"POST\" >
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter Email Address...\"
                      name=\"email\">
                    </div>
                    <div class=\"form-group\">
                      <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleInputPassword\" placeholder=\"Password\"
                      name=\"password\">
                    </div>
                    <div class=\"form-group\">
                      <div class=\"custom-control custom-checkbox small\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                        <label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>
                      </div>
                    </div>
                    <input type=\"submit\" value=\"Login\" class=\"btn btn-primary btn-user btn-block\" name=\"login\"/>
                    <hr>
                    <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                      <i class=\"fab fa-google fa-fw\"></i> Login with Google
                    </a>
                    <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                      <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class=\"text-center\">
                    <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                  </div>
                  <div class=\"text-center\">
                    <a class=\"small\" href=\"register.html\">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/erp/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/erp/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/erp/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/erp/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>


</body>

</html>

";
        
        $__internal_f17a37013cb0e83697193dc81a82adec647dc663c82ad1ad1691f11524807d11->leave($__internal_f17a37013cb0e83697193dc81a82adec647dc663c82ad1ad1691f11524807d11_prof);

        
        $__internal_73132f9b6a3a833861615d3821587237f40d6bed848be5c519b42e1e031c9e93->leave($__internal_73132f9b6a3a833861615d3821587237f40d6bed848be5c519b42e1e031c9e93_prof);

    }

    public function getTemplateName()
    {
        return "@erp/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 94,  129 => 91,  123 => 88,  119 => 87,  49 => 20,  42 => 16,  25 => 1,);
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
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->

  <link href=\"{{asset('bundles/erp/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <link href=\"{{asset('bundles/erp/css/sb-admin-2.min.css')}}\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

  <div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

      <div class=\"col-xl-10 col-lg-12 col-md-9\">

        <div class=\"card o-hidden border-0 shadow-lg my-5\">
          <div class=\"card-body p-0\">
            <!-- Nested Row within Card Body -->
            <div class=\"row\">
              <div class=\"col-lg-6 d-none d-lg-block bg-login-image\"></div>
              <div class=\"col-lg-6\">
                <div class=\"p-5\">
                  <div class=\"text-center\">
                    <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                  </div>
                  <form class=\"user\" method=\"POST\" >
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter Email Address...\"
                      name=\"email\">
                    </div>
                    <div class=\"form-group\">
                      <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleInputPassword\" placeholder=\"Password\"
                      name=\"password\">
                    </div>
                    <div class=\"form-group\">
                      <div class=\"custom-control custom-checkbox small\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                        <label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>
                      </div>
                    </div>
                    <input type=\"submit\" value=\"Login\" class=\"btn btn-primary btn-user btn-block\" name=\"login\"/>
                    <hr>
                    <a href=\"index.html\" class=\"btn btn-google btn-user btn-block\">
                      <i class=\"fab fa-google fa-fw\"></i> Login with Google
                    </a>
                    <a href=\"index.html\" class=\"btn btn-facebook btn-user btn-block\">
                      <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class=\"text-center\">
                    <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                  </div>
                  <div class=\"text-center\">
                    <a class=\"small\" href=\"register.html\">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src=\"{{asset('bundles/erp/vendor/jquery/jquery.min.js')}}\"></script>
  <script src=\"{{asset('bundles/erp/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"{{asset('bundles/erp/vendor/jquery-easing/jquery.easing.min.js')}}\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"{{asset('bundles/erp/js/sb-admin-2.min.js')}}\"></script>


</body>

</html>

", "@erp/Default/index.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\src\\erpBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
