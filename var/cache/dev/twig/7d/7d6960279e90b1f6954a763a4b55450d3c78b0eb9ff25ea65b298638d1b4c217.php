<?php

/* CustomCMSBundle:Default:index.html.twig */
class __TwigTemplate_82a8213a09f4dac9509fe09273cc90d0f00a79143786491960dc8fee7bab86d0 extends Twig_Template
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
        $__internal_4f0e32ac4f8e4de144c081f97829b49c911a8f955bfee437af2cea177eacc29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0e32ac4f8e4de144c081f97829b49c911a8f955bfee437af2cea177eacc29b->enter($__internal_4f0e32ac4f8e4de144c081f97829b49c911a8f955bfee437af2cea177eacc29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0e32ac4f8e4de144c081f97829b49c911a8f955bfee437af2cea177eacc29b->leave($__internal_4f0e32ac4f8e4de144c081f97829b49c911a8f955bfee437af2cea177eacc29b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_738e758b1ba191982cc6991d96e15ff4e6723d62a51fba2f7334ccb934d0e230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738e758b1ba191982cc6991d96e15ff4e6723d62a51fba2f7334ccb934d0e230->enter($__internal_738e758b1ba191982cc6991d96e15ff4e6723d62a51fba2f7334ccb934d0e230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:index.html.twig"));

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
        
        $__internal_738e758b1ba191982cc6991d96e15ff4e6723d62a51fba2f7334ccb934d0e230->leave($__internal_738e758b1ba191982cc6991d96e15ff4e6723d62a51fba2f7334ccb934d0e230_prof);

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
{% endblock %} ", "CustomCMSBundle:Default:index.html.twig", "/var/www/html/sym/src/Custom/CMSBundle/Resources/views/Default/index.html.twig");
    }
}
