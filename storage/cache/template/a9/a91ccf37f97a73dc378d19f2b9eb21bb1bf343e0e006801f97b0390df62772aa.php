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

/* extension/module/poptin.twig */
class __TwigTemplate_de091e6662dc82f518b494d665bc7c8e8e370d0ddf959d8923dc360e21110985 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t";
        // line 3
        if (twig_test_empty((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["poptin_values"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["poptin_CLIENT_ID"] ?? null) : null))) {
            // line 4
            echo "\t\t";
            $context["sh_status"] = "show";
            // line 5
            echo "\t\t";
            $context["dash_status"] = "hide";
            // line 6
            echo "\t";
        } else {
            // line 7
            echo "\t\t";
            $context["sh_status"] = "hide";
            // line 8
            echo "\t\t";
            $context["dash_status"] = "show";
            // line 9
            echo "\t";
        }
        // line 10
        echo "\t";
        if (twig_test_empty((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["poptin_values"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["poptin_TOKEN"] ?? null) : null))) {
            // line 11
            echo "\t\t";
            $context["d_link_status"] = "none";
            // line 12
            echo "\t\t";
            $context["d_link_status1"] = "block";
            // line 13
            echo "\t";
        } else {
            // line 14
            echo "\t\t";
            $context["d_link_status"] = "block";
            // line 15
            echo "\t\t";
            $context["d_link_status1"] = "none";
            // line 16
            echo "\t";
        }
        // line 17
        echo "\t<div class=\"poptin-overlay\" style=\"display: none;\"></div>
\t<div id=\"poptin_main\">
\t\t<div class=\"poptinLogo\"><img src=\"";
        // line 19
        echo ($context["module_img_dir"] ?? null);
        echo "poptinlogo.png\" alt=\"\" > </div>
\t\t<!--/logo-->
\t\t<div class=\"poptin_forms ";
        // line 21
        echo ($context["sh_status"] ?? null);
        echo " poptin_registration\">
\t\t  <div class=\"pforms_wrap register_form\">
\t\t\t<div class=\"pforms_wrap_inner\">
\t\t\t\t<div class=\"pforms_head\">
\t\t\t\t   <ul>
\t\t\t\t\t  <li>
\t\t\t\t\t\t <h3>Sign up for free</h3>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li><a href=\"#\" id=\"login_form\">Already have an account?</a></li>
\t\t\t\t   </ul>
\t\t\t\t</div>
\t\t\t\t<!--/pforms_head-->
\t\t\t\t<div class=\"form_box\">
\t\t\t\t   <form method=\"post\" id=\"popin_signup\">
\t\t\t\t\t  <input type=\"text\" id=\"popin_email\" class=\"input_box\" name=\"email\" placeholder=\"Enter your email\">
\t\t\t\t\t  <div class=\"bottom_form\">
\t\t\t\t\t\t <input type=\"submit\" value=\"Sign Up\"  class=\"ppsubmit\">
\t\t\t\t\t  </div>
\t\t\t\t   </form>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t <!--/pforms_wrap_inner-->        
\t\t  </div>
\t\t\t<!--/register_form-->
\t\t\t<div class=\"pforms_wrap login_form\" style=\"display:none;\">
\t\t\t <div class=\"pforms_wrap_inner\">
\t\t\t\t<div class=\"pforms_head\">
\t\t\t\t   <ul>
\t\t\t\t\t  <li>
\t\t\t\t\t\t <h3>Enter your user ID</h3>
\t\t\t\t\t  </li>
\t\t\t\t\t  <li><a href=\"#\" id=\"register_form\">Sign up for free</a></li>
\t\t\t\t   </ul>
\t\t\t\t</div>
\t\t\t\t<!--/pforms_head-->
\t\t\t\t<div class=\"form_box\">
\t\t\t\t   <form method=\"post\" id=\"popin_id_register\">
\t\t\t\t\t  <input type=\"text\" class=\"input_box\" id=\"pop_up_id\" placeholder=\"Enter your User ID\" />
\t\t\t\t\t  <div class=\"bottom_form\">
\t\t\t\t\t\t <a class=\"wheremyid\" href=\"#\" data-toggle=\"modal\" data-target=\".whereis_myid\">Where is my user ID? </a>
\t\t\t\t\t\t <input type=\"submit\" value=\"Connect\" class=\"ppsubmit\" />                                        
\t\t\t\t\t  </div>
\t\t\t\t   </form>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t <!--/pforms_wrap_inner-->        
\t\t  </div>
\t\t  <!--/register_form-->
\t\t</div>
\t\t<!--/poptin_forms-->
\t\t<div class=\"poptin_logged ";
        // line 71
        echo ($context["dash_status"] ?? null);
        echo "\">
