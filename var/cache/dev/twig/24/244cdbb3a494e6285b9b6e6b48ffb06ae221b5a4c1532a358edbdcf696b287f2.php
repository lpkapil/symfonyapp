<?php

/* CustomCMSBundle:page:new.html.twig */
class __TwigTemplate_e6119bdc97cc86dc5688f856fc6369ecb882b355cb177a4d3c7abac121b7c194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:page:new.html.twig", 1);
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
        $__internal_ffdd994615d87e2025a905b94e8a7d1a07c06a129e7a0d2c646af455b9872b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffdd994615d87e2025a905b94e8a7d1a07c06a129e7a0d2c646af455b9872b2b->enter($__internal_ffdd994615d87e2025a905b94e8a7d1a07c06a129e7a0d2c646af455b9872b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:page:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffdd994615d87e2025a905b94e8a7d1a07c06a129e7a0d2c646af455b9872b2b->leave($__internal_ffdd994615d87e2025a905b94e8a7d1a07c06a129e7a0d2c646af455b9872b2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a5171196352e681264e136c764aa6809cfc6afaf23bf86e1f8d43b0107253d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5171196352e681264e136c764aa6809cfc6afaf23bf86e1f8d43b0107253d8->enter($__internal_7a5171196352e681264e136c764aa6809cfc6afaf23bf86e1f8d43b0107253d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:page:new.html.twig"));

        // line 4
        echo "    <h1>Page creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7a5171196352e681264e136c764aa6809cfc6afaf23bf86e1f8d43b0107253d8->leave($__internal_7a5171196352e681264e136c764aa6809cfc6afaf23bf86e1f8d43b0107253d8_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:page:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Page creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('cms_page_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:page:new.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/page/new.html.twig");
    }
}
