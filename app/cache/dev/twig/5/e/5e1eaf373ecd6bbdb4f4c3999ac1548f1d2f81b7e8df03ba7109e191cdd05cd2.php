<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5e1eaf373ecd6bbdb4f4c3999ac1548f1d2f81b7e8df03ba7109e191cdd05cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd25a3926d4732109975281fbe42b350c3e0bbca9b0e7cf7a2f3e75fb904b6f2 = $this->env->getExtension("native_profiler");
        $__internal_bd25a3926d4732109975281fbe42b350c3e0bbca9b0e7cf7a2f3e75fb904b6f2->enter($__internal_bd25a3926d4732109975281fbe42b350c3e0bbca9b0e7cf7a2f3e75fb904b6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd25a3926d4732109975281fbe42b350c3e0bbca9b0e7cf7a2f3e75fb904b6f2->leave($__internal_bd25a3926d4732109975281fbe42b350c3e0bbca9b0e7cf7a2f3e75fb904b6f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5a2d5ce63030be8b7b7506256219f7ecc3f309cc72ea5809af002a343d5b1e7 = $this->env->getExtension("native_profiler");
        $__internal_e5a2d5ce63030be8b7b7506256219f7ecc3f309cc72ea5809af002a343d5b1e7->enter($__internal_e5a2d5ce63030be8b7b7506256219f7ecc3f309cc72ea5809af002a343d5b1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e5a2d5ce63030be8b7b7506256219f7ecc3f309cc72ea5809af002a343d5b1e7->leave($__internal_e5a2d5ce63030be8b7b7506256219f7ecc3f309cc72ea5809af002a343d5b1e7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8de057d6cf5265317b2b59d1da712b15de512ddf6a26f0a19ee50d00add4265c = $this->env->getExtension("native_profiler");
        $__internal_8de057d6cf5265317b2b59d1da712b15de512ddf6a26f0a19ee50d00add4265c->enter($__internal_8de057d6cf5265317b2b59d1da712b15de512ddf6a26f0a19ee50d00add4265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8de057d6cf5265317b2b59d1da712b15de512ddf6a26f0a19ee50d00add4265c->leave($__internal_8de057d6cf5265317b2b59d1da712b15de512ddf6a26f0a19ee50d00add4265c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad33de30e70bfd414cbc33c05f4a48684079dc08d794ada04213e52234ce0117 = $this->env->getExtension("native_profiler");
        $__internal_ad33de30e70bfd414cbc33c05f4a48684079dc08d794ada04213e52234ce0117->enter($__internal_ad33de30e70bfd414cbc33c05f4a48684079dc08d794ada04213e52234ce0117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ad33de30e70bfd414cbc33c05f4a48684079dc08d794ada04213e52234ce0117->leave($__internal_ad33de30e70bfd414cbc33c05f4a48684079dc08d794ada04213e52234ce0117_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
