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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/navbar.htm */
class __TwigTemplate_96c7e40c549d58da755b75af69e15c46228c67b880942857867b020eab0a66be extends \Twig\Template
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
        echo "<div class=\"navbar\">
<div class=\"container\">
<nav class=\"menu grey darken-4\">
    <div class=\"nav-wrapper\">
      <ul id=\"nav-mobile\" class=\"hide-on-med-and-down\">
        <li><a href=\"sass.html\">Города</a></li>
        <li><a href=\"badges.html\">Галерея</a></li>
        <li><a href=\"collapsible.html\">Прочее</a></li>
        <li><a href=\"sass.html\">Маркетинг</a></li>
        <li><a href=\"badges.html\">Партнеры</a></li>
        <li><a href=\"collapsible.html\">Акции</a></li>
      </ul>
      
    </div>
  </nav>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/navbar.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar\">
<div class=\"container\">
<nav class=\"menu grey darken-4\">
    <div class=\"nav-wrapper\">
      <ul id=\"nav-mobile\" class=\"hide-on-med-and-down\">
        <li><a href=\"sass.html\">Города</a></li>
        <li><a href=\"badges.html\">Галерея</a></li>
        <li><a href=\"collapsible.html\">Прочее</a></li>
        <li><a href=\"sass.html\">Маркетинг</a></li>
        <li><a href=\"badges.html\">Партнеры</a></li>
        <li><a href=\"collapsible.html\">Акции</a></li>
      </ul>
      
    </div>
  </nav>
  </div>
</div>", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/navbar.htm", "");
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
