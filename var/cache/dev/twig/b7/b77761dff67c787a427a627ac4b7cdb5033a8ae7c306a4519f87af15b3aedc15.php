<?php

/* MyAppHotelBundle:ReservationHotel:afficheAllReservation.html.twig */
class __TwigTemplate_1467f0219cb9276da2dc6d763e12a133fb8c8ef6fa2cca91306230b9a4a30c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:ReservationHotel:afficheAllReservation.html.twig", 1);
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
        $__internal_2d295686f66914b1ec318ef4742703e63177cfe1edda3fe6c336d891a513b8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d295686f66914b1ec318ef4742703e63177cfe1edda3fe6c336d891a513b8f1->enter($__internal_2d295686f66914b1ec318ef4742703e63177cfe1edda3fe6c336d891a513b8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:ReservationHotel:afficheAllReservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d295686f66914b1ec318ef4742703e63177cfe1edda3fe6c336d891a513b8f1->leave($__internal_2d295686f66914b1ec318ef4742703e63177cfe1edda3fe6c336d891a513b8f1_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_5e8170835a9bb1b865aea4ed0da4beeaf8ce5f863beddd4bae6c4fedc176aed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8170835a9bb1b865aea4ed0da4beeaf8ce5f863beddd4bae6c4fedc176aed1->enter($__internal_5e8170835a9bb1b865aea4ed0da4beeaf8ce5f863beddd4bae6c4fedc176aed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:ReservationHotel:afficheAllReservation.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5e8170835a9bb1b865aea4ed0da4beeaf8ce5f863beddd4bae6c4fedc176aed1->leave($__internal_5e8170835a9bb1b865aea4ed0da4beeaf8ce5f863beddd4bae6c4fedc176aed1_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_8d100561df7b66b67063e2dca1a57b8309e675c67a0d701dd9d6ae4a7407a169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d100561df7b66b67063e2dca1a57b8309e675c67a0d701dd9d6ae4a7407a169->enter($__internal_8d100561df7b66b67063e2dca1a57b8309e675c67a0d701dd9d6ae4a7407a169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:ReservationHotel:afficheAllReservation.html.twig"));

        // line 4
        echo "
<h1> la liste de tous les reservations</h1>


<table border=\"1\">
    <tr>
        <th>id</th>
        <th> client </th>
        <th> hotel </th>
        <th>date de reservation</th>
        <th>dateDebut </th>
        <th>dateFin  </th>
        <th>supprimer</th>
        <th>Modifier</th>

    </tr>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ms"]) ? $context["ms"] : $this->getContext($context, "ms")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 21
            echo "        <tr>
            <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idResHotel", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idClient", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idChambre", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "date", array()), "d/m/y"), "html", null, true);
            echo "</td>
            <td> ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateDebut", array()), "d/m/y"), "html", null, true);
            echo "</td>
            <td> ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateFin", array()), "d/m/y"), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Delete_reservationHotel", array("id" => $this->getAttribute($context["m"], "idResHotel", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cette reservation   ?')\">
                    supprimer
                </a>

            </td>
            <td>
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_reservationHotel", array("id" => $this->getAttribute($context["m"], "idResHotel", array()))), "html", null, true);
            echo "\">
                    modifier
                </a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</table>



";
        
        $__internal_8d100561df7b66b67063e2dca1a57b8309e675c67a0d701dd9d6ae4a7407a169->leave($__internal_8d100561df7b66b67063e2dca1a57b8309e675c67a0d701dd9d6ae4a7407a169_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:ReservationHotel:afficheAllReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  112 => 35,  103 => 29,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  75 => 21,  71 => 20,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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

<h1> la liste de tous les reservations</h1>


<table border=\"1\">
    <tr>
        <th>id</th>
        <th> client </th>
        <th> hotel </th>
        <th>date de reservation</th>
        <th>dateDebut </th>
        <th>dateFin  </th>
        <th>supprimer</th>
        <th>Modifier</th>

    </tr>
    {% for m in ms %}
        <tr>
            <td> {{ m.idResHotel }}</td>
            <td> {{ m.idClient }}</td>
            <td> {{ m.idChambre }}</td>
            <td> {{ m.date | date('d/m/y') }}</td>
            <td> {{ m.dateDebut | date('d/m/y')}}</td>
            <td> {{ m.dateFin | date('d/m/y') }}</td>
            <td>
                <a href=\"{{ path('Delete_reservationHotel',{'id': m.idResHotel })}}\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cette reservation   ?')\">
                    supprimer
                </a>

            </td>
            <td>
                <a href=\"{{ path('update_reservationHotel',{'id': m.idResHotel })}}\">
                    modifier
                </a>
            </td>
        </tr>
    {% endfor %}
</table>



{% endblock content %}
{% endblock video %}", "MyAppHotelBundle:ReservationHotel:afficheAllReservation.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/ReservationHotel/afficheAllReservation.html.twig");
    }
}
