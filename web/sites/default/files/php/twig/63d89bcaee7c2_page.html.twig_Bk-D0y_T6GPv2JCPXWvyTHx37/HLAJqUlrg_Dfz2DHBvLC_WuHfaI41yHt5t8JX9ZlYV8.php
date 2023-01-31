<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/custom_theme/templates/layouts/page.html.twig */
class __TwigTemplate_5e8799c3330e2043e21b224e333d8c1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    ";
        // line 49
        echo "
    <div class=\"desktop\">
            <nav>
            <ul>
                <li><img src=\"images/logo.svg\" alt=\"logo\"></li>
                <li><a class=\"nav-text-grey\" href=\"#\">How we work</a></li>
                <li><a class=\"nav-text-grey\" href=\"#\">Blog</a></li>
                <li><a class=\"nav-text-grey\" href=\"#\">Account</a></li>
                <li><a class=\"button-black\" href=\"#\">View plans</a></li>
            </ul>
            </nav>
        </div>
        <div class=\"mobil\">
            <div class=\"div-header2\">
            <nav>
                <ul>
                <li class=\"g1-m\"><img src=\"";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo_image"] ?? null), 65, $this->source), "html", null, true);
        echo "\" alt=\"logo\"></li>
                <li class=\"g2-m\"><img class=\"button-menu\" src=\"/images/icon-hamburger.svg\" alt=\"hamburger\"></li>
                </ul>
            </nav>
            </div>
        </div>
    </header>

  ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 77
        echo "    <div class=\"all-main gr1 background-col\">
          <div class=\"main-div\">
            <section class=\"main-top-content\">
              <hr>
              <h1>Humanizing your insurance.</h1>
              <p>
                Get your life insurance coverage easier and faster. We blend our expertise
                and technology to help you find the plan that’s right for you. Ensure you
                and your loved ones are protected.
              </p>
              <a href=\"#\">View plans</a>
            </section>
          </div>
          <div class=\"light\">
            <a href=\"#img1\">
              <img src=\"images/image-intro-desktop.jpg\" alt=\"intro-desk\">
            </a>
          </div>

          <!-- <div class=\"light\"> -->
          <a class=\"lightbox\" id=\"img1\" href=\"#\">
            <span style=\"background-image: url('images/image-intro-desktop.jpg')\"></span>
          </a>
          <!-- </div> -->

          <!-- <img src=\"images/image-intro-desktop.jpg\"> -->
        </div>

        <div class=\"aux-div-main gr2\"></div>

        

        <section class=\"main-middle-content\">
          <h1>We’re different</h1>
          <div class=\"items-middle-content\">
            <div class=\"ga\">
              ";
        // line 117
        echo "                ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "info", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "
            </div>
            ";
        // line 131
        echo "          </div>
        </section>
        <div class=\"empty-space\"></div>

        <section class=\"banner-middle\">
          <div>
            <h1>
              Find out more about how we work
            </h1>
          </div>
          <div class=\"gc2\">
            <a href=\"#\">How we work</a>
          </div>
        </section>

    <div class=\"layout-content\">
      ";
        // line 148
        echo "    </div>";
        // line 149
        echo "
  </main>


  <footer role=\"contentinfo\">
    <div class=\"all-footer\">
        <div class=\"footer-header\">
          <div>
            <img src=\"images/logo.svg\" alt=\"logo\">
          </div>
          <div class=\"gc2\">
            <div class=\"block-sn\">
              <img src=\"images/icon-facebook.svg\" alt=\"facebook\">
              <img src=\"images/icon-twitter.svg\" alt=\"twitter\">
              <img src=\"images/icon-pinterest.svg\" alt=\"pinterest\">
              <img src=\"images/icon-instagram.svg\" alt=\"instagram\">
            </div>
          </div>
        </div>

        <div class=\"empty-space-foot\"></div>
        <div class=\"footer-desktop\">
          <div class=\"footer-nav-title\">
            <p>Our company</p>
            <p>Help me</p>
            <p>Contact</p>
            <p>Others</p>
          </div>

          <div class=\"footer-nav\">
            <div>
              <ul>
                <li><a class=\"nav-text-violet\" href=\"#\">How we work</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Why Insure?</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">View plans</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Reviews</a></li>
              </ul>
            </div>
            <div>
              <ul>
                <li><a class=\"nav-text-violet\" href=\"#\">FAQ</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Terms of use</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Privacy policy</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Cookies</a></li>
              </ul>
            </div>
            <div>
              <ul>
                <li><a class=\"nav-text-violet\" href=\"#\">Sales</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Support</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Live chat</a></li>
                <li><a class=\"nav-text-white\" href=\"#\">a</a></li>
              </ul>
            </div>
            <div>
              <ul>
                <li><a class=\"nav-text-violet\" href=\"#\">Careers</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Press</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Licenses</a></li>
                <li><a class=\"nav-text-white\" href=\"#\">a</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class=\"footer-mobil\">
          <div class=\"menu menu1\">
            <p>Our company</p>
            <div>
              <ul>
                <li><a class=\"nav-text-violet\" href=\"#\">How we work</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Why Insure?</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">View plans</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Reviews</a></li>
              </ul>
            </div>
          </div>

          <div class=\"menu menu2\">
            <p class=\"gc2\">Help me</p>
            <div class=\"gc2\">
              <ul>
                <li><a class=\"nav-text-violet\" href=\"#\">FAQ</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Terms of use</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Privacy policy</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Cookies</a></li>
              </ul>
            </div>
          </div>

          <div class=\"menu menu3\">
            <p class=\"gc3\">Contact</p>
            <div class=\"gc3\">
              <ul>
                <li><a class=\"nav-text-violet\" href=\"#\">Sales</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Support</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Live chat</a></li>
                <li><a class=\"nav-text-white\" href=\"#\">a</a></li>
              </ul>
            </div>
          </div>

          <div class=\"menu menu4\">
            <p class=\"gc4\">Others</p>
            <div class=\"gc4\">
              <ul>
                <li><a class=\"nav-text-violet\" href=\"#\">Careers</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Press</a></li>
                <li><a class=\"nav-text-violet\" href=\"#\">Licenses</a></li>
                <li><a class=\"nav-text-white\" href=\"#\">a</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </footer>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_theme/templates/layouts/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 149,  141 => 148,  123 => 131,  117 => 117,  79 => 77,  73 => 73,  62 => 65,  44 => 49,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custom_theme/templates/layouts/page.html.twig", "C:\\xampp\\htdocs\\dc-drupal-v2\\web\\themes\\custom\\custom_theme\\templates\\layouts\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 65);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
