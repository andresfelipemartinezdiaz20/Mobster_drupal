<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__958464dae459a7c0547bf0d8fe2c76682ec897b60b8e2a1d53359cef5a00e8ca */
class __TwigTemplate_fd14459b0d2c9eceedaa86c487cd5e0ee36b389a18200b81aa21fb01a5114789 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"info\">
   <div class=\"views-field views-field-field-editor-  mai-globe\">
       <div class=\"field-content\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_editor_"] ?? null)), "html", null, true);
        echo "</div>
   </div>
   <div class=\"views-field views-field-title\"> 
       <h1 class=\"field-content\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h1>
   </div>
   <div class=\"views-field views-field-field-description\">
       <p>";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_description"] ?? null)), "html", null, true);
        echo "</p> 
   </div>
   <a href=\"#\" class=\"btn btn-primary rounded-pill\">Get App Now</a>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__958464dae459a7c0547bf0d8fe2c76682ec897b60b8e2a1d53359cef5a00e8ca";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  65 => 6,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"info\">
   <div class=\"views-field views-field-field-editor-  mai-globe\">
       <div class=\"field-content\">{{ field_editor_ }}</div>
   </div>
   <div class=\"views-field views-field-title\"> 
       <h1 class=\"field-content\">{{ title }}</h1>
   </div>
   <div class=\"views-field views-field-field-description\">
       <p>{{ field_description }}</p> 
   </div>
   <a href=\"#\" class=\"btn btn-primary rounded-pill\">Get App Now</a>
</div>", "__string_template__958464dae459a7c0547bf0d8fe2c76682ec897b60b8e2a1d53359cef5a00e8ca", "");
    }
}
