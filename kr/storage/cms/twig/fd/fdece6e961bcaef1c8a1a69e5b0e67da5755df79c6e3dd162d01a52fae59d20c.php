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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/middlesection.htm */
class __TwigTemplate_bef8a100012d2ac3ed9cfbdced7d674099618f287eb91acbe63234a0f38f8c5a extends \Twig\Template
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
        echo "<div class=\"section\">

<div class=\"row\">


    <div class=\"col s12 m2\">
    <h5>";
        // line 7
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "События"), "html", null, true);
        echo "</h5>
        ";
        // line 8
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts5"] ?? null), "posts", [], "any", false, false, true, 8);
        echo " 
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "        <div class=\"card-image\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 11), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 12
                echo "          <img src='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "' style='width:100%' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "' />
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "   
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </div>
    

   <div class=\"col s12 m8\">
       <h5>";
        // line 20
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "Политика"), "html", null, true);
        echo "</h5>
       <div class=\"row\">
        ";
        // line 22
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts6"] ?? null), "posts", [], "any", false, false, true, 22);
        echo " 
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
        
    <div class=\"col s12 m3\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 28), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 29
                echo "          <img src='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "' style='width:100%' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "' />
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</p>
         <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\"><span class=\"grey-text\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</span></a>
        </div> 
        </div> 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div> 
    <a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">thumb_down</i>смотреть все новости рубрики</a>
      
      <h5>";
        // line 49
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "В городе"), "html", null, true);
        echo "</h5>
       <div class=\"row\">
        ";
        // line 51
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts6"] ?? null), "posts", [], "any", false, false, true, 51);
        echo " 
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
        
    <div class=\"col s12 m3\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 57), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 58
                echo "          <img src='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "' style='width:100%' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "' />
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "</p>
         <p>";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "\"><span class=\"grey-text\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "</span></a>
        </div> 
        </div> 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    </div> 
    <a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">business</i>смотреть все новости рубрики</a>
      
      <h5>";
        // line 78
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "Спорт"), "html", null, true);
        echo "</h5>
       <div class=\"row\">
        ";
        // line 80
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts6"] ?? null), "posts", [], "any", false, false, true, 80);
        echo " 
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
        
    <div class=\"col s12 m3\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 86), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 87
                echo "          <img src='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "' style='width:100%' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "' />
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "</p>
         <p>";
            // line 93
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "\"><span class=\"grey-text\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "</span></a>
        </div> 
        </div> 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </div> 
    <a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">directions_run</i>смотреть все новости рубрики</a>
      
      <h5>";
        // line 107
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "Обо всем"), "html", null, true);
        echo "</h5>
       <div class=\"row\">
        ";
        // line 109
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts6"] ?? null), "posts", [], "any", false, false, true, 109);
        echo " 
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
        
    <div class=\"col s12 m3\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 115), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 116
                echo "          <img src='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "' style='width:100%' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                echo "' />
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "</p>
         <p>";
            // line 122
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "\"><span class=\"grey-text\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "</span></a>
        </div> 
        </div> 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    </div> 
    <a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">cast_connected</i>смотреть все новости рубрики</a> 
      
    </div>
    
<div class=\"col s12 m2\">
      <h5>";
        // line 139
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "Справочники"), "html", null, true);
        echo "</h5>  
       ";
        // line 140
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts7"] ?? null), "posts", [], "any", false, false, true, 140);
        echo " 
        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 142
            echo "    
      <ul class=\"card\">        
          <li class=\"news\"><a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo "<span class=\"grey-text\"> (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 144), 144, $this->source), "html", null, true);
            echo ")</span></a></li>    
        </ul>          
      <div class=\"mobil-card\">     
          <a class=\"card-title\" href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "\"><span class=\"grey-text\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 147), 147, $this->source), "html", null, true);
            echo "</span></a>
        </div>     
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "          
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/middlesection.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 149,  424 => 147,  414 => 144,  410 => 142,  406 => 141,  402 => 140,  398 => 139,  390 => 133,  378 => 129,  371 => 125,  365 => 122,  359 => 121,  353 => 117,  342 => 116,  338 => 115,  328 => 110,  324 => 109,  319 => 107,  314 => 104,  302 => 100,  295 => 96,  289 => 93,  283 => 92,  277 => 88,  266 => 87,  262 => 86,  252 => 81,  248 => 80,  243 => 78,  238 => 75,  226 => 71,  219 => 67,  213 => 64,  207 => 63,  201 => 59,  190 => 58,  186 => 57,  176 => 52,  172 => 51,  167 => 49,  162 => 46,  150 => 42,  143 => 38,  137 => 35,  131 => 34,  125 => 30,  114 => 29,  110 => 28,  100 => 23,  96 => 22,  91 => 20,  85 => 16,  77 => 13,  66 => 12,  62 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section\">

