<?php

/* page/new.html.twig */
class __TwigTemplate_e138ba9e271cc4bd86be97014da3678df6cf024502b7d419d1550d1b968da367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "page/new.html.twig", 1);
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
        $__internal_35378a747ce13f8852f028f199a2a3acf393b58de6cc91589f21474b39e8e0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35378a747ce13f8852f028f199a2a3acf393b58de6cc91589f21474b39e8e0d7->enter($__internal_35378a747ce13f8852f028f199a2a3acf393b58de6cc91589f21474b39e8e0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35378a747ce13f8852f028f199a2a3acf393b58de6cc91589f21474b39e8e0d7->leave($__internal_35378a747ce13f8852f028f199a2a3acf393b58de6cc91589f21474b39e8e0d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b27d2f43285b93f167e5bd05bd7f1206d31a0abff2e20dfe8b5258dcb7ec0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b27d2f43285b93f167e5bd05bd7f1206d31a0abff2e20dfe8b5258dcb7ec0d6->enter($__internal_3b27d2f43285b93f167e5bd05bd7f1206d31a0abff2e20dfe8b5258dcb7ec0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page/new.html.twig"));

        // line 4
        echo "    <h1>Page creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3b27d2f43285b93f167e5bd05bd7f1206d31a0abff2e20dfe8b5258dcb7ec0d6->leave($__internal_3b27d2f43285b93f167e5bd05bd7f1206d31a0abff2e20dfe8b5258dcb7ec0d6_prof);

    }

    public function getTemplateName()
    {
        return "page/new.html.twig";
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
    <h1>Page creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('cms_page_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "page/new.html.twig", "/var/www/html/sym/app/Resources/views/page/new.html.twig");
    }
}
