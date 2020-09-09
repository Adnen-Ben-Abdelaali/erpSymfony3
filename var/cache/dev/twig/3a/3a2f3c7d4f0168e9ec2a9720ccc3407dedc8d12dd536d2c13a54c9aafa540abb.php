<?php

/* @erp/Client/login.html.twig */
class __TwigTemplate_84074cf0a928db386c39bee90398cad55ec284a7c5c8ae953f9bb1f5066858df extends Twig_Template
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
        $__internal_b050a32940d288a9203672319aac3738f89d0924fd70506ae56b66d959363be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b050a32940d288a9203672319aac3738f89d0924fd70506ae56b66d959363be1->enter($__internal_b050a32940d288a9203672319aac3738f89d0924fd70506ae56b66d959363be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Client/login.html.twig"));

        $__internal_071ec5b9bd14ab241f9bba62f8f60d4ada3cb3b8a49f6c1dea26d489a57788dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071ec5b9bd14ab241f9bba62f8f60d4ada3cb3b8a49f6c1dea26d489a57788dd->enter($__internal_071ec5b9bd14ab241f9bba62f8f60d4ada3cb3b8a49f6c1dea26d489a57788dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@erp/Client/login.html.twig"));

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
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/erp/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
  <link href=\"";
        // line 19
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
                  <form class=\"user\">
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter Email Address...\">
                    </div>
                    <div class=\"form-group\">
                      <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleInputPassword\" placeholder=\"Password\">
                    </div>
                    <div class=\"form-group\">
                      <div class=\"custom-control custom-checkbox small\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                        <label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>
                      </div>
                    </div>
                    <a href=\"index.html\" class=\"btn btn-primary btn-user btn-block\">
                      Login
                    </a>
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
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"js/sb-admin-2.min.js\"></script>

</body>

</html>
";
        
        $__internal_b050a32940d288a9203672319aac3738f89d0924fd70506ae56b66d959363be1->leave($__internal_b050a32940d288a9203672319aac3738f89d0924fd70506ae56b66d959363be1_prof);

        
        $__internal_071ec5b9bd14ab241f9bba62f8f60d4ada3cb3b8a49f6c1dea26d489a57788dd->leave($__internal_071ec5b9bd14ab241f9bba62f8f60d4ada3cb3b8a49f6c1dea26d489a57788dd_prof);

    }

    public function getTemplateName()
    {
        return "@erp/Client/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  41 => 15,  25 => 1,);
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
                  <form class=\"user\">
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control form-control-user\" id=\"exampleInputEmail\" aria-describedby=\"emailHelp\" placeholder=\"Enter Email Address...\">
                    </div>
                    <div class=\"form-group\">
                      <input type=\"password\" class=\"form-control form-control-user\" id=\"exampleInputPassword\" placeholder=\"Password\">
                    </div>
                    <div class=\"form-group\">
                      <div class=\"custom-control custom-checkbox small\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\">
                        <label class=\"custom-control-label\" for=\"customCheck\">Remember Me</label>
                      </div>
                    </div>
                    <a href=\"index.html\" class=\"btn btn-primary btn-user btn-block\">
                      Login
                    </a>
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
  <script src=\"vendor/jquery/jquery.min.js\"></script>
  <script src=\"vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"vendor/jquery-easing/jquery.easing.min.js\"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"js/sb-admin-2.min.js\"></script>

</body>

</html>
", "@erp/Client/login.html.twig", "C:\\xampp\\htdocs\\erpSymfony3\\src\\erpBundle\\Resources\\views\\Client\\login.html.twig");
    }
}
