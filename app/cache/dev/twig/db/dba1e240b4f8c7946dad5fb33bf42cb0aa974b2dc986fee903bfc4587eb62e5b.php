<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_afbbe83010d065aca743fad63a1d9f2da525d22debe3e36c5676ecef019e6ac0 extends Twig_Template
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
        $__internal_de29048c36db8701b0c0febc8ea06ed10c9f9ab5b80969d83d969bcb1355fe8e = $this->env->getExtension("native_profiler");
        $__internal_de29048c36db8701b0c0febc8ea06ed10c9f9ab5b80969d83d969bcb1355fe8e->enter($__internal_de29048c36db8701b0c0febc8ea06ed10c9f9ab5b80969d83d969bcb1355fe8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de29048c36db8701b0c0febc8ea06ed10c9f9ab5b80969d83d969bcb1355fe8e->leave($__internal_de29048c36db8701b0c0febc8ea06ed10c9f9ab5b80969d83d969bcb1355fe8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d299dfb92ae5dc29119caeb1702d098ade3b92cae38dfb241518105c17e22ad = $this->env->getExtension("native_profiler");
        $__internal_9d299dfb92ae5dc29119caeb1702d098ade3b92cae38dfb241518105c17e22ad->enter($__internal_9d299dfb92ae5dc29119caeb1702d098ade3b92cae38dfb241518105c17e22ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d299dfb92ae5dc29119caeb1702d098ade3b92cae38dfb241518105c17e22ad->leave($__internal_9d299dfb92ae5dc29119caeb1702d098ade3b92cae38dfb241518105c17e22ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc8f193295f8f0377c2e609197d51ccce26d44009240d550a6a66dd87466647e = $this->env->getExtension("native_profiler");
        $__internal_dc8f193295f8f0377c2e609197d51ccce26d44009240d550a6a66dd87466647e->enter($__internal_dc8f193295f8f0377c2e609197d51ccce26d44009240d550a6a66dd87466647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dc8f193295f8f0377c2e609197d51ccce26d44009240d550a6a66dd87466647e->leave($__internal_dc8f193295f8f0377c2e609197d51ccce26d44009240d550a6a66dd87466647e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22a80c94f1b8c22419e5841b9a4ed67b1c3ccbe57b44ff5e959a76625491cf26 = $this->env->getExtension("native_profiler");
        $__internal_22a80c94f1b8c22419e5841b9a4ed67b1c3ccbe57b44ff5e959a76625491cf26->enter($__internal_22a80c94f1b8c22419e5841b9a4ed67b1c3ccbe57b44ff5e959a76625491cf26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22a80c94f1b8c22419e5841b9a4ed67b1c3ccbe57b44ff5e959a76625491cf26->leave($__internal_22a80c94f1b8c22419e5841b9a4ed67b1c3ccbe57b44ff5e959a76625491cf26_prof);

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
