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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/m-sidenav.htm */
class __TwigTemplate_81c26d7467a4cd3ebcf6f0324e5a9f41a5f82fa58fe295757feefbdc3956ea28 extends \Twig\Template
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
        echo "<nav class=\"mobil-menu\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"nav-wrapper\">
     
        <ul class=\"right\">
          <li><a href=\"#\"></a></li>
        </ul>

        <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"index.html\">Home</a></li>
            <li><a href=\"apxlabs.html\">APX Labs</a></li>
          <li><a href=\"cloudon.html\">CloudOn</a></li>
            
            <li><a href=\"replicon.html\">Replicon</a></li>
             <li><a href=\"past_projects.html\">Past Projects</a></li>
            
            
        </ul>
        <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons #4db6ac teal lighten-2\">menu</i></i></a>
<a id=\"logo-container\" href=\"#\" class=\"navigationactionbarcontentscreentitle\">CITY NEWS Кривой Рог</a>   
      </div>
    </div>
  </nav>
  
  <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Coat_of_Arms_of_Kryvyi_Rih.svg/1200px-Coat_of_Arms_of_Kryvyi_Rih.svg.png\" class=\"mobil-emblem\" style=\"width:20%; top:50px; margin-left:40%;\" alt=\"\">";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/m-sidenav.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"mobil-menu\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"nav-wrapper\">
     
        <ul class=\"right\">
          <li><a href=\"#\"></a></li>
        </ul>

        <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"index.html\">Home</a></li>
            <li><a href=\"apxlabs.html\">APX Labs</a></li>
          <li><a href=\"cloudon.html\">CloudOn</a></li>
            
            <li><a href=\"replicon.html\">Replicon</a></li>
             <li><a href=\"past_projects.html\">Past Projects</a></li>
            
            
        </ul>
        <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons #4db6ac teal lighten-2\">menu</i></i></a>
<a id=\"logo-container\" href=\"#\" class=\"navigationactionbarcontentscreentitle\">CITY NEWS Кривой Рог</a>   
      </div>
    </div>
  </nav>
  
  <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Coat_of_Arms_of_Kryvyi_Rih.svg/1200px-Coat_of_Arms_of_Kryvyi_Rih.svg.png\" class=\"mobil-emblem\" style=\"width:20%; top:50px; margin-left:40%;\" alt=\"\">", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/m-sidenav.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
