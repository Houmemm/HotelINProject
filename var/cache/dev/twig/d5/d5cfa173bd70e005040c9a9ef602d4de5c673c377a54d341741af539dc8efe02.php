<?php

/* MyAppHotelBundle:Hotel:updateHotel.html.twig */
class __TwigTemplate_25c576b67bff418cc58afcb4e7634b19c98cf75ab872750d7486bca44725a54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:updateHotel.html.twig", 1);
        $this->blocks = array(
            'video' => array($this, 'block_video'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@MyAppUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2c3a7886d984ed63a48f6cf4157e547081a1dda54c7047eb5cfb92b1560ccc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c3a7886d984ed63a48f6cf4157e547081a1dda54c7047eb5cfb92b1560ccc9->enter($__internal_d2c3a7886d984ed63a48f6cf4157e547081a1dda54c7047eb5cfb92b1560ccc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:updateHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c3a7886d984ed63a48f6cf4157e547081a1dda54c7047eb5cfb92b1560ccc9->leave($__internal_d2c3a7886d984ed63a48f6cf4157e547081a1dda54c7047eb5cfb92b1560ccc9_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_1584b652ccc7a0b21de35bacaccd354ee6da993ec85d23475eb5d1dde5645db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1584b652ccc7a0b21de35bacaccd354ee6da993ec85d23475eb5d1dde5645db3->enter($__internal_1584b652ccc7a0b21de35bacaccd354ee6da993ec85d23475eb5d1dde5645db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:updateHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_1584b652ccc7a0b21de35bacaccd354ee6da993ec85d23475eb5d1dde5645db3->leave($__internal_1584b652ccc7a0b21de35bacaccd354ee6da993ec85d23475eb5d1dde5645db3_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_62c561e909e86a816ab4aed99ec5adf3d0fed15bd19fe40651bb1dffd7bd91f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c561e909e86a816ab4aed99ec5adf3d0fed15bd19fe40651bb1dffd7bd91f1->enter($__internal_62c561e909e86a816ab4aed99ec5adf3d0fed15bd19fe40651bb1dffd7bd91f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:updateHotel.html.twig"));

        // line 4
        echo "
<h1>Modifier un hotel </h1>
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

";
        
        $__internal_62c561e909e86a816ab4aed99ec5adf3d0fed15bd19fe40651bb1dffd7bd91f1->leave($__internal_62c561e909e86a816ab4aed99ec5adf3d0fed15bd19fe40651bb1dffd7bd91f1_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:updateHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
{% block video  %}
{% block content %}

<h1>Modifier un hotel </h1>
{{  form(f) }}

{% endblock content %}
{% endblock video %}", "MyAppHotelBundle:Hotel:updateHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Hotel/updateHotel.html.twig");
    }
}
