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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/account/register.htm */
class __TwigTemplate_8a38e7f3ff76cddd5a7b35f9dc47c9cddeff08a785901c8ef7fdaa8b86a10b8c extends \Twig\Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <h3>Регистрация</h3>

    ";
            // line 4
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister"]);
            echo "

        <div class=\"form-group\">
            <label for=\"registerName\">Имя</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Введите свое имя\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Введите свой email\" />
        </div>

        ";
            // line 26
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 27
                echo "            <div class=\"form-group\">
                <label for=\"registerUsername\">Логин</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Введите свой логин\" />
            </div>
        ";
            }
            // line 37
            echo "
        <div class=\"form-group\">
            <label for=\"registerPassword\">Пароль</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Введите пароль не менее 8 знаков\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Регистрация</button>

    ";
            // line 50
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
";
        } else {
            // line 52
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 52,  99 => 50,  84 => 37,  72 => 27,  70 => 26,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if canRegister %}
    <h3>Регистрация</h3>

    {{ form_ajax('onRegister') }}

        <div class=\"form-group\">
            <label for=\"registerName\">Имя</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Введите свое имя\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Введите свой email\" />
        </div>

        {% if loginAttribute == \"username\" %}
            <div class=\"form-group\">
                <label for=\"registerUsername\">Логин</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Введите свой логин\" />
            </div>
        {% endif %}

        <div class=\"form-group\">
            <label for=\"registerPassword\">Пароль</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Введите пароль не менее 8 знаков\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Регистрация</button>

    {{ form_close() }}
{% else %}
    <!-- Registration is disabled. -->
{% endif %}", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/account/register.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array();
        static $functions = array("form_ajax" => 4, "form_close" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['form_ajax', 'form_close']
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
