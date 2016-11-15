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
        $__internal_cc3b373a39d21581edf26bd6923cf8c45a6982b924f81deb885ba9325b59c920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3b373a39d21581edf26bd6923cf8c45a6982b924f81deb885ba9325b59c920->enter($__internal_cc3b373a39d21581edf26bd6923cf8c45a6982b924f81deb885ba9325b59c920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:page:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc3b373a39d21581edf26bd6923cf8c45a6982b924f81deb885ba9325b59c920->leave($__internal_cc3b373a39d21581edf26bd6923cf8c45a6982b924f81deb885ba9325b59c920_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc71ef1142602800acfcafc65af3c5f95e7c52ebdad790042715b7a4493c1d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc71ef1142602800acfcafc65af3c5f95e7c52ebdad790042715b7a4493c1d75->enter($__internal_fc71ef1142602800acfcafc65af3c5f95e7c52ebdad790042715b7a4493c1d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:page:edit.html.twig"));

        // line 4
        echo "    <h1>Page edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
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
        
        $__internal_fc71ef1142602800acfcafc65af3c5f95e7c52ebdad790042715b7a4493c1d75->leave($__internal_fc71ef1142602800acfcafc65af3c5f95e7c52ebdad790042715b7a4493c1d75_prof);

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
    <h1>Page edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cms_page_index') }}\">Back to the list</a>
        </li>
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