\t\t  <div class=\"poptin_logged_box\">
\t\t\t <h2>You're all set!</h2>
\t\t\t <div class=\"tinyborder\"></div>
\t\t\t <span class=\"everythinglooks\">Click on the button below<br>to manage your poptins</span>
\t\t\t <img src=\"";
        // line 76
        echo ($context["module_img_dir"] ?? null);
        echo "vicon.png\" alt=\"\">
\t\t\t <a href=\"";
        // line 77
        echo ($context["module_ajax"] ?? null);
        echo "&poptin_logmein=true\" target=\"_blank\" style=\"display:";
        echo ($context["d_link_status"] ?? null);
        echo "\" class=\"ppcontrolpanel goto_dashboard_button_pp_updatable with_token\">Go to Dashboard</a>
\t\t\t <a href=\"https://app.popt.in/login\" style=\"display:";
        // line 78
        echo ($context["d_link_status1"] ?? null);
        echo "\" target=\"_blank\" class=\"ppcontrolpanel goto_dashboard_button_pp_updatable without_token\">Go to Dashboard</a>
\t\t\t <a href=\"#logout\" data-toggle=\"modal\" data-target=\".deactivate_poptin_popup\" class=\"pplogout\">Deactivate Poptin</a>
\t\t  </div>
\t\t  <!--/poptin_logged_box-->
\t   </div>
\t   <div class=\"poptin_content ";
        // line 83
        echo ($context["sh_status"] ?? null);
        echo " poptin_registration\">
\t\t  <h2>Create your first poptin with ease</h2>
\t\t  <div class=\"tinyborder\"></div>
\t\t  <div class=\"pvideo_box\">
\t\t\t <div class=\"pvideo_box_in\">                        <div style=\"width:100%;height:100%;width: 905px; height: 509px; float: none; clear: both; margin: 2px auto;\">              <embed src=\"https://www.youtube.com/v/R_B8L3abt7Q?version=3&amp;hl=en_US&amp;rel=0&amp;showinfo=0\" wmode=\"transparent\" type=\"application/x-shockwave-flash\" width=\"100%\" height=\"100%\" allowfullscreen=\"true\" title=\"Adobe Flash Player\">            </div>
\t\t\t </div>
\t\t\t <!--/pvideo_box_in--->
\t\t  </div>
\t\t  <!--/pvideo_box-->
\t   </div>
\t   <!--/poptin_content-->
\t   <div class=\"poptin_content whychoose_sec ";
        // line 94
        echo ($context["sh_status"] ?? null);
        echo " poptin_registration\">
\t\t  <h2>Here's What Poptin Can Do For You</h2>
\t\t  <div class=\"tinyborder\"></div>
\t\t  <div class=\"pcontent_in\">
\t\t\t <div class=\"whychoose_list\">
\t\t\t\t<ul>
\t\t\t\t   <li>
\t\t\t\t\t  <div class=\"box boxEnv\">
\t\t\t\t\t\t <div class=\"boxIcon\"><img src=\"";
        // line 102
        echo ($context["module_img_dir"] ?? null);
        echo "envelope.png\" alt=\"\" /></div>
\t\t\t\t\t\t <h4>Get more email subscribers</h4>
\t\t\t\t\t  </div>
\t\t\t\t   </li>
\t\t\t\t   <li>
\t\t\t\t\t  <div class=\"box boxLeads\">
\t\t\t\t\t\t <div class=\"boxIcon\"><img src=\"";
        // line 108
        echo ($context["module_img_dir"] ?? null);
        echo "fanel.png\" alt=\"\" /></div>
\t\t\t\t\t\t <h4>Get more leads and sales</h4>
\t\t\t\t\t  </div>
\t\t\t\t   </li>
\t\t\t\t   <li>
\t\t\t\t\t  <div class=\"box boxCart\">
\t\t\t\t\t\t <div class=\"boxIcon\"><img src=\"";
        // line 114
        echo ($context["module_img_dir"] ?? null);
        echo "wheel.png\" alt=\"\" /></div>
