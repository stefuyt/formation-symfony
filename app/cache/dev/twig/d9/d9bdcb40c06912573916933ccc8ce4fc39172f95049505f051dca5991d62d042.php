<?php

/* ParkBundle:Computer:index.html.twig */
class __TwigTemplate_8bbaeb5a35bfb6bccf3a02a5ece278abc5ef3f6aac31f93cdcaf24566f4ccbff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ParkBundle:Computer:index.html.twig", 1);
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
        $__internal_02ecb390b5d6446054d8cb8e1627b65324944bff89a84ede430b2012f14f0658 = $this->env->getExtension("native_profiler");
        $__internal_02ecb390b5d6446054d8cb8e1627b65324944bff89a84ede430b2012f14f0658->enter($__internal_02ecb390b5d6446054d8cb8e1627b65324944bff89a84ede430b2012f14f0658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle:Computer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ecb390b5d6446054d8cb8e1627b65324944bff89a84ede430b2012f14f0658->leave($__internal_02ecb390b5d6446054d8cb8e1627b65324944bff89a84ede430b2012f14f0658_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da6932b4a209d46b6b53d70cdd131b9c11c4a47e789a26b422cf8d15ed4b0a0 = $this->env->getExtension("native_profiler");
        $__internal_3da6932b4a209d46b6b53d70cdd131b9c11c4a47e789a26b422cf8d15ed4b0a0->enter($__internal_3da6932b4a209d46b6b53d70cdd131b9c11c4a47e789a26b422cf8d15ed4b0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Computer list</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Ip</th>
                <th>Enabled</th>
                <th>Person</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("computer_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "enabled", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "person", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "person", array()), "NA")) : ("NA")), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("computer_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("computer_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("computer_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_3da6932b4a209d46b6b53d70cdd131b9c11c4a47e789a26b422cf8d15ed4b0a0->leave($__internal_3da6932b4a209d46b6b53d70cdd131b9c11c4a47e789a26b422cf8d15ed4b0a0_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle:Computer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Computer list</h1>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Ip</th>*/
/*                 <th>Enabled</th>*/
/*                 <th>Person</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('computer_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.name }}</td>*/
/*                 <td>{{ entity.ip }}</td>*/
/*                 <td>{{ entity.enabled }}</td>*/
/*                 <td>{{ entity.person|default('NA') }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('computer_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('computer_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('computer_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
