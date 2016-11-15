<?php

/* CustomCMSBundle:category:show.html.twig */
class __TwigTemplate_917ce3ee5e0f1a384ed95438152f84378ef7a24563152c6ee5d3198ab8472f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:category:show.html.twig", 1);
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
        $__internal_0a236cfd31ed2aed12555c64c9ccb2b8e42263fb2e6254bb64486ce6967fba57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a236cfd31ed2aed12555c64c9ccb2b8e42263fb2e6254bb64486ce6967fba57->enter($__internal_0a236cfd31ed2aed12555c64c9ccb2b8e42263fb2e6254bb64486ce6967fba57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a236cfd31ed2aed12555c64c9ccb2b8e42263fb2e6254bb64486ce6967fba57->leave($__internal_0a236cfd31ed2aed12555c64c9ccb2b8e42263fb2e6254bb64486ce6967fba57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d8a7c6cc5fef68fc892205f5ce697962b1c9f3f13fbf2713f56ac42289b5509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8a7c6cc5fef68fc892205f5ce697962b1c9f3f13fbf2713f56ac42289b5509->enter($__internal_4d8a7c6cc5fef68fc892205f5ce697962b1c9f3f13fbf2713f56ac42289b5509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:category:show.html.twig"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4d8a7c6cc5fef68fc892205f5ce697962b1c9f3f13fbf2713f56ac42289b5509->leave($__internal_4d8a7c6cc5fef68fc892205f5ce697962b1c9f3f13fbf2713f56ac42289b5509_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ category.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cms_category_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('cms_category_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:category:show.html.twig", "/var/www/html/sym/src/Custom/CMSBundle/Resources/views/category/show.html.twig");
    }
}
