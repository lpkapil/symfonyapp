<?php

/* CustomCMSBundle:category:new.html.twig */
class __TwigTemplate_7c804f4effb53409f424979b3ea5fb5895fdeddb36807c49e5c54176a973eff2 extends Twig_Template
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
        $__internal_1e4a0dd8126fbed039d16c02931a91827a053529c513ffba29fa5632078f4a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4a0dd8126fbed039d16c02931a91827a053529c513ffba29fa5632078f4a37->enter($__internal_1e4a0dd8126fbed039d16c02931a91827a053529c513ffba29fa5632078f4a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4a0dd8126fbed039d16c02931a91827a053529c513ffba29fa5632078f4a37->leave($__internal_1e4a0dd8126fbed039d16c02931a91827a053529c513ffba29fa5632078f4a37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e4d0331e782e2f7056da7ad2d483210bbac040f11dafb29694755bcad04a2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4d0331e782e2f7056da7ad2d483210bbac040f11dafb29694755bcad04a2eb->enter($__internal_7e4d0331e782e2f7056da7ad2d483210bbac040f11dafb29694755bcad04a2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:category:new.html.twig"));

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
        
        $__internal_7e4d0331e782e2f7056da7ad2d483210bbac040f11dafb29694755bcad04a2eb->leave($__internal_7e4d0331e782e2f7056da7ad2d483210bbac040f11dafb29694755bcad04a2eb_prof);

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
", "CustomCMSBundle:category:new.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/category/new.html.twig");
    }
}
