<?php

/* ILLVisitBundle:Visit:showUserVisits.html.twig */
class __TwigTemplate_021fb11ccf0fc3862974256309c7d0e2 extends Twig_Template
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
\t\t\t<h1 style=\"margin-bottom: 10px\">All visits</h1>
\t\t\t<div class=\"alert alert-info\">
\t\t\t\tThere are a total of <strong>";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "visits")), "html", null, true);
        echo "</strong> visits in the system
\t\t\t</div>
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t    <thead>
\t\t\t      <tr>
\t\t\t        <th>Name</th>
\t\t\t        <th>Details</th>
\t\t\t        <th>Start date</th>
\t\t\t        <th>End date</th>
\t\t\t        <th>Responsible</th>
\t\t\t        <th>Institute</th>
\t\t\t        <th></th>
\t\t\t      </tr>
\t\t\t    </thead>
\t\t\t    <tbody>
                                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "visits"));
        foreach ($context['_seq'] as $context["_key"] => $context["visit"]) {
            // line 24
            echo "                                <tr>
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "name"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "details"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "startDate"), "d/m/Y h:i"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "endDate"), "d/m/Y h:i"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "responsible"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visit"), "institute"), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"btn-group\">
                                                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_view", array("id" => $this->getAttribute($this->getContext($context, "visit"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info attendees\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_edit", array("id" => $this->getAttribute($this->getContext($context, "visit"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a>
                                                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_delete", array("id" => $this->getAttribute($this->getContext($context, "visit"), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                                        </div>
                                        </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visit'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "                            </tbody>
\t\t  \t</table>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Visit:showUserVisits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
