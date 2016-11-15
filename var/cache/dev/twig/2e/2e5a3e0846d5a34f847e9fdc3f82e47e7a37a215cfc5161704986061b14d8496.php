<?php

/* CustomCMSBundle:page:show.html.twig */
class __TwigTemplate_cabe1d659b10180080a0906bf4232eb1457817edc2c12eee5763fc965303854f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:page:show.html.twig", 1);
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
        $__internal_d185e6fb1db41548743429ac3fb920cf82c30d1533fd30ccfa086942b751da38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d185e6fb1db41548743429ac3fb920cf82c30d1533fd30ccfa086942b751da38->enter($__internal_d185e6fb1db41548743429ac3fb920cf82c30d1533fd30ccfa086942b751da38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:page:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d185e6fb1db41548743429ac3fb920cf82c30d1533fd30ccfa086942b751da38->leave($__internal_d185e6fb1db41548743429ac3fb920cf82c30d1533fd30ccfa086942b751da38_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b09f2cbf056660696c1deca8b6d63b6a620090f55cd14faefcf3a4bd46fc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b09f2cbf056660696c1deca8b6d63b6a620090f55cd14faefcf3a4bd46fc11->enter($__internal_37b09f2cbf056660696c1deca8b6d63b6a620090f55cd14faefcf3a4bd46fc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:page:show.html.twig"));

        // line 4
        echo "    <h1>Page</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_37b09f2cbf056660696c1deca8b6d63b6a620090f55cd14faefcf3a4bd46fc11->leave($__internal_37b09f2cbf056660696c1deca8b6d63b6a620090f55cd14faefcf3a4bd46fc11_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:page:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Page</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ page.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ page.title }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ page.content }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cms_page_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('cms_page_edit', { 'id': page.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:page:show.html.twig", "/var/www/html/sym/src/Custom/CMSBundle/Resources/views/page/show.html.twig");
    }
}
