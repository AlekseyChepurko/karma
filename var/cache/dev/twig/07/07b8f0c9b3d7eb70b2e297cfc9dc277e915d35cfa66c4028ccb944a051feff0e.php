<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_536fcf48af12859b2f2c256ac0add4e7e03776ac4ca1a76d4e79b08cf6f7dcc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_231470cdf0a2ab08c0bf9b22424c380ab62b7a4e368904c3f0a754799de09dc4 = $this->env->getExtension("native_profiler");
        $__internal_231470cdf0a2ab08c0bf9b22424c380ab62b7a4e368904c3f0a754799de09dc4->enter($__internal_231470cdf0a2ab08c0bf9b22424c380ab62b7a4e368904c3f0a754799de09dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_231470cdf0a2ab08c0bf9b22424c380ab62b7a4e368904c3f0a754799de09dc4->leave($__internal_231470cdf0a2ab08c0bf9b22424c380ab62b7a4e368904c3f0a754799de09dc4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72f452c61c7e350d425644c728379c64519c446d57451c2134ee68b6eb9fe5c3 = $this->env->getExtension("native_profiler");
        $__internal_72f452c61c7e350d425644c728379c64519c446d57451c2134ee68b6eb9fe5c3->enter($__internal_72f452c61c7e350d425644c728379c64519c446d57451c2134ee68b6eb9fe5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72f452c61c7e350d425644c728379c64519c446d57451c2134ee68b6eb9fe5c3->leave($__internal_72f452c61c7e350d425644c728379c64519c446d57451c2134ee68b6eb9fe5c3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bdf3409e01c78e20f44b4d2992688f0afaad7c9a32e0315c133dc327bd1c650 = $this->env->getExtension("native_profiler");
        $__internal_7bdf3409e01c78e20f44b4d2992688f0afaad7c9a32e0315c133dc327bd1c650->enter($__internal_7bdf3409e01c78e20f44b4d2992688f0afaad7c9a32e0315c133dc327bd1c650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7bdf3409e01c78e20f44b4d2992688f0afaad7c9a32e0315c133dc327bd1c650->leave($__internal_7bdf3409e01c78e20f44b4d2992688f0afaad7c9a32e0315c133dc327bd1c650_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27b4c6c8d186655c8809a8adebe9e20eb3986adbc40fca1e4cd1779ac569153d = $this->env->getExtension("native_profiler");
        $__internal_27b4c6c8d186655c8809a8adebe9e20eb3986adbc40fca1e4cd1779ac569153d->enter($__internal_27b4c6c8d186655c8809a8adebe9e20eb3986adbc40fca1e4cd1779ac569153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27b4c6c8d186655c8809a8adebe9e20eb3986adbc40fca1e4cd1779ac569153d->leave($__internal_27b4c6c8d186655c8809a8adebe9e20eb3986adbc40fca1e4cd1779ac569153d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
