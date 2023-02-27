<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.twig */
class __TwigTemplate_3ea8c24386b7e12f887d80dd87c8467e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />

    <title>
      Dashboard Template for Bootstrap
    </title>

    <link rel=\"canonical\"
      href=\"https://getbootstrap.com/docs/4.0/examples/dashboard/\" />

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\"
      href=\"https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css\" />

    <!-- Custom styles for this template -->
    ";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 86
        echo "  </head>

  <body>
    <nav class=\"navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0\">
      <a class=\"navbar-brand col-sm-3 col-md-2 mr-0\" href=\"#\">Company name</a>
      <ul class=\"navbar-nav px-3\">
        <li class=\"nav-item text-nowrap\">
          <a class=\"nav-link\" href=\"#\">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-md-2 d-none d-md-block bg-light sidebar\">
          <div class=\"sidebar-sticky\">
            <ul class=\"nav flex-column\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"#\">
                  <span data-feather=\"home\"></span>
                  Dashboard <span class=\"sr-only\">(current)</span>
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                  <span data-feather=\"file\"></span>
                  Orders
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role=\"main\"
          class=\"col-md-9 ml-sm-auto col-lg-10 pt-3 px-4\"></main>
      </div>
    </div>
    <script>
      
    </script>
  </body>
</html>
";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "      ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 84,  108 => 83,  62 => 86,  60 => 83,  38 => 63,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.twig", "/var/www/views/templates/layout.twig");
    }
}
