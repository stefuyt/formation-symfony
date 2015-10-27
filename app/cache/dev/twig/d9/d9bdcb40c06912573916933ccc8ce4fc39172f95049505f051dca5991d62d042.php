<?php

/* ParkBundle:Computer:index.html.twig */
class __TwigTemplate_8bbaeb5a35bfb6bccf3a02a5ece278abc5ef3f6aac31f93cdcaf24566f4ccbff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ParkBundle::base.html.twig", "ParkBundle:Computer:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ParkBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b11c49ba7b1a1db1f9026dc464a55d87022b52e91996e8384a8eab4bba9f856 = $this->env->getExtension("native_profiler");
        $__internal_6b11c49ba7b1a1db1f9026dc464a55d87022b52e91996e8384a8eab4bba9f856->enter($__internal_6b11c49ba7b1a1db1f9026dc464a55d87022b52e91996e8384a8eab4bba9f856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle:Computer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b11c49ba7b1a1db1f9026dc464a55d87022b52e91996e8384a8eab4bba9f856->leave($__internal_6b11c49ba7b1a1db1f9026dc464a55d87022b52e91996e8384a8eab4bba9f856_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_81ad2552ca8d1508eb88c772e74a9f6a5374b2cd67ceea5d98fcb2c7f564f7a6 = $this->env->getExtension("native_profiler");
        $__internal_81ad2552ca8d1508eb88c772e74a9f6a5374b2cd67ceea5d98fcb2c7f564f7a6->enter($__internal_81ad2552ca8d1508eb88c772e74a9f6a5374b2cd67ceea5d98fcb2c7f564f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Computer list
";
        
        $__internal_81ad2552ca8d1508eb88c772e74a9f6a5374b2cd67ceea5d98fcb2c7f564f7a6->leave($__internal_81ad2552ca8d1508eb88c772e74a9f6a5374b2cd67ceea5d98fcb2c7f564f7a6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b80298a9fe5182e777fc73a3bf69e3d4b15b565128c0f654c7f71b5bf3ec747 = $this->env->getExtension("native_profiler");
        $__internal_5b80298a9fe5182e777fc73a3bf69e3d4b15b565128c0f654c7f71b5bf3ec747->enter($__internal_5b80298a9fe5182e777fc73a3bf69e3d4b15b565128c0f654c7f71b5bf3ec747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"page-header\">
        <h1>Computer list</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-striped\">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Ip</th>
                        <th>Enabled</th>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["computers"]) ? $context["computers"] : $this->getContext($context, "computers")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["computer"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["computer"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["computer"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["computer"], "ip", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo $this->env->getExtension('park_computer_status_extension')->renderComputerStatus($this->env, $this->getAttribute($context["computer"], "enabled", array()));
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                    <tr>
                        <td colspan=\"6\">No computer found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['computer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>

            </table>
        </div>
    </div>

";
        
        $__internal_5b80298a9fe5182e777fc73a3bf69e3d4b15b565128c0f654c7f71b5bf3ec747->leave($__internal_5b80298a9fe5182e777fc73a3bf69e3d4b15b565128c0f654c7f71b5bf3ec747_prof);

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
        return array (  114 => 39,  105 => 35,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  82 => 28,  77 => 27,  57 => 9,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'ParkBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }} - Computer list*/
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div class="page-header">*/
/*         <h1>Computer list</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <table class="table table-striped">*/
/* */
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Name</th>*/
/*                         <th>Ip</th>*/
/*                         <th>Enabled</th>*/
/*                     </tr>*/
/*                 </thead>*/
/* */
/*                 <tbody>*/
/*                 {% for computer in computers %}*/
/*                     <tr>*/
/*                         <td>{{ computer.id }}</td>*/
/*                         <td>{{ computer.name }}</td>*/
/*                         <td>{{ computer.ip }}</td>*/
/*                         <td>{{ computer.enabled|computer_status }}</td>*/
/*                     </tr>*/
/*                 {% else %}*/
/*                     <tr>*/
/*                         <td colspan="6">No computer found</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/* */
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
