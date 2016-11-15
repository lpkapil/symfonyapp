<?php

/* CustomCMSBundle:Default:index.html.twig */
class __TwigTemplate_8b6006ea6692c0c76c6878bb8a161cdbb546a034dfc207a2faf76c241acb6683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:Default:index.html.twig", 1);
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
        $__internal_ad930724d34a8dba9c0a4b18571021d26ece83ac454f7f53770649e673a81780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad930724d34a8dba9c0a4b18571021d26ece83ac454f7f53770649e673a81780->enter($__internal_ad930724d34a8dba9c0a4b18571021d26ece83ac454f7f53770649e673a81780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad930724d34a8dba9c0a4b18571021d26ece83ac454f7f53770649e673a81780->leave($__internal_ad930724d34a8dba9c0a4b18571021d26ece83ac454f7f53770649e673a81780_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_597536672ca3de6616832c84435fb45d2ce166d9aab48a615702c07d2c850dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597536672ca3de6616832c84435fb45d2ce166d9aab48a615702c07d2c850dfb->enter($__internal_597536672ca3de6616832c84435fb45d2ce166d9aab48a615702c07d2c850dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:Default:index.html.twig"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <h4><strong><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_cms_page_display", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["page"], "title", array())), "html", null, true);
            echo "</a></strong></h4>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-2\">
                        <a href=\"#\" class=\"thumbnail\">
                            <img src=\"http://placehold.it/260x180\" alt=\"\" class=\"img-responsive\">
                        </a>
                    </div>
                    <div class=\"col-sm-10\">      
                        <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["page"], "content", array()), 0, 275), "html", null, true);
            echo "
                            <a class=\"btn\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_cms_page_display", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-sm btn-default\">Read More</button></a></p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        <p></p>
                        <p>
                            <i class=\"glyphicon glyphicon-user\"></i>&nbsp;John
                            &nbsp;<i class=\"glyphicon glyphicon-calendar\"></i>&nbsp;Sept 16th, 2012
                            &nbsp;<i class=\"glyphicon glyphicon-tags\"></i>&nbsp;<a href=\"#\"><span class=\"label label-default\">Snipp</span></a> 
                            <a href=\"#\"><span class=\"label label-default\">Bootstrap</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_597536672ca3de6616832c84435fb45d2ce166d9aab48a615702c07d2c850dfb->leave($__internal_597536672ca3de6616832c84435fb45d2ce166d9aab48a615702c07d2c850dfb_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  66 => 19,  51 => 9,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    {% for page in pages %}
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <h4><strong><a href=\"{{ path('custom_cms_page_display', { id: page.id }) }}\">{{ page.title | capitalize }}</a></strong></h4>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-2\">
                        <a href=\"#\" class=\"thumbnail\">
                            <img src=\"http://placehold.it/260x180\" alt=\"\" class=\"img-responsive\">
                        </a>
                    </div>
                    <div class=\"col-sm-10\">      
                        <p>{{ page.content | slice(0,275) }}
                            <a class=\"btn\" href=\"{{ path('custom_cms_page_display', { id: page.id }) }}\"><button class=\"btn btn-sm btn-default\">Read More</button></a></p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        <p></p>
                        <p>
                            <i class=\"glyphicon glyphicon-user\"></i>&nbsp;John
                            &nbsp;<i class=\"glyphicon glyphicon-calendar\"></i>&nbsp;Sept 16th, 2012
                            &nbsp;<i class=\"glyphicon glyphicon-tags\"></i>&nbsp;<a href=\"#\"><span class=\"label label-default\">Snipp</span></a> 
                            <a href=\"#\"><span class=\"label label-default\">Bootstrap</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    {% endfor %}
{% endblock %}", "CustomCMSBundle:Default:index.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/Default/index.html.twig");
    }
}
