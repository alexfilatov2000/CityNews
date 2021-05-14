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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/hightsection.htm */
class __TwigTemplate_2c820f02ca65378fd2c1377564aa82033867376e96f87698f2023980e32026cc extends \Twig\Template
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
        // line 8
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "Галерея"), "html", null, true);
        echo "</h5>
        ";
        // line 9
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts3"] ?? null), "posts", [], "any", false, false, true, 9);
        echo " 
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            echo "        <div class=\"card-image\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 12), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 13
                echo "          <img src='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "' style='width:100%' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "' />
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "   
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
    
    
    <div class=\"col s12 m5\">
    <h5>";
        // line 21
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "Главные новости"), "html", null, true);
        echo "</h5>
    <div class=\"row\">
        ";
        // line 23
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 23);
        echo " 
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
        
    <div class=\"col s12 m6\">
      <div class=\"card hoverable small\">    
        <div class=\"card-image\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 29), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 30
                echo "          <img src='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "' style='width:100%' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                echo "' />
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "  
          <span class=\"card-title\"><i class=\"material-icons\">textsms</i></span>
        </div>       
        <div class=\"card-content\">
        <p href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</p>
         <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</p>
        </div>            
        <div class=\"card-action\">
          <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "\">Читать далее ...</a>
        </div>
      </div>    
      <div class=\"mobil-card\">      
          <a class=\"card-title\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "\"><span class=\"grey-text\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</span></a>
        </div> 
        </div> 
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>
 </div>

   <div class=\"col s12 m3\">
       <h5>";
        // line 51
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "Лента новостей"), "html", null, true);
        echo "</h5>
       ";
        // line 52
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts2"] ?? null), "posts", [], "any", false, false, true, 52);
        echo " 
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
      <ul class=\"card\">          
          <li class=\"news\"><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "<span class=\"grey-text\"> (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo ")</span></a></li>        
        </ul>           
      <div class=\"mobil-card\">       
          <a class=\"card-title\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "\"><span class=\"grey-text\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</span></a>
        </div>            
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            
    </div>
    
    
    
 <div class=\"col s12 m2\">
 <h5>";
        // line 66
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "Блоги"), "html", null, true);
        echo "</h5>  
       ";
        // line 67
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts4"] ?? null), "posts", [], "any", false, false, true, 67);
        echo " 
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 69
            echo "        <div class=\"card-panel grey lighten-5 z-depth-1\">
          <div class=\"row valign-wrapper\">
            <div class=\"col s4\">
            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 72), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 73
                echo "              <img src='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "' alt='";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "' class=\"circle responsive-img\"> <!-- notice the \"circle\" class -->
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo " 
             <p>";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col s8\">
            
              <span class=\"black-text\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo " 
              </span>
            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo " 
      </div>   
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/hightsection.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 84,  255 => 79,  248 => 75,  245 => 74,  234 => 73,  230 => 72,  225 => 69,  221 => 68,  217 => 67,  213 => 66,  205 => 60,  194 => 58,  184 => 55,  177 => 53,  173 => 52,  169 => 51,  163 => 47,  151 => 43,  144 => 39,  138 => 36,  132 => 35,  126 => 31,  115 => 30,  111 => 29,  101 => 24,  97 => 23,  92 => 21,  86 => 17,  78 => 14,  67 => 13,  63 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section\">

<div class=\"row\">


    <div class=\"col s12 m2\">
    
    <h5>{{ 'Галерея' |title }}</h5>
        {% set posts = blogPosts3.posts %} 
        {% for post in posts %}
        <div class=\"card-image\">
        {% for image in post.featured_images|slice(0,1) %}
          <img src='{{ image.path }}' style='width:100%' alt='{{ post.title }}' />
          {% endfor %}   
        </div>
         {% endfor %}
    </div>
    
    
    <div class=\"col s12 m5\">
    <h5>{{ 'Главные новости' |title }}</h5>
    <div class=\"row\">
        {% set posts = blogPosts.posts %} 
        {% for post in posts %}  
        
    <div class=\"col s12 m6\">
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
 </div>

   <div class=\"col s12 m3\">
       <h5>{{ 'Лента новостей' |title }}</h5>
       {% set posts = blogPosts2.posts %} 
        {% for post in posts %}  
      <ul class=\"card\">          
          <li class=\"news\"><a href=\"{{ post.url }}\">{{ post.title }}<span class=\"grey-text\"> ({{ post.excerpt }})</span></a></li>        
        </ul>           
      <div class=\"mobil-card\">       
          <a class=\"card-title\" href=\"{{ post.url }}\"><span class=\"grey-text\">{{ post.title }}</span></a>
        </div>            
      {% endfor %}            
    </div>
    
    
    
 <div class=\"col s12 m2\">
 <h5>{{ 'Блоги' |title }}</h5>  
       {% set posts = blogPosts4.posts %} 
        {% for post in posts %}
        <div class=\"card-panel grey lighten-5 z-depth-1\">
          <div class=\"row valign-wrapper\">
            <div class=\"col s4\">
            {% for image in post.featured_images|slice(0,1) %}
              <img src='{{ image.path }}' alt='{{ post.title }}' class=\"circle responsive-img\"> <!-- notice the \"circle\" class -->
              {% endfor %} 
             <p>{{ post.excerpt }}</p>
            </div>
            <div class=\"col s8\">
            
              <span class=\"black-text\" href=\"{{ post.url }}\">{{ post.title }} 
              </span>
            </div>
          </div>
        </div>
        {% endfor %} 
      </div>   
  </div>
</div>", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/hightsection.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "for" => 10);
        static $filters = array("escape" => 8, "title" => 8, "slice" => 12);
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
