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

/* home.html.twig */
class __TwigTemplate_b16d8bf5787a66235decb5c5ff4410a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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

        yield "VinPhone - Home";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "    <div class=\"card3 card position-relative\">
        <div class=\"card-body\">
            <h1>Home</h1>
            <p>VinPhone is a website in which I show some phones which I really want to add in my awesome phone collection! <br>
                It's a CRUD app written in HTML, CSS and lastly Symfony, SQL and also Twig is used</p>
        </div>
    </div>

    <footer class=\"footer footer d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top position-relative\">
        <div class=\"col-md-4 d-flex align-items-center\">
            <span class=\"text1 mb-3 mb-md-0 text-body-secondary position-relative\">© 2024 VinPhone</span>
        </div>
        <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com"), "html", null, true);
        yield "\"><img class= \"FBLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/fb_logo.png"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.instagram.com"), "html", null, true);
        yield "\"><img class= \"IGLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/ig_logo.png"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.twitter.com"), "html", null, true);
        yield "\"><img class= \"XLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/x_logo.jpg"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 23
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
        return "home.html.twig";
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
        return array (  123 => 23,  117 => 22,  111 => 21,  105 => 20,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}VinPhone - Home{% endblock %}


{% block body %}
    <div class=\"card3 card position-relative\">
        <div class=\"card-body\">
            <h1>Home</h1>
            <p>VinPhone is a website in which I show some phones which I really want to add in my awesome phone collection! <br>
                It's a CRUD app written in HTML, CSS and lastly Symfony, SQL and also Twig is used</p>
        </div>
    </div>

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

", "home.html.twig", "C:\\Projects\\VinPhone\\templates\\home.html.twig");
    }
}
