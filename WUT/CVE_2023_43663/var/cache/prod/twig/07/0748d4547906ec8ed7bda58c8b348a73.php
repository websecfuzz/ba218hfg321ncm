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

/* __string_template__ee4128a40975583d4c792ff34bb12bf1 */
class __TwigTemplate_69444c93354ee44084d6d6d3bbdbe37e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Creating a new Customer • Fuzzer Test</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCustomers';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '8.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '7af73e5699bc6bd3de5646b047a87a46';
    var currentIndex = 'index.php?controller=AdminCustomers';
    var employee_token = '2c2e5c59df8417ddd23b779f0524c516';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin589euclusrd3dvesrax/index.php/improve/modules/manage?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg';
    var admin_notification_get_link = '/admin589euclusrd3dvesrax/index.php/common/notifications?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg';
    var admin_notification_push_link = adminNotificationPushLink = '/admin589euclusrd3dvesrax/index.php/common/notifications/ack?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg';
    var tab_modules_list = '';
    var update_success_msg = 'Update successf";
        // line 42
        echo "ul';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/admin589euclusrd3dvesrax/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin589euclusrd3dvesrax/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin589euclusrd3dvesrax/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin589euclusrd3dvesrax/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin589euclusrd3dvesrax\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin589euclusrd3dvesrax\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"sec";
        // line 67
        echo "ondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin589euclusrd3dvesrax/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin589euclusrd3dvesrax/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin589euclusrd3dvesrax/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin589euclusrd3dvesrax/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin589euclusrd3dvesrax/index.php/common/notifications?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en admincustomers\"
  data-base-url=\"/admin589euclusrd3dvesrax/index.php\"  data-token=\"aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminDashboard&amp;token=221be753f6b1c8e806a4e51784e52d71\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=2100c50ff2819dc471ec486cdcc12aaf\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php/improve/modules/manage?token=745d6abb2fb4829c30053902398a7024\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php/sell/catalog/categories/new?token=745d6abb2fb4829c30053902398a7024\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php/sell/catalog/products-v2/create?token=745d6abb2fb4829c30053902398a7024\"
                 data-item=";
        // line 137
        echo "\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=bea9de2c9375a45bc13b0e758aa2f851\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php/sell/orders?token=745d6abb2fb4829c30053902398a7024\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"28\"
        data-icon=\"icon-AdminParentCustomer\"
        data-method=\"add\"
        data-url=\"index.php/sell/customers/new\"
        data-post-link=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminQuickAccesses&token=21e7925cf1b87466c2500a984e8961be\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Customers - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminQuickAccesses&token=21e7925cf1b87466c2500a984e8961be\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin589euclusrd3dvesrax/index.php?controller=AdminSearch&amp;token=3636ac741c0a4ad9b1244781f10353c3\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
 ";
        // line 178
        echo "   <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value";
        // line 193
        echo "=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=2100c50ff2819dc471ec486cdcc12aaf\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php/improve/modules/manage?token=745d6abb2fb4829c30053902398a7024\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php/sell/catalog/categories/new?token=745d6abb2fb4829c30053902398a7024\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php/sell/catalog/products-v2/create?token=745d6abb2fb4829c30053902398a7024\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=bea9de2c9375a45bc13b0e758aa2f851\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-li";
        // line 232
        echo "nk\"
       href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php/sell/orders?token=745d6abb2fb4829c30053902398a7024\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"58\"
      data-icon=\"icon-AdminParentCustomer\"
      data-method=\"add\"
      data-url=\"index.php/sell/customers/new\"
      data-post-link=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminQuickAccesses&token=21e7925cf1b87466c2500a984e8961be\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Customers - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminQuickAccesses&token=21e7925cf1b87466c2500a984e8961be\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8088/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"";
        // line 279
        echo "notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=37f1987169ac2827225652029cff5e8d\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
           ";
        // line 330
        echo "   No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8088/img/pr/default.jpg\" alt=\"Fuzzer\" /></span>
        <span class=\"employee_p";
        // line 380
        echo "rofile\">Welcome back Fuzzer</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/employees/1/edit?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminLogin&amp;logout=1&amp;token=199a78c3d6ba4df9a6da02d82aa54d54\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/employees/toggle-navigation?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminDashboard&amp;token=221be753f6b1c8e806a4e51784e52d71\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminDashboard&amp;token=221be753f6b1c8e806a4e51784e52d71\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                       ";
        // line 428
        echo "   
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/sell/orders/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/orders/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/orders/invoices/?_token=aS_M3kCVQL";
        // line 462
        echo "QbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/orders/credit-slips/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/orders/delivery-slips/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCarts&amp;token=37f1987169ac2827225652029cff5e8d\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
            ";
        // line 495
        echo "      
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/sell/catalog/products?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/catalog/products?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/catalog/categories?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                   ";
        // line 525
        echo "         
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/catalog/monitoring/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminAttributesGroups&amp;token=ee5672cc7ec5bb50c2be000c514c5195\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/catalog/brands/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/attachments/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Files
                                </a>
                          ";
        // line 553
        echo "    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCartRules&amp;token=bea9de2c9375a45bc13b0e758aa2f851\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/stocks/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/sell/customers/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                              ";
        // line 584
        echo "      keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/customers/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/addresses/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCustomerThreads&amp;token=4286f5a0a1a6367c10fc108c129864d0\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer ";
        // line 614
        echo "Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCustomerThreads&amp;token=4286f5a0a1a6367c10fc108c129864d0\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/sell/customer-service/order-messages/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminReturn&amp;token=01037e18197c0018a9cf3825d0d88488\" class=\"link\"> Merchandise Returns
          ";
        // line 642
        echo "                      </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminStats&amp;token=2100c50ff2819dc471ec486cdcc12aaf\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/improve/modules/manage?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-ic";
        // line 682
        echo "ons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/modules/manage?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/improve/design/themes/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                             ";
        // line 712
        echo "                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"125\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/design/themes/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/design/mail_theme/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/design/cms-pages/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/design/modules/positions/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=";
        // line 740
        echo "\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminImages&amp;token=1295fdd02ee4306649ac1a51408de28d\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/modules/link-widget/list?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCarriers&amp;token=3cef3f07d7dd55bc122f1edfe842874a\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                    ";
        // line 773
        echo "                                                keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminCarriers&amp;token=3cef3f07d7dd55bc122f1edfe842874a\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/shipping/preferences/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/improve/payment/payment_methods?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
   ";
        // line 804
        echo "                   </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/payment/payment_methods?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/payment/preferences?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/improve/international/localization/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhq";
        // line 833
        echo "pDpg\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/international/localization/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/international/zones/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin589euclusrd3dvesrax/index.ph";
        // line 863
        echo "p/improve/international/taxes/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/improve/international/translations/settings?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/configure/shop/preferences/preferences?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                     ";
        // line 900
        echo "       </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/shop/preferences/preferences?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/shop/order-preferences/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/shop/product-preferences/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-Ad";
        // line 929
        echo "minParentCustomerPreferences\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/shop/customer-preferences/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/shop/contacts/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/shop/seo-urls/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminSearchConf&amp;token=829fa6ae83a3103adde07994db959e53\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </u";
        // line 958
        echo "l>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/system-information/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/system-information/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/performance/?_token=aS_M3kCVQLQbsP4WSFcy6";
        // line 987
        echo "_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/administration/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/emails/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/import/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmpl";
        // line 1018
        echo "oyees\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/employees/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/sql-requests/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/logs/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/webservice-keys/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                     ";
        // line 1047
        echo "                                                                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/feature-flags/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin589euclusrd3dvesrax/index.php/configure/advanced/security/?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Customers</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Creating a new Customer          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
   ";
        // line 1100
        echo "                data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin589euclusrd3dvesrax/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminCustomers%253Fversion%253D8.1.1%2526country%253Den/Help?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin589euclusrd3dvesrax/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminCustomers%253Fversion%253D8.1.1%2526country%253Den/Help?_token=aS_M3kCVQLQbsP4WSFcy6_UhVFvdRdKfdEZsMhqpDpg\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1149
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost:8088/admin589euclusrd3dvesrax/index.php?controller=AdminDashboard&amp;token=221be753f6b1c8e806a4e51784e52d71\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1183
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1149
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1183
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__ee4128a40975583d4c792ff34bb12bf1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1344 => 1183,  1323 => 1149,  1312 => 102,  1303 => 1183,  1263 => 1149,  1212 => 1100,  1157 => 1047,  1126 => 1018,  1093 => 987,  1062 => 958,  1031 => 929,  1000 => 900,  961 => 863,  929 => 833,  898 => 804,  865 => 773,  830 => 740,  800 => 712,  768 => 682,  726 => 642,  696 => 614,  664 => 584,  631 => 553,  601 => 525,  569 => 495,  534 => 462,  498 => 428,  448 => 380,  396 => 330,  343 => 279,  294 => 232,  253 => 193,  236 => 178,  193 => 137,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ee4128a40975583d4c792ff34bb12bf1", "");
    }
}
