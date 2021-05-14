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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/slider.htm */
class __TwigTemplate_e8b1b8512d6244a51535797a2701ee58bb766a1be3dfe643eea7c4b67a9549a1 extends \Twig\Template
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
        echo "<div class=\"slider\" style=\"position:relative;\">
<img src=\"https://st.weblancer.net/download/1308956.jpg\" style=\"width:100%;height:100%;\" alt=\"\">
<div class=\"emblem\" style=\"position:absolute;bottom:8em;\">
<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Coat_of_Arms_of_Kryvyi_Rih.svg/1200px-Coat_of_Arms_of_Kryvyi_Rih.svg.png\" style=\"width:10%;margin-left:50px;\" alt=\"\">
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/slider.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"slider\" style=\"position:relative;\">
<img src=\"https://st.weblancer.net/download/1308956.jpg\" style=\"width:100%;height:100%;\" alt=\"\">
<div class=\"emblem\" style=\"position:absolute;bottom:8em;\">
<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Coat_of_Arms_of_Kryvyi_Rih.svg/1200px-Coat_of_Arms_of_Kryvyi_Rih.svg.png\" style=\"width:10%;margin-left:50px;\" alt=\"\">
</div>
</div>", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/slider.htm", "");
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
