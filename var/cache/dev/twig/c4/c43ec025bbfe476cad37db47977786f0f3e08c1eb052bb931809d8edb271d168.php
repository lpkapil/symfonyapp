<?php

/* page/show.html.twig */
class __TwigTemplate_46dfe3774bdcc15a77cbec849cc6b1b591723106e974948e38988bd6af52512b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "page/show.html.twig", 1);
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
        $__internal_726af7501ce8fe1f64bf4c96c41f8ab20756e6ac3a7b14c80ed63bdd040e3c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726af7501ce8fe1f64bf4c96c41f8ab20756e6ac3a7b14c80ed63bdd040e3c89->enter($__internal_726af7501ce8fe1f64bf4c96c41f8ab20756e6ac3a7b14c80ed63bdd040e3c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_726af7501ce8fe1f64bf4c96c41f8ab20756e6ac3a7b14c80ed63bdd040e3c89->leave($__internal_726af7501ce8fe1f64bf4c96c41f8ab20756e6ac3a7b14c80ed63bdd040e3c89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_585880d14167fb4bafa076f479b54198e4be28e472265428629fdbe50acc5719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585880d14167fb4bafa076f479b54198e4be28e472265428629fdbe50acc5719->enter($__internal_585880d14167fb4bafa076f479b54198e4be28e472265428629fdbe50acc5719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page/show.html.twig"));

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
        
        $__internal_585880d14167fb4bafa076f479b54198e4be28e472265428629fdbe50acc5719->leave($__internal_585880d14167fb4bafa076f479b54198e4be28e472265428629fdbe50acc5719_prof);

    }

    public function getTemplateName()
    {
        return "page/show.html.twig";
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
", "page/show.html.twig", "/var/www/html/sym/app/Resources/views/page/show.html.twig");
    }
}
