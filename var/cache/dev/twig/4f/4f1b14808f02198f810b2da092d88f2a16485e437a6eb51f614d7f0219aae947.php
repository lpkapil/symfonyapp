<?php

/* CustomCMSBundle:user:new.html.twig */
class __TwigTemplate_f92180c2fba6fe00f2fc555f156092268e59e8407b220a4af99f31545309fbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:user:new.html.twig", 1);
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
        $__internal_0a48f499594e3572210f31d310137753e0fbd8aa8d26228f960294106474eae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a48f499594e3572210f31d310137753e0fbd8aa8d26228f960294106474eae4->enter($__internal_0a48f499594e3572210f31d310137753e0fbd8aa8d26228f960294106474eae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a48f499594e3572210f31d310137753e0fbd8aa8d26228f960294106474eae4->leave($__internal_0a48f499594e3572210f31d310137753e0fbd8aa8d26228f960294106474eae4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7985748534f18d602f797ee2c8fff81d73312f68d24c83a833dfeb1f75f957fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7985748534f18d602f797ee2c8fff81d73312f68d24c83a833dfeb1f75f957fb->enter($__internal_7985748534f18d602f797ee2c8fff81d73312f68d24c83a833dfeb1f75f957fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:user:new.html.twig"));

        // line 4
        echo "    <div class=\"page-header\">
        <h2>Add New User</h2>
    </div>

    ";
        // line 12
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"form-group clearfix\">
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Username"));
        echo "
                <div class=\"col-xs-6\">
                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
            <div class=\"form-group clearfix\">
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "control-label col-xs-2"), "label" => "Password"));
        echo "
                <div class=\"col-xs-6\">
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div><br>

            <div class=\"form-group pull-right\">
                <div class=\"col-xs-offset-2 col-xs-10\">
                    <button type=\"submit\" class=\"btn btn-primary\">Create</button>
                </div>
            </div>
            ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_7985748534f18d602f797ee2c8fff81d73312f68d24c83a833dfeb1f75f957fb->leave($__internal_7985748534f18d602f797ee2c8fff81d73312f68d24c83a833dfeb1f75f957fb_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 34,  73 => 25,  68 => 23,  61 => 19,  56 => 17,  50 => 14,  46 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
        <h2>Add New User</h2>
    </div>

    {#    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
        {{ form_end(form) }}#}
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">
            {{ form_start(form) }}

            <div class=\"form-group clearfix\">
                {{ form_label(form.username, 'Username', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-6\">
                    {{ form_widget(form.username, {'attr': {'class': 'form-control'}})  }}
                </div>
            </div>
            <div class=\"form-group clearfix\">
                {{ form_label(form.password, 'Password', {'label_attr': {'class': 'control-label col-xs-2'}}) }}
                <div class=\"col-xs-6\">
                    {{ form_widget(form.password, {'attr': {'class': 'form-control'}})  }}
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
", "CustomCMSBundle:user:new.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/user/new.html.twig");
    }
}
