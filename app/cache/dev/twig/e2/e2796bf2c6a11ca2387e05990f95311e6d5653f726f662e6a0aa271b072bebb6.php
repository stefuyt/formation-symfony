<?php

/* ParkBundle:Person:show.html.twig */
class __TwigTemplate_669cfe424f02e499bdd3da53bf8fd8da30e0d3d4ea4ca1fbd5bcf2417e5fa13c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ParkBundle:Person:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c7293b2601e89f83dc0fcc9cc727f7985a5c69a7d198fa30881f99b460920a8 = $this->env->getExtension("native_profiler");
        $__internal_0c7293b2601e89f83dc0fcc9cc727f7985a5c69a7d198fa30881f99b460920a8->enter($__internal_0c7293b2601e89f83dc0fcc9cc727f7985a5c69a7d198fa30881f99b460920a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle:Person:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c7293b2601e89f83dc0fcc9cc727f7985a5c69a7d198fa30881f99b460920a8->leave($__internal_0c7293b2601e89f83dc0fcc9cc727f7985a5c69a7d198fa30881f99b460920a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff29f699eabaed01210cca8ebd954e50090015c7b08c3d518087d86bedb6a3aa = $this->env->getExtension("native_profiler");
        $__internal_ff29f699eabaed01210cca8ebd954e50090015c7b08c3d518087d86bedb6a3aa->enter($__internal_ff29f699eabaed01210cca8ebd954e50090015c7b08c3d518087d86bedb6a3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Person</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_ff29f699eabaed01210cca8ebd954e50090015c7b08c3d518087d86bedb6a3aa->leave($__internal_ff29f699eabaed01210cca8ebd954e50090015c7b08c3d518087d86bedb6a3aa_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle:Person:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Person</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ entity.firstName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ entity.lastName }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('person') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('person_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
