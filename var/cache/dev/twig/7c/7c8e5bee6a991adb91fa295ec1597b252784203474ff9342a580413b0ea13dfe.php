<?php

/* CustomCMSBundle:user:new.html.twig */
class __TwigTemplate_0b40b98cba9c9e6403f898916ec568accada3b6d9181b39d16e4da9ee4a9500b extends Twig_Template
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
        $__internal_bf5ecf8be29ff29eaea133cf62b29e68e2fd73a26b970a8eb998e3708955adc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5ecf8be29ff29eaea133cf62b29e68e2fd73a26b970a8eb998e3708955adc9->enter($__internal_bf5ecf8be29ff29eaea133cf62b29e68e2fd73a26b970a8eb998e3708955adc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf5ecf8be29ff29eaea133cf62b29e68e2fd73a26b970a8eb998e3708955adc9->leave($__internal_bf5ecf8be29ff29eaea133cf62b29e68e2fd73a26b970a8eb998e3708955adc9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65852fe629002bcafb99bf72780b6dff94eee36a35d501dd9118c115c25b10d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65852fe629002bcafb99bf72780b6dff94eee36a35d501dd9118c115c25b10d6->enter($__internal_65852fe629002bcafb99bf72780b6dff94eee36a35d501dd9118c115c25b10d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:user:new.html.twig"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_65852fe629002bcafb99bf72780b6dff94eee36a35d501dd9118c115c25b10d6->leave($__internal_65852fe629002bcafb99bf72780b6dff94eee36a35d501dd9118c115c25b10d6_prof);

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
    <h1>User creation</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('cms_user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:user:new.html.twig", "/var/www/html/sym/src/Custom/CMSBundle/Resources/views/user/new.html.twig");
    }
}
