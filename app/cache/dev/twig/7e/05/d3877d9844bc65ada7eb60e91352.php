<?php

/* ILLVisitBundle:Visit:addAttendee.json.twig */
class __TwigTemplate_7e05d3877d9844bc65ada7eb60e91352 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "{
\t\"sucess\": \"true\",
\t\"message\": \"The attendee has been added\",
  \t\"attendee\":
\t{
\t\t\"fullName\"\t\t: \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "fullName"), "html", null, true);
        echo "\",
\t\t\"birthDate\" \t: \"";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "birthDate"), "d-m-Y"), "html", null, true);
        echo "\",
\t\t\"placeOfBirth\"\t: \"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "placeOfBirth"), "html", null, true);
        echo "\",
\t\t\"nationality\"  \t: \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "nationality"), "html", null, true);
        echo "\",
\t\t\"sex\"\t\t\t: \"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "attendee"), "sex"), "html", null, true);
        echo "\",
\t\t\"url\"\t\t\t: \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ill_visit_visit_removeattendee", array("id" => $this->getContext($context, "visitId"), "attendeeId" => $this->getAttribute($this->getContext($context, "attendee"), "id"))), "html", null, true);
        echo "\"
\t}
}";
    }

    public function getTemplateName()
    {
        return "ILLVisitBundle:Visit:addAttendee.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
