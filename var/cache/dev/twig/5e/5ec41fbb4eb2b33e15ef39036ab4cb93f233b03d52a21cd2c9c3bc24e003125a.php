<?php

/* CustomCMSBundle:user:index.html.twig */
class __TwigTemplate_72a5a75b953c6e8e368a9a1dadc8ba192adf0d620cddfe41dd5ee5c132d74a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:user:index.html.twig", 1);
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
        $__internal_e34833ecbc37b9f071d8cf0ddd20617d1e197a32070a9d5f1c9d5baf5dc027d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34833ecbc37b9f071d8cf0ddd20617d1e197a32070a9d5f1c9d5baf5dc027d2->enter($__internal_e34833ecbc37b9f071d8cf0ddd20617d1e197a32070a9d5f1c9d5baf5dc027d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34833ecbc37b9f071d8cf0ddd20617d1e197a32070a9d5f1c9d5baf5dc027d2->leave($__internal_e34833ecbc37b9f071d8cf0ddd20617d1e197a32070a9d5f1c9d5baf5dc027d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c8eba1fcc4eda9199a6423a4fc4486c897fa59adbfd30d293a1892408789f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8eba1fcc4eda9199a6423a4fc4486c897fa59adbfd30d293a1892408789f4f->enter($__internal_4c8eba1fcc4eda9199a6423a4fc4486c897fa59adbfd30d293a1892408789f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:user:index.html.twig"));

        // line 4
        echo "    <div class=\"page-header\">
        <h2>Users</h2>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th class=\"text-right\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "                    <tr>
                        <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["user"], "password", array()), 0, 20), "html", null, true);
            echo "</td>
                        <td class=\"pull-right\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"View\"><button class=\"btn btn-primary btn-xs\" data-title=\"View\" data-toggle=\"modal\" data-target=\"#view\" ><span class=\"glyphicon glyphicon-eye-open\"></span></button></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tbody>
        </table>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_4c8eba1fcc4eda9199a6423a4fc4486c897fa59adbfd30d293a1892408789f4f->leave($__internal_4c8eba1fcc4eda9199a6423a4fc4486c897fa59adbfd30d293a1892408789f4f_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  89 => 27,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
        <h2>Users</h2>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th class=\"text-right\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td><a href=\"{{ path('cms_user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                        <td>{{ user.username }}</td>
                        <td>{{ user.password | slice(0,20) }}</td>
                        <td class=\"pull-right\"><a href=\"{{ path('cms_user_edit', { 'id': user.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\"><button class=\"btn btn-primary btn-xs\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\" ><span class=\"glyphicon glyphicon-pencil\"></span></button></a> <a href=\"{{ path('cms_user_show', { 'id': user.id }) }}\" data-placement=\"top\" data-toggle=\"tooltip\" title=\"View\"><button class=\"btn btn-primary btn-xs\" data-title=\"View\" data-toggle=\"modal\" data-target=\"#view\" ><span class=\"glyphicon glyphicon-eye-open\"></span></button></a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <ul>
        <li>
            <a href=\"{{ path('cms_user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "CustomCMSBundle:user:index.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/user/index.html.twig");
    }
}
