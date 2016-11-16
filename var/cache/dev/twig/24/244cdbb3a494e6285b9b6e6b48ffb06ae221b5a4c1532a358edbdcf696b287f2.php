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
        $__internal_dcdd74078649934d88410a2d5fc9780b6fae90bade018816e30ed5c45b5d2f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdd74078649934d88410a2d5fc9780b6fae90bade018816e30ed5c45b5d2f98->enter($__internal_dcdd74078649934d88410a2d5fc9780b6fae90bade018816e30ed5c45b5d2f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:page:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcdd74078649934d88410a2d5fc9780b6fae90bade018816e30ed5c45b5d2f98->leave($__internal_dcdd74078649934d88410a2d5fc9780b6fae90bade018816e30ed5c45b5d2f98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab03d73d0ec76a225f7b2fd35b39bee58a3607c8db6ae455d3222cb956a36078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab03d73d0ec76a225f7b2fd35b39bee58a3607c8db6ae455d3222cb956a36078->enter($__internal_ab03d73d0ec76a225f7b2fd35b39bee58a3607c8db6ae455d3222cb956a36078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:page:new.html.twig"));

        // line 4
        echo "    <div class=\"page-header\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
        echo "\" class=\"btn btn-sm btn-primary pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-left\"></span> Back</a>
        <h2>Add New Page</h2>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"form-group clearfix\">
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Title"));
        echo "
                <div class=\"col-xs-10\">
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group clearfix\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Content"));
        echo "
                <div class=\"col-xs-10\">
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "10", "cols" => "100")));
        echo "
                </div>
            </div>
            <div class=\"form-group clearfix\">
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Category"));
        echo "
                <div class=\"col-xs-10\">
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div><br>

            <div class=\"form-group pull-right\">
                <div class=\"col-xs-offset-2 col-xs-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                </div>
            </div>
            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_ab03d73d0ec76a225f7b2fd35b39bee58a3607c8db6ae455d3222cb956a36078->leave($__internal_ab03d73d0ec76a225f7b2fd35b39bee58a3607c8db6ae455d3222cb956a36078_prof);

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
        return array (  98 => 36,  86 => 27,  81 => 25,  74 => 21,  69 => 19,  62 => 15,  57 => 13,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"page-header\">
        <a href=\"{{ path('cms_page_index') }}\" class=\"btn btn-sm btn-primary pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-left\"></span> Back</a>
        <h2>Add New Page</h2>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            {{ form_start(form) }}

            <div class=\"form-group clearfix\">
                {{ form_label(form.title, 'Title', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-10\">
                    {{ form_widget(form.title, {'attr': {'class': 'form-control'}})  }}
                </div>
            </div>
            <div class=\"form-group clearfix\">
                {{ form_label(form.content, 'Content', {'label_attr': {'class': 'control-label col-xs-2' }}) }}
                <div class=\"col-xs-10\">
                    {{ form_widget(form.content, {'attr': {'class': 'form-control', 'rows': '10', 'cols': '100'}})  }}
                </div>
            </div>
            <div class=\"form-group clearfix\">
                {{ form_label(form.category, 'Category', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-10\">
                    {{ form_widget(form.category, {'attr': {'class': 'form-control'}})  }}
                </div>
            </div><br>

            <div class=\"form-group pull-right\">
                <div class=\"col-xs-offset-2 col-xs-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "CustomCMSBundle:page:new.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/page/new.html.twig");
    }
}
