<?php

/* user/index.html.twig */
class __TwigTemplate_68b0c9dfb85841669e4f361783299c4a895944707ef4459d2206623c61a58f1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_d1b413da1fe6819ba289953bb945e23a68f1297009615e1de8cdb7cc77e3e29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b413da1fe6819ba289953bb945e23a68f1297009615e1de8cdb7cc77e3e29d->enter($__internal_d1b413da1fe6819ba289953bb945e23a68f1297009615e1de8cdb7cc77e3e29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b413da1fe6819ba289953bb945e23a68f1297009615e1de8cdb7cc77e3e29d->leave($__internal_d1b413da1fe6819ba289953bb945e23a68f1297009615e1de8cdb7cc77e3e29d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04ebf34d7fb2b51307d7ff16be52ecbd98fc0ded4c42c3ebe01389b3089c92df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ebf34d7fb2b51307d7ff16be52ecbd98fc0ded4c42c3ebe01389b3089c92df->enter($__internal_04ebf34d7fb2b51307d7ff16be52ecbd98fc0ded4c42c3ebe01389b3089c92df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/index.html.twig"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "                <tr>
                    <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["user"], "password", array()), 0, 20), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">view</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_04ebf34d7fb2b51307d7ff16be52ecbd98fc0ded4c42c3ebe01389b3089c92df->leave($__internal_04ebf34d7fb2b51307d7ff16be52ecbd98fc0ded4c42c3ebe01389b3089c92df_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
                <tr>
                    <td><a href=\"{{ path('cms_user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                    <td>{{ user.username }}</td>
                    <td>{{ user.password | slice(0,20) }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('cms_user_show', { 'id': user.id }) }}\">view</a>
                            </li>
                            <li>
                                <a href=\"{{ path('cms_user_edit', { 'id': user.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('cms_user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/var/www/html/sym/app/Resources/views/user/index.html.twig");
    }
}
