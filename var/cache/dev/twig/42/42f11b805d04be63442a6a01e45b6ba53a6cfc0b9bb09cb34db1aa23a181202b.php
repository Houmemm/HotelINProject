<?php

/* MyAppHotelBundle:Chambre:afficheAllChambre.html.twig */
class __TwigTemplate_1d9ee53231d03316cf547db195acecf6daeb97eb6065a1986a81b6885cdfdeee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Chambre:afficheAllChambre.html.twig", 1);
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
        $__internal_493c09fbd637ef94e5c3de7b2c00047c453de613c550d8d5d9f2b82699a5e52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493c09fbd637ef94e5c3de7b2c00047c453de613c550d8d5d9f2b82699a5e52f->enter($__internal_493c09fbd637ef94e5c3de7b2c00047c453de613c550d8d5d9f2b82699a5e52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Chambre:afficheAllChambre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_493c09fbd637ef94e5c3de7b2c00047c453de613c550d8d5d9f2b82699a5e52f->leave($__internal_493c09fbd637ef94e5c3de7b2c00047c453de613c550d8d5d9f2b82699a5e52f_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_7e789ebecb470b985d15c085db04a95e0a5df974e9663729ff3db9edeb89d0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e789ebecb470b985d15c085db04a95e0a5df974e9663729ff3db9edeb89d0bc->enter($__internal_7e789ebecb470b985d15c085db04a95e0a5df974e9663729ff3db9edeb89d0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Chambre:afficheAllChambre.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "
";
        
        $__internal_7e789ebecb470b985d15c085db04a95e0a5df974e9663729ff3db9edeb89d0bc->leave($__internal_7e789ebecb470b985d15c085db04a95e0a5df974e9663729ff3db9edeb89d0bc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d7eed704bd5c0240ceea11afe313067858416db1475d01214a46ab9820c22077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7eed704bd5c0240ceea11afe313067858416db1475d01214a46ab9820c22077->enter($__internal_d7eed704bd5c0240ceea11afe313067858416db1475d01214a46ab9820c22077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Chambre:afficheAllChambre.html.twig"));

        // line 4
        echo "<h1> la liste de tous les chambres </h1>
<table border=\"1\">
    <tr>
        <th>id</th>
        <th> hotel </th>
        <th>nbre de place</th>
        <th>prix </th>
        <th>dispoibilite </th>
        <th>supprimer</th>
        <th>Modifier</th>

    </tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ms"]) ? $context["ms"] : $this->getContext($context, "ms")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 17
            echo "        <tr>
            <td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idChambre", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idHotel", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nbrePlace", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo "</td>
            <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "disponible", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Delete_Chambre", array("id" => $this->getAttribute($context["m"], "idChambre", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cette chambre  ?')\">
                    supprimer
                </a>


            </td>
            <td>
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("update_chambre", array("id" => $this->getAttribute($context["m"], "idChambre", array()))), "html", null, true);
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
        // line 37
        echo "</table>
";
        
        $__internal_d7eed704bd5c0240ceea11afe313067858416db1475d01214a46ab9820c22077->leave($__internal_d7eed704bd5c0240ceea11afe313067858416db1475d01214a46ab9820c22077_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Chambre:afficheAllChambre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  109 => 31,  99 => 24,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  75 => 17,  71 => 16,  57 => 4,  51 => 3,  43 => 39,  41 => 3,  35 => 2,  11 => 1,);
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
<h1> la liste de tous les chambres </h1>
<table border=\"1\">
    <tr>
        <th>id</th>
        <th> hotel </th>
        <th>nbre de place</th>
        <th>prix </th>
        <th>dispoibilite </th>
        <th>supprimer</th>
        <th>Modifier</th>

    </tr>
    {% for m in ms %}
        <tr>
            <td> {{ m.idChambre }}</td>
            <td> {{ m.idHotel }}</td>
            <td> {{ m.nbrePlace }}</td>
            <td> {{ m.prix }}</td>
            <td> {{ m.disponible }}</td>
            <td>
                <a href=\"{{ path('Delete_Chambre',{'id': m.idChambre })}}\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cette chambre  ?')\">
                    supprimer
                </a>


            </td>
            <td>
                <a href=\"{{ path('update_chambre',{'id':  m.idChambre})}}\">
                    modifier
                </a>
            </td>
        </tr>
    {% endfor %}
</table>
{% endblock content %}

{% endblock video %}", "MyAppHotelBundle:Chambre:afficheAllChambre.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Chambre/afficheAllChambre.html.twig");
    }
}
