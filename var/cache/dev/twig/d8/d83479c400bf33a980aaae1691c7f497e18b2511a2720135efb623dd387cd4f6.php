<?php

/* CustomCMSBundle:security:login.html.twig */
class __TwigTemplate_34b48525146d5781a19349ce3a3338844511df302be8be67abd9d60bb867e3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CustomCMSBundle:security:login.html.twig", 1);
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
        $__internal_93c242d21e900031b8b64563cca268f89f2c251dec7a962a28f0a9a1bb420922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c242d21e900031b8b64563cca268f89f2c251dec7a962a28f0a9a1bb420922->enter($__internal_93c242d21e900031b8b64563cca268f89f2c251dec7a962a28f0a9a1bb420922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c242d21e900031b8b64563cca268f89f2c251dec7a962a28f0a9a1bb420922->leave($__internal_93c242d21e900031b8b64563cca268f89f2c251dec7a962a28f0a9a1bb420922_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c53d2be4a5207bdc5b287f06f120d181b77b904be3b8f80ff3115bccf2808c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c53d2be4a5207bdc5b287f06f120d181b77b904be3b8f80ff3115bccf2808c->enter($__internal_b2c53d2be4a5207bdc5b287f06f120d181b77b904be3b8f80ff3115bccf2808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:security:login.html.twig"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password:</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
    </form>
";
        
        $__internal_b2c53d2be4a5207bdc5b287f06f120d181b77b904be3b8f80ff3115bccf2808c->leave($__internal_b2c53d2be4a5207bdc5b287f06f120d181b77b904be3b8f80ff3115bccf2808c_prof);

    }

    public function getTemplateName()
    {
        return "CustomCMSBundle:security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"username\">Username:</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password:</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Login</button>
    </form>
{% endblock%}", "CustomCMSBundle:security:login.html.twig", "/var/www/html/sym/src/Custom/CMSBundle/Resources/views/security/login.html.twig");
    }
}
