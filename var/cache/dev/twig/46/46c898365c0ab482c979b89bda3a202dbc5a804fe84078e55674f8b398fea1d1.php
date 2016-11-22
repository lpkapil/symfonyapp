<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b41da615dd074ce72b2314b3f52403fb8eca3119a555e4efb1823796b33f1151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c70f6d8100fe629a2d3b73c2bdce8458c5d8abbcf1a22a8907635e39d27e4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c70f6d8100fe629a2d3b73c2bdce8458c5d8abbcf1a22a8907635e39d27e4ca->enter($__internal_8c70f6d8100fe629a2d3b73c2bdce8458c5d8abbcf1a22a8907635e39d27e4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c70f6d8100fe629a2d3b73c2bdce8458c5d8abbcf1a22a8907635e39d27e4ca->leave($__internal_8c70f6d8100fe629a2d3b73c2bdce8458c5d8abbcf1a22a8907635e39d27e4ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a59ca60e2a802febfba7cd3ec054233a6f7e81a21bfb8394c4a41989c1088a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59ca60e2a802febfba7cd3ec054233a6f7e81a21bfb8394c4a41989c1088a6c->enter($__internal_a59ca60e2a802febfba7cd3ec054233a6f7e81a21bfb8394c4a41989c1088a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a59ca60e2a802febfba7cd3ec054233a6f7e81a21bfb8394c4a41989c1088a6c->leave($__internal_a59ca60e2a802febfba7cd3ec054233a6f7e81a21bfb8394c4a41989c1088a6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49f56a8dc1a457498c03562dfe9f02ca187d0588e498136ce1eccb0cbd86e701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49f56a8dc1a457498c03562dfe9f02ca187d0588e498136ce1eccb0cbd86e701->enter($__internal_49f56a8dc1a457498c03562dfe9f02ca187d0588e498136ce1eccb0cbd86e701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_49f56a8dc1a457498c03562dfe9f02ca187d0588e498136ce1eccb0cbd86e701->leave($__internal_49f56a8dc1a457498c03562dfe9f02ca187d0588e498136ce1eccb0cbd86e701_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a81f7de208ad99eddd2e75e8b720dedb6f814e694bf01c2894ce2608deec03af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81f7de208ad99eddd2e75e8b720dedb6f814e694bf01c2894ce2608deec03af->enter($__internal_a81f7de208ad99eddd2e75e8b720dedb6f814e694bf01c2894ce2608deec03af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a81f7de208ad99eddd2e75e8b720dedb6f814e694bf01c2894ce2608deec03af->leave($__internal_a81f7de208ad99eddd2e75e8b720dedb6f814e694bf01c2894ce2608deec03af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
