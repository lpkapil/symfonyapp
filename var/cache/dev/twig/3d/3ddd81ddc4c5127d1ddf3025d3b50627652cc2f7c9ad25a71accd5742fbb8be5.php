<?php

/* category/new.html.twig */
class __TwigTemplate_b8bbd46eb870f78337417cac8d9a3da2c173f408f0d43595d4b90109dce3807f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
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
        $__internal_9a8fe4eee243d78c54a309df3ece805b4f0bce03715104a7e5d07e2753093a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8fe4eee243d78c54a309df3ece805b4f0bce03715104a7e5d07e2753093a2f->enter($__internal_9a8fe4eee243d78c54a309df3ece805b4f0bce03715104a7e5d07e2753093a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8fe4eee243d78c54a309df3ece805b4f0bce03715104a7e5d07e2753093a2f->leave($__internal_9a8fe4eee243d78c54a309df3ece805b4f0bce03715104a7e5d07e2753093a2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_325a8f01f02d5cc88949cc871142788c28bbb0140c96bff63d231b5849d4ff72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325a8f01f02d5cc88949cc871142788c28bbb0140c96bff63d231b5849d4ff72->enter($__internal_325a8f01f02d5cc88949cc871142788c28bbb0140c96bff63d231b5849d4ff72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "category/new.html.twig"));

        // line 4
        echo "    <h1>Category creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_325a8f01f02d5cc88949cc871142788c28bbb0140c96bff63d231b5849d4ff72->leave($__internal_325a8f01f02d5cc88949cc871142788c28bbb0140c96bff63d231b5849d4ff72_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
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
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('cms_category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "category/new.html.twig", "/var/www/html/sym/app/Resources/views/category/new.html.twig");
    }
}
