<?php

/* CustomCMSBundle:Default:index.html.twig */
class __TwigTemplate_8b6006ea6692c0c76c6878bb8a161cdbb546a034dfc207a2faf76c241acb6683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:Default:index.html.twig", 1);
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
        $__internal_7bf2f1a0992aa96eeb8e38b06e3efea85eafc11c6d5af2d561853ff81654bcc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf2f1a0992aa96eeb8e38b06e3efea85eafc11c6d5af2d561853ff81654bcc0->enter($__internal_7bf2f1a0992aa96eeb8e38b06e3efea85eafc11c6d5af2d561853ff81654bcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf2f1a0992aa96eeb8e38b06e3efea85eafc11c6d5af2d561853ff81654bcc0->leave($__internal_7bf2f1a0992aa96eeb8e38b06e3efea85eafc11c6d5af2d561853ff81654bcc0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5194db03c6fe70a061ef18d464f5f8ba20182a051e5fb1eb6910de4917055ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5194db03c6fe70a061ef18d464f5f8ba20182a051e5fb1eb6910de4917055ce1->enter($__internal_5194db03c6fe70a061ef18d464f5f8ba20182a051e5fb1eb6910de4917055ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:index.html.twig"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "        <div class=\"page\">
            <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</h1>
            <p>";
            // line 7
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["page"], "content", array()), 0, 25), "html", null, true);
            echo " ...
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_cms_page_display", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">read more</a></p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5194db03c6fe70a061ef18d464f5f8ba20182a051e5fb1eb6910de4917055ce1->leave($__internal_5194db03c6fe70a061ef18d464f5f8ba20182a051e5fb1eb6910de4917055ce1_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  52 => 7,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% for page in pages %}
        <div class=\"page\">
            <h1>{{ page.title }}</h1>
            <p>{{ page.content | slice(0,25) }} ...
                <a href=\"{{ path('custom_cms_page_display', { id: page.id }) }}\">read more</a></p>
        </div>
    {% endfor %}
{% endblock %} ", "CustomCMSBundle:Default:index.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/Default/index.html.twig");
    }
}
