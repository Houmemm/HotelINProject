<?php

/* MyAppHotelBundle:Hotel:afficheRechercheHotel.html.twig */
class __TwigTemplate_fbe62b5dbda7d6b077067299da183bb5b693ccbfb04d836fefb975ffd0f014a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:afficheRechercheHotel.html.twig", 1);
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
        $__internal_a6f6f499cc1aedb21a6ded730a6bcac6b742284a29bc871c1efb2623c7be79a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f6f499cc1aedb21a6ded730a6bcac6b742284a29bc871c1efb2623c7be79a3->enter($__internal_a6f6f499cc1aedb21a6ded730a6bcac6b742284a29bc871c1efb2623c7be79a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:afficheRechercheHotel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6f6f499cc1aedb21a6ded730a6bcac6b742284a29bc871c1efb2623c7be79a3->leave($__internal_a6f6f499cc1aedb21a6ded730a6bcac6b742284a29bc871c1efb2623c7be79a3_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_1889e9966192fb964c267a0e3b60854f3887fe5268743efe3a36b9f334eb33be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1889e9966192fb964c267a0e3b60854f3887fe5268743efe3a36b9f334eb33be->enter($__internal_1889e9966192fb964c267a0e3b60854f3887fe5268743efe3a36b9f334eb33be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:afficheRechercheHotel.html.twig"));

        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "
";
        
        $__internal_1889e9966192fb964c267a0e3b60854f3887fe5268743efe3a36b9f334eb33be->leave($__internal_1889e9966192fb964c267a0e3b60854f3887fe5268743efe3a36b9f334eb33be_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f02c058372c9a9dd8508f5222ea004ba3ce6b1b68bb87ff1f61515fa0ab46094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02c058372c9a9dd8508f5222ea004ba3ce6b1b68bb87ff1f61515fa0ab46094->enter($__internal_f02c058372c9a9dd8508f5222ea004ba3ce6b1b68bb87ff1f61515fa0ab46094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:afficheRechercheHotel.html.twig"));

        // line 4
        echo "
    <h2> la liste des hotels trouvés </h2>

";
        // line 8
        echo "<div class=\"count\">
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " hotel trouvé
</div>
<table>
    <tr>
        ";
        // line 14
        echo "        <th>";
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</th>
        <th";
        // line 15
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
            echo "        <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">

        <form>
            <fieldset style=\"width:360px;\">
                <legend>
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "
                </legend>
                ID : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idHotel", array()), "html", null, true);
            echo " <br>
                Ville : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "ville", array()), "html", null, true);
            echo " <br>
                Etoile : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "etoile", array()), "html", null, true);
            echo "<br>

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

";
        
        $__internal_f02c058372c9a9dd8508f5222ea004ba3ce6b1b68bb87ff1f61515fa0ab46094->leave($__internal_f02c058372c9a9dd8508f5222ea004ba3ce6b1b68bb87ff1f61515fa0ab46094_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:afficheRechercheHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 40,  154 => 39,  151 => 37,  129 => 29,  125 => 28,  121 => 27,  116 => 25,  105 => 20,  87 => 19,  77 => 15,  72 => 14,  65 => 9,  62 => 8,  57 => 4,  51 => 3,  43 => 44,  41 => 3,  35 => 2,  11 => 1,);
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

    <h2> la liste des hotels trouvés </h2>

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

            </fieldset>
        </form>


        </tr>
    {% endfor %}
</table>
    {# display navigation #}
    <div class=\"navigation\">
        {{ knp_pagination_render(pagination) }}
    </div>

{% endblock content %}

{% endblock video %}", "MyAppHotelBundle:Hotel:afficheRechercheHotel.html.twig", "C:\\wamp64\\www\\HolidaysIN\\src\\MyApp\\HotelBundle/Resources/views/Hotel/afficheRechercheHotel.html.twig");
    }
}