<div class=\"row\">


    <div class=\"col s12 m2\">
    <h5>{{ 'События' |title }}</h5>
        {% set posts = blogPosts5.posts %} 
        {% for post in posts %}
        <div class=\"card-image\">
        {% for image in post.featured_images|slice(0,1) %}
          <img src='{{ image.path }}' style='width:100%' alt='{{ post.title }}' />
          {% endfor %}   
        </div>
         {% endfor %}
    </div>
    

   <div class=\"col s12 m8\">
       <h5>{{ 'Политика' |title }}</h5>
       <div class=\"row\">
        {% set posts = blogPosts6.posts %} 
        {% for post in posts %}  
        
    <div class=\"col s12 m3\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        {% for image in post.featured_images|slice(0,1) %}
          <img src='{{ image.path }}' style='width:100%' alt='{{ post.title }}' />
          {% endfor %}  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"{{ post.url }}\">{{ post.title }}</p>
         <p>{{ post.excerpt }}</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"{{ post.url }}\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"{{ post.url }}\"><span class=\"grey-text\">{{ post.title }}</span></a>
        </div> 
        </div> 
      {% endfor %}
    </div> 
    <a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">thumb_down</i>смотреть все новости рубрики</a>
      
      <h5>{{ 'В городе' |title }}</h5>
       <div class=\"row\">
        {% set posts = blogPosts6.posts %} 
        {% for post in posts %}  
        
    <div class=\"col s12 m3\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        {% for image in post.featured_images|slice(0,1) %}
          <img src='{{ image.path }}' style='width:100%' alt='{{ post.title }}' />
          {% endfor %}  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"{{ post.url }}\">{{ post.title }}</p>
         <p>{{ post.excerpt }}</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"{{ post.url }}\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"{{ post.url }}\"><span class=\"grey-text\">{{ post.title }}</span></a>
        </div> 
        </div> 
      {% endfor %}
    </div> 
    <a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">business</i>смотреть все новости рубрики</a>
      
      <h5>{{ 'Спорт' |title }}</h5>
       <div class=\"row\">
        {% set posts = blogPosts6.posts %} 
        {% for post in posts %}  
        
    <div class=\"col s12 m3\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        {% for image in post.featured_images|slice(0,1) %}
          <img src='{{ image.path }}' style='width:100%' alt='{{ post.title }}' />
          {% endfor %}  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"{{ post.url }}\">{{ post.title }}</p>
         <p>{{ post.excerpt }}</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"{{ post.url }}\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"{{ post.url }}\"><span class=\"grey-text\">{{ post.title }}</span></a>
        </div> 
        </div> 
      {% endfor %}
    </div> 
    <a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">directions_run</i>смотреть все новости рубрики</a>
      
      <h5>{{ 'Обо всем' |title }}</h5>
       <div class=\"row\">
        {% set posts = blogPosts6.posts %} 
        {% for post in posts %}  
        
    <div class=\"col s12 m3\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        {% for image in post.featured_images|slice(0,1) %}
          <img src='{{ image.path }}' style='width:100%' alt='{{ post.title }}' />
          {% endfor %}  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"{{ post.url }}\">{{ post.title }}</p>
         <p>{{ post.excerpt }}</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"{{ post.url }}\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"{{ post.url }}\"><span class=\"grey-text\">{{ post.title }}</span></a>
        </div> 
        </div> 
      {% endfor %}
    </div> 
    <a class=\"waves-effect waves-light btn\"><i class=\"material-icons right\">cast_connected</i>смотреть все новости рубрики</a> 
      
    </div>
    
<div class=\"col s12 m2\">
      <h5>{{ 'Справочники' |title }}</h5>  
       {% set posts = blogPosts7.posts %} 
        {% for post in posts %}
    
      <ul class=\"card\">        
          <li class=\"news\"><a href=\"{{ post.url }}\">{{ post.title }}<span class=\"grey-text\"> ({{ post.excerpt }})</span></a></li>    
        </ul>          
      <div class=\"mobil-card\">     
          <a class=\"card-title\" href=\"{{ post.url }}\"><span class=\"grey-text\">{{ post.title }}</span></a>
        </div>     
      {% endfor %}          
    </div>
  </div>
</div>", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/middlesection.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "for" => 9);
        static $filters = array("escape" => 7, "title" => 7, "slice" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'title', 'slice'],
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
