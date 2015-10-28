<?php

/* ParkBundle:Computer:edit.html.twig */
class __TwigTemplate_7394e7e23c6e78bcb2ce6f915de14e30c1645cafede28121542098929222a490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ParkBundle:Computer:edit.html.twig", 1);
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
        $__internal_73aaf7857a4fd0f328176f2b8b1e9a7f3d06531103490627dee4c3418438a3fb = $this->env->getExtension("native_profiler");
        $__internal_73aaf7857a4fd0f328176f2b8b1e9a7f3d06531103490627dee4c3418438a3fb->enter($__internal_73aaf7857a4fd0f328176f2b8b1e9a7f3d06531103490627dee4c3418438a3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle:Computer:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73aaf7857a4fd0f328176f2b8b1e9a7f3d06531103490627dee4c3418438a3fb->leave($__internal_73aaf7857a4fd0f328176f2b8b1e9a7f3d06531103490627dee4c3418438a3fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d1ccaa8f6f2c94670b690bc06d97ec6da68b834e2facd151857ed2d60c749ba = $this->env->getExtension("native_profiler");
        $__internal_3d1ccaa8f6f2c94670b690bc06d97ec6da68b834e2facd151857ed2d60c749ba->enter($__internal_3d1ccaa8f6f2c94670b690bc06d97ec6da68b834e2facd151857ed2d60c749ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Computer edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("computer");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_3d1ccaa8f6f2c94670b690bc06d97ec6da68b834e2facd151857ed2d60c749ba->leave($__internal_3d1ccaa8f6f2c94670b690bc06d97ec6da68b834e2facd151857ed2d60c749ba_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle:Computer:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Computer edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('computer') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
