<?php

/* CustomCMSBundle:category:new.html.twig */
class __TwigTemplate_3d33284eed301dee48e45e56f9ed62574e625da89a833ee98cd9b0d5b0d90a55 extends Twig_Template
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
        $__internal_5445c8c4c93e58eab864055dab2a73790268a3d4e341e26c464c3827eb18b2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5445c8c4c93e58eab864055dab2a73790268a3d4e341e26c464c3827eb18b2ac->enter($__internal_5445c8c4c93e58eab864055dab2a73790268a3d4e341e26c464c3827eb18b2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5445c8c4c93e58eab864055dab2a73790268a3d4e341e26c464c3827eb18b2ac->leave($__internal_5445c8c4c93e58eab864055dab2a73790268a3d4e341e26c464c3827eb18b2ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcd8f65519cfdfa9a4463b7adb28172fa7d22b333f888cb2b879dcadcc43a72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd8f65519cfdfa9a4463b7adb28172fa7d22b333f888cb2b879dcadcc43a72f->enter($__internal_dcd8f65519cfdfa9a4463b7adb28172fa7d22b333f888cb2b879dcadcc43a72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:category:new.html.twig"));

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
        
        $__internal_dcd8f65519cfdfa9a4463b7adb28172fa7d22b333f888cb2b879dcadcc43a72f->leave($__internal_dcd8f65519cfdfa9a4463b7adb28172fa7d22b333f888cb2b879dcadcc43a72f_prof);

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
", "CustomCMSBundle:category:new.html.twig", "/var/www/html/sym/src/Custom/CMSBundle/Resources/views/category/new.html.twig");
    }
}
