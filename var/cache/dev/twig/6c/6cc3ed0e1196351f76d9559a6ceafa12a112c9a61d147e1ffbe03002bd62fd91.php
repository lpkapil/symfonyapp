<?php

/* CustomCMSBundle:category:index.html.twig */
class __TwigTemplate_74f5b34f580d9d942e674a896c7ec9a48bd4889e11940cc3f5575d0d99975205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:category:index.html.twig", 1);
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
        $__internal_4d1590dbf318b51b36fae71c0dba5253b25e9c568001e8d32b1a3f35effac694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1590dbf318b51b36fae71c0dba5253b25e9c568001e8d32b1a3f35effac694->enter($__internal_4d1590dbf318b51b36fae71c0dba5253b25e9c568001e8d32b1a3f35effac694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d1590dbf318b51b36fae71c0dba5253b25e9c568001e8d32b1a3f35effac694->leave($__internal_4d1590dbf318b51b36fae71c0dba5253b25e9c568001e8d32b1a3f35effac694_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5e34e84d737966b85121d942cc5db437903db094b531ea3cb5f53bf650b82de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e34e84d737966b85121d942cc5db437903db094b531ea3cb5f53bf650b82de->enter($__internal_c5e34e84d737966b85121d942cc5db437903db094b531ea3cb5f53bf650b82de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:category:index.html.twig"));

        // line 4
        echo "    <div class=\"page-header\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_new");
        echo "\" class=\"btn btn-sm btn-primary pull-right\"><span class=\"glyphicon glyphicon-plus\"></span> Add New</a>   
        <h2>Categories</h2>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th class=\"text-right\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                    <tr>
                        <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                        <td class=\"pull-right\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"View\"><button class=\"btn btn-primary btn-xs\" data-title=\"View\" data-toggle=\"modal\" data-target=\"#view\" ><span class=\"glyphicon glyphicon-eye-open\"></span></button></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_c5e34e84d737966b85121d942cc5db437903db094b531ea3cb5f53bf650b82de->leave($__internal_c5e34e84d737966b85121d942cc5db437903db094b531ea3cb5f53bf650b82de_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  77 => 23,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
        <a href=\"{{ path('cms_category_new') }}\" class=\"btn btn-sm btn-primary pull-right\"><span class=\"glyphicon glyphicon-plus\"></span> Add New</a>   
        <h2>Categories</h2>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th class=\"text-right\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for category in categories %}
                    <tr>
                        <td><a href=\"{{ path('cms_category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                        <td>{{ category.name }}</td>
                        <td class=\"pull-right\"><a href=\"{{ path('cms_category_edit', { 'id': category.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></a> <a href=\"{{ path('cms_category_show', { 'id': category.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"View\"><button class=\"btn btn-primary btn-xs\" data-title=\"View\" data-toggle=\"modal\" data-target=\"#view\" ><span class=\"glyphicon glyphicon-eye-open\"></span></button></a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}


", "CustomCMSBundle:category:index.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/category/index.html.twig");
    }
}