\t\t\t\t\t\t <h4>Reduce shopping cart abandonment</h4>
\t\t\t\t\t  </div>
\t\t\t\t   </li>
\t\t\t\t   <li>
\t\t\t\t\t  <div class=\"box boxHeart\">
\t\t\t\t\t\t <div class=\"boxIcon\"><img src=\"";
        // line 120
        echo ($context["module_img_dir"] ?? null);
        echo "heart.png\" alt=\"\" /></div>
\t\t\t\t\t\t <h4>Increase visitors' engagement</h4>
\t\t\t\t\t  </div>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t\t </div>
\t\t\t <!--/whychoose_list-->    
\t\t  </div>
\t\t  <!--/pcontent_in-->            \t
\t   </div>
\t   <!--/poptin_content-->
\t   <div class=\"poptin_content digital_marketers ";
        // line 131
        echo ($context["sh_status"] ?? null);
        echo " poptin_registration\">
\t\t  <h2>Digital Marketers ♥ Poptin</h2>
\t\t  <div class=\"tinyborder\"></div>
\t\t  <div class=\"pcontent_in\">
\t\t\t <div class=\"cfedbak_list\">
\t\t\t\t<ul>
\t\t\t\t   <li>
\t\t\t\t\t  <div class=\"box client1\">
\t\t\t\t\t\t <div class=\"box_head\">
\t\t\t\t\t\t\t<img src=\"";
        // line 140
        echo ($context["module_img_dir"] ?? null);
        echo "profile1.png\" alt=\"\"  />
\t\t\t\t\t\t </div>
\t\t\t\t\t\t <!--head-->
\t\t\t\t\t\t <div class=\"clientboxtext\">
\t\t\t\t\t\t\t<h4>Michael Kamleitner</h4>
\t\t\t\t\t\t\t<h6>CEO, Walls.io</h6>
\t\t\t\t\t\t\t<p>Getting started with poptin was a breeze – we've implemented the widget and connected it to our newsletter within minutes. Our conversion rate skyrocketed! </p>
\t\t\t\t\t\t </div>
\t\t\t\t\t  </div>
\t\t\t\t   </li>
\t\t\t\t   <li>
\t\t\t\t\t  <div class=\"box client2\">
\t\t\t\t\t\t <div class=\"box_head\">
\t\t\t\t\t\t\t<img src=\"";
        // line 153
        echo ($context["module_img_dir"] ?? null);
        echo "profile2.png\" alt=\"\"  />
\t\t\t\t\t\t </div>
\t\t\t\t\t\t <!--head-->
\t\t\t\t\t\t <div class=\"clientboxtext\">
\t\t\t\t\t\t\t<h4>Deepak Shukla</h4>
\t\t\t\t\t\t\t<h6>CEO, Purr Traffic</h6>
\t\t\t\t\t\t\t<p>Been v.impressed with Poptin and the team behind it so far. Great responses times from support. The roadmap looks great. I highly recommend.  </p>
\t\t\t\t\t\t </div>
\t\t\t\t\t  </div>
\t\t\t\t   </li>
\t\t\t\t   <li>
\t\t\t\t\t  <div class=\"box client3\">
\t\t\t\t\t\t <div class=\"box_head\">
\t\t\t\t\t\t\t<img src=\"";
        // line 166
        echo ($context["module_img_dir"] ?? null);
        echo "profile3.png\" alt=\"\"  />
\t\t\t\t\t\t </div>
\t\t\t\t\t\t <!--head-->
\t\t\t\t\t\t <div class=\"clientboxtext\">
\t\t\t\t\t\t\t<h4>Michael Voiskoun</h4>
\t\t\t\t\t\t\t<h6>Marketing manager, Engie</h6>
\t\t\t\t\t\t\t<p>It's super easy to use, doesn't require any prior coding skill. The team at Poptin is really helpful, providing great support, and adding always more features!  </p>
\t\t\t\t\t\t </div>
\t\t\t\t\t  </div>
\t\t\t\t   </li>
\t\t\t\t</ul>
\t\t\t </div>
\t\t\t <!--/whychoose_list-->    
\t\t  </div>
\t\t  <!--/pcontent_in-->            \t
\t   </div>
\t   <!--/poptin_content-->
\t    <div class=\"poptin_content clients_feedback\">
\t\t  <h2>Let us know what you think <img class=\"emoji\" src=\"";
        // line 184
        echo ($context["module_img_dir"] ?? null);
        echo "1f642.svg\" alt=\"\"  /></h2>
