<?php

/* base.html.twig */
class __TwigTemplate_a5ffa98feecbd8901013362afad40f9f772f66f9880e196721e0ba2949288d29 extends Twig_Template
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
        $__internal_6c1a2d2de5ac2d11c155939d324fde728a4466cf30fe22d45fbc7d433c6698d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1a2d2de5ac2d11c155939d324fde728a4466cf30fe22d45fbc7d433c6698d1->enter($__internal_6c1a2d2de5ac2d11c155939d324fde728a4466cf30fe22d45fbc7d433c6698d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                                <a class=\"navbar-brand\" href=\"#\">MyCMS</a>
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
                                <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                                    ";
        // line 36
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 37
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"> <span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li> 
                                    ";
        } else {
            // line 39
            echo "                                    <li><a href=\"";
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
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "</div>
</body>
</html>
";
        
        $__internal_6c1a2d2de5ac2d11c155939d324fde728a4466cf30fe22d45fbc7d433c6698d1->leave($__internal_6c1a2d2de5ac2d11c155939d324fde728a4466cf30fe22d45fbc7d433c6698d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a503e9b51189038e61c028ee33497d7d6b80adb2f53688845c7537212b95fe0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a503e9b51189038e61c028ee33497d7d6b80adb2f53688845c7537212b95fe0f->enter($__internal_a503e9b51189038e61c028ee33497d7d6b80adb2f53688845c7537212b95fe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_a503e9b51189038e61c028ee33497d7d6b80adb2f53688845c7537212b95fe0f->leave($__internal_a503e9b51189038e61c028ee33497d7d6b80adb2f53688845c7537212b95fe0f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcb48767b2132cb6c6a893d5d186c7a6cc2ce69f4c4a646c05992e616b9bc1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb48767b2132cb6c6a893d5d186c7a6cc2ce69f4c4a646c05992e616b9bc1f3->enter($__internal_dcb48767b2132cb6c6a893d5d186c7a6cc2ce69f4c4a646c05992e616b9bc1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <!-- Optional theme -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
        ";
        
        $__internal_dcb48767b2132cb6c6a893d5d186c7a6cc2ce69f4c4a646c05992e616b9bc1f3->leave($__internal_dcb48767b2132cb6c6a893d5d186c7a6cc2ce69f4c4a646c05992e616b9bc1f3_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_69f4288a6a5d055c5571f276718bb9f74f9df4fe70219e874c70153f40540f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f4288a6a5d055c5571f276718bb9f74f9df4fe70219e874c70153f40540f8d->enter($__internal_69f4288a6a5d055c5571f276718bb9f74f9df4fe70219e874c70153f40540f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_69f4288a6a5d055c5571f276718bb9f74f9df4fe70219e874c70153f40540f8d->leave($__internal_69f4288a6a5d055c5571f276718bb9f74f9df4fe70219e874c70153f40540f8d_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54cd594d588840fe325a88866264eae4703de540f27b76e974caa5bddbe13f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cd594d588840fe325a88866264eae4703de540f27b76e974caa5bddbe13f15->enter($__internal_54cd594d588840fe325a88866264eae4703de540f27b76e974caa5bddbe13f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_54cd594d588840fe325a88866264eae4703de540f27b76e974caa5bddbe13f15->leave($__internal_54cd594d588840fe325a88866264eae4703de540f27b76e974caa5bddbe13f15_prof);

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
        return array (  166 => 48,  155 => 47,  142 => 7,  136 => 6,  124 => 5,  114 => 49,  111 => 48,  109 => 47,  101 => 41,  95 => 39,  89 => 37,  87 => 36,  81 => 32,  75 => 30,  70 => 28,  66 => 27,  62 => 26,  58 => 25,  54 => 24,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('styles/main.css') }}\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <!-- Optional theme -->
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
                                <a class=\"navbar-brand\" href=\"#\">MyCMS</a>
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
                                <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
                                    <li><a href=\"{{ path('logout') }}\"> <span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li> 
                                    {% else %}
                                    <li><a href=\"{{ path('login') }}\"> <span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                                    {% endif %}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</div>
</body>
</html>
", "base.html.twig", "/var/www/html/sym/app/Resources/views/base.html.twig");
    }
}
