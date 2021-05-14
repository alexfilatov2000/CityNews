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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/footer.htm */
class __TwigTemplate_a6672b15f191c660a5eb0abf48c1d523f33d8be6bebdcaf00c28e125a3d10cf8 extends \Twig\Template
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
        echo "<footer class=\"page-footer teal\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">Реклама</h5>
          <p class=\"grey-text text-lighten-4\">Новостной портал города Кривого Рога предлагает площадку к размещению рекламы</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Для бизнеса</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Объявления</a></li>
            <li><a class=\"white-text\" href=\"#!\">Статьи</a></li>
            <li><a class=\"white-text\" href=\"#!\">Партнерская программа</a></li>
            <li><a class=\"white-text\" href=\"#!\">Франшиза</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Поддержка</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Промо</a></li>
            <li><a class=\"white-text\" href=\"#!\">Акции</a></li>
            <li><a class=\"white-text\" href=\"#!\">Партнеры</a></li>
            <li><a class=\"white-text\" href=\"#!\">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
    
      <div class=\"container\">
      © 2021 Copyright
      Made by <a class=\"brown-text text-lighten-3\" href=\"http://materializecss.com\">GRD studio</a>
      </div>
    </div>
  </footer>";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-footer teal\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">Реклама</h5>
          <p class=\"grey-text text-lighten-4\">Новостной портал города Кривого Рога предлагает площадку к размещению рекламы</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Для бизнеса</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Объявления</a></li>
            <li><a class=\"white-text\" href=\"#!\">Статьи</a></li>
            <li><a class=\"white-text\" href=\"#!\">Партнерская программа</a></li>
            <li><a class=\"white-text\" href=\"#!\">Франшиза</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Поддержка</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Промо</a></li>
            <li><a class=\"white-text\" href=\"#!\">Акции</a></li>
            <li><a class=\"white-text\" href=\"#!\">Партнеры</a></li>
            <li><a class=\"white-text\" href=\"#!\">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
    
      <div class=\"container\">
      © 2021 Copyright
      Made by <a class=\"brown-text text-lighten-3\" href=\"http://materializecss.com\">GRD studio</a>
      </div>
    </div>
  </footer>", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/footer.htm", "");
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