\t\t  <div class=\"tinyborder\"></div>
\t\t  <div class=\"reviewbox\">
\t\t\t <div class=\"reviewtitle\">If Poptin already helped you to grow your business, please click on the button below and leave a positive review <img class=\"emoji\" src=\"";
        // line 187
        echo ($context["module_img_dir"] ?? null);
        echo "1f642.svg\" alt=\"\"  /></div>
\t\t\t <div class=\"reviewstars\"><img src=\"";
        // line 188
        echo ($context["module_img_dir"] ?? null);
        echo "stars.png\" alt=\"\"  /></div>
\t\t\t <div class=\"reviewlink\"><a href=\"https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=36155\" target=\"_blank\">Write a Review</a></div>
\t\t  </div>
\t\t  <!--/reviewbox-->            \t
\t   </div>
\t   <!--/poptin_content-->
\t   <div class=\"poptin_footer\">
\t\t  <div class=\"poptin_footer_img\">
\t\t\t <img class=\"normal_img parrot\" src=\"";
        // line 196
        echo ($context["module_img_dir"] ?? null);
        echo "parrot.png\" alt=\"\"  />
\t\t\t <img class=\"hover_img parrot\" src=\"";
        // line 197
        echo ($context["module_img_dir"] ?? null);
        echo "parrot.gif\" alt=\"\"  />
\t\t  </div>
\t\t  <h6>Visit us at <a href=\"https://www.poptin.com/?utm_source=opencart\" target=\"_blank\">poptin.com</a></h6>
\t   </div>
\t   <div class=\"modal fade whereis_myid\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t <div class=\"modal-content \">
\t\t\t\t<h4>Where is my user ID?</h4>
\t\t\t\t<div class=\"myid_list\">
\t\t\t\t   <div class=\"row\">
\t\t\t\t\t  <div class=\"col-sm-4\">
\t\t\t\t\t\t <div class=\"id_box\">
\t\t\t\t\t\t\t<div class=\"id_box_img\"><img src=\"";
        // line 209
        echo ($context["module_img_dir"] ?? null);
        echo "where-is-my-id-01.png\" alt=\"\"  /></div>
\t\t\t\t\t\t\t<p><strong>1.</strong> Go to your dashboard, in the top bar click on \"Settings\"</p>
\t\t\t\t\t\t </div>
\t\t\t\t\t\t <!--/id_box-->
\t\t\t\t\t  </div>
\t\t\t\t\t  <!--/col-4-->
\t\t\t\t\t  <div class=\"col-sm-4\">
\t\t\t\t\t\t <div class=\"id_box\">
\t\t\t\t\t\t\t<div class=\"id_box_img\"><img src=\"";
        // line 217
        echo ($context["module_img_dir"] ?? null);
        echo "where-is-my-id-02.png\" alt=\"\"  /></div>
\t\t\t\t\t\t\t<p><strong>2.</strong> Click on Profile </p>
\t\t\t\t\t\t </div>
\t\t\t\t\t\t <!--/id_box-->
\t\t\t\t\t  </div>
\t\t\t\t\t  <!--/col-4-->
\t\t\t\t\t  <div class=\"col-sm-4\">
\t\t\t\t\t\t <div class=\"id_box\">
\t\t\t\t\t\t\t<div class=\"id_box_img\"><img src=\"";
        // line 225
        echo ($context["module_img_dir"] ?? null);
        echo "where-is-my-id-03.png\" alt=\"\"  /></div>
\t\t\t\t\t\t\t<p><strong>3.</strong> Copy your user ID </p>
\t\t\t\t\t\t </div>
\t\t\t\t\t\t <!--/id_box-->
\t\t\t\t\t  </div>
\t\t\t\t\t  <!--/col-4-->
\t\t\t\t   </div>
\t\t\t\t</div>
\t\t\t\t<!--/myid_list-->
\t\t\t\t<div class=\"popup_down\">
\t\t\t\t   <div class=\"poptup_button\"><a href=\"#.\" data-dismiss=\"modal\" aria-label=\"Close\">Close</a></div>
\t\t\t\t</div>
\t\t\t </div>
\t\t  </div>
\t   </div>
\t   <!--/whereis_myid-->
\t    <div class=\"modal fade lookfamiliar\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t  <div class=\"modal-dialog modal-sm\" role=\"document\">
\t\t\t <div class=\"modal-content\">
\t\t\t\t<img class=\"poptin-parrot-makingsure-image\" src=\"";
        // line 244
        echo ($context["module_img_dir"] ?? null);
        echo "parrot-familiar.png\">
