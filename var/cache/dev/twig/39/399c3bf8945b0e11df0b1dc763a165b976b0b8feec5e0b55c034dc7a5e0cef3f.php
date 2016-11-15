<?php

/* CustomCMSBundle:user:edit.html.twig */
class __TwigTemplate_c34bf108556993bc9a330abcbf36cb486d54b7f43207b06d4a79903d19e7fb6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:user:edit.html.twig", 1);
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
        $__internal_c47f9e4c09e8380f579bfd03963525258d5c98efd8abde3ea977da1db8e8b62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47f9e4c09e8380f579bfd03963525258d5c98efd8abde3ea977da1db8e8b62c->enter($__internal_c47f9e4c09e8380f579bfd03963525258d5c98efd8abde3ea977da1db8e8b62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c47f9e4c09e8380f579bfd03963525258d5c98efd8abde3ea977da1db8e8b62c->leave($__internal_c47f9e4c09e8380f579bfd03963525258d5c98efd8abde3ea977da1db8e8b62c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d02321d9e8703754712c4062cf9314af9fd043c39cd945814c52cd86ecf9b142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02321d9e8703754712c4062cf9314af9fd043c39cd945814c52cd86ecf9b142->enter($__internal_d02321d9e8703754712c4062cf9314af9fd043c39cd945814c52cd86ecf9b142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:user:edit.html.twig"));

        // line 4
        echo "    <h1>User edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_index");
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
        
        $__internal_d02321d9e8703754712c4062cf9314af9fd043c39cd945814c52cd86ecf9b142->leave($__internal_d02321d9e8703754712c4062cf9314af9fd043c39cd945814c52cd86ecf9b142_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:user:edit.html.twig";
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('cms_user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:user:edit.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/user/edit.html.twig");
    }
}
