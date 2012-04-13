<?php

/* ILLVisitBundle:Admin:create.html.twig */
class __TwigTemplate_4d0daa6bb99bf9c0cbf8f8249a9d119d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"span2\">
\t\t    <ul class=\"nav nav-list\">
\t\t    \t<li class=\"nav-header\">Institutes</li>
\t\t   \t\t<li>
\t\t    \t\t<a href=\"#\">Institutes</a>
\t\t    \t</li>
\t\t   \t \t<li>
\t\t    \t\t<a href=\"\">Add institute</a>
\t\t    \t</li>
\t\t    </ul>
\t\t</div>
\t\t<div class=\"span10\">
\t\t\t<h1>Administration</h1>
\t\t\t<h2> Add an institute</h2>
\t\t\t<br />
\t\t\t<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"form-horizontal\" novalidate>
\t\t        ";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
\t\t        <fieldset>
\t\t          <div class=\"control-group\">
\t\t            <label class=\"control-label\" for=\"input01\">Name</label>
\t\t            <div class=\"controls\">
\t\t           \t    ";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "name"), array("attr" => array("class" => "span8")));
        echo "
\t\t              <p class=\"help-block\">Please give us a name for the institute.</p>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"control-group\">
\t\t            <label class=\"control-label\" for=\"input01\">Printable name</label>
\t\t            <div class=\"controls\">
\t\t           \t    ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "printable_name"), array("attr" => array("class" => "span8")));
        echo "
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"form-actions\">
\t\t            <button type=\"submit\" class=\"btn btn-primary\">Save institute</button>
\t\t          </div>
\t\t        </fieldset>
\t\t      </form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Admin:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
