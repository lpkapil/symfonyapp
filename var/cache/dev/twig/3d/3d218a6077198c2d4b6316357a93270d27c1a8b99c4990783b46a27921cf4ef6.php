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
        $__internal_5f3a807c13d0ccb654caa9d1e0eb8f5ce7b26f2863445843da9733b0d8a5cdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3a807c13d0ccb654caa9d1e0eb8f5ce7b26f2863445843da9733b0d8a5cdf1->enter($__internal_5f3a807c13d0ccb654caa9d1e0eb8f5ce7b26f2863445843da9733b0d8a5cdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f3a807c13d0ccb654caa9d1e0eb8f5ce7b26f2863445843da9733b0d8a5cdf1->leave($__internal_5f3a807c13d0ccb654caa9d1e0eb8f5ce7b26f2863445843da9733b0d8a5cdf1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_307f736c1efc121ca30b3bb4d211d6261c555b2f403bb5d65326edc0b22b5963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307f736c1efc121ca30b3bb4d211d6261c555b2f403bb5d65326edc0b22b5963->enter($__internal_307f736c1efc121ca30b3bb4d211d6261c555b2f403bb5d65326edc0b22b5963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:category:edit.html.twig"));

        // line 4
        echo "    <h1>Category edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_307f736c1efc121ca30b3bb4d211d6261c555b2f403bb5d65326edc0b22b5963->leave($__internal_307f736c1efc121ca30b3bb4d211d6261c555b2f403bb5d65326edc0b22b5963_prof);

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
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cms_category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:category:edit.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/category/edit.html.twig");
    }
}
