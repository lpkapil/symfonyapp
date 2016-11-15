<?php

/* page/index.html.twig */
class __TwigTemplate_24fd94eacf236491e93a175cf8e4756f7cd86e43915982cab6aadb4a8b56506a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
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
        $__internal_10a2f5369ffe124aab2019744c09deed1fd7391b11292316fb2854bfe5c54b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a2f5369ffe124aab2019744c09deed1fd7391b11292316fb2854bfe5c54b8a->enter($__internal_10a2f5369ffe124aab2019744c09deed1fd7391b11292316fb2854bfe5c54b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a2f5369ffe124aab2019744c09deed1fd7391b11292316fb2854bfe5c54b8a->leave($__internal_10a2f5369ffe124aab2019744c09deed1fd7391b11292316fb2854bfe5c54b8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a91688aa9c2cb055611d792c945bbf868322d3e072811685a73cff93f81c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a91688aa9c2cb055611d792c945bbf868322d3e072811685a73cff93f81c40->enter($__internal_65a91688aa9c2cb055611d792c945bbf868322d3e072811685a73cff93f81c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page/index.html.twig"));

        // line 4
        echo "    <h1>Pages list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "content", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_show", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_edit", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_new");
        echo "\">Create a new page</a>
        </li>
    </ul>
";
        
        $__internal_65a91688aa9c2cb055611d792c945bbf868322d3e072811685a73cff93f81c40->leave($__internal_65a91688aa9c2cb055611d792c945bbf868322d3e072811685a73cff93f81c40_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Pages list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for page in pages %}
            <tr>
                <td><a href=\"{{ path('cms_page_show', { 'id': page.id }) }}\">{{ page.id }}</a></td>
                <td>{{ page.title }}</td>
                <td>{{ page.content }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('cms_page_show', { 'id': page.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('cms_page_edit', { 'id': page.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cms_page_new') }}\">Create a new page</a>
        </li>
    </ul>
{% endblock %}
", "page/index.html.twig", "/var/www/html/sym/app/Resources/views/page/index.html.twig");
    }
}
