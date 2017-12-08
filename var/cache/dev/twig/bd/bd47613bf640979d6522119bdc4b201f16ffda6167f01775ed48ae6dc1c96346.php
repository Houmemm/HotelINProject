<?php

/* MyAppHotelBundle:Default:index.html.twig */
class __TwigTemplate_1eb0de12e0dd0819f86f513437950734d2dd3ee9e863777d320f8ee619bc2e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MyAppUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35516e81220b91f098b76134acf3b3b632987527ed4878d963a3f7e2179515a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35516e81220b91f098b76134acf3b3b632987527ed4878d963a3f7e2179515a2->enter($__internal_35516e81220b91f098b76134acf3b3b632987527ed4878d963a3f7e2179515a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35516e81220b91f098b76134acf3b3b632987527ed4878d963a3f7e2179515a2->leave($__internal_35516e81220b91f098b76134acf3b3b632987527ed4878d963a3f7e2179515a2_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@MyAppUser/layout.html.twig\" %}
", "MyAppHotelBundle:Default:index.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Default/index.html.twig");
    }
}
