<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ac0b29deea3b7426a8b9fb620265e0f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ILLVisitBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Visitors Login";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
\t<div class=\"span5 offset4\">
\t\t<h1 style=\"margin-bottom: 10px\">Login</h1>
\t\t";
        // line 7
        if ($this->getContext($context, "error")) {
            // line 8
            echo "\t\t    <div class=\"alert alert-error\">
\t\t    \t<p><strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "error"), "html", null, true);
            echo "</strong></p>
\t\t    </div>
\t\t";
        }
        // line 12
        echo "\t\t<div class=\"alert alert-info\">
\t\t       <strong>Please enter your visitors credentials to login</strong>
\t\t</div>
\t\t<form class=\"form-inline\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t<fieldset>
\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"username\">Username</label>
\t\t\t\t\t<div class=\"controls\">
\t\t    \t\t\t<input type=\"text\" id=\"username\" name=\"_username\" class=\"input-xlarge\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
\t\t    \t\t</div>
\t\t    \t</div>
\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t<label class=\"control-label\" for=\"password\">Password</label>
\t\t\t\t\t<div class=\"controls\">
\t\t    \t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"input-xlarge\" />
\t\t    \t\t</div>
\t\t    \t</div>
\t\t          <div class=\"form-actions\">
\t\t\t\t\t<button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-large\">Login</button>\t\t          
\t\t\t\t</div>
\t\t  </fieldset>
\t\t  <form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
