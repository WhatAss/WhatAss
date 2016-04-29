<?php

/* base.html.twig */
class __TwigTemplate_51c055b069fa8a20c5dc6ec40cb19a069d1bba63ff3ad12b3ee237c7d69d4592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cd5bb2e4538faeec72d7223a75a42a7a5214db46a77c4ffac3e7908cc0bd371 = $this->env->getExtension("native_profiler");
        $__internal_9cd5bb2e4538faeec72d7223a75a42a7a5214db46a77c4ffac3e7908cc0bd371->enter($__internal_9cd5bb2e4538faeec72d7223a75a42a7a5214db46a77c4ffac3e7908cc0bd371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9cd5bb2e4538faeec72d7223a75a42a7a5214db46a77c4ffac3e7908cc0bd371->leave($__internal_9cd5bb2e4538faeec72d7223a75a42a7a5214db46a77c4ffac3e7908cc0bd371_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77105388bed10a026d7784f47d30d706e9ae0dc62ef239d3b76466e9cd325300 = $this->env->getExtension("native_profiler");
        $__internal_77105388bed10a026d7784f47d30d706e9ae0dc62ef239d3b76466e9cd325300->enter($__internal_77105388bed10a026d7784f47d30d706e9ae0dc62ef239d3b76466e9cd325300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77105388bed10a026d7784f47d30d706e9ae0dc62ef239d3b76466e9cd325300->leave($__internal_77105388bed10a026d7784f47d30d706e9ae0dc62ef239d3b76466e9cd325300_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01d763d00f90db12a26ef7c54093804441224537f3530b22cb6eebe712a9528e = $this->env->getExtension("native_profiler");
        $__internal_01d763d00f90db12a26ef7c54093804441224537f3530b22cb6eebe712a9528e->enter($__internal_01d763d00f90db12a26ef7c54093804441224537f3530b22cb6eebe712a9528e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_01d763d00f90db12a26ef7c54093804441224537f3530b22cb6eebe712a9528e->leave($__internal_01d763d00f90db12a26ef7c54093804441224537f3530b22cb6eebe712a9528e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0768152f675830dfe6ff295a3c0ee17455fdc1846b1db67ea6fb4d21396bdd1 = $this->env->getExtension("native_profiler");
        $__internal_a0768152f675830dfe6ff295a3c0ee17455fdc1846b1db67ea6fb4d21396bdd1->enter($__internal_a0768152f675830dfe6ff295a3c0ee17455fdc1846b1db67ea6fb4d21396bdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a0768152f675830dfe6ff295a3c0ee17455fdc1846b1db67ea6fb4d21396bdd1->leave($__internal_a0768152f675830dfe6ff295a3c0ee17455fdc1846b1db67ea6fb4d21396bdd1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d1960fc4215aad3410d718976bbeca399c2bd5247e3cf42336eae44f5992299 = $this->env->getExtension("native_profiler");
        $__internal_8d1960fc4215aad3410d718976bbeca399c2bd5247e3cf42336eae44f5992299->enter($__internal_8d1960fc4215aad3410d718976bbeca399c2bd5247e3cf42336eae44f5992299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8d1960fc4215aad3410d718976bbeca399c2bd5247e3cf42336eae44f5992299->leave($__internal_8d1960fc4215aad3410d718976bbeca399c2bd5247e3cf42336eae44f5992299_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
