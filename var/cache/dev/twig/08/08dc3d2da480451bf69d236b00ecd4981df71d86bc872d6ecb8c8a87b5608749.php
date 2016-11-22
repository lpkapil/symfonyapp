<?php

/* CustomCMSBundle:page:edit.html.twig */
class __TwigTemplate_9091fd67e6574f0c497d187ce3cc9afcaf7b836b90bab340288bf682948a9d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:page:edit.html.twig", 1);
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
        $__internal_4bb8979dfd2c2f960299a0e7193a9c8192fbdf113c8bda4075f0cce853a700e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb8979dfd2c2f960299a0e7193a9c8192fbdf113c8bda4075f0cce853a700e9->enter($__internal_4bb8979dfd2c2f960299a0e7193a9c8192fbdf113c8bda4075f0cce853a700e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bb8979dfd2c2f960299a0e7193a9c8192fbdf113c8bda4075f0cce853a700e9->leave($__internal_4bb8979dfd2c2f960299a0e7193a9c8192fbdf113c8bda4075f0cce853a700e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3d5a3a9ff790c2744541218dd0bb04cfa98af99a72ea017980535b301b5ec8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d5a3a9ff790c2744541218dd0bb04cfa98af99a72ea017980535b301b5ec8e->enter($__internal_b3d5a3a9ff790c2744541218dd0bb04cfa98af99a72ea017980535b301b5ec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:page:edit.html.twig"));

        // line 4
        echo "    <div class=\"page-header\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
        echo "\" class=\"btn btn-sm btn-primary pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-left\"></span> Back</a>   
        <h2>Edit Page</h2>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

            <div class=\"form-group clearfix\">
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Title"));
        echo "
                <div class=\"col-xs-10\">
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group clearfix\">
                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Content"));
        echo "
                <div class=\"col-xs-10\">
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "10", "cols" => "100")));
        echo "
                </div>
            </div>
            <div class=\"form-group clearfix\">
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Category"));
        echo "
                <div class=\"col-xs-10\">
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div><br>

            <div class=\"form-group pull-right\">
                <div class=\"col-xs-offset-2 col-xs-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                </div>
            </div>
            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>

    <ul>
        <li>
            ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b3d5a3a9ff790c2744541218dd0bb04cfa98af99a72ea017980535b301b5ec8e->leave($__internal_b3d5a3a9ff790c2744541218dd0bb04cfa98af99a72ea017980535b301b5ec8e_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  107 => 42,  98 => 36,  86 => 27,  81 => 25,  74 => 21,  69 => 19,  62 => 15,  57 => 13,  51 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
        <h2>Edit Page</h2>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            {{ form_start(edit_form) }}

            <div class=\"form-group clearfix\">
                {{ form_label(edit_form.title, 'Title', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-10\">
                    {{ form_widget(edit_form.title, {'attr': {'class': 'form-control'}})  }}
                </div>
            </div>
            <div class=\"form-group clearfix\">
                {{ form_label(edit_form.content, 'Content', {'label_attr': {'class': 'control-label col-xs-2' }}) }}
                <div class=\"col-xs-10\">
                    {{ form_widget(edit_form.content, {'attr': {'class': 'form-control', 'rows': '10', 'cols': '100'}})  }}
                </div>
            </div>
            <div class=\"form-group clearfix\">
                {{ form_label(edit_form.category, 'Category', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-10\">
                    {{ form_widget(edit_form.category, {'attr': {'class': 'form-control'}})  }}
                </div>
            </div><br>

            <div class=\"form-group pull-right\">
                <div class=\"col-xs-offset-2 col-xs-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Update</button>
                </div>
            </div>
            {{ form_end(edit_form) }}
        </div>
    </div>

    <ul>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:page:edit.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/page/edit.html.twig");
    }
}
