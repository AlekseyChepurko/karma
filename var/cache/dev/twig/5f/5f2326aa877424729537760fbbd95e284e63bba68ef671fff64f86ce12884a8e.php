<?php

/* default/index.html.twig */
class __TwigTemplate_879f6b50e29939a491ee9c9c657b5bc33ad5d47d52f6428a991ff3e1e785b595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a73b446bcad9c76c91d8b6e3e98c72b46e66e9cafc42143c0081fdd2ebb0b8d = $this->env->getExtension("native_profiler");
        $__internal_1a73b446bcad9c76c91d8b6e3e98c72b46e66e9cafc42143c0081fdd2ebb0b8d->enter($__internal_1a73b446bcad9c76c91d8b6e3e98c72b46e66e9cafc42143c0081fdd2ebb0b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a73b446bcad9c76c91d8b6e3e98c72b46e66e9cafc42143c0081fdd2ebb0b8d->leave($__internal_1a73b446bcad9c76c91d8b6e3e98c72b46e66e9cafc42143c0081fdd2ebb0b8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_906606a6bd6ca3685ffcc8ce098a254a42e7e16bf5efd0a8b63e374998f912cf = $this->env->getExtension("native_profiler");
        $__internal_906606a6bd6ca3685ffcc8ce098a254a42e7e16bf5efd0a8b63e374998f912cf->enter($__internal_906606a6bd6ca3685ffcc8ce098a254a42e7e16bf5efd0a8b63e374998f912cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"wrapper\">
        <div class=\"container\">
            <div class=\"welcome\">
               Добро пожаловать!
            </div>


        </div>
    </div>
";
        
        $__internal_906606a6bd6ca3685ffcc8ce098a254a42e7e16bf5efd0a8b63e374998f912cf->leave($__internal_906606a6bd6ca3685ffcc8ce098a254a42e7e16bf5efd0a8b63e374998f912cf_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e19c134b99a11b50e6bfbcb486cb8c18badb3c417cda0059c555b615873c8ff2 = $this->env->getExtension("native_profiler");
        $__internal_e19c134b99a11b50e6bfbcb486cb8c18badb3c417cda0059c555b615873c8ff2->enter($__internal_e19c134b99a11b50e6bfbcb486cb8c18badb3c417cda0059c555b615873c8ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "
";
        
        $__internal_e19c134b99a11b50e6bfbcb486cb8c18badb3c417cda0059c555b615873c8ff2->leave($__internal_e19c134b99a11b50e6bfbcb486cb8c18badb3c417cda0059c555b615873c8ff2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  57 => 15,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="wrapper">*/
/*         <div class="container">*/
/*             <div class="welcome">*/
/*                Добро пожаловать!*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
