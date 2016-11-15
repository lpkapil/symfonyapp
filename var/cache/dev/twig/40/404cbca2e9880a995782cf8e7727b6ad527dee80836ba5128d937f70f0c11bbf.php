<?php

/* CustomCMSBundle:security:login.html.twig */
class __TwigTemplate_54b3fe6e3810eb15105ad9b7a6d1ef9376ce4b7efde69d9379e6ebd1862f2e28 extends Twig_Template
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
        $__internal_0d45cc27d1250b9f1752dc4d179f2024f374774fc83252788cff06bcedc46b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d45cc27d1250b9f1752dc4d179f2024f374774fc83252788cff06bcedc46b8f->enter($__internal_0d45cc27d1250b9f1752dc4d179f2024f374774fc83252788cff06bcedc46b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d45cc27d1250b9f1752dc4d179f2024f374774fc83252788cff06bcedc46b8f->leave($__internal_0d45cc27d1250b9f1752dc4d179f2024f374774fc83252788cff06bcedc46b8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f28adeceb6f4e3a97dd438f027d70b2fa4c7ac658e53771270350153b064e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f28adeceb6f4e3a97dd438f027d70b2fa4c7ac658e53771270350153b064e79->enter($__internal_9f28adeceb6f4e3a97dd438f027d70b2fa4c7ac658e53771270350153b064e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:security:login.html.twig"));

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
        
        $__internal_9f28adeceb6f4e3a97dd438f027d70b2fa4c7ac658e53771270350153b064e79->leave($__internal_9f28adeceb6f4e3a97dd438f027d70b2fa4c7ac658e53771270350153b064e79_prof);

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
{% endblock%}", "CustomCMSBundle:security:login.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/security/login.html.twig");
    }
}
