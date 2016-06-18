<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8f7a40a2f68a1f76203bbd5cba49407751201e298580eb67c29e1ccad53f697e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a22f8b88520e13183ff93e3120970c7e67a5ce8bffb0d62db571385a2dafbd8b = $this->env->getExtension("native_profiler");
        $__internal_a22f8b88520e13183ff93e3120970c7e67a5ce8bffb0d62db571385a2dafbd8b->enter($__internal_a22f8b88520e13183ff93e3120970c7e67a5ce8bffb0d62db571385a2dafbd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a22f8b88520e13183ff93e3120970c7e67a5ce8bffb0d62db571385a2dafbd8b->leave($__internal_a22f8b88520e13183ff93e3120970c7e67a5ce8bffb0d62db571385a2dafbd8b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79f10ad73348692c8655443c523d46017c78a6b24c19749b851c191e2564c1ab = $this->env->getExtension("native_profiler");
        $__internal_79f10ad73348692c8655443c523d46017c78a6b24c19749b851c191e2564c1ab->enter($__internal_79f10ad73348692c8655443c523d46017c78a6b24c19749b851c191e2564c1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79f10ad73348692c8655443c523d46017c78a6b24c19749b851c191e2564c1ab->leave($__internal_79f10ad73348692c8655443c523d46017c78a6b24c19749b851c191e2564c1ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ed486024c7318cebb31bc3894145f5652baa1af7d0f06bcb8aa765bff2e9986 = $this->env->getExtension("native_profiler");
        $__internal_0ed486024c7318cebb31bc3894145f5652baa1af7d0f06bcb8aa765bff2e9986->enter($__internal_0ed486024c7318cebb31bc3894145f5652baa1af7d0f06bcb8aa765bff2e9986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0ed486024c7318cebb31bc3894145f5652baa1af7d0f06bcb8aa765bff2e9986->leave($__internal_0ed486024c7318cebb31bc3894145f5652baa1af7d0f06bcb8aa765bff2e9986_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d2b0a454a1b6513a6f83f5c7ebfb708b2b1c8f3665dfd41c8c76b747f619c2a = $this->env->getExtension("native_profiler");
        $__internal_0d2b0a454a1b6513a6f83f5c7ebfb708b2b1c8f3665dfd41c8c76b747f619c2a->enter($__internal_0d2b0a454a1b6513a6f83f5c7ebfb708b2b1c8f3665dfd41c8c76b747f619c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0d2b0a454a1b6513a6f83f5c7ebfb708b2b1c8f3665dfd41c8c76b747f619c2a->leave($__internal_0d2b0a454a1b6513a6f83f5c7ebfb708b2b1c8f3665dfd41c8c76b747f619c2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
