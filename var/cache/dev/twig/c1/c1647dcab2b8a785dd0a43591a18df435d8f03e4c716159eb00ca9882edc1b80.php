<?php

/* MyAppHotelBundle:Hotel:afficheAllHotel.html.twig */
class __TwigTemplate_0dc5f27417397663ba9fee4641f777a7f0fc39b0a1a268d6c6575644ee5635f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig", 1);
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
        $__internal_22afe293e8347afe66731e1be8b35675ff66f97164a66815cfdd6e7d9741eff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22afe293e8347afe66731e1be8b35675ff66f97164a66815cfdd6e7d9741eff9->enter($__internal_22afe293e8347afe66731e1be8b35675ff66f97164a66815cfdd6e7d9741eff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22afe293e8347afe66731e1be8b35675ff66f97164a66815cfdd6e7d9741eff9->leave($__internal_22afe293e8347afe66731e1be8b35675ff66f97164a66815cfdd6e7d9741eff9_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_594130c9d2cf654239662b70a315ba34b2ddf38c289537a29589ee07ec4b06a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594130c9d2cf654239662b70a315ba34b2ddf38c289537a29589ee07ec4b06a9->enter($__internal_594130c9d2cf654239662b70a315ba34b2ddf38c289537a29589ee07ec4b06a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_594130c9d2cf654239662b70a315ba34b2ddf38c289537a29589ee07ec4b06a9->leave($__internal_594130c9d2cf654239662b70a315ba34b2ddf38c289537a29589ee07ec4b06a9_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_8073fdae4d36807439367af339fe18ea3bdd8a3170d6c4342c21a4b2d6b7119d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8073fdae4d36807439367af339fe18ea3bdd8a3170d6c4342c21a4b2d6b7119d->enter($__internal_8073fdae4d36807439367af339fe18ea3bdd8a3170d6c4342c21a4b2d6b7119d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig"));

        // line 4
        echo "
<h1> la liste de tous les hotels</h1>

<form method=\"GET\">
";
        // line 9
        echo "<div class=\"count\">
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " hotel trouvé
</div>
<table>
    <tr>
        ";
        // line 15
        echo "        <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
        <th";
        // line 16
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
    </tr>
    ";
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 20
            echo "    <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
<form>
    <fieldset style=\"width:360px;\">
        <legend>
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "
        </legend>
        ID : ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idHotel", array()), "html", null, true);
            echo " <br>
        Ville : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ville", array()), "html", null, true);
            echo " <br>
        Etoile : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "etoile", array()), "html", null, true);
            echo "<br>
        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Update_hotel", array("id" => $this->getAttribute($context["m"], "idHotel", array()))), "html", null, true);
            echo "\">modifier</a>
        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Delete_hotel", array("id" => $this->getAttribute($context["m"], "idHotel", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet hotel   ?')\">
            supprimer </a>

    </fieldset>
</form>
    </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table>
    ";
        // line 39
        echo "    <div class=\"navigation\">
        ";
        // line 40
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>
</form>
";
        
        $__internal_8073fdae4d36807439367af339fe18ea3bdd8a3170d6c4342c21a4b2d6b7119d->leave($__internal_8073fdae4d36807439367af339fe18ea3bdd8a3170d6c4342c21a4b2d6b7119d_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 40,  156 => 39,  153 => 37,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  111 => 24,  101 => 20,  83 => 19,  74 => 16,  69 => 15,  62 => 10,  59 => 9,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
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

<h1> la liste de tous les hotels</h1>

<form method=\"GET\">
{# total items count #}
<div class=\"count\">
    {{ pagination.getTotalItemCount }} hotel trouvé
</div>
<table>
    <tr>
        {# sorting of properties based on query components #}
        <th>{{ knp_pagination_sortable(pagination, 'Id', 'a.id') }}</th>
        <th{% if pagination.isSorted('a.Title') %} class=\"sorted\"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>
    </tr>
    {# table body #}
    {% for m in pagination %}
    <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
<form>
    <fieldset style=\"width:360px;\">
        <legend>
            {{ m.nom }}
        </legend>
        ID : {{ m.idHotel }} <br>
        Ville : {{ m.ville }} <br>
        Etoile : {{ m.etoile }}<br>
        <a href=\"{{ path('Update_hotel',{'id': m.idHotel })}}\">modifier</a>
        <a href=\"{{ path('Delete_hotel',{'id': m.idHotel })}}\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet hotel   ?')\">
            supprimer </a>

    </fieldset>
</form>
    </tr>
    {% endfor %}
</table>
    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>
</form>
{% endblock content %}
{% endblock video %}
", "MyAppHotelBundle:Hotel:afficheAllHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Hotel/afficheAllHotel.html.twig");
    }
}
