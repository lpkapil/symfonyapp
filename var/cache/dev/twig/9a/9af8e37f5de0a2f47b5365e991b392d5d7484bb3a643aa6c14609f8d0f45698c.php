<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5a283876f22ac7d4ba72e9c169e5d1be0bb3e84a1b913ec52a67151b45820fec extends Twig_Template
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
        $__internal_2fbbb552d1af48bc0ca9a96c6306f26a34bc080dd46f6408987bebd441f211c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbbb552d1af48bc0ca9a96c6306f26a34bc080dd46f6408987bebd441f211c6->enter($__internal_2fbbb552d1af48bc0ca9a96c6306f26a34bc080dd46f6408987bebd441f211c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fbbb552d1af48bc0ca9a96c6306f26a34bc080dd46f6408987bebd441f211c6->leave($__internal_2fbbb552d1af48bc0ca9a96c6306f26a34bc080dd46f6408987bebd441f211c6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35ab62e302ead8e83d0e2a8ccd1c60df515baecd5171655f370aaafa5da0dbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ab62e302ead8e83d0e2a8ccd1c60df515baecd5171655f370aaafa5da0dbe2->enter($__internal_35ab62e302ead8e83d0e2a8ccd1c60df515baecd5171655f370aaafa5da0dbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_35ab62e302ead8e83d0e2a8ccd1c60df515baecd5171655f370aaafa5da0dbe2->leave($__internal_35ab62e302ead8e83d0e2a8ccd1c60df515baecd5171655f370aaafa5da0dbe2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1c77bc1b42d3dabc65b5d36edfe89d80403994e3d8603a729a03c340d3afd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c77bc1b42d3dabc65b5d36edfe89d80403994e3d8603a729a03c340d3afd3a->enter($__internal_a1c77bc1b42d3dabc65b5d36edfe89d80403994e3d8603a729a03c340d3afd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a1c77bc1b42d3dabc65b5d36edfe89d80403994e3d8603a729a03c340d3afd3a->leave($__internal_a1c77bc1b42d3dabc65b5d36edfe89d80403994e3d8603a729a03c340d3afd3a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_288575edcfaf64b07b1b9c89d2bf9d568e42e187bdb84a93c402b1eb6ff93112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288575edcfaf64b07b1b9c89d2bf9d568e42e187bdb84a93c402b1eb6ff93112->enter($__internal_288575edcfaf64b07b1b9c89d2bf9d568e42e187bdb84a93c402b1eb6ff93112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_288575edcfaf64b07b1b9c89d2bf9d568e42e187bdb84a93c402b1eb6ff93112->leave($__internal_288575edcfaf64b07b1b9c89d2bf9d568e42e187bdb84a93c402b1eb6ff93112_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/sym/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
