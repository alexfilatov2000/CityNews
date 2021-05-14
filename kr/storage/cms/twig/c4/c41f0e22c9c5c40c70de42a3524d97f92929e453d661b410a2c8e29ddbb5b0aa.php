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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/header.htm */
class __TwigTemplate_f1bfd3c39ba9f72665c165cd3b64ae5a724d25cd1703119cc9eac0685f09ff63 extends \Twig\Template
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
        echo "<nav class=\"menu #4db6ac teal lighten-2\">
  <div class=\"nav-wrapper\">
  <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/city64x64.png");
        echo "\" style=\"margin-left: 50px;\" alt=\"logo citynews\">
    <a href=\"/\" class=\"brand-logo\" style=\"margin-left: 50px\"><span> Кривой Рог</span></a>
                    
                      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">>
                            <li><a href=";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "><i class=\"material-icons\">find_replace</i></a></li>
\t                  
                                    ";
        // line 9
        if (($context["user"] ?? null)) {
            // line 10
            echo "                                    <li><span>Привет, ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo " !</span></li>
                                              <li><a data-request = \"onLogout\" data-request-data = \"redirect:'/good-bye'\"> Выйти </a></li>
                                               <li><a href=";
            // line 12
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("cabinet");
            echo ">Личный кабинет</a></li> 
                                        
                                              <li><a href=";
            // line 14
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("forum");
            echo ">Форум</a></li>   
                                       ";
        } else {
            // line 15
            echo "      
                                      <li><a href=";
            // line 16
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
            echo " title=\"Sign in\" target=\"_blank\">Вход</a></li>\t                                           
                                        ";
        }
        // line 18
        echo "                                    
                                
                                    
                                    <li><a href=\"#\"  title=\"City 3D - Строим Город Вместе\" class=\"d-link\" target=\"_blank\">Проекты</a></li>
                                    <li><a href=\"#\"  title=\"Камеры\" class=\"cam-link\" target=\"_blank\">Он-лайн камеры</a></li>
                                    <li><a href=\"#\"  title=\"Погода\" class=\"whether-link\" target=\"_blank\">Погода</a></li> 
                                    <li><a href=\"#\"  onClick=\"setSpec();return false;\"  title=\"Курсы\" class=\"special-link\">Курсы валют</a></li>
                       </ul>
                                        
   </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  76 => 16,  73 => 15,  68 => 14,  63 => 12,  57 => 10,  55 => 9,  50 => 7,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"menu #4db6ac teal lighten-2\">
  <div class=\"nav-wrapper\">
  <img src=\"{{ 'assets/images/city64x64.png'|theme }}\" style=\"margin-left: 50px;\" alt=\"logo citynews\">
    <a href=\"/\" class=\"brand-logo\" style=\"margin-left: 50px\"><span> Кривой Рог</span></a>
                    
                      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">>
                            <li><a href={{ 'search' |page }}><i class=\"material-icons\">find_replace</i></a></li>
\t                  
                                    {% if user %}
                                    <li><span>Привет, {{ user.name }} !</span></li>
                                              <li><a data-request = \"onLogout\" data-request-data = \"redirect:'/good-bye'\"> Выйти </a></li>
                                               <li><a href={{ 'cabinet' |page }}>Личный кабинет</a></li> 
                                        
                                              <li><a href={{ 'forum' |page }}>Форум</a></li>   
                                       {% else %}      
                                      <li><a href={{ 'account' |page }} title=\"Sign in\" target=\"_blank\">Вход</a></li>\t                                           
                                        {% endif %}
                                    
                                
                                    
                                    <li><a href=\"#\"  title=\"City 3D - Строим Город Вместе\" class=\"d-link\" target=\"_blank\">Проекты</a></li>
                                    <li><a href=\"#\"  title=\"Камеры\" class=\"cam-link\" target=\"_blank\">Он-лайн камеры</a></li>
                                    <li><a href=\"#\"  title=\"Погода\" class=\"whether-link\" target=\"_blank\">Погода</a></li> 
                                    <li><a href=\"#\"  onClick=\"setSpec();return false;\"  title=\"Курсы\" class=\"special-link\">Курсы валют</a></li>
                       </ul>
                                        
   </div>
</nav>", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("theme" => 3, "page" => 7, "escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['theme', 'page', 'escape'],
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
