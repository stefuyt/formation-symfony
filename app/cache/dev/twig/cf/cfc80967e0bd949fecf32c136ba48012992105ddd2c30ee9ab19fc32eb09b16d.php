<?php

/* ParkBundle:Person:new.html.twig */
class __TwigTemplate_7ccc2181ac7e8685d4b9a18cf85236624fa7c4a9320234198b72a3ac3c286b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ParkBundle:Person:new.html.twig", 1);
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
        $__internal_dd1fa07f48645a0da2b9d29b593e6b295b2d231996db07be5618d445693a0b86 = $this->env->getExtension("native_profiler");
        $__internal_dd1fa07f48645a0da2b9d29b593e6b295b2d231996db07be5618d445693a0b86->enter($__internal_dd1fa07f48645a0da2b9d29b593e6b295b2d231996db07be5618d445693a0b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ParkBundle:Person:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd1fa07f48645a0da2b9d29b593e6b295b2d231996db07be5618d445693a0b86->leave($__internal_dd1fa07f48645a0da2b9d29b593e6b295b2d231996db07be5618d445693a0b86_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff4ffd312aacd7a4d4e24f712cc27f7a98eaf09fc75d0152bb5b25841939ce8d = $this->env->getExtension("native_profiler");
        $__internal_ff4ffd312aacd7a4d4e24f712cc27f7a98eaf09fc75d0152bb5b25841939ce8d->enter($__internal_ff4ffd312aacd7a4d4e24f712cc27f7a98eaf09fc75d0152bb5b25841939ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Person creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("person");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_ff4ffd312aacd7a4d4e24f712cc27f7a98eaf09fc75d0152bb5b25841939ce8d->leave($__internal_ff4ffd312aacd7a4d4e24f712cc27f7a98eaf09fc75d0152bb5b25841939ce8d_prof);

    }

    public function getTemplateName()
    {
        return "ParkBundle:Person:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Person creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('person') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
