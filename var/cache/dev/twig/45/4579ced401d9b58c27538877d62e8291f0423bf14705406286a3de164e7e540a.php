<?php

/* MyAppHotelBundle:Chambre:updateChambre.html.twig */
class __TwigTemplate_c117bd236fb52971695444562f6c10a9ef202d3b4bdb8045f6595546fff88a13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Chambre:updateChambre.html.twig", 1);
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
        $__internal_2488a1b26f6fa5fba5d54bbe22fb53f480a4876ebbc485887bee87057c258e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2488a1b26f6fa5fba5d54bbe22fb53f480a4876ebbc485887bee87057c258e3f->enter($__internal_2488a1b26f6fa5fba5d54bbe22fb53f480a4876ebbc485887bee87057c258e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Chambre:updateChambre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2488a1b26f6fa5fba5d54bbe22fb53f480a4876ebbc485887bee87057c258e3f->leave($__internal_2488a1b26f6fa5fba5d54bbe22fb53f480a4876ebbc485887bee87057c258e3f_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_9c80399cddb7127c36d99d6b68aaed68aedaff32c2f9b0cdfea820a37b7ee481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c80399cddb7127c36d99d6b68aaed68aedaff32c2f9b0cdfea820a37b7ee481->enter($__internal_9c80399cddb7127c36d99d6b68aaed68aedaff32c2f9b0cdfea820a37b7ee481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Chambre:updateChambre.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_9c80399cddb7127c36d99d6b68aaed68aedaff32c2f9b0cdfea820a37b7ee481->leave($__internal_9c80399cddb7127c36d99d6b68aaed68aedaff32c2f9b0cdfea820a37b7ee481_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_df2b30a15e1f7a6fedb5765c70823fec074b1269b167d70f30b80524f93e7dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2b30a15e1f7a6fedb5765c70823fec074b1269b167d70f30b80524f93e7dd7->enter($__internal_df2b30a15e1f7a6fedb5765c70823fec074b1269b167d70f30b80524f93e7dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Chambre:updateChambre.html.twig"));

        // line 4
        echo "
<h1> Modifier une chambre  </h1>
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form');
        echo "

";
        
        $__internal_df2b30a15e1f7a6fedb5765c70823fec074b1269b167d70f30b80524f93e7dd7->leave($__internal_df2b30a15e1f7a6fedb5765c70823fec074b1269b167d70f30b80524f93e7dd7_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Chambre:updateChambre.html.twig";
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

<h1> Modifier une chambre  </h1>
{{  form(f) }}

{% endblock content %}
{% endblock video %}", "MyAppHotelBundle:Chambre:updateChambre.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Chambre/updateChambre.html.twig");
    }
}
