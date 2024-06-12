<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* news_new.html.twig */
class __TwigTemplate_e9ec80fdda58fb22287d656e513717b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news_new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "news_new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "VinPhone - New";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>New</h1>

    ";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "_news_form.html.twig");
        yield "

    <a class= \"btn btn-outline-primary\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news_index");
        yield "\">Return</a>

    <footer class=\"footer footer d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top position-relative\">
        <div class=\"col-md-4 d-flex align-items-center\">
            <span class=\"text1 mb-3 mb-md-0 text-body-secondary position-relative\">© 2024 VinPhone</span>
        </div>
        <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com"), "html", null, true);
        yield "\"><img class= \"FBLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/fb_logo.png"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.instagram.com"), "html", null, true);
        yield "\"><img class= \"IGLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/ig_logo.png"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.twitter.com"), "html", null, true);
        yield "\"><img class= \"XLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/x_logo.jpg"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.tiktok.com"), "html", null, true);
        yield "\"><img class= \"TTLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/tt_logo.png"), "html", null, true);
        yield "\"></a></li>
        </ul>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "news_new.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  127 => 20,  121 => 19,  115 => 18,  109 => 17,  99 => 10,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}VinPhone - New{% endblock %}

{% block body %}
    <h1>New</h1>

    {{ include('_news_form.html.twig') }}

    <a class= \"btn btn-outline-primary\" href=\"{{ path('app_news_index') }}\">Return</a>

    <footer class=\"footer footer d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top position-relative\">
        <div class=\"col-md-4 d-flex align-items-center\">
            <span class=\"text1 mb-3 mb-md-0 text-body-secondary position-relative\">© 2024 VinPhone</span>
        </div>
        <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a href=\"{{ asset('https://www.facebook.com') }}\"><img class= \"FBLogo position-relative\" src=\"{{ asset('/pictures/fb_logo.png') }}\"></a></li>
            <li class=\"ms-3\"><a href=\"{{ asset('https://www.instagram.com') }}\"><img class= \"IGLogo position-relative\" src=\"{{ asset('/pictures/ig_logo.png') }}\"></a></li>
            <li class=\"ms-3\"><a href=\"{{ asset('https://www.twitter.com') }}\"><img class= \"XLogo position-relative\" src=\"{{ asset('/pictures/x_logo.jpg') }}\"></a></li>
            <li class=\"ms-3\"><a href=\"{{ asset('https://www.tiktok.com') }}\"><img class= \"TTLogo position-relative\" src=\"{{ asset('/pictures/tt_logo.png') }}\"></a></li>
        </ul>
    </footer>
{% endblock %}
", "news_new.html.twig", "C:\\Projects\\VinPhone\\templates\\news_new.html.twig");
    }
}
