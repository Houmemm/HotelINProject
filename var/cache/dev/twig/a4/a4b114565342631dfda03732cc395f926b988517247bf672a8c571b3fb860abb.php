<?php

/* MyAppHotelBundle:Hotel:rechercheHotel.html.twig */
class __TwigTemplate_cb482cee84a9c360d9818a18e709e63ba37935323a7a8806a12b7735d5c073db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig", 1);
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
        $__internal_b5dcde5c307b60f8d6c4ad6db804aeb33b1ae0bd8c330a21f1394225f544fb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dcde5c307b60f8d6c4ad6db804aeb33b1ae0bd8c330a21f1394225f544fb6b->enter($__internal_b5dcde5c307b60f8d6c4ad6db804aeb33b1ae0bd8c330a21f1394225f544fb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5dcde5c307b60f8d6c4ad6db804aeb33b1ae0bd8c330a21f1394225f544fb6b->leave($__internal_b5dcde5c307b60f8d6c4ad6db804aeb33b1ae0bd8c330a21f1394225f544fb6b_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_5388cf11d6ce7b3f1129efbccce8275f787053091a60217814cec180eebeba58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5388cf11d6ce7b3f1129efbccce8275f787053091a60217814cec180eebeba58->enter($__internal_5388cf11d6ce7b3f1129efbccce8275f787053091a60217814cec180eebeba58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_5388cf11d6ce7b3f1129efbccce8275f787053091a60217814cec180eebeba58->leave($__internal_5388cf11d6ce7b3f1129efbccce8275f787053091a60217814cec180eebeba58_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c32917af121c960d2382dc70b37bae87f81efb02e2c53fc3989536652e253bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c32917af121c960d2382dc70b37bae87f81efb02e2c53fc3989536652e253bd->enter($__internal_4c32917af121c960d2382dc70b37bae87f81efb02e2c53fc3989536652e253bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig"));

        // line 4
        echo "

<h1>rechercher hotel  par nom ou ville </h1>


    <form method=\"post\">

        nom : <input type=\"text\" name=\"nom\">


        <input type=\"submit\" value=\"rechercher\">
    </form>



";
        
        $__internal_4c32917af121c960d2382dc70b37bae87f81efb02e2c53fc3989536652e253bd->leave($__internal_4c32917af121c960d2382dc70b37bae87f81efb02e2c53fc3989536652e253bd_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:rechercheHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  51 => 3,  43 => 20,  41 => 3,  35 => 2,  11 => 1,);
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


<h1>rechercher hotel  par nom ou ville </h1>


    <form method=\"post\">

        nom : <input type=\"text\" name=\"nom\">


        <input type=\"submit\" value=\"rechercher\">
    </form>



{% endblock content %}

{% endblock video %}", "MyAppHotelBundle:Hotel:rechercheHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN\\src\\MyApp\\HotelBundle/Resources/views/Hotel/rechercheHotel.html.twig");
    }
}
