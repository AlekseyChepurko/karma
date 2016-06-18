<?php

/* base.html.twig */
class __TwigTemplate_588d618f2ffa40051d307fb423dec624fc1b9a5419b52b800727b9176fd3726a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ff2977e58bceac27690488746800ffaa8e71540ab4c0693e07fb55e3f5a64e9 = $this->env->getExtension("native_profiler");
        $__internal_7ff2977e58bceac27690488746800ffaa8e71540ab4c0693e07fb55e3f5a64e9->enter($__internal_7ff2977e58bceac27690488746800ffaa8e71540ab4c0693e07fb55e3f5a64e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        
        ";
        // line 16
        $this->displayBlock('footer', $context, $blocks);
        // line 19
        echo "        
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_7ff2977e58bceac27690488746800ffaa8e71540ab4c0693e07fb55e3f5a64e9->leave($__internal_7ff2977e58bceac27690488746800ffaa8e71540ab4c0693e07fb55e3f5a64e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac3fb78062a36ba85d2b9c78b7f2e5c245b6ee88aec40bbd96c4180cbe59dfd7 = $this->env->getExtension("native_profiler");
        $__internal_ac3fb78062a36ba85d2b9c78b7f2e5c245b6ee88aec40bbd96c4180cbe59dfd7->enter($__internal_ac3fb78062a36ba85d2b9c78b7f2e5c245b6ee88aec40bbd96c4180cbe59dfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lj,hj";
        
        $__internal_ac3fb78062a36ba85d2b9c78b7f2e5c245b6ee88aec40bbd96c4180cbe59dfd7->leave($__internal_ac3fb78062a36ba85d2b9c78b7f2e5c245b6ee88aec40bbd96c4180cbe59dfd7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_204a7f6c09b93dd25167cae811fa184a4e85e08da28e3915e9c849919a5bd5dc = $this->env->getExtension("native_profiler");
        $__internal_204a7f6c09b93dd25167cae811fa184a4e85e08da28e3915e9c849919a5bd5dc->enter($__internal_204a7f6c09b93dd25167cae811fa184a4e85e08da28e3915e9c849919a5bd5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_204a7f6c09b93dd25167cae811fa184a4e85e08da28e3915e9c849919a5bd5dc->leave($__internal_204a7f6c09b93dd25167cae811fa184a4e85e08da28e3915e9c849919a5bd5dc_prof);

    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        $__internal_eb64aa0391463f4b347fc4f6e0ad65ea9a6cd38814c332021a940f2c087da197 = $this->env->getExtension("native_profiler");
        $__internal_eb64aa0391463f4b347fc4f6e0ad65ea9a6cd38814c332021a940f2c087da197->enter($__internal_eb64aa0391463f4b347fc4f6e0ad65ea9a6cd38814c332021a940f2c087da197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "            <div class=\"header__wrap\"></div>
        ";
        
        $__internal_eb64aa0391463f4b347fc4f6e0ad65ea9a6cd38814c332021a940f2c087da197->leave($__internal_eb64aa0391463f4b347fc4f6e0ad65ea9a6cd38814c332021a940f2c087da197_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f613df2b9bd204fba3c7c388f0eed8c544ce002556ea6298056133b8f42cd90 = $this->env->getExtension("native_profiler");
        $__internal_0f613df2b9bd204fba3c7c388f0eed8c544ce002556ea6298056133b8f42cd90->enter($__internal_0f613df2b9bd204fba3c7c388f0eed8c544ce002556ea6298056133b8f42cd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f613df2b9bd204fba3c7c388f0eed8c544ce002556ea6298056133b8f42cd90->leave($__internal_0f613df2b9bd204fba3c7c388f0eed8c544ce002556ea6298056133b8f42cd90_prof);

    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e07ae0df5be9ee979d9c435d13021d2dc8f4fe0aeea883c750e67277ffed9c26 = $this->env->getExtension("native_profiler");
        $__internal_e07ae0df5be9ee979d9c435d13021d2dc8f4fe0aeea883c750e67277ffed9c26->enter($__internal_e07ae0df5be9ee979d9c435d13021d2dc8f4fe0aeea883c750e67277ffed9c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 17
        echo "            <div class=\"footer__wrap\"></div>
        ";
        
        $__internal_e07ae0df5be9ee979d9c435d13021d2dc8f4fe0aeea883c750e67277ffed9c26->leave($__internal_e07ae0df5be9ee979d9c435d13021d2dc8f4fe0aeea883c750e67277ffed9c26_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf433709b4ffd72ee3c4a521cd61e853b1b1712523a15b7e615aab99b39005e8 = $this->env->getExtension("native_profiler");
        $__internal_cf433709b4ffd72ee3c4a521cd61e853b1b1712523a15b7e615aab99b39005e8->enter($__internal_cf433709b4ffd72ee3c4a521cd61e853b1b1712523a15b7e615aab99b39005e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cf433709b4ffd72ee3c4a521cd61e853b1b1712523a15b7e615aab99b39005e8->leave($__internal_cf433709b4ffd72ee3c4a521cd61e853b1b1712523a15b7e615aab99b39005e8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 20,  127 => 17,  121 => 16,  110 => 14,  102 => 11,  96 => 10,  85 => 6,  73 => 5,  64 => 21,  62 => 20,  59 => 19,  57 => 16,  54 => 15,  52 => 14,  49 => 13,  47 => 10,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Lj,hj{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block header %}*/
/*             <div class="header__wrap"></div>*/
/*         {% endblock %}*/
/* */
/*         {% block body %}{% endblock %}*/
/*         */
/*         {% block footer %}*/
/*             <div class="footer__wrap"></div>*/
/*         {% endblock %}*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
