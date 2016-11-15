<?php

/* CustomCMSBundle:Default:display.html.twig */
class __TwigTemplate_4ab8279f6e6b75ef224bcba146d7f63d05213a47b8bdf3e42291519d3b53647b extends Twig_Template
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
        $__internal_699b3f787591d85aae9fe56c0b7f07429bb50b022b7ceca20b8aa3044b47b885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699b3f787591d85aae9fe56c0b7f07429bb50b022b7ceca20b8aa3044b47b885->enter($__internal_699b3f787591d85aae9fe56c0b7f07429bb50b022b7ceca20b8aa3044b47b885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:Default:display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699b3f787591d85aae9fe56c0b7f07429bb50b022b7ceca20b8aa3044b47b885->leave($__internal_699b3f787591d85aae9fe56c0b7f07429bb50b022b7ceca20b8aa3044b47b885_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_380d510da9967f317976e2f9f23a420a89269ba0e311befd63926040364e330c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380d510da9967f317976e2f9f23a420a89269ba0e311befd63926040364e330c->enter($__internal_380d510da9967f317976e2f9f23a420a89269ba0e311befd63926040364e330c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:display.html.twig"));

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
        
        $__internal_380d510da9967f317976e2f9f23a420a89269ba0e311befd63926040364e330c->leave($__internal_380d510da9967f317976e2f9f23a420a89269ba0e311befd63926040364e330c_prof);

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
{% endblock %}", "CustomCMSBundle:Default:display.html.twig", "/var/www/html/sym/src/Custom/CMSBundle/Resources/views/Default/display.html.twig");
    }
}
