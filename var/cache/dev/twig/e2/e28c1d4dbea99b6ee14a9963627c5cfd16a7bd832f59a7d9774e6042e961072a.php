<?php

/* base.html.twig */
class __TwigTemplate_d66ba988e89ae5b81c94e819b908abf36bf8535432e6226ede99f5b6393d2591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_569ded59125984dfa2d443b71bb26fb8d589f80d6ab5780f9d3b5c6f905f82e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569ded59125984dfa2d443b71bb26fb8d589f80d6ab5780f9d3b5c6f905f82e7->enter($__internal_569ded59125984dfa2d443b71bb26fb8d589f80d6ab5780f9d3b5c6f905f82e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"container\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <nav class=\"navbar navbar-inverse\">
                        <div class=\"container-fluid\">
                            <div class=\"navbar-header\">
                                <a class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_cms_homepage");
        echo "\">MyCMS</a>
                            </div>
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_cms_homepage");
        echo "\">Home</a></li> 
                                    ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo "                                 
                                    <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
            echo "\">Pages</a></li>
                                    <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_index");
            echo "\">Categories</a></li>
                                    <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_index");
            echo "\">Users</a></li>                                
                                    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 30
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
            echo "\">Pages</a></li> 
                                    ";
        }
        // line 32
        echo "
                            </ul>
                            <ul class=\"nav navbar-nav navbar-right\">
                                ";
        // line 35
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 36
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"> <span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li> 
                                    ";
        } else {
            // line 38
            echo "                                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                                    <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"> <span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                                    ";
        }
        // line 41
        echo "                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </div>
</body>
</html>
";
        
        $__internal_569ded59125984dfa2d443b71bb26fb8d589f80d6ab5780f9d3b5c6f905f82e7->leave($__internal_569ded59125984dfa2d443b71bb26fb8d589f80d6ab5780f9d3b5c6f905f82e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_317c153fd04e03c7db6f81137667cabcb8ff0f1178f8efaed566b901afdb6ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317c153fd04e03c7db6f81137667cabcb8ff0f1178f8efaed566b901afdb6ac8->enter($__internal_317c153fd04e03c7db6f81137667cabcb8ff0f1178f8efaed566b901afdb6ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "MyCMS ";
        
        $__internal_317c153fd04e03c7db6f81137667cabcb8ff0f1178f8efaed566b901afdb6ac8->leave($__internal_317c153fd04e03c7db6f81137667cabcb8ff0f1178f8efaed566b901afdb6ac8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_400e6b802aeee46cfb62d2d38424c1e6dd9d979a3d4b7004b20b7eea35961be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400e6b802aeee46cfb62d2d38424c1e6dd9d979a3d4b7004b20b7eea35961be7->enter($__internal_400e6b802aeee46cfb62d2d38424c1e6dd9d979a3d4b7004b20b7eea35961be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        ";
        
        $__internal_400e6b802aeee46cfb62d2d38424c1e6dd9d979a3d4b7004b20b7eea35961be7->leave($__internal_400e6b802aeee46cfb62d2d38424c1e6dd9d979a3d4b7004b20b7eea35961be7_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f87c35cfd95f36311a2101b8ae463ab922da7efccab38ab4b3b81de675946a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f87c35cfd95f36311a2101b8ae463ab922da7efccab38ab4b3b81de675946a7->enter($__internal_7f87c35cfd95f36311a2101b8ae463ab922da7efccab38ab4b3b81de675946a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_7f87c35cfd95f36311a2101b8ae463ab922da7efccab38ab4b3b81de675946a7->leave($__internal_7f87c35cfd95f36311a2101b8ae463ab922da7efccab38ab4b3b81de675946a7_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eda4f697dda7b94598bd6bb39b5146660f3e667347399647ca3a892c60b36840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda4f697dda7b94598bd6bb39b5146660f3e667347399647ca3a892c60b36840->enter($__internal_eda4f697dda7b94598bd6bb39b5146660f3e667347399647ca3a892c60b36840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 49
        echo "            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_eda4f697dda7b94598bd6bb39b5146660f3e667347399647ca3a892c60b36840->leave($__internal_eda4f697dda7b94598bd6bb39b5146660f3e667347399647ca3a892c60b36840_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 49,  173 => 48,  162 => 47,  151 => 8,  146 => 7,  140 => 6,  128 => 5,  118 => 51,  115 => 48,  113 => 47,  105 => 41,  100 => 39,  97 => 38,  91 => 36,  89 => 35,  84 => 32,  78 => 30,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  51 => 21,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}MyCMS {% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('styles/main.css') }}\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('styles/flexslider.css') }}\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"container\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <nav class=\"navbar navbar-inverse\">
                        <div class=\"container-fluid\">
                            <div class=\"navbar-header\">
                                <a class=\"navbar-brand\" href=\"{{ path('custom_cms_homepage') }}\">MyCMS</a>
                            </div>
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"{{ path('custom_cms_homepage') }}\">Home</a></li> 
                                    {% if is_granted('ROLE_ADMIN') %}                                 
                                    <li><a href=\"{{ path('cms_page_index') }}\">Pages</a></li>
                                    <li><a href=\"{{ path('cms_category_index') }}\">Categories</a></li>
                                    <li><a href=\"{{ path('cms_user_index') }}\">Users</a></li>                                
                                    {% elseif is_granted('ROLE_USER') %}
                                    <li><a href=\"{{ path('cms_page_index') }}\">Pages</a></li> 
                                    {% endif %}

                            </ul>
                            <ul class=\"nav navbar-nav navbar-right\">
                                {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
                                    <li><a href=\"{{ path('logout') }}\"> <span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li> 
                                    {% else %}
                                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                                    <li><a href=\"{{ path('login') }}\"> <span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                                    {% endif %}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </div>
</body>
</html>
", "base.html.twig", "/var/www/html/symfonyapp/app/Resources/views/base.html.twig");
    }
}
