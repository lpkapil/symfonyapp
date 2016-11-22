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
        $__internal_3856828010ae1d64c01c27bac6b78bcd564d453c6c68b0047d6b0c02d8d72bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3856828010ae1d64c01c27bac6b78bcd564d453c6c68b0047d6b0c02d8d72bfa->enter($__internal_3856828010ae1d64c01c27bac6b78bcd564d453c6c68b0047d6b0c02d8d72bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <div class=\"modal fade\" id=\"loginmodal\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Login</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"";
        // line 24
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
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</button>
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-lock\"></span> Forget?</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"modal fade\" id=\"registermodal\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Sign Up</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"username\">Username:</label>
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\">Password:</label>
                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\">Repeat Password:</label>
                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-user\"></span> Register</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>                        
        <div id=\"container\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav class=\"navbar navbar-inverse\">
                        <div class=\"container-fluid\">
                            <div class=\"navbar-header\">
                                <a class=\"navbar-brand\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_cms_homepage");
        echo "\">MyCMS</a>
                            </div>
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("custom_cms_homepage");
        echo "\">Home</a></li> 
                                    ";
        // line 81
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            echo "                                 
                                    <li><a href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
            echo "\">Pages</a></li>
                                    <li><a href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_category_index");
            echo "\">Categories</a></li>
                                    <li><a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_user_index");
            echo "\">Users</a></li>                                
                                    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 86
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cms_page_index");
            echo "\">Pages</a></li> 
                                    ";
        }
        // line 88
        echo "
                            </ul>
                            <ul class=\"nav navbar-nav navbar-right\">
                                ";
        // line 91
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER"))) {
            // line 92
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"> <span class=\"glyphicon glyphicon-log-in\"></span> Logout</a></li> 
                                    ";
        } else {
            // line 94
            echo "                                    <li><a href=\"\" data-toggle=\"modal\" data-target=\"#registermodal\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                                    <li><a href=\"\" data-toggle=\"modal\" data-target=\"#loginmodal\"> <span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                                    ";
        }
        // line 97
        echo "                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "    </div>
</body>
</html>
";
        
        $__internal_3856828010ae1d64c01c27bac6b78bcd564d453c6c68b0047d6b0c02d8d72bfa->leave($__internal_3856828010ae1d64c01c27bac6b78bcd564d453c6c68b0047d6b0c02d8d72bfa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dce2a450ee55eb717eca5635d79e16c00747bc81f974a3411f1fb69db90fcb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce2a450ee55eb717eca5635d79e16c00747bc81f974a3411f1fb69db90fcb14->enter($__internal_dce2a450ee55eb717eca5635d79e16c00747bc81f974a3411f1fb69db90fcb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "MyCMS ";
        
        $__internal_dce2a450ee55eb717eca5635d79e16c00747bc81f974a3411f1fb69db90fcb14->leave($__internal_dce2a450ee55eb717eca5635d79e16c00747bc81f974a3411f1fb69db90fcb14_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1838d8d259338913e3cd4d29117a52dcc4f7a91b6ed708273e2d3ea210b94b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1838d8d259338913e3cd4d29117a52dcc4f7a91b6ed708273e2d3ea210b94b9->enter($__internal_e1838d8d259338913e3cd4d29117a52dcc4f7a91b6ed708273e2d3ea210b94b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/jquery.dataTables.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
        
        $__internal_e1838d8d259338913e3cd4d29117a52dcc4f7a91b6ed708273e2d3ea210b94b9->leave($__internal_e1838d8d259338913e3cd4d29117a52dcc4f7a91b6ed708273e2d3ea210b94b9_prof);

    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4f4001a6002245d1efb0652880bac2432114b68056d6bd31d41eff0ba4f5516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f4001a6002245d1efb0652880bac2432114b68056d6bd31d41eff0ba4f5516->enter($__internal_d4f4001a6002245d1efb0652880bac2432114b68056d6bd31d41eff0ba4f5516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d4f4001a6002245d1efb0652880bac2432114b68056d6bd31d41eff0ba4f5516->leave($__internal_d4f4001a6002245d1efb0652880bac2432114b68056d6bd31d41eff0ba4f5516_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cda997933ddbb79c422cfb7e0eb08ba7d6b5605dd6c29f3a9042fc2e3d5bee06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda997933ddbb79c422cfb7e0eb08ba7d6b5605dd6c29f3a9042fc2e3d5bee06->enter($__internal_cda997933ddbb79c422cfb7e0eb08ba7d6b5605dd6c29f3a9042fc2e3d5bee06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        // line 105
        echo "            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js\" type=\"text/javascript\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        ";
        
        $__internal_cda997933ddbb79c422cfb7e0eb08ba7d6b5605dd6c29f3a9042fc2e3d5bee06->leave($__internal_cda997933ddbb79c422cfb7e0eb08ba7d6b5605dd6c29f3a9042fc2e3d5bee06_prof);

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
        return array (  235 => 105,  229 => 104,  218 => 103,  209 => 10,  202 => 7,  196 => 6,  184 => 5,  174 => 108,  171 => 104,  169 => 103,  161 => 97,  156 => 94,  150 => 92,  148 => 91,  143 => 88,  137 => 86,  132 => 84,  128 => 83,  124 => 82,  120 => 81,  116 => 80,  110 => 77,  54 => 24,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset('styles/jquery.dataTables.css') }}\" type=\"text/css\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"modal fade\" id=\"loginmodal\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Login</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"{{ path('login_check') }}\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"username\">Username:</label>
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\">Password:</label>
                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</button>
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-lock\"></span> Forget?</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div class=\"modal fade\" id=\"registermodal\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\">Sign Up</h4>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"username\">Username:</label>
                                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\">Password:</label>
                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"password\">Repeat Password:</label>
                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-user\"></span> Register</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>                        
        <div id=\"container\" class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
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
                                    <li><a href=\"\" data-toggle=\"modal\" data-target=\"#registermodal\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
                                    <li><a href=\"\" data-toggle=\"modal\" data-target=\"#loginmodal\"> <span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                                    {% endif %}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js\" type=\"text/javascript\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\"></script>
        {% endblock %}
    </div>
</body>
</html>
", "base.html.twig", "/var/www/html/symfonyapp/app/Resources/views/base.html.twig");
    }
}
