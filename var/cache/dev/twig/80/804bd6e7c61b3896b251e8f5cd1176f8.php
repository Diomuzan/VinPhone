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

/* news.html.twig */
class __TwigTemplate_3f6ef0b637b2852a180f9d9f5a08da17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "news.html.twig", 1);
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

        yield "VinPhone - News";
        
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
        yield "    <h1>News</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Title</th>
                <th>Description</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["news"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 21
            yield "            <tr>
                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                <td>";
            // line 23
            ((CoreExtension::getAttribute($this->env, $this->source, $context["news"], "date", [], "any", false, false, false, 23)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "date", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "description", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            ((CoreExtension::getAttribute($this->env, $this->source, $context["news"], "role", [], "any", false, false, false, 26)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["news"], "role", [], "any", false, false, false, 26)), "html", null, true)) : (yield ""));
            yield "</td>
                <td>
                    <a class=\"btn btn-outline-info\" href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">Detail</a>
                    <a class= \"btn btn-outline-warning\" href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">Edit</a>
                    <a class= \"btn btn-outline-danger\" href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["news"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">Delete</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "            <tr>
                <td colspan=\"6\">No news found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </tbody>
    </table>

    <a class= \"btn btn-outline-success\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_new");
        yield "\">New</a>

    <footer class=\"footer footer d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top position-relative\">
        <div class=\"col-md-4 d-flex align-items-center\">
            <span class=\"text1 mb-3 mb-md-0 text-body-secondary position-relative\">© 2024 VinPhone</span>
        </div>
        <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com"), "html", null, true);
        yield "\"><img class= \"FBLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/fb_logo.png"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.instagram.com"), "html", null, true);
        yield "\"><img class= \"IGLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/ig_logo.png"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.twitter.com"), "html", null, true);
        yield "\"><img class= \"XLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/x_logo.jpg"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 51
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
        return "news.html.twig";
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
        return array (  194 => 51,  188 => 50,  182 => 49,  176 => 48,  166 => 41,  161 => 38,  152 => 34,  143 => 30,  139 => 29,  135 => 28,  130 => 26,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  111 => 21,  106 => 20,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}VinPhone - News{% endblock %}

{% block body %}
    <h1>News</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Title</th>
                <th>Description</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for news in news %}
            <tr>
                <td>{{ news.id }}</td>
                <td>{{ news.date ? news.date|date('Y-m-d') : '' }}</td>
                <td>{{ news.title }}</td>
                <td>{{ news.description }}</td>
                <td>{{ news.role ? news.role|json_encode : '' }}</td>
                <td>
                    <a class=\"btn btn-outline-info\" href=\"{{ path('news_detail', {'id': news.id}) }}\">Detail</a>
                    <a class= \"btn btn-outline-warning\" href=\"{{ path('news_edit', {'id': news.id}) }}\">Edit</a>
                    <a class= \"btn btn-outline-danger\" href=\"{{ path('news_delete', {'id': news.id}) }}\">Delete</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">No news found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class= \"btn btn-outline-success\" href=\"{{ path('news_new') }}\">New</a>

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
", "news.html.twig", "C:\\Projects\\VinPhone\\templates\\news.html.twig");
    }
}
