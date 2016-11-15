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
        $__internal_50a0aec03a6c979cd283928264eff53d49df02f11af0ff68257ee448ac68387e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a0aec03a6c979cd283928264eff53d49df02f11af0ff68257ee448ac68387e->enter($__internal_50a0aec03a6c979cd283928264eff53d49df02f11af0ff68257ee448ac68387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:Default:display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50a0aec03a6c979cd283928264eff53d49df02f11af0ff68257ee448ac68387e->leave($__internal_50a0aec03a6c979cd283928264eff53d49df02f11af0ff68257ee448ac68387e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_705e7dfb8cfcf3bb1cc28b6898585211b5402a57a12fa0b083ba07ecd26a93bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705e7dfb8cfcf3bb1cc28b6898585211b5402a57a12fa0b083ba07ecd26a93bb->enter($__internal_705e7dfb8cfcf3bb1cc28b6898585211b5402a57a12fa0b083ba07ecd26a93bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:display.html.twig"));

        echo "MyCMS | ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())), "html", null, true);
        
        $__internal_705e7dfb8cfcf3bb1cc28b6898585211b5402a57a12fa0b083ba07ecd26a93bb->leave($__internal_705e7dfb8cfcf3bb1cc28b6898585211b5402a57a12fa0b083ba07ecd26a93bb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_07c3f606ef2a796293fea7e351ea3f999eb784805f2e1574861252f2f01cb7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c3f606ef2a796293fea7e351ea3f999eb784805f2e1574861252f2f01cb7f6->enter($__internal_07c3f606ef2a796293fea7e351ea3f999eb784805f2e1574861252f2f01cb7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:display.html.twig"));

        // line 7
        echo "    <div class=\"page-header\">
        <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array())), "html", null, true);
        echo "</h1>
        <span><strong>Category:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "category", array()), "name", array())), "html", null, true);
        echo "</span>
    </div>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array()), "html", null, true);
        echo "</p>  
";
        
        $__internal_07c3f606ef2a796293fea7e351ea3f999eb784805f2e1574861252f2f01cb7f6->leave($__internal_07c3f606ef2a796293fea7e351ea3f999eb784805f2e1574861252f2f01cb7f6_prof);

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
        <h1>{{ page.title | capitalize }}</h1>
        <span><strong>Category:</strong> {{ page.category.name | capitalize }}</span>
    </div>
    <p>{{ page.content }}</p>  
{% endblock %}", "CustomCMSBundle:Default:display.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/Default/display.html.twig");
    }
}
