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

/* admin_dashboard.html.twig */
class __TwigTemplate_bf9075922c1e1d0b0dc651b9f2623741 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_dashboard.html.twig", 1);
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

        yield "VinPhone - Dashboard";
        
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
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            yield "        <div class=\"alert alert-success\">
            ";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "
    <div class=\"card card1 position-relative\">
        <div class=\"card-body\">
            ";
        // line 14
        if ((isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new RuntimeError('Variable "account" does not exist.', 14, $this->source); })())) {
            // line 15
            yield "                <h1 class= \"heading2 position-relative\">Hi ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["account"]) || array_key_exists("account", $context) ? $context["account"] : (function () { throw new RuntimeError('Variable "account" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "!</h1>
            ";
        }
        // line 17
        yield "            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Brand</th>
                    <th scope=\"col\">Model</th>
                    <th scope=\"col\">Price</th>
                    <th scope= \"col\">Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["phones"]) || array_key_exists("phones", $context) ? $context["phones"] : (function () { throw new RuntimeError('Variable "phones" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 28
            yield "                <tr>
                    <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "brand", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                    <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "model", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                    <td> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "price", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                  <td>
                      <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phone_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\"><button type=\"button\" class=\"btn btn-outline-warning\">Edit</button></a>
                      <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("phone_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["phone"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\"><button type=\"button\" class=\"btn btn-outline-danger\">Delete</button></a>
                  </td>
                </tbody>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            </table>
            <a href= \"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        yield "\"><button type=\"button\" class=\"button1 btn btn-outline-success position-relative\">Add phone</button></a>
            <a href= \"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_manager");
        yield "\"><button type=\"button\" class=\"button7 btn btn-outline-primary position-relative\">User Manager</button></a>
            <a href= \"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        yield "\"><button type=\"button\" class=\"button8 btn btn-outline-primary position-relative\">News</button></a>
        </div>
    </div>

    <footer class=\"footer footer d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top position-relative\">
        <div class=\"col-md-4 d-flex align-items-center\">
            <span class=\"text1 mb-3 mb-md-0 text-body-secondary position-relative\">© 2024 VinPhone</span>
        </div>
        <ul class=\"nav col-md-4 justify-content-end list-unstyled d-flex\">
            <li class=\"ms-3\"><a href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com"), "html", null, true);
        yield "\"><img class= \"FBLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/fb_logo.png"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.instagram.com"), "html", null, true);
        yield "\"><img class= \"IGLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/ig_logo.png"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.twitter.com"), "html", null, true);
        yield "\"><img class= \"XLogo position-relative\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/pictures/x_logo.jpg"), "html", null, true);
        yield "\"></a></li>
            <li class=\"ms-3\"><a href=\"";
        // line 54
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
        return "admin_dashboard.html.twig";
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
        return array (  208 => 54,  202 => 53,  196 => 52,  190 => 51,  178 => 42,  174 => 41,  170 => 40,  167 => 39,  156 => 34,  152 => 33,  147 => 31,  143 => 30,  139 => 29,  136 => 28,  132 => 27,  120 => 17,  114 => 15,  112 => 14,  107 => 11,  98 => 8,  95 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}VinPhone - Dashboard{% endblock %}

{% block body %}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"card card1 position-relative\">
        <div class=\"card-body\">
            {% if account %}
                <h1 class= \"heading2 position-relative\">Hi {{ account }}!</h1>
            {% endif %}
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Brand</th>
                    <th scope=\"col\">Model</th>
                    <th scope=\"col\">Price</th>
                    <th scope= \"col\">Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for phone in phones %}
                <tr>
                    <td>{{ phone.brand }}</td>
                    <td>{{ phone.model }}</td>
                    <td> {{ phone.price }}</td>
                  <td>
                      <a href=\"{{ path('phone_edit', {'id': phone.id}) }}\"><button type=\"button\" class=\"btn btn-outline-warning\">Edit</button></a>
                      <a href=\"{{ path('phone_delete', {'id': phone.id}) }}\"><button type=\"button\" class=\"btn btn-outline-danger\">Delete</button></a>
                  </td>
                </tbody>
                </tr>
                {% endfor %}
            </table>
            <a href= \"{{ path('add') }}\"><button type=\"button\" class=\"button1 btn btn-outline-success position-relative\">Add phone</button></a>
            <a href= \"{{ path('user_manager') }}\"><button type=\"button\" class=\"button7 btn btn-outline-primary position-relative\">User Manager</button></a>
            <a href= \"{{ path('news') }}\"><button type=\"button\" class=\"button8 btn btn-outline-primary position-relative\">News</button></a>
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
{% endblock %}", "admin_dashboard.html.twig", "C:\\Projects\\VinPhone\\templates\\admin_dashboard.html.twig");
    }
}
