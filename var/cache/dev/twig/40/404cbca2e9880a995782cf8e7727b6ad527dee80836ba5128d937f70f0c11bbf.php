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
        $__internal_f17e297c59e9397967dc6e15d9fa18f15d9305fe5ae993b1602b2d719753510d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17e297c59e9397967dc6e15d9fa18f15d9305fe5ae993b1602b2d719753510d->enter($__internal_f17e297c59e9397967dc6e15d9fa18f15d9305fe5ae993b1602b2d719753510d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CustomCMSBundle:security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f17e297c59e9397967dc6e15d9fa18f15d9305fe5ae993b1602b2d719753510d->leave($__internal_f17e297c59e9397967dc6e15d9fa18f15d9305fe5ae993b1602b2d719753510d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ed5dca867299cbadd034634cc6a1b9dc0330ba26affa885722cfeecec0c0ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed5dca867299cbadd034634cc6a1b9dc0330ba26affa885722cfeecec0c0ea2->enter($__internal_6ed5dca867299cbadd034634cc6a1b9dc0330ba26affa885722cfeecec0c0ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CustomCMSBundle:security:login.html.twig"));

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
    <div class=\"col-md-6\">
        <form action=\"";
        // line 9
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
    </div>
";
        
        $__internal_6ed5dca867299cbadd034634cc6a1b9dc0330ba26affa885722cfeecec0c0ea2->leave($__internal_6ed5dca867299cbadd034634cc6a1b9dc0330ba26affa885722cfeecec0c0ea2_prof);

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
        return array (  53 => 9,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    <div class=\"col-md-6\">
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
    </div>
{% endblock%}", "CustomCMSBundle:security:login.html.twig", "/var/www/html/symfonyapp/src/Custom/CMSBundle/Resources/views/security/login.html.twig");
    }
}
