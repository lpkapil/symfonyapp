<?php

/* CustomCMSBundle:Default:display.html.twig */
class __TwigTemplate_9e8d3960f4d181cc22c1feef793887aa9cff3fdb473687a0f1373f9ba1d8d5b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:Default:display.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c34aa499a5fbbf8e64ef63b45ae3a1ef7b3392be33d7e9967582cc451f26190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c34aa499a5fbbf8e64ef63b45ae3a1ef7b3392be33d7e9967582cc451f26190->enter($__internal_3c34aa499a5fbbf8e64ef63b45ae3a1ef7b3392be33d7e9967582cc451f26190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:Default:display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c34aa499a5fbbf8e64ef63b45ae3a1ef7b3392be33d7e9967582cc451f26190->leave($__internal_3c34aa499a5fbbf8e64ef63b45ae3a1ef7b3392be33d7e9967582cc451f26190_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a479d2c2c0025a8e5d4a1fc64af4e05202defcc6d2bb11ac7a5b1905a1b2c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a479d2c2c0025a8e5d4a1fc64af4e05202defcc6d2bb11ac7a5b1905a1b2c24->enter($__internal_5a479d2c2c0025a8e5d4a1fc64af4e05202defcc6d2bb11ac7a5b1905a1b2c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:display.html.twig"));

        echo "MyCMS | ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())), "html", null, true);
        
        $__internal_5a479d2c2c0025a8e5d4a1fc64af4e05202defcc6d2bb11ac7a5b1905a1b2c24->leave($__internal_5a479d2c2c0025a8e5d4a1fc64af4e05202defcc6d2bb11ac7a5b1905a1b2c24_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5de794f69287eff6fd94c50d2e11f732a891e0abbd10500bc748d7ea5bb2718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5de794f69287eff6fd94c50d2e11f732a891e0abbd10500bc748d7ea5bb2718->enter($__internal_c5de794f69287eff6fd94c50d2e11f732a891e0abbd10500bc748d7ea5bb2718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:display.html.twig"));

        // line 7
        echo "    <div class=\"page-header\">
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())), "html", null, true);
        echo "</h1><br>
        <span><i class=\"glyphicon glyphicon-tags\"></i>&nbsp; ";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "category", array()), "name", array())), "html", null, true);
        echo "</span>
    </div>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array()), "html", null, true);
        echo "</p>  
";
        
        $__internal_c5de794f69287eff6fd94c50d2e11f732a891e0abbd10500bc748d7ea5bb2718->leave($__internal_c5de794f69287eff6fd94c50d2e11f732a891e0abbd10500bc748d7ea5bb2718_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:Default:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  61 => 9,  57 => 8,  54 => 7,  48 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block title %}MyCMS | {{ page.title | capitalize }}{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <h1>{{ page.title | capitalize }}</h1><br>
        <span><i class=\"glyphicon glyphicon-tags\"></i>&nbsp; {{ page.category.name | capitalize }}</span>
    </div>
    <p>{{ page.content }}</p>  
{% endblock %}", "CustomCMSBundle:Default:display.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/Default/display.html.twig");
    }
}
