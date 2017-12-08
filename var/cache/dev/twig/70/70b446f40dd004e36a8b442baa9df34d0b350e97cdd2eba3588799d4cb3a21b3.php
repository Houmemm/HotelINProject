<?php

/* MyAppHotelBundle:ReservationHotel:updateReservationHotel.html.twig */
class __TwigTemplate_9a7252d65cd83fd1e975a1c1d000a516b1eb634e97d1ced3a698f0fef4d71f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:ReservationHotel:updateReservationHotel.html.twig", 1);
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
        $__internal_2581d28bbbf0c3d6062ec25370272758f5a6f90c6e7917bba6dcce4cda2c12d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2581d28bbbf0c3d6062ec25370272758f5a6f90c6e7917bba6dcce4cda2c12d0->enter($__internal_2581d28bbbf0c3d6062ec25370272758f5a6f90c6e7917bba6dcce4cda2c12d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:ReservationHotel:updateReservationHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2581d28bbbf0c3d6062ec25370272758f5a6f90c6e7917bba6dcce4cda2c12d0->leave($__internal_2581d28bbbf0c3d6062ec25370272758f5a6f90c6e7917bba6dcce4cda2c12d0_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_75bd2cddbdf1ee165fed4dab698a759d6da5aad8fcc51ed41f8b0d1f87329b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bd2cddbdf1ee165fed4dab698a759d6da5aad8fcc51ed41f8b0d1f87329b4e->enter($__internal_75bd2cddbdf1ee165fed4dab698a759d6da5aad8fcc51ed41f8b0d1f87329b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:ReservationHotel:updateReservationHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_75bd2cddbdf1ee165fed4dab698a759d6da5aad8fcc51ed41f8b0d1f87329b4e->leave($__internal_75bd2cddbdf1ee165fed4dab698a759d6da5aad8fcc51ed41f8b0d1f87329b4e_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_2b1ff022d3276d301867433009651d1ce25141164326c71c3e666b69fe2afc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1ff022d3276d301867433009651d1ce25141164326c71c3e666b69fe2afc13->enter($__internal_2b1ff022d3276d301867433009651d1ce25141164326c71c3e666b69fe2afc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:ReservationHotel:updateReservationHotel.html.twig"));

        // line 4
        echo "

<h1>Modifier une reservation </h1>
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "


";
        
        $__internal_2b1ff022d3276d301867433009651d1ce25141164326c71c3e666b69fe2afc13->leave($__internal_2b1ff022d3276d301867433009651d1ce25141164326c71c3e666b69fe2afc13_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:ReservationHotel:updateReservationHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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


<h1>Modifier une reservation </h1>
{{  form(f) }}


{% endblock content %}
{% endblock video %}", "MyAppHotelBundle:ReservationHotel:updateReservationHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/ReservationHotel/updateReservationHotel.html.twig");
    }
}
