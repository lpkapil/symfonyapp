<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_62299f5c0042e45b70f284e9156d30bdc9b4f627fa387104d306c707549517cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6033d545a91e8ae019c6ef1d487af0f19c9d2ec618cd10379bc55db47841587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6033d545a91e8ae019c6ef1d487af0f19c9d2ec618cd10379bc55db47841587->enter($__internal_d6033d545a91e8ae019c6ef1d487af0f19c9d2ec618cd10379bc55db47841587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6033d545a91e8ae019c6ef1d487af0f19c9d2ec618cd10379bc55db47841587->leave($__internal_d6033d545a91e8ae019c6ef1d487af0f19c9d2ec618cd10379bc55db47841587_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_850e3d2f5742a56500325846ad304563a01b90380e0f6729799cc7da558db950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850e3d2f5742a56500325846ad304563a01b90380e0f6729799cc7da558db950->enter($__internal_850e3d2f5742a56500325846ad304563a01b90380e0f6729799cc7da558db950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_850e3d2f5742a56500325846ad304563a01b90380e0f6729799cc7da558db950->leave($__internal_850e3d2f5742a56500325846ad304563a01b90380e0f6729799cc7da558db950_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da42f062c6f72eec0a48e50068e4bf1b79cc17172e68b8097a2568f3ad0aeb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da42f062c6f72eec0a48e50068e4bf1b79cc17172e68b8097a2568f3ad0aeb93->enter($__internal_da42f062c6f72eec0a48e50068e4bf1b79cc17172e68b8097a2568f3ad0aeb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da42f062c6f72eec0a48e50068e4bf1b79cc17172e68b8097a2568f3ad0aeb93->leave($__internal_da42f062c6f72eec0a48e50068e4bf1b79cc17172e68b8097a2568f3ad0aeb93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_932e67eb49ccfc11dcc4be01194a9757271d19e23d4a7d563a26d9acc060eaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932e67eb49ccfc11dcc4be01194a9757271d19e23d4a7d563a26d9acc060eaef->enter($__internal_932e67eb49ccfc11dcc4be01194a9757271d19e23d4a7d563a26d9acc060eaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_932e67eb49ccfc11dcc4be01194a9757271d19e23d4a7d563a26d9acc060eaef->leave($__internal_932e67eb49ccfc11dcc4be01194a9757271d19e23d4a7d563a26d9acc060eaef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
