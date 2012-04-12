<?php

/* ILLVisitBundle:Visit:view.html.twig */
class __TwigTemplate_9268f2704bb620b3b905b257d1ab8a82 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "name"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"row-fluid\">
\t<h1 style=\"margin-bottom: 10px\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "name"), "html", null, true);
        echo "</h1>
    <ul class=\"nav nav-pills pull-right\">
\t    <li class=\"active\">
\t    \t<a href=\"#\"><i class=\"icon-print icon-white\"></i>Print</a>
\t    </li>
\t    <li class=\"active\">
\t    \t<a href=\"#\"><i class=\"icon-edit icon-white\"></i>Edit</a>
\t    </li>
\t    <li class=\"active\">
\t    \t<a chref=\"#\"><i class=\"icon-trash icon-white\"></i>Delete</a>
\t    </li>
    </ul>
    </div>
\t<div class=\"row-fluid\">
\t\t<div class=\"span12\">
\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>Start date</b></td>
\t\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "startDate"), "d-m-Y h:i"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td><b>End date</b></td>
\t\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "endDate"), "d-m-Y h:i"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>Details</b></td>
\t\t\t\t\t\t<td colspan=\"3\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "details"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>Responsible</b></td>
\t\t\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "responsible"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td><b>Institute</b></td>
\t\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visit"), "institute"), "printableName"), "html", null, true);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<h2>Attendees</h2>
\t\t\t";
        // line 41
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "attendee_success"), "method")) {
            // line 42
            echo "\t\t\t    <div class=\"alert alert-success\">
\t\t\t        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "attendee_success"), "method"), "html", null, true);
            echo "
\t\t\t    </div>
\t\t\t";
        }
        // line 46
        echo "\t\t\t
\t\t\t<div id=\"attendee-success\" style=\"display:none\" class=\"alert alert-success\">
\t\t\t\tThe attendee has been added
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row-fluid\">
\t\t<div class=\"span7\">
\t\t\t<table id=\"attendees\" class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Fullname</th>
\t\t\t\t\t\t<th>Date of Birth</th>
\t\t\t\t\t\t<th>Place of Birth</th>
\t\t\t\t\t\t<th>Nationality</th>
\t\t\t\t\t\t<th>Sex</th>
\t\t\t\t\t\t<th>Remove attendee</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attendees"));
        foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
            // line 67
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "attendee"), "attendee"), "fullName"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "attendee"), "attendee"), "birthDate"), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "attendee"), "attendee"), "placeOfBirth"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "attendee"), "attendee"), "nationality"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "attendee"), "attendee"), "sex"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a data-url=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_removeattendee", array("id" => $this->getAttribute($this->getContext($context, "visit"), "id"), "attendeeId" => $this->getAttribute($this->getAttribute($this->getContext($context, "attendee"), "attendee"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger attendee-remove\"><i class=\"icon-trash icon-white\"></i>Remove</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 78
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"span5\">
\t\t  <h3>Attendee</h3>
          <ul id=\"tab\" class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#create\" data-toggle=\"tab\">Create</a></li>
            <li><a href=\"#search\" data-toggle=\"tab\">Search</a></li>
          </ul>
          <div id=\"myTabContent\" class=\"tab-content\">
            <div class=\"tab-pane fade in active\" id=\"create\">
\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\tPlease enter in all of the information
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_view", array("id" => $this->getAttribute($this->getContext($context, "visit"), "id"))), "html", null, true);
        echo "\" method=\"post\"  class=\"form-vertical\" novalidate>
\t\t\t        ";
        // line 93
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
\t\t\t        <fieldset>
\t\t\t          <div class=\"control-group\">
\t\t\t            <label class=\"control-label\" for=\"input01\">First name</label>
\t\t\t            <div class=\"controls\">
\t\t\t\t\t\t";
        // line 98
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "first_name"));
        echo "
\t\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "first_name"));
        echo "
\t\t\t            </div>
\t\t\t          </div>
\t\t\t          <div class=\"control-group\">
\t\t\t            <label class=\"control-label\" for=\"input01\">Last name</label>
\t\t\t            <div class=\"controls\">
\t\t\t             ";
        // line 105
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "last_name"));
        echo "
\t\t\t             ";
        // line 106
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "last_name"));
        echo "
\t\t\t            </div>
\t\t\t          </div>
\t\t\t          <div class=\"control-group\">
\t\t\t            <label class=\"control-label\" for=\"input01\">Place of birth</label>
\t\t\t            <div class=\"controls\">
\t\t\t            ";
        // line 112
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "place_of_birth"));
        echo "
\t\t\t\t\t\t";
        // line 113
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "place_of_birth"));
        echo "
\t\t\t            </div>
\t\t\t          </div>
\t\t\t          <div class=\"control-group\">
\t\t\t            <label class=\"control-label\" for=\"input01\">Date of birth</label>
\t\t\t            <div class=\"controls\">
\t\t\t            ";
        // line 119
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "birth_date"));
        echo "
\t\t\t            ";
        // line 120
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "birth_date"));
        echo "
\t\t\t            </div>
\t\t\t          </div>
\t\t\t          <div class=\"control-group\">
\t\t\t            <label class=\"control-label\" for=\"input01\">Nationality</label>
\t\t\t            <div class=\"controls\">
\t\t\t             ";
        // line 126
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "nationality"));
        echo "
\t\t\t             ";
        // line 127
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nationality"));
        echo "
\t\t\t            </div>
\t\t\t          </div>
\t\t\t          <div class=\"control-group\">
\t\t\t            <label class=\"control-label\" for=\"input01\">Sex</label>
\t\t\t            <div class=\"controls\">
\t\t\t             ";
        // line 133
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "sex"));
        echo "
\t\t\t             ";
        // line 134
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "sex"));
        echo "
\t\t\t            </div>
\t\t\t          </div>\t\t\t\t\t          
\t\t\t          <div class=\"form-actions\">
\t\t\t            <button type=\"submit\" class=\"btn btn-primary\">Save visit</button>
\t\t\t          </div>
\t\t\t        </fieldset>
\t\t\t\t</form>\t\t            
\t\t\t</div>
            <div class=\"tab-pane fade in\" id=\"search\">
\t\t\t\t<div class=\"alert\">
\t\t\t\t\tSearch for an attendees last name that is already in the system. If not found then create a new attendee.
\t\t\t\t</div>
\t\t\t    <form class=\"form-search\">
\t\t\t   \t \t<input type=\"text\" id=\"query\" class=\"input-large search-query\">
\t\t\t    \t<button id=\"search-attendee\" data-url=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_searchattendee", array("_format" => "json", "id" => $this->getAttribute($this->getContext($context, "visit"), "id"))), "html", null, true);
        echo "\" class=\"btn\">Search</button>
\t\t\t    </form>
\t\t\t    <table id=\"attendees-results\" class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Fullname</th>
\t\t\t\t\t\t\t<th>Date of Birth</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
            </div>\t\t\t
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Visit:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