\t\t\t\t<h4>You look familiar</h4>
\t\t\t\t<p>You already have a Poptin account with this email address. </p>
\t\t\t\t<div class=\"popup_down\">
\t\t\t\t   <div class=\"poptup_button\"><a href=\"https://app.popt.in/login\" target=\"_blank\">Login</a></div>
\t\t\t\t   <a href=\"#.\" data-dismiss=\"modal\" aria-label=\"Close\">I'll stay</a>
\t\t\t\t</div>
\t\t\t </div>
\t\t  </div>
\t   </div>
\t   <!--/lookfamiliar-->
\t   <div class=\"modal fade oopsiewrongemailid\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t  <div class=\"modal-dialog modal-sm\" role=\"document\">
\t\t\t <div class=\"modal-content\">
\t\t\t\t<img class=\"poptin-parrot-makingsure-image\" src=\"";
        // line 258
        echo ($context["module_img_dir"] ?? null);
        echo "parrot-oopsie.png\">
\t\t\t\t<h4>Oopsie... wrong Email</h4>
\t\t\t\t<p>Please enter a valid Email Address.  </p>
\t\t\t\t<div class=\"popup_down\">
\t\t\t\t   <div class=\"poptup_button\"><a href=\"#.\" data-dismiss=\"modal\" aria-label=\"Close\">Try again</a></div>
\t\t\t\t</div>
\t\t\t </div>
\t\t  </div>
\t   </div>
\t   <!--/oopsiewrongid-->
\t   <div class=\"modal fade oopsiewrongid\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t  <div class=\"modal-dialog modal-sm\" role=\"document\">
\t\t\t <div class=\"modal-content\">
\t\t\t\t<img class=\"poptin-parrot-makingsure-image\" src=\"";
        // line 271
        echo ($context["module_img_dir"] ?? null);
        echo "parrot-oopsie.png\">
\t\t\t\t<h4>Oopsie... wrong ID</h4>
\t\t\t\t<p><a href=\"#\" class=\"poptin-lightbox-atag where-is-my-id-inside-lb wheremyid\" data-toggle=\"modal\" data-target=\".whereis_myid\">Where is my user ID?</a></p>
\t\t\t\t<div class=\"popup_down\">
\t\t\t\t   <div class=\"poptup_button\"><a href=\"#.\" data-dismiss=\"modal\" aria-label=\"Close\">Try again</a></div>
\t\t\t\t</div>
\t\t\t </div>
\t\t  </div>
\t   </div>
\t   <!--/oopsiewrongid-->
\t   <div class=\"modal fade deactivate_poptin_popup\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t  <div class=\"modal-dialog modal-sm\" role=\"document\">
\t\t\t <div class=\"modal-content\">
\t\t\t\t<img class=\"poptin-parrot-makingsure-image\" src=\"";
        // line 284
        echo ($context["module_img_dir"] ?? null);
        echo "parrot-making-sure.png\">
\t\t\t\t<h4>Just making sure</h4>
\t\t\t\t<p>Are you sure you want to <br /> remove Poptin? </p>
\t\t\t\t<div class=\"popup_down\">
\t\t\t\t   <div class=\"poptup_button\"><a href=\"#.\" data-toggle=\"modal\" data-target=\".byebyeModal\" class=\"pplogout1\" >Yes</a></div>
\t\t\t\t   <a href=\"#.\" data-dismiss=\"modal\" aria-label=\"Close\">I'll stay</a>
\t\t\t\t</div>
\t\t\t </div>
\t\t  </div>
\t   </div>
\t   <!--/deactivate_poptin_popup-->
\t   <div class=\"modal fade byebyeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
\t\t  <div class=\"modal-dialog modal-sm\" role=\"document\">
\t\t\t <div class=\"modal-content\">
\t\t\t\t<img class=\"poptin-parrot-byebye-image\" src=\"";
        // line 298
        echo ($context["module_img_dir"] ?? null);
        echo "parrot-bye-bye.png\">
