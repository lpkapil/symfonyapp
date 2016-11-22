<?php

/* CustomCMSBundle:category:new.html.twig */
class __TwigTemplate_7c804f4effb53409f424979b3ea5fb5895fdeddb36807c49e5c54176a973eff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:category:new.html.twig", 1);
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
        $__internal_d73d145b0a8123efd22bbe77d4659d5e2b7e4960b1deffbe2489f7d38a39aa83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73d145b0a8123efd22bbe77d4659d5e2b7e4960b1deffbe2489f7d38a39aa83->enter($__internal_d73d145b0a8123efd22bbe77d4659d5e2b7e4960b1deffbe2489f7d38a39aa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73d145b0a8123efd22bbe77d4659d5e2b7e4960b1deffbe2489f7d38a39aa83->leave($__internal_d73d145b0a8123efd22bbe77d4659d5e2b7e4960b1deffbe2489f7d38a39aa83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_febce94ea74e34d32f75faf52c3aee92c76afed1d5b78e10b7ad520b25108548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febce94ea74e34d32f75faf52c3aee92c76afed1d5b78e10b7ad520b25108548->enter($__internal_febce94ea74e34d32f75faf52c3aee92c76afed1d5b78e10b7ad520b25108548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:category:new.html.twig"));

        // line 4
        echo "    <div class=\"page-header\">
        <h2>Add New Category</h2>
    </div>

    ";
        // line 12
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"form-group clearfix\">
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Category Name"));
        echo "
                <div class=\"col-xs-6\">
                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div><br>

            <div class=\"form-group pull-right\">
                <div class=\"col-xs-offset-2 col-xs-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                </div>
            </div>
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_febce94ea74e34d32f75faf52c3aee92c76afed1d5b78e10b7ad520b25108548->leave($__internal_febce94ea74e34d32f75faf52c3aee92c76afed1d5b78e10b7ad520b25108548_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  62 => 20,  57 => 18,  51 => 15,  46 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
        <h2>Add New Category</h2>
    </div>

    {#{{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}#}

    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            {{ form_start(form) }}

            <div class=\"form-group clearfix\">
                {{ form_label(form.name, 'Category Name', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-6\">
                    {{ form_widget(form.name, {'attr': {'class': 'form-control'}})  }}
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
", "CustomCMSBundle:category:new.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/category/new.html.twig");
    }
}
