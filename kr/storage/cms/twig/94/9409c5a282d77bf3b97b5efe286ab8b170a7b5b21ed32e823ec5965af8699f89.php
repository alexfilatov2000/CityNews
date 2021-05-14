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

/* /home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/resetPassword/restore.htm */
class __TwigTemplate_91a766b22ca17897a005d6c3443c246bd35972230436f4d19781a192dfc53f54 extends \Twig\Template
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
        echo "<p class=\"lead\">
    <strong>Забыли пароль?</strong> Введите свой email и пройдите верификацию.
</p>

<form
    data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 6, $this->source), "html", null, true);
        echo "::onRestorePassword\"
    data-request-update=\"'";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 7, $this->source), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"userRestoreEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"Введите свой email\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Восстановить пароль</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/resetPassword/restore.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"lead\">
    <strong>Забыли пароль?</strong> Введите свой email и пройдите верификацию.
</p>

<form
    data-request=\"{{ __SELF__ }}::onRestorePassword\"
    data-request-update=\"'{{ __SELF__ }}::reset': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"userRestoreEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"Введите свой email\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Восстановить пароль</button>
</form>", "/home/dv419234/citynews.com.ua/kr/themes/kr-city-news/partials/resetPassword/restore.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
