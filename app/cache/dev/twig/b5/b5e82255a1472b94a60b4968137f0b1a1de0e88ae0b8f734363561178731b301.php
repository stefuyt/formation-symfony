<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_533bf874ee6c501a3c683b64450d2b88d549b797f467a8057abfee043110413f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23d8b22f5cec38f3ea55e74d20ec59d0a64f8b4805613be03af8c8181c06053d = $this->env->getExtension("native_profiler");
        $__internal_23d8b22f5cec38f3ea55e74d20ec59d0a64f8b4805613be03af8c8181c06053d->enter($__internal_23d8b22f5cec38f3ea55e74d20ec59d0a64f8b4805613be03af8c8181c06053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23d8b22f5cec38f3ea55e74d20ec59d0a64f8b4805613be03af8c8181c06053d->leave($__internal_23d8b22f5cec38f3ea55e74d20ec59d0a64f8b4805613be03af8c8181c06053d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1199824e002bf031b894f6daecb4bf551a8b17738ba4dbb395d5ed41e8be6d29 = $this->env->getExtension("native_profiler");
        $__internal_1199824e002bf031b894f6daecb4bf551a8b17738ba4dbb395d5ed41e8be6d29->enter($__internal_1199824e002bf031b894f6daecb4bf551a8b17738ba4dbb395d5ed41e8be6d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1199824e002bf031b894f6daecb4bf551a8b17738ba4dbb395d5ed41e8be6d29->leave($__internal_1199824e002bf031b894f6daecb4bf551a8b17738ba4dbb395d5ed41e8be6d29_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b48ae7f914577fbfe5c39f44425fcd4967676d2e58837400ceb8da11f65f2307 = $this->env->getExtension("native_profiler");
        $__internal_b48ae7f914577fbfe5c39f44425fcd4967676d2e58837400ceb8da11f65f2307->enter($__internal_b48ae7f914577fbfe5c39f44425fcd4967676d2e58837400ceb8da11f65f2307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b48ae7f914577fbfe5c39f44425fcd4967676d2e58837400ceb8da11f65f2307->leave($__internal_b48ae7f914577fbfe5c39f44425fcd4967676d2e58837400ceb8da11f65f2307_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61db44f411848448f34d55fe62ee40399903b4a12a6ef26ea352129c22894e16 = $this->env->getExtension("native_profiler");
        $__internal_61db44f411848448f34d55fe62ee40399903b4a12a6ef26ea352129c22894e16->enter($__internal_61db44f411848448f34d55fe62ee40399903b4a12a6ef26ea352129c22894e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_61db44f411848448f34d55fe62ee40399903b4a12a6ef26ea352129c22894e16->leave($__internal_61db44f411848448f34d55fe62ee40399903b4a12a6ef26ea352129c22894e16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
