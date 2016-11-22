<?php

/* CustomCMSBundle:category:edit.html.twig */
class __TwigTemplate_b7698225865cbb99816f14a5e6b213427b8ca72f826fcc28d8b89c73533f6d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:category:edit.html.twig", 1);
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
        $__internal_0521383a89d081be96a30cac34dac049f1eab8434d41c476539eca582f7c682b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0521383a89d081be96a30cac34dac049f1eab8434d41c476539eca582f7c682b->enter($__internal_0521383a89d081be96a30cac34dac049f1eab8434d41c476539eca582f7c682b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0521383a89d081be96a30cac34dac049f1eab8434d41c476539eca582f7c682b->leave($__internal_0521383a89d081be96a30cac34dac049f1eab8434d41c476539eca582f7c682b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d69d89008a507cb209754ca67d7cf8d9d648cf9d2f7acfa3e946e0a99690c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d69d89008a507cb209754ca67d7cf8d9d648cf9d2f7acfa3e946e0a99690c16->enter($__internal_7d69d89008a507cb209754ca67d7cf8d9d648cf9d2f7acfa3e946e0a99690c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:category:edit.html.twig"));

        // line 4
        echo "    <h1>Category edit</h1>

    ";
        // line 10
        echo "
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

            <div class=\"form-group clearfix\">
                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Title"));
        echo "
                <div class=\"col-xs-6\">
                    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group clearfix\">
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Content"));
        echo "
                <div class=\"col-xs-6\">
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "10", "cols" => "100")));
        echo "
                </div>
            </div>
            <div class=\"form-group clearfix\">
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Category"));
        echo "
                <div class=\"col-xs-6\">
                    ";
        // line 30
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
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button type=\"submit\" class=\"btn btn-primary\" value=\"Delete\">Delete</button>
            ";
        // line 51
        echo "            ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7d69d89008a507cb209754ca67d7cf8d9d648cf9d2f7acfa3e946e0a99690c16->leave($__internal_7d69d89008a507cb209754ca67d7cf8d9d648cf9d2f7acfa3e946e0a99690c16_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 51,  111 => 48,  105 => 45,  96 => 39,  84 => 30,  79 => 28,  72 => 24,  67 => 22,  60 => 18,  55 => 16,  49 => 13,  44 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Category edit</h1>

    {#{{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}#}

    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            {{ form_start(edit_form) }}

            <div class=\"form-group clearfix\">
                {{ form_label(edit_form.title, 'Title', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-6\">
                    {{ form_widget(edit_form.title, {'attr': {'class': 'form-control'}})  }}
                </div>
            </div>
            <div class=\"form-group clearfix\">
                {{ form_label(edit_form.content, 'Content', {'label_attr': {'class': 'control-label col-xs-2' }}) }}
                <div class=\"col-xs-6\">
                    {{ form_widget(edit_form.content, {'attr': {'class': 'form-control', 'rows': '10', 'cols': '100'}})  }}
                </div>
            </div>
            <div class=\"form-group clearfix\">
                {{ form_label(edit_form.category, 'Category', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-6\">
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
            <a href=\"{{ path('cms_category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <button type=\"submit\" class=\"btn btn-primary\" value=\"Delete\">Delete</button>
            {#            <input type=\"submit\" value=\"Delete\">#}
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:category:edit.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/category/edit.html.twig");
    }
}
