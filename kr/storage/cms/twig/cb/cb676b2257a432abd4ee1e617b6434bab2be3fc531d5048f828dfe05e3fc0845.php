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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/layouts/default.htm */
class __TwigTemplate_f5f2ec334b2a555ad0fde765746263a1f2d25019bd4f0c9b375a158493b01f8a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
  <html class=\"no-js editmode-false\" lang=\"ru\">
<!--<![endif]-->

<!--HEAD-->
<!DOCTYPE html>
<head>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
            <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
        \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>  
            <title>CITY NEWS - The Official Home of CITY NEWS UKRAINE - ";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"The best news site for advertising\"/>
            <link rel=\"canonical\" href=\"https://www.sitynews.com.ua/en.html\"/>\t
           
       
        \t
        \t
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <!--Import Google Icon Font-->
      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
      <!--Import materialize.css-->

     <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/materialize.min.css");
        echo "\"  media=\"screen,projection\"/>
      <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" media=\"screen,projection\"/>

    
      
        \t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\"/>
\t\t\t<link rel=\"icon\" sizes=\"192X192\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cn300X300.png");
        echo "\"/>
\t\t\t<link rel=\"icon\" sizes=\"128X128\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cn128X128.png");
        echo "\"/>
\t\t\t<link rel=\"icon\" sizes=\"32X32\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-32X32.png");
        echo "\"/>
\t\t\t<link rel=\"icon\" sizes=\"16X16\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon-16X16.png");
        echo "\"/>
\t\t\t
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>\t\t
<script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-2.1.1.min.js");
        echo "\"></script>
  <script src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/materialize.js");
        echo "\"></script>
  <script src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/init.js");
        echo "\"></script>



\t\t\t
</head>


<body class=\"#eeeeee grey lighten-3\">

";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("m-sidenav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "

         ";
        // line 51
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 52
        echo "  
         ";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 54
        echo "

         ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "
      <!-- Compiled and minified JavaScript -->
        ";
        // line 59
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 60
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 61
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 61,  161 => 60,  150 => 59,  146 => 57,  142 => 56,  138 => 54,  136 => 53,  133 => 52,  129 => 51,  125 => 49,  121 => 48,  108 => 38,  104 => 37,  100 => 36,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  71 => 25,  67 => 24,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
  <html class=\"no-js editmode-false\" lang=\"ru\">
<!--<![endif]-->

<!--HEAD-->
<!DOCTYPE html>
<head>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
            <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\"/>
        \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>  
            <title>CITY NEWS - The Official Home of CITY NEWS UKRAINE - {{ this.page.title }}</title>
            <meta name=\"description\" content=\"The best news site for advertising\"/>
            <link rel=\"canonical\" href=\"https://www.sitynews.com.ua/en.html\"/>\t
           
       
        \t
        \t
    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <!--Import Google Icon Font-->
      <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
      <!--Import materialize.css-->

     <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ 'assets/css/materialize.min.css'|theme }}\"  media=\"screen,projection\"/>
      <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\" media=\"screen,projection\"/>

    
      
        \t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ 'assets/images/favicon.ico'|theme }}\"/>
\t\t\t<link rel=\"icon\" sizes=\"192X192\" href=\"{{ 'assets/images/cn300X300.png'|theme }}\"/>
\t\t\t<link rel=\"icon\" sizes=\"128X128\" href=\"{{ 'assets/images/cn128X128.png'|theme }}\"/>
\t\t\t<link rel=\"icon\" sizes=\"32X32\" href=\"{{ 'assets/images/favicon-32X32.png'|theme }}\"/>
\t\t\t<link rel=\"icon\" sizes=\"16X16\" href=\"{{ 'assets/images/favicon-16X16.png'|theme }}\"/>
\t\t\t
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>\t\t
<script src=\"{{ 'assets/js/jquery-2.1.1.min.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/materialize.js'|theme }}\"></script>
  <script src=\"{{ 'assets/js/init.js'|theme }}\"></script>



\t\t\t
</head>


<body class=\"#eeeeee grey lighten-3\">

{% partial 'm-sidenav' %}


         {% partial 'header' %}
  
         {% page %}


         {% partial 'footer' %}

      <!-- Compiled and minified JavaScript -->
        {% framework extras %}
        {% scripts %}

</body>
</html>", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 48, "page" => 53, "framework" => 59, "scripts" => 60);
        static $filters = array("escape" => 11, "theme" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
