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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3b3768c858ce9e7f63bc99f6220967bd380c527442b8f5442b016cf649e9862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b3768c858ce9e7f63bc99f6220967bd380c527442b8f5442b016cf649e9862->enter($__internal_f3b3768c858ce9e7f63bc99f6220967bd380c527442b8f5442b016cf649e9862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:Default:display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3b3768c858ce9e7f63bc99f6220967bd380c527442b8f5442b016cf649e9862->leave($__internal_f3b3768c858ce9e7f63bc99f6220967bd380c527442b8f5442b016cf649e9862_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_efaa67d3e13dcd92e5f07ed059861b245911f7fe96bfb46458233c42f5c7b683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaa67d3e13dcd92e5f07ed059861b245911f7fe96bfb46458233c42f5c7b683->enter($__internal_efaa67d3e13dcd92e5f07ed059861b245911f7fe96bfb46458233c42f5c7b683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:display.html.twig"));

        // line 5
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</h1>
    <h4>Category: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "category", array()), "name", array()), "html", null, true);
        echo "</h4>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_efaa67d3e13dcd92e5f07ed059861b245911f7fe96bfb46458233c42f5c7b683->leave($__internal_efaa67d3e13dcd92e5f07ed059861b245911f7fe96bfb46458233c42f5c7b683_prof);

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
        return array (  49 => 7,  45 => 6,  40 => 5,  34 => 4,  11 => 2,);
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

{% block body %}
    <h1>{{ page.title }}</h1>
    <h4>Category: {{ page.category.name }}</h4>
    <p>{{ page.content }}</p>
{% endblock %}", "CustomCMSBundle:Default:display.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/Default/display.html.twig");
    }
}
