<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dccfc62a1ee158d8b42e5076a496fd447ad7364e1f3635d5cb8eafd4a3372944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29b197e2fe0c366780795153e2f7b81cdd5561f5e1d2f5db02ee8f0f6c638038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b197e2fe0c366780795153e2f7b81cdd5561f5e1d2f5db02ee8f0f6c638038->enter($__internal_29b197e2fe0c366780795153e2f7b81cdd5561f5e1d2f5db02ee8f0f6c638038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29b197e2fe0c366780795153e2f7b81cdd5561f5e1d2f5db02ee8f0f6c638038->leave($__internal_29b197e2fe0c366780795153e2f7b81cdd5561f5e1d2f5db02ee8f0f6c638038_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd50229d9b1140785a3d255da651b346515df720f85c158d2fcd95528d57bb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd50229d9b1140785a3d255da651b346515df720f85c158d2fcd95528d57bb9d->enter($__internal_fd50229d9b1140785a3d255da651b346515df720f85c158d2fcd95528d57bb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_fd50229d9b1140785a3d255da651b346515df720f85c158d2fcd95528d57bb9d->leave($__internal_fd50229d9b1140785a3d255da651b346515df720f85c158d2fcd95528d57bb9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1edd41018887491d072f48c12d169e46d7d40584d965af86681bc2bb5aef22e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edd41018887491d072f48c12d169e46d7d40584d965af86681bc2bb5aef22e6->enter($__internal_1edd41018887491d072f48c12d169e46d7d40584d965af86681bc2bb5aef22e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1edd41018887491d072f48c12d169e46d7d40584d965af86681bc2bb5aef22e6->leave($__internal_1edd41018887491d072f48c12d169e46d7d40584d965af86681bc2bb5aef22e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b3e04ec7d4de6a34c04e1aa9fbd082e5f08023d323d43300597f96150b850fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3e04ec7d4de6a34c04e1aa9fbd082e5f08023d323d43300597f96150b850fe->enter($__internal_0b3e04ec7d4de6a34c04e1aa9fbd082e5f08023d323d43300597f96150b850fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0b3e04ec7d4de6a34c04e1aa9fbd082e5f08023d323d43300597f96150b850fe->leave($__internal_0b3e04ec7d4de6a34c04e1aa9fbd082e5f08023d323d43300597f96150b850fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/sym/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