\t\t\t\t<h4>Bye Bye</h4>
\t\t\t\t<p>Poptin snippet has been <br /> removed. See you around. </p>
\t\t\t\t<div class=\"popup_down\">
\t\t\t\t   <div class=\"poptup_button\"><a href=\"#.\" data-dismiss=\"modal\" aria-label=\"Close\">Close</a></div>
\t\t\t\t</div>
\t\t\t </div>
\t\t  </div>
\t   </div>
\t   <!--/byebyeModal-->
\t</div>
</div>
<script>
   \$(document).ready(function () {
   
   \t\$(\".wheremyid\").click(function(){
   \t\t\$('.oopsiewrongid').modal('hide');
   \t
   \t});
   \tfunction show_loader() {
   \t\t\$(\".poptin-overlay\").attr('style');
   \t\t\$(\".poptin-overlay\").css(\"display\", \"block\");
   \t\t\$(\".poptin-overlay\").fadeIn(500);
   \t}
   
   \tfunction hide_loader() {
   \t\t\$(\".poptin-overlay\").attr('style');
   \t\t\$(\".poptin-overlay\").fadeOut(500);
   \t\t\$(\".poptin-overlay\").css(\"display\", \"none\");
   \t}
   
   \tfunction isEmail(email) {
   \t\tvar regex = /^([a-zA-Z0-9_.+-])+\\@(([a-zA-Z0-9-])+\\.)+([a-zA-Z0-9]{2,4})+\$/;
   \t\treturn regex.test(email);
   \t}
   
   \tvar request_url = \"";
        // line 334
        echo ($context["module_ajax"] ?? null);
        echo "\";
   \t
       
       \$(\"#popin_id_register\").submit(function (event) {
   \t\tshow_loader();
   \t\tevent.preventDefault();
   \t\t
   \t\tvar pop_up_id = \$(\"#pop_up_id\").val();                if(/^[a-zA-Z0-9- ]*\$/.test(pop_up_id) == false) {            hide_loader();            \$('.oopsiewrongid').modal('show');            return false;        }                if(pop_up_id.length>10)
   \t\t{
   \t\t\t\$.ajax({
   \t\t\t\ttype: 'POST',
   \t\t\t\turl: request_url,
   \t\t\t\tdataType: \"json\",
   \t\t\t\tdata: {
   \t\t\t\t\ttype: 'save_poptin',
   \t\t\t\t\tpop_up_id: pop_up_id
   \t\t\t\t},
   \t\t\t\tcache: false,
   \t\t\t\tsuccess: function (response) {
   \t\t\t\t\thide_loader();
   \t\t\t\t\tconsole.log(response);
   \t\t\t\t\tif (response.status == '1') {
   \t\t\t\t\t\t\$(\".poptin_logged\").removeClass('hide');
   \t\t\t\t\t\t\$(\".poptin_registration\").removeClass('show');
   \t\t\t\t\t\t\$(\".poptin_registration\").addClass('hide');
   \t\t\t\t\t\t
   \t\t\t\t\t\t\$(\".with_token\").hide();
   \t\t\t\t\t\t\$(\".without_token\").show();
   \t\t\t\t\t\t
   \t\t\t\t\t} else {
   \t\t\t\t\t\tvar error_s = \"Someting Goes Wrong\";
   \t\t\t\t\t\tswal(\"Error\", error_s, \"error\");
   \t\t\t\t\t\t
   \t\t\t\t\t}
   
   \t\t\t\t},
   \t\t\t\terror: function (ts) {
   \t\t\t\t\thide_loader();
   \t\t\t\t\tswal(\"Error\", ts.responseText, \"error\");
   \t\t\t\t}
   \t\t\t});
   \t\t\t
   \t\t
   \t\t
   \t\t}else{
   \t\t\thide_loader();
   \t\t\t\$('.oopsiewrongid').modal('show');
   \t\t}
   \t});
   \t
   \t\$(\"#popin_signup\").submit(function (event) {
   \t\tevent.preventDefault();
   \t\tvar popin_email = \$(\"#popin_email\").val();
   \t\tif (!isEmail(popin_email)) {
   \t\t\tevent.preventDefault();
   \t\t\t\$(\".oopsiewrongemailid\").modal('show');
   \t\t\treturn false;
   \t\t} else {
   \t\t\tshow_loader();
   \t\t\t\$.ajax({
   \t\t\t\ttype: 'POST',
   \t\t\t\turl: request_url,
   \t\t\t\tdataType: \"json\",
   \t\t\t\tdata: {
   \t\t\t\t\ttype: 'register',
   \t\t\t\t\temail: popin_email
   \t\t\t\t},
   \t\t\t\tcache: false,
   \t\t\t\tsuccess: function (response) {
   \t\t\t\t\thide_loader();
   \t\t\t\t\tconsole.log(response);
   \t\t\t\t\tif (response.status == '1') {
   \t\t\t\t\t\t\$(\".poptin_logged\").removeClass('hide');
   \t\t\t\t\t\t\$(\".poptin_registration\").removeClass('show');
   \t\t\t\t\t\t\$(\".poptin_registration\").addClass('hide');
\t\t\t\t\t\t\$(\"#popin_email\").val('');
   \t\t\t\t\t\t
   \t\t\t\t\t\t\$(\".with_token\").show();
   \t\t\t\t\t\t\$(\".without_token\").hide();
                           
                           var new_url=\$(\".with_token\").attr('href')+\"&utm_source=opencart\";
                           \$(\".with_token\").attr('href',new_url);
                           
                           
   \t\t\t\t\t\t//location.reload();
   \t\t\t\t\t} else if (response.status == '0') {
   \t\t\t\t\t\t//alert(response.message);
   \t\t\t\t\t\t\$('.lookfamiliar').modal('show');
   \t\t\t\t\t} else {
   \t\t\t\t\t\tvar error_s = \"Someting Goes Wrong\";
   \t\t\t\t\t\tswal(\"Error\", error_s, \"error\");
   \t\t\t\t\t}
   
   \t\t\t\t},
   \t\t\t\terror: function (ts) {
   \t\t\t\t\thide_loader();
   \t\t\t\t\t//alert(ts.responseText);
   \t\t\t\t\tswal(\"Error\", ts.responseText, \"error\");
   \t\t\t\t}
   \t\t\t});
   \t\t}
   \t});
   
   \t\$(\".pplogout1\").click(function (event) {
         \$('.deactivate_poptin_popup').modal('hide');   
   \t\tevent.preventDefault();
   \t\t\$.ajax({
   \t\t\ttype: 'POST',
   \t\t\turl: request_url,
   \t\t\tdataType: \"json\",
   \t\t\tdata: {
   \t\t\t\ttype: 'remove'
   \t\t\t},
   \t\t\tcache: false,
   \t\t\tsuccess: function (response) {
   \t\t\t\tif (response.status == '1') {
   \t\t\t\t\t\$(\"#pop_up_id\").val('');
   
   \t\t\t\t\t\$(\".poptin_registration\").removeClass('hide');
   \t\t\t\t\t\$(\".poptin_registration\").addClass('show');
   
   \t\t\t\t\t\$(\".poptin_logged\").removeClass('show');
   \t\t\t\t\t\$(\".poptin_logged\").addClass('hide');
   \t\t\t\t\t\$('.byebyeModal').modal('show');
   \t\t\t\t}
   \t\t\t},
   \t\t\terror: function (ts) {
   \t\t\t\tswal(\"Error\", ts.responseText, \"error\");
   \t\t\t\t//alert(ts.responseText);
   \t\t\t}
   \t\t});
   
   \t});
   
   \t\$(\"#login_form\").click(function (event) {
   \t\tevent.preventDefault();
   \t\t\$(\".login_form\").attr(\"style\", \" \");
   \t\t\$(\".register_form\").attr(\"style\", \" \");
   
   \t\t\$(\".login_form\").css(\"display\", \"block\");
   \t\t\$(\".register_form\").css(\"display\", \"none\");
   \t});
   
   \t\$(\"#register_form\").click(function (event) {
   \t\tevent.preventDefault();
   \t\t\$(\".register_form\").attr(\"style\", \" \");
   \t\t\$(\".login_form\").attr(\"style\", \" \");
   
   \t\t\$(\".register_form\").css(\"display\", \"block\");
   \t\t\$(\".login_form\").css(\"display\", \"none\");
   \t});
       
     
   
   });
   
   
</script>
";
        // line 492
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/poptin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 492,  492 => 334,  453 => 298,  436 => 284,  420 => 271,  404 => 258,  387 => 244,  365 => 225,  354 => 217,  343 => 209,  328 => 197,  324 => 196,  313 => 188,  309 => 187,  303 => 184,  282 => 166,  266 => 153,  250 => 140,  238 => 131,  224 => 120,  215 => 114,  206 => 108,  197 => 102,  186 => 94,  172 => 83,  164 => 78,  158 => 77,  154 => 76,  146 => 71,  93 => 21,  88 => 19,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/poptin.twig", "");
    }
}
