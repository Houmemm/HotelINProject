<?php

/* MyAppHotelBundle:Hotel:affiche.html.twig */
class __TwigTemplate_4c3a13aceda4d2bb5371563065d6fb084c7ed40531c0237c1c5f13b4a06eddeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@MyAppUser/layout.html.twig", "MyAppHotelBundle:Hotel:affiche.html.twig", 1);
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
        $__internal_e8c04f4a5f3c8dc0a485e5a0660c179f9d7c70cbba5080c0b75b3deac183157f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c04f4a5f3c8dc0a485e5a0660c179f9d7c70cbba5080c0b75b3deac183157f->enter($__internal_e8c04f4a5f3c8dc0a485e5a0660c179f9d7c70cbba5080c0b75b3deac183157f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAppHotelBundle:Hotel:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8c04f4a5f3c8dc0a485e5a0660c179f9d7c70cbba5080c0b75b3deac183157f->leave($__internal_e8c04f4a5f3c8dc0a485e5a0660c179f9d7c70cbba5080c0b75b3deac183157f_prof);

    }

    // line 2
    public function block_video($context, array $blocks = array())
    {
        $__internal_1869d1281bd40c4693e629585b84e5117230f5dba134ba2327288e907f5c8f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1869d1281bd40c4693e629585b84e5117230f5dba134ba2327288e907f5c8f61->enter($__internal_1869d1281bd40c4693e629585b84e5117230f5dba134ba2327288e907f5c8f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:affiche.html.twig"));

        // line 3
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_1869d1281bd40c4693e629585b84e5117230f5dba134ba2327288e907f5c8f61->leave($__internal_1869d1281bd40c4693e629585b84e5117230f5dba134ba2327288e907f5c8f61_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_68c48c486e565b7534ff1e23955dd3337772a237d585aafb485f5e315c1290d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c48c486e565b7534ff1e23955dd3337772a237d585aafb485f5e315c1290d9->enter($__internal_68c48c486e565b7534ff1e23955dd3337772a237d585aafb485f5e315c1290d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "MyAppHotelBundle:Hotel:affiche.html.twig"));

        // line 4
        echo "
        <h1> la liste de tous les hotels</h1>

        <form method=\"GET\">
            ";
        // line 9
        echo "            <div class=\"count\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " hotel trouvé
            </div>
            <table>
                <tr>
                    ";
        // line 15
        echo "                    <th>";
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
        echo "                ";
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
            echo "                    <tr ";
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
        // line 34
        echo "            </table>
            ";
        // line 36
        echo "            <div class=\"navigation\">
                ";
        // line 37
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </form>
    ";
        
        $__internal_68c48c486e565b7534ff1e23955dd3337772a237d585aafb485f5e315c1290d9->leave($__internal_68c48c486e565b7534ff1e23955dd3337772a237d585aafb485f5e315c1290d9_prof);

    }

    public function getTemplateName()
    {
        return "MyAppHotelBundle:Hotel:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  148 => 36,  145 => 34,  125 => 28,  121 => 27,  117 => 26,  112 => 24,  102 => 20,  84 => 19,  75 => 16,  70 => 15,  63 => 10,  60 => 9,  54 => 4,  41 => 3,  35 => 2,  11 => 1,);
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
", "MyAppHotelBundle:Hotel:affiche.html.twig", "C:\\wamp64\\www\\HolidaysIN-le-mien\\src\\MyApp\\HotelBundle/Resources/views/Hotel/affiche.html.twig");
    }
}
