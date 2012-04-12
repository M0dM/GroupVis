<?php

/* ILLVisitBundle:Visit:create.html.twig */
class __TwigTemplate_fc3e9c6c824f354d4f2b127c4c62e24e extends Twig_Template
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
        echo "\t<div class=\"row-fluid\">
\t\t<div class=\"span12\">
\t\t\t<h1 style=\"margin-bottom: 10px\">Create visit</h1>
\t\t\t<div class=\"alert alert-success\">
\t\t\t\tPlease enter in all of the details
\t\t\t</div>
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t\t\t<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"form-horizontal\" novalidate>
\t\t        ";
        // line 12
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
\t\t        <fieldset>
\t\t          <div class=\"control-group\">
\t\t            <label class=\"control-label\" for=\"input01\">Name</label>
\t\t            <div class=\"controls\">
\t\t           \t\t";
        // line 17
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
\t\t       \t\t    ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "name"), array("attr" => array("class" => "span8")));
        echo "
\t\t              <p class=\"help-block\">Please give us a name for the visit.</p>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"control-group\">
\t\t            <label class=\"control-label\" for=\"textarea\">Details</label>
\t\t            <div class=\"controls\">
\t                \t";
        // line 25
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
\t            \t    ";
        // line 26
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "details"), array("attr" => array("class" => "span8")));
        echo "
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"control-group\">
\t\t            <label class=\"control-label\" for=\"input01\">Start date</label>
\t\t            <div class=\"controls\">
\t\t            \t";
        // line 32
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "end_date"));
        echo "
\t\t                ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "start_date"), array("attr" => array("style" => "width:auto")));
        echo "
\t\t              <p class=\"help-block\">When does thie visit start?</p>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"control-group\">
\t\t            <label class=\"control-label\" for=\"input01\">End date</label>
\t\t            <div class=\"controls\">
\t\t                ";
        // line 40
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "end_date"), array("attr" => array("style" => "width:auto")));
        echo "
\t\t              <p class=\"help-block\">When does the visit end?</p>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"control-group\">
\t\t            <label class=\"control-label\" for=\"select01\">Responsible</label>
\t\t            <div class=\"controls\">
\t\t            \t";
        // line 47
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "responsible"));
        echo "
\t\t                ";
        // line 48
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "responsible"), array("attr" => array("style" => "width:auto")));
        echo "
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"control-group\">
\t\t            <label class=\"control-label\" for=\"select01\">Institute</label>
\t\t            <div class=\"controls\">
\t\t            \t";
        // line 54
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "institute"));
        echo "
\t\t                ";
        // line 55
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "institute"), array("attr" => array("style" => "width:auto")));
        echo "
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"form-actions\">
\t\t            <button type=\"submit\" class=\"btn btn-primary\">Save visit</button>
\t\t          </div>
\t\t        </fieldset>
\t\t      </form>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Visit:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
