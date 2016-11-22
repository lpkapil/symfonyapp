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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6314c5e7fddc49d736e7f4cbf458c4c94e5016a0ba616e50a59da98ab598881f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6314c5e7fddc49d736e7f4cbf458c4c94e5016a0ba616e50a59da98ab598881f->enter($__internal_6314c5e7fddc49d736e7f4cbf458c4c94e5016a0ba616e50a59da98ab598881f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6314c5e7fddc49d736e7f4cbf458c4c94e5016a0ba616e50a59da98ab598881f->leave($__internal_6314c5e7fddc49d736e7f4cbf458c4c94e5016a0ba616e50a59da98ab598881f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_748fa870cf7abd052782bd3993ece853796ea184f074b0184e4f13dd668604da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748fa870cf7abd052782bd3993ece853796ea184f074b0184e4f13dd668604da->enter($__internal_748fa870cf7abd052782bd3993ece853796ea184f074b0184e4f13dd668604da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:page:index.html.twig"));

        // line 4
        echo "    <div class=\"page-header\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_new");
        echo "\" class=\"btn btn-sm btn-primary pull-right add_page\"><span class=\"glyphicon glyphicon-plus\"></span> Add New</a>   
        <h2>Pages</h2>
    </div>

    <div class=\"table-responsive\">
        <table id=\"pagelistings\" class=\"table table-striped table-hover\">
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
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</a></td>
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
        
        $__internal_748fa870cf7abd052782bd3993ece853796ea184f074b0184e4f13dd668604da->leave($__internal_748fa870cf7abd052782bd3993ece853796ea184f074b0184e4f13dd668604da_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b948d34b0c6c9cdf457ffff9a6f8cb0cbb0603ff440417a965aca3253665077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b948d34b0c6c9cdf457ffff9a6f8cb0cbb0603ff440417a965aca3253665077->enter($__internal_6b948d34b0c6c9cdf457ffff9a6f8cb0cbb0603ff440417a965aca3253665077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:page:index.html.twig"));

        // line 33
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js\" type=\"text/javascript\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(function () {

            //Test Add page Ajax request
            \$('.add_page_button').click(function (\$e) {

                //Prevent Default href redirect
                \$e.preventDefault();
                var request = \$.ajax({
                    url: \"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_new");
        echo "\",
                    method: \"POST\",
                    dataType: \"JSON\"
                });
                request.done(function (response) {
                    console.log(response.name);
                });
            });
            //Adding Datatables for page listings/sortings
            \$(document).ready(function () {
                \$('#pagelistings').DataTable(
                        {
                            \"iDisplayLength\": 5,
                            \"paging\": true, // paging enable/disable
                            \"ordering\": true, // ordering enable/disable
                            \"searching\": true, // search box enable/disable
                            \"info\": true, // Showing 1 to 10 of 63 entries text enable/ disable
                            \"lengthMenu\": [[5, 10, 25, 50, -1], [5, 10, 25, 50, \"All\"]], // Show number of entries in table, -1 or All means all records
                            \"processing\": true, // Show processing loader if takes time 
                            \"pageLength\": 5, // data rows per page
                            \"columnDefs\": [
                                {
                                    \"targets\": 2,
                                    \"orderable\": false
                                },
                                {
                                    \"targets\": 3,
                                    \"orderable\": false
                                }
                            ],
                            \"sPaginationType\": \"full_numbers\"
                        });
            });
        }('jQuery'));
    </script>
";
        
        $__internal_6b948d34b0c6c9cdf457ffff9a6f8cb0cbb0603ff440417a965aca3253665077->leave($__internal_6b948d34b0c6c9cdf457ffff9a6f8cb0cbb0603ff440417a965aca3253665077_prof);

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
        return array (  124 => 45,  110 => 33,  104 => 32,  94 => 28,  83 => 25,  79 => 24,  73 => 23,  69 => 22,  66 => 21,  62 => 20,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
        <a href=\"{{ path('cms_page_new') }}\" class=\"btn btn-sm btn-primary pull-right add_page\"><span class=\"glyphicon glyphicon-plus\"></span> Add New</a>   
        <h2>Pages</h2>
    </div>

    <div class=\"table-responsive\">
        <table id=\"pagelistings\" class=\"table table-striped table-hover\">
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
                        <td>{{ page.id }}</td>
                        <td><a href=\"{{ path('cms_page_edit', { 'id': page.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\">{{ page.title }}</a></td>
                        <td>{{ page.content | slice(0,150) }}</td>
                        <td class=\"pull-right\"><a href=\"{{ path('cms_page_edit', { 'id': page.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></a> <a href=\"{{ path('cms_page_show', { 'id': page.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"View\"><button class=\"btn btn-primary btn-xs\" data-title=\"View\" data-toggle=\"modal\" data-target=\"#view\" ><span class=\"glyphicon glyphicon-eye-open\"></span></button></a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js\" type=\"text/javascript\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(function () {

            //Test Add page Ajax request
            \$('.add_page_button').click(function (\$e) {

                //Prevent Default href redirect
                \$e.preventDefault();
                var request = \$.ajax({
                    url: \"{{ path('cms_page_new') }}\",
                    method: \"POST\",
                    dataType: \"JSON\"
                });
                request.done(function (response) {
                    console.log(response.name);
                });
            });
            //Adding Datatables for page listings/sortings
            \$(document).ready(function () {
                \$('#pagelistings').DataTable(
                        {
                            \"iDisplayLength\": 5,
                            \"paging\": true, // paging enable/disable
                            \"ordering\": true, // ordering enable/disable
                            \"searching\": true, // search box enable/disable
                            \"info\": true, // Showing 1 to 10 of 63 entries text enable/ disable
                            \"lengthMenu\": [[5, 10, 25, 50, -1], [5, 10, 25, 50, \"All\"]], // Show number of entries in table, -1 or All means all records
                            \"processing\": true, // Show processing loader if takes time 
                            \"pageLength\": 5, // data rows per page
                            \"columnDefs\": [
                                {
                                    \"targets\": 2,
                                    \"orderable\": false
                                },
                                {
                                    \"targets\": 3,
                                    \"orderable\": false
                                }
                            ],
                            \"sPaginationType\": \"full_numbers\"
                        });
            });
        }('jQuery'));
    </script>
{% endblock %}
", "CustomCMSBundle:page:index.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/page/index.html.twig");
    }
}
