<?php

/* ILLVisitBundle::base.html.twig */
class __TwigTemplate_7c619381bbe7d3f5a060e8c5cf4e143c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
\t <div class=\"navbar navbar-fixed-top\">
\t      <div class=\"navbar-inner\">
\t        <div class=\"container-fluid\">
\t          <a class=\"brand\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_all"), "html", null, true);
        echo "\">Visitors</a>
\t          <div class=\"nav-collapse\">
\t          
\t            <ul class=\"nav\">
\t             ";
        // line 27
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 28
            echo "\t             ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "\t              <li class=\"\">
\t                <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_all"), "html", null, true);
                echo "\">Visits</a>
\t              </li>
\t              ";
            }
            // line 33
            echo "\t              <li class=\"\">
\t                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_user_visits"), "html", null, true);
            echo "\">My visits</a>
\t              </li>
\t              <li class=\"\">
\t                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_create"), "html", null, true);
            echo "\">Create Visit</a>
\t              </li>
\t              ";
            // line 39
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "\t              \t<li class=\"\">
\t                \t<a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_admin_index"), "html", null, true);
                echo "\">Admin</a>
\t              \t</li>
\t              ";
            }
            // line 44
            echo "\t              ";
        }
        // line 45
        echo "\t            </ul>
\t            ";
        // line 46
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 47
            echo "\t            <ul class=\"nav pull-right\">
\t              <li class=\"\">
\t                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\"\">Logout</a>
\t              </li>
\t            </ul>\t 
\t            ";
        }
        // line 52
        echo "           \t
\t          </div>
\t        </div>
\t      </div>
\t    </div>
\t\t<div class=\"container-fluid\" style=\"margin-top:100px; margin-bottom: 60px\">
\t    \t";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "\t\t</div>
    </body>
</html>";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t    \t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://bootswatch.com/superhero/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t    \t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/illvisit/lib/jquery-ui/css/flick/jquery-ui-1.8.18.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/illvisit/lib/jquery-ui/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"https://raw.github.com/janl/mustache.js/master/mustache.js\"></script>
            <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/illvisit/js/visits.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
 
        ";
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        echo " GroupVis ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
