<?php

/* CustomCMSBundle:page:index.html.twig */
class __TwigTemplate_af5b1701494895d1b61caed3e0ec268aba1e70830de649e07ac93b251fe0aab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:page:index.html.twig", 1);
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
        $__internal_aebc6195385b727c8f443c8bdd0650002573a79dd3acc67fc6c2d345497033c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebc6195385b727c8f443c8bdd0650002573a79dd3acc67fc6c2d345497033c9->enter($__internal_aebc6195385b727c8f443c8bdd0650002573a79dd3acc67fc6c2d345497033c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aebc6195385b727c8f443c8bdd0650002573a79dd3acc67fc6c2d345497033c9->leave($__internal_aebc6195385b727c8f443c8bdd0650002573a79dd3acc67fc6c2d345497033c9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4cf3b3fc6b68f61534a4b110d071b104a728b65393c17a2daed16eeff989e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cf3b3fc6b68f61534a4b110d071b104a728b65393c17a2daed16eeff989e1b->enter($__internal_b4cf3b3fc6b68f61534a4b110d071b104a728b65393c17a2daed16eeff989e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:page:index.html.twig"));

        // line 4
        echo "    <div class=\"page-header\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_new");
        echo "\" class=\"btn btn-sm btn-primary pull-right\"><span class=\"glyphicon glyphicon-plus\"></span> Add New</a>   
        <h2>Pages</h2>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th class=\"text-right\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "                    <tr>
                        <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["page"], "content", array()), 0, 150), "html", null, true);
            echo "</td>
                        <td class=\"pull-right\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"View\"><button class=\"btn btn-primary btn-xs\" data-title=\"View\" data-toggle=\"modal\" data-target=\"#view\" ><span class=\"glyphicon glyphicon-eye-open\"></span></button></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_b4cf3b3fc6b68f61534a4b110d071b104a728b65393c17a2daed16eeff989e1b->leave($__internal_b4cf3b3fc6b68f61534a4b110d071b104a728b65393c17a2daed16eeff989e1b_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  82 => 25,  78 => 24,  74 => 23,  68 => 22,  65 => 21,  61 => 20,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
        <a href=\"{{ path('cms_page_new') }}\" class=\"btn btn-sm btn-primary pull-right\"><span class=\"glyphicon glyphicon-plus\"></span> Add New</a>   
        <h2>Pages</h2>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th class=\"text-right\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for page in pages %}
                    <tr>
                        <td><a href=\"{{ path('cms_page_show', { 'id': page.id }) }}\">{{ page.id }}</a></td>
                        <td>{{ page.title }}</td>
                        <td>{{ page.content | slice(0,150) }}</td>
                        <td class=\"pull-right\"><a href=\"{{ path('cms_page_edit', { 'id': page.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></a> <a href=\"{{ path('cms_page_show', { 'id': page.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"View\"><button class=\"btn btn-primary btn-xs\" data-title=\"View\" data-toggle=\"modal\" data-target=\"#view\" ><span class=\"glyphicon glyphicon-eye-open\"></span></button></a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "CustomCMSBundle:page:index.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/page/index.html.twig");
    }
}
